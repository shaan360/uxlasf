<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MembersPlanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'DashBoard');
$this->params['breadcrumbs'][] = 'Dashboard';
?>
<div class="container">
    <h2>Recent Unit Sale</h2>
    <div class="row">
<canvas id="canvas" height="200" width="600"></canvas>
    </div>
    <h2>Recent Payment Received</h2>
    <div class="row">
<canvas id="canvas2" height="200" width="600"></canvas> 
    </div>

</div>
<script>
    <?php
        $date = (new \yii\db\Query())->from('member_plots')->select("date")->groupBy('date')->all();
        $date_list = [];
        $data_list = [];
        $data = (new \yii\db\Query())->from('member_plots')->select("sum(plot_prize) as plot_prize")->groupBy('date')->all();
        foreach($date as $d){
            $date_list[] = $d['date'];
        }
        foreach($data as $d){
            $data_list[] = $d['plot_prize'];
        }
    ?>
    console.log(<?=json_encode($date_list)?>);
    //var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
	
    	lineChartData = {
			labels : <?= json_encode($date_list) ?>,
			datasets : [
				{
					label: "My First dataset",
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
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(220,220,220,1)",
					data :<?= json_encode($data_list) ?>
				},
//				{
//					label: "My Second dataset",
//					fillColor : "rgba(151,187,205,0.2)",
//					strokeColor : "rgba(151,187,205,1)",
//					pointColor : "rgba(151,187,205,1)",
//					pointStrokeColor : "#fff",
//					pointHighlightFill : "#fff",
//                                        backgroundColor: [
//                                            "#FF6384",
//                                            "#36A2EB",
//                                            "#FFCE56"
//                                        ],
//                                            pointHighlightStroke : "rgba(151,187,205,1)",
//					data : <?= json_encode($data_list) ?>
//				}
			]

		}
</script>
<script>
<?php
        $date = (new \yii\db\Query())->from('member_plot_ledger')->select("date_as_on")->groupBy('date_as_on')->all();
        $date_list = [];
        $data_list = [];
        $data = (new \yii\db\Query())->from('member_plot_ledger')->select("sum(payment_received) as payment_received")->groupBy('date_as_on')->all();
        foreach($date as $d){
            $date_list[] = $d['date_as_on'];
        }
        foreach($data as $d){
            $data_list[] = $d['payment_received'];
        }
    ?>
    console.log(<?=json_encode($date_list)?>);
    //var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
	
    	BarChartData = {
			labels : <?= json_encode($date_list) ?>,
			datasets : [
				{
					label: "My First dataset",
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
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(220,220,220,1)",
					data :<?= json_encode($data_list) ?>
				},
//				{
//					label: "My Second dataset",
//					fillColor : "rgba(151,187,205,0.2)",
//					strokeColor : "rgba(151,187,205,1)",
//					pointColor : "rgba(151,187,205,1)",
//					pointStrokeColor : "#fff",
//					pointHighlightFill : "#fff",
//                                        backgroundColor: [
//                                            "#FF6384",
//                                            "#36A2EB",
//                                            "#FFCE56"
//                                        ],
//                                            pointHighlightStroke : "rgba(151,187,205,1)",
//					data : <?= json_encode($data_list) ?>
//				}
			]

		}

</script>
<script src="<?php echo Yii::$app->request->baseUrl;?>/js/line.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl;?>/js/Bar.js" type="text/javascript"></script>