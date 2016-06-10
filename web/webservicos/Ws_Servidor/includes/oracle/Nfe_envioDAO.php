<?php 
 /** Classe responsavel pelas transacoes da Tabela: Nfe_envio. */ 
class Nfe_envioDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO nfe_envio ('; 
		 $sql .= 'seq_nfe,';
		 $sql .= 'codemp,';
		 $sql .= 'data_envio,';
		 $sql .= 'anomes,';
		 $sql .= 'chave,';
		 $sql .= 'nNF,';
		 $sql .= 'serie,';
		 $sql .= 'modnfe,';
		 $sql .= 'tipo_emissao,';
		 $sql .= 'ambiente,';
		 $sql .= 'versao,';
		 $sql .= 'dhRecbto,';
		 $sql .= 'nProt,';
		 $sql .= 'xMotivo,';
		 $sql .= 'status_nfe';
		 $sql .= ') VALUES ('; 
		 $sql .= ($obj->getSeq_nfe()?$obj->getSeq_nfe():0).',';
		 $sql .= '\''.$obj->getCodemp().'\',';
		 $sql .= '\''.$obj->getData_envio().'\',';
		 $sql .= ($obj->getAnomes()?$obj->getAnomes():0).',';
		 $sql .= '\''.$obj->getChave().'\',';
		 $sql .= ($obj->getNNF()?$obj->getNNF():0).',';
		 $sql .= ($obj->getSerie()?$obj->getSerie():0).',';
		 $sql .= ($obj->getModnfe()?$obj->getModnfe():0).',';
		 $sql .= ($obj->getTipo_emissao()?$obj->getTipo_emissao():0).',';
		 $sql .= ($obj->getAmbiente()?$obj->getAmbiente():0).',';
		 $sql .= '\''.$obj->getVersao().'\',';
		 $sql .= '\''.$obj->getDhRecbto().'\',';
		 $sql .= '\''.$obj->getNProt().'\',';
		 $sql .= '\''.$obj->getXMotivo().'\',';
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
		 $sql = 'UPDATE nfe_envio SET '; 
		 $sql .= 'codemp = '.'\''.$obj->getCodemp().'\' ,';
		 $sql .= 'data_envio = '.'\''.$obj->getData_envio().'\' ,';
		 $sql .= 'anomes = '.($obj->getAnomes()?$obj->getAnomes():0).',';
		 $sql .= 'chave = '.'\''.$obj->getChave().'\' ,';
		 $sql .= 'nNF = '.($obj->getNNF()?$obj->getNNF():0).',';
		 $sql .= 'serie = '.($obj->getSerie()?$obj->getSerie():0).',';
		 $sql .= 'modnfe = '.($obj->getModnfe()?$obj->getModnfe():0).',';
		 $sql .= 'tipo_emissao = '.($obj->getTipo_emissao()?$obj->getTipo_emissao():0).',';
		 $sql .= 'ambiente = '.($obj->getAmbiente()?$obj->getAmbiente():0).',';
		 $sql .= 'versao = '.'\''.$obj->getVersao().'\' ,';
		 $sql .= 'dhRecbto = '.'\''.$obj->getDhRecbto().'\' ,';
		 $sql .= 'nProt = '.'\''.$obj->getNProt().'\' ,';
		 $sql .= 'xMotivo = '.'\''.$obj->getXMotivo().'\' ,';
		 $sql .= 'status_nfe = '.($obj->getStatus_nfe()?$obj->getStatus_nfe():0);
		 $sql .= ' WHERE seq_nfe = '.$obj->getSeq_nfe();
		 
	//	 echo "<hr>".$sql;
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM nfe_envio WHERE seq_nfe = '.$obj->getSeq_nfe();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM nfe_envio WHERE 1=1 '; 
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
		if ($obj->getModnfe()) { 
			$sql .= " AND modnfe = '".$obj->getModnfe()."'";
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
		if ($obj->getNProt()) { 
			$sql .= " AND upper(nProt)  like ('%".strtoupper($obj->getNProt())."%')";
		} 
		if ($obj->getXMotivo()) { 
			$sql .= " AND upper(xMotivo)  like ('%".strtoupper($obj->getXMotivo())."%')";
		} 
		if ($obj->getStatus_nfe()) { 
			$sql .= " AND status_nfe = '".$obj->getStatus_nfe()."'";
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
			 $obj->setModnfe(mysql_result($rs, 0, 'modnfe')); 
			 $obj->setTipo_emissao(mysql_result($rs, 0, 'tipo_emissao')); 
			 $obj->setAmbiente(mysql_result($rs, 0, 'ambiente')); 
			 $obj->setVersao(mysql_result($rs, 0, 'versao')); 
			 $obj->setDhRecbto(mysql_result($rs, 0, 'dhRecbto')); 
			 $obj->setNProt(mysql_result($rs, 0, 'nProt')); 
			 $obj->setXMotivo(mysql_result($rs, 0, 'xMotivo')); 
			 $obj->setStatus_nfe(mysql_result($rs, 0, 'status_nfe')); 
		} 
		 return $obj; 
	} 

	  function countAll($obj){
		 $sql = 'SELECT count(*) as existe FROM nfe_envio WHERE 1=1 ';  


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
		if ($obj->getModnfe()) { 
			$sql .= " AND modnfe = '".$obj->getModnfe()."'";
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
		if ($obj->getNProt()) { 
			$sql .= " AND upper(nProt)  like ('%".strtoupper($obj->getNProt())."%')";
		} 
		if ($obj->getXMotivo()) { 
			$sql .= " AND upper(xMotivo)  like ('%".strtoupper($obj->getXMotivo())."%')";
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
		 $sql = 'SELECT count(*) as existe FROM nfe_envio WHERE 1=1 ';  


		if ($obj->getNNF()) { 
			$sql .= " AND nNF = '".$obj->getNNF()."'";
		} 
		if ($obj->getSerie()) { 
			$sql .= " AND serie = '".$obj->getSerie()."'";
		} 
		if ($obj->getModnfe()) { 
			$sql .= " AND modnfe = '".$obj->getModnfe()."'";
		} 
		


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 
		
		
 	  function verifica_existe_sequencia($serie,$nfini,$nffim){
		$sql = 'SELECT count(*) as existe FROM nfe_envio WHERE 1=1 AND modnfe = "'.$modnfe;  
		
		if ($serie) { 
			$sql .= " AND serie = '".$serie."'";
		} 

		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 
		
 	  function verifica_sequencia_notas($codemp){
		$sql = 'SELECT max(nNF) as seq FROM nfe_envio WHERE 1=1 AND codemp = "'.$codemp.'"';  

		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['seq']; 
		 return $existe; 
		} 
		
 	  function verifica_existe_periodo($codemp,$dtini,$dtfim,$modnfe,$ordem=''){
 	  	$sql = 'SELECT count(*) as existe FROM nfe_envio WHERE 1=1 ';
 	  	$sql .= " AND codemp = '".$codemp."'";
 	  	$sql .= " AND data_envio between '".$dtini."' and '".$dtfim."'";
 	  	
 	  	if ($modnfe) {
 	  		$sql .= " AND modnfe = '".$modnfe."'";
 	  	}

		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 

 	  function busca_periodo($codemp,$dtini,$dtfim,$modnfe,$ordem=''){
		 $sql = 'SELECT * FROM nfe_envio WHERE 1=1 '; 
		 $sql .= " AND codemp = '".$codemp."'";
   	  	 $sql .= " AND data_envio between '".$dtini."' and '".$dtfim."'"; 
   	  	 
 	  	if ($modnfe) {
 	  		$sql .= " AND modnfe = '".$modnfe."'";
 	  	}
	 
		 if ($ordem == 2) {
		 	$sql .= " order by 6 desc";		
		 } else {
 		 	$sql .= " order by 1,3";		
		 }
 
		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Nfe_envio(); 
			 $obj->setSeq_nfe(mysql_result($rs, $i, 'seq_nfe')); 
			 $obj->setCodemp(mysql_result($rs, $i, 'codemp')); 
			 $obj->setData_envio(mysql_result($rs, $i, 'data_envio')); 
			 $obj->setAnomes(mysql_result($rs, $i, 'anomes')); 
			 $obj->setChave(mysql_result($rs, $i, 'chave')); 
			 $obj->setNNF(mysql_result($rs, $i, 'nNF')); 
			 $obj->setSerie(mysql_result($rs, $i, 'serie')); 
			 $obj->setModnfe(mysql_result($rs, 0, 'modnfe')); 
			 $obj->setTipo_emissao(mysql_result($rs, $i, 'tipo_emissao')); 
			 $obj->setAmbiente(mysql_result($rs, $i, 'ambiente')); 
			 $obj->setVersao(mysql_result($rs, $i, 'versao')); 
			 $obj->setDhRecbto(mysql_result($rs, $i, 'dhRecbto')); 
			 $obj->setNProt(mysql_result($rs, $i, 'nProt')); 
			 $obj->setXMotivo(mysql_result($rs, $i, 'xMotivo')); 
			 $obj->setStatus_nfe(mysql_result($rs, $i, 'status_nfe')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
 				
 	  }
 	  function selectAll($obj){
		 $sql = 'SELECT * FROM nfe_envio WHERE 1=1 '; 


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
		if ($obj->getModnfe()) { 
			$sql .= " AND modnfe = '".$obj->getModnfe()."'";
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
		if ($obj->getNProt()) { 
			 $sql .= " AND upper(nProt)  like ('%".strtoupper($obj->getNProt())."%')";
 				} 
		if ($obj->getXMotivo()) { 
			 $sql .= " AND upper(xMotivo)  like ('%".strtoupper($obj->getXMotivo())."%')";
 				} 
		if ($obj->getStatus_nfe()) { 
			 $sql .= " AND status_nfe = '".$obj->getStatus_nfe()."'";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Nfe_envio(); 
			 $obj->setSeq_nfe(mysql_result($rs, $i, 'seq_nfe')); 
			 $obj->setCodemp(mysql_result($rs, $i, 'codemp')); 
			 $obj->setData_envio(mysql_result($rs, $i, 'data_envio')); 
			 $obj->setAnomes(mysql_result($rs, $i, 'anomes')); 
			 $obj->setChave(mysql_result($rs, $i, 'chave')); 
			 $obj->setNNF(mysql_result($rs, $i, 'nNF')); 
			 $obj->setSerie(mysql_result($rs, $i, 'serie')); 
			 $obj->setModnfe(mysql_result($rs, 0, 'modnfe')); 
			 $obj->setTipo_emissao(mysql_result($rs, $i, 'tipo_emissao')); 
			 $obj->setAmbiente(mysql_result($rs, $i, 'ambiente')); 
			 $obj->setVersao(mysql_result($rs, $i, 'versao')); 
			 $obj->setDhRecbto(mysql_result($rs, $i, 'dhRecbto')); 
			 $obj->setNProt(mysql_result($rs, $i, 'nProt')); 
			 $obj->setXMotivo(mysql_result($rs, $i, 'xMotivo')); 
			 $obj->setStatus_nfe(mysql_result($rs, $i, 'status_nfe')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
	  function proximo(){
		 $sql = 'SELECT max(seq_nfe) as existe FROM nfe_envio WHERE 1=1 ';  
		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 
	 
} 
