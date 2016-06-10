<?php 
 class Nfe_envio{ 

	 private $seq_nfe; 
	 private $codemp; 
	 private $data_envio; 
	 private $anomes; 
	 private $chave; 
	 private $nNF; 
	 private $serie; 
	 private $modnfe; 
	 private $tipo_emissao; 
	 private $ambiente; 
	 private $versao; 
	 private $dhRecbto; 
	 private $nProt; 
	 private $xMotivo; 
	 private $status_nfe; 

	 function __construct(){ 
		 $this->seq_nfe =  '' ; 
		 $this->codemp =  '' ; 
		 $this->data_envio =  '' ; 
		 $this->anomes =  '' ; 
		 $this->chave =  '' ; 
		 $this->nNF =  '' ; 
		 $this->serie =  '' ; 
		 $this->modnfe =  '' ; 
		 $this->tipo_emissao =  '' ; 
		 $this->ambiente =  '' ; 
		 $this->versao =  '' ; 
		 $this->dhRecbto =  '' ; 
		 $this->nProt =  '' ; 
		 $this->xMotivo =  '' ; 
		 $this->status_nfe =  '' ; 
	} 

	 function setSeq_nfe($value){ 
		 $this->seq_nfe = $value; 
	 } 

	 function getSeq_nfe(){ 
		 return $this->seq_nfe; 
	} 

	 function setCodemp($value){ 
		 $this->codemp = $value; 
	 } 

	 function getCodemp(){ 
		 return $this->codemp; 
	} 

	 function setData_envio($value){ 
		 $this->data_envio = $value; 
	 } 

	 function getData_envio(){ 
		 return $this->data_envio; 
	} 

	 function setAnomes($value){ 
		 $this->anomes = $value; 
	 } 

	 function getAnomes(){ 
		 return $this->anomes; 
	} 

	 function setChave($value){ 
		 $this->chave = $value; 
	 } 

	 function getChave(){ 
		 return $this->chave; 
	} 

	 function setNNF($value){ 
		 $this->nNF = $value; 
	 } 

	 function getNNF(){ 
		 return $this->nNF; 
	} 

	 function setSerie($value){ 
		 $this->serie = $value; 
	 } 

	 function getSerie(){ 
		 return $this->serie; 
	} 

	 function setModnfe($value){ 
		 $this->modnfe = $value; 
	 } 

	 function getModnfe(){ 
		 return $this->modnfe; 
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

	 function setNProt($value){ 
		 $this->nProt = $value; 
	 } 

	 function getNProt(){ 
		 return $this->nProt; 
	} 

	 function setXMotivo($value){ 
		 $this->xMotivo = $value; 
	 } 

	 function getXMotivo(){ 
		 return $this->xMotivo; 
	} 

	 function setStatus_nfe($value){ 
		 $this->status_nfe = $value; 
	 } 

	 function getStatus_nfe(){ 
		 return $this->status_nfe; 
	} 

} 
 ?>