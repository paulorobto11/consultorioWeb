<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AgendaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="agenda-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'medico') ?>

    <?= $form->field($model, 'codigo') ?>

    <?= $form->field($model, 'tipo') ?>

    <?= $form->field($model, 'ddd') ?>

    <?php // echo $form->field($model, 'fone') ?>

    <?php // echo $form->field($model, 'data') ?>

    <?php // echo $form->field($model, 'hora') ?>

    <?php // echo $form->field($model, 'inicio') ?>

    <?php // echo $form->field($model, 'final') ?>

    <?php // echo $form->field($model, 'confirmada') ?>

    <?php // echo $form->field($model, 'modopgto') ?>

    <?php // echo $form->field($model, 'vlrpgto') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
