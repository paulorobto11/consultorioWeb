<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use app\models\Funcoes;
use kartik\form\ActiveForm;
use app\models\Clientes;

$model = new Clientes();

?>

    	<?php 
    	$gridColumns = [
    	    [
    	        'class'=>'kartik\grid\SerialColumn',
    	        'header'=>'#',
    	    	'width'=>'10px',
    	    ],
    		[
    			'attribute'=>'nome',
            	'header'=>'Nome do Cliente',
            	'hAlign'=>'left',
            	'vAlign'=>'middle',
            	'width'=>'150px',
			],
    			[
    			'attribute'=>'dtnascto',
    			'header'=>'Nascimento',
    			'hAlign'=>'center',
    			'vAlign'=>'middle',
    			'width'=>'50px',
    			'value' => function($data){
    			$funcoes = new Funcoes();
    			return $funcoes->ajustaData($data->dtnascto);
    			}
    			],
    			 
    		[
    			'attribute'=>'fone',
            	'header'=>'Telefone',
            	'hAlign'=>'center',
            	'vAlign'=>'middle',
            	'width'=>'50px',
    			'value' => function($data){
		    			$funcoes = new Funcoes();
		    			return $funcoes->mascaraFone($data->fone);
    				}
            	
			],
    		[
    			'attribute'=>'dataultima',
            	'header'=>'Ultima Consulta',
            	'hAlign'=>'center',
            	'vAlign'=>'middle',
            	'width'=>'50px',
    			'value' => function($data){
    					$funcoes = new Funcoes();
    					return $funcoes->ajustaData($data->dataultima);
    				}
			],
			
			
			[
			'attribute' => 'Consulta',
			'format' => 'raw',
			'vAlign'=>'middle',
					'hAlign'=>'center',
			'width'=>'40px',
			'contentOptions' => ['style' => 'width:40px;'],
			'value'=>function ($model, $key, $index, $widget) {
					$url = '';
					$html = '';
					$html.= Html::button('', ['onclick'=>'entra_dados('.$model->codigo.',"1")','class' => 'glyphicon glyphicon-ok-circle btn btn-primary']);
					return $html;
				},
			],
			[
			'attribute' => 'Retorno',
			'format' => 'raw',
			'vAlign'=>'middle',
			'hAlign'=>'center',
			'width'=>'40px',
			'contentOptions' => ['style' => 'width:40px;'],
			'value'=>function ($model, $key, $index, $widget) {
			$url = '';
			$html = '';
			$html.= Html::button('', ['onclick'=>'entra_dados("'.$model->codigo.'","2")','class' => 'glyphicon glyphicon-refresh btn btn-primary']);
			return $html;
			},
			]
				
    			 
    	];
    	    							 
    	//$dataProvider->setSort(['defaultOrder' => ['nr_nota' => 'desc']]);

    	Pjax::begin(['id'=>'EmpresaGrid']);
    	
    	echo GridView::widget([
    		'dataProvider'=>$dataProvider,
    		'columns'=>$gridColumns,
    		'containerOptions'=> false, //['style'=>'overflow: auto'], // only set when responsive = false
    		'headerRowOptions'=>['class'=>'kartik-sheet-style'],
    		'filterRowOptions'=>['class'=>'kartik-sheet-style'],
    		'pjax'=>true,
    		'toolbar'=> [
    			[
    					'content'=> Html::button('Novo Cadastro', ['onclick'=>'novo_cadastro("'.$model_agenda->hora.'","'.$model_agenda->medico.'")','class' => 'btn btn-danger'])
    			],
    		],
    		'bordered'=>false,
    		'striped'=>true,
    		'condensed'=>true,
    		'responsive'=>false,
    		'hover'=>true,
    		'panel'=> [
    			'type'=>GridView::TYPE_PRIMARY,
    			'heading'=> 'Lista de Cadastro de Clientes',
    		],
    		'persistResize'=>true,
    	]);
    	
    	Pjax::end();
    	?>
