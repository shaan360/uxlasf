<?php

namespace backend\controllers;

use Yii;
use common\models\Members;
use common\models\MembersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Intervention\Image\ImageManagerStatic;
use trntv\filekit\actions\DeleteAction;
use trntv\filekit\actions\UploadAction;
use yii\imagine\Image;

/**
 * MembersController implements the CRUD actions for Members model.
 */
class MembersController extends Controller {

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
                    $img = ImageManagerStatic::make($file->read());
                    //$img = ImageManagerStatic::make($file->read())->fit(215, 215);
                    $file->put($img->encode());
                }
            ],
            'photo-delete' => [
                'class' => DeleteAction::className()
            ]
        ];
    }

    /**
     * Lists all Members models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new MembersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Members model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Members model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
       // var_dump(Yii::$app->request->post());
        $model = new Members();
        $loaded = $model->load(Yii::$app->request->post());
        if ($loaded) {
        
            $pic = Yii::$app->request->post('Members');
            
            if (isset($pic['pic']['path'])) {
                $model->photo = $pic['pic']['path'];
            }
            if (isset($pic['pic']['base_url'])) {
                $model->photo_path = $pic['pic']['base_url'];
            }
            if (isset($pic['pic2']['path'])) {
                $model->application_document = $pic['pic']['path'];
            }
            if (isset($pic['pic3']['path'])) {
                $model->member_cnic = $pic['pic']['path'];
            }
            if (isset($pic['pic4']['path'])) {
                $model->nominee_cnic_scan = $pic['pic']['path'];
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
     * Updates an existing Members model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
       // echo '<pre>';
        //print_r($_POST);exit;
         //  var_dump(Yii::$app->request->post());
        $model = $this->findModel($id);
        $loaded = $model->load(Yii::$app->request->post());
        if ($loaded) {
            $pic = Yii::$app->request->post('Members');
            if (isset($pic['pic']['path'])) {
                $model->photo = $pic['pic']['path'];
            }
            if (isset($pic['pic']['base_url'])) {
                $model->photo_path = $pic['pic']['base_url'];
            }
            if (isset($pic['pic2']['path'])) {
                $model->application_document = $pic['pic']['path'];
            }
            if (isset($pic['pic3']['path'])) {
                $model->member_cnic = $pic['pic']['path'];
            }
            if (isset($pic['pic4']['path'])) {
                $model->nominee_cnic_scan = $pic['pic']['path'];
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

    public function actionMembers($q = null, $id = null) {
        //\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $out = ['results' => ['id' => '', 'text' => '']];
        if (!is_null($q)) {
            $query = new \yii\db\Query;
            $query->select('id, concat([[full_name]],concat("-",[[membership_number]])) AS text')
                    ->from('members')
                    ->where(['like', 'full_name', $q])
                    ->orWhere(['like', 'membership_number', $q])
                    ->limit(20);
            $command = $query->createCommand();
            $data = $command->queryAll();
            $out['results'] = array_values($data);
        } elseif ($id > 0) {
            $out['results'] = ['id' => $id, 'text' => Customer::find($id)->name];
        }
        echo json_encode($out);
    }

    /**
     * Deletes an existing Members model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {

        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Members model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Members the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Members::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
