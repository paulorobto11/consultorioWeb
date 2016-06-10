<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Clientes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clientes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'codigo')->textInput() ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dtnascto')->textInput() ?>

    <?= $form->field($model, 'idade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'natural')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sexo')->textInput() ?>

    <?= $form->field($model, 'conjuge')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'profissao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sangue')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mae')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estcivil')->textInput() ?>

    <?= $form->field($model, 'cpf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'orgao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emissao')->textInput() ?>

    <?= $form->field($model, 'ufemis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nroend')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bairro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dddfone')->textInput() ?>

    <?= $form->field($model, 'fone')->textInput() ?>

    <?= $form->field($model, 'dddcel')->textInput() ?>

    <?= $form->field($model, 'celular')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'formapgto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vlrcons')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'convenio')->textInput() ?>

    <?= $form->field($model, 'matricula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dtavalid')->textInput() ?>

    <?= $form->field($model, 'tipo')->textInput() ?>

    <?= $form->field($model, 'dtacons')->textInput() ?>

    <?= $form->field($model, 'dataultima')->textInput() ?>

    <?= $form->field($model, 'dtaproxima')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
