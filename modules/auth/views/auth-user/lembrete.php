<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

$this->title = 'Lembrete';
?>
<div class="login-box  ">
    <div class="login-logo">
    	<a href="../../index2.html"><i><b>Consultorio</b></i> <b>Médico</b></a>
    </div>
    <!-- /.login-logo -->

    <div class="login-box-body">
    	<p class="login-box-msg"><b>Senha do Usuario <br> Informe os Dados para Envio de Senha:</b></p>

    	<?php $form = ActiveForm::begin([
            'id' => 'lembrete-form',
            'enableClientValidation' => false,
            'options' => ['validateOnSubmit' => false,'class' => 'form-horizontal'],

        ]); ?>
        <div class="col-xs-12">
	        <div class="row">
		
			<?= $form->field($model, 'username',
		        [
		            'inputOptions' => [
		                'placeholder' => $model->getAttributeLabel('username'),
		            ],
		            'options' => [
        		        'tag' => 'div',
        		        'class' => 'form-group has-feedback'
        		    ],
        		    'template' => '{input} <span class="glyphicon glyphicon-user form-control-feedback"></span><div class="col-lg-10">{error}</div>',
		        ])->textInput() ?>

			<?= $form->field($model, 'email')->textInput(['maxlength' => true, 'placeholder' => 'email@email.com'])->label(false) ?>
	        </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <?php echo Html::submitButton('Enviar Senha', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
                <?php echo Html::button('Voltar Login', ['onclick'=>'cancelar()','class' => 'btn btn-danger btn-block btn-flat', 'name' => 'cancelar-button']) ?>
                
            </div>
		</div>

    	<?php ActiveForm::end(); ?>
    </div> <!-- /.login-box-body -->
</div> <!-- /.login-box -->

<?php
$script = <<< JS

 loading.turn.off('.loading-fog-login','.cssload-loader');
		
 function mostrar_campo(valor) {
		
		if (valor == 3) {
			bb = '#dv_cpf';
			$(bb).hide();
			bb = '#dv_inscricao';
			$(bb).hide();
			bb = '#dv_cnpj';
			$(bb).show();
		}
		if (valor == 2) {
			bb = '#dv_cnpj';
			$(bb).hide();
			bb = '#dv_inscricao';
			$(bb).hide();
			bb = '#dv_cpf';
			$(bb).show();
		}
		if (valor == 1) {
			bb = '#dv_cpf';
			$(bb).hide();
			bb = '#dv_cnpj';
			$(bb).hide();
			bb = '#dv_inscricao';
			$(bb).show();
		}
 }
function cancelar() {
	var url = BASE_PATH + "site/login";
	location.href = url;
	
}
 
JS;
if($model->hasErrors() )
{
	$this->registerJs($script,\yii\web\View::POS_END);
}
$this->registerJs($script,\yii\web\View::POS_END);
?>