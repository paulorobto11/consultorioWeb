<?php 
 /** Classe responsavel pelas transacoes da Tabela: Nfe_erros. */ 
class Nfe_errosDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO nfe_erros ('; 
		 $sql .= 'seq,';
		 $sql .= 'data_envio,';
		 $sql .= 'mes_ano,';
		 $sql .= 'seq_nfe,';
		 $sql .= 'ident_chave,';
		 $sql .= 'seq_erro,';
		 $sql .= 'tag_erro,';
		 $sql .= 'campo_erro,';
		 $sql .= 'descr_erro';
		 $sql .= ') VALUES ('; 
		 $sql .= ($obj->getSeq()?$obj->getSeq():0).',';
		 $sql .= '\''.$obj->getData_envio().'\',';
		 $sql .= ($obj->getMes_ano()?$obj->getMes_ano():0).',';
		 $sql .= ($obj->getSeq_nfe()?$obj->getSeq_nfe():0).',';
		 $sql .= '\''.$obj->getIdent_chave().'\',';
		 $sql .= ($obj->getSeq_erro()?$obj->getSeq_erro():0).',';
		 $sql .= '\''.$obj->getTag_erro().'\',';
		 $sql .= '\''.$obj->getCampo_erro().'\',';
		 $sql .= '\''.$obj->getDescr_erro().'\'';
		 $sql .= ')'; 
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function update($obj){
		 $sql = 'UPDATE nfe_erros SET '; 
		 $sql .= 'seq = '.($obj->getSeq()?$obj->getSeq():0).',';
		 $sql .= 'data_envio = '.'\''.$obj->getData_envio().'\' ,';
		 $sql .= 'mes_ano = '.($obj->getMes_ano()?$obj->getMes_ano():0).',';
		 $sql .= 'seq_nfe = '.($obj->getSeq_nfe()?$obj->getSeq_nfe():0).',';
		 $sql .= 'ident_chave = '.'\''.$obj->getIdent_chave().'\' ,';
		 $sql .= 'seq_erro = '.($obj->getSeq_erro()?$obj->getSeq_erro():0).',';
		 $sql .= 'tag_erro = '.'\''.$obj->getTag_erro().'\' ,';
		 $sql .= 'campo_erro = '.'\''.$obj->getCampo_erro().'\' ,';
		 $sql .= 'descr_erro = '.'\''.$obj->getDescr_erro().'\' ';
		 $sql .= ' WHERE seq = '.$obj->getSeq();
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM nfe_erros WHERE seq = '.$obj->getSeq();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM nfe_erros WHERE 1=1 '; 
		if ($obj->getSeq()) { 
			$sql .= " AND seq = '".$obj->getSeq()."'";
		} 
		if ($obj->getData_envio()) { 
			$sql .= " AND data_envio = '".$obj->getData_envio()."'";
		} 
		if ($obj->getMes_ano()) { 
			$sql .= " AND mes_ano = '".$obj->getMes_ano()."'";
		} 
		if ($obj->getSeq_nfe()) { 
			$sql .= " AND seq_nfe = '".$obj->getSeq_nfe()."'";
		} 
		if ($obj->getIdent_chave()) { 
			$sql .= " AND ident_chave = '".$obj->getIdent_chave()."'";
		} 
		if ($obj->getSeq_erro()) { 
			$sql .= " AND seq_erro = '".$obj->getSeq_erro()."'";
		} 
		if ($obj->getTag_erro()) { 
			$sql .= " AND upper(tag_erro)  like ('%".strtoupper($obj->getTag_erro())."%')";
		} 
		if ($obj->getCampo_erro()) { 
			$sql .= " AND upper(campo_erro)  like ('%".strtoupper($obj->getCampo_erro())."%')";
		} 
		if ($obj->getDescr_erro()) { 
			$sql .= " AND upper(descr_erro)  like ('%".strtoupper($obj->getDescr_erro())."%')";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setSeq(mysql_result($rs, 0, 'seq')); 
			 $obj->setData_envio(mysql_result($rs, 0, 'data_envio')); 
			 $obj->setMes_ano(mysql_result($rs, 0, 'mes_ano')); 
			 $obj->setSeq_nfe(mysql_result($rs, 0, 'seq_nfe')); 
			 $obj->setIdent_chave(mysql_result($rs, 0, 'ident_chave')); 
			 $obj->setSeq_erro(mysql_result($rs, 0, 'seq_erro')); 
			 $obj->setTag_erro(mysql_result($rs, 0, 'tag_erro')); 
			 $obj->setCampo_erro(mysql_result($rs, 0, 'campo_erro')); 
			 $obj->setDescr_erro(mysql_result($rs, 0, 'descr_erro')); 
		} 
		 return $obj; 
	} 

	  function countAll(){
		 $sql = 'SELECT count(*) as existe FROM nfe_erros';  
		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 

	  function count_erros($obj){
		 $sql = 'SELECT count(*) as existe FROM nfe_erros where 1=1 ';  
		 
		if ($obj->getIdent_chave()) { 
			$sql .= " AND ident_chave = '".$obj->getIdent_chave()."'";
		} 
		if ($obj->getSeq_nfe()) { 
			$sql .= " AND seq_nfe = '".$obj->getSeq_nfe()."'";
		} 
		
		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 
		

 	  function verifica_existe($obj){
		 $sql = 'SELECT count(*) as existe FROM nfe_erros WHERE 1=1 ';  




		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function selectAll($obj){
		 $sql = 'SELECT * FROM nfe_erros WHERE 1=1 '; 


		if ($obj->getSeq()) { 
			 $sql .= " AND seq = '".$obj->getSeq()."'";
 				} 
		if ($obj->getData_envio()) { 
			 $sql .= " AND data_envio = '".$obj->getData_envio()."'";
 				} 
		if ($obj->getMes_ano()) { 
			 $sql .= " AND mes_ano = '".$obj->getMes_ano()."'";
 				} 
		if ($obj->getSeq_nfe()) { 
			 $sql .= " AND seq_nfe = '".$obj->getSeq_nfe()."'";
 				} 
		if ($obj->getIdent_chave()) { 
			 $sql .= " AND ident_chave = '".$obj->getIdent_chave()."'";
 				} 
		if ($obj->getSeq_erro()) { 
			 $sql .= " AND seq_erro = '".$obj->getSeq_erro()."'";
 				} 
		if ($obj->getTag_erro()) { 
			 $sql .= " AND upper(tag_erro)  like ('%".strtoupper($obj->getTag_erro())."%')";
 				} 
		if ($obj->getCampo_erro()) { 
			 $sql .= " AND upper(campo_erro)  like ('%".strtoupper($obj->getCampo_erro())."%')";
 				} 
		if ($obj->getDescr_erro()) { 
			 $sql .= " AND upper(descr_erro)  like ('%".strtoupper($obj->getDescr_erro())."%')";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Nfe_erros(); 
			 $obj->setSeq(mysql_result($rs, $i, 'seq')); 
			 $obj->setData_envio(mysql_result($rs, $i, 'data_envio')); 
			 $obj->setMes_ano(mysql_result($rs, $i, 'mes_ano')); 
			 $obj->setSeq_nfe(mysql_result($rs, $i, 'seq_nfe')); 
			 $obj->setIdent_chave(mysql_result($rs, $i, 'ident_chave')); 
			 $obj->setSeq_erro(mysql_result($rs, $i, 'seq_erro')); 
			 $obj->setTag_erro(mysql_result($rs, $i, 'tag_erro')); 
			 $obj->setCampo_erro(mysql_result($rs, $i, 'campo_erro')); 
			 $obj->setDescr_erro(mysql_result($rs, $i, 'descr_erro')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
} 
