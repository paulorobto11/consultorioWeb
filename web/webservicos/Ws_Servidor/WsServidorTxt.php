<?php
error_reporting(E_ALL);
ini_set('display_errors', '0');

define('PATH_ROOT',$_SERVER['DOCUMENT_ROOT']."/webservices/");
define('PATH_DIR',$_SERVER['DOCUMENT_ROOT']."/webservices/webservicos/NfePhp/");
define('PATH_ARQS',$_SERVER['DOCUMENT_ROOT']."/webservices/webservicos/Ws_Servidor/NfeXml/");
define('PATH_WEBSERVICOS',$_SERVER['DOCUMENT_ROOT']."/webservices/webservicos/");

require_once(PATH_ROOT.'webservicos/NfePhp/classes/libs/NFe/MakeNFePHP.class.php');
require_once(PATH_ROOT.'webservicos/NfePhp/classes/libs/NFe/ToolsNFePHP.class.php');
require_once(PATH_ROOT.'webservicos/NfePhp/classes/libs/NFe/ConvertNFePHP.class.php');
require_once(PATH_ROOT.'webservicos/NfePhp/classes/libs/NFe/MDFeNFePHP.class.php');
require_once(PATH_ROOT.'webservicos/Ws_Servidor/includes/email.php');
require_once(PATH_ROOT.'webservicos/Ws_Servidor/includes/dbconnect.php');


include_once('lib/nusoap.php');

include_once('WsServicostxt.php');
include_once('WsParametros.php');

$dados = array('cnpj'=>'xsd:string','ambiente'=>'int:string','arquivo'=>'txt:string','autorizar'=> 'int:string');

$servidor = new nusoap_server();
$servidor->configureWSDL('Servidor','urn:Servidor');
$servidor->wsdl->schemaTargetNamespace = 'urn:Servidor';

$servidor->wsdl->addComplexType(
'Product',
'complexType',
'struct',
'all',
'',
array(
'status' => array('name'=>'status','type'=>'xsd:string'),
'chave' => array('name'=>'chave','type'=>'xsd:string'),
'resposta' => array('name'=>'resposta','type'=>'xsd:string')
)
);

$servidor->wsdl->addComplexType(
'ProductArray',
'complexType',
'array',
'',
'SOAP-ENC:Array',
array(),
array(
array('ref'=>'SOAP-ENC:arrayType','wsdl:arrayType'=>'tns:Product[]')
),
'tns:Product'
);	

$servidor->register(
'executar_servico_txt',$dados,
array('return'=>'tns:ProductArray'),
'urn:Servidor.geracaoNfe',
'urn:Servidor.geracaoNfe',
'rpc',
'encoded',
'WebService criado para Geraчуo de Notas Fiscais Eletronicas.'
);


$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$servidor->service($HTTP_RAW_POST_DATA);

/*	$f = fopen('Arquivo26666.txt', 'w');
	fwrite($f, $HTTP_RAW_POST_DATA);
	fclose($f);
*/

?>