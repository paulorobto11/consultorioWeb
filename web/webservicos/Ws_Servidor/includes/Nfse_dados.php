<?php 
 class Nfse_dados{ 

	 private $rps_id; 
	 private $cnpj; 
	 private $infrps_numero; 
	 private $infrps_serie; 
	 private $infrps_tipo; 
	 private $identrps_dtemi; 
	 private $identrps_natureza; 
	 private $identrps_snacional; 
	 private $identrps_cultura; 
	 private $identrps_status; 
	 private $serv_vlrs_valorservicos; 
	 private $serv_vlrs_valordeducoes; 
	 private $serv_vlrs_valorpis; 
	 private $serv_vlrs_valorcofins; 
	 private $serv_vlrs_valorinss; 
	 private $serv_vlrs_valorir; 
	 private $serv_vlrs_valorcsll; 
	 private $serv_vlrs_issretido; 
	 private $serv_vlrs_valoriss; 
	 private $serv_vlrs_basecalculo; 
	 private $serv_vlrs_aliquota; 
	 private $serv_vlrs_valorliquidonfse; 
	 private $serv_ativ_itemlistaservico; 
	 private $serv_ativ_codigocnae; 
	 private $serv_ativ_atividade; 
	 private $serv_ativ_discr; 
	 private $serv_ativ_codmun; 
	 private $prest_cnpj; 
	 private $prest_inscrmun; 
	 private $tomador_cpfcnpj; 
	 private $tomador_cpf; 
	 private $tomador_nome; 
	 private $tomador_end_lograd; 
	 private $tomador_end_numero; 
	 private $tomador_end_codmun; 
	 private $tomador_end_cep; 

	 function __construct(){ 
		 $this->rps_id =  '' ; 
		 $this->cnpj =  '' ; 
		 $this->infrps_numero =  '' ; 
		 $this->infrps_serie =  '' ; 
		 $this->infrps_tipo =  '' ; 
		 $this->identrps_dtemi =  '' ; 
		 $this->identrps_natureza =  '' ; 
		 $this->identrps_snacional =  '' ; 
		 $this->identrps_cultura =  '' ; 
		 $this->identrps_status =  '' ; 
		 $this->serv_vlrs_valorservicos =  '' ; 
		 $this->serv_vlrs_valordeducoes =  '' ; 
		 $this->serv_vlrs_valorpis =  '' ; 
		 $this->serv_vlrs_valorcofins =  '' ; 
		 $this->serv_vlrs_valorinss =  '' ; 
		 $this->serv_vlrs_valorir =  '' ; 
		 $this->serv_vlrs_valorcsll =  '' ; 
		 $this->serv_vlrs_issretido =  '' ; 
		 $this->serv_vlrs_valoriss =  '' ; 
		 $this->serv_vlrs_basecalculo =  '' ; 
		 $this->serv_vlrs_aliquota =  '' ; 
		 $this->serv_vlrs_valorliquidonfse =  '' ; 
		 $this->serv_ativ_itemlistaservico =  '' ; 
		 $this->serv_ativ_codigocnae =  '' ; 
		 $this->serv_ativ_atividade =  '' ; 
		 $this->serv_ativ_discr =  '' ; 
		 $this->serv_ativ_codmun =  '' ; 
		 $this->prest_cnpj =  '' ; 
		 $this->prest_inscrmun =  '' ; 
		 $this->tomador_cpfcnpj =  '' ; 
		 $this->tomador_cpf =  '' ; 
		 $this->tomador_nome =  '' ; 
		 $this->tomador_end_lograd =  '' ; 
		 $this->tomador_end_numero =  '' ; 
		 $this->tomador_end_codmun =  '' ; 
		 $this->tomador_end_cep =  '' ; 
	} 

	 function setRps_id($value){ 
		 $this->rps_id = $value; 
	 } 

	 function getRps_id(){ 
		 return $this->rps_id; 
	} 

	 function setCnpj($value){ 
		 $this->cnpj = $value; 
	 } 

	 function getCnpj(){ 
		 return $this->cnpj; 
	} 

	 function setInfrps_numero($value){ 
		 $this->infrps_numero = $value; 
	 } 

	 function getInfrps_numero(){ 
		 return $this->infrps_numero; 
	} 

	 function setInfrps_serie($value){ 
		 $this->infrps_serie = $value; 
	 } 

	 function getInfrps_serie(){ 
		 return $this->infrps_serie; 
	} 

	 function setInfrps_tipo($value){ 
		 $this->infrps_tipo = $value; 
	 } 

	 function getInfrps_tipo(){ 
		 return $this->infrps_tipo; 
	} 

	 function setIdentrps_dtemi($value){ 
		 $this->identrps_dtemi = $value; 
	 } 

	 function getIdentrps_dtemi(){ 
		 return $this->identrps_dtemi; 
	} 

	 function setIdentrps_natureza($value){ 
		 $this->identrps_natureza = $value; 
	 } 

	 function getIdentrps_natureza(){ 
		 return $this->identrps_natureza; 
	} 

	 function setIdentrps_snacional($value){ 
		 $this->identrps_snacional = $value; 
	 } 

	 function getIdentrps_snacional(){ 
		 return $this->identrps_snacional; 
	} 

	 function setIdentrps_cultura($value){ 
		 $this->identrps_cultura = $value; 
	 } 

	 function getIdentrps_cultura(){ 
		 return $this->identrps_cultura; 
	} 

	 function setIdentrps_status($value){ 
		 $this->identrps_status = $value; 
	 } 

	 function getIdentrps_status(){ 
		 return $this->identrps_status; 
	} 

	 function setServ_vlrs_valorservicos($value){ 
		 $this->serv_vlrs_valorservicos = $value; 
	 } 

	 function getServ_vlrs_valorservicos(){ 
		 return $this->serv_vlrs_valorservicos; 
	} 

	 function setServ_vlrs_valordeducoes($value){ 
		 $this->serv_vlrs_valordeducoes = $value; 
	 } 

	 function getServ_vlrs_valordeducoes(){ 
		 return $this->serv_vlrs_valordeducoes; 
	} 

	 function setServ_vlrs_valorpis($value){ 
		 $this->serv_vlrs_valorpis = $value; 
	 } 

	 function getServ_vlrs_valorpis(){ 
		 return $this->serv_vlrs_valorpis; 
	} 

	 function setServ_vlrs_valorcofins($value){ 
		 $this->serv_vlrs_valorcofins = $value; 
	 } 

	 function getServ_vlrs_valorcofins(){ 
		 return $this->serv_vlrs_valorcofins; 
	} 

	 function setServ_vlrs_valorinss($value){ 
		 $this->serv_vlrs_valorinss = $value; 
	 } 

	 function getServ_vlrs_valorinss(){ 
		 return $this->serv_vlrs_valorinss; 
	} 

	 function setServ_vlrs_valorir($value){ 
		 $this->serv_vlrs_valorir = $value; 
	 } 

	 function getServ_vlrs_valorir(){ 
		 return $this->serv_vlrs_valorir; 
	} 

	 function setServ_vlrs_valorcsll($value){ 
		 $this->serv_vlrs_valorcsll = $value; 
	 } 

	 function getServ_vlrs_valorcsll(){ 
		 return $this->serv_vlrs_valorcsll; 
	} 

	 function setServ_vlrs_issretido($value){ 
		 $this->serv_vlrs_issretido = $value; 
	 } 

	 function getServ_vlrs_issretido(){ 
		 return $this->serv_vlrs_issretido; 
	} 

	 function setServ_vlrs_valoriss($value){ 
		 $this->serv_vlrs_valoriss = $value; 
	 } 

	 function getServ_vlrs_valoriss(){ 
		 return $this->serv_vlrs_valoriss; 
	} 

	 function setServ_vlrs_basecalculo($value){ 
		 $this->serv_vlrs_basecalculo = $value; 
	 } 

	 function getServ_vlrs_basecalculo(){ 
		 return $this->serv_vlrs_basecalculo; 
	} 

	 function setServ_vlrs_aliquota($value){ 
		 $this->serv_vlrs_aliquota = $value; 
	 } 

	 function getServ_vlrs_aliquota(){ 
		 return $this->serv_vlrs_aliquota; 
	} 

	 function setServ_vlrs_valorliquidonfse($value){ 
		 $this->serv_vlrs_valorliquidonfse = $value; 
	 } 

	 function getServ_vlrs_valorliquidonfse(){ 
		 return $this->serv_vlrs_valorliquidonfse; 
	} 

	 function setServ_ativ_itemlistaservico($value){ 
		 $this->serv_ativ_itemlistaservico = $value; 
	 } 

	 function getServ_ativ_itemlistaservico(){ 
		 return $this->serv_ativ_itemlistaservico; 
	} 

	 function setServ_ativ_codigocnae($value){ 
		 $this->serv_ativ_codigocnae = $value; 
	 } 

	 function getServ_ativ_codigocnae(){ 
		 return $this->serv_ativ_codigocnae; 
	} 

	 function setServ_ativ_atividade($value){ 
		 $this->serv_ativ_atividade = $value; 
	 } 

	 function getServ_ativ_atividade(){ 
		 return $this->serv_ativ_atividade; 
	} 

	 function setServ_ativ_discr($value){ 
		 $this->serv_ativ_discr = $value; 
	 } 

	 function getServ_ativ_discr(){ 
		 return $this->serv_ativ_discr; 
	} 

	 function setServ_ativ_codmun($value){ 
		 $this->serv_ativ_codmun = $value; 
	 } 

	 function getServ_ativ_codmun(){ 
		 return $this->serv_ativ_codmun; 
	} 

	 function setPrest_cnpj($value){ 
		 $this->prest_cnpj = $value; 
	 } 

	 function getPrest_cnpj(){ 
		 return $this->prest_cnpj; 
	} 

	 function setPrest_inscrmun($value){ 
		 $this->prest_inscrmun = $value; 
	 } 

	 function getPrest_inscrmun(){ 
		 return $this->prest_inscrmun; 
	} 

	 function setTomador_cpfcnpj($value){ 
		 $this->tomador_cpfcnpj = $value; 
	 } 

	 function getTomador_cpfcnpj(){ 
		 return $this->tomador_cpfcnpj; 
	} 

	 function setTomador_cpf($value){ 
		 $this->tomador_cpf = $value; 
	 } 

	 function getTomador_cpf(){ 
		 return $this->tomador_cpf; 
	} 

	 function setTomador_nome($value){ 
		 $this->tomador_nome = $value; 
	 } 

	 function getTomador_nome(){ 
		 return $this->tomador_nome; 
	} 

	 function setTomador_end_lograd($value){ 
		 $this->tomador_end_lograd = $value; 
	 } 

	 function getTomador_end_lograd(){ 
		 return $this->tomador_end_lograd; 
	} 

	 function setTomador_end_numero($value){ 
		 $this->tomador_end_numero = $value; 
	 } 

	 function getTomador_end_numero(){ 
		 return $this->tomador_end_numero; 
	} 

	 function setTomador_end_codmun($value){ 
		 $this->tomador_end_codmun = $value; 
	 } 

	 function getTomador_end_codmun(){ 
		 return $this->tomador_end_codmun; 
	} 

	 function setTomador_end_cep($value){ 
		 $this->tomador_end_cep = $value; 
	 } 

	 function getTomador_end_cep(){ 
		 return $this->tomador_end_cep; 
	} 

} 
 ?>