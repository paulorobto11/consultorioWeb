<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

use kartik\select2\Select2;
use kartik\widgets\FileInput;
use kartik\money\MaskMoney;

use app\models\EmpresaGrupo;
use app\models\Pais;
use app\models\EstadoFederacao;
use app\models\Cidade;
use app\models\Colaborador;

/* @var $this yii\web\View */
/* @var $model app\models\Empresa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empresa-form">

	<div class="row">
		<div class="col-md-12">
			<?php 
	        foreach (Yii::$app->session->getAllFlashes() as $key => $message) {
         		echo '<div class="alert alert-' . $key . '">' . $message . '</div>';
           	}
			?>
		</div>
	</div>

	<div class="box box-primary">
		<?php 
			$form = ActiveForm::begin([
			'options' => ['enctype' => 'multipart/form-data'],
	    	'id'=>$model->formName(),
			'fieldConfig' => [
	        	'options' => ['class' => ''],
		    	]
			]);
		?>
		
		<div class="box-body">
		
			<!-- Custom Tabs -->
			<div class="nav-tabs-custom">
				<ul class="nav nav-tabs">
		        	<li class="active"><a href="#tab_1" data-toggle="tab">Cadastro</a></li>
		        	<li><a href="#tab_2" data-toggle="tab">Configuração</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tab_1">

						<fieldset>						
                        	<legend>Dados da Empresa</legend>
    
                        	<div class="row">
    							<div class="col-md-3">
    								<div class="form-group">
										<img class="img-responsive rounded" src="<?= \Yii::$app->request->BaseUrl.'/img/'.$model->logo?>" alt=""> 
    								    &nbsp;
    								    <?= $form->field($model, 'logo')->widget(FileInput::classname(),
    								    [
    								    'options'=>['accept'=>'image/*'],
    									'pluginOptions'=>['allowedFileExtensions'=>['jpg','gif','png'], 
    													  'browseLabel' => 'Selecione o Logo da Empresa',
    													  'showUpload'  => false,
    													  'showCaption' => false,
            											  'showRemove'  => false,]
    								    ] )->label(false);
    									?>
    								</div>
    							</div>
    
    							<div class="col-md-9">   
    								<div class="row">
    									<div class="col-md-6">
    							        	<div class="form-group">
    										    <?= $form->field($model, 'nome_fantasia')->textInput(['maxlength' => true]) ?>
    										</div>
    									</div>
    									
    									<div class="col-md-6">
    							        	<div class="form-group">
    										    <?= $form->field($model, 'razao_social')->textInput(['maxlength' => true]) ?>
    										</div>
    									</div>
    								</div>
    								
    								<div class="row">
    									<div class="col-md-4">
    							        	<div class="form-group">
    										    <?= $form->field($model, 'empresa_grupo_id')->widget(Select2::classname(), [
    												'data' => ArrayHelper::map(EmpresaGrupo::find()->all(), 'id', 'nome_grupo'),
    						                        'options' => ['placeholder' => 'Selecione o grupo'],
    						                        'pluginOptions' => ['allowClear' => true],
    						                    	'hideSearch' => false,
    											]); ?>
    										</div>
    									</div>
    									<div class="col-md-4">
    							        	<div class="form-group">
    										    <?= $form->field($model, 'identificacao')->textInput(['maxlength' => true, 'placeholder' => 'Sigla ou nome curto']) ?>
    										</div>
    									</div>
    									
    									<div class="col-md-4">
            					        	<div class="form-group">
            								    <?= $form->field($model, 'responsavel_id')->widget(Select2::classname(), [
            										'data' => ArrayHelper::map(Colaborador::find()->all(), 'id', 'nome'),
            				                        'options' => ['placeholder' => 'Selecione o Responsavel'],
            				                        'pluginOptions' => ['allowClear' => true],
            				                    	'hideSearch' => false,
            									]); ?>
            								</div>
            							</div>    
    								</div>
    
    								<div class="row">
    									<div class="col-md-4">
    							        	<div class="form-group">
    										    <?= $form->field($model, 'cnpj')->widget(\yii\widgets\MaskedInput::className(), [
    							                    'mask' => '99.999.999/9999-99',
    							                    ])->textInput(['maxlength' => false])
    							                ?>
    										</div>
    									</div>
    									<div class="col-md-4">
    							        	<div class="form-group">
    										    <?= $form->field($model, 'inscricao_estadual')->textInput(['maxlength' => true]) ?>
    										</div>
    									</div>
    									<div class="col-md-4">
    							        	<div class="form-group">
    										    <?= $form->field($model, 'inscricao_municipal')->textInput(['maxlength' => true]) ?>
    										</div>
    									</div>									
    								</div>
    
    							</div>
    						</div>
						</fieldset>
						
						<br>
						<fieldset>						
                        	<legend>Endereço</legend>
    
    						<div class="row">
    							<div class="col-md-4">
    					        	<div class="form-group">
    								    <?= $form->field($model, 'pais_id')->widget(Select2::classname(), [
    		                                'data' => ArrayHelper::map(Pais::find()->all(), 'id', 'nome'),
    		                                'options' => ['placeholder' => 'Selecione o País'],
    		                                'pluginOptions' => ['allowClear' => true],
    		                    	        'hideSearch' => false,
    		                            ]); ?>
    								</div>
    							</div>
    							<div class="col-md-2">
    					        	<div class="form-group">
    		                        	<?= $form->field($model, 'estado_federacao_id')->widget(Select2::classname(), [
    				                    	'data' => ArrayHelper::map(EstadoFederacao::find()->orderBy('nome_estado')->all(), 'id', 'unidade_federacao'),  
    				        				'pluginOptions' => ['allowClear' => true],
    				                        'hideSearch' => false,
    				                        'options' => [
    				                        	'placeholder' => 'UF',
    				                            	'onchange' => '
    				                                    	if ($(this).val() > 0){                                     
    				                                        	$.post(BASE_PATH + "cidade/lists/'.'"+$(this).val(), function( data ){
    				                                            	$( "#empresa-cidade_id" ).html( data );
    				                							});
    				                						}
    				                						else {
    				                                        	$( "#empresa-cidade_id" ).html( \'\' );
    				                						}
    				            					'
    				                        ],
    				                    ]);
    				        		    $cidades = Cidade::findAll(['estado_federacao_id'=>$model->estado_federacao_id]);
    				        			?>
    								</div>
    							</div>
    							<div class="col-md-4">
    					        	<div class="form-group">
                            			<?= $form->field($model, 'cidade_id')->widget(Select2::classname(), [
    				                    	'data' => ArrayHelper::map($cidades, 'id', utf8_decode('descricao')),
    				                        'pluginOptions' => ['allowClear' => true],
    				                        'hideSearch' => false,
    				        				'options' => [
    				        					'placeholder' => 'Selecione a cidade'
    				        				]
    				                    ]);
    				                	?>
    								</div>
    							</div>
    							<div class="col-md-2">
    					        	<div class="form-group">
    								    <?= $form->field($model, 'cep')->widget(\yii\widgets\MaskedInput::className(), [
    					                    'mask' => '99999-999',
    					                    ])->textInput(['maxlength' => true])
    					                ?>
    								</div>
    							</div>
    						</div>
    
    						<div class="row">
    							<div class="col-md-6">
    					        	<div class="form-group">
    								    <?= $form->field($model, 'logradouro')->textInput(['maxlength' => true]) ?>
    								</div>
    							</div>
    							<div class="col-md-2">
    					        	<div class="form-group">
    								    <?= $form->field($model, 'numero')->textInput(['maxlength' => true]) ?>
    								</div>
    							</div>														
    							<div class="col-md-4">
    					        	<div class="form-group">
    								    <?= $form->field($model, 'bairro')->textInput(['maxlength' => true]) ?>
    								</div>
    							</div>
    						</div>
						</fieldset>

						<br>
						<fieldset>						
                    		<legend>Contato</legend>
    
                    		<div class="row">
    							<div class="col-md-4">
    					        	<div class="form-group">
    								    <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'placeholder' => 'email@email.com']) ?>
    								</div>
    							</div>
    							<div class="col-md-4">
    					        	<div class="form-group">
    								    <?= $form->field($model, 'site')->textInput(['maxlength' => true]) ?>
    								</div>
    							</div>
    							<div class="col-md-2">
    					        	<div class="form-group">
    								    <?= $form->field($model, 'telefone1')->widget(\yii\widgets\MaskedInput::className(), [
                                            'mask' => ['(99) 9999-9999', '(99) 99999-9999'],])->textInput(['maxlength' => true])
                                        ?>
    								</div>
    							</div>
    							<div class="col-md-2">
    					        	<div class="form-group">
    								    <?= $form->field($model, 'telefone2')->widget(\yii\widgets\MaskedInput::className(), [
                                            'mask' => ['(99) 9999-9999', '(99) 99999-9999'],])->textInput(['maxlength' => true])
                                        ?>
    								</div>
    							</div>							
    						</div>
						</fieldset>

					</div><!-- tab-pane active -->
					
					
					<div class="tab-pane" id="tab_2">
						
						<fieldset>
							<legend>Financeiro</legend>
							
							<div class="row">
								<div class="col-md-3">
									<?= $form->field($config, 'formacao_preco_custo')->widget(Select2::classname(), [
										'data' => [1 => 'Compra', 0 => 'Contribuição'],
									    'options' => ['placeholder' => 'Selecione'],
				                        'pluginOptions' => ['allowClear' => true],
				                    	'hideSearch' => true,
									]); ?>
								</div>
								
								<div class="col-md-3">
			        				<div class="form-group">
				        				<?= $form->field($config, 'desconto_maximo')->widget(MaskMoney::className(), []); ?>
			        				</div>
			        			</div>
			        			
			        			<div class="col-md-3">
			        				<div class="form-group">
				        				<?= $form->field($config, 'juro_diario')->widget(MaskMoney::className(), []); ?>
			        				</div>
			        			</div>
			        			
			        			<div class="col-md-3">
    					        	<div class="form-group">
    								    <?= $form->field($config, 'dias_bloqueio_clientes')->textInput() ?>
    								</div>
    							</div>
							</div>
							
    						<div class="row">
    							<div class="col-md-3">
			        				<div class="form-group">
				        				<?= $form->field($config, 'percentual_rent_t01')->widget(MaskMoney::className(), []); ?>
				        				<span class="help-block">Margem utilizada para formação de preço</span>
			        				</div>			        				
			        			</div>
			        			
			        			<div class="col-md-3">
			        				<div class="form-group">
				        				<?= $form->field($config, 'percentual_rent_t02')->widget(MaskMoney::className(), []); ?>
			        				</div>
			        			</div>
			        			
			        			<div class="col-md-3">
			        				<div class="form-group">
				        				<?= $form->field($config, 'percentual_rent_t03')->widget(MaskMoney::className(), []); ?>
			        				</div>
			        			</div>
			        			
			        			<div class="col-md-3">
			        				<div class="form-group">
				        				<?= $form->field($config, 'percentual_rent_t04')->widget(MaskMoney::className(), []); ?>
			        				</div>
			        			</div>
    						</div>
						</fieldset>
						
						
						<fieldset>
							<legend>Nota Fiscal</legend>

    						<div class="row">
    							<div class="col-md-4">
    					        	<div class="box box-default">
    					        		<div class="box-header with-border">NF-e</div>
    					        		<div class="box-body">    					        		
        					        		<div class="row">    					        		    					        		
        					        			<div class="col-md-12">
        					        				<div class="form-group">        					        				
                    				                	<?= $form->field($config, 'ambiente_nfe')->radioList([1 => 'Produção', 2 => 'Homologação'])->label(false) ?>
        					        				</div>
        					        				
        					        				<div class="form-group">
            					        				<?= $form->field($config, 'nfe_num_inicio')->textInput()->label('Número Inicial') ?>
        					        				</div>
        					        			</div>
        					        		</div>
    					        		</div>    					        		
    								</div>
    							</div>
    							
    							<div class="col-md-4">
    					        	<div class="box box-default">
    					        		<div class="box-header with-border">NFC-e</div>
    					        		<div class="box-body">    					        		
        					        		<div class="row">    					        		    					        		
        					        			<div class="col-md-12">
        					        				<div class="form-group">        					        				
                    				                	<?= $form->field($config, 'ambiente_nfce')->radioList([1 => 'Produção', 2 => 'Homologação'])->label(false) ?>
        					        				</div>
        					        				
        					        				<div class="form-group">
            					        				<?= $form->field($config, 'nfce_num_inicio')->textInput()->label('Número Inicial') ?>
        					        				</div>
        					        			</div>
        					        		</div>
    					        		</div>    					        		
    								</div>
    							</div>
    							
    							<div class="col-md-4">
    					        	<div class="box box-default">
    					        		<div class="box-header with-border">NFS-e</div>
    					        		<div class="box-body">    					        		
        					        		<div class="row">    					        		    					        		
        					        			<div class="col-md-12">
        					        				<div class="form-group">        					        				
                    				                	<?= $form->field($config, 'ambiente_nfse')->radioList([1 => 'Produção', 2 => 'Homologação'])->label(false) ?>
        					        				</div>
        					        				
        					        				<div class="form-group">
            					        				<?= $form->field($config, 'nfse_num_inicio')->textInput()->label('Número Inicial') ?>
        					        				</div>
        					        			</div>
        					        		</div>
    					        		</div>    					        		
    								</div>
    							</div>
    						</div>
    						
    						<div class="row">							
    							<div class="col-md-12">
    					        	<div class="form-group">
    								    <?= $form->field($config, 'texto_fixo_nf')->textarea(['rows' => 2]) ?>
    								</div>
    							</div>							
    						</div>
						</fieldset>						

						<fieldset>
							<legend>Dados Fiscais</legend>
    					    
    					    <div class="row">
    							<div class="col-md-3">
    					        	<div class="form-group">
    								    <?= $form->field($config, 'substituicao_tributaria')->widget(Select2::classname(), [
    										'data' => [0 => 'Substituto', 1 => 'Substituído'],
    									    'options' => ['placeholder' => 'Selecione'],
    				                        'pluginOptions' => ['allowClear' => true],
    				                    	'hideSearch' => true,
									   ]); ?>
    								</div>
    							</div>
    							
    							<div class="col-md-3">
    					        	<div class="form-group">
    								    <?= $form->field($config, 'crt')->widget(Select2::classname(), [
    										'data' => [
    										    1 => 'Simples Nacional',
    										    2 => 'Simples Nacional Excesso',
    										    3 => 'Regime Normal',
    										    0 => 'Não Definido', 
    										],
    									    'options' => ['placeholder' => 'Selecione'],
    				                        'pluginOptions' => ['allowClear' => true],
    				                    	'hideSearch' => true,
									   ]); ?>
    								</div>
    							</div>
    							
    							<div class="col-md-3">
    					        	<div class="form-group">
    								    <?= $form->field($config, 'aliquota_iss')->widget(MaskMoney::className(), []); ?>
    								</div>
    							</div>
    							
    							<div class="col-md-3">
    					        	<div class="form-group">
    								    <?= $form->field($config, 'cnae')->textInput(['maxlength' => true]) ?>
    								</div>
    							</div>
							</div>
    					    
    					    <div class="row">
    					    	<div class="col-md-3">
    					        	<div class="form-group">
    								    <?= $form->field($config, 'codigo_cst')->textInput(['maxlength' => true]) ?>
    								</div>
    							</div>
    							<div class="col-md-3">
    					        	<div class="form-group">
    								    <?= $form->field($config, 'modalidade_bc_st')->textInput() ?>
    								</div>
    							</div>
    							<div class="col-md-3">
    					        	<div class="form-group">
    								    <?= $form->field($config, 'modalidade_icms')->textInput() ?>
    								</div>
    							</div>
    							
    							<div class="col-md-3">
    					        	<div class="form-group">
    								    <?= $form->field($config, 'fator_reducao_icms')->widget(MaskMoney::className(), []); ?>
    								</div>
    							</div>
    						</div>

    					    <div class="row">
    							<div class="col-md-3">
    					        	<div class="form-group">
    								    <?= $form->field($config, 'percen_pis')->widget(MaskMoney::className(), []); ?>
    								</div>
    							</div>
    							<div class="col-md-3">
    					        	<div class="form-group">
    								    <?= $form->field($config, 'percen_cofins')->widget(MaskMoney::className(), []); ?>
    								</div>
    							</div>
    							<div class="col-md-3">
    					        	<div class="form-group">
    								    <?= $form->field($config, 'perce_das')->widget(MaskMoney::className(), []); ?>
    								</div>
    							</div>
    						</div>
						</fieldset>

						<fieldset>
							<legend>Estoque</legend>
    					    
    					    <div class="row">
    							
								<div class="col-md-3">
    					        	<div class="form-group">
    								    <?= $form->field($config, 'estoque_umacont')->widget(Select2::classname(), [
    										'data' => [0 => 'Dupla contagem (recomendado)', 1 => 'Contagem única'],
    				                        'pluginOptions' => ['allowClear' => true],
    				                    	'hideSearch' => true,
									   ]); ?>
    								</div>
    							</div>
								<div class="col-md-3">
    					        	<div class="form-group">
    								    <?= $form->field($config, 'estoque_negativo')->widget(Select2::classname(), [
    										'data' => [0 => 'Não permitir estoque negativo', 1 => 'Permitir estoque negativo'],
    				                        'pluginOptions' => ['allowClear' => true],
    				                    	'hideSearch' => true,
									   ]); ?>
    								</div>
    							</div>
    							
    						</div>
						</fieldset>
					</div><!-- /.tab-pane -->
				</div><!-- tab content -->
			</div>
		

    
    			<div class="col-md-12">
            		<div class="form-group">
            	    	<?= Html::submitButton($model->isNewRecord ? 'Criar Cadastro da Empresa' : 'Alterar Cadastro da Empresa', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            	        <?= Html::a('Cancelar', ['index'], ['class' => 'btn btn-default pull-right']); ?>
            	    </div>
    			</div>
		
    <?php ActiveForm::end(); ?>
    </div>
    </div>
</div>