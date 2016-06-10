<?php 
 /** Classe responsavel pelas transacoes da Tabela: Cadobra. */ 
class CadobraDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO cadobra ('; 
		 $sql .= 'razao_social,';
		 $sql .= 'nome_obra,';
		 $sql .= 'tipo_inscricao,';
		 $sql .= 'tipo,';
		 $sql .= 'cpf,';
		 $sql .= 'cnpj,';
		 $sql .= 'id_contribuinte,';
		 $sql .= 'data_inicio,';
		 $sql .= 'data_final,';
		 $sql .= 'pais_id,';
		 $sql .= 'estado_federacao_id,';
		 $sql .= 'cidade_id,';
		 $sql .= 'logradouro,';
		 $sql .= 'numero,';
		 $sql .= 'cep,';
		 $sql .= 'bairro,';
		 $sql .= 'telefone1,';
		 $sql .= 'telefone2,';
		 $sql .= 'email,';
		 $sql .= 'responsavel,';
		 $sql .= 'data_cadastro,';
		 $sql .= 'situacao';
		 $sql .= ') VALUES ('; 
		 $sql .= '\''.$obj->getRazao_social().'\',';
		 $sql .= '\''.$obj->getNome_obra().'\',';
		 $sql .= ($obj->getTipo_inscricao()?$obj->getTipo_inscricao():0).',';
		 $sql .= ($obj->getTipo()?$obj->getTipo():0).',';
		 $sql .= '\''.$obj->getCpf().'\',';
		 $sql .= '\''.$obj->getCnpj().'\',';
		 $sql .= ($obj->getId_contribuinte()?$obj->getId_contribuinte():0).',';
		 $sql .= '\''.$obj->getData_inicio().'\',';
		 $sql .= '\''.$obj->getData_final().'\',';
		 $sql .= ($obj->getPais_id()?$obj->getPais_id():0).',';
		 $sql .= ($obj->getEstado_federacao_id()?$obj->getEstado_federacao_id():0).',';
		 $sql .= ($obj->getCidade_id()?$obj->getCidade_id():0).',';
		 $sql .= '\''.$obj->getLogradouro().'\',';
		 $sql .= '\''.$obj->getNumero().'\',';
		 $sql .= '\''.$obj->getCep().'\',';
		 $sql .= '\''.$obj->getBairro().'\',';
		 $sql .= '\''.$obj->getTelefone1().'\',';
		 $sql .= '\''.$obj->getTelefone2().'\',';
		 $sql .= '\''.$obj->getEmail().'\',';
		 $sql .= '\''.$obj->getResponsavel().'\',';
		 $sql .= '\''.$obj->getData_cadastro().'\',';
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
		 $sql = 'UPDATE cadobra SET '; 
		 $sql .= 'razao_social = '.'\''.$obj->getRazao_social().'\' ,';
		 $sql .= 'nome_obra = '.'\''.$obj->getNome_obra().'\' ,';
		 $sql .= 'tipo_inscricao = '.($obj->getTipo_inscricao()?$obj->getTipo_inscricao():0).',';
		 $sql .= 'tipo = '.($obj->getTipo()?$obj->getTipo():0).',';
		 $sql .= 'cpf = '.'\''.$obj->getCpf().'\' ,';
		 $sql .= 'cnpj = '.'\''.$obj->getCnpj().'\' ,';
		 $sql .= 'id_contribuinte = '.($obj->getId_contribuinte()?$obj->getId_contribuinte():0).',';
		 $sql .= 'data_inicio = '.'\''.$obj->getData_inicio().'\' ,';
		 $sql .= 'data_final = '.'\''.$obj->getData_final().'\' ,';
		 $sql .= 'pais_id = '.($obj->getPais_id()?$obj->getPais_id():0).',';
		 $sql .= 'estado_federacao_id = '.($obj->getEstado_federacao_id()?$obj->getEstado_federacao_id():0).',';
		 $sql .= 'cidade_id = '.($obj->getCidade_id()?$obj->getCidade_id():0).',';
		 $sql .= 'logradouro = '.'\''.$obj->getLogradouro().'\' ,';
		 $sql .= 'numero = '.'\''.$obj->getNumero().'\' ,';
		 $sql .= 'cep = '.'\''.$obj->getCep().'\' ,';
		 $sql .= 'bairro = '.'\''.$obj->getBairro().'\' ,';
		 $sql .= 'telefone1 = '.'\''.$obj->getTelefone1().'\' ,';
		 $sql .= 'telefone2 = '.'\''.$obj->getTelefone2().'\' ,';
		 $sql .= 'email = '.'\''.$obj->getEmail().'\' ,';
		 $sql .= 'responsavel = '.'\''.$obj->getResponsavel().'\' ,';
		 $sql .= 'data_cadastro = '.'\''.$obj->getData_cadastro().'\' ,';
		 $sql .= 'situacao = '.($obj->getSituacao()?$obj->getSituacao():0);
		 $sql .= ' WHERE id_obra = '.$obj->getId_obra();
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM cadobra WHERE id_obra = '.$obj->getId_obra();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM cadobra WHERE 1=1 '; 
		if ($obj->getId_obra()) { 
			$sql .= " AND id_obra = '".$obj->getId_obra()."'";
		} 
		if ($obj->getRazao_social()) { 
			$sql .= " AND upper(razao_social)  like ('%".strtoupper($obj->getRazao_social())."%')";
		} 
		if ($obj->getNome_obra()) { 
			$sql .= " AND upper(nome_obra)  like ('%".strtoupper($obj->getNome_obra())."%')";
		} 
		if ($obj->getTipo_inscricao()) { 
			$sql .= " AND tipo_inscricao = '".$obj->getTipo_inscricao()."'";
		} 
		if ($obj->getTipo()) { 
			$sql .= " AND tipo = '".$obj->getTipo()."'";
		} 
		if ($obj->getCpf()) { 
			$sql .= " AND upper(cpf)  like ('%".strtoupper($obj->getCpf())."%')";
		} 
		if ($obj->getCnpj()) { 
			$sql .= " AND upper(cnpj)  like ('%".strtoupper($obj->getCnpj())."%')";
		} 
		if ($obj->getId_contribuinte()) { 
			$sql .= " AND id_contribuinte = '".$obj->getId_contribuinte()."'";
		} 
		if ($obj->getData_inicio()) { 
			$sql .= " AND data_inicio = '".$obj->getData_inicio()."'";
		} 
		if ($obj->getData_final()) { 
			$sql .= " AND data_final = '".$obj->getData_final()."'";
		} 
		if ($obj->getPais_id()) { 
			$sql .= " AND pais_id = '".$obj->getPais_id()."'";
		} 
		if ($obj->getEstado_federacao_id()) { 
			$sql .= " AND estado_federacao_id = '".$obj->getEstado_federacao_id()."'";
		} 
		if ($obj->getCidade_id()) { 
			$sql .= " AND cidade_id = '".$obj->getCidade_id()."'";
		} 
		if ($obj->getLogradouro()) { 
			$sql .= " AND upper(logradouro)  like ('%".strtoupper($obj->getLogradouro())."%')";
		} 
		if ($obj->getNumero()) { 
			$sql .= " AND upper(numero)  like ('%".strtoupper($obj->getNumero())."%')";
		} 
		if ($obj->getCep()) { 
			$sql .= " AND upper(cep)  like ('%".strtoupper($obj->getCep())."%')";
		} 
		if ($obj->getBairro()) { 
			$sql .= " AND upper(bairro)  like ('%".strtoupper($obj->getBairro())."%')";
		} 
		if ($obj->getTelefone1()) { 
			$sql .= " AND upper(telefone1)  like ('%".strtoupper($obj->getTelefone1())."%')";
		} 
		if ($obj->getTelefone2()) { 
			$sql .= " AND upper(telefone2)  like ('%".strtoupper($obj->getTelefone2())."%')";
		} 
		if ($obj->getEmail()) { 
			$sql .= " AND upper(email)  like ('%".strtoupper($obj->getEmail())."%')";
		} 
		if ($obj->getResponsavel()) { 
			$sql .= " AND upper(responsavel)  like ('%".strtoupper($obj->getResponsavel())."%')";
		} 
		if ($obj->getData_cadastro()) { 
			$sql .= " AND data_cadastro = '".$obj->getData_cadastro()."'";
		} 
		if ($obj->getSituacao()) { 
			$sql .= " AND situacao = '".$obj->getSituacao()."'";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setId_obra(mysql_result($rs, 0, 'id_obra')); 
			 $obj->setRazao_social(mysql_result($rs, 0, 'razao_social')); 
			 $obj->setNome_obra(mysql_result($rs, 0, 'nome_obra')); 
			 $obj->setTipo_inscricao(mysql_result($rs, 0, 'tipo_inscricao')); 
			 $obj->setTipo(mysql_result($rs, 0, 'tipo')); 
			 $obj->setCpf(mysql_result($rs, 0, 'cpf')); 
			 $obj->setCnpj(mysql_result($rs, 0, 'cnpj')); 
			 $obj->setId_contribuinte(mysql_result($rs, 0, 'id_contribuinte')); 
			 $obj->setData_inicio(mysql_result($rs, 0, 'data_inicio')); 
			 $obj->setData_final(mysql_result($rs, 0, 'data_final')); 
			 $obj->setPais_id(mysql_result($rs, 0, 'pais_id')); 
			 $obj->setEstado_federacao_id(mysql_result($rs, 0, 'estado_federacao_id')); 
			 $obj->setCidade_id(mysql_result($rs, 0, 'cidade_id')); 
			 $obj->setLogradouro(mysql_result($rs, 0, 'logradouro')); 
			 $obj->setNumero(mysql_result($rs, 0, 'numero')); 
			 $obj->setCep(mysql_result($rs, 0, 'cep')); 
			 $obj->setBairro(mysql_result($rs, 0, 'bairro')); 
			 $obj->setTelefone1(mysql_result($rs, 0, 'telefone1')); 
			 $obj->setTelefone2(mysql_result($rs, 0, 'telefone2')); 
			 $obj->setEmail(mysql_result($rs, 0, 'email')); 
			 $obj->setResponsavel(mysql_result($rs, 0, 'responsavel')); 
			 $obj->setData_cadastro(mysql_result($rs, 0, 'data_cadastro')); 
			 $obj->setSituacao(mysql_result($rs, 0, 'situacao')); 
		} 
		 return $obj; 
	} 

	  function countAll($obj){
		 $sql = 'SELECT count(*) as existe FROM cadobra WHERE 1=1 ';  


		if ($obj->getId_obra()) { 
			$sql .= " AND id_obra = '".$obj->getId_obra()."'";
		} 
		if ($obj->getRazao_social()) { 
			$sql .= " AND upper(razao_social)  like ('%".strtoupper($obj->getRazao_social())."%')";
		} 
		if ($obj->getNome_obra()) { 
			$sql .= " AND upper(nome_obra)  like ('%".strtoupper($obj->getNome_obra())."%')";
		} 
		if ($obj->getTipo_inscricao()) { 
			$sql .= " AND tipo_inscricao = '".$obj->getTipo_inscricao()."'";
		} 
		if ($obj->getTipo()) { 
			$sql .= " AND tipo = '".$obj->getTipo()."'";
		} 
		if ($obj->getCpf()) { 
			$sql .= " AND upper(cpf)  like ('%".strtoupper($obj->getCpf())."%')";
		} 
		if ($obj->getCnpj()) { 
			$sql .= " AND upper(cnpj)  like ('%".strtoupper($obj->getCnpj())."%')";
		} 
		if ($obj->getId_contribuinte()) { 
			$sql .= " AND id_contribuinte = '".$obj->getId_contribuinte()."'";
		} 
		if ($obj->getData_inicio()) { 
			$sql .= " AND data_inicio = '".$obj->getData_inicio()."'";
		} 
		if ($obj->getData_final()) { 
			$sql .= " AND data_final = '".$obj->getData_final()."'";
		} 
		if ($obj->getPais_id()) { 
			$sql .= " AND pais_id = '".$obj->getPais_id()."'";
		} 
		if ($obj->getEstado_federacao_id()) { 
			$sql .= " AND estado_federacao_id = '".$obj->getEstado_federacao_id()."'";
		} 
		if ($obj->getCidade_id()) { 
			$sql .= " AND cidade_id = '".$obj->getCidade_id()."'";
		} 
		if ($obj->getLogradouro()) { 
			$sql .= " AND upper(logradouro)  like ('%".strtoupper($obj->getLogradouro())."%')";
		} 
		if ($obj->getNumero()) { 
			$sql .= " AND upper(numero)  like ('%".strtoupper($obj->getNumero())."%')";
		} 
		if ($obj->getCep()) { 
			$sql .= " AND upper(cep)  like ('%".strtoupper($obj->getCep())."%')";
		} 
		if ($obj->getBairro()) { 
			$sql .= " AND upper(bairro)  like ('%".strtoupper($obj->getBairro())."%')";
		} 
		if ($obj->getTelefone1()) { 
			$sql .= " AND upper(telefone1)  like ('%".strtoupper($obj->getTelefone1())."%')";
		} 
		if ($obj->getTelefone2()) { 
			$sql .= " AND upper(telefone2)  like ('%".strtoupper($obj->getTelefone2())."%')";
		} 
		if ($obj->getEmail()) { 
			$sql .= " AND upper(email)  like ('%".strtoupper($obj->getEmail())."%')";
		} 
		if ($obj->getResponsavel()) { 
			$sql .= " AND upper(responsavel)  like ('%".strtoupper($obj->getResponsavel())."%')";
		} 
		if ($obj->getData_cadastro()) { 
			$sql .= " AND data_cadastro = '".$obj->getData_cadastro()."'";
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
		 $sql = 'SELECT count(*) as existe FROM cadobra WHERE 1=1 ';  


		 if ($obj->getId_obra()) { 
			 $sql .= 	 "AND id_obra = '".$obj->getId_obra()."'";
 		 } 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function selectAll($obj){
		 $sql = 'SELECT * FROM cadobra WHERE 1=1 '; 


		if ($obj->getId_obra()) { 
			 $sql .= " AND id_obra = '".$obj->getId_obra()."'";
 				} 
		if ($obj->getRazao_social()) { 
			 $sql .= " AND upper(razao_social)  like ('%".strtoupper($obj->getRazao_social())."%')";
 				} 
		if ($obj->getNome_obra()) { 
			 $sql .= " AND upper(nome_obra)  like ('%".strtoupper($obj->getNome_obra())."%')";
 				} 
		if ($obj->getTipo_inscricao()) { 
			 $sql .= " AND tipo_inscricao = '".$obj->getTipo_inscricao()."'";
 				} 
		if ($obj->getTipo()) { 
			 $sql .= " AND tipo = '".$obj->getTipo()."'";
 				} 
		if ($obj->getCpf()) { 
			 $sql .= " AND upper(cpf)  like ('%".strtoupper($obj->getCpf())."%')";
 				} 
		if ($obj->getCnpj()) { 
			 $sql .= " AND upper(cnpj)  like ('%".strtoupper($obj->getCnpj())."%')";
 				} 
		if ($obj->getId_contribuinte()) { 
			 $sql .= " AND id_contribuinte = '".$obj->getId_contribuinte()."'";
 				} 
		if ($obj->getData_inicio()) { 
			 $sql .= " AND data_inicio = '".$obj->getData_inicio()."'";
 				} 
		if ($obj->getData_final()) { 
			 $sql .= " AND data_final = '".$obj->getData_final()."'";
 				} 
		if ($obj->getPais_id()) { 
			 $sql .= " AND pais_id = '".$obj->getPais_id()."'";
 				} 
		if ($obj->getEstado_federacao_id()) { 
			 $sql .= " AND estado_federacao_id = '".$obj->getEstado_federacao_id()."'";
 				} 
		if ($obj->getCidade_id()) { 
			 $sql .= " AND cidade_id = '".$obj->getCidade_id()."'";
 				} 
		if ($obj->getLogradouro()) { 
			 $sql .= " AND upper(logradouro)  like ('%".strtoupper($obj->getLogradouro())."%')";
 				} 
		if ($obj->getNumero()) { 
			 $sql .= " AND upper(numero)  like ('%".strtoupper($obj->getNumero())."%')";
 				} 
		if ($obj->getCep()) { 
			 $sql .= " AND upper(cep)  like ('%".strtoupper($obj->getCep())."%')";
 				} 
		if ($obj->getBairro()) { 
			 $sql .= " AND upper(bairro)  like ('%".strtoupper($obj->getBairro())."%')";
 				} 
		if ($obj->getTelefone1()) { 
			 $sql .= " AND upper(telefone1)  like ('%".strtoupper($obj->getTelefone1())."%')";
 				} 
		if ($obj->getTelefone2()) { 
			 $sql .= " AND upper(telefone2)  like ('%".strtoupper($obj->getTelefone2())."%')";
 				} 
		if ($obj->getEmail()) { 
			 $sql .= " AND upper(email)  like ('%".strtoupper($obj->getEmail())."%')";
 				} 
		if ($obj->getResponsavel()) { 
			 $sql .= " AND upper(responsavel)  like ('%".strtoupper($obj->getResponsavel())."%')";
 				} 
		if ($obj->getData_cadastro()) { 
			 $sql .= " AND data_cadastro = '".$obj->getData_cadastro()."'";
 				} 
		if ($obj->getSituacao()) { 
			 $sql .= " AND situacao = '".$obj->getSituacao()."'";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Cadobra(); 
			 $obj->setId_obra(mysql_result($rs, $i, 'id_obra')); 
			 $obj->setRazao_social(mysql_result($rs, $i, 'razao_social')); 
			 $obj->setNome_obra(mysql_result($rs, $i, 'nome_obra')); 
			 $obj->setTipo_inscricao(mysql_result($rs, $i, 'tipo_inscricao')); 
			 $obj->setTipo(mysql_result($rs, $i, 'tipo')); 
			 $obj->setCpf(mysql_result($rs, $i, 'cpf')); 
			 $obj->setCnpj(mysql_result($rs, $i, 'cnpj')); 
			 $obj->setId_contribuinte(mysql_result($rs, $i, 'id_contribuinte')); 
			 $obj->setData_inicio(mysql_result($rs, $i, 'data_inicio')); 
			 $obj->setData_final(mysql_result($rs, $i, 'data_final')); 
			 $obj->setPais_id(mysql_result($rs, $i, 'pais_id')); 
			 $obj->setEstado_federacao_id(mysql_result($rs, $i, 'estado_federacao_id')); 
			 $obj->setCidade_id(mysql_result($rs, $i, 'cidade_id')); 
			 $obj->setLogradouro(mysql_result($rs, $i, 'logradouro')); 
			 $obj->setNumero(mysql_result($rs, $i, 'numero')); 
			 $obj->setCep(mysql_result($rs, $i, 'cep')); 
			 $obj->setBairro(mysql_result($rs, $i, 'bairro')); 
			 $obj->setTelefone1(mysql_result($rs, $i, 'telefone1')); 
			 $obj->setTelefone2(mysql_result($rs, $i, 'telefone2')); 
			 $obj->setEmail(mysql_result($rs, $i, 'email')); 
			 $obj->setResponsavel(mysql_result($rs, $i, 'responsavel')); 
			 $obj->setData_cadastro(mysql_result($rs, $i, 'data_cadastro')); 
			 $obj->setSituacao(mysql_result($rs, $i, 'situacao')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
} 
