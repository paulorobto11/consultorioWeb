<?php 
 /** Classe responsavel pelas transacoes da Tabela: Cidade. */ 
class CidadesDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO cidade ('; 
		 $sql .= 'estado_federacao_id,';
		 $sql .= 'descricao,';
		 $sql .= 'cod_ibge';
		 $sql .= ') VALUES ('; 
		 $sql .= ($obj->getEstado_federacao_id()?$obj->getEstado_federacao_id():0).',';
		 $sql .= '\''.$obj->getDescricao().'\',';
		 $sql .= ($obj->getCod_ibge()?$obj->getCod_ibge():0);
		 $sql .= ')'; 
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function update($obj){
		 $sql = 'UPDATE cidade SET '; 
		 $sql .= 'estado_federacao_id = '.($obj->getEstado_federacao_id()?$obj->getEstado_federacao_id():0).',';
		 $sql .= 'descricao = '.'\''.$obj->getDescricao().'\' ,';
		 $sql .= 'cod_ibge = '.($obj->getCod_ibge()?$obj->getCod_ibge():0);
		 $sql .= ' WHERE id = '.$obj->getId();
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM cidade WHERE id = '.$obj->getId();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM cidade WHERE 1=1 '; 
		if ($obj->getId()) { 
			$sql .= " AND id = '".$obj->getId()."'";
		} 
		if ($obj->getEstado_federacao_id()) { 
			$sql .= " AND estado_federacao_id = '".$obj->getEstado_federacao_id()."'";
		} 
		if ($obj->getDescricao()) { 
			$sql .= " AND upper(descricao)  like ('%".strtoupper($obj->getDescricao())."%')";
		} 
		if ($obj->getCod_ibge()) { 
			$sql .= " AND cod_ibge = '".$obj->getCod_ibge()."'";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setId(mysql_result($rs, 0, 'id')); 
			 $obj->setEstado_federacao_id(mysql_result($rs, 0, 'estado_federacao_id')); 
			 $obj->setDescricao(mysql_result($rs, 0, 'descricao')); 
			 $obj->setCod_ibge(mysql_result($rs, 0, 'cod_ibge')); 
		} 
		 return $obj; 
	} 

	  function countAll($obj){
		 $sql = 'SELECT count(*) as existe FROM cidade WHERE 1=1 ';  


		if ($obj->getId()) { 
			$sql .= " AND id = '".$obj->getId()."'";
		} 
		if ($obj->getEstado_federacao_id()) { 
			$sql .= " AND estado_federacao_id = '".$obj->getEstado_federacao_id()."'";
		} 
		if ($obj->getDescricao()) { 
			$sql .= " AND upper(descricao)  like ('%".strtoupper($obj->getDescricao())."%')";
		} 
		if ($obj->getCod_ibge()) { 
			$sql .= " AND cod_ibge = '".$obj->getCod_ibge()."'";
		} 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function verifica_existe($obj){
		 $sql = 'SELECT count(*) as existe FROM cidade WHERE 1=1 ';  


		 if ($obj->getId()) { 
			 $sql .= 	 "AND id = '".$obj->getId()."'";
 		 } 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function selectAll($obj){
		 $sql = 'SELECT * FROM cidade WHERE 1=1 '; 


		if ($obj->getId()) { 
			 $sql .= " AND id = '".$obj->getId()."'";
 				} 
		if ($obj->getEstado_federacao_id()) { 
			 $sql .= " AND estado_federacao_id = '".$obj->getEstado_federacao_id()."'";
 				} 
		if ($obj->getDescricao()) { 
			 $sql .= " AND upper(descricao)  like ('%".strtoupper($obj->getDescricao())."%')";
 				} 
		if ($obj->getCod_ibge()) { 
			 $sql .= " AND cod_ibge = '".$obj->getCod_ibge()."'";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Cidade(); 
			 $obj->setId(mysql_result($rs, $i, 'id')); 
			 $obj->setEstado_federacao_id(mysql_result($rs, $i, 'estado_federacao_id')); 
			 $obj->setDescricao(mysql_result($rs, $i, 'descricao')); 
			 $obj->setCod_ibge(mysql_result($rs, $i, 'cod_ibge')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
} 
