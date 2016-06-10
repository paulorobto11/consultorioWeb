<?php

/* @var $this yii\web\View */
/* @var $model app\models\Colaborador */

$this->title = 'Criar Colaborador';
$this->params['breadcrumbs'][] = ['label' => 'Colaborador', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('_form', [
	'model' => $model,
	'modelUser' => $modelUser,
	'error' => $error,
]) ?>
