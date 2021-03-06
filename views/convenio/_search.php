<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ConvenioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="convenio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'dtnascto') ?>

    <?= $form->field($model, 'cnpj') ?>

    <?= $form->field($model, 'rua') ?>

    <?php // echo $form->field($model, 'nroend') ?>

    <?php // echo $form->field($model, 'bairro') ?>

    <?php // echo $form->field($model, 'cidade') ?>

    <?php // echo $form->field($model, 'uf') ?>

    <?php // echo $form->field($model, 'cep') ?>

    <?php // echo $form->field($model, 'dddfone') ?>

    <?php // echo $form->field($model, 'fone') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'vlrcons') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
