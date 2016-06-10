<?php
/**
 * Este arquivo � parte do projeto NFePHP - Nota Fiscal eletr�nica em PHP.
 *
 * Este programa � um software livre: voc� pode redistribuir e/ou modific�-lo
 * sob os termos da Licen�a P�blica Geral GNU como � publicada pela Funda��o
 * para o Software Livre, na vers�o 3 da licen�a, ou qualquer vers�o posterior.
 * e/ou
 * sob os termos da Licen�a P�blica Geral Menor GNU (LGPL) como � publicada pela
 * Funda��o para o Software Livre, na vers�o 3 da licen�a, ou qualquer vers�o posterior.
 *
 * Este programa � distribu�do na esperan�a que ser� �til, mas SEM NENHUMA
 * GARANTIA; nem mesmo a garantia expl�cita definida por qualquer VALOR COMERCIAL
 * ou de ADEQUA��O PARA UM PROP�SITO EM PARTICULAR,
 * veja a Licen�a P�blica Geral GNU para mais detalhes.
 *
 * Voc� deve ter recebido uma c�pia da Licen�a Publica GNU e da
 * Licen�a P�blica Geral Menor GNU (LGPL) junto com este programa.
 * Caso contr�rio consulte
 * <http://www.fsfla.org/svnwiki/trad/GPLv3>
 * ou
 * <http://www.fsfla.org/svnwiki/trad/LGPLv3>.
 *
 * @category  NFePHP
 * @package   NFePHP
 * @name      DanfceNFePHP.class.php
 * @copyright 2009-2013 &copy; NFePHP
 * @license   http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 *            http://www.gnu.org/licenses/lgpl.html GNU/LGPL v.3
 * @version   1.12
 * @link      http://www.nfephp.org/
 * @author    Roberto Spadim <roberto at spadim dot com dot br>
 * 
 * 
 * CONTRIBUIDORES (por ordem alfabetica):
 *            Roberto L. Machado <linux dot rlm at gmail dot com>   
 *            Mario Almeida <mario at grupopmz dot com dot br>
 * 
 */
//namespace nfephp\NFe;
//define o caminho base da instala��o do sistema
if (!defined('PATH_ROOT')) {
    define('PATH_ROOT', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR);
}
//ajuste do tempo limite de resposta do processo
set_time_limit(1800);
//classes utilizadas
//classes utilizadas

require_once PATH_ROOT.'webservicos/NFePhp/classes/libs/External/mpdf/mpdf.php';
require_once PATH_ROOT.'webservicos/NFePhp/classes/libs/External/qrcode/qrcode.class.php';
require_once PATH_ROOT.'webservicos/NFePhp/classes/libs/Common/CommonNFePHP.class.php';
require_once PATH_ROOT.'webservicos/NFePhp/classes/libs/Common/DocumentoNFePHP.interface.php';
/**
 * Classe DanfceNFePHP
 * Objetivo - impress�o de NFC-e em uma unica pagina (bobina)
 */
class DanfeNFCeNFePHP extends CommonNFePHP implements DocumentoNFePHP
{
    //publicas
    public $idToken;
    public $emitToken;
    public $papel;
    
    //privadas
    protected $xml; // string XML NFe
    protected $logomarca=''; // path para logomarca em jpg
    protected $formatoChave="#### #### #### #### #### #### #### #### #### #### ####";
    protected $debugMode=0; //ativa ou desativa o modo de debug
    protected $nfeProc;
    protected $nfe;
    protected $infNFe;
    protected $ide;
    protected $enderDest;
    protected $ICMSTot;
    protected $imposto;
    protected $emit;
    protected $enderEmit;
    protected $det;
    protected $pag;
    protected $dest;
    protected $mPDF;
    protected $html;
    protected $imgQRCode;
    protected $urlConsulta = array(
        '1'=> array(
            '12'=> array(
                'chave'=>'http://www.sped.fazenda.pr.gov.br/modules/conteudo/conteudo.php?conteudo=100',
                'QR'=>'http://www.sefaznet.ac.gov.br/nfe/NFe.jsp?opc=3'),
            '13'=> array(
                'chave'=>'http://sistemas.sefaz.am.gov.br/nfceweb/formConsulta.do',
                'QR'=>'http://sistemas.sefaz.am.gov.br/nfceweb/consultarNFCe.jsp'),
            '21'=> array(
                'chave'=>'',
                'QR'=>'http://www.nfe.ma.gov.br/portal/consultarNFCe.jsp'),
            '51'=> array(
                'chave'=>'',
                'QR'=>'http://www.nfe.sefaz.mt.gov.br/portal/consultarNFCe.jsp'),
            '24'=> array(
                'chave'=>'',
                'QR'=>'http://www.nfe.rn.gov.br/portal/consultarNFCe.jsp'),
            '43'=> array(
                'chave'=>'',
                'QR'=>'https://www.sefaz.rs.gov.br/NFCE/NFCE-COM.aspx'),
            '28'=> array(
                'chave'=>'',
                'QR'=>'http://www.nfe.se.gov.br/portal/consultarNFCe.jsp')
        ),
        '2' => array(
            '12'=> array(
                'chave'=>'http://www.sped.fazenda.pr.gov.br/modules/conteudo/conteudo.php?conteudo=100',
                'QR'=>'http://www.dfeportal.fazenda.pr.gov.br/dfe-portal/rest/servico/consultaNFCe'),
            '13'=> array(
                'chave'=>'http://sistemas.sefaz.am.gov.br/nfceweb/formConsulta.do',
                'QR'=>'http://homnfe.sefaz.am.gov.br/nfceweb/consultarNFCe.jsp'),
            '21'=> array(
                'chave'=>'',
                'QR'=>'http://www.hom.nfe.ma.gov.br/portal/consultarNFCe.jsp'),
            '51'=> array(
                'chave'=>'',
                'QR'=>'http://www.hom.nfe.sefaz.mt.gov.br/portal/consultarNFCe.jsp'),
            '24'=> array(
                'chave'=>'',
                'QR'=>'http://www.hom.nfe.rn.gov.br/portal/consultarNFCe.jsp'),
            '43'=> array(
                'chave'=>'',
                'QR'=>'https://www.sefaz.rs.gov.br/NFCE/NFCE-COM.aspx'),
            '28'=> array(
                'chave'=>'',
                'QR'=>'http://www.hom.nfe.se.gov.br/portal/consultarNFCe.jsp')
        ));
    /**
     * __contruct
     * @param type $docXML
     * @param type $sPathLogo
     * @param type $mododebug
     * @param type $idToken
     * @param type $Token
     */
    public function __construct($docXML = '', $sPathLogo = '', $mododebug = 0, $idToken = '', $emitToken = '')
    {
        if (is_numeric($mododebug)) {
            $this->debugMode = $mododebug;
        }
        if ($this->debugMode) {
            //ativar modo debug
            error_reporting(E_ALL);
            ini_set('display_errors', 'On');
        } else {
            //desativar modo debug
            error_reporting(0);
            ini_set('display_errors', 'Off');
        }
        $this->papel = array(80, 'one-page');
        $this->xml          = $docXML;
        $this->logomarca    = $sPathLogo;
        if (!empty($this->xml)) {
            $this->dom = new DomDocument;
            $this->dom->loadXML($this->xml);
            $this->nfeProc    = $this->dom->getElementsByTagName("nfeProc")->item(0);
            $this->nfe        = $this->dom->getElementsByTagName("NFe")->item(0);
            $this->infNFe     = $this->dom->getElementsByTagName("infNFe")->item(0);
            $this->ide        = $this->dom->getElementsByTagName("ide")->item(0);
            $this->emit       = $this->dom->getElementsByTagName("emit")->item(0);
            $this->enderEmit  = $this->dom->getElementsByTagName("enderEmit")->item(0);
            $this->det        = $this->dom->getElementsByTagName("det");
            $this->dest       = $this->dom->getElementsByTagName("dest")->item(0);
            $this->pag        = $this->dom->getElementsByTagName("pag");
            $this->imposto    = $this->dom->getElementsByTagName("imposto")->item(0);
            $this->ICMSTot    = $this->dom->getElementsByTagName("ICMSTot")->item(0);
        }
        $this->idToken = $idToken;
        $this->emitToken = $emitToken;
        
    } //fim __construct
    public function getIdToken()
    {
        return $this->idToken;
    }
    
    public function setIdToken($str)
    {
        $this->idToken = $str;
    }
    
    public function getEmitToken()
    {
        return $this->emitToken;
    }
    
    public function setEmitToken($str)
    {
        $this->emitToken = $str;
    }
    
    public function getPapel()
    {
        return $this->papel;
    }
    
    public function setPapel($aPap)
    {
        $this->papel = $aPap;
    }
    
    public function simpleConsistencyCheck()
    {
        if (1 == 2 || $this->xml == null || $this->infNFe == null || $this->ide == null) {
            return false;
        }
        return true;
    } //fim simpleConsistencyCheck
    
    /**
     * monta
     * @param type $orientacao
     * @param type $papel
     * @param type $logoAlign
     * @return type
     */
    public function monta ($orientacao = '', $papel = array(80, 'one-page'), $logoAlign = 'C', $detalhes = false)
    {
        return $this->montaDANFE($detalhes);
    }//fim monta
    
    /**
     * printDocument
     * @param type $nome
     * @param type $destino
     * @param type $printer
     * @return type
     */
    public function printDocument($nome = '', $destino = 'I', $printer = '')
    {
        return $this->printDANFE($nome, $destino, $printer);
    }//fim printDocument
    
    /**
     * o objetivo desta fun��o � ler o XML e gerar o DANFE com auxilio de convers�o HTML-PDF
     * @param type $detalhes
     * @return type
     */
    public function montaDANFE($detalhes = false)
    {
        //DADOS DA NF
        if (isset($this->nfeProc)) {
            $nProt = $this->pSimpleGetValue($this->nfeProc, "nProt");
            $dhRecbto  = $this->pSimpleGetValue($this->nfeProc, "dhRecbto");
        }
        $digVal = $this->pSimpleGetValue($this->nfe, "DigestValue");
        $chNFe = str_replace('NFe', '', $this->infNFe->getAttribute("Id"));
        $tpAmb = $this->pSimpleGetValue($this->ide, 'tpAmb');
        $cUF = $this->pSimpleGetValue($this->ide, 'cUF');
        $nNF = $this->pSimpleGetValue($this->ide, 'nNF');
        $serieNF = str_pad($this->pSimpleGetValue($this->ide, "serie"), 3, "0", STR_PAD_LEFT);
        $dhEmi = $this->pSimpleGetValue($this->ide, "dhEmi");
        $vTotTrib = $this->pSimpleGetValue($this->ICMSTot, "vTotTrib");
        $vProd = $this->pSimpleGetValue($this->ICMSTot, "vProd");
        $vNF = $this->pSimpleGetValue($this->ICMSTot, "vNF");
        $vDesc  = $this->pSimpleGetValue($this->ICMSTot, "vDesc");
        $vICMS = $this->pSimpleGetValue($this->ICMSTot, "vICMS");
        $qtdItens = $this->det->length;
        $urlChave = $this->urlConsulta[$tpAmb][12]['chave'];
        $urlQR = $this->urlConsulta[$tpAmb][12]['QR'];
        //DADOS DO EMITENTE
        $emitRazao  = $this->pSimpleGetValue($this->emit, "xNome");
        $emitCnpj   = $this->pSimpleGetValue($this->emit, "CNPJ");
        $emitCnpj   = $this->pFormat($emitCnpj, "##.###.###/####-##");
        $emitIE     = $this->pSimpleGetValue($this->emit, "IE");
        $emitFone = $this->pSimpleGetValue($this->enderEmit, "fone");
        $foneLen = strlen($emitFone);
        if ($foneLen>0) {
            $fone2 = substr($emitFone, 0, $foneLen-4);
            $fone1 = substr($emitFone, 0, $foneLen-8);
            $emitFone = '('.$fone1.') '.substr($fone2, -4).'-'.substr($emitFone, -4);
        } else {
            $emitFone = '';
        }
        $emitLgr = $this->pSimpleGetValue($this->enderEmit, "xLgr");
        $emitNro = $this->pSimpleGetValue($this->enderEmit, "nro");
        $emitCpl = $this->pSimpleGetValue($this->enderEmit, "xCpl", " - ");
        $emitBairro = $this->pSimpleGetValue($this->enderEmit, "xBairro");
        $emitCEP = $this->pFormat($this->pSimpleGetValue($this->enderEmit, "CEP"), "#####-###");
        $emitMun = $this->pSimpleGetValue($this->enderEmit, "xMun");
        $emitUF = $this->pSimpleGetValue($this->enderEmit, "UF");
        //pag
        $tPagNome = '';
        $pagHtml = $this->pagamento($this->pag, $tPagNome);
        
        
        //IMPOSTOS
        $impHtml = "<table width=\"100%\">\n";
        $impHtml .= "<tr>\n";
        $impHtml .= "<td align=\"left\">".utf8_encode('VALOR PRODUTOS/SERVI�OS')."</td>\n";
        $impHtml .= "<td align=\"right\">".number_format($vProd, 2, ',', '.')."</td>\n";
        $impHtml .= "</tr>\n";
        $impHtml .= "<tr>\n";
        $impHtml .= "<td align=\"left\">DESCONTOS</td>\n";
        $impHtml .= "<td align=\"right\">".number_format($vDesc, 2, ',', '.')."</td>\n";
        $impHtml .= "</tr>\n";
        $impHtml .= "<tr>\n";
        $impHtml .= "<td align='left'>VALOR TOTAL</td>\n";
        $impHtml .= "<td align='right'>".number_format($vNF, 2, ',', '.')."</td>\n";
        $impHtml .= "</tr>\n";
        $impHtml .= "</table>\n";
        
        //necess�rio para QRCode
        $cDest  = '';
        if (isset($this->dest)) {
            $considEstrangeiro = !empty($this->dest->getElementsByTagName("idEstrangeiro")->item(0)->nodeValue)
                    ? $this->dest->getElementsByTagName("idEstrangeiro")->item(0)->nodeValue
                    : '';
            $consCPF = !empty($this->dest->getElementsByTagName("CPF")->item(0)->nodeValue)
                    ? $this->dest->getElementsByTagName("CPF")->item(0)->nodeValue
                    : '';
            $consCNPJ = !empty($this->dest->getElementsByTagName("CNPJ")->item(0)->nodeValue)
                    ? $this->dest->getElementsByTagName("CNPJ")->item(0)->nodeValue
                    : '';
            $cDest = $consCPF.$consCNPJ.$considEstrangeiro; //documentos do consumidor
        }
        
        //DADOS PARA QRCODE
        $idToken = '';
        $Token = '';
        $this->imgQRCode = $this->makeQRCode(
            $chNFe,
            $urlQR,
            $tpAmb,
            $cDest,
            $dhEmi,
            $vNF,
            $vICMS,
            $digVal,
            $idToken,
            $Token
        );
        //FORMATA��O DOS CAMPOS
        $numNF = "NFCe n� ".$this->pFormat($nNF, "###.###.###");
        $tsHora = $this->pConvertTime($dhEmi);
        $tsProt = $this->pConvertTime($dhRecbto);
        $valorProdutos = number_format($vProd, 2, ",", ".");
        $valorTotal = number_format($vNF, 2, ",", ".");
        
        //CABE�ALHO
        $this->html = "";
        $this->html .= "<html>\n";
        $this->html .= "<head>\n";
        $this->html .= "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">";
        $this->html .= "<style>";
        $this->html .= "body {";
        $this->html .= "    font-family: Times New Roman;";
        $this->html .= "    font-size: 8pt;";
        $this->html .= "    background: transparent url(\'bgbarcode.png\') repeat-y scroll left top;";
        $this->html .= "}";
        $this->html .= "h5, p {";
        $this->html .= "    margin: 0pt;";
        $this->html .= "}";
        $this->html .= "table.items {";
        $this->html .= "    font-size: 8pt;";
        $this->html .= "    border-collapse: collapse;";
        $this->html .= "    border: 3px solid #880000;";
        $this->html .= "}";
        $this->html .= "td {";
        $this->html .= "    font-size: 7pt;";
        $this->html .= "    vertical-align: top;";
        $this->html .= "    text-align: center;";
        $this->html .= "}";
        $this->html .= "table thead td {";
        $this->html .= "    background-color: #EEEEEE;";
        $this->html .= "    text-align: center;";
        $this->html .= "}";
        $this->html .= "table tfoot td { background-color: #AAFFEE;";
        $this->html .= "    text-align: center;";
        $this->html .= "}";
        $this->html .= ".barcode {";
        $this->html .= "    padding: 1.5mm;";
        $this->html .= "    margin: 0;";
        $this->html .= "    vertical-align: top;";
        $this->html .= "    color: #000000;";
        $this->html .= "}";
        $this->html .= ".barcodecell {";
        $this->html .= "    text-align: center;";
        $this->html .= "    vertical-align: middle;";
        $this->html .= "    padding: 0;";
        $this->html .= "}";
        $this->html .= ".menor { font-size: 7pt; text-align: center; }";
        $this->html .= "</style>\n";
        $this->html .= "</head>\n";
        $this->html .= "<body>\n";
        $this->html .= "<table width=\"100%\">\n";
        $this->html .= "<tr>\n";
        $this->html .= "<td><h2><i>NFC-e</i></h2><br><img src=\"$this->logomarca\" width=\"82\" ></td>\n";
        $this->html .= "<td colspan=\"2\">".utf8_encode($emitRazao)."<br>CNPJ:$emitCnpj I.E.:$emitIE<br>".
                utf8_encode($emitLgr . ", " . $emitNro). "<br>".
                utf8_encode($emitCpl) . "<br>".
                utf8_encode($emitBairro . ", " . $emitMun . ", " . $emitUF) . "<br>CEP: $emitCEP $emitFone</td>\n";
        $this->html .= "</tr>\n";
        $this->html .= "<tr>\n";
        $this->html .= "<td colspan=\"3\" class=\"menor\">".
                utf8_encode("DANFE NFC-E Nota Fiscal Eletr�nica para Consumidor Final")."</td>\n";
        $this->html .= "</tr>\n";
        if ($tpAmb == 1) {
            $this->html .= "<tr>\n";
            $this->html .= "<td colspan=\"3\" class=\"menor\"><b>".
                    utf8_encode("NFC-e n�o permite aproveitamento de cr�dito de ICMS")."<b></td>\n";
            $this->html .= "</tr>\n";
        } else {
            $this->html .= "<tr>\n";
            $this->html .= "<td colspan=\"3\" class=\"menor\">NFC-e Emitida em Ambiente de Testes</td>\n";
            $this->html .= "</tr>\n";
            $this->html .= "<tr>\n";
            $this->html .= "<td colspan=\"3\" ><b>SEM VALOR FISCAL</b></td>\n";
            $this->html .= "</tr>\n";
        }
        $this->html .= "</table>\n";
        
        $this->html .= "</table>\n";
        //BLOCO DE DETALHES
        if ($detalhes) {
            //ITENS
            $this->html .= $this->itens($this->det);
            //IMPOSTOS
            $this->html .= $impHtml;
            //PAGAMENTOS
            $this->html .= $pagHtml;
            //CONSUMIDOR
            $this->html .= $this->consumidor($this->dest);
        } else {
        
        //TOTAIS DA NF
        $this->html .= "<table width=\"100%\">\n";
        $this->html .= "<tr>\n";
        $this->html .= "<td align=\"left\">QTDADE TOTAL DE ITENS</td>\n";
        $this->html .= "<td align=\"right\">$qtdItens</td>\n";
        $this->html .= "</tr>\n";
        
        $this->html .= "<tr>\n";
        $this->html .= "<td align=\"left\">VALOR TOTAL R$</td>\n";
        $this->html .= "<td align=\"right\">".number_format($vNF, 2, ',', '.')."</td>\n";
        $this->html .= "</tr>\n";
        
        $this->html .= "<tr>\n";
        $this->html .= "<td align=\"left\">DESCONTO TOTAL R$</td>\n";
        $this->html .= "<td align=\"right\">".number_format($vNF, 2, ',', '.')."</td>\n";
        $this->html .= "</tr>\n";
        
        
        $this->html .= "<tr>\n";
        $this->html .= "<td align=\"left\">FORMA DE PAGAMENTO</td>\n";
        $this->html .= "<td align=\"right\">VALOR PAGO</td>\n";
        $this->html .= "</tr>\n";
        $this->html .= "<tr>\n";
        $this->html .= "<td align=\"left\">$tPagNome</td>\n";
        $this->html .= "<td align=\"right\">".number_format($vNF, 2, ',', '.')."</td>\n";
        $this->html .= "</tr>\n";
        }
        
        $this->html .= "<tr>\n";
        $this->html .= "<td align=\"left\">".utf8_encode('Informa��o dos Tributos Incidentes')."<br>(Lei Federal 12.741/2012) </td>\n";
        $this->html .= "<td align=\"right\">".number_format($vTotTrib, 2, ',', '.')."</td>\n";
        $this->html .= "</tr>\n";
        $this->html .= "</table>\n\n\n";

        //DADOS DA NOTA
        $this->html .= "<table width=\"100%\">\n";
        $this->html .= "<tr>\n";
        $this->html .= "<td>".utf8_encode($numNF)."</td>\n";
        $this->html .= "<td>".utf8_encode('S�rie:')." $serieNF</td>\n";
        $this->html .= "<td>".date('d/m/Y H:i:s', $tsHora)."</td>\n";
        $this->html .= "</tr>\n";
        $this->html .= "</table>\n";
        
        $this->html .= "<table width=\"100%\">\n";
        $this->html .= "<tr>\n";
        $this->html .= "<td>Prot. ".utf8_encode('Autoriza��o')." $nProt - ".date('d/m/Y H:i:s', $tsProt)."</td>\n";
        $this->html .= "</tr>\n";
        $this->html .= "</table>\n";
        
        //CHAVE DE ACESSO
        $this->html .= "<table width=\"100%\">\n";
        $this->html .= "<tr>\n";
        $this->html .= "<td  colspan=\"3\">Consulte pela Chave de Acesso em <a href=\"$urlChave\" >".
            "$urlChave</a></td>\n";
        $this->html .= "</tr>\n";
        $this->html .= "<tr>\n";
        $this->html .= "<td  colspan=\"3\">Chave de Acesso<br>$chNFe</td>\n";
        $this->html .= "</tr>\n";
        $this->html .= "<tr>\n";
        $this->html .= "<td  colspan=\"3\"><b>Consulta via leitor QR Code</b></td>\n";
        $this->html .= "</tr>\n";
        $this->html .= "<tr>\n";
        $this->html .= "<td  colspan=\"3\"><img src=\"./".$this->imgQRCode."\" ></td>\n";
        $this->html .= "</tr>\n";
        $this->html .= "</table>\n";
        
        /*
        //TOTAIS DA NF
        $this->html .= "<table width=\"100%\">\n";
        $this->html .= "<tr>\n";
        $this->html .= "<td align=\"left\">QTDADE TOTAL DE ITENS</td>\n";
        $this->html .= "<td align=\"right\">$qtdItens</td>\n";
        $this->html .= "</tr>\n";
        $this->html .= "<tr>\n";
        $this->html .= "<td align=\"left\">VALOR TOTAL R$</td>\n";
        $this->html .= "<td align=\"right\">".number_format($vNF, 2, ',', '.')."</td>\n";
        $this->html .= "</tr>\n";
        $this->html .= "<tr>\n";
        $this->html .= "<td align=\"left\">FORMA DE PAGAMENTO</td>\n";
        $this->html .= "<td align=\"right\">VALOR PAGO</td>\n";
        $this->html .= "</tr>\n";
        $this->html .= "<tr>\n";
        $this->html .= "<td align=\"left\">$tPagNome</td>\n";
        $this->html .= "<td align=\"right\">".number_format($vNF, 2, ',', '.')."</td>\n";
        $this->html .= "</tr>\n";
        $this->html .= "<tr>\n";
        $this->html .= "<td align=\"left\">".utf8_encode('Informa��o dos Tributos Incidentes')."<br>(Lei Federal 12.741/2012) </td>\n";
        $this->html .= "<td align=\"right\">".number_format($vTotTrib, 2, ',', '.')."</td>\n";
        $this->html .= "</tr>\n";*/
        $this->html .= "</body>\n</html>\n";
        return $chNFe;
    }//fim da fun��o montaDANFE
    
    
    protected function pagamento($pag, &$tPnome)
    {
    	
        
        
        if (!isset($pag)) {
            return '';
        }
        //DADOS DE PAGAMENTO
        $oldtBand = '';
        $oldtPag = '';
        $pagHtml = "<table width=\"100%\">\n<tr>";
        $pagHtml .= "<td align=\"left\">PAGAMENTOS</td>\n";
        $pagHtml .= "<td></td></tr>\n";
        foreach ($pag as $pagI) {
        	
            $tPag = $this->pSimpleGetValue($pagI, "tPag");
            $tPagNome = $this->tipoPag($tPag);
            $tPnome = $tPagNome;
            $vPag = number_format($this->pSimpleGetValue($pagI, "vPag"), 2, ",", ".");
            $card = $pagI->getElementsByTagName("card")->item(0);
            //cart�o
            if (isset($card)) {
                $cardCNPJ = $this->pSimpleGetValue($card, "CNPJ");
                $tBand    = $this->pSimpleGetValue($card, "tBand");
                //$cAut = $this->pSimpleGetValue($card, "cAut");
                $tBandNome = self::getCardName($tBand);
            }
            if ($tPag != $oldtPag) {
                $pagHtml .= "<tr>\n";
                $pagHtml .= "<td align=\"left\">".utf8_encode($tPagNome)."</td>\n";
                $pagHtml .= "<td align=\"right\">$vPag</td>\n";
                $pagHtml .= "</tr>\n";
                $oldtPag = $tPag;
            }
            if ($cardCNPJ != '' && $oldtBand != $tBand) {
                $pagHtml .= "<tr>\n";
                $pagHtml .= "<td align=\"left\">".utf8_encode($tBandNome)."</td>\n";
                $pagHtml .= "<td align=\"right\">".$this->pFormat($cardCNPJ, "##.###.###/####-##")."</td>\n";
                $pagHtml .= "</tr>\n";
                $oldtBand = $tBand;
            }
        } //fim foreach
        $pagHtml .= "</table>\n";
        return $pagHtml;
    }
    protected static function getCardName($tBand)
    {
        switch ($tBand) {
            case '01':
                $tBandNome = 'VISA';
                break;
            case '02':
                $tBandNome = 'MASTERCARD';
                break;
            case '03':
                $tBandNome = 'AMERICAM EXPRESS';
                break;
            case '04':
                $tBandNome = 'SOROCRED';
                break;
            case '99':
                $tBandNome = 'OUTROS';
        }
        return $tBandNome;
    }//fim getCardName
    
    protected function tipoPag($tPag)
    {
        switch ($tPag) {
            case '01':
                $tPagNome = 'Dinheiro';
                break;
            case '02':
                $tPagNome = 'Cheque';
                break;
            case '03':
                $tPagNome = 'Cart�o de Cr�dito';
                break;
            case '04':
                $tPagNome = 'Cart�o de D�bito';
                break;
            case '05':
                $tPagNome = 'Cr�dito Loja';
                break;
            case '10':
                $tPagNome = 'Vale Alimenta��o';
                break;
            case '11':
                $tPagNome = 'Vale Refei��o';
                break;
            case '12':
                $tPagNome = 'Vale Presente';
                break;
            case '13':
                $tPagNome = 'Vale Combust�vel';
                break;
            case '99':
                $tPagNome = 'Outros';
        }
        return $tPagNome;
    }
    
    protected function itens($det)
    {
        if (!isset($det)) {
            return '';
        }
        //ITENS
        $itensHtml = "<table width='100%'>\n";
        $itensHtml .= "<tr>\n";
        $itensHtml .= "<td>#</td>\n";
        $itensHtml .= "<td>".utf8_encode('C�DIGO')."</td>\n";
        $itensHtml .= "<td>".utf8_encode('DESCRI��O')."</td>\n";
        $itensHtml .= "<td>QUANT.</td>\n";
        $itensHtml .= "<td>UN.</td>\n";
        $itensHtml .= "<td>VL.UNIT.</td>\n";
        $itensHtml .= "<td>VL.TOTAL</td>\n";
        $itensHtml .= "</tr>\n";
        foreach ($det as $detI) {
            $thisItem   = $detI;
            $prod       = $thisItem->getElementsByTagName("prod")->item(0);
            $nitem      = $thisItem->getAttribute("nItem");
            $cProd      = $this->pSimpleGetValue($prod, "cProd");
            $xProd      = $this->pSimpleGetValue($prod, "xProd");
            $qCom       = number_format($this->pSimpleGetValue($prod, "qCom"), 2, ",", ".");
            $uCom       = $this->pSimpleGetValue($prod, "uCom");
            $vUnCom     = number_format($this->pSimpleGetValue($prod, "vUnCom"), 2, ",", ".");
            $vProd      = number_format($this->pSimpleGetValue($prod, "vProd"), 2, ",", ".");
            $itensHtml .=  "<tr>\n";
            $itensHtml .=  "<td align=\"left\">".utf8_encode($nitem)."</td>\n";
            $itensHtml .=  "<td align=\"left\">".utf8_encode($cProd)."</td>\n";
            $itensHtml .=  "<td align=\"left\">".utf8_encode($xProd)."</td>\n";
            $itensHtml .=  "<td align=\"right\">$qCom</td>\n";
            $itensHtml .=  "<td>$uCom</td>\n";
            $itensHtml .=  "<td align=\"right\">".utf8_encode($vUnCom)."</td>\n";
            $itensHtml .=  "<td align=\"right\">$vProd</td>\n";
            $itensHtml .=  "</tr>\n";
        }
        $itensHtml .= "</table>\n";
        return $itensHtml;
    }//fim itens
    protected function consumidor($dest)
    {

        //DADOS DO CONSUMIDOR
        if (!isset($dest)) {
            return '';
        }
        $enderDest = $dest->getElementsByTagName("enderDest")->item(0);
        $consNome = $this->pSimpleGetValue($enderDest, "xNome");
        $consFone = $this->pSimpleGetValue($enderDest, "fone");
        $foneLen = strlen($consFone);
        if ($foneLen > 0) {
            $fone2 = substr($consFone, 0, $foneLen-4);
            $fone1 = substr($consFone, 0, $foneLen-8);
            $consFone = '('.$fone1.') '.substr($fone2, -4).'-'.substr($consFone, -4);
        } else {
            $consFone = '';
        }
        $consLgr = $this->pSimpleGetValue($enderDest, "xLgr");
        $consNro = $this->pSimpleGetValue($enderDest, "nro");
        $consCpl = $this->pSimpleGetValue($enderDest, "xCpl", " - ");
        $consBairro = $this->pSimpleGetValue($enderDest, "xBairro");
        $consCEP = $this->pFormat($this->pSimpleGetValue($enderDest, "CEP"));
        $consMun = $this->pSimpleGetValue($enderDest, "xMun");
        $consUF = $this->pSimpleGetValue($enderDest, "UF");
        $considEstrangeiro = $this->pSimpleGetValue($dest, "idEstrangeiro");
        $consNome = $this->pSimpleGetValue($dest, "xNome");
        $consCPF = $this->pSimpleGetValue($dest, "CPF");
        $consCNPJ = $this->pSimpleGetValue($dest, "CNPJ");
        $consDoc = $consCPF.$consCNPJ.$considEstrangeiro; //documentos do consumidor
        
        $consHtml = '';
        $consHtml .= "<table width='100%'>\n";
        $consHtml .= "<tr>\n<td>DADOS DO CONSUMIDOR</td>\n</tr>\n";
        $consHtml .= "<tr>\n<td>CNPJ/CPF: ".utf8_encode($consDoc)."</td>\n</tr>\n";
        $consHtml .= "<tr>\n<td>".utf8_encode($consNome)."</td>\n</tr>\n";
        $consHtml .= "<tr>\n";
        $consHtml .= "<td>".utf8_encode($consLgr.", ".$consNro.$consCpl)."<BR>\n".
                utf8_encode($consBairro." - ".$consCEP)."<BR>\n".
                utf8_encode($consMun." - ".$consUF." "."Fone/Fax: ".$consFone)."</td>\n";
        $consHtml .= "</tr>\n";
        $consHtml .= "</table>\n";
        return $consHtml;
    }//fim consumidor
    /**
     * 
     * @param type $nome
     * @param type $destino
     * @return type
     */
    public function printDANFE($output = 'pdf', $nome = '', $destino = 'I')
    {
    	$output = 'pdf';

        if ($output == 'pdf') {
            //montagem do pdf
            
            
            if (is_array($this->papel) && strtolower($this->papel[1])=='one-page') {
                $mpdf=new mPDF('', array($this->papel[0], 841.89), 0, '', 0, 0, 0, 0, 0, 'P');
                $mpdf->useCoreFontsOnly = true;
                $mpdf->WriteHTML($this->html, 0, true, false);
                $this->papel=array($this->papel[0], $mpdf->y);
            }
            $this->mpdf=new mPDF('', $this->papel, 0, '', 0, 0, 0, 0, 0, 'P');
            $this->mpdf->WriteHTML($this->html);
            if (is_file($this->imgQRCode)) {
                unlink($this->imgQRCode);
            }
            $this->mpdf->Output($nome, $destino);
            
        } else {
            echo $this->html;
            if (is_file($this->imgQRCode)) {
                unlink($this->imgQRCode);
            }
        }
        return true;
    }//fim printDANFE
    
    /**
     * str2Hex
     * Converte string para haxadecimal ASCII
     * @param type $str
     * @return string
     */
    protected static function str2Hex($str)
    {
        if ($str == '') {
            return '';
        }
        $hex = "";
        $iCount = 0;
        do {
            $hex .= sprintf("%02x", ord($str{$iCount}));
            $iCount++;
        } while ($iCount < strlen($str));
        return $hex;
    }//fim str2Hex
    
    /**
     * hex2Str
     * Converte hexadecimal ASCII para string
     * @param type $str
     * @return type
     */
    protected static function hex2Str($str)
    {
        if ($str == '') {
            return '';
        }
        $bin = "";
        $iCount = 0;
        do {
            $bin .= chr(hexdec($str{$iCount}.$str{($iCount + 1)}));
            $iCount += 2;
        } while ($iCount < strlen($str));
        return $bin;
    }//fim hex2Str
    protected function makeQRCode(
        $chNFe,
        $url,
        $tpAmb,
        $cDest = '',
        $dhEmi = '',
        $vNF = '',
        $vICMS = '',
        $digVal = '',
        $idToken = '000001',
        $Token = ''
    ) {
    	$idToken = '000001';
    	//$Token = "NPKCY3E3VNIZB99AGVWAQGZCNO5SSG0VCYUK";
    	$Token = "QETQWNGAXOZCJQYISB6HC6AYT4NYPLTLCJRR";
        $nVersao = '100'; //vers�o do QRCode
        $dhHex = self::str2Hex($dhEmi);
        $digHex = self::str2Hex($digVal);
        
        $seq = '';
        $seq .= 'chNFe=' . $chNFe;
        $seq .= '&nVersao=' . $nVersao;
        $seq .= '&tpAmb=' . $tpAmb;
        if ($cDest != '') {
            $seq .= '&cDest=' . $cDest;
        }
        $seq .= '&dhEmi=' . strtolower($dhHex);
        $seq .= '&vNF=' . $vNF;
        $seq .= '&vICMS=' . $vICMS;
        $seq .= '&digVal=' . strtolower($digHex);
        $seq_hash = $seq.'&cIdToken=' . $idToken.$Token;
        $seq .= '&cIdToken=' . $idToken;
        
        $hash = sha1($seq_hash);
        $seq .= '&cHashQRCode='.strtoupper($hash);
        $seq = $url.'?'.$seq;
    	
        $imgQrCode = new QRcode($seq, 'M');
        $filename = $chNFe.date('YmdHis').'.png';
        $imgQrCode->displayPNG(200, array(255,255,255), array(0,0,0), $filename, 0);
        return $filename;
    }
}//fim Classe
