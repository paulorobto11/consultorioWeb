<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use app\base\Util;
use app\models\Funcoes;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ColaboradorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Default box -->
<div class="box">
    
    <div class="box-body">
    	<?php
        	Modal::begin([
        		'header' => '<h4 class="modal-title text-primary">Colaborador</h4>',
	    		'id' => 'modal',
	    		'size' => Modal::SIZE_LARGE,
	    	    'options' => [
    	            'class' => 'body-no-padding',
	    	    ],
	    	]);
        
        	echo "<div id='modalContent'></div>";
        
        	Modal::end();
        ?>
        
    	<?php 
    	$gridColumns = [
            [
                'attribute'=>'id',
    	    	'label' => 'Id',
            ],
    		[
    			'attribute'=>'nome',
    	    	'label' => 'Nome Usuario',
    		],

    		[
        		'attribute'=>'tipo_user',
    	    	'label' => 'Tipo Usuario',
    			'value' => function($data){
        		  return $data->tipo_user == 1 ? 'Usuario' : 'Médico';
    		}
    		],
    			
//     		[
//     			'attribute'=>'cargo_id',
//     		    'value' => 'cargo.cargo'
//     		],
    	    [
    	        'attribute'=>'email_pessoal',
    	    	'label' => 'Email',
    	    ],
    		[
    			'attribute'=>'data_cadastro',
    		    'label' => 'Data Cadastro',
    		    'value' => function($data){
    		    			$funcoes = new Funcoes();
                    return $funcoes->ajustaData($data->data_cadastro);
                }
    		],
    		[
        		'attribute'=>'ativo',
        		'value' => function($data){
        		  return $data->ativo == 1 ? 'Sim' : 'Não';
    		}
    		],
    		['class' => 'kartik\grid\ActionColumn',
    		'template'=>'{update}{delete}',
    		'buttons'=>[
    				'update' => function ($url, $model) {
    				return Html::a('<span class="glyphicon glyphicon-pencil"></span>', ['/usuarios/update' ,'id'=>$model->id], [
    					'title' => Yii::t('yii', 'Update'),'data-toggle'=>'tooltip',
    				]);
    				 
    				},
    				'delete' => function ($url, $model) {
    				return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
    					'title' => Yii::t('yii', 'Delete'),'data-toggle'=>'tooltip',
    					'data-method' => 'post',
    					'data-confirm' => Yii::t('yii', 'Voc� tem certeza que deseja deletar esse item?'),
    				]);
    				}
    			]
    		],
    	];
    	    							 
    	$dataProvider->setSort(['defaultOrder' => ['id' => 'ASC']]);

    	Pjax::begin(['id'=>'ColaboradorGrid']);
    	
    	echo GridView::widget([
    		'dataProvider'=>$dataProvider,
    		'columns'=>$gridColumns,
    		'containerOptions'=>['style'=>'overflow: auto'], // only set when responsive = false
    		'headerRowOptions'=>['class'=>'kartik-sheet-style'],
    		'filterRowOptions'=>['class'=>'kartik-sheet-style'],
    		'pjax'=>true,
    		'toolbar'=> [
    				Html::a('Novo Usuario', ['create'], ['class' => 'btn btn-success', 'title' => 'Novo Usuario'])
    		],
    		'bordered'=>true,
    		'striped'=>true,
    		'condensed'=>true,
    		'responsive'=>false,
    		'hover'=>true,
    		'panel'=> [
    			'type'=>GridView::TYPE_PRIMARY,
    		],
    		'persistResize'=>false,
    	]);
    	
    	Pjax::end();
    	?>
	</div>
</div>