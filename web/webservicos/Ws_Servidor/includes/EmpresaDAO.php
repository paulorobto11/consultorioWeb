<?php 
 /** Classe responsavel pelas transacoes da Tabela: Empresa. */ 
class EmpresaDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO empresa ('; 
		 $sql .= 'identificacao,';
		 $sql .= 'razao_social,';
		 $sql .= 'empresa_secretaria,';
		 $sql .= 'empresa_departamento,';
		 $sql .= 'cnpj,';
		 $sql .= 'inscricao_estadual,';
		 $sql .= 'inscricao_municipal,';
		 $sql .= 'estado_federacao_id,';
		 $sql .= 'cidade_id,';
		 $sql .= 'logradouro,';
		 $sql .= 'numero,';
		 $sql .= 'cep,';
		 $sql .= 'bairro,';
		 $sql .= 'telefone1,';
		 $sql .= 'telefone2,';
		 $sql .= 'email,';
		 $sql .= 'site,';
		 $sql .= 'logo,';
		 $sql .= 'responsavel_id';
		 $sql .= ') VALUES ('; 
		 $sql .= '\''.$obj->getIdentificacao().'\',';
		 $sql .= '\''.$obj->getRazao_social().'\',';
		 $sql .= '\''.$obj->getEmpresa_secretaria().'\',';
		 $sql .= '\''.$obj->getEmpresa_departamento().'\',';
		 $sql .= '\''.$obj->getCnpj().'\',';
		 $sql .= '\''.$obj->getInscricao_estadual().'\',';
		 $sql .= '\''.$obj->getInscricao_municipal().'\',';
		 $sql .= ($obj->getEstado_federacao_id()?$obj->getEstado_federacao_id():0).',';
		 $sql .= ($obj->getCidade_id()?$obj->getCidade_id():0).',';
		 $sql .= '\''.$obj->getLogradouro().'\',';
		 $sql .= '\''.$obj->getNumero().'\',';
		 $sql .= '\''.$obj->getCep().'\',';
		 $sql .= '\''.$obj->getBairro().'\',';
		 $sql .= '\''.$obj->getTelefone1().'\',';
		 $sql .= '\''.$obj->getTelefone2().'\',';
		 $sql .= '\''.$obj->getEmail().'\',';
		 $sql .= '\''.$obj->getSite().'\',';
		 $sql .= '\''.$obj->getLogo().'\',';
		 $sql .= '\''.$obj->getResponsavel_id().'\'';
		 $sql .= ')'; 
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function update($obj){
		 $sql = 'UPDATE empresa SET '; 
		 $sql .= 'identificacao = '.'\''.$obj->getIdentificacao().'\' ,';
		 $sql .= 'razao_social = '.'\''.$obj->getRazao_social().'\' ,';
		 $sql .= 'empresa_secretaria = '.'\''.$obj->getEmpresa_secretaria().'\' ,';
		 $sql .= 'empresa_departamento = '.'\''.$obj->getEmpresa_departamento().'\' ,';
		 $sql .= 'cnpj = '.'\''.$obj->getCnpj().'\' ,';
		 $sql .= 'inscricao_estadual = '.'\''.$obj->getInscricao_estadual().'\' ,';
		 $sql .= 'inscricao_municipal = '.'\''.$obj->getInscricao_municipal().'\' ,';
		 $sql .= 'estado_federacao_id = '.($obj->getEstado_federacao_id()?$obj->getEstado_federacao_id():0).',';
		 $sql .= 'cidade_id = '.($obj->getCidade_id()?$obj->getCidade_id():0).',';
		 $sql .= 'logradouro = '.'\''.$obj->getLogradouro().'\' ,';
		 $sql .= 'numero = '.'\''.$obj->getNumero().'\' ,';
		 $sql .= 'cep = '.'\''.$obj->getCep().'\' ,';
		 $sql .= 'bairro = '.'\''.$obj->getBairro().'\' ,';
		 $sql .= 'telefone1 = '.'\''.$obj->getTelefone1().'\' ,';
		 $sql .= 'telefone2 = '.'\''.$obj->getTelefone2().'\' ,';
		 $sql .= 'email = '.'\''.$obj->getEmail().'\' ,';
		 $sql .= 'site = '.'\''.$obj->getSite().'\' ,';
		 $sql .= 'logo = '.'\''.$obj->getLogo().'\' ,';
		 $sql .= 'responsavel_id = '.'\''.$obj->getResponsavel_id().'\' ';
		 $sql .= ' WHERE id = '.$obj->getId();
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM empresa WHERE id = '.$obj->getId();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM empresa WHERE 1=1 '; 
		if ($obj->getId()) { 
			$sql .= " AND id = '".$obj->getId()."'";
		} 
		if ($obj->getIdentificacao()) { 
			$sql .= " AND upper(identificacao)  like ('%".strtoupper($obj->getIdentificacao())."%')";
		} 
		if ($obj->getRazao_social()) { 
			$sql .= " AND upper(razao_social)  like ('%".strtoupper($obj->getRazao_social())."%')";
		} 
		if ($obj->getEmpresa_secretaria()) { 
			$sql .= " AND upper(empresa_secretaria)  like ('%".strtoupper($obj->getEmpresa_secretaria())."%')";
		} 
		if ($obj->getEmpresa_departamento()) { 
			$sql .= " AND upper(empresa_departamento)  like ('%".strtoupper($obj->getEmpresa_departamento())."%')";
		} 
		if ($obj->getCnpj()) { 
			$sql .= " AND upper(cnpj)  like ('%".strtoupper($obj->getCnpj())."%')";
		} 
		if ($obj->getInscricao_estadual()) { 
			$sql .= " AND upper(inscricao_estadual)  like ('%".strtoupper($obj->getInscricao_estadual())."%')";
		} 
		if ($obj->getInscricao_municipal()) { 
			$sql .= " AND upper(inscricao_municipal)  like ('%".strtoupper($obj->getInscricao_municipal())."%')";
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
		if ($obj->getSite()) { 
			$sql .= " AND upper(site)  like ('%".strtoupper($obj->getSite())."%')";
		} 
		if ($obj->getLogo()) { 
			$sql .= " AND upper(logo)  like ('%".strtoupper($obj->getLogo())."%')";
		} 
		if ($obj->getResponsavel_id()) { 
			$sql .= " AND upper(responsavel_id)  like ('%".strtoupper($obj->getResponsavel_id())."%')";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setId(mysql_result($rs, 0, 'id')); 
			 $obj->setIdentificacao(mysql_result($rs, 0, 'identificacao')); 
			 $obj->setRazao_social(mysql_result($rs, 0, 'razao_social')); 
			 $obj->setEmpresa_secretaria(mysql_result($rs, 0, 'empresa_secretaria')); 
			 $obj->setEmpresa_departamento(mysql_result($rs, 0, 'empresa_departamento')); 
			 $obj->setCnpj(mysql_result($rs, 0, 'cnpj')); 
			 $obj->setInscricao_estadual(mysql_result($rs, 0, 'inscricao_estadual')); 
			 $obj->setInscricao_municipal(mysql_result($rs, 0, 'inscricao_municipal')); 
			 $obj->setEstado_federacao_id(mysql_result($rs, 0, 'estado_federacao_id')); 
			 $obj->setCidade_id(mysql_result($rs, 0, 'cidade_id')); 
			 $obj->setLogradouro(mysql_result($rs, 0, 'logradouro')); 
			 $obj->setNumero(mysql_result($rs, 0, 'numero')); 
			 $obj->setCep(mysql_result($rs, 0, 'cep')); 
			 $obj->setBairro(mysql_result($rs, 0, 'bairro')); 
			 $obj->setTelefone1(mysql_result($rs, 0, 'telefone1')); 
			 $obj->setTelefone2(mysql_result($rs, 0, 'telefone2')); 
			 $obj->setEmail(mysql_result($rs, 0, 'email')); 
			 $obj->setSite(mysql_result($rs, 0, 'site')); 
			 $obj->setLogo(mysql_result($rs, 0, 'logo')); 
			 $obj->setResponsavel_id(mysql_result($rs, 0, 'responsavel_id')); 
		} 
		 return $obj; 
	} 

	  function countAll($obj){
		 $sql = 'SELECT count(*) as existe FROM empresa WHERE 1=1 ';  


		if ($obj->getId()) { 
			$sql .= " AND id = '".$obj->getId()."'";
		} 
		if ($obj->getIdentificacao()) { 
			$sql .= " AND upper(identificacao)  like ('%".strtoupper($obj->getIdentificacao())."%')";
		} 
		if ($obj->getRazao_social()) { 
			$sql .= " AND upper(razao_social)  like ('%".strtoupper($obj->getRazao_social())."%')";
		} 
		if ($obj->getEmpresa_secretaria()) { 
			$sql .= " AND upper(empresa_secretaria)  like ('%".strtoupper($obj->getEmpresa_secretaria())."%')";
		} 
		if ($obj->getEmpresa_departamento()) { 
			$sql .= " AND upper(empresa_departamento)  like ('%".strtoupper($obj->getEmpresa_departamento())."%')";
		} 
		if ($obj->getCnpj()) { 
			$sql .= " AND upper(cnpj)  like ('%".strtoupper($obj->getCnpj())."%')";
		} 
		if ($obj->getInscricao_estadual()) { 
			$sql .= " AND upper(inscricao_estadual)  like ('%".strtoupper($obj->getInscricao_estadual())."%')";
		} 
		if ($obj->getInscricao_municipal()) { 
			$sql .= " AND upper(inscricao_municipal)  like ('%".strtoupper($obj->getInscricao_municipal())."%')";
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
		if ($obj->getSite()) { 
			$sql .= " AND upper(site)  like ('%".strtoupper($obj->getSite())."%')";
		} 
		if ($obj->getLogo()) { 
			$sql .= " AND upper(logo)  like ('%".strtoupper($obj->getLogo())."%')";
		} 
		if ($obj->getResponsavel_id()) { 
			$sql .= " AND upper(responsavel_id)  like ('%".strtoupper($obj->getResponsavel_id())."%')";
		} 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function verifica_existe($obj){
		 $sql = 'SELECT count(*) as existe FROM empresa WHERE 1=1 ';  


		 if ($obj->getId()) { 
			 $sql .= 	 "AND id = '".$obj->getId()."'";
 		 } 

 		 if ($obj->getCnpj()) {
 		 	$sql .= 	 "AND cnpj = '".$obj->getCnpj()."'";
 		 }
		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function selectAll($obj){
		 $sql = 'SELECT * FROM empresa WHERE 1=1 '; 


		if ($obj->getId()) { 
			 $sql .= " AND id = '".$obj->getId()."'";
 				} 
		if ($obj->getIdentificacao()) { 
			 $sql .= " AND upper(identificacao)  like ('%".strtoupper($obj->getIdentificacao())."%')";
 				} 
		if ($obj->getRazao_social()) { 
			 $sql .= " AND upper(razao_social)  like ('%".strtoupper($obj->getRazao_social())."%')";
 				} 
		if ($obj->getEmpresa_secretaria()) { 
			 $sql .= " AND upper(empresa_secretaria)  like ('%".strtoupper($obj->getEmpresa_secretaria())."%')";
 				} 
		if ($obj->getEmpresa_departamento()) { 
			 $sql .= " AND upper(empresa_departamento)  like ('%".strtoupper($obj->getEmpresa_departamento())."%')";
 				} 
		if ($obj->getCnpj()) { 
			 $sql .= " AND upper(cnpj)  like ('%".strtoupper($obj->getCnpj())."%')";
 				} 
		if ($obj->getInscricao_estadual()) { 
			 $sql .= " AND upper(inscricao_estadual)  like ('%".strtoupper($obj->getInscricao_estadual())."%')";
 				} 
		if ($obj->getInscricao_municipal()) { 
			 $sql .= " AND upper(inscricao_municipal)  like ('%".strtoupper($obj->getInscricao_municipal())."%')";
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
		if ($obj->getSite()) { 
			 $sql .= " AND upper(site)  like ('%".strtoupper($obj->getSite())."%')";
 				} 
		if ($obj->getLogo()) { 
			 $sql .= " AND upper(logo)  like ('%".strtoupper($obj->getLogo())."%')";
 				} 
		if ($obj->getResponsavel_id()) { 
			 $sql .= " AND upper(responsavel_id)  like ('%".strtoupper($obj->getResponsavel_id())."%')";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Empresa(); 
			 $obj->setId(mysql_result($rs, $i, 'id')); 
			 $obj->setIdentificacao(mysql_result($rs, $i, 'identificacao')); 
			 $obj->setRazao_social(mysql_result($rs, $i, 'razao_social')); 
			 $obj->setEmpresa_secretaria(mysql_result($rs, $i, 'empresa_secretaria')); 
			 $obj->setEmpresa_departamento(mysql_result($rs, $i, 'empresa_departamento')); 
			 $obj->setCnpj(mysql_result($rs, $i, 'cnpj')); 
			 $obj->setInscricao_estadual(mysql_result($rs, $i, 'inscricao_estadual')); 
			 $obj->setInscricao_municipal(mysql_result($rs, $i, 'inscricao_municipal')); 
			 $obj->setEstado_federacao_id(mysql_result($rs, $i, 'estado_federacao_id')); 
			 $obj->setCidade_id(mysql_result($rs, $i, 'cidade_id')); 
			 $obj->setLogradouro(mysql_result($rs, $i, 'logradouro')); 
			 $obj->setNumero(mysql_result($rs, $i, 'numero')); 
			 $obj->setCep(mysql_result($rs, $i, 'cep')); 
			 $obj->setBairro(mysql_result($rs, $i, 'bairro')); 
			 $obj->setTelefone1(mysql_result($rs, $i, 'telefone1')); 
			 $obj->setTelefone2(mysql_result($rs, $i, 'telefone2')); 
			 $obj->setEmail(mysql_result($rs, $i, 'email')); 
			 $obj->setSite(mysql_result($rs, $i, 'site')); 
			 $obj->setLogo(mysql_result($rs, $i, 'logo')); 
			 $obj->setResponsavel_id(mysql_result($rs, $i, 'responsavel_id')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
} 
