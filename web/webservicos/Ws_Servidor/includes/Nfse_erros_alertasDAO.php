<?php 
 /** Classe responsavel pelas transacoes da Tabela: Nfse_erros_alertas. */ 
class Nfse_erros_alertasDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO nfse_erros_alertas ('; 
		 $sql .= 'codigo,';
		 $sql .= 'mensagem,';
		 $sql .= 'motivo,';
		 $sql .= 'observacao';
		 $sql .= ') VALUES ('; 
		 $sql .= '\''.$obj->getCodigo().'\',';
		 $sql .= '\''.$obj->getMensagem().'\',';
		 $sql .= '\''.$obj->getMotivo().'\',';
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
		 $sql = 'UPDATE nfse_erros_alertas SET '; 
		 $sql .= 'codigo = '.'\''.$obj->getCodigo().'\' ,';
		 $sql .= 'mensagem = '.'\''.$obj->getMensagem().'\' ,';
		 $sql .= 'motivo = '.'\''.$obj->getMotivo().'\' ,';
		 $sql .= 'observacao = '.'\''.$obj->getObservacao().'\' ';
		 $sql .= ' WHERE codigo = '.$obj->getCodigo();
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM nfse_erros_alertas WHERE codigo = '.$obj->getCodigo();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM nfse_erros_alertas WHERE 1=1 '; 
		if ($obj->getCodigo()) { 
			$sql .= " AND upper(codigo)  like ('%".strtoupper($obj->getCodigo())."%')";
		} 
		if ($obj->getMensagem()) { 
			$sql .= " AND upper(mensagem)  like ('%".strtoupper($obj->getMensagem())."%')";
		} 
		if ($obj->getMotivo()) { 
			$sql .= " AND upper(motivo)  like ('%".strtoupper($obj->getMotivo())."%')";
		} 
		if ($obj->getObservacao()) { 
			$sql .= " AND upper(observacao)  like ('%".strtoupper($obj->getObservacao())."%')";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setCodigo(mysql_result($rs, 0, 'codigo')); 
			 $obj->setMensagem(mysql_result($rs, 0, 'mensagem')); 
			 $obj->setMotivo(mysql_result($rs, 0, 'motivo')); 
			 $obj->setObservacao(mysql_result($rs, 0, 'observacao')); 
		} 
		 return $obj; 
	} 

	  function countAll($obj){
		 $sql = 'SELECT count(*) as existe FROM nfse_erros_alertas WHERE 1=1 ';  


		if ($obj->getCodigo()) { 
			$sql .= " AND upper(codigo)  like ('%".strtoupper($obj->getCodigo())."%')";
		} 
		if ($obj->getMensagem()) { 
			$sql .= " AND upper(mensagem)  like ('%".strtoupper($obj->getMensagem())."%')";
		} 
		if ($obj->getMotivo()) { 
			$sql .= " AND upper(motivo)  like ('%".strtoupper($obj->getMotivo())."%')";
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
		 $sql = 'SELECT count(*) as existe FROM nfse_erros_alertas WHERE 1=1 ';  


		 if ($obj->getCodigo()) { 
			 $sql .= 	 "AND codigo = '".$obj->getCodigo()."'";
 		 } 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function selectAll($obj){
		 $sql = 'SELECT * FROM nfse_erros_alertas WHERE 1=1 '; 


		if ($obj->getCodigo()) { 
			 $sql .= " AND upper(codigo)  like ('%".strtoupper($obj->getCodigo())."%')";
 				} 
		if ($obj->getMensagem()) { 
			 $sql .= " AND upper(mensagem)  like ('%".strtoupper($obj->getMensagem())."%')";
 				} 
		if ($obj->getMotivo()) { 
			 $sql .= " AND upper(motivo)  like ('%".strtoupper($obj->getMotivo())."%')";
 				} 
		if ($obj->getObservacao()) { 
			 $sql .= " AND upper(observacao)  like ('%".strtoupper($obj->getObservacao())."%')";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Nfse_erros_alertas(); 
			 $obj->setCodigo(mysql_result($rs, $i, 'codigo')); 
			 $obj->setMensagem(mysql_result($rs, $i, 'mensagem')); 
			 $obj->setMotivo(mysql_result($rs, $i, 'motivo')); 
			 $obj->setObservacao(mysql_result($rs, $i, 'observacao')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
} 
