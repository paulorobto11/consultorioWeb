<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuarios-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'nome',
            'apelido',
            'data_nascimento',
            'cpf',
            'rg',
            'email_pessoal:email',
            'logradouro',
            'numero',
            'bairro',
            'cep',
            'estado_id',
            'cidade_id',
            'fone1',
            'fone2',
            'foto',
            'cnh_numero',
            'cnh_data_expedicao',
            'cnh_categoria',
            'cnh_data_vencimento',
            'data_admissao',
            'data_demissao',
            'centro_custo_id',
            'setor_id',
            'cargo_id',
            'valor_hora',
            'email_empresa:email',
            'ramal',
            'dados_complementares:ntext',
            'descricao_ocorrencias:ntext',
            'percentual_comissao',
            'fator_calculo_comissao',
            'forma_credito',
            'saldo_viagens',
            'assinatura',
            'ativo',
            'data_cadastro',
            'data_alteracao',
            'empresa_id',
            'user_id',
        ],
    ]) ?>

</div>
