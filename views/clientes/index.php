<?php

use kartik\form\ActiveForm;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $searchModel app\models\BancosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lista de Clientes';
$this->params['breadcrumbs'][] = 'Consulta';
?>

<!-- Default box -->
<div class="box">
    	<?php $form = ActiveForm::begin(); ?>
    	
		<?php 
			echo $this->render('_form_filtro', [
								'model' => $model,
								'form' => $form,
		    ]);
		?>
		
    <div id='dv_grid' class="box-body">
		<?php 
	    	echo $this->render('gridView', [
	    			'searchModel' => $searchModel,
	    			'dataProvider' => $dataProvider,
	    	]);
	    	?>
    </div>
    <?php ActiveForm::end(); ?>
</div>


<?php
	$this->registerJsFile(Url::home() . 'plugins/accounting/accounting.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
	$this->registerJsFile(Url::home() . 'app/js/jquery.maskedinput.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
	$this->registerJsFile(Url::home() . 'app/js/mascaras.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
	$this->registerJsFile(Url::home() . 'app/js/clientes.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?> 
