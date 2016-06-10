<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClientesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clientes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Clientes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'codigo',
            'nome',
            'dtnascto',
            'idade',
            'natural',
            // 'sexo',
            // 'conjuge',
            // 'profissao',
            // 'sangue',
            // 'mae',
            // 'pai',
            // 'estcivil',
            // 'cpf',
            // 'rg',
            // 'orgao',
            // 'emissao',
            // 'ufemis',
            // 'rua',
            // 'nroend',
            // 'bairro',
            // 'cidade',
            // 'uf',
            // 'cep',
            // 'dddfone',
            // 'fone',
            // 'dddcel',
            // 'celular',
            // 'email:email',
            // 'formapgto',
            // 'vlrcons',
            // 'convenio',
            // 'matricula',
            // 'dtavalid',
            // 'tipo',
            // 'dtacons',
            // 'dataultima',
            // 'dtaproxima',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
