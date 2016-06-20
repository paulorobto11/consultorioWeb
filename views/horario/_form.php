<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Usuarios;
use kartik\select2\Select2;
use app\models\Horario;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Horario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="horario-form">

    <?php $form = ActiveForm::begin(); ?>

	<div class="box box-primary">
		<div class="box-body">
			<div class="tab-content">
				<div class="tab-pane active" id="tab_1">
					<div class="col-md-12" style='hAlign: center;vAlign:middle'>   
					    <div class="row">
						    <?php $model_medico = Usuarios::findOne(['id'=>Yii::$app->user->identity->medico_id,'tipo_user'=>2]);?>
						    <h3 align='center'>Medico: <?php echo $model_medico->nome; ?></h3><br>
					    </div>
					</div>
			    	<div class="col-md-12 top10 table-responsive">
			    		<div class="panel panel-primary no-margin">
			    			<div class="row">
			                    <div class="col-md-12">
			                        <div class="panel panel-default">
			                            <div class="panel-heading text-center">
			                            	<i class="fa fa-list pull-left text-muted font16"></i><strong>Quadro de Horarios</strong>
			                            </div>
			                        </div>
				                    <div class="col-md-12">
						    			<div class="row">
											<div class="col-md-3"></div>
									    
										<?
											$arr_horarios = Horario::findAll(['medico'=>Yii::$app->user->identity->medico_id]);
											
											$o = 0;
											$h = 0;
															
										    for($i=1;$i<31;$i++){
										    	$o++;
										    	if (!empty($arr_horarios[$h]->hora)) {
										    		$l = 'hora'.str_pad($i, 2,0,STR_PAD_LEFT);
										    		$model->$l = $arr_horarios[$h]->hora;
										    	} else {
										    		$l = 'hora'.str_pad($i, 2,0,STR_PAD_LEFT);
										    		$model->$l = '';
										    	}
										    	$h++; 
										    	if ($o == 7) { $o = 1; ?> </div></div><div class="col-md-12"><div class="row"><div class="col-md-3"></div> <?php } ?>
										    	
												<div class="col-md-1">   
												    <div class="row">
									    				<?= $form->field($model, $l)->widget(\yii\widgets\MaskedInput::className(), [
									    					'mask' => '99:99:99',])->textInput(['maxlength' => false,'disabled'=>$model->$l?true:false])->label('Hora : '.str_pad($i, 2,0,STR_PAD_LEFT));
									    				?>
								                    </div>
								                </div>
										<?  } ?>
									    </div>
									</div>
										
				    			</div>
				    		</div>
						</div>
					</div>
					<div class="col-md-12">
					    <div class="form-group"><br>
					        <?= Html::submitButton('Salvar Quadro de Horarios', ['class' => 'btn btn-primary']) ?>
					        <?= Html::button('Cancelar', ['onclick'=>'encerrar_horario()','class' => 'btn btn-danger']) ?>
					    </div>
				    </div>
    			</div>
    		</div>
		</div>
	</div>


    <?php ActiveForm::end(); ?>

</div>

<?php
	$this->registerJsFile(Url::home() . 'plugins/accounting/accounting.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
	$this->registerJsFile(Url::home() . 'app/js/jquery.maskedinput.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
	$this->registerJsFile(Url::home() . 'app/js/horario.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>

