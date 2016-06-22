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
									    		if (empty($model->codigo)) {
										    		$html.= '<div class="col-md-3 text-center">'.
										    				Html::a('<span class="glyphicon glyphicon-user"></span>', false, [
										    						'title' => Yii::t('yii', '2ª via Nota Fiscal'),
										    						'class' => 'btn btn-sm btn-primary',
										    						'id' => 'div_'.$model->id,
										    						'onclick' => 'entra_cadastro("'.$model->id_hora.'","'.$model->medico.'")',]).'</div>';
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
					   			'attribute'=>'codigo',
					   			'header'=>'Codigo',
					   			'hAlign'=>'left',
					   			'vAlign'=>'middle',
					   			'width'=>'30px',
					   			'value'=>function ($model, $key, $index, $widget) {
					   				if (empty($model->codigo)) {
					   					return '';
					   				} else {
					   					return $model->codigo;
					   				}
					   			}
					   			],
					   			
					   			[
					   			'attribute'=>'nome',
					   			'header'=>'Identificao do Paciente',
					   			'hAlign'=>'left',
					   			'vAlign'=>'middle',
					   			'width'=>'240px',
					   			'value'=>function ($model, $key, $index, $widget) {
					   				if (empty($model->nome)) {
					   					return '';
					   				} else {
					   					return $model->nome;
					   				}
					   			}
					   			],  
					   			[
					   			'attribute'=>'fone',
					   			'header'=>'Telefone',
					   			'hAlign'=>'center',
					   			'vAlign'=>'middle',
					   			'width'=>'80px',
					   			'value'=>function ($model, $key, $index, $widget) {
					   					if (empty($model->fone)) {
					   						return '';
					   					} else {
					   						$funcoes = new Funcoes();
					   						return $funcoes->mascaraFone($model->fone);
					   					}
				   					}
					   			],
					   			[
					   			'attribute'=>'tipo',
					   			'header'=>'Pagamento',
					   			'hAlign'=>'center',
					   			'vAlign'=>'middle',
					   			'width'=>'40px',
					   			'value'=>function ($model, $key, $index, $widget) {
					   					if (empty($model->tipo)) {
					   						return '';
					   					} else {
					   						if ($model->tipo == 1)
					   							return 'CONSULTA';
					   						else 
					   							return 'RETORNO';
					   					}
					   				}
					   			],
					   			 
					   			[
					   			'attribute'=>'vlrpgto',
					   			'header'=>'Valor',
					   			'hAlign'=>'center',
					   			'vAlign'=>'middle',
					   			'width'=>'40px',
					   			'value'=>function ($model, $key, $index, $widget) {
							   			if (empty($model->vlrpgto)) {
							   				return '';
							   			} else {
							   				$funcoes = new Funcoes();
							   				return $funcoes->mostraValor($model->vlrpgto);
							   			}
						   			}
					   			],
					   			
					   			[
					   			'attribute'=>'modopgto',
					   			'header'=>'Tipo',
					   			'hAlign'=>'center',
					   			'vAlign'=>'middle',
					   			'width'=>'40px',
					   			'value'=>function ($model, $key, $index, $widget) {
							   			if (empty($model->modopgto)) {
							   				return '';
							   			} else {
							   				if ($model->modopgto == 1) {
							   					return 'DINHEIRO';
							   				} else {
							   					return 'CONVENIO';
							   				}
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
						    		$url  = '';
						    		$html = '';
	
						    		$model_data = new AgendaData();
					    			$data_base = $model_data->entra_data($model->medico);
					    			$data = date('Y-m-d');
				    			
						    		if (!empty($model->codigo)) {
						    			if ($data == $data_base) {
						    				if ($model->confirmada == 1) {
									    		$html.= '<div class="col-md-3 text-center">'.
									    				Html::a('<span class="glyphicon glyphicon-ok-circle"></span>', false, [
									    						'title' => Yii::t('yii', 'Enviar Paciente para Consulta'),
									    						'class' => 'btn btn-sm btn-success',
									    						'id' => 'div_'.$model->id,
									    						'onclick' => 'enviar_consulta("'.$model->id_hora.'","'.$model->provisorio.'")',]).'</div>';
						    				}
						    			}							    				
							    				
							    		$html.= '<div class="col-md-3 text-center">'.
							    				Html::a('<span class="glyphicon glyphicon-eye-open"></span>', false, [
							    						'title' => Yii::t('yii', 'Consultar Paciente Agendado'),
							    						'class' => 'btn btn-sm btn-primary',
							    						'id' => 'div_'.$model->id,
							    						'onclick' => 'consultar_cliente("'.$model->id_hora.'")',]).'</div>';
							    						

							    		/*if ($data <= $data_base) {
							    			if ($model->confirmada == 1) {
									    		$html.= '<div class="col-md-3 text-center">'.
									    				Html::a('<span class="glyphicon glyphicon-remove-circle"></span>', $url, [
									    						'title' => Yii::t('yii', 'Excluir Agendamento do Paciente'),
									    						'class' => 'btn btn-sm btn-danger',
									    						'id' => 'div_'.$model->id,
									    						'onclick' => 'excluir_agendamento("'.$model->id_hora.'")',]).'</div>';
							    			}
							    		}*/
				    			}
					    		
					    		return $html;
					    						 
					    		},
					    		],
					    	];
					    	    							 
					
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
