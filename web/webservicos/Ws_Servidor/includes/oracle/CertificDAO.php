<?php 
 /** Classe responsavel pelas transacoes da Tabela: Certific. */ 
class CertificDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO certific ('; 
	 	 $sql .= 'codemp,';
		 $sql .= 'nome_certicado,';
		 $sql .= 'senha_certificado,';
		 $sql .= 'data_validade,';
		 $sql .= 'observacao';
		 $sql .= ') VALUES ('; 
		 $sql .= '\''.$obj->getCodemp().'\',';
		 $sql .= '\''.$obj->getNome_certicado().'\',';
		 $sql .= '\''.$obj->getSenha_certificado().'\',';
		 $sql .= '\''.$obj->getData_validade().'\',';
		 $sql .= '\''.$obj->getObservacao().'\'';
		 $sql .= ')'; 
		 
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function update($obj){
		 $sql = 'UPDATE certific SET '; 
		 $sql .= 'nome_certicado = '.'\''.$obj->getNome_certicado().'\' ,';
		 $sql .= 'senha_certificado = '.'\''.$obj->getSenha_certificado().'\' ,';
		 $sql .= 'data_validade = '.'\''.$obj->getData_validade().'\' ,';
		 $sql .= 'observacao = '.'\''.$obj->getObservacao().'\' ';
		 $sql .= ' WHERE  1=1 ';
		 
		if ($obj->getCodemp()) { 
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		} 
		if ($obj->getNome_certicado()) { 
			$sql .= " AND upper(nome_certicado)  like ('%".strtoupper($obj->getNome_certicado())."%')";
		} 
		 
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
   	   $sql = 'DELETE FROM certific WHERE  1=1 '; 
		if ($obj->getCodemp()) { 
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		} 
		if ($obj->getNome_certicado()) { 
			$sql .= " AND upper(nome_certicado)  like ('%".strtoupper($obj->getNome_certicado())."%')";
		} 
		 
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM certific WHERE 1=1 '; 
		if ($obj->getCodemp()) { 
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		} 
		if ($obj->getNome_certicado()) { 
			$sql .= " AND upper(nome_certicado)  like ('%".strtoupper($obj->getNome_certicado())."%')";
		} 
		if ($obj->getSenha_certificado()) { 
			$sql .= " AND upper(senha_certificado)  like ('%".strtoupper($obj->getSenha_certificado())."%')";
		} 
		if ($obj->getData_validade()) { 
			$sql .= " AND data_validade = '".$obj->getData_validade()."'";
		} 
		if ($obj->getObservacao()) { 
			$sql .= " AND upper(observacao)  like ('%".strtoupper($obj->getObservacao())."%')";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setCodemp(mysql_result($rs, 0, 'codemp')); 
			 $obj->setNome_certicado(mysql_result($rs, 0, 'nome_certicado')); 
			 $obj->setSenha_certificado(mysql_result($rs, 0, 'senha_certificado')); 
			 $obj->setData_validade(mysql_result($rs, 0, 'data_validade')); 
			 $obj->setObservacao(mysql_result($rs, 0, 'observacao')); 
		} 
		 return $obj; 
	} 
	
	  function select_pfx($obj){ 
	    $sql = 'SELECT * FROM certific WHERE 1=1 AND upper(nome_certicado)  like ("%.pfx%")'; 
		if ($obj->getCodemp()) { 
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		}
		 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setCodemp(mysql_result($rs, 0, 'codemp')); 
			 $obj->setNome_certicado(mysql_result($rs, 0, 'nome_certicado')); 
			 $obj->setSenha_certificado(mysql_result($rs, 0, 'senha_certificado')); 
			 $obj->setData_validade(mysql_result($rs, 0, 'data_validade')); 
			 $obj->setObservacao(mysql_result($rs, 0, 'observacao')); 
		} 
		 return $obj; 
	} 

	  function select_cer($obj){ 
	    $sql = 'SELECT * FROM certific WHERE 1=1 AND upper(nome_certicado)  like ("%.cer%")'; 
		if ($obj->getCodemp()) { 
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		}
		 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setCodemp(mysql_result($rs, 0, 'codemp')); 
			 $obj->setNome_certicado(mysql_result($rs, 0, 'nome_certicado')); 
			 $obj->setSenha_certificado(mysql_result($rs, 0, 'senha_certificado')); 
			 $obj->setData_validade(mysql_result($rs, 0, 'data_validade')); 
			 $obj->setObservacao(mysql_result($rs, 0, 'observacao')); 
		} 
		 return $obj; 
	} 
	

	  function countAll($obj){
		 $sql = 'SELECT count(*) as existe FROM certific WHERE 1=1 ';  


		if ($obj->getCodemp()) { 
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		} 
		if ($obj->getNome_certicado()) { 
			$sql .= " AND upper(nome_certicado)  like ('%".strtoupper($obj->getNome_certicado())."%')";
		} 
		if ($obj->getSenha_certificado()) { 
			$sql .= " AND upper(senha_certificado)  like ('%".strtoupper($obj->getSenha_certificado())."%')";
		} 
		if ($obj->getData_validade()) { 
			$sql .= " AND data_validade = '".$obj->getData_validade()."'";
		} 
		if ($obj->getObservacao()) { 
			$sql .= " AND upper(observacao)  like ('%".strtoupper($obj->getObservacao())."%')";
		} 

		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function verifica_existe($obj){
		 $sql = 'SELECT count(*) as existe FROM certific WHERE 1=1 ';  


		 if ($obj->getCodemp()) { 
			 $sql .= 	 "AND codemp = '".$obj->getCodemp()."'";
 		 } 
		if ($obj->getNome_certicado()) { 
			$sql .= " AND upper(nome_certicado)  like ('%".strtoupper($obj->getNome_certicado())."%')";
		} 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 

 	  function verifica_existe_pfx($obj){
		 $sql = 'SELECT count(*) as existe FROM certific WHERE 1=1  AND upper(nome_certicado)  like ("%.pfx%")';  


		 if ($obj->getCodemp()) { 
			 $sql .= 	 "AND codemp = '".$obj->getCodemp()."'";
 		 } 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 

 	  function selectAll($obj){
		 $sql = 'SELECT * FROM certific WHERE 1=1 '; 


		if ($obj->getCodemp()) { 
			 $sql .= " AND codemp = '".$obj->getCodemp()."'";
 				} 
		if ($obj->getNome_certicado()) { 
			 $sql .= " AND upper(nome_certicado)  like ('%".strtoupper($obj->getNome_certicado())."%')";
 				} 
		if ($obj->getSenha_certificado()) { 
			 $sql .= " AND upper(senha_certificado)  like ('%".strtoupper($obj->getSenha_certificado())."%')";
 				} 
		if ($obj->getData_validade()) { 
			 $sql .= " AND data_validade = '".$obj->getData_validade()."'";
 				} 
		if ($obj->getObservacao()) { 
			 $sql .= " AND upper(observacao)  like ('%".strtoupper($obj->getObservacao())."%')";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Certific(); 
			 $obj->setCodemp(mysql_result($rs, $i, 'codemp')); 
			 $obj->setNome_certicado(mysql_result($rs, $i, 'nome_certicado')); 
			 $obj->setSenha_certificado(mysql_result($rs, $i, 'senha_certificado')); 
			 $obj->setData_validade(mysql_result($rs, $i, 'data_validade')); 
			 $obj->setObservacao(mysql_result($rs, $i, 'observacao')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
} 
