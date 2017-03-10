<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\AsfSurvivorInfo */

$this->title = "Survivor Profile";
$this->params['breadcrumbs'][] = ['label' => 'Asf Survivor Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
 <div class="col-md-4">

          <!-- Profile Image -->
          <div class="box box-primary">
              <div class="box-body box-profile" style="background-color: white">
              <img class="profile-user-img img-responsive img-circle" src="<?= $model->file_path."/".$model->pictureFile ?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?= $model->first_name." ".$model->last_name?></h3>

              <p class="text-muted text-center">Software Engineer</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Survivor ID</b> <a class="pull-right"><?= $model->survivor_id?></a>
                </li>
                <li class="list-group-item">
                  <b>Attack ID</b> <a class="pull-right"><?= $model->attack_id?></a>
                </li>
                <li class="list-group-item">
                  <b>CNIC</b> <a class="pull-right"><?= $model->cnic?></a>
                </li>
                <li class="list-group-item">
                  <b>Contact Number</b> <a class="pull-right"><?= $model->contact_phone?></a>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
<div class="col-md-8">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Survivior Info</a></li>
              <li><a href="#timeline" data-toggle="tab">Asf Info</a></li>
              <li><a href="#settings" data-toggle="tab">Perpetrator info</a></li>
              <li><a href="#other" data-toggle="tab">Other info</a></li>
            </ul>
            <div class="tab-content">
       <div class="active tab-pane" id="activity">
                <!-- Post -->
               
       <?php echo DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            //'attack_id',
            //'survivor_id',
            'first_name',
            'middle_name',
            'last_name',
            'father_name',
            'cnic',
            'gender',
            'accident_suicide',
            'survivor_stat',
            //'asf_reported_day',
            //'asf_reported_month',
            //'asf_reported_mon',
            //'asf_reported_year',
            //'asf_assisted',
           
            //'cnic_availible',
            
            //'incident_date',
            //'before_year',
            //'attacked_age',
            //'maturity',
            //'incident_place',
            //'incident_area',
            //'incident_province',
            //'incident_district',
            //'incident_city',
            //'attack_number',
            //'victim_number',
            //'victim_perpetrator',
            'attack_reason:ntext',
            //'allegated_number',
            //'allegated_names',
            'contact_phone',
            'birth_day',
            //'birth_month',
            //'birth_year',
            'current_age',
            'survivor_address',
            'address_street',
            //'follow_up_visit',
            //'case_registered',
            //'lawyer_provided',
            //'panel_code_section',
            //'case_number',
            //'other_panel_section',
//            'asf_legel_support',
//            'follow_up_call',
//            'verdict_date',
//            'actual_perpetrator_different',
//            'actual_perpetrator',
//            'conviction_date',
//            'convicted',
//            'verdict',
//            'fir_number',
//            'lawyer_name',
//            'literate',
//            'fir_date',
//            'address_province',
//            'address_city',
//            'address_district',
//            'fir_registered',
//            'police_station',
//            'other_document',
//            'medical_legal_certificate',
           // 'picture',
            //'fir',
          //  'comments_remarks:ntext',
            //'pictureFile',
            //'firFile',
            //'file_path',
            //'medicalFile',
            //'otherFile',
//            'court_settlement',
//            'settlement_agreement',
//            'settlement_monetary',
//            'monetary_amount',
        ],
    ]) ?>
             

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                 <?php echo DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'id',
            'attack_id',
            'survivor_id',
            'accident_suicide',
            'survivor_stat',
            'asf_reported_day',
            'asf_reported_month',
            'asf_reported_mon',
            'asf_reported_year',
            'asf_assisted',
            'first_name',
           // 'middle_name',
            'last_name',
            //'cnic_availible',
            'cnic',
            //'gender',
            'incident_date',
            'before_year',
            'attacked_age',
            'maturity',
            //'incident_place',
            //'incident_area',
//            'incident_province',
//            'incident_district',
//            'incident_city',
            'attack_number',
            'victim_number',
//            'victim_perpetrator',
//            'attack_reason:ntext',
//            'allegated_number',
//            'allegated_names',
//            'contact_phone',
//            'birth_day',
//            'birth_month',
//            'birth_year',
//            'current_age',
            'survivor_address',
            'address_street',
           // 'follow_up_visit',
            'case_registered',
            'lawyer_provided',
            'panel_code_section',
            'case_number',
            'other_panel_section',
            'asf_legel_support',
            //'follow_up_call',
            //'verdict_date',
            //'actual_perpetrator_different',
           // 'actual_perpetrator',
           // 'conviction_date',
           // 'convicted',
           // 'verdict',
            'fir_number',
            'lawyer_name',
            //'literate',
            'fir_date',
            'address_province',
            'address_city',
            'address_district',
            //'father_name',
            'fir_registered',
            'police_station',
           // 'other_document',
           // 'medical_legal_certificate',
           // 'picture',
            //'fir',
            //'comments_remarks:ntext',
            //'pictureFile',
            //'firFile',
            //'file_path',
            //'medicalFile',
            //'otherFile',
            'court_settlement',
            'settlement_agreement',
            'settlement_monetary',
            'monetary_amount',
        ],
    ]) ?>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <?php echo DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
//            'attack_id',
//            'survivor_id',
//            'accident_suicide',
//            'survivor_stat',
//            'asf_reported_day',
//            'asf_reported_month',
//            'asf_reported_mon',
//            'asf_reported_year',
//            'asf_assisted',
//            'first_name',
//            'middle_name',
//            'last_name',
//            'cnic_availible',
//            'cnic',
//            'gender',
//            'incident_date',
//            'before_year',
//            'attacked_age',
//            'maturity',
            'incident_place',
            'incident_area',
            'incident_province',
            'incident_district',
            'incident_city',
            'attack_number',
            'victim_number',
            'victim_perpetrator',
            'attack_reason:ntext',
            'allegated_number',
            'allegated_names',
            'contact_phone',
//            'birth_day',
//            'birth_month',
//            'birth_year',
//            'current_age',
//            'survivor_address',
//            'address_street',
//            'follow_up_visit',
//            'case_registered',
//            'lawyer_provided',
//            'panel_code_section',
//            'case_number',
//            'other_panel_section',
//            'asf_legel_support',
           // 'follow_up_call',
            'verdict_date',
            'actual_perpetrator_different',
            'actual_perpetrator',
            'conviction_date',
            'convicted',
            'verdict',
            'fir_number',
            //'lawyer_name',
            //'literate',
            'fir_date',
//            'address_province',
//            'address_city',
//            'address_district',
//            'father_name',
            'fir_registered',
            'police_station',
          //  'other_document',
            //'medical_legal_certificate',
           // 'picture',
            //'fir',
           // 'comments_remarks:ntext',
            //'pictureFile',
            //'firFile',
            //'file_path',
            //'medicalFile',
            //'otherFile',
//            'court_settlement',
//            'settlement_agreement',
//            'settlement_monetary',
//            'monetary_amount',
        ],
    ]) ?>
              </div>
              <!-- /.tab-pane -->
              
              <div class="tab-pane" id="other">
                  <div class="row">
                      <div class="col-md-3">
              
    <?php echo DetailView::widget([
        'model' => $model,
        'options'=>[
            'class'=>'custom-short-table',
        ],
        'attributes' => [
      [
    'attribute'=>'pictureFile',
    'value'=>$model->file_path.'/'.$model->pictureFile,
    'format' => ['image',['width'=>'100','height'=>'100']],
    ]   
          
        ],
    ]) ?> 
            <?php if (!empty($model->pictureFile)) { ?>
                <a class="btn btn-success" href="<?= $model->file_path ?>/<?= $model->pictureFile ?>" 
                   style="width: 107px;margin-left: 44px;" download>Download</a>
            <?php } ?>
              </div>
  <div class="col-md-3">
              
    <?php echo DetailView::widget([
        'model' => $model,
        'options'=>[
            'class'=>'custom-short-table',
        ],
        'attributes' => [
      [
    'attribute'=>'firFile',
    'value'=>$model->file_path.'/'.$model->firFile,
    'format' => ['image',['width'=>'100','height'=>'100']],
    ]   
          
        ],
    ]) ?> 
            <?php if (!empty($model->firFile)) { ?>
                <a class="btn btn-success" href="<?= $model->file_path ?>/<?= $model->firFile ?>" 
                   style="width: 107px;margin-left: 44px;" download>Download</a>
            <?php } ?>
              </div>
                                 <div class="col-md-3">
              
    <?php echo DetailView::widget([
        'model' => $model,
        'options'=>[
            'class'=>'custom-short-table',
        ],
        'attributes' => [
      [
    'attribute'=>'medicalFile',
    'value'=>$model->file_path.'/'.$model->medicalFile,
    'format' => ['image',['width'=>'100','height'=>'100']],
    ]   
          
        ],
    ]) ?> 
            <?php if (!empty($model->medicalFile)) { ?>
                <a class="btn btn-success" href="<?= $model->file_path ?>/<?= $model->medicalFile ?>" 
                   style="width: 107px;margin-left: 44px;" download>Download</a>
            <?php } ?>
              </div>
                                  <div class="col-md-3">
              
    <?php echo DetailView::widget([
        'model' => $model,
        'options'=>[
            'class'=>'custom-short-table',
        ],
        'attributes' => [
      [
    'attribute'=>'otherFile',
    'value'=>$model->file_path.'/'.$model->otherFile,
    'format' => ['image',['width'=>'100','height'=>'100']],
    ]   
          
        ],
    ]) ?> 
            <?php if (!empty($model->otherFile)) { ?>
                <a class="btn btn-success" href="<?= $model->file_path ?>/<?= $model->otherFile ?>" 
                   style="width: 107px;margin-left: 44px;" download>Download</a>
            <?php } ?>
              </div>        
            </div>
            <!-- /.tab-content -->
          </div>
          </div>
          <!-- /.nav-tabs-custom -->
        </div>

</div>