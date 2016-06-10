<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Empresa */

$this->title = 'Alterando Empresa: '.$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Empresas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Alterar';
?>

<?= $this->render('_form', ['model' => $model, 'config' => $config/*, 'cidades' => $cidades*/]) ?>