<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */


use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

$this->title = 'Login';
?>
<div class="login-box  ">
    <div class="login-logo">
    	<a href="../../index2.html"><i><b>Consultorio</b></i> <b>Eldo Ern</b></a>
    </div>
    <!-- /.login-logo -->

    <div class="login-box-body">
    	<p class="login-box-msg"><b>Informe os dados para acesso ao Sistema</b></p>

    	<?php $form = ActiveForm::begin([
            'id' => 'login-form',
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

		<?= $form->field($model, 'password',
		        [
		            'inputOptions' => [
		                'placeholder' => $model->getAttributeLabel('password'),
		            ],
		            'options' => [
        		        'tag' => 'div',
        		        'class' => 'form-group has-feedback'
        		    ],
        		    'template' => '{input} <span class="glyphicon glyphicon-lock form-control-feedback"></span><div class="col-lg-10">{error}</div>',
		        ])->passwordInput() ?>
	        </div>
        </div>
        
        <div id='dv_inscricao' class="col-xs-12" style='display: block'>
	        <div class="row">
				<?php
				
				$model_medico=\app\models\Usuarios::find()
				->where(['tipo_user'=>2])
				->all();
				$data = [];				
				foreach ($model_medico as $medico) {
					     $data += [$medico->id => $medico->apelido];      
				}
				
					echo $form->field($model, 'codigo',['template' => '{input} <span class="glyphicon glyphicon-lock form-control-feedback"></span><div class="col-lg-10">{error}</div>'])->widget(Select2::classname(), [
							'data' => $data,
							'options' => [
									'placeholder' => 'Medico para Acesso',
									'onchange' => 'mostrar_campo(this.value)',
							],
							'hideSearch' => true,
					])->label(false);
				?>
	        
	        </div>
        </div>

        <div class="row">

    		<?= $form->field($model, 'rememberMe',
    		        [
    		            'options' => [
            		        'tag' => 'div',
            		        'class' => 'col-xs-8'
            		    ],
            		    'template' => '<div class="checkbox icheck"> <label>{input} Mantenha-me conectado</label> </div> <div class="col-lg-8">{error}</div>',
    		        ])->checkbox() ?>

            <div class="col-xs-4">
                <?php echo Html::submitButton('Entrar', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
            </div>
		</div>

    	<?php ActiveForm::end(); ?>

    	<a href="#" onclick='esqueci_senha()'>Esqueci minha senha</a>

    </div> <!-- /.login-box-body -->
</div> <!-- /.login-box -->


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg">
     <div class="modal-content">
		<div id="div_mod"></div>
     </div>
  </div>
</div>


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

 
function esqueci_senha() {
	var url = BASE_PATH + "site/lembrete";
	location.href = url;
	
}
 
JS;
if($model->hasErrors() )
{
	$this->registerJs($script,\yii\web\View::POS_END);
}
$this->registerJs($script,\yii\web\View::POS_END);
?>