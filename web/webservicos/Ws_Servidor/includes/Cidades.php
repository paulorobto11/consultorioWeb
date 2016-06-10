<?php 
 class Cidades{ 

	 private $id; 
	 private $estado_federacao_id; 
	 private $descricao; 
	 private $cod_ibge; 

	 function __construct(){ 
		 $this->id =  '' ; 
		 $this->estado_federacao_id =  '' ; 
		 $this->descricao =  '' ; 
		 $this->cod_ibge =  '' ; 
	} 

	 function setId($value){ 
		 $this->id = $value; 
	 } 

	 function getId(){ 
		 return $this->id; 
	} 

	 function setEstado_federacao_id($value){ 
		 $this->estado_federacao_id = $value; 
	 } 

	 function getEstado_federacao_id(){ 
		 return $this->estado_federacao_id; 
	} 

	 function setDescricao($value){ 
		 $this->descricao = $value; 
	 } 

	 function getDescricao(){ 
		 return $this->descricao; 
	} 

	 function setCod_ibge($value){ 
		 $this->cod_ibge = $value; 
	 } 

	 function getCod_ibge(){ 
		 return $this->cod_ibge; 
	} 

} 
 ?>