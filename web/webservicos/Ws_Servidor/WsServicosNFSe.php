<?
function executar_servico_nfse($arquivo) {
	$doc = new DOMDocument();
	$doc->formatOutput = FALSE;
	$doc->preserveWhiteSpace = FALSE;
	$doc->loadXML($arquivo, LIBXML_NOBLANKS | LIBXML_NOEMPTYTAG);
	$nroLote   = $doc->getElementsByTagName("NumeroLote")->item(0)->nodeValue;
	if (empty($nroLote)) {
		$erros = 'E154';
		return retorna_erros($nroLote, $erros);
	}
	
	$cnpjEnvio = $doc->getElementsByTagName("Cnpj")->item(0)->nodeValue;
	if (empty($cnpjEnvio)) {
		$erros = 'E154';
		return retorna_erros($nroLote, $erros);
	}
	
	$objMobiliario = new Mobiliario();
	$objMobiliarioDAO = new MobiliarioDAO();
	
	$objMobiliario->setCpfcnpj($cnpjEnvio);
	$existe = $objMobiliarioDAO->verifica_existe($objMobiliario);
	if (empty($existe)) {
		$erros = 'E154';
		return retorna_erros($nroLote, $erros);
	}
	
	$objMobiliario = new Mobiliario();
	$inscMunic = $doc->getElementsByTagName("InscricaoMunicipal")->item(0)->nodeValue;
	$objMobiliario->setCadmob($inscMunic);
	$existe = $objMobiliarioDAO->verifica_existe($objMobiliario);
	if (empty($inscMunic)) {
		$erros = 'E299';
		return retorna_erros($nroLote, $erros);
	}

	$qtdeRps   = $doc->getElementsByTagName("QuantidadeRps")->item(0)->nodeValue;
	if (empty($qtdeRps)) {
		$erros = 'E69';
		return retorna_erros($nroLote, $erros);
	}
	
	if ($qtdeRps>1) {
		$erros = 'E214';
		return retorna_erros($nroLote, $erros);
	}
	
	$sigValue  = $doc->getElementsByTagName("SignatureValue")->item(0)->nodeValue;
	if (empty($sigValue)) {
		$erros = 'E173';
		return retorna_erros($nroLote, $erros);
	}
	
	$x509Cert  = $doc->getElementsByTagName("X509Certificate")->item(0)->nodeValue;
	if (empty($sigValue)) {
		$erros = 'E173';
		return retorna_erros($nroLote, $erros);
	}
	
	$dadosRps = montar_dados_rps($nroLote,$arquivo);
	if (isset($dadosRps['0']['status'])) {
		$objRps = new Nfse_rps_envio();
		$objRpsDAO = new Nfse_rps_envioDAO();
		
		$objRps->setSeqrps('');
		$objRps->setRps_data($dadosRps['dtaEmissao']);
		$objRps->setRps_lote($nroLote);
		$objRps->setRps_cnpj_envio($cnpjEnvio);
		$objRps->setRps_inscricao($inscMunic);
		$objRps->setRps_qtde($qtdeRps);
		$objRps->setRps_nro($dadosRps['numero']);
		$objRps->setRps_serie($dadosRps['serie']);
		$objRps->setRps_xml($xml);
		$objRps->setRps_status(1);
		$objRps->setNfse_nro(0);
		$objRps->setNfse_serie(0);
		$objRps->setNfse_situacao(0);
		$objRps->setRps_situacao(1);
		$objRpsDAO->insert($objRps);
		
		$result[] = array(
				'status' => $dadosRps['0']['status'],
				'chave' => $dadosRps['0']['chave'],
				'resposta' => $dadosRps['0']['resposta']);
		
		return $result;
	}
	
	
	$objLctos    = new Nfse_lanctos_iss();
	$objLctosDAO = new Nfse_lanctos_issDAO();

	$seqnfse = $objLctosDAO->busca_id_nota();
	
	
	$objLctos->setSeq_nfse($seqnfse);
	$objLctos->setCodemp($dadosRps['inscr_prestador']);
	$objLctos->setMes_comp(date('m'));
	$objLctos->setAno_comp(date('Y'));
	$objLctos->setData_emissao($dadosRps['dtaEmissao']);
	
	$seqnota = $objLctosDAO->busca_seq_nota($dadosRps['inscr_prestador']);
	$objLctos->setNr_nota($seqnota);
	$objLctos->setSr_nota('Unica');
	
	$seqcod = $objLctosDAO->busca_seq_verificacao();
	$objLctos->setCod_verificacao($seqcod);
	
	
	$objLctos->setAtividade($dadosRps['codigoTributacao']);
	$objLctos->setTipo_tributacao(1);
	$objLctos->setValor_nota($dadosRps['valorServicos']);
	$objLctos->setRetencao($dadosRps['issRetido']);
	$objLctos->setVlr_retido($dadosRps['valorIssRetido']);
	$objLctos->setValor_liquido($dadosRps['valorLiquidoNfse']);
	
	$objMobiliario = new Mobiliario();
	$objMobiliarioDAO = new MobiliarioDAO();
	$objMobiliario->setCpfcnpj($dadosRps['cpfcnpj_tomador']);
	$existe = $objMobiliarioDAO->verifica_existe($objMobiliario);
	if ($existe) {
		$objMobiliario = $objMobiliarioDAO->select($objMobiliario);
		$tipo_documento = $objMobiliario->getTipo_inscricao();
		$tomador_codigo = 0;
		$tomador_codemp = $objMobiliario->getCodemp();
		$tomador_inscricao = $objMobiliario->getCpfcnpj();
		$tomador_local  = '1';
		$tomador_nome   = $objMobiliario->getRazao_social();
	} else {
		$objContribuinte = new Contribuinte();
		$objContribuinteDAO = new ContribuinteDAO();
		$objContribuinte->setCpfcnpj($dadosRps['cpfcnpj_tomador']);
		$existe = $objContribuinteDAO->verifica_existe($objContribuinte);
		if ($existe) {
			$objContribuinte = $objContribuinteDAO->select($objContribuinte);
			$tipo_documento = $objContribuinte->getTipo_inscricao();
			$tomador_codigo = $objContribuinte->getCodigo();
			$tomador_codemp = 0;
			$tomador_inscricao = $objContribuinte->getCpfcnpj();
			$tomador_local  = '2';
			$tomador_nome   = $objContribuinte->getNome_razao();
				
		}
	}
	
	
	$objLctos->setTomador_tipo($tipo_documento);
	$objLctos->setTomador_id($tipo_documento);
	$objLctos->setTomador_codigo($tomador_codigo);
	$objLctos->setTomador_codemp($tomador_codemp);
	$objLctos->setTomador_inscricao($tomador_inscricao);
	$objLctos->setTomador_local($tomador_local);
	$objLctos->setTomador_nome($tomador_nome);
	
	
	$objLctos->setTomador_logradouro($dadosRps['logradouro_tomador']);
	$objLctos->setTomador_numero($dadosRps['numero_tomador']);
	$objLctos->setTomador_cep($dadosRps['cep_tomador']);
	$objLctos->setTomador_bairro($dadosRps['bairro_tomador']);

	
	$objCidade = new Cidades();
	$objCidadeDAO = new CidadesDAO();
	
	$objCidade->setCod_ibge($dadosRps['codmunic_tomador']);
	$existe = $objCidadeDAO->verifica_existe($objCidade);
	if ($existe) {
		$objCidade = $objCidadeDAO->select($objCidade);
		$tomador_cidade = $objCidade->getDescricao();
	} 
	
	$objLctos->setTomador_cidade($tomador_cidade);
	$objLctos->setTomador_estado($dadosRps['uf_tomador']);
	$objLctos->setTomador_codmunic($dadosRps['codmunic_tomador']);
	$objLctos->setTomador_telefone($dadosRps['contato_telefone']);
	$objLctos->setTomador_email($dadosRps['contato_email']);
	$objLctos->setLocal_prestacao($tomador_local);
	$objLctos->setNfs_aliquota($dadosRps['aliquota']);
	
	$objLctos->setCodobra('');
	$objLctos->setArtobra('');
	
	$objLctos->setSnacional($dadosRps['optante']);
	$objLctos->setRegime($dadosRps['regime']);
	$objLctos->setNatureza($dadosRps['natureza']);
	$objLctos->setIncentivo($dadosRps['incentivo']);
	$objLctos->setData_inclusao(date('Y-m-d'));
	$objLctos->setData_modificacao('');
	$objLctos->setUsuario_id(9999);
	$objLctos->setNro_rps($dadosRps['numero']);
	$objLctos->setSr_rps($dadosRps['serie']);
	$objLctos->setRemote_ip(9999);
	$objLctos->setCod_substituicao(0);
	$objLctos->setSituacao_nfs(0);	
	
	
	$objItem = new Nfse_item_nota();
	$objItemDAO = new Nfse_item_notaDAO();
	$objItem->setSeq_item('');
	$objItem->setSeq_nfse($objLctos->getSeq_nfse());
	$objItem->setCod_verificacao($objLctos->getCod_verificacao());
	$objItem->setIss_retido($dadosRps['issRetido']);
	$objItem->setValor_servico($dadosRps['valorServicos']);
	$objItem->setVlr_pis(0);
	$objItem->setVlr_cofins(0);
	$objItem->setVlr_ir(0);
	$objItem->setVlr_inss(0);
	$objItem->setVlr_csll(0);
	$objItem->setVlr_condicionado(0);
	$objItem->setVlr_incondicionado(0);
	$objItem->setVlr_deducoes($dadosRps['valorDeducoes']);
	$objItem->setVlr_retencoes(0);
	$objItem->setVlr_outras_retencoes($dadosRps['valorDeducoes']);
	$objItem->setVlr_retido($dadosRps['valorIssRetido']);
	$objItem->setVlr_deducoes_permitidas(0);
	$objItem->setVlr_base_calculo($dadosRps['baseCalculo']);
	$objItem->setVlr_aliquota($dadosRps['aliquota']);
	$objItem->setVlr_iss($dadosRps['valorIss']);
	$objItem->setVlr_liquido($dadosRps['valorLiquidoNfse']);

	
	$objItemDescr = new Nfse_item_descritivo();
	$objItemDescrDAO = new Nfse_item_descritivoDAO();
	$objItemDescr->setSeq_item('');
	$objItemDescr->setSeq_nfse($objLctos->getSeq_nfse());
	$objItemDescr->setdiscriminacao($dadosRps['discriminacao']);
	if (!$objLctosDAO->insert($objLctos)) {
		$retorno = 'Erro interno de Processamento da Nota Fiscal !';
		$result[] = array(
				'status' => '1',
				'chave' => $nroLote,
				'resposta' => $retorno);
		
		return $result;
		
	}
	
	if (!$objItemDAO->insert($objItem)) {
		$retorno = 'Erro interno de Processamento da Nota Fiscal !';
		$result[] = array(
				'status' => '2',
				'chave' => $nroLote,
				'resposta' => $retorno);
		
		return $result;
	}
	
	if (!$objItemDescrDAO->insert($objItemDescr)) {
		$retorno = 'Erro interno de Processamento da Nota Fiscal !';
		$result[] = array(
				'status' => '3',
				'chave' => $nroLote,
				'resposta' => $retorno);
		
		return $result;
	}
				
	$xml = simplexml_load_string($arquivo, 'SimpleXMLElement',LIBXML_NOCDATA);
	$objRps = new Nfse_rps_envio();
	$objRpsDAO = new Nfse_rps_envioDAO();
	$objRps->setSeqrps('');              
	$objRps->setRps_data($dadosRps['dtaEmissao']);            
	$objRps->setRps_lote($nroLote);            
	$objRps->setRps_cnpj_envio($cnpjEnvio);      
	$objRps->setRps_inscricao($inscMunic);       
	$objRps->setRps_qtde($qtdeRps);            
	$objRps->setRps_nro($dadosRps['numero']);             
	$objRps->setRps_serie($dadosRps['serie']);           
	$objRps->setRps_xml($xml);             
	$objRps->setRps_status(0);          
	$objRps->setNfse_nro($objLctos->getNr_nota());            
	$objRps->setNfse_serie($objLctos->getSr_nota());          
	$objRps->setNfse_situacao(0);       
	$objRps->setRps_situacao(0);        
	if (!$objRpsDAO->insert($objRps)) {
		$retorno = 'Erro interno de Processamento da Nota Fiscal !';
		$result[] = array(
				'status' => '3',
				'chave' => $nroLote,
				'resposta' => $retorno);
		
		return $result;
	}
	
	$objNotafiscal = new Notafiscal();
	$objNotafiscalDAO = new NotafiscalDAO();
	$objNotafiscal->setId('');
	$objNotafiscal->setCodemp($objLctos->getCodemp());
	$objNotafiscal->setId_nota($objLctos->getSeq_nfse());
	$objNotafiscal->setVerificacao($objLctos->getCod_verificacao());
	$objNotafiscal->setAno_comp($objLctos->getAno_comp());
	$objNotafiscal->setMes_comp($objLctos->getMes_comp());
	$objNotafiscal->setData_emissao($objLctos->getData_emissao());
	$objNotafiscal->setNr_nota($objLctos->getNr_nota());
	$objNotafiscal->setSr_nota($objLctos->getSr_nota());
	$objNotafiscal->setNr_rps($objRps->setRps_nro());
	$objNotafiscal->setSr_rps($objRps->setRps_serie());
	$objNotafiscal->setAtividade($objLctos->getAtividade());
	$objNotafiscal->setValor_nota($objLctos->getValor_nota());
	$objNotafiscal->setRetencao($objLctos->getRetencao());
	$objNotafiscal->setVlr_iss($objItem->getVlr_iss());
	$objNotafiscal->setTomador_tipo($objLctos->getTomador_tipo());
	$objNotafiscal->setTomador_inscricao($objLctos->getTomador_inscricao());
	$objNotafiscal->setTomador_nome($objLctos->getTomador_nome());
	$objNotafiscal->setLocal_prestacao($objLctos->getTomador_local());
	$objNotafiscal->setSnacional($objLctos->getSnacional());
	$objNotafiscal->setTipo_emissao(2);
	$objNotafiscal->setSituacao(0);
	if (!$objNotafiscalDAO->insert($objNotafiscal)) {
		$retorno = 'Erro interno de Processamento da Nota Fiscal !';
		$result[] = array(
				'status' => '3',
				'chave' => $nroLote,
				'resposta' => $retorno);
	
		return $result;
	}
	
	$retorno = 'Lote Processado com Sucesso !';
	$result[] = array(
			'status' => '0',
			'chave' => $nroLote,
			'resposta' => $retorno);
	
	return $result;
	
}
?>