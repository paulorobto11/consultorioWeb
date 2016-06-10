<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Empresa */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Empresas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empresa-view">

    <p>
        <?= Html::a('Alterar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Deletar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Você tem certeza que quer deletar este item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'empresa_grupo_id',
            'identificacao',
            'nome_fantasia',
            'razao_social',
            'cnpj',
            'inscricao_estadual',
            'inscricao_municipal',
            'pais_id',
            'estado_federacao_id',
            'cidade_id',
            'logradouro',
            'numero',
            'cep',
            'bairro',
            'telefone1',
            'telefone2',
            'email:email',
            'site',
            'logo',
            'responsavel_id',
        ],
    ]) ?>

</div>
