<?php 
 /** Classe responsavel pelas transacoes da Tabela: Nfe_inutil. */ 
class Nfe_inutilDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO nfe_inutil ('; 
		 $sql .= 'seq,';
		 $sql .= 'Id,';
		 $sql .= 'CNPJ,';
		 $sql .= 'serie,';
		 $sql .= 'nNFIni,';
		 $sql .= 'nNFFin,';
		 $sql .= 'modnfe,';
		 $sql .= 'tpAmb,';
		 $sql .= 'xServ,';
		 $sql .= 'cUF,';
		 $sql .= 'ano,';
		 $sql .= 'xJust,';
		 $sql .= 'cStat,';
		 $sql .= 'xMotivo,';
		 $sql .= 'dhRecbto,';
		 $sql .= 'nProt,';
		 $sql .= 'situacao';
		 $sql .= ') VALUES ('; 
		 $sql .= ($obj->getSeq()?$obj->getSeq():0).',';
		 $sql .= '\''.$obj->getId().'\',';
		 $sql .= '\''.$obj->getCNPJ().'\',';
		 $sql .= '\''.$obj->getSerie().'\',';
		 $sql .= ($obj->getNNFIni()?$obj->getNNFIni():0).',';
		 $sql .= ($obj->getNNFFin()?$obj->getNNFFin():0).',';
		 $sql .= ($obj->getModnfe()?$obj->getModnfe():0).',';
		 $sql .= ($obj->getTpAmb()?$obj->getTpAmb():0).',';
		 $sql .= '\''.$obj->getXServ().'\',';
		 $sql .= '\''.$obj->getCUF().'\',';
		 $sql .= ($obj->getAno()?$obj->getAno():0).',';
		 $sql .= '\''.$obj->getXJust().'\',';
		 $sql .= '\''.$obj->getCStat().'\',';
		 $sql .= '\''.$obj->getXMotivo().'\',';
		 $sql .= '\''.$obj->getDhRecbto().'\',';
		 $sql .= '\''.$obj->getNProt().'\',';
		 $sql .= '\''.$obj->getSituacao().'\'';
		 $sql .= ')'; 
		 
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function update($obj){
		 $sql = 'UPDATE nfe_inutil SET '; 
		 $sql .= 'seq = '.($obj->getSeq()?$obj->getSeq():0).',';
		 $sql .= 'Id = '.($obj->getId()?$obj->getId():0).',';
		 $sql .= 'CNPJ = '.'\''.$obj->getCNPJ().'\' ,';
		 $sql .= 'serie = '.'\''.$obj->getSerie().'\' ,';
		 $sql .= 'nNFIni = '.($obj->getNNFIni()?$obj->getNNFIni():0).',';
		 $sql .= 'nNFFin = '.($obj->getNNFFin()?$obj->getNNFFin():0).',';
		 $sql .= 'modnfe = '.($obj->getModnfe()?$obj->getModnfe():0).',';
		 $sql .= 'tpAmb = '.($obj->getTpAmb()?$obj->getTpAmb():0).',';
		 $sql .= 'xServ = '.'\''.$obj->getXServ().'\' ,';
		 $sql .= 'cUF = '.'\''.$obj->getCUF().'\' ,';
		 $sql .= 'ano = '.($obj->getAno()?$obj->getAno():0).',';
		 $sql .= 'xJust = '.'\''.$obj->getXJust().'\' ,';
		 $sql .= 'cStat = '.'\''.$obj->getCStat().'\' ,';
		 $sql .= 'xMotivo = '.'\''.$obj->getXMotivo().'\' ,';
		 $sql .= 'dhRecbto = '.'\''.$obj->getDhRecbto().'\' ,';
		 $sql .= 'nProt = '.'\''.$obj->getNProt().'\' ,';
		 $sql .= 'situacao = '.'\''.$obj->getSituacao().'\' ';
		 $sql .= ' WHERE seq = '.$obj->getSeq();
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM nfe_inutil WHERE seq = '.$obj->getSeq();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM nfe_inutil WHERE 1=1 '; 
		if ($obj->getSeq()) { 
			$sql .= " AND seq = '".$obj->getSeq()."'";
		} 
		if ($obj->getId()) { 
			$sql .= " AND Id = '".$obj->getId()."'";
		} 
		if ($obj->getCNPJ()) { 
			$sql .= " AND CNPJ = '".$obj->getCNPJ()."'";
		} 
		if ($obj->getSerie()) { 
			$sql .= " AND upper(serie)  like ('%".strtoupper($obj->getSerie())."%')";
		} 
		if ($obj->getNNFIni()) { 
			$sql .= " AND nNFIni = '".$obj->getNNFIni()."'";
		} 
		if ($obj->getNNFFin()) { 
			$sql .= " AND nNFFin = '".$obj->getNNFFin()."'";
		} 
		if ($obj->getModnfe()) { 
			$sql .= " AND modnfe = '".$obj->getModnfe()."'";
		} 
		if ($obj->getTpAmb()) { 
			$sql .= " AND tpAmb = '".$obj->getTpAmb()."'";
		} 
		if ($obj->getXServ()) { 
			$sql .= " AND upper(xServ)  like ('%".strtoupper($obj->getXServ())."%')";
		} 
		if ($obj->getCUF()) { 
			$sql .= " AND upper(cUF)  like ('%".strtoupper($obj->getCUF())."%')";
		} 
		if ($obj->getAno()) { 
			$sql .= " AND ano = '".$obj->getAno()."'";
		} 
		if ($obj->getXJust()) { 
			$sql .= " AND upper(xJust)  like ('%".strtoupper($obj->getXJust())."%')";
		} 
		if ($obj->getCStat()) { 
			$sql .= " AND upper(cStat)  like ('%".strtoupper($obj->getCStat())."%')";
		} 
		if ($obj->getXMotivo()) { 
			$sql .= " AND upper(xMotivo)  like ('%".strtoupper($obj->getXMotivo())."%')";
		} 
		if ($obj->getDhRecbto()) { 
			$sql .= " AND upper(dhRecbto)  like ('%".strtoupper($obj->getDhRecbto())."%')";
		} 
		if ($obj->getNProt()) { 
			$sql .= " AND upper(nProt)  like ('%".strtoupper($obj->getNProt())."%')";
		} 
		if ($obj->getSituacao()) { 
			$sql .= " AND upper(situacao)  like ('%".strtoupper($obj->getSituacao())."%')";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setSeq(mysql_result($rs, 0, 'seq')); 
			 $obj->setId(mysql_result($rs, 0, 'Id')); 
			 $obj->setCNPJ(mysql_result($rs, 0, 'CNPJ')); 
			 $obj->setSerie(mysql_result($rs, 0, 'serie')); 
			 $obj->setNNFIni(mysql_result($rs, 0, 'nNFIni')); 
			 $obj->setNNFFin(mysql_result($rs, 0, 'nNFFin')); 
			 $obj->setModnfe(mysql_result($rs, 0, 'modnfe')); 
			 $obj->setTpAmb(mysql_result($rs, 0, 'tpAmb')); 
			 $obj->setXServ(mysql_result($rs, 0, 'xServ')); 
			 $obj->setCUF(mysql_result($rs, 0, 'cUF')); 
			 $obj->setAno(mysql_result($rs, 0, 'ano')); 
			 $obj->setXJust(mysql_result($rs, 0, 'xJust')); 
			 $obj->setCStat(mysql_result($rs, 0, 'cStat')); 
			 $obj->setXMotivo(mysql_result($rs, 0, 'xMotivo')); 
			 $obj->setDhRecbto(mysql_result($rs, 0, 'dhRecbto')); 
			 $obj->setNProt(mysql_result($rs, 0, 'nProt')); 
			 $obj->setSituacao(mysql_result($rs, 0, 'situacao')); 
		} 
		 return $obj; 
	} 

	  function countAll($obj){
		 $sql = 'SELECT count(*) as existe FROM nfe_inutil WHERE 1=1 ';  


		if ($obj->getSeq()) { 
			$sql .= " AND seq = '".$obj->getSeq()."'";
		} 
		if ($obj->getId()) { 
			$sql .= " AND Id = '".$obj->getId()."'";
		} 
		if ($obj->getCNPJ()) { 
			$sql .= " AND CNPJ = '".$obj->getCNPJ()."'";
		} 
		if ($obj->getSerie()) { 
			$sql .= " AND upper(serie)  like ('%".strtoupper($obj->getSerie())."%')";
		} 
		if ($obj->getNNFIni()) { 
			$sql .= " AND nNFIni = '".$obj->getNNFIni()."'";
		} 
		if ($obj->getNNFFin()) { 
			$sql .= " AND nNFFin = '".$obj->getNNFFin()."'";
		} 
		if ($obj->getModnfe()) { 
			$sql .= " AND modnfe = '".$obj->getModnfe()."'";
		} 
		if ($obj->getTpAmb()) { 
			$sql .= " AND tpAmb = '".$obj->getTpAmb()."'";
		} 
		if ($obj->getXServ()) { 
			$sql .= " AND upper(xServ)  like ('%".strtoupper($obj->getXServ())."%')";
		} 
		if ($obj->getCUF()) { 
			$sql .= " AND upper(cUF)  like ('%".strtoupper($obj->getCUF())."%')";
		} 
		if ($obj->getAno()) { 
			$sql .= " AND ano = '".$obj->getAno()."'";
		} 
		if ($obj->getXJust()) { 
			$sql .= " AND upper(xJust)  like ('%".strtoupper($obj->getXJust())."%')";
		} 
		if ($obj->getCStat()) { 
			$sql .= " AND upper(cStat)  like ('%".strtoupper($obj->getCStat())."%')";
		} 
		if ($obj->getXMotivo()) { 
			$sql .= " AND upper(xMotivo)  like ('%".strtoupper($obj->getXMotivo())."%')";
		} 
		if ($obj->getDhRecbto()) { 
			$sql .= " AND upper(dhRecbto)  like ('%".strtoupper($obj->getDhRecbto())."%')";
		} 
		if ($obj->getNProt()) { 
			$sql .= " AND upper(nProt)  like ('%".strtoupper($obj->getNProt())."%')";
		} 
		if ($obj->getSituacao()) { 
			$sql .= " AND upper(situacao)  like ('%".strtoupper($obj->getSituacao())."%')";
		} 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function verifica_existe($obj){
		 $sql = 'SELECT count(*) as existe FROM nfe_inutil WHERE 1=1 ';  




		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function selectAll($obj){
		 $sql = 'SELECT * FROM nfe_inutil WHERE 1=1 '; 


		if ($obj->getSeq()) { 
			 $sql .= " AND seq = '".$obj->getSeq()."'";
 				} 
		if ($obj->getId()) { 
			 $sql .= " AND Id = '".$obj->getId()."'";
 				} 
		if ($obj->getCNPJ()) { 
			 $sql .= " AND CNPJ = '".$obj->getCNPJ()."'";
 				} 
		if ($obj->getSerie()) { 
			 $sql .= " AND upper(serie)  like ('%".strtoupper($obj->getSerie())."%')";
 				} 
		if ($obj->getNNFIni()) { 
			 $sql .= " AND nNFIni = '".$obj->getNNFIni()."'";
 				} 
		if ($obj->getNNFFin()) { 
			 $sql .= " AND nNFFin = '".$obj->getNNFFin()."'";
 				} 
		if ($obj->getModnfe()) { 
			 $sql .= " AND modnfe = '".$obj->getModnfe()."'";
 				} 
		if ($obj->getTpAmb()) { 
			 $sql .= " AND tpAmb = '".$obj->getTpAmb()."'";
 				} 
		if ($obj->getXServ()) { 
			 $sql .= " AND upper(xServ)  like ('%".strtoupper($obj->getXServ())."%')";
 				} 
		if ($obj->getCUF()) { 
			 $sql .= " AND upper(cUF)  like ('%".strtoupper($obj->getCUF())."%')";
 				} 
		if ($obj->getAno()) { 
			 $sql .= " AND ano = '".$obj->getAno()."'";
 				} 
		if ($obj->getXJust()) { 
			 $sql .= " AND upper(xJust)  like ('%".strtoupper($obj->getXJust())."%')";
 				} 
		if ($obj->getCStat()) { 
			 $sql .= " AND upper(cStat)  like ('%".strtoupper($obj->getCStat())."%')";
 				} 
		if ($obj->getXMotivo()) { 
			 $sql .= " AND upper(xMotivo)  like ('%".strtoupper($obj->getXMotivo())."%')";
 				} 
		if ($obj->getDhRecbto()) { 
			 $sql .= " AND upper(dhRecbto)  like ('%".strtoupper($obj->getDhRecbto())."%')";
 				} 
		if ($obj->getNProt()) { 
			 $sql .= " AND upper(nProt)  like ('%".strtoupper($obj->getNProt())."%')";
 				} 
		if ($obj->getSituacao()) { 
			 $sql .= " AND upper(situacao)  like ('%".strtoupper($obj->getSituacao())."%')";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Nfe_inutil(); 
			 $obj->setSeq(mysql_result($rs, $i, 'seq')); 
			 $obj->setId(mysql_result($rs, $i, 'Id')); 
			 $obj->setCNPJ(mysql_result($rs, $i, 'CNPJ')); 
			 $obj->setSerie(mysql_result($rs, $i, 'serie')); 
			 $obj->setNNFIni(mysql_result($rs, $i, 'nNFIni')); 
			 $obj->setNNFFin(mysql_result($rs, $i, 'nNFFin')); 
			 $obj->setModnfe(mysql_result($rs, $i, 'modnfe')); 
			 $obj->setTpAmb(mysql_result($rs, $i, 'tpAmb')); 
			 $obj->setXServ(mysql_result($rs, $i, 'xServ')); 
			 $obj->setCUF(mysql_result($rs, $i, 'cUF')); 
			 $obj->setAno(mysql_result($rs, $i, 'ano')); 
			 $obj->setXJust(mysql_result($rs, $i, 'xJust')); 
			 $obj->setCStat(mysql_result($rs, $i, 'cStat')); 
			 $obj->setXMotivo(mysql_result($rs, $i, 'xMotivo')); 
			 $obj->setDhRecbto(mysql_result($rs, $i, 'dhRecbto')); 
			 $obj->setNProt(mysql_result($rs, $i, 'nProt')); 
			 $obj->setSituacao(mysql_result($rs, $i, 'situacao')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
	 
	  function proximo(){
		 $sql = 'SELECT max(seq_nfe) as existe FROM nfe_inutil WHERE 1=1 ';  
		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 
	 
} 
