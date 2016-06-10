<?php 
 class Nfse_envio{ 

	 private $seq_nfse; 
	 private $codemp; 
	 private $codmunic; 
	 private $data_envio; 
	 private $inscmunic; 
	 private $qtdRps; 
	 private $nrLote; 
	 private $chave; 
	 private $tipo_emissao; 
	 private $ambiente; 
	 private $versao; 
	 private $dhRecbto; 
	 private $protocolo; 
	 private $status_nfe; 

	 function __construct(){ 
		 $this->seq_nfse =  '' ; 
		 $this->codemp =  '' ; 
		 $this->codmunic =  '' ; 
		 $this->data_envio =  '' ; 
		 $this->inscmunic =  '' ; 
		 $this->qtdRps =  '' ; 
		 $this->nrLote =  '' ; 
		 $this->chave =  '' ; 
		 $this->tipo_emissao =  '' ; 
		 $this->ambiente =  '' ; 
		 $this->versao =  '' ; 
		 $this->dhRecbto =  '' ; 
		 $this->protocolo =  '' ; 
		 $this->status_nfe =  '' ; 
	} 

	 function setSeq_nfse($value){ 
		 $this->seq_nfse = $value; 
	 } 

	 function getSeq_nfse(){ 
		 return $this->seq_nfse; 
	} 

	 function setCodemp($value){ 
		 $this->codemp = $value; 
	 } 

	 function getCodemp(){ 
		 return $this->codemp; 
	} 

	 function setCodmunic($value){ 
		 $this->codmunic = $value; 
	 } 

	 function getCodmunic(){ 
		 return $this->codmunic; 
	} 

	 function setData_envio($value){ 
		 $this->data_envio = $value; 
	 } 

	 function getData_envio(){ 
		 return $this->data_envio; 
	} 

	 function setInscmunic($value){ 
		 $this->inscmunic = $value; 
	 } 

	 function getInscmunic(){ 
		 return $this->inscmunic; 
	} 

	 function setQtdRps($value){ 
		 $this->qtdRps = $value; 
	 } 

	 function getQtdRps(){ 
		 return $this->qtdRps; 
	} 

	 function setNrLote($value){ 
		 $this->nrLote = $value; 
	 } 

	 function getNrLote(){ 
		 return $this->nrLote; 
	} 

	 function setChave($value){ 
		 $this->chave = $value; 
	 } 

	 function getChave(){ 
		 return $this->chave; 
	} 

	 function setTipo_emissao($value){ 
		 $this->tipo_emissao = $value; 
	 } 

	 function getTipo_emissao(){ 
		 return $this->tipo_emissao; 
	} 

	 function setAmbiente($value){ 
		 $this->ambiente = $value; 
	 } 

	 function getAmbiente(){ 
		 return $this->ambiente; 
	} 

	 function setVersao($value){ 
		 $this->versao = $value; 
	 } 

	 function getVersao(){ 
		 return $this->versao; 
	} 

	 function setDhRecbto($value){ 
		 $this->dhRecbto = $value; 
	 } 

	 function getDhRecbto(){ 
		 return $this->dhRecbto; 
	} 

	 function setProtocolo($value){ 
		 $this->protocolo = $value; 
	 } 

	 function getProtocolo(){ 
		 return $this->protocolo; 
	} 

	 function setStatus_nfe($value){ 
		 $this->status_nfe = $value; 
	 } 

	 function getStatus_nfe(){ 
		 return $this->status_nfe; 
	} 

} 
 ?>