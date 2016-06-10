<?php
/* @var $this yii\web\View */

$userName = Yii::$app->user->isGuest ? 'Visitante' : Yii::$app->user->identity->colaborador_nome;

$this->title = 'Início';
$this->params['page']['title'] = 'Olá '.$userName.', ';
$this->params['page']['titleSmall'] = 'seja bem vindo';
?>


<!-- Small boxes (Stat box) -->
<div class="row">
	<div class="col-lg-3 col-xs-6">
	<!-- small box -->
		<div class="small-box bg-aqua">
			<div class="inner">
				<h3>5</h3>
				<p>Vendas efetuadas hoje</p>
			</div>
			<div class="icon">
				<i class="ion ion-bag"></i>
			</div>
			<a href="#" class="small-box-footer">Visualizar <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div> <!-- ./col -->

	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-yellow">
			<div class="inner">
				<h3>2</h3>
				<p>Novos clientes</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="#" class="small-box-footer">Visualizar <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div> <!-- ./col -->

	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-green">
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
		<div class="small-box bg-red">
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
   