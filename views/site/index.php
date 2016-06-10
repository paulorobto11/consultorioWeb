<?php
/* @var $this yii\web\View */

// echo "<pre>";
// print_r (Yii::$app->user->identity);
// //print_r (Yii::$app->user->identity->medico_nome);
// exit();

$userName = "Medico: ".Yii::$app->user->identity->medico_nome." - Usuario: ".Yii::$app->user->identity->usuarios_nome;

$this->title = 'Início';
$this->params['page']['title'] = $userName;
//$this->params['page']['titleSmall'] = 'seja bem vindo';
?>


<!-- Small boxes (Stat box) -->
<div class="row">
	<div class="col-lg-3 col-xs-6">
	<!-- small box -->
		<div class="small-box bg-aqua">
			<div class="inner">
				<h3>5</h3>
				<p>Notas emitidas hoje</p>
			</div>
			<div class="icon">
				<i class="ion ion-social-usd"></i>
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
				<i class="ion ion-person-stalker"></i>
			</div>
			<a href="#" class="small-box-footer">Visualizar <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div> <!-- ./col -->

	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-green">
			<div class="inner">
				<h3>12</h3>
				<p>Contas a Pagar</p>
			</div>
			<div class="icon">
				<i class="ion ion-cash"></i>
			</div>
			<a href="#" class="small-box-footer">Visualizar <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div> <!-- ./col -->

	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-red">
			<div class="inner">
				<h3>9</h3>
				<p>Avisos Importantes</p>
			</div>
			<div class="icon">
				<i class="ion ion-chatbox-working"></i>
			</div>
			<a href="#" class="small-box-footer">Visualizar <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div> <!-- ./col -->
</div> <!-- /.row -->
   