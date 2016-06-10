<?php 
 /** Classe responsavel pelas transacoes da Tabela: Cademp. */ 
class CadempDAO { 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO cademp ('; 
		 $sql .= 'nome_cliente,';
		 $sql .= 'nome_fantasia,';
		 $sql .= 'empr_tipo,';
		 $sql .= 'empr_cnpj,';
		 $sql .= 'empr_insest,';
		 $sql .= 'empr_insmun,';
		 $sql .= 'cod_cnae,';
		 $sql .= 'enquadramento,';
		 $sql .= 'codmunic,';
		 $sql .= 'RUA,';
		 $sql .= 'NUMERO,';
		 $sql .= 'BAIRRO,';
		 $sql .= 'COMPLEMENTO,';
		 $sql .= 'CIDADE,';
		 $sql .= 'UF,';
		 $sql .= 'cep,';
		 $sql .= 'email,';
		 $sql .= 'data_inicio,';
		 $sql .= 'id_acesso,';
		 $sql .= 'id_leitura,';
		 $sql .= 'id_confirma,';
		 $sql .= 'data_confirma,';
		 $sql .= 'data_pagamento,';
		 $sql .= 'data_limite,';
		 $sql .= 'date_final,';
		 $sql .= 'ambiente,';
		 $sql .= 'chk_permissao,';
		 $sql .= 'chk_nfse_local,';
		 $sql .= 'chk_formas,';
		 $sql .= 'logotipo,';
		 $sql .= 'observacao';
		 $sql .= ') VALUES ('; 
		 $sql .= '\''.$obj->getNome_cliente().'\',';
		 $sql .= '\''.$obj->getNome_fantasia().'\',';
		 $sql .= ($obj->getEmpr_tipo()?$obj->getEmpr_tipo():0).',';
		 $sql .= '\''.$obj->getEmpr_cnpj().'\',';
		 $sql .= '\''.$obj->getEmpr_insest().'\',';
		 $sql .= ($obj->getEmpr_insmun()?$obj->getEmpr_insmun():0).',';
		 $sql .= ($obj->getCod_cnae()?$obj->getCod_cnae():0).',';
		 $sql .= ($obj->getEnquadramento()?$obj->getEnquadramento():0).',';
		 $sql .= ($obj->getCodmunic()?$obj->getCodmunic():0).',';
		 $sql .= '\''.$obj->getRUA().'\',';
		 $sql .= ($obj->getNUMERO()?$obj->getNUMERO():0).',';
		 $sql .= '\''.$obj->getBAIRRO().'\',';
		 $sql .= '\''.$obj->getCOMPLEMENTO().'\',';
		 $sql .= '\''.$obj->getCIDADE().'\',';
		 $sql .= '\''.$obj->getUF().'\',';
		 $sql .= ($obj->getCep()?$obj->getCep():0).',';
		 $sql .= '\''.$obj->getEmail().'\',';
		 $sql .= '\''.$obj->getData_inicio().'\',';
		 $sql .= ($obj->getId_acesso()?$obj->getId_acesso():0).',';
		 $sql .= ($obj->getId_leitura()?$obj->getId_leitura():0).',';
		 $sql .= ($obj->getId_confirma()?$obj->getId_confirma():0).',';
		 $sql .= '\''.$obj->getData_confirma().'\',';
		 $sql .= '\''.$obj->getData_pagamento().'\',';
		 $sql .= '\''.$obj->getData_limite().'\',';
		 $sql .= '\''.$obj->getDate_final().'\',';
		 $sql .= ($obj->getAmbiente()?$obj->getAmbiente():0).',';
		 $sql .= ($obj->getChk_permissao()?$obj->getChk_permissao():0).',';
		 $sql .= ($obj->getChk_nfse_local()?$obj->getChk_nfse_local():0).',';
		 $sql .= ($obj->getChk_formas()?$obj->getChk_formas():0).',';
		 $sql .= '\''.$obj->getLogotipo().'\',';
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
		 $sql .= 'nome_fantasia = '.'\''.$obj->getNome_fantasia().'\' ,';
		 $sql .= 'empr_tipo = '.($obj->getEmpr_tipo()?$obj->getEmpr_tipo():0).',';
		 $sql .= 'empr_cnpj = '.'\''.$obj->getEmpr_cnpj().'\' ,';
		 $sql .= 'empr_insest = '.'\''.$obj->getEmpr_insest().'\' ,';
		 $sql .= 'empr_insmun = '.($obj->getEmpr_insmun()?$obj->getEmpr_insmun():0).',';
		 $sql .= 'cod_cnae = '.($obj->getCod_cnae()?$obj->getCod_cnae():0).',';
		 $sql .= 'enquadramento = '.($obj->getEnquadramento()?$obj->getEnquadramento():0).',';
		 $sql .= 'codmunic = '.($obj->getCodmunic()?$obj->getCodmunic():0).',';
		 $sql .= 'RUA = '.'\''.$obj->getRUA().'\' ,';
		 $sql .= 'NUMERO = '.($obj->getNUMERO()?$obj->getNUMERO():0).',';
		 $sql .= 'BAIRRO = '.'\''.$obj->getBAIRRO().'\' ,';
		 $sql .= 'COMPLEMENTO = '.'\''.$obj->getCOMPLEMENTO().'\' ,';
		 $sql .= 'CIDADE = '.'\''.$obj->getCIDADE().'\' ,';
		 $sql .= 'UF = '.'\''.$obj->getUF().'\' ,';
		 $sql .= 'cep = '.($obj->getCep()?$obj->getCep():0).',';
		 $sql .= 'email = '.'\''.$obj->getEmail().'\' ,';
		 $sql .= 'data_inicio = '.'\''.$obj->getData_inicio().'\' ,';
		 $sql .= 'id_acesso = '.($obj->getId_acesso()?$obj->getId_acesso():0).',';
		 $sql .= 'id_leitura = '.($obj->getId_leitura()?$obj->getId_leitura():0).',';
		 $sql .= 'id_confirma = '.($obj->getId_confirma()?$obj->getId_confirma():0).',';
		 $sql .= 'data_confirma = '.'\''.$obj->getData_confirma().'\' ,';
		 $sql .= 'data_pagamento = '.'\''.$obj->getData_pagamento().'\' ,';
		 $sql .= 'data_limite = '.'\''.$obj->getData_limite().'\' ,';
		 $sql .= 'date_final = '.'\''.$obj->getDate_final().'\' ,';
		 $sql .= 'ambiente = '.($obj->getAmbiente()?$obj->getAmbiente():0).',';
		 $sql .= 'chk_permissao = '.($obj->getChk_permissao()?$obj->getChk_permissao():0).',';
		 $sql .= 'chk_nfse_local = '.($obj->getChk_nfse_local()?$obj->getChk_nfse_local():0).',';
		 $sql .= 'chk_formas = '.($obj->getChk_formas()?$obj->getChk_formas():0).',';
		 $sql .= 'logotipo = '.'\''.$obj->getLogotipo().'\' ,';
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
		if ($obj->getNome_fantasia()) { 
			$sql .= " AND upper(nome_fantasia)  like ('%".strtoupper($obj->getNome_fantasia())."%')";
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
		if ($obj->getCod_cnae()) { 
			$sql .= " AND cod_cnae = '".$obj->getCod_cnae()."'";
		} 
		if ($obj->getEnquadramento()) { 
			$sql .= " AND enquadramento = '".$obj->getEnquadramento()."'";
		} 
		if ($obj->getCodmunic()) { 
			$sql .= " AND codmunic = '".$obj->getCodmunic()."'";
		} 
		if ($obj->getRUA()) { 
			$sql .= " AND upper(RUA)  like ('%".strtoupper($obj->getRUA())."%')";
		} 
		if ($obj->getNUMERO()) { 
			$sql .= " AND NUMERO = '".$obj->getNUMERO()."'";
		} 
		if ($obj->getBAIRRO()) { 
			$sql .= " AND upper(BAIRRO)  like ('%".strtoupper($obj->getBAIRRO())."%')";
		} 
		if ($obj->getCOMPLEMENTO()) { 
			$sql .= " AND upper(COMPLEMENTO)  like ('%".strtoupper($obj->getCOMPLEMENTO())."%')";
		} 
		if ($obj->getCIDADE()) { 
			$sql .= " AND upper(CIDADE)  like ('%".strtoupper($obj->getCIDADE())."%')";
		} 
		if ($obj->getUF()) { 
			$sql .= " AND upper(UF)  like ('%".strtoupper($obj->getUF())."%')";
		} 
		if ($obj->getCep()) { 
			$sql .= " AND cep = '".$obj->getCep()."'";
		} 
		if ($obj->getEmail()) { 
			$sql .= " AND upper(email)  like ('%".strtoupper($obj->getEmail())."%')";
		} 
		if ($obj->getData_inicio()) { 
			$sql .= " AND data_inicio = '".$obj->getData_inicio()."'";
		} 
		if ($obj->getId_acesso()) { 
			$sql .= " AND id_acesso = '".$obj->getId_acesso()."'";
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
		if ($obj->getAmbiente()) { 
			$sql .= " AND ambiente = '".$obj->getAmbiente()."'";
		} 
		if ($obj->getChk_permissao()) { 
			$sql .= " AND chk_permissao = '".$obj->getChk_permissao()."'";
		} 
		if ($obj->getChk_nfse_local()) { 
			$sql .= " AND chk_nfse_local = '".$obj->getChk_nfse_local()."'";
		} 
		if ($obj->getChk_formas()) { 
			$sql .= " AND chk_formas = '".$obj->getChk_formas()."'";
		} 
		if ($obj->getLogotipo()) { 
			$sql .= " AND upper(logotipo)  like ('%".strtoupper($obj->getLogotipo())."%')";
		} 
		if ($obj->getObservacao()) { 
			$sql .= " AND upper(observacao)  like ('%".strtoupper($obj->getObservacao())."%')";
		} 
		
		//echo "<hr>".$sql;
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setCodemp(mysql_result($rs, 0, 'codemp')); 
			 $obj->setNome_cliente(mysql_result($rs, 0, 'nome_cliente')); 
			 $obj->setNome_fantasia(mysql_result($rs, 0, 'nome_fantasia')); 
			 $obj->setEmpr_tipo(mysql_result($rs, 0, 'empr_tipo')); 
			 $obj->setEmpr_cnpj(mysql_result($rs, 0, 'empr_cnpj')); 
			 $obj->setEmpr_insest(mysql_result($rs, 0, 'empr_insest')); 
			 $obj->setEmpr_insmun(mysql_result($rs, 0, 'empr_insmun')); 
			 $obj->setCod_cnae(mysql_result($rs, 0, 'cod_cnae')); 
			 $obj->setEnquadramento(mysql_result($rs, 0, 'enquadramento')); 
			 $obj->setCodmunic(mysql_result($rs, 0, 'codmunic')); 
			 $obj->setRUA(mysql_result($rs, 0, 'RUA')); 
			 $obj->setNUMERO(mysql_result($rs, 0, 'NUMERO')); 
			 $obj->setBAIRRO(mysql_result($rs, 0, 'BAIRRO')); 
			 $obj->setCOMPLEMENTO(mysql_result($rs, 0, 'COMPLEMENTO')); 
			 $obj->setCIDADE(mysql_result($rs, 0, 'CIDADE')); 
			 $obj->setUF(mysql_result($rs, 0, 'UF')); 
			 $obj->setCep(mysql_result($rs, 0, 'cep')); 
			 $obj->setEmail(mysql_result($rs, 0, 'email')); 
			 $obj->setData_inicio(mysql_result($rs, 0, 'data_inicio')); 
			 $obj->setId_acesso(mysql_result($rs, 0, 'id_acesso')); 
			 $obj->setId_leitura(mysql_result($rs, 0, 'id_leitura')); 
			 $obj->setId_confirma(mysql_result($rs, 0, 'id_confirma')); 
			 $obj->setData_confirma(mysql_result($rs, 0, 'data_confirma')); 
			 $obj->setData_pagamento(mysql_result($rs, 0, 'data_pagamento')); 
			 $obj->setData_limite(mysql_result($rs, 0, 'data_limite')); 
			 $obj->setDate_final(mysql_result($rs, 0, 'date_final')); 
			 $obj->setAmbiente(mysql_result($rs, 0, 'ambiente')); 
			 $obj->setChk_permissao(mysql_result($rs, 0, 'chk_permissao')); 
			 $obj->setChk_nfse_local(mysql_result($rs, 0, 'chk_nfse_local')); 
			 $obj->setChk_formas(mysql_result($rs, 0, 'chk_formas')); 
			 $obj->setLogotipo(mysql_result($rs, 0, 'logotipo')); 
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
		if ($obj->getNome_fantasia()) { 
			$sql .= " AND upper(nome_fantasia)  like ('%".strtoupper($obj->getNome_fantasia())."%')";
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
		if ($obj->getCod_cnae()) { 
			$sql .= " AND cod_cnae = '".$obj->getCod_cnae()."'";
		} 
		if ($obj->getEnquadramento()) { 
			$sql .= " AND enquadramento = '".$obj->getEnquadramento()."'";
		} 
		if ($obj->getCodmunic()) { 
			$sql .= " AND codmunic = '".$obj->getCodmunic()."'";
		} 
		if ($obj->getRUA()) { 
			$sql .= " AND upper(RUA)  like ('%".strtoupper($obj->getRUA())."%')";
		} 
		if ($obj->getNUMERO()) { 
			$sql .= " AND NUMERO = '".$obj->getNUMERO()."'";
		} 
		if ($obj->getBAIRRO()) { 
			$sql .= " AND upper(BAIRRO)  like ('%".strtoupper($obj->getBAIRRO())."%')";
		} 
		if ($obj->getCOMPLEMENTO()) { 
			$sql .= " AND upper(COMPLEMENTO)  like ('%".strtoupper($obj->getCOMPLEMENTO())."%')";
		} 
		if ($obj->getCIDADE()) { 
			$sql .= " AND upper(CIDADE)  like ('%".strtoupper($obj->getCIDADE())."%')";
		} 
		if ($obj->getUF()) { 
			$sql .= " AND upper(UF)  like ('%".strtoupper($obj->getUF())."%')";
		} 
		if ($obj->getCep()) { 
			$sql .= " AND cep = '".$obj->getCep()."'";
		} 
		if ($obj->getEmail()) { 
			$sql .= " AND upper(email)  like ('%".strtoupper($obj->getEmail())."%')";
		} 
		if ($obj->getData_inicio()) { 
			$sql .= " AND data_inicio = '".$obj->getData_inicio()."'";
		} 
		if ($obj->getId_acesso()) { 
			$sql .= " AND id_acesso = '".$obj->getId_acesso()."'";
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
		if ($obj->getAmbiente()) { 
			$sql .= " AND ambiente = '".$obj->getAmbiente()."'";
		} 
		if ($obj->getChk_permissao()) { 
			$sql .= " AND chk_permissao = '".$obj->getChk_permissao()."'";
		} 
		if ($obj->getChk_nfse_local()) { 
			$sql .= " AND chk_nfse_local = '".$obj->getChk_nfse_local()."'";
		} 
		if ($obj->getChk_formas()) { 
			$sql .= " AND chk_formas = '".$obj->getChk_formas()."'";
		} 
		if ($obj->getLogotipo()) { 
			$sql .= " AND upper(logotipo)  like ('%".strtoupper($obj->getLogotipo())."%')";
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
 		 } else {
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
		if ($obj->getNome_cliente()) { 
			 $sql .= " AND upper(nome_cliente)  like ('%".strtoupper($obj->getNome_cliente())."%')";
 				} 
		if ($obj->getNome_fantasia()) { 
			 $sql .= " AND upper(nome_fantasia)  like ('%".strtoupper($obj->getNome_fantasia())."%')";
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
		if ($obj->getCod_cnae()) { 
			 $sql .= " AND cod_cnae = '".$obj->getCod_cnae()."'";
 				} 
		if ($obj->getEnquadramento()) { 
			 $sql .= " AND enquadramento = '".$obj->getEnquadramento()."'";
 				} 
		if ($obj->getCodmunic()) { 
			 $sql .= " AND codmunic = '".$obj->getCodmunic()."'";
 				} 
		if ($obj->getRUA()) { 
			 $sql .= " AND upper(RUA)  like ('%".strtoupper($obj->getRUA())."%')";
 				} 
		if ($obj->getNUMERO()) { 
			 $sql .= " AND NUMERO = '".$obj->getNUMERO()."'";
 				} 
		if ($obj->getBAIRRO()) { 
			 $sql .= " AND upper(BAIRRO)  like ('%".strtoupper($obj->getBAIRRO())."%')";
 				} 
		if ($obj->getCOMPLEMENTO()) { 
			 $sql .= " AND upper(COMPLEMENTO)  like ('%".strtoupper($obj->getCOMPLEMENTO())."%')";
 				} 
		if ($obj->getCIDADE()) { 
			 $sql .= " AND upper(CIDADE)  like ('%".strtoupper($obj->getCIDADE())."%')";
 				} 
		if ($obj->getUF()) { 
			 $sql .= " AND upper(UF)  like ('%".strtoupper($obj->getUF())."%')";
 				} 
		if ($obj->getCep()) { 
			 $sql .= " AND cep = '".$obj->getCep()."'";
 				} 
		if ($obj->getEmail()) { 
			 $sql .= " AND upper(email)  like ('%".strtoupper($obj->getEmail())."%')";
 				} 
		if ($obj->getData_inicio()) { 
			 $sql .= " AND data_inicio = '".$obj->getData_inicio()."'";
 				} 
		if ($obj->getId_acesso()) { 
			 $sql .= " AND id_acesso = '".$obj->getId_acesso()."'";
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
		if ($obj->getAmbiente()) { 
			 $sql .= " AND ambiente = '".$obj->getAmbiente()."'";
 				} 
		if ($obj->getChk_permissao()) { 
			 $sql .= " AND chk_permissao = '".$obj->getChk_permissao()."'";
 				} 
		if ($obj->getChk_nfse_local()) { 
			 $sql .= " AND chk_nfse_local = '".$obj->getChk_nfse_local()."'";
 				} 
		if ($obj->getChk_formas()) { 
			 $sql .= " AND chk_formas = '".$obj->getChk_formas()."'";
 				} 
		if ($obj->getLogotipo()) { 
			 $sql .= " AND upper(logotipo)  like ('%".strtoupper($obj->getLogotipo())."%')";
 				} 
		if ($obj->getObservacao()) { 
			 $sql .= " AND upper(observacao)  like ('%".strtoupper($obj->getObservacao())."%')";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Cademp(); 
			 $obj->setCodemp(mysql_result($rs, $i, 'codemp')); 
			 $obj->setNome_cliente(mysql_result($rs, $i, 'nome_cliente')); 
			 $obj->setNome_fantasia(mysql_result($rs, $i, 'nome_fantasia')); 
			 $obj->setEmpr_tipo(mysql_result($rs, $i, 'empr_tipo')); 
			 $obj->setEmpr_cnpj(mysql_result($rs, $i, 'empr_cnpj')); 
			 $obj->setEmpr_insest(mysql_result($rs, $i, 'empr_insest')); 
			 $obj->setEmpr_insmun(mysql_result($rs, $i, 'empr_insmun')); 
			 $obj->setCod_cnae(mysql_result($rs, $i, 'cod_cnae')); 
			 $obj->setEnquadramento(mysql_result($rs, $i, 'enquadramento')); 
			 $obj->setCodmunic(mysql_result($rs, $i, 'codmunic')); 
			 $obj->setRUA(mysql_result($rs, $i, 'RUA')); 
			 $obj->setNUMERO(mysql_result($rs, $i, 'NUMERO')); 
			 $obj->setBAIRRO(mysql_result($rs, $i, 'BAIRRO')); 
			 $obj->setCOMPLEMENTO(mysql_result($rs, $i, 'COMPLEMENTO')); 
			 $obj->setCIDADE(mysql_result($rs, $i, 'CIDADE')); 
			 $obj->setUF(mysql_result($rs, $i, 'UF')); 
			 $obj->setCep(mysql_result($rs, $i, 'cep')); 
			 $obj->setEmail(mysql_result($rs, $i, 'email')); 
			 $obj->setData_inicio(mysql_result($rs, $i, 'data_inicio')); 
			 $obj->setId_acesso(mysql_result($rs, $i, 'id_acesso')); 
			 $obj->setId_leitura(mysql_result($rs, $i, 'id_leitura')); 
			 $obj->setId_confirma(mysql_result($rs, $i, 'id_confirma')); 
			 $obj->setData_confirma(mysql_result($rs, $i, 'data_confirma')); 
			 $obj->setData_pagamento(mysql_result($rs, $i, 'data_pagamento')); 
			 $obj->setData_limite(mysql_result($rs, $i, 'data_limite')); 
			 $obj->setDate_final(mysql_result($rs, $i, 'date_final')); 
			 $obj->setAmbiente(mysql_result($rs, $i, 'ambiente')); 
			 $obj->setChk_permissao(mysql_result($rs, $i, 'chk_permissao')); 
			 $obj->setChk_nfse_local(mysql_result($rs, $i, 'chk_nfse_local')); 
			 $obj->setChk_formas(mysql_result($rs, $i, 'chk_formas')); 
			 $obj->setLogotipo(mysql_result($rs, $i, 'logotipo')); 
			 $obj->setObservacao(mysql_result($rs, $i, 'observacao')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
	 
	  function proximo($obj){
		 $sql = 'SELECT max(codemp) as existe FROM cademp WHERE 1=1 ';  
		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 
 	  function verifica_existe_codigo($obj){
		 $sql = 'SELECT count(*) as existe FROM cademp WHERE 1=1 ';  

		if ($obj->getCodemp()) { 
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		} 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 
	 

} 
