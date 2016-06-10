<?php

error_reporting(E_ALL);
ini_set('display_errors', '0');

define('PATH_ROOT',$_SERVER['DOCUMENT_ROOT']."/webservices/");
define('PATH_DIR',$_SERVER['DOCUMENT_ROOT']."/webservices/webservicos/NfePhp/");
define('PATH_ARQS',$_SERVER['DOCUMENT_ROOT']."/webservices/webservicos/Ws_Servidor/NfseXml/");
define('PATH_WEBSERVICOS',$_SERVER['DOCUMENT_ROOT']."/webservices/webservicos/");

require_once(PATH_ROOT.'webservicos/NfePhp/classes/libs/NFSe/NFSe.class.php');
require_once(PATH_ROOT.'webservicos/Ws_Servidor/includes/dbconnect.php');

include_once('lib/nusoap.php');
include_once('WsParametrosNFSe.php');
include_once('WsServicosNFSe.php');

$servidor = new nusoap_server();
$servidor->configureWSDL('Servidor','urn:Servidor');
$servidor->wsdl->schemaTargetNamespace = 'urn:Servidor';

$dadosNfse = montagem_parametros();

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
'executar_servico_nfse',$dadosNfse,
array('return'=>'tns:ProductArray'),
'urn:Servidor.geracaoNfse',
'urn:Servidor.geracaoNfse',
'rpc',
'encoded',
'WebService criado para Gera��o de Notas Fiscais de Servi�os Eletronicas.'
);

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$servidor->service($HTTP_RAW_POST_DATA);

	/*$f = fopen('Arquivo2.txt', 'w');
	fwrite($f, $HTTP_RAW_POST_DATA);
	fclose($f);*/


?>