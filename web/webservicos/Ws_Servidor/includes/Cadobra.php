<?php 
 class Cadobra{ 

	 private $id_obra; 
	 private $razao_social; 
	 private $nome_obra; 
	 private $tipo_inscricao; 
	 private $tipo; 
	 private $cpf; 
	 private $cnpj; 
	 private $id_contribuinte; 
	 private $data_inicio; 
	 private $data_final; 
	 private $pais_id; 
	 private $estado_federacao_id; 
	 private $cidade_id; 
	 private $logradouro; 
	 private $numero; 
	 private $cep; 
	 private $bairro; 
	 private $telefone1; 
	 private $telefone2; 
	 private $email; 
	 private $responsavel; 
	 private $data_cadastro; 
	 private $situacao; 

	 function __construct(){ 
		 $this->id_obra =  '' ; 
		 $this->razao_social =  '' ; 
		 $this->nome_obra =  '' ; 
		 $this->tipo_inscricao =  '' ; 
		 $this->tipo =  '' ; 
		 $this->cpf =  '' ; 
		 $this->cnpj =  '' ; 
		 $this->id_contribuinte =  '' ; 
		 $this->data_inicio =  '' ; 
		 $this->data_final =  '' ; 
		 $this->pais_id =  '' ; 
		 $this->estado_federacao_id =  '' ; 
		 $this->cidade_id =  '' ; 
		 $this->logradouro =  '' ; 
		 $this->numero =  '' ; 
		 $this->cep =  '' ; 
		 $this->bairro =  '' ; 
		 $this->telefone1 =  '' ; 
		 $this->telefone2 =  '' ; 
		 $this->email =  '' ; 
		 $this->responsavel =  '' ; 
		 $this->data_cadastro =  '' ; 
		 $this->situacao =  '' ; 
	} 

	 function setId_obra($value){ 
		 $this->id_obra = $value; 
	 } 

	 function getId_obra(){ 
		 return $this->id_obra; 
	} 

	 function setRazao_social($value){ 
		 $this->razao_social = $value; 
	 } 

	 function getRazao_social(){ 
		 return $this->razao_social; 
	} 

	 function setNome_obra($value){ 
		 $this->nome_obra = $value; 
	 } 

	 function getNome_obra(){ 
		 return $this->nome_obra; 
	} 

	 function setTipo_inscricao($value){ 
		 $this->tipo_inscricao = $value; 
	 } 

	 function getTipo_inscricao(){ 
		 return $this->tipo_inscricao; 
	} 

	 function setTipo($value){ 
		 $this->tipo = $value; 
	 } 

	 function getTipo(){ 
		 return $this->tipo; 
	} 

	 function setCpf($value){ 
		 $this->cpf = $value; 
	 } 

	 function getCpf(){ 
		 return $this->cpf; 
	} 

	 function setCnpj($value){ 
		 $this->cnpj = $value; 
	 } 

	 function getCnpj(){ 
		 return $this->cnpj; 
	} 

	 function setId_contribuinte($value){ 
		 $this->id_contribuinte = $value; 
	 } 

	 function getId_contribuinte(){ 
		 return $this->id_contribuinte; 
	} 

	 function setData_inicio($value){ 
		 $this->data_inicio = $value; 
	 } 

	 function getData_inicio(){ 
		 return $this->data_inicio; 
	} 

	 function setData_final($value){ 
		 $this->data_final = $value; 
	 } 

	 function getData_final(){ 
		 return $this->data_final; 
	} 

	 function setPais_id($value){ 
		 $this->pais_id = $value; 
	 } 

	 function getPais_id(){ 
		 return $this->pais_id; 
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

	 function setResponsavel($value){ 
		 $this->responsavel = $value; 
	 } 

	 function getResponsavel(){ 
		 return $this->responsavel; 
	} 

	 function setData_cadastro($value){ 
		 $this->data_cadastro = $value; 
	 } 

	 function getData_cadastro(){ 
		 return $this->data_cadastro; 
	} 

	 function setSituacao($value){ 
		 $this->situacao = $value; 
	 } 

	 function getSituacao(){ 
		 return $this->situacao; 
	} 

} 
 ?>