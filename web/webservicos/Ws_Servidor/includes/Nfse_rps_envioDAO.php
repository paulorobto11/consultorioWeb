<?php 
 /** Classe responsavel pelas transacoes da Tabela: Nfse_rps_envio. */ 
class Nfse_rps_envioDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO nfse_rps_envio ('; 
		 $sql .= 'rps_data,';
		 $sql .= 'rps_lote,';
		 $sql .= 'rps_cnpj_envio,';
		 $sql .= 'rps_inscricao,';
		 $sql .= 'rps_qtde,';
		 $sql .= 'rps_nro,';
		 $sql .= 'rps_serie,';
		 $sql .= 'rps_xml,';
		 $sql .= 'rps_status,';
		 $sql .= 'nfse_nro,';
		 $sql .= 'nfse_serie,';
		 $sql .= 'nfse_situacao,';
		 $sql .= 'rps_situacao';
		 $sql .= ') VALUES ('; 
		 $sql .= '\''.$obj->getRps_data().'\',';
		 $sql .= ($obj->getRps_lote()?$obj->getRps_lote():0).',';
		 $sql .= '\''.$obj->getRps_cnpj_envio().'\',';
		 $sql .= '\''.$obj->getRps_inscricao().'\',';
		 $sql .= ($obj->getRps_qtde()?$obj->getRps_qtde():0).',';
		 $sql .= ($obj->getRps_nro()?$obj->getRps_nro():0).',';
		 $sql .= '\''.$obj->getRps_serie().'\',';
		 $sql .= '\''.$obj->getRps_xml().'\',';
		 $sql .= '\''.$obj->getRps_status().'\',';
		 $sql .= ($obj->getNfse_nro()?$obj->getNfse_nro():0).',';
		 $sql .= '\''.$obj->getNfse_serie().'\',';
		 $sql .= ($obj->getNfse_situacao()?$obj->getNfse_situacao():0).',';
		 $sql .= ($obj->getRps_situacao()?$obj->getRps_situacao():0);
		 $sql .= ')'; 
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function update($obj){
		 $sql = 'UPDATE nfse_rps_envio SET '; 
		 $sql .= 'rps_data = '.'\''.$obj->getRps_data().'\' ,';
		 $sql .= 'rps_lote = '.($obj->getRps_lote()?$obj->getRps_lote():0).',';
		 $sql .= 'rps_cnpj_envio = '.'\''.$obj->getRps_cnpj_envio().'\' ,';
		 $sql .= 'rps_inscricao = '.'\''.$obj->getRps_inscricao().'\' ,';
		 $sql .= 'rps_qtde = '.($obj->getRps_qtde()?$obj->getRps_qtde():0).',';
		 $sql .= 'rps_nro = '.($obj->getRps_nro()?$obj->getRps_nro():0).',';
		 $sql .= 'rps_serie = '.'\''.$obj->getRps_serie().'\' ,';
		 $sql .= 'rps_xml = '.'\''.$obj->getRps_xml().'\' ,';
		 $sql .= 'rps_status = '.'\''.$obj->getRps_status().'\' ,';
		 $sql .= 'nfse_nro = '.($obj->getNfse_nro()?$obj->getNfse_nro():0).',';
		 $sql .= 'nfse_serie = '.'\''.$obj->getNfse_serie().'\' ,';
		 $sql .= 'nfse_situacao = '.($obj->getNfse_situacao()?$obj->getNfse_situacao():0).',';
		 $sql .= 'rps_situacao = '.($obj->getRps_situacao()?$obj->getRps_situacao():0);
		 $sql .= ' WHERE seqrps = '.$obj->getSeqrps();
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM nfse_rps_envio WHERE seqrps = '.$obj->getSeqrps();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM nfse_rps_envio WHERE 1=1 '; 
		if ($obj->getSeqrps()) { 
			$sql .= " AND seqrps = '".$obj->getSeqrps()."'";
		} 
		if ($obj->getRps_data()) { 
			$sql .= " AND rps_data = '".$obj->getRps_data()."'";
		} 
		if ($obj->getRps_lote()) { 
			$sql .= " AND rps_lote = '".$obj->getRps_lote()."'";
		} 
		if ($obj->getRps_cnpj_envio()) { 
			$sql .= " AND upper(rps_cnpj_envio)  like ('%".strtoupper($obj->getRps_cnpj_envio())."%')";
		} 
		if ($obj->getRps_inscricao()) { 
			$sql .= " AND upper(rps_inscricao)  like ('%".strtoupper($obj->getRps_inscricao())."%')";
		} 
		if ($obj->getRps_qtde()) { 
			$sql .= " AND rps_qtde = '".$obj->getRps_qtde()."'";
		} 
		if ($obj->getRps_nro()) { 
			$sql .= " AND rps_nro = '".$obj->getRps_nro()."'";
		} 
		if ($obj->getRps_serie()) { 
			$sql .= " AND upper(rps_serie)  like ('%".strtoupper($obj->getRps_serie())."%')";
		} 
		if ($obj->getRps_xml()) { 
			$sql .= " AND rps_xml = '".$obj->getRps_xml()."'";
		} 
		if ($obj->getRps_status()) { 
			$sql .= " AND upper(rps_status)  like ('%".strtoupper($obj->getRps_status())."%')";
		} 
		if ($obj->getNfse_nro()) { 
			$sql .= " AND nfse_nro = '".$obj->getNfse_nro()."'";
		} 
		if ($obj->getNfse_serie()) { 
			$sql .= " AND upper(nfse_serie)  like ('%".strtoupper($obj->getNfse_serie())."%')";
		} 
		if ($obj->getNfse_situacao()) { 
			$sql .= " AND nfse_situacao = '".$obj->getNfse_situacao()."'";
		} 
		if ($obj->getRps_situacao()) { 
			$sql .= " AND rps_situacao = '".$obj->getRps_situacao()."'";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setSeqrps(mysql_result($rs, 0, 'seqrps')); 
			 $obj->setRps_data(mysql_result($rs, 0, 'rps_data')); 
			 $obj->setRps_lote(mysql_result($rs, 0, 'rps_lote')); 
			 $obj->setRps_cnpj_envio(mysql_result($rs, 0, 'rps_cnpj_envio')); 
			 $obj->setRps_inscricao(mysql_result($rs, 0, 'rps_inscricao')); 
			 $obj->setRps_qtde(mysql_result($rs, 0, 'rps_qtde')); 
			 $obj->setRps_nro(mysql_result($rs, 0, 'rps_nro')); 
			 $obj->setRps_serie(mysql_result($rs, 0, 'rps_serie')); 
			 $obj->setRps_xml(mysql_result($rs, 0, 'rps_xml')); 
			 $obj->setRps_status(mysql_result($rs, 0, 'rps_status')); 
			 $obj->setNfse_nro(mysql_result($rs, 0, 'nfse_nro')); 
			 $obj->setNfse_serie(mysql_result($rs, 0, 'nfse_serie')); 
			 $obj->setNfse_situacao(mysql_result($rs, 0, 'nfse_situacao')); 
			 $obj->setRps_situacao(mysql_result($rs, 0, 'rps_situacao')); 
		} 
		 return $obj; 
	} 

	  function countAll($obj){
		 $sql = 'SELECT count(*) as existe FROM nfse_rps_envio WHERE 1=1 ';  


		if ($obj->getSeqrps()) { 
			$sql .= " AND seqrps = '".$obj->getSeqrps()."'";
		} 
		if ($obj->getRps_data()) { 
			$sql .= " AND rps_data = '".$obj->getRps_data()."'";
		} 
		if ($obj->getRps_lote()) { 
			$sql .= " AND rps_lote = '".$obj->getRps_lote()."'";
		} 
		if ($obj->getRps_cnpj_envio()) { 
			$sql .= " AND upper(rps_cnpj_envio)  like ('%".strtoupper($obj->getRps_cnpj_envio())."%')";
		} 
		if ($obj->getRps_inscricao()) { 
			$sql .= " AND upper(rps_inscricao)  like ('%".strtoupper($obj->getRps_inscricao())."%')";
		} 
		if ($obj->getRps_qtde()) { 
			$sql .= " AND rps_qtde = '".$obj->getRps_qtde()."'";
		} 
		if ($obj->getRps_nro()) { 
			$sql .= " AND rps_nro = '".$obj->getRps_nro()."'";
		} 
		if ($obj->getRps_serie()) { 
			$sql .= " AND upper(rps_serie)  like ('%".strtoupper($obj->getRps_serie())."%')";
		} 
		if ($obj->getRps_xml()) { 
			$sql .= " AND rps_xml = '".$obj->getRps_xml()."'";
		} 
		if ($obj->getRps_status()) { 
			$sql .= " AND upper(rps_status)  like ('%".strtoupper($obj->getRps_status())."%')";
		} 
		if ($obj->getNfse_nro()) { 
			$sql .= " AND nfse_nro = '".$obj->getNfse_nro()."'";
		} 
		if ($obj->getNfse_serie()) { 
			$sql .= " AND upper(nfse_serie)  like ('%".strtoupper($obj->getNfse_serie())."%')";
		} 
		if ($obj->getNfse_situacao()) { 
			$sql .= " AND nfse_situacao = '".$obj->getNfse_situacao()."'";
		} 
		if ($obj->getRps_situacao()) { 
			$sql .= " AND rps_situacao = '".$obj->getRps_situacao()."'";
		} 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function verifica_existe($obj){
		 $sql = 'SELECT count(*) as existe FROM nfse_rps_envio WHERE 1=1 ';  


		 if ($obj->getSeqrps()) { 
			 $sql .= 	 "AND seqrps = '".$obj->getSeqrps()."'";
 		 } 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function selectAll($obj){
		 $sql = 'SELECT * FROM nfse_rps_envio WHERE 1=1 '; 


		if ($obj->getSeqrps()) { 
			 $sql .= " AND seqrps = '".$obj->getSeqrps()."'";
 				} 
		if ($obj->getRps_data()) { 
			 $sql .= " AND rps_data = '".$obj->getRps_data()."'";
 				} 
		if ($obj->getRps_lote()) { 
			 $sql .= " AND rps_lote = '".$obj->getRps_lote()."'";
 				} 
		if ($obj->getRps_cnpj_envio()) { 
			 $sql .= " AND upper(rps_cnpj_envio)  like ('%".strtoupper($obj->getRps_cnpj_envio())."%')";
 				} 
		if ($obj->getRps_inscricao()) { 
			 $sql .= " AND upper(rps_inscricao)  like ('%".strtoupper($obj->getRps_inscricao())."%')";
 				} 
		if ($obj->getRps_qtde()) { 
			 $sql .= " AND rps_qtde = '".$obj->getRps_qtde()."'";
 				} 
		if ($obj->getRps_nro()) { 
			 $sql .= " AND rps_nro = '".$obj->getRps_nro()."'";
 				} 
		if ($obj->getRps_serie()) { 
			 $sql .= " AND upper(rps_serie)  like ('%".strtoupper($obj->getRps_serie())."%')";
 				} 
		if ($obj->getRps_xml()) { 
			 $sql .= " AND rps_xml = '".$obj->getRps_xml()."'";
 				} 
		if ($obj->getRps_status()) { 
			 $sql .= " AND upper(rps_status)  like ('%".strtoupper($obj->getRps_status())."%')";
 				} 
		if ($obj->getNfse_nro()) { 
			 $sql .= " AND nfse_nro = '".$obj->getNfse_nro()."'";
 				} 
		if ($obj->getNfse_serie()) { 
			 $sql .= " AND upper(nfse_serie)  like ('%".strtoupper($obj->getNfse_serie())."%')";
 				} 
		if ($obj->getNfse_situacao()) { 
			 $sql .= " AND nfse_situacao = '".$obj->getNfse_situacao()."'";
 				} 
		if ($obj->getRps_situacao()) { 
			 $sql .= " AND rps_situacao = '".$obj->getRps_situacao()."'";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Nfse_rps_envio(); 
			 $obj->setSeqrps(mysql_result($rs, $i, 'seqrps')); 
			 $obj->setRps_data(mysql_result($rs, $i, 'rps_data')); 
			 $obj->setRps_lote(mysql_result($rs, $i, 'rps_lote')); 
			 $obj->setRps_cnpj_envio(mysql_result($rs, $i, 'rps_cnpj_envio')); 
			 $obj->setRps_inscricao(mysql_result($rs, $i, 'rps_inscricao')); 
			 $obj->setRps_qtde(mysql_result($rs, $i, 'rps_qtde')); 
			 $obj->setRps_nro(mysql_result($rs, $i, 'rps_nro')); 
			 $obj->setRps_serie(mysql_result($rs, $i, 'rps_serie')); 
			 $obj->setRps_xml(mysql_result($rs, $i, 'rps_xml')); 
			 $obj->setRps_status(mysql_result($rs, $i, 'rps_status')); 
			 $obj->setNfse_nro(mysql_result($rs, $i, 'nfse_nro')); 
			 $obj->setNfse_serie(mysql_result($rs, $i, 'nfse_serie')); 
			 $obj->setNfse_situacao(mysql_result($rs, $i, 'nfse_situacao')); 
			 $obj->setRps_situacao(mysql_result($rs, $i, 'rps_situacao')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
} 
