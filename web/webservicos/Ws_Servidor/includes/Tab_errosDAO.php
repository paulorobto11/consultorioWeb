<?php 
 /** Classe responsavel pelas transacoes da Tabela: Tab_erros. */ 
class Tab_errosDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO tab_erros ('; 
		 $sql .= 'cod_erro,';
		 $sql .= 'texto_erro';
		 $sql .= ') VALUES ('; 
		 $sql .= ($obj->getCod_erro()?$obj->getCod_erro():0).',';
		 $sql .= '\''.$obj->getTexto_erro().'\'';
		 $sql .= ')'; 
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function update($obj){
		 $sql = 'UPDATE tab_erros SET '; 
		 $sql .= 'cod_erro = '.($obj->getCod_erro()?$obj->getCod_erro():0).',';
		 $sql .= 'texto_erro = '.'\''.$obj->getTexto_erro().'\' ';
		 $sql .= ' WHERE cod_erro = '.$obj->getCod_erro();
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM tab_erros WHERE cod_erro = '.$obj->getCod_erro();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM tab_erros WHERE 1=1 '; 
		if ($obj->getCod_erro()) { 
			$sql .= " AND cod_erro = '".$obj->getCod_erro()."'";
		} 
		if ($obj->getTexto_erro()) { 
			$sql .= " AND upper(texto_erro)  like ('%".strtoupper($obj->getTexto_erro())."%')";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setCod_erro(mysql_result($rs, 0, 'cod_erro')); 
			 $obj->setTexto_erro(mysql_result($rs, 0, 'texto_erro')); 
		} 
		 return $obj; 
	} 

	  function countAll($obj){
		 $sql = 'SELECT count(*) as existe FROM tab_erros WHERE 1=1 ';  


		if ($obj->getCod_erro()) { 
			$sql .= " AND cod_erro = '".$obj->getCod_erro()."'";
		} 
		if ($obj->getTexto_erro()) { 
			$sql .= " AND upper(texto_erro)  like ('%".strtoupper($obj->getTexto_erro())."%')";
		} 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function verifica_existe($obj){
		 $sql = 'SELECT count(*) as existe FROM tab_erros WHERE 1=1 ';  
		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function selectAll($obj){
		 $sql = 'SELECT * FROM tab_erros WHERE 1=1 '; 


		if ($obj->getCod_erro()) { 
			 $sql .= " AND cod_erro = '".$obj->getCod_erro()."'";
 				} 
		if ($obj->getTexto_erro()) { 
			 $sql .= " AND upper(texto_erro)  like ('%".strtoupper($obj->getTexto_erro())."%')";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Tab_erros(); 
			 $obj->setCod_erro(mysql_result($rs, $i, 'cod_erro')); 
			 $obj->setTexto_erro(mysql_result($rs, $i, 'texto_erro')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
} 
