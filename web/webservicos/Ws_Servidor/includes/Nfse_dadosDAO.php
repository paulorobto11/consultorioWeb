<?php 
 /** Classe responsavel pelas transacoes da Tabela: Nfse_dados. */ 
class Nfse_dadosDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO nfse_dados ('; 
		 $sql .= 'rps_id,';
		 $sql .= 'cnpj,';
		 $sql .= 'infrps_numero,';
		 $sql .= 'infrps_serie,';
		 $sql .= 'infrps_tipo,';
		 $sql .= 'identrps_dtemi,';
		 $sql .= 'identrps_natureza,';
		 $sql .= 'identrps_snacional,';
		 $sql .= 'identrps_cultura,';
		 $sql .= 'identrps_status,';
		 $sql .= 'serv_vlrs_valorservicos,';
		 $sql .= 'serv_vlrs_valordeducoes,';
		 $sql .= 'serv_vlrs_valorpis,';
		 $sql .= 'serv_vlrs_valorcofins,';
		 $sql .= 'serv_vlrs_valorinss,';
		 $sql .= 'serv_vlrs_valorir,';
		 $sql .= 'serv_vlrs_valorcsll,';
		 $sql .= 'serv_vlrs_issretido,';
		 $sql .= 'serv_vlrs_valoriss,';
		 $sql .= 'serv_vlrs_basecalculo,';
		 $sql .= 'serv_vlrs_aliquota,';
		 $sql .= 'serv_vlrs_valorliquidonfse,';
		 $sql .= 'serv_ativ_itemlistaservico,';
		 $sql .= 'serv_ativ_codigocnae,';
		 $sql .= 'serv_ativ_atividade,';
		 $sql .= 'serv_ativ_discr,';
		 $sql .= 'serv_ativ_codmun,';
		 $sql .= 'prest_cnpj,';
		 $sql .= 'prest_inscrmun,';
		 $sql .= 'tomador_cpfcnpj,';
		 $sql .= 'tomador_cpf,';
		 $sql .= 'tomador_nome,';
		 $sql .= 'tomador_end_lograd,';
		 $sql .= 'tomador_end_numero,';
		 $sql .= 'tomador_end_codmun,';
		 $sql .= 'tomador_end_cep';
		 $sql .= ') VALUES ('; 
		 $sql .= ($obj->getRps_id()?$obj->getRps_id():0).',';
		 $sql .= '\''.$obj->getCnpj().'\',';
		 $sql .= ($obj->getInfrps_numero()?$obj->getInfrps_numero():0).',';
		 $sql .= '\''.$obj->getInfrps_serie().'\',';
		 $sql .= ($obj->getInfrps_tipo()?$obj->getInfrps_tipo():0).',';
		 $sql .= '\''.$obj->getIdentrps_dtemi().'\',';
		 $sql .= ($obj->getIdentrps_natureza()?$obj->getIdentrps_natureza():0).',';
		 $sql .= ($obj->getIdentrps_snacional()?$obj->getIdentrps_snacional():0).',';
		 $sql .= ($obj->getIdentrps_cultura()?$obj->getIdentrps_cultura():0).',';
		 $sql .= ($obj->getIdentrps_status()?$obj->getIdentrps_status():0).',';
		 $sql .= ($obj->getServ_vlrs_valorservicos()?$obj->getServ_vlrs_valorservicos():0).',';
		 $sql .= ($obj->getServ_vlrs_valordeducoes()?$obj->getServ_vlrs_valordeducoes():0).',';
		 $sql .= ($obj->getServ_vlrs_valorpis()?$obj->getServ_vlrs_valorpis():0).',';
		 $sql .= ($obj->getServ_vlrs_valorcofins()?$obj->getServ_vlrs_valorcofins():0).',';
		 $sql .= ($obj->getServ_vlrs_valorinss()?$obj->getServ_vlrs_valorinss():0).',';
		 $sql .= ($obj->getServ_vlrs_valorir()?$obj->getServ_vlrs_valorir():0).',';
		 $sql .= ($obj->getServ_vlrs_valorcsll()?$obj->getServ_vlrs_valorcsll():0).',';
		 $sql .= ($obj->getServ_vlrs_issretido()?$obj->getServ_vlrs_issretido():0).',';
		 $sql .= ($obj->getServ_vlrs_valoriss()?$obj->getServ_vlrs_valoriss():0).',';
		 $sql .= ($obj->getServ_vlrs_basecalculo()?$obj->getServ_vlrs_basecalculo():0).',';
		 $sql .= ($obj->getServ_vlrs_aliquota()?$obj->getServ_vlrs_aliquota():0).',';
		 $sql .= ($obj->getServ_vlrs_valorliquidonfse()?$obj->getServ_vlrs_valorliquidonfse():0).',';
		 $sql .= '\''.$obj->getServ_ativ_itemlistaservico().'\',';
		 $sql .= ($obj->getServ_ativ_codigocnae()?$obj->getServ_ativ_codigocnae():0).',';
		 $sql .= ($obj->getServ_ativ_atividade()?$obj->getServ_ativ_atividade():0).',';
		 $sql .= '\''.$obj->getServ_ativ_discr().'\',';
		 $sql .= ($obj->getServ_ativ_codmun()?$obj->getServ_ativ_codmun():0).',';
		 $sql .= '\''.$obj->getPrest_cnpj().'\',';
		 $sql .= ($obj->getPrest_inscrmun()?$obj->getPrest_inscrmun():0).',';
		 $sql .= ($obj->getTomador_cpfcnpj()?$obj->getTomador_cpfcnpj():0).',';
		 $sql .= '\''.$obj->getTomador_cpf().'\',';
		 $sql .= '\''.$obj->getTomador_nome().'\',';
		 $sql .= '\''.$obj->getTomador_end_lograd().'\',';
		 $sql .= '\''.$obj->getTomador_end_numero().'\',';
		 $sql .= ($obj->getTomador_end_codmun()?$obj->getTomador_end_codmun():0).',';
		 $sql .= ($obj->getTomador_end_cep()?$obj->getTomador_end_cep():0);
		 $sql .= ')'; 
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function update($obj){
		 $sql = 'UPDATE nfse_dados SET '; 
		 $sql .= 'rps_id = '.($obj->getRps_id()?$obj->getRps_id():0).',';
		 $sql .= 'cnpj = '.'\''.$obj->getCnpj().'\' ,';
		 $sql .= 'infrps_numero = '.($obj->getInfrps_numero()?$obj->getInfrps_numero():0).',';
		 $sql .= 'infrps_serie = '.'\''.$obj->getInfrps_serie().'\' ,';
		 $sql .= 'infrps_tipo = '.($obj->getInfrps_tipo()?$obj->getInfrps_tipo():0).',';
		 $sql .= 'identrps_dtemi = '.'\''.$obj->getIdentrps_dtemi().'\' ,';
		 $sql .= 'identrps_natureza = '.($obj->getIdentrps_natureza()?$obj->getIdentrps_natureza():0).',';
		 $sql .= 'identrps_snacional = '.($obj->getIdentrps_snacional()?$obj->getIdentrps_snacional():0).',';
		 $sql .= 'identrps_cultura = '.($obj->getIdentrps_cultura()?$obj->getIdentrps_cultura():0).',';
		 $sql .= 'identrps_status = '.($obj->getIdentrps_status()?$obj->getIdentrps_status():0).',';
		 $sql .= 'serv_vlrs_valorservicos = '.($obj->getServ_vlrs_valorservicos()?$obj->getServ_vlrs_valorservicos():0).',';
		 $sql .= 'serv_vlrs_valordeducoes = '.($obj->getServ_vlrs_valordeducoes()?$obj->getServ_vlrs_valordeducoes():0).',';
		 $sql .= 'serv_vlrs_valorpis = '.($obj->getServ_vlrs_valorpis()?$obj->getServ_vlrs_valorpis():0).',';
		 $sql .= 'serv_vlrs_valorcofins = '.($obj->getServ_vlrs_valorcofins()?$obj->getServ_vlrs_valorcofins():0).',';
		 $sql .= 'serv_vlrs_valorinss = '.($obj->getServ_vlrs_valorinss()?$obj->getServ_vlrs_valorinss():0).',';
		 $sql .= 'serv_vlrs_valorir = '.($obj->getServ_vlrs_valorir()?$obj->getServ_vlrs_valorir():0).',';
		 $sql .= 'serv_vlrs_valorcsll = '.($obj->getServ_vlrs_valorcsll()?$obj->getServ_vlrs_valorcsll():0).',';
		 $sql .= 'serv_vlrs_issretido = '.($obj->getServ_vlrs_issretido()?$obj->getServ_vlrs_issretido():0).',';
		 $sql .= 'serv_vlrs_valoriss = '.($obj->getServ_vlrs_valoriss()?$obj->getServ_vlrs_valoriss():0).',';
		 $sql .= 'serv_vlrs_basecalculo = '.($obj->getServ_vlrs_basecalculo()?$obj->getServ_vlrs_basecalculo():0).',';
		 $sql .= 'serv_vlrs_aliquota = '.($obj->getServ_vlrs_aliquota()?$obj->getServ_vlrs_aliquota():0).',';
		 $sql .= 'serv_vlrs_valorliquidonfse = '.($obj->getServ_vlrs_valorliquidonfse()?$obj->getServ_vlrs_valorliquidonfse():0).',';
		 $sql .= 'serv_ativ_itemlistaservico = '.'\''.$obj->getServ_ativ_itemlistaservico().'\' ,';
		 $sql .= 'serv_ativ_codigocnae = '.($obj->getServ_ativ_codigocnae()?$obj->getServ_ativ_codigocnae():0).',';
		 $sql .= 'serv_ativ_atividade = '.($obj->getServ_ativ_atividade()?$obj->getServ_ativ_atividade():0).',';
		 $sql .= 'serv_ativ_discr = '.'\''.$obj->getServ_ativ_discr().'\' ,';
		 $sql .= 'serv_ativ_codmun = '.($obj->getServ_ativ_codmun()?$obj->getServ_ativ_codmun():0).',';
		 $sql .= 'prest_cnpj = '.'\''.$obj->getPrest_cnpj().'\' ,';
		 $sql .= 'prest_inscrmun = '.($obj->getPrest_inscrmun()?$obj->getPrest_inscrmun():0).',';
		 $sql .= 'tomador_cpfcnpj = '.($obj->getTomador_cpfcnpj()?$obj->getTomador_cpfcnpj():0).',';
		 $sql .= 'tomador_cpf = '.'\''.$obj->getTomador_cpf().'\' ,';
		 $sql .= 'tomador_nome = '.'\''.$obj->getTomador_nome().'\' ,';
		 $sql .= 'tomador_end_lograd = '.'\''.$obj->getTomador_end_lograd().'\' ,';
		 $sql .= 'tomador_end_numero = '.'\''.$obj->getTomador_end_numero().'\' ,';
		 $sql .= 'tomador_end_codmun = '.($obj->getTomador_end_codmun()?$obj->getTomador_end_codmun():0).',';
		 $sql .= 'tomador_end_cep = '.($obj->getTomador_end_cep()?$obj->getTomador_end_cep():0);
		 $sql .= ' WHERE rps_id = '.$obj->getRps_id();
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM nfse_dados WHERE rps_id = '.$obj->getRps_id();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM nfse_dados WHERE 1=1 '; 
		if ($obj->getRps_id()) { 
			$sql .= " AND rps_id = '".$obj->getRps_id()."'";
		} 
		if ($obj->getCnpj()) { 
			$sql .= " AND cnpj = '".$obj->getCnpj()."'";
		} 
		if ($obj->getInfrps_numero()) { 
			$sql .= " AND infrps_numero = '".$obj->getInfrps_numero()."'";
		} 
		if ($obj->getInfrps_serie()) { 
			$sql .= " AND upper(infrps_serie)  like ('%".strtoupper($obj->getInfrps_serie())."%')";
		} 
		if ($obj->getInfrps_tipo()) { 
			$sql .= " AND infrps_tipo = '".$obj->getInfrps_tipo()."'";
		} 
		if ($obj->getIdentrps_dtemi()) { 
			$sql .= " AND upper(identrps_dtemi)  like ('%".strtoupper($obj->getIdentrps_dtemi())."%')";
		} 
		if ($obj->getIdentrps_natureza()) { 
			$sql .= " AND identrps_natureza = '".$obj->getIdentrps_natureza()."'";
		} 
		if ($obj->getIdentrps_snacional()) { 
			$sql .= " AND identrps_snacional = '".$obj->getIdentrps_snacional()."'";
		} 
		if ($obj->getIdentrps_cultura()) { 
			$sql .= " AND identrps_cultura = '".$obj->getIdentrps_cultura()."'";
		} 
		if ($obj->getIdentrps_status()) { 
			$sql .= " AND identrps_status = '".$obj->getIdentrps_status()."'";
		} 
		if ($obj->getServ_vlrs_valorservicos()) { 
			$sql .= " AND serv_vlrs_valorservicos = '".$obj->getServ_vlrs_valorservicos()."'";
		} 
		if ($obj->getServ_vlrs_valordeducoes()) { 
			$sql .= " AND serv_vlrs_valordeducoes = '".$obj->getServ_vlrs_valordeducoes()."'";
		} 
		if ($obj->getServ_vlrs_valorpis()) { 
			$sql .= " AND serv_vlrs_valorpis = '".$obj->getServ_vlrs_valorpis()."'";
		} 
		if ($obj->getServ_vlrs_valorcofins()) { 
			$sql .= " AND serv_vlrs_valorcofins = '".$obj->getServ_vlrs_valorcofins()."'";
		} 
		if ($obj->getServ_vlrs_valorinss()) { 
			$sql .= " AND serv_vlrs_valorinss = '".$obj->getServ_vlrs_valorinss()."'";
		} 
		if ($obj->getServ_vlrs_valorir()) { 
			$sql .= " AND serv_vlrs_valorir = '".$obj->getServ_vlrs_valorir()."'";
		} 
		if ($obj->getServ_vlrs_valorcsll()) { 
			$sql .= " AND serv_vlrs_valorcsll = '".$obj->getServ_vlrs_valorcsll()."'";
		} 
		if ($obj->getServ_vlrs_issretido()) { 
			$sql .= " AND serv_vlrs_issretido = '".$obj->getServ_vlrs_issretido()."'";
		} 
		if ($obj->getServ_vlrs_valoriss()) { 
			$sql .= " AND serv_vlrs_valoriss = '".$obj->getServ_vlrs_valoriss()."'";
		} 
		if ($obj->getServ_vlrs_basecalculo()) { 
			$sql .= " AND serv_vlrs_basecalculo = '".$obj->getServ_vlrs_basecalculo()."'";
		} 
		if ($obj->getServ_vlrs_aliquota()) { 
			$sql .= " AND serv_vlrs_aliquota = '".$obj->getServ_vlrs_aliquota()."'";
		} 
		if ($obj->getServ_vlrs_valorliquidonfse()) { 
			$sql .= " AND serv_vlrs_valorliquidonfse = '".$obj->getServ_vlrs_valorliquidonfse()."'";
		} 
		if ($obj->getServ_ativ_itemlistaservico()) { 
			$sql .= " AND upper(serv_ativ_itemlistaservico)  like ('%".strtoupper($obj->getServ_ativ_itemlistaservico())."%')";
		} 
		if ($obj->getServ_ativ_codigocnae()) { 
			$sql .= " AND serv_ativ_codigocnae = '".$obj->getServ_ativ_codigocnae()."'";
		} 
		if ($obj->getServ_ativ_atividade()) { 
			$sql .= " AND serv_ativ_atividade = '".$obj->getServ_ativ_atividade()."'";
		} 
		if ($obj->getServ_ativ_discr()) { 
			$sql .= " AND upper(serv_ativ_discr)  like ('%".strtoupper($obj->getServ_ativ_discr())."%')";
		} 
		if ($obj->getServ_ativ_codmun()) { 
			$sql .= " AND serv_ativ_codmun = '".$obj->getServ_ativ_codmun()."'";
		} 
		if ($obj->getPrest_cnpj()) { 
			$sql .= " AND prest_cnpj = '".$obj->getPrest_cnpj()."'";
		} 
		if ($obj->getPrest_inscrmun()) { 
			$sql .= " AND prest_inscrmun = '".$obj->getPrest_inscrmun()."'";
		} 
		if ($obj->getTomador_cpfcnpj()) { 
			$sql .= " AND tomador_cpfcnpj = '".$obj->getTomador_cpfcnpj()."'";
		} 
		if ($obj->getTomador_cpf()) { 
			$sql .= " AND tomador_cpf = '".$obj->getTomador_cpf()."'";
		} 
		if ($obj->getTomador_nome()) { 
			$sql .= " AND upper(tomador_nome)  like ('%".strtoupper($obj->getTomador_nome())."%')";
		} 
		if ($obj->getTomador_end_lograd()) { 
			$sql .= " AND upper(tomador_end_lograd)  like ('%".strtoupper($obj->getTomador_end_lograd())."%')";
		} 
		if ($obj->getTomador_end_numero()) { 
			$sql .= " AND upper(tomador_end_numero)  like ('%".strtoupper($obj->getTomador_end_numero())."%')";
		} 
		if ($obj->getTomador_end_codmun()) { 
			$sql .= " AND tomador_end_codmun = '".$obj->getTomador_end_codmun()."'";
		} 
		if ($obj->getTomador_end_cep()) { 
			$sql .= " AND tomador_end_cep = '".$obj->getTomador_end_cep()."'";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setRps_id(mysql_result($rs, 0, 'rps_id')); 
			 $obj->setCnpj(mysql_result($rs, 0, 'cnpj')); 
			 $obj->setInfrps_numero(mysql_result($rs, 0, 'infrps_numero')); 
			 $obj->setInfrps_serie(mysql_result($rs, 0, 'infrps_serie')); 
			 $obj->setInfrps_tipo(mysql_result($rs, 0, 'infrps_tipo')); 
			 $obj->setIdentrps_dtemi(mysql_result($rs, 0, 'identrps_dtemi')); 
			 $obj->setIdentrps_natureza(mysql_result($rs, 0, 'identrps_natureza')); 
			 $obj->setIdentrps_snacional(mysql_result($rs, 0, 'identrps_snacional')); 
			 $obj->setIdentrps_cultura(mysql_result($rs, 0, 'identrps_cultura')); 
			 $obj->setIdentrps_status(mysql_result($rs, 0, 'identrps_status')); 
			 $obj->setServ_vlrs_valorservicos(mysql_result($rs, 0, 'serv_vlrs_valorservicos')); 
			 $obj->setServ_vlrs_valordeducoes(mysql_result($rs, 0, 'serv_vlrs_valordeducoes')); 
			 $obj->setServ_vlrs_valorpis(mysql_result($rs, 0, 'serv_vlrs_valorpis')); 
			 $obj->setServ_vlrs_valorcofins(mysql_result($rs, 0, 'serv_vlrs_valorcofins')); 
			 $obj->setServ_vlrs_valorinss(mysql_result($rs, 0, 'serv_vlrs_valorinss')); 
			 $obj->setServ_vlrs_valorir(mysql_result($rs, 0, 'serv_vlrs_valorir')); 
			 $obj->setServ_vlrs_valorcsll(mysql_result($rs, 0, 'serv_vlrs_valorcsll')); 
			 $obj->setServ_vlrs_issretido(mysql_result($rs, 0, 'serv_vlrs_issretido')); 
			 $obj->setServ_vlrs_valoriss(mysql_result($rs, 0, 'serv_vlrs_valoriss')); 
			 $obj->setServ_vlrs_basecalculo(mysql_result($rs, 0, 'serv_vlrs_basecalculo')); 
			 $obj->setServ_vlrs_aliquota(mysql_result($rs, 0, 'serv_vlrs_aliquota')); 
			 $obj->setServ_vlrs_valorliquidonfse(mysql_result($rs, 0, 'serv_vlrs_valorliquidonfse')); 
			 $obj->setServ_ativ_itemlistaservico(mysql_result($rs, 0, 'serv_ativ_itemlistaservico')); 
			 $obj->setServ_ativ_codigocnae(mysql_result($rs, 0, 'serv_ativ_codigocnae')); 
			 $obj->setServ_ativ_atividade(mysql_result($rs, 0, 'serv_ativ_atividade')); 
			 $obj->setServ_ativ_discr(mysql_result($rs, 0, 'serv_ativ_discr')); 
			 $obj->setServ_ativ_codmun(mysql_result($rs, 0, 'serv_ativ_codmun')); 
			 $obj->setPrest_cnpj(mysql_result($rs, 0, 'prest_cnpj')); 
			 $obj->setPrest_inscrmun(mysql_result($rs, 0, 'prest_inscrmun')); 
			 $obj->setTomador_cpfcnpj(mysql_result($rs, 0, 'tomador_cpfcnpj')); 
			 $obj->setTomador_cpf(mysql_result($rs, 0, 'tomador_cpf')); 
			 $obj->setTomador_nome(mysql_result($rs, 0, 'tomador_nome')); 
			 $obj->setTomador_end_lograd(mysql_result($rs, 0, 'tomador_end_lograd')); 
			 $obj->setTomador_end_numero(mysql_result($rs, 0, 'tomador_end_numero')); 
			 $obj->setTomador_end_codmun(mysql_result($rs, 0, 'tomador_end_codmun')); 
			 $obj->setTomador_end_cep(mysql_result($rs, 0, 'tomador_end_cep')); 
		} 
		 return $obj; 
	} 

	  function countAll($obj){
		 $sql = 'SELECT count(*) as existe FROM nfse_dados WHERE 1=1 ';  


		if ($obj->getRps_id()) { 
			$sql .= " AND rps_id = '".$obj->getRps_id()."'";
		} 
		if ($obj->getCnpj()) { 
			$sql .= " AND cnpj = '".$obj->getCnpj()."'";
		} 
		if ($obj->getInfrps_numero()) { 
			$sql .= " AND infrps_numero = '".$obj->getInfrps_numero()."'";
		} 
		if ($obj->getInfrps_serie()) { 
			$sql .= " AND upper(infrps_serie)  like ('%".strtoupper($obj->getInfrps_serie())."%')";
		} 
		if ($obj->getInfrps_tipo()) { 
			$sql .= " AND infrps_tipo = '".$obj->getInfrps_tipo()."'";
		} 
		if ($obj->getIdentrps_dtemi()) { 
			$sql .= " AND upper(identrps_dtemi)  like ('%".strtoupper($obj->getIdentrps_dtemi())."%')";
		} 
		if ($obj->getIdentrps_natureza()) { 
			$sql .= " AND identrps_natureza = '".$obj->getIdentrps_natureza()."'";
		} 
		if ($obj->getIdentrps_snacional()) { 
			$sql .= " AND identrps_snacional = '".$obj->getIdentrps_snacional()."'";
		} 
		if ($obj->getIdentrps_cultura()) { 
			$sql .= " AND identrps_cultura = '".$obj->getIdentrps_cultura()."'";
		} 
		if ($obj->getIdentrps_status()) { 
			$sql .= " AND identrps_status = '".$obj->getIdentrps_status()."'";
		} 
		if ($obj->getServ_vlrs_valorservicos()) { 
			$sql .= " AND serv_vlrs_valorservicos = '".$obj->getServ_vlrs_valorservicos()."'";
		} 
		if ($obj->getServ_vlrs_valordeducoes()) { 
			$sql .= " AND serv_vlrs_valordeducoes = '".$obj->getServ_vlrs_valordeducoes()."'";
		} 
		if ($obj->getServ_vlrs_valorpis()) { 
			$sql .= " AND serv_vlrs_valorpis = '".$obj->getServ_vlrs_valorpis()."'";
		} 
		if ($obj->getServ_vlrs_valorcofins()) { 
			$sql .= " AND serv_vlrs_valorcofins = '".$obj->getServ_vlrs_valorcofins()."'";
		} 
		if ($obj->getServ_vlrs_valorinss()) { 
			$sql .= " AND serv_vlrs_valorinss = '".$obj->getServ_vlrs_valorinss()."'";
		} 
		if ($obj->getServ_vlrs_valorir()) { 
			$sql .= " AND serv_vlrs_valorir = '".$obj->getServ_vlrs_valorir()."'";
		} 
		if ($obj->getServ_vlrs_valorcsll()) { 
			$sql .= " AND serv_vlrs_valorcsll = '".$obj->getServ_vlrs_valorcsll()."'";
		} 
		if ($obj->getServ_vlrs_issretido()) { 
			$sql .= " AND serv_vlrs_issretido = '".$obj->getServ_vlrs_issretido()."'";
		} 
		if ($obj->getServ_vlrs_valoriss()) { 
			$sql .= " AND serv_vlrs_valoriss = '".$obj->getServ_vlrs_valoriss()."'";
		} 
		if ($obj->getServ_vlrs_basecalculo()) { 
			$sql .= " AND serv_vlrs_basecalculo = '".$obj->getServ_vlrs_basecalculo()."'";
		} 
		if ($obj->getServ_vlrs_aliquota()) { 
			$sql .= " AND serv_vlrs_aliquota = '".$obj->getServ_vlrs_aliquota()."'";
		} 
		if ($obj->getServ_vlrs_valorliquidonfse()) { 
			$sql .= " AND serv_vlrs_valorliquidonfse = '".$obj->getServ_vlrs_valorliquidonfse()."'";
		} 
		if ($obj->getServ_ativ_itemlistaservico()) { 
			$sql .= " AND upper(serv_ativ_itemlistaservico)  like ('%".strtoupper($obj->getServ_ativ_itemlistaservico())."%')";
		} 
		if ($obj->getServ_ativ_codigocnae()) { 
			$sql .= " AND serv_ativ_codigocnae = '".$obj->getServ_ativ_codigocnae()."'";
		} 
		if ($obj->getServ_ativ_atividade()) { 
			$sql .= " AND serv_ativ_atividade = '".$obj->getServ_ativ_atividade()."'";
		} 
		if ($obj->getServ_ativ_discr()) { 
			$sql .= " AND upper(serv_ativ_discr)  like ('%".strtoupper($obj->getServ_ativ_discr())."%')";
		} 
		if ($obj->getServ_ativ_codmun()) { 
			$sql .= " AND serv_ativ_codmun = '".$obj->getServ_ativ_codmun()."'";
		} 
		if ($obj->getPrest_cnpj()) { 
			$sql .= " AND prest_cnpj = '".$obj->getPrest_cnpj()."'";
		} 
		if ($obj->getPrest_inscrmun()) { 
			$sql .= " AND prest_inscrmun = '".$obj->getPrest_inscrmun()."'";
		} 
		if ($obj->getTomador_cpfcnpj()) { 
			$sql .= " AND tomador_cpfcnpj = '".$obj->getTomador_cpfcnpj()."'";
		} 
		if ($obj->getTomador_cpf()) { 
			$sql .= " AND tomador_cpf = '".$obj->getTomador_cpf()."'";
		} 
		if ($obj->getTomador_nome()) { 
			$sql .= " AND upper(tomador_nome)  like ('%".strtoupper($obj->getTomador_nome())."%')";
		} 
		if ($obj->getTomador_end_lograd()) { 
			$sql .= " AND upper(tomador_end_lograd)  like ('%".strtoupper($obj->getTomador_end_lograd())."%')";
		} 
		if ($obj->getTomador_end_numero()) { 
			$sql .= " AND upper(tomador_end_numero)  like ('%".strtoupper($obj->getTomador_end_numero())."%')";
		} 
		if ($obj->getTomador_end_codmun()) { 
			$sql .= " AND tomador_end_codmun = '".$obj->getTomador_end_codmun()."'";
		} 
		if ($obj->getTomador_end_cep()) { 
			$sql .= " AND tomador_end_cep = '".$obj->getTomador_end_cep()."'";
		} 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function verifica_existe($obj){
		 $sql = 'SELECT count(*) as existe FROM nfse_dados WHERE 1=1 ';  




		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function selectAll($obj){
		 $sql = 'SELECT * FROM nfse_dados WHERE 1=1 '; 


		if ($obj->getRps_id()) { 
			 $sql .= " AND rps_id = '".$obj->getRps_id()."'";
 				} 
		if ($obj->getCnpj()) { 
			 $sql .= " AND cnpj = '".$obj->getCnpj()."'";
 				} 
		if ($obj->getInfrps_numero()) { 
			 $sql .= " AND infrps_numero = '".$obj->getInfrps_numero()."'";
 				} 
		if ($obj->getInfrps_serie()) { 
			 $sql .= " AND upper(infrps_serie)  like ('%".strtoupper($obj->getInfrps_serie())."%')";
 				} 
		if ($obj->getInfrps_tipo()) { 
			 $sql .= " AND infrps_tipo = '".$obj->getInfrps_tipo()."'";
 				} 
		if ($obj->getIdentrps_dtemi()) { 
			 $sql .= " AND upper(identrps_dtemi)  like ('%".strtoupper($obj->getIdentrps_dtemi())."%')";
 				} 
		if ($obj->getIdentrps_natureza()) { 
			 $sql .= " AND identrps_natureza = '".$obj->getIdentrps_natureza()."'";
 				} 
		if ($obj->getIdentrps_snacional()) { 
			 $sql .= " AND identrps_snacional = '".$obj->getIdentrps_snacional()."'";
 				} 
		if ($obj->getIdentrps_cultura()) { 
			 $sql .= " AND identrps_cultura = '".$obj->getIdentrps_cultura()."'";
 				} 
		if ($obj->getIdentrps_status()) { 
			 $sql .= " AND identrps_status = '".$obj->getIdentrps_status()."'";
 				} 
		if ($obj->getServ_vlrs_valorservicos()) { 
			 $sql .= " AND serv_vlrs_valorservicos = '".$obj->getServ_vlrs_valorservicos()."'";
 				} 
		if ($obj->getServ_vlrs_valordeducoes()) { 
			 $sql .= " AND serv_vlrs_valordeducoes = '".$obj->getServ_vlrs_valordeducoes()."'";
 				} 
		if ($obj->getServ_vlrs_valorpis()) { 
			 $sql .= " AND serv_vlrs_valorpis = '".$obj->getServ_vlrs_valorpis()."'";
 				} 
		if ($obj->getServ_vlrs_valorcofins()) { 
			 $sql .= " AND serv_vlrs_valorcofins = '".$obj->getServ_vlrs_valorcofins()."'";
 				} 
		if ($obj->getServ_vlrs_valorinss()) { 
			 $sql .= " AND serv_vlrs_valorinss = '".$obj->getServ_vlrs_valorinss()."'";
 				} 
		if ($obj->getServ_vlrs_valorir()) { 
			 $sql .= " AND serv_vlrs_valorir = '".$obj->getServ_vlrs_valorir()."'";
 				} 
		if ($obj->getServ_vlrs_valorcsll()) { 
			 $sql .= " AND serv_vlrs_valorcsll = '".$obj->getServ_vlrs_valorcsll()."'";
 				} 
		if ($obj->getServ_vlrs_issretido()) { 
			 $sql .= " AND serv_vlrs_issretido = '".$obj->getServ_vlrs_issretido()."'";
 				} 
		if ($obj->getServ_vlrs_valoriss()) { 
			 $sql .= " AND serv_vlrs_valoriss = '".$obj->getServ_vlrs_valoriss()."'";
 				} 
		if ($obj->getServ_vlrs_basecalculo()) { 
			 $sql .= " AND serv_vlrs_basecalculo = '".$obj->getServ_vlrs_basecalculo()."'";
 				} 
		if ($obj->getServ_vlrs_aliquota()) { 
			 $sql .= " AND serv_vlrs_aliquota = '".$obj->getServ_vlrs_aliquota()."'";
 				} 
		if ($obj->getServ_vlrs_valorliquidonfse()) { 
			 $sql .= " AND serv_vlrs_valorliquidonfse = '".$obj->getServ_vlrs_valorliquidonfse()."'";
 				} 
		if ($obj->getServ_ativ_itemlistaservico()) { 
			 $sql .= " AND upper(serv_ativ_itemlistaservico)  like ('%".strtoupper($obj->getServ_ativ_itemlistaservico())."%')";
 				} 
		if ($obj->getServ_ativ_codigocnae()) { 
			 $sql .= " AND serv_ativ_codigocnae = '".$obj->getServ_ativ_codigocnae()."'";
 				} 
		if ($obj->getServ_ativ_atividade()) { 
			 $sql .= " AND serv_ativ_atividade = '".$obj->getServ_ativ_atividade()."'";
 				} 
		if ($obj->getServ_ativ_discr()) { 
			 $sql .= " AND upper(serv_ativ_discr)  like ('%".strtoupper($obj->getServ_ativ_discr())."%')";
 				} 
		if ($obj->getServ_ativ_codmun()) { 
			 $sql .= " AND serv_ativ_codmun = '".$obj->getServ_ativ_codmun()."'";
 				} 
		if ($obj->getPrest_cnpj()) { 
			 $sql .= " AND prest_cnpj = '".$obj->getPrest_cnpj()."'";
 				} 
		if ($obj->getPrest_inscrmun()) { 
			 $sql .= " AND prest_inscrmun = '".$obj->getPrest_inscrmun()."'";
 				} 
		if ($obj->getTomador_cpfcnpj()) { 
			 $sql .= " AND tomador_cpfcnpj = '".$obj->getTomador_cpfcnpj()."'";
 				} 
		if ($obj->getTomador_cpf()) { 
			 $sql .= " AND tomador_cpf = '".$obj->getTomador_cpf()."'";
 				} 
		if ($obj->getTomador_nome()) { 
			 $sql .= " AND upper(tomador_nome)  like ('%".strtoupper($obj->getTomador_nome())."%')";
 				} 
		if ($obj->getTomador_end_lograd()) { 
			 $sql .= " AND upper(tomador_end_lograd)  like ('%".strtoupper($obj->getTomador_end_lograd())."%')";
 				} 
		if ($obj->getTomador_end_numero()) { 
			 $sql .= " AND upper(tomador_end_numero)  like ('%".strtoupper($obj->getTomador_end_numero())."%')";
 				} 
		if ($obj->getTomador_end_codmun()) { 
			 $sql .= " AND tomador_end_codmun = '".$obj->getTomador_end_codmun()."'";
 				} 
		if ($obj->getTomador_end_cep()) { 
			 $sql .= " AND tomador_end_cep = '".$obj->getTomador_end_cep()."'";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Nfse_dados(); 
			 $obj->setRps_id(mysql_result($rs, $i, 'rps_id')); 
			 $obj->setCnpj(mysql_result($rs, $i, 'cnpj')); 
			 $obj->setInfrps_numero(mysql_result($rs, $i, 'infrps_numero')); 
			 $obj->setInfrps_serie(mysql_result($rs, $i, 'infrps_serie')); 
			 $obj->setInfrps_tipo(mysql_result($rs, $i, 'infrps_tipo')); 
			 $obj->setIdentrps_dtemi(mysql_result($rs, $i, 'identrps_dtemi')); 
			 $obj->setIdentrps_natureza(mysql_result($rs, $i, 'identrps_natureza')); 
			 $obj->setIdentrps_snacional(mysql_result($rs, $i, 'identrps_snacional')); 
			 $obj->setIdentrps_cultura(mysql_result($rs, $i, 'identrps_cultura')); 
			 $obj->setIdentrps_status(mysql_result($rs, $i, 'identrps_status')); 
			 $obj->setServ_vlrs_valorservicos(mysql_result($rs, $i, 'serv_vlrs_valorservicos')); 
			 $obj->setServ_vlrs_valordeducoes(mysql_result($rs, $i, 'serv_vlrs_valordeducoes')); 
			 $obj->setServ_vlrs_valorpis(mysql_result($rs, $i, 'serv_vlrs_valorpis')); 
			 $obj->setServ_vlrs_valorcofins(mysql_result($rs, $i, 'serv_vlrs_valorcofins')); 
			 $obj->setServ_vlrs_valorinss(mysql_result($rs, $i, 'serv_vlrs_valorinss')); 
			 $obj->setServ_vlrs_valorir(mysql_result($rs, $i, 'serv_vlrs_valorir')); 
			 $obj->setServ_vlrs_valorcsll(mysql_result($rs, $i, 'serv_vlrs_valorcsll')); 
			 $obj->setServ_vlrs_issretido(mysql_result($rs, $i, 'serv_vlrs_issretido')); 
			 $obj->setServ_vlrs_valoriss(mysql_result($rs, $i, 'serv_vlrs_valoriss')); 
			 $obj->setServ_vlrs_basecalculo(mysql_result($rs, $i, 'serv_vlrs_basecalculo')); 
			 $obj->setServ_vlrs_aliquota(mysql_result($rs, $i, 'serv_vlrs_aliquota')); 
			 $obj->setServ_vlrs_valorliquidonfse(mysql_result($rs, $i, 'serv_vlrs_valorliquidonfse')); 
			 $obj->setServ_ativ_itemlistaservico(mysql_result($rs, $i, 'serv_ativ_itemlistaservico')); 
			 $obj->setServ_ativ_codigocnae(mysql_result($rs, $i, 'serv_ativ_codigocnae')); 
			 $obj->setServ_ativ_atividade(mysql_result($rs, $i, 'serv_ativ_atividade')); 
			 $obj->setServ_ativ_discr(mysql_result($rs, $i, 'serv_ativ_discr')); 
			 $obj->setServ_ativ_codmun(mysql_result($rs, $i, 'serv_ativ_codmun')); 
			 $obj->setPrest_cnpj(mysql_result($rs, $i, 'prest_cnpj')); 
			 $obj->setPrest_inscrmun(mysql_result($rs, $i, 'prest_inscrmun')); 
			 $obj->setTomador_cpfcnpj(mysql_result($rs, $i, 'tomador_cpfcnpj')); 
			 $obj->setTomador_cpf(mysql_result($rs, $i, 'tomador_cpf')); 
			 $obj->setTomador_nome(mysql_result($rs, $i, 'tomador_nome')); 
			 $obj->setTomador_end_lograd(mysql_result($rs, $i, 'tomador_end_lograd')); 
			 $obj->setTomador_end_numero(mysql_result($rs, $i, 'tomador_end_numero')); 
			 $obj->setTomador_end_codmun(mysql_result($rs, $i, 'tomador_end_codmun')); 
			 $obj->setTomador_end_cep(mysql_result($rs, $i, 'tomador_end_cep')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
} 
