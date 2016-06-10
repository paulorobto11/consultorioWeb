<?php 
/** Classe responsavel pelas transacoes da Tabela: Agenda. */
class AgendaDAO {

	function insert($obj){
		$sql = 'INSERT INTO agenda (';
		$sql .= 'codemp,';
		$sql .= 'mes_agenda,';
		$sql .= 'ano_agenda,';
		$sql .= 'data_inicio,';
		$sql .= 'data_final,';
		$sql .= 'titulo,';
		$sql .= 'tipo,';
		$sql .= 'compromisso,';
		$sql .= 'hora_inicio,';
		$sql .= 'hora_final,';
		$sql .= 'email_envio,';
		$sql .= 'sms_envio,';
		$sql .= 'hora_envio,';
		$sql .= 'status';
		$sql .= ') VALUES (';
		$sql .= $obj->getCodemp().',';
		$sql .= $obj->getMes_agenda().',';
		$sql .= $obj->getAno_agenda().',';
		$sql .= '\''.$obj->getData_inicio().'\',';
		$sql .= '\''.$obj->getData_final().'\',';
		$sql .= '\''.$obj->getTitulo().'\',';
		$sql .= $obj->getTipo().',';
		$sql .= '\''.$obj->getCompromisso().'\',';
		$sql .= $obj->getHora_inicio().',';
		$sql .= $obj->getHora_final().',';
		$sql .= '\''.$obj->getEmail_envio().'\',';
		$sql .= '\''.$obj->getSms_envio().'\',';
		$sql .= $obj->getHora_envio().',';
		$sql .= $obj->getStatus();
		$sql .= ')';
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	}

	function update($obj){
		$sql = 'UPDATE agenda SET ';
		$sql .= 'codemp = '.$obj->getCodemp().',';
		$sql .= 'mes_agenda = '.$obj->getMes_agenda().',';
		$sql .= 'ano_agenda = '.$obj->getAno_agenda().',';
		$sql .= 'data_inicio = '.'\''.$obj->getData_inicio().'\' ,';
		$sql .= 'data_final = '.'\''.$obj->getData_final().'\' ,';
		$sql .= 'titulo = '.'\''.$obj->getTitulo().'\' ,';
		$sql .= 'tipo = '.$obj->getTipo().',';
		$sql .= 'compromisso = '.'\''.$obj->getCompromisso().'\' ,';
		$sql .= 'hora_inicio = '.$obj->getHora_inicio().',';
		$sql .= 'hora_final = '.$obj->getHora_final().',';
		$sql .= 'email_envio = '.'\''.$obj->getEmail_envio().'\' ,';
		$sql .= 'sms_envio = '.'\''.$obj->getSms_envio().'\' ,';
		$sql .= 'hora_envio = '.$obj->getHora_envio().',';
		$sql .= 'status = '.$obj->getStatus();
		$sql .= ' WHERE codemp = '.$obj->getCodemp();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	}

	function delete($obj){
		$sql = 'DELETE FROM agenda WHERE codemp = '.$obj->getCodemp();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	}

	function select($obj){
		$sql = 'SELECT * FROM agenda WHERE 1=1 ';
		if ($obj->getCodemp()) {
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		}
		if ($obj->getId_agenda()) {
			$sql .= " AND id_agenda = '".$obj->getId_agenda()."'";
		}
		if ($obj->getMes_agenda()) {
			$sql .= " AND mes_agenda = '".$obj->getMes_agenda()."'";
		}
		if ($obj->getAno_agenda()) {
			$sql .= " AND ano_agenda = '".$obj->getAno_agenda()."'";
		}
		if ($obj->getData_inicio()) {
			$sql .= " AND data_inicio = '".$obj->getData_inicio()."'";
		}
		if ($obj->getData_final()) {
			$sql .= " AND data_final = '".$obj->getData_final()."'";
		}
		if ($obj->getTitulo()) {
			$sql .= " AND upper(titulo)  like ('%".strtoupper($obj->getTitulo())."%')";
		}
		if ($obj->getTipo()) {
			$sql .= " AND tipo = '".$obj->getTipo()."'";
		}
		if ($obj->getCompromisso()) {
			$sql .= " AND upper(compromisso)  like ('%".strtoupper($obj->getCompromisso())."%')";
		}
		if ($obj->getHora_inicio()) {
			$sql .= " AND hora_inicio = '".$obj->getHora_inicio()."'";
		}
		if ($obj->getHora_final()) {
			$sql .= " AND hora_final = '".$obj->getHora_final()."'";
		}
		if ($obj->getEmail_envio()) {
			$sql .= " AND upper(email_envio)  like ('%".strtoupper($obj->getEmail_envio())."%')";
		}
		if ($obj->getSms_envio()) {
			$sql .= " AND upper(sms_envio)  like ('%".strtoupper($obj->getSms_envio())."%')";
		}
		if ($obj->getHora_envio()) {
			$sql .= " AND hora_envio = '".$obj->getHora_envio()."'";
		}
		if ($obj->getStatus()) {
			$sql .= " AND status = '".$obj->getStatus()."'";
		}
		$rs = mysql_query($sql);
		if(mysql_num_rows($rs) > 0 ){
			$obj->setCodemp(mysql_result($rs, 0, 'codemp'));
			$obj->setId_agenda(mysql_result($rs, 0, 'id_agenda'));
			$obj->setMes_agenda(mysql_result($rs, 0, 'mes_agenda'));
			$obj->setAno_agenda(mysql_result($rs, 0, 'ano_agenda'));
			$obj->setData_inicio(mysql_result($rs, 0, 'data_inicio'));
			$obj->setData_final(mysql_result($rs, 0, 'data_final'));
			$obj->setTitulo(mysql_result($rs, 0, 'titulo'));
			$obj->setTipo(mysql_result($rs, 0, 'tipo'));
			$obj->setCompromisso(mysql_result($rs, 0, 'compromisso'));
			$obj->setHora_inicio(mysql_result($rs, 0, 'hora_inicio'));
			$obj->setHora_final(mysql_result($rs, 0, 'hora_final'));
			$obj->setEmail_envio(mysql_result($rs, 0, 'email_envio'));
			$obj->setSms_envio(mysql_result($rs, 0, 'sms_envio'));
			$obj->setHora_envio(mysql_result($rs, 0, 'hora_envio'));
			$obj->setStatus(mysql_result($rs, 0, 'status'));
		}
		return $obj;
	}

	function countAll($obj){
		$sql = 'SELECT count(*) as existe FROM agenda WHERE 1=1 ';


		if ($obj->getCodemp()) {
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		}
		if ($obj->getId_agenda()) {
			$sql .= " AND id_agenda = '".$obj->getId_agenda()."'";
		}
		if ($obj->getMes_agenda()) {
			$sql .= " AND mes_agenda = '".$obj->getMes_agenda()."'";
		}
		if ($obj->getAno_agenda()) {
			$sql .= " AND ano_agenda = '".$obj->getAno_agenda()."'";
		}
		if ($obj->getData_inicio()) {
			$sql .= " AND data_inicio = '".$obj->getData_inicio()."'";
		}
		if ($obj->getData_final()) {
			$sql .= " AND data_final = '".$obj->getData_final()."'";
		}
		if ($obj->getTitulo()) {
			$sql .= " AND upper(titulo)  like ('%".strtoupper($obj->getTitulo())."%')";
		}
		if ($obj->getTipo()) {
			$sql .= " AND tipo = '".$obj->getTipo()."'";
		}
		if ($obj->getCompromisso()) {
			$sql .= " AND upper(compromisso)  like ('%".strtoupper($obj->getCompromisso())."%')";
		}
		if ($obj->getHora_inicio()) {
			$sql .= " AND hora_inicio = '".$obj->getHora_inicio()."'";
		}
		if ($obj->getHora_final()) {
			$sql .= " AND hora_final = '".$obj->getHora_final()."'";
		}
		if ($obj->getEmail_envio()) {
			$sql .= " AND upper(email_envio)  like ('%".strtoupper($obj->getEmail_envio())."%')";
		}
		if ($obj->getSms_envio()) {
			$sql .= " AND upper(sms_envio)  like ('%".strtoupper($obj->getSms_envio())."%')";
		}
		if ($obj->getHora_envio()) {
			$sql .= " AND hora_envio = '".$obj->getHora_envio()."'";
		}
		if ($obj->getStatus()) {
			$sql .= " AND status = '".$obj->getStatus()."'";
		}

		echo "<HR>SQL 0".$sql;

		$query = mysql_query($sql);
		$dados = mysql_fetch_assoc($query);
		$existe = $dados['existe'];
		return $existe;
	}


	function verifica_existe($obj){
		$sql = 'SELECT count(*) as existe FROM agenda WHERE 1=1 ';


		if ($obj->getId_agenda()) {
			$sql .= 	 "AND id_agenda = '".$obj->getId_agenda()."'";
		}


		$query = mysql_query($sql);
		$dados = mysql_fetch_assoc($query);
		$existe = $dados['existe'];
		return $existe;
	}


	function selectAll($obj, $pg){
		$sql = 'SELECT * FROM agenda WHERE 1=1 ';


		if ($obj->getCodemp()) {
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		}
		if ($obj->getId_agenda()) {
			$sql .= " AND id_agenda = '".$obj->getId_agenda()."'";
		}
		if ($obj->getMes_agenda()) {
			$sql .= " AND mes_agenda = '".$obj->getMes_agenda()."'";
		}
		if ($obj->getAno_agenda()) {
			$sql .= " AND ano_agenda = '".$obj->getAno_agenda()."'";
		}
		if ($obj->getData_inicio()) {
			$sql .= " AND data_inicio = '".$obj->getData_inicio()."'";
		}
		if ($obj->getData_final()) {
			$sql .= " AND data_final = '".$obj->getData_final()."'";
		}
		if ($obj->getTitulo()) {
			$sql .= " AND upper(titulo)  like ('%".strtoupper($obj->getTitulo())."%')";
		}
		if ($obj->getTipo()) {
			$sql .= " AND tipo = '".$obj->getTipo()."'";
		}
		if ($obj->getCompromisso()) {
			$sql .= " AND upper(compromisso)  like ('%".strtoupper($obj->getCompromisso())."%')";
		}
		if ($obj->getHora_inicio()) {
			$sql .= " AND hora_inicio = '".$obj->getHora_inicio()."'";
		}
		if ($obj->getHora_final()) {
			$sql .= " AND hora_final = '".$obj->getHora_final()."'";
		}
		if ($obj->getEmail_envio()) {
			$sql .= " AND upper(email_envio)  like ('%".strtoupper($obj->getEmail_envio())."%')";
		}
		if ($obj->getSms_envio()) {
			$sql .= " AND upper(sms_envio)  like ('%".strtoupper($obj->getSms_envio())."%')";
		}
		if ($obj->getHora_envio()) {
			$sql .= " AND hora_envio = '".$obj->getHora_envio()."'";
		}
		if ($obj->getStatus()) {
			$sql .= " AND status = '".$obj->getStatus()."'";
		}

		$rs = mysql_query($sql);
		for($i = 0; $i < mysql_num_rows($rs); $i++){
			$obj = new Agenda();
			$obj->setCodemp(mysql_result($rs, $i, 'codemp'));
			$obj->setId_agenda(mysql_result($rs, $i, 'id_agenda'));
			$obj->setMes_agenda(mysql_result($rs, $i, 'mes_agenda'));
			$obj->setAno_agenda(mysql_result($rs, $i, 'ano_agenda'));
			$obj->setData_inicio(mysql_result($rs, $i, 'data_inicio'));
			$obj->setData_final(mysql_result($rs, $i, 'data_final'));
			$obj->setTitulo(mysql_result($rs, $i, 'titulo'));
			$obj->setTipo(mysql_result($rs, $i, 'tipo'));
			$obj->setCompromisso(mysql_result($rs, $i, 'compromisso'));
			$obj->setHora_inicio(mysql_result($rs, $i, 'hora_inicio'));
			$obj->setHora_final(mysql_result($rs, $i, 'hora_final'));
			$obj->setEmail_envio(mysql_result($rs, $i, 'email_envio'));
			$obj->setSms_envio(mysql_result($rs, $i, 'sms_envio'));
			$obj->setHora_envio(mysql_result($rs, $i, 'hora_envio'));
			$obj->setStatus(mysql_result($rs, $i, 'status'));
			$objs[$i] = $obj;
		}
		if(!is_array($objs)){ throw new Exception("");}
		return $objs;
	}
}
