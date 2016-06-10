<?php 
 class Param{ 

	 private $codemp; 
	 private $qrcod; 
	 private $SMTPSecure; 
	 private $Host; 
	 private $Port; 
	 private $Username; 
	 private $Password; 

	 function __construct(){ 
		 $this->codemp =  '' ; 
		 $this->qrcod =  '' ; 
		 $this->SMTPSecure =  '' ; 
		 $this->Host =  '' ; 
		 $this->Port =  '' ; 
		 $this->Username =  '' ; 
		 $this->Password =  '' ; 
	} 

	 function setCodemp($value){ 
		 $this->codemp = $value; 
	 } 

	 function getCodemp(){ 
		 return $this->codemp; 
	} 

	 function setQrcod($value){ 
		 $this->qrcod = $value; 
	 } 

	 function getQrcod(){ 
		 return $this->qrcod; 
	} 

	 function setSMTPSecure($value){ 
		 $this->SMTPSecure = $value; 
	 } 

	 function getSMTPSecure(){ 
		 return $this->SMTPSecure; 
	} 

	 function setHost($value){ 
		 $this->Host = $value; 
	 } 

	 function getHost(){ 
		 return $this->Host; 
	} 

	 function setPort($value){ 
		 $this->Port = $value; 
	 } 

	 function getPort(){ 
		 return $this->Port; 
	} 

	 function setUsername($value){ 
		 $this->Username = $value; 
	 } 

	 function getUsername(){ 
		 return $this->Username; 
	} 

	 function setPassword($value){ 
		 $this->Password = $value; 
	 } 

	 function getPassword(){ 
		 return $this->Password; 
	} 

} 
 ?>