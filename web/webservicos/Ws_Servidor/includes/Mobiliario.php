<?php 
 class Mobiliario{ 

	 private $cadmob; 
	 private $razao_social; 
	 private $nome_fantasia; 
	 private $tipo_empresa; 
	 private $tipo_inscricao; 
	 private $cpfcnpj; 
	 private $inscricao_estadual; 
	 private $pais_id; 
	 private $codmunic; 
	 private $estado_federacao_id; 
	 private $cidade_id; 
	 private $logradouro; 
	 private $numero; 
	 private $cep; 
	 private $bairro; 
	 private $complemento; 
	 private $telefone1; 
	 private $telefone2; 
	 private $email; 
	 private $site; 
	 private $logo; 
	 private $responsavel_id; 
	 private $contador_id; 
	 private $data_cadastro; 

	 function __construct(){ 
		 $this->cadmob =  '' ; 
		 $this->razao_social =  '' ; 
		 $this->nome_fantasia =  '' ; 
		 $this->tipo_empresa =  '' ; 
		 $this->tipo_inscricao =  '' ; 
		 $this->cpfcnpj =  '' ; 
		 $this->inscricao_estadual =  '' ; 
		 $this->pais_id =  '' ; 
		 $this->codmunic =  '' ; 
		 $this->estado_federacao_id =  '' ; 
		 $this->cidade_id =  '' ; 
		 $this->logradouro =  '' ; 
		 $this->numero =  '' ; 
		 $this->cep =  '' ; 
		 $this->bairro =  '' ; 
		 $this->complemento =  '' ; 
		 $this->telefone1 =  '' ; 
		 $this->telefone2 =  '' ; 
		 $this->email =  '' ; 
		 $this->site =  '' ; 
		 $this->logo =  '' ; 
		 $this->responsavel_id =  '' ; 
		 $this->contador_id =  '' ; 
		 $this->data_cadastro =  '' ; 
	} 

	 function setCadmob($value){ 
		 $this->cadmob = $value; 
	 } 

	 function getCadmob(){ 
		 return $this->cadmob; 
	} 

	 function setRazao_social($value){ 
		 $this->razao_social = $value; 
	 } 

	 function getRazao_social(){ 
		 return $this->razao_social; 
	} 

	 function setNome_fantasia($value){ 
		 $this->nome_fantasia = $value; 
	 } 

	 function getNome_fantasia(){ 
		 return $this->nome_fantasia; 
	} 

	 function setTipo_empresa($value){ 
		 $this->tipo_empresa = $value; 
	 } 

	 function getTipo_empresa(){ 
		 return $this->tipo_empresa; 
	} 

	 function setTipo_inscricao($value){ 
		 $this->tipo_inscricao = $value; 
	 } 

	 function getTipo_inscricao(){ 
		 return $this->tipo_inscricao; 
	} 

	 function setCpfcnpj($value){ 
		 $this->cpfcnpj = $value; 
	 } 

	 function getCpfcnpj(){ 
		 return $this->cpfcnpj; 
	} 

	 function setInscricao_estadual($value){ 
		 $this->inscricao_estadual = $value; 
	 } 

	 function getInscricao_estadual(){ 
		 return $this->inscricao_estadual; 
	} 

	 function setPais_id($value){ 
		 $this->pais_id = $value; 
	 } 

	 function getPais_id(){ 
		 return $this->pais_id; 
	} 

	 function setCodmunic($value){ 
		 $this->codmunic = $value; 
	 } 

	 function getCodmunic(){ 
		 return $this->codmunic; 
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

	 function setComplemento($value){ 
		 $this->complemento = $value; 
	 } 

	 function getComplemento(){ 
		 return $this->complemento; 
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

	 function setContador_id($value){ 
		 $this->contador_id = $value; 
	 } 

	 function getContador_id(){ 
		 return $this->contador_id; 
	} 

	 function setData_cadastro($value){ 
		 $this->data_cadastro = $value; 
	 } 

	 function getData_cadastro(){ 
		 return $this->data_cadastro; 
	} 

} 
 ?>