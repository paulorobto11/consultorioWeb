<?php 
 /** Classe responsavel pelas transacoes da Tabela: Param. */ 
class ParamDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO param ('; 
	 	 $sql .= 'codemp,';
		 $sql .= 'qrcod,';
		 $sql .= 'SMTPSecure,';
		 $sql .= 'Host,';
		 $sql .= 'Port,';
		 $sql .= 'Username,';
		 $sql .= 'Password';
		 $sql .= ') VALUES ('; 
		 $sql .= '\''.$obj->getCodemp().'\',';
		 $sql .= '\''.$obj->getQrcod().'\',';
		 $sql .= '\''.$obj->getSMTPSecure().'\',';
		 $sql .= '\''.$obj->getHost().'\',';
		 $sql .= '\''.$obj->getPort().'\',';
		 $sql .= '\''.$obj->getUsername().'\',';
		 $sql .= '\''.$obj->getPassword().'\'';
		 $sql .= ')'; 
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function update($obj){
		 $sql = 'UPDATE param SET '; 
		 $sql .= 'qrcod = '.'\''.$obj->getQrcod().'\' ,';
		 $sql .= 'SMTPSecure = '.'\''.$obj->getSMTPSecure().'\' ,';
		 $sql .= 'Host = '.'\''.$obj->getHost().'\' ,';
		 $sql .= 'Port = '.'\''.$obj->getPort().'\' ,';
		 $sql .= 'Username = '.'\''.$obj->getUsername().'\' ,';
		 $sql .= 'Password = '.'\''.$obj->getPassword().'\' ';
		 $sql .= ' WHERE codemp = '.$obj->getCodemp();
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM param WHERE codemp = '.$obj->getCodemp();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM param WHERE 1=1 '; 
		if ($obj->getCodemp()) { 
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		} 
		if ($obj->getQrcod()) { 
			$sql .= " AND upper(qrcod)  like ('%".strtoupper($obj->getQrcod())."%')";
		} 
		if ($obj->getSMTPSecure()) { 
			$sql .= " AND upper(SMTPSecure)  like ('%".strtoupper($obj->getSMTPSecure())."%')";
		} 
		if ($obj->getHost()) { 
			$sql .= " AND upper(Host)  like ('%".strtoupper($obj->getHost())."%')";
		} 
		if ($obj->getPort()) { 
			$sql .= " AND upper(Port)  like ('%".strtoupper($obj->getPort())."%')";
		} 
		if ($obj->getUsername()) { 
			$sql .= " AND upper(Username)  like ('%".strtoupper($obj->getUsername())."%')";
		} 
		if ($obj->getPassword()) { 
			$sql .= " AND upper(Password)  like ('%".strtoupper($obj->getPassword())."%')";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setCodemp(mysql_result($rs, 0, 'codemp')); 
			 $obj->setQrcod(mysql_result($rs, 0, 'qrcod')); 
			 $obj->setSMTPSecure(mysql_result($rs, 0, 'SMTPSecure')); 
			 $obj->setHost(mysql_result($rs, 0, 'Host')); 
			 $obj->setPort(mysql_result($rs, 0, 'Port')); 
			 $obj->setUsername(mysql_result($rs, 0, 'Username')); 
			 $obj->setPassword(mysql_result($rs, 0, 'Password')); 
		} 
		 return $obj; 
	} 

	  function countAll($obj){
		 $sql = 'SELECT count(*) as existe FROM param WHERE 1=1 ';  


		if ($obj->getCodemp()) { 
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		} 
		if ($obj->getQrcod()) { 
			$sql .= " AND upper(qrcod)  like ('%".strtoupper($obj->getQrcod())."%')";
		} 
		if ($obj->getSMTPSecure()) { 
			$sql .= " AND upper(SMTPSecure)  like ('%".strtoupper($obj->getSMTPSecure())."%')";
		} 
		if ($obj->getHost()) { 
			$sql .= " AND upper(Host)  like ('%".strtoupper($obj->getHost())."%')";
		} 
		if ($obj->getPort()) { 
			$sql .= " AND upper(Port)  like ('%".strtoupper($obj->getPort())."%')";
		} 
		if ($obj->getUsername()) { 
			$sql .= " AND upper(Username)  like ('%".strtoupper($obj->getUsername())."%')";
		} 
		if ($obj->getPassword()) { 
			$sql .= " AND upper(Password)  like ('%".strtoupper($obj->getPassword())."%')";
		} 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function verifica_existe($obj){
		 $sql = 'SELECT count(*) as existe FROM param WHERE 1=1 ';  


		 if ($obj->getCodemp()) { 
			 $sql .= 	 "AND codemp = '".$obj->getCodemp()."'";
 		 } 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function selectAll($obj){
		 $sql = 'SELECT * FROM param WHERE 1=1 '; 


		if ($obj->getCodemp()) { 
			 $sql .= " AND codemp = '".$obj->getCodemp()."'";
 				} 
		if ($obj->getQrcod()) { 
			 $sql .= " AND upper(qrcod)  like ('%".strtoupper($obj->getQrcod())."%')";
 				} 
		if ($obj->getSMTPSecure()) { 
			 $sql .= " AND upper(SMTPSecure)  like ('%".strtoupper($obj->getSMTPSecure())."%')";
 				} 
		if ($obj->getHost()) { 
			 $sql .= " AND upper(Host)  like ('%".strtoupper($obj->getHost())."%')";
 				} 
		if ($obj->getPort()) { 
			 $sql .= " AND upper(Port)  like ('%".strtoupper($obj->getPort())."%')";
 				} 
		if ($obj->getUsername()) { 
			 $sql .= " AND upper(Username)  like ('%".strtoupper($obj->getUsername())."%')";
 				} 
		if ($obj->getPassword()) { 
			 $sql .= " AND upper(Password)  like ('%".strtoupper($obj->getPassword())."%')";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Param(); 
			 $obj->setCodemp(mysql_result($rs, $i, 'codemp')); 
			 $obj->setQrcod(mysql_result($rs, $i, 'qrcod')); 
			 $obj->setSMTPSecure(mysql_result($rs, $i, 'SMTPSecure')); 
			 $obj->setHost(mysql_result($rs, $i, 'Host')); 
			 $obj->setPort(mysql_result($rs, $i, 'Port')); 
			 $obj->setUsername(mysql_result($rs, $i, 'Username')); 
			 $obj->setPassword(mysql_result($rs, $i, 'Password')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
} 
