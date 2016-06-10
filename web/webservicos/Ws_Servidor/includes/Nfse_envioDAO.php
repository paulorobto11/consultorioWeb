<?php 
 /** Classe responsavel pelas transacoes da Tabela: Nfse_envio. */ 
class Nfse_envioDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO nfse_envio ('; 
		 $sql .= 'seq_nfse,';
		 $sql .= 'codemp,';
		 $sql .= 'codmunic,';
		 $sql .= 'data_envio,';
		 $sql .= 'inscmunic,';
		 $sql .= 'qtdRps,';
		 $sql .= 'nrLote,';
		 $sql .= 'chave,';
		 $sql .= 'tipo_emissao,';
		 $sql .= 'ambiente,';
		 $sql .= 'versao,';
		 $sql .= 'dhRecbto,';
		 $sql .= 'protocolo,';
		 $sql .= 'status_nfe';
		 $sql .= ') VALUES ('; 
		 $sql .= ($obj->getSeq_nfse()?$obj->getSeq_nfse():0).',';
		 $sql .= ($obj->getCodemp()?$obj->getCodemp():0).',';
		 $sql .= ($obj->getCodmunic()?$obj->getCodmunic():0).',';
		 $sql .= '\''.$obj->getData_envio().'\',';
		 $sql .= ($obj->getInscmunic()?$obj->getInscmunic():0).',';
		 $sql .= ($obj->getQtdRps()?$obj->getQtdRps():0).',';
		 $sql .= ($obj->getNrLote()?$obj->getNrLote():0).',';
		 $sql .= '\''.$obj->getChave().'\',';
		 $sql .= ($obj->getTipo_emissao()?$obj->getTipo_emissao():0).',';
		 $sql .= ($obj->getAmbiente()?$obj->getAmbiente():0).',';
		 $sql .= '\''.$obj->getVersao().'\',';
		 $sql .= '\''.$obj->getDhRecbto().'\',';
		 $sql .= '\''.$obj->getProtocolo().'\',';
		 $sql .= ($obj->getStatus_nfe()?$obj->getStatus_nfe():0);
		 $sql .= ')'; 
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function update($obj){
		 $sql = 'UPDATE nfse_envio SET '; 
		 $sql .= 'seq_nfse = '.($obj->getSeq_nfse()?$obj->getSeq_nfse():0).',';
		 $sql .= 'codemp = '.($obj->getCodemp()?$obj->getCodemp():0).',';
		 $sql .= 'codmunic = '.($obj->getCodmunic()?$obj->getCodmunic():0).',';
		 $sql .= 'data_envio = '.'\''.$obj->getData_envio().'\' ,';
		 $sql .= 'inscmunic = '.($obj->getInscmunic()?$obj->getInscmunic():0).',';
		 $sql .= 'qtdRps = '.($obj->getQtdRps()?$obj->getQtdRps():0).',';
		 $sql .= 'nrLote = '.($obj->getNrLote()?$obj->getNrLote():0).',';
		 $sql .= 'chave = '.'\''.$obj->getChave().'\' ,';
		 $sql .= 'tipo_emissao = '.($obj->getTipo_emissao()?$obj->getTipo_emissao():0).',';
		 $sql .= 'ambiente = '.($obj->getAmbiente()?$obj->getAmbiente():0).',';
		 $sql .= 'versao = '.'\''.$obj->getVersao().'\' ,';
		 $sql .= 'dhRecbto = '.'\''.$obj->getDhRecbto().'\' ,';
		 $sql .= 'protocolo = '.'\''.$obj->getProtocolo().'\' ,';
		 $sql .= 'status_nfe = '.($obj->getStatus_nfe()?$obj->getStatus_nfe():0);
		 $sql .= ' WHERE seq_nfse = '.$obj->getSeq_nfse();
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM nfse_envio WHERE seq_nfse = '.$obj->getSeq_nfse();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM nfse_envio WHERE 1=1 '; 
		if ($obj->getSeq_nfse()) { 
			$sql .= " AND seq_nfse = '".$obj->getSeq_nfse()."'";
		} 
		if ($obj->getCodemp()) { 
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		} 
		if ($obj->getCodmunic()) { 
			$sql .= " AND codmunic = '".$obj->getCodmunic()."'";
		} 
		if ($obj->getData_envio()) { 
			$sql .= " AND data_envio = '".$obj->getData_envio()."'";
		} 
		if ($obj->getInscmunic()) { 
			$sql .= " AND inscmunic = '".$obj->getInscmunic()."'";
		} 
		if ($obj->getQtdRps()) { 
			$sql .= " AND qtdRps = '".$obj->getQtdRps()."'";
		} 
		if ($obj->getNrLote()) { 
			$sql .= " AND nrLote = '".$obj->getNrLote()."'";
		} 
		if ($obj->getChave()) { 
			$sql .= " AND upper(chave)  like ('%".strtoupper($obj->getChave())."%')";
		} 
		if ($obj->getTipo_emissao()) { 
			$sql .= " AND tipo_emissao = '".$obj->getTipo_emissao()."'";
		} 
		if ($obj->getAmbiente()) { 
			$sql .= " AND ambiente = '".$obj->getAmbiente()."'";
		} 
		if ($obj->getVersao()) { 
			$sql .= " AND upper(versao)  like ('%".strtoupper($obj->getVersao())."%')";
		} 
		if ($obj->getDhRecbto()) { 
			$sql .= " AND upper(dhRecbto)  like ('%".strtoupper($obj->getDhRecbto())."%')";
		} 
		if ($obj->getProtocolo()) { 
			$sql .= " AND upper(protocolo)  like ('%".strtoupper($obj->getProtocolo())."%')";
		} 
		if ($obj->getStatus_nfe()) { 
			$sql .= " AND status_nfe = '".$obj->getStatus_nfe()."'";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setSeq_nfse(mysql_result($rs, 0, 'seq_nfse')); 
			 $obj->setCodemp(mysql_result($rs, 0, 'codemp')); 
			 $obj->setCodmunic(mysql_result($rs, 0, 'codmunic')); 
			 $obj->setData_envio(mysql_result($rs, 0, 'data_envio')); 
			 $obj->setInscmunic(mysql_result($rs, 0, 'inscmunic')); 
			 $obj->setQtdRps(mysql_result($rs, 0, 'qtdRps')); 
			 $obj->setNrLote(mysql_result($rs, 0, 'nrLote')); 
			 $obj->setChave(mysql_result($rs, 0, 'chave')); 
			 $obj->setTipo_emissao(mysql_result($rs, 0, 'tipo_emissao')); 
			 $obj->setAmbiente(mysql_result($rs, 0, 'ambiente')); 
			 $obj->setVersao(mysql_result($rs, 0, 'versao')); 
			 $obj->setDhRecbto(mysql_result($rs, 0, 'dhRecbto')); 
			 $obj->setProtocolo(mysql_result($rs, 0, 'protocolo')); 
			 $obj->setStatus_nfe(mysql_result($rs, 0, 'status_nfe')); 
		} 
		 return $obj; 
	} 

	  function countAll($obj){
		 $sql = 'SELECT count(*) as existe FROM nfse_envio WHERE 1=1 ';  


		if ($obj->getSeq_nfse()) { 
			$sql .= " AND seq_nfse = '".$obj->getSeq_nfse()."'";
		} 
		if ($obj->getCodemp()) { 
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		} 
		if ($obj->getCodmunic()) { 
			$sql .= " AND codmunic = '".$obj->getCodmunic()."'";
		} 
		if ($obj->getData_envio()) { 
			$sql .= " AND data_envio = '".$obj->getData_envio()."'";
		} 
		if ($obj->getInscmunic()) { 
			$sql .= " AND inscmunic = '".$obj->getInscmunic()."'";
		} 
		if ($obj->getQtdRps()) { 
			$sql .= " AND qtdRps = '".$obj->getQtdRps()."'";
		} 
		if ($obj->getNrLote()) { 
			$sql .= " AND nrLote = '".$obj->getNrLote()."'";
		} 
		if ($obj->getChave()) { 
			$sql .= " AND upper(chave)  like ('%".strtoupper($obj->getChave())."%')";
		} 
		if ($obj->getTipo_emissao()) { 
			$sql .= " AND tipo_emissao = '".$obj->getTipo_emissao()."'";
		} 
		if ($obj->getAmbiente()) { 
			$sql .= " AND ambiente = '".$obj->getAmbiente()."'";
		} 
		if ($obj->getVersao()) { 
			$sql .= " AND upper(versao)  like ('%".strtoupper($obj->getVersao())."%')";
		} 
		if ($obj->getDhRecbto()) { 
			$sql .= " AND upper(dhRecbto)  like ('%".strtoupper($obj->getDhRecbto())."%')";
		} 
		if ($obj->getProtocolo()) { 
			$sql .= " AND upper(protocolo)  like ('%".strtoupper($obj->getProtocolo())."%')";
		} 
		if ($obj->getStatus_nfe()) { 
			$sql .= " AND status_nfe = '".$obj->getStatus_nfe()."'";
		} 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function verifica_existe($obj){
		 $sql = 'SELECT count(*) as existe FROM nfse_envio WHERE 1=1 ';  




		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function selectAll($obj){
		 $sql = 'SELECT * FROM nfse_envio WHERE 1=1 '; 


		if ($obj->getSeq_nfse()) { 
			 $sql .= " AND seq_nfse = '".$obj->getSeq_nfse()."'";
 				} 
		if ($obj->getCodemp()) { 
			 $sql .= " AND codemp = '".$obj->getCodemp()."'";
 				} 
		if ($obj->getCodmunic()) { 
			 $sql .= " AND codmunic = '".$obj->getCodmunic()."'";
 				} 
		if ($obj->getData_envio()) { 
			 $sql .= " AND data_envio = '".$obj->getData_envio()."'";
 				} 
		if ($obj->getInscmunic()) { 
			 $sql .= " AND inscmunic = '".$obj->getInscmunic()."'";
 				} 
		if ($obj->getQtdRps()) { 
			 $sql .= " AND qtdRps = '".$obj->getQtdRps()."'";
 				} 
		if ($obj->getNrLote()) { 
			 $sql .= " AND nrLote = '".$obj->getNrLote()."'";
 				} 
		if ($obj->getChave()) { 
			 $sql .= " AND upper(chave)  like ('%".strtoupper($obj->getChave())."%')";
 				} 
		if ($obj->getTipo_emissao()) { 
			 $sql .= " AND tipo_emissao = '".$obj->getTipo_emissao()."'";
 				} 
		if ($obj->getAmbiente()) { 
			 $sql .= " AND ambiente = '".$obj->getAmbiente()."'";
 				} 
		if ($obj->getVersao()) { 
			 $sql .= " AND upper(versao)  like ('%".strtoupper($obj->getVersao())."%')";
 				} 
		if ($obj->getDhRecbto()) { 
			 $sql .= " AND upper(dhRecbto)  like ('%".strtoupper($obj->getDhRecbto())."%')";
 				} 
		if ($obj->getProtocolo()) { 
			 $sql .= " AND upper(protocolo)  like ('%".strtoupper($obj->getProtocolo())."%')";
 				} 
		if ($obj->getStatus_nfe()) { 
			 $sql .= " AND status_nfe = '".$obj->getStatus_nfe()."'";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Nfse_envio(); 
			 $obj->setSeq_nfse(mysql_result($rs, $i, 'seq_nfse')); 
			 $obj->setCodemp(mysql_result($rs, $i, 'codemp')); 
			 $obj->setCodmunic(mysql_result($rs, $i, 'codmunic')); 
			 $obj->setData_envio(mysql_result($rs, $i, 'data_envio')); 
			 $obj->setInscmunic(mysql_result($rs, $i, 'inscmunic')); 
			 $obj->setQtdRps(mysql_result($rs, $i, 'qtdRps')); 
			 $obj->setNrLote(mysql_result($rs, $i, 'nrLote')); 
			 $obj->setChave(mysql_result($rs, $i, 'chave')); 
			 $obj->setTipo_emissao(mysql_result($rs, $i, 'tipo_emissao')); 
			 $obj->setAmbiente(mysql_result($rs, $i, 'ambiente')); 
			 $obj->setVersao(mysql_result($rs, $i, 'versao')); 
			 $obj->setDhRecbto(mysql_result($rs, $i, 'dhRecbto')); 
			 $obj->setProtocolo(mysql_result($rs, $i, 'protocolo')); 
			 $obj->setStatus_nfe(mysql_result($rs, $i, 'status_nfe')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
 	  function proximo(){
		 $sql = 'SELECT max(seq_nfse) as proximo FROM nfse_envio WHERE 1=1 ';  

		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['proximo']; 
		 return $existe; 
		} 
	 
} 
