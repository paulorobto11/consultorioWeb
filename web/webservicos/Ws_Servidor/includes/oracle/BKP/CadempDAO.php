<?php 
/** Classe responsavel pelas transacoes da Tabela: Cademp. */
class CadempDAO {

	function insert($obj){
		$sql = 'INSERT INTO cademp (';
		$sql .= 'nome_cliente,';
		$sql .= 'empr_tipo,';
		$sql .= 'empr_cnpj,';
		$sql .= 'empr_insest,';
		$sql .= 'data_inicio,';
		$sql .= 'id_leitura,';
		$sql .= 'id_confirma,';
		$sql .= 'data_confirma,';
		$sql .= 'data_pagamento,';
		$sql .= 'data_limite,';
		$sql .= 'date_final,';
		$sql .= 'observacao';
		$sql .= ') VALUES (';
		$sql .= '\''.$obj->getNome_cliente().'\',';
		$sql .= $obj->getEmpr_tipo().',';
		$sql .= '\''.$obj->getEmpr_cnpj().'\',';
		$sql .= '\''.$obj->getEmpr_insest().'\',';
		$sql .= '\''.$obj->getData_inicio().'\',';
		$sql .= $obj->getId_leitura().',';
		$sql .= $obj->getId_confirma().',';
		$sql .= '\''.$obj->getData_confirma().'\',';
		$sql .= '\''.$obj->getData_pagamento().'\',';
		$sql .= '\''.$obj->getData_limite().'\',';
		$sql .= '\''.$obj->getDate_final().'\',';
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
		$sql = 'UPDATE cademp SET ';
		$sql .= 'nome_cliente = '.'\''.$obj->getNome_cliente().'\' ,';
		$sql .= 'empr_tipo = '.$obj->getEmpr_tipo().',';
		$sql .= 'empr_cnpj = '.'\''.$obj->getEmpr_cnpj().'\' ,';
		$sql .= 'empr_insest = '.'\''.$obj->getEmpr_insest().'\' ,';
		$sql .= 'data_inicio = '.'\''.$obj->getData_inicio().'\' ,';
		$sql .= 'id_leitura = '.$obj->getId_leitura().',';
		$sql .= 'id_confirma = '.$obj->getId_confirma().',';
		$sql .= 'data_confirma = '.'\''.$obj->getData_confirma().'\' ,';
		$sql .= 'data_pagamento = '.'\''.$obj->getData_pagamento().'\' ,';
		$sql .= 'data_limite = '.'\''.$obj->getData_limite().'\' ,';
		$sql .= 'date_final = '.'\''.$obj->getDate_final().'\' ,';
		$sql .= 'observacao = '.'\''.$obj->getObservacao().'\' ';
		$sql .= ' WHERE codemp = '.$obj->getCodemp();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	}

	function delete($obj){
		$sql = 'DELETE FROM cademp WHERE codemp = '.$obj->getCodemp();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	}

	function select($obj){
		$sql = 'SELECT * FROM cademp WHERE 1=1 ';
		if ($obj->getCodemp()) {
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		}
		if ($obj->getNome_cliente()) {
			$sql .= " AND upper(nome_cliente)  like ('%".strtoupper($obj->getNome_cliente())."%')";
		}
		if ($obj->getEmpr_tipo()) {
			$sql .= " AND empr_tipo = '".$obj->getEmpr_tipo()."'";
		}
		if ($obj->getEmpr_cnpj()) {
			$sql .= " AND empr_cnpj = '".$obj->getEmpr_cnpj()."'";
		}
		if ($obj->getEmpr_insest()) {
			$sql .= " AND upper(empr_insest)  like ('%".strtoupper($obj->getEmpr_insest())."%')";
		}
		if ($obj->getData_inicio()) {
			$sql .= " AND data_inicio = '".$obj->getData_inicio()."'";
		}
		if ($obj->getId_leitura()) {
			$sql .= " AND id_leitura = '".$obj->getId_leitura()."'";
		}
		if ($obj->getId_confirma()) {
			$sql .= " AND id_confirma = '".$obj->getId_confirma()."'";
		}
		if ($obj->getData_confirma()) {
			$sql .= " AND data_confirma = '".$obj->getData_confirma()."'";
		}
		if ($obj->getData_pagamento()) {
			$sql .= " AND data_pagamento = '".$obj->getData_pagamento()."'";
		}
		if ($obj->getData_limite()) {
			$sql .= " AND data_limite = '".$obj->getData_limite()."'";
		}
		if ($obj->getDate_final()) {
			$sql .= " AND date_final = '".$obj->getDate_final()."'";
		}
		if ($obj->getObservacao()) {
			$sql .= " AND upper(observacao)  like ('%".strtoupper($obj->getObservacao())."%')";
		}
		$rs = mysql_query($sql);
		if(mysql_num_rows($rs) > 0 ){
			$obj->setCodemp(mysql_result($rs, 0, 'codemp'));
			$obj->setNome_cliente(mysql_result($rs, 0, 'nome_cliente'));
			$obj->setEmpr_tipo(mysql_result($rs, 0, 'empr_tipo'));
			$obj->setEmpr_cnpj(mysql_result($rs, 0, 'empr_cnpj'));
			$obj->setEmpr_insest(mysql_result($rs, 0, 'empr_insest'));
			$obj->setData_inicio(mysql_result($rs, 0, 'data_inicio'));
			$obj->setId_leitura(mysql_result($rs, 0, 'id_leitura'));
			$obj->setId_confirma(mysql_result($rs, 0, 'id_confirma'));
			$obj->setData_confirma(mysql_result($rs, 0, 'data_confirma'));
			$obj->setData_pagamento(mysql_result($rs, 0, 'data_pagamento'));
			$obj->setData_limite(mysql_result($rs, 0, 'data_limite'));
			$obj->setDate_final(mysql_result($rs, 0, 'date_final'));
			$obj->setObservacao(mysql_result($rs, 0, 'observacao'));
		}
		return $obj;
	}

	function countAll($obj){
		$sql = 'SELECT count(*) as existe FROM cademp WHERE 1=1 ';


		if ($obj->getCodemp()) {
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		}
		if ($obj->getNome_cliente()) {
			$sql .= " AND upper(nome_cliente)  like ('%".strtoupper($obj->getNome_cliente())."%')";
		}
		if ($obj->getEmpr_tipo()) {
			$sql .= " AND empr_tipo = '".$obj->getEmpr_tipo()."'";
		}
		if ($obj->getEmpr_cnpj()) {
			$sql .= " AND empr_cnpj = '".$obj->getEmpr_cnpj()."'";
		}
		if ($obj->getEmpr_insest()) {
			$sql .= " AND upper(empr_insest)  like ('%".strtoupper($obj->getEmpr_insest())."%')";
		}
		if ($obj->getData_inicio()) {
			$sql .= " AND data_inicio = '".$obj->getData_inicio()."'";
		}
		if ($obj->getId_leitura()) {
			$sql .= " AND id_leitura = '".$obj->getId_leitura()."'";
		}
		if ($obj->getId_confirma()) {
			$sql .= " AND id_confirma = '".$obj->getId_confirma()."'";
		}
		if ($obj->getData_confirma()) {
			$sql .= " AND data_confirma = '".$obj->getData_confirma()."'";
		}
		if ($obj->getData_pagamento()) {
			$sql .= " AND data_pagamento = '".$obj->getData_pagamento()."'";
		}
		if ($obj->getData_limite()) {
			$sql .= " AND data_limite = '".$obj->getData_limite()."'";
		}
		if ($obj->getDate_final()) {
			$sql .= " AND date_final = '".$obj->getDate_final()."'";
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
		$sql = "SELECT count(*) as existe FROM cademp WHERE 1=1 AND codemp = '".$obj->getCodemp()."'";
		$query = mysql_query($sql);
		$dados = mysql_fetch_assoc($query);
		$existe = $dados['existe'];
		return $existe;
	}


	function selectAll($obj){
		$sql = 'SELECT * FROM cademp WHERE 1=1 ';


		if ($obj->getCodemp()) {
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		}
		if ($obj->getNome_cliente()) {
			$sql .= " AND upper(nome_cliente)  like ('%".strtoupper($obj->getNome_cliente())."%')";
		}
		if ($obj->getEmpr_tipo()) {
			$sql .= " AND empr_tipo = '".$obj->getEmpr_tipo()."'";
		}
		if ($obj->getEmpr_cnpj()) {
			$sql .= " AND empr_cnpj = '".$obj->getEmpr_cnpj()."'";
		}
		if ($obj->getEmpr_insest()) {
			$sql .= " AND upper(empr_insest)  like ('%".strtoupper($obj->getEmpr_insest())."%')";
		}
		if ($obj->getData_inicio()) {
			$sql .= " AND data_inicio = '".$obj->getData_inicio()."'";
		}
		if ($obj->getId_leitura()) {
			$sql .= " AND id_leitura = '".$obj->getId_leitura()."'";
		}
		if ($obj->getId_confirma()) {
			$sql .= " AND id_confirma = '".$obj->getId_confirma()."'";
		}
		if ($obj->getData_confirma()) {
			$sql .= " AND data_confirma = '".$obj->getData_confirma()."'";
		}
		if ($obj->getData_pagamento()) {
			$sql .= " AND data_pagamento = '".$obj->getData_pagamento()."'";
		}
		if ($obj->getData_limite()) {
			$sql .= " AND data_limite = '".$obj->getData_limite()."'";
		}
		if ($obj->getDate_final()) {
			$sql .= " AND date_final = '".$obj->getDate_final()."'";
		}
		if ($obj->getObservacao()) {
			$sql .= " AND upper(observacao)  like ('%".strtoupper($obj->getObservacao())."%')";
		}


		$rs = mysql_query($sql);
		for($i = 0; $i < mysql_num_rows($rs); $i++){
			$obj = new Cademp();
			$obj->setCodemp(mysql_result($rs, $i, 'codemp'));
			$obj->setNome_cliente(mysql_result($rs, $i, 'nome_cliente'));
			$obj->setEmpr_tipo(mysql_result($rs, $i, 'empr_tipo'));
			$obj->setEmpr_cnpj(mysql_result($rs, $i, 'empr_cnpj'));
			$obj->setEmpr_insest(mysql_result($rs, $i, 'empr_insest'));
			$obj->setData_inicio(mysql_result($rs, $i, 'data_inicio'));
			$obj->setId_leitura(mysql_result($rs, $i, 'id_leitura'));
			$obj->setId_confirma(mysql_result($rs, $i, 'id_confirma'));
			$obj->setData_confirma(mysql_result($rs, $i, 'data_confirma'));
			$obj->setData_pagamento(mysql_result($rs, $i, 'data_pagamento'));
			$obj->setData_limite(mysql_result($rs, $i, 'data_limite'));
			$obj->setDate_final(mysql_result($rs, $i, 'date_final'));
			$obj->setObservacao(mysql_result($rs, $i, 'observacao'));
			$objs[$i] = $obj;
		}
		if(!is_array($objs)){ throw new Exception("");}
		return $objs;
	}
}
