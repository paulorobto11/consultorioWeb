<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Convenio */

$this->title = 'Alterar o Convenio: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Convenio', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Alterar';
?>
<div class="convenio-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
