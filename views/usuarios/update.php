<?php

$this->title = 'Alterar Usuario: '.$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Alterar';
?>

<?= $this->render('_form', [
	'model' => $model,
	'modelUser' => $modelUser,
	'error' => $error,
]) ?>