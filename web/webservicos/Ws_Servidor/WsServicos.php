<?

function executar_servico(
$ident         ,
$aNFref        ,
$arefNFe       ,
$aRural        ,
$aCTeref       ,
$emit          ,
$enderEmit     ,
$dest          ,
$enderDest     ,
$retirada      ,
$entrega       ,
$aAutXML       ,
$aProd         ,
$aICMS         ,
$aIPI          ,
$aII           ,
$aPIS          ,
$aCOFINS       ,
$aISSQN        ,
$aDI           ,
$aImposto      ,
$aNVE          ,
$aInfAdProd    ,
$aImpDev       ,
$aExpItem      ,
$total         ,
$aTransporte   ,
$aCobr         ,
$aPag          ,
$aInfAdicional ,
$AComExterior  ,
$compra        ,
$aCana
) {

	$nfe 		     = new MakeNFe();

	$chave        = $ident['chave'];
	$versao       = $ident['versao'];
	$resp = $nfe->taginfNFe($chave,$versao);

	$cnpj_empresa = $ident['cnpj_empresa'];
	$anomes       = $ident['anomes'];
	$autorizar    = $ident['autorizar'];
	$tpproc 	  = $ident['tpproc'];

	// Identificação da Nota Fiscal - Dados de Geração da Nota Fiscal
	$cdv      = $aNFref['cDV'] 		;
	$cuf      = $aNFref['cUF'] 		;
	$cnf      = $aNFref['cNF'] 		;
	$natop    = $aNFref['natOp'] 	;
	$indpag   = $aNFref['indPag']	;
	$mod      = $aNFref['mod']		;
	$serie    = '1' 	;
	$nnf      = $aNFref['nNF']		;
	$dhemi    = $aNFref['dhEmi'];
	$dhsaient = ($aNFref['dhSaiEnt']?$aNFref['dhSaiEnt']:'');
	$tpnf     = $aNFref['tpNF'] 		;
	$iddest   = $aNFref['idDest']	;
	$cmunfg   = $aNFref['cMunFG']	;
	$tpimp    = $aNFref['tpImp'] 	;
	$tpemis   = $aNFref['tpEmis']	;
	$tpamb    = $aNFref['tpAmb']  	;
	$finnfe   = $aNFref['finNFe'] 	;
	$indfinal = $aNFref['indFinal']	;
	$indpres  = $aNFref['indPres'] 	;
	$procemi  = $aNFref['procEmi'] 	;
	$verproc  = $aNFref['verProc'] 	;
	$dhcont   = $aNFref['dhCont']	;
	$xjust    = $aNFref['xJust'] 	;
	$resp = $nfe->tagide($cuf, $cnf, $natop, $indpag, $mod, $serie, $nnf, $dhemi, $dhsaient, $tpnf, $iddest, $cmunfg, $tpimp, $tpemis, $cdv, $tpamb, $finnfe, $indfinal, $indpres, $procemi, $verproc, $dhcont, $xjust);

	if (!empty($arefNFe['refNFeCh'])) {
		$refNFeCh = $areNfe['refNFeCh'];
		$cUF      = $areNfe['cUF']     ;
		$AAMM     = $areNfe['AAMM']    ;
		$CNPJ     = $areNfe['CNPJ']    ;
		$mod      = $areNfe['mod']     ;
		$serie    = $areNfe['serie']   ;
		$nNF      = $areNfe['nNF']     ;
		$resp = $nfe->tagrefNFe($arefNFe['refNFeCh']) ;
		if (!empty($arefNFe['cUF'])) {
			$cuf   = $arefNFe['cUF']  ;
			$aamm  = $arefNFe['AAMM'] ;
			$cnpj  = $arefNFe['CNPJ'] ;
			$mod   = $arefNFe['mod']  ;
			$serie = $arefNFe['serie'];
			$nnf   = $arefNFe['nNF']  ;
			$resp = $nfe->tagrefNF($cuf,$aamm,$cnpj,$mod,$serie,$nnf) ;
		}
	}

	if (!empty($aRural['cUF'])) {
		$cuf   =  $aRural['cUF']  ;
		$aamm  =  $aRural['AAMM']     ;
		$cnpj  =  $aRural['CNPJ']     ;
		$cpf   =  $aRural['CPF']  ;
		$ie    =  $aRural['IE']   ;
		$mod   =  $aRural['mod']  ;
		$serie =  $aRural['serie'] ;
		$nnf   =  $aRural['nNF']      ;
		$resp = $nfe->tagrefNFP($cuf, $aamm, $cnpj, $cpf, $ie, $mod, $serie, $nnf);
	}

	if (!empty($aCTeref['refCTe'])) {
		$resp = $nfe->tagrefCTe($aCTeref['refCTe']);
		if (!empty($aCTeref['mod'])) {
			$mod = $aCTeref['mod'];
			$necf = $aCTeref['nECF'];
			$ncoo = $aCTeref['nCOO'];
			$resp = $nfe->tagrefECF($mod, $necf, $ncoo);
		}
	}

	$cnpj     =    $emit['CNPJ']    ;
	$xnome    =    $emit['xNome']   ;
	$xfant    =    $emit['xFant']   ;
	$ie       =    $emit['IE']      ;
	$iest     =    trim($emit['IEST'])    ;
	$im       =    trim($emit['IM'])      ;
	$cnae     =    trim($emit['CNAE'])    ;
	$crt      =    trim($emit['CRT'])     ;
	$resp = $nfe->tagemit($cnpj, $cpf, $xnome, $xfant, $ie, $iest, $im, $cnae, $crt);

	$xlgr     =    trim($enderEmit['xLgr'])    ;
	$nro      =    trim($enderEmit['nro'])     ;
	$xcpl     =    trim($enderEmit['xCpl'])    ;
	$xbairro  =    trim($enderEmit['xBairro']) ;
	$cmun     =    trim($enderEmit['cMun'])    ;
	$xmun     =    trim($enderEmit['xMun'])    ;
	$uf       =    trim($enderEmit['UF'])      ;
	$cep      =    trim($enderEmit['CEP'])     ;
	$cpais    =    trim($enderEmit['cPais'])   ;
	$xpais    =    trim($enderEmit['xPais'])   ;
	$fone     =    trim($enderEmit['fone'])    ;
	$resp = $nfe->tagenderEmit($xlgr, $nro, $xcpl, $xbairro, $cmun, $xmun, $uf, $cep, $cpais, $xpais, $fone);

/*	if ($mod == '65') {
		if ($dest['CNPJ']||$dest['CPF']) {
			$cnpj           =    $dest['CNPJ']    		;
			$cpf            =    $dest['CPF']  			;
			$idestrangeiro  =    trim($dest['idEstrangeiro']) ;
			$xnome          =    trim($dest['xNome'])    		;
			$indiedest      =    trim($dest['indIEDest'])    	;
			$ie             =    trim($dest['IE'])   			;
			$isuf           =    trim($dest['ISUF']) 			;
			$im             =    trim($dest['IM'])   			;
			$email          =    $dest['email']    		;
			$resp = $nfe->tagdest($cnpj, $cpf, $idestrangeiro, $xnome, $indiedest, $ie, $isuf, $im, $email);
		}
	} else {
	*/	$cnpj           =    $dest['CNPJ']    		;
		$cpf            =    $dest['CPF']  			;
		$idestrangeiro  =    trim($dest['idEstrangeiro']) ;
		$xnome          =    trim($dest['xNome'])    		;
		$indiedest      =    '2'    	;
		$ie             =    trim('');
		$isuf           =    trim($dest['ISUF']) 			;
		$im             =    trim($dest['IM'])   			;
		$email          =    trim($dest['email'])    		;
		$resp = $nfe->tagdest($cnpj, $cpf, $idestrangeiro, $xnome, $indiedest, $ie, $isuf, $im, $email);

		$xlgr           =    trim($enderDest['xLgr']) 			;
		$nro            =    trim($enderDest['nro'])  			;
		$xcpl           =    trim($enderDest['xCpl']) 			;
		$xbairro        =    trim($enderDest['xBairro'])  		;
		$cmun           =    trim($enderDest['cMun']) 			;
		$xmun           =    trim($enderDest['xMun']) 			;
		$uf             =    trim($enderDest['UF'])   			;
		$cep            =    trim($enderDest['CEP'])  			;
		$cpais          =    trim($enderDest['cPais'])    		;
		$xpais          =    trim($enderDest['xPais'])    		;
		$fone           =    trim($enderDest['fone']) 			;
		$resp = $nfe->tagenderDest($xlgr, $nro, $xcpl, $xbairro, $cmun, $xmun, $uf, $cep, $cpais, $xpais, $fone);
	//}


	if ($retirada['CNPJ']||$retirada['CPF']) {
		$cnpj      =    $retirada['CNPJ'] 		;
		$cpf       =    '';//$retirada['CPF'] 		;
		$xlgr      =    $retirada['xLgr']		;
		$nro       =    $retirada['nro'] 		;
		$xcpl      =    $retirada['xCpl']		;
		$xbairro   =    $retirada['xBairro']	;
		$cmun      =    $retirada['cMun']		;
		$xmun      =    $retirada['xMun']		;
		$uf        =    $retirada['UF'] 		;
		$resp = $nfe->tagretirada($cnpj, $cpf, $xlgr, $nro, $xcpl, $xbairro, $cmun, $xmun, $uf);
	}

	if ($entrega['CNPJ']||$entrega['CPF']) {
		$cnpj    =    $entrega['CNPJ'] 	 ;
		$cpf     =    $entrega['CPF'] 	 ;
		$xlgr    =    $entrega['xLgr'] 	 ;
		$nro     =    $entrega['nro'] 	 ;
		$xcpl    =    $entrega['xCpl'] 	 ;
		$xbairro =    $entrega['xBairro'];
		$cmun    =    $entrega['cMun'] 	 ;
		$xmun    =    $entrega['xMun'] 	 ;
		$uf      =    $entrega['UF'] 	 ;
		$resp = $nfe->tagentrega($cnpj, $cpf, $xlgr, $nro, $xcpl, $xbairro, $cmun, $xmun, $uf);
	}

	if (!empty($aAutXML)) {
		foreach ($aAutXML as $um_auto) {
			$cpf  = '';
			$cnpj = '';
			if (strlen($um_auto['documento']) == 14) {
				$cnpj = $um_auto['documento'];
			} else {
				$cpf = $um_auto['documento'];
			}
			$resp = $nfe->tagautXML($cnpj,$cpf);
		}
	}

	if (!empty($aProd)) {
		if (!empty($aProd['aProd'])) {

			$arrProd = $aProd['aProd'];

			foreach ($arrProd as $key=>$prod) {
				$nItem = $prod['nItem'];
				$cProd = $prod['cProd'];
				$cEAN = $prod['cEAN'];
				$xProd = $prod['xProd'];
				$NCM = $prod['NCM'];
				$NVE = $prod['NVE'];
				$EXTIPI = $prod['EXTIPI'];
				$CFOP = $prod['CFOP'];
				$uCom = $prod['uCom'];
				$qCom = $prod['qCom'];
				$vUnCom = $prod['vUnCom'];
				$vProd = $prod['vProd'];
				$cEANTrib = $prod['cEANTrib'];
				$uTrib = $prod['uTrib'];
				$qTrib = $prod['qTrib'];
				$vUnTrib = $prod['vUnTrib'];
				$vFrete = $prod['vFrete'];
				$vSeg = $prod['vSeg'];
				$vDesc = ($prod['vDesc']?$prod['vDesc']:'');
				$vOutro = $prod['vOutro'];
				$indTot = $prod['indTot'];
				$xPed = $prod['xPed'];
				$nItemPed = $prod['nItemPed'];
				$nFCI = $prod['nFCI'];
				$resp = $nfe->tagprod($nItem, $cProd, $cEAN, $xProd, $NCM, $NVE, $EXTIPI, $CFOP, $uCom, $qCom, $vUnCom, $vProd, $cEANTrib, $uTrib, $qTrib, $vUnTrib, $vFrete, $vSeg, $vDesc, $vOutro, $indTot, $xPed, $nItemPed, $nFCI);
			}
		}

		$arrProd = $aProd['aVEICPROD'];
		if (!empty($arrProd)) {
			foreach ($arrProd as $key=>$prod) {
				$nItem          = $prod['nItem'];
				$tpOp           = $prod['tpOp'];
				$chassi         = $prod['chassi'];
				$cCor           = $prod['cCor'];
				$xCor           = $prod['xCor'];
				$pot            = $prod['pot'];
				$cilin          = $prod['cilin'];
				$pesoL          = $prod['pesoL'];
				$pesoB          = $prod['pesoB'];
				$nSerie         = $prod['nSerie'];
				$tpComb         = $prod['tpComb'];
				$nMotor         = $prod['nMotor'];
				$cmt            = $prod['cmt'];
				$dist           = $prod['dist'];
				$anoMod         = $prod['anoMod'];
				$anoFab         = $prod['anoFab'];
				$tpPint         = $prod['tpPint'];
				$tpVeic         = $prod['tpVeic'];
				$espVeic        = $prod['espVeic'];
				$VIN            = $prod['VIN'];
				$condVeic       = $prod['condVeic'];
				$cMod           = $prod['cMod'];
				$cCorDENATRAN   = $prod['cCorDENATRAN'];
				$lota           = $prod['lota'];
				$tpRest         = $prod['tpRest'];
				$v = 70;
				$resp = $nfe->tagveicProd($nItem,$tpOp,$chassi,$cCor,$xCor,$pot,$cilin,$pesoL,$pesoB,$nSerie,$tpComb,$nMotor,$cmt,$dist,$anoMod,$anoFab,$tpPint,$tpVeic,$espVeic,$VIN,$condVeic,$cMod,$cCorDENATRAN,$lota,$tpRest);
			}
		}

		$arrProd = $aProd['aMED'];
		if (!empty($arrProd)) {
			foreach ($arrProd as $key=>$prod) {
				$nItem = $prod['nItem'];
				$nLote = $prod['nLote'];
				$qLote = $prod['qLote'];
				$dFab  = $prod['dFab'];
				$dVal  = $prod['dVal'];
				$vPMC  = $prod['vPMC'];
				$v = 80;
				$objNfe_produtos = monta_objeto_dados_produtos($v, $prod, $objNfe_produtos);
				$resp = $nfe->tagmed($nItem,$nLote,$qLote,$dFab,$dVal,$vPMC);
			}
		}

		$arrProd = $aProd['aARMA'];
		if (!empty($arrProd)) {
			foreach ($arrProd as $key=>$prod) {
				$nItem  = $prod['nItem '];
				$tpArma = $prod['tpArma'];
				$nSerie = $prod['nSerie'];
				$nCano  = $prod['nCano'];
				$descr  = $prod['descr'];
				$v = 85;
				$objNfe_produtos = monta_objeto_dados_produtos($v, $prod, $objNfe_produtos);
				$resp = $nfe->tagarma($nItem,$tpArma,$nSerie,$nCano,$descr);
			}
		}
		$arrProd = $aProd['aCOMB'];
		if (!empty($arrProd)) {
			foreach ($arrProd as $key=>$prod) {
				$nItem     = $prod['nItem'];
				$cProdANP  = $prod['cProdANP'];
				$pMixGN    = $prod['pMixGN'];
				$codif     = $prod['codif'];
				$qTemp     = $prod['qTemp'];
				$ufCons    = $prod['ufCons'];
				$qBCProd   = $prod['qBCProd'];
				$vAliqProd = $prod['vAliqProd'];
				$vCIDE     = $prod['vCIDE'];
				$resp = $nfe->tagcomb($nItem,$cProdANP,$pMixGN,$codif,$qTemp,$ufCons,$qBCProd,$vAliqProd,$vCIDE);
			}
		}

		if (isset($aNVE)) {
			$NVE = $aNVE['aNVE'];
			if (!empty($NVE)) {
				foreach ($NVE as $nve_Item) {
					if (!$nve_Item['nItem']) continue;

					$nItem = $nve_Item['nItem'];
					$texto = $nve_Item['texto'];
					$resp = $nfe->tagNVE($nItem, $texto);
				}
			}
		}

		if (isset($aDI)) {
			$DI = $aDI['aDI'];
			if (!empty($DI)) {
				foreach ($DI as $um_adi) {
					if (!$um_adi['nItem']) continue;
					$nItem          = $um_adi['nItem']       ;
					$nDI            = $um_adi['nDI']         ;
					$dDI            = $um_adi['dDI']         ;
					$xLocDesemb     = $um_adi['xLocDesemb']  ;
					$UFDesemb       = $um_adi['UFDesemb']    ;
					$dDesemb        = $um_adi['dDesemb']     ;
					$tpViaTransp    = $um_adi['tpViaTransp'] ;
					$vAFRMM         = $um_adi['vAFRMM']      ;
					$tpIntermedi    = $um_adi['tpIntermedio'];
					$CNPJ           = $um_adi['CNPJ']        ;
					$UFTerceiro     = $um_adi['UFTerceiro']  ;
					$cExportador    = $um_adi['cExportador'] ;
					$resp = $nfe->tagDI($nItem, $nDI, $dDI, $xLocDesemb, $UFDesemb, $dDesemb, $tpViaTransp, $vAFRMM, $tpIntermedio, $CNPJ, $UFTerceiro, $cExportador);
				}
			}
			$aDI = $aDI['aAdi'];
			if (!empty($aDI)) {
				foreach ($aDI as $um_aadi) {
					if (!$um_aadi['nItem']) continue;
					$nItem        =  $um_aadi['nItem']        ;
					$nDI          =  $um_aadi['nDI']          ;
					$nAdicao      =  $um_aadi['nAdicao']      ;
					$nSeqAdicC    =  $um_aadi['nSeqAdicC']    ;
					$cFabricante  =  $um_aadi['cFabricante']  ;
					$vDescDI      =  $um_aadi['vDescDI']      ;
					$nDraw        =  $um_aadi['nDraw']        ;
					$resp = $nfe->tagadi($nItem, $nDI, $nAdicao, $nSeqAdicC, $cFabricante, $vDescDI, $nDraw);
				}
			}
		}

		if (isset($aImposto)) {
			$imposto = $aImposto['aImposto'];
			foreach ($imposto as $um_imposto) {

				$nItem   = $um_imposto['nItem'];
				$vlrtrib = $um_imposto['vlrtrib'];
				$resp = $nfe->tagimposto($nItem, $vlrtrib);
			}
		}

		if (isset($aInfAdProd)) {
			$infAdic = $aInfAdProd['infAdic'];
			if (!empty($infAdic)) {
				foreach ($infAdic as $infAdic_Item) {
					if (!$infAdic_Item['nItem']) continue;
					$nItem     = $infAdic_Item['nItem']       ;
					$texto     = $infAdic_Item['inform']         ;
					$v = 61;
					$objNfe_produtos = monta_objeto_dados_produtos($v, $infAdic_Item, $objNfe_produtos);
					$resp = $nfe->taginfAdProd($nItem, $texto);
				}
			}
		}
		if (isset($aImpDev)) {
			$impdev = $aImpDev['aImpostoDevol'];
			if (!empty($impdev)) {
				foreach ($impdev as $impdev_item) {
					if (!$impdev['nItem']) continue;
					$nItem     = $impdev['nItem'];
					$pDevol    = $impdev['pDevol'];
					$vIPIDevol = $impdev['vIPIDevol'];
					$resp = $nfe->tagimpostoDevol($nItem, $pDevol, $vIPIDevol)		;
				}
			}
		}
		if (isset($aExpItem)) {
			$aDetExport = $aExpItem['aDetExport'];
			if (!empty($aDetExport)) {
				foreach ($aDetExport as $detExport) {
					if (!$detExport['nItem']) continue;
					$nItem      = $detExport['nItem'];
					$nDraw      = $detExport['nDraw'];
					$exportInd  = $detExport['exportInd'];
					$nRE        = $detExport['nRE'];
					$chNFe      = $detExport['chNFe'];
					$qExport    = $detExport['qExport'];
					$resp = $nfe->tagdetExport($nItem, $nDraw, $exportInd, $nRE, $chNFe, $qExport);
				}
			}
		}
	}


	if (isset($aICMS)) {
		if (isset($aICMS['aICMS'])) {

			foreach ($aICMS['aICMS'] as $icms_item) {
				if (!$icms_item['nItem']) continue;
				$nItem          = ($icms_item['nItem']?$icms_item['nItem']:'0');
				$orig           = ($icms_item['orig'] ?$icms_item['orig'] :'0');
				$cst            = ($icms_item['CST']  ?$icms_item['CST']  :'0');
				$modBC          = ($icms_item['modBC']?$icms_item['modBC']:'0');
				$pRedBC         = ($icms_item['pRedBC']?$icms_item['pRedBC']:'0');
				$vBC            = ($icms_item['vBC']   ?$icms_item['vBC']   :'0');
				$pICMS          = ($icms_item['pICMS'] ?$icms_item['pICMS'] :'0');
				$vICMS          = ($icms_item['vICMS'] ?$icms_item['vICMS'] :'0');
				$vICMSDeson     = trim($icms_item['vICMSDeson']);
				$motDesICMS     = trim($icms_item['motDesICMS']);
				$modBCST        = trim($icms_item['modBCST']   );
				$pMVAST         = trim($icms_item['pMVAST']    );
				$pRedBCST       = trim($icms_item['pRedBCST']  );
				$vBCST          = trim($icms_item['vBCST']     );
				$pICMSST        = trim($icms_item['pICMSST']   );
				$vICMSST        = trim($icms_item['vICMSST']   );
				$pDif           = trim($icms_item['pDif']      );
				$vICMSDif       = trim($icms_item['vICMSDif']  );
				$vICMSOp        = trim($icms_item['vICMSOp']   );
				$vBCSTRet       = trim($icms_item['vBCSTRet']  );
				$vICMSSTRet     = trim($icms_item['vICMSSTRet']);

				$resp = $nfe->tagICMS($nItem, $orig, $cst, $modBC, $pRedBC, $vBC, $pICMS, $vICMS, $vICMSDeson, $motDesICMS, $modBCST, $pMVAST, $pRedBCST, $vBCST, $pICMSST, $vICMSST, $pDif, $vICMSDif, $vICMSOp, $vBCSTRet, $vICMSSTRet);
			}
		}

		$ICMS = $aICMS['ICMSPart'];
		if (!empty($ICMS)) {
			foreach ($ICMS as $icms) {


			}
		}

		$ICMS = $aICMS['aICMSST'];
		if (!empty($ICMS)) {
			foreach ($ICMS as $icms) {

			}
		}

		$ICMS = $aICMS['ICMSSN'];
		if (!empty($ICMS)) {
			foreach ($ICMS as $icms_item) {
				if (!$icms_item['nItem']) continue;

				$nItem           = ($icms_item['nItem']);
				$orig            = ($icms_item['orig']);
				$csosn           = ($icms_item['csosn']);
				$modBC           = ($icms_item['modBC']);
				$vBC             = ($icms_item['vBC']);
				$pRedBC          = ($icms_item['pRedBC']);
				$pICMS           = ($icms_item['pICMS']);
				$vICMS           = ($icms_item['vICMS']);
				$pCredSN         = ($icms_item['pCredSN']);
				$vCredICMSSN     = ($icms_item['vCredICMSSN']);
				$modBCST         = ($icms_item['modBCST']);
				$pMVAST          = ($icms_item['pMVAST']);
				$pRedBCST        = ($icms_item['pRedBCST']);
				$vBCST           = ($icms_item['vBCST']);
				$pICMSST         = ($icms_item['pICMSST']);
				$vICMSST         = ($icms_item['vICMSST']);
				$vBCSTRet        = ($icms_item['vBCSTRet']);
				$vICMSSTRet      = ($icms_item['vICMSSTRet']);
				$resp = $nfe->tagICMSSN($nItem,$orig,$csosn,$modBC,$vBC,$pRedBC,$pICMS,$vICMS,$pCredSN,$vCredICMSSN,$modBCST,$pMVAST,$pRedBCST,$vBCST,$pICMSST,$vICMSST,$vBCSTRet,$vICMSSTRet);
			}
		}
	}

	if (isset($aIPI)) {
		$IPI = $aIPI['IPI'];
		if (!empty($IPI)) {
			foreach ($IPI as $ipi) {
				if (!$ipi['nItem']) continue;
				$nitem    =       $ipi['nItem']    ;
				$cst      =       $ipi['cst']      ;
				$clenq    =       $ipi['clEnq']    ;
				$cnpjprod =       $ipi['cnpjProd'] ;
				$cselo    =       $ipi['cSelo']    ;
				$qselo    =       $ipi['qSelo']    ;
				$cenq     =       $ipi['cEnq']     ;
				$vbc      =       $ipi['vBC']      ;
				$pipi     =       $ipi['pIPI']     ;
				$qunid    =       $ipi['qUnid']    ;
				$vunid    =       $ipi['vUnid']    ;
				$vipi     =       $ipi['vIPI']     ;
				$resp = $nfe->tagIPI($nitem, $cst, $clenq, $cnpjprod, $cselo, $qselo, $cenq, $vbc, $pipi, $qunid, $vunid, $vipi);
			}
		}

		$IPI = $aIPI['IPINT'];
		if (!empty($IPI)) {
			foreach ($IPI as $ipi) {
				if (!$ipi['nItem']) continue;
				$nitem    =       $ipi['nItem']    ;
				$cst      =       $ipi['cst']      ;
				$resp = $nfe->tagIPI($nitem, $cst);
			}
		}
	}

	if (isset($aII)) {
		$II = $aII['aII'];
		if (!empty($II)) {
			foreach ($II as $II_item) {
				if (!$II_item['nItem']) continue;
				$nItem = '';
				$vBC = '';
				$vDespAdu = '';
				$vII = '';
				$vIOF = '';
				$resp = $nfe->tagII($nItem, $vBC, $vDespAdu, $vII, $vIOF);
			}
		}
	}

	if (isset($aPIS)) {
		$PIS = $aPIS['aPISAliq'];
		if (count($PIS)) {
			foreach ($PIS as $pis) {
				if (!$pis['nItem']) continue;
				$nItem     = $pis['nItem']      ;
				$cst       = $pis['cst']        ;
				$vBC       = $pis['vBC']        ;
				$pPIS      = $pis['pPIS']       ;
				$vPIS      = $pis['vPIS']       ;
				$qBCProd   = $pis['qBCProd']    ;
				$vAliqProd = '1';
				$resp = $nfe->tagPIS($nItem, $cst, $vBC, $pPIS, $vPIS, $qBCProd, $vAliqProd);
			}
		}


		$PIS = $aPIS['aPISQTDE'];
		if (!empty($PIS)) {
			foreach ($PIS as $pis) {
				if (!$pis['nItem']) continue;
				$nItem     = $pis['nItem']      ;
				$cst       = $pis['cst']        ;
				$vBC       = $pis['vBC']        ;
				$pPIS      = $pis['pPIS']       ;
				$vPIS      = $pis['vPIS']       ;
				$qBCProd   = $pis['qBCProd']    ;
				$vAliqProd = '1';
				$resp = $nfe->tagPIS($nItem, $cst, $vBC, $pPIS, $vPIS, $qBCProd, $vAliqProd);
			}
		}

		$PIS = $aPIS['aPISNT'];
		if (!empty($PIS)) {
			foreach ($PIS as $pis) {
				if (!$pis['nItem']) continue;
				$nItem     = $pis['nItem']      ;
				$cst       = $pis['cst']        ;
				$resp = $nfe->tagPIS($nItem, $cst, $vBC, $pPIS, $vPIS, $qBCProd, $vAliqProd);
			}
		}

		$PIS = $aPIS['aPISOUTR'];
		if (!empty($PIS)) {
			foreach ($PIS as $pis) {
				if (!$pis['nItem']) continue;
				$nItem     = $pis['nItem']      ;
				$cst       = $pis['cst']        ;
				$vBC       = $pis['vBC']        ;
				$pPIS      = $pis['pPIS']       ;
				$vPIS      = $pis['vPIS']       ;
				$qBCProd   = $pis['qBCProd']    ;
				$vAliqProd = $pis['vAliqProd']    ;
				$resp = $nfe->tagPIS($nItem, $cst, $vBC, $pPIS, $vPIS, $qBCProd, $vAliqProd);
			}
		}


		$PIS = $aPIS['aPISST'];
		if (!empty($PIS)) {
			foreach ($PIS as $pis) {
				if (!$pisst['nItem']) continue;
				$nItem     = $pisst['nItem']      ;
				$vBC       = $pisst['vBC']        ;
				$pPIS      = $pisst['pPIS']       ;
				$qBCProd   = $pisst['qBCProd']    ;
				$vAliqProd = '';
				$vPIS      = $pisst['vPIS']       ;
				$resp = $nfe->tagPISST($nItem, $vBC, $pPIS, $qBCProd, $vAliqProd,$vPIS);
			}
		}
	}


	if (isset($aCOFINS)) {
		$COFINS = $aCOFINS['aCOFINSAliq'];
		if (!empty($COFINS)) {
			foreach ($COFINS as $cofins) {
				if (!$cofins['nItem']) continue;

				$nItem     = $cofins['nItem']       ;
				$cst       = $cofins['cst']         ;
				$vBC       = $cofins['vBC']         ;
				$pCOFINS   = $cofins['pCOFINS']     ;
				$vCOFINS   = $cofins['vCOFINS']     ;
				$qBCProd   = '';
				$vAliqProd = '';
				$resp = $nfe->tagCOFINS($nItem, $cst, $vBC, $pCOFINS, $vCOFINS, $qBCProd, $vAliqProd);
			}
		}

		$COFINS = $aCOFINS['aCOFINSQTDE'];
		if (!empty($COFINS)) {
			foreach ($COFINS as $cofins) {
				if (!$cofins['nItem']) continue;
				$nItem     = $cofins['nItem']       ;
				$cst       = $cofins['cst']         ;
				$qBCProd   = $cofins['qBCProd']     ;
				$vAliqProd = $cofins['vAliqProd']   ;
				$vCOFINS   = $cofins['vCOFINS']     ;
				$vBC       = '';
				$pCOFINS   = '';
				$resp = $nfe->tagCOFINS($nItem, $cst, $vBC, $pCOFINS, $vCOFINS, $qBCProd, $vAliqProd);
			}
		}

		$COFINS = $aCOFINS['aCOFINSNT'];
		if (!empty($COFINS)) {
			foreach ($COFINS as $cofins) {
				if (!$cofins['nItem']) continue;
				$nItem     = $cofins['nItem']       ;
				$cst       = $cofins['cst']         ;
				$qBCProd   = '';
				$vAliqProd = '';
				$vCOFINS   = '';
				$vBC       = '';
				$pCOFINS   = '';
				$resp = $nfe->tagCOFINS($nItem, $cst, $vBC, $pCOFINS, $vCOFINS, $qBCProd, $vAliqProd);
			}
		}

		$COFINS = $aCOFINS['aCOFINSOutr'];
		if (!empty($COFINS)) {
			foreach ($COFINS as $cofins) {
				if (!$cofins['nItem']) continue;
				$nItem     = $cofins['nItem']       ;
				$cst       = $cofins['cst']         ;
				$qBCProd   = $cofins['qBCProd']     ;
				$vAliqProd = $cofins['vAliqProd']   ;
				$vCOFINS   = $cofins['vCOFINS']     ;
				$vBC       = $cofins['vBC']     ;
				$pCOFINS   = $cofins['pCOFINS']     ;
				$resp = $nfe->tagCOFINS($nItem, $cst, $vBC, $pCOFINS, $vCOFINS, $qBCProd, $vAliqProd);
			}
		}


		$COFINS = $aCOFINS['aCOFINSST'];
		if (!empty($COFINS)) {
			foreach ($COFINS as $cofinsst) {
				if (!$cofinsst['nItem']) continue;
				$nItem     = $cofinsst['nItem']       ;
				$vBC       = $cofinsst['vBC']         ;
				$pCOFINS   = $cofinsst['pCOFINS']     ;
				$qBCProd   = $cofinsst['qBCProd']     ;
				$vAliqProd = $cofinsst['vAliqProd']   ;
				$vCOFINS   = $cofinsst['vCOFINS']     ;
				$resp = $nfe->tagCOFINSST($nItem, $vBC, $pCOFINS, $qBCProd, $vAliqProd,$vCOFINS);
			}
		}
	}

	if (isset($aISSQN)) {
		$ISSQN = $aISSQN['aISSQN'];
		if (!empty($ISSQN)) {
			foreach ($ISSQN as $issqn) {
				if (!$issqn['nItem']) continue;

				$nItem           = $issqn['nItem']           ;
				$vBC             = $issqn['vBC']             ;
				$vAliq           = $issqn['vAliq']           ;
				$vISSQN          = $issqn['vISSQN']          ;
				$cMunFG          = $issqn['cMunFG']          ;
				$cListServ       = $issqn['cListServ']       ;
				$vDeducao        = $issqn['vDeducao']        ;
				$vOutro          = $issqn['vOutro']          ;
				$vDescIncond     = $issqn['vDescIncond']     ;
				$vDescCond       = $issqn['vDescCond']       ;
				$vISSRet         = $issqn['vISSRet']         ;
				$indISS          = $issqn['indISS']          ;
				$cServico        = $issqn['cServico']        ;
				$cMun            = $issqn['cMun']            ;
				$cPais           = $issqn['cPais']           ;
				$nProcesso       = $issqn['nProcesso']       ;
				$indIncentivo    = $issqn['indIncentivo']    ;
				$resp = $nfe->tagISSQN($nItem,$vBC,$vAliq,$vISSQN,$cMunFG,$cListServ,$vDeducao,$vOutro,$vDescIncond,$vDescCond,$vISSRet,$indISS,$cServico,$cMun,$cPais);
			}
		}
	}

	// ------------------------------------ Final dos Produtos --------------------------------------//

	if (isset($total))	{
		$icmsTot    = $total['ICMSTot'];
		if ($icmsTot['vNF']) {
			$vBC        = ($icmsTot['vBC']?$icmsTot['vBC']:'0');
			$vICMS      = ($icmsTot['vICMS']?$icmsTot['vICMS']:'0');
			$vICMSDeson = ($icmsTot['vICMSDeson']?$icmsTot['vICMSDeson']:'0');
			$vBCST      = ($icmsTot['vBCST']?$icmsTot['vBCST']:'0');
			$vST        = ($icmsTot['vST']?$icmsTot['vST']:'0');
			$vProd      = ($icmsTot['vProd']?$icmsTot['vProd']:'0');
			$vFrete     = ($icmsTot['vFrete']?$icmsTot['vFrete']:'0');
			$vSeg       = ($icmsTot['vSeg']?$icmsTot['vSeg']:'0');
			$vDesc      = trim($icmsTot['vDesc']);
			$vII        = ($icmsTot['vII']?$icmsTot['vII']:'0');
			$vIPI       = ($icmsTot['vIPI']?$icmsTot['vIPI']:'0');
			$vPIS       = ($icmsTot['vPIS']?$icmsTot['vPIS']:'0');
			$vCOFINS    = ($icmsTot['vCOFINS']?$icmsTot['vCOFINS']:'0');
			$vOutro     = ($icmsTot['vOutro']?$icmsTot['vOutro']:'0');
			$vNF        = ($icmsTot['vNF']?$icmsTot['vNF']:'0');
			$vTotTrib   = ($icmsTot['vTotTrib']?$icmsTot['vTotTrib']:'0');
			$resp = $nfe->tagICMSTot($vBC, $vICMS, $vICMSDeson, $vBCST, $vST, $vProd, $vFrete, $vSeg, $vDesc,$vII, $vIPI, $vPIS, $vCOFINS, $vOutro, $vNF, $vTotTrib);
		}




		$issTot      = $total['aISSQNtot'];
		if ($issTot['vServ']) {
			$vServ       = ($issTot['vServ']      ? $issTot['vServ']      :'0');
			$vBC         = ($issTot['vBC']        ? $issTot['vBC']        :'0');
			$vISS        = ($issTot['vISS']       ? $issTot['vISS']       :'0');
			$vPIS        = ($issTot['vPIS']       ? $issTot['vPIS']       :'0');
			$vCOFINS     = ($issTot['vCOFINS']    ? $issTot['vCOFINS']    :'0');
			$dCompet     = ($issTot['dCompet']    ? $issTot['dCompet']    :'0');
			$vDeducao    = ($issTot['vDeducao']   ? $issTot['vDeducao']   :'0');
			$vOutro      = ($issTot['vOutro']     ? $issTot['vOutro']     :'0');
			$vDescIncond = ($issTot['vDescIncond']? $issTot['vDescIncond']:'0');
			$vDescCond   = ($issTot['vDescCond']  ? $issTot['vDescCond']  :'0');
			$vISSRet     = ($issTot['vISSRet']    ? $issTot['vISSRet']    :'0');
			$cRegTrib    = ($issTot['cRegTrib']   ? $issTot['cRegTrib']   :'0');
			$resp = $nfe->tagISSQNTot($vBC, $vICMS, $vICMSDeson, $vBCST, $vST, $vProd, $vFrete, $vSeg, $vDesc,$vII, $vIPI, $vPIS, $vCOFINS, $vOutro, $vNF, $vTotTrib);
		}


		$aRetTrib    = $total['aRettrib'];
		if (!empty($aRetTrib['vRetPis'])||!empty($aRetTrib['vRetCOFINS'])||!empty($aRetTrib['vRetCSLL'])||!empty($aRetTrib['vBCIRRF'])
		||!empty($aRetTrib['vBCRetPrev'])||!empty($aRetTrib['vRetPrev'])) {
			$vRetPIS    = $aRetTrib['vRetPIS'];
			$vRetCOFINS = $aRetTrib['vRetCOFINS'];
			$vRetCSLL   = $aRetTrib['vRetCSLL'];
			$vBCIRRF    = $aRetTrib['vBCIRRF'];
			$vIRRF      = $aRetTrib['vIRRF'];
			$vBCRetPrev = $aRetTrib['vBCRetPrev'];
			$vRetPrev   = $aRetTrib['vRetPrev'];
			$resp = $nfe->tagretTrib($vRetPIS,$vRetCOFINS,$vRetCSLL,$vBCIRRF,$vIRRF,$vBCRetPrev,$vRetPrev);
		}


	}


	//---------------------------------------///////////----------------------------
	if (isset($aTransporte)) {
		$modFrete = $aTransporte['modFrete']['modFrete'];
		$resp = $nfe->tagtransp($modFrete['modFrete']);

		$transp  = $aTransporte['transp'];
		if (!empty($transp['CNPJ'])||!empty($transp['CPF'])) {
			$CNPJ    =    $transp['CNPJ'] 	 ;
			$CPF     =    $transp['CPF'] 	 ;
			$IE      =    $transp['IE'] 	 ;
			$xNome   =    $transp['xNome'] 	 ;
			$xEnder  =    $transp['xEnder'] 	 ;
			$xMun    =    $transp['xMun'] 	 ;
			$UF      =    $transp['UF'];
			$resp = $nfe->tagtransporta($CNPJ, $CPF, $xNome, $IE, $xEnder, $xMun, $UF);
		}

		$retTransp = $aTransporte['retTransp'];
		if (!empty($retTransp['vServ'])) {
			$vServ    = $retTransp['vServ']   ;
			$vBCRet   = $retTransp['vBCRet']  ;
			$pICMSRet = $retTransp['pICMSRet'];
			$vICMSRet = $retTransp['vICMSRet'];
			$CFOP     = $retTransp['CFOP']    ;
			$cMunFG   = $retTransp['cMunFG']    ;
			$v = 19;
			$resp = $nfe->tagretTransp($vServ, $vBCRet, $pICMSRet, $vICMSRet, $CFOP, $cMunFG);
		}

		$veicTransp = $aTransporte['veicTransp'];
		if (!empty($veicTransp['placa'])) {
			$placa = $veicTransp['placa'];
			$UF    = $veicTransp['UF']   ;
			$RNTC  = $veicTransp['RNTC'] ;
			$v = 20;
			$resp = $nfe->tagveicTransp($placa, $UF, $RNTC);
		}

		$aReboque = $aTransporte['aReboque'];
		if (!empty($aReboque['placa'])) {
			$placa   = $aReboque['placa']  ;
			$siglaUF = $aReboque['siglaUF'];
			$rntc    = $aReboque['rntc']   ;
			$vagao   = '';
			$balsa   = '';
			$v = 21;
			$resp = $nfe->tagreboque($placa, $UF, $RNTC, $vagao, $balsa);
		}

		$aVol = $aTransporte['aVol'];
		if (!empty($aVol['qVol'])) {
			$qVol      = $aVol['qVol']    ;
			$esp       = $aVol['esp']     ;
			$marca     = $aVol['marca']   ;
			$nVol      = $aVol['nVol']    ;
			$pesoL     = $aVol['pesoL']   ;
			$pesoB     = $aVol['pesoB']   ;
			$aLacres   = $aVol['aLacres']   ;
			$resp = $nfe->tagvol($qVol, $esp, $marca, $nVol, $pesoL, $pesoB, $aLacres);
		}
	}


	//if (isset($aCobr))
	$cobr = $aCobr['cobr'];

	if ($cobr['nFat']) {
		$nFat  = $cobr['nFat'];
		$vOrig = $cobr['vOrig'];
		$vDesc = trim($cobr['vDesc']);
		$vLiq  = $cobr['vLiq'];
		$resp = $nfe->tagfat($nFat, $vOrig, $vDesc, $vLiq);
	}

	$aDup = $aCobr['aDup'];
	foreach ($aDup as $dupl) {
		if ($dupl['nDup']) {
			$nDup  = $dupl['nDup'];
			$dVenc = $dupl['dVenc'];
			$vDup  = $dupl['vDup'];
			$resp = $nfe->tagdup($nDup, $dVenc, $vDup);
		}
	}



	if (isset($aPag)) {
		$pag = 	$aPag['Pag'];
		if (!empty($pag['tPag'])) {
			$tPag = str_pad($pag['tPag'], 2,0,STR_PAD_LEFT);
			$vPag = $pag['vPag'];
			$v = 25;
			$resp = $nfe->tagpag($tPag, $vPag);
		}

		$pag = 	$aPag['Card'];
		if (!empty($pag['pag'])) {
			$cnpj  = $pag['CNPJ'];
			$tBand = $pag['tBand'];
			$cAut  = $pag['cAut'];
			$v = 26;
			$resp = $nfe->tagcard($cnpj, $tBand, $cAut);
		}
	}


	if (isset($aInfAdicional)) {
		$infAdic = $aInfAdicional['aInfAdFisco'];
		if (!empty($infAdic['infAdFisco'])) {
			if ($infAdic['infAdFisco']) {
				$infAdFisco = $infAdic['infAdFisco'];
				$infCpl = $infAdic['infCpl'];
				$resp = $nfe->taginfAdic($infAdFisco,$infCpl);
			}
		}

		$aObsCont = $aInfAdicional['aObsCont'];
		if (!empty($aObsCont['xCampo'])) {
			if ($aObsCont['xCampo']) {
				$xCampo = $aObsCont['xCampo'];
				$xTexto = $aObsCont['xTexto'];
				$resp = $nfe->tagobsCont($xCampo,$xTexto);
			}
		}

		$aObsFisco = $aInfAdicional['aObsFisco'];
		if (!empty($aObsFisco['xCampo'])) {
			if ($aObsFisco['xCampo']) {
				$xCampo = $aObsFisco['xCampo'];
				$xTexto = $aObsFisco['xTexto'];
				$resp = $nfe->tagobsFisco($xCampo,$xTexto);
			}
		}
		$aProcRef = $aInfAdicional['aProcRef'];
		if ($aProcRef['nProc']) {
			$nProc = $aProcRef['nProc'];
			$indProc = $aProcRef['indProd'];
			$resp = $nfe->tagprocRef($nProc,$indProc);
		}
	}

	if (isset($AComExterior)) {
		$exporta = $AComExterior['exporta'];
		if ($exporta['ufSaidaPais']){
			$ufSaidaPais  = $exporta['ufSaidaPais'];
			$xLocExporta  = $exporta['xLocExporta'];
			$xLocDespacho = $exporta['xLocDespacho'];
			$resp = $nfe->tagexporta($ufSaidaPais, $xLocExporta, $xLocDespacho);
		}
	}

	if (!empty($compra['xNEmp'])) {
		$xNEmp = $compra['xNEmp'];
		$xPed  = $compra['xPed'];
		$xCont = $compra['xCont'];
		$resp  = $nfe->tagcompra($xNEmp, $xPed, $xCont);
	}

	if (isset($aCana)) {
		$cana = $aCana['cana'];
		if (!empty($cana['safra'])) {
			$safra = $cana['safra'];
			$ref =  $cana['ref'];
			$resp = $nfe->tagcana($safra, $ref);
		}
		$aForDia = $aCana['fordia'];
		if (count($aForDia['dia'])) {
			$dia     = $aForDia['dia'];
			$qtde    = $aForDia['qtde'];
			$qTotMes = $aForDia['qTotMes'];
			$qTotAnt = $aForDia['qTotAnt'];
			$qTotGer = $aForDia['qTotGer'];
			$resp = $nfe->tagforDia($dia, $qtde, $qTotMes, $qTotAnt, $qTotGer);
		}

		$aDeduc = $aCana['deduc'];
		if (!empty($aDeduc['xDed'])) {
			$xDed = $aDeduc['xDed'];
			$vDed = $aDeduc['vDed'];
			$vFor = $aDeduc['vFor'];
			$vTotDed = $aDeduc['vTotDed'];
			$vLiqFor = $aDeduc['vLiqFor'];
			$resp = $nfe->tagdeduc($xDed,$vDed,$vFor, $vTotDed,$vLiqFor);
		}
	}

	$resp = $nfe->montaNFe();

	if (!empty($nfe->erros)) {
		$objNfe_erros = new Nfe_erros();
		$objNfe_erros->setData_envio(date('Ymd'));
		$objNfe_erros->setIdent_chave($chave);
		$objNfe_erros->setMes_ano(date('mY'));
		$objNfe_erros->setSeq_nfe($objNfe_dados->getSeq_nfe());

		$seq = $objNfe_errosDAO->countAll();

		foreach ($nfe->erros as $key=>$um_erro) {
			$seq++;
			$objNfe_erros->setSeq($seq);
			$erro = $key+1;
			$objNfe_erros->setSeq_erro($erro);
			$objNfe_erros->setTag_erro($um_erro['tag']);
			$objNfe_erros->setCampo_erro($um_erro['desc']);
			$objNfe_erros->setDescr_erro($um_erro['erro']);
			if (!$objNfe_errosDAO->insert($objNfe_erros)) {
				$erro = monta_erros_geracao(502,$chave);
				return $erro;
			}
		}

		$objNfe_dados->setStatus_nfe(2);
		if (!$objNfe_dadosDAO->update_status($objNfe_dados)) {
			$erro = monta_erros_geracao(501,$chave);
			return $erro;
		}
		$erro = '570'.',Erro na Geração ou Montagem da NF-e - Verificar Tabela de Erros da NF-e.';
		return $erro;
	}


	$sAmb = ($tpamb == '2') ? 'homologacao' : 'producao';
	$dir = PATH_ARQS.'/'.$sAmb.'/entradas/';
	$arquivo = $dir.$chave.'.xml';
	$f = fopen($arquivo, 'w');
	fwrite($f, $nfe->getXML());
	fclose($f);

	$modnfe = substr($chave, 20,2);
	$serie  = substr($chave, 22, 3);
	$nNF    = substr($chave, 25, 9);

	$aConfig = montar_configuracao($cnpj_empresa,$tpamb,$modnfe);
	$nfe2  = new ToolsNFePHP($aConfig);
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



	$docxml = file_get_contents($arquivo);
	$xsdFile = PATH_ROOT.'webservicos/NfePhp/schemes/PL_008f/nfe_v3.10.xsd';
	$aErro = array();
	if (!$nfe2->validXML($docxml, $xsdFile, $aErro)) {

		/*		echo "<pre>gggg";
		print_r ($aErro);
		*/
		
		$objNfe_dados->setStatus_nfe(4);
		if (!$objNfe_dadosDAO->update_status($objNfe_dados)) {
			$erro = monta_erros_geracao(501,$chave);
			return $erro;
		}

		$objNfe_erros = new Nfe_erros();
		$objNfe_erros->setData_envio(date('Ymd'));
		$objNfe_erros->setIdent_chave($chave);
		$objNfe_erros->setMes_ano(date('mY'));
		$objNfe_erros->setSeq_nfe($objNfe_dados->getSeq_nfe());

		$seq = $objNfe_errosDAO->countAll();

		$erroT = '590,'.$chave;
		foreach ($aErro as $key=>$um_erro) {
			$seq++;
			$objNfe_erros->setSeq($seq);
			$erro = $key+1;
			$objNfe_erros->setSeq_erro($erro);
			$objNfe_erros->setTag_erro('Validar');
			$objNfe_erros->setCampo_erro('Validar XML da NF-e gerada');
			$objNfe_erros->setDescr_erro(utf8_encode(str_replace("'",'"',$um_erro)));
			$erroT .= ','.trim(utf8_decode(str_replace("'",'"',$um_erro)));
			if (!$objNfe_errosDAO->insert($objNfe_erros)) {
				$erro = monta_erros_geracao(502,$chave);
				return $erro;
			}
		}
		return $erroT;
	}



	$docxml = file_get_contents($arquivo);
	$aResp = array();
	$indSinc = 1;
	$idLote = 1469;

	$sAmb = ($tpamb == '2') ? 'homologacao' : 'producao';
	$dirApr = PATH_ARQS.'/'.$sAmb.'/enviadas/aprovadas/';
	$dirEnt = PATH_ARQS.'/'.$sAmb.'/entradas/';

	$objCademp    =  new Cademp();
	$objCadempDAO = new CadempDAO();
	$objCademp->setEmpr_cnpj($cnpj_empresa);
	$objCademp = $objCadempDAO->select($objCademp);

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

				if (!enviar_email_emissao($cnpj, $chave, $autorizar, $ambiente,$tpproc,0)) {
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
		$objNfe_envio->setAmbiente($tpamb);
		$objNfe_envio->setVersao($tpproc);

		//$salvar = $objNfe_envioDAO->insert($objNfe_envio);

		$retorno = 'Nota Processada - Sem Autorização da Receita !!!';

		$result[] = array(
		'status' => '1',
		'chave' => $chave,
		'resposta' => $retorno);
		return $result;
	}
}

?>