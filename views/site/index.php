<?php
use app\models\Agenda;
use app\models\Clientes;
use app\models\ContaReceber;
use app\models\FaturasReceber;
use app\models\FaturasPagar;
use yii\helpers\Url;
use app\models\Pagcon;
/* @var $this yii\web\View */

date_default_timezone_set('America/Sao_Paulo');

$userName = "Acessando o Médico: ".Yii::$app->user->identity->medico_nome;

$this->title = 'Inicio';
$this->params['page']['title'] = $userName;

$model_agenda = Agenda::findAll(['medico'=>Yii::$app->user->identity->medico_id,'data'=>date('Y-m-d')]);
$qtde_agenda = 0;
if (!empty($model_agenda)) {
	$qtde_agenda = count($model_agenda);
}

$model_agenda = Agenda::findAll(['medico'=>Yii::$app->user->identity->medico_id,'data'=>date('Y-m-d'),'confirmada'=> 1]);
$qtde_atendimento = 0;
if (!empty($model_agenda)) {
	$qtde_atendimento = count($model_agenda);
}


$model_cliente = Clientes::findAll(['data_cadastro' => date('Y-m-d'),'tipo'=>1]);
$qtde_cliente = 0;
if (!empty($model_cliente)) {
	$qtde_cliente = count($model_cliente);
}

$sql = 'SELECT * FROM AGENDA WHERE medico = '.Yii::$app->user->identity->medico_id.' and EXTRACT(YEAR_MONTH FROM DATA ) = "'.date('Ym').'" and confirmada = 2';
$model_consultas = Agenda::findBySql($sql)->all();
$qtde_consultas = 0;
if (!empty($model_consultas)) {
	$qtde_consultas = count($model_consultas);
}

$contas_receber = FaturasReceber::findAll(['data_vencimento'=>date('Y-m-d'),'situacao'=>0]);
$qtde_receber = 0;
if (!empty($contas_receber)) {
	$qtde_receber = count($contas_receber);
}

$contas_pagar = FaturasPagar::findAll(['data_vencimento'=>date('Y-m-d'),'situacao'=> 0]);
$qtde_pagar = 0;
if (!empty($contas_pagar)) {
	$qtde_pagar = count($contas_pagar);
}

$sql = 'SELECT * FROM PAGCON WHERE medico = '.Yii::$app->user->identity->medico_id.' and EXTRACT(YEAR_MONTH FROM DATA ) = "'.date('Ym').'" and situacao = 1';
$model_pagcon = Pagcon::findBySql($sql)->all();
$qtde_receitas = '0';
if (!empty($model_pagcon)) {
	$qtde_receitas = count($model_pagcon);
}


?>


<!-- Small boxes (Stat box) -->
<div class="row">
	<div class="col-lg-3 col-xs-6">
	<!-- small box -->
		<div class="small-box bg-blue">
			<div class="inner">
				<h3><?=$qtde_agenda?></h3>
				<p>Pacientes Agendados para hoje</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="<?php echo Url::to(['agenda/create'])?>" class="small-box-footer">Visualizar <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div> <!-- ./col -->

	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-yellow">
			<div class="inner">
				<h3><?=$qtde_cliente?></h3>
				<p>Cadastros de Pacientes Provisórios</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-stalker"></i>
			</div>
			<a href="<?php echo Url::to(['/clientes?p'])?>" class="small-box-footer">Visualizar <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div> <!-- ./col -->
	
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-green-gradient">
			<div class="inner">
				<h3><?=$qtde_receber?></h3>
				<p>Contas a Receber</p>
			</div>
			<div class="icon">
				<i class="ion ion-arrow-graph-up-right"></i>
			</div>
			<a href="<?php echo Url::to(['/faturas-receber/faturas_dia'])?>" class="small-box-footer">Visualizar <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div> <!-- ./col -->

	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-red-gradient">
			<div class="inner">
				<h3><?=$qtde_pagar?></h3>
				<p>Contas a Pagar</p>
			</div>
			<div class="icon">
				<i class="ion ion-arrow-graph-down-right"></i>
			</div>
			<a href="<?php echo Url::to(['/faturas-pagar/faturas_dia'])?>" class="small-box-footer">Visualizar <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div> <!-- ./col -->

	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-aqua">
			<div class="inner">
				<h3><?=$qtde_atendimento?></h3>
				<p>Agendamentos em Aberto hoje</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-stalker"></i>
			</div>
			<a href="<?php echo Url::to(['agenda/create'])?>" class="small-box-footer">Visualizar <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div> <!-- ./col -->

	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-blue">
			<div class="inner">
				<h3><?=$qtde_consultas?></h3>
				<p>Pacientes Atendidos no Mês</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-stalker"></i>
			</div>
			<a href="<?php echo Url::to(['/consultas?mes=1'])?>" class="small-box-footer">Visualizar <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div> <!-- ./col -->

	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-yellow">
			<div class="inner">
				<h3><?=$qtde_receitas?></h3>
				<p>Receitas Emitidas no mês</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-stalker"></i>
			</div>
			<a href="<?php echo Url::to(['/receita?p'])?>" class="small-box-footer">Visualizar <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div> <!-- ./col -->
	
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-red">
			<div class="inner">
				<h3>0</h3>
				<p>Avisos Importantes</p>
			</div>
			<div class="icon">
				<i class="ion ion-chatbox-working"></i>
			</div>
			<a href="#" class="small-box-footer">Visualizar <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div> <!-- ./col -->
	
	
</div> <!-- /.row -->
   