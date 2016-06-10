<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use app\base\Util;
use app\models\Funcoes;
use kartik\form\ActiveForm;
use yii\helpers\Url;

$this->title = 'Encerramento de Compêtencia do Prestador de Serviços';
$this->params['breadcrumbs'][] = 'Notas Serviços';
?>

<div class="clientes-form">

    <?php $form = ActiveForm::begin(); ?>

    	<?= Html::button('Salvar o Cadastro da Conta', ['onclick'=>'salvar_novo_servico()','class' => 'btn btn-success']) ?>

    <?php ActiveForm::end(); ?>

</div>

    	