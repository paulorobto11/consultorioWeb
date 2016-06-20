<?php

use yii\helpers\Url;

/* @var $this yii\web\View */

$userName = Yii::$app->user->isGuest ? 'Visitante' : '11111';

$this->title = 'Início';
$this->params['page']['title'] = 'Olá '.$userName.', ';
$this->params['page']['titleSmall'] = 'seja bem vindo';
?>


<!-- Small boxes (Stat box) -->
<div class="row">
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-red-gradient">
			<div class="inner">
				<h3>5</h3>
				<p>Consultas Agendadas para Hoje</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="#" class="small-box-footer">Visualizar <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div> <!-- ./col -->

	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-yellow-gradient">
			<div class="inner">
				<h3>2</h3>
				<p>Novos Pacientes</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="#" class="small-box-footer">Visualizar <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div> <!-- ./col -->

	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-green-gradient">
			<div class="inner">
				<h3>12</h3>
				<p>Contas a Receber</p>
			</div>
			<div class="icon">
				<i class="ion ion-arrow-graph-up-right"></i>
			</div>
			<a href="#" class="small-box-footer">Visualizar <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div> <!-- ./col -->

	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-red-gradient">
			<div class="inner">
				<h3>9</h3>
				<p>Contas a Pagar</p>
			</div>
			<div class="icon">
				<i class="ion ion-arrow-graph-down-right"></i>
			</div>
			<a href="#" class="small-box-footer">Visualizar <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div> <!-- ./col -->
</div> <!-- /.row -->
<div class="row">
	<div class="col-md-8">
	<!-- GRAFICO DE VENDAS -->
		<div class="box box-solid bg-teal-gradient">
			<div class="box-header">
				<i class="fa fa-th"></i>
				<h3 class="box-title">Gráfico de Vendas</h3>
				<div class="box-tools pull-right">
					<button class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
					<button class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
				</div>
			</div>
			<div class="box-body border-radius-none">
				<div class="chart" id="line-chart" style="height: 250px;"></div>
			</div><!-- /.box-body -->
			<div class="box-footer no-border">
				<div class="row">
					<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
						<input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgColor="#39CCCC">
						<div class="knob-label">Pedidos via e-mail</div>
					</div><!-- ./col -->
					<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
						<input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#39CCCC">
						<div class="knob-label">Online</div>
					</div><!-- ./col -->
					<div class="col-xs-4 text-center">
						<input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#39CCCC">
						<div class="knob-label">Na Loja</div>
					</div><!-- ./col -->
				</div><!-- /.row -->
			</div><!-- /.box-footer -->
		</div><!-- /.box -->
	</div><!-- ./col -->
	<div class="col-md-4">
		<div class="info-box bg-light-blue-gradient">
			<span class="info-box-icon"><i class="ion ion-cube"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">Estoque</span>
				<span class="info-box-number">5,200</span>
				<div class="progress">
					<div class="progress-bar" style="width: 41%"></div>
				</div>
				<span class="progress-description">
					41% de crecimento em 30 Dias
				</span>
			</div><!-- /.info-box-content -->
		</div><!-- /.info-box -->
		<div class="info-box bg-light-blue-gradient">
			<span class="info-box-icon"><i class="ion ion-iphone"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">Usuários Mobile</span>
				<span class="info-box-number">92,050</span>
				<div class="progress">
					<div class="progress-bar" style="width: 8%"></div>
				</div>
				<span class="progress-description">
					8% de crecimento em 30 Dias
				</span>
			</div><!-- /.info-box-content -->
		</div><!-- /.info-box -->
		<div class="info-box bg-light-blue-gradient">
			<span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">Downloads</span>
				<span class="info-box-number">114,381</span>
				<div class="progress">
					<div class="progress-bar" style="width: 70%"></div>
				</div>
				<span class="progress-description">
					70% de crecimento em 30 Dias
				</span>
			</div><!-- /.info-box-content -->
		</div><!-- /.info-box -->
		<div class="info-box bg-light-blue-gradient">
			<span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">Mensagens</span>
				<span class="info-box-number">163,921</span>
				<div class="progress">
					<div class="progress-bar" style="width: 40%"></div>
				</div>
				<span class="progress-description">
					40% de crecimento em 30 Dias
				</span>
			</div><!-- /.info-box-content -->
		</div><!-- /.info-box -->
	</div><!-- ./col -->
</div><!-- /.row -->
<div class="row">
	<div class="col-md-8">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Monthly Recap Report</h3>
				<div class="box-tools pull-right">
					<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					<div class="btn-group">
						<button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</div>
					<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
				</div>
			</div><!-- /.box-header -->
			<div class="box-body">
				<div class="row">
					<div class="col-md-8">
						<p class="text-center">
							<strong>Vendas: 1 Jan, 2014 - 30 Jul, 2014</strong>
						</p>
						<div class="chart">
							<!-- Sales Chart Canvas -->
							<canvas id="salesChart" style="height: 180px;"></canvas>
						</div><!-- /.chart-responsive -->
					</div><!-- /.col -->
					<div class="col-md-4">
						<p class="text-center">
							<strong>Goal Completion</strong>
						</p>
						<div class="progress-group">
							<span class="progress-text">Item1</span>
							<span class="progress-number"><b>160</b>/200</span>
							<div class="progress sm">
								<div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
							</div>
						</div><!-- /.progress-group -->
						<div class="progress-group">
							<span class="progress-text">Item2</span>
							<span class="progress-number"><b>310</b>/400</span>
							<div class="progress sm">
								<div class="progress-bar progress-bar-red" style="width: 80%"></div>
							</div>
						</div><!-- /.progress-group -->
						<div class="progress-group">
							<span class="progress-text">Item3</span>
							<span class="progress-number"><b>480</b>/800</span>
							<div class="progress sm">
								<div class="progress-bar progress-bar-green" style="width: 80%"></div>
							</div>
						</div><!-- /.progress-group -->
						<div class="progress-group">
							<span class="progress-text">Item4</span>
							<span class="progress-number"><b>250</b>/500</span>
							<div class="progress sm">
								<div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
							</div>
						</div><!-- /.progress-group -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- ./box-body -->
			<div class="box-footer">
				<div class="row">
					<div class="col-sm-3 col-xs-6">
						<div class="description-block border-right">
							<span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
							<h5 class="description-header">$35,210.43</h5>
							<span class="description-text">TOTAL REVENUE</span>
						</div><!-- /.description-block -->
					</div><!-- /.col -->
					<div class="col-sm-3 col-xs-6">
						<div class="description-block border-right">
							<span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
							<h5 class="description-header">$10,390.90</h5>
							<span class="description-text">TOTAL COST</span>
						</div><!-- /.description-block -->
					</div><!-- /.col -->
					<div class="col-sm-3 col-xs-6">
						<div class="description-block border-right">
							<span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
							<h5 class="description-header">$24,813.53</h5>
							<span class="description-text">TOTAL PROFIT</span>
						</div><!-- /.description-block -->
					</div><!-- /.col -->
					<div class="col-sm-3 col-xs-6">
						<div class="description-block">
							<span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
							<h5 class="description-header">1200</h5>
							<span class="description-text">GOAL COMPLETIONS</span>
						</div><!-- /.description-block -->
					</div>
				</div><!-- /.row -->
			</div><!-- /.box-footer -->
		</div><!-- /.box -->
	</div>
	<div class="col-md-4">
		<div class="box-header with-border">
			<h3 class="box-title">Browser Usage</h3>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
			</div>
		</div><!-- /.box-header -->
		<div class="box-body">
			<div class="row">
				<div class="col-md-8">
					<div class="chart-responsive">
						<canvas id="pieChart" height="150"></canvas>
					</div><!-- ./chart-responsive -->
				</div><!-- /.col -->
				<div class="col-md-4">
					<ul class="chart-legend clearfix">
						<li><i class="fa fa-circle-o text-red"></i> Chrome</li>
						<li><i class="fa fa-circle-o text-green"></i> IE</li>
						<li><i class="fa fa-circle-o text-yellow"></i> FireFox</li>
						<li><i class="fa fa-circle-o text-aqua"></i> Safari</li>
						<li><i class="fa fa-circle-o text-light-blue"></i> Opera</li>
						<li><i class="fa fa-circle-o text-gray"></i> Navigator</li>
					</ul>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.box-body -->
		<div class="box-footer no-padding">
			<ul class="nav nav-pills nav-stacked">
				<li><a href="#">United States of America <span class="pull-right text-red"><i class="fa fa-angle-down"></i> 12%</span></a></li>
				<li><a href="#">India <span class="pull-right text-green"><i class="fa fa-angle-up"></i> 4%</span></a></li>
				<li><a href="#">China <span class="pull-right text-yellow"><i class="fa fa-angle-left"></i> 0%</span></a></li>
			</ul>
		</div><!-- /.footer -->
	</div>
</div>

<?php
$this->registerJsFile(Url::home() . 'plugins/knob/jquery.knob.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile(Url::home() . 'plugins/morris/morris.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile(Url::home() . 'js/pages/dashboard.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile(Url::home() . 'js/pages/dashboard2.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);

//$this->registerJsFile(Url::home() . 'js/bootstrap/js/bootstrap.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
//$this->registerJsFile(Url::home() . 'plugins/sparkline/jquery.sparkline.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
//$this->registerJsFile(Url::home() . 'plugins/jvectormap/jquery-jvectormap-1.2.2.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
//$this->registerJsFile(Url::home() . 'plugins/jvectormap/jquery-jvectormap-world-mill-en.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
//$this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
//$this->registerJsFile(Url::home() . 'plugins/daterangepicker/daterangepicker.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
//$this->registerJsFile(Url::home() . 'plugins/datepicker/bootstrap-datepicker.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
//$this->registerJsFile(Url::home() . 'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
//$this->registerJsFile(Url::home() . 'plugins/slimScroll/jquery.slimscroll.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
//$this->registerJsFile(Url::home() . 'plugins/fastclick/fastclick.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
//$this->registerJsFile(Url::home() . 'js/demo.js', ['depends' => [\yii\web\JqueryAsset::className()]]);

$this->registerJsFile(Url::home() . 'js/app.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
//$this->registerJsFile(Url::home() . 'plugins/jQuery/jQuery-2.1.4.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile(Url::home() . 'plugins/chartjs/Chart.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile(Url::home() . 'js/pages/dashboard2.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>