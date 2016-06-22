<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Agenda */

$this->title = 'Agendamento de Consultas';
$this->params['breadcrumbs'][] = ['label' => 'Agenda', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Agendamento';


?>
<div class="agenda-create">
    <?= $this->render('_form', [
    		'model_agenda' => $model_agenda,
	        'model' => $model,
    		'searchModel' => $searchModel,
    		'dataProvider' => $dataProvider,
    ]) ?>

</div>
