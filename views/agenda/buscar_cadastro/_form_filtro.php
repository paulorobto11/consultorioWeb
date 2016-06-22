<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use kartik\date\DatePicker;
use app\models\Clientes;
use app\models\ContaReceber;
use app\models\Notafiscal;
use app\models\Contribuinte;

// $options = '<span class="caret"></span>';
// $label = ArrayHelper::remove($options,'label');
// $icon = '<span class="glyphicon glyphicon-edit"></span>';
// $label = ArrayHelper::remove($options, 'label', $icon);
// $filtros = '';

?>

<div class="box box-default no-margin">
    <div class="nav-tabs-custom">
        <div class="box-body">    	
    		<div class="tab-content">
          		<fieldset>
          			<legend id='lg_filtro' style='color:#191970'>&nbsp;&nbsp;&nbsp;<b>Busca de Cadastro de Clientes</b></legend>            						
						<div id='dv_filtro' class="tab-pane active" id="tabDadosFiltros">          			       						
		                    <div class="col-md-9">
			                    <div class="col-md-3">
			                        <div class="row">
										    <?= $form->field($model_agenda, 'bsc_data')->widget(DatePicker::classname(), [				        
		                                        				'options' => ['placeholder' => 'dd/mm/yyyy'],
		                                        				'readonly' =>false,
										    					'removeButton' => false,
		                                        			    'pluginOptions' => [
		                                        			    	'autoclose'=>true,
		                                        			    	'todayHighlight' => false,
		                                        			    	'format' => 'dd/mm/yyyy',
		                                        			    	]
		                                        				])->label('Data de Nascimento:');
		                                	?>
								    </div>
								</div>
		                    
					            <div class="col-md-6">                                                                                                                                
					                <div class="form-group">                                                                                                                          
						                <?php
							                echo $form->field($model_agenda, 'nome_cliente')->textInput()->label('Nome do Paciente:');
					                    ?>
	                    	                    
								    </div>
								</div>
		                    
		                    
		                        	<div class="col-md-3">
		                                <div class="form-group"><br>
								    		<?= Html::button('Buscar Clientes', ['onclick'=>'buscar_cadastro("'.$model_agenda->hora.'","'.$model_agenda->medico.'")','class' => 'btn btn-danger']) ?>
									</div>
							    </div>
							</div>
							
			    		</div>
		    		</fieldset>
		    	</div>
	   		</div>
	   	</div>
	</div>
