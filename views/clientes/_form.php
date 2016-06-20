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
		
		<input type='hidden' id='foto_cliente' name='foto_cliente' value='<?=$model->foto?>'>
		<input type='hidden' id='codigo_cliente' name='codigo_cliente' value='<?=$model->codigo?>'>
		
		<div class="box-body">
		
			<!-- Custom Tabs -->
			<div class="nav-tabs-custom">
				<ul class="nav nav-tabs">
		        	<li class="active"><a href="#tab_1" data-toggle="tab">Cadastro</a></li>
		        	<li><a href="#tab_2" data-toggle="tab">Financeiro</a></li>
		        	<li><a href="#tab_3" data-toggle="tab">Endereço</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tab_1">
							<fieldset>						
	                        	<legend>Informações de Cadastro do Cliente</legend>
								<div class="col-md-8">   
									<div class="row">
		    							<div class="col-md-12">   
		    								<div class="row">
		    									<div class="col-md-8">
		    							        	<div class="form-group">
		    										        <?= $form->field($model, 'nome')->textInput(['maxlength' => true])->label('Nome do Cliente:') ?>
		
		    										</div>
		    									</div>
		    									<div class="col-md-3">
		    							        	<div class="form-group">
		    							        			<?php if (empty($model->tipo)||$model->tipo == 0) $model->tipo = 'Normal'; else $model->tipo = 'Provisorio'?>
		    										        <?= $form->field($model, 'tipo')->textInput(['maxlength' => true,'disabled'=>true])->label('Tipo Cadastro:') ?>
		
		    										</div>
		    									</div>
		    								</div>
		    							</div>
		    							<div class="col-md-12">
		    								<div class="row">
											<fieldset>						
					                        	<legend>Informações dos dados Pessoais</legend>
				    							<div class="col-md-10">   
				    								<div class="row">
				    									<div class="col-md-3">
				    							        	<div class="form-group">
				    										    <?= $form->field($model, 'cpf')->widget(\yii\widgets\MaskedInput::className(), [
				    							                    'mask' => '999.999.999-99',
				    							                    ])->textInput(['maxlength' => false,'onchange'=>'validar_cpf(this.value)'])->label('CPF:');
				    							                ?>
				    										</div>
				    									</div>
				    									<div class="col-md-4">
				    							        	<div class="form-group">
		    													<?= $form->field($model, 'rg')->textInput(['maxlength' => true])->label('RG.:') ?>
				    										</div>
				    									</div>
				    									<div class="col-md-2">
				    							        	<div class="form-group">
				    							        		<?php $model->ufemis = $model->ufemis ? $model->ufemis : 'PR'; ?>
				    							        		
						    		                        	<?= $form->field($model, 'ufemis')->widget(Select2::classname(), [
						    				                    	'data' => ArrayHelper::map(EstadoFederacao::find()->orderBy('nome_estado')->all(), 'id', 'unidade_federacao'),  
						    				                        'hideSearch' => false,
						    				                    ])->label('Estado:');
						    				                    ?>
				    										</div>
				    									</div>
					    							</div>
				    							</div>
				    							<div class="col-md-10">   
				    								<div class="row">
				    									<div class="col-md-3">
				    							        	<div class="form-group">
				    								    <?= $form->field($model, 'estcivil')->widget(Select2::classname(), [
				    										'data' => [
				    										    1 => 'Solteiro',
				    										    2 => 'Casado',
			    												3 => 'Separado',
			    												4 => 'Viuvo',
			    												5 => 'Outros',
				    										],
				    									    'options' => ['placeholder' => 'Selecione'],
				    				                        'pluginOptions' => ['allowClear' => true],
				    				                    	'hideSearch' => true,
													   ])->label('Estado Civil:'); ?>
				    										</div>
				    									</div>
				    									<div class="col-md-8">
				    							        	<div class="form-group">
															    <?= $form->field($model, 'conjuge')->textInput(['maxlength' => true]) ?>
				    										</div>
				    									</div>
					    							</div>
				    							</div>
		
		
				    							<div class="col-md-10">   
				    								<div class="row">
				    									<div class="col-md-6">
				    							        	<div class="form-group">
															    <?= $form->field($model, 'mae')->textInput(['maxlength' => true]) ?>
				    										</div>
				    									</div>
				    									<div class="col-md-6">
				    							        	<div class="form-group">
															    <?= $form->field($model, 'pai')->textInput(['maxlength' => true]) ?>
				    										</div>
				    									</div>
					    							</div>
				    							</div>
		
		
				    							<div class="col-md-9">   
				    								<div class="row">
				    									<div class="col-md-4">
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
												                    				])->label('Data Nascimento:');
												            	?>
				            								</div>
				            							</div>    
				    									<div class="col-md-2">
				    							        	<div class="form-group">
														        <?= $form->field($model, 'idade')->textInput(['maxlength' => true])->label('Idade:') ?>
				    										</div>
				    									</div>
				    									<div class="col-md-4">
				    							        	<div class="form-group">
				    								    <?= $form->field($model, 'sexo')->widget(Select2::classname(), [
				    										'data' => [
				    										    1 => 'Masculino',
				    										    2 => 'Feminino',
				    										],
				    				                    	'hideSearch' => true,
													   ])->label('Sexo:'); ?>
		    
				    										</div>
				    									</div>
		
				    									<div class="col-md-2">
				    							        	<div class="form-group">
				    								    <?= $form->field($model, 'sangue')->widget(Select2::classname(), [
				    										'data' => [
				    										    1 => 'A-',
				    										    2 => 'A+',
			    												3 => 'B-',
			    												4 => 'B+',
			    												5 => 'O-',
			    												6 => 'O+',
				    										],
				    				                    	'hideSearch' => true,
													   ])->label('Sangue:'); ?>
		    
				    										</div>
				    									</div>
					    							</div>
				    							</div>
		
		
				    							<div class="col-md-10">   
				    								<div class="row">
				    									
				    									<div class="col-md-6">
				    							        	<div class="form-group">
															    <?= $form->field($model, 'profissao')->textInput(['maxlength' => true])->label('Profissão:') ?>
				    										</div>
				    									</div>
				    									
				    									<div class="col-md-6">
				    							        	<div class="form-group">
															    <?= $form->field($model, 'natural')->textInput(['maxlength' => true])->label('Natural:') ?>
				    										</div>
				    									</div>
				    									
				    								</div>
				    							</div>
				    						</fieldset>
				    					</div>		
									</div>
								</div>	
					          </div>              	
							  <div class="col-md-4" align='center'>   
									<div class="row">
		    							<div class="col-md-12">   
		    								<div class="row">
		    								    <?php
	    								           $_path=Url::to([\Yii::$app->params['dir']['fotos']['fotos']]);
		    								       $foto = $model->foto ?  $_path.'/'.$model->foto : '';
		    								       $imagem = $model->foto ? '<img src="'.$foto.'"':'&lt;&lt; Inserir a Foto do Cliente &gt;&gt;';
		    								    ?>
		    									<div id="results" style='background:#063E6F;text-align:center;color:#fff'><?=$imagem?></div>
			    							</div>
	    								</div>
					    							<div id='dv_foto1' class="col-md-12" <?php if ($model->foto) { ?> style='display:block' <?php } else { ?> style='display:none' <?php } ?>>   
													<?= Html::button('Excluir a Foto', ['id'=>'btn_foto','onclick'=>'excluir_foto()','class' => 'btn btn-danger' ]) ?>
													<?= Html::button('Tirar Nova Foto', ['id'=>'btn_foto','onclick'=>'tirar_foto()','class' => 'btn btn-primary' ]) ?>
					    							</div>
					    							<div id='dv_foto2' align='center' class="col-md-12" <?php if (empty($model->foto)) { ?> style='display:block' <?php } else { ?> style='display:none' <? } ?>>
					    							       <div class="row">
					    							       		<?= Html::button('Foto do Cliente', ['id'=>'btn_foto','onclick'=>'tirar_foto()','class' => 'btn btn-danger' ]) ?>
					    							       </div>
					    							</div>
									</div>
							  </div>	
	                        </fieldset>
					</div><!-- tab-pane active -->

					<div class="tab-pane" id="tab_2">
							<fieldset>						
	                        	<legend>Informações de Pagamento do Cliente</legend>
	                        	
    							<div class="col-md-9">   
    								<div class="row">
    									<div class="col-md-3">
    							        	<div class="form-group">
	    								    <?= $form->field($model, 'formapgto')->widget(Select2::classname(), [
	    										'data' => [
	    										    1 => 'Dinheiro',
	    										    2 => 'Convenio',
	    										],
    								    		'options' => [
	    								    				'onchange' => '
		    				                                    	if ($(this).val() == 1) {
    								    								$("#dv_convenio").hide();
    								    								$("#dv_dinheiro").show();
		    				                						} else {
    								    								$("#dv_dinheiro").hide();
    								    								$("#dv_convenio").show();
																	}',
	    								    		],
	    				                    	'hideSearch' => true,
										   ])->label('Tipo Pagamento'); ?>
    										</div>
    									</div>
		    							<div id='dv_dinheiro' class="col-md-9" <?php if ($model->formapgto !=2) { ?> style='display:block' <?php } else { ?> style='display:none' <?php } ?>>   
		    								<div class="row">
		    									<div class="col-md-4">
		    							        	<div class="form-group">
														<?= $form->field($model, 'vlrcons')->widget(MaskMoney::className(), ['options'=>['onchange'=>'entra_valores(),'],'pluginOptions' => ['prefix' => 'R$ ']])->label('Valor do Serviço:'); ?>  										
													</div>
		    									</div>
		    								</div>
		    							</div>
		    							
		    							<div id='dv_convenio' class="col-md-12"  <?php if ($model->formapgto == 2) { ?> style='display:block' <?php } else { ?> style='display:none' <?php } ?>>   
		    								<div class="row">
		    									<div class="col-md-4">
		    							        	<div class="form-group">
										                <?php
										                $data = [];
										                $arrConvenio = Convenio::find()->all();
										                foreach ($arrConvenio as $convenios) {
										                	$data += [$convenios->id => utf8_encode($convenios->nome)];
										                }
										                
										                echo $form->field($model, 'convenio')->widget(Select2::classname(), [
										                		'data' => $data,
										                        'options' => ['placeholder' => 'Selecione o Convenio',
										                        ],
										                        'pluginOptions' => ['allowClear' => true],
										                        'hideSearch' => false,
										                    ])->label('Convenio:');
										                ?>
		    										    
		    										</div>
		    									</div>
				    							<div class="col-md-3">
				    					        	<div class="form-group">
				    					        	     <?= $form->field($model, 'matricula')->textInput(['maxlength' => true,])->label('Matricula:') ?>
				    								</div>
				    							</div>
				    							<div class="col-md-3">
				    					        	<div class="form-group">
				    					        	<? 
										    		    echo $form->field($model, 'dtavalid')->widget(DatePicker::classname(), [				        
										                    				'options' => ['placeholder' => 'dd/mm/yyyy'],
										                    				'readonly' =>false,
										                    		    	'removeButton' => false,
										                    			    'pluginOptions' => [
										                    			    	'autoclose'=>true,
										                    			    	'todayHighlight' => true,
										                    			    	'format' => 'dd/mm/yyyy',
										                    			    	]
										                    				])->label('Data Emissão:');
				                    				?>
				    								</div>
				    							</div>
		    								</div>
		    							</div>
    									
    								</div>
    							</div>
								<div class="col-md-9">   
									<div class="row">
										<fieldset>						
				                        	<legend>Informações de Consultas</legend>
					                    		<div class="row">
					    							<div class="col-md-3">
					    					        	<div class="form-group">
					    					        	<? 
											    		    echo $form->field($model, 'dtacons')->widget(DatePicker::classname(), [				        
											                    				'options' => ['placeholder' => 'dd/mm/yyyy'],
											                    				'readonly' =>false,
											    		    					'disabled' => true,
											                    		    	'removeButton' => false,
											                    			    'pluginOptions' => [
											                    			    	'autoclose'=>true,
											                    			    	'todayHighlight' => true,
											                    			    	'format' => 'dd/mm/yyyy',
											                    			    	]
											                    				])->label('1ª Consulta:');
					                    				?>
					    								</div>
					    							</div>
					    							<div class="col-md-3">
					    					        	<div class="form-group">
					    					        	<? 
											    		    echo $form->field($model, 'dataultima')->widget(DatePicker::classname(), [				        
											                    				'options' => ['placeholder' => 'dd/mm/yyyy'],
											                    				'readonly' =>false,
											    		    					'disabled' => true,
											                    		    	'removeButton' => false,
											                    			    'pluginOptions' => [
											                    			    	'autoclose'=>true,
											                    			    	'todayHighlight' => true,
											                    			    	'format' => 'dd/mm/yyyy',
											                    			    	]
											                    				])->label('Ultima Consulta:');
					                    				?>
					    								</div>
					    							</div>
					    							<div class="col-md-3">
					    					        	<div class="form-group">
					    					        	<? 
											    		    echo $form->field($model, 'dtaproxima')->widget(DatePicker::classname(), [				        
											                    				'options' => ['placeholder' => 'dd/mm/yyyy'],
											                    				'readonly' =>false,
											    		    					'disabled' => true,
											                    		    	'removeButton' => false,
											                    			    'pluginOptions' => [
											                    			    	'autoclose'=>true,
											                    			    	'todayHighlight' => true,
											                    			    	'format' => 'dd/mm/yyyy',
											                    			    	]
											                    				])->label('Proxima Consulta:');
					                    				?>
					    								</div>
					    							</div>							
					    						</div>
				                        	
				                        </fieldset>
				                    </div>
				               </div>         
    							
							</fieldset>
					</div><!-- tab-pane  -->
					<div class="tab-pane" id="tab_3">
							<fieldset>						
	                        	<legend>Informações de Endereço do Cliente</legend>
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
		    				                                            	$( "#clientes-cidade" ).html( data );
		    				                							});
		    				                						}
		    				                						else {
		    				                                        	$( "#clientes-cidade" ).html( \'\' );
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
		    					
								<div class="col-md-10">   
									<div class="row">
										<fieldset>						
				                        	<legend>Informações de Contato do Cliente</legend>
					                    		<div class="row">
					    							<div class="col-md-4">
					    					        	<div class="form-group">
					    								    <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'placeholder' => 'email@email.com']) ?>
					    								</div>
					    							</div>
					    							<div class="col-md-2">
					    					        	<div class="form-group">
					    								    <?= $form->field($model, 'fone')->widget(\yii\widgets\MaskedInput::className(), [
					                                            'mask' => ['(99) 9999-9999', '(99) 99999-9999'],])->textInput(['maxlength' => true])
					                                        ?>
					    								</div>
					    							</div>
					    							<div class="col-md-2">
					    					        	<div class="form-group">
					    								    <?= $form->field($model, 'celular')->widget(\yii\widgets\MaskedInput::className(), [
					                                            'mask' => ['(99) 9999-9999', '(99) 99999-9999'],])->textInput(['maxlength' => true])
					                                        ?>
					    								</div>
					    							</div>							
					    						</div>
				                        	
				                        </fieldset>
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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-bg">
     <div class="modal-content">
     <div class="modal-content">
            	<div class="modal-header">
                	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                	<h4 class="modal-title text-primary"><i class="fa fa-user-plus"></i>Foto do Cliente</h4>
              	</div>
              	<div class="modal-body no-padding"></div>
				<div class="box box-primary">
					<div class="box-body">
						<div id='dv_camera' >
											<div id="my_camera"></div>
									
											<div id="pre_take_buttons"><br><br>
												<?= Html::button('Bater a Foto', ['onclick'=>'preview_snapshot()','class' => 'btn btn-success' ]) ?>
											</div>
											<div id="post_take_buttons" style="display:none"><br><br>
												<?= Html::button('&lt; Bater a Foto Novamente', ['onclick'=>'cancel_preview()','class' => 'btn btn-success' ]) ?>
												<?= Html::button('Salvar a Foto &gt;', ['onclick'=>'save_photo()','class' => 'btn btn-success' ]) ?>
											</div>
			
			
						</div>
					</div>
				</div>
	 </div>					
     </div>
  </div>
</div>

<?php 
$css = <<< CSS

		#results { float:right; margin:20px; padding:20px; border:1px solid; background:#ccc; }
		
CSS;
	
$this->registerCss($css);

?>



<?php 
$js = <<< JS

		Webcam.set({
			width: 320,
			height: 240,
			image_format: 'jpeg',
			jpeg_quality: 90
		});
		//Webcam.attach( '#my_camera' );

JS;
	
$this->registerJs($js);

?>


<?php
	$this->registerJsFile(Url::home() . 'plugins/accounting/accounting.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
	$this->registerJsFile(Url::home() . 'app/js/jquery.maskedinput.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
	$this->registerJsFile(Url::home() . 'app/js/clientes.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
	$this->registerJsFile(Url::home() . 'plugins/webcamjs-master/webcam.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>
