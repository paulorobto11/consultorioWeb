<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use app\models\EstadoFederacao;
use app\models\Cidade;
use kartik\date\DatePicker;
use yii\helpers\Url;
use kartik\file\FileInput;
use kartik\money\MaskMoney;
use app\models\Convenio;
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
			<div class="nav-tabs-custom">
				<ul class="nav nav-tabs">
		        	<li class="active"><a href="#tab_1" data-toggle="tab">Convênios</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tab_1">
						<fieldset>						
	                      	<legend>Informações de Cadastro do Convenio</legend>
								<div class="col-md-12">   
									<div class="row">
		    							<div class="col-md-9">   
		    								<div class="row">
		    									<div class="col-md-6">
		    							        	<div class="form-group">
		    										        <?= $form->field($model, 'nome')->textInput(['maxlength' => true])->label('Nome do Convenio:') ?>
		    										</div>
		    									</div>
			    								<div class="col-md-3">
			    						        	<div class="form-group">
			    									    <?= $form->field($model, 'cnpj')->widget(\yii\widgets\MaskedInput::className(), [
			    						                    'mask' => '99.999.999/9999-99',
			    						                    ])->textInput(['maxlength' => false,])->label('CNPJ:');
			    						                ?>
			    									</div>
			    								</div>
			    								<div class="col-md-3">
			    						        	<div class="form-group">
			    						    		    <?
			    						    		    $model->dtnascto = $model->dtnascto ? $model->dtnascto:date('d/m/Y');								    		    
			    						    		    echo $form->field($model, 'dtnascto')->widget(DatePicker::classname(), [				        
			    						                    				'options' => ['placeholder' => 'dd/mm/yyyy','onchange'=>'alterar_data(this.value)'],
			    						                    				'readonly' =>false,
			    						                    		    	'removeButton' => false,
			    						                    			    'pluginOptions' => [
			    						                    			    	'autoclose'=>true,
			    						                    			    	'todayHighlight' => true,
			    						                    			    	'format' => 'dd/mm/yyyy',
			    						                    			    	]
			    						                    				])->label('Data Inicio:');
			    						            	?>
			    									</div>
			    								</div>
		    								</div>
		    							</div>
									</div>
	    							<div class="col-md-9">
	    								<div class="row">
			    							<div class="col-md-3">   
			    								<div class="row">
			    									<?= $form->field($model, 'vlrcons')->widget(MaskMoney::className(), ['pluginOptions' => ['prefix' => 'R$ ']])->label('Valor do Serviço:'); ?>
			    								</div>
			    							</div>
		    							</div>
									</div>
	    							<div class="col-md-12">
	    								<div class="row">
											<fieldset>						
					                        	<legend>Informações de Endereço do Convenio</legend>
												<div class="col-md-10">   
													<div class="row">
						    							<div class="col-md-6">
						    					        	<div class="form-group">
						    								    <?= $form->field($model, 'rua')->textInput(['maxlength' => true])->label('Endereço:') ?>
						    								</div>
						    							</div>
						    							<div class="col-md-2">
						    					        	<div class="form-group">
						    								    <?= $form->field($model, 'nroend')->textInput(['maxlength' => true])->label('Numero:') ?>
						    								</div>
						    							</div>
						    						</div>
						    					</div>	
												<div class="col-md-9">   
						    						<div class="row">
						    							<div class="col-md-6">
						    					        	<div class="form-group">
						    								    <?= $form->field($model, 'bairro')->textInput(['maxlength' => true])->label('Bairro:') ?>
						    								</div>
						    							</div>
						    							<div class="col-md-2">
						    					        	<div class="form-group">
						    								    <?= $form->field($model, 'cep')->widget(\yii\widgets\MaskedInput::className(), [
						    					                    'mask' => '99999-999',
						    					                    ])->textInput(['maxlength' => true])->label('CEP:')
						    					                ?>
						    								</div>
						    							</div>
						    						</div>
						    					</div>
												<div class="col-md-9">   
						    						<div class="row">
						    							<div class="col-md-2">
						    					        	<div class="form-group">
						    		                        	<?= $form->field($model, 'uf')->widget(Select2::classname(), [
						    				                    	'data' => ArrayHelper::map(EstadoFederacao::find()->orderBy('nome_estado')->all(), 'id', 'unidade_federacao'),  
						    				        				'pluginOptions' => ['allowClear' => true],
						    				                        'hideSearch' => false,
						    				                        'options' => [
						    				                        	'placeholder' => 'UF',
						    				                            	'onchange' => '
						    				                                    	if ($(this).val() > 0){                                     
						    				                                        	$.post(BASE_PATH + "cidade/lists/'.'"+$(this).val(), function( data ){
						    				                                            	$( "#convenio-cidade" ).html( data );
						    				                							});
						    				                						}
						    				                						else {
						    				                                        	$( "#convenio-cidade" ).html( \'\' );
						    				                						}
						    				            					'
						    				                        ],
						    				                    ])->label('Estado:');
						    				                    $model_cidades = Cidade::find()->all();
						    				                    $data = [];
						    				                    foreach ($model_cidades as $cidades) {
						    				                    	$data += [$cidades->id => utf8_encode($cidades->descricao)];
						    				                    }
						    				        			?>
						    								</div>
						    							</div>
						    							<div class="col-md-6">
						    					        	<div class="form-group">
						                            			<?= $form->field($model, 'cidade')->widget(Select2::classname(), [
						    				                    	'data' => $data,
						    				                        'pluginOptions' => ['allowClear' => true],
						    				                        'hideSearch' => false,
						    				        				'options' => [
						    				        					'placeholder' => 'Selecione a cidade'
						    				        				]
						    				                    ])->label('Cidade:');
						    				                	?>
						    								</div>
						    							</div>
						    						</div>
						    					</div>	
												<div class="col-md-9">   
						    						<div class="row">
						    							<div class="col-md-6">
						    					        	<div class="form-group">
						    								    <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'placeholder' => 'email@email.com']) ?>
						    								</div>
						    							</div>
						    							<div class="col-md-3">
						    					        	<div class="form-group">
						    								    <?= $form->field($model, 'fone')->widget(\yii\widgets\MaskedInput::className(), [
						                                            'mask' => ['(99) 9999-9999', '(99) 99999-9999'],])->textInput(['maxlength' => true])
						                                        ?>
						    								</div>
						    							</div>
								                    </div>
								               </div>         
				    					</fieldset>
				    				</div>		
								</div>
	                      	</div>
	                    </fieldset>  	
					</div><!-- tab-pane  -->
				</div><!-- tab content -->
    			<div class="col-md-3">
            		<div class="form-group"><br>
            	    	<?= Html::submitButton($model->isNewRecord ? 'Criar o Cadastro' : 'Alterar o Cadastro', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            	        <?= Html::a('Cancelar', ['index'], ['class' => 'btn btn-danger pull-right']); ?>
            	    </div>
    			</div>
			</div>
		
    <?php ActiveForm::end(); ?>
    	</div>
    </div>
</div>

<?php
	$this->registerJsFile(Url::home() . 'plugins/accounting/accounting.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
	$this->registerJsFile(Url::home() . 'app/js/jquery.maskedinput.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
	$this->registerJsFile(Url::home() . 'app/js/convenios.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>
