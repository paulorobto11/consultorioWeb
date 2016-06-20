<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Clientes */

$this->title = 'Cadastro de Clientes';
$this->params['breadcrumbs'][] = ['label' => 'Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Cadastrar';
?>
<div class="clientes-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
