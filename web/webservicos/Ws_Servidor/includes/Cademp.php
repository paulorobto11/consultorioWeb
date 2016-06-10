<?php 
 class Cademp{ 

	 private $codemp; 
	 private $nome_cliente; 
	 private $nome_fantasia; 
	 private $empr_tipo; 
	 private $empr_cnpj; 
	 private $empr_insest; 
	 private $empr_insmun; 
	 private $cod_cnae; 
	 private $enquadramento; 
	 private $codmunic; 
	 private $RUA; 
	 private $NUMERO; 
	 private $BAIRRO; 
	 private $COMPLEMENTO; 
	 private $CIDADE; 
	 private $UF; 
	 private $cep; 
	 private $email; 
	 private $data_inicio; 
	 private $id_acesso; 
	 private $id_leitura; 
	 private $id_confirma; 
	 private $data_confirma; 
	 private $data_pagamento; 
	 private $data_limite; 
	 private $date_final; 
	 private $ambiente; 
	 private $chk_permissao; 
	 private $chk_nfse_local; 
	 private $chk_formas; 
	 private $logotipo; 
	 private $observacao; 

	 function __construct(){ 
		 $this->codemp =  '' ; 
		 $this->nome_cliente =  '' ; 
		 $this->nome_fantasia =  '' ; 
		 $this->empr_tipo =  '' ; 
		 $this->empr_cnpj =  '' ; 
		 $this->empr_insest =  '' ; 
		 $this->empr_insmun =  '' ; 
		 $this->cod_cnae =  '' ; 
		 $this->enquadramento =  '' ; 
		 $this->codmunic =  '' ; 
		 $this->RUA =  '' ; 
		 $this->NUMERO =  '' ; 
		 $this->BAIRRO =  '' ; 
		 $this->COMPLEMENTO =  '' ; 
		 $this->CIDADE =  '' ; 
		 $this->UF =  '' ; 
		 $this->cep =  '' ; 
		 $this->email =  '' ; 
		 $this->data_inicio =  '' ; 
		 $this->id_acesso =  '' ; 
		 $this->id_leitura =  '' ; 
		 $this->id_confirma =  '' ; 
		 $this->data_confirma =  '' ; 
		 $this->data_pagamento =  '' ; 
		 $this->data_limite =  '' ; 
		 $this->date_final =  '' ; 
		 $this->ambiente =  '' ; 
		 $this->chk_permissao =  '' ; 
		 $this->chk_nfse_local =  '' ; 
		 $this->chk_formas =  '' ; 
		 $this->logotipo =  '' ; 
		 $this->observacao =  '' ; 
	} 

	 function setCodemp($value){ 
		 $this->codemp = $value; 
	 } 

	 function getCodemp(){ 
		 return $this->codemp; 
	} 

	 function setNome_cliente($value){ 
		 $this->nome_cliente = $value; 
	 } 

	 function getNome_cliente(){ 
		 return $this->nome_cliente; 
	} 

	 function setNome_fantasia($value){ 
		 $this->nome_fantasia = $value; 
	 } 

	 function getNome_fantasia(){ 
		 return $this->nome_fantasia; 
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

	 function setCod_cnae($value){ 
		 $this->cod_cnae = $value; 
	 } 

	 function getCod_cnae(){ 
		 return $this->cod_cnae; 
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

	 function setRUA($value){ 
		 $this->RUA = $value; 
	 } 

	 function getRUA(){ 
		 return $this->RUA; 
	} 

	 function setNUMERO($value){ 
		 $this->NUMERO = $value; 
	 } 

	 function getNUMERO(){ 
		 return $this->NUMERO; 
	} 

	 function setBAIRRO($value){ 
		 $this->BAIRRO = $value; 
	 } 

	 function getBAIRRO(){ 
		 return $this->BAIRRO; 
	} 

	 function setCOMPLEMENTO($value){ 
		 $this->COMPLEMENTO = $value; 
	 } 

	 function getCOMPLEMENTO(){ 
		 return $this->COMPLEMENTO; 
	} 

	 function setCIDADE($value){ 
		 $this->CIDADE = $value; 
	 } 

	 function getCIDADE(){ 
		 return $this->CIDADE; 
	} 

	 function setUF($value){ 
		 $this->UF = $value; 
	 } 

	 function getUF(){ 
		 return $this->UF; 
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

	 function setData_inicio($value){ 
		 $this->data_inicio = $value; 
	 } 

	 function getData_inicio(){ 
		 return $this->data_inicio; 
	} 

	 function setId_acesso($value){ 
		 $this->id_acesso = $value; 
	 } 

	 function getId_acesso(){ 
		 return $this->id_acesso; 
	} 

	 function setId_leitura($value){ 
		 $this->id_leitura = $value; 
	 } 

	 function getId_leitura(){ 
		 return $this->id_leitura; 
	} 

	 function setId_confirma($value){ 
		 $this->id_confirma = $value; 
	 } 

	 function getId_confirma(){ 
		 return $this->id_confirma; 
	} 

	 function setData_confirma($value){ 
		 $this->data_confirma = $value; 
	 } 

	 function getData_confirma(){ 
		 return $this->data_confirma; 
	} 

	 function setData_pagamento($value){ 
		 $this->data_pagamento = $value; 
	 } 

	 function getData_pagamento(){ 
		 return $this->data_pagamento; 
	} 

	 function setData_limite($value){ 
		 $this->data_limite = $value; 
	 } 

	 function getData_limite(){ 
		 return $this->data_limite; 
	} 

	 function setDate_final($value){ 
		 $this->date_final = $value; 
	 } 

	 function getDate_final(){ 
		 return $this->date_final; 
	} 

	 function setAmbiente($value){ 
		 $this->ambiente = $value; 
	 } 

	 function getAmbiente(){ 
		 return $this->ambiente; 
	} 

	 function setChk_permissao($value){ 
		 $this->chk_permissao = $value; 
	 } 

	 function getChk_permissao(){ 
		 return $this->chk_permissao; 
	} 

	 function setChk_nfse_local($value){ 
		 $this->chk_nfse_local = $value; 
	 } 

	 function getChk_nfse_local(){ 
		 return $this->chk_nfse_local; 
	} 

	 function setChk_formas($value){ 
		 $this->chk_formas = $value; 
	 } 

	 function getChk_formas(){ 
		 return $this->chk_formas; 
	} 

	 function setLogotipo($value){ 
		 $this->logotipo = $value; 
	 } 

	 function getLogotipo(){ 
		 return $this->logotipo; 
	} 

	 function setObservacao($value){ 
		 $this->observacao = $value; 
	 } 

	 function getObservacao(){ 
		 return $this->observacao; 
	} 

} 
 ?>