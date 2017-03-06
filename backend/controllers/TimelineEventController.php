<?php

namespace backend\controllers;

use Yii;
use backend\models\search\TimelineEventSearch;
use yii\web\Controller;

/**
 * Application timeline controller
 */
class TimelineEventController extends Controller
{
    public $layout = 'common';
    /**
     * Lists all TimelineEvent models.
     * @return mixed
     */
    public function beforeAction($action)
    {
        //var_dump(Yii::$app->user->can('page'));
        //exit();
        //$this->layout = Yii::$app->user->isGuest || !Yii::$app->user->can('loginToBackend') ? 'base' : 'common';
        return parent::beforeAction($action);
    }
    public function actionIndex()
    {
        $searchModel = new \common\models\MemberPlotsSearch();
        
        $dataProvider = $searchModel->getdailysales(Yii::$app->request->queryParams);
        //var_dump($dataProvider);exit;
        $dataProvider->sort = [
            'defaultOrder'=>['created_at'=>SORT_DESC]
        ];

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    public function getdailysales(){
        $searchModel = new \common\models\MemberPlotsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        var_dump($dataProvider);exit;
    }
}
