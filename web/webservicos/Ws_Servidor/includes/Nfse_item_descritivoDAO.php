<?php 
 /** Classe responsavel pelas transacoes da Tabela: Nfse_item_descritivo. */ 
class Nfse_item_descritivoDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO nfse_item_descritivo ('; 
		 $sql .= 'seq_nfse,';
		 $sql .= 'discriminacao';
		 $sql .= ') VALUES ('; 
		 $sql .= ($obj->getSeq_nfse()?$obj->getSeq_nfse():0).',';
		 $sql .= '\''.$obj->getDiscriminacao().'\'';
		 $sql .= ')'; 
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function update($obj){
		 $sql = 'UPDATE nfse_item_descritivo SET '; 
		 $sql .= 'seq_nfse = '.($obj->getSeq_nfse()?$obj->getSeq_nfse():0).',';
		 $sql .= 'discriminacao = '.'\''.$obj->getDiscriminacao().'\' ';
		 $sql .= ' WHERE seq_item = '.$obj->getSeq_item();
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM nfse_item_descritivo WHERE seq_item = '.$obj->getSeq_item();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM nfse_item_descritivo WHERE 1=1 '; 
		if ($obj->getSeq_item()) { 
			$sql .= " AND seq_item = '".$obj->getSeq_item()."'";
		} 
		if ($obj->getSeq_nfse()) { 
			$sql .= " AND seq_nfse = '".$obj->getSeq_nfse()."'";
		} 
		if ($obj->getDiscriminacao()) { 
			$sql .= " AND upper(discriminacao)  like ('%".strtoupper($obj->getDiscriminacao())."%')";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setSeq_item(mysql_result($rs, 0, 'seq_item')); 
			 $obj->setSeq_nfse(mysql_result($rs, 0, 'seq_nfse')); 
			 $obj->setDiscriminacao(mysql_result($rs, 0, 'discriminacao')); 
		} 
		 return $obj; 
	} 

	  function countAll($obj){
		 $sql = 'SELECT count(*) as existe FROM nfse_item_descritivo WHERE 1=1 ';  


		if ($obj->getSeq_item()) { 
			$sql .= " AND seq_item = '".$obj->getSeq_item()."'";
		} 
		if ($obj->getSeq_nfse()) { 
			$sql .= " AND seq_nfse = '".$obj->getSeq_nfse()."'";
		} 
		if ($obj->getDiscriminacao()) { 
			$sql .= " AND upper(discriminacao)  like ('%".strtoupper($obj->getDiscriminacao())."%')";
		} 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function verifica_existe($obj){
		 $sql = 'SELECT count(*) as existe FROM nfse_item_descritivo WHERE 1=1 ';  


		 if ($obj->getSeq_item()) { 
			 $sql .= 	 "AND seq_item = '".$obj->getSeq_item()."'";
 		 } 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function selectAll($obj){
		 $sql = 'SELECT * FROM nfse_item_descritivo WHERE 1=1 '; 


		if ($obj->getSeq_item()) { 
			 $sql .= " AND seq_item = '".$obj->getSeq_item()."'";
 				} 
		if ($obj->getSeq_nfse()) { 
			 $sql .= " AND seq_nfse = '".$obj->getSeq_nfse()."'";
 				} 
		if ($obj->getDiscriminacao()) { 
			 $sql .= " AND upper(discriminacao)  like ('%".strtoupper($obj->getDiscriminacao())."%')";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Nfse_item_descritivo(); 
			 $obj->setSeq_item(mysql_result($rs, $i, 'seq_item')); 
			 $obj->setSeq_nfse(mysql_result($rs, $i, 'seq_nfse')); 
			 $obj->setDiscriminacao(mysql_result($rs, $i, 'discriminacao')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
} 
