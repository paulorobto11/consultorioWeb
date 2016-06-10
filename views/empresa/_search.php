<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EmpresaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empresa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'empresa_grupo_id') ?>

    <?= $form->field($model, 'identificacao') ?>

    <?= $form->field($model, 'nome_fantasia') ?>

    <?= $form->field($model, 'razao_social') ?>

    <?php // echo $form->field($model, 'cnpj') ?>

    <?php // echo $form->field($model, 'inscricao_estadual') ?>

    <?php // echo $form->field($model, 'inscricao_municipal') ?>

    <?php // echo $form->field($model, 'pais_id') ?>

    <?php // echo $form->field($model, 'estado_federacao_id') ?>

    <?php // echo $form->field($model, 'cidade_id') ?>

    <?php // echo $form->field($model, 'logradouro') ?>

    <?php // echo $form->field($model, 'numero') ?>

    <?php // echo $form->field($model, 'cep') ?>

    <?php // echo $form->field($model, 'bairro') ?>

    <?php // echo $form->field($model, 'telefone1') ?>

    <?php // echo $form->field($model, 'telefone2') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'site') ?>

    <?php // echo $form->field($model, 'logo') ?>

    <?php // echo $form->field($model, 'responsavel_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
