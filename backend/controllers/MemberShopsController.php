<?php

namespace backend\controllers;

use Yii;
use common\models\MemberShops;
use common\models\MemberShopsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Intervention\Image\ImageManagerStatic;
use trntv\filekit\actions\DeleteAction;
use trntv\filekit\actions\UploadAction;
use yii\imagine\Image;

/**
 * MemberShopsController implements the CRUD actions for MemberShops model.
 */
class MemberShopsController extends Controller {

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
     * Lists all MemberShops models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new MemberShopsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MemberShops model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new MemberShops model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new MemberShops();
        $loaded = $model->load(Yii::$app->request->post());
        if ($loaded) {
            $pic = Yii::$app->request->post('MemberShops');
            if (isset($pic['pic']['path'])) {
                $model->shop_document = $pic['pic']['path'];
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
     * Updates an existing MemberShops model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $loaded = $model->load(Yii::$app->request->post());
        if ($loaded) {
            $pic = Yii::$app->request->post('MemberShops');
            if (isset($pic['pic']['path'])) {
                $model->shop_document = $pic['pic']['path'];
            }
            if (isset($pic['pic']['base_url'])) {
                $model->photo_path = $pic['pic']['base_url'];
            }
        }
        if ($loaded && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }
            public function actionShops($q = null, $id = null,$member = null) {
        //\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $out = ['results' => ['id' => '', 'text' => '']];
        if (!is_null($q)) {
            $query = new \yii\db\Query;
            $query->select('id, shop_no AS text')
                    ->from('member_shops')
                    ->where(['like', 'shop_no', $q])
                    ->limit(20);
            if($member){
                $query->andWhere('member_id='.$member);
            }
            $command = $query->createCommand();
            $data = $command->queryAll();
            
            $out['results'] = array_values($data);
        } elseif ($id > 0) {
            $out['results'] = ['id' => $id, 'text' => Customer::find($id)->name];
        }
        echo json_encode($out);
    }

    /**
     * Deletes an existing MemberShops model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MemberShops model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MemberShops the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = MemberShops::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
