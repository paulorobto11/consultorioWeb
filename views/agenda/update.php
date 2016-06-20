<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Agenda */

$this->title = 'Consulta de Agendamento: ';
$this->params['breadcrumbs'][] = ['label' => 'Agendamento', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Consultar';
?>
<div class="agenda-update">
    <?= $this->render('_form_update', [
        'model' => $model,
    ]) ?>

</div>
