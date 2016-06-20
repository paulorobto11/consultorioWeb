<?php

$this->title = 'Criar Usuario';
$this->params['breadcrumbs'][] = ['label' => 'Usuario', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Usuario';
?>

<?= $this->render('_form', [
	'model' => $model,
	'modelUser' => $modelUser,
	'error' => $error,
]) ?>
