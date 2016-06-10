<?php
/**
 * Este arquivo � parte do projeto NFePHP - Nota Fiscal eletr�nica em PHP.
 *
 * Este programa � um software livre: voc� pode redistribuir e/ou modific�-lo
 * sob os termos da Licen�a P�blica Geral GNU (GPL)como � publicada pela Funda��o
 * para o Software Livre, na vers�o 3 da licen�a, ou qualquer vers�o posterior
 * e/ou 
 * sob os termos da Licen�a P�blica Geral Menor GNU (LGPL) como � publicada pela Funda��o
 * para o Software Livre, na vers�o 3 da licen�a, ou qualquer vers�o posterior.
 *
 *
 * Este programa � distribu�do na esperan�a que ser� �til, mas SEM NENHUMA
 * GARANTIA; nem mesmo a garantia expl�cita definida por qualquer VALOR COMERCIAL
 * ou de ADEQUA��O PARA UM PROP�SITO EM PARTICULAR,
 * veja a Licen�a P�blica Geral GNU para mais detalhes.
 *
 * Voc� deve ter recebido uma c�pia da Licen�a Publica GNU e da 
 * Licen�a P�blica Geral Menor GNU (LGPL) junto com este programa.
 * Caso contr�rio consulte <http://www.fsfla.org/svnwiki/trad/GPLv3> ou
 * <http://www.fsfla.org/svnwiki/trad/LGPLv3>. 
 *
 *
 * @package   NFePHP_SE
 * @name      NFSeSE
 * @version   alfa (n�o us�vel)
 * @license   http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @copyright 2009-2011 &copy; NFePHP
 * @link      http://www.nfephp.org/
 * @author    Giuliano Nascimento <giusoft at hotmail dot com>
 *
 *        CONTRIBUIDORES (em ordem alfabetica):
 *              Roberto Leite Machado <linux dot rlm at gamil dot com>
 * 
 * 
 */
require_once "ToolsNFePHP.class.php";
class NFSeSE extends ToolsNFePHP {
    public $idRPS='';
    public $idLoteRPS='';
    public $numeroLote='';
    public $nomeFantasia='';
    public $IM='';
    public $numNFSe='';
    public $numSerie='';
    public $tipo='';
    public $natOperacao='';
    public $optanteSimplesNacional='';
    public $incentivadorCultural='';
    public $status='';
    public $cMun='';
    public $aItens=array();
    public $tomaCPF='';
    public $tomaCNPJ='';
    public $tomaRazaoSocial='';
    public $tomaEndLogradouro='';
    public $tomaEndNumero='';
    public $tomaEndComplemento='';
    public $tomaEndBairro='';
    public $tomaEndxMun='';
    public $tomaEndcMun='';
    public $tomaEndUF='';
    public $tomaEndCep='';
    public $tomaEmail='';
    public $nfsexml='';
    public $arqtxt='';
    public $errMsg='';
    public $cert='';
    public $errStatus=false;
    public $priKey='';
    public $pubKey=''; 
    public $mURL='';
    public $NFeSschema = 'nfse.xsd';
    public function __construct($aConfig='',$mododebug=2,$exceptions=false) {
        parent::__construct($aConfig,$mododebug,$exceptions);
        $this->tipo = 1;
        $this->natOperacao = 3;
        $this->idLoteRPS = 1;
        $this->numeroLote = 1;
        $this->optanteSimplesNacional = 2;
        $this->incentivadorCultural = 2;
        $this->status = 1; // Normal
        $this->numNFSe = 1; // como montar esse n�mero?
        $this->idRPS = 1;
        $this->numthis = 1;
        $this->numSerie = 1;
        $this->IM = '123456';
        $this->mURL['EnvioLoteRPS']['URL'] = 'https://www3.webiss.com.br/aracajuse_wsnfse_homolog/NfseServices.svc';
        $this->mURL['EnvioLoteRPS']['version'] = '1.00';
        $this->mURL['EnvioLoteRPS']['method'] = 'RecepcionarLoteRps';
        $this->cMun = $this->tomaEndcMun = $this->cUFlist['SE'];
        $this->cnpj = '13085519000161';
        $this->tomaCNPJ= '13085519000161';
        $this->tomaRazaoSocial = 'SERVICOS GRAFICOS DE SERGIPE';
        $this->tomaEndLogradouro = 'Rua Awei';
        $this->tomaEndNumero = 33;
        $this->tomaEndBairro = 'Das Flores';
        $this->tomaEndUF = 'SE';
        $this->tomaEndCep = '79009170';
    }
    
    /**
    * @param array itens {valor,valorDeducoes,valorPis,valorCofins,valorIr,valorCsll,issRetido,valorIss,valorIssRetido,outrasRetencoes,
    * baseCalculo,aliquota,valorLiquidoNfse,descontoIncondicionado,descontoCondicionado,itemListaServico,codigoCnae,discriminacao} 
    */
    public function setItens($itens) {
        if (!empty($itens)) {
            $this->aItens = $itens;
        } 
        return true;
    }
       
    public function buildNFSe() {
                
        // Cria o objeto DOM para o xml
        $dom = new DOMDocument('1.0', 'UTF-8');
        $dom->formatOutput = true;
        $dom->preserveWhiteSpace = false;
        $Rps=$dom->createElement("Rps");
        $infRps = $dom->createElement("InfRps");
        $infRps->setAttribute("id", $this->idRPS);
        // Identifica��o
        $IdentificacaoRps = $dom->createElement("IdentificacaoRps");
        $Numero= $dom->createElement("Numero",$this->numNFSe);
        $Serie= $dom->createElement("Serie",$this->numSerie);
        $Tipo= $dom->createElement("Tipo",$this->tipo);
        
        $IdentificacaoRps->appendChild($Numero);
        $IdentificacaoRps->appendChild($Serie);
        $IdentificacaoRps->appendChild($Tipo);
        
        $infRps->appendChild($IdentificacaoRps);
        $infRps->appendChild($dom->createElement("DataEmissao",date("Y-m-d")."T".date("H:i:s")));
        $infRps->appendChild($dom->createElement("NaturezaOperacao",$this->natOperacao));
        $infRps->appendChild($dom->createElement("OptanteSimplesNacional",$this->optanteSimplesNacional));
        $infRps->appendChild($dom->createElement("IncentivadorCultural",$this->incentivadorCultural));
        $infRps->appendChild($dom->createElement("Status",$this->status));
        
        // Cria as vari�veis zeradas    
        $qtd=$v_total=$total_itens=$t_icms=$t_ipi=$total_pb=$total_pl=0;
        $temIcms=false;
        foreach ($this->aItens as $item) {
            $qtd++;
    
            $Servico= $dom->createElement("Servico");
            $Valores=$dom->createElement("Valores");
            
            $ValorServicos=$dom->createElement("ValorServicos",number_format($item['valor'],2, '.', ''));
            $ValorDeducoes=$dom->createElement("ValorDeducoes",number_format($item['valorDeducoes'],2, '.', ''));
            $ValorPis=$dom->createElement("ValorPis",number_format($item['valorPis'],2, '.', ''));
            $ValorCofins=$dom->createElement("ValorCofins",number_format($item['valorCofins'],2, '.', ''));
            $ValorIr=$dom->createElement("ValorIr",number_format($item['valorIr'],2, '.', ''));
            $ValorCsll=$dom->createElement("ValorCsll",number_format($item['valorCsll'],2, '.', ''));
            $IssRetido=$dom->createElement("IssRetido",$item['issRetido']);
            $ValorIss=$dom->createElement("ValorIss",number_format($item['valorIss'],2, '.', ''));
            $ValorIssRetido=$dom->createElement("ValorIssRetido",number_format($item['valorIssRetido'],2, '.', ''));
            $OutrasRetencoes=$dom->createElement("OutrasRetencoes",number_format($item['outrasRetencoes'],2, '.', ''));
            $BaseCalculo=$dom->createElement("BaseCalculo",number_format($item['baseCalculo'],2, '.', ''));
            $Aliquota=$dom->createElement("Aliquota",number_format($item['aliquota'],2, '.', ''));
            $ValorLiquidoNfse=$dom->createElement("ValorLiquidoNfse",number_format($item['valorLiquidoNfse'],2, '.', ''));
            $DescontoIncondicionado=$dom->createElement("DescontoIncondicionado",number_format($item['descontoIncondicionado'],2, '.', ''));
            $DescontoCondicionado=$dom->createElement("DescontoCondicionado",number_format($item['descontoCondicionado'],2, '.', ''));
            $Valores->appendChild($ValorServicos);
            $Valores->appendChild($ValorDeducoes);
            $Valores->appendChild($IssRetido);
            $Valores->appendChild($ValorIss);
            $Valores->appendChild($ValorIssRetido);
            $Valores->appendChild($BaseCalculo);
            $Valores->appendChild($Aliquota);
    
            // Detalhes do servi�o
            $ItemListaServico=$dom->createElement("ItemListaServico",trim($item['itemListaServico']));
            $CodigoTributacaoMunicipio=$dom->createElement("CodigoCnae",trim($item['codigoCnae']));
            $Discriminacao=$dom->createElement("Discriminacao",$this->tiraAcentos($item['discriminacao']));
            $CodigoMunicipio=$dom->createElement("CodigoMunicipio",$this->cMun);
            $Servico->appendChild($Valores);
            $Servico->appendChild($ItemListaServico);
            $Servico->appendChild($CodigoTributacaoMunicipio);
            $Servico->appendChild($Discriminacao);
            $Servico->appendChild($CodigoMunicipio);
            $infRps->appendChild($Servico);
    
        } //fim foreach aItens
    
        // Prestador do Servi�o
        $Prestador=$dom->createElement("Prestador");
        $Cnpj=$dom->createElement("Cnpj",$this->cnpj);
        $InscricaoMunicipal=$dom->createElement("InscricaoMunicipal",$this->IM);
        $Prestador->appendChild($Cnpj);
        $Prestador->appendChild($InscricaoMunicipal);
    
        // Tomador do Servi�o
        $Tomador=$dom->createElement("Tomador");
        $IdentificacaoTomador=$dom->createElement("IdentificacaoTomador");
        $CpfCnpj=$dom->createElement("CpfCnpj");
        $TomadorCpf=$dom->createElement("Cpf",$this->tomaCPF);
        $TomadorCnpj=$dom->createElement("Cnpj",$this->tomaCNPJ);
    
        if ($this->tomaCPF != ''){
            $CpfCnpj->appendChild($TomadorCpf);
        } else {
            $CpfCnpj->appendChild($TomadorCnpj);
        }    
    
        $IdentificacaoTomador->appendChild($CpfCnpj);
        $RazaoSocial=$dom->createElement("RazaoSocial",$this->tomaRazaoSocial);
        $EEndereco=$dom->createElement("Endereco");
        $Endereco=$dom->createElement("Endereco",$this->tomaEndLogradouro);
        $Numero=$dom->createElement("Numero",$this->tomaEndNumero);
        $Bairro=$dom->createElement("Bairro",$this->tomaEndBairro);
        $CodigoMunicipio=$dom->createElement("CodigoMunicipio",$this->tomaEndcMun);
        $Uf=$dom->createElement("Uf",$this->tomaEndUF);
        $Cep=$dom->createElement("Cep",$this->tomaEndCep);
        $EEndereco->appendChild($Endereco);
        $EEndereco->appendChild($Numero);
        $EEndereco->appendChild($Bairro);
        $EEndereco->appendChild($CodigoMunicipio);
        $EEndereco->appendChild($Uf);
        $EEndereco->appendChild($Cep);
        $Tomador->appendChild($IdentificacaoTomador);
        $Tomador->appendChild($RazaoSocial);
        $Tomador->appendChild($EEndereco);
    
        if ($this->tomaEmail != '') {
            $Contato=$dom->createElement("Contato");
            $Email=$dom->createElement("Email",$this->tomaEmail);
            $Contato->appendChild($Email);
            $Tomador->appendChild($Contato);
        }
    
        $infRps->appendChild($Prestador);
        $infRps->appendChild($Tomador);
    
        // Servi�os
        $Rps->appendChild($infRps);
        $ListaRps=$dom->createElement("ListaRps");
        $ListaRps->appendChild($Rps);
        $LoteRps=$dom->createElement("LoteRps");
        $LoteRps->setAttribute("id", $this->idLoteRPS);
        $NumeroLote=$dom->createElement("NumeroLote",$this->numeroLote);
        $QuantidadeRps=$dom->createElement("QuantidadeRps",1);
        $Cnpj=$dom->createElement("Cnpj",$this->cnpj);
        $InscricaoMunicipal=$dom->createElement("InscricaoMunicipal",$this->IM);
        $EnviarLoteRpsEnvio=$dom->createElement("EnviarLoteRpsEnvio");
        $EnviarLoteRpsEnvio->setAttribute("xmlns:xsi", "http://www.w3.org/2001/XMLSchema-instance");
        $EnviarLoteRpsEnvio->setAttribute("xmlns", "http://www.abrasf.org.br/ABRASF/arquivos/nfse.xsd");
       
        $LoteRps->appendChild($NumeroLote);
        $LoteRps->appendChild($Cnpj);
        $LoteRps->appendChild($InscricaoMunicipal);
        $LoteRps->appendChild($QuantidadeRps);
        $LoteRps->appendChild($ListaRps);
        $EnviarLoteRpsEnvio->appendChild($LoteRps);
        $dom->appendChild($EnviarLoteRpsEnvio);
        $xml= $dom->saveXML();
       
        $xml = str_replace('<?xml version="1.0" encoding="UTF-8"?>','<?xml version="1.0" encoding="UTF-8" standalone="no"?>',$xml);
        $xml = str_replace('<?xml version="1.0" encoding="UTF-8" standalone="no"?>','',$xml);
        $xml = str_replace('<?xml version="1.0" encoding="UTF-8"?>','',$xml);
        $xml = str_replace("\n","",$xml);
        $xml = str_replace("  "," ",$xml);
        $xml = str_replace("  "," ",$xml);
        $xml = str_replace("  "," ",$xml);
        $xml = str_replace("  "," ",$xml);
        $xml = str_replace("  "," ",$xml);
        $xml = str_replace("> <","><",$xml);
        $this->nfsexml = $xml;
        //$this->signNFSe("InfRps");
        $this->signNFSe("LoteRps");
    
        return $this->nfsexml;
    }  
    public function tiraAcentos($data) {
        return iconv('UTF-8', 'ASCII//TRANSLIT', $data);
    }
    /**
    * Gera arquivo TXT para importa��o da SEFAZ
    */
    public function geraTxtNFSE() {
        $hoje=date("Ymd");
        $dataHora=date("YmdHis");
        // REGISTRO 1 - Header do arquivo
        $s="1"; // Tipo de Registro
        $s.="103"; // Ves�o do Layout
        $s.=padrl($this->IM, 26, "r"); // Insc. Municipal do prestador
        $s.="2"; // Indicador de CPF/CNPJ -> 1 = CPF , 2 = CNPJ
        $s.=padrl($this->cnpj, 14,"l"); // CPF / CNPJ do prestador
        $s.=$this->optanteSimplesNacional ; // Optante pelo simples
        $s.=$hoje; // Data de in�cio do per�odo
        $s.=$hoje; // Data de fim do per�odo
        $s.=padrl("1", 5, "l", "0"); // Qtd de NFS-e informadas
        $s.=padrl(" ", 324, "l"); // Preencher com 324 espa��es em branco
        $s.=padrl($this->numeroLote, 8, "l","0"); // Sequencial do registro
        $s.=NL;
        foreach ($this->aItens as $item) {
            // REGISTRO 2 - Cabe�alho da NFS-e
            $s.="2"; // Tipo de registro
            $s.=padrl($this->nfeid, 20, "l", "0"); // Sequencial da NFS-e
            $s.=$dataHora; // Data e Hora da NFS-e
            $s.=$item['tipoRecolhimento']; // Tipo de recolhimento (N - Normal ou R - Retido na fonte)
            $s.="T"; // Situa��o da nota fiscal (T - I - F - C - E - J)
            $s.=padrl(" ", 8, "r"," "); // Data de cancelamento
            $s.=$this->cMun; // Codigo IBGE do municipio de presta��o do servi�o
            $s.=padrl(number_format($item['valor'],2,"",""), 15, "l", "0"); // Valor do servi�o
            $s.=padrl(number_format($item['valorDeducoes'],2,"",""), 15, "l", "0"); // valor das dedu��es
            $s.=padrl(number_format($item['valorIss'],2,"",""), 15, "l", "0"); // Valor da reten��o do PIS
            $s.=padrl(number_format($item['valorCofins'],2,"",""), 15, "l", "0"); // Valor da reten��o do COFINS
            $s.=padrl(number_format($item['valorInss'],2,"",""), 15, "l", "0"); // Valor da reten��o do INSS
            $s.=padrl(number_format($item['valorIr'],2,"",""), 15, "l", "0"); // Valor da reten��o do IR
            $s.=padrl(number_format($item['valorRetCsll'],2,"",""), 15, "l", "0"); // Valor da reten��o do CSLL
            $s.=padrl(number_format($item['valorIssqn'],2,"",""), 15, "l", "0"); // Valor do ISSQN
            $s.=padrl(" ", 219, "l"); // Preencher com 219 espa��es em branco
            $s.=padrl($this->numeroLote, 8, "l","0"); // Sequencial do registro
            $s.=NL;
            // REGISTRO 3 - Identifica��o do tomador da NFS-e
            $s.="3"; // Tipo de registro
            $s.=padrl($this->nfeid, 20, "r", "0"); // Sequencial da NFS-e
            $s.="2"; // Indicador de CPF/CNPJ do Tomador
            $s.=padrl($this->tomaCNPJ, 14,"l"); // CPF/CNPJ do tomador
            $s.=padrl($this->tomaRazaoSocial, 50, "r"); // Nome do tomador (Nome ou raz�o social)
            $s.=padrl($this->nomeFantasia, 50, "r"); // Nome fantasia
            $s.=padrl(" ", 3, "l"); // Tipo de endere�o do tomador
            $s.=padrl($this->tomaEndLogradouro, 50, "r"); // Endere�o do tomador
            $s.=padrl($this->tomaEndNumero, 10, "l","0"); // N�mero do endere�o do tomador
            $s.=padrl($this->tomaEndComplemento, 20, "r"); // Complemento do endere�o do tomador
            $s.=padrl($this->tomaEndBairro, 30, "r"); // Bairro do tomador
            $s.=padrl($this->tomaEndxMun, 50, "r"); // Cidade do tomador
            $s.=padrl($this->tomaEndUF, 2, "r");; // UF do tomador
            $s.=padrl($this->tomaEndCep, 8, "r"); // CEP do tomador
            $s.=padrl($this->tomaEmail, 60, "r"); // Email do tomador
            $s.=padrl(" ", 22, "l"); // Preencher com 22 espa��es em branco
            $s.=padrl($this->numeroLote, 8, "l","0"); // Sequencial do registro
            $s.=NL;
            // REGISTRO 4 - Descri��o da NFS-e
            $s.="4"; // Tipo de registro
            $s.=padrl($this->nfseid, 20, "l", "0"); // Sequencial da NFS-e
            $s.=padrl(" ", 255, "l"); // Descri��o da nota
            $s.=padrl(" ", 115, "l"); // Preencher com 22 espa��es em branco
            $s.=padrl($this->numeroLote, 8, "l","0"); // Sequencial do registro
            $s.=NL;
            // REGISTRO 5 - Descri��o do servi�o realizado
            $s.="5"; // Tipo de registro
            $s.=padrl($this->nfseid, 20, "l", "0"); // Sequencial da NFS-e
            $s.=padrl($item['codigo'], 4, "l"); // Codigo do servi�o pretasdo
            $s.=padrl($item['codigoMunicipio'], 20, "l"); // C�digo tributa��o munic�pio
            $s.=padrl(number_format($item['valor'],2,"",""), 15, "l", "0"); // Valor do servi�o
            $s.=padrl(number_format($item['valorDeducoes'],2,"",""), 15, "l", "0"); // Valor dedu��o
            $s.=padrl(number_format($item['aliquota'],2,"",""), 4, "l", "0"); // Al�quota
            $s.=padrl($item['unidade'], 20, "l"); // Unidade
            $s.=padrl(number_format($item['quantidade'],2,"",""),8,"l","0"); // Quantidade
            $s.=padrl($item['discriminacao'], 255, "r"," "); // Descri��o do servi�o
            $s.=padrl(" ",20,"l"); // Alvar�               
            $s.=padrl(" ", 9, "l"); // Preencher com 9 espa��es em branco
            $s.=padrl($this->numeroLote, 8, "l","0"); // Sequencial do registro
            $s.=NL;
        }
        
        // REGISTRO 6 - Indicador de final de arquivo
        $s.="6"; // Tipo de registro
        $s.=padrl(" ", 390, "l"); // Preencher com 390 espa��es em branco
        $s.=padrl($this->numeroLote, 8, "l","0"); // Sequencial do registro
        $s.=NL;
        
        //$sql="update nfse set txt='$s' where id=".$this->nfeid;
        //gQuery($sql);
               
        $this->arqtxt=$s;
    } //fim
    public function envelopa() {
      // Envelopa
        $idLote="1";
        // cria DOM pro nfexml
        $dom = new DOMDocument();
        $dom->formatOutput = true;
        $dom->preserveWhiteSpace = false;
        //echo $this->nfexml;exit;
        $dom->loadXML($this->nfsexml,LIBXML_NOBLANKS | LIBXML_NOEMPTYTAG);
        //cria o objeto DOM para o novo xml
        $dom2 = new DOMDocument('1.0', 'UTF-8');
        $dom2->formatOutput = true;
        $dom2->preserveWhiteSpace = false;
        $node = $dom->getElementsByTagName("Rps")->item(0);
        $Rps=$node->C14N(FALSE,FALSE,NULL,NULL);
        $l.='<LoteRps id="'.$idLote.'">';
        $l.='<NumeroLote>'.$this->numeroLote.'</NumeroLote>';
        $l.='<Cnpj>'.$this->CNPJ.'</Cnpj>';
        $l.='<InscricaoMunicipal>'.$this->IM.'</InscricaoMunicipal>';
        $l.='<QuantidadeRps>1</QuantidadeRps>';
        $l.='<ListaRps>'.$Rps.'</ListaRps>';
        $l.='</LoteRps>';
        $this->nfsexml=$l;
        $this->signNFSe("LoteRps");
        $this->nfsexml=str_replace('<?xml version="1.0"?>','',$this->nfsexml);
        $this->nfsexml='<?xml version="1.0" encoding="UTF-8"?><EnviarLoteRpsEnvio xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns="http://www.abrasf.org.br/ABRASF/arquivos/nfse.xsd">'.$this->nfsexml.'</EnviarLoteRpsEnvio>';
    } //fim 
               
    public function limpaNumero($num){
        return(str_replace(".00","",floatval($num)));
    }
    /**
    * Assina XML
    */
    public function signNFSe($tag) {
      
        $sai=false;
        $nfefile=$this->nfsexml;
        $signn = $this->signXML($nfefile, $tag);
        
        $this->nfsexml = $signn;
/*
        if ($tag == 'InfRps' || $tag == 'LoteRps') {
            if ($this->errMsg=="") {
                if ( $signn = $this->signXML($nfefile, $tag) ) {
                    unlink($this->arqxml);
                    
                    if ( !file_put_contents($this->arqxml , $signn) ) {
                        $this->erros[]=M."Houve uma falha ao salvar a NFe assinada.";
                    } else {
                        $this->nfsexml=$signn;
                        $sai=true;
                    }
                } else {
                    $this->erros[]=M."Houve uma falha ao assinar a NFe.";
                } 
            } else {
                $this->erros[]=M.$this->errMsg." (".$this->cert.")";
            }
        }
        */
        return($sai);
    } //fim signNFSe
    
    // Valida XML assinado
    public function valida($xml,$schema = false) {
        $schema = (empty($schema)) ? $this->NFeSschema : $schema;
        $xsd = $this->xsdDir . $this->schemeVer . DIRECTORY_SEPARATOR . $schema;
        
        $aErr = array();
        $sai = $this->validXML($xml, $xsd, $aErr);
        if (!empty($this->errMsg)) {
            var_dump($this->errMsg);    
        }  
        if ($sai['error']<>'') {
            $e=explode(";",$sai['error']);
            foreach ($e as $el)
                $this->erros[]=trim($el);
        }
        return($sai);
    } //fim valida
    // Enviar para Sefaz
    function envia($xml="",$numero="") {
        $sai=true;
        //$sql="select * from nfe_numeros where id_armazens=0"; // numero do lote
        //$rs=gQuery($sql);
        //if ($rs->EOF) {
        //    $sql="insert into nfe_numeros (id_armazens,numero) values (0,0)";
        //    gQuery($sql);
            $numeroLote=1;
        //} else {
        //    $numeroLote=intval($rs->fields['numero'])+1;
        //}
        //$sql="update nfe_numeros set numero=$numeroLote where id_armazens=0";
        //gQuery($sql);
        //if ($xml==""){
        //    $xml=$this->nfexml;
        //}
        if ($ret = $this->sendLot(array($xml),$numeroLote)) {
            if ($ret['cStat']=='103') {
                $this->recibo=$ret['nRec'];
                $this->dataRecibo=$ret['dhRecbto'];
            } else {
                $this->erros[]=M.str_pad($ret['cStat'],10,' ')." ".$ret['xMotivo'];
                $sai=false;
            }
        }
        return($sai);
    } //fim envia
    
    public function enviaNFSe($xml="",$numero="") {
        $sai=true;
        
        $xml = $this->nfsexml;
        $xml=str_replace("\n",'',$xml);
        if ($ret = $this->sendRps($xml,$this->numeroLote)) {
            if ($ret['Protocolo'] <> '') {
                // Nova aceita... Salva no banco
                //$sql="update nfse_numeros set numero_nota=".$this->c['numeroNota']." where ambiente=".$this->c['ambiente']." and id_empresa=".$this->id_empresa;
                //gQuery($sql);
                //$sql="update nfse set situacao='Aceita',xml='$xml',data_recibo='".$ret['DataRecebimento']."',protocolo='".$ret['Protocolo']."' where id=".$this->nfeid;
                //gQuery($sql);
                $this->protocolo=$ret['Protocolo'];
                $this->numeroNota=$numeroNota;
                $this->numeroLote=$numeroLote;
            } else {
                //$sql="update nfse set situacao='Rejeitada',xml='$xml',mensagens='Codigo ".$ret['Codigo']."<br>".$ret['Mensagem']."<br>".$ret['Correcao']."' where id=".$this->nfeid;
                //gQuery($sql);
                $this->erros[]=str_pad($ret['Codigo'],10,' ')." ".$ret['Mensagem']."<br>".$ret['Correcao'];
                $sai=false;
            }
        } else {
              //$sql="update nfse set situacao='Nao enviada',xml='$xml',mensagens='Codigo ".$ret['Codigo']."<br>".$ret['Mensagem']."<br>".$ret['Correcao']."' where id=".$this->nfeid;
              //gQuery($sql);
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
    /**
     * sendRps
     * Envia lote de Notas Fiscais de Servi�o 
     *
     * @name sendRps
     * @package NFePHP
    **/
    public function sendRps($aNFSe,$idLote) {
        //identifica��o do servi�o
        $servico = 'EnvioLoteRPS';
        //recupera��o da vers�o
        $versao = $this->mURL[$servico]['version'];
        
        //recupera��o da url do servi�o
        $urlservico = $this->mURL[$servico]['URL'];
        
        //recupera��o do m�todo
        $metodo = $this->mURL[$servico]['method'];
        
        //montagem do namespace do servi�o
        $namespace = 'http://www.abrasf.org.br/ABRASF/arquivos/nfse.xsd';
        
        // monta string com todas as NFe enviadas no array
        $sNFSe = str_ireplace('<?xml version="1.0" encoding="utf-8"?>','',$aNFSe);
        $sNFSe = str_ireplace('<?xml version="1.0" encoding="UTF-8" standalone="no"?>','',$sNFSe);
        
        //envia dados via SOAP
        //montagem dos dados da mensagem SOAP
        $dados = trim(str_replace("\n","",$sNFSe));
        $cabec = '<?xml version="1.0" encoding="UTF-8"?><cabecalho xmlns="'. $namespace . '"><versaoDados>' . $versao . '</versaoDados></cabecalho>';
        $ambiente = 0;
        $retorno = $this->__sendSOAPNFSe($urlservico, $cabec, $dados, $metodo, $ambiente, $namespace);
        
        if ( isset($retorno) ) {
            //pega os dados do array retornado pelo NuSoap
            $retorno=str_replace('&lt;','<',$retorno);
            $retorno=str_replace('&gt;','>',$retorno);
            $retorno=str_replace('<?xml version="1.0" encoding="utf-8"?>','',$retorno);
            $xmlresp = utf8_encode($retorno);
            if ($xmlresp == ''){
                //houve uma falha na comunica��o SOAP
                $this->errStatus = true;
                $this->errMsg = 'Houve uma falha na comunica��o SOAP!!';
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
        // carga das variaveis da fun�ao do webservice envio de Ne em lote
        //identifica��o do servi�o
        $servico = 'ConsultaLoteRPS';
        //recupera��o da vers�o
        $versao = $this->mURL[$servico]['version'];
        //recupera��o da url do servi�o
        $urlservico = $this->mURL[$servico]['URL'];
        //recupera��o do m�todo
        $metodo = $this->mURL[$servico]['method'];
        //montagem do namespace do servi�o
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
                //houve uma falha na comunica��o SOAP
                $this->errStatus = TRUE;
                $this->errMsg = 'Houve uma falha na comunica��o SOAP!!';
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
        // carga das variaveis da fun�ao do webservice envio de Ne em lote
        //identifica��o do servi�o
        $servico = 'ConsultaSituacaoLoteRPS';
        //recupera��o da vers�o
        $versao = $this->mURL[$servico]['version'];
        //recupera��o da url do servi�o
        $urlservico = $this->mURL[$servico]['URL'];
        //recupera��o do m�todo
        $metodo = $this->mURL[$servico]['method'];
        //montagem do namespace do servi�o
        $namespace = 'http://www.abrasf.org.br/ABRASF/arquivos/nfse.xsd';
        $sNFSe = "<ConsultarSituacaoLoteRpsEnvio xmlns=\"http://www.abrasf.org.br/ABRASF/arquivos/nfse.xsd\"><Prestador><Cnpj>$cnpj</Cnpj><InscricaoMunicipal>$inscricaoMunicipal</InscricaoMunicipal></Prestador><Protocolo>$protocolo</Protocolo></ConsultarSituacaoLoteRpsEnvio>";
        //envia dados via SOAP
        //montagem do cabe�alho da comunica��o SOAP
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
                //houve uma falha na comunica��o SOAP
                $this->errStatus = TRUE;
                $this->errMsg = 'Houve uma falha na comunica��o SOAP!!';
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
     protected function __sendCURLNFSe($urlsefaz,$namespace,$cabecalho,$dados,$metodo,$ambiente='',$UF=''){
        if ($urlsefaz == ''){
            //n�o houve retorno
            $this->errMsg = "URL do webservice n�o dispon�vel.\n";
            $this->errStatus = true;
        }
        if ($ambiente == ''){
            $ambiente = $this->tpAmb;
        }
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
        "SOAPAction: https://www3.webiss.com.br/aracajuse_wsnfse_homolog/NfseServices.svc/" . $metodo,
        "Content-length: ". $tamanho,
        );
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
        curl_setopt($oCurl, CURLOPT_URL, $urlsefaz.'');
        curl_setopt($oCurl, CURLOPT_PORT , 443);
        curl_setopt($oCurl, CURLOPT_VERBOSE, 1);
        curl_setopt($oCurl, CURLOPT_HEADER, 1); //retorna o cabe�alho de resposta
        curl_setopt($oCurl, CURLOPT_SSLVERSION, 3);
        curl_setopt($oCurl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($oCurl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($oCurl, CURLOPT_SSLCERT, $this->pubKEY);
        curl_setopt($oCurl, CURLOPT_SSLKEY, $this->priKEY);
        curl_setopt($oCurl, CURLOPT_POST, 1);
        curl_setopt($oCurl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($oCurl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($oCurl, CURLOPT_HTTPHEADER,$parametros);
        $__xml = curl_exec($oCurl);
        $info = curl_getinfo($oCurl); //informa��es da conex�o
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
        if ($__xml === false){
            //n�o houve retorno
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
     * Estabelece comunica�ao com servidor SOAP 1.1 ou 1.2 da SEFAZ,
     * usando as chaves publica e privada parametrizadas na contru��o da classe.
     * Conforme Manual de Integra��o Vers�o 4.0.1
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
/**
 * Classe complementar
 * necess�ria para a comunica��o SOAP 
 * Remove algumas tags para adequar a comunica��o
 * ao padr�o Ruindows utilizado
 */
class NFSeSOAPClient extends SoapClient {
    
    public $soapRequest;
    public function __doRequest($request, $location, $action, $version) {
        
        $request = str_replace(':ns1', '', $request);
        $request = str_replace('ns1:', '', $request);
        $request = str_replace("\n", '', $request);
        $request = str_replace("\r", '', $request);
        
        if (strpos($request,"EnviarLoteRpsEnvio") !== false) {
            $request=str_replace("<EnviarLoteRPS/><param1>",'<EnviarLoteRPS xmlns="http://tempuri.org/"><loteXML>',$request);
            $request=str_replace("</param1>","</loteXML></EnviarLoteRPS>",$request);
        }
        
        if (strpos($request,"ConsultarLoteRps") !== false) {
            $request=str_replace("<ConsultarLoteRPS/><param1>",'<ConsultarLoteRPS xmlns="http://tempuri.org/"><loteXML>',$request);
            $request=str_replace("</param1>","</loteXML></ConsultarLoteRPS>",$request);
        }
        
        if (strpos($request,"ConsultarSituacaoLoteRps") !== false) {
            $request=str_replace("<ConsultarSituacaoLoteRPS/><param1>",'<ConsultarSituacaoLoteRPS xmlns="http://tempuri.org/"><loteXML>',$request);
            $request=str_replace("</param1>","</loteXML></ConsultarSituacaoLoteRPS>",$request);
        }
        $this->soapRequest=$request;
        $filename = 'requests_nfse/' . uniqid() . '.xml';
        if (file_exists($filename)) {
            unlink($filename);
        }
        file_put_contents($filename, $this->soapRequest);
        return (parent::__doRequest($request, $location, $action, $version));
    }
} //fim da classe NFSeSOAPClient
?>
