<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClientesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clientes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'codigo') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'dtnascto') ?>

    <?= $form->field($model, 'idade') ?>

    <?= $form->field($model, 'natural') ?>

    <?php // echo $form->field($model, 'sexo') ?>

    <?php // echo $form->field($model, 'conjuge') ?>

    <?php // echo $form->field($model, 'profissao') ?>

    <?php // echo $form->field($model, 'sangue') ?>

    <?php // echo $form->field($model, 'mae') ?>

    <?php // echo $form->field($model, 'pai') ?>

    <?php // echo $form->field($model, 'estcivil') ?>

    <?php // echo $form->field($model, 'cpf') ?>

    <?php // echo $form->field($model, 'rg') ?>

    <?php // echo $form->field($model, 'orgao') ?>

    <?php // echo $form->field($model, 'emissao') ?>

    <?php // echo $form->field($model, 'ufemis') ?>

    <?php // echo $form->field($model, 'rua') ?>

    <?php // echo $form->field($model, 'nroend') ?>

    <?php // echo $form->field($model, 'bairro') ?>

    <?php // echo $form->field($model, 'cidade') ?>

    <?php // echo $form->field($model, 'uf') ?>

    <?php // echo $form->field($model, 'cep') ?>

    <?php // echo $form->field($model, 'dddfone') ?>

    <?php // echo $form->field($model, 'fone') ?>

    <?php // echo $form->field($model, 'dddcel') ?>

    <?php // echo $form->field($model, 'celular') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'formapgto') ?>

    <?php // echo $form->field($model, 'vlrcons') ?>

    <?php // echo $form->field($model, 'convenio') ?>

    <?php // echo $form->field($model, 'matricula') ?>

    <?php // echo $form->field($model, 'dtavalid') ?>

    <?php // echo $form->field($model, 'tipo') ?>

    <?php // echo $form->field($model, 'dtacons') ?>

    <?php // echo $form->field($model, 'dataultima') ?>

    <?php // echo $form->field($model, 'dtaproxima') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
