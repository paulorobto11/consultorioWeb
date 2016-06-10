<?php 
 /** Classe responsavel pelas transacoes da Tabela: Mobiliario. */ 
class MobiliarioDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO mobiliario ('; 
		 $sql .= 'razao_social,';
		 $sql .= 'nome_fantasia,';
		 $sql .= 'tipo_empresa,';
		 $sql .= 'tipo_inscricao,';
		 $sql .= 'cpfcnpj,';
		 $sql .= 'inscricao_estadual,';
		 $sql .= 'pais_id,';
		 $sql .= 'codmunic,';
		 $sql .= 'estado_federacao_id,';
		 $sql .= 'cidade_id,';
		 $sql .= 'logradouro,';
		 $sql .= 'numero,';
		 $sql .= 'cep,';
		 $sql .= 'bairro,';
		 $sql .= 'complemento,';
		 $sql .= 'telefone1,';
		 $sql .= 'telefone2,';
		 $sql .= 'email,';
		 $sql .= 'site,';
		 $sql .= 'logo,';
		 $sql .= 'responsavel_id,';
		 $sql .= 'contador_id,';
		 $sql .= 'data_cadastro';
		 $sql .= ') VALUES ('; 
		 $sql .= '\''.$obj->getRazao_social().'\',';
		 $sql .= '\''.$obj->getNome_fantasia().'\',';
		 $sql .= ($obj->getTipo_empresa()?$obj->getTipo_empresa():0).',';
		 $sql .= ($obj->getTipo_inscricao()?$obj->getTipo_inscricao():0).',';
		 $sql .= '\''.$obj->getCpfcnpj().'\',';
		 $sql .= '\''.$obj->getInscricao_estadual().'\',';
		 $sql .= ($obj->getPais_id()?$obj->getPais_id():0).',';
		 $sql .= ($obj->getCodmunic()?$obj->getCodmunic():0).',';
		 $sql .= ($obj->getEstado_federacao_id()?$obj->getEstado_federacao_id():0).',';
		 $sql .= ($obj->getCidade_id()?$obj->getCidade_id():0).',';
		 $sql .= '\''.$obj->getLogradouro().'\',';
		 $sql .= '\''.$obj->getNumero().'\',';
		 $sql .= '\''.$obj->getCep().'\',';
		 $sql .= '\''.$obj->getBairro().'\',';
		 $sql .= '\''.$obj->getComplemento().'\',';
		 $sql .= '\''.$obj->getTelefone1().'\',';
		 $sql .= '\''.$obj->getTelefone2().'\',';
		 $sql .= '\''.$obj->getEmail().'\',';
		 $sql .= '\''.$obj->getSite().'\',';
		 $sql .= '\''.$obj->getLogo().'\',';
		 $sql .= ($obj->getResponsavel_id()?$obj->getResponsavel_id():0).',';
		 $sql .= ($obj->getContador_id()?$obj->getContador_id():0).',';
		 $sql .= '\''.$obj->getData_cadastro().'\'';
		 $sql .= ')'; 
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function update($obj){
		 $sql = 'UPDATE mobiliario SET '; 
		 $sql .= 'razao_social = '.'\''.$obj->getRazao_social().'\' ,';
		 $sql .= 'nome_fantasia = '.'\''.$obj->getNome_fantasia().'\' ,';
		 $sql .= 'tipo_empresa = '.($obj->getTipo_empresa()?$obj->getTipo_empresa():0).',';
		 $sql .= 'tipo_inscricao = '.($obj->getTipo_inscricao()?$obj->getTipo_inscricao():0).',';
		 $sql .= 'cpfcnpj = '.'\''.$obj->getCpfcnpj().'\' ,';
		 $sql .= 'inscricao_estadual = '.'\''.$obj->getInscricao_estadual().'\' ,';
		 $sql .= 'pais_id = '.($obj->getPais_id()?$obj->getPais_id():0).',';
		 $sql .= 'codmunic = '.($obj->getCodmunic()?$obj->getCodmunic():0).',';
		 $sql .= 'estado_federacao_id = '.($obj->getEstado_federacao_id()?$obj->getEstado_federacao_id():0).',';
		 $sql .= 'cidade_id = '.($obj->getCidade_id()?$obj->getCidade_id():0).',';
		 $sql .= 'logradouro = '.'\''.$obj->getLogradouro().'\' ,';
		 $sql .= 'numero = '.'\''.$obj->getNumero().'\' ,';
		 $sql .= 'cep = '.'\''.$obj->getCep().'\' ,';
		 $sql .= 'bairro = '.'\''.$obj->getBairro().'\' ,';
		 $sql .= 'complemento = '.'\''.$obj->getComplemento().'\' ,';
		 $sql .= 'telefone1 = '.'\''.$obj->getTelefone1().'\' ,';
		 $sql .= 'telefone2 = '.'\''.$obj->getTelefone2().'\' ,';
		 $sql .= 'email = '.'\''.$obj->getEmail().'\' ,';
		 $sql .= 'site = '.'\''.$obj->getSite().'\' ,';
		 $sql .= 'logo = '.'\''.$obj->getLogo().'\' ,';
		 $sql .= 'responsavel_id = '.($obj->getResponsavel_id()?$obj->getResponsavel_id():0).',';
		 $sql .= 'contador_id = '.($obj->getContador_id()?$obj->getContador_id():0).',';
		 $sql .= 'data_cadastro = '.'\''.$obj->getData_cadastro().'\' ';
		 $sql .= ' WHERE cadmob = '.$obj->getCadmob();
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM mobiliario WHERE cadmob = '.$obj->getCadmob();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM mobiliario WHERE 1=1 '; 
		if ($obj->getCadmob()) { 
			$sql .= " AND cadmob = '".$obj->getCadmob()."'";
		} 
		if ($obj->getRazao_social()) { 
			$sql .= " AND upper(razao_social)  like ('%".strtoupper($obj->getRazao_social())."%')";
		} 
		if ($obj->getNome_fantasia()) { 
			$sql .= " AND upper(nome_fantasia)  like ('%".strtoupper($obj->getNome_fantasia())."%')";
		} 
		if ($obj->getTipo_empresa()) { 
			$sql .= " AND tipo_empresa = '".$obj->getTipo_empresa()."'";
		} 
		if ($obj->getTipo_inscricao()) { 
			$sql .= " AND tipo_inscricao = '".$obj->getTipo_inscricao()."'";
		} 
		if ($obj->getCpfcnpj()) { 
			$sql .= " AND upper(cpfcnpj)  like ('%".strtoupper($obj->getCpfcnpj())."%')";
		} 
		if ($obj->getInscricao_estadual()) { 
			$sql .= " AND upper(inscricao_estadual)  like ('%".strtoupper($obj->getInscricao_estadual())."%')";
		} 
		if ($obj->getPais_id()) { 
			$sql .= " AND pais_id = '".$obj->getPais_id()."'";
		} 
		if ($obj->getCodmunic()) { 
			$sql .= " AND codmunic = '".$obj->getCodmunic()."'";
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
		if ($obj->getComplemento()) { 
			$sql .= " AND upper(complemento)  like ('%".strtoupper($obj->getComplemento())."%')";
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
		if ($obj->getSite()) { 
			$sql .= " AND upper(site)  like ('%".strtoupper($obj->getSite())."%')";
		} 
		if ($obj->getLogo()) { 
			$sql .= " AND upper(logo)  like ('%".strtoupper($obj->getLogo())."%')";
		} 
		if ($obj->getResponsavel_id()) { 
			$sql .= " AND responsavel_id = '".$obj->getResponsavel_id()."'";
		} 
		if ($obj->getContador_id()) { 
			$sql .= " AND contador_id = '".$obj->getContador_id()."'";
		} 
		if ($obj->getData_cadastro()) { 
			$sql .= " AND data_cadastro = '".$obj->getData_cadastro()."'";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setCadmob(mysql_result($rs, 0, 'cadmob')); 
			 $obj->setRazao_social(mysql_result($rs, 0, 'razao_social')); 
			 $obj->setNome_fantasia(mysql_result($rs, 0, 'nome_fantasia')); 
			 $obj->setTipo_empresa(mysql_result($rs, 0, 'tipo_empresa')); 
			 $obj->setTipo_inscricao(mysql_result($rs, 0, 'tipo_inscricao')); 
			 $obj->setCpfcnpj(mysql_result($rs, 0, 'cpfcnpj')); 
			 $obj->setInscricao_estadual(mysql_result($rs, 0, 'inscricao_estadual')); 
			 $obj->setPais_id(mysql_result($rs, 0, 'pais_id')); 
			 $obj->setCodmunic(mysql_result($rs, 0, 'codmunic')); 
			 $obj->setEstado_federacao_id(mysql_result($rs, 0, 'estado_federacao_id')); 
			 $obj->setCidade_id(mysql_result($rs, 0, 'cidade_id')); 
			 $obj->setLogradouro(mysql_result($rs, 0, 'logradouro')); 
			 $obj->setNumero(mysql_result($rs, 0, 'numero')); 
			 $obj->setCep(mysql_result($rs, 0, 'cep')); 
			 $obj->setBairro(mysql_result($rs, 0, 'bairro')); 
			 $obj->setComplemento(mysql_result($rs, 0, 'complemento')); 
			 $obj->setTelefone1(mysql_result($rs, 0, 'telefone1')); 
			 $obj->setTelefone2(mysql_result($rs, 0, 'telefone2')); 
			 $obj->setEmail(mysql_result($rs, 0, 'email')); 
			 $obj->setSite(mysql_result($rs, 0, 'site')); 
			 $obj->setLogo(mysql_result($rs, 0, 'logo')); 
			 $obj->setResponsavel_id(mysql_result($rs, 0, 'responsavel_id')); 
			 $obj->setContador_id(mysql_result($rs, 0, 'contador_id')); 
			 $obj->setData_cadastro(mysql_result($rs, 0, 'data_cadastro')); 
		} 
		 return $obj; 
	} 

	  function countAll($obj){
		 $sql = 'SELECT count(*) as existe FROM mobiliario WHERE 1=1 ';  


		if ($obj->getCadmob()) { 
			$sql .= " AND cadmob = '".$obj->getCadmob()."'";
		} 
		if ($obj->getRazao_social()) { 
			$sql .= " AND upper(razao_social)  like ('%".strtoupper($obj->getRazao_social())."%')";
		} 
		if ($obj->getNome_fantasia()) { 
			$sql .= " AND upper(nome_fantasia)  like ('%".strtoupper($obj->getNome_fantasia())."%')";
		} 
		if ($obj->getTipo_empresa()) { 
			$sql .= " AND tipo_empresa = '".$obj->getTipo_empresa()."'";
		} 
		if ($obj->getTipo_inscricao()) { 
			$sql .= " AND tipo_inscricao = '".$obj->getTipo_inscricao()."'";
		} 
		if ($obj->getCpfcnpj()) { 
			$sql .= " AND upper(cpfcnpj)  like ('%".strtoupper($obj->getCpfcnpj())."%')";
		} 
		if ($obj->getInscricao_estadual()) { 
			$sql .= " AND upper(inscricao_estadual)  like ('%".strtoupper($obj->getInscricao_estadual())."%')";
		} 
		if ($obj->getPais_id()) { 
			$sql .= " AND pais_id = '".$obj->getPais_id()."'";
		} 
		if ($obj->getCodmunic()) { 
			$sql .= " AND codmunic = '".$obj->getCodmunic()."'";
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
		if ($obj->getComplemento()) { 
			$sql .= " AND upper(complemento)  like ('%".strtoupper($obj->getComplemento())."%')";
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
		if ($obj->getSite()) { 
			$sql .= " AND upper(site)  like ('%".strtoupper($obj->getSite())."%')";
		} 
		if ($obj->getLogo()) { 
			$sql .= " AND upper(logo)  like ('%".strtoupper($obj->getLogo())."%')";
		} 
		if ($obj->getResponsavel_id()) { 
			$sql .= " AND responsavel_id = '".$obj->getResponsavel_id()."'";
		} 
		if ($obj->getContador_id()) { 
			$sql .= " AND contador_id = '".$obj->getContador_id()."'";
		} 
		if ($obj->getData_cadastro()) { 
			$sql .= " AND data_cadastro = '".$obj->getData_cadastro()."'";
		} 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function verifica_existe($obj){
		 $sql = 'SELECT count(*) as existe FROM mobiliario WHERE 1=1 ';  


		 if ($obj->getCadmob()) { 
			 $sql .= 	 "AND cadmob = '".$obj->getCadmob()."'";
 		 } 
 		 
 		 if ($obj->getCpfcnpj()) {
 		 	$sql .= 	 "AND cpfcnpj = '".$obj->getCpfcnpj()."'";
 		 }
 		 

		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function selectAll($obj){
		 $sql = 'SELECT * FROM mobiliario WHERE 1=1 '; 


		if ($obj->getCadmob()) { 
			 $sql .= " AND cadmob = '".$obj->getCadmob()."'";
 				} 
		if ($obj->getRazao_social()) { 
			 $sql .= " AND upper(razao_social)  like ('%".strtoupper($obj->getRazao_social())."%')";
 				} 
		if ($obj->getNome_fantasia()) { 
			 $sql .= " AND upper(nome_fantasia)  like ('%".strtoupper($obj->getNome_fantasia())."%')";
 				} 
		if ($obj->getTipo_empresa()) { 
			 $sql .= " AND tipo_empresa = '".$obj->getTipo_empresa()."'";
 				} 
		if ($obj->getTipo_inscricao()) { 
			 $sql .= " AND tipo_inscricao = '".$obj->getTipo_inscricao()."'";
 				} 
		if ($obj->getCpfcnpj()) { 
			 $sql .= " AND upper(cpfcnpj)  like ('%".strtoupper($obj->getCpfcnpj())."%')";
 				} 
		if ($obj->getInscricao_estadual()) { 
			 $sql .= " AND upper(inscricao_estadual)  like ('%".strtoupper($obj->getInscricao_estadual())."%')";
 				} 
		if ($obj->getPais_id()) { 
			 $sql .= " AND pais_id = '".$obj->getPais_id()."'";
 				} 
		if ($obj->getCodmunic()) { 
			 $sql .= " AND codmunic = '".$obj->getCodmunic()."'";
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
		if ($obj->getComplemento()) { 
			 $sql .= " AND upper(complemento)  like ('%".strtoupper($obj->getComplemento())."%')";
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
		if ($obj->getSite()) { 
			 $sql .= " AND upper(site)  like ('%".strtoupper($obj->getSite())."%')";
 				} 
		if ($obj->getLogo()) { 
			 $sql .= " AND upper(logo)  like ('%".strtoupper($obj->getLogo())."%')";
 				} 
		if ($obj->getResponsavel_id()) { 
			 $sql .= " AND responsavel_id = '".$obj->getResponsavel_id()."'";
 				} 
		if ($obj->getContador_id()) { 
			 $sql .= " AND contador_id = '".$obj->getContador_id()."'";
 				} 
		if ($obj->getData_cadastro()) { 
			 $sql .= " AND data_cadastro = '".$obj->getData_cadastro()."'";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Mobiliario(); 
			 $obj->setCadmob(mysql_result($rs, $i, 'cadmob')); 
			 $obj->setRazao_social(mysql_result($rs, $i, 'razao_social')); 
			 $obj->setNome_fantasia(mysql_result($rs, $i, 'nome_fantasia')); 
			 $obj->setTipo_empresa(mysql_result($rs, $i, 'tipo_empresa')); 
			 $obj->setTipo_inscricao(mysql_result($rs, $i, 'tipo_inscricao')); 
			 $obj->setCpfcnpj(mysql_result($rs, $i, 'cpfcnpj')); 
			 $obj->setInscricao_estadual(mysql_result($rs, $i, 'inscricao_estadual')); 
			 $obj->setPais_id(mysql_result($rs, $i, 'pais_id')); 
			 $obj->setCodmunic(mysql_result($rs, $i, 'codmunic')); 
			 $obj->setEstado_federacao_id(mysql_result($rs, $i, 'estado_federacao_id')); 
			 $obj->setCidade_id(mysql_result($rs, $i, 'cidade_id')); 
			 $obj->setLogradouro(mysql_result($rs, $i, 'logradouro')); 
			 $obj->setNumero(mysql_result($rs, $i, 'numero')); 
			 $obj->setCep(mysql_result($rs, $i, 'cep')); 
			 $obj->setBairro(mysql_result($rs, $i, 'bairro')); 
			 $obj->setComplemento(mysql_result($rs, $i, 'complemento')); 
			 $obj->setTelefone1(mysql_result($rs, $i, 'telefone1')); 
			 $obj->setTelefone2(mysql_result($rs, $i, 'telefone2')); 
			 $obj->setEmail(mysql_result($rs, $i, 'email')); 
			 $obj->setSite(mysql_result($rs, $i, 'site')); 
			 $obj->setLogo(mysql_result($rs, $i, 'logo')); 
			 $obj->setResponsavel_id(mysql_result($rs, $i, 'responsavel_id')); 
			 $obj->setContador_id(mysql_result($rs, $i, 'contador_id')); 
			 $obj->setData_cadastro(mysql_result($rs, $i, 'data_cadastro')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
} 
