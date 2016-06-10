<?

define('PATH_ROOT',$_SERVER['DOCUMENT_ROOT']."/webcliente/");
define('PATH_DIR',$_SERVER['DOCUMENT_ROOT']."/webcliente/webservices/NfePhp/");
define('PATH_ARQS',$_SERVER['DOCUMENT_ROOT']."/webcliente/webservices/Ws_Servidor/NfeXml/");

require_once(PATH_ROOT.'webservices/NfePhp/classes/libs/NFe/ToolsNFePHP.class.php');

$chave = '0008-nfe';

$sAmb = 'homologacao';
$dir = PATH_ARQS.'/'.$sAmb.'/entradas/';
echo "<hr>arq ".$arquivo = $dir.$chave.'.xml';

$nfe2  = new ToolsNFePHP;
$docxml = file_get_contents($arquivo);
$aErro = array();
$indSinc = 1;
$idLote = 1468;
$resp = $nfe2->autoriza($docxml, $idLote, $aErro, $indSinc);

echo "<pre>";
print_r ($resp);
exit();

?>