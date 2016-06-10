<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Clientes */

$this->title = $model->codigo;
$this->params['breadcrumbs'][] = ['label' => 'Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clientes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->codigo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->codigo], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'codigo',
            'nome',
            'dtnascto',
            'idade',
            'natural',
            'sexo',
            'conjuge',
            'profissao',
            'sangue',
            'mae',
            'pai',
            'estcivil',
            'cpf',
            'rg',
            'orgao',
            'emissao',
            'ufemis',
            'rua',
            'nroend',
            'bairro',
            'cidade',
            'uf',
            'cep',
            'dddfone',
            'fone',
            'dddcel',
            'celular',
            'email:email',
            'formapgto',
            'vlrcons',
            'convenio',
            'matricula',
            'dtavalid',
            'tipo',
            'dtacons',
            'dataultima',
            'dtaproxima',
        ],
    ]) ?>

</div>
