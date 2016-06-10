<?php 
 class Empresa{ 

	 private $id; 
	 private $identificacao; 
	 private $razao_social; 
	 private $empresa_secretaria; 
	 private $empresa_departamento; 
	 private $cnpj; 
	 private $inscricao_estadual; 
	 private $inscricao_municipal; 
	 private $estado_federacao_id; 
	 private $cidade_id; 
	 private $logradouro; 
	 private $numero; 
	 private $cep; 
	 private $bairro; 
	 private $telefone1; 
	 private $telefone2; 
	 private $email; 
	 private $site; 
	 private $logo; 
	 private $responsavel_id; 

	 function __construct(){ 
		 $this->id =  '' ; 
		 $this->identificacao =  '' ; 
		 $this->razao_social =  '' ; 
		 $this->empresa_secretaria =  '' ; 
		 $this->empresa_departamento =  '' ; 
		 $this->cnpj =  '' ; 
		 $this->inscricao_estadual =  '' ; 
		 $this->inscricao_municipal =  '' ; 
		 $this->estado_federacao_id =  '' ; 
		 $this->cidade_id =  '' ; 
		 $this->logradouro =  '' ; 
		 $this->numero =  '' ; 
		 $this->cep =  '' ; 
		 $this->bairro =  '' ; 
		 $this->telefone1 =  '' ; 
		 $this->telefone2 =  '' ; 
		 $this->email =  '' ; 
		 $this->site =  '' ; 
		 $this->logo =  '' ; 
		 $this->responsavel_id =  '' ; 
	} 

	 function setId($value){ 
		 $this->id = $value; 
	 } 

	 function getId(){ 
		 return $this->id; 
	} 

	 function setIdentificacao($value){ 
		 $this->identificacao = $value; 
	 } 

	 function getIdentificacao(){ 
		 return $this->identificacao; 
	} 

	 function setRazao_social($value){ 
		 $this->razao_social = $value; 
	 } 

	 function getRazao_social(){ 
		 return $this->razao_social; 
	} 

	 function setEmpresa_secretaria($value){ 
		 $this->empresa_secretaria = $value; 
	 } 

	 function getEmpresa_secretaria(){ 
		 return $this->empresa_secretaria; 
	} 

	 function setEmpresa_departamento($value){ 
		 $this->empresa_departamento = $value; 
	 } 

	 function getEmpresa_departamento(){ 
		 return $this->empresa_departamento; 
	} 

	 function setCnpj($value){ 
		 $this->cnpj = $value; 
	 } 

	 function getCnpj(){ 
		 return $this->cnpj; 
	} 

	 function setInscricao_estadual($value){ 
		 $this->inscricao_estadual = $value; 
	 } 

	 function getInscricao_estadual(){ 
		 return $this->inscricao_estadual; 
	} 

	 function setInscricao_municipal($value){ 
		 $this->inscricao_municipal = $value; 
	 } 

	 function getInscricao_municipal(){ 
		 return $this->inscricao_municipal; 
	} 

	 function setEstado_federacao_id($value){ 
		 $this->estado_federacao_id = $value; 
	 } 

	 function getEstado_federacao_id(){ 
		 return $this->estado_federacao_id; 
	} 

	 function setCidade_id($value){ 
		 $this->cidade_id = $value; 
	 } 

	 function getCidade_id(){ 
		 return $this->cidade_id; 
	} 

	 function setLogradouro($value){ 
		 $this->logradouro = $value; 
	 } 

	 function getLogradouro(){ 
		 return $this->logradouro; 
	} 

	 function setNumero($value){ 
		 $this->numero = $value; 
	 } 

	 function getNumero(){ 
		 return $this->numero; 
	} 

	 function setCep($value){ 
		 $this->cep = $value; 
	 } 

	 function getCep(){ 
		 return $this->cep; 
	} 

	 function setBairro($value){ 
		 $this->bairro = $value; 
	 } 

	 function getBairro(){ 
		 return $this->bairro; 
	} 

	 function setTelefone1($value){ 
		 $this->telefone1 = $value; 
	 } 

	 function getTelefone1(){ 
		 return $this->telefone1; 
	} 

	 function setTelefone2($value){ 
		 $this->telefone2 = $value; 
	 } 

	 function getTelefone2(){ 
		 return $this->telefone2; 
	} 

	 function setEmail($value){ 
		 $this->email = $value; 
	 } 

	 function getEmail(){ 
		 return $this->email; 
	} 

	 function setSite($value){ 
		 $this->site = $value; 
	 } 

	 function getSite(){ 
		 return $this->site; 
	} 

	 function setLogo($value){ 
		 $this->logo = $value; 
	 } 

	 function getLogo(){ 
		 return $this->logo; 
	} 

	 function setResponsavel_id($value){ 
		 $this->responsavel_id = $value; 
	 } 

	 function getResponsavel_id(){ 
		 return $this->responsavel_id; 
	} 

} 
 ?>