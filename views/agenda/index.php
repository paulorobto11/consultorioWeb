<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\bootstrap\Modal;
use app\models\Cidade;
use app\models\EstadoFederacao;
use app\models\Bancos;
use app\models\Clientes;
use app\models\Funcoes;
use app\models\Horario;
use app\models\Convenio;
use kartik\form\ActiveForm;
use yii\helpers\Url;

$this->title = 'Consulta Agendamentos de Pacientes';
$this->params['breadcrumbs'][] = 'Agendamento';
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
	$this->registerJsFile(Url::home() . 'app/js/agenda.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?> 
