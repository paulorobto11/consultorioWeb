<?php 
 /** Classe responsavel pelas transacoes da Tabela: Nfse_lanctos_iss. */ 
class Nfse_lanctos_issDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO nfse_lanctos_iss ('; 
		 $sql .= 'codemp,';
		 $sql .= 'mes_comp,';
		 $sql .= 'ano_comp,';
		 $sql .= 'data_emissao,';
		 $sql .= 'nr_nota,';
		 $sql .= 'sr_nota,';
		 $sql .= 'cod_verificacao,';
		 $sql .= 'atividade,';
		 $sql .= 'tipo_tributacao,';
		 $sql .= 'valor_nota,';
		 $sql .= 'retencao,';
		 $sql .= 'vlr_retido,';
		 $sql .= 'valor_liquido,';
		 $sql .= 'tomador_tipo,';
		 $sql .= 'tomador_id,';
		 $sql .= 'tomador_codigo,';
		 $sql .= 'tomador_codemp,';
		 $sql .= 'tomador_inscricao,';
		 $sql .= 'tomador_local,';
		 $sql .= 'tomador_nome,';
		 $sql .= 'tomador_logradouro,';
		 $sql .= 'tomador_numero,';
		 $sql .= 'tomador_cep,';
		 $sql .= 'tomador_bairro,';
		 $sql .= 'tomador_cidade,';
		 $sql .= 'tomador_estado,';
		 $sql .= 'tomador_codmunic,';
		 $sql .= 'tomador_telefone,';
		 $sql .= 'tomador_email,';
		 $sql .= 'local_prestacao,';
		 $sql .= 'nfs_aliquota,';
		 $sql .= 'codobra,';
		 $sql .= 'artobra,';
		 $sql .= 'snacional,';
		 $sql .= 'regime,';
		 $sql .= 'natureza,';
		 $sql .= 'incentivo,';
		 $sql .= 'data_inclusao,';
		 $sql .= 'data_modificacao,';
		 $sql .= 'usuario_id,';
		 $sql .= 'nro_rps,';
		 $sql .= 'sr_rps,';
		 $sql .= 'remote_ip,';
		 $sql .= 'cod_substituicao,';
		 $sql .= 'situacao_nfs';
		 $sql .= ') VALUES ('; 
		 $sql .= ($obj->getCodemp()?$obj->getCodemp():0).',';
		 $sql .= ($obj->getMes_comp()?$obj->getMes_comp():0).',';
		 $sql .= ($obj->getAno_comp()?$obj->getAno_comp():0).',';
		 $sql .= '\''.$obj->getData_emissao().'\',';
		 $sql .= ($obj->getNr_nota()?$obj->getNr_nota():0).',';
		 $sql .= '\''.$obj->getSr_nota().'\',';
		 $sql .= ($obj->getCod_verificacao()?$obj->getCod_verificacao():0).',';
		 $sql .= ($obj->getAtividade()?$obj->getAtividade():0).',';
		 $sql .= '\''.$obj->getTipo_tributacao().'\',';
		 $sql .= ($obj->getValor_nota()?$obj->getValor_nota():0).',';
		 $sql .= ($obj->getRetencao()?$obj->getRetencao():0).',';
		 $sql .= ($obj->getVlr_retido()?$obj->getVlr_retido():0).',';
		 $sql .= ($obj->getValor_liquido()?$obj->getValor_liquido():0).',';
		 $sql .= ($obj->getTomador_tipo()?$obj->getTomador_tipo():0).',';
		 $sql .= ($obj->getTomador_id()?$obj->getTomador_id():0).',';
		 $sql .= ($obj->getTomador_codigo()?$obj->getTomador_codigo():0).',';
		 $sql .= ($obj->getTomador_codemp()?$obj->getTomador_codemp():0).',';
		 $sql .= '\''.$obj->getTomador_inscricao().'\',';
		 $sql .= '\''.$obj->getTomador_local().'\',';
		 $sql .= ($obj->getTomador_nome()?$obj->getTomador_nome():0).',';
		 $sql .= '\''.$obj->getTomador_logradouro().'\',';
		 $sql .= '\''.$obj->getTomador_numero().'\',';
		 $sql .= '\''.$obj->getTomador_cep().'\',';
		 $sql .= '\''.$obj->getTomador_bairro().'\',';
		 $sql .= '\''.$obj->getTomador_cidade().'\',';
		 $sql .= '\''.$obj->getTomador_estado().'\',';
		 $sql .= '\''.$obj->getTomador_codmunic().'\',';
		 $sql .= '\''.$obj->getTomador_telefone().'\',';
		 $sql .= '\''.$obj->getTomador_email().'\',';
		 $sql .= '\''.$obj->getLocal_prestacao().'\',';
		 $sql .= ($obj->getNfs_aliquota()?$obj->getNfs_aliquota():0).',';
		 $sql .= ($obj->getCodobra()?$obj->getCodobra():0).',';
		 $sql .= ($obj->getArtobra()?$obj->getArtobra():0).',';
		 $sql .= ($obj->getSnacional()?$obj->getSnacional():0).',';
		 $sql .= ($obj->getRegime()?$obj->getRegime():0).',';
		 $sql .= ($obj->getNatureza()?$obj->getNatureza():0).',';
		 $sql .= ($obj->getIncentivo()?$obj->getIncentivo():0).',';
		 $sql .= '\''.$obj->getData_inclusao().'\',';
		 $sql .= '\''.$obj->getData_modificacao().'\',';
		 $sql .= ($obj->getUsuario_id()?$obj->getUsuario_id():0).',';
		 $sql .= ($obj->getNro_rps()?$obj->getNro_rps():0).',';
		 $sql .= '\''.$obj->getSr_rps().'\',';
		 $sql .= ($obj->getRemote_ip()?$obj->getRemote_ip():0).',';
		 $sql .= ($obj->getCod_substituicao()?$obj->getCod_substituicao():0).',';
		 $sql .= ($obj->getSituacao_nfs()?$obj->getSituacao_nfs():0);
		 $sql .= ')'; 
		 
// 		 echo "<hr>".$sql;
// 		 exit();
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function update($obj){
		 $sql = 'UPDATE nfse_lanctos_iss SET '; 
		 $sql .= 'codemp = '.($obj->getCodemp()?$obj->getCodemp():0).',';
		 $sql .= 'mes_comp = '.($obj->getMes_comp()?$obj->getMes_comp():0).',';
		 $sql .= 'ano_comp = '.($obj->getAno_comp()?$obj->getAno_comp():0).',';
		 $sql .= 'data_emissao = '.'\''.$obj->getData_emissao().'\' ,';
		 $sql .= 'nr_nota = '.($obj->getNr_nota()?$obj->getNr_nota():0).',';
		 $sql .= 'sr_nota = '.'\''.$obj->getSr_nota().'\' ,';
		 $sql .= 'cod_verificacao = '.($obj->getCod_verificacao()?$obj->getCod_verificacao():0).',';
		 $sql .= 'atividade = '.($obj->getAtividade()?$obj->getAtividade():0).',';
		 $sql .= 'tipo_tributacao = '.'\''.$obj->getTipo_tributacao().'\' ,';
		 $sql .= 'valor_nota = '.($obj->getValor_nota()?$obj->getValor_nota():0).',';
		 $sql .= 'retencao = '.($obj->getRetencao()?$obj->getRetencao():0).',';
		 $sql .= 'vlr_retido = '.($obj->getVlr_retido()?$obj->getVlr_retido():0).',';
		 $sql .= 'valor_liquido = '.($obj->getValor_liquido()?$obj->getValor_liquido():0).',';
		 $sql .= 'tomador_tipo = '.($obj->getTomador_tipo()?$obj->getTomador_tipo():0).',';
		 $sql .= 'tomador_id = '.($obj->getTomador_id()?$obj->getTomador_id():0).',';
		 $sql .= 'tomador_codigo = '.($obj->getTomador_codigo()?$obj->getTomador_codigo():0).',';
		 $sql .= 'tomador_codemp = '.($obj->getTomador_codemp()?$obj->getTomador_codemp():0).',';
		 $sql .= 'tomador_inscricao = '.'\''.$obj->getTomador_inscricao().'\' ,';
		 $sql .= 'tomador_local = '.'\''.$obj->getTomador_local().'\' ,';
		 $sql .= 'tomador_nome = '.($obj->getTomador_nome()?$obj->getTomador_nome():0).',';
		 $sql .= 'tomador_logradouro = '.'\''.$obj->getTomador_logradouro().'\' ,';
		 $sql .= 'tomador_numero = '.'\''.$obj->getTomador_numero().'\' ,';
		 $sql .= 'tomador_cep = '.'\''.$obj->getTomador_cep().'\' ,';
		 $sql .= 'tomador_bairro = '.'\''.$obj->getTomador_bairro().'\' ,';
		 $sql .= 'tomador_cidade = '.'\''.$obj->getTomador_cidade().'\' ,';
		 $sql .= 'tomador_estado = '.'\''.$obj->getTomador_estado().'\' ,';
		 $sql .= 'tomador_codmunic = '.'\''.$obj->getTomador_codmunic().'\' ,';
		 $sql .= 'tomador_telefone = '.'\''.$obj->getTomador_telefone().'\' ,';
		 $sql .= 'tomador_email = '.'\''.$obj->getTomador_email().'\' ,';
		 $sql .= 'local_prestacao = '.'\''.$obj->getLocal_prestacao().'\' ,';
		 $sql .= 'nfs_aliquota = '.($obj->getNfs_aliquota()?$obj->getNfs_aliquota():0).',';
		 $sql .= 'codobra = '.($obj->getCodobra()?$obj->getCodobra():0).',';
		 $sql .= 'artobra = '.($obj->getArtobra()?$obj->getArtobra():0).',';
		 $sql .= 'snacional = '.($obj->getSnacional()?$obj->getSnacional():0).',';
		 $sql .= 'regime = '.($obj->getRegime()?$obj->getRegime():0).',';
		 $sql .= 'natureza = '.($obj->getNatureza()?$obj->getNatureza():0).',';
		 $sql .= 'incentivo = '.($obj->getIncentivo()?$obj->getIncentivo():0).',';
		 $sql .= 'data_inclusao = '.'\''.$obj->getData_inclusao().'\' ,';
		 $sql .= 'data_modificacao = '.'\''.$obj->getData_modificacao().'\' ,';
		 $sql .= 'usuario_id = '.($obj->getUsuario_id()?$obj->getUsuario_id():0).',';
		 $sql .= 'nro_rps = '.($obj->getNro_rps()?$obj->getNro_rps():0).',';
		 $sql .= 'sr_rps = '.($obj->getSr_rps()?$obj->getSr_rps():0).',';
		 $sql .= 'remote_ip = '.($obj->getRemote_ip()?$obj->getRemote_ip():0).',';
		 $sql .= 'cod_substituicao = '.($obj->getCod_substituicao()?$obj->getCod_substituicao():0).',';
		 $sql .= 'situacao_nfs = '.($obj->getSituacao_nfs()?$obj->getSituacao_nfs():0);
		 $sql .= ' WHERE seq_nfse = '.$obj->getSeq_nfse();
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM nfse_lanctos_iss WHERE seq_nfse = '.$obj->getSeq_nfse();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM nfse_lanctos_iss WHERE 1=1 '; 
		if ($obj->getSeq_nfse()) { 
			$sql .= " AND seq_nfse = '".$obj->getSeq_nfse()."'";
		} 
		if ($obj->getCodemp()) { 
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		} 
		if ($obj->getMes_comp()) { 
			$sql .= " AND mes_comp = '".$obj->getMes_comp()."'";
		} 
		if ($obj->getAno_comp()) { 
			$sql .= " AND ano_comp = '".$obj->getAno_comp()."'";
		} 
		if ($obj->getData_emissao()) { 
			$sql .= " AND data_emissao = '".$obj->getData_emissao()."'";
		} 
		if ($obj->getNr_nota()) { 
			$sql .= " AND nr_nota = '".$obj->getNr_nota()."'";
		} 
		if ($obj->getSr_nota()) { 
			$sql .= " AND upper(sr_nota)  like ('%".strtoupper($obj->getSr_nota())."%')";
		} 
		if ($obj->getCod_verificacao()) { 
			$sql .= " AND cod_verificacao = '".$obj->getCod_verificacao()."'";
		} 
		if ($obj->getAtividade()) { 
			$sql .= " AND atividade = '".$obj->getAtividade()."'";
		} 
		if ($obj->getTipo_tributacao()) { 
			$sql .= " AND upper(tipo_tributacao)  like ('%".strtoupper($obj->getTipo_tributacao())."%')";
		} 
		if ($obj->getValor_nota()) { 
			$sql .= " AND valor_nota = '".$obj->getValor_nota()."'";
		} 
		if ($obj->getRetencao()) { 
			$sql .= " AND retencao = '".$obj->getRetencao()."'";
		} 
		if ($obj->getVlr_retido()) { 
			$sql .= " AND vlr_retido = '".$obj->getVlr_retido()."'";
		} 
		if ($obj->getValor_liquido()) { 
			$sql .= " AND valor_liquido = '".$obj->getValor_liquido()."'";
		} 
		if ($obj->getTomador_tipo()) { 
			$sql .= " AND tomador_tipo = '".$obj->getTomador_tipo()."'";
		} 
		if ($obj->getTomador_id()) { 
			$sql .= " AND tomador_id = '".$obj->getTomador_id()."'";
		} 
		if ($obj->getTomador_codigo()) { 
			$sql .= " AND tomador_codigo = '".$obj->getTomador_codigo()."'";
		} 
		if ($obj->getTomador_codemp()) { 
			$sql .= " AND tomador_codemp = '".$obj->getTomador_codemp()."'";
		} 
		if ($obj->getTomador_inscricao()) { 
			$sql .= " AND upper(tomador_inscricao)  like ('%".strtoupper($obj->getTomador_inscricao())."%')";
		} 
		if ($obj->getTomador_local()) { 
			$sql .= " AND upper(tomador_local)  like ('%".strtoupper($obj->getTomador_local())."%')";
		} 
		if ($obj->getTomador_nome()) { 
			$sql .= " AND tomador_nome = '".$obj->getTomador_nome()."'";
		} 
		if ($obj->getTomador_logradouro()) { 
			$sql .= " AND upper(tomador_logradouro)  like ('%".strtoupper($obj->getTomador_logradouro())."%')";
		} 
		if ($obj->getTomador_numero()) { 
			$sql .= " AND upper(tomador_numero)  like ('%".strtoupper($obj->getTomador_numero())."%')";
		} 
		if ($obj->getTomador_cep()) { 
			$sql .= " AND upper(tomador_cep)  like ('%".strtoupper($obj->getTomador_cep())."%')";
		} 
		if ($obj->getTomador_bairro()) { 
			$sql .= " AND upper(tomador_bairro)  like ('%".strtoupper($obj->getTomador_bairro())."%')";
		} 
		if ($obj->getTomador_cidade()) { 
			$sql .= " AND upper(tomador_cidade)  like ('%".strtoupper($obj->getTomador_cidade())."%')";
		} 
		if ($obj->getTomador_estado()) { 
			$sql .= " AND upper(tomador_estado)  like ('%".strtoupper($obj->getTomador_estado())."%')";
		} 
		if ($obj->getTomador_codmunic()) { 
			$sql .= " AND upper(tomador_codmunic)  like ('%".strtoupper($obj->getTomador_codmunic())."%')";
		} 
		if ($obj->getTomador_telefone()) { 
			$sql .= " AND upper(tomador_telefone)  like ('%".strtoupper($obj->getTomador_telefone())."%')";
		} 
		if ($obj->getTomador_email()) { 
			$sql .= " AND upper(tomador_email)  like ('%".strtoupper($obj->getTomador_email())."%')";
		} 
		if ($obj->getLocal_prestacao()) { 
			$sql .= " AND upper(local_prestacao)  like ('%".strtoupper($obj->getLocal_prestacao())."%')";
		} 
		if ($obj->getNfs_aliquota()) { 
			$sql .= " AND nfs_aliquota = '".$obj->getNfs_aliquota()."'";
		} 
		if ($obj->getCodobra()) { 
			$sql .= " AND codobra = '".$obj->getCodobra()."'";
		} 
		if ($obj->getArtobra()) { 
			$sql .= " AND artobra = '".$obj->getArtobra()."'";
		} 
		if ($obj->getSnacional()) { 
			$sql .= " AND snacional = '".$obj->getSnacional()."'";
		} 
		if ($obj->getRegime()) { 
			$sql .= " AND regime = '".$obj->getRegime()."'";
		} 
		if ($obj->getNatureza()) { 
			$sql .= " AND natureza = '".$obj->getNatureza()."'";
		} 
		if ($obj->getIncentivo()) { 
			$sql .= " AND incentivo = '".$obj->getIncentivo()."'";
		} 
		if ($obj->getData_inclusao()) { 
			$sql .= " AND data_inclusao = '".$obj->getData_inclusao()."'";
		} 
		if ($obj->getData_modificacao()) { 
			$sql .= " AND data_modificacao = '".$obj->getData_modificacao()."'";
		} 
		if ($obj->getUsuario_id()) { 
			$sql .= " AND usuario_id = '".$obj->getUsuario_id()."'";
		} 
		if ($obj->getNro_rps()) { 
			$sql .= " AND nro_rps = '".$obj->getNro_rps()."'";
		} 
		if ($obj->getSr_rps()) { 
			$sql .= " AND sr_rps = '".$obj->getSr_rps()."'";
		} 
		if ($obj->getRemote_ip()) { 
			$sql .= " AND remote_ip = '".$obj->getRemote_ip()."'";
		} 
		if ($obj->getCod_substituicao()) { 
			$sql .= " AND cod_substituicao = '".$obj->getCod_substituicao()."'";
		} 
		if ($obj->getSituacao_nfs()) { 
			$sql .= " AND situacao_nfs = '".$obj->getSituacao_nfs()."'";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setSeq_nfse(mysql_result($rs, 0, 'seq_nfse')); 
			 $obj->setCodemp(mysql_result($rs, 0, 'codemp')); 
			 $obj->setMes_comp(mysql_result($rs, 0, 'mes_comp')); 
			 $obj->setAno_comp(mysql_result($rs, 0, 'ano_comp')); 
			 $obj->setData_emissao(mysql_result($rs, 0, 'data_emissao')); 
			 $obj->setNr_nota(mysql_result($rs, 0, 'nr_nota')); 
			 $obj->setSr_nota(mysql_result($rs, 0, 'sr_nota')); 
			 $obj->setCod_verificacao(mysql_result($rs, 0, 'cod_verificacao')); 
			 $obj->setAtividade(mysql_result($rs, 0, 'atividade')); 
			 $obj->setTipo_tributacao(mysql_result($rs, 0, 'tipo_tributacao')); 
			 $obj->setValor_nota(mysql_result($rs, 0, 'valor_nota')); 
			 $obj->setRetencao(mysql_result($rs, 0, 'retencao')); 
			 $obj->setVlr_retido(mysql_result($rs, 0, 'vlr_retido')); 
			 $obj->setValor_liquido(mysql_result($rs, 0, 'valor_liquido')); 
			 $obj->setTomador_tipo(mysql_result($rs, 0, 'tomador_tipo')); 
			 $obj->setTomador_id(mysql_result($rs, 0, 'tomador_id')); 
			 $obj->setTomador_codigo(mysql_result($rs, 0, 'tomador_codigo')); 
			 $obj->setTomador_codemp(mysql_result($rs, 0, 'tomador_codemp')); 
			 $obj->setTomador_inscricao(mysql_result($rs, 0, 'tomador_inscricao')); 
			 $obj->setTomador_local(mysql_result($rs, 0, 'tomador_local')); 
			 $obj->setTomador_nome(mysql_result($rs, 0, 'tomador_nome')); 
			 $obj->setTomador_logradouro(mysql_result($rs, 0, 'tomador_logradouro')); 
			 $obj->setTomador_numero(mysql_result($rs, 0, 'tomador_numero')); 
			 $obj->setTomador_cep(mysql_result($rs, 0, 'tomador_cep')); 
			 $obj->setTomador_bairro(mysql_result($rs, 0, 'tomador_bairro')); 
			 $obj->setTomador_cidade(mysql_result($rs, 0, 'tomador_cidade')); 
			 $obj->setTomador_estado(mysql_result($rs, 0, 'tomador_estado')); 
			 $obj->setTomador_codmunic(mysql_result($rs, 0, 'tomador_codmunic')); 
			 $obj->setTomador_telefone(mysql_result($rs, 0, 'tomador_telefone')); 
			 $obj->setTomador_email(mysql_result($rs, 0, 'tomador_email')); 
			 $obj->setLocal_prestacao(mysql_result($rs, 0, 'local_prestacao')); 
			 $obj->setNfs_aliquota(mysql_result($rs, 0, 'nfs_aliquota')); 
			 $obj->setCodobra(mysql_result($rs, 0, 'codobra')); 
			 $obj->setArtobra(mysql_result($rs, 0, 'artobra')); 
			 $obj->setSnacional(mysql_result($rs, 0, 'snacional')); 
			 $obj->setRegime(mysql_result($rs, 0, 'regime')); 
			 $obj->setNatureza(mysql_result($rs, 0, 'natureza')); 
			 $obj->setIncentivo(mysql_result($rs, 0, 'incentivo')); 
			 $obj->setData_inclusao(mysql_result($rs, 0, 'data_inclusao')); 
			 $obj->setData_modificacao(mysql_result($rs, 0, 'data_modificacao')); 
			 $obj->setUsuario_id(mysql_result($rs, 0, 'usuario_id')); 
			 $obj->setNro_rps(mysql_result($rs, 0, 'nro_rps')); 
			 $obj->setSr_rps(mysql_result($rs, 0, 'sr_rps')); 
			 $obj->setRemote_ip(mysql_result($rs, 0, 'remote_ip')); 
			 $obj->setCod_substituicao(mysql_result($rs, 0, 'cod_substituicao')); 
			 $obj->setSituacao_nfs(mysql_result($rs, 0, 'situacao_nfs')); 
		} 
		 return $obj; 
	} 

	  function countAll($obj){
		 $sql = 'SELECT count(*) as existe FROM nfse_lanctos_iss WHERE 1=1 ';  


		if ($obj->getSeq_nfse()) { 
			$sql .= " AND seq_nfse = '".$obj->getSeq_nfse()."'";
		} 
		if ($obj->getCodemp()) { 
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		} 
		if ($obj->getMes_comp()) { 
			$sql .= " AND mes_comp = '".$obj->getMes_comp()."'";
		} 
		if ($obj->getAno_comp()) { 
			$sql .= " AND ano_comp = '".$obj->getAno_comp()."'";
		} 
		if ($obj->getData_emissao()) { 
			$sql .= " AND data_emissao = '".$obj->getData_emissao()."'";
		} 
		if ($obj->getNr_nota()) { 
			$sql .= " AND nr_nota = '".$obj->getNr_nota()."'";
		} 
		if ($obj->getSr_nota()) { 
			$sql .= " AND upper(sr_nota)  like ('%".strtoupper($obj->getSr_nota())."%')";
		} 
		if ($obj->getCod_verificacao()) { 
			$sql .= " AND cod_verificacao = '".$obj->getCod_verificacao()."'";
		} 
		if ($obj->getAtividade()) { 
			$sql .= " AND atividade = '".$obj->getAtividade()."'";
		} 
		if ($obj->getTipo_tributacao()) { 
			$sql .= " AND upper(tipo_tributacao)  like ('%".strtoupper($obj->getTipo_tributacao())."%')";
		} 
		if ($obj->getValor_nota()) { 
			$sql .= " AND valor_nota = '".$obj->getValor_nota()."'";
		} 
		if ($obj->getRetencao()) { 
			$sql .= " AND retencao = '".$obj->getRetencao()."'";
		} 
		if ($obj->getVlr_retido()) { 
			$sql .= " AND vlr_retido = '".$obj->getVlr_retido()."'";
		} 
		if ($obj->getValor_liquido()) { 
			$sql .= " AND valor_liquido = '".$obj->getValor_liquido()."'";
		} 
		if ($obj->getTomador_tipo()) { 
			$sql .= " AND tomador_tipo = '".$obj->getTomador_tipo()."'";
		} 
		if ($obj->getTomador_id()) { 
			$sql .= " AND tomador_id = '".$obj->getTomador_id()."'";
		} 
		if ($obj->getTomador_codigo()) { 
			$sql .= " AND tomador_codigo = '".$obj->getTomador_codigo()."'";
		} 
		if ($obj->getTomador_codemp()) { 
			$sql .= " AND tomador_codemp = '".$obj->getTomador_codemp()."'";
		} 
		if ($obj->getTomador_inscricao()) { 
			$sql .= " AND upper(tomador_inscricao)  like ('%".strtoupper($obj->getTomador_inscricao())."%')";
		} 
		if ($obj->getTomador_local()) { 
			$sql .= " AND upper(tomador_local)  like ('%".strtoupper($obj->getTomador_local())."%')";
		} 
		if ($obj->getTomador_nome()) { 
			$sql .= " AND tomador_nome = '".$obj->getTomador_nome()."'";
		} 
		if ($obj->getTomador_logradouro()) { 
			$sql .= " AND upper(tomador_logradouro)  like ('%".strtoupper($obj->getTomador_logradouro())."%')";
		} 
		if ($obj->getTomador_numero()) { 
			$sql .= " AND upper(tomador_numero)  like ('%".strtoupper($obj->getTomador_numero())."%')";
		} 
		if ($obj->getTomador_cep()) { 
			$sql .= " AND upper(tomador_cep)  like ('%".strtoupper($obj->getTomador_cep())."%')";
		} 
		if ($obj->getTomador_bairro()) { 
			$sql .= " AND upper(tomador_bairro)  like ('%".strtoupper($obj->getTomador_bairro())."%')";
		} 
		if ($obj->getTomador_cidade()) { 
			$sql .= " AND upper(tomador_cidade)  like ('%".strtoupper($obj->getTomador_cidade())."%')";
		} 
		if ($obj->getTomador_estado()) { 
			$sql .= " AND upper(tomador_estado)  like ('%".strtoupper($obj->getTomador_estado())."%')";
		} 
		if ($obj->getTomador_codmunic()) { 
			$sql .= " AND upper(tomador_codmunic)  like ('%".strtoupper($obj->getTomador_codmunic())."%')";
		} 
		if ($obj->getTomador_telefone()) { 
			$sql .= " AND upper(tomador_telefone)  like ('%".strtoupper($obj->getTomador_telefone())."%')";
		} 
		if ($obj->getTomador_email()) { 
			$sql .= " AND upper(tomador_email)  like ('%".strtoupper($obj->getTomador_email())."%')";
		} 
		if ($obj->getLocal_prestacao()) { 
			$sql .= " AND upper(local_prestacao)  like ('%".strtoupper($obj->getLocal_prestacao())."%')";
		} 
		if ($obj->getNfs_aliquota()) { 
			$sql .= " AND nfs_aliquota = '".$obj->getNfs_aliquota()."'";
		} 
		if ($obj->getCodobra()) { 
			$sql .= " AND codobra = '".$obj->getCodobra()."'";
		} 
		if ($obj->getArtobra()) { 
			$sql .= " AND artobra = '".$obj->getArtobra()."'";
		} 
		if ($obj->getSnacional()) { 
			$sql .= " AND snacional = '".$obj->getSnacional()."'";
		} 
		if ($obj->getRegime()) { 
			$sql .= " AND regime = '".$obj->getRegime()."'";
		} 
		if ($obj->getNatureza()) { 
			$sql .= " AND natureza = '".$obj->getNatureza()."'";
		} 
		if ($obj->getIncentivo()) { 
			$sql .= " AND incentivo = '".$obj->getIncentivo()."'";
		} 
		if ($obj->getData_inclusao()) { 
			$sql .= " AND data_inclusao = '".$obj->getData_inclusao()."'";
		} 
		if ($obj->getData_modificacao()) { 
			$sql .= " AND data_modificacao = '".$obj->getData_modificacao()."'";
		} 
		if ($obj->getUsuario_id()) { 
			$sql .= " AND usuario_id = '".$obj->getUsuario_id()."'";
		} 
		if ($obj->getNro_rps()) { 
			$sql .= " AND nro_rps = '".$obj->getNro_rps()."'";
		} 
		if ($obj->getSr_rps()) { 
			$sql .= " AND sr_rps = '".$obj->getSr_rps()."'";
		} 
		if ($obj->getRemote_ip()) { 
			$sql .= " AND remote_ip = '".$obj->getRemote_ip()."'";
		} 
		if ($obj->getCod_substituicao()) { 
			$sql .= " AND cod_substituicao = '".$obj->getCod_substituicao()."'";
		} 
		if ($obj->getSituacao_nfs()) { 
			$sql .= " AND situacao_nfs = '".$obj->getSituacao_nfs()."'";
		} 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 

		function busca_id_nota() {
			$sql = 'SELECT max(seq_nfse) as seq_nfse FROM nfse_lanctos_iss';
			$query = mysql_query($sql);
			$dados = mysql_fetch_assoc($query);
			$seq = $dados['seq_nfse'];
			$seq++;
			return $seq;
		}
		function busca_seq_nota($empresa) {
			$sql = 'SELECT max(nr_nota) as nr_nota FROM nfse_lanctos_iss WHERE codemp = '.$empresa;
			$query = mysql_query($sql);
			$dados = mysql_fetch_assoc($query);
			$seq = $dados['nr_nota'];
			$seq++;
			return $seq;
		}
		
		function busca_seq_verificacao() {
			$sql = 'SELECT max(cod_verificacao) as cod_verificacao FROM nfse_lanctos_iss';
			$query = mysql_query($sql);
			$dados = mysql_fetch_assoc($query);
			$seq = $dados['cod_verificacao'];
			if (empty($seq)) {
				$seq = '345123456';
			}
			 
			$seq++;
			return $seq;
		}
		
 	  function verifica_existe($obj){
		 $sql = 'SELECT count(*) as existe FROM nfse_lanctos_iss WHERE 1=1 ';  


		 if ($obj->getSeq_nfse()) { 
			 $sql .= 	 "AND seq_nfse = '".$obj->getSeq_nfse()."'";
 		 } 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function selectAll($obj){
		 $sql = 'SELECT * FROM nfse_lanctos_iss WHERE 1=1 '; 


		if ($obj->getSeq_nfse()) { 
			 $sql .= " AND seq_nfse = '".$obj->getSeq_nfse()."'";
 				} 
		if ($obj->getCodemp()) { 
			 $sql .= " AND codemp = '".$obj->getCodemp()."'";
 				} 
		if ($obj->getMes_comp()) { 
			 $sql .= " AND mes_comp = '".$obj->getMes_comp()."'";
 				} 
		if ($obj->getAno_comp()) { 
			 $sql .= " AND ano_comp = '".$obj->getAno_comp()."'";
 				} 
		if ($obj->getData_emissao()) { 
			 $sql .= " AND data_emissao = '".$obj->getData_emissao()."'";
 				} 
		if ($obj->getNr_nota()) { 
			 $sql .= " AND nr_nota = '".$obj->getNr_nota()."'";
 				} 
		if ($obj->getSr_nota()) { 
			 $sql .= " AND upper(sr_nota)  like ('%".strtoupper($obj->getSr_nota())."%')";
 				} 
		if ($obj->getCod_verificacao()) { 
			 $sql .= " AND cod_verificacao = '".$obj->getCod_verificacao()."'";
 				} 
		if ($obj->getAtividade()) { 
			 $sql .= " AND atividade = '".$obj->getAtividade()."'";
 				} 
		if ($obj->getTipo_tributacao()) { 
			 $sql .= " AND upper(tipo_tributacao)  like ('%".strtoupper($obj->getTipo_tributacao())."%')";
 				} 
		if ($obj->getValor_nota()) { 
			 $sql .= " AND valor_nota = '".$obj->getValor_nota()."'";
 				} 
		if ($obj->getRetencao()) { 
			 $sql .= " AND retencao = '".$obj->getRetencao()."'";
 				} 
		if ($obj->getVlr_retido()) { 
			 $sql .= " AND vlr_retido = '".$obj->getVlr_retido()."'";
 				} 
		if ($obj->getValor_liquido()) { 
			 $sql .= " AND valor_liquido = '".$obj->getValor_liquido()."'";
 				} 
		if ($obj->getTomador_tipo()) { 
			 $sql .= " AND tomador_tipo = '".$obj->getTomador_tipo()."'";
 				} 
		if ($obj->getTomador_id()) { 
			 $sql .= " AND tomador_id = '".$obj->getTomador_id()."'";
 				} 
		if ($obj->getTomador_codigo()) { 
			 $sql .= " AND tomador_codigo = '".$obj->getTomador_codigo()."'";
 				} 
		if ($obj->getTomador_codemp()) { 
			 $sql .= " AND tomador_codemp = '".$obj->getTomador_codemp()."'";
 				} 
		if ($obj->getTomador_inscricao()) { 
			 $sql .= " AND upper(tomador_inscricao)  like ('%".strtoupper($obj->getTomador_inscricao())."%')";
 				} 
		if ($obj->getTomador_local()) { 
			 $sql .= " AND upper(tomador_local)  like ('%".strtoupper($obj->getTomador_local())."%')";
 				} 
		if ($obj->getTomador_nome()) { 
			 $sql .= " AND tomador_nome = '".$obj->getTomador_nome()."'";
 				} 
		if ($obj->getTomador_logradouro()) { 
			 $sql .= " AND upper(tomador_logradouro)  like ('%".strtoupper($obj->getTomador_logradouro())."%')";
 				} 
		if ($obj->getTomador_numero()) { 
			 $sql .= " AND upper(tomador_numero)  like ('%".strtoupper($obj->getTomador_numero())."%')";
 				} 
		if ($obj->getTomador_cep()) { 
			 $sql .= " AND upper(tomador_cep)  like ('%".strtoupper($obj->getTomador_cep())."%')";
 				} 
		if ($obj->getTomador_bairro()) { 
			 $sql .= " AND upper(tomador_bairro)  like ('%".strtoupper($obj->getTomador_bairro())."%')";
 				} 
		if ($obj->getTomador_cidade()) { 
			 $sql .= " AND upper(tomador_cidade)  like ('%".strtoupper($obj->getTomador_cidade())."%')";
 				} 
		if ($obj->getTomador_estado()) { 
			 $sql .= " AND upper(tomador_estado)  like ('%".strtoupper($obj->getTomador_estado())."%')";
 				} 
		if ($obj->getTomador_codmunic()) { 
			 $sql .= " AND upper(tomador_codmunic)  like ('%".strtoupper($obj->getTomador_codmunic())."%')";
 				} 
		if ($obj->getTomador_telefone()) { 
			 $sql .= " AND upper(tomador_telefone)  like ('%".strtoupper($obj->getTomador_telefone())."%')";
 				} 
		if ($obj->getTomador_email()) { 
			 $sql .= " AND upper(tomador_email)  like ('%".strtoupper($obj->getTomador_email())."%')";
 				} 
		if ($obj->getLocal_prestacao()) { 
			 $sql .= " AND upper(local_prestacao)  like ('%".strtoupper($obj->getLocal_prestacao())."%')";
 				} 
		if ($obj->getNfs_aliquota()) { 
			 $sql .= " AND nfs_aliquota = '".$obj->getNfs_aliquota()."'";
 				} 
		if ($obj->getCodobra()) { 
			 $sql .= " AND codobra = '".$obj->getCodobra()."'";
 				} 
		if ($obj->getArtobra()) { 
			 $sql .= " AND artobra = '".$obj->getArtobra()."'";
 				} 
		if ($obj->getSnacional()) { 
			 $sql .= " AND snacional = '".$obj->getSnacional()."'";
 				} 
		if ($obj->getRegime()) { 
			 $sql .= " AND regime = '".$obj->getRegime()."'";
 				} 
		if ($obj->getNatureza()) { 
			 $sql .= " AND natureza = '".$obj->getNatureza()."'";
 				} 
		if ($obj->getIncentivo()) { 
			 $sql .= " AND incentivo = '".$obj->getIncentivo()."'";
 				} 
		if ($obj->getData_inclusao()) { 
			 $sql .= " AND data_inclusao = '".$obj->getData_inclusao()."'";
 				} 
		if ($obj->getData_modificacao()) { 
			 $sql .= " AND data_modificacao = '".$obj->getData_modificacao()."'";
 				} 
		if ($obj->getUsuario_id()) { 
			 $sql .= " AND usuario_id = '".$obj->getUsuario_id()."'";
 				} 
		if ($obj->getNro_rps()) { 
			 $sql .= " AND nro_rps = '".$obj->getNro_rps()."'";
 				} 
		if ($obj->getSr_rps()) { 
			 $sql .= " AND sr_rps = '".$obj->getSr_rps()."'";
 				} 
		if ($obj->getRemote_ip()) { 
			 $sql .= " AND remote_ip = '".$obj->getRemote_ip()."'";
 				} 
		if ($obj->getCod_substituicao()) { 
			 $sql .= " AND cod_substituicao = '".$obj->getCod_substituicao()."'";
 				} 
		if ($obj->getSituacao_nfs()) { 
			 $sql .= " AND situacao_nfs = '".$obj->getSituacao_nfs()."'";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Nfse_lanctos_iss(); 
			 $obj->setSeq_nfse(mysql_result($rs, $i, 'seq_nfse')); 
			 $obj->setCodemp(mysql_result($rs, $i, 'codemp')); 
			 $obj->setMes_comp(mysql_result($rs, $i, 'mes_comp')); 
			 $obj->setAno_comp(mysql_result($rs, $i, 'ano_comp')); 
			 $obj->setData_emissao(mysql_result($rs, $i, 'data_emissao')); 
			 $obj->setNr_nota(mysql_result($rs, $i, 'nr_nota')); 
			 $obj->setSr_nota(mysql_result($rs, $i, 'sr_nota')); 
			 $obj->setCod_verificacao(mysql_result($rs, $i, 'cod_verificacao')); 
			 $obj->setAtividade(mysql_result($rs, $i, 'atividade')); 
			 $obj->setTipo_tributacao(mysql_result($rs, $i, 'tipo_tributacao')); 
			 $obj->setValor_nota(mysql_result($rs, $i, 'valor_nota')); 
			 $obj->setRetencao(mysql_result($rs, $i, 'retencao')); 
			 $obj->setVlr_retido(mysql_result($rs, $i, 'vlr_retido')); 
			 $obj->setValor_liquido(mysql_result($rs, $i, 'valor_liquido')); 
			 $obj->setTomador_tipo(mysql_result($rs, $i, 'tomador_tipo')); 
			 $obj->setTomador_id(mysql_result($rs, $i, 'tomador_id')); 
			 $obj->setTomador_codigo(mysql_result($rs, $i, 'tomador_codigo')); 
			 $obj->setTomador_codemp(mysql_result($rs, $i, 'tomador_codemp')); 
			 $obj->setTomador_inscricao(mysql_result($rs, $i, 'tomador_inscricao')); 
			 $obj->setTomador_local(mysql_result($rs, $i, 'tomador_local')); 
			 $obj->setTomador_nome(mysql_result($rs, $i, 'tomador_nome')); 
			 $obj->setTomador_logradouro(mysql_result($rs, $i, 'tomador_logradouro')); 
			 $obj->setTomador_numero(mysql_result($rs, $i, 'tomador_numero')); 
			 $obj->setTomador_cep(mysql_result($rs, $i, 'tomador_cep')); 
			 $obj->setTomador_bairro(mysql_result($rs, $i, 'tomador_bairro')); 
			 $obj->setTomador_cidade(mysql_result($rs, $i, 'tomador_cidade')); 
			 $obj->setTomador_estado(mysql_result($rs, $i, 'tomador_estado')); 
			 $obj->setTomador_codmunic(mysql_result($rs, $i, 'tomador_codmunic')); 
			 $obj->setTomador_telefone(mysql_result($rs, $i, 'tomador_telefone')); 
			 $obj->setTomador_email(mysql_result($rs, $i, 'tomador_email')); 
			 $obj->setLocal_prestacao(mysql_result($rs, $i, 'local_prestacao')); 
			 $obj->setNfs_aliquota(mysql_result($rs, $i, 'nfs_aliquota')); 
			 $obj->setCodobra(mysql_result($rs, $i, 'codobra')); 
			 $obj->setArtobra(mysql_result($rs, $i, 'artobra')); 
			 $obj->setSnacional(mysql_result($rs, $i, 'snacional')); 
			 $obj->setRegime(mysql_result($rs, $i, 'regime')); 
			 $obj->setNatureza(mysql_result($rs, $i, 'natureza')); 
			 $obj->setIncentivo(mysql_result($rs, $i, 'incentivo')); 
			 $obj->setData_inclusao(mysql_result($rs, $i, 'data_inclusao')); 
			 $obj->setData_modificacao(mysql_result($rs, $i, 'data_modificacao')); 
			 $obj->setUsuario_id(mysql_result($rs, $i, 'usuario_id')); 
			 $obj->setNro_rps(mysql_result($rs, $i, 'nro_rps')); 
			 $obj->setSr_rps(mysql_result($rs, $i, 'sr_rps')); 
			 $obj->setRemote_ip(mysql_result($rs, $i, 'remote_ip')); 
			 $obj->setCod_substituicao(mysql_result($rs, $i, 'cod_substituicao')); 
			 $obj->setSituacao_nfs(mysql_result($rs, $i, 'situacao_nfs')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 }
	 
	 
} 
