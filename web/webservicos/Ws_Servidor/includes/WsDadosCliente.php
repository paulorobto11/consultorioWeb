<?
class Dados{

	private $chave;
	private $versao;
	private $cuf   ;
	private $cnf   ;
	private $natop ;
	private $indpag;
	private $mod	;
	private $serie	;
	private $nnf	;
	private $dhemi	;
	private $dhsaient;
	private $tpnf	 ;
	private $iddest	 ;
	private $cmunfg	 ;
	private $tpimp 	 ;
	private $tpemis	 ;
	private $cdv	 ;
	private $tpamb	 ;
	private $finnfe	 ;
	private $indfinal;
	private $indpres;
	private $procemi;
	private $verproc;
	private $dhcont	;
	private $xjust	;
	private $refnfech	;
	private $refnfe	;
	private $rural	;
	private $cteref	;
	private $emit	;
	private $dest	;
	private $locret	;
	private $locentr;
	private $identaut;
	private $vendas	;
	private $imp	;
	private $icms	;
	private $ipi	;
	private $pis	;
	private $dimport;
	private $adimport;
	private $frete	 ;
	private $transp	 ;
	private $vlret	 ;
	private $veic	 ;
	private $reboque ;
	private $volume	 ;
	private $fatura	 ;
	private $duplic	 ;
	private $nfce	 ;
	private $cartao	 ;
	private $infadic ;
	private $obsemit ;
	private $obsfisco;
	private $processo;
	private $exporta ;
	private $compras ;
	private $colheita;
	


	 function __construct(){ 
				$this->chave	   = '';
				$this->versao	   = '';
				$this->cuf   	   = '';
				$this->cnf   	   = '';
				$this->natop 	   = '';
				$this->indpag	   = '';
				$this->mod 		   = '';
				$this->serie	   = '';
				$this->nnf 		   = '';
				$this->dhemi	   = '';
				$this->dhsaient	   = '';
				$this->tpnf	 	   = '';
				$this->iddest	   = ''; 
				$this->cmunfg	   = ''; 
				$this->tpimp 	   = ''; 
				$this->tpemis	   = ''; 
				$this->cdv  	   = '';
				$this->tpamb	   = ''; 
				$this->finnfe	   = ''; 
				$this->indfinal	   = '';
				$this->indpres	   = '';
				$this->procemi	   = '';
				$this->verproc	   = '';
				$this->dhcont	   = '';
				$this->xjust	   = '';
				$this->refnfech	   = '';
				$this->refnfe	   = '';
				$this->refnfech	   = '';
				$this->rural	   = '';
				$this->cteref	   = '';
				$this->emit		   = '';
				$this->dest		   = '';
				$this->locret	   = '';
				$this->locentr	   = '';
				$this->identaut	   = '';
				$this->vendas	   = '';
				$this->imp 		   = '';
				$this->icms		   = '';
				$this->ipi 		   = '';
				$this->pis 		   = '';
				$this->dimport	   = '';
				$this->adimport	   = '';
				$this->frete	   = ''; 
				$this->transp	   = ''; 
				$this->vlret	   = ''; 
				$this->veic	 	   = '';
				$this->reboque 	   = '';
				$this->volume	   = ''; 
				$this->fatura	   = ''; 
				$this->duplic	   = ''; 
				$this->nfce	 	   = '';
				$this->cartao	   = ''; 
				$this->infadic 	   = '';
				$this->obsemit 	   = '';
				$this->obsfisco	   = '';
				$this->processo	   = '';
				$this->exporta 	   = '';
				$this->compras 	   = '';
				$this->colheita	   = '';
	 }

	function setChave($value){ $this->chave	   = $value; }
	function setVersao($value){ $this->versao   = $value; }
	function setCuf($value){ $this->cuf      = $value; }
	function setCnf($value){ $this->cnf      = $value; }
	function setNatop($value){ $this->natop    = $value; }
	function setIndpag($value){ $this->indpag   = $value; }
	function setMod($value){ $this->mod 	   = $value; }
	function setSerie($value){ $this->serie	   = $value; }
	function setNnf($value){ $this->nnf 	   = $value; }
	function setDhemi($value){ $this->dhemi	   = $value; }
	function setDhsaient($value){ $this->dhsaient = $value; }
	function setTpnf($value){ $this->tpnf	   = $value; }
	function setIddest($value){ $this->iddest   = $value; } 
	function setCmunfg($value){ $this->cmunfg   = $value; } 
	function setTpimp($value){ $this->tpimp    = $value; } 
	function setTpemis($value){ $this->tpemis   = $value; } 
	function setCdv($value){ $this->cdv     = $value; }
	function setTpamb($value){ $this->tpamb   = $value; } 
	function setFinnfe($value){ $this->finnfe  = $value; } 
	function setIndfinal($value){ $this->indfinal= $value; }
	function setIndpres($value){ $this->indpres = $value; }
	function setProcemi($value){ $this->procemi = $value; }
	function setVerproc($value){ $this->verproc = $value; }
	function setDhcont($value){ $this->dhcont  = $value; }
	function setXjust($value){ $this->xjust   = $value; }

	function setRefnfech($value){ $this->refnfech  = $value; }
	
	function setRefnfe($value){ $this->refnfe  = $value; }
	function setRural($value){ $this->rural   = $value; }
	function setCteref($value){ $this->cteref  = $value; }
	function setEmit($value){ $this->emit	   = $value; }
	function setDest($value){ $this->dest	   = $value; }
	function setLocret($value){ $this->locret  = $value; }
	function setLocentr($value){ $this->locentr = $value; }
	function setIdentaut($value){ $this->identaut= $value; }
	function setVendas($value){ $this->vendas  = $value; }
	function setImp($value){ $this->imp 	   = $value; }
	function setIcms($value){ $this->icms	   = $value; }
	function setIpi($value){ $this->ipi 	   = $value; }
	function setPis($value){ $this->pis 	   = $value; }
	function setDimport($value){ $this->dimport = $value; }
	function setAdimport($value){ $this->adimport= $value; }
	function setFrete($value){ $this->frete   = $value; } 
	function setTransp($value){ $this->transp  = $value; } 
	function setVlret($value){ $this->vlret   = $value; } 
	function setVeic($value){ $this->veic	   = $value; }
	function setReboque($value){ $this->reboque = $value; }
	function setVolume($value){ $this->volume  = $value; } 
	function setFatura($value){ $this->fatura  = $value; } 
	function setDuplic($value){ $this->duplic  = $value; } 
	function setNfce($value){ $this->nfce	   = $value; }
	function setCartao($value){ $this->cartao  = $value; } 
	function setInfadic($value){ $this->infadic = $value; }
	function setObsemit($value){ $this->obsemit = $value; }
	function setObsfisco($value){ $this->obsfisco= $value; }
	function setProcesso($value){ $this->processo= $value; }
	function setExporta($value){ $this->exporta = $value; }
	function setCompras($value){ $this->compras = $value; }
	function setColheita($value){ $this->colheita= $value; }
	 

	function getChave(){ return $this->chave	   ; }
	function getVersao(){ return $this->versao   ; }
	function getCuf(){ return $this->cuf      ; }
	function getCnf(){ return $this->cnf      ; }
	function getNatop(){ return $this->natop    ; }
	function getIndpag(){ return $this->indpag   ; }
	function getMod(){ return $this->mod 	   ; }
	function getSerie(){ return $this->serie	   ; }
	function getNnf(){ return $this->nnf 	   ; }
	function getDhemi(){ return $this->dhemi	   ; }
	function getDhsaient(){ return $this->dhsaient ; }
	function getTpnf(){ return $this->tpnf	   ; }
	function getIddest(){ return $this->iddest   ; } 
	function getCmunfg(){ return $this->cmunfg   ; } 
	function getTpimp(){ return $this->tpimp    ; } 
	function getTpemis(){ return $this->tpemis   ; } 
	function getCdv(){ return $this->cdv     ; }
	function getTpamb(){ return $this->tpamb   ; } 
	function getFinnfe(){ return $this->finnfe  ; } 
	function getIndfinal(){ return $this->indfinal; }
	function getIndpres(){ return $this->indpres ; }
	function getProcemi(){ return $this->procemi ; }
	function getVerproc(){ return $this->verproc ; }
	function getDhcont(){ return $this->dhcont  ; }
	function getXjust(){ return $this->xjust   ; }
	function getRefnfech(){ return $this->refnfech  ; }
	function getRefnfe(){ return $this->refnfe  ; }
	function getRural(){ return $this->rural   ; }
	function getCteref(){ return $this->cteref  ; }
	function getEmit(){ return $this->emit	   ; }
	function getDest(){ return $this->dest	   ; }
	function getLocret(){ return $this->locret  ; }
	function getLocentr(){ return $this->locentr ; }
	function getIdentaut(){ return $this->identaut; }
	function getVendas(){ return $this->vendas  ; }
	function getImp(){ return $this->imp 	   ; }
	function getIcms(){ return $this->icms	   ; }
	function getIpi(){ return $this->ipi 	   ; }
	function getPis(){ return $this->pis 	   ; }
	function getDimport(){ return $this->dimport ; }
	function getAdimport(){ return $this->adimport; }
	function getFrete(){ return $this->frete   ; } 
	function getTransp(){ return $this->transp  ; } 
	function getVlret(){ return $this->vlret   ; } 
	function getVeic(){ return $this->veic	   ; }
	function getReboque(){ return $this->reboque ; }
	function getVolume(){ return $this->volume  ; } 
	function getFatura(){ return $this->fatura  ; } 
	function getDuplic(){ return $this->duplic  ; } 
	function getNfce(){ return $this->nfce	   ; }
	function getCartao(){ return $this->cartao  ; } 
	function getInfadic(){ return $this->infadic ; }
	function getObsemit(){ return $this->obsemit ; }
	function getObsfisco(){ return $this->obsfisco; }
	function getProcesso(){ return $this->processo; }
	function getExporta(){ return $this->exporta ; }
	function getCompras(){ return $this->compras ; }
	function getColheita(){ return $this->colheita; }
	
 
}

?>