<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;
use yii\helpers\Json;
use \app\modules\loading\LoadingAsset;
use app\base\Util;
use app\models\Usuarios;
use app\models\Funcoes;
LoadingAsset::register($this);

AppAsset::register($this);

$funcoes = new Funcoes();

// if (!is\Yii::$app->user->identity->usuarios_id) {
// 	$model = new \app\modules\auth\models\LoginForm();
// 	return $this->render('@app/modules/auth/views/auth-user/login', [
// 			'model' => $model
// 	]);
// }

$userName = Yii::$app->user->isGuest ? 'Visitante' : Yii::$app->user->identity->username;

$empresaNome =  Yii::$app->user->isGuest ? 'Visitante' : Yii::$app->user->identity->empresa_identificacao;

$empresaDados = Yii::$app->user->identity->empresa_dados;

// echo "<pre>";
// print_r (Yii::$app->user->identity->empresa_dados);
// exit();

//$empresaDados = Yii::$app->user->isGuest ? [] : Json::decode(Yii::$app->user->identity->mobiliario_dados);

// $contadorDados = Yii::$app->user->isGuest ? [] : Yii::$app->user->identity->contador_dados;

$usuariosNome  =  Yii::$app->user->isGuest ? 'Visitante' : Yii::$app->user->identity->usuarios_nome;
$usuariosDados  = Yii::$app->user->isGuest ? [] : (Yii::$app->user->identity->usuarios_dados);
$usuario 		= usuarios::find()->where(['id' => \Yii::$app->user->identity->usuarios_id])->one();

$_path=Url::to([\Yii::$app->params['dir']['usuarios']['imagem']]);
 
$out_foto=$_path.'/default.jpg';

/*
if ($usuario && $usuario->foto)
{
    $root=Yii::getAlias('@webroot');
    $dir = Yii::$app->params['dir']['usuarios']['imagem'];
	$test_foto=  $root.$dir.$usuario->foto;
	if(file_exists($test_foto))
	{
	    $out_foto=$_path.'/'.$usuario->foto;
	}
	    
}
*/
$usuariosFoto=$out_foto;
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?php echo Yii::$app->name .' | '. Html::encode($this->title); ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="loading-fog text-center" id="loading-fog"  style="padding-top: 50px;">  
    <div class="cssload-loader text-center"><p>Carregando2222</p></div>
</div>

<?php $this->beginBody() ?>

<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo Url::to(['/site/index']) ?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>G</b>ER</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><i><b>Prefeitura</b></i> <b>ISS Online</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                            <i class="fa fa-building-o"></i>
                            Empresa
                        </a>
                        <ul class="dropdown-menu" style="border-color: #3C8DBC!important;border-top: 1px solid #dddddd!important;">
                            <li class="header text-left" style="font-size: 17px;background-color: #3C8DBC!important;color:#fff;padding-left: 10px;padding-top: 10px;padding-bottom: 10px">
                                Cadastro Empresa
                            </li>
                            <?php
                            if(!empty($empresaDados)) {

                                print Html::beginTag('div',['style'=> 'font-size:80%;font-weight:bold;padding-left:10px;padding-top:10px;background-color: #FFFFFF!important;color:#4A4A4A;']);
	                                if(array_key_exists('razao_social',$empresaDados))
	                                {
	                                	print Html::tag('p',"Razão Social : ".$empresaDados['razao_social']);
	                                }
                                
                                    if(array_key_exists('nome_fantasia',$empresaDados))
                                    {
                                        print Html::tag('p',"Nome fantasia : ".$empresaDados['nome_fantasia']);
                                    }
                                    if(array_key_exists('tipo_empresa',$empresaDados))
                                    {
                                    	if ($empresaDados['tipo_empresa'] == 1)
	                                    	print Html::tag('p',"Tipo Empresa : Tributação Normal");
	                                    if ($empresaDados['tipo_empresa'] == 2)
	                                    	print Html::tag('p',"Tipo Empresa : Simples Nacional");
	                                    if ($empresaDados['tipo_empresa'] == 3)
	                                    	print Html::tag('p',"Tipo Empresa : MEI");
	                                    	
                                    }
                                    
                                    if(array_key_exists('cpfcnpj',$empresaDados))
                                    {
                                    	if ($empresaDados['tipo_inscricao'] == 1)
                                        	print Html::tag('p',"CPF  : ".Util::maskBackend($empresaDados['cpfcnpj'], Util::MASK_CPF));
                                       	if ($empresaDados['tipo_inscricao'] == 2)
                                       		print Html::tag('p',"CNPJ : ".Util::maskBackend($empresaDados['cpfcnpj'], Util::MASK_CNPJ));
                                    }

                                    if(array_key_exists('telefone1',$empresaDados))
                                    {
                                        print Html::tag('p',"Telefone : ".$funcoes->mascaraFone($empresaDados['telefone1']));
                                    }
                                    if(array_key_exists('telefone2',$empresaDados))
                                    {
                                        print Html::tag('p',"Telefone: ".$funcoes->mascaraFone($empresaDados['telefone2']));
                                    }
                                    if(array_key_exists('email',$empresaDados))
                                    {
                                        print Html::tag('p',"Email : ".$empresaDados['email']);
                                    }


                                    if(array_key_exists('site',$empresaDados))
                                    {
                                        print Html::tag('p',"Site : ".Html::a($empresaDados['site'], $empresaDados['site'], ['target'=>'_blank']));
                                    }
                                    if(array_key_exists('cep',$empresaDados))
                                    {
                                        print Html::tag('p',"CEP : ".$funcoes->mascaraCep($empresaDados['cep']));
                                    }
                                    if(array_key_exists('logradouro',$empresaDados))
                                    {
                                        print Html::tag('p',"Logradouro : ".$empresaDados['logradouro']);
                                    }
                                    
                                print Html::endTag('div');
                            }
                            ?>
                        </ul>
                    </li>

                    <li class="dropdown user user-menu" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?= $usuariosFoto ?>" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?php echo $usuariosNome; ?></span>
                        </a>
                        <ul class="dropdown-menu" style="border-color: #3C8DBC!important;border-top: 1px solid #dddddd!important;height:220px">
                            <!-- User image -->
                            <li class="user-header" style="text-align:left">
                            	<img src="<?= $usuariosFoto ?>" class="user-image" alt="Foto do usuário">
                            	<?php 
								print Html::tag('p', $usuariosNome);
    
                                if(!empty($usuariosDados)) {
                                    if (array_key_exists('cpf', $usuariosDados)) {
                                        print Html::tag('p', (isset($usuariosDados['cargo'])?$usuariosDados['cargo']:'Cargo não informado'));
										print Html::tag('br');
                                    }
                                    if (array_key_exists('apelido', $usuariosDados)) {
                                        print Html::tag('span', "<b>Apelido :</b> " . $usuariosDados['apelido']);
                                    }
									print Html::tag('br');
									if (array_key_exists('fone1', $usuariosDados)){
										print Html::tag('span', '<b>Telefone :</b>'.$usuariosDados['fone1']);
										print Html::tag('br');
									}
									
									if (array_key_exists('email_empresa', $usuariosDados)){
										print Html::tag('span', '<b>E-mail :</b>'.$usuariosDados['email_empresa']);
										print Html::tag('br');
									}
									echo '<a href="'.Url::to(['/usuarios/update-usuario/']) . '" style="color:#000;padding: 15px 0px;"><span>Editar perfil</span></a>';
                                    
                                }
								
                                ?>
                            </li>
                        </ul>
                    </li>


                    <!-- Logout Button -->
                    <li>
                        <a data-method="post" href="<?php echo Url::to(['/site/logout'])?>"><i class="fa fa-power-off"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?= $usuariosFoto ?>" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php echo $usuariosNome; ?></p>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu">
                <li class="header">Menu</li>
                <li><a href="<?php echo Url::to(['/site/index'])?>"><i class="fa fa-home"></i> <span>INÍCIO</span></a></li>
	            <li><a href="<?php echo Url::to(['agenda/create'])?>"><i class="fa fa-edit"></i> <span>AGENDAMENTO</span></a></li>
    	        <li><a href="<?php echo Url::to(['sinistro/index'])?>"><i class="fa fa-edit"></i> <span>CONSULTA MEDICA</span></a></li>
                
                <!-- --------------------------------------------------------------------------------------------------------------------------------------------- -->
                <!-- ADMINISTRATIVO -->
                <!-- --------------------------------------------------------------------------------------------------------------------------------------------- -->
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-tags"></i> <span>ADMINISTRATIVO</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="#"><i class="fa fa-edit"></i>Cadastros<i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo Url::to(['/clientes'])?>">de Pacientes</a></li>
                                <li><a href="<?php echo Url::to(['/notafiscal/substituicao'])?>">de Horários</a></li>
                                <li><a href="<?php echo Url::to(['/notafiscal/cancelamento'])?>">de Convenios</a></li>
                            </ul>
                        </li>
                	</ul>
                </li>
                
            <!-- ----------------------------------------------------------------------------------------------------------- -->
            <!-- MOVIMENTAÇÃO -->
            <!-- ----------------------------------------------------------------------------------------------------------- -->

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-calculator"></i> <span>FINANCEIRO</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#"><i class="fa fa-edit"></i> Movimentos <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo Url::to(['/movimento-caixa'])?>"> Movimentação Caixa</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit"></i> Contas a Pagar <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo Url::to(['/conta-pagar'])?>"> Listar e Incluir</a></li>
                            <li><a href="<?php echo Url::to(['/faturas-pagar/faturas'])?>">Duplicatas a Pagar</a></li>
                            <li><a href="<?php echo Url::to(['/faturas-pagar/faturas_pagas'])?>">Consulta de Duplicatas</a></li>
                            <li><a href="<?php echo Url::to(['/faturas-pagar/baixas'])?>">Baixa Individual</a></li>
                            <li><a href="<?php echo Url::to(['/faturas-pagar/coletivo'])?>">Baixa Coletiva</a></li>
                            <li><a href="<?php echo Url::to(['/faturas-pagar/estorno'])?>">Estorno de Pagamento</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit"></i> Contas a Receber <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo Url::to(['/conta-receber'])?>"> Listar e Incluir</a></li>
                            <li><a href="<?php echo Url::to(['/faturas-receber/faturas'])?>">Consulta de Faturas</a></li>
                            <li><a href="<?php echo Url::to(['/faturas-receber/faturas_pagas'])?>">Faturas Pagas</a></li>
                            <li><a href="<?php echo Url::to(['/faturas-receber/baixas'])?>">Baixa Contas Receber</a></li>
                            <li><a href="<?php echo Url::to(['/faturas-receber/coletivo'])?>">Baixa Coletiva</a></li>
                            <li><a href="<?php echo Url::to(['/faturas-receber/estorno'])?>">Estorno de Recebimento</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit"></i> Consultas <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo Url::to(['/plano-contas/previsao'])?>"> Previsão de Contas</a></li>
                            <li><a href="<?php echo Url::to(['/movimento-caixa/conextrato'])?>"> Extrato de Caixa</a></li>
                            <li><a href="<?php echo Url::to(['/movimento-caixa/consultas'])?>"> Movimentação Caixa</a></li>
                            <li><a href="<?php echo Url::to(['/fluxo-caixa'])?>">Fluxo de Caixa</a></li>
                        </ul>
                    </li>
                </ul>

            </li>
                
                
                <!-- --------------------------------------------------------------------------------------------------------------------------------------------- -->
                <!-- EMPRESA -->
                <!-- --------------------------------------------------------------------------------------------------------------------------------------------- -->
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-building-o"></i> <span>EMPRESA</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="#"><i class="fa fa-edit"></i> Cadastros <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">                                
                                <li><a href="<?php echo Url::to(['/mobiliario'])?>"> Cadastro Empresa</a></li>
                                <li><span class="delimiter" style="color: #8aa4af; padding: 0px 0px 0px 15px;">---------------------------------------</span></li>
                                <li><a href="<?php echo Url::to(['/usuarios'])?>"> Usuarios</a></li>
                            </ul>
                        </li>
                	</ul>
                </li>
			</ul>
        </section>
        <!-- /.sidebar -->
    </aside>
    <!-- =============================================== -->


    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <?php echo (isset($this->params['page']['title']) ? $this->params['page']['title'] : $this->title); ?>
                <?php echo (isset($this->params['page']['titleSmall']) ? '<small>'.$this->params['page']['titleSmall'].'</small>' : ''); ?>
            </h1>
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        </section>

        <!-- Main content -->
        <section class="content">
            <?= $content ?>
        </section>
    </div> <!-- .content-wrapper -->


    <footer class="main-footer">
        PREFEITURA - &copy; ISSONLINE <?= date('Y') ?>
    </footer>
</div>

<?php $this->endBody() ?>
</body>
</html>


<?php $this->endPage() ?>
