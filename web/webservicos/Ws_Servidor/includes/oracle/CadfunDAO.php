<?php 
 /** Classe responsavel pelas transacoes da Tabela: Cadfun. */ 
class CadfunDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO cadfun ('; 
		 $sql .= 'codemp,';
		 $sql .= 'codfun,';
		 $sql .= 'nome_funci,';
		 $sql .= 'data_inicio,';
		 $sql .= 'data_final,';
		 $sql .= 'ultimo_acesso,';
		 $sql .= 'hora_acesso,';
		 $sql .= 'fone_contato,';
		 $sql .= 'celular_contato,';
		 $sql .= 'endereco_rua,';
		 $sql .= 'endereco_numero,';
		 $sql .= 'endereco_complemento,';
		 $sql .= 'endereco_cidade,';
		 $sql .= 'endereco_estado,';
		 $sql .= 'email,';
		 $sql .= 'status_funci,';
		 $sql .= 'observacao,';
		 $sql .= 'senha_acesso,';
		 $sql .= 'foto_funci';
		 $sql .= ') VALUES ('; 
		 $sql .= $obj->getCodemp().',';
		 $sql .= $obj->getCodfun().',';
		 $sql .= '\''.$obj->getNome_funci().'\',';
		 $sql .= '\''.$obj->getData_inicio().'\',';
		 $sql .= '\''.$obj->getData_final().'\',';
		 $sql .= '\''.$obj->getUltimo_acesso().'\',';
		 $sql .= $obj->getHora_acesso().',';
		 $sql .= $obj->getFone_contato().',';
		 $sql .= $obj->getCelular_contato().',';
		 $sql .= '\''.$obj->getEndereco_rua().'\',';
		 $sql .= $obj->getEndereco_numero().',';
		 $sql .= '\''.$obj->getEndereco_complemento().'\',';
		 $sql .= '\''.$obj->getEndereco_cidade().'\',';
		 $sql .= '\''.$obj->getEndereco_estado().'\',';
		 $sql .= '\''.$obj->getEmail().'\',';
		 $sql .= $obj->getStatus_funci().',';
		 $sql .= '\''.$obj->getObservacao().'\',';
		 $sql .= '\''.$obj->getSenha_acesso().'\',';
		 $sql .= '\''.$obj->getFoto_funci().'\'';
		 $sql .= ')'; 
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function update($obj){
		 $sql = 'UPDATE cadfun SET '; 
		 $sql .= 'codemp = '.$obj->getCodemp().',';
		 $sql .= 'codfun = '.$obj->getCodfun().',';
		 $sql .= 'nome_funci = '.'\''.$obj->getNome_funci().'\' ,';
		 $sql .= 'data_inicio = '.'\''.$obj->getData_inicio().'\' ,';
		 $sql .= 'data_final = '.'\''.$obj->getData_final().'\' ,';
		 $sql .= 'ultimo_acesso = '.'\''.$obj->getUltimo_acesso().'\' ,';
		 $sql .= 'hora_acesso = '.$obj->getHora_acesso().',';
		 $sql .= 'fone_contato = '.$obj->getFone_contato().',';
		 $sql .= 'celular_contato = '.$obj->getCelular_contato().',';
		 $sql .= 'endereco_rua = '.'\''.$obj->getEndereco_rua().'\' ,';
		 $sql .= 'endereco_numero = '.$obj->getEndereco_numero().',';
		 $sql .= 'endereco_complemento = '.'\''.$obj->getEndereco_complemento().'\' ,';
		 $sql .= 'endereco_cidade = '.'\''.$obj->getEndereco_cidade().'\' ,';
		 $sql .= 'endereco_estado = '.'\''.$obj->getEndereco_estado().'\' ,';
		 $sql .= 'email = '.'\''.$obj->getEmail().'\' ,';
		 $sql .= 'status_funci = '.$obj->getStatus_funci().',';
		 $sql .= 'observacao = '.'\''.$obj->getObservacao().'\' ,';
		 $sql .= 'senha_acesso = '.'\''.$obj->getSenha_acesso().'\' ,';
		 $sql .= 'foto_funci = '.'\''.$obj->getFoto_funci().'\' ';
		 $sql .= ' WHERE codemp = '.$obj->getCodemp();
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM cadfun WHERE codemp = '.$obj->getCodemp();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM cadfun WHERE 1=1 '; 
		if ($obj->getCodemp()) { 
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		} 
		if ($obj->getCodfun()) { 
			$sql .= " AND codfun = '".$obj->getCodfun()."'";
		} 
		if ($obj->getNome_funci()) { 
			$sql .= " AND upper(nome_funci)  like ('%".strtoupper($obj->getNome_funci())."%')";
		} 
		if ($obj->getData_inicio()) { 
			$sql .= " AND data_inicio = '".$obj->getData_inicio()."'";
		} 
		if ($obj->getData_final()) { 
			$sql .= " AND data_final = '".$obj->getData_final()."'";
		} 
		if ($obj->getUltimo_acesso()) { 
			$sql .= " AND ultimo_acesso = '".$obj->getUltimo_acesso()."'";
		} 
		if ($obj->getHora_acesso()) { 
			$sql .= " AND hora_acesso = '".$obj->getHora_acesso()."'";
		} 
		if ($obj->getFone_contato()) { 
			$sql .= " AND fone_contato = '".$obj->getFone_contato()."'";
		} 
		if ($obj->getCelular_contato()) { 
			$sql .= " AND celular_contato = '".$obj->getCelular_contato()."'";
		} 
		if ($obj->getEndereco_rua()) { 
			$sql .= " AND upper(endereco_rua)  like ('%".strtoupper($obj->getEndereco_rua())."%')";
		} 
		if ($obj->getEndereco_numero()) { 
			$sql .= " AND endereco_numero = '".$obj->getEndereco_numero()."'";
		} 
		if ($obj->getEndereco_complemento()) { 
			$sql .= " AND upper(endereco_complemento)  like ('%".strtoupper($obj->getEndereco_complemento())."%')";
		} 
		if ($obj->getEndereco_cidade()) { 
			$sql .= " AND upper(endereco_cidade)  like ('%".strtoupper($obj->getEndereco_cidade())."%')";
		} 
		if ($obj->getEndereco_estado()) { 
			$sql .= " AND upper(endereco_estado)  like ('%".strtoupper($obj->getEndereco_estado())."%')";
		} 
		if ($obj->getEmail()) { 
			$sql .= " AND upper(email)  like ('%".strtoupper($obj->getEmail())."%')";
		} 
		if ($obj->getStatus_funci()) { 
			$sql .= " AND status_funci = '".$obj->getStatus_funci()."'";
		} 
		if ($obj->getObservacao()) { 
			$sql .= " AND upper(observacao)  like ('%".strtoupper($obj->getObservacao())."%')";
		} 
		if ($obj->getSenha_acesso()) { 
			$sql .= " AND upper(senha_acesso)  like ('%".strtoupper($obj->getSenha_acesso())."%')";
		} 
		if ($obj->getFoto_funci()) { 
			$sql .= " AND upper(foto_funci)  like ('%".strtoupper($obj->getFoto_funci())."%')";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setCodemp(mysql_result($rs, 0, 'codemp')); 
			 $obj->setCodfun(mysql_result($rs, 0, 'codfun')); 
			 $obj->setNome_funci(mysql_result($rs, 0, 'nome_funci')); 
			 $obj->setData_inicio(mysql_result($rs, 0, 'data_inicio')); 
			 $obj->setData_final(mysql_result($rs, 0, 'data_final')); 
			 $obj->setUltimo_acesso(mysql_result($rs, 0, 'ultimo_acesso')); 
			 $obj->setHora_acesso(mysql_result($rs, 0, 'hora_acesso')); 
			 $obj->setFone_contato(mysql_result($rs, 0, 'fone_contato')); 
			 $obj->setCelular_contato(mysql_result($rs, 0, 'celular_contato')); 
			 $obj->setEndereco_rua(mysql_result($rs, 0, 'endereco_rua')); 
			 $obj->setEndereco_numero(mysql_result($rs, 0, 'endereco_numero')); 
			 $obj->setEndereco_complemento(mysql_result($rs, 0, 'endereco_complemento')); 
			 $obj->setEndereco_cidade(mysql_result($rs, 0, 'endereco_cidade')); 
			 $obj->setEndereco_estado(mysql_result($rs, 0, 'endereco_estado')); 
			 $obj->setEmail(mysql_result($rs, 0, 'email')); 
			 $obj->setStatus_funci(mysql_result($rs, 0, 'status_funci')); 
			 $obj->setObservacao(mysql_result($rs, 0, 'observacao')); 
			 $obj->setSenha_acesso(mysql_result($rs, 0, 'senha_acesso')); 
			 $obj->setFoto_funci(mysql_result($rs, 0, 'foto_funci')); 
		} 
		 return $obj; 
	} 

	  function countAll($obj){
		 $sql = 'SELECT count(*) as existe FROM cadfun WHERE 1=1 ';  


		if ($obj->getCodemp()) { 
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		} 
		if ($obj->getCodfun()) { 
			$sql .= " AND codfun = '".$obj->getCodfun()."'";
		} 
		if ($obj->getNome_funci()) { 
			$sql .= " AND upper(nome_funci)  like ('%".strtoupper($obj->getNome_funci())."%')";
		} 
		if ($obj->getData_inicio()) { 
			$sql .= " AND data_inicio = '".$obj->getData_inicio()."'";
		} 
		if ($obj->getData_final()) { 
			$sql .= " AND data_final = '".$obj->getData_final()."'";
		} 
		if ($obj->getUltimo_acesso()) { 
			$sql .= " AND ultimo_acesso = '".$obj->getUltimo_acesso()."'";
		} 
		if ($obj->getHora_acesso()) { 
			$sql .= " AND hora_acesso = '".$obj->getHora_acesso()."'";
		} 
		if ($obj->getFone_contato()) { 
			$sql .= " AND fone_contato = '".$obj->getFone_contato()."'";
		} 
		if ($obj->getCelular_contato()) { 
			$sql .= " AND celular_contato = '".$obj->getCelular_contato()."'";
		} 
		if ($obj->getEndereco_rua()) { 
			$sql .= " AND upper(endereco_rua)  like ('%".strtoupper($obj->getEndereco_rua())."%')";
		} 
		if ($obj->getEndereco_numero()) { 
			$sql .= " AND endereco_numero = '".$obj->getEndereco_numero()."'";
		} 
		if ($obj->getEndereco_complemento()) { 
			$sql .= " AND upper(endereco_complemento)  like ('%".strtoupper($obj->getEndereco_complemento())."%')";
		} 
		if ($obj->getEndereco_cidade()) { 
			$sql .= " AND upper(endereco_cidade)  like ('%".strtoupper($obj->getEndereco_cidade())."%')";
		} 
		if ($obj->getEndereco_estado()) { 
			$sql .= " AND upper(endereco_estado)  like ('%".strtoupper($obj->getEndereco_estado())."%')";
		} 
		if ($obj->getEmail()) { 
			$sql .= " AND upper(email)  like ('%".strtoupper($obj->getEmail())."%')";
		} 
		if ($obj->getStatus_funci()) { 
			$sql .= " AND status_funci = '".$obj->getStatus_funci()."'";
		} 
		if ($obj->getObservacao()) { 
			$sql .= " AND upper(observacao)  like ('%".strtoupper($obj->getObservacao())."%')";
		} 
		if ($obj->getSenha_acesso()) { 
			$sql .= " AND upper(senha_acesso)  like ('%".strtoupper($obj->getSenha_acesso())."%')";
		} 
		if ($obj->getFoto_funci()) { 
			$sql .= " AND upper(foto_funci)  like ('%".strtoupper($obj->getFoto_funci())."%')";
		} 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function verifica_existe($obj){
		 $sql = 'SELECT count(*) as existe FROM cadfun WHERE 1=1 ';  


		 if ($obj->getCodfun()) { 
			 $sql .= 	 "AND codfun = '".$obj->getCodfun()."'";
 		 } 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function selectAll($obj){
		 $sql = 'SELECT * FROM cadfun WHERE 1=1 '; 


		if ($obj->getCodemp()) { 
			 $sql .= " AND codemp = '".$obj->getCodemp()."'";
 				} 
		if ($obj->getCodfun()) { 
			 $sql .= " AND codfun = '".$obj->getCodfun()."'";
 				} 
		if ($obj->getNome_funci()) { 
			 $sql .= " AND upper(nome_funci)  like ('%".strtoupper($obj->getNome_funci())."%')";
 				} 
		if ($obj->getData_inicio()) { 
			 $sql .= " AND data_inicio = '".$obj->getData_inicio()."'";
 				} 
		if ($obj->getData_final()) { 
			 $sql .= " AND data_final = '".$obj->getData_final()."'";
 				} 
		if ($obj->getUltimo_acesso()) { 
			 $sql .= " AND ultimo_acesso = '".$obj->getUltimo_acesso()."'";
 				} 
		if ($obj->getHora_acesso()) { 
			 $sql .= " AND hora_acesso = '".$obj->getHora_acesso()."'";
 				} 
		if ($obj->getFone_contato()) { 
			 $sql .= " AND fone_contato = '".$obj->getFone_contato()."'";
 				} 
		if ($obj->getCelular_contato()) { 
			 $sql .= " AND celular_contato = '".$obj->getCelular_contato()."'";
 				} 
		if ($obj->getEndereco_rua()) { 
			 $sql .= " AND upper(endereco_rua)  like ('%".strtoupper($obj->getEndereco_rua())."%')";
 				} 
		if ($obj->getEndereco_numero()) { 
			 $sql .= " AND endereco_numero = '".$obj->getEndereco_numero()."'";
 				} 
		if ($obj->getEndereco_complemento()) { 
			 $sql .= " AND upper(endereco_complemento)  like ('%".strtoupper($obj->getEndereco_complemento())."%')";
 				} 
		if ($obj->getEndereco_cidade()) { 
			 $sql .= " AND upper(endereco_cidade)  like ('%".strtoupper($obj->getEndereco_cidade())."%')";
 				} 
		if ($obj->getEndereco_estado()) { 
			 $sql .= " AND upper(endereco_estado)  like ('%".strtoupper($obj->getEndereco_estado())."%')";
 				} 
		if ($obj->getEmail()) { 
			 $sql .= " AND upper(email)  like ('%".strtoupper($obj->getEmail())."%')";
 				} 
		if ($obj->getStatus_funci()) { 
			 $sql .= " AND status_funci = '".$obj->getStatus_funci()."'";
 				} 
		if ($obj->getObservacao()) { 
			 $sql .= " AND upper(observacao)  like ('%".strtoupper($obj->getObservacao())."%')";
 				} 
		if ($obj->getSenha_acesso()) { 
			 $sql .= " AND upper(senha_acesso)  like ('%".strtoupper($obj->getSenha_acesso())."%')";
 				} 
		if ($obj->getFoto_funci()) { 
			 $sql .= " AND upper(foto_funci)  like ('%".strtoupper($obj->getFoto_funci())."%')";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Cadfun(); 
			 $obj->setCodemp(mysql_result($rs, $i, 'codemp')); 
			 $obj->setCodfun(mysql_result($rs, $i, 'codfun')); 
			 $obj->setNome_funci(mysql_result($rs, $i, 'nome_funci')); 
			 $obj->setData_inicio(mysql_result($rs, $i, 'data_inicio')); 
			 $obj->setData_final(mysql_result($rs, $i, 'data_final')); 
			 $obj->setUltimo_acesso(mysql_result($rs, $i, 'ultimo_acesso')); 
			 $obj->setHora_acesso(mysql_result($rs, $i, 'hora_acesso')); 
			 $obj->setFone_contato(mysql_result($rs, $i, 'fone_contato')); 
			 $obj->setCelular_contato(mysql_result($rs, $i, 'celular_contato')); 
			 $obj->setEndereco_rua(mysql_result($rs, $i, 'endereco_rua')); 
			 $obj->setEndereco_numero(mysql_result($rs, $i, 'endereco_numero')); 
			 $obj->setEndereco_complemento(mysql_result($rs, $i, 'endereco_complemento')); 
			 $obj->setEndereco_cidade(mysql_result($rs, $i, 'endereco_cidade')); 
			 $obj->setEndereco_estado(mysql_result($rs, $i, 'endereco_estado')); 
			 $obj->setEmail(mysql_result($rs, $i, 'email')); 
			 $obj->setStatus_funci(mysql_result($rs, $i, 'status_funci')); 
			 $obj->setObservacao(mysql_result($rs, $i, 'observacao')); 
			 $obj->setSenha_acesso(mysql_result($rs, $i, 'senha_acesso')); 
			 $obj->setFoto_funci(mysql_result($rs, $i, 'foto_funci')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
} 
