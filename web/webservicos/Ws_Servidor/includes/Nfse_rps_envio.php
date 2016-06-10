<?php 
 class Nfse_rps_envio{ 

	 private $seqrps; 
	 private $rps_data; 
	 private $rps_lote; 
	 private $rps_cnpj_envio; 
	 private $rps_inscricao; 
	 private $rps_qtde; 
	 private $rps_nro; 
	 private $rps_serie; 
	 private $rps_xml; 
	 private $rps_status; 
	 private $nfse_nro; 
	 private $nfse_serie; 
	 private $nfse_situacao; 
	 private $rps_situacao; 

	 function __construct(){ 
		 $this->seqrps =  '' ; 
		 $this->rps_data =  '' ; 
		 $this->rps_lote =  '' ; 
		 $this->rps_cnpj_envio =  '' ; 
		 $this->rps_inscricao =  '' ; 
		 $this->rps_qtde =  '' ; 
		 $this->rps_nro =  '' ; 
		 $this->rps_serie =  '' ; 
		 $this->rps_xml =  '' ; 
		 $this->rps_status =  '' ; 
		 $this->nfse_nro =  '' ; 
		 $this->nfse_serie =  '' ; 
		 $this->nfse_situacao =  '' ; 
		 $this->rps_situacao =  '' ; 
	} 

	 function setSeqrps($value){ 
		 $this->seqrps = $value; 
	 } 

	 function getSeqrps(){ 
		 return $this->seqrps; 
	} 

	 function setRps_data($value){ 
		 $this->rps_data = $value; 
	 } 

	 function getRps_data(){ 
		 return $this->rps_data; 
	} 

	 function setRps_lote($value){ 
		 $this->rps_lote = $value; 
	 } 

	 function getRps_lote(){ 
		 return $this->rps_lote; 
	} 

	 function setRps_cnpj_envio($value){ 
		 $this->rps_cnpj_envio = $value; 
	 } 

	 function getRps_cnpj_envio(){ 
		 return $this->rps_cnpj_envio; 
	} 

	 function setRps_inscricao($value){ 
		 $this->rps_inscricao = $value; 
	 } 

	 function getRps_inscricao(){ 
		 return $this->rps_inscricao; 
	} 

	 function setRps_qtde($value){ 
		 $this->rps_qtde = $value; 
	 } 

	 function getRps_qtde(){ 
		 return $this->rps_qtde; 
	} 

	 function setRps_nro($value){ 
		 $this->rps_nro = $value; 
	 } 

	 function getRps_nro(){ 
		 return $this->rps_nro; 
	} 

	 function setRps_serie($value){ 
		 $this->rps_serie = $value; 
	 } 

	 function getRps_serie(){ 
		 return $this->rps_serie; 
	} 

	 function setRps_xml($value){ 
		 $this->rps_xml = $value; 
	 } 

	 function getRps_xml(){ 
		 return $this->rps_xml; 
	} 

	 function setRps_status($value){ 
		 $this->rps_status = $value; 
	 } 

	 function getRps_status(){ 
		 return $this->rps_status; 
	} 

	 function setNfse_nro($value){ 
		 $this->nfse_nro = $value; 
	 } 

	 function getNfse_nro(){ 
		 return $this->nfse_nro; 
	} 

	 function setNfse_serie($value){ 
		 $this->nfse_serie = $value; 
	 } 

	 function getNfse_serie(){ 
		 return $this->nfse_serie; 
	} 

	 function setNfse_situacao($value){ 
		 $this->nfse_situacao = $value; 
	 } 

	 function getNfse_situacao(){ 
		 return $this->nfse_situacao; 
	} 

	 function setRps_situacao($value){ 
		 $this->rps_situacao = $value; 
	 } 

	 function getRps_situacao(){ 
		 return $this->rps_situacao; 
	} 

} 
 ?>