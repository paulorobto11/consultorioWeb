<?php 
 /** Classe responsavel pelas transacoes da Tabela: Arqcxa. */ 
class ArqcxaDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO arqcxa ('; 
		 $sql .= 'codemp,';
		 $sql .= 'data_caixa,';
		 $sql .= 'codusu,';
		 $sql .= 'vlr_cxa_inicial,';
		 $sql .= 'vlr_cxa_venda,';
		 $sql .= 'vlr_cxa_descto,';
		 $sql .= 'vlr_cxa_sinal,';
		 $sql .= 'vlr_cxa_fechamento,';
		 $sql .= 'situacao';
		 $sql .= ') VALUES ('; 
		 $sql .= ($obj->getCodemp()?$obj->getCodemp():0).',';
		 $sql .= '\''.$obj->getData_caixa().'\',';
		 $sql .= ($obj->getCodusu()?$obj->getCodusu():0).',';
		 $sql .= ($obj->getVlr_cxa_inicial()?$obj->getVlr_cxa_inicial():0).',';
		 $sql .= ($obj->getVlr_cxa_venda()?$obj->getVlr_cxa_venda():0).',';
		 $sql .= ($obj->getVlr_cxa_descto()?$obj->getVlr_cxa_descto():0).',';
		 $sql .= ($obj->getVlr_cxa_sinal()?$obj->getVlr_cxa_sinal():0).',';
		 $sql .= ($obj->getVlr_cxa_fechamento()?$obj->getVlr_cxa_fechamento():0).',';
		 $sql .= ($obj->getSituacao()?$obj->getSituacao():0);
		 $sql .= ')'; 
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function update($obj){
		 $sql = 'UPDATE arqcxa SET '; 
		 $sql .= 'codemp = '.($obj->getCodemp()?$obj->getCodemp():0).',';
		 $sql .= 'data_caixa = '.'\''.$obj->getData_caixa().'\' ,';
		 $sql .= 'codusu = '.($obj->getCodusu()?$obj->getCodusu():0).',';
		 $sql .= 'vlr_cxa_inicial = '.($obj->getVlr_cxa_inicial()?$obj->getVlr_cxa_inicial():0).',';
		 $sql .= 'vlr_cxa_venda = '.($obj->getVlr_cxa_venda()?$obj->getVlr_cxa_venda():0).',';
		 $sql .= 'vlr_cxa_descto = '.($obj->getVlr_cxa_descto()?$obj->getVlr_cxa_descto():0).',';
		 $sql .= 'vlr_cxa_sinal = '.($obj->getVlr_cxa_sinal()?$obj->getVlr_cxa_sinal():0).',';
		 $sql .= 'vlr_cxa_fechamento = '.($obj->getVlr_cxa_fechamento()?$obj->getVlr_cxa_fechamento():0).',';
		 $sql .= 'situacao = '.($obj->getSituacao()?$obj->getSituacao():0);
		 $sql .= ' WHERE codemp = '.$obj->getCodemp();
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM arqcxa WHERE codemp = '.$obj->getCodemp();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM arqcxa WHERE 1=1 '; 
		if ($obj->getCodemp()) { 
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		} 
		if ($obj->getData_caixa()) { 
			$sql .= " AND data_caixa = '".$obj->getData_caixa()."'";
		} 
		if ($obj->getCodusu()) { 
			$sql .= " AND codusu = '".$obj->getCodusu()."'";
		} 
		if ($obj->getVlr_cxa_inicial()) { 
			$sql .= " AND vlr_cxa_inicial = '".$obj->getVlr_cxa_inicial()."'";
		} 
		if ($obj->getVlr_cxa_venda()) { 
			$sql .= " AND vlr_cxa_venda = '".$obj->getVlr_cxa_venda()."'";
		} 
		if ($obj->getVlr_cxa_descto()) { 
			$sql .= " AND vlr_cxa_descto = '".$obj->getVlr_cxa_descto()."'";
		} 
		if ($obj->getVlr_cxa_sinal()) { 
			$sql .= " AND vlr_cxa_sinal = '".$obj->getVlr_cxa_sinal()."'";
		} 
		if ($obj->getVlr_cxa_fechamento()) { 
			$sql .= " AND vlr_cxa_fechamento = '".$obj->getVlr_cxa_fechamento()."'";
		} 
		if ($obj->getSituacao()) { 
			$sql .= " AND situacao = '".$obj->getSituacao()."'";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setCodemp(mysql_result($rs, 0, 'codemp')); 
			 $obj->setData_caixa(mysql_result($rs, 0, 'data_caixa')); 
			 $obj->setCodusu(mysql_result($rs, 0, 'codusu')); 
			 $obj->setVlr_cxa_inicial(mysql_result($rs, 0, 'vlr_cxa_inicial')); 
			 $obj->setVlr_cxa_venda(mysql_result($rs, 0, 'vlr_cxa_venda')); 
			 $obj->setVlr_cxa_descto(mysql_result($rs, 0, 'vlr_cxa_descto')); 
			 $obj->setVlr_cxa_sinal(mysql_result($rs, 0, 'vlr_cxa_sinal')); 
			 $obj->setVlr_cxa_fechamento(mysql_result($rs, 0, 'vlr_cxa_fechamento')); 
			 $obj->setSituacao(mysql_result($rs, 0, 'situacao')); 
		} 
		 return $obj; 
	} 

	  function countAll($obj){
		 $sql = 'SELECT count(*) as existe FROM arqcxa WHERE 1=1 ';  


		if ($obj->getCodemp()) { 
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		} 
		if ($obj->getData_caixa()) { 
			$sql .= " AND data_caixa = '".$obj->getData_caixa()."'";
		} 
		if ($obj->getCodusu()) { 
			$sql .= " AND codusu = '".$obj->getCodusu()."'";
		} 
		if ($obj->getVlr_cxa_inicial()) { 
			$sql .= " AND vlr_cxa_inicial = '".$obj->getVlr_cxa_inicial()."'";
		} 
		if ($obj->getVlr_cxa_venda()) { 
			$sql .= " AND vlr_cxa_venda = '".$obj->getVlr_cxa_venda()."'";
		} 
		if ($obj->getVlr_cxa_descto()) { 
			$sql .= " AND vlr_cxa_descto = '".$obj->getVlr_cxa_descto()."'";
		} 
		if ($obj->getVlr_cxa_sinal()) { 
			$sql .= " AND vlr_cxa_sinal = '".$obj->getVlr_cxa_sinal()."'";
		} 
		if ($obj->getVlr_cxa_fechamento()) { 
			$sql .= " AND vlr_cxa_fechamento = '".$obj->getVlr_cxa_fechamento()."'";
		} 
		if ($obj->getSituacao()) { 
			$sql .= " AND situacao = '".$obj->getSituacao()."'";
		} 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function verifica_existe($obj){
		 $sql = 'SELECT count(*) as existe FROM arqcxa WHERE 1=1 ';  


		 if ($obj->getCodemp()) { 
			 $sql .= 	 "AND codemp = '".$obj->getCodemp()."'";
 		 } 
		 if ($obj->getData_caixa()) { 
			 $sql .= 	 "AND data_caixa = '".$obj->getData_caixa()."'";
 		 } 
		 if ($obj->getCodusu()) { 
			 $sql .= 	 "AND codusu = '".$obj->getCodusu()."'";
 		 } 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 
		
	function verifica_existe_aberto($obj){
		$sql = 'SELECT count(*) as existe FROM arqcxa WHERE 1=1 AND situacao = 0 ';

		if ($obj->getCodemp()) {
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		}
		if ($obj->getData_caixa()) {
			$sql .= " AND data_caixa = '".$obj->getData_caixa()."'";
		}

		$query = mysql_query($sql);
		$dados = mysql_fetch_assoc($query);
		$existe = $dados['existe'];
		return $existe;
	}

	function ver_cxadia($obj){
		$sql = 'SELECT count(*) as existe FROM arqcxa WHERE 1=1 ';

		if ($obj->getCodemp()) {
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		}
		if ($obj->getData_caixa()) {
			$sql .= " AND data_caixa = '".$obj->getData_caixa()."'";
		}
		
		$query = mysql_query($sql);
		$dados = mysql_fetch_assoc($query);
		$existe = $dados['existe'];
		return $existe;
	}



	function lista_cxadia($obj){
		$sql = 'SELECT * FROM arqcxa WHERE 1=1 ';

		if ($obj->getCodemp()) {
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		}
		if ($obj->getData_caixa()) {
			$sql .= " AND data_caixa = '".$obj->getData_caixa()."'";
		}


		$rs = mysql_query($sql);
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Arqcxa(); 
			 $obj->setCodemp(mysql_result($rs, $i, 'codemp')); 
			 $obj->setData_caixa(mysql_result($rs, $i, 'data_caixa')); 
			 $obj->setCodusu(mysql_result($rs, $i, 'codusu')); 
			 $obj->setVlr_cxa_inicial(mysql_result($rs, $i, 'vlr_cxa_inicial')); 
			 $obj->setVlr_cxa_venda(mysql_result($rs, $i, 'vlr_cxa_venda')); 
			 $obj->setVlr_cxa_descto(mysql_result($rs, $i, 'vlr_cxa_descto')); 
			 $obj->setVlr_cxa_sinal(mysql_result($rs, $i, 'vlr_cxa_sinal')); 
			 $obj->setVlr_cxa_fechamento(mysql_result($rs, $i, 'vlr_cxa_fechamento')); 
			 $obj->setSituacao(mysql_result($rs, $i, 'situacao')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
		


 	  function selectAll($obj){
		 $sql = 'SELECT * FROM arqcxa WHERE 1=1 '; 


		if ($obj->getCodemp()) { 
			 $sql .= " AND codemp = '".$obj->getCodemp()."'";
 				} 
		if ($obj->getData_caixa()) { 
			 $sql .= " AND data_caixa = '".$obj->getData_caixa()."'";
 				} 
		if ($obj->getCodusu()) { 
			 $sql .= " AND codusu = '".$obj->getCodusu()."'";
 				} 
		if ($obj->getVlr_cxa_inicial()) { 
			 $sql .= " AND vlr_cxa_inicial = '".$obj->getVlr_cxa_inicial()."'";
 				} 
		if ($obj->getVlr_cxa_venda()) { 
			 $sql .= " AND vlr_cxa_venda = '".$obj->getVlr_cxa_venda()."'";
 				} 
		if ($obj->getVlr_cxa_descto()) { 
			 $sql .= " AND vlr_cxa_descto = '".$obj->getVlr_cxa_descto()."'";
 				} 
		if ($obj->getVlr_cxa_sinal()) { 
			 $sql .= " AND vlr_cxa_sinal = '".$obj->getVlr_cxa_sinal()."'";
 				} 
		if ($obj->getVlr_cxa_fechamento()) { 
			 $sql .= " AND vlr_cxa_fechamento = '".$obj->getVlr_cxa_fechamento()."'";
 				} 
		if ($obj->getSituacao()) { 
			 $sql .= " AND situacao = '".$obj->getSituacao()."'";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Arqcxa(); 
			 $obj->setCodemp(mysql_result($rs, $i, 'codemp')); 
			 $obj->setData_caixa(mysql_result($rs, $i, 'data_caixa')); 
			 $obj->setCodusu(mysql_result($rs, $i, 'codusu')); 
			 $obj->setVlr_cxa_inicial(mysql_result($rs, $i, 'vlr_cxa_inicial')); 
			 $obj->setVlr_cxa_venda(mysql_result($rs, $i, 'vlr_cxa_venda')); 
			 $obj->setVlr_cxa_descto(mysql_result($rs, $i, 'vlr_cxa_descto')); 
			 $obj->setVlr_cxa_sinal(mysql_result($rs, $i, 'vlr_cxa_sinal')); 
			 $obj->setVlr_cxa_fechamento(mysql_result($rs, $i, 'vlr_cxa_fechamento')); 
			 $obj->setSituacao(mysql_result($rs, $i, 'situacao')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
} 
