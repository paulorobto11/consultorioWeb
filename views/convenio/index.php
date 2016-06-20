<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\bootstrap\Modal;
use app\models\Funcoes;


$this->title = 'Lista de Convenios';
$this->params['breadcrumbs'][] = 'Consulta';
?>

<!-- Default box -->
<div class="box">
    <div class="box-body">
		<?php
        	Modal::begin([
        		'header' => '<h4>Cadastro</h4>',
        		'id' => 'modal',
        		'size' => 'modal-lg',
        	]);
        	echo "<div id='modalContent'></div>";
        	Modal::end();
        ?>
        
        <?php
        $gridColumns =  [
   				[
   				'attribute'=>'id',
   				'header'=>'Codigo',
   				'hAlign'=>'center',
   				'vAlign'=>'middle',
   				'width'=>'60px',
   				],
        		[
   				'attribute'=>'nome',
   				'header'=>'Nome do Convenio',
   				'hAlign'=>'left',
   				'vAlign'=>'middle',
   				'width'=>'220px',
        		],
        		
        		[
   				'attribute'=>'dtnascto',
   				'header'=>'Data Inicio',
   				'hAlign'=>'left',
   				'vAlign'=>'middle',
   				'width'=>'80px',
   				'value'=>function ($model, $key, $index, $widget) {
   								$funcoes = new Funcoes();
   								return $funcoes->ajustaData($model->dtnascto);
        				},
        		],
        		[
   				'attribute'=>'fone',
   				'header'=>'Telefone',
   				'hAlign'=>'center',
   				'vAlign'=>'middle',
   				'width'=>'80px',
        		'value'=>function ($model, $key, $index, $widget) {
        				$funcoes = new Funcoes();
        				return $funcoes->mascaraFone($model->fone);
        				},
        				
        		],
        		[
   				'attribute'=>'vlrcons',
   				'header'=>'Vlr Consulta',
   				'hAlign'=>'right',
   				'vAlign'=>'middle',
   				'width'=>'80px',
        		'value'=>function ($model, $key, $index, $widget) {
		        		$funcoes = new Funcoes();
		        		return $funcoes->mostraValor($model->vlrcons);
       				},
        		],
   				[
   						'class'=>'kartik\grid\ActionColumn','template' => '{update}{delete}' ,
   						'updateOptions'=>['title'=>'Alteração de Cliente!', 'data-toggle'=>'tooltip'],
   						'deleteOptions'=>['title'=>'Exclusão de Cliente!', 'data-toggle'=>'tooltip'],
   						'headerOptions'=>['class'=>'kartik-sheet-style'],
   				],
        ];
        
        
        echo GridView::widget([
        		'dataProvider'=>$dataProvider,
        		'columns'=>$gridColumns,
        		'containerOptions'=>['style'=>'overflow: auto'], // only set when $responsive = false
        		'headerRowOptions'=>['class'=>'kartik-sheet-style'],
        		'filterRowOptions'=>['class'=>'kartik-sheet-style'],
        		'pjax'=>true, // pjax is set to always true for this demo
        		'toolbar'=> [
        				Html::a('Cadastro de Convenio', ['create'], ['class' => 'btn btn-success'])
        		],
        		'export'=>[
        				'fontAwesome'=>true
        		],
        		'bordered'=>true,
        		'striped'=>true,
        		'condensed'=>true,
        		'responsive'=>true,
        		'hover'=>true,
        		'showPageSummary'=>false,
        		'panel'=>[
        				'type'=>GridView::TYPE_PRIMARY,
        		],
        		'persistResize'=>false,
        		'exportConfig'=>false,
        ]);
        
        ?>
        
    </div>
</div>


