<?

function executar_servico_txt($cnpj,$ambiente,$dadosArq,$autorizar) {
	
	$sAmb = ($ambiente == '2') ? 'homologacao' : 'producao';
	$dir = PATH_ARQS.$sAmb.'/entradas/';
	
	echo "<hr>".$dir;
	exit();
	
	/*echo "<pre>XXXX";
	print_r ($chave);
	return false;*/
	
	$qrcode = montar_parametros($cnpj);

	$txt = new ConvertNFePHP();
	$chave = $txt->nfetxt2xml($dadosArq,$qrcode,$ambiente);
	

	$modnfe = substr($chave, 20,2);
	$serie  = substr($chave, 22, 3);
	$nNF    = substr($chave, 25, 9);

	$aConfig = montar_configuracao($cnpj,$ambiente,$modnfe);
	
	
	$nfe2  = new ToolsNFePHP($aConfig);
	
	$arquivo = $dir.$chave.'.xml';
	if (!is_file($arquivo)) return false;
	
	echo "<pre>ccccccccccccccccccc";
	print_r ($aConfig);
	exit();
	

	$arq  = file_get_contents($arquivo);
	if ($xml = $nfe2->signXML($arq, 'infNFe')) {
		file_put_contents($arquivo, $xml);
	} else {
		$objNfe_dados->setStatus_nfe(3);
		if (!$objNfe_dadosDAO->update_status($objNfe_dados)) {
			$erro = monta_erros_geracao(501,$chave);
			return $erro;
		}
		$erro = monta_erros_geracao(580,$chave);
		return $erro;
	}
/*
	$docxml = file_get_contents($arquivo);
	$xsdFile = PATH_ROOT.'webservicos/NfePhp/schemes/PL_008h/nfe_v3.10.xsd';
	$aErro = array();

	if (!$nfe2->validXML($docxml, $xsdFile, $aErro)) {
		$erroT = '';
		foreach ($aErro as $key=>$um_erro) {
			$seq++;
			$erroT .= trim(utf8_decode(str_replace("'",'"',$um_erro))).'<br>';
		}
		$result[] = array(
				'status' => '9',
				'chave' => $chave,
				'resposta' => $erroT);
		return $result;
	}*/


	
	$docxml  = file_get_contents($arquivo);
	$aResp   = array();
	$indSinc = 1;
	$idLote  = 1469;

	$sAmb = ($ambiente == '2') ? 'homologacao' : 'producao';
	$dirApr = PATH_ARQS.'/'.$sAmb.'/enviadas/aprovadas/';
	$dirEnt = PATH_ARQS.'/'.$sAmb.'/entradas/';

	$objCademp    =  new Cademp();
	$objCadempDAO = new CadempDAO();
	$objCademp->setEmpr_cnpj($cnpj);
	$objCademp = $objCadempDAO->select($objCademp);
	
	$tpproc  = $objCademp->getId_leitura();
	$autorizar = 2;

	$objNfe_envio    = new Nfe_envio();
	$objNfe_envioDAO = new Nfe_envioDAO();

	$seq = $objNfe_envioDAO->proximo();
	$seq++;

	$objNfe_envio->setSeq_nfe($seq);
	$objNfe_envio->setCodemp($objCademp->getCodemp());
	$objNfe_envio->setnNf($nNF);
	$objNfe_envio->setSerie($serie);
	$objNfe_envio->setModnfe($modnfe);
	$objNfe_envio->setData_envio(date('Y-m-d'));
	$objNfe_envio->setAnomes(date('Ym'));
	$objNfe_envio->setChave($chave);
	$objNfe_envio->setTipo_emissao($autorizar);
	$objNfe_envio->setStatus_nfe(0);
	
/*	echo "<pre>GGGGG";
	print_r ($aConfig);
	exit();*/
	

	if ($autorizar == 2) {
		if ($resp = $nfe2->autoriza($docxml, $idLote, $aResp,$indSinc)) {
			if ($aResp['bStat']) {
				$nfefile  = $dirEnt.$chave.'.xml';
				$protfile = $dirApr.$chave.'-prot.xml';
				if ($xml = $nfe2->addProt($nfefile, $protfile)) {
					file_put_contents($dirApr.$chave.'-prot.xml', $xml);
				} else {
					$result[] = array(
					'status' => '9',
					'chave' => $chave,
					'resposta' => 'Erro na Montagem de Protocolo de Resposta');
					return $result;
				}

				$retorno = $aResp['tpAmb'].' - '.$aResp['cStat'].' - '.$aResp['xMotivo'];

				$objNfe_envio->setAmbiente($aResp['tpAmb']);
				$objNfe_envio->setVersao($aResp['verAplic']);
				$objNfe_envio->setDhRecbto($aResp['protNFe']['infProt']['dhRecbto']);
				$objNfe_envio->setnProt($aResp['protNFe']['infProt']['nProt']);
				$objNfe_envio->setxMotivo($aResp['protNFe']['infProt']['digVal']);
				$salvar = $objNfe_envioDAO->insert($objNfe_envio);

				if (!enviar_email_emissao($cnpj, $chave, $autorizar, $ambiente,$aConfig,$tpproc,0)) {
					$retorno .= - 'Email nao Enviado ao Destinatario';
				}

				$result[] = array(
				'status' => '1',
				'chave' => $chave,
				'resposta' => $retorno
				);

				return $result;
			} else {
				$result[] = array(
				'status' => '9',
				'chave' => $chave,
				'resposta' => $nfe2->errMsg);
				return $result;
			}
		} else {
			$result[] = array(
			'status' => '9',
			'chave' => $chave,
			'resposta' => $nfe2->errMsg);
			return $result;
		}
	} else {
		$objNfe_envio->setAmbiente($ambiente);
		$objNfe_envio->setVersao($tpproc);

		$salvar = $objNfe_envioDAO->insert($objNfe_envio);

		$retorno = 'Nota Processada - Sem Autoriza��o da Receita !!!';

		$result[] = array(
		'status' => '1',
		'chave' => $chave,
		'resposta' => $retorno);
		return $result;
	}
}

?>