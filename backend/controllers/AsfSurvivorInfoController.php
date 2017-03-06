<?php

namespace backend\controllers;

use Yii;
use common\models\AsfSurvivorInfo;
use common\models\AsfSurvivorInfoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Intervention\Image\ImageManagerStatic;
use trntv\filekit\actions\DeleteAction;
use trntv\filekit\actions\UploadAction;
/**
 * AsfSurvivorInfoController implements the CRUD actions for AsfSurvivorInfo model.
 */
class AsfSurvivorInfoController extends Controller
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
     * Lists all AsfSurvivorInfo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AsfSurvivorInfoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AsfSurvivorInfo model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new AsfSurvivorInfo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AsfSurvivorInfo();
          $loaded = $model->load(Yii::$app->request->post());
          var_dump($loaded);
        if ($loaded) {
        
            $pic = Yii::$app->request->post('AsfSurvivorInfo');
            
            if (isset($pic['pic']['path'])) {
                $model->pictureFile = $pic['pic']['path'];
            }
            if (isset($pic['pic']['base_url'])) {
                $model->file_path = $pic['pic']['base_url'];
            }
            if (isset($pic['pic2']['path'])) {
                $model->firFile = $pic['pic']['path'];
            }
            if (isset($pic['pic3']['path'])) {
                $model->medicalFile = $pic['pic']['path'];
            }
            if (isset($pic['pic4']['path'])) {
                $model->otherFile = $pic['pic']['path'];
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
     * Updates an existing AsfSurvivorInfo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
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
     * Deletes an existing AsfSurvivorInfo model.
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
     * Finds the AsfSurvivorInfo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AsfSurvivorInfo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AsfSurvivorInfo::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
