<?php 
 class Nfse_item_descritivo{ 

	 private $seq_item; 
	 private $seq_nfse; 
	 private $discriminacao; 

	 function __construct(){ 
		 $this->seq_item =  '' ; 
		 $this->seq_nfse =  '' ; 
		 $this->discriminacao =  '' ; 
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

	 function setDiscriminacao($value){ 
		 $this->discriminacao = $value; 
	 } 

	 function getDiscriminacao(){ 
		 return $this->discriminacao; 
	} 

} 
 ?>