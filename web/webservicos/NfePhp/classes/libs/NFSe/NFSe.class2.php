<?php
class MakeNFSe
{
	/**
     * erros
     * Matriz contendo os erros reportados pelas tags obrigatÃ³rias
     * e sem conteÃºdo
     * @var array
     */
	private $URLxsi = 'http://www.w3.org/2001/XMLSchema-instance';
	/**
     * URLxsd
     * InstÃ¢ncia do WebService
     * @var string
     */
	private $URLxsd = 'http://www.w3.org/2001/XMLSchema';
	/**
     * URLnfe
     * InstÃ¢ncia do WebService
     * @var string
     */
	private $URLnfe = 'http://www.portalfiscal.inf.br/nfe';
	/**
     * URLdsig
     * InstÃ¢ncia do WebService
     * @var string
     */
	private $URLdsig = 'http://www.w3.org/2000/09/xmldsig#';
	/**
     * URLCanonMeth
     * InstÃ¢ncia do WebService
     * @var string
     */
	private $URLCanonMeth = 'http://www.w3.org/TR/2001/REC-xml-c14n-20010315';
	/**
     * URLSigMeth
     * InstÃ¢ncia do WebService
     * @var string
     */
	private $URLSigMeth = 'http://www.w3.org/2000/09/xmldsig#rsa-sha1';
	/**
     * URLTransfMeth_1
     * InstÃ¢ncia do WebService
     * @var string
     */
	private $URLTransfMeth_1 = 'http://www.w3.org/2000/09/xmldsig#enveloped-signature';
	/**
     * URLTransfMeth_2
     * InstÃ¢ncia do WebService
     * @var string
     */
	private $URLTransfMeth_2 = 'http://www.w3.org/TR/2001/REC-xml-c14n-20010315';
	/**
     * URLDigestMeth
     * InstÃ¢ncia do WebService
     * @var string
     */
	private $URLDigestMeth = 'http://www.w3.org/2000/09/xmldsig#sha1';
	/**
     * URLPortal
     * InstÃ¢ncia do WebService
     * @var string
     */
	private $URLPortal = 'http://www.portalfiscal.inf.br/nfe';




	public $erros = array();
	/**
     * xml
     * String com o xml da NFe montado
     * @var string
     */
	public $xml = '';
	/**
     * dom
     * VariÃ¡vel onde serÃ¡ montado o xml da NFe
     * @var DOMDocument
     */
	public $dom; //DOMDocument


	/**
     * priKEY
     * Path completo para a chave privada em formato pem
     * @var string
     */
	protected $priKEY = '';

	/**
     * pubKEY
     * Path completo para a chave public em formato pem
     * @var string
     */
	protected $pubKEY = '';
	/**
     * certKEY
     * Path completo para o certificado (chave privada e publica) em formato pem
     * @var string
     */
	protected $certKEY = '';


	//propriedades privadas utilizadas internamente pela classe
	private $infRps = ''; //DOMNode

	// Arrays
	private $rps	   = array();
	private $infrps	   = array();
	private $identrps  = array();
	private $serv_vlrs = array();
	private $serv_ativ = array();
	private $prest	   = array();
	private $tomador   = array();
	private $contato   = array();

	/**
     * __contruct
     * FunÃ§Ã£o construtora cria um objeto DOMDocument
     * que serÃ¡ carregado com a NFe
     * 
     * @return none
     */
	public function __construct($formatOutput = true, $preserveWhiteSpace = false)
	{
		$this->certsDir = PATH_ROOT.'webservices/NfePhp/certificado/';
		$this->certName = PATH_ROOT.'webservices/NfePhp/certificado/certificado.cer';
		$this->pfxCert  = PATH_ROOT.'webservices/NfePhp/certificado/certificado.pfx';
		
		$this->priKEY = PATH_ROOT.'webservices/NfePhp/certificado/certificado_priKEY.pem';
		$this->pubKEY = PATH_ROOT.'webservices/NfePhp/certificado/certificado_pubKEY.pem';
		$this->certKEY = PATH_ROOT.'webservices/NfePhp/certificado/certificado_certKEY.pem';
		$this->keyPass = 'teste';
		
		$this->dom = new DOMDocument('1.0', 'UTF-8');
		$this->dom->formatOutput = $formatOutput;
		$this->dom->preserveWhiteSpace = $preserveWhiteSpace;
	}

	/**
     * getXML
     * retorna o xml da NFe que foi montado
     * @return string
     */
	public function getXML()
	{
		return $this->xml;
	}

	public function montaNFSe($rps,$aInfRps)
	{
		
		//cria o objeto DOM para o xml
		$dom = new DOMDocument('1.0', 'UTF-8');
		$dom->formatOutput = true;
		$dom->preserveWhiteSpace = false;

		$Rps=$dom->createElement("Rps");
		$i = 0;
		
		$codmunic = $rps['codmunic'];
		if ($codmunic == '4106902') {
			$idxml = 'id';
		}
		if ($codmunic == '4125506') {
			$idxml = 'Id';
		}
		
		foreach ($aInfRps as $key=>$infrps) {
			$i++;
			$infoRps = $dom->createElement("InfRps");
			$infoRps->setAttribute($idxml, $i);

			// Identificação
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
			$Valores->appendChild($IssRetido);
			$Valores->appendChild($ValorIss);
			$Valores->appendChild($ValorIssRetido);
			$Valores->appendChild($OutrasRetencoes);
			$Valores->appendChild($BaseCalculo);
			$Valores->appendChild($Aliquota);
			$Valores->appendChild($ValorLiquidoNfse);

			// Detalhes do serviÃ§o
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
			$infoRps->appendChild($Prestador);
			$infoRps->appendChild($Tomador);

			$Rps->appendChild($infoRps);

		}
		

		if ($codmunic == '4106902') {
			$ListaRps=$dom->createElement("ListaRps");
			$ListaRps->appendChild($Rps);
			$LoteRps=$dom->createElement("LoteRps");
			$LoteRps->setAttribute($idxml, '1');
			
			$NumeroLote=$dom->createElement("NumeroLote",$rps['id_lote']);
			
			$QuantidadeRps=$dom->createElement("QuantidadeRps",$rps['qtde_rps']);
			
			$Cnpj=$dom->createElement("Cnpj",$rps['cnpj_envio']);
			
			$InscricaoMunicipal=$dom->createElement("InscricaoMunicipal",9999);
			
			$EnviarLoteRpsEnvio=$dom->createElement("EnviarLoteRpsEnvio");
			$EnviarLoteRpsEnvio->setAttribute("xmlns", "https://pilotoisscuritiba.curitiba.pr.gov.br/nfse_ws/nfsews.asmx");
			$EnviarLoteRpsEnvio->setAttribute("xmlns:xsi", "http://www.w3.org/2001/XMLSchema-instance");
			$EnviarLoteRpsEnvio->setAttribute("xsi:schemaLocation", "https://pilotoisscuritiba.curitiba.pr.gov.br/nfse_ws/nfsews.asmx?WSDL");
		}
		
		if ($codmunic == '4125506') {
			$ListaRps=$dom->createElement("ListaRps");
			$ListaRps->setAttribute("xmlns", "http://nfe.sjp.pr.gov.br/tipos_v03.xsd");
			$ListaRps->appendChild($Rps);
	
			$LoteRps=$dom->createElement("LoteRps");
			$LoteRps->setAttribute($idxml, $rps['id_lote']);
			
			$NumeroLote=$dom->createElement("NumeroLote",$rps['id_lote']);
			$NumeroLote->setAttribute("xmlns", "http://nfe.sjp.pr.gov.br/tipos_v03.xsd");
			
			$Cnpj=$dom->createElement("Cnpj",$rps['cnpj_envio']);
			$Cnpj->setAttribute("xmlns", "http://nfe.sjp.pr.gov.br/tipos_v03.xsd");
			
			$InscricaoMunicipal=$dom->createElement("InscricaoMunicipal",$rps['im_envio']);
			$InscricaoMunicipal->setAttribute("xmlns", "http://nfe.sjp.pr.gov.br/tipos_v03.xsd");
			$QuantidadeRps=$dom->createElement("QuantidadeRps",$rps['qtde_rps']);
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
		
	    $chave = $rps['idlote'].$rps['cnpj_envio'].$rps['im_envio'].$rps['qtde_rps'];    
		$dir = 'processado/';
		$arquivo = $dir.$chave.'.xml';
		$f = fopen($arquivo, 'w');
		fwrite($f, $this->xml);
		fclose($f);
		return true;

	}
	
    public function pLoadCerts($testaVal = true)
    {
    /*	$pfxCert = $this->certsDir.$this->certName;
    	if (!$pfxCert)
    	echo "<hr>ffffTTTTTT ".$this->pfxCert;
    	echo "<hr>ffffTTTTTT ".$this->priKEY;
    	echo "<hr>ffffTTTTTT ".$this->pubKEY;
    	echo "<hr>ffffTTTTTT ".$this->certKEY;
    	echo "<hr>ffffTTTTTT ".$this->certName."\n";
    */
    	
        try {
            if (!function_exists('openssl_pkcs12_read')) {
                $msg = "FunÃ§Ã£o nÃ£o existente: openssl_pkcs12_read!!";
                throw new nfephpException($msg);
            }
            //o path foram carregados nas variaveis da classe
            if ($this->certName == '') {
                $msg = "Um certificado deve ser passado para a classe pelo arquivo de configuraÃ§Ã£o!! ";
                throw new nfephpException($msg);
            }
            
            //verifica se o arquivo existe
            if (!file_exists($this->pfxCert)) {
                $msg = "Certificado nÃ£o encontrado!! $this->pfxCert";
                throw new nfephpException($msg);
            }
            
            //carrega o certificado em um string
            $pfxContent = file_get_contents($this->pfxCert);
            //carrega os certificados e chaves para um array denominado $x509certdata
            if (!openssl_pkcs12_read($pfxContent, $x509certdata, $this->keyPass)) {
                $msg = "O certificado nÃ£o pode ser lido!! Provavelmente corrompido ou com formato invÃ¡lido!!";
                throw new nfephpException($msg);
            }
            
            
            
            
/*            if ($testaVal) {
                //verifica sua validade
                if (!$aResp = $this->pValidCerts($x509certdata['cert'])) {
                     $msg = "Certificado invalido!! - ".$aResp['error'];
                    throw new nfephpException($msg);
                }
            }*/
            
    //        echo "<hr>msg1: ";
            
            //aqui verifica se existem as chaves em formato PEM
            //se existirem pega a data da validade dos arquivos PEM
            //e compara com a data de validade do PFX
            //caso a data de validade do PFX for maior que a data do PEM
            //deleta dos arquivos PEM, recria e prossegue
            $flagNovo = false;
            if (file_exists($this->pubKEY)) {
                $cert = file_get_contents($this->pubKEY);
                if (!$data = openssl_x509_read($cert)) {
                    //arquivo nÃ£o pode ser lido como um certificado
                    //entÃ£o deletar
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
                        //o arquivo PEM Ã© de um certificado anterior
                        //entÃ£o apagar os arquivos PEM
                        $flagNovo = true;
                    }//fim teste timestamp
                }//fim read pubkey
            } else {
                //arquivo nÃ£o localizado
                $flagNovo = true;
            }//fim if file pubkey
            //verificar a chave privada em PEM
            if (!file_exists($this->priKEY)) {
                //arquivo nÃ£o encontrado
                $flagNovo = true;
            }
            //verificar o certificado em PEM
            if (!file_exists($this->certKEY)) {
                //arquivo nÃ£o encontrado
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
                    $msg = "Impossivel gravar no diretÃ³rio!!! PermissÃ£o negada!!";
                    throw new nfephpException($msg);
                }
                //acrescenta a cadeia completa dos certificados se estiverem
                //inclusas no arquivo pfx, caso contrario deverÃ£o ser inclusas
                //manualmente para acessar os serviÃ§os em GO
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
		
		// obter o chave privada para a ssinatura
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
		$xmldoc->preservWhiteSpace = false; //elimina espaÃ§os em branco
		$xmldoc->formatOutput = false;
		// muito importante deixar ativadas as opÃ§oes para limpar os espacos em branco
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
		//inicializa a variavel que irÃ¡ receber a assinatura
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
		return $resultado;
	}

	protected function pCleanCerts($certFile)
	{
		try {
			//inicializa variavel
			$data = '';
			//carregar a chave publica do arquivo pem
			if (!$pubKey = file_get_contents($certFile)) {
				$msg = "Arquivo nÃ£o encontrado - $certFile .";
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
	
	
    public function sendSOAPNFSe($urlwebservice, $cabecalho = '', $dados, $metodo) {
    	
/*        if ($this->tpAmb == 1) {
            $ambiente = 'producao';
            $wsdl = $urlwebservice . '?wsdl';
        } else {
   echo "<hr>cab ".         $ambiente = 'homologacao';
   echo "<hr>cab ".         $wsdl = $urlwebservice . '?wsdl';
        //}*/

            $ambiente = 'homologacao';
            $wsdl = $urlwebservice . '?wsdl';

        
        if (empty($cabecalho)) {
            $cabecalho = '<ns2:cabecalho versao="3" xmlns:ns2="http://www.ginfes.com.br/cabecalho_v03.xsd" ><versaoDados>3</versaoDados></ns2:cabecalho>';
        }
        
   
        $client = new nusoap_client($wsdl, True);
        $client->soap_defencoding = 'UTF-8';
        $client->authtype = 'certificate';
        $client->certRequest['sslcertfile'] = $this->certKEY;
        $client->certRequest['sslkeyfile'] = $this->priKEY;
        $client->certRequest['verifypeer'] = 0;
        $client->certRequest['verifyhost'] = 0;
        //if ($metodo != 'CancelarNfse') {
            $param = array('arg0' => $cabecalho,'arg1' => $dados);
        //} else {
          //  $param = array('arg0' => $dados);
       // }
        $retorno = $client->call($metodo, $param);
        
        
        
        return $retorno;
    }// fim __sendSOAPNFSe
	

    public function enviaNFSe($xml,$numero) {
    	
    	echo "<pre>ssss ";
    	print_r ($xml);
    	return;
        
        if ($ret = $this->enviarLoteXML($xml,$numero)) {
        	
            if ($ret['Protocolo'] <> '') {
            	echo "<hr>aaaa".$ret['Protocolo'];
            } else {
                $this->erros[]=str_pad($ret['Codigo'],10,' ')." ".$ret['Mensagem']."<br>".$ret['Correcao'];
                $sai=false;
            }
        } else {
              $this->erros[]=str_pad('E000',10,' ')." Nao foi possivel enviar para a SEFAZ, provavelmente por problema no certificado.";
              $sai=false;
        }
        return($sai);
    } //fim enviaNFSe
    
    public function consultaRps($protocolo) {
        $sai=$this->__consultRps($this->cnpj,$this->IM,trim($protocolo));
        return $sai;
    } //fim consultaRps
    public function consultaSituacaoRps($protocolo) {
        $sai=$this->__consultSitRps($this->cnpj,$this->IM,trim($protocolo));
        //Código de situação de lote de RPS
        //1 – Não Recebido
        //2 – Não Processado
        //3 – Processado com Erro
        //4 – Processado com Sucesso
        $situacao = FALSE;
        if ($sai){
            $situacao = $sai['Situacao'];
        }
        return($situacao);
    } //fim consultaSituacaoRps
    /**
     * sendRps
     * Envia lote de Notas Fiscais de Serviço 
     *
     * @name sendRps
     * @package NFePHP
    **/
    public function sendRps($aNFSe,$idLote) {
        //identificação do serviço
        $servico = 'EnvioLoteRPS';
        //recuperação da versão
        $versao = $this->mURL[$servico]['version'];
        
        //recuperação da url do serviço
        $urlservico = $this->mURL[$servico]['URL'];
        
        //recuperação do método
        $metodo = $this->mURL[$servico]['method'];
        
        //montagem do namespace do serviço
        
        $namespace = $this->mURL[$servico]['URL'] . '?wsdl';
    
        $ambiente = 2;
        
        // monta string com todas as NFe enviadas no array
        $sNFSe = str_ireplace('<?xml version="1.0" encoding="utf-8"?>','',$aNFSe);
        $sNFSe = str_ireplace('<?xml version="1.0" encoding="UTF-8" standalone="no"?>','',$sNFSe);
        
        //envia dados via SOAP
        //montagem dos dados da mensagem SOAP
        $dados = trim(str_replace("\n","",$sNFSe));
        $cabec = '<?xml version="1.0" encoding="UTF-8"?><cabecalho xmlns="'. $namespace . '"><versaoDados>' . $versao . '</versaoDados></cabecalho>';
        $ambiente = 0;
        $retorno = $this->__sendCURLNFSe($urlservico, $cabec, $dados, $metodo, $ambiente, $namespace);
        
//        echo "<pre>ssss ";
  //      print_r ($retorno);
        
        if ( isset($retorno) ) {
            //pega os dados do array retornado pelo NuSoap
            $retorno=str_replace('&lt;','<',$retorno);
            $retorno=str_replace('&gt;','>',$retorno);
            $retorno=str_replace('<?xml version="1.0" encoding="utf-8"?>','',$retorno);
            $xmlresp = utf8_encode($retorno);
            if ($xmlresp == ''){
                //houve uma falha na comunicação SOAP
                $this->errStatus = true;
                $this->errMsg = 'Houve uma falha na comunicação SOAP!!';
                return false;
            }
            //tratar dados de retorno
            $doc = new DOMDocument(); //cria objeto DOM
            $doc->formatOutput = false;
            $doc->preserveWhiteSpace = false;
            $doc->loadXML($retorno,LIBXML_NOBLANKS | LIBXML_NOEMPTYTAG);
            // status do recebimento ou mensagem de erro
            $aRet['DataRecebimento'] = $doc->getElementsByTagName('DataRecebimento')->item(0)->nodeValue;
            $aRet['Codigo'] = $doc->getElementsByTagName('Codigo')->item(0)->nodeValue;
            $aRet['Mensagem'] = $doc->getElementsByTagName('Mensagem')->item(0)->nodeValue;
            $aRet['Correcao'] = $doc->getElementsByTagName('Correcao')->item(0)->nodeValue;
            $aRet['NumeroLote'] = $doc->getElementsByTagName('NumeroLote')->item(0)->nodeValue;
            $aRet['Protocolo'] = $doc->getElementsByTagName('Protocolo')->item(0)->nodeValue;
         } else {
            $this->errStatus = true;
            $this->errMsg = 'Nao houve retorno do SOAP!';
            return FALSE;
        }
        return $aRet;
    }// fim sendLot
    /**
     * Consulta NFSe enviada po Lote
     *
     * @package NFePHP
    **/
    private function __consultRps($cnpj,$inscricaoMunicipal,$protocolo){
        // carga das variaveis da funçao do webservice envio de Ne em lote
        //identificação do serviço
        $servico = 'ConsultaLoteRPS';
        //recuperação da versão
        $versao = $this->mURL[$servico]['version'];
        //recuperação da url do serviço
        $urlservico = $this->mURL[$servico]['URL'];
        //recuperação do método
        $metodo = $this->mURL[$servico]['method'];
        //montagem do namespace do serviço
        $namespace = 'http://www.abrasf.org.br/ABRASF/arquivos/nfse.xsd';
        $sNFSe = "<ConsultarLoteRpsEnvio xmlns=\"http://www.abrasf.org.br/ABRASF/arquivos/nfse.xsd\"><Prestador><Cnpj>$cnpj</Cnpj><InscricaoMunicipal>$inscricaoMunicipal</InscricaoMunicipal></Prestador><Protocolo>$protocolo</Protocolo></ConsultarLoteRpsEnvio>";
        // monta string com todas as NFe enviadas no array
        //envia dados via SOAP
        //montagem dos dados da mensagem SOAP
        $dados = trim(str_replace("\n","",$sNFSe));
        $retorno = $this->__sendSOAPNFSe($urlservico, $cabec, $dados, $metodo);
        if ( isset($retorno) || !$retorno ) {
            //pega os dados do array retornado pelo NuSoap
            $retorno=str_replace('&lt;','<',$retorno);
            $retorno=str_replace('&gt;','>',$retorno);
            $retorno=str_replace('<?xml version="1.0" encoding="utf-8"?>','',$retorno);
            $xmlresp = utf8_encode($retorno);
            if ($xmlresp == ''){
                //houve uma falha na comunicação SOAP
                $this->errStatus = TRUE;
                $this->errMsg = 'Houve uma falha na comunicação SOAP!!';
                return FALSE;
            }
            //tratar dados de retorno
            $doc = new DOMDocument(); //cria objeto DOM
            $doc->formatOutput = FALSE;
            $doc->preserveWhiteSpace = FALSE;
            $doc->loadXML($retorno,LIBXML_NOBLANKS | LIBXML_NOEMPTYTAG);
            // status do recebimento ou mensagem de erro
            $aRet['Numero'] = $doc->getElementsByTagName('Numero')->item(0)->nodeValue;
            $aRet['CodigoVerificacao'] = $doc->getElementsByTagName('CodigoVerificacao')->item(0)->nodeValue;
            $aRet['DataEmissao'] = $doc->getElementsByTagName('DataEmissao')->item(0)->nodeValue;
         } else {
            $this->errStatus = TRUE;
            $this->errMsg .= 'Nao houve retorno do SOAP!';
            return FALSE;
        }
        return $aRet;
    } //fim consultRps
    /**
     * Consulta NFS enviada po Lote
     *
     * @name 
     * @package NFePHP
    **/
    
    
    private function __consultSitRps($cnpj,$inscricaoMunicipal,$protocolo){
        // carga das variaveis da funçao do webservice envio de Ne em lote
        //identificação do serviço
        $servico = 'ConsultaSituacaoLoteRPS';
        //recuperação da versão
        $versao = $this->mURL[$servico]['version'];
        //recuperação da url do serviço
        $urlservico = $this->mURL[$servico]['URL'];
        //recuperação do método
        $metodo = $this->mURL[$servico]['method'];
        //montagem do namespace do serviço
        $namespace = 'http://www.abrasf.org.br/ABRASF/arquivos/nfse.xsd';
        $sNFSe = "<ConsultarSituacaoLoteRpsEnvio xmlns=\"http://www.abrasf.org.br/ABRASF/arquivos/nfse.xsd\"><Prestador><Cnpj>$cnpj</Cnpj><InscricaoMunicipal>$inscricaoMunicipal</InscricaoMunicipal></Prestador><Protocolo>$protocolo</Protocolo></ConsultarSituacaoLoteRpsEnvio>";
        //envia dados via SOAP
        //montagem do cabeçalho da comunicação SOAP
        $cabec = '<?xml version="1.0" encoding="UTF-8"?><cabecalho xmlns="'. $namespace . '"><versaoDados>' . $versao . '</versaoDados></cabecalho>';
        //montagem dos dados da mensagem SOAP
        $dados = trim(str_replace("\n","",$sNFSe));
        $retorno = $this->__sendSOAPNFSe($urlservico, $cabec, $dados, $metodo);
        //caso tenha ocorrido erro no envio
        if ( isset($retorno) || !$retorno ) {
            //pega os dados do array retornado pelo NuSoap
            $retorno=str_replace('&lt;','<',$retorno);
            $retorno=str_replace('&gt;','>',$retorno);
            $retorno=str_replace('<?xml version="1.0" encoding="utf-8"?>','',$retorno);
            $xmlresp = utf8_encode($retorno);
            if ($xmlresp == ''){
                //houve uma falha na comunicação SOAP
                $this->errStatus = TRUE;
                $this->errMsg = 'Houve uma falha na comunicação SOAP!!';
                return FALSE;
            }
            //tratar dados de retorno
            $doc = new DOMDocument(); //cria objeto DOM
            $doc->formatOutput = FALSE;
            $doc->preserveWhiteSpace = FALSE;
            $doc->loadXML($retorno,LIBXML_NOBLANKS | LIBXML_NOEMPTYTAG);
            // status do recebimento ou mensagem de erro
            $aRet['NumeroLote'] = $doc->getElementsByTagName('NumeroLote')->item(0)->nodeValue;
            $aRet['Situacao'] = $doc->getElementsByTagName('Situacao')->item(0)->nodeValue;
         } else {
            $this->errStatus = TRUE;
            $this->errMsg .= 'Nao houve retorno do SOAP!';
            return FALSE;
        }
        return $aRet;
    } //fim consultSitRps

         protected function sendSoap($urlsefaz,$namespace,$cabecalho,$dados,$metodo,$ambiente='',$UF=''){

         	
         	
        $data = '';
        $data .= '<?xml version="1.0" encoding="utf-8"?>';
        $data .= '<soap12:Envelope ';
        $data .= 'xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" ';
        $data .= 'xmlns:xsd="http://www.w3.org/2001/XMLSchema" ';
        $data .= 'xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">';
        $data .= '<soap12:Header>';
        $data .= $cabecalho;
        $data .= '</soap12:Header>';
        $data .= '<soap12:Body>';
        $data .= $dados;
        $data .= '</soap12:Body>';
        $data .= '</soap12:Envelope>';
         	
$client = new nusoap_client($urlsefaz);
$client->soap_defencoding = 'UTF-8';
$client->authtype = 'certificate';
$client->certRequest['sslcertfile']= $this->certKEY;
$client->certRequest['passphrase'] = $pass;
$soapbox->certRequest['sslkeyfile']= $this->priKEY;
$client->certRequest['verifypeer'] = 0;
$client->certRequest['verifyhost'] = 0;
$param = array('arg0' => $cabec,'arg1' => $sNFe);
$resultado = $client->call($metodo, $data);

if (isset($resultado['return'])) {
	$result1 = utf8_decode($resultado['return']);
} elseif (!is_array($result)) {
	$result1 = utf8_decode($resultado);
} else {
	$result1 = $resultado;
}

echo "<pre>Resultado";
print_r ($result1);
         }
    
    
     protected function __sendCURLNFSe($xml,$numero){
        if ($urlsefaz == ''){
            //não houve retorno
            $this->errMsg = "URL do webservice não disponível.\n";
            $this->errStatus = true;
        }
        if ($ambiente == ''){
            $ambiente = $this->tpAmb;
        }
        
        echo "\n<pre>xml: ".print_r($xml);
        
        
        // monta string com todas as NFe enviadas no array
        $sNFSe = str_ireplace('<?xml version="1.0" encoding="utf-8"?>','',$aNFSe);
        $sNFSe = str_ireplace('<?xml version="1.0" encoding="UTF-8" standalone="no"?>','',$sNFSe);
        
        //envia dados via SOAP
        //montagem dos dados da mensagem SOAP
        $dados = trim(str_replace("\n","",$sNFSe));
        $cabec = '<?xml version="1.0" encoding="UTF-8"?><cabecalho xmlns="'. $namespace . '"><versaoDados>' . $versao . '</versaoDados></cabecalho>';
        
        
        $data = '';
        $data .= '<?xml version="1.0" encoding="utf-8"?>';
        $data .= '<soap12:Envelope ';
        $data .= 'xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" ';
        $data .= 'xmlns:xsd="http://www.w3.org/2001/XMLSchema" ';
        $data .= 'xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">';
        $data .= '<soap12:Header>';
        $data .= $cabecalho;
        $data .= '</soap12:Header>';
        $data .= '<soap12:Body>';
        $data .= $xml;
        $data .= '</soap12:Body>';
         $data .= '</soap12:Envelope>';
        //[Informational 1xx]
        $cCode['100']="Continue";
        $cCode['101']="Switching Protocols";
        //[Successful 2xx]
        $cCode['200']="OK";
        $cCode['201']="Created";
        $cCode['202']="Accepted";
        $cCode['203']="Non-Authoritative Information";
        $cCode['204']="No Content";
        $cCode['205']="Reset Content";
        $cCode['206']="Partial Content";
        //[Redirection 3xx]
        $cCode['300']="Multiple Choices";
        $cCode['301']="Moved Permanently";
        $cCode['302']="Found";
        $cCode['303']="See Other";
        $cCode['304']="Not Modified";
        $cCode['305']="Use Proxy";
        $cCode['306']="(Unused)";
        $cCode['307']="Temporary Redirect";
        //[Client Error 4xx]
        $cCode['400']="Bad Request";
        $cCode['401']="Unauthorized";
        $cCode['402']="Payment Required";
        $cCode['403']="Forbidden";
        $cCode['404']="Not Found";
        $cCode['405']="Method Not Allowed";
        $cCode['406']="Not Acceptable";
        $cCode['407']="Proxy Authentication Required";
        $cCode['408']="Request Timeout";
        $cCode['409']="Conflict";
        $cCode['410']="Gone";
        $cCode['411']="Length Required";
        $cCode['412']="Precondition Failed";
        $cCode['413']="Request Entity Too Large";
        $cCode['414']="Request-URI Too Long";
        $cCode['415']="Unsupported Media Type";
        $cCode['416']="Requested Range Not Satisfiable";
        $cCode['417']="Expectation Failed";
        //[Server Error 5xx]
        $cCode['500']="Internal Server Error";
        $cCode['501']="Not Implemented";
        $cCode['502']="Bad Gateway";
        $cCode['503']="Service Unavailable";
        $cCode['504']="Gateway Timeout";
        $cCode['505']="HTTP Version Not Supported";
        
        $tamanho = strlen($data);
        //$metodo = 'EnviarLoteRpsEnvio';
        
       // $parametros = array('Content-Type: application/soap+xml;charset=utf-8;action="'.$namespace. '"','SOAPAction: "'.$metodo.'"',"Content-length: $tamanho");
        //$parametros = array('Content-Type: application/soap+xml;charset=utf-8;action="'.$namespace."/".$metodo.'"','SOAPAction: "'.$metodo.'"',"Content-length: $tamanho");
        $parametros = array(
        "Content-type: text/xml;charset=utf-8",
        "Accept: text/xml",
        "SOAPAction: https://nfe.sjp.pr.gov.br//servicos/issOnline2/homologacao/ws/RecepcionarLoteRps",
        "Content-length: ". $tamanho,
        );
        
   		//$this->certKEY = PATH_ROOT.'webservices/NfePhp/certctba/1234567890001_pubKEY.pem';

        $_aspa = '"';
        
        $oCurl = curl_init();
        if(is_array($this->aProxy)){
            curl_setopt($oCurl, CURLOPT_HTTPPROXYTUNNEL, 1);
            curl_setopt($oCurl, CURLOPT_PROXYTYPE, "CURLPROXY_HTTP");
            curl_setopt($oCurl, CURLOPT_PROXY, $this->aProxy['IP'].':'.$this->aProxy['PORT']);
            if( $this->aProxy['PASS'] != '' ){
                curl_setopt($oCurl, CURLOPT_PROXYUSERPWD, $this->aProxy['USER'].':'.$this->aProxy['PASS']);
                curl_setopt($oCurl, CURLOPT_PROXYAUTH, "CURLAUTH_BASIC");
            } //fim if senha proxy
        }//fim if aProxy
        
        $urlsefaz = 'https://nfe.sjp.pr.gov.br/servicos/issOnline2/homologacao/ws/index.php?wsdl';
        
		echo "\n<hr>prikey: ".$this->priKEY;
		echo "\n<hr>prikey: ".$this->pubKEY;
		echo "\n<hr>prikey: ".$this->certKEY;
		
		return;
		
		/*
		$this->pubKEY = PATH_ROOT.'webservices/NfePhp/certctba/1234567890001_pubKEY.pem';
		$this->certKEY = PATH_ROOT.'webservices/NfePhp/certctba/1234567890001_certKEY.pem';
       */ 
        
        //curl_setopt($oCurl, CURLOPT_PROXYUSERPWD, $this->aProxy['USER'].':'.$this->aProxy['PASS']);
        //curl_setopt($oCurl, CURLOPT_PROXYAUTH, "CURLAUTH_BASIC");
        curl_setopt($oCurl, CURLOPT_URL, $urlsefaz.'');
        curl_setopt($oCurl, CURLOPT_PORT , 443);
        curl_setopt($oCurl, CURLOPT_VERBOSE, 1);
        curl_setopt($oCurl, CURLOPT_HEADER, 1); //retorna o cabeçalho de resposta
        curl_setopt($oCurl, CURLOPT_SSLVERSION, 3);
        curl_setopt($oCurl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($oCurl, CURLOPT_SSL_VERIFYPEER, 0);
        
		curl_setopt($oCurl,CURLOPT_SSLCERT,$this->certKEY);
        curl_setopt($oCurl, CURLOPT_SSLKEY, $this->priKEY);
        curl_setopt($oCurl, CURLOPT_POST, 1);
        curl_setopt($oCurl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($oCurl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($oCurl, CURLOPT_HTTPHEADER,$parametros);
      
        //$__xml = curl_exec($oCurl);
        
        
        
        echo "\n<hr>fffffffffffff".$this->certKEY;
       
        $info = curl_getinfo($oCurl); //informações da conexão
        $txtInfo ="";
        $txtInfo .= "URL=$info[url]\n";
        $txtInfo .= "Content type=$info[content_type]\n";
        $txtInfo .= "Http Code=$info[http_code]\n";
        $txtInfo .= "Header Size=$info[header_size]\n";
        $txtInfo .= "Request Size=$info[request_size]\n";
        $txtInfo .= "Filetime=$info[filetime]\n";
        $txtInfo .= "SSL Verify Result=$info[ssl_verify_result]\n";
        $txtInfo .= "Redirect Count=$info[redirect_count]\n";
        $txtInfo .= "Total Time=$info[total_time]\n";
        $txtInfo .= "Namelookup=$info[namelookup_time]\n";
        $txtInfo .= "Connect Time=$info[connect_time]\n";
        $txtInfo .= "Pretransfer Time=$info[pretransfer_time]\n";
        $txtInfo .= "Size Upload=$info[size_upload]\n";
        $txtInfo .= "Size Download=$info[size_download]\n";
        $txtInfo .= "Speed Download=$info[speed_download]\n";
        $txtInfo .= "Speed Upload=$info[speed_upload]\n";
        $txtInfo .= "Download Content Length=$info[download_content_length]\n";
        $txtInfo .= "Upload Content Length=$info[upload_content_length]\n";
        $txtInfo .= "Start Transfer Time=$info[starttransfer_time]\n";
        $txtInfo .= "Redirect Time=$info[redirect_time]\n";
        $txtInfo .= "Certinfo=$info[certinfo]\n";
        $n = strlen($__xml);
        $x = stripos($__xml, "<");
        $xml = substr($__xml, $x, $n-$x);
        $this->soapDebug = $data."\n\n".$txtInfo."\n".$__xml;
        
        echo "\n<pre>aaaaaa".print_r($txtInfo.curl_error($oCurl) . $info['http_code'] . $cCode[$info['http_code']]."\n");
        if ($__xml === false){
            //não houve retorno
            $this->errMsg = curl_error($oCurl) . $info['http_code'] . $cCode[$info['http_code']]."\n";
            $this->errStatus = true;
        } else {
            //houve retorno mas ainda pode ser uma mensagem de erro do webservice
            $this->errMsg = $info['http_code'] . $cCode[$info['http_code']]."\n";
            
            
            
            $this->errStatus = false;
        }
        

        curl_close($oCurl);
        return $xml;
        
    }
    /**
     * __sendSOAPNFSe
     * Estabelece comunicaçao com servidor SOAP 1.1 ou 1.2 da SEFAZ,
     * usando as chaves publica e privada parametrizadas na contrução da classe.
     * Conforme Manual de Integração Versão 4.0.1
     *
     * @name __sendSOAPNFSe
     * @version 1.0
     * @package NFePHP
     * @param string $urlsefaz
     * @param string $namespace
     * @param string $cabecalho
     * @param string $dados
     * @param string $metodo
     * @param numeric $ambiente
     * @return mixed False se houve falha ou o retorno em xml do SEFAZ
     */
    private function __sendSOAPNFSe($urlwebservice,$cabecalho,$dados,$metodo,$ambiente,$namespace = false){
        
        use_soap_error_handler(true);
    	echo "<hr>URL ".$urlwebservice;
        if($ambiente == 1){
            $ambiente = 'producao';
            $URL = $urlwebservice.'?wsdl';
        } else {
            $ambiente = 'homologacao';
            $URL = $urlwebservice.'?wsdl';
        }
        
        
        $soapver = SOAP_1_1;
        
        $options = array(
            'encoding'      => 'UTF-8',
            'verifypeer'    => false,
            'verifyhost'    => false,
            'soap_version'  => $soapver,
            'style'         => SOAP_DOCUMENT,
            'use'           => SOAP_LITERAL,
            'local_cert'    => $this->certKEY,
            'trace'         => true,
            'compression'   => 0,
            'exceptions'    => true,
            'cache_wsdl'    => WSDL_CACHE_NONE
        );
        
        
      
          //instancia a classe soap
        try{
            $oSoapClient = new NFSeSOAPClient($URL,$options);
        } catch (Exception $e) {
            $this->errStatus = true;
            $this->errMsg = $e->__toString();
            return false;
        }
        
        try{
           
            $varBody = new SoapVar($dados,XSD_ANYXML);
            $resp = $oSoapClient->__soapCall($metodo, array($varBody));
            $resposta = $oSoapClient->__getLastResponse();
            $this->soapRequest=$oSoapClient->soapRequest;
        } catch (Exception $e){
            
            $this->soapDebug = $e->getMessage();
            $this->soapRequest=$oSoapClient->soapRequest;
            $this->errStatus = true;
            $this->errMsg = $e->__toString();
            return false;
        }
        
        $this->soapDebug .= $oSoapClient->__getLastRequestHeaders();
        $this->soapDebug .= "\n" . $oSoapClient->__getLastRequest();
        $this->soapDebug .= "\n" . $oSoapClient->__getLastResponseHeaders();
        $this->soapDebug .= "\n" . $oSoapClient->__getLastResponse();
        
        return $resposta;
    } //fim __sendSOAPNFSe
} //fim da classe NFSe




?>