<?php

/* @var $this yii\web\View */
/* @var $model app\models\Colaborador */

$this->title = 'Alterando Colaborador: '.$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Colaboradores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Alterar';
?>

<?= $this->render('_form', [
	'model' => $model,
	'modelUser' => $modelUser,
	'error' => $error,
]) ?>