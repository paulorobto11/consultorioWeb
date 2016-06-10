<?php 
class UsuarioDAO {

	function insert($obj){
		$sql = 'INSERT INTO usuario (';
		$sql .= 'codemp,';
		$sql .= 'codigo,';
		$sql .= 'nome,';
		$sql .= 'id_acesso,';
		$sql .= 'data_inicio,';
		$sql .= 'data_final,';
		$sql .= 'ultimo_acesso,';
		$sql .= 'hora_acesso,';
		$sql .= 'email,';
		$sql .= 'status_funci,';
		$sql .= 'observacao,';
		$sql .= 'senha_acesso';
		$sql .= ') VALUES (';
		$sql .= ($obj->getCodemp()?$obj->getCodemp():0).',';
		$sql .= ($obj->getCodigo()?$obj->getCodigo():0).',';
		$sql .= '\''.$obj->getNome().'\',';
		$sql .= ($obj->getId_acesso()?$obj->getId_acesso():0).',';
		$sql .= '\''.$obj->getData_inicio().'\',';
		$sql .= '\''.$obj->getData_final().'\',';
		$sql .= '\''.$obj->getUltimo_acesso().'\',';
		$sql .= ($obj->getHora_acesso()?$obj->getHora_acesso():0).',';
		$sql .= '\''.$obj->getEmail().'\',';
		$sql .= ($obj->getStatus_funci()?$obj->getStatus_funci():0).',';
		$sql .= '\''.$obj->getObservacao().'\',';
		$sql .= '\''.$obj->getSenha_acesso().'\'';
		$sql .= ')';
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	}

	function update($obj){
		$sql = 'UPDATE usuario SET ';
		$sql .= 'codigo = '.($obj->getCodigo()?$obj->getCodigo():0).',';
		$sql .= 'nome = '.'\''.$obj->getNome().'\' ,';
		$sql .= 'id_acesso = '.($obj->getId_acesso()?$obj->getId_acesso():0).',';
		$sql .= 'data_inicio = '.'\''.$obj->getData_inicio().'\' ,';
		$sql .= 'data_final = '.'\''.$obj->getData_final().'\' ,';
		$sql .= 'email = '.'\''.$obj->getEmail().'\' ,';
		$sql .= 'status_funci = '.($obj->getStatus_funci()?$obj->getStatus_funci():0).',';
		$sql .= 'observacao = '.'\''.$obj->getObservacao().'\' ,';
		$sql .= 'senha_acesso = '.'\''.$obj->getSenha_acesso().'\' ';
		$sql .= ' WHERE codemp = '.$obj->getCodemp().' and codigo = '.$obj->getCodigo();
		
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	}
	
	
	function alterar_dados($obj){
		$sql = 'UPDATE usuario SET ';
		$sql .= 'nome = '.'\''.$obj->getNome().'\' ,';
		$sql .= 'id_acesso = '.($obj->getId_acesso()?$obj->getId_acesso():0).',';
		$sql .= 'data_inicio = '.'\''.$obj->getData_inicio().'\' ,';
		$sql .= 'data_final = '.'\''.$obj->getData_final().'\' ,';
		$sql .= 'email = '.'\''.$obj->getEmail().'\' ,';
		$sql .= 'status_funci = '.($obj->getStatus_funci()?$obj->getStatus_funci():0).',';
		$sql .= 'observacao = '.'\''.$obj->getObservacao().'\' ,';
		$sql .= 'senha_acesso = '.'\''.$obj->getSenha_acesso().'\' ';
		$sql .= ' WHERE codemp = '.$obj->getCodemp().' and codigo = '.$obj->getCodigo();
		
        //echo "<hr>".$sql;
        		
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	}
	

	function delete($obj){
		$sql = 'DELETE FROM usuario ';
		$sql .= ' WHERE codemp = '.$obj->getCodemp().' and codigo = '.$obj->getCodigo();
		
		echo "<hr>".$sql;
		return true;
		
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	}

	function select($obj){
		$sql = 'SELECT * FROM usuario WHERE 1=1 ';
		if ($obj->getCodemp()) {
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		}
		if ($obj->getCodigo()) {
			$sql .= " AND codigo = '".$obj->getCodigo()."'";
		}
		if ($obj->getEmail()) { 
			$sql .= " AND upper(email)  like ('%".strtoupper($obj->getEmail())."%')";
		} 
		
		//echo "<hr>".$sql;
		
		$rs = mysql_query($sql);
		if(mysql_num_rows($rs) > 0 ){
			$obj->setCodemp(mysql_result($rs, 0, 'codemp'));
			$obj->setCodigo(mysql_result($rs, 0, 'codigo'));
			$obj->setNome(mysql_result($rs, 0, 'nome'));
			$obj->setId_acesso(mysql_result($rs, 0, 'id_acesso'));
			$obj->setData_inicio(mysql_result($rs, 0, 'data_inicio'));
			$obj->setData_final(mysql_result($rs, 0, 'data_final'));
			$obj->setUltimo_acesso(mysql_result($rs, 0, 'ultimo_acesso'));
			$obj->setHora_acesso(mysql_result($rs, 0, 'hora_acesso'));
			$obj->setEmail(mysql_result($rs, 0, 'email'));
			$obj->setStatus_funci(mysql_result($rs, 0, 'status_funci'));
			$obj->setObservacao(mysql_result($rs, 0, 'observacao'));
			$obj->setSenha_acesso(mysql_result($rs, 0, 'senha_acesso'));
		}
		return $obj;
	}

	function countAll($obj){
		$sql = 'SELECT count(*) as existe FROM usuario WHERE 1=1 ';


		if ($obj->getCodemp()) {
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		}
		if ($obj->getCodigo()) {
			$sql .= " AND codigo = '".$obj->getCodigo()."'";
		}
		
		if ($obj->getEmail()) { 
			$sql .= " AND upper(email)  like ('%".strtoupper($obj->getEmail())."%')";
		} 

		$query = mysql_query($sql);
		$dados = mysql_fetch_assoc($query);
		$existe = $dados['existe'];
		return $existe;
	}


	function verifica_existe($obj){
		$sql = 'SELECT count(*) as existe FROM usuario WHERE 1=1 ';
		if ($obj->getCodemp()) {
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		}
		if ($obj->getCodigo()) {
			$sql .= " AND codigo = '".$obj->getCodigo()."'";
		}
		
		if ($obj->getEmail()) { 
			$sql .= " AND upper(email)  like ('%".strtoupper($obj->getEmail())."%')";
		} 
		
		$query = mysql_query($sql);
		$dados = mysql_fetch_assoc($query);
		$existe = $dados['existe'];
		return $existe;
	}


	function proximo($obj){
		$sql = 'SELECT max(codigo) as proximo FROM usuario WHERE 1=1 AND codemp = '.$obj->getCodemp();
		$query = mysql_query($sql);
		$dados = mysql_fetch_assoc($query);
		$existe = ($dados['proximo']?$dados['proximo']:0);
		//echo "<hr>".$sql;
		
		return $existe;
	}



	function selectAll($obj){
		$sql = 'SELECT * FROM usuario WHERE 1=1 ';

		if ($obj->getCodemp()) {
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		}
		if ($obj->getCodigo()) {
			$sql .= " AND codigo = '".$obj->getCodigo()."'";
		}
		if ($obj->getNome()) { 
			$sql .= " AND upper(nome)  like ('%".strtoupper($obj->getNome())."%')";
		} 
		
		$sql .= " ORDER BY 1,2 ";

		$rs = mysql_query($sql);
		for($i = 0; $i < mysql_num_rows($rs); $i++){
			$obj = new Usuario();
			$obj->setCodemp(mysql_result($rs, $i, 'codemp'));
			$obj->setCodigo(mysql_result($rs, $i, 'codigo'));
			$obj->setNome(mysql_result($rs, $i, 'nome'));
			$obj->setId_acesso(mysql_result($rs, $i, 'id_acesso'));
			$obj->setData_inicio(mysql_result($rs, $i, 'data_inicio'));
			$obj->setData_final(mysql_result($rs, $i, 'data_final'));
			$obj->setUltimo_acesso(mysql_result($rs, $i, 'ultimo_acesso'));
			$obj->setHora_acesso(mysql_result($rs, $i, 'hora_acesso'));
			$obj->setEmail(mysql_result($rs, $i, 'email'));
			$obj->setStatus_funci(mysql_result($rs, $i, 'status_funci'));
			$obj->setObservacao(mysql_result($rs, $i, 'observacao'));
			$obj->setSenha_acesso(mysql_result($rs, $i, 'senha_acesso'));
			$objs[$i] = $obj;
		}
		if(!is_array($objs)){ throw new Exception("");}
		return $objs;
	}
}
