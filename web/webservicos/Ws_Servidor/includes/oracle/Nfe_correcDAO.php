<?php 
 /** Classe responsavel pelas transacoes da Tabela: Nfe_correc. */ 
class Nfe_correcDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO nfe_correc ('; 
		 $sql .= 'seq_nfe,';
		 $sql .= 'codemp,';
		 $sql .= 'data_envio,';
		 $sql .= 'anomes,';
		 $sql .= 'chave,';
		 $sql .= 'nNF,';
		 $sql .= 'serie,';
		 $sql .= 'tipo_emissao,';
		 $sql .= 'ambiente,';
		 $sql .= 'versao,';
		 $sql .= 'orgao,';
		 $sql .= 'cStat,';
		 $sql .= 'xMotivo,';
		 $sql .= 'tpEvento,';
		 $sql .= 'xEvento,';
		 $sql .= 'nSeqEvento,';
		 $sql .= 'dhRegEvento,';
		 $sql .= 'nProt';
		 $sql .= ') VALUES ('; 
		 $sql .= ($obj->getSeq_nfe()?$obj->getSeq_nfe():0).',';
		 $sql .= ($obj->getCodemp()?$obj->getCodemp():0).',';
		 $sql .= '\''.$obj->getData_envio().'\',';
		 $sql .= ($obj->getAnomes()?$obj->getAnomes():0).',';
		 $sql .= '\''.$obj->getChave().'\',';
		 $sql .= ($obj->getNNF()?$obj->getNNF():0).',';
		 $sql .= ($obj->getSerie()?$obj->getSerie():0).',';
		 $sql .= ($obj->getTipo_emissao()?$obj->getTipo_emissao():0).',';
		 $sql .= ($obj->getAmbiente()?$obj->getAmbiente():0).',';
		 $sql .= '\''.$obj->getVersao().'\',';
		 $sql .= ($obj->getOrgao()?$obj->getOrgao():0).',';
		 $sql .= ($obj->getCStat()?$obj->getCStat():0).',';
		 $sql .= '\''.$obj->getXMotivo().'\',';
		 $sql .= ($obj->getTpEvento()?$obj->getTpEvento():0).',';
		 $sql .= '\''.$obj->getXEvento().'\',';
		 $sql .= ($obj->getNSeqEvento()?$obj->getNSeqEvento():0).',';
		 $sql .= '\''.$obj->getDhRegEvento().'\',';
		 $sql .= '\''.$obj->getNProt().'\'';
		 $sql .= ')'; 
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function update($obj){
		 $sql = 'UPDATE nfe_correc SET '; 
		 $sql .= 'seq_nfe = '.($obj->getSeq_nfe()?$obj->getSeq_nfe():0).',';
		 $sql .= 'codemp = '.($obj->getCodemp()?$obj->getCodemp():0).',';
		 $sql .= 'data_envio = '.'\''.$obj->getData_envio().'\' ,';
		 $sql .= 'anomes = '.($obj->getAnomes()?$obj->getAnomes():0).',';
		 $sql .= 'chave = '.'\''.$obj->getChave().'\' ,';
		 $sql .= 'nNF = '.($obj->getNNF()?$obj->getNNF():0).',';
		 $sql .= 'serie = '.($obj->getSerie()?$obj->getSerie():0).',';
		 $sql .= 'tipo_emissao = '.($obj->getTipo_emissao()?$obj->getTipo_emissao():0).',';
		 $sql .= 'ambiente = '.($obj->getAmbiente()?$obj->getAmbiente():0).',';
		 $sql .= 'versao = '.'\''.$obj->getVersao().'\' ,';
		 $sql .= 'orgao = '.($obj->getOrgao()?$obj->getOrgao():0).',';
		 $sql .= 'cStat = '.($obj->getCStat()?$obj->getCStat():0).',';
		 $sql .= 'xMotivo = '.'\''.$obj->getXMotivo().'\' ,';
		 $sql .= 'tpEvento = '.($obj->getTpEvento()?$obj->getTpEvento():0).',';
		 $sql .= 'xEvento = '.'\''.$obj->getXEvento().'\' ,';
		 $sql .= 'nSeqEvento = '.($obj->getNSeqEvento()?$obj->getNSeqEvento():0).',';
		 $sql .= 'dhRegEvento = '.'\''.$obj->getDhRegEvento().'\' ,';
		 $sql .= 'nProt = '.'\''.$obj->getNProt().'\' ';
		 $sql .= ' WHERE seq_nfe = '.$obj->getSeq_nfe();
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM nfe_correc WHERE seq_nfe = '.$obj->getSeq_nfe();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM nfe_correc WHERE 1=1 '; 
		if ($obj->getSeq_nfe()) { 
			$sql .= " AND seq_nfe = '".$obj->getSeq_nfe()."'";
		} 
		if ($obj->getCodemp()) { 
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		} 
		if ($obj->getData_envio()) { 
			$sql .= " AND data_envio = '".$obj->getData_envio()."'";
		} 
		if ($obj->getAnomes()) { 
			$sql .= " AND anomes = '".$obj->getAnomes()."'";
		} 
		if ($obj->getChave()) { 
			$sql .= " AND upper(chave)  like ('%".strtoupper($obj->getChave())."%')";
		} 
		if ($obj->getNNF()) { 
			$sql .= " AND nNF = '".$obj->getNNF()."'";
		} 
		if ($obj->getSerie()) { 
			$sql .= " AND serie = '".$obj->getSerie()."'";
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
		if ($obj->getOrgao()) { 
			$sql .= " AND orgao = '".$obj->getOrgao()."'";
		} 
		if ($obj->getCStat()) { 
			$sql .= " AND cStat = '".$obj->getCStat()."'";
		} 
		if ($obj->getXMotivo()) { 
			$sql .= " AND upper(xMotivo)  like ('%".strtoupper($obj->getXMotivo())."%')";
		} 
		if ($obj->getTpEvento()) { 
			$sql .= " AND tpEvento = '".$obj->getTpEvento()."'";
		} 
		if ($obj->getXEvento()) { 
			$sql .= " AND upper(xEvento)  like ('%".strtoupper($obj->getXEvento())."%')";
		} 
		if ($obj->getNSeqEvento()) { 
			$sql .= " AND nSeqEvento = '".$obj->getNSeqEvento()."'";
		} 
		if ($obj->getDhRegEvento()) { 
			$sql .= " AND upper(dhRegEvento)  like ('%".strtoupper($obj->getDhRegEvento())."%')";
		} 
		if ($obj->getNProt()) { 
			$sql .= " AND upper(nProt)  like ('%".strtoupper($obj->getNProt())."%')";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setSeq_nfe(mysql_result($rs, 0, 'seq_nfe')); 
			 $obj->setCodemp(mysql_result($rs, 0, 'codemp')); 
			 $obj->setData_envio(mysql_result($rs, 0, 'data_envio')); 
			 $obj->setAnomes(mysql_result($rs, 0, 'anomes')); 
			 $obj->setChave(mysql_result($rs, 0, 'chave')); 
			 $obj->setNNF(mysql_result($rs, 0, 'nNF')); 
			 $obj->setSerie(mysql_result($rs, 0, 'serie')); 
			 $obj->setTipo_emissao(mysql_result($rs, 0, 'tipo_emissao')); 
			 $obj->setAmbiente(mysql_result($rs, 0, 'ambiente')); 
			 $obj->setVersao(mysql_result($rs, 0, 'versao')); 
			 $obj->setOrgao(mysql_result($rs, 0, 'orgao')); 
			 $obj->setCStat(mysql_result($rs, 0, 'cStat')); 
			 $obj->setXMotivo(mysql_result($rs, 0, 'xMotivo')); 
			 $obj->setTpEvento(mysql_result($rs, 0, 'tpEvento')); 
			 $obj->setXEvento(mysql_result($rs, 0, 'xEvento')); 
			 $obj->setNSeqEvento(mysql_result($rs, 0, 'nSeqEvento')); 
			 $obj->setDhRegEvento(mysql_result($rs, 0, 'dhRegEvento')); 
			 $obj->setNProt(mysql_result($rs, 0, 'nProt')); 
		} 
		 return $obj; 
	} 

	  function countAll($obj){
		 $sql = 'SELECT count(*) as existe FROM nfe_correc WHERE 1=1 ';  


		if ($obj->getSeq_nfe()) { 
			$sql .= " AND seq_nfe = '".$obj->getSeq_nfe()."'";
		} 
		if ($obj->getCodemp()) { 
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		} 
		if ($obj->getData_envio()) { 
			$sql .= " AND data_envio = '".$obj->getData_envio()."'";
		} 
		if ($obj->getAnomes()) { 
			$sql .= " AND anomes = '".$obj->getAnomes()."'";
		} 
		if ($obj->getChave()) { 
			$sql .= " AND upper(chave)  like ('%".strtoupper($obj->getChave())."%')";
		} 
		if ($obj->getNNF()) { 
			$sql .= " AND nNF = '".$obj->getNNF()."'";
		} 
		if ($obj->getSerie()) { 
			$sql .= " AND serie = '".$obj->getSerie()."'";
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
		if ($obj->getOrgao()) { 
			$sql .= " AND orgao = '".$obj->getOrgao()."'";
		} 
		if ($obj->getCStat()) { 
			$sql .= " AND cStat = '".$obj->getCStat()."'";
		} 
		if ($obj->getXMotivo()) { 
			$sql .= " AND upper(xMotivo)  like ('%".strtoupper($obj->getXMotivo())."%')";
		} 
		if ($obj->getTpEvento()) { 
			$sql .= " AND tpEvento = '".$obj->getTpEvento()."'";
		} 
		if ($obj->getXEvento()) { 
			$sql .= " AND upper(xEvento)  like ('%".strtoupper($obj->getXEvento())."%')";
		} 
		if ($obj->getNSeqEvento()) { 
			$sql .= " AND nSeqEvento = '".$obj->getNSeqEvento()."'";
		} 
		if ($obj->getDhRegEvento()) { 
			$sql .= " AND upper(dhRegEvento)  like ('%".strtoupper($obj->getDhRegEvento())."%')";
		} 
		if ($obj->getNProt()) { 
			$sql .= " AND upper(nProt)  like ('%".strtoupper($obj->getNProt())."%')";
		} 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function verifica_existe($obj){
		 $sql = 'SELECT count(*) as existe FROM nfe_correc WHERE 1=1 ';  




		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function selectAll($obj){
		 $sql = 'SELECT * FROM nfe_correc WHERE 1=1 '; 


		if ($obj->getSeq_nfe()) { 
			 $sql .= " AND seq_nfe = '".$obj->getSeq_nfe()."'";
 				} 
		if ($obj->getCodemp()) { 
			 $sql .= " AND codemp = '".$obj->getCodemp()."'";
 				} 
		if ($obj->getData_envio()) { 
			 $sql .= " AND data_envio = '".$obj->getData_envio()."'";
 				} 
		if ($obj->getAnomes()) { 
			 $sql .= " AND anomes = '".$obj->getAnomes()."'";
 				} 
		if ($obj->getChave()) { 
			 $sql .= " AND upper(chave)  like ('%".strtoupper($obj->getChave())."%')";
 				} 
		if ($obj->getNNF()) { 
			 $sql .= " AND nNF = '".$obj->getNNF()."'";
 				} 
		if ($obj->getSerie()) { 
			 $sql .= " AND serie = '".$obj->getSerie()."'";
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
		if ($obj->getOrgao()) { 
			 $sql .= " AND orgao = '".$obj->getOrgao()."'";
 				} 
		if ($obj->getCStat()) { 
			 $sql .= " AND cStat = '".$obj->getCStat()."'";
 				} 
		if ($obj->getXMotivo()) { 
			 $sql .= " AND upper(xMotivo)  like ('%".strtoupper($obj->getXMotivo())."%')";
 				} 
		if ($obj->getTpEvento()) { 
			 $sql .= " AND tpEvento = '".$obj->getTpEvento()."'";
 				} 
		if ($obj->getXEvento()) { 
			 $sql .= " AND upper(xEvento)  like ('%".strtoupper($obj->getXEvento())."%')";
 				} 
		if ($obj->getNSeqEvento()) { 
			 $sql .= " AND nSeqEvento = '".$obj->getNSeqEvento()."'";
 				} 
		if ($obj->getDhRegEvento()) { 
			 $sql .= " AND upper(dhRegEvento)  like ('%".strtoupper($obj->getDhRegEvento())."%')";
 				} 
		if ($obj->getNProt()) { 
			 $sql .= " AND upper(nProt)  like ('%".strtoupper($obj->getNProt())."%')";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Nfe_correc(); 
			 $obj->setSeq_nfe(mysql_result($rs, $i, 'seq_nfe')); 
			 $obj->setCodemp(mysql_result($rs, $i, 'codemp')); 
			 $obj->setData_envio(mysql_result($rs, $i, 'data_envio')); 
			 $obj->setAnomes(mysql_result($rs, $i, 'anomes')); 
			 $obj->setChave(mysql_result($rs, $i, 'chave')); 
			 $obj->setNNF(mysql_result($rs, $i, 'nNF')); 
			 $obj->setSerie(mysql_result($rs, $i, 'serie')); 
			 $obj->setTipo_emissao(mysql_result($rs, $i, 'tipo_emissao')); 
			 $obj->setAmbiente(mysql_result($rs, $i, 'ambiente')); 
			 $obj->setVersao(mysql_result($rs, $i, 'versao')); 
			 $obj->setOrgao(mysql_result($rs, $i, 'orgao')); 
			 $obj->setCStat(mysql_result($rs, $i, 'cStat')); 
			 $obj->setXMotivo(mysql_result($rs, $i, 'xMotivo')); 
			 $obj->setTpEvento(mysql_result($rs, $i, 'tpEvento')); 
			 $obj->setXEvento(mysql_result($rs, $i, 'xEvento')); 
			 $obj->setNSeqEvento(mysql_result($rs, $i, 'nSeqEvento')); 
			 $obj->setDhRegEvento(mysql_result($rs, $i, 'dhRegEvento')); 
			 $obj->setNProt(mysql_result($rs, $i, 'nProt')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
} 
