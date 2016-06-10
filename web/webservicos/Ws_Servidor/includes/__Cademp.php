<?php 
 class Cademp{ 

	 private $codemp; 
	 private $nome_empresa; 
	 private $empr_tipo; 
	 private $empr_cnpj; 
	 private $empr_insest; 
	 private $empr_insmun; 
	 private $enquadramento; 
	 private $codmunic; 
	 private $rua; 
	 private $numero; 
	 private $bairro; 
	 private $complemento; 
	 private $cidade; 
	 private $uf; 
	 private $cep; 
	 private $email; 
	 private $autorizado; 
	 private $certificado; 
	 private $data_inicio; 
	 private $date_final; 
	 private $observacao; 

	 function __construct(){ 
		 $this->codemp =  '' ; 
		 $this->nome_empresa =  '' ; 
		 $this->empr_tipo =  '' ; 
		 $this->empr_cnpj =  '' ; 
		 $this->empr_insest =  '' ; 
		 $this->empr_insmun =  '' ; 
		 $this->enquadramento =  '' ; 
		 $this->codmunic =  '' ; 
		 $this->rua =  '' ; 
		 $this->numero =  '' ; 
		 $this->bairro =  '' ; 
		 $this->complemento =  '' ; 
		 $this->cidade =  '' ; 
		 $this->uf =  '' ; 
		 $this->cep =  '' ; 
		 $this->email =  '' ; 
		 $this->autorizado =  '' ; 
		 $this->certificado =  '' ; 
		 $this->data_inicio =  '' ; 
		 $this->date_final =  '' ; 
		 $this->observacao =  '' ; 
	} 

	 function setCodemp($value){ 
		 $this->codemp = $value; 
	 } 

	 function getCodemp(){ 
		 return $this->codemp; 
	} 

	 function setNome_empresa($value){ 
		 $this->nome_empresa = $value; 
	 } 

	 function getNome_empresa(){ 
		 return $this->nome_empresa; 
	} 

	 function setEmpr_tipo($value){ 
		 $this->empr_tipo = $value; 
	 } 

	 function getEmpr_tipo(){ 
		 return $this->empr_tipo; 
	} 

	 function setEmpr_cnpj($value){ 
		 $this->empr_cnpj = $value; 
	 } 

	 function getEmpr_cnpj(){ 
		 return $this->empr_cnpj; 
	} 

	 function setEmpr_insest($value){ 
		 $this->empr_insest = $value; 
	 } 

	 function getEmpr_insest(){ 
		 return $this->empr_insest; 
	} 

	 function setEmpr_insmun($value){ 
		 $this->empr_insmun = $value; 
	 } 

	 function getEmpr_insmun(){ 
		 return $this->empr_insmun; 
	} 

	 function setEnquadramento($value){ 
		 $this->enquadramento = $value; 
	 } 

	 function getEnquadramento(){ 
		 return $this->enquadramento; 
	} 

	 function setCodmunic($value){ 
		 $this->codmunic = $value; 
	 } 

	 function getCodmunic(){ 
		 return $this->codmunic; 
	} 

	 function setRua($value){ 
		 $this->rua = $value; 
	 } 

	 function getRua(){ 
		 return $this->rua; 
	} 

	 function setNumero($value){ 
		 $this->numero = $value; 
	 } 

	 function getNumero(){ 
		 return $this->numero; 
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

	 function setCidade($value){ 
		 $this->cidade = $value; 
	 } 

	 function getCidade(){ 
		 return $this->cidade; 
	} 

	 function setUf($value){ 
		 $this->uf = $value; 
	 } 

	 function getUf(){ 
		 return $this->uf; 
	} 

	 function setCep($value){ 
		 $this->cep = $value; 
	 } 

	 function getCep(){ 
		 return $this->cep; 
	} 

	 function setEmail($value){ 
		 $this->email = $value; 
	 } 

	 function getEmail(){ 
		 return $this->email; 
	} 

	 function setAutorizado($value){ 
		 $this->autorizado = $value; 
	 } 

	 function getAutorizado(){ 
		 return $this->autorizado; 
	} 

	 function setCertificado($value){ 
		 $this->certificado = $value; 
	 } 

	 function getCertificado(){ 
		 return $this->certificado; 
	} 

	 function setData_inicio($value){ 
		 $this->data_inicio = $value; 
	 } 

	 function getData_inicio(){ 
		 return $this->data_inicio; 
	} 

	 function setDate_final($value){ 
		 $this->date_final = $value; 
	 } 

	 function getDate_final(){ 
		 return $this->date_final; 
	} 

	 function setObservacao($value){ 
		 $this->observacao = $value; 
	 } 

	 function getObservacao(){ 
		 return $this->observacao; 
	} 

} 
 ?>