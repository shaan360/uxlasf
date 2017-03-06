<?php

namespace backend\controllers;

use Yii;
use common\models\MemberPlotLedger;
use common\models\MemberPlotLedgerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MemberPlotLedgerController implements the CRUD actions for MemberPlotLedger model.
 */
class MemberPlotLedgerController extends Controller
{
    public function behaviors()
    {
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
     * Lists all MemberPlotLedger models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MemberPlotLedgerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
//var_dump($dataProvider);exit;
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionAmountReceived()
    {
       // echo "yesss";exit;
        $searchModel = new MemberPlotLedgerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
//var_dump($dataProvider);exit;
        return $this->render('received_amount', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
        public function actionAmountDue()
    {
        $model2= \common\models\MemberPlots::find()->all();
        $searchModel = new MemberPlotLedgerSearch();
        //var_dump($model2);exit;
        foreach ($model2 as $key=>$mod){
            $id= $mod->unit_id;
           // print_r($id);
            $query = $searchModel->find()->where('unit_id !='.$id);
           var_dump($dataProvider->prepare(Yii::$app->db->queryBuilder)->createCommand()->rawSql);
           // exit();
          // echo '<pre>';
           //print_r($dataProvider);
        }
        return $this->render('due_amount', [
            'searchModel' => $model2,
            'dataProvider' => $dataProvider,
        ]);
    }
   
    /**
     * Displays a single MemberPlotLedger model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        
        return $this->render('view', [
            'model' => $this->findModel($id),
           
        ]);
    }
    public function actionDueView($id)
    {
        
        return $this->render('due_view', [
            'model' => $this->findModel($id),
           
        ]);
    }

    /**
     * Creates a new MemberPlotLedger model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        //echo '<pre>';
        //print_r($_POST);exit;
        $model = new MemberPlotLedger();
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                
            ]);
        }
    }

    /**
     * Updates an existing MemberPlotLedger model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $loaded = $model->load(Yii::$app->request->post());
//        if($loaded){
//           // var_dump($model);
//           // exit();
//        }
        if ($loaded && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing MemberPlotLedger model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MemberPlotLedger model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MemberPlotLedger the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MemberPlotLedger::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
