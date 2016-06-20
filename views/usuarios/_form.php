<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Funcoes;
use yii\helpers\Url;

$funcoes = new Funcoes();
?>
	
<div class="row">
	<div class="col-md-12">
		<?php 
		if (!empty($error)) {
		    echo '
            <div class="callout callout-danger">
        	   <h4>As informações não puderam ser salvas!</h4>
        	   <p>'.$error.'</p>
        	</div>';
		}
		?>
	</div>
</div>
	
<div class="box">
	<div class="box-body">
        <div class="row">
    		
    		<!-- Painel Esquerdo -->
        	<div class="col-md-2">	
        		<div class="box box-primary" style="overflow:hidden">
                	<div class="box-body box-profile">
		    			<?php
	    					$_path=Url::to([\Yii::$app->params['dir']['usuarios']['imagem']]);
		    				$foto = $model->foto ?  $_path.'/'.$model->foto : '';
		    				$imagem = $model->foto ? '<img src="'.$foto.'"':'&lt;&lt; Inserir a Foto do Cliente &gt;&gt;';
		    			?>
                		<div id='dv_results'>
                        	<img class="profile-user-img img-responsive img-circle" id="results" src="<?=$foto?>" alt="Foto">
                        </div>
                        <div class="row">
                        	<div class="col-md-6 text-center">
                        		<button class="btn btn-xs btn-primary" id="btnAlterarFoto" onclick='tirar_foto()' data-toggle="tooltip" title="Alterar Imagem"><i class="fa fa-camera"></i></button>
                        	</div>
                           	<div id='dv_remover' class="col-md-6 text-center" <?php if (empty($foto)){ ?> style='display: none;' <?php } ?>>
                           		<button class="btn btn-xs btn-danger" id="btnRemoverFoto" onclick='excluir_foto()' data-toggle="tooltip" title="Remover Imagem"><i class="fa fa-remove"></i></button>
                           	</div>
                        </div>
                  	</div><!-- /.box-body -->
                </div>	
        	</div>
        
        	<!-- Painel Direito -->
        	<div class="col-md-10">		
                <?php 
                $form = ActiveForm::begin([
                    'id'=>$model->formName(),
                    'fieldConfig' => [
                        'options' => ['class' => ''],
                    ]
                ]);
                
                echo $form->field($model, 'foto')->hiddenInput()->label(false);
                echo $form->field($model, 'id')->hiddenInput()->label(false);
                
                ?>
        
        		<div class="nav-tabs-custom">			
            		<!-- Custom Tabs -->
            		<div class="nav-tabs-custom">
            		    <ul class="nav nav-tabs">
            		    	<li class="active"><a href="#tab_DadosPrincipais" data-toggle="tab">Dados Principais</a></li>
            			</ul>
            		</div>
                	
            		<div class="tab-content">
            	      	<div class="tab-pane active" id="tab_DadosPrincipais">		      	
                    		<fieldset>
                    			<legend>Informações para o Cadastro do Usuario</legend>            						
                        		<div class="row">
                        			<div class="col-md-12">
                            			<div class="col-md-4">
                            		        <div class="form-group">
                            				    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>
                            				</div>
                            			</div>
                            			<div class="col-md-2">
                            		        <div class="form-group">
                            				    <?= $form->field($model, 'apelido')->textInput(['maxlength' => true]) ?>
                            				</div>
                            			</div>
                            			<div class="col-md-3">
                            		        <div class="form-group">
                                    		    <?= $form->field($model, 'tipo_user')->radioList([
                                    				'2'=>'Medico',
                                    				'1'=>'Usuario',
                                    				],[
                                    				'separator'=>"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",
                                    			])->label('Tipo Usuario:'); ?>
                            				</div>
                            			</div>
                            			
                                   	</div>
                        		</div>
                        		<div class="row">
                        			<div class="col-md-12">
                                    	<div class="col-md-3">
                                            <div class="form-group">
                                    		    <?= $form->field($modelUser, 'username')->textInput()->label('Usuario p/Login:') ?>
                                    		</div>
                                    	</div>
                                    	<div class="col-md-3">
                                            <div class="form-group">
                                    		    <?= $form->field($modelUser, 'password')->passwordInput(['value' => ''])->label('Senha de Acesso:') ?>
                                    		</div>
                                    	</div>
                                    	<div class="col-md-3">
                                            <div class="form-group">
                                    		    <?= $form->field($modelUser, 'password_repeat')->passwordInput() ?>
                                    		</div>
                                    	</div>
                        			</div>
                    			</div>
                    			<div class="row">
                    				<div class="col-md-12">
                            			<div class="col-md-9">
                            		        <div class="form-group">
                            				    <?= $form->field($model, 'email_pessoal')->textInput(['maxlength' => true, 'placeholder' => 'email@email.com']) ?>
                            				</div>
                            			</div>
                        			</div>
                    			</div>
                    			
                			</fieldset>
                    		<fieldset>
                    			<legend>Situação do Usuario</legend>            						
                    			<div class="row">
                    				<div class="col-md-12">
                                    	<div class="col-md-4">
                                            <div class="form-group">
                                    		    <?= $form->field($model, 'ativo')->radioList([
                                    				'1'=>'Sim',
                                    				'0'=>'Não',
                                    				],[
                                    				'separator'=>"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",
                                    			]); ?>
                                    		</div>
                                    	</div>
                    					<div class="col-md-2">
                                            <div class="form-group">
                                    		    <?
                                    		    $model->data_cadastro = $model->data_cadastro?$funcoes->ajustaData($model->data_cadastro):date('d/m/Y');
                                    		    echo $form->field($model, 'data_cadastro')->textInput(['disabled' => true]) ?>
                                    		</div>
                                    	</div>
                    				</div>
                    			</div>
                			</fieldset>
                			
            			</div>
            		</div>
        		</div>
        		
        		<div class="row">
        			<div class="col-md-2">
                    	<div class="form-group">
                        	<?= Html::submitButton($model->isNewRecord ? 'Criar Usuario' : 'Alterar Usuario', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                        </div>
        			</div>
                </div>
                                
                <?php ActiveForm::end(); ?>
        	</div>    
    	</div>
	</div>
</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-bg">
     <div class="modal-content">
     <div class="modal-content">
            	<div class="modal-header">
                	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                	<h4 class="modal-title text-primary"><i class="fa fa-user-plus"></i>Foto do Cliente</h4>
              	</div>
              	<div class="modal-body no-padding"></div>
				<div class="box box-primary">
					<div class="box-body">
						<div id='dv_camera' >
											<div id="my_camera"></div>
									
											<div id="pre_take_buttons"><br><br>
												<?= Html::button('Bater a Foto', ['onclick'=>'preview_snapshot()','class' => 'btn btn-success' ]) ?>
											</div>
											<div id="post_take_buttons" style="display:none"><br><br>
												<?= Html::button('&lt; Bater a Foto Novamente', ['onclick'=>'cancel_preview()','class' => 'btn btn-success' ]) ?>
												<?= Html::button('Salvar a Foto &gt;', ['onclick'=>'save_photo()','class' => 'btn btn-success' ]) ?>
											</div>
			
			
						</div>
					</div>
				</div>
	 </div>					
     </div>
  </div>
</div>

<?php 
$css = <<< CSS

		#results { float:right; margin:20px; padding:20px; border:1px solid; background:#ccc; }
		
CSS;
	
//$this->registerCss($css);

?>



<?php 
$js = <<< JS

		Webcam.set({
			width: 320,
			height: 240,
			image_format: 'jpeg',
			jpeg_quality: 90
		});
//		Webcam.attach( '#my_camera' );

JS;
	
$this->registerJs($js);

?>

<?php
	$this->registerJsFile(Url::home() . 'plugins/accounting/accounting.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
	$this->registerJsFile(Url::home() . 'app/js/jquery.maskedinput.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
	$this->registerJsFile(Url::home() . 'app/js/usuarios.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
	$this->registerJsFile(Url::home() . 'plugins/webcamjs-master/webcam.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>



