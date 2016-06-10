<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsuariosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuarios-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'apelido') ?>

    <?= $form->field($model, 'data_nascimento') ?>

    <?= $form->field($model, 'cpf') ?>

    <?php // echo $form->field($model, 'rg') ?>

    <?php // echo $form->field($model, 'email_pessoal') ?>

    <?php // echo $form->field($model, 'logradouro') ?>

    <?php // echo $form->field($model, 'numero') ?>

    <?php // echo $form->field($model, 'bairro') ?>

    <?php // echo $form->field($model, 'cep') ?>

    <?php // echo $form->field($model, 'estado_id') ?>

    <?php // echo $form->field($model, 'cidade_id') ?>

    <?php // echo $form->field($model, 'fone1') ?>

    <?php // echo $form->field($model, 'fone2') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <?php // echo $form->field($model, 'cnh_numero') ?>

    <?php // echo $form->field($model, 'cnh_data_expedicao') ?>

    <?php // echo $form->field($model, 'cnh_categoria') ?>

    <?php // echo $form->field($model, 'cnh_data_vencimento') ?>

    <?php // echo $form->field($model, 'data_admissao') ?>

    <?php // echo $form->field($model, 'data_demissao') ?>

    <?php // echo $form->field($model, 'centro_custo_id') ?>

    <?php // echo $form->field($model, 'setor_id') ?>

    <?php // echo $form->field($model, 'cargo_id') ?>

    <?php // echo $form->field($model, 'valor_hora') ?>

    <?php // echo $form->field($model, 'email_empresa') ?>

    <?php // echo $form->field($model, 'ramal') ?>

    <?php // echo $form->field($model, 'dados_complementares') ?>

    <?php // echo $form->field($model, 'descricao_ocorrencias') ?>

    <?php // echo $form->field($model, 'percentual_comissao') ?>

    <?php // echo $form->field($model, 'fator_calculo_comissao') ?>

    <?php // echo $form->field($model, 'forma_credito') ?>

    <?php // echo $form->field($model, 'saldo_viagens') ?>

    <?php // echo $form->field($model, 'assinatura') ?>

    <?php // echo $form->field($model, 'ativo') ?>

    <?php // echo $form->field($model, 'data_cadastro') ?>

    <?php // echo $form->field($model, 'data_alteracao') ?>

    <?php // echo $form->field($model, 'empresa_id') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
