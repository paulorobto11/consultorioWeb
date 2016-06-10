<?php 
 /** Classe responsavel pelas transacoes da Tabela: Cadcli. */ 
class CadcliDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO cadcli ('; 
		 $sql .= 'codemp,';
		 $sql .= 'codcli,';
		 $sql .= 'nome_cliente,';
		 $sql .= 'cpf,';
		 $sql .= 'rg,';
		 $sql .= 'sexo,';
		 $sql .= 'dt_nacto,';
		 $sql .= 'rua,';
		 $sql .= 'numero,';
		 $sql .= 'complemento,';
		 $sql .= 'bairro,';
		 $sql .= 'cidade,';
		 $sql .= 'estado,';
		 $sql .= 'cep,';
		 $sql .= 'email,';
		 $sql .= 'telefone,';
		 $sql .= 'celular,';
		 $sql .= 'refer_nome,';
		 $sql .= 'refer_telefone,';
		 $sql .= 'refer_celular,';
		 $sql .= 'refer_parentesco,';
		 $sql .= 'refer_observacao,';
		 $sql .= 'dt_inicio,';
		 $sql .= 'dt_final,';
		 $sql .= 'limite_compras,';
		 $sql .= 'tipo_pagamento,';
		 $sql .= 'situacao,';
		 $sql .= 'foto_cliente';
		 $sql .= ') VALUES ('; 
		 $sql .= ($obj->getCodemp()?$obj->getCodemp():0).',';
		 $sql .= ($obj->getCodcli()?$obj->getCodcli():0).',';
		 $sql .= '\''.$obj->getNome_cliente().'\',';
		 $sql .= '\''.$obj->getCpf().'\',';
		 $sql .= '\''.$obj->getRg().'\',';
		 $sql .= ($obj->getSexo()?$obj->getSexo():0).',';
		 $sql .= '\''.$obj->getDt_nacto().'\',';
		 $sql .= '\''.$obj->getRua().'\',';
		 $sql .= ($obj->getNumero()?$obj->getNumero():0).',';
		 $sql .= '\''.$obj->getComplemento().'\',';
		 $sql .= '\''.$obj->getBairro().'\',';
		 $sql .= '\''.$obj->getCidade().'\',';
		 $sql .= '\''.$obj->getEstado().'\',';
		 $sql .= ($obj->getCep()?$obj->getCep():0).',';
		 $sql .= '\''.$obj->getEmail().'\',';
		 $sql .= '\''.$obj->getTelefone().'\',';
		 $sql .= '\''.$obj->getCelular().'\',';
		 $sql .= '\''.$obj->getRefer_nome().'\',';
		 $sql .= '\''.$obj->getRefer_telefone().'\',';
		 $sql .= '\''.$obj->getRefer_celular().'\',';
		 $sql .= '\''.$obj->getRefer_parentesco().'\',';
		 $sql .= '\''.$obj->getRefer_observacao().'\',';
		 $sql .= '\''.$obj->getDt_inicio().'\',';
		 $sql .= '\''.$obj->getDt_final().'\',';
		 $sql .= ($obj->getLimite_compras()?$obj->getLimite_compras():0).',';
		 $sql .= ($obj->getTipo_pagamento()?$obj->getTipo_pagamento():0).',';
		 $sql .= ($obj->getSituacao()?$obj->getSituacao():0).',';
		 $sql .= '\''.$obj->getFoto_cliente().'\'';
		 $sql .= ')'; 
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function update($obj){
		 $sql = 'UPDATE cadcli SET '; 
		 $sql .= 'codemp = '.($obj->getCodemp()?$obj->getCodemp():0).',';
		 $sql .= 'codcli = '.($obj->getCodcli()?$obj->getCodcli():0).',';
		 $sql .= 'nome_cliente = '.'\''.$obj->getNome_cliente().'\' ,';
		 $sql .= 'cpf = '.'\''.$obj->getCpf().'\' ,';
		 $sql .= 'rg = '.'\''.$obj->getRg().'\' ,';
		 $sql .= 'sexo = '.($obj->getSexo()?$obj->getSexo():0).',';
		 $sql .= 'dt_nacto = '.'\''.$obj->getDt_nacto().'\' ,';
		 $sql .= 'rua = '.'\''.$obj->getRua().'\' ,';
		 $sql .= 'numero = '.($obj->getNumero()?$obj->getNumero():0).',';
		 $sql .= 'complemento = '.'\''.$obj->getComplemento().'\' ,';
		 $sql .= 'bairro = '.'\''.$obj->getBairro().'\' ,';
		 $sql .= 'cidade = '.'\''.$obj->getCidade().'\' ,';
		 $sql .= 'estado = '.'\''.$obj->getEstado().'\' ,';
		 $sql .= 'cep = '.($obj->getCep()?$obj->getCep():0).',';
		 $sql .= 'email = '.'\''.$obj->getEmail().'\' ,';
		 $sql .= 'telefone = '.'\''.$obj->getTelefone().'\' ,';
		 $sql .= 'celular = '.'\''.$obj->getCelular().'\' ,';
		 $sql .= 'refer_nome = '.'\''.$obj->getRefer_nome().'\' ,';
		 $sql .= 'refer_telefone = '.'\''.$obj->getRefer_telefone().'\' ,';
		 $sql .= 'refer_celular = '.'\''.$obj->getRefer_celular().'\' ,';
		 $sql .= 'refer_parentesco = '.'\''.$obj->getRefer_parentesco().'\' ,';
		 $sql .= 'refer_observacao = '.'\''.$obj->getRefer_observacao().'\' ,';
		 $sql .= 'dt_inicio = '.'\''.$obj->getDt_inicio().'\' ,';
		 $sql .= 'dt_final = '.'\''.$obj->getDt_final().'\' ,';
		 $sql .= 'limite_compras = '.($obj->getLimite_compras()?$obj->getLimite_compras():0).',';
		 $sql .= 'tipo_pagamento = '.($obj->getTipo_pagamento()?$obj->getTipo_pagamento():0).',';
		 $sql .= 'situacao = '.($obj->getSituacao()?$obj->getSituacao():0).',';
		 $sql .= 'foto_cliente = '.'\''.$obj->getFoto_cliente().'\' ';
		 $sql .= ' WHERE codemp = '.$obj->getCodemp();
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM cadcli WHERE codemp = '.$obj->getCodemp();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM cadcli WHERE 1=1 '; 
		if ($obj->getCodemp()) { 
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		} 
		if ($obj->getCodcli()) { 
			$sql .= " AND codcli = '".$obj->getCodcli()."'";
		} 
		if ($obj->getNome_cliente()) { 
			$sql .= " AND upper(nome_cliente)  like ('%".strtoupper($obj->getNome_cliente())."%')";
		} 
		if ($obj->getCpf()) { 
			$sql .= " AND cpf = '".$obj->getCpf()."'";
		} 
		if ($obj->getRg()) { 
			$sql .= " AND upper(rg)  like ('%".strtoupper($obj->getRg())."%')";
		} 
		if ($obj->getSexo()) { 
			$sql .= " AND sexo = '".$obj->getSexo()."'";
		} 
		if ($obj->getDt_nacto()) { 
			$sql .= " AND dt_nacto = '".$obj->getDt_nacto()."'";
		} 
		if ($obj->getRua()) { 
			$sql .= " AND upper(rua)  like ('%".strtoupper($obj->getRua())."%')";
		} 
		if ($obj->getNumero()) { 
			$sql .= " AND numero = '".$obj->getNumero()."'";
		} 
		if ($obj->getComplemento()) { 
			$sql .= " AND upper(complemento)  like ('%".strtoupper($obj->getComplemento())."%')";
		} 
		if ($obj->getBairro()) { 
			$sql .= " AND upper(bairro)  like ('%".strtoupper($obj->getBairro())."%')";
		} 
		if ($obj->getCidade()) { 
			$sql .= " AND upper(cidade)  like ('%".strtoupper($obj->getCidade())."%')";
		} 
		if ($obj->getEstado()) { 
			$sql .= " AND upper(estado)  like ('%".strtoupper($obj->getEstado())."%')";
		} 
		if ($obj->getCep()) { 
			$sql .= " AND cep = '".$obj->getCep()."'";
		} 
		if ($obj->getEmail()) { 
			$sql .= " AND upper(email)  like ('%".strtoupper($obj->getEmail())."%')";
		} 
		if ($obj->getTelefone()) { 
			$sql .= " AND telefone = '".$obj->getTelefone()."'";
		} 
		if ($obj->getCelular()) { 
			$sql .= " AND celular = '".$obj->getCelular()."'";
		} 
		if ($obj->getRefer_nome()) { 
			$sql .= " AND upper(refer_nome)  like ('%".strtoupper($obj->getRefer_nome())."%')";
		} 
		if ($obj->getRefer_telefone()) { 
			$sql .= " AND refer_telefone = '".$obj->getRefer_telefone()."'";
		} 
		if ($obj->getRefer_celular()) { 
			$sql .= " AND refer_celular = '".$obj->getRefer_celular()."'";
		} 
		if ($obj->getRefer_parentesco()) { 
			$sql .= " AND upper(refer_parentesco)  like ('%".strtoupper($obj->getRefer_parentesco())."%')";
		} 
		if ($obj->getRefer_observacao()) { 
			$sql .= " AND upper(refer_observacao)  like ('%".strtoupper($obj->getRefer_observacao())."%')";
		} 
		if ($obj->getDt_inicio()) { 
			$sql .= " AND dt_inicio = '".$obj->getDt_inicio()."'";
		} 
		if ($obj->getDt_final()) { 
			$sql .= " AND dt_final = '".$obj->getDt_final()."'";
		} 
		if ($obj->getLimite_compras()) { 
			$sql .= " AND limite_compras = '".$obj->getLimite_compras()."'";
		} 
		if ($obj->getTipo_pagamento()) { 
			$sql .= " AND tipo_pagamento = '".$obj->getTipo_pagamento()."'";
		} 
		if ($obj->getSituacao()) { 
			$sql .= " AND situacao = '".$obj->getSituacao()."'";
		} 
		if ($obj->getFoto_cliente()) { 
			$sql .= " AND upper(foto_cliente)  like ('%".strtoupper($obj->getFoto_cliente())."%')";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setCodemp(mysql_result($rs, 0, 'codemp')); 
			 $obj->setCodcli(mysql_result($rs, 0, 'codcli')); 
			 $obj->setNome_cliente(mysql_result($rs, 0, 'nome_cliente')); 
			 $obj->setCpf(mysql_result($rs, 0, 'cpf')); 
			 $obj->setRg(mysql_result($rs, 0, 'rg')); 
			 $obj->setSexo(mysql_result($rs, 0, 'sexo')); 
			 $obj->setDt_nacto(mysql_result($rs, 0, 'dt_nacto')); 
			 $obj->setRua(mysql_result($rs, 0, 'rua')); 
			 $obj->setNumero(mysql_result($rs, 0, 'numero')); 
			 $obj->setComplemento(mysql_result($rs, 0, 'complemento')); 
			 $obj->setBairro(mysql_result($rs, 0, 'bairro')); 
			 $obj->setCidade(mysql_result($rs, 0, 'cidade')); 
			 $obj->setEstado(mysql_result($rs, 0, 'estado')); 
			 $obj->setCep(mysql_result($rs, 0, 'cep')); 
			 $obj->setEmail(mysql_result($rs, 0, 'email')); 
			 $obj->setTelefone(mysql_result($rs, 0, 'telefone')); 
			 $obj->setCelular(mysql_result($rs, 0, 'celular')); 
			 $obj->setRefer_nome(mysql_result($rs, 0, 'refer_nome')); 
			 $obj->setRefer_telefone(mysql_result($rs, 0, 'refer_telefone')); 
			 $obj->setRefer_celular(mysql_result($rs, 0, 'refer_celular')); 
			 $obj->setRefer_parentesco(mysql_result($rs, 0, 'refer_parentesco')); 
			 $obj->setRefer_observacao(mysql_result($rs, 0, 'refer_observacao')); 
			 $obj->setDt_inicio(mysql_result($rs, 0, 'dt_inicio')); 
			 $obj->setDt_final(mysql_result($rs, 0, 'dt_final')); 
			 $obj->setLimite_compras(mysql_result($rs, 0, 'limite_compras')); 
			 $obj->setTipo_pagamento(mysql_result($rs, 0, 'tipo_pagamento')); 
			 $obj->setSituacao(mysql_result($rs, 0, 'situacao')); 
			 $obj->setFoto_cliente(mysql_result($rs, 0, 'foto_cliente')); 
		} 
		 return $obj; 
	} 

	  function countAll($obj){
		 $sql = 'SELECT count(*) as existe FROM cadcli WHERE 1=1 ';  


		if ($obj->getCodemp()) { 
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		} 
		if ($obj->getCodcli()) { 
			$sql .= " AND codcli = '".$obj->getCodcli()."'";
		} 
		if ($obj->getNome_cliente()) { 
			$sql .= " AND upper(nome_cliente)  like ('%".strtoupper($obj->getNome_cliente())."%')";
		} 
		if ($obj->getCpf()) { 
			$sql .= " AND cpf = '".$obj->getCpf()."'";
		} 
		if ($obj->getRg()) { 
			$sql .= " AND upper(rg)  like ('%".strtoupper($obj->getRg())."%')";
		} 
		if ($obj->getSexo()) { 
			$sql .= " AND sexo = '".$obj->getSexo()."'";
		} 
		if ($obj->getDt_nacto()) { 
			$sql .= " AND dt_nacto = '".$obj->getDt_nacto()."'";
		} 
		if ($obj->getRua()) { 
			$sql .= " AND upper(rua)  like ('%".strtoupper($obj->getRua())."%')";
		} 
		if ($obj->getNumero()) { 
			$sql .= " AND numero = '".$obj->getNumero()."'";
		} 
		if ($obj->getComplemento()) { 
			$sql .= " AND upper(complemento)  like ('%".strtoupper($obj->getComplemento())."%')";
		} 
		if ($obj->getBairro()) { 
			$sql .= " AND upper(bairro)  like ('%".strtoupper($obj->getBairro())."%')";
		} 
		if ($obj->getCidade()) { 
			$sql .= " AND upper(cidade)  like ('%".strtoupper($obj->getCidade())."%')";
		} 
		if ($obj->getEstado()) { 
			$sql .= " AND upper(estado)  like ('%".strtoupper($obj->getEstado())."%')";
		} 
		if ($obj->getCep()) { 
			$sql .= " AND cep = '".$obj->getCep()."'";
		} 
		if ($obj->getEmail()) { 
			$sql .= " AND upper(email)  like ('%".strtoupper($obj->getEmail())."%')";
		} 
		if ($obj->getTelefone()) { 
			$sql .= " AND telefone = '".$obj->getTelefone()."'";
		} 
		if ($obj->getCelular()) { 
			$sql .= " AND celular = '".$obj->getCelular()."'";
		} 
		if ($obj->getRefer_nome()) { 
			$sql .= " AND upper(refer_nome)  like ('%".strtoupper($obj->getRefer_nome())."%')";
		} 
		if ($obj->getRefer_telefone()) { 
			$sql .= " AND refer_telefone = '".$obj->getRefer_telefone()."'";
		} 
		if ($obj->getRefer_celular()) { 
			$sql .= " AND refer_celular = '".$obj->getRefer_celular()."'";
		} 
		if ($obj->getRefer_parentesco()) { 
			$sql .= " AND upper(refer_parentesco)  like ('%".strtoupper($obj->getRefer_parentesco())."%')";
		} 
		if ($obj->getRefer_observacao()) { 
			$sql .= " AND upper(refer_observacao)  like ('%".strtoupper($obj->getRefer_observacao())."%')";
		} 
		if ($obj->getDt_inicio()) { 
			$sql .= " AND dt_inicio = '".$obj->getDt_inicio()."'";
		} 
		if ($obj->getDt_final()) { 
			$sql .= " AND dt_final = '".$obj->getDt_final()."'";
		} 
		if ($obj->getLimite_compras()) { 
			$sql .= " AND limite_compras = '".$obj->getLimite_compras()."'";
		} 
		if ($obj->getTipo_pagamento()) { 
			$sql .= " AND tipo_pagamento = '".$obj->getTipo_pagamento()."'";
		} 
		if ($obj->getSituacao()) { 
			$sql .= " AND situacao = '".$obj->getSituacao()."'";
		} 
		if ($obj->getFoto_cliente()) { 
			$sql .= " AND upper(foto_cliente)  like ('%".strtoupper($obj->getFoto_cliente())."%')";
		} 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function verifica_existe($obj){
		 $sql = 'SELECT count(*) as existe FROM cadcli WHERE 1=1 ';  


		 if ($obj->getCodcli()) { 
			 $sql .= 	 "AND codcli = '".$obj->getCodcli()."'";
 		 } 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function selectAll($obj){
		 $sql = 'SELECT * FROM cadcli WHERE 1=1 '; 


		if ($obj->getCodemp()) { 
			 $sql .= " AND codemp = '".$obj->getCodemp()."'";
 				} 
		if ($obj->getCodcli()) { 
			 $sql .= " AND codcli = '".$obj->getCodcli()."'";
 				} 
		if ($obj->getNome_cliente()) { 
			 $sql .= " AND upper(nome_cliente)  like ('%".strtoupper($obj->getNome_cliente())."%')";
 				} 
		if ($obj->getCpf()) { 
			 $sql .= " AND cpf = '".$obj->getCpf()."'";
 				} 
		if ($obj->getRg()) { 
			 $sql .= " AND upper(rg)  like ('%".strtoupper($obj->getRg())."%')";
 				} 
		if ($obj->getSexo()) { 
			 $sql .= " AND sexo = '".$obj->getSexo()."'";
 				} 
		if ($obj->getDt_nacto()) { 
			 $sql .= " AND dt_nacto = '".$obj->getDt_nacto()."'";
 				} 
		if ($obj->getRua()) { 
			 $sql .= " AND upper(rua)  like ('%".strtoupper($obj->getRua())."%')";
 				} 
		if ($obj->getNumero()) { 
			 $sql .= " AND numero = '".$obj->getNumero()."'";
 				} 
		if ($obj->getComplemento()) { 
			 $sql .= " AND upper(complemento)  like ('%".strtoupper($obj->getComplemento())."%')";
 				} 
		if ($obj->getBairro()) { 
			 $sql .= " AND upper(bairro)  like ('%".strtoupper($obj->getBairro())."%')";
 				} 
		if ($obj->getCidade()) { 
			 $sql .= " AND upper(cidade)  like ('%".strtoupper($obj->getCidade())."%')";
 				} 
		if ($obj->getEstado()) { 
			 $sql .= " AND upper(estado)  like ('%".strtoupper($obj->getEstado())."%')";
 				} 
		if ($obj->getCep()) { 
			 $sql .= " AND cep = '".$obj->getCep()."'";
 				} 
		if ($obj->getEmail()) { 
			 $sql .= " AND upper(email)  like ('%".strtoupper($obj->getEmail())."%')";
 				} 
		if ($obj->getTelefone()) { 
			 $sql .= " AND telefone = '".$obj->getTelefone()."'";
 				} 
		if ($obj->getCelular()) { 
			 $sql .= " AND celular = '".$obj->getCelular()."'";
 				} 
		if ($obj->getRefer_nome()) { 
			 $sql .= " AND upper(refer_nome)  like ('%".strtoupper($obj->getRefer_nome())."%')";
 				} 
		if ($obj->getRefer_telefone()) { 
			 $sql .= " AND refer_telefone = '".$obj->getRefer_telefone()."'";
 				} 
		if ($obj->getRefer_celular()) { 
			 $sql .= " AND refer_celular = '".$obj->getRefer_celular()."'";
 				} 
		if ($obj->getRefer_parentesco()) { 
			 $sql .= " AND upper(refer_parentesco)  like ('%".strtoupper($obj->getRefer_parentesco())."%')";
 				} 
		if ($obj->getRefer_observacao()) { 
			 $sql .= " AND upper(refer_observacao)  like ('%".strtoupper($obj->getRefer_observacao())."%')";
 				} 
		if ($obj->getDt_inicio()) { 
			 $sql .= " AND dt_inicio = '".$obj->getDt_inicio()."'";
 				} 
		if ($obj->getDt_final()) { 
			 $sql .= " AND dt_final = '".$obj->getDt_final()."'";
 				} 
		if ($obj->getLimite_compras()) { 
			 $sql .= " AND limite_compras = '".$obj->getLimite_compras()."'";
 				} 
		if ($obj->getTipo_pagamento()) { 
			 $sql .= " AND tipo_pagamento = '".$obj->getTipo_pagamento()."'";
 				} 
		if ($obj->getSituacao()) { 
			 $sql .= " AND situacao = '".$obj->getSituacao()."'";
 				} 
		if ($obj->getFoto_cliente()) { 
			 $sql .= " AND upper(foto_cliente)  like ('%".strtoupper($obj->getFoto_cliente())."%')";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Cadcli(); 
			 $obj->setCodemp(mysql_result($rs, $i, 'codemp')); 
			 $obj->setCodcli(mysql_result($rs, $i, 'codcli')); 
			 $obj->setNome_cliente(mysql_result($rs, $i, 'nome_cliente')); 
			 $obj->setCpf(mysql_result($rs, $i, 'cpf')); 
			 $obj->setRg(mysql_result($rs, $i, 'rg')); 
			 $obj->setSexo(mysql_result($rs, $i, 'sexo')); 
			 $obj->setDt_nacto(mysql_result($rs, $i, 'dt_nacto')); 
			 $obj->setRua(mysql_result($rs, $i, 'rua')); 
			 $obj->setNumero(mysql_result($rs, $i, 'numero')); 
			 $obj->setComplemento(mysql_result($rs, $i, 'complemento')); 
			 $obj->setBairro(mysql_result($rs, $i, 'bairro')); 
			 $obj->setCidade(mysql_result($rs, $i, 'cidade')); 
			 $obj->setEstado(mysql_result($rs, $i, 'estado')); 
			 $obj->setCep(mysql_result($rs, $i, 'cep')); 
			 $obj->setEmail(mysql_result($rs, $i, 'email')); 
			 $obj->setTelefone(mysql_result($rs, $i, 'telefone')); 
			 $obj->setCelular(mysql_result($rs, $i, 'celular')); 
			 $obj->setRefer_nome(mysql_result($rs, $i, 'refer_nome')); 
			 $obj->setRefer_telefone(mysql_result($rs, $i, 'refer_telefone')); 
			 $obj->setRefer_celular(mysql_result($rs, $i, 'refer_celular')); 
			 $obj->setRefer_parentesco(mysql_result($rs, $i, 'refer_parentesco')); 
			 $obj->setRefer_observacao(mysql_result($rs, $i, 'refer_observacao')); 
			 $obj->setDt_inicio(mysql_result($rs, $i, 'dt_inicio')); 
			 $obj->setDt_final(mysql_result($rs, $i, 'dt_final')); 
			 $obj->setLimite_compras(mysql_result($rs, $i, 'limite_compras')); 
			 $obj->setTipo_pagamento(mysql_result($rs, $i, 'tipo_pagamento')); 
			 $obj->setSituacao(mysql_result($rs, $i, 'situacao')); 
			 $obj->setFoto_cliente(mysql_result($rs, $i, 'foto_cliente')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
} 
