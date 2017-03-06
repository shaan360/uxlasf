<?php

namespace backend\controllers;

use Yii;
use common\models\MemberAppartments;
use common\models\MemberAppartmentsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Intervention\Image\ImageManagerStatic;
use trntv\filekit\actions\DeleteAction;
use trntv\filekit\actions\UploadAction;
use yii\imagine\Image;

/**
 * MemberAppartmentsController implements the CRUD actions for MemberAppartments model.
 */
class MemberAppartmentsController extends Controller {

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

    public function actions() {
        return [
            'photo-upload' => [
                'class' => UploadAction::className(),
                'deleteRoute' => 'photo-delete',
                'on afterSave' => function ($event) {
                    /* @var $file \League\Flysystem\File */
                    $file = $event->file;
                }
            ],
            'photo-delete' => [
                'class' => DeleteAction::className()
            ]
        ];
    }

    /**
     * Lists all MemberAppartments models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new MemberAppartmentsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }
        public function actionApartments($q = null, $id = null,$member = null) {
  
            //\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $out = ['results' => ['id' => '', 'text' => '']];
        if (!is_null($q)) {
            $query = new \yii\db\Query;
            $query->select('id,	unit_no AS text')
                    ->from('member_appartments')
                    ->where(['like','unit_no', $q])
                    ->limit(20);
//             var_dump($query->prepare(Yii::$app->db->queryBuilder)->createCommand()->rawSql);
//exit();
//            if($member){
//                $query->andWhere('member_id='.$member);
//            }
            $command = $query->createCommand();
            $data = $command->queryAll();
            var_dump($data);exit;
            $out['results'] = array_values($data);
        } elseif ($id > 0) {
            $out['results'] = ['id' => $id, 'text' => Customer::find($id)->name];
        }
        echo json_encode($out);
    }

    /**
     * Displays a single MemberAppartments model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new MemberAppartments model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new MemberAppartments();
        $loaded = $model->load(Yii::$app->request->post());
        if ($loaded) {
            $pic = Yii::$app->request->post('MemberAppartments');
            if (isset($pic['pic']['path'])) {
                $model->apartment_document = $pic['pic']['path'];
            }
            if (isset($pic['pic']['base_url'])) {
                $model->photo_path = $pic['pic']['base_url'];
            }
        }
        if ($loaded && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing MemberAppartments model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing MemberAppartments model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MemberAppartments model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MemberAppartments the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = MemberAppartments::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
