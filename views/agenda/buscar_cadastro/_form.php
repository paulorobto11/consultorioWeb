<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use app\models\EstadoFederacao;
use app\models\Cidade;
use kartik\date\DatePicker;
use app\models\Convenio;
use kartik\money\MaskMoney;
use yii\helpers\Url;
use app\models\Funcoes;

?>

<?php $form = ActiveForm::begin(); 	?>
    <input type='hidden' id='id' name='id' value='<?=$model_agenda->hora?>'>
    <input type='hidden' id='medico' name='medico' value='<?=$model_agenda->medico?>'>

<div class="empresa-form">
	<div class="box box-primary">
		<div class="box-body">
			<div class="tab-content">
					<div class="tab-pane active" id="tab_1">
						<fieldset>						
                        	<legend>Cadastro Provisório de Cliente - Paciente</legend>

				        	<div class="col-md-4" <?php if (!$model->isNewRecord) { ?> style='display:block' <?php } else { ?> style='display:none' <?php } ?> >	
				        		<div class="box box-primary" style="overflow:hidden">
				                	<div class="box-body box-profile">
						    			<?php
						    			$_path=Url::to([\Yii::$app->params['dir']['fotos']['fotos']]);
						    			$model->foto = $model->foto ?  $model->foto : 'default_paciente.png';
						    			$foto = $_path.'/'.$model->foto;
						    			$imagem = $model->foto ? '<img src="'.$foto.'"':'&lt;&lt; Inserir a Foto do Cliente &gt;&gt;';
						    			 
// 					    					$_path=Url::to([\Yii::$app->params['dir']['fotos']['fotos']]);
					    					
// 						    				$foto = $model->foto ?  $_path.'/'.$model->foto : '';
// 						    				$imagem = $model->foto ? '<img src="'.$foto.'"':'&lt;&lt; Inserir a Foto do Cliente &gt;&gt;';
						    			?>
				                		<div id='dv_results'>
				                        	<img class="profile-user-img img-responsive img-circle"  style='height:120px; margin:10px;width:160px' id="results" src="<?=$foto?>" alt="Foto">
				                        </div>
				                  	</div><!-- /.box-body -->
				                </div>	
				        	</div>
							<div class="col-md-8">
                        	<div class="row">
    							<div class="col-md-12">   
    								<div class="row">
    									<div class="col-md-10">
    							        	<div class="form-group">
    										    <?= $form->field($model, 'nome')->textInput(['maxlength' => true,'disabled'=>$model->isNewRecord ? false:true])->label('Nome do Cliente:') ?>
    										</div>
    									</div>
    								</div>
    							</div>
    							
    							<div class="col-md-12">   
    								<div class="row">
    									<div class="col-md-3">
    							        	<div class="form-group">
		    								    <?= $form->field($model, 'fone')->widget(\yii\widgets\MaskedInput::className(), [
		                                            'mask' => ['(99) 9999-9999', '(99) 99999-9999'],])->textInput(['maxlength' => true,'disabled'=>$model->isNewRecord ? false:true])->label('Telefone:')
		                                        ?>
    										</div>
    									</div>
    									<div class="col-md-3">
    							        	<div class="form-group">
		    								    <?= $form->field($model, 'celular')->widget(\yii\widgets\MaskedInput::className(), [
		                                            'mask' => ['(99) 9999-9999', '(99) 99999-9999'],])->textInput(['maxlength' => true,'disabled'=>$model->isNewRecord ? false:true])->label('Celular:')
		                                        ?>
    										</div>
    									</div>
    								</div>
    							</div>
    							
    							<div class="col-md-12">   
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
	    								    			
	    								    	'disabled'=>$model->isNewRecord ? false:true,
	    				                    	'hideSearch' => true,
										   ])->label('Tipo Pagamento'); ?>
    										</div>
    									</div>
		    							<div id='dv_dinheiro' class="col-md-9" <?php if ($model->formapgto != 2) { ?> style='display:block' <?php } else { ?> style='display:none' <?php } ?>>   
		    								<div class="row">
		    									<div class="col-md-4">
		    							        	<div class="form-group">
														<?= $form->field($model, 'vlrcons')->widget(MaskMoney::className(), ['options'=>['onchange'=>'entra_valores(),','disabled'=>$model->isNewRecord ? false:true],'pluginOptions' => ['prefix' => 'R$ ']])->label('Valor da Consulta:'); ?>  										
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
										                        'pluginOptions' => ['allowClear' => true],
										                        'hideSearch' => false,
										                		'disabled'=>$model->isNewRecord ? false:true,
										                        'pluginEvents' => [                                                	         
										                        ],
										                		 
										                    ])->label('Convenio:');
										                ?>
		    										    
		    										</div>
		    									</div>
				    							<div class="col-md-3">
				    					        	<div class="form-group">
				    					        	     <?= $form->field($model, 'matricula')->textInput(['maxlength' => true,'disabled'=>$model->isNewRecord ? false:true])->label('Matricula:') ?>
				    								</div>
				    							</div>
				    							<div class="col-md-4">
				    					        	<div class="form-group">
				    					        	<? 
				    					        		$funcoes = new Funcoes();
				    					        		
				    					        		$model->dtavalid = $model->dtavalid ? $funcoes->ajustaData($model->dtavalid) : ''; 
										    		    echo $form->field($model, 'dtavalid')->widget(DatePicker::classname(), [				        
										                    				'options' => ['placeholder' => 'dd/mm/yyyy'],
										                    				'readonly' =>false,
										    		    					'disabled' => $model->isNewRecord ? false:true,
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
    							
    							
    						</div>	
	    					</div>	
						</fieldset>
					</div><!-- tab-pane  -->			
	    			<div class="col-md-9">
	            		<div class="form-group">
	            	    	<?= $model->isNewRecord ? Html::button('Salvar o Cadastro do Cliente', ['onclick'=>'salvar_cliente()','class' => 'btn btn-success']) : ''?>
	            	    </div>
	    			</div>
			</div>
		</div>
	</div>
</div>
<?php ActiveForm::end(); ?>
