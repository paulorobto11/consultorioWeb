<?
include_once('includes/Mobiliario.php');
include_once('includes/MobiliarioDAO.php');
include_once('includes/Atividade_empresa.php');
include_once('includes/Atividade_empresaDAO.php');
include_once('includes/Cidades.php');
include_once('includes/CidadesDAO.php');

include_once('includes/Cadobra.php');
include_once('includes/CadobraDAO.php');
include_once('includes/Contribuinte.php');
include_once('includes/ContribuinteDAO.php');
include_once('includes/Empresa.php');
include_once('includes/EmpresaDAO.php');
include_once('includes/Notafiscal.php');
include_once('includes/NotafiscalDAO.php');
include_once('includes/Nfse_item_descritivo.php');
include_once('includes/Nfse_item_descritivoDAO.php');
include_once('includes/Nfse_item_nota.php');
include_once('includes/Nfse_item_notaDAO.php');
include_once('includes/Nfse_lanctos_iss.php');
include_once('includes/Nfse_lanctos_issDAO.php');
include_once('includes/Nfse_rps_envio.php');
include_once('includes/Nfse_rps_envioDAO.php');
include_once('includes/Nfse_erros_alertas.php');
include_once('includes/Nfse_erros_alertasDAO.php');

function montagem_parametros() {
	$dadosNfse = array(
	'xml' => 'xsd:string',
	);
	return $dadosNfse;
}

function retorna_erros($lote, $erro) {
	$objErrosAlerta = new Nfse_erros_alertas();
	$objErrosAlertaDAO = new Nfse_erros_alertasDAO();
	$objErrosAlerta->setCodigo($erro);
	$objErrosAlerta = $objErrosAlertaDAO->select($objErrosAlerta);
	
	$result[] = array(
			'status' => $erro,
			'chave' => $lote,
			'resposta' => trim($objErrosAlerta->getMensagem()),
	);
	return $result;
}

function montar_dados_rps($nroLote,$arquivo) {
	$xml = simplexml_load_string($arquivo, 'SimpleXMLElement',LIBXML_NOCDATA);
	foreach ($xml as $key=>$dados) {
		if (!empty($dados->ListaRps->Rps->InfRps->IdentificacaoRps)) {
			$identif = $dados->ListaRps->Rps->InfRps->IdentificacaoRps		;
		}
		if (!empty($dados->ListaRps->Rps->InfRps->DataEmissao)) {
			$dataEmissao = $dados->ListaRps->Rps->InfRps->DataEmissao		;
		}
		if (!empty($dados->ListaRps->Rps->InfRps->NaturezaOperacao)) {
			$naturezaOperacao = $dados->ListaRps->Rps->InfRps->NaturezaOperacao		;
		}
		if (!empty($dados->ListaRps->Rps->InfRps->RegimeEspecialTributacao)) {
			$regimeEspecialTributacao = $dados->ListaRps->Rps->InfRps->RegimeEspecialTributacao		;
		}
		if (!empty($dados->ListaRps->Rps->InfRps->OptanteSimplesNacional)) {
			$optanteSimplesNacional = $dados->ListaRps->Rps->InfRps->OptanteSimplesNacional		;
		}
		if (!empty($dados->ListaRps->Rps->InfRps->IncentivadorCultural)) {
			$incentivadorCultural = $dados->ListaRps->Rps->InfRps->IncentivadorCultural		;
		}
		if (!empty($dados->ListaRps->Rps->InfRps->Servico)) {
			$servico = $dados->ListaRps->Rps->InfRps->Servico		;
		}
		if (!empty($dados->ListaRps->Rps->InfRps->Prestador)) {
			$prestador = $dados->ListaRps->Rps->InfRps->Prestador		;
		}
		if (!empty($dados->ListaRps->Rps->InfRps->Tomador)) {
			$tomador = $dados->ListaRps->Rps->InfRps->Tomador		;
		}
	}
	
	$numero = $identif['0']->Numero;
	$serie = $identif['0']->Serie;
	$tipo  = $identif['0']->Tipo;
	
	$objRpsEnvio    = new Nfse_rps_envio();
	$objRpsEnvioDAO = new Nfse_rps_envioDAO();
	$objRpsEnvio->setRps_nro($numero);
	$objRpsEnvio->setRps_serie($serie);
	$existe = $objRpsEnvioDAO->verifica_existe($objRpsEnvio);
	if (!empty($existe)) {
		$erros = 'E10';
		return retorna_erros($nroLote, $erros);
	}
	if (!$tipo) {
		$erros = 'E12';
		return retorna_erros($nroLote, $erros);
	}
	if ($tipo <> 1) {
		$erros = 'E191';
		return retorna_erros($nroLote, $erros);
	}
	
	$data_base = date('Y-m-d');
	$dtaEmissao = substr($dataEmissao['0'], 0,10);
	if (empty($dtaEmissao)) {
		$erros = 'E14';
		return retorna_erros($nroLote, $erros);
	}
	
	$natureza  = $naturezaOperacao['0']		;
	$regime    = $regimeEspecialTributacao['0'];
	$optante   = $optanteSimplesNacional['0'];
	$incentivo = $incentivadorCultural['0'];
	
	
	$itemServico          = retiraMascaras($servico['0']->ItemListaServico);
	if (empty($itemServico)) {
		$erros = 'E31';
		return retorna_erros($nroLote, $erros);
	}
	
	$codigoTributacao     = $servico['0']->CodigoTributacaoMunicipio;
	if (empty($codigoTributacao)) {
		$erros = 'E35';
		return retorna_erros($nroLote, $erros);
	}
	
	$discriminacao        = $servico['0']->Discriminacao           ;
	if (empty($discriminacao)) {
		$erros = 'E41';
		return retorna_erros($nroLote, $erros);
	}
	
	$codigoMunicipio      = $servico['0']->CodigoMunicipio          ;
	if (empty($codigoMunicipio)) {
		$erros = 'E42';
		return retorna_erros($nroLote, $erros);
	}
	
	$cnpj_prestador      = $prestador->Cnpj;
	if (empty($cnpj_prestador)) {
		$erros = 'E44';
		return retorna_erros($nroLote, $erros);
	}
	$inscr_prestador      = $prestador->InscricaoMunicipal;
	if (empty($inscr_prestador)) {
		$erros = 'E43';
		return retorna_erros($nroLote, $erros);
	}
	
	if (isset($tomador->IdentificacaoTomador->CpfCnpj->Cpf)) {
		$cpfcnpj_tomador = $tomador->IdentificacaoTomador->CpfCnpj->Cpf;
	}
	
	if (isset($tomador->IdentificacaoTomador->CpfCnpj->Cnpj)) {
		$cpfcnpj_tomador = $tomador->IdentificacaoTomador->CpfCnpj->Cnpj;
	}
	if (empty($cpfcnpj_tomador)) {
		$erros = 'E47';
		return retorna_erros($nroLote, $erros);
	}
	$nome_tomador = $tomador->RazaoSocial;
	if (empty($nome_tomador)) {
		$erros = 'E118';
		return retorna_erros($nroLote, $erros);
	}
	$logradouro_tomador = $tomador->Endereco->Endereco;
	if (empty($logradouro_tomador)) {
		$erros = 'E56';
		return retorna_erros($nroLote, $erros);
	}
	$numero_tomador = $tomador->Endereco->Numero;
	if (empty($numero_tomador)) {
		$erros = 'E113';
		return retorna_erros($nroLote, $erros);
	}
	$bairro_tomador = $tomador->Endereco->Bairro;
	if (empty($bairro_tomador)) {
		$erros = 'E114';
		return retorna_erros($nroLote, $erros);
	}
	$codmunic_tomador = $tomador->Endereco->CodigoMunicipio;
	if (empty($codmunic_tomador)) {
		$erros = 'E109';
		return retorna_erros($nroLote, $erros);
	}
	$uf_tomador = $tomador->Endereco->Uf;
	if (empty($uf_tomador)) {
		$erros = 'E115';
		return retorna_erros($nroLote, $erros);
	}
	$cep_tomador = $tomador->Endereco->Cep;
	if (empty($cep_tomador)) {
		$erros = 'E125';
		return retorna_erros($nroLote, $erros);
	}
	$contato_telefone = $tomador->Contato->Telefone;
	if (empty($contato_telefone)) {
		$erros = 'E127';
		return retorna_erros($nroLote, $erros);
	}
	$contato_email    = $tomador->Contato->Email;
	if (empty($contato_email)) {
		$erros = 'E126';
		return retorna_erros($nroLote, $erros);
	}
	
	$valorServicos     = 0;
	$valorDeducoes     = 0;
	$issRetido         = 0;
	$valorIss          = 0;
	$valorIssRetido    = 0;
	$outrasRetencoes   = 0;
	$baseCalculo       = 0;
	$aliquota          = 0;
	$valorLiquidoNfse  = 0;
	
	if (isset($servico->Valores->ValorServicos)) {
		$valorServicos     = $servico->Valores->ValorServicos;
	}
	if (isset($servico->Valores->ValorDeducoes)) {
		$valorDeducoes     = $servico->Valores->ValorDeducoes;
	}
	if (isset($servico->Valores->IssRetido)) {
		$issRetido    	   = $servico->Valores->IssRetido;
	}
	if (isset($servico->Valores->ValorIss)) {
		$valorIss    	   = $servico->Valores->ValorIss;
	}
	if (isset($servico->Valores->ValorIssRetido)) {
		$valorIssRetido    = $servico->Valores->ValorIssRetido;
	}
	if (isset($servico->Valores->OutrasRetencoes)) {
		$outrasRetencoes   = $servico->Valores->OutrasRetencoes;
	}
	if (isset($servico->Valores->BaseCalculo)) {
		$baseCalculo       = $servico->Valores->BaseCalculo;
	}
	if (isset($servico->Valores->Aliquota)) {
		$aliquota          = $servico->Valores->Aliquota;
	}
	if (isset($servico->Valores->ValorLiquidoNfse)) {
		$valorLiquidoNfse  = $servico->Valores->ValorLiquidoNfse;
	}
	
	if (empty($valorServicos)) {
		$erros = 'E18';
		return retorna_erros($nroLote, $erros);
	}
	if (empty($issRetido)) {
		$erros = 'E36';
		return retorna_erros($nroLote, $erros);
	}
	if (empty($valorIss)) {
		$erros = 'E340';
		return retorna_erros($nroLote, $erros);
	}
	if (empty($valorIssRetido)) {
		$erros = 'E153';
		return retorna_erros($nroLote, $erros);
	}
	if (empty($baseCalculo)) {
		$erros = 'E18';
		return retorna_erros($nroLote, $erros);
	}
	if (empty($aliquota)) {
		$erros = 'E341';
		return retorna_erros($nroLote, $erros);
	}
	if (empty($valorLiquidoNfse)) {
		$erros = 'E18';
		return retorna_erros($nroLote, $erros);
	}
	
// 	$erros = 'E18';
// 	return retorna_erros($nroLote, $erros);
	
	
	$dadosRps = [
			'status' => '0',
			'numero' => $numero,
			'serie' => $serie,
			'tipo' => $tipo,
			'dtaEmissao' => $dtaEmissao,
			'natureza' => $natureza,
			'regime' => $regime,
			'optante' => $optante,
			'incentivo' => $incentivo,
			'itemServico' => $itemServico,
			'codigoTributacao' => $codigoTributacao,
			'discriminacao' => $discriminacao,
			'codigoMunicipio' => $codigoMunicipio,
			'cnpj_prestador' => $cnpj_prestador,
			'inscr_prestador' => $inscr_prestador,
			'cpfcnpj_tomador' => $cpfcnpj_tomador,
			'nome_tomador' => $nome_tomador,
			'logradouro_tomador' => $logradouro_tomador,
			'numero_tomador' => $numero_tomador,
			'bairro_tomador' => $bairro_tomador,
			'codmunic_tomador' => $codmunic_tomador  ,
			'uf_tomador' => $uf_tomador,
			'cep_tomador' => $cep_tomador,
			'contato_telefone' => $contato_telefone  ,
			'contato_email' => $contato_email,
			'valorServicos' => $valorServicos,
			'valorDeducoes' => $valorDeducoes,
			'issRetido' => $issRetido,
			'valorIss' => $valorIss,
			'valorIssRetido' => $valorIssRetido,
			'outrasRetencoes' => $outrasRetencoes,
			'baseCalculo' => $baseCalculo,
			'aliquota' => $aliquota,
			'valorLiquidoNfse' => $valorLiquidoNfse,
	];	
	
	return $dadosRps;
	
}

function inverteData($data)
{
	if (!$data) return;
	$data = str_replace('/','', $data);
	$dia = substr(str_pad($data, 8,0, STR_PAD_LEFT),0,2);
	$mes = substr(str_pad($data, 8,0, STR_PAD_LEFT),2,2);
	$ano = substr(str_pad($data, 8,0, STR_PAD_LEFT),4,4);

	$data = $ano.'-'.$mes.'-'.$dia;
	return $data;
}

function retiraMascaras($numero) {
	$numero = str_replace('(', '', $numero);
	$numero = str_replace(')', '', $numero);
	$numero = str_replace('-', '', $numero);
	$numero = str_replace('/', '', $numero);
	$numero = str_replace('.', '', $numero);
	$numero = str_replace(' ', '', $numero);
	return ($numero);
}

/*
function montar_configuracao($cnpj,$ambiente) {
	$objCademp       = new Cademp();
	$objCadempDAO    = new CadempDAO();
	$objCertif       = new Certific();
	$objCertifDAO    = new CertificDAO();
	
	$cnpj = '73222280000110';

	$aConfig = array();

	if (!$cnpj) {
		return 	$aConfig;
	}

	$objCademp->setEmpr_cnpj($cnpj);
	$existe = $objCadempDAO->verifica_existe($objCademp);
	if (!$existe) {
		return 	$aConfig;
	}

	$objCademp = $objCadempDAO->select($objCademp);

	$objCertif->setCodemp($objCademp->getCodemp());
	$existe = $objCertifDAO->verifica_existe_pfx($objCertif);
	if (!$existe) {
		return 	$aConfig;
	}

	$objCertif = $objCertifDAO->select_pfx($objCertif);
	$pfxcertificado = $objCertif->getNome_certicado();
	$keypass  = $objCertif->getSenha_certificado();

	$objCertif = $objCertifDAO->select_cer($objCertif);
	$certificado = $objCertif->getNome_certicado();


	$pasta = PATH_WEBSERVICOS."NfePhp/certificados";
	$caminho = $pasta.'/'.$objCademp->getEmpr_cnpj().'_certs/';

	$arquivos_dir = PATH_WEBSERVICOS."Ws_Servidor/NfeXml";

	$aConfig['ambiente']		= $ambiente;
	$aConfig['empresa']			= $objCademp->getNome_cliente();
	$aConfig['UF']				= 'PR';
	$aConfig['cnpj']			= $objCademp->getEmpr_cnpj();
	$aConfig['certName']		= $pfxcertificado;
	$aConfig['certificName']    = $certificado;
	$aConfig['keyPass']			= $keypass;
	$aConfig['passPhrase']		= '';
	$aConfig['arquivosDir']		= $arquivos_dir;
	if ($mod == 55) {
		$aConfig['arquivoURLxml']	= 'nfe_ws3_mod55.xml';
	} else {
		$aConfig['arquivoURLxml']	= 'nfe_ws3_mod65.xml';
	}
	$aConfig['baseurl']			= 'http://localhost/nfephp';
	$aConfig['certsDir']		= $caminho;

	return 	$aConfig;

}


function monta_array($arquivo) {
	$dadosNFE = explode("|", $arquivo);
	$dadosNfse = array();
	$i = 1;
	foreach ($dadosNFE as $key=>$dados) {
		if (trim($key) == '2') {
			$id  = trim($dados);
		}
		if (trim($key) == '8') {
			$id  = trim($dados);
		}
		if (trim($key) == '3') {
			$dadosNfse[$id]['id_lote']     = $dados;
		}
		if (trim($key) == '4') {
			$dadosNfse[$id]['cnpj_envio']  = $dados;
		}
		if (trim($key) == '5') {
			$dadosNfse[$id]['im_envio']    = $dados;
		}
		if (trim($key) == '6') {
			$dadosNfse[$id]['codmunic']    = $dados;
		}
		if (trim($key) == '7') {
			$dadosNfse[$id]['qtde_rps']    = $dados;
		}
		if (trim($key) == '9') {
			$dadosNfse[$id][$i]['rps']['numero']                   = $dados;
		}
		if (trim($key) == '10') {
			$dadosNfse[$id][$i]['rps']['serie']                    = $dados;
		}
		if (trim($key) == '11') {
			$dadosNfse[$id][$i]['rps']['tipo']                     = $dados;
		}
		if (trim($key) == '13') {
			$dadosNfse[$id][$i]['identrps']['dtemi']               = $dados;
		}
		if (trim($key) == '14') {
			$dadosNfse[$id][$i]['identrps']['natureza']            = $dados;
		}
		if (trim($key) == '15') {
			$dadosNfse[$id][$i]['identrps']['snacional']           = $dados;
		}
		if (trim($key) == '16') {
			$dadosNfse[$id][$i]['identrps']['cultura']             = $dados;
		}
		if (trim($key) == '17') {
			$dadosNfse[$id][$i]['identrps']['regime']              = $dados;
		}
		if (trim($key) == '18') {
			$dadosNfse[$id][$i]['identrps']['status']              = $dados;
		}
		if (trim($key) == '20') {
			$dadosNfse[$id][$i]['serv_vlrs']['valorservicos']      = $dados;
		}
		if (trim($key) == '22') {
			$dadosNfse[$id][$i]['serv_vlrs']['valordeducoes']      = $dados;
		}
		if (trim($key) == '24') {
			$dadosNfse[$id][$i]['serv_vlrs']['valorpis']           = $dados;
		}
		if (trim($key) == '25') {
			$dadosNfse[$id][$i]['serv_vlrs']['valorcofins']        = $dados;
		}
		if (trim($key) == '26') {
			$dadosNfse[$id][$i]['serv_vlrs']['valorinss']          = $dados;
		}
		if (trim($key) == '27') {
			$dadosNfse[$id][$i]['serv_vlrs']['valorir']            = $dados;
		}
		if (trim($key) == '28') {
			$dadosNfse[$id][$i]['serv_vlrs']['valorcsll']          = $dados;
		}
		if (trim($key) == '30') {
			$dadosNfse[$id][$i]['serv_vlrs']['outrasretencoes']    = $dados;
		}
		if (trim($key) == '31') {
			$dadosNfse[$id][$i]['serv_vlrs']['incondicionado']     = $dados;
		}
		if (trim($key) == '32') {
			$dadosNfse[$id][$i]['serv_vlrs']['condicionado']       = $dados;
		}
		if (trim($key) == '34') {
			$dadosNfse[$id][$i]['serv_vlrs']['issretido']          = $dados;
		}
		if (trim($key) == '35') {
			$dadosNfse[$id][$i]['serv_vlrs']['valoriss']           = $dados;
		}
		if (trim($key) == '36') {
			$dadosNfse[$id][$i]['serv_vlrs']['basecalculo']        = $dados;
		}
		if (trim($key) == '37') {
			$dadosNfse[$id][$i]['serv_vlrs']['aliquota']           = $dados;
		}
		if (trim($key) == '39') {
			$dadosNfse[$id][$i]['serv_vlrs']['valorliquidonfse']   = $dados;
		}
		if (trim($key) == '41') {
			$dadosNfse[$id][$i]['obra']['codobra']                 = $dados;
		}
		if (trim($key) == '42') {
			$dadosNfse[$id][$i]['obra']['art']                     = $dados;
		}
		if (trim($key) == '44') {
			$dadosNfse[$id][$i]['serv_ativ']['itemlistaservico']   = $dados;
		}
		if (trim($key) == '45') {
			$dadosNfse[$id][$i]['serv_ativ']['codigocnae']         = $dados;
		}
		if (trim($key) == '46') {
			$dadosNfse[$id][$i]['serv_ativ']['atividade']          = $dados;
		}
		if (trim($key) == '47') {
			$dadosNfse[$id][$i]['serv_ativ']['discr']              = $dados;
		}
		if (trim($key) == '49') {
			$dadosNfse[$id][$i]['serv_ativ']['codmun']             = $dados;
		}
		if (trim($key) == '50') {
			$dadosNfse[$id][$i]['prest']    ['cnpj']               = $dados;
		}
		if (trim($key) == '51') {
			$dadosNfse[$id][$i]['prest']    ['inscrmun']           = $dados;
		}
		if (trim($key) == '53') {
			$dadosNfse[$id][$i]['tomador']  ['cpfcnpj']            = $dados;
		}
		if (trim($key) == '54') {
			$dadosNfse[$id][$i]['tomador']  ['cpf']                = $dados;
		}
		if (trim($key) == '55') {
			$dadosNfse[$id][$i]['tomador']  ['nome']               = $dados;
		}
		if (trim($key) == '57') {
			$dadosNfse[$id][$i]['tomador']  ['end_lograd']         = $dados;
		}
		if (trim($key) == '58') {
			$dadosNfse[$id][$i]['tomador']  ['end_bairro']         = $dados;
		}
		if (trim($key) == '59') {
			$dadosNfse[$id][$i]['tomador']  ['end_numero']         = $dados;
		}
		if (trim($key) == '61') {
			$dadosNfse[$id][$i]['tomador']  ['end_codmun']         = $dados;
		}
		if (trim($key) == '62') {
			$dadosNfse[$id][$i]['tomador']  ['end_cidade']         = $dados;
		}
		if (trim($key) == '63') {
			$dadosNfse[$id][$i]['tomador']  ['end_uf']             = $dados;
		}
		if (trim($key) == '64') {
			$dadosNfse[$id][$i]['tomador']  ['end_cep']            = $dados;
		}
		if (trim($key) == '66') {
			$dadosNfse[$id][$i]['contato']  ['telefone']           = $dados;
		}
		if (trim($key) == '67') {
			$dadosNfse[$id][$i]['contato']  ['email']              = $dados;
		}
	}

	return $dadosNfse;
}



/*
function monta_objeto_dados($valor, $dados, $objNfe_dados) {
switch ($valor) {
case '01':
$objNfe_dados->setIdent_chave($dados['chave']);
$objNfe_dados->setIdent_versao($dados['versao']);
break;
case '02':
$objNfe_dados->setNfref_CNPJ($dados['CNPJ']);
$objNfe_dados->setNfref_aNoMes($dados['aNoMes']);
$objNfe_dados->setNfref_cUF($dados['cUF']);
$objNfe_dados->setNfref_cNF($dados['cNF']);
$objNfe_dados->setNfref_natOp($dados['natOp']);
$objNfe_dados->setNfref_indPag($dados['indPag']);
$objNfe_dados->setNfref_mod($dados['mod']);
$objNfe_dados->setNfref_serie($dados['serie']);
$objNfe_dados->setNfref_nNF($dados['nNF']);
$objNfe_dados->setNfref_dhEmi($dados['dhEmi']);
$objNfe_dados->setNfref_dhSaiEnt($dados['dhSaiEnt']);
$objNfe_dados->setNfref_tpNF($dados['tpNF']);
$objNfe_dados->setNfref_idDest($dados['idDest']);
$objNfe_dados->setNfref_cMunFG($dados['cMunFG']);
$objNfe_dados->setNfref_tpImp($dados['tpImp']);
$objNfe_dados->setNfref_tpEmis($dados['tpEmis']);
$objNfe_dados->setNfref_cDV($dados['cDV']);
$objNfe_dados->setNfref_tpAmb($dados['tpAmb']);
$objNfe_dados->setNfref_finNFe($dados['finNFe']);
$objNfe_dados->setNfref_indFinal($dados['indFinal']);
$objNfe_dados->setNfref_indPres($dados['indPres']);
$objNfe_dados->setNfref_procEmi($dados['procEmi']);
$objNfe_dados->setNfref_verProc($dados['verProc']);
$objNfe_dados->setNfref_dhCont($dados['dhCont']);
$objNfe_dados->setNfref_xJust($dados['xJust']);
break;
case '03':
$objNfe_dados->setRefNfe_refNFeCh($dados['refNFeCh']);
$objNfe_dados->setRefNfe_cUF($dados['cUF']);
$objNfe_dados->setRefNfe_AAMM($dados['AAMM']);
$objNfe_dados->setRefNfe_CNPJ($dados['CNPJ']);
$objNfe_dados->setRefNfe_mod($dados['mod']);
$objNfe_dados->setRefNfe_serie($dados['serie']);
$objNfe_dados->setRefNfe_nNF($dados['nNF']);
break;
case '04':
$objNfe_dados->setRural_cUF($dados['cUF']);
$objNfe_dados->setRural_AAMM($dados['AAMM']);
$objNfe_dados->setRural_CNPJ($dados['CNPJ']);
$objNfe_dados->setRural_CPF($dados['CPF']);
$objNfe_dados->setRural_IE($dados['IE']);
$objNfe_dados->setRural_mod($dados['mod']);
$objNfe_dados->setRural_serie($dados['serie']);
$objNfe_dados->setRural_nNF($dados['nNF']);
break;
case '05':
$objNfe_dados->setCreref_refCTe($dados['refCTe']);
$objNfe_dados->setCreref_nECF($dados['nECF']);
$objNfe_dados->setCreref_nCOO($dados['nCOO']);
break;
case '06':
$objNfe_dados->setEcferef_mod($dados['mod']);
break;
case '07':
$objNfe_dados->setEmit_CNPJ($dados['CNPJ']);
$objNfe_dados->setEmit_xNome($dados['xNome']);
$objNfe_dados->setEmit_xFant($dados['xFant']);
$objNfe_dados->setEmit_IE($dados['IE']);
$objNfe_dados->setEmit_IEST($dados['IEST']);
$objNfe_dados->setEmit_IM($dados['IM']);
$objNfe_dados->setEmit_CNAE($dados['CNAE']);
$objNfe_dados->setEmit_CRT($dados['CRT']);
break;
case '08':
$objNfe_dados->setEnderEmit_xLgr($dados['xLgr']);
$objNfe_dados->setEnderEmit_nro($dados['nro']);
$objNfe_dados->setEnderEmit_xCpl($dados['xCpl']);
$objNfe_dados->setEnderEmit_xBairro($dados['xBairro']);
$objNfe_dados->setEnderEmit_cMun($dados['cMun']);
$objNfe_dados->setEnderEmit_xMun($dados['xMun']);
$objNfe_dados->setEnderEmit_UF($dados['UF']);
$objNfe_dados->setEnderEmit_CEP($dados['CEP']);
$objNfe_dados->setEnderEmit_cPais($dados['cPais']);
$objNfe_dados->setEnderEmit_xPais($dados['xPais']);
$objNfe_dados->setEnderEmit_fone($dados['fone']);
break;
case '09':
$objNfe_dados->setDest_CNPJ($dados['CNPJ']);
$objNfe_dados->setDest_CPF($dados['CPF']);
$objNfe_dados->setDest_idEstrangeiro($dados['idEstrangeiro']);
$objNfe_dados->setDest_xNome($dados['xNome']);
$objNfe_dados->setDest_indIEDest($dados['indIEDest']);
$objNfe_dados->setDest_IE($dados['IE']);
$objNfe_dados->setDest_ISUF($dados['ISUF']);
$objNfe_dados->setDest_IM($dados['IM']);
$objNfe_dados->setDest_email($dados['email']);
break;
case '10':
$objNfe_dados->setEnderDest_xLgr($dados['xLgr']);
$objNfe_dados->setEnderDest_nro($dados['nro']);
$objNfe_dados->setEnderDest_xCpl($dados['xCpl']);
$objNfe_dados->setEnderDest_xBairro($dados['xBairro']);
$objNfe_dados->setEnderDest_cMun($dados['cMun']);
$objNfe_dados->setEnderDest_xMun($dados['xMun']);
$objNfe_dados->setEnderDest_UF($dados['UF']);
$objNfe_dados->setEnderDest_CEP($dados['CEP']);
$objNfe_dados->setEnderDest_cPais($dados['cPais']);
$objNfe_dados->setEnderDest_xPais($dados['xPais']);
$objNfe_dados->setEnderDest_fone($dados['fone']);
break;
case '11':
$objNfe_dados->setRetirada_CNPJ($dados['CNPJ']);
$objNfe_dados->setRetirada_CPF($dados['CPF']);
$objNfe_dados->setRetirada_xLgr($dados['xLgr']);
$objNfe_dados->setRetirada_nro($dados['nro']);
$objNfe_dados->setRetirada_xCpl($dados['xCpl']);
$objNfe_dados->setRetirada_xBairro($dados['xBairro']);
$objNfe_dados->setRetirada_cMun($dados['cMun']);
$objNfe_dados->setRetirada_xMun($dados['xMun']);
$objNfe_dados->setRetirada_UF($dados['UF']);
break;
case '12':
$objNfe_dados->setEntrega_CNPJ($dados['CNPJ']);
$objNfe_dados->setEntrega_CPF($dados['CPF']);
$objNfe_dados->setEntrega_xLgr($dados['xLgr']);
$objNfe_dados->setEntrega_nro($dados['nro']);
$objNfe_dados->setEntrega_xCpl($dados['xCpl']);
$objNfe_dados->setEntrega_xBairro($dados['xBairro']);
$objNfe_dados->setEntrega_cMun($dados['cMun']);
$objNfe_dados->setEntrega_xMun($dados['xMun']);
$objNfe_dados->setEntrega_UF($dados['UF']);
break;
case '13':
$objNfe_dados->setAuxXML_AutXML($dados['AutXML']);
break;
case '15':
$objNfe_dados->setTotal_vBC($dados['vBC']);
$objNfe_dados->setTotal_vICMS($dados['vICMS']);
$objNfe_dados->setTotal_vICMSDeson($dados['vICMSDeson']);
$objNfe_dados->setTotal_vBCST($dados['vBCST']);
$objNfe_dados->setTotal_vST($dados['vST']);
$objNfe_dados->setTotal_vProd($dados['vProd']);
$objNfe_dados->setTotal_vDesc($dados['vDesc']);
$objNfe_dados->setTotal_vIPI($dados['vIPI']);
$objNfe_dados->setTotal_vPIS($dados['vPIS']);
$objNfe_dados->setTotal_vCOFINS($dados['vCOFINS']);
$objNfe_dados->setTotal_vFrete($dados['vFrete']);
$objNfe_dados->setTotal_vSeg($dados['vSeg']);
$objNfe_dados->setTotal_vII($dados['vII']);
$objNfe_dados->setTotal_vOutro($dados['vOutro']);
$objNfe_dados->setTotal_vtotal($dados['vtotal']);
break;
case '16':
$objNfe_dados->setReltrib_vRetPIS($dados['vRetPIS']);
$objNfe_dados->setReltrib_vRetCOFINS($dados['vRetCOFINS']);
$objNfe_dados->setReltrib_vRetCSLL($dados['vRetCSLL']);
$objNfe_dados->setReltrib_vBCIRRF($dados['vBCIRRF']);
$objNfe_dados->setReltrib_vIRRF($dados['vIRRF']);
$objNfe_dados->setReltrib_vBCRetPrev($dados['vBCRetPrev']);
$objNfe_dados->setReltrib_vRetPrev($dados['vRetPrev']);
break;
case '17':
$objNfe_dados->setModfrete_modFrete($dados['modFrete']);
break;
case '18':
$objNfe_dados->setTransp_CNPJ($dados['CNPJ']);
$objNfe_dados->setTransp_CPF($dados['CPF']);
$objNfe_dados->setTransp_xNome($dados['xNome']);
$objNfe_dados->setTransp_IE($dados['IE']);
$objNfe_dados->setTransp_xEnder($dados['xEnder']);
$objNfe_dados->setTransp_xMun($dados['xMun']);
$objNfe_dados->setTransp_UF($dados['UF']);
break;
case '19':
$objNfe_dados->setRetTransp_vServ($dados['vServ']);
$objNfe_dados->setRetTransp_vBCRet($dados['vBCRet']);
$objNfe_dados->setRetTransp_pICMSRet($dados['pICMSRet']);
$objNfe_dados->setRetTransp_vICMSRet($dados['vICMSRet']);
$objNfe_dados->setRetTransp_CFOP($dados['CFOP']);
$objNfe_dados->setRetTransp_cMunFG($dados['cMunFG']);
break;
case '20':
$objNfe_dados->setVeicTransp_placa($dados['placa']);
$objNfe_dados->setVeicTransp_UF($dados['UF']);
$objNfe_dados->setVeicTransp_RNTC($dados['RNTC']);
break;
case '21':
$objNfe_dados->setReboque_placa($dados['placa']);
$objNfe_dados->setReboque_siglaUF($dados['siglaUF']);
$objNfe_dados->setReboque_rntc($dados['rntc']);
$objNfe_dados->setReboque_vagao($dados['vagao']);
$objNfe_dados->setReboque_balsa($dados['balsa']);
break;
case '22':
$objNfe_dados->setVol_qVol($dados['qVol']);
$objNfe_dados->setVol_esp($dados['esp']);
$objNfe_dados->setVol_marca($dados['marca']);
$objNfe_dados->setVol_nVol($dados['nVol']);
$objNfe_dados->setVol_pesoL($dados['pesoL']);
$objNfe_dados->setVol_pesoB($dados['pesoB']);
$objNfe_dados->setVol_aLacres($dados['aLacres']);
break;
case '23':
$objNfe_dados->setCobr_nFat($dados['nFat']);
$objNfe_dados->setCobr_vOrig($dados['vOrig']);
$objNfe_dados->setCobr_vDesc($dados['vDesc']);
$objNfe_dados->setCobr_vLiq($dados['vLiq']);
break;
case '24':
$objNfe_dados->setDup_nDup($dados['nDup']);
$objNfe_dados->setDup_dVenc($dados['dVenc']);
$objNfe_dados->setDup_vDup($dados['vDup']);
break;
case '25':
$objNfe_dados->setPagT_pagT($dados['pagT']);
break;
case '26':
$objNfe_dados->setPag_CNPJ($dados['CNPJ']);
$objNfe_dados->setPag_tBand($dados['tBand']);
$objNfe_dados->setPag_cAut($dados['cAut']);
break;
case '27':
$objNfe_dados->setInfAdFisco_infAdFisco($dados['infAdFisco_infAdFisco']);
$objNfe_dados->setInfAdFisco_infCpl($dados['infAdFisco_infCpl']);
break;
case '28':
$objNfe_dados->setObsCont_xCampo($dados['xCampo']);
$objNfe_dados->setObsCont_xTexto($dados['xTexto']);
break;
case '29':
$objNfe_dados->setObsFisco_xCampo($dados['xCampo']);
$objNfe_dados->setObsFisco_xTexto($dados['xTexto']);
break;
case '30':
$objNfe_dados->setProcRef_nProc($dados['nProc']);
$objNfe_dados->setProcRef_indProc($dados['indProc']);
break;
case '31':
$objNfe_dados->setExporta_UFSaidaPais($dados['UFSaidaPais']);
$objNfe_dados->setExporta_xLocExporta($dados['xLocExporta']);
$objNfe_dados->setExporta_xLocDespacho($dados['xLocDespacho']);
break;
case '32':
$objNfe_dados->setCompra_xNEmp($dados['xNEmp']);
$objNfe_dados->setCompra_xPed($dados['xPed']);
$objNfe_dados->setCompra_xCont($dados['xCont']);
break;
case '33':
$objNfe_dados->setCana_safra($dados['safra']);
$objNfe_dados->setCana_ref($dados['ref']);
break;
case '34':
$objNfe_dados->setFordia_dia($dados['dia']);
$objNfe_dados->setFordia_qtde($dados['qtde']);
$objNfe_dados->setFordia_qTotMes($dados['qTotMes']);
$objNfe_dados->setFordia_qTotAnt($dados['qTotAnt']);
$objNfe_dados->setFordia_qTotGer($dados['qTotGer']);
break;
case '35':
$objNfe_dados->setDeduc_xDed($dados['deduc_xDed']);
$objNfe_dados->setDeduc_vDed($dados['deduc_vDed']);
$objNfe_dados->setDeduc_vFor($dados['deduc_vFor']);
$objNfe_dados->setDeduc_vTotDed($dados['deduc_vTotDed']);
$objNfe_dados->setDeduc_vLiqFor($dados['deduc_vLiqFor']);
break;
}

return $objNfe_dados;
}

function monta_objeto_dados_produtos($valor, $dados_produtos, $objNfe_produtos) {
switch ($valor) {
case '50':
$objNfe_produtos->setProd_tipo(1);
$objNfe_produtos->setProd_nItem($dados_produtos['nItem']);
$objNfe_produtos->setProd_cProd($dados_produtos['cProd']);
$objNfe_produtos->setProd_cEAN($dados_produtos['cEAN']);
$objNfe_produtos->setProd_xProd($dados_produtos['xProd']);
$objNfe_produtos->setProd_NCM($dados_produtos['NCM']);
$objNfe_produtos->setProd_NVE($dados_produtos['NVE']);
$objNfe_produtos->setProd_EXTIPI($dados_produtos['EXTIPI']);
$objNfe_produtos->setProd_CFOP($dados_produtos['CFOP']);
$objNfe_produtos->setProd_uCom($dados_produtos['uCom']);
$objNfe_produtos->setProd_qCom($dados_produtos['qCom']);
$objNfe_produtos->setProd_vUnCom($dados_produtos['vUnCom']);
$objNfe_produtos->setProd_vProd($dados_produtos['vProd']);
$objNfe_produtos->setProd_cEANTrib($dados_produtos['cEANTrib']);
$objNfe_produtos->setProd_uTrib($dados_produtos['uTrib']);
$objNfe_produtos->setProd_qTrib($dados_produtos['qTrib']);
$objNfe_produtos->setProd_vUnTrib($dados_produtos['vUnTrib']);
$objNfe_produtos->setProd_vFrete($dados_produtos['vFrete']);
$objNfe_produtos->setProd_vSeg($dados_produtos['vSeg']);
$objNfe_produtos->setProd_vDesc($dados_produtos['vDesc']);
$objNfe_produtos->setProd_vOutro($dados_produtos['vOutro']);
$objNfe_produtos->setProd_indTot($dados_produtos['indTot']);
$objNfe_produtos->setProd_xPed($dados_produtos['xPed']);
$objNfe_produtos->setProd_nItemPed($dados_produtos['nItemPed']);
$objNfe_produtos->setProd_nFCI($dados_produtos['nFCI']);
break;
case '51':
$objNfe_produtos->setIcms_tipo(1);
$objNfe_produtos->setIcms_nItem($dados_produtos['nItem']);
$objNfe_produtos->setIcms_orig($dados_produtos['orig']);
$objNfe_produtos->setIcms_cst($dados_produtos['cst']);
$objNfe_produtos->setIcms_modBC($dados_produtos['modBC']);
$objNfe_produtos->setIcms_pRedBC($dados_produtos['pRedBC']);
$objNfe_produtos->setIcms_vBC($dados_produtos['vBC']);
$objNfe_produtos->setIcms_pICMS($dados_produtos['pICMS']);
$objNfe_produtos->setIcms_vICMS($dados_produtos['vICMS']);
$objNfe_produtos->setIcms_vICMSDeson($dados_produtos['vICMSDeson']);
$objNfe_produtos->setIcms_motDesICMS($dados_produtos['motDesICMS']);
$objNfe_produtos->setIcms_modBCST($dados_produtos['modBCST']);
$objNfe_produtos->setIcms_pMVAST($dados_produtos['pMVAST']);
$objNfe_produtos->setIcms_pRedBCST($dados_produtos['pRedBCST']);
$objNfe_produtos->setIcms_vBCST($dados_produtos['vBCST']);
$objNfe_produtos->setIcms_pICMSST($dados_produtos['pICMSST']);
$objNfe_produtos->setIcms_vICMSST($dados_produtos['vICMSST']);
$objNfe_produtos->setIcms_pDif($dados_produtos['pDif']);
$objNfe_produtos->setIcms_vICMSDif($dados_produtos['vICMSDif']);
$objNfe_produtos->setIcms_vICMSOp($dados_produtos['vICMSOp']);
$objNfe_produtos->setIcms_vBCSTRet($dados_produtos['vBCSTRet']);
$objNfe_produtos->setIcms_vICMSSTRet($dados_produtos['vICMSSTRet']);
break;
case '52':
$objNfe_produtos->setIcms_tipo(2);
$objNfe_produtos->setIcmsst_nItem($dados_produtos['nItem']);
$objNfe_produtos->setIcmsst_modBCST($dados_produtos['modBCST']);
$objNfe_produtos->setIcmsst_pMVAST($dados_produtos['pMVAST']);
$objNfe_produtos->setIcmsst_pRedBCST($dados_produtos['pRedBCST']);
$objNfe_produtos->setIcmsst_vBCST($dados_produtos['vBCST']);
$objNfe_produtos->setIcmsst_pICMSST($dados_produtos['pICMSST']);
$objNfe_produtos->setIcmsst_vICMSST($dados_produtos['vICMSST']);
$objNfe_produtos->setIcmsst_pBOCp($dados_produtos['pBOCp']);
$objNfe_produtos->setIcmsst_UFST($dados_produtos['UFST']);
break;
case '53':
$objNfe_produtos->setIcms_tipo(3);
$objNfe_produtos->setIcmssn_nItem($dados_produtos['nItem']);
$objNfe_produtos->setIcmssn_orig($dados_produtos['orig']);
$objNfe_produtos->setIcmssn_csosn($dados_produtos['csosn']);
$objNfe_produtos->setIcmssn_modBC($dados_produtos['modBC']);
$objNfe_produtos->setIcmssn_vBC($dados_produtos['vBC']);
$objNfe_produtos->setIcmssn_pRedBC($dados_produtos['pRedBC']);
$objNfe_produtos->setIcmssn_pICMS($dados_produtos['pICMS']);
$objNfe_produtos->setIcmssn_vICMS($dados_produtos['vICMS']);
$objNfe_produtos->setIcmssn_pCredSN($dados_produtos['pCredSN']);
$objNfe_produtos->setIcmssn_vCredICMSSN($dados_produtos['vCredICMSSN']);
$objNfe_produtos->setIcmssn_modBCST($dados_produtos['modBCST']);
$objNfe_produtos->setIcmssn_pMVAST($dados_produtos['pMVAST']);
$objNfe_produtos->setIcmssn_pRedBCST($dados_produtos['pRedBCST']);
$objNfe_produtos->setIcmssn_vBCST($dados_produtos['vBCST']);
$objNfe_produtos->setIcmssn_pICMSST($dados_produtos['pICMSST']);
$objNfe_produtos->setIcmssn_vICMSST($dados_produtos['vICMSST']);
$objNfe_produtos->setIcmssn_vBCSTRet($dados_produtos['vBCSTRet']);
$objNfe_produtos->setIcmssn_vICMSSTRet($dados_produtos['vICMSSTRet']);
break;
case '54':
$objNfe_produtos->setIpi_tipo(1);
$objNfe_produtos->setIpi_tipo($dados_produtos['tipo']);
$objNfe_produtos->setIpi_nItem($dados_produtos['nItem']);
$objNfe_produtos->setIpi_cst($dados_produtos['cst']);
$objNfe_produtos->setIpi_clEnq($dados_produtos['clEnq']);
$objNfe_produtos->setIpi_cnpjProd($dados_produtos['cnpjProd']);
$objNfe_produtos->setIpi_cSelo($dados_produtos['cSelo']);
$objNfe_produtos->setIpi_qSelo($dados_produtos['qSelo']);
$objNfe_produtos->setIpi_cEnq($dados_produtos['cEnq']);
$objNfe_produtos->setIpi_vBC($dados_produtos['vBC']);
$objNfe_produtos->setIpi_pIPI($dados_produtos['pIPI']);
$objNfe_produtos->setIpi_qUnid($dados_produtos['qUnid']);
$objNfe_produtos->setIpi_vUnid($dados_produtos['vUnid']);
$objNfe_produtos->setIpi_hvIPI($dados_produtos['hvIPI']);
break;
case '55':
$objNfe_produtos->setPis_tipo(1);
$objNfe_produtos->setPis_tipo($dados_produtos['tipo']);
$objNfe_produtos->setPis_nItem($dados_produtos['nItem']);
$objNfe_produtos->setPis_cst($dados_produtos['cst']);
$objNfe_produtos->setPis_vBC($dados_produtos['vBC']);
$objNfe_produtos->setPis_pPIS($dados_produtos['pPIS']);
$objNfe_produtos->setPis_vPIS($dados_produtos['vPIS']);
$objNfe_produtos->setPis_qBCProd($dados_produtos['qBCProd']);
$objNfe_produtos->setPis_vAliqProd($dados_produtos['vAliqProd']);
break;
case '56':
$objNfe_produtos->setPis_tipo(2);
$objNfe_produtos->setPisst_nItem($dados_produtos['nItem']);
$objNfe_produtos->setPisst_vBC($dados_produtos['vBC']);
$objNfe_produtos->setPisst_pPIS($dados_produtos['pPIS']);
$objNfe_produtos->setPisst_qBCProd($dados_produtos['qBCProd']);
$objNfe_produtos->setPisst_vAliqProd($dados_produtos['vAliqProd']);
$objNfe_produtos->setPisst_vPIS($dados_produtos['vPIS']);
break;
case '57':
$objNfe_produtos->setCofins_tipo(1);
$objNfe_produtos->setCofins_tipo($dados_produtos['tipo']);
$objNfe_produtos->setCofins_nItem($dados_produtos['nItem']);
$objNfe_produtos->setCofins_cst($dados_produtos['cst']);
$objNfe_produtos->setCofins_vBC($dados_produtos['vBC']);
$objNfe_produtos->setCofins_pCOFINS($dados_produtos['pCOFINS']);
$objNfe_produtos->setCofins_vCOFINS($dados_produtos['vCOFINS']);
$objNfe_produtos->setCofins_qBCProd($dados_produtos['qBCProd']);
$objNfe_produtos->setCofins_vAliqProd($dados_produtos['vAliqProd']);
break;
case '58':
$objNfe_produtos->setCofins_tipo(2);
$objNfe_produtos->setCofinsst_nItem($dados_produtos['nItem']);
$objNfe_produtos->setCofinsst_vBC($dados_produtos['vBC']);
$objNfe_produtos->setCofinsst_pCOFINS($dados_produtos['pCOFINS']);
$objNfe_produtos->setCofinsst_qBCProd($dados_produtos['qBCProd']);
$objNfe_produtos->setCofinsst_vAliqProd($dados_produtos['vAliqProd']);
$objNfe_produtos->setCofinsst_vCOFINS($dados_produtos['vCOFINS']);
break;
case '59':
$objNfe_produtos->setAII_nItem($dados_produtos['nItem']);
$objNfe_produtos->setAII_vBC($dados_produtos['vBC']);
$objNfe_produtos->setAII_vDespAdu($dados_produtos['vDespAdu']);
$objNfe_produtos->setAII_vII($dados_produtos['vII']);
$objNfe_produtos->setAII_vIOF($dados_produtos['vIOF']);
break;
case '60':
$objNfe_produtos->setNve_nItem($dados_produtos['nItem']);
$objNfe_produtos->setNve_texto($dados_produtos['texto']);
break;
case '61':
$objNfe_produtos->setInfad_nItem($dados_produtos['nItem']);
$objNfe_produtos->setInfad_inform($dados_produtos['inform']);
break;
case '62':
$objNfe_produtos->setDi_nItem($dados_produtos['nItem']);
$objNfe_produtos->setDi_nDI($dados_produtos['nDI']);
$objNfe_produtos->setDi_dDI($dados_produtos['dDI']);
$objNfe_produtos->setDi_xLocDesemb($dados_produtos['xLocDesemb']);
$objNfe_produtos->setDi_UFDesemb($dados_produtos['UFDesemb']);
$objNfe_produtos->setDi_dDesemb($dados_produtos['dDesemb']);
$objNfe_produtos->setDi_tpViaTransp($dados_produtos['tpViaTransp']);
$objNfe_produtos->setDi_vAFRMM($dados_produtos['vAFRMM']);
$objNfe_produtos->setDi_tpIntermedio($dados_produtos['tpIntermedio']);
$objNfe_produtos->setDi_CNPJ($dados_produtos['CNPJ']);
$objNfe_produtos->setDi_UFTerceiro($dados_produtos['UFTerceiro']);
$objNfe_produtos->setDi_cExportador($dados_produtos['cExportador']);
break;
case '63':
$objNfe_produtos->setAdi_nItem($dados_produtos['nItem']);
$objNfe_produtos->setAdi_nDI($dados_produtos['nDI']);
$objNfe_produtos->setAdi_nAdicao($dados_produtos['nAdicao']);
$objNfe_produtos->setAdi_nSeqAdicC($dados_produtos['nSeqAdicC']);
$objNfe_produtos->setAdi_cFabricante($dados_produtos['cFabricante']);
$objNfe_produtos->setAdi_vDescDI($dados_produtos['vDescDI']);
$objNfe_produtos->setAdi_nDraw($dados_produtos['nDraw']);
break;

case '65':
$objNfe_produtos->setInfadic_nItem($dados_produtos['nItem']);
$objNfe_produtos->setInfadic_pDevol($dados_produtos['pDevol']);
$objNfe_produtos->setInfadic_vIPIDevol($dados_produtos['vIPIDevol']);
break;



case '66':
$objNfe_produtos->setImposto_nItem($dados_produtos['nItem']);
$objNfe_produtos->setImposto_vlrtrib($dados_produtos['vlrtrib']);
break;



case '70':
$objNfe_produtos->setProd_tipo(2);
$objNfe_produtos->setVeic_nItem($dados_produtos['nItem']);
$objNfe_produtos->setVeic_tpOp($dados_produtos['tpOp']);
$objNfe_produtos->setVeic_chassi($dados_produtos['chassi']);
$objNfe_produtos->setVeic_cCor($dados_produtos['cCor']);
$objNfe_produtos->setVeic_xCor($dados_produtos['xCor']);
$objNfe_produtos->setVeic_pot($dados_produtos['pot']);
$objNfe_produtos->setVeic_cilin($dados_produtos['cilin']);
$objNfe_produtos->setVeic_pesoL($dados_produtos['pesoL']);
$objNfe_produtos->setVeic_pesoB($dados_produtos['pesoB']);
$objNfe_produtos->setVeic_nSerie($dados_produtos['nSerie']);
$objNfe_produtos->setVeic_tpComb($dados_produtos['tpComb']);
$objNfe_produtos->setVeic_nMotor($dados_produtos['nMotor']);
$objNfe_produtos->setVeic_cmt($dados_produtos['cmt']);
$objNfe_produtos->setVeic_dist($dados_produtos['dist']);
$objNfe_produtos->setVeic_anoMod($dados_produtos['anoMod']);
$objNfe_produtos->setVeic_anoFab($dados_produtos['anoFab']);
$objNfe_produtos->setVeic_tpPint($dados_produtos['tpPint']);
$objNfe_produtos->setVeic_tpVeic($dados_produtos['tpVeic']);
$objNfe_produtos->setVeic_espVeic($dados_produtos['espVeic']);
$objNfe_produtos->setVeic_VIN($dados_produtos['VIN']);
$objNfe_produtos->setVeic_condVeic($dados_produtos['condVeic']);
$objNfe_produtos->setVeic_cMod($dados_produtos['cMod']);
$objNfe_produtos->setVeic_cCorDENATRAN($dados_produtos['cCorDENATRAN']);
$objNfe_produtos->setVeic_lota($dados_produtos['lota']);
$objNfe_produtos->setVeic_tpRest($dados_produtos['tpRest']);
break;
case '80':
$objNfe_produtos->setProd_tipo(3);
$objNfe_produtos->setMed_nItem($dados_produtos['nItem']);
$objNfe_produtos->setMed_nLote($dados_produtos['nLote']);
$objNfe_produtos->setMed_qLote($dados_produtos['qLote']);
$objNfe_produtos->setMed_dFab($dados_produtos['dFab']);
$objNfe_produtos->setMed_dVal($dados_produtos['dVal']);
$objNfe_produtos->setMed_vPMC($dados_produtos['vPMC']);
break;
case '85':
$objNfe_produtos->setProd_tipo(4);
$objNfe_produtos->setArma_nItem($dados_produtos['nItem']);
$objNfe_produtos->setArma_tpArma($dados_produtos['tpArma']);
$objNfe_produtos->setArma_nSerie($dados_produtos['nSerie']);
$objNfe_produtos->setArma_nCano($dados_produtos['nCano']);
$objNfe_produtos->setArma_descr($dados_produtos['descr']);
break;
case '90':
$objNfe_produtos->setProd_tipo(5);
$objNfe_produtos->setComb_nItem($dados_produtos['nItem']);
$objNfe_produtos->setComb_cProdANP($dados_produtos['cProdANP']);
$objNfe_produtos->setComb_pMixGN($dados_produtos['pMixGN']);
$objNfe_produtos->setComb_codif($dados_produtos['codif']);
$objNfe_produtos->setComb_qTemp($dados_produtos['qTemp']);
$objNfe_produtos->setComb_ufCons($dados_produtos['ufCons']);
$objNfe_produtos->setComb_qBCProd($dados_produtos['qBCProd']);
$objNfe_produtos->setComb_vAliqProd($dados_produtos['vAliqProd']);
$objNfe_produtos->setComb_vCIDE($dados_produtos['vCIDE']);
break;
}

return $objNfe_produtos;
}

function calcular_chave_acesso($aNFref) {
if (empty($aNFref)||!$aNFref['CNPJ']) {
return false;
}

$cUF      = $aNFref['cUF'] 		;
$mod      = $aNFref['mod']		;
$serie    = str_pad($aNFref['serie'],3,0,STR_PAD_LEFT);
$nNF      = str_pad($aNFref['nNF'],9,0,STR_PAD_LEFT);
$aNoMes   = $aNFref['aNoMes'];
$CNPJ 	  = str_pad($aNFref['CNPJ'],14,0,STR_PAD_LEFT);
$tpEmis   = $aNFref['aNoMes'];
$cNF      = $aNFref['cNF'];
$tipo 	  = 1;
$tpEmis = $aNFref['tpEmis'];
$chave = calcular_chave_nfe($cUF,$aNoMes,$CNPJ,$mod,$nNF,$serie,$tpEmis,$cNF,$tipo);
return $chave;


}

function calculor_digito_nfe($aNFref) {
$cUF      = $aNFref['cUF'] 		;
$mod      = $aNFref['mod']		;
$serie    = str_pad($aNFref['serie'],3,0,STR_PAD_LEFT);
$nNF      = str_pad($aNFref['nNF'],9,0,STR_PAD_LEFT);
$aNoMes   = $aNFref['aNoMes'];
$CNPJ 	  = str_pad($aNFref['CNPJ'],14,0,STR_PAD_LEFT);
$tpEmis   = $aNFref['aNoMes'];
$cNF      = $aNFref['cNF'];
$tipo 	  = 2;
$tpEmis   = $aNFref['tpEmis'];
$digito   = calcular_chave_nfe($cUF,$aNoMes,$CNPJ,$mod,$nNF,$serie,$tpEmis,$cNF,$tipo);
return substr($digito,0,1);
}


function salvar_erro_geracao($erro,$objNfe_dados) {

$objNfe_dadosDAO = new Nfe_dados_dao();
if (!$objNfe_dadosDAO->insert($objNfe_dados)) {
return false;
}

$objNfe_erros    = new Nfe_erros();
$objNfe_errosDAO = new Nfe_errosDAO();
$objTab_erros    = new Tab_erros();
$objTab_errosDAO = new Tab_errosDAO();


$objNfe_erros->setData_envio($objNfe_dados->getData_envio());
$objNfe_erros->setIdent_chave($objNfe_dados->getIdent_chave());
$objNfe_erros->setMes_ano(date('mY'));
$objNfe_erros->setSeq_nfe($objNfe_dados->getSeq_nfe());

$seq = $objNfe_errosDAO->countAll();
$seq++;
$objNfe_erros->setSeq($seq);

$seq_erro = $objNfe_errosDAO->count_erros($objNfe_dados);
$seq_erro++;
$objNfe_erros->setSeq_erro($seq_erro);
$objNfe_erros->setTag_erro($erro);

if ($erro == 3) {
$objNfe_erros->setTag_erro(103);
$objTab_erros->setCod_erro(103);
$objTab_erros = $objTab_errosDAO->select($objTab_erros);

$objNfe_erros->setCampo_erro(utf8_encode('refNFeCh'));
$objNfe_erros->setDescr_erro($objTab_erros->getTexto_erro());
}

if ($erro == 1003) {
$objNfe_erros->setTag_erro(104);
$objTab_erros->setCod_erro(104);
$objTab_erros = $objTab_errosDAO->select($objTab_erros);

$objNfe_erros->setCampo_erro(utf8_encode('refNFeCh'));
$objNfe_erros->setDescr_erro($objTab_erros->getTexto_erro());
}

if ($erro == 4) {
$objNfe_erros->setTag_erro(105);
$objTab_erros->setCod_erro(105);
$objTab_erros = $objTab_errosDAO->select($objTab_erros);

$objNfe_erros->setCampo_erro(utf8_encode('refNFeCh'));
$objNfe_erros->setDescr_erro($objTab_erros->getTexto_erro());
}
if ($erro == 5) {
$objNfe_erros->setTag_erro(106);
$objTab_erros->setCod_erro(106);
$objTab_erros = $objTab_errosDAO->select($objTab_erros);

$objNfe_erros->setCampo_erro(utf8_encode('refNFeCh'));
$objNfe_erros->setDescr_erro($objTab_erros->getTexto_erro());
}

if ($erro == 7) {
$objNfe_erros->setTag_erro(108);
$objTab_erros->setCod_erro(108);
$objTab_erros = $objTab_errosDAO->select($objTab_erros);

$objNfe_erros->setCampo_erro(utf8_encode('Emit'));
$objNfe_erros->setDescr_erro($objTab_erros->getTexto_erro());
}
if ($erro == 8) {
$objNfe_erros->setTag_erro(109);
$objTab_erros->setCod_erro(109);
$objTab_erros = $objTab_errosDAO->select($objTab_erros);

$objNfe_erros->setCampo_erro(utf8_encode('EnderEmit'));
$objNfe_erros->setDescr_erro($objTab_erros->getTexto_erro());
}
if ($erro == 9) {
$objNfe_erros->setTag_erro(110);
$objTab_erros->setCod_erro(110);
$objTab_erros = $objTab_errosDAO->select($objTab_erros);

$objNfe_erros->setCampo_erro(utf8_encode('Dest'));
$objNfe_erros->setDescr_erro($objTab_erros->getTexto_erro());
}
if ($erro == 10) {
$objNfe_erros->setTag_erro(111);
$objTab_erros->setCod_erro(111);
$objTab_erros = $objTab_errosDAO->select($objTab_erros);

$objNfe_erros->setCampo_erro(utf8_encode('EnderDest'));
$objNfe_erros->setDescr_erro($objTab_erros->getTexto_erro());
}
if ($erro == 11) {
$objNfe_erros->setTag_erro(112);
$objTab_erros->setCod_erro(112);
$objTab_erros = $objTab_errosDAO->select($objTab_erros);

$objNfe_erros->setCampo_erro(utf8_encode('retirada'));
$objNfe_erros->setDescr_erro($objTab_erros->getTexto_erro());
}
if ($erro == 12) {
$objNfe_erros->setTag_erro(113);
$objTab_erros->setCod_erro(113);
$objTab_erros = $objTab_errosDAO->select($objTab_erros);

$objNfe_erros->setCampo_erro(utf8_encode('entrega'));
$objNfe_erros->setDescr_erro($objTab_erros->getTexto_erro());
}
if ($erro == 13) {
$objNfe_erros->setTag_erro(114);
$objTab_erros->setCod_erro(114);
$objTab_erros = $objTab_errosDAO->select($objTab_erros);

$objNfe_erros->setCampo_erro(utf8_encode('autXML'));
$objNfe_erros->setDescr_erro($objTab_erros->getTexto_erro());
}


if ($erro == 15) {
$objNfe_erros->setTag_erro(115);
$objTab_erros->setCod_erro(115);
$objTab_erros = $objTab_errosDAO->select($objTab_erros);

$objNfe_erros->setCampo_erro(utf8_encode('total'));
$objNfe_erros->setDescr_erro($objTab_erros->getTexto_erro());
}

if ($erro == 16) {
$objNfe_erros->setTag_erro(116);
$objTab_erros->setCod_erro(116);
$objTab_erros = $objTab_errosDAO->select($objTab_erros);

$objNfe_erros->setCampo_erro(utf8_encode('aRetTrib'));
$objNfe_erros->setDescr_erro($objTab_erros->getTexto_erro());
}

if ($erro == 18) {
$objNfe_erros->setTag_erro(117);
$objTab_erros->setCod_erro(117);
$objTab_erros = $objTab_errosDAO->select($objTab_erros);

$objNfe_erros->setCampo_erro(utf8_encode('$transp'));
$objNfe_erros->setDescr_erro($objTab_erros->getTexto_erro());
}

if ($erro == 19) {
$objNfe_erros->setTag_erro(118);
$objTab_erros->setCod_erro(118);
$objTab_erros = $objTab_errosDAO->select($objTab_erros);

$objNfe_erros->setCampo_erro(utf8_encode('$retTransp'));
$objNfe_erros->setDescr_erro($objTab_erros->getTexto_erro());
}



if (!$objNfe_errosDAO->insert($objNfe_erros)) {
return false;
}

return true;
}

function salvar_erro_geracao_produtos($erro,$objNfe_produtos) {
/*
$objNfe_dadosDAO = new Nfe_dados_dao();
if (!$objNfe_dadosDAO->insert($objNfe_dados)) {
return false;
}

$objNfe_erros = new Nfe_erros();
$objNfe_errosDAO = new Nfe_errosDAO();

$objNfe_erros->setData_envio($objNfe_dados->getData_envio());
$objNfe_erros->setIdent_chave($objNfe_dados->getIdent_chave());
$objNfe_erros->setMes_ano(date('mY'));
$objNfe_erros->setSeq_nfe($objNfe_dados->getSeq_nfe());

$seq = $objNfe_errosDAO->countAll();
$seq++;
$objNfe_erros->setSeq($seq);

$seq_erro = $objNfe_errosDAO->count_erros($objNfe_dados);
$seq_erro++;
$objNfe_erros->setSeq_erro($seq_erro);
$objNfe_erros->setTag_erro($erro);

if ($erro == 1) {
$objNfe_erros->setCampo_erro(utf8_encode('Identificador da Nf-e Ident'));
$objNfe_erros->setDescr_erro(utf8_encode('Erro nas Informa��es do Identificador da Nota Fiscal'));
}
if ($erro == 2) {
$objNfe_erros->setCampo_erro(utf8_encode('Identificador da Nf-e NFref'));
$objNfe_erros->setDescr_erro(utf8_encode('Erro nas Informa��es do Identificador da Nota Fiscal'));
}
if ($erro == 3) {
$objNfe_erros->setCampo_erro(utf8_encode('Identificador da Nf-e refNFeCh'));
$objNfe_erros->setDescr_erro(utf8_encode('Erro nas Informa��es do Identificador da NF-e referenciada'));
}
if ($erro == 4) {
$objNfe_erros->setCampo_erro(utf8_encode('Identificador da Nf-e refNFeCh'));
$objNfe_erros->setDescr_erro(utf8_encode('Erro nas Informa��es do Identificador da NF-e referenciada'));
}
if ($erro == 5) {
$objNfe_erros->setCampo_erro(utf8_encode('Identificador da Nf-e Rural'));
$objNfe_erros->setDescr_erro(utf8_encode('Erro nas Informa��es de produtor rural referenciada'));
}
if ($erro == 6) {
$objNfe_erros->setCampo_erro(utf8_encode('Identificador da refCTe'));
$objNfe_erros->setDescr_erro(utf8_encode('Erro nas Informa��es Chave de acesso do CT-e referenciada'));
}
if ($erro == 7) {
$objNfe_erros->setCampo_erro(utf8_encode('Identificador da aEcferef'));
$objNfe_erros->setDescr_erro(utf8_encode('Erro nas Informa��es do Cupom Fiscal referenciado'));
}



if (!$objNfe_errosDAO->insert($objNfe_erros)) {
return false;
}
return true;
}

function invdata($data) {
if (!$data) return;

$data = str_replace('/','', $data);
$dia = substr(str_pad($data, 8,0, STR_PAD_LEFT),0,2);
$mes = substr(str_pad($data, 8,0, STR_PAD_LEFT),2,2);
$ano = substr(str_pad($data, 8,0, STR_PAD_LEFT),4,4);

$data = $ano.'-'.$mes.'-'.$dia;
return $data;
}

function limpa_cnpj($numero) {
if (!$numero) return;

$numero = str_replace('.','', $numero);
$numero = str_replace('-','', $numero);
$numero = str_replace('/','', $numero);
return $numero;
}
*/
?>