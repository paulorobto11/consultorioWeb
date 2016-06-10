<?php

/* @var $this yii\web\View */
/* @var $model app\models\Colaborador */

$this->title = 'Alterando Dados Pessoais';
$this->params['breadcrumbs'][] = 'Alterar Dados Pessoais';
?>

<?= $this->render('_formusuario', [
	'model' => $model,
	'modelUser' => $modelUser,
	'error' => $error,
]) ?>