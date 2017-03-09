<?php

namespace backend\controllers;

use Yii;
use common\models\MemberPlots;
use common\models\Units;
use common\models\MemberPlotsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
//use Intervention\Image\ImageManagerStatic;
use trntv\filekit\actions\DeleteAction;
use trntv\filekit\actions\UploadAction;
//use yii\imagine\Image;
use yii\data\SqlDataProvider;
/**
 * MemberPlotsController implements the CRUD actions for MemberPlots model.
 */
class MemberPlotsController extends Controller {

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
     * Lists all MemberPlots models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new MemberPlotsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }
    // up coming payments notify 15 days ealier
public function actionDue()
{


    $totalCount = Yii::$app->db->createCommand('SELECT COUNT(*) member_plots')->queryScalar();

    $dataProvider = new SqlDataProvider([
        'sql' => 'SELECT mp.id as unitid,m.full_name as name,u.unit_no as unitno,datediff(curdate(),last_day(`date_as_on`)) as datedif,mp.payment_mode,
case mp.payment_mode 
when 39 then 365
when 40 then 30
when 41 then 90 end as modeDays,
(datediff(curdate(),last_day(`date_as_on`))) - (case mp.payment_mode 
when 39 then 365
when 40 then 30
when 41 then 90 end) as overDays,
max(date_as_on)
FROM `member_plot_ledger`pl
inner join member_plots mp on pl.unit_id = mp.unit_id
inner join members m on pl.member_id = m.id
inner join units u on pl.unit_id = u.id
where (case mp.payment_mode 
when 39 then 365
when 40 then 30
when 41 then 90 end) < 15
group by m.full_name,u.unit_no',
        'totalCount' => $totalCount,
        'sort' =>false,
        'pagination' => [
            'pageSize' => 10,
        ],
    ]);

    return $this->render('due', [
        'dataProvider' => $dataProvider,
    ]);
}
public function actionOverDue()
{

    $totalCount = Yii::$app->db->createCommand('SELECT COUNT(*) member_plots')->queryScalar();

    $dataProvider = new SqlDataProvider([
        'sql' => 'SELECT m.first_name as name,u.unit_no as unitno,datediff(curdate(),last_day(`date_as_on`)) as datedif,mp.payment_mode,
case mp.payment_mode 
when 39 then 365
when 40 then 30
when 41 then 90 end as modeDays,
(datediff(curdate(),last_day(`date_as_on`))) - (case mp.payment_mode 
when 39 then 365
when 40 then 30
when 41 then 90 end) as overDays,
max(date_as_on)
FROM `member_plot_ledger`pl
inner join member_plots mp on pl.unit_id = mp.unit_id
inner join members m on pl.member_id = m.id
inner join units u on pl.unit_id = u.id
where (case mp.payment_mode 
when 39 then 365
when 40 then 30
when 41 then 90 end) < (datediff(curdate(),`date_as_on`))
group by m.first_name,u.unit_no',
        'totalCount' => $totalCount,
        'sort' =>false,
        'pagination' => [
            'pageSize' => 10,
        ],
    ]);

    return $this->render('over_due', [
        'dataProvider' => $dataProvider,
    ]);
}
    public function actionPlots($q = null, $id = null,$member = null) {
        //\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $out = ['results' => ['id' => '', 'text' => '']];
        if (!is_null($q)) {
            $query = new \yii\db\Query;
            $query->select('id, unit_no AS text')
                    ->from('units')
                    ->where(['like', 'unit_no', $q])
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
     * Displays a single MemberPlots model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new MemberPlots model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
       // var_dump($_POST);exit;
        $model = new MemberPlots();
        $loaded = $model->load(Yii::$app->request->post());
        if ($loaded) {
            $pic = Yii::$app->request->post('MemberPlots');
            if (isset($pic['pic']['path'])) {
                $model->plot_document = $pic['pic']['path'];
            }
            if (isset($pic['pic']['base_url'])) {
                $model->photo_path = $pic['pic']['base_url'];
            }
            if(Yii::$app->user->can('user') && !Yii::$app->user->can('manager') && !Yii::$app->user->can('administrator')){
           // $member_id= new MemberPlots();
           // if(!empty($model->member_id)){
            $model->member_id=Yii::$app->user->ID;
            $model->status=0;
           // }
            //$this->member_id=$id;
            // var_dump($model->member_id);exit;
         }
            
        }
//         if(Yii::$app->user->can('user')){
//                $model->member_id=Yii::$app->user->ID;
//            }
        if ($loaded && $model->save()){
            
            if($model->unit_id){
               // var_dump($model->unit_id);exit;
            $modelUnit= Units::find()->where(['id' => $model->unit_id])->one();
            $modelUnit->is_sold=32;
            $modelUnit->save();
           //var_dump($query->prepare(Yii::$app->db->queryBuilder)->createCommand()->rawSql);
            //exit();
            return $this->redirect(['view', 'id' => $model->id]);
            }
            
            } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing MemberPlots model.
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
     * Deletes an existing MemberPlots model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MemberPlots model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MemberPlots the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = MemberPlots::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
