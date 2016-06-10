<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use app\models\Funcoes;
use kartik\form\ActiveForm;
use app\models\Clientes;

$model = new Clientes();

?>

<div class="clientes-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <input type='hidden' id='id' name='id' value='<?=$model_agenda->hora?>'>
    <input type='hidden' id='medico' name='medico' value='<?=$model_agenda->medico?>'>
    
		<?php 
			echo $this->render('_form_filtro', [
								'model_agenda' => $model_agenda,
								'form' => $form,
		    ]);
		?>
    
<!-- Default box -->
<div id='grid_cadastro' class="box">
    <div class="box-body">
		<?php 
			echo $this->render('grid_index', [
					'model_agenda' => $model_agenda,
					'searchModel' => $searchModel,
					'dataProvider' => $dataProvider,
		    ]);
		?>
    	
	</div>
</div>    	
    <?php ActiveForm::end(); ?>
</div>


<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg">
     <div class="modal-content">
		<div id="dv_grid_cliente"></div>
     </div>
  </div>
</div>

    	