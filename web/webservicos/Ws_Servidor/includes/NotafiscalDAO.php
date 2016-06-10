<?php 
 /** Classe responsavel pelas transacoes da Tabela: Notafiscal. */ 
class NotafiscalDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO notafiscal ('; 
		 $sql .= 'codemp,';
		 $sql .= 'id_nota,';
		 $sql .= 'verificacao,';
		 $sql .= 'ano_comp,';
		 $sql .= 'mes_comp,';
		 $sql .= 'data_emissao,';
		 $sql .= 'nr_nota,';
		 $sql .= 'sr_nota,';
		 $sql .= 'nr_rps,';
		 $sql .= 'sr_rps,';
		 $sql .= 'atividade,';
		 $sql .= 'valor_nota,';
		 $sql .= 'retencao,';
		 $sql .= 'vlr_iss,';
		 $sql .= 'tomador_tipo,';
		 $sql .= 'tomador_inscricao,';
		 $sql .= 'tomador_nome,';
		 $sql .= 'local_prestacao,';
		 $sql .= 'snacional,';
		 $sql .= 'tipo_emissao,';
		 $sql .= 'situacao';
		 $sql .= ') VALUES ('; 
		 $sql .= ($obj->getCodemp()?$obj->getCodemp():0).',';
		 $sql .= ($obj->getId_nota()?$obj->getId_nota():0).',';
		 $sql .= ($obj->getVerificacao()?$obj->getVerificacao():0).',';
		 $sql .= ($obj->getAno_comp()?$obj->getAno_comp():0).',';
		 $sql .= ($obj->getMes_comp()?$obj->getMes_comp():0).',';
		 $sql .= '\''.$obj->getData_emissao().'\',';
		 $sql .= ($obj->getNr_nota()?$obj->getNr_nota():0).',';
		 $sql .= '\''.$obj->getSr_nota().'\',';
		 $sql .= ($obj->getNr_rps()?$obj->getNr_rps():0).',';
		 $sql .= '\''.$obj->getSr_rps().'\',';
		 $sql .= ($obj->getAtividade()?$obj->getAtividade():0).',';
		 $sql .= ($obj->getValor_nota()?$obj->getValor_nota():0).',';
		 $sql .= ($obj->getRetencao()?$obj->getRetencao():0).',';
		 $sql .= ($obj->getVlr_iss()?$obj->getVlr_iss():0).',';
		 $sql .= ($obj->getTomador_tipo()?$obj->getTomador_tipo():0).',';
		 $sql .= '\''.$obj->getTomador_inscricao().'\',';
		 $sql .= ($obj->getTomador_nome()?$obj->getTomador_nome():0).',';
		 $sql .= '\''.$obj->getLocal_prestacao().'\',';
		 $sql .= ($obj->getSnacional()?$obj->getSnacional():0).',';
		 $sql .= ($obj->getTipo_emissao()?$obj->getTipo_emissao():0).',';
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
		 $sql = 'UPDATE notafiscal SET '; 
		 $sql .= 'codemp = '.($obj->getCodemp()?$obj->getCodemp():0).',';
		 $sql .= 'id_nota = '.($obj->getId_nota()?$obj->getId_nota():0).',';
		 $sql .= 'verificacao = '.($obj->getVerificacao()?$obj->getVerificacao():0).',';
		 $sql .= 'ano_comp = '.($obj->getAno_comp()?$obj->getAno_comp():0).',';
		 $sql .= 'mes_comp = '.($obj->getMes_comp()?$obj->getMes_comp():0).',';
		 $sql .= 'data_emissao = '.'\''.$obj->getData_emissao().'\' ,';
		 $sql .= 'nr_nota = '.($obj->getNr_nota()?$obj->getNr_nota():0).',';
		 $sql .= 'sr_nota = '.'\''.$obj->getSr_nota().'\' ,';
		 $sql .= 'nr_rps = '.($obj->getNr_rps()?$obj->getNr_rps():0).',';
		 $sql .= 'sr_rps = '.'\''.$obj->getSr_rps().'\' ,';
		 $sql .= 'atividade = '.($obj->getAtividade()?$obj->getAtividade():0).',';
		 $sql .= 'valor_nota = '.($obj->getValor_nota()?$obj->getValor_nota():0).',';
		 $sql .= 'retencao = '.($obj->getRetencao()?$obj->getRetencao():0).',';
		 $sql .= 'vlr_iss = '.($obj->getVlr_iss()?$obj->getVlr_iss():0).',';
		 $sql .= 'tomador_tipo = '.($obj->getTomador_tipo()?$obj->getTomador_tipo():0).',';
		 $sql .= 'tomador_inscricao = '.'\''.$obj->getTomador_inscricao().'\' ,';
		 $sql .= 'tomador_nome = '.($obj->getTomador_nome()?$obj->getTomador_nome():0).',';
		 $sql .= 'local_prestacao = '.'\''.$obj->getLocal_prestacao().'\' ,';
		 $sql .= 'snacional = '.($obj->getSnacional()?$obj->getSnacional():0).',';
		 $sql .= 'tipo_emissao = '.($obj->getTipo_emissao()?$obj->getTipo_emissao():0).',';
		 $sql .= 'situacao = '.($obj->getSituacao()?$obj->getSituacao():0);
		 $sql .= ' WHERE id = '.$obj->getId();
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM notafiscal WHERE id = '.$obj->getId();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM notafiscal WHERE 1=1 '; 
		if ($obj->getId()) { 
			$sql .= " AND id = '".$obj->getId()."'";
		} 
		if ($obj->getCodemp()) { 
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		} 
		if ($obj->getId_nota()) { 
			$sql .= " AND id_nota = '".$obj->getId_nota()."'";
		} 
		if ($obj->getVerificacao()) { 
			$sql .= " AND verificacao = '".$obj->getVerificacao()."'";
		} 
		if ($obj->getAno_comp()) { 
			$sql .= " AND ano_comp = '".$obj->getAno_comp()."'";
		} 
		if ($obj->getMes_comp()) { 
			$sql .= " AND mes_comp = '".$obj->getMes_comp()."'";
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
		if ($obj->getNr_rps()) { 
			$sql .= " AND nr_rps = '".$obj->getNr_rps()."'";
		} 
		if ($obj->getSr_rps()) { 
			$sql .= " AND upper(sr_rps)  like ('%".strtoupper($obj->getSr_rps())."%')";
		} 
		if ($obj->getAtividade()) { 
			$sql .= " AND atividade = '".$obj->getAtividade()."'";
		} 
		if ($obj->getValor_nota()) { 
			$sql .= " AND valor_nota = '".$obj->getValor_nota()."'";
		} 
		if ($obj->getRetencao()) { 
			$sql .= " AND retencao = '".$obj->getRetencao()."'";
		} 
		if ($obj->getVlr_iss()) { 
			$sql .= " AND vlr_iss = '".$obj->getVlr_iss()."'";
		} 
		if ($obj->getTomador_tipo()) { 
			$sql .= " AND tomador_tipo = '".$obj->getTomador_tipo()."'";
		} 
		if ($obj->getTomador_inscricao()) { 
			$sql .= " AND upper(tomador_inscricao)  like ('%".strtoupper($obj->getTomador_inscricao())."%')";
		} 
		if ($obj->getTomador_nome()) { 
			$sql .= " AND tomador_nome = '".$obj->getTomador_nome()."'";
		} 
		if ($obj->getLocal_prestacao()) { 
			$sql .= " AND upper(local_prestacao)  like ('%".strtoupper($obj->getLocal_prestacao())."%')";
		} 
		if ($obj->getSnacional()) { 
			$sql .= " AND snacional = '".$obj->getSnacional()."'";
		} 
		if ($obj->getTipo_emissao()) { 
			$sql .= " AND tipo_emissao = '".$obj->getTipo_emissao()."'";
		} 
		if ($obj->getSituacao()) { 
			$sql .= " AND situacao = '".$obj->getSituacao()."'";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setId(mysql_result($rs, 0, 'id')); 
			 $obj->setCodemp(mysql_result($rs, 0, 'codemp')); 
			 $obj->setId_nota(mysql_result($rs, 0, 'id_nota')); 
			 $obj->setVerificacao(mysql_result($rs, 0, 'verificacao')); 
			 $obj->setAno_comp(mysql_result($rs, 0, 'ano_comp')); 
			 $obj->setMes_comp(mysql_result($rs, 0, 'mes_comp')); 
			 $obj->setData_emissao(mysql_result($rs, 0, 'data_emissao')); 
			 $obj->setNr_nota(mysql_result($rs, 0, 'nr_nota')); 
			 $obj->setSr_nota(mysql_result($rs, 0, 'sr_nota')); 
			 $obj->setNr_rps(mysql_result($rs, 0, 'nr_rps')); 
			 $obj->setSr_rps(mysql_result($rs, 0, 'sr_rps')); 
			 $obj->setAtividade(mysql_result($rs, 0, 'atividade')); 
			 $obj->setValor_nota(mysql_result($rs, 0, 'valor_nota')); 
			 $obj->setRetencao(mysql_result($rs, 0, 'retencao')); 
			 $obj->setVlr_iss(mysql_result($rs, 0, 'vlr_iss')); 
			 $obj->setTomador_tipo(mysql_result($rs, 0, 'tomador_tipo')); 
			 $obj->setTomador_inscricao(mysql_result($rs, 0, 'tomador_inscricao')); 
			 $obj->setTomador_nome(mysql_result($rs, 0, 'tomador_nome')); 
			 $obj->setLocal_prestacao(mysql_result($rs, 0, 'local_prestacao')); 
			 $obj->setSnacional(mysql_result($rs, 0, 'snacional')); 
			 $obj->setTipo_emissao(mysql_result($rs, 0, 'tipo_emissao')); 
			 $obj->setSituacao(mysql_result($rs, 0, 'situacao')); 
		} 
		 return $obj; 
	} 

	  function countAll($obj){
		 $sql = 'SELECT count(*) as existe FROM notafiscal WHERE 1=1 ';  


		if ($obj->getId()) { 
			$sql .= " AND id = '".$obj->getId()."'";
		} 
		if ($obj->getCodemp()) { 
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		} 
		if ($obj->getId_nota()) { 
			$sql .= " AND id_nota = '".$obj->getId_nota()."'";
		} 
		if ($obj->getVerificacao()) { 
			$sql .= " AND verificacao = '".$obj->getVerificacao()."'";
		} 
		if ($obj->getAno_comp()) { 
			$sql .= " AND ano_comp = '".$obj->getAno_comp()."'";
		} 
		if ($obj->getMes_comp()) { 
			$sql .= " AND mes_comp = '".$obj->getMes_comp()."'";
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
		if ($obj->getNr_rps()) { 
			$sql .= " AND nr_rps = '".$obj->getNr_rps()."'";
		} 
		if ($obj->getSr_rps()) { 
			$sql .= " AND upper(sr_rps)  like ('%".strtoupper($obj->getSr_rps())."%')";
		} 
		if ($obj->getAtividade()) { 
			$sql .= " AND atividade = '".$obj->getAtividade()."'";
		} 
		if ($obj->getValor_nota()) { 
			$sql .= " AND valor_nota = '".$obj->getValor_nota()."'";
		} 
		if ($obj->getRetencao()) { 
			$sql .= " AND retencao = '".$obj->getRetencao()."'";
		} 
		if ($obj->getVlr_iss()) { 
			$sql .= " AND vlr_iss = '".$obj->getVlr_iss()."'";
		} 
		if ($obj->getTomador_tipo()) { 
			$sql .= " AND tomador_tipo = '".$obj->getTomador_tipo()."'";
		} 
		if ($obj->getTomador_inscricao()) { 
			$sql .= " AND upper(tomador_inscricao)  like ('%".strtoupper($obj->getTomador_inscricao())."%')";
		} 
		if ($obj->getTomador_nome()) { 
			$sql .= " AND tomador_nome = '".$obj->getTomador_nome()."'";
		} 
		if ($obj->getLocal_prestacao()) { 
			$sql .= " AND upper(local_prestacao)  like ('%".strtoupper($obj->getLocal_prestacao())."%')";
		} 
		if ($obj->getSnacional()) { 
			$sql .= " AND snacional = '".$obj->getSnacional()."'";
		} 
		if ($obj->getTipo_emissao()) { 
			$sql .= " AND tipo_emissao = '".$obj->getTipo_emissao()."'";
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
		 $sql = 'SELECT count(*) as existe FROM notafiscal WHERE 1=1 ';  


		 if ($obj->getId()) { 
			 $sql .= 	 "AND id = '".$obj->getId()."'";
 		 } 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function selectAll($obj){
		 $sql = 'SELECT * FROM notafiscal WHERE 1=1 '; 


		if ($obj->getId()) { 
			 $sql .= " AND id = '".$obj->getId()."'";
 				} 
		if ($obj->getCodemp()) { 
			 $sql .= " AND codemp = '".$obj->getCodemp()."'";
 				} 
		if ($obj->getId_nota()) { 
			 $sql .= " AND id_nota = '".$obj->getId_nota()."'";
 				} 
		if ($obj->getVerificacao()) { 
			 $sql .= " AND verificacao = '".$obj->getVerificacao()."'";
 				} 
		if ($obj->getAno_comp()) { 
			 $sql .= " AND ano_comp = '".$obj->getAno_comp()."'";
 				} 
		if ($obj->getMes_comp()) { 
			 $sql .= " AND mes_comp = '".$obj->getMes_comp()."'";
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
		if ($obj->getNr_rps()) { 
			 $sql .= " AND nr_rps = '".$obj->getNr_rps()."'";
 				} 
		if ($obj->getSr_rps()) { 
			 $sql .= " AND upper(sr_rps)  like ('%".strtoupper($obj->getSr_rps())."%')";
 				} 
		if ($obj->getAtividade()) { 
			 $sql .= " AND atividade = '".$obj->getAtividade()."'";
 				} 
		if ($obj->getValor_nota()) { 
			 $sql .= " AND valor_nota = '".$obj->getValor_nota()."'";
 				} 
		if ($obj->getRetencao()) { 
			 $sql .= " AND retencao = '".$obj->getRetencao()."'";
 				} 
		if ($obj->getVlr_iss()) { 
			 $sql .= " AND vlr_iss = '".$obj->getVlr_iss()."'";
 				} 
		if ($obj->getTomador_tipo()) { 
			 $sql .= " AND tomador_tipo = '".$obj->getTomador_tipo()."'";
 				} 
		if ($obj->getTomador_inscricao()) { 
			 $sql .= " AND upper(tomador_inscricao)  like ('%".strtoupper($obj->getTomador_inscricao())."%')";
 				} 
		if ($obj->getTomador_nome()) { 
			 $sql .= " AND tomador_nome = '".$obj->getTomador_nome()."'";
 				} 
		if ($obj->getLocal_prestacao()) { 
			 $sql .= " AND upper(local_prestacao)  like ('%".strtoupper($obj->getLocal_prestacao())."%')";
 				} 
		if ($obj->getSnacional()) { 
			 $sql .= " AND snacional = '".$obj->getSnacional()."'";
 				} 
		if ($obj->getTipo_emissao()) { 
			 $sql .= " AND tipo_emissao = '".$obj->getTipo_emissao()."'";
 				} 
		if ($obj->getSituacao()) { 
			 $sql .= " AND situacao = '".$obj->getSituacao()."'";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Notafiscal(); 
			 $obj->setId(mysql_result($rs, $i, 'id')); 
			 $obj->setCodemp(mysql_result($rs, $i, 'codemp')); 
			 $obj->setId_nota(mysql_result($rs, $i, 'id_nota')); 
			 $obj->setVerificacao(mysql_result($rs, $i, 'verificacao')); 
			 $obj->setAno_comp(mysql_result($rs, $i, 'ano_comp')); 
			 $obj->setMes_comp(mysql_result($rs, $i, 'mes_comp')); 
			 $obj->setData_emissao(mysql_result($rs, $i, 'data_emissao')); 
			 $obj->setNr_nota(mysql_result($rs, $i, 'nr_nota')); 
			 $obj->setSr_nota(mysql_result($rs, $i, 'sr_nota')); 
			 $obj->setNr_rps(mysql_result($rs, $i, 'nr_rps')); 
			 $obj->setSr_rps(mysql_result($rs, $i, 'sr_rps')); 
			 $obj->setAtividade(mysql_result($rs, $i, 'atividade')); 
			 $obj->setValor_nota(mysql_result($rs, $i, 'valor_nota')); 
			 $obj->setRetencao(mysql_result($rs, $i, 'retencao')); 
			 $obj->setVlr_iss(mysql_result($rs, $i, 'vlr_iss')); 
			 $obj->setTomador_tipo(mysql_result($rs, $i, 'tomador_tipo')); 
			 $obj->setTomador_inscricao(mysql_result($rs, $i, 'tomador_inscricao')); 
			 $obj->setTomador_nome(mysql_result($rs, $i, 'tomador_nome')); 
			 $obj->setLocal_prestacao(mysql_result($rs, $i, 'local_prestacao')); 
			 $obj->setSnacional(mysql_result($rs, $i, 'snacional')); 
			 $obj->setTipo_emissao(mysql_result($rs, $i, 'tipo_emissao')); 
			 $obj->setSituacao(mysql_result($rs, $i, 'situacao')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
} 
