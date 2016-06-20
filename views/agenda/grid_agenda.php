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
use yii\helpers\ArrayHelper;

?>

					    	<?php 
					    	$gridColumns = [
					    		[
					    		'attribute' => '#Agendar',
					    		'format' => 'raw',
					    		'hAlign'=>'center',
					    		'vAlign'=>'middle',
					    		'contentOptions' => ['style' => 'width:10px;'],
					    		'value'=>function ($model, $key, $index, $widget) {
					    		$url = '';
					    		$html = '';
					    		
					    		$model_data = new AgendaData();
				    			$data_base = $model_data->entra_data($model->medico);
				    			$data = date('Y-m-d');
				    			 
				    			if ($data <= $data_base) {
						    		$model_agenda = Agenda::findOne(['data'=>$data_base,'hora'=>$model->id,'medico'=>$model->medico]);
						    		if (empty($model_agenda)) {
							    		$html.= '<div class="col-md-3 text-center">'.
							    				Html::a('<span class="glyphicon glyphicon-user"></span>', $url, [
							    						'title' => Yii::t('yii', '2ª via Nota Fiscal'),
							    						'class' => 'btn btn-sm btn-primary',
							    						'id' => 'div_'.$model->id,
							    						'onclick' => 'entra_cadastro("'.$model->id.'","'.$model->medico.'")',]).'</div>';
							    		}
				    			}
						    		return $html;
						    		
					    		}
					    		 
					    		],
					    			
					   			[
					    			'attribute'=>'hora',
					    			'header'=>'Hora',
					    			'hAlign'=>'center',
					    			'vAlign'=>'middle',
					    			'width'=>'40px',
					   			],
					    			
					    			
					   			[
					   			'attribute'=>'medico',
					   			'header'=>'Codigo',
					   			'hAlign'=>'left',
					   			'vAlign'=>'middle',
					   			'width'=>'30px',
			   					'value' => function($data){
					   					$funcoes = new Funcoes();
							    		$model_data = new AgendaData();
						    			$data_base = $model_data->entra_data($data->medico);
					   					
					   					$model_agenda = Agenda::findOne(['data'=>$data_base,'hora'=>$data->id,'medico'=>$data->medico]);
					   					if (!empty($model_agenda)) {
					   						return $model_agenda->codigo;
					   					} else {
					   						return '';
					   					}
						   			}
					   			],
					   			
					   			[
					   			'attribute'=>'medico',
					   			'header'=>'Identificao do Paciente',
					   			'hAlign'=>'left',
					   			'vAlign'=>'middle',
					   			'width'=>'240px',
					   			'value' => function($data){
						   			$funcoes = new Funcoes();
						    		$model_data = new AgendaData();
					    			$data_base = $model_data->entra_data($data->medico);
						   			$cliente = '';
						   			$model_agenda = Agenda::findOne(['data'=>$data_base,'hora'=>$data->id,'medico'=>$data->medico]);
						   			if (!empty($model_agenda)) {
						   				$model_cliente = Clientes::findOne(['codigo'=>$model_agenda->codigo]);
						   				if (!empty($model_cliente)) {
							   				$cliente = $model_cliente->nome;
						   				}
						   			}
					   				return $cliente;
					   			  }
					   			],  
					   			[
					   			'attribute'=>'medico',
					   			'header'=>'Telefone',
					   			'hAlign'=>'center',
					   			'vAlign'=>'middle',
					   			'width'=>'80px',
			   					'value' => function($data){
					   					$funcoes = new Funcoes();
							    		$model_data = new AgendaData();
						    			$data_base = $model_data->entra_data($data->medico);
					   					$model_agenda = Agenda::findOne(['data'=>$data_base,'hora'=>$data->id,'medico'=>$data->medico]);
					   					if (!empty($model_agenda)) {
					   						return $funcoes->mascaraFone($model_agenda->fone);
					   					} else {
					   						return '';
					   					}
						   			}
					   			],
					   			[
					   			'attribute'=>'medico',
					   			'header'=>'Pagamento',
					   			'hAlign'=>'center',
					   			'vAlign'=>'middle',
					   			'width'=>'40px',
					   			'value' => function($data){
							   			$funcoes = new Funcoes();
							    		$model_data = new AgendaData();
						    			$data_base = $model_data->entra_data($data->medico);
							   			$model_agenda = Agenda::findOne(['data'=>$data_base,'hora'=>$data->id,'medico'=>$data->medico]);
							   			if (!empty($model_agenda)) {
								   			if ($model_agenda->modopgto == 1) {
								   				return 'DINHEIRO';
								   			} else {
								   				return 'CONVENIO';
								   			}
							   			} else {
							   				return '';
							   			}
						   			}
					   			],
					   			 
					   			[
					   			'attribute'=>'medico',
					   			'header'=>'Valor',
					   			'hAlign'=>'center',
					   			'vAlign'=>'middle',
					   			'width'=>'40px',
					   			'value' => function($data){
						   			$funcoes = new Funcoes();
						    		$model_data = new AgendaData();
					    			$data_base = $model_data->entra_data($data->medico);
						   			$model_agenda = Agenda::findOne(['data'=>$data_base,'hora'=>$data->id,'medico'=>$data->medico]);
						   			if (!empty($model_agenda)) {
						   				if ($model_agenda->modopgto == 1) {
						   					return $funcoes->mostraValor($model_agenda->vlrpgto);
						   				} else {
						   					return '';
						   				}
						   			} else {
						   				return '';
						   			}
					   			}
					   			],
					   			
					   			[
					   			'attribute'=>'medico',
					   			'header'=>'Tipo',
					   			'hAlign'=>'center',
					   			'vAlign'=>'middle',
					   			'width'=>'40px',
					   			'value' => function($data){
					   			$funcoes = new Funcoes();
					    		$model_data = new AgendaData();
				    			$data_base = $model_data->entra_data($data->medico);
					   			$model_agenda = Agenda::findOne(['data'=>$data_base,'hora'=>$data->id,'medico'=>$data->medico]);
					   			if (!empty($model_agenda)) {
					   				$model_cliente = Clientes::findOne(['codigo'=>$model_agenda->codigo]);
					   				$situacao_cliente = 0;
					   				if (!empty($model_cliente)) {
					   					$situacao_cliente = $model_cliente->tipo;
					   				}
					   				
					   				if ($situacao_cliente == 1) {
					   					return 'Provisório';
					   				} else if ($model_agenda->tipo == 1) {
					   					return 'Consulta';
					   				} else {
					   					return 'Retorno';
					   				}
					   			} else {
					   				return '';
					   			}
					   			}
					   			],
					   			 
					    		[
					    		'attribute' => '',
					    		'format' => 'raw',
					    		'hAlign'=>'center',
					    		'vAlign'=>'middle',
					    		'contentOptions' => ['style' => 'width:90px;'],
					    		'value'=>function ($model, $key, $index, $widget) {
						    		$url = '';
						    		$html = '';
	
						    		$model_data = new AgendaData();
					    			$data_base = $model_data->entra_data($model->medico);
					    			$data = date('Y-m-d');
				    			
						    		$model_agenda = Agenda::findOne(['data'=>$data_base,'hora'=>$model->id,'medico'=>$model->medico]);
						    		if (!empty($model_agenda)) {
						    			$model_cliente = Clientes::findOne(['codigo'=>$model_agenda->codigo]);
						    			if (!empty($model_cliente)) {
						    				$situacao_cliente = $model_cliente->tipo;
						    			}
						    			 
						    			if ($data == $data_base) {
						    				if ($model_agenda->confirmada == 1) {
									    		$html.= '<div class="col-md-3 text-center">'.
									    				Html::a('<span class="glyphicon glyphicon-ok-circle"></span>', $url, [
									    						'title' => Yii::t('yii', 'Enviar Paciente para Consulta'),
									    						'class' => 'btn btn-sm btn-success',
									    						'id' => 'div_'.$model->id,
									    						'onclick' => 'enviar_consulta("'.$model->id.'","'.$situacao_cliente.'")',]).'</div>';
						    				}
						    			}							    				
							    				
							    		$html.= '<div class="col-md-3 text-center">'.
							    				Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
							    						'title' => Yii::t('yii', 'Consultar Paciente Agendado'),
							    						'class' => 'btn btn-sm btn-primary',
							    						'id' => 'div_'.$model->id,
							    						'onclick' => 'consultar_cliente("'.$model->id.'")',]).'</div>';
							    						

							    		if ($data <= $data_base) {
							    			if ($model_agenda->confirmada == 1) {
									    		$html.= '<div class="col-md-3 text-center">'.
									    				Html::a('<span class="glyphicon glyphicon-remove-circle"></span>', $url, [
									    						'title' => Yii::t('yii', 'Excluir Agendamento do Paciente'),
									    						'class' => 'btn btn-sm btn-danger',
									    						'id' => 'div_'.$model->id,
									    						'onclick' => 'excluir_agendamento("'.$model->id.'")',]).'</div>';
							    			}
							    		}
				    			}
					    		
					    		return $html;
					    						 
					    		},
					    		]
					    		
					    	];
					    	    							 
					    	//$dataProvider->setSort(['defaultOrder' => ['id' => 'asc']]);
					
					    	Pjax::begin(['id'=>'EmpresaGrid']);
					    	
					    	echo GridView::widget([
					    		'dataProvider'=>$dataProvider,
					    		'columns'=>$gridColumns,
					    		'containerOptions'=>['style'=>'overflow: auto'], // only set when responsive = false
					    		'headerRowOptions'=>['class'=>'kartik-sheet-style'],
					    		'filterRowOptions'=>['class'=>'kartik-sheet-style'],
					    		'pjax'=>true,
					    		'toolbar'=> [
					    			[
// 					    					'content'=>
// 					    					//Html::a('Cadastro Novo Provisorio', [''], ['onclick'=>'excluir_consulta()','class' => 'btn btn-success', 'title' => 'Nova Empresa'])
// 					    					Html::a('<span class="glyphicon glyphicon-remove-circle"> LIMPAR-CONSULTAS-ENVIADAS</span>', '', [
// 					    							'title' => Yii::t('yii', 'Excluir o envio de Consultas para Atendimento !'),
// 					    							'class' => 'btn btn-sm btn-danger',
// 					    							'id' => 'div_'.$model->id,
// 					    							'onclick' => 'excluir_consulta()',])
					    					
					    			],
					    		],
					    		'bordered'=>true,
					    		'striped'=>true,
					    		'condensed'=>true,
					    		'responsive'=>false,
					    		'hover'=>true,
					    		'panel'=> [
					    			'type'=>GridView::TYPE_PRIMARY,
					    			'heading'=> 'Lista de Agendamentos de Pacientes',
					    		],
					    		'persistResize'=>false,
					    	]);
					    	
					    	Pjax::end();
					    	?>
