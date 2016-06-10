<?php 
 class Nfse_item_nota{ 

	 private $seq_item; 
	 private $seq_nfse; 
	 private $cod_verificacao; 
	 private $iss_retido; 
	 private $valor_servico; 
	 private $vlr_pis; 
	 private $vlr_cofins; 
	 private $vlr_ir; 
	 private $vlr_inss; 
	 private $vlr_csll; 
	 private $vlr_condicionado; 
	 private $vlr_incondicionado; 
	 private $vlr_deducoes; 
	 private $vlr_retencoes; 
	 private $vlr_outras_retencoes; 
	 private $vlr_retido; 
	 private $vlr_deducoes_permitidas; 
	 private $vlr_base_calculo; 
	 private $vlr_aliquota; 
	 private $vlr_iss; 
	 private $vlr_liquido; 

	 function __construct(){ 
		 $this->seq_item =  '' ; 
		 $this->seq_nfse =  '' ; 
		 $this->cod_verificacao =  '' ; 
		 $this->iss_retido =  '' ; 
		 $this->valor_servico =  '' ; 
		 $this->vlr_pis =  '' ; 
		 $this->vlr_cofins =  '' ; 
		 $this->vlr_ir =  '' ; 
		 $this->vlr_inss =  '' ; 
		 $this->vlr_csll =  '' ; 
		 $this->vlr_condicionado =  '' ; 
		 $this->vlr_incondicionado =  '' ; 
		 $this->vlr_deducoes =  '' ; 
		 $this->vlr_retencoes =  '' ; 
		 $this->vlr_outras_retencoes =  '' ; 
		 $this->vlr_retido =  '' ; 
		 $this->vlr_deducoes_permitidas =  '' ; 
		 $this->vlr_base_calculo =  '' ; 
		 $this->vlr_aliquota =  '' ; 
		 $this->vlr_iss =  '' ; 
		 $this->vlr_liquido =  '' ; 
	} 

	 function setSeq_item($value){ 
		 $this->seq_item = $value; 
	 } 

	 function getSeq_item(){ 
		 return $this->seq_item; 
	} 

	 function setSeq_nfse($value){ 
		 $this->seq_nfse = $value; 
	 } 

	 function getSeq_nfse(){ 
		 return $this->seq_nfse; 
	} 

	 function setCod_verificacao($value){ 
		 $this->cod_verificacao = $value; 
	 } 

	 function getCod_verificacao(){ 
		 return $this->cod_verificacao; 
	} 

	 function setIss_retido($value){ 
		 $this->iss_retido = $value; 
	 } 

	 function getIss_retido(){ 
		 return $this->iss_retido; 
	} 

	 function setValor_servico($value){ 
		 $this->valor_servico = $value; 
	 } 

	 function getValor_servico(){ 
		 return $this->valor_servico; 
	} 

	 function setVlr_pis($value){ 
		 $this->vlr_pis = $value; 
	 } 

	 function getVlr_pis(){ 
		 return $this->vlr_pis; 
	} 

	 function setVlr_cofins($value){ 
		 $this->vlr_cofins = $value; 
	 } 

	 function getVlr_cofins(){ 
		 return $this->vlr_cofins; 
	} 

	 function setVlr_ir($value){ 
		 $this->vlr_ir = $value; 
	 } 

	 function getVlr_ir(){ 
		 return $this->vlr_ir; 
	} 

	 function setVlr_inss($value){ 
		 $this->vlr_inss = $value; 
	 } 

	 function getVlr_inss(){ 
		 return $this->vlr_inss; 
	} 

	 function setVlr_csll($value){ 
		 $this->vlr_csll = $value; 
	 } 

	 function getVlr_csll(){ 
		 return $this->vlr_csll; 
	} 

	 function setVlr_condicionado($value){ 
		 $this->vlr_condicionado = $value; 
	 } 

	 function getVlr_condicionado(){ 
		 return $this->vlr_condicionado; 
	} 

	 function setVlr_incondicionado($value){ 
		 $this->vlr_incondicionado = $value; 
	 } 

	 function getVlr_incondicionado(){ 
		 return $this->vlr_incondicionado; 
	} 

	 function setVlr_deducoes($value){ 
		 $this->vlr_deducoes = $value; 
	 } 

	 function getVlr_deducoes(){ 
		 return $this->vlr_deducoes; 
	} 

	 function setVlr_retencoes($value){ 
		 $this->vlr_retencoes = $value; 
	 } 

	 function getVlr_retencoes(){ 
		 return $this->vlr_retencoes; 
	} 

	 function setVlr_outras_retencoes($value){ 
		 $this->vlr_outras_retencoes = $value; 
	 } 

	 function getVlr_outras_retencoes(){ 
		 return $this->vlr_outras_retencoes; 
	} 

	 function setVlr_retido($value){ 
		 $this->vlr_retido = $value; 
	 } 

	 function getVlr_retido(){ 
		 return $this->vlr_retido; 
	} 

	 function setVlr_deducoes_permitidas($value){ 
		 $this->vlr_deducoes_permitidas = $value; 
	 } 

	 function getVlr_deducoes_permitidas(){ 
		 return $this->vlr_deducoes_permitidas; 
	} 

	 function setVlr_base_calculo($value){ 
		 $this->vlr_base_calculo = $value; 
	 } 

	 function getVlr_base_calculo(){ 
		 return $this->vlr_base_calculo; 
	} 

	 function setVlr_aliquota($value){ 
		 $this->vlr_aliquota = $value; 
	 } 

	 function getVlr_aliquota(){ 
		 return $this->vlr_aliquota; 
	} 

	 function setVlr_iss($value){ 
		 $this->vlr_iss = $value; 
	 } 

	 function getVlr_iss(){ 
		 return $this->vlr_iss; 
	} 

	 function setVlr_liquido($value){ 
		 $this->vlr_liquido = $value; 
	 } 

	 function getVlr_liquido(){ 
		 return $this->vlr_liquido; 
	} 

} 
 ?>