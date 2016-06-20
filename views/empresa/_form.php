<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

use kartik\select2\Select2;
use kartik\widgets\FileInput;
use kartik\money\MaskMoney;

use app\models\EmpresaGrupo;
use app\models\Pais;
use app\models\EstadoFederacao;
use app\models\Cidade;
use app\models\Colaborador;

/* @var $this yii\web\View */
/* @var $model app\models\Empresa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empresa-form">

	<div class="row">
		<div class="col-md-12">
			<?php 
	        foreach (Yii::$app->session->getAllFlashes() as $key => $message) {
         		echo '<div class="alert alert-' . $key . '">' . $message . '</div>';
           	}
			?>
		</div>
	</div>

	<div class="box box-primary">
		<?php 
			$form = ActiveForm::begin([
			'options' => ['enctype' => 'multipart/form-data'],
	    	'id'=>$model->formName(),
			'fieldConfig' => [
	        	'options' => ['class' => ''],
		    	]
			]);
		?>
		
		<div class="box-body">
		<input type='hidden' name='logo_img' id='logo_imp' value='<?=$model->logo?>'>
			<!-- Custom Tabs -->
			<div class="nav-tabs-custom">
				<ul class="nav nav-tabs">
		        	<li class="active"><a href="#tab_1" data-toggle="tab">Cadastro</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tab_1">

						<fieldset>						
                        	<legend>Dados da Empresa</legend>
    
                        	<div class="row">
    							<div class="col-md-3">
    								<div class="form-group">
										<img class="img-responsive rounded" src="<?= \Yii::$app->request->BaseUrl.'/img/'.$model->logo?>" alt=""> 
    								    &nbsp;
    								    <?= $form->field($model, 'logo')->widget(FileInput::classname(),
    								    [
    								    'options'=>['accept'=>'image/*'],
    									'pluginOptions'=>['allowedFileExtensions'=>['jpg','gif','png'], 
    													  'browseLabel' => 'Selecione o Logo da Empresa',
    													  'showUpload'  => false,
    													  'showCaption' => false,
            											  'showRemove'  => false,]
    								    ] )->label(false);
    									?>
    								</div>
    							</div>
    
    							<div class="col-md-9">   
    								<div class="row">
    									<div class="col-md-6">
    							        	<div class="form-group">
    										    <?= $form->field($model, 'razao_social')->textInput(['maxlength' => true,'disabled'=>true]) ?>
    										</div>
    									</div>
    									<div class="col-md-3">
    							        	<div class="form-group">
    										    <?= $form->field($model, 'cnpj')->widget(\yii\widgets\MaskedInput::className(), [
    							                    'mask' => '99.999.999/9999-99'
    							                    ])->textInput(['maxlength' => false,'disabled'=>true,])->label('CNPJ:')
    							                ?>
    										</div>
    									</div>
    								</div>
    
    								<div class="row">
    									<div class="col-md-4">
    							        	<div class="form-group">
    										    <?= $form->field($model, 'inscricao_estadual')->textInput(['maxlength' => true]) ?>
    										</div>
    									</div>
    									<div class="col-md-4">
    							        	<div class="form-group">
    										    <?= $form->field($model, 'inscricao_municipal')->textInput(['maxlength' => true]) ?>
    										</div>
    									</div>									
    								</div>
    								
    								<div class="row">
    									<div class="col-md-4">
            					        	<div class="form-group">
            								    <?= $form->field($model, 'responsavel_id')->textInput(['maxlength' => true]) ?>
            								</div>
            							</div>    
    								</div>
    								
    
    							</div>
    						</div>
						</fieldset>
						
						<br>
						<fieldset>						
                        	<legend>Endereço</legend>
    						<div class="row">
    							<div class="col-md-4">
    					        	<div class="form-group">
    								    <?= $form->field($model, 'logradouro')->textInput(['maxlength' => true,'disabled'=>true]) ?>
    								</div>
    							</div>
    							<div class="col-md-2">
    					        	<div class="form-group">
    								    <?= $form->field($model, 'numero')->textInput(['maxlength' => true,'disabled'=>true]) ?>
    								</div>
    							</div>
    						</div>
    						<div class="row">
    							<div class="col-md-2">
    					        	<div class="form-group">
    								    <?= $form->field($model, 'cep')->widget(\yii\widgets\MaskedInput::className(), [
    					                    'mask' => '99999-999'
    					                    ])->textInput(['maxlength' => true,'disabled'=>true,])
    					                ?>
    								</div>
    							</div>
    							<div class="col-md-4">
    					        	<div class="form-group">
    								    <?= $form->field($model, 'bairro')->textInput(['maxlength' => true,'disabled'=>true]) ?>
    								</div>
    							</div>
    						</div>
    
    						<div class="row">
    							<div class="col-md-2">
    					        	<div class="form-group">
    		                        	<?= $form->field($model, 'estado')->widget(Select2::classname(), [
    				                    	'data' => ArrayHelper::map(EstadoFederacao::find()->orderBy('nome_estado')->all(), 'id', 'unidade_federacao'),  
    				        				'pluginOptions' => ['allowClear' => true],
    				                        'hideSearch' => false,
    		                        		'disabled'=>true,
    				                        'options' => [
    				                        	'placeholder' => 'UF',
    				                            	'onchange' => '
    				                                    	if ($(this).val() > 0){                                     
    				                                        	$.post(BASE_PATH + "cidade/lists/'.'"+$(this).val(), function( data ){
    				                                            	$( "#empresa-cidade_id" ).html( data );
    				                							});
    				                						}
    				                						else {
    				                                        	$( "#empresa-cidade_id" ).html( \'\' );
    				                						}
    				            					'
    				                        ],
    				                    ]);
    				        		    $cidades = Cidade::findAll(['estado_federacao_id'=>$model->estado]);
    				        			?>
    								</div>
    							</div>
    							<div class="col-md-4">
    					        	<div class="form-group">
                            			<?= $form->field($model, 'cidade')->widget(Select2::classname(), [
    				                    	'data' => ArrayHelper::map($cidades, 'id', utf8_decode('descricao')),
    				                        'pluginOptions' => ['allowClear' => true],
    				                        'hideSearch' => false,'disabled'=>true,
    				        				'options' => [
    				        					'placeholder' => 'Selecione a cidade'
    				        				]
    				                    ]);
    				                	?>
    								</div>
    							</div>
    						</div>
    
						</fieldset>

						<br>
						<fieldset>						
                    		<legend>Contato</legend>
    
                    		<div class="row">
    							<div class="col-md-3">
    					        	<div class="form-group">
    								    <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'placeholder' => 'email@email.com']) ?>
    								</div>
    							</div>
    							<div class="col-md-3">
    					        	<div class="form-group">
    								    <?= $form->field($model, 'site')->textInput(['maxlength' => true]) ?>
    								</div>
    							</div>
    						</div>	
                    		<div class="row">
    							<div class="col-md-2">
    					        	<div class="form-group">
    								    <?= $form->field($model, 'telefone1')->widget(\yii\widgets\MaskedInput::className(), [
                                            'mask' => ['(99) 9999-9999', '(99) 99999-9999'],])->textInput(['maxlength' => true])
                                        ?>
    								</div>
    							</div>
    							<div class="col-md-2">
    					        	<div class="form-group">
    								    <?= $form->field($model, 'telefone2')->widget(\yii\widgets\MaskedInput::className(), [
                                            'mask' => ['(99) 9999-9999', '(99) 99999-9999'],])->textInput(['maxlength' => true])
                                        ?>
    								</div>
    							</div>							
    						</div>
						</fieldset>

					</div><!-- tab-pane active -->
				</div><!-- tab content -->
			</div>
		

    
    			<div class="col-md-12">
            		<div class="form-group">
            	    	<?= Html::submitButton($model->isNewRecord ? 'Criar Cadastro da Empresa' : 'Alterar Cadastro da Empresa', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            	        <?= Html::a('Cancelar', ['index'], ['class' => 'btn btn-default pull-right']); ?>
            	    </div>
    			</div>
		
    <?php ActiveForm::end(); ?>
    </div>
    </div>
</div>