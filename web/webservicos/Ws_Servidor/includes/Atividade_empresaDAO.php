<?php 
 /** Classe responsavel pelas transacoes da Tabela: Atividade_empresa. */ 
class Atividade_empresaDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO atividade_empresa ('; 
		 $sql .= 'codemp,';
		 $sql .= 'id_atividade,';
		 $sql .= 'atividade,';
		 $sql .= 'servico,';
		 $sql .= 'descricao,';
		 $sql .= 'aliquota,';
		 $sql .= 'dtinicio,';
		 $sql .= 'dtfinal';
		 $sql .= ') VALUES ('; 
		 $sql .= ($obj->getCodemp()?$obj->getCodemp():0).',';
		 $sql .= ($obj->getId_atividade()?$obj->getId_atividade():0).',';
		 $sql .= ($obj->getAtividade()?$obj->getAtividade():0).',';
		 $sql .= '\''.$obj->getServico().'\',';
		 $sql .= '\''.$obj->getDescricao().'\',';
		 $sql .= ($obj->getAliquota()?$obj->getAliquota():0).',';
		 $sql .= '\''.$obj->getDtinicio().'\',';
		 $sql .= '\''.$obj->getDtfinal().'\'';
		 $sql .= ')'; 
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function update($obj){
		 $sql = 'UPDATE atividade_empresa SET '; 
		 $sql .= 'codemp = '.($obj->getCodemp()?$obj->getCodemp():0).',';
		 $sql .= 'id_atividade = '.($obj->getId_atividade()?$obj->getId_atividade():0).',';
		 $sql .= 'atividade = '.($obj->getAtividade()?$obj->getAtividade():0).',';
		 $sql .= 'servico = '.'\''.$obj->getServico().'\' ,';
		 $sql .= 'descricao = '.'\''.$obj->getDescricao().'\' ,';
		 $sql .= 'aliquota = '.($obj->getAliquota()?$obj->getAliquota():0).',';
		 $sql .= 'dtinicio = '.'\''.$obj->getDtinicio().'\' ,';
		 $sql .= 'dtfinal = '.'\''.$obj->getDtfinal().'\' ';
		 $sql .= ' WHERE id = '.$obj->getId();
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM atividade_empresa WHERE id = '.$obj->getId();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM atividade_empresa WHERE 1=1 '; 
		if ($obj->getId()) { 
			$sql .= " AND id = '".$obj->getId()."'";
		} 
		if ($obj->getCodemp()) { 
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		} 
		if ($obj->getId_atividade()) { 
			$sql .= " AND id_atividade = '".$obj->getId_atividade()."'";
		} 
		if ($obj->getAtividade()) { 
			$sql .= " AND atividade = '".$obj->getAtividade()."'";
		} 
		if ($obj->getServico()) { 
			$sql .= " AND upper(servico)  like ('%".strtoupper($obj->getServico())."%')";
		} 
		if ($obj->getDescricao()) { 
			$sql .= " AND upper(descricao)  like ('%".strtoupper($obj->getDescricao())."%')";
		} 
		if ($obj->getAliquota()) { 
			$sql .= " AND aliquota = '".$obj->getAliquota()."'";
		} 
		if ($obj->getDtinicio()) { 
			$sql .= " AND dtinicio = '".$obj->getDtinicio()."'";
		} 
		if ($obj->getDtfinal()) { 
			$sql .= " AND dtfinal = '".$obj->getDtfinal()."'";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setId(mysql_result($rs, 0, 'id')); 
			 $obj->setCodemp(mysql_result($rs, 0, 'codemp')); 
			 $obj->setId_atividade(mysql_result($rs, 0, 'id_atividade')); 
			 $obj->setAtividade(mysql_result($rs, 0, 'atividade')); 
			 $obj->setServico(mysql_result($rs, 0, 'servico')); 
			 $obj->setDescricao(mysql_result($rs, 0, 'descricao')); 
			 $obj->setAliquota(mysql_result($rs, 0, 'aliquota')); 
			 $obj->setDtinicio(mysql_result($rs, 0, 'dtinicio')); 
			 $obj->setDtfinal(mysql_result($rs, 0, 'dtfinal')); 
		} 
		 return $obj; 
	} 

	  function countAll($obj){
		 $sql = 'SELECT count(*) as existe FROM atividade_empresa WHERE 1=1 ';  


		if ($obj->getId()) { 
			$sql .= " AND id = '".$obj->getId()."'";
		} 
		if ($obj->getCodemp()) { 
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		} 
		if ($obj->getId_atividade()) { 
			$sql .= " AND id_atividade = '".$obj->getId_atividade()."'";
		} 
		if ($obj->getAtividade()) { 
			$sql .= " AND atividade = '".$obj->getAtividade()."'";
		} 
		if ($obj->getServico()) { 
			$sql .= " AND upper(servico)  like ('%".strtoupper($obj->getServico())."%')";
		} 
		if ($obj->getDescricao()) { 
			$sql .= " AND upper(descricao)  like ('%".strtoupper($obj->getDescricao())."%')";
		} 
		if ($obj->getAliquota()) { 
			$sql .= " AND aliquota = '".$obj->getAliquota()."'";
		} 
		if ($obj->getDtinicio()) { 
			$sql .= " AND dtinicio = '".$obj->getDtinicio()."'";
		} 
		if ($obj->getDtfinal()) { 
			$sql .= " AND dtfinal = '".$obj->getDtfinal()."'";
		} 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function verifica_existe($obj){
		 $sql = 'SELECT count(*) as existe FROM atividade_empresa WHERE 1=1 ';  


		 if ($obj->getId()) { 
			 $sql .= 	 "AND id = '".$obj->getId()."'";
 		 } 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function selectAll($obj){
		 $sql = 'SELECT * FROM atividade_empresa WHERE 1=1 '; 


		if ($obj->getId()) { 
			 $sql .= " AND id = '".$obj->getId()."'";
 				} 
		if ($obj->getCodemp()) { 
			 $sql .= " AND codemp = '".$obj->getCodemp()."'";
 				} 
		if ($obj->getId_atividade()) { 
			 $sql .= " AND id_atividade = '".$obj->getId_atividade()."'";
 				} 
		if ($obj->getAtividade()) { 
			 $sql .= " AND atividade = '".$obj->getAtividade()."'";
 				} 
		if ($obj->getServico()) { 
			 $sql .= " AND upper(servico)  like ('%".strtoupper($obj->getServico())."%')";
 				} 
		if ($obj->getDescricao()) { 
			 $sql .= " AND upper(descricao)  like ('%".strtoupper($obj->getDescricao())."%')";
 				} 
		if ($obj->getAliquota()) { 
			 $sql .= " AND aliquota = '".$obj->getAliquota()."'";
 				} 
		if ($obj->getDtinicio()) { 
			 $sql .= " AND dtinicio = '".$obj->getDtinicio()."'";
 				} 
		if ($obj->getDtfinal()) { 
			 $sql .= " AND dtfinal = '".$obj->getDtfinal()."'";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Atividade_empresa(); 
			 $obj->setId(mysql_result($rs, $i, 'id')); 
			 $obj->setCodemp(mysql_result($rs, $i, 'codemp')); 
			 $obj->setId_atividade(mysql_result($rs, $i, 'id_atividade')); 
			 $obj->setAtividade(mysql_result($rs, $i, 'atividade')); 
			 $obj->setServico(mysql_result($rs, $i, 'servico')); 
			 $obj->setDescricao(mysql_result($rs, $i, 'descricao')); 
			 $obj->setAliquota(mysql_result($rs, $i, 'aliquota')); 
			 $obj->setDtinicio(mysql_result($rs, $i, 'dtinicio')); 
			 $obj->setDtfinal(mysql_result($rs, $i, 'dtfinal')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
} 
