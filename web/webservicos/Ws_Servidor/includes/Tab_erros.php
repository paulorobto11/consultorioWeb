<?php 
 class Tab_erros{ 

	 private $cod_erro; 
	 private $texto_erro; 

	 function __construct(){ 
		 $this->cod_erro =  '' ; 
		 $this->texto_erro =  '' ; 
	} 

	 function setCod_erro($value){ 
		 $this->cod_erro = $value; 
	 } 

	 function getCod_erro(){ 
		 return $this->cod_erro; 
	} 

	 function setTexto_erro($value){ 
		 $this->texto_erro = $value; 
	 } 

	 function getTexto_erro(){ 
		 return $this->texto_erro; 
	} 

} 
 ?>