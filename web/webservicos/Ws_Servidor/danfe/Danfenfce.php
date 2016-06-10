<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

$linha      = $_REQUEST['ln'];
$tpproc     = substr(str_pad($linha,46,0,STR_PAD_LEFT),0,1);
$autorizada = substr(str_pad($linha,46,0,STR_PAD_LEFT),1,1);
$tpamb      = substr(str_pad($linha,46,0,STR_PAD_LEFT),2,1);
$cnpj       = substr(str_pad($linha,46,0,STR_PAD_LEFT),3,14);
$cancelada  = substr(str_pad($linha,46,0,STR_PAD_LEFT),17,1);
$chave      = substr(str_pad($linha,46,0,STR_PAD_LEFT),18,44);

define('PATH_ROOT',$_SERVER['DOCUMENT_ROOT']."/webservices/");
define('PATH_ARQS',$_SERVER['DOCUMENT_ROOT']."/webservices/webservicos/Ws_Servidor/NfeXml/");
$sAmb = ($tpamb == '2') ? 'homologacao' : 'producao';
if ($autorizada == 2) {
	$dir = PATH_ARQS.'/'.$sAmb.'/enviadas/aprovadas/';
	$chave_nfe = $chave.'-prot';
} else {
	$dir = PATH_ARQS.'/'.$sAmb.'/entradas/';
	$chave_nfe = $chave;
}

require_once(PATH_ROOT.'webservicos/NfePhp/classes/libs/NFe/DanfeNFCe.php');
require_once(PATH_ROOT.'webservicos/Ws_Servidor/includes/dbconnect.php');
include_once(PATH_ROOT.'webservicos/Ws_Servidor/includes/Cademp.php');
include_once(PATH_ROOT.'webservicos/Ws_Servidor/includes/CadempDAO.php');

$objCademp       = new Cademp();
$objCadempDAO    = new CadempDAO();
$objCademp->setEmpr_cnpj($cnpj);
$objCademp = $objCadempDAO->select($objCademp);

$logomarca = '';
if ($objCademp->getLogotipo()) {
	$logomarca = PATH_ROOT.'/webservicos/NfePhp/logotipo/'.$objCademp->getEmpr_cnpj().'_logo/'.$objCademp->getLogotipo();
}


$arq = $dir.$chave_nfe.'.xml';
$docxml = file_get_contents($arq);
$danfe = new DanfeNFCeNFePHP($docxml, $logomarca, 0);
$id = $danfe->montaDANFE(true);
$saida = 'pdf';
$teste = $danfe->printDANFE($saida, $id.'.pdf', 'I');
exit();

?>