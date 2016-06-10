<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use app\models\EmpresaGrupo;

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
    	        'class'=>'kartik\grid\SerialColumn',
    	        'header'=>'#',
    	    ],
            [
                'attribute'=>'id',
            ],
    		[
    			'attribute'=>'empresa_grupo_id',
                'value'=>function ($model) {
                                $grupos = ArrayHelper::map(EmpresaGrupo::find()->all(), 'id', 'nome_grupo');
                                return $grupos[$model->empresa_grupo_id];
                            },
    		],
    		[
    			'attribute'=>'identificacao',
    		],
    		[
    			'attribute'=>'nome_fantasia',
    		],
    		[
    			'attribute'=>'razao_social',
    		],
    		['class' => 'kartik\grid\ActionColumn',
    		'template'=>'{update}{delete}',
            'buttons'=>[
                'update' => function ($url, $model) {
                  return Html::a('<i class="fa fa-pencil"></i>', ['/empresa/update/' ,'id'=>$model->id], [
                    'class' => 'btn btn-sm btn-warning', 'title' => 'Atualizar','data-toggle'=>'tooltip',
                  ]);            
                },
                'delete' => function ($url, $model) {
                  return Html::a('<i class="fa fa-trash"></i>', $url, [
                    'class' => 'btn btn-sm btn-danger', 'title' => 'Remover','data-toggle'=>'tooltip',
                    'data-method' => 'post', 'data-confirm' => 'Você tem certeza que deseja remover esse item?',
                  ]);
                }
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
    			['content'=>
    					Html::a('Nova Empresa', ['create'], ['class' => 'btn btn-success', 'title' => 'Nova Empresa'])
    			],
    			'{toggleData}',
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
