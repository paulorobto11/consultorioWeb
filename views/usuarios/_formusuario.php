<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;
use yii\web\View;

use app\base\Util;
use app\models\CentroCusto;
use app\models\EstadoFederacao;
use app\models\Cidade;
use app\models\Setor;
use app\models\Cargo;

use kartik\date\DatePicker;
use kartik\select2\Select2;
use kartik\money\MaskMoney;
use kartik\widgets\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\Colaborador */
/* @var $form yii\widgets\ActiveForm */
?>

<?php 
$estado = !empty($model->estado) ? $model->estado->unidade_federacao : '-';
$cidade = !empty($model->cidade) ? $model->cidade->descricao : '-';
?>	

<?php 
// FileInput inside a modal dialog
use yii\bootstrap\Modal;

//Modal para realizar o upload da foto do colaborador 
Modal::begin([
    'id' => 'mbFoto',
    'header'=>'<h4 class="modal-title text-primary"><i class="fa fa-camera"></i> Foto do Colaborador</h4>',    
]);
    $form1 = ActiveForm::begin([
        'options'=>['enctype'=>'multipart/form-data']
    ]);
    echo FileInput::widget([
        'id' => 'colaborador-imagem',
        'name' =>'file',
		'options'=>[
		        'multiple'=>false,
		],
		'pluginOptions' => [
			'language' => 'pt-BR',
			'allowedFileTypes' => ['image'],
			'showCaption' => false,
			'showRemove' => false,
		    'resizeImages' => true,
		    'maxImageWidth' => 1024,
		    'maxImageHeight' => 1024,
		    'resizePreference' => 'width',
			'browseLabel' =>  'Procurar Foto',
			'uploadLabel' =>  'Enviar',
			'uploadUrl' => Url::to(['/colaborador/enviar-foto']),
		],
    ]);
    ActiveForm::end();
Modal::end();

$formatJs = <<< 'JS'
$(document).ready(function(){
	
	// alterar foto
    $('#btnAlterarFoto').click(function(){
        $('#mbFoto').modal('show');
    });
    
	// remover foto     
    $('#btnRemoverFoto').click(function(){
        $.confirm({
            icon: 'fa fa-warning',
			title: 'Atenção',
			content: 'Deseja realmente remover a imagem?',
			confirmButton: 'Sim',
			cancelButton: 'Não',
            confirmButtonClass: 'btn-primary',
			animation: 'scale',
			backgroundDismiss: false,
            confirm: function(){
                $('#img-colaborador').attr('src', URL_USER_IMG);
				$('.user-panel img.img-circle').attr('src', URL_USER_IMG);
				$('.user-menu img.user-image').attr('src', URL_USER_IMG);
                $('#colaborador-foto').val('');
				$.ajax({
					type     :'GET',
					cache    : false,
					url  : '/colaborador/atualiza-imagem',
					success  : function(response) {
				    	 if (response != 404){
							var resp = $.parseJSON(response);
							console.log(resp);
						} else {
							$(desc).html(' -- Não encontrado -- ');
						}
				 	}
				});
            
                $.confirm({
                    icon: 'fa fa-warning',
        			title: 'Atenção',
        			content: 'A imagem foi removida.',
        			confirmButton: 'Ok',
        			cancelButton: false,
                    confirmButtonClass: 'btn-primary',        			
        		});
            }
		});
    });
            
    // ação disparada ao terminar upload de foto
    $('#colaborador-imagem').on('fileuploaded', function(event, data, previewId, index) {
        var retorno = data.response;
        try {
            if (retorno.foto_caminho != undefined && retorno.foto_nome != undefined){
                $('#img-colaborador').attr('src', '/' + retorno.foto_caminho);
                $('#colaborador-foto').val(retorno.foto_nome);
				$.ajax({
					type     :'GET',
					cache    : false,
					url  : '/colaborador/atualiza-imagem?img=' + retorno.foto_nome,
					success  : function(response) {
				    	 if (response != 404){
							var resp = $.parseJSON(response);
							console.log(resp);
							$('.user-panel img.img-circle').attr('src', '/' + retorno.foto_caminho);
							$('.user-menu img.user-image').attr('src', '/' + retorno.foto_caminho);
						} else {
							$(desc).html(' -- Não encontrado -- ');
						}
				 	}
				});
            } else {
                throw 'Imagem não localizada no servidor';
            }
            
            toastr.success('Imagem enviada com sucesso! Recarregue a página para visualizar.');
        } catch (error) {
            $.confirm({
				title: 'Ocorreu um erro ao carregar a imagem',
				content: error,
				confirmButton: 'Ok',
				cancelButton: false,
				animation: 'scale',
				backgroundDismiss: false,
				closeIcon: null,
			});
        }
    });
	
});
JS;

// Register the formatting script
$this->registerJs($formatJs, View::POS_READY);
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
                        <img class="profile-user-img img-responsive img-circle" id="img-colaborador" src="" alt="Foto">
                        <div class="row">
                        	<div class="col-md-6 text-center">
                        		<button class="btn btn-xs btn-primary" id="btnAlterarFoto" data-toggle="tooltip" title="Alterar Imagem"><i class="fa fa-camera"></i></button>
                        	</div>
                        	<?php if (!$model->isNewRecord){ ?>
                            	<div class="col-md-6 text-center">
                            		<button class="btn btn-xs btn-danger" id="btnRemoverFoto" data-toggle="tooltip" title="Remover Imagem"><i class="fa fa-remove"></i></button>
                            	</div>
                        	<?php } ?>
                        </div>
                                                
                        <h3 class="profile-username text-center"><?= $model->nome?></h3>
                        <p class="text-muted text-center"><?= !empty($model->cargo) ? $model->cargo->cargo : 'Cargo não informado' ?></p>
                  	</div><!-- /.box-body -->
                  	<div class="box-body">
                  		<strong><i class="fa fa-book margin-r-5"></i> Contato</strong>
                        <p class="text-muted"><?= Util::maskBackend($model->fone1, Util::MASK_TELEFONE) ?></p>
                        <p class="text-muted small"><a href="mailto:<?=$model->email_pessoal?>"><?= $model->email_pessoal ?></a></p>
                        <hr>
                        
                        <strong><i class="fa fa-map-marker margin-r-5"></i> Localização</strong>
                        <p class="text-muted" style="word-wrap: break-word"><?= $cidade . '/' . $estado ?></p>
                        <hr>
                  	</div>
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
                
                //Foto do colaborador
                echo $form->field($model, 'foto')->hiddenInput()->label(false);
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
                            			
                       					<div class="col-md-4">
                                            <div class="form-group">
                                        		    <?
                                        		    echo  $form->field($model, 'cargo_id')->widget(Select2::classname(), [
                                        				'data' => ArrayHelper::map(Cargo::find()->all(), 'id', 'cargo'),
                                        		        'options' => ['placeholder' => 'Selecione o Cargo'],
                                        		        'pluginOptions' => ['allowClear' => true],
                                        		        'hideSearch' => false,
                                        			])->label('Cargo'); ?>
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
                        	<?= Html::submitButton($model->isNewRecord ? 'Criar' : 'Alterar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
                        </div>
        			</div>
                </div>
                                
                <?php ActiveForm::end(); ?>
        	</div>    
    	</div>
	</div>
</div>

