<?php
class MakeNFSe
{
	private $URLxsi = 'http://www.w3.org/2001/XMLSchema-instance';
	private $URLxsd = 'http://www.w3.org/2001/XMLSchema';
	private $URLnfe = 'http://www.portalfiscal.inf.br/nfe';
	private $URLdsig = 'http://www.w3.org/2000/09/xmldsig#';
	private $URLCanonMeth = 'http://www.w3.org/TR/2001/REC-xml-c14n-20010315';
	private $URLSigMeth = 'http://www.w3.org/2000/09/xmldsig#rsa-sha1';
	private $URLTransfMeth_1 = 'http://www.w3.org/2000/09/xmldsig#enveloped-signature';
	private $URLTransfMeth_2 = 'http://www.w3.org/TR/2001/REC-xml-c14n-20010315';
	private $URLDigestMeth = 'http://www.w3.org/2000/09/xmldsig#sha1';
	private $URLPortal = 'http://www.portalfiscal.inf.br/nfe';

	public    $erros = array();
	public    $xml = '';
	public    $dom; //DOMDocument
	protected $priKEY = '';
	protected $pubKEY = '';
	protected $certKEY = '';
	private   $infRps = ''; //DOMNode

	// Arrays
	private $rps	   = array();
	private $infrps	   = array();
	private $identrps  = array();
	private $serv_vlrs = array();
	private $serv_ativ = array();
	private $prest	   = array();
	private $tomador   = array();
	private $contato   = array();

	public function __construct($aConfig = '',$formatOutput = true, $preserveWhiteSpace = false)
	{
        if (is_array($aConfig)) {
            $this->tpAmb=$aConfig['ambiente'];
            $this->empName=$aConfig['empresa'];
            $this->siglaUF=$aConfig['UF'];
            $this->cUF=$this->cUFlist[$aConfig['UF']];
            $this->cnpj=$aConfig['cnpj'];
            $this->certName=$aConfig['certName'];
            $this->certificName=$aConfig['certificName'];
            $this->keyPass=$aConfig['keyPass'];
            $this->passPhrase=$aConfig['passPhrase'];
            $this->arqDir = $aConfig['arquivosDir'];
            $this->xmlURLfile = $aConfig['arquivoURLxml'];
            $this->modelo = substr($this->xmlURLfile, -6, 2);
            $this->URLbase = $aConfig['baseurl'];
            if (isset($aConfig['certsDir'])) {
                $this->certsDir =  $aConfig['certsDir'];
            }
        }		
        
        $this->certificado = $this->certsDir.$this->certificName;
        $this->priKEY 	  = $this->certsDir.$this->cnpj.'_priKEY.pem';
        $this->pubKEY      = $this->certsDir.$this->cnpj.'_pubKEY.pem';
        $this->certKEY     = $this->certsDir.$this->cnpj.'_certKEY.pem';
        $this->pfxCert     = $this->certsDir.$this->certName;
/*        
        
        
		$this->certsDir = PATH_ROOT.'webservices/NfePhp/certs/';
		$this->certName = PATH_ROOT.'webservices/NfePhp/certificado/cpn.cer';
		$this->pfxCert  = PATH_ROOT.'webservices/NfePhp/certs/cpn.pfx';
		$this->priKEY   = PATH_ROOT.'webservices/NfePhp/certs/12345678901234_priKEY.pem';
		$this->pubKEY   = PATH_ROOT.'webservices/NfePhp/certs/12345678901234_pubKEY.pem';
		$this->certKEY  = PATH_ROOT.'webservices/NfePhp/certs/12345678901234_certKEY.pem';
*/	
	}

	public function getXML()
	{
		return $this->xml;
	}

	public function montaNFSe($rps)
	{
		$dom = new DOMDocument();
		$dom->formatOutput = true;
		$dom->preserveWhiteSpace = false;

		$Rps=$dom->createElement("Rps");
		$i = 0;

		$codmunic = $rps['Rps']['codmunic'];
		if ($codmunic == '4106902') {
			$idxml = 'id';
		}
		if ($codmunic == '4125506') {
			$idxml = 'Id';
		}

		foreach ($rps['Identificacaorps'] as $key=>$infrps) {
			     
			$i++;
			$infoRps = $dom->createElement("InfRps");
			$infoRps->setAttribute($idxml, $i);

			// Identifica��o
			$IdentificacaoRps = $dom->createElement("IdentificacaoRps");
			$Numero= $dom->createElement("Numero",$infrps['rps']['numero']);
			$Serie= $dom->createElement("Serie",$infrps['rps']['serie']);
			$Tipo= $dom->createElement("Tipo",$infrps['rps']['tipo']);
			$IdentificacaoRps->appendChild($Numero);
			$IdentificacaoRps->appendChild($Serie);
			$IdentificacaoRps->appendChild($Tipo);
			$infoRps->appendChild($IdentificacaoRps);

			$infoRps->appendChild($dom->createElement("DataEmissao",$infrps['identrps']['dtemi']));
			$infoRps->appendChild($dom->createElement("NaturezaOperacao",$infrps['identrps']['natureza']));
			$infoRps->appendChild($dom->createElement("RegimeEspecialTributacao",$infrps['identrps']['regime']));
			$infoRps->appendChild($dom->createElement("OptanteSimplesNacional",$infrps['identrps']['snacional']));
			$infoRps->appendChild($dom->createElement("IncentivadorCultural",$infrps['identrps']['cultura']));
			$infoRps->appendChild($dom->createElement("Status",$infrps['identrps']['status']));

			$Servico= $dom->createElement("Servico");
			$Valores=$dom->createElement("Valores");

			$ValorServicos=$dom->createElement("ValorServicos",$infrps['serv_vlrs']['valorservicos']);
			$ValorDeducoes=$dom->createElement("ValorDeducoes",$infrps['serv_vlrs']['valordeducoes']);
			$ValorPis=$dom->createElement("ValorPis",$infrps['serv_vlrs']['valorpis']);
			$ValorInss=$dom->createElement("ValorInss",$infrps['serv_vlrs']['valorinss']);
			$ValorCofins=$dom->createElement("ValorCofins",$infrps['serv_vlrs']['valorcofins']);
			$ValorIr=$dom->createElement("ValorIr",$infrps['serv_vlrs']['valorir']);
			$ValorCsll=$dom->createElement("ValorCsll",$infrps['serv_vlrs']['valorcsll']);
			$IssRetido=$dom->createElement("IssRetido",$infrps['serv_vlrs']['issretido']);
			$ValorIss=$dom->createElement("ValorIss",$infrps['serv_vlrs']['valoriss']);

			$ValorIssRetido=$dom->createElement("ValorIssRetido",$infrps['serv_vlrs']['valoriss']);

			$OutrasRetencoes=$dom->createElement("OutrasRetencoes",$infrps['serv_vlrs']['outrasretencoes']);

			$BaseCalculo=$dom->createElement("BaseCalculo",$infrps['serv_vlrs']['basecalculo']);
			$Aliquota=$dom->createElement("Aliquota",$infrps['serv_vlrs']['aliquota']);
			$ValorLiquidoNfse=$dom->createElement("ValorLiquidoNfse",$infrps['serv_vlrs']['valorliquidonfse']);

			$DescontoIncondicionado=$dom->createElement("DescontoIncondicionado",$infrps['serv_vlrs']['incondicionado']);
			$DescontoCondicionado=$dom->createElement("DescontoCondicionado",$infrps['serv_vlrs']['condicionado']);

			$Valores->appendChild($ValorServicos);
			$Valores->appendChild($ValorDeducoes);
/*			$Valores->appendChild($ValorPis);
			$Valores->appendChild($ValorInss);
			$Valores->appendChild($ValorCofins);
			$Valores->appendChild($ValorIr);
			$Valores->appendChild($ValorCsll);
*/			$Valores->appendChild($IssRetido);
			$Valores->appendChild($ValorIss);
			$Valores->appendChild($ValorIssRetido);
			$Valores->appendChild($OutrasRetencoes);
/*			$Valores->appendChild($DescontoIncondicionado);
			$Valores->appendChild($DescontoCondicionado);
*/			$Valores->appendChild($BaseCalculo);
			$Valores->appendChild($Aliquota);
			$Valores->appendChild($ValorLiquidoNfse);

			// Detalhes do serviço
			$ItemListaServico=$dom->createElement("ItemListaServico",trim($infrps['serv_ativ']['itemlistaservico']));
			$CodigoTributacaoMunicipio=$dom->createElement("CodigoTributacaoMunicipio",trim($infrps['serv_ativ']['atividade']));
			$Discriminacao=$dom->createElement("Discriminacao",trim($infrps['serv_ativ']['discr']));
			$CodigoMunicipio=$dom->createElement("CodigoMunicipio",$infrps['serv_ativ']['codmun']);

			$Servico->appendChild($Valores);
			$Servico->appendChild($ItemListaServico);
			$Servico->appendChild($CodigoTributacaoMunicipio);
			$Servico->appendChild($Discriminacao);
			$Servico->appendChild($CodigoMunicipio);
			$infoRps->appendChild($Servico);

			$Prestador=$dom->createElement("Prestador");
			$Cnpj=$dom->createElement("Cnpj",$infrps['prest']['cnpj']);
			$InscricaoMunicipal=$dom->createElement("InscricaoMunicipal",$infrps['prest']['inscrmun']);
			$Prestador->appendChild($Cnpj);
			$Prestador->appendChild($InscricaoMunicipal);

			$Tomador=$dom->createElement("Tomador");
			$IdentificacaoTomador=$dom->createElement("IdentificacaoTomador");
			$CpfCnpj=$dom->createElement("CpfCnpj");
			$TomadorCpf=$dom->createElement("Cpf",$infrps['tomador']['cpf']);
			$TomadorCnpj=$dom->createElement("Cnpj",$infrps['tomador']['cnpj']);
			if ($infrps['tomador']['cpfcnpj'] == '1'){
				$CpfCnpj->appendChild($TomadorCpf);
			} else {
				$CpfCnpj->appendChild($TomadorCnpj);
			}
			$IdentificacaoTomador->appendChild($CpfCnpj);
			$RazaoSocial=$dom->createElement("RazaoSocial",$infrps['tomador']['nome']);
			$EEndereco=$dom->createElement("Endereco");
			$Endereco=$dom->createElement("Endereco",$infrps['tomador']['end_lograd']);
			$Numero=$dom->createElement("Numero",$infrps['tomador']['end_numero']);
			$Bairro=$dom->createElement("Bairro",$infrps['tomador']['end_bairro']);
			$CodigoMunicipio=$dom->createElement("CodigoMunicipio",$infrps['tomador']['end_codmun']);
			$Uf=$dom->createElement("Uf",$infrps['tomador']['end_uf']);
			$Cep=$dom->createElement("Cep",$infrps['tomador']['end_cep']);
			$EEndereco->appendChild($Endereco);
			$EEndereco->appendChild($Numero);
			$EEndereco->appendChild($Bairro);
			$EEndereco->appendChild($CodigoMunicipio);
			$EEndereco->appendChild($Uf);
			$EEndereco->appendChild($Cep);

			$Tomador->appendChild($IdentificacaoTomador);
			$Tomador->appendChild($RazaoSocial);
			$Tomador->appendChild($EEndereco);

			if ($infrps['contato']['email'] != '') {
				$Contato=$dom->createElement("Contato");
				$Fone=$dom->createElement("Telefone",$infrps['contato']['telefone']);
				$Email=$dom->createElement("Email",$infrps['contato']['email']);
				$Contato->appendChild($Fone);
				$Contato->appendChild($Email);
				$Tomador->appendChild($Contato);
			}
			/*
			$Ccivil=$dom->createElement("ContrucaoCivil");
			$CodObra=$dom->createElement("CodigoObra", $infrps['obra']['codobra']);
			$Art=$dom->createElement("Art",$infrps['obra']['art']);
			$Ccivil->appendChild($CodObra);
			$Ccivil->appendChild($Art);*/
			
			$infoRps->appendChild($Prestador);
			$infoRps->appendChild($Tomador);
			//$infoRps->appendChild($Ccivil);

			$Rps->appendChild($infoRps);

		}

		
		//jurair.silva@caixa.gov.br
		//leonardo.

		if ($codmunic == '4106902') {
			$ListaRps=$dom->createElement("ListaRps");
			$ListaRps->appendChild($Rps);
			$LoteRps=$dom->createElement("LoteRps");
			$LoteRps->setAttribute($idxml, '1');

			$NumeroLote=$dom->createElement("NumeroLote",$rps['Rps']['id_lote']);

			$QuantidadeRps=$dom->createElement("QuantidadeRps",$rps['Rps']['qtde_rps']);

			$Cnpj=$dom->createElement("Cnpj",$rps['Rps']['cnpj_envio']);

			$InscricaoMunicipal=$dom->createElement("InscricaoMunicipal",9999);

			$EnviarLoteRpsEnvio=$dom->createElement("EnviarLoteRpsEnvio");
			$EnviarLoteRpsEnvio->setAttribute("xmlns", "http://isscuritiba.curitiba.pr.gov.br/iss/nfse.xsd");
			$EnviarLoteRpsEnvio->setAttribute("xmlns:xsi", "http://www.w3.org/2001/XMLSchema-instance");
			$EnviarLoteRpsEnvio->setAttribute("xmlns:schemaLocation", "http://isscuritiba.curitiba.pr.gov.br/iss/nfse.xsd");
		}

		if ($codmunic == '4125506') {
			$ListaRps=$dom->createElement("ListaRps");
			$ListaRps->setAttribute("xmlns", "http://nfe.sjp.pr.gov.br/tipos_v03.xsd");
			
			
			$ListaRps->appendChild($Rps);

			$LoteRps=$dom->createElement("LoteRps");
			$LoteRps->setAttribute($idxml, 1);

			$NumeroLote=$dom->createElement("NumeroLote",$rps['Rps']['id_lote']);
			$NumeroLote->setAttribute("xmlns", "http://nfe.sjp.pr.gov.br/tipos_v03.xsd");

			$Cnpj=$dom->createElement("Cnpj",$rps['Rps']['cnpj_envio']);
			$Cnpj->setAttribute("xmlns", "http://nfe.sjp.pr.gov.br/tipos_v03.xsd");

			$InscricaoMunicipal=$dom->createElement("InscricaoMunicipal",$rps['Rps']['im_envio']);
			$InscricaoMunicipal->setAttribute("xmlns", "http://nfe.sjp.pr.gov.br/tipos_v03.xsd");

			$QuantidadeRps=$dom->createElement("QuantidadeRps",$rps['Rps']['qtde_rps']);
			$QuantidadeRps->setAttribute("xmlns", "http://nfe.sjp.pr.gov.br/tipos_v03.xsd");

			$EnviarLoteRpsEnvio=$dom->createElement("EnviarLoteRpsEnvio");
			$EnviarLoteRpsEnvio->setAttribute("xmlns", "http://nfe.sjp.pr.gov.br/servico_enviar_lote_rps_envio_v03.xsd");
		}

		$LoteRps->appendChild($NumeroLote);
		$LoteRps->appendChild($Cnpj);
		$LoteRps->appendChild($InscricaoMunicipal);
		$LoteRps->appendChild($QuantidadeRps);
		$LoteRps->appendChild($ListaRps);
		$EnviarLoteRpsEnvio->appendChild($LoteRps);

		$dom->appendChild($EnviarLoteRpsEnvio);
		$this->xml= $dom->saveXML();
		if (!$this->xml) return false; else return true;
	}
	
	
	public function montaNFSe_Pinhais($rps,$aInfRps)
	{

		$dom = new DOMDocument('1.0', 'UTF-8');
		$dom->formatOutput = true;
		$dom->preserveWhiteSpace = false;

		$i = 0;
		
		foreach ($aInfRps as $key=>$infrps) {
			$i++;
			$Rps = $dom->createElement("rps");
			$Numero= $dom->createElement("nro_recibo_provisorio",$infrps['identrps']['numero']);
			$Serie= $dom->createElement("serie_recibo_provisorio",$infrps['identrps']['serie']);
			$dataemis = $dom->createElement("data_emissao_recibo_provisorio",$infrps['identrps']['dtemi']);
			$horaemis = $dom->createElement("hora_emissao_recibo_provisorio",$infrps['identrps']['hremi']);
			$Rps->appendChild($Numero);
			$Rps->appendChild($Serie);
			$Rps->appendChild($dataemis);
			$Rps->appendChild($horaemis);

			$Servico= $dom->createElement("nf");
			$VlrServico=$dom->createElement("valor_total",$infrps['serv_vlrs']['vlr_servico']);
			$ValorDeducoes=$dom->createElement("valor_desconto",$infrps['serv_vlrs']['vlr_deducao']);
			$ValorIr=$dom->createElement("valor_ir",$infrps['serv_vlrs']['vlr_ir']);
			$ValorInss=$dom->createElement("valor_inss",$infrps['serv_vlrs']['vlr_inss']);
			$Valor_contribuicao_social=$dom->createElement("valor_contribuicao_social",$infrps['serv_vlrs']['vlr_contr_social']);
			$Valor_rps=$dom->createElement("valor_rps",$infrps['serv_vlrs']['vlr_rps']);
			$ValorPis=$dom->createElement("valor_pis",$infrps['serv_vlrs']['vlr_pis']);
			$ValorCofins=$dom->createElement("valor_cofins",$infrps['serv_vlrs']['vlr_cofins']);
			$observacao=$dom->createElement("observacao",$infrps['serv_vlrs']['observacao']);

			$Servico->appendChild($VlrServico);
			$Servico->appendChild($ValorDeducoes);
			$Servico->appendChild($ValorIr);
			$Servico->appendChild($ValorInss);
			$Servico->appendChild($Valor_contribuicao_social);
			$Servico->appendChild($Valor_rps);
			$Servico->appendChild($ValorPis);
			$Servico->appendChild($ValorCofins);
			$Servico->appendChild($observacao);

			$Prestador=$dom->createElement("prestador");
			$Cnpj=$dom->createElement("cpfcnpj",$infrps['prest']['cnpj']);
			$InscricaoMunicipal=$dom->createElement("cidade",$infrps['prest']['inscrmun']);
			$Prestador->appendChild($Cnpj);
			$Prestador->appendChild($InscricaoMunicipal);


			$Tomador=$dom->createElement("tomador");
			$TomadorTipo=$dom->createElement("tipo",$infrps['tomador']['tipo']);
			$TomadorIe=$dom->createElement("ie",$infrps['tomador']['ie']);
			$TomadorCpfCnpj=$dom->createElement("cpfcnpj",$infrps['tomador']['cpfcnpj']);
			$TomadorNome=$dom->createElement("nome_razao_social",$infrps['tomador']['nome_razao']);
			$TomadorFantasia=$dom->createElement("sobrenome_nome_fantasia",$infrps['tomador']['fantasia']);
			$TomadorLograd=$dom->createElement("logradouro",$infrps['tomador']['logradouro']);
			$TomadorEmail=$dom->createElement("email",$infrps['tomador']['email']);
			$TomadorNroRes=$dom->createElement("numero_residencia",$infrps['tomador']['numero_residencia']);
			$TomadorCompl=$dom->createElement("complemento",$infrps['tomador']['complemento']);
			$TomadorPtoref=$dom->createElement("ponto_referencia",$infrps['tomador']['ponto_referencia']);
			$TomadorBairro=$dom->createElement("bairro",$infrps['tomador']['bairro']);
			$TomadorCidade=$dom->createElement("cidade",$infrps['tomador']['cidade']);
			$TomadorCep=$dom->createElement("cep",$infrps['tomador']['cep']);
			$TomadorDDDCom=$dom->createElement("ddd_fone_comercial",$infrps['tomador']['ddd_fone_comercial']);
			$TomadorFoneCom=$dom->createElement("fone_comercial",$infrps['tomador']['fone_comercial']);
			$TomadorDDDRes=$dom->createElement("ddd_fone_residencial",$infrps['tomador']['ddd_fone_residencial']);
			$TomadorFoneRes=$dom->createElement("fone_residencial",$infrps['tomador']['fone_residencial']);
			$TomadorDDDFax=$dom->createElement("ddd_fax",$infrps['tomador']['ddd_fax']);
			$TomadorFoneFax=$dom->createElement("fone_fax",$infrps['tomador']['fone_fax']);
			$Tomador->appendChild($TomadorTipo);
			$Tomador->appendChild($TomadorIe);
			$Tomador->appendChild($TomadorCpfCnpj);
			$Tomador->appendChild($TomadorNome);
			$Tomador->appendChild($TomadorFantasia);
			$Tomador->appendChild($TomadorLograd);
			$Tomador->appendChild($TomadorEmail);
			$Tomador->appendChild($TomadorNroRes);
			$Tomador->appendChild($TomadorCompl);
			$Tomador->appendChild($TomadorPtoref);
			$Tomador->appendChild($TomadorBairro);
			$Tomador->appendChild($TomadorCidade);
			$Tomador->appendChild($TomadorCep);
			$Tomador->appendChild($TomadorDDDCom);
			$Tomador->appendChild($TomadorFoneCom);
			$Tomador->appendChild($TomadorDDDRes);
			$Tomador->appendChild($TomadorFoneRes);
			$Tomador->appendChild($TomadorDDDFax);
			$Tomador->appendChild($TomadorFoneFax);

			$itens = $dom->createElement("itens");
			$lista =$dom->createElement("lista");

			$codlocprest=$dom->createElement("codigo_local_prestacao_servico",$infrps['serv_lista']['codmun']);
			$ItemListaServico=$dom->createElement("codigo_item_lista_servico",trim($infrps['serv_lista']['itemlistaservico']));
			$Discriminacao=$dom->createElement("descritivo",trim($infrps['serv_lista']['discr']));
			$Aliquota=$dom->createElement("aliquota_item_lista_servico",$infrps['serv_lista']['aliquota']);
			$SitTrib=$dom->createElement("situacao_tributaria",$infrps['serv_lista']['sittrib']);
			$ValorTrib=$dom->createElement("valor_tributavel",$infrps['serv_lista']['vlrtrib']);
			$Valordeducao=$dom->createElement("valor_deducao",$infrps['serv_lista']['vlrdeducao']);
			$ValorIssrf=$dom->createElement("valor_issrf",$infrps['serv_lista']['vlrissret']);
			$TribMunicPrest=$dom->createElement("tributao_municipio_prestador",$infrps['serv_lista']['tribmunic']);
			$UnidCodigo=$dom->createElement("unidade_codigo",$infrps['serv_lista']['unidcodigo']);
			$UnidQtde=$dom->createElement("unidade_quantidade",$infrps['serv_lista']['unidqtde']);
			$UnidVlrUnit=$dom->createElement("unidade_valor_unitario",$infrps['serv_lista']['unidvlruni']);
			$lista->appendChild($codlocprest);
			$lista->appendChild($ItemListaServico);
			$lista->appendChild($Discriminacao);
			$lista->appendChild($Aliquota);
			$lista->appendChild($SitTrib);
			$lista->appendChild($ValorTrib);
			$lista->appendChild($Valordeducao);
			$lista->appendChild($ValorIssrf);
			$lista->appendChild($TribMunicPrest);
			$lista->appendChild($UnidCodigo);
			$lista->appendChild($UnidQtde);
			$lista->appendChild($UnidVlrUnit);
			$itens->appendChild($lista);
			
			$Ccivil=$dom->createElement("ContrucaoCivil");
			$CodObra=$dom->createElement("CodigoObra", $infrps['obra']['codobra']);
			$Art=$dom->createElement("Art",$infrps['obra']['art']);
			$Ccivil->appendChild($CodObra);
			$Ccivil->appendChild($Art);
			
		}

		$LoteRps=$dom->createElement("nfse");
		$LoteRps->appendChild($Rps);
		
		$LoteRps->appendChild($Servico);
		$LoteRps->appendChild($Prestador);
		$LoteRps->appendChild($Tomador);
		$LoteRps->appendChild($itens);
		$LoteRps->appendChild($Ccivil);
		
		$LoteRps->setAttribute('id', 'nota');
		
		$dom->appendChild($LoteRps);
		$this->xml= $dom->saveXML();
		if (!$this->xml) return false; else  return true;
	}
	

	public function pLoadCerts($testaVal = true)
	{
		try {
			if (!function_exists('openssl_pkcs12_read')) {
		echo		$msg = "Função não existente: openssl_pkcs12_read!!";
				throw new nfephpException($msg);
			}
			//o path foram carregados nas variaveis da classe
			if ($this->certName == '') {
		echo		$msg = "Um certificado deve ser passado para a classe pelo arquivo de configuração!! ";
				throw new nfephpException($msg);
			}

			//verifica se o arquivo existe
			if (!file_exists($this->pfxCert)) { 
			echo	$msg = "Certificado não encontrado!! $this->pfxCert";
				throw new nfephpException($msg);
			}

			//carrega o certificado em um string
			$pfxContent = file_get_contents($this->pfxCert);
			
			$this->keyPass = 'cpn#2010';
		
			
			//carrega os certificados e chaves para um array denominado $x509certdata
			if (!openssl_pkcs12_read($pfxContent, $x509certdata, $this->keyPass)) {
				$msg = "O certificado não pode ser lido!! Provavelmente corrompido ou com formato inválido!!";
				throw new nfephpException($msg);
			}
			
			

			if ($testaVal) {
				//verifica sua validade
				if (!$aResp = $this->pValidCerts($x509certdata['cert'])) {
					$msg = "Certificado invalido!! - ".$aResp['error'];
					throw new nfephpException($msg);
				}
			}

			//aqui verifica se existem as chaves em formato PEM
			//se existirem pega a data da validade dos arquivos PEM
			//e compara com a data de validade do PFX
			//caso a data de validade do PFX for maior que a data do PEM
			//deleta dos arquivos PEM, recria e prossegue
			$flagNovo = false;
			if (file_exists($this->pubKEY)) {
				$cert = file_get_contents($this->pubKEY);
				if (!$data = openssl_x509_read($cert)) {
					//arquivo não pode ser lido como um certificado
					//então deletar
					$flagNovo = true;
				} else {
					//pegar a data de validade do mesmo
					$cert_data = openssl_x509_parse($data);
					// reformata a data de validade;
					$ano = substr($cert_data['validTo'], 0, 2);
					$mes = substr($cert_data['validTo'], 2, 2);
					$dia = substr($cert_data['validTo'], 4, 2);
					//obtem o timeestamp da data de validade do certificado
					$dValPubKey = gmmktime(0, 0, 0, $mes, $dia, $ano);
					//compara esse timestamp com o do pfx que foi carregado
					if ($dValPubKey < $this->pfxTimestamp) {
						//o arquivo PEM é de um certificado anterior
						//então apagar os arquivos PEM
						$flagNovo = true;
					}//fim teste timestamp
				}//fim read pubkey
			} else {
				//arquivo não localizado
				$flagNovo = true;
			}//fim if file pubkey
			//verificar a chave privada em PEM
			if (!file_exists($this->priKEY)) {
				//arquivo não encontrado
				$flagNovo = true;
			}
			//verificar o certificado em PEM
			if (!file_exists($this->certKEY)) {
				//arquivo não encontrado
				$flagNovo = true;
			}

			//      echo "<hr> flag ".$flagNovo;
			//criar novos arquivos PEM
			if ($flagNovo) {
				if (file_exists($this->pubKEY)) {
					unlink($this->pubKEY);
				}
				if (file_exists($this->priKEY)) {
					unlink($this->priKEY);
				}
				if (file_exists($this->certKEY)) {
					unlink($this->certKEY);
				}
				//recriar os arquivos pem com o arquivo pfx
				if (! file_put_contents($this->priKEY, $x509certdata['pkey'])) {
					$msg = "Impossivel gravar no diretório!!! Permissão negada!!";
					throw new nfephpException($msg);
				}
				//acrescenta a cadeia completa dos certificados se estiverem
				//inclusas no arquivo pfx, caso contrario deverão ser inclusas
				//manualmente para acessar os serviços em GO
				$chain = '';
				if (isset($x509certdata['extracerts'])) {
					$aCer = $x509certdata['extracerts'];
					foreach ($aCer as $cert) {
						$chain .= "$cert";
					}
				}
				file_put_contents($this->pubKEY, $x509certdata['cert']);
				file_put_contents($this->certKEY, $x509certdata['cert'] . $chain);
			}
		} catch (nfephpException $e) {
			$this->pSetError($e->getMessage());
			if ($this->exceptions) {
				throw $e;
			}
			return false;
		}
		return true;
	} //fim loadCerts

	/**
     * pValidCerts
     * Validaçao do cerificado digital, além de indicar
     * a validade, este metodo carrega a propriedade
     * mesesToexpire da classe que indica o numero de
     * meses que faltam para expirar a validade do mesmo
     * esta informacao pode ser utilizada para a gestao dos
     * certificados de forma a garantir que sempre estejam validos
     *
     * @name pValidCerts
     * @param    string  $cert Certificado digital no formato pem
     * @param    array   $aRetorno variavel passa por referência Array com os dados do certificado
     * @return  boolean true ou false
     */
	protected function pValidCerts($cert = '', &$aRetorno = '')
	{
		try {
			if ($cert == '') {
				$msg = "O certificado é um parâmetro obrigatorio.";
				throw new nfephpException($msg);
			}
			if (!$data = openssl_x509_read($cert)) {
				$msg = "O certificado não pode ser lido pelo SSL - $cert .";
				throw new nfephpException($msg);
			}
			$flagOK = true;
			$errorMsg = "";
			$cert_data = openssl_x509_parse($data);
			// reformata a data de validade;
			$ano = substr($cert_data['validTo'], 0, 2);
			$mes = substr($cert_data['validTo'], 2, 2);
			$dia = substr($cert_data['validTo'], 4, 2);
			//obtem o timestamp da data de validade do certificado
			$dValid = gmmktime(0, 0, 0, $mes, $dia, $ano);
			// obtem o timestamp da data de hoje
			$dHoje = gmmktime(0, 0, 0, date("m"), date("d"), date("Y"));
			// compara a data de validade com a data atual
			if ($dValid < $dHoje) {
				$flagOK = false;
				$errorMsg = "A Validade do certificado expirou em [" .$dia.'/'.$mes.'/'.$ano."]";
			} else {
				$flagOK = $flagOK && true;
			}
			//diferença em segundos entre os timestamp
			$diferenca = $dValid - $dHoje;
			// convertendo para dias
			$diferenca = round($diferenca /(60*60*24), 0);
			//carregando a propriedade
			$daysToExpire = $diferenca;
			// convertendo para meses e carregando a propriedade
			$numM = ($ano * 12 + $mes);
			$numN = (date("y") * 12 + date("m"));
			//numero de meses até o certificado expirar
			$monthsToExpire = ($numM-$numN);
			$this->certMonthsToExpire = $monthsToExpire;
			$this->certDaysToExpire = $daysToExpire;
			$this->pfxTimestamp = $dValid;
			$aRetorno = array('status'=>$flagOK,'error'=>$errorMsg,'meses'=>$monthsToExpire,'dias'=>$daysToExpire);
		} catch (nfephpException $e) {
			$this->pSetError($e->getMessage());
			if ($this->exceptions) {
				throw $e;
			}
			return false;
		}
		return true;
	} //fim validCerts

	protected function pCleanCerts($certFile)
	{
		try {
			//inicializa variavel
			$data = '';
			//carregar a chave publica do arquivo pem
			if (!$pubKey = file_get_contents($certFile)) {
				$msg = "Arquivo não encontrado - $certFile .";
				throw new nfephpException($msg);
			}
			//carrega o certificado em um array usando o LF como referencia
			$arCert = explode("\n", $pubKey);
			foreach ($arCert as $curData) {
				//remove a tag de inicio e fim do certificado
				if (strncmp($curData, '-----BEGIN CERTIFICATE', 22) != 0
				&& strncmp($curData, '-----END CERTIFICATE', 20) != 0) {
					//carrega o resultado numa string
					$data .= trim($curData);
				}
			}
		} catch (nfephpException $e) {
			$this->pSetError($e->getMessage());
			if ($this->exceptions) {
				throw $e;
			}
			return false;
		}
		
		return $data;
	}//fim cleanCerts



	public function signXML($docxml, $idxml, $tagid=''){
		
		
		if ( $tagid == '' ){
			$this->errMsg = "Uma tag deve ser indicada para que seja assinada!!\n";
			$this->errStatus = true;
			return false;
		}
		if ( $docxml == '' ){
			$this->errMsg = "Um xml deve ser passado para que seja assinado!!\n";
			$this->errStatus = true;
			return false;
		}

		$resp = $this->pLoadCerts(true);
		if (!$resp) {
			$this->errMsg = "Certificados Informados Invalidos ou N�o Informados - Verifique!!\n";
			$this->errStatus = "Certificados Informados Invalidos ou N�o Informados - Verifique!!\n";
			return false;
		}
		// obter o chave privada para assinatura
		$fp = fopen($this->priKEY, "r");
		$priv_key = fread($fp, 8192);
		fclose($fp);
		$pkeyid = openssl_get_privatekey($priv_key);
		// limpeza do xml com a retirada dos CR, LF e TAB
		$order = array("\r\n", "\n", "\r", "\t");
		$replace = '';
		$docxml = str_replace($order, $replace, $docxml);
		// carrega o documento no DOM
		$xmldoc = new DOMDocument();
		$xmldoc->preservWhiteSpace = false; //elimina espaços em branco
		$xmldoc->formatOutput = false;
		// muito importante deixar ativadas as opçoes para limpar os espacos em branco
		// e as tags vazias
		$xmldoc->loadXML($docxml,LIBXML_NOBLANKS | LIBXML_NOEMPTYTAG);
		$root = $xmldoc->documentElement;
		//extrair a tag com os dados a serem assinados
		$node = $xmldoc->getElementsByTagName($tagid)->item(0);
		$id = trim($node->getAttribute($idxml));
		$idnome = preg_replace('/[^0-9]/','', $id);
		//extrai os dados da tag para uma string
		$dados = $node->C14N(false,false,NULL,NULL);
		//calcular o hash dos dados
		$hashValue = hash('sha1',$dados,true);
		//converte o valor para base64 para serem colocados no xml
		$digValue = base64_encode($hashValue);
		//monta a tag da assinatura digital
		$Signature = $xmldoc->createElementNS($this->URLdsig,'Signature');
		$root->appendChild($Signature);
		$SignedInfo = $xmldoc->createElement('SignedInfo');
		$Signature->appendChild($SignedInfo);
		//Cannocalization
		$newNode = $xmldoc->createElement('CanonicalizationMethod');
		$SignedInfo->appendChild($newNode);
		$newNode->setAttribute('Algorithm', $this->URLCanonMeth);
		//SignatureMethod
		$newNode = $xmldoc->createElement('SignatureMethod');
		$SignedInfo->appendChild($newNode);
		$newNode->setAttribute('Algorithm', $this->URLSigMeth);
		//Reference
		$Reference = $xmldoc->createElement('Reference');
		$SignedInfo->appendChild($Reference);
		$Reference->setAttribute('URI', '#'.$id);
		//Transforms
		$Transforms = $xmldoc->createElement('Transforms');
		$Reference->appendChild($Transforms);
		//Transform
		$newNode = $xmldoc->createElement('Transform');
		$Transforms->appendChild($newNode);
		$newNode->setAttribute('Algorithm', $this->URLTransfMeth_1);


		//Transform
		$newNode = $xmldoc->createElement('Transform');
		$Transforms->appendChild($newNode);
		$newNode->setAttribute('Algorithm', $this->URLTransfMeth_2);
		//DigestMethod
		$newNode = $xmldoc->createElement('DigestMethod');
		$Reference->appendChild($newNode);
		$newNode->setAttribute('Algorithm', $this->URLDigestMeth);
		//DigestValue
		$newNode = $xmldoc->createElement('DigestValue',$digValue);
		$Reference->appendChild($newNode);
		// extrai os dados a serem assinados para uma string
		$dados = $SignedInfo->C14N(false,false,NULL,NULL);
		//inicializa a variavel que irá receber a assinatura
		$signature = '';
		//executa a assinatura digital usando o resource da chave privada
		$resp = openssl_sign($dados,$signature,$pkeyid);
		//codifica assinatura para o padrao base64
		$signatureValue = base64_encode($signature);
		//SignatureValue
		$newNode = $xmldoc->createElement('SignatureValue',$signatureValue);

		$Signature->appendChild($newNode);
		//KeyInfo


		$KeyInfo = $xmldoc->createElement('KeyInfo');
		$Signature->appendChild($KeyInfo);

		//X509Data
		$X509Data = $xmldoc->createElement('X509Data');

		$KeyInfo->appendChild($X509Data);

		//carrega o certificado sem as tags de inicio e fim
		$cert = $this->pcleanCerts($this->pubKEY);
		//X509Certificate

		$newNode = $xmldoc->createElement('X509Certificate',$cert);
		$X509Data->appendChild($newNode);
		//grava na string o objeto DOM
		$docxml = $xmldoc->saveXML();
		// libera a memoria
		openssl_free_key($pkeyid);
		//retorna o documento assinado
		return $docxml;
	} //fim signXML

	public function NFSe_SJP($xml) {
		$urlservico = 'https://nfe.sjp.pr.gov.br/servicos/issOnline2/homologacao/ws/index.php';
		$servico = 'RecepcionarLoteRpsV3';
		$arg0 = '<ns2:cabecalho versao="3" xmlns:ns2="http://nfe.sjp.pr.gov.br/cabecalho_v03.xsd"><versaoDados>3</versaoDados></ns2:cabecalho>';

		$client = new nusoap_client($urlservico);
		$param = array('arg0' => $arg0,'arg1' => $xml);
		$resultado = $client->call($servico, $param);
		
/*		echo "<pre>sss";
		print_r ($resultado);
*/		
		return $resultado;
	}
	
	public function NFSe_CTBA($xml) {
		$urlservico = 'https://pilotoisscuritiba.curitiba.pr.gov.br/nfse_ws/nfsews.asmx?wsdl';
		$servico = 'RecepcionarLoteRps';
		$arg0 = '<ns2:cabecalho versao="3" xmlns:ns2="https://pilotoisscuritiba.curitiba.pr.gov.br/nfse_ws/nfsews.asmx"><versaoDados>3</versaoDados></ns2:cabecalho>';

		$client = new nusoap_client($urlservico);
		$param = array('arg0' => $arg0,'arg1' => $xml);
		$resultado = $client->call($servico, $param);
		return $resultado;
	}
	

	public function consultaRps($protocolo) {
		$sai=$this->__consultRps($this->cnpj,$this->IM,trim($protocolo));
		return $sai;
	} //fim consultaRps
	public function consultaSituacaoRps($protocolo) {
		$sai=$this->__consultSitRps($this->cnpj,$this->IM,trim($protocolo));
		//C�digo de situa��o de lote de RPS
		//1 � N�o Recebido
		//2 � N�o Processado
		//3 � Processado com Erro
		//4 � Processado com Sucesso
		$situacao = FALSE;
		if ($sai){
			$situacao = $sai['Situacao'];
		}
		return($situacao);
	} //fim consultaSituacaoRps
} //fim da classe NFSe




?>