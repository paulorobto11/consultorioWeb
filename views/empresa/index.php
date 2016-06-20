<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use app\models\Funcoes;
use app\models\Cidade;
use app\models\EstadoFederacao;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EmpresaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Empresas';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Default box -->

    	<?php
        	Modal::begin([
        		'header' => '<h4 class="modal-title text-primary">Empresa</h4>',
	    		'id' => 'modal',
	    		'size' => Modal::SIZE_LARGE,
	    	    'options' => [
    	            'class' => 'body-no-padding',
	    	    ],
	    	]);
        
        	echo "<div id='modalContent'></div>";
        
        	Modal::end();
        ?>

        <div class="row">
            <div class="col-md-12">
                <?php 
                foreach (Yii::$app->session->getAllFlashes() as $key => $message) 
                {
                    //print_r(Yii::$app->session->getAllFlashes()); exit;
                    echo '<div class="alert alert-' . $key . '">' . $message . '</div>';
                }
                ?>
            </div>
        </div>
        
    	<?php 
    	$gridColumns = [
            [
                'attribute'=>'id',
            ],
    		[
    			'attribute'=>'razao_social',
    		],
    		[
    			'attribute'=>'cnpj',
    			'value'=>function ($model, $key, $index, $widget) {
    				$funcoes = new Funcoes();
    				return $funcoes->mascaraCnpj($model->cnpj);
    			},
    				
    		],
    		[
    			'attribute'=>'cidade',
    			'value'=>function ($model, $key, $index, $widget) {
    			    $cidade = Cidade::findOne(['id'=>$model->cidade]);
    			    if (!empty($cidade)) {
    					return $cidade->descricao;
    			    } else {
    			    	return '';
    			    }
    				},
    				
    		],
    		[
    			'attribute'=>'estado',
    			'value'=>function ($model, $key, $index, $widget) {
    			    $estado = EstadoFederacao::findOne(['id'=>$model->estado]);
    			    if (!empty($estado)) {
    					return $estado->unidade_federacao;
    			    } else {
    			    	return '';
    			    }
    			},
    		],
    		[
    			'attribute'=>'telefone1',
    			'value'=>function ($model, $key, $index, $widget) {
    				$funcoes = new Funcoes();
    				return $funcoes->mascaraFone($model->telefone1);
    			},
    		],
    		[
    			'attribute'=>'data_cadastro',
    			'value'=>function ($model, $key, $index, $widget) {
    				$funcoes = new Funcoes();
    				return $funcoes->ajustaData($model->data_cadastro);
    			},
    		],
    			
    			
    		['class' => 'kartik\grid\ActionColumn',
    		'template'=>'{update}',
            'buttons'=>[
                'update' => function ($url, $model) {
                  return Html::a('<i class="fa fa-pencil"></i>', ['/empresa/update/' ,'id'=>$model->id], [
                    'class' => 'btn btn-sm btn-warning', 'title' => 'Atualizar','data-toggle'=>'tooltip',
                  ]);            
                },
              ]
    		],
    	];
    	    							 
    	$dataProvider->setSort(['defaultOrder' => ['id' => 'DESC']]);

    	Pjax::begin(['id'=>'EmpresaGrid']);
    	
    	echo GridView::widget([
    		'dataProvider'=>$dataProvider,
    		'columns'=>$gridColumns,
    		'containerOptions'=>['style'=>'overflow: auto'], // only set when responsive = false
    		'headerRowOptions'=>['class'=>'kartik-sheet-style'],
    		'filterRowOptions'=>['class'=>'kartik-sheet-style'],
    		'pjax'=>true,
    		'toolbar'=> [
//    			'{toggleData}',
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
