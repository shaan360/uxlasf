<?php

namespace backend\controllers;

use Yii;
use common\models\InstallmentPlan;
use common\models\InstallmentPlanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InstallmentPlanController implements the CRUD actions for InstallmentPlan model.
 */
class InstallmentPlanController extends Controller {

    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all InstallmentPlan models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new InstallmentPlanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single InstallmentPlan model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }
 public function actionCreate() {
        $model = new InstallmentPlan();
        $loaded = $model->load(Yii::$app->request->post());
        if ($loaded && $model->save()) {
         
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }
    /**
     * Creates a new InstallmentPlan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreatex() {
        $model = new InstallmentPlan();
        $loaded = $model->load(Yii::$app->request->post());
        if ($loaded && $model->save()) {
            $schedules = Yii::$app->request->post('Schedule');
            $scheduleModel = new \common\models\InstallmentPlanSchedule();
            foreach ($schedules as $schedule) {
                $scheduleModel->isNewRecord = true;
                $scheduleModel->id = NULL;
                $scheduleModel->installment_plan_id = $model->id;
                $scheduleModel->type = $schedule['type'];
                $scheduleModel->number_of_beds = $schedule['installment_beds'];
                $scheduleModel->size = $schedule['installment_size'];
                $scheduleModel->price = $schedule['installment_price'];
                $scheduleModel->downpayment = $schedule['installment_down_payment'];
                $scheduleModel->months_36_installment = $schedule['installment_36month'];
                $scheduleModel->quaterly_installment = $schedule['installment_quarterly'];
                $scheduleModel->save();
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    
     public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
           
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }/**
     * Updates an existing InstallmentPlan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdatex($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            \common\models\InstallmentPlanSchedule::deleteAll('installment_plan_id=' . $model->id);
            $schedules = Yii::$app->request->post('Schedule');
            $scheduleModel = new \common\models\InstallmentPlanSchedule();
            foreach ($schedules as $schedule) {
                $scheduleModel->isNewRecord = true;
                $scheduleModel->id = NULL;
                $scheduleModel->installment_plan_id = $model->id;
                $scheduleModel->type = $schedule['type'];
                $scheduleModel->number_of_beds = $schedule['installment_beds'];
                $scheduleModel->size = $schedule['installment_size'];
                $scheduleModel->price = $schedule['installment_price'];
                $scheduleModel->downpayment = $schedule['installment_down_payment'];
                $scheduleModel->months_36_installment = $schedule['installment_36month'];
                $scheduleModel->quaterly_installment = $schedule['installment_quarterly'];
                $scheduleModel->save();
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing InstallmentPlan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionPlans($q = null, $id = null) {
        //\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $out = ['results' => ['id' => '', 'text' => '']];
        if (!is_null($q)) {
            $query = new \yii\db\Query;
            $query->select('id, installment_plan_name AS text')
                    ->from('installment_plan')
                    ->where(['like', 'installment_plan_name', $q])
                    ->limit(20);
           
            $command = $query->createCommand();
            $data = $command->queryAll();
            $out['results'] = array_values($data);
        } elseif ($id > 0) {
            $out['results'] = ['id' => $id, 'text' => InstallmentPlan::find($id)->installment_plan_name];
        }
        echo json_encode($out);
    }
    public function actionPlanTypes($q = null, $id = null) {
        //\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $out = ['results' => ['id' => '', 'text' => '']];
        if (!is_null($q)) {
            $query = new \yii\db\Query;
            $query->select('id, type AS text')
                    ->from('installment_plan_schedule')
                    ->where(['like', 'type', $q])
                    ->limit(20);
           
            $command = $query->createCommand();
            $data = $command->queryAll();
            $out['results'] = array_values($data);
        } elseif ($id > 0) {
            $out['results'] = ['id' => $id, 'text' => \common\models\InstallmentPlanSchedule::find($id)->type];
        }
        echo json_encode($out);
    }
    /**
     * Finds the InstallmentPlan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return InstallmentPlan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = InstallmentPlan::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
