<?php 
 class Certific{ 

	 private $codemp; 
	 private $nome_certicado; 
	 private $senha_certificado; 
	 private $data_validade; 
	 private $observacao; 

	 function __construct(){ 
		 $this->codemp =  '' ; 
		 $this->nome_certicado =  '' ; 
		 $this->senha_certificado =  '' ; 
		 $this->data_validade =  '' ; 
		 $this->observacao =  '' ; 
	} 

	 function setCodemp($value){ 
		 $this->codemp = $value; 
	 } 

	 function getCodemp(){ 
		 return $this->codemp; 
	} 

	 function setNome_certicado($value){ 
		 $this->nome_certicado = $value; 
	 } 

	 function getNome_certicado(){ 
		 return $this->nome_certicado; 
	} 

	 function setSenha_certificado($value){ 
		 $this->senha_certificado = $value; 
	 } 

	 function getSenha_certificado(){ 
		 return $this->senha_certificado; 
	} 

	 function setData_validade($value){ 
		 $this->data_validade = $value; 
	 } 

	 function getData_validade(){ 
		 return $this->data_validade; 
	} 

	 function setObservacao($value){ 
		 $this->observacao = $value; 
	 } 

	 function getObservacao(){ 
		 return $this->observacao; 
	} 

} 
 ?>