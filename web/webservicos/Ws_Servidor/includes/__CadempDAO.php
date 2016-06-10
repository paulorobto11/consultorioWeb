<?php 
 /** Classe responsavel pelas transacoes da Tabela: Cademp. */ 
class CadempDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO cademp ('; 
		 $sql .= 'nome_empresa,';
		 $sql .= 'empr_tipo,';
		 $sql .= 'empr_cnpj,';
		 $sql .= 'empr_insest,';
		 $sql .= 'empr_insmun,';
		 $sql .= 'enquadramento,';
		 $sql .= 'codmunic,';
		 $sql .= 'rua,';
		 $sql .= 'numero,';
		 $sql .= 'bairro,';
		 $sql .= 'complemento,';
		 $sql .= 'cidade,';
		 $sql .= 'uf,';
		 $sql .= 'cep,';
		 $sql .= 'email,';
		 $sql .= 'autorizado,';
		 $sql .= 'certificado,';
		 $sql .= 'data_inicio,';
		 $sql .= 'date_final,';
		 $sql .= 'observacao';
		 $sql .= ') VALUES ('; 
		 $sql .= '\''.$obj->getNome_empresa().'\',';
		 $sql .= ($obj->getEmpr_tipo()?$obj->getEmpr_tipo():0).',';
		 $sql .= '\''.$obj->getEmpr_cnpj().'\',';
		 $sql .= '\''.$obj->getEmpr_insest().'\',';
		 $sql .= ($obj->getEmpr_insmun()?$obj->getEmpr_insmun():0).',';
		 $sql .= ($obj->getEnquadramento()?$obj->getEnquadramento():0).',';
		 $sql .= ($obj->getCodmunic()?$obj->getCodmunic():0).',';
		 $sql .= '\''.$obj->getRua().'\',';
		 $sql .= ($obj->getNumero()?$obj->getNumero():0).',';
		 $sql .= '\''.$obj->getBairro().'\',';
		 $sql .= '\''.$obj->getComplemento().'\',';
		 $sql .= '\''.$obj->getCidade().'\',';
		 $sql .= '\''.$obj->getUf().'\',';
		 $sql .= ($obj->getCep()?$obj->getCep():0).',';
		 $sql .= '\''.$obj->getEmail().'\',';
		 $sql .= ($obj->getAutorizado()?$obj->getAutorizado():0).',';
		 $sql .= '\''.$obj->getCertificado().'\',';
		 $sql .= '\''.$obj->getData_inicio().'\',';
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
		 $sql .= 'nome_empresa = '.'\''.$obj->getNome_empresa().'\' ,';
		 $sql .= 'empr_tipo = '.($obj->getEmpr_tipo()?$obj->getEmpr_tipo():0).',';
		 $sql .= 'empr_cnpj = '.'\''.$obj->getEmpr_cnpj().'\' ,';
		 $sql .= 'empr_insest = '.'\''.$obj->getEmpr_insest().'\' ,';
		 $sql .= 'empr_insmun = '.($obj->getEmpr_insmun()?$obj->getEmpr_insmun():0).',';
		 $sql .= 'enquadramento = '.($obj->getEnquadramento()?$obj->getEnquadramento():0).',';
		 $sql .= 'codmunic = '.($obj->getCodmunic()?$obj->getCodmunic():0).',';
		 $sql .= 'rua = '.'\''.$obj->getRua().'\' ,';
		 $sql .= 'numero = '.($obj->getNumero()?$obj->getNumero():0).',';
		 $sql .= 'bairro = '.'\''.$obj->getBairro().'\' ,';
		 $sql .= 'complemento = '.'\''.$obj->getComplemento().'\' ,';
		 $sql .= 'cidade = '.'\''.$obj->getCidade().'\' ,';
		 $sql .= 'uf = '.'\''.$obj->getUf().'\' ,';
		 $sql .= 'cep = '.($obj->getCep()?$obj->getCep():0).',';
		 $sql .= 'email = '.'\''.$obj->getEmail().'\' ,';
		 $sql .= 'autorizado = '.($obj->getAutorizado()?$obj->getAutorizado():0).',';
		 $sql .= 'certificado = '.'\''.$obj->getCertificado().'\' ,';
		 $sql .= 'data_inicio = '.'\''.$obj->getData_inicio().'\' ,';
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
		if ($obj->getNome_empresa()) { 
			$sql .= " AND upper(nome_empresa)  like ('%".strtoupper($obj->getNome_empresa())."%')";
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
		if ($obj->getEmpr_insmun()) { 
			$sql .= " AND empr_insmun = '".$obj->getEmpr_insmun()."'";
		} 
		if ($obj->getEnquadramento()) { 
			$sql .= " AND enquadramento = '".$obj->getEnquadramento()."'";
		} 
		if ($obj->getCodmunic()) { 
			$sql .= " AND codmunic = '".$obj->getCodmunic()."'";
		} 
		if ($obj->getRua()) { 
			$sql .= " AND upper(rua)  like ('%".strtoupper($obj->getRua())."%')";
		} 
		if ($obj->getNumero()) { 
			$sql .= " AND numero = '".$obj->getNumero()."'";
		} 
		if ($obj->getBairro()) { 
			$sql .= " AND upper(bairro)  like ('%".strtoupper($obj->getBairro())."%')";
		} 
		if ($obj->getComplemento()) { 
			$sql .= " AND upper(complemento)  like ('%".strtoupper($obj->getComplemento())."%')";
		} 
		if ($obj->getCidade()) { 
			$sql .= " AND upper(cidade)  like ('%".strtoupper($obj->getCidade())."%')";
		} 
		if ($obj->getUf()) { 
			$sql .= " AND upper(uf)  like ('%".strtoupper($obj->getUf())."%')";
		} 
		if ($obj->getCep()) { 
			$sql .= " AND cep = '".$obj->getCep()."'";
		} 
		if ($obj->getEmail()) { 
			$sql .= " AND upper(email)  like ('%".strtoupper($obj->getEmail())."%')";
		} 
		if ($obj->getAutorizado()) { 
			$sql .= " AND autorizado = '".$obj->getAutorizado()."'";
		} 
		if ($obj->getCertificado()) { 
			$sql .= " AND upper(certificado)  like ('%".strtoupper($obj->getCertificado())."%')";
		} 
		if ($obj->getData_inicio()) { 
			$sql .= " AND data_inicio = '".$obj->getData_inicio()."'";
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
			 $obj->setNome_empresa(mysql_result($rs, 0, 'nome_empresa')); 
			 $obj->setEmpr_tipo(mysql_result($rs, 0, 'empr_tipo')); 
			 $obj->setEmpr_cnpj(mysql_result($rs, 0, 'empr_cnpj')); 
			 $obj->setEmpr_insest(mysql_result($rs, 0, 'empr_insest')); 
			 $obj->setEmpr_insmun(mysql_result($rs, 0, 'empr_insmun')); 
			 $obj->setEnquadramento(mysql_result($rs, 0, 'enquadramento')); 
			 $obj->setCodmunic(mysql_result($rs, 0, 'codmunic')); 
			 $obj->setRua(mysql_result($rs, 0, 'rua')); 
			 $obj->setNumero(mysql_result($rs, 0, 'numero')); 
			 $obj->setBairro(mysql_result($rs, 0, 'bairro')); 
			 $obj->setComplemento(mysql_result($rs, 0, 'complemento')); 
			 $obj->setCidade(mysql_result($rs, 0, 'cidade')); 
			 $obj->setUf(mysql_result($rs, 0, 'uf')); 
			 $obj->setCep(mysql_result($rs, 0, 'cep')); 
			 $obj->setEmail(mysql_result($rs, 0, 'email')); 
			 $obj->setAutorizado(mysql_result($rs, 0, 'autorizado')); 
			 $obj->setCertificado(mysql_result($rs, 0, 'certificado')); 
			 $obj->setData_inicio(mysql_result($rs, 0, 'data_inicio')); 
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
		if ($obj->getNome_empresa()) { 
			$sql .= " AND upper(nome_empresa)  like ('%".strtoupper($obj->getNome_empresa())."%')";
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
		if ($obj->getEmpr_insmun()) { 
			$sql .= " AND empr_insmun = '".$obj->getEmpr_insmun()."'";
		} 
		if ($obj->getEnquadramento()) { 
			$sql .= " AND enquadramento = '".$obj->getEnquadramento()."'";
		} 
		if ($obj->getCodmunic()) { 
			$sql .= " AND codmunic = '".$obj->getCodmunic()."'";
		} 
		if ($obj->getRua()) { 
			$sql .= " AND upper(rua)  like ('%".strtoupper($obj->getRua())."%')";
		} 
		if ($obj->getNumero()) { 
			$sql .= " AND numero = '".$obj->getNumero()."'";
		} 
		if ($obj->getBairro()) { 
			$sql .= " AND upper(bairro)  like ('%".strtoupper($obj->getBairro())."%')";
		} 
		if ($obj->getComplemento()) { 
			$sql .= " AND upper(complemento)  like ('%".strtoupper($obj->getComplemento())."%')";
		} 
		if ($obj->getCidade()) { 
			$sql .= " AND upper(cidade)  like ('%".strtoupper($obj->getCidade())."%')";
		} 
		if ($obj->getUf()) { 
			$sql .= " AND upper(uf)  like ('%".strtoupper($obj->getUf())."%')";
		} 
		if ($obj->getCep()) { 
			$sql .= " AND cep = '".$obj->getCep()."'";
		} 
		if ($obj->getEmail()) { 
			$sql .= " AND upper(email)  like ('%".strtoupper($obj->getEmail())."%')";
		} 
		if ($obj->getAutorizado()) { 
			$sql .= " AND autorizado = '".$obj->getAutorizado()."'";
		} 
		if ($obj->getCertificado()) { 
			$sql .= " AND upper(certificado)  like ('%".strtoupper($obj->getCertificado())."%')";
		} 
		if ($obj->getData_inicio()) { 
			$sql .= " AND data_inicio = '".$obj->getData_inicio()."'";
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
			$sql = 'SELECT count(*) as existe FROM cademp WHERE 1=1 ';


			if ($obj->getCodemp()) {
				$sql .= 	 "AND codemp = '".$obj->getCodemp()."'";
			}
			if ($obj->getEmpr_cnpj()) {
				$sql .= " AND empr_cnpj = '".$obj->getEmpr_cnpj()."'";
			}

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
		if ($obj->getNome_empresa()) { 
			 $sql .= " AND upper(nome_empresa)  like ('%".strtoupper($obj->getNome_empresa())."%')";
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
		if ($obj->getEmpr_insmun()) { 
			 $sql .= " AND empr_insmun = '".$obj->getEmpr_insmun()."'";
 				} 
		if ($obj->getEnquadramento()) { 
			 $sql .= " AND enquadramento = '".$obj->getEnquadramento()."'";
 				} 
		if ($obj->getCodmunic()) { 
			 $sql .= " AND codmunic = '".$obj->getCodmunic()."'";
 				} 
		if ($obj->getRua()) { 
			 $sql .= " AND upper(rua)  like ('%".strtoupper($obj->getRua())."%')";
 				} 
		if ($obj->getNumero()) { 
			 $sql .= " AND numero = '".$obj->getNumero()."'";
 				} 
		if ($obj->getBairro()) { 
			 $sql .= " AND upper(bairro)  like ('%".strtoupper($obj->getBairro())."%')";
 				} 
		if ($obj->getComplemento()) { 
			 $sql .= " AND upper(complemento)  like ('%".strtoupper($obj->getComplemento())."%')";
 				} 
		if ($obj->getCidade()) { 
			 $sql .= " AND upper(cidade)  like ('%".strtoupper($obj->getCidade())."%')";
 				} 
		if ($obj->getUf()) { 
			 $sql .= " AND upper(uf)  like ('%".strtoupper($obj->getUf())."%')";
 				} 
		if ($obj->getCep()) { 
			 $sql .= " AND cep = '".$obj->getCep()."'";
 				} 
		if ($obj->getEmail()) { 
			 $sql .= " AND upper(email)  like ('%".strtoupper($obj->getEmail())."%')";
 				} 
		if ($obj->getAutorizado()) { 
			 $sql .= " AND autorizado = '".$obj->getAutorizado()."'";
 				} 
		if ($obj->getCertificado()) { 
			 $sql .= " AND upper(certificado)  like ('%".strtoupper($obj->getCertificado())."%')";
 				} 
		if ($obj->getData_inicio()) { 
			 $sql .= " AND data_inicio = '".$obj->getData_inicio()."'";
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
			 $obj->setNome_empresa(mysql_result($rs, $i, 'nome_empresa')); 
			 $obj->setEmpr_tipo(mysql_result($rs, $i, 'empr_tipo')); 
			 $obj->setEmpr_cnpj(mysql_result($rs, $i, 'empr_cnpj')); 
			 $obj->setEmpr_insest(mysql_result($rs, $i, 'empr_insest')); 
			 $obj->setEmpr_insmun(mysql_result($rs, $i, 'empr_insmun')); 
			 $obj->setEnquadramento(mysql_result($rs, $i, 'enquadramento')); 
			 $obj->setCodmunic(mysql_result($rs, $i, 'codmunic')); 
			 $obj->setRua(mysql_result($rs, $i, 'rua')); 
			 $obj->setNumero(mysql_result($rs, $i, 'numero')); 
			 $obj->setBairro(mysql_result($rs, $i, 'bairro')); 
			 $obj->setComplemento(mysql_result($rs, $i, 'complemento')); 
			 $obj->setCidade(mysql_result($rs, $i, 'cidade')); 
			 $obj->setUf(mysql_result($rs, $i, 'uf')); 
			 $obj->setCep(mysql_result($rs, $i, 'cep')); 
			 $obj->setEmail(mysql_result($rs, $i, 'email')); 
			 $obj->setAutorizado(mysql_result($rs, $i, 'autorizado')); 
			 $obj->setCertificado(mysql_result($rs, $i, 'certificado')); 
			 $obj->setData_inicio(mysql_result($rs, $i, 'data_inicio')); 
			 $obj->setDate_final(mysql_result($rs, $i, 'date_final')); 
			 $obj->setObservacao(mysql_result($rs, $i, 'observacao')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
} 
