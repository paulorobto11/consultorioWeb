<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Usuarios;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use app\models\Funcoes;
use app\models\Horario;
use yii\widgets\Pjax;
use kartik\grid\GridView;
use app\models\Agenda;
use app\models\Clientes;
use app\models\AgendaData;
use yii\helpers\Url;

?>

<div class="agenda-form">

    <?php $form = ActiveForm::begin(); ?>
    
	<div class="box box-primary">
		<div class="box-body">
			<div class="tab-content">
				<div class="tab-pane active" id="tab_1">
					<div class="col-md-12" style='hAlign: center;vAlign:middle'>   
					    <div class="row">
					    	<div class="col-md-3"></div>
							<div class="col-md-3">
							    <div class="form-group">
								    <?php
									    $model_medico = Usuarios::findAll(['tipo_user'=>2]);
									    $data = [];
									    foreach ($model_medico as $medico) {
									    	$data += [$medico->id => $medico->apelido];
									    }
									    
									    echo $form->field($model_agenda, 'bsc_medico')->widget(Select2::classname(), [
									    		'data' => $data,
									    		'options' => [
									    				'placeholder' => 'Medico para Acesso',
									    				'onchange' => 'alterar_medico(this.value)',
									    		],
									    		'hideSearch' => true,
									    ])->label('Medico Agendamento');
								    ?>
											    	        	
							    </div>
							</div>
						
							<div class="col-md-2">
							    <div class="form-group">
							    
							    
							        <?
							        //$model->bsc_data_agenda = date('d/m/Y');
							      	echo  $form->field($model_agenda, 'bsc_data_agenda')->widget(DatePicker::classname(), [				        
							            				'options' => ['placeholder' => 'dd/mm/yyyy',
							            				'onchange' => 'alterar_data(this.value)',],
							        					'removeButton' => false,
							            				'readonly' =>true,
							            			    'pluginOptions' => [
							            			    	'autoclose'=>true,
							            			    	'todayHighlight' => true,
							            			    	'format' => 'dd/mm/yyyy',
							            			    	]
							            				])->label('Data Agendamento:');
							    	?>
							    </div>
							</div>
					    </div>
					</div>
					
					<div id='dv_grid' class="col-md-12" style='hAlign: center;vAlign:middle'>   
					    <div class="row">
							<?php 
								echo $this->render('grid_agenda', [
													'model' 	  => $model,
													'searchModel' => $searchModel,
													'dataProvider' => $dataProvider,
							    ]);
							?>
					    </div>
					</div>
					
    			</div>
    		</div>
		</div>
	</div>
</div>	
    <?php ActiveForm::end(); ?>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg">
     <div class="modal-content">
		<div id="div_mod"></div>
     </div>
  </div>
</div>

<div class="modal fade" id="myModalCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg">
     <div class="modal-content">
            	<div class="modal-header">
                	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                	<h4 class="modal-title text-primary"><i class="fa fa-user-plus"></i> Novo Cliente</h4>
              	</div>
              	<div class="modal-body no-padding"></div>
     
		<div id="div_mod"></div>
     </div>
  </div>
</div>



<?php
	$this->registerJsFile(Url::home() . 'plugins/accounting/accounting.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
	$this->registerJsFile(Url::home() . 'app/js/jquery.maskedinput.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
	$this->registerJsFile(Url::home() . 'app/js/mascaras.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
	$this->registerJsFile(Url::home() . 'app/js/agenda.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?> 



