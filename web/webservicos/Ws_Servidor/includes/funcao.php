<?

function executa_dados_servico($chave,$versao,$cUf){
	$nfe = teste();
	return 'teste:'.$nfe;
}


function teste() {

	$nfe = new MakeNFe();

	//criar as tags em sequencia

	//Numero e versão da NFe (infNFe)
	$chave = '41150573327280000110550010000238481208888341';
	$versao = '3.10';
	$resp = $nfe->taginfNFe($chave, $versao);

	//Dados da NFe (ide)
	$cUF = '41'; //codigo numerico do estado
	$cNF = '20888834'; //numero aleatório da NF
	$natOp = 'VD MERC ADQ OU REC TERC'; //natureza da operação
	$indPag = '0'; //0=Pagamento à vista; 1=Pagamento a prazo; 2=Outros
	$mod = '55'; //modelo da NFe 55 ou 65 essa última NFCe
	$serie = '1'; //serie da NFe
	$nNF = '23848'; // numero da NFe
	$dhEmi = '2015-05-25T00:00:00-03:00';  //para versão 3.00 '2014-02-03T13:22:42-3.00' não informar para NFCe
	$dhSaiEnt = '2015-05-25T00:00:00-03:00'; //versão 2.00, 3.00 e 3.10
	$tpNF = '1';
	$idDest = '1'; //1=Operação interna; 2=Operação interestadual; 3=Operação com exterior.
	$cMunFG = '4106902';
	$tpImp = '1'; //0=Sem geração de DANFE; 1=DANFE normal, Retrato; 2=DANFE normal, Paisagem;
	//3=DANFE Simplificado; 4=DANFE NFC-e; 5=DANFE NFC-e em mensagem eletrônica
	//(o envio de mensagem eletrônica pode ser feita de forma simultânea com a impressão do DANFE;
	//usar o tpImp=5 quando esta for a única forma de disponibilização do DANFE).
	$tpEmis = '1'; //1=Emissão normal (não em contingência);
	//2=Contingência FS-IA, com impressão do DANFE em formulário de segurança;
	//3=Contingência SCAN (Sistema de Contingência do Ambiente Nacional);
	//4=Contingência DPEC (Declaração Prévia da Emissão em Contingência);
	//5=Contingência FS-DA, com impressão do DANFE em formulário de segurança;
	//6=Contingência SVC-AN (SEFAZ Virtual de Contingência do AN);
	//7=Contingência SVC-RS (SEFAZ Virtual de Contingência do RS);
	//9=Contingência off-line da NFC-e (as demais opções de contingência são válidas também para a NFC-e);
	//Nota: Para a NFC-e somente estão disponíveis e são válidas as opções de contingência 5 e 9.
	$cDV = '1'; //digito verificador
	$tpAmb = '2'; //1=Produção; 2=Homologação
	$finNFe = '1'; //1=NF-e normal; 2=NF-e complementar; 3=NF-e de ajuste; 4=Devolução/Retorno.
	$indFinal = '1'; //0=Não; 1=Consumidor final;
	$indPres = '1'; //0=Não se aplica (por exemplo, Nota Fiscal complementar ou de ajuste);
	//1=Operação presencial;
	//2=Operação não presencial, pela Internet;
	//3=Operação não presencial, Teleatendimento;
	//4=NFC-e em operação com entrega a domicílio;
	//9=Operação não presencial, outros.
	$procEmi = '0'; //0=Emissão de NF-e com aplicativo do contribuinte;
	//1=Emissão de NF-e avulsa pelo Fisco;
	//2=Emissão de NF-e avulsa, pelo contribuinte com seu certificado digital, através do site do Fisco;
	//3=Emissão NF-e pelo contribuinte com aplicativo fornecido pelo Fisco.
	$verProc = '3.000'; //versão do aplicativo emissor
	$dhCont = ''; //entrada em contingência AAAA-MM-DDThh:mm:ssTZD
	$xJust = ''; //Justificativa da entrada em contingência

	$resp = $nfe->tagide($cUF, $cNF, $natOp, $indPag, $mod, $serie, $nNF, $dhEmi, $dhSaiEnt, $tpNF, $idDest, $cMunFG, $tpImp, $tpEmis, $cDV, $tpAmb, $finNFe, $indFinal, $indPres, $procEmi, $verProc, $dhCont, $xJust);

/*
	
	//refNFe NFe referenciada
	$refNFe = '';
	$resp = $nfe->tagrefNFe($refNFe);

	//refNF Nota Fiscal 1A referenciada
	$cUF = '5';
	$AAMM = '1312';
	$CNPJ = '12345678901234';
	$mod = '1A';
	$serie = '0';
	$nNF = '1234';
	$resp = $nfe->tagrefNF($cUF, $AAMM, $CNPJ, $mod, $serie, $nNF);

	//NFPref Nota Fiscal Produtor Rural referenciada
	$cUF = '35';
	$AAMM = '1312';
	$CNPJ = '12345678901234';
	$CPF = '123456789';
	$IE = '123456';
	$mod = '1';
	$serie = '0';
	$nNF = '1234';
	$resp = $nfe->tagrefNFP($cUF, $AAMM, $CNPJ, $CPF, $IE, $mod, $serie, $nNF);

	//CTeref CTe referenciada
	$refCTe = '12345678901234567890123456789012345678901234';
	$resp = $nfe->tagrefCTe($refCTe);

	//ECFref ECF referenciada
	$mod = '90';
	$nECF = '12243';
	$nCOO = '111';
	$resp = $nfe->tagrefECF($mod, $nECF, $nCOO);
*/

	//Dados do emitente
	$CNPJ = '73327280000110';
	$CPF = '';
	$xNome = 'REDE GERAL DE FIXADORES E FERRAGENS TESTE';
	$xFant = 'REDE GERAL DE FIXADORES E FERRAGENS LTDA';
	$IE = '9048425248';
	$IEST = '';
	$IM = '';
	$CNAE = '';
	$CRT = '1';
	$resp = $nfe->tagemit($CNPJ, $CPF, $xNome, $xFant, $IE, $IEST, $IM, $CNAE, $CRT);

	//endereço do emitente
	$xLgr = 'AV ERASTO GAERTNER';
	$nro = '1039';
	$xCpl = 'ARMAZEM 42';
	$xBairro = 'IPIRANGA';
	$cMun = '4106902';
	$xMun = 'Curitiba';
	$UF = 'PR';
	$CEP = '82515000';
	$cPais = '1058';
	$xPais = 'BRASIL';
	$fone = '1120677300';
	$resp = $nfe->tagenderEmit($xLgr, $nro, $xCpl, $xBairro, $cMun, $xMun, $UF, $CEP, $cPais, $xPais, $fone);

	//destinatário
	$CNPJ = '77986321000131';
	$CPF = '';
	$idEstrangeiro = '';
	$xNome = 'NF-E EMITIDA EM AMBIENTE DE HOMOLOGACAO - SEM VALOR FISCAL';
	$indIEDest = '1';
	$IE = '1015794506';
	$ISUF = '';
	$IM = '';
	$email = 'ticcolor@ticcolor.com';
	$resp = $nfe->tagdest($CNPJ, $CPF, $idEstrangeiro, $xNome, $indIEDest, $IE, $ISUF, $IM, $email);

	//Endereço do destinatário
	$xLgr = 'RUA CONSELHEIRO LAURINDO';
	$nro = '1163';
	$xCpl = '';
	$xBairro = 'CENTRO';
	$cMun = '3509502';
	$xMun = 'Campinas';
	$UF = 'SP';
	$CEP = '13015121';
	$cPais = '1058';
	$xPais = 'BRASIL';
	$fone = '1932740607';
	$resp = $nfe->tagenderDest($xLgr, $nro, $xCpl, $xBairro, $cMun, $xMun, $UF, $CEP, $cPais, $xPais, $fone);

	/*
	//Identificação do local de retirada (se diferente do emitente)
	$CNPJ = '12345678901234';
	$CPF = '';
	$xLgr = 'Rua Vanish';
	$nro = '000';
	$xCpl = 'Ghost';
	$xBairro = 'Assombrado';
	$cMun = '3509502';
	$xMun = 'Campinas';
	$UF = 'SP';
	$resp = $nfe->tagretirada($CNPJ, $CPF, $xLgr, $nro, $xCpl, $xBairro, $cMun, $xMun, $UF);
	

	//Identificação do local de Entrega (se diferente do destinatário)
	$CNPJ = '12345678901234';
	$CPF = '';
	$xLgr = 'Viela Mixuruca';
	$nro = '2';
	$xCpl = 'Quabrada do malandro';
	$xBairro = 'Favela Mau Olhado';
	$cMun = '3509502';
	$xMun = 'Campinas';
	$UF = 'SP';
	$resp = $nfe->tagentrega($CNPJ, $CPF, $xLgr, $nro, $xCpl, $xBairro, $cMun, $xMun, $UF);


	//Identificação dos autorizados para fazer o download da NFe (somente versão 3.1)
	$aAut = array('11111111111111','2222222','33333333333333');
	foreach ($aAut as $aut) {
		if (strlen($aut) == 14) {
			$resp = $nfe->tagautXML($aut);
		} else {
			$resp = $nfe->tagautXML('', $aut);
		}
	}*/

	//produtos
	$aP[] = array(
	'nItem' => '1',
	'cProd' => '006288',
	'cEAN' => '',
	'xProd' => 'BROCA AR 03,70 (40056)',
	'NCM' => '82075011',
	'NVE' => '',
	'EXTIPI' => '',
	'CFOP' => '5102',
	'uCom' => 'PC',
	'qCom' => '2.0000',
	'vUnCom' => '7.200',
	'vProd' => '14.40',
	'cEANTrib' => '',
	'uTrib' => 'PC',
	'qTrib' => '2.000',
	'vUnTrib' => '7.200',
	'vFrete' => '',
	'vSeg' => '',
	'vDesc' => '',
	'vOutro' => '',
	'indTot' => '1',
	'xPed' => '',
	'nItemPed' => '0',
	'nFCI' => 'AEC0BE59-FE89-4AA3-B976-AA24F9C00280');
	
	
	$aP[] = array(
	'nItem' => '2',
	'cProd' => '015963',
	'cEAN' => '',
	'xProd' => 'PF AA INOX 4,8 X 50,0 CH PH',
	'NCM' => '73181500',
	'NVE' => '',
	'EXTIPI' => '',
	'CFOP' => '5405',
	'uCom' => 'CE',
	'qCom' => '2.0000',
	'vUnCom' => '47.810',
	'vProd' => '95.62',
	'cEANTrib' => ' ',
	'uTrib' => 'CE',
	'qTrib' => '2.0000',
	'vUnTrib' => '47.8100',
	'vFrete' => '0',
	'vSeg' => '0',
	'vDesc' => '0',
	'vOutro' => '0',
	'indTot' => '1',
	'xPed' => '0',
	'nItemPed' => '0',
	'nFCI' => 'AE324E22-FFFF-32AC-XX44-AA24F9C12345');

	
	foreach ($aP as $prod) {
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
		$vDesc = $prod['vDesc'];
		$vOutro = $prod['vOutro'];
		$indTot = $prod['indTot'];
		$xPed = $prod['xPed'];
		$nItemPed = $prod['nItemPed'];
		$nFCI = $prod['nFCI'];
		$resp = $nfe->tagprod($nItem, $cProd, $cEAN, $xProd, $NCM, $NVE, $EXTIPI, $CFOP, $uCom, $qCom, $vUnCom, $vProd, $cEANTrib, $uTrib, $qTrib, $vUnTrib, $vFrete, $vSeg, $vDesc, $vOutro, $indTot, $xPed, $nItemPed, $nFCI);
	}


/*
	//DI
	$nItem = '1';
	$nDI = '234556786';
	$dDI = '22/12/2013';
	$xLocDesemb = 'SANTOS';
	$UFDesemb = 'SP';
	$dDesemb = '22/12/2013';
	$tpViaTransp = '1';
	$vAFRMM = '1.00';
	$tpIntermedio = '0';
	$CNPJ = '';
	$UFTerceiro = '';
	$cExportador = '111';
	$resp = $nfe->tagDI($nItem, $nDI, $dDI, $xLocDesemb, $UFDesemb, $dDesemb, $tpViaTransp, $vAFRMM, $tpIntermedio, $CNPJ, $UFTerceiro, $cExportador);

	//adi
	$nItem = '1';
	$nDI = '234556786';
	$nAdicao = '1';
	$nSeqAdicC = '1111';
	$cFabricante = 'seila';
	$vDescDI = '0.00';
	$nDraw = '9393939';
	$resp = $nfe->tagadi($nItem, $nDI, $nAdicao, $nSeqAdicC, $cFabricante, $vDescDI, $nDraw);

	//detExport
	$nItem = '2';
	$nDraw = '9393939';
	$exportInd = '1';
	$nRE = '2222';
	$chNFe = '1234567890123456789012345678901234';
	$qExport = '100';
	$resp = $nfe->tagdetExport($nItem, $nDraw, $exportInd, $nRE, $chNFe, $qExport);
*/
	//imposto
	$nItem = '1';
	$vTotTrib = '5.13';
	$resp = $nfe->tagimposto($nItem, $vTotTrib);

	$nItem = '2';
	$vTotTrib = '34.88';
	$resp = $nfe->tagimposto($nItem, $vTotTrib);

/*	//ICMS
	$nItem = '1';
	$orig = '0';
	$cst = '00';
	$modBC = '1';
	$vBC = '100.00';
	
	$pRedBC = '';
	$pICMS = '18.00';
	$vICMS = '18.00';
	$vICMSDeson = '';
	$motDesICMS = '';
	$modBCST = '1';
	$pMVAST = '50.00';
	$pRedBCST = '';
	$vBCST = '150.00'; //150.00
	$pICMSST = '7.00';
	$vICMSST = '15.00';
	$pDif = '';
	$vICMSDif = '';
	$vICMSOp = '';
	$vBCSTRet = '';
	$vICMSSTRet = '';
	$resp = $nfe->tagICMS($nItem, $orig, $cst, $modBC, $pRedBC, $vBC, $pICMS, $vICMS, $vICMSDeson, $motDesICMS, $modBCST, $pMVAST, $pRedBCST, $vBCST, $pICMSST, $vICMSST, $pDif, $vICMSDif, $vICMSOp, $vBCSTRet, $vICMSSTRet);

	$nItem = '2';
	$orig = '1';
	$cst = '00';
	$modBC = '1';
	$pRedBC = '';
	$vBC = '200.00';
	$pICMS = '18.00';
	$vICMS = '36.00';//36.00
	$vICMSDeson = '';
	$motDesICMS = '';
	$modBCST = '';
	$pMVAST = '';
	$pRedBCST = '';
	$vBCST = '';
	$pICMSST = '';
	$vICMSST = '';
	$pDif = '';
	$vICMSDif = '';
	$vICMSOp = '';
	$vBCSTRet = '';
	$vICMSSTRet = '';
	$resp = $nfe->tagICMS($nItem, $orig, $cst, $modBC, $pRedBC, $vBC, $pICMS, $vICMS, $vICMSDeson, $motDesICMS, $modBCST, $pMVAST, $pRedBCST, $vBCST, $pICMSST, $vICMSST, $pDif, $vICMSDif, $vICMSOp, $vBCSTRet, $vICMSSTRet);
*/

$nItem  = '1';
$orig  = '0';
$csosn  = '101';
$modBC  = '0';
$vBC  = '0';
$pRedBC  = '0';
$pICMS  = '0';
$vICMS  = '0';
$pCredSN  = '330';
$vCredICMSSN  = '0.48';
$modBCST  = '0';
$pMVAST  = '0';
$pRedBCST  = '0';
$vBCST  = '0';
$pICMSST  = '0';
$vICMSST  = '0';
$vBCSTRet  = '0';
$vICMSSTRet  = '0';

	$resp = $nfe->tagICMSSN($nItem, $orig, $csosn, $modBC, $vBC, $pRedBC, $pICMS, $vICMS, $pCredSN, $vCredICMSSN, $modBCST, $pMVAST, $pRedBCST, $vBCST, $pICMSST, $vICMSST, $vBCSTRet, $vICMSSTRet);

$nItem  = '0';
$cst   = '0';
$clEnq   = '0';
$cnpjProd   = '0';
$cSelo   = '0';
$qSelo   = '0';
$cEnq   = '0';
$vBC   = '0';
$pIPI   = '0';
$qUnid   = '0';
$vUnid   = '0';
$vIPI	  = '0';
$resp = $nfe->tagIPI($nItem, $cst, $clEnq, $cnpjProd, $cSelo, $qSelo, $cEnq, $vBC, $pIPI, $qUnid, $vUnid, $vIPI);

$nItem 	  = '1';
$cst	  = '02';
$vBC	  = '0.00';
$pPIS	  = '0.00';
$vPIS	  	= '0';
$qBCProd	= '0';
$vAliqProd	= '0';
$resp = $nfe->tagPIS($nItem, $cst, $vBC, $pPIS, $vPIS, $qBCProd, $vAliqProd);

	//COFINS
$nItem	= '1';
$cst	= '02';
$vBC	= '0.00';
$pCOFINS	= '0.00';
$vCOFINS	= '0.00';
$qBCProd	= '0.00';
$vAliqProd		= '0.00';
$resp = $nfe->tagCOFINS($nItem, $cst, $vBC, $pCOFINS, $vCOFINS, $qBCProd, $vAliqProd);

$nItem  = '2';
$orig  = '0';
$csosn  = '500';
$modBC  = '0';
$vBC  = '0';
$pRedBC  = '0';
$pICMS  = '0';
$vICMS  = '0';
$pCredSN  = '0';
$vCredICMSSN  = '0';
$modBCST  = '0';
$pMVAST  = '0';
$pRedBCST  = '0';
$vBCST  = '0';
$pICMSST  = '0';
$vICMSST  = '0';
$vBCSTRet  = '0';
$vICMSSTRet  = '0';

	$resp = $nfe->tagICMSSN($nItem, $orig, $csosn, $modBC, $vBC, $pRedBC, $pICMS, $vICMS, $pCredSN, $vCredICMSSN, $modBCST, $pMVAST, $pRedBCST, $vBCST, $pICMSST, $vICMSST, $vBCSTRet, $vICMSSTRet);

	/*
$nItem  = '0';
$cst   = '0';
$clEnq   = '0';
$cnpjProd   = '0';
$cSelo   = '0';
$qSelo   = '0';
$cEnq   = '0';
$vBC   = '0';
$pIPI   = '0';
$qUnid   = '0';
$vUnid   = '0';
$vIPI	  = '0';
$resp = $nfe->tagIPI($nItem, $cst, $clEnq, $cnpjProd, $cSelo, $qSelo, $cEnq, $vBC, $pIPI, $qUnid, $vUnid, $vIPI);
*/
	
$nItem 	  = '2';
$cst	  = '02';
$vBC	  = '0.00';
$pPIS	  = '0.00';
$vPIS	  	= '0';
$qBCProd	= '0';
$vAliqProd	= '0';
$resp = $nfe->tagPIS($nItem, $cst, $vBC, $pPIS, $vPIS, $qBCProd, $vAliqProd);

	//COFINS
$nItem	= '2';
$cst	= '02';
$vBC	= '0.00';
$pCOFINS	= '0.00';
$vCOFINS	= '0.00';
$qBCProd	= '0.00';
$vAliqProd		= '0.00';
$resp = $nfe->tagCOFINS($nItem, $cst, $vBC, $pCOFINS, $vCOFINS, $qBCProd, $vAliqProd);


$vBC         = '0.00';
$vICMS         = '0.00';
$vICMSDeson         = '0';
$vBCST         = '0';
$vST         = '0';
$vProd         = '110.02';
$vFrete         = '0';
$vSeg         = '0';
$vDesc         = '0';
$vII         = '0';
$vIPI         = '0.00';
$vPIS         = '0.00';
$vCOFINS         = '0.00';
$vOutro         = '0';
$vNF         = '110.02';
$vTotTrib         = '40.01';

$resp = $nfe->tagICMSTot($vBC, $vICMS, $vICMSDeson, $vBCST, $vST, $vProd, $vFrete, $vSeg, $vDesc, $vII, $vIPI, $vPIS, $vCOFINS, $vOutro, $vNF, $vTotTrib);


	//$adProd[] = array(
	//  'Informação adicional                do produto1',
	// 'Produto 2       Informação adicional                do produto2'
	//);

	//$iCount = 1;
	//foreach ($adProd as $inf) {
	//  $resp = $nfe->taginfAdProd($iCount, $inf);
	//  $iCount++;
	// }
/*

	//ICMSPart
	$resp = $nfe->tagICMSPart($nItem, $orig, $cst, $modBC, $vBC, $pRedBC, $pICMS, $vICMS, $modBCST, $pMVAST, $pRedBCST, $vBCST, $pICMSST, $vICMSST, $pBCOp, $ufST);
	//ICMSST
	$resp = $nfe->tagICMSST($nItem, $orig, $cst, $vBCSTRet, $vICMSSTRet, $vBCSTDest, $vICMSSTDest);
	//ICMSSN
	$resp = $nfe->tagICMSSN($nItem, $orig, $csosn, $modBC, $vBC, $pRedBC, $pICMS, $vICMS, $pCredSN, $vCredICMSSN, $modBCST, $pMVAST, $pRedBCST, $vBCST, $pICMSST, $vICMSST, $vBCSTRet, $vICMSSTRet);
	//IPI
	$resp = $nfe->tagIPI($nItem, $cst, $clEnq, $cnpjProd, $cSelo, $qSelo, $cEnq, $vBC, $pIPI, $qUnid, $vUnid, $vIPI);
	//PIS
	$resp = $nfe->tagPIS($nItem, $cst, $vBC, $pPIS, $vPIS, $qBCProd, $vAliqProd);
	//PISST
	$resp = $nfe->tagPISST($nItem, $vBC, $pPIS, $qBCProd, $vAliqProd, $vPIS);
	//COFINS
	$resp = $nfe->tagCOFINS($nItem, $cst, $vBC, $pCOFINS, $vCOFINS, $qBCProd, $vAliqProd);
	//COFINSST
	$resp = $nfe->tagCOFINSST($nItem, $vBC, $pCOFINS, $qBCProd, $vAliqProd, $vCOFINS);
	//II
	$resp = $nfe->tagII($nItem, $vBC, $vDespAdu, $vII, $vIOF);

	//ICMSTot
	$resp = $nfe->tagICMSTot($vBC, $vICMS, $vICMSDeson, $vBCST, $vST, $vProd, $vFrete, $vSeg, $vDesc, $vII, $vIPI, $vPIS, $vCOFINS, $vOutro, $vNF, $vTotTrib);
	//ISSQNTot
	$resp = $nfe->tagISSQNTot($vServ, $vBC, $vISS, $vPIS, $vCOFINS, $dCompet, $vDeducao, $vOutro, $vDescIncond, $vDescCond, $vISSRet, $cRegTrib);
	//retTrib
	$resp = $nfe->tagretTrib($vRetPIS, $vRetCOFINS, $vRetCSLL, $vBCIRRF, $vIRRF, $vBCRetPrev, $vRetPrev);
*/
	//frete
	$modFrete = '1'; //0=Por conta do emitente; 1=Por conta do destinatário/remetente; 2=Por conta de terceiros;
	$resp = $nfe->tagtransp($modFrete);

	//transportadora
	$CNPJ = '';
	$CPF = '';
	$xNome = 'CLIENTE RETIRA';
	$IE = 'ISENTO';
	$xEnder = '';
	$xMun = 'CURITIBA';
	$UF = 'PR';
	$resp = $nfe->tagtransporta($CNPJ, $CPF, $xNome, $IE, $xEnder, $xMun, $UF);

	/*
	//valores retidos para transporte
	$vServ = '258,69'; //Valor do Serviço
	$vBCRet = '258,69'; //BC da Retenção do ICMS
	$pICMSRet = '10,00'; //Alíquota da Retenção
	$vICMSRet = '25,87'; //Valor do ICMS Retido
	$CFOP = '5352';
	$cMunFG = '3509502'; //Código do município de ocorrência do fato gerador do ICMS do transporte
	//$resp = $nfe->tagretTransp($vServ, $vBCRet, $pICMSRet, $vICMSRet, $CFOP, $cMunFG);

	//dados dos veiculos de transporte
	$placa = 'AAA1212';
	$UF = 'SP';
	$RNTC = '12345678';
	//$resp = $nfe->tagveicTransp($placa, $UF, $RNTC);

	//dados dos reboques
	$aReboque = array(
	array('ZZQ9999', 'SP', '', '', ''),
	array('QZQ2323', 'SP', '', '', '')
	);
	foreach ($aReboque as $reb) {
		$placa = $reb[0];
		$UF = $reb[1];
		$RNTC = $reb[2];
		$vagao = $reb[3];
		$balsa = $reb[4];
		//$resp = $nfe->tagreboque($placa, $UF, $RNTC, $vagao, $balsa);
	}
*/
	//dados dos volumes transportados
	$aVol = array(
	array('1','VOL','','12345','12,20','12,78')
	);
	foreach ($aVol as $vol) {
		$qVol = $vol[0]; //Quantidade de volumes transportados
		$esp = $vol[1]; //Espécie dos volumes transportados
		$marca = $vol[2]; //Marca dos volumes transportados
		$nVol = $vol[3]; //Numeração dos volume
		$pesoL = $vol[4];
		$pesoB = $vol[5];
		$aLacres = $vol[6];
		$resp = $nfe->tagvol($qVol, $esp, $marca, $nVol, $pesoL, $pesoB, $aLacres);
	}
/*
	//dados da fatura
	$nFat = '1111';
	$vOrig = '6000,00';
	$vDesc = '';
	$vLiq = '';
	$resp = $nfe->tagfat($nFat, $vOrig, $vDesc, $vLiq);

	//dados das duplicadas
	$aDup = array(
	array('1111-1','2014-01-10','1000,00'),
	array('1111-2','2014-02-10','1000,00'),
	array('1111-3','2014-03-10','1000,00'),
	array('1111-4','2014-04-10','1000,00'),
	array('1111-5','2014-05-10','1000,00'),
	array('1111-6','2014-06-10','1000,00')
	);
	foreach ($aDup as $dup) {
		$nDup = $dup[0];
		$dVenc = $dup[1];
		$vDup = $dup[2];
		$resp = $nfe->tagdup($nDup, $dVenc, $vDup);
	}


	//*************************************************************
	//Grupo obrigatório para a NFC-e. Não informar para a NF-e.
	$tPag = '03'; //01=Dinheiro 02=Cheque 03=Cartão de Crédito 04=Cartão de Débito 05=Crédito Loja 10=Vale Alimentação 11=Vale Refeição 12=Vale Presente 13=Vale Combustível 99=Outros
	$vPag = '1452,33';
	//$resp = $nfe->tagpag($tPag, $vPag);

	//se a operação for com cartão de crédito essa informação é obrigatória
	$CNPJ = '31551765000143'; //CNPJ da operadora de cartão
	$tBand = '01'; //01=Visa 02=Mastercard 03=American Express 04=Sorocred 99=Outros
	$cAut = 'AB254FC79001'; //número da autorização da tranzação
	//$resp = $nfe->tagcard($CNPJ, $tBand, $cAut);
	//**************************************************************

	//informações Adicionais
	$infAdFisco = 'Informacao adicional do fisco';
	$infCpl = 'Informacoes complementares do emitente';
	$resp = $nfe->taginfAdic($infAdFisco, $infCpl);

	//observações emitente
	$aObsC = array(
	array('email','roberto@x.com.br'),
	array('email','rodrigo@y.com.br'),
	array('email','rogerio@w.com.br'));
	foreach ($aObsC as $obs) {
		$xCampo = $obs[0];
		$xTexto = $obs[1];
		$resp = $nfe->tagobsCont($xCampo, $xTexto);
	}

	//observações fisco
	$aObsF = array(
	array('email','roberto@x.com.br'),
	array('email','rodrigo@y.com.br'),
	array('email','rogerio@w.com.br'));
	foreach ($aObsF as $obs) {
		$xCampo = $obs[0];
		$xTexto = $obs[1];
		//$resp = $nfe->tagobsFisco($xCampo, $xTexto);
	}

	//Dados do processo
	//0=SEFAZ; 1=Justiça Federal; 2=Justiça Estadual; 3=Secex/RFB; 9=Outros
	$aProcRef = array(
	array('nProc1','0'),
	array('nProc2','1'),
	array('nProc3','2'),
	array('nProc4','3'),
	array('nProc5','9')
	);
	foreach ($aProcRef as $proc) {
		$nProc = $proc[0];
		$indProc = $proc[1];
		//$resp = $nfe->tagprocRef($nProc, $indProc);
	}

	//dados exportação
	$UFSaidaPais = 'SP';
	$xLocExporta = 'Maritimo';
	$xLocDespacho = 'Porto Santos';
	//$resp = $nfe->tagexporta($UFSaidaPais, $xLocExporta, $xLocDespacho);

	//dados de compras
	$xNEmp = '';
	$xPed = '12345';
	$xCont = 'A342212';
	//$resp = $nfe->tagcompra($xNEmp, $xPed, $xCont);

	//dados da colheita de cana
	$safra = '2014';
	$ref = '01/2014';
	//$resp = $nfe->tagcana($safra, $ref);

	$aForDia = array(
	array('1', '100', '1400', '1000', '1400'),
	array('2', '100', '1400', '1000', '1400'),
	array('3', '100', '1400', '1000', '1400'),
	array('4', '100', '1400', '1000', '1400'),
	array('5', '100', '1400', '1000', '1400'),
	array('6', '100', '1400', '1000', '1400'),
	array('7', '100', '1400', '1000', '1400'),
	array('8', '100', '1400', '1000', '1400'),
	array('9', '100', '1400', '1000', '1400'),
	array('10', '100', '1400', '1000', '1400'),
	array('11', '100', '1400', '1000', '1400'),
	array('12', '100', '1400', '1000', '1400'),
	array('13', '100', '1400', '1000', '1400'),
	array('14', '100', '1400', '1000', '1400')
	);
	foreach ($aForDia as $forDia) {
		$dia = $forDia[0];
		$qtde = $forDia[1];
		$qTotMes = $forDia[2];
		$qTotAnt = $forDia[3];
		$qTotGer = $forDia[4];
		//$resp = $nfe->tagforDia($dia, $qtde, $qTotMes, $qTotAnt, $qTotGer);
	}
*/
	$resp = $nfe->montaNFe();
	
	
	$arquivo = $chave.'-Nfe1.xml';
	$f = fopen($arquivo, 'w');
	fwrite($f, $nfe->getXML());
	fclose($f);


	$nfe2  = new ToolsNFePHP;
	$arq  = file_get_contents($arquivo);
	if ($xml = $nfe2->signXML($arq, 'infNFe')) {
	
	    file_put_contents($arquivo, $xml);
	
	} else {
	    return  $nfe2->errMsg;
	}
	/*
	if (is_file($arquivo)) {
	    $docxml = file_get_contents($arquivo);
	    $danfe = new DanfeNFePHP($docxml, 'P', 'A4', '../../images/logo.jpg', 'I', '');
	    $id = $danfe->montaDANFE();
	    $teste = $danfe->printDANFE($id.'.pdf', 'I');
	}	
	
	*/
	
	
//	$nfe = $xml;
	
	//echo "<hr>ddd ".$nfe2->errMsg;
	/*
	$f = fopen($chave.'-Nfe.xml', 'w');
	fwrite($f, $nfe->getXML());
	fclose($f);*/

	return $resp;
}

?>