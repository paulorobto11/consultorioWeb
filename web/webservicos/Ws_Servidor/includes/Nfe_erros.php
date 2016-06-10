<?php 
 class Nfe_erros{ 

	 private $seq; 
	 private $data_envio; 
	 private $mes_ano; 
	 private $seq_nfe; 
	 private $ident_chave; 
	 private $seq_erro; 
	 private $tag_erro; 
	 private $campo_erro; 
	 private $descr_erro; 

	 function __construct(){ 
		 $this->seq =  '' ; 
		 $this->data_envio =  '' ; 
		 $this->mes_ano =  '' ; 
		 $this->seq_nfe =  '' ; 
		 $this->ident_chave =  '' ; 
		 $this->seq_erro =  '' ; 
		 $this->tag_erro =  '' ; 
		 $this->campo_erro =  '' ; 
		 $this->descr_erro =  '' ; 
	} 

	 function setSeq($value){ 
		 $this->seq = $value; 
	 } 

	 function getSeq(){ 
		 return $this->seq; 
	} 

	 function setData_envio($value){ 
		 $this->data_envio = $value; 
	 } 

	 function getData_envio(){ 
		 return $this->data_envio; 
	} 

	 function setMes_ano($value){ 
		 $this->mes_ano = $value; 
	 } 

	 function getMes_ano(){ 
		 return $this->mes_ano; 
	} 

	 function setSeq_nfe($value){ 
		 $this->seq_nfe = $value; 
	 } 

	 function getSeq_nfe(){ 
		 return $this->seq_nfe; 
	} 

	 function setIdent_chave($value){ 
		 $this->ident_chave = $value; 
	 } 

	 function getIdent_chave(){ 
		 return $this->ident_chave; 
	} 

	 function setSeq_erro($value){ 
		 $this->seq_erro = $value; 
	 } 

	 function getSeq_erro(){ 
		 return $this->seq_erro; 
	} 

	 function setTag_erro($value){ 
		 $this->tag_erro = $value; 
	 } 

	 function getTag_erro(){ 
		 return $this->tag_erro; 
	} 

	 function setCampo_erro($value){ 
		 $this->campo_erro = $value; 
	 } 

	 function getCampo_erro(){ 
		 return $this->campo_erro; 
	} 

	 function setDescr_erro($value){ 
		 $this->descr_erro = $value; 
	 } 

	 function getDescr_erro(){ 
		 return $this->descr_erro; 
	} 

} 
 ?>