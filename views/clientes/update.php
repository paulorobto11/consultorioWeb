<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Clientes */

$this->title = 'Alteração de Clientes: ' . $model->codigo;
$this->params['breadcrumbs'][] = ['label' => 'Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Alterar';
?>
<div class="clientes-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
