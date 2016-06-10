<?php 
 class Nfse_erros_alertas{ 

	 private $codigo; 
	 private $mensagem; 
	 private $motivo; 
	 private $observacao; 

	 function __construct(){ 
		 $this->codigo =  '' ; 
		 $this->mensagem =  '' ; 
		 $this->motivo =  '' ; 
		 $this->observacao =  '' ; 
	} 

	 function setCodigo($value){ 
		 $this->codigo = $value; 
	 } 

	 function getCodigo(){ 
		 return $this->codigo; 
	} 

	 function setMensagem($value){ 
		 $this->mensagem = $value; 
	 } 

	 function getMensagem(){ 
		 return $this->mensagem; 
	} 

	 function setMotivo($value){ 
		 $this->motivo = $value; 
	 } 

	 function getMotivo(){ 
		 return $this->motivo; 
	} 

	 function setObservacao($value){ 
		 $this->observacao = $value; 
	 } 

	 function getObservacao(){ 
		 return $this->observacao; 
	} 

} 
 ?>