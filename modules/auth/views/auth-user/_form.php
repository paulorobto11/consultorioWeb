<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\auth\models\AuthUser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auth-user-form">

    <?php $form = ActiveForm::begin(['enableClientValidation' => false]); ?>


    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Criar' : 'Salvar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
$script = <<< JS

 loading.turn.off('.loading-fog','.cssload-loader');

JS;

$this->registerJs($script,\yii\web\View::POS_LOAD);
?>