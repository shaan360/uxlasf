  <?php 
use yii\helpers\Html;

  $this->title = Yii::t('backend', 'Dashboard');
$this->params['breadcrumbs'][] = 'Dashboard';
?>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
       <?php if(Yii::$app->user->can('administrator')){ ?>
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php// $total = (new \yii\db\Query())->from('members')->where('status=2')->count();
//echo $total;
              ?> </h3>

              <p>Total Members</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
        <?php  echo Html::a('Manage Members '.'<i class="fa fa-arrow-circle-right"></i>', ['members/index'], ['class'=>'small-box-footer'] ); ?> 
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
             
<h3><?php //$total_sold = (new \yii\db\Query())->from('units')->where('is_sold=32')->count();
//echo $total_sold;
              ?> </h3>
              <p>Units Sold</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
        <?php  echo Html::a('Manage Units Sold'.'<i class="fa fa-arrow-circle-right"></i>', ['member-plots/index'], ['class'=>'small-box-footer'] ); ?> 
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
             <h3><?php// $total_sold = (new \yii\db\Query())->from('units')->count();
//echo $total_sold;
              ?> </h3>
              <p>Total Units</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
        <?php  echo Html::a('Manage Units '.'<i class="fa fa-arrow-circle-right"></i>', ['units/index'], ['class'=>'small-box-footer'] ); ?> 
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
             <h3><?php
//$amount = (new \yii\db\Query())->from('member_plot_ledger')->sum("payment_received");
              
   //           echo $amount;
              ?> <sup style="font-size: 20px">PKR</sup> </h3>

              <p>Total Sales</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
        <?php  echo Html::a('Manage Sales '.'<i class="fa fa-arrow-circle-right"></i>', ['member-plot-ledger/index'], ['class'=>'small-box-footer'] ); ?> 
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
     
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  <div class="container">
    <h2>Recent Unit Sale</h2>
    <div class="row">
<canvas id="canvas" height="200" width="600"></canvas>
    </div>
    <h2>Recent Payment Received</h2>
    <div class="row">
<canvas id="canvas2" height="200" width="600"></canvas> 
    </div>
    <script>
    <?php
//        $date = (new \yii\db\Query())->from('member_plots')->select("date")->groupBy('date')->all();
//        $date_list = [];
//        $data_list = [];
//        $sales_count=[];
//        $data = (new \yii\db\Query())->from('member_plots')->select("count(*) as count")->groupBy('date')->all();
//        foreach($date as $d){
//            $date_list[] = $d['date'];
//        }
//        foreach($data as $d){
//           
//            $sales_count[]=$d['count'];
//        }
    ?>

    //var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
  
      lineChartData = {
//      labels : <?//= json_encode($date_list) ?>,
      datasets : [
      
       {
         label: "My Second dataset",
         fillColor : "rgba(151,187,205,0.2)",
         strokeColor : "rgba(151,187,205,1)",
         pointColor : "rgba(151,187,205,1)",
         pointStrokeColor : "#fff",
         pointHighlightFill : "#fff",
                                       backgroundColor: [
                                           "#FF6384",
                                           "#36A2EB",
                                           "#FFCE56"
                                       ],
                                           pointHighlightStroke : "rgba(151,187,205,1)",
//         data : <?//= json_encode($sales_count) ?>
       }
      ]

    }
</script>
<script>
<?php
//        $date = (new \yii\db\Query())->from('member_plot_ledger')->select("date_as_on")->groupBy('date_as_on')->all();
//        $date_list = [];
//        $data_list = [];
//        $data_sale_count=[];
//        $data = (new \yii\db\Query())->from('member_plot_ledger')->select("sum(payment_received) as payment_received,count(*) as count")->groupBy('date_as_on')->all();
//        foreach($date as $d){
//            $date_list[] = $d['date_as_on'];
//
//        }
//        foreach($data as $d){
//            $data_list[] = $d['payment_received'];
//            $data_sale_count[]=$d['count'];
//        }
    ?>
   // console.log(<?//=json_encode($date_list)?>);
    //var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
  
      BarChartData = {
     // labels : <?//= json_encode($date_list) ?>,
      datasets : [
        {
          label: "My First dataset",
          fillColor : "rgba(255, 193, 7, 1)",
          strokeColor : "rgba(151,187,205,1)",
          pointColor : "rgba(151,187,205,1)",
          pointStrokeColor : "#fff",
          pointHighlightFill : "#fff",
                                        backgroundColor: [
                                            "#FF6384",
                                            "#36A2EB",
                                            "#FFCE56"
                                            ],
          pointHighlightFill : "#fff",
          pointHighlightStroke : "rgba(220,220,220,1)",
//          data :<?//= json_encode($data_list) ?>
        },
       {
         label: "My Second dataset",
         fillColor : "rgba(255, 193, 7, 1)",
         strokeColor : "rgba(151,187,205,1)",
         pointColor : "rgba(151,187,205,1)",
         pointStrokeColor : "#fff",
         pointHighlightFill : "#fff",
                                       backgroundColor: [
                                           "#FF6384",
                                           "#36A2EB",
                                           "#FFCE56"
                                       ],
                                           pointHighlightStroke : "rgba(151,187,205,1)",
        // data : <?//= json_encode($data_sale_count) ?>
       }
      ]

    }

</script>
<script src="<?php echo Yii::$app->request->baseUrl;?>/js/line.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl;?>/js/Bar.js" type="text/javascript"></script>
<?php }  else {?>

 <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3> Me </h3>

              <p>Profile Details </p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
        <?php  echo Html::a('My Profile '.'<i class="fa fa-user"></i>', '#', ['class'=>'small-box-footer'] ); ?> 
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
             
<h3><?php $total_sold = (new \yii\db\Query())->from('member_plots')->where('member_id='.Yii::$app->user->identity->id)->count();
echo $total_sold;
              ?> </h3>
              <p>Units Purchased</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
        <?php  echo Html::a('My Units'.'<i class="fa fa-arrow-circle-right"></i>', ['member-plots/index'], ['class'=>'small-box-footer'] ); ?> 
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
             <h3> </h3>
              <p></p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
        <?php  echo Html::a('Payment Schedule '.'<i class="fa fa-arrow-circle-right"></i>', ['/member-plots/index'], ['class'=>'small-box-footer'] ); ?> 
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
             <h3><?php
//$amount = (new \yii\db\Query())->from('member_plot_ledger')->where('member_id='.Yii::$app->user->identity->id)->sum("payment_received");
              
        //      echo $amount;
              ?> <sup style="font-size: 20px">PKR</sup> </h3>

              <p>Total Payment</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
        <?php  echo Html::a('Payment Details '.'<i class="fa fa-arrow-circle-right"></i>','#', ['class'=>'small-box-footer'] ); ?> 

          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
     
      <!-- /.row (main row) -->

    </section>
 

<?php }?>
</div>
