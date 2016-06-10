<?php 
 /** Classe responsavel pelas transacoes da Tabela: Seq_nfe. */ 
class Seq_nfeDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO seq_nfe ('; 
		 $sql .= 'seq_nfe';
		 $sql .= ') VALUES ('; 
		 $sql .= ($obj->getSeq_nfe()?$obj->getSeq_nfe():0);
		 $sql .= ')'; 
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function update($obj){
		 $sql = 'UPDATE seq_nfe SET seq_nfe = '.($obj->getSeq_nfe()?$obj->getSeq_nfe():0);
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM seq_nfe WHERE seq_nfe = '.$obj->getSeq_nfe();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM seq_nfe WHERE 1=1 '; 
		 
		if ($obj->getSeq_nfe()) { 
			$sql .= " AND seq_nfe = '".$obj->getSeq_nfe()."'";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setSeq_nfe(mysql_result($rs, 0, 'seq_nfe')); 
		} 
		 return $obj; 
	} 

	  function countAll($obj){
		 $sql = 'SELECT count(*) as existe FROM seq_nfe WHERE 1=1 ';  


		if ($obj->getSeq_nfe()) { 
			$sql .= " AND seq_nfe = '".$obj->getSeq_nfe()."'";
		} 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function verifica_existe($obj){
		 $sql = 'SELECT count(*) as existe FROM seq_nfe WHERE 1=1 ';  




		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function selectAll($obj){
		 $sql = 'SELECT * FROM seq_nfe WHERE 1=1 '; 


		if ($obj->getSeq_nfe()) { 
			 $sql .= " AND seq_nfe = '".$obj->getSeq_nfe()."'";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Seq_nfe(); 
			 $obj->setSeq_nfe(mysql_result($rs, $i, 'seq_nfe')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
} 
