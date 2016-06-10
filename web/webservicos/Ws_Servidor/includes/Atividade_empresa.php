<?php 
 class Atividade_empresa{ 

	 private $id; 
	 private $codemp; 
	 private $id_atividade; 
	 private $atividade; 
	 private $servico; 
	 private $descricao; 
	 private $aliquota; 
	 private $dtinicio; 
	 private $dtfinal; 

	 function __construct(){ 
		 $this->id =  '' ; 
		 $this->codemp =  '' ; 
		 $this->id_atividade =  '' ; 
		 $this->atividade =  '' ; 
		 $this->servico =  '' ; 
		 $this->descricao =  '' ; 
		 $this->aliquota =  '' ; 
		 $this->dtinicio =  '' ; 
		 $this->dtfinal =  '' ; 
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

	 function setId_atividade($value){ 
		 $this->id_atividade = $value; 
	 } 

	 function getId_atividade(){ 
		 return $this->id_atividade; 
	} 

	 function setAtividade($value){ 
		 $this->atividade = $value; 
	 } 

	 function getAtividade(){ 
		 return $this->atividade; 
	} 

	 function setServico($value){ 
		 $this->servico = $value; 
	 } 

	 function getServico(){ 
		 return $this->servico; 
	} 

	 function setDescricao($value){ 
		 $this->descricao = $value; 
	 } 

	 function getDescricao(){ 
		 return $this->descricao; 
	} 

	 function setAliquota($value){ 
		 $this->aliquota = $value; 
	 } 

	 function getAliquota(){ 
		 return $this->aliquota; 
	} 

	 function setDtinicio($value){ 
		 $this->dtinicio = $value; 
	 } 

	 function getDtinicio(){ 
		 return $this->dtinicio; 
	} 

	 function setDtfinal($value){ 
		 $this->dtfinal = $value; 
	 } 

	 function getDtfinal(){ 
		 return $this->dtfinal; 
	} 

} 
 ?>