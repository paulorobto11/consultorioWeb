<?php 
 class Notafiscal{ 

	 private $id; 
	 private $codemp; 
	 private $id_nota; 
	 private $verificacao; 
	 private $ano_comp; 
	 private $mes_comp; 
	 private $data_emissao; 
	 private $nr_nota; 
	 private $sr_nota; 
	 private $nr_rps; 
	 private $sr_rps; 
	 private $atividade; 
	 private $valor_nota; 
	 private $retencao; 
	 private $vlr_iss; 
	 private $tomador_tipo; 
	 private $tomador_inscricao; 
	 private $tomador_nome; 
	 private $local_prestacao; 
	 private $snacional; 
	 private $tipo_emissao; 
	 private $situacao; 

	 function __construct(){ 
		 $this->id =  '' ; 
		 $this->codemp =  '' ; 
		 $this->id_nota =  '' ; 
		 $this->verificacao =  '' ; 
		 $this->ano_comp =  '' ; 
		 $this->mes_comp =  '' ; 
		 $this->data_emissao =  '' ; 
		 $this->nr_nota =  '' ; 
		 $this->sr_nota =  '' ; 
		 $this->nr_rps =  '' ; 
		 $this->sr_rps =  '' ; 
		 $this->atividade =  '' ; 
		 $this->valor_nota =  '' ; 
		 $this->retencao =  '' ; 
		 $this->vlr_iss =  '' ; 
		 $this->tomador_tipo =  '' ; 
		 $this->tomador_inscricao =  '' ; 
		 $this->tomador_nome =  '' ; 
		 $this->local_prestacao =  '' ; 
		 $this->snacional =  '' ; 
		 $this->tipo_emissao =  '' ; 
		 $this->situacao =  '' ; 
	} 

	 function setId($value){ 
		 $this->id = $value; 
	 } 

	 function getId(){ 
		 return $this->id; 
	} 

	 function setCodemp($value){ 
		 $this->codemp = $value; 
	 } 

	 function getCodemp(){ 
		 return $this->codemp; 
	} 

	 function setId_nota($value){ 
		 $this->id_nota = $value; 
	 } 

	 function getId_nota(){ 
		 return $this->id_nota; 
	} 

	 function setVerificacao($value){ 
		 $this->verificacao = $value; 
	 } 

	 function getVerificacao(){ 
		 return $this->verificacao; 
	} 

	 function setAno_comp($value){ 
		 $this->ano_comp = $value; 
	 } 

	 function getAno_comp(){ 
		 return $this->ano_comp; 
	} 

	 function setMes_comp($value){ 
		 $this->mes_comp = $value; 
	 } 

	 function getMes_comp(){ 
		 return $this->mes_comp; 
	} 

	 function setData_emissao($value){ 
		 $this->data_emissao = $value; 
	 } 

	 function getData_emissao(){ 
		 return $this->data_emissao; 
	} 

	 function setNr_nota($value){ 
		 $this->nr_nota = $value; 
	 } 

	 function getNr_nota(){ 
		 return $this->nr_nota; 
	} 

	 function setSr_nota($value){ 
		 $this->sr_nota = $value; 
	 } 

	 function getSr_nota(){ 
		 return $this->sr_nota; 
	} 

	 function setNr_rps($value){ 
		 $this->nr_rps = $value; 
	 } 

	 function getNr_rps(){ 
		 return $this->nr_rps; 
	} 

	 function setSr_rps($value){ 
		 $this->sr_rps = $value; 
	 } 

	 function getSr_rps(){ 
		 return $this->sr_rps; 
	} 

	 function setAtividade($value){ 
		 $this->atividade = $value; 
	 } 

	 function getAtividade(){ 
		 return $this->atividade; 
	} 

	 function setValor_nota($value){ 
		 $this->valor_nota = $value; 
	 } 

	 function getValor_nota(){ 
		 return $this->valor_nota; 
	} 

	 function setRetencao($value){ 
		 $this->retencao = $value; 
	 } 

	 function getRetencao(){ 
		 return $this->retencao; 
	} 

	 function setVlr_iss($value){ 
		 $this->vlr_iss = $value; 
	 } 

	 function getVlr_iss(){ 
		 return $this->vlr_iss; 
	} 

	 function setTomador_tipo($value){ 
		 $this->tomador_tipo = $value; 
	 } 

	 function getTomador_tipo(){ 
		 return $this->tomador_tipo; 
	} 

	 function setTomador_inscricao($value){ 
		 $this->tomador_inscricao = $value; 
	 } 

	 function getTomador_inscricao(){ 
		 return $this->tomador_inscricao; 
	} 

	 function setTomador_nome($value){ 
		 $this->tomador_nome = $value; 
	 } 

	 function getTomador_nome(){ 
		 return $this->tomador_nome; 
	} 

	 function setLocal_prestacao($value){ 
		 $this->local_prestacao = $value; 
	 } 

	 function getLocal_prestacao(){ 
		 return $this->local_prestacao; 
	} 

	 function setSnacional($value){ 
		 $this->snacional = $value; 
	 } 

	 function getSnacional(){ 
		 return $this->snacional; 
	} 

	 function setTipo_emissao($value){ 
		 $this->tipo_emissao = $value; 
	 } 

	 function getTipo_emissao(){ 
		 return $this->tipo_emissao; 
	} 

	 function setSituacao($value){ 
		 $this->situacao = $value; 
	 } 

	 function getSituacao(){ 
		 return $this->situacao; 
	} 

} 
 ?>