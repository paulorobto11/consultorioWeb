<?php

use yii\helpers\Html;
use yii\bootstrap\Modal;
use kartik\tabs\TabsX;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;


$this->title = 'Configuração do aplicativo';
$this->params['breadcrumbs'][] = $this->title;

?>

<?php

$permissao=$this->render('_permissao',['list'=>$list]);


$user=$this->render('_usuario',['user_data'=>$user_data]);

$items = [
		[
				'label'=>'<i class="glyphicon glyphicon-lock"></i> Permissões',
				'content'=>$permissao,
				'active'=>true
		],
		[
				'label'=>'<i class="glyphicon glyphicon-cog"></i> Regras',
				'content'=>'test2',

		],
		[
				'label'=>'<i class="glyphicon glyphicon-user"></i> Usuários',
				'content'=>$user,

		],


];

?>
<div class="auth-default-index">

    <div class="panel panel-primary">
        <div class="panel-heading text-left">
          <strong>Autorizações</strong>
        </div>

        <div class="panel-body">
          <div class="row">
			  <div class="col-xs-12">
				<?php
				echo TabsX::widget([
						'items'=>$items,
						'position'=>TabsX::POS_ABOVE,
						'encodeLabels'=>false
				]);
				?>
			  </div>
		  </div>

		</div>
    </div>

</div>

<?php


Modal::begin([
'header'=>'<h3>Adicionar permissão</h3>',
'id'=>'modal_auth_permissao',

]);

echo "<div id='modalContent_auth_permissao'>
	<div class='auth-loading'></div>
	</div>";
Modal::end();


Modal::begin([
'header'=>'<h3>Listar permissão</h3>',
'id'=>'modal_auth_list',

]);
echo "<div id='modalContent_auth_list'>
	<div class='auth-loading'></div>
	</div>";
Modal::end();



?>

