<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Empresa */

$this->title = 'Criar Empresa';
$this->params['breadcrumbs'][] = ['label' => 'Empresas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('_form', ['model' => $model, 'config' => $config/*, 'cidades' => $cidades*/]) ?>