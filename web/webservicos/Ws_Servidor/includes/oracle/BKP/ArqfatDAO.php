<?php 
 /** Classe responsavel pelas transacoes da Tabela: Arqfat. */ 
class ArqfatDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO arqfat ('; 
		 $sql .= 'codemp,';
		 $sql .= 'id_venda,';
		 $sql .= 'data_venda,';
		 $sql .= 'id_cpf,';
		 $sql .= 'id_cliente,';
		 $sql .= 'id_controle,';
		 $sql .= 'valor_fatura,';
		 $sql .= 'data_pagamento,';
		 $sql .= 'valor_parcela,';
		 $sql .= 'nr_parcelas,';
		 $sql .= 'data_final,';
		 $sql .= 'valor_pago,';
		 $sql .= 'situacao,';
		 $sql .= 'obsFatura';
		 $sql .= ') VALUES ('; 
		 $sql .= ($obj->getCodemp()?$obj->getCodemp():0).',';
		 $sql .= ($obj->getId_venda()?$obj->getId_venda():0).',';
		 $sql .= '\''.$obj->getData_venda().'\',';
		 $sql .= '\''.$obj->getId_cpf().'\',';
		 $sql .= ($obj->getId_cliente()?$obj->getId_cliente():0).',';
		 $sql .= ($obj->getId_controle()?$obj->getId_controle():0).',';
		 $sql .= ($obj->getValor_fatura()?$obj->getValor_fatura():0).',';
		 $sql .= '\''.$obj->getData_pagamento().'\',';
		 $sql .= ($obj->getValor_parcela()?$obj->getValor_parcela():0).',';
		 $sql .= ($obj->getNr_parcelas()?$obj->getNr_parcelas():0).',';
		 $sql .= '\''.$obj->getData_final().'\',';
		 $sql .= ($obj->getValor_pago()?$obj->getValor_pago():0).',';
		 $sql .= ($obj->getSituacao()?$obj->getSituacao():0).',';
		 $sql .= '\''.$obj->getObsFatura().'\'';
		 $sql .= ')'; 
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function update($obj){
		 $sql = 'UPDATE arqfat SET '; 
		 $sql .= 'codemp = '.($obj->getCodemp()?$obj->getCodemp():0).',';
		 $sql .= 'id_venda = '.($obj->getId_venda()?$obj->getId_venda():0).',';
		 $sql .= 'data_venda = '.'\''.$obj->getData_venda().'\' ,';
		 $sql .= 'id_cpf = '.'\''.$obj->getId_cpf().'\' ,';
		 $sql .= 'id_cliente = '.($obj->getId_cliente()?$obj->getId_cliente():0).',';
		 $sql .= 'id_controle = '.($obj->getId_controle()?$obj->getId_controle():0).',';
		 $sql .= 'valor_fatura = '.($obj->getValor_fatura()?$obj->getValor_fatura():0).',';
		 $sql .= 'data_pagamento = '.'\''.$obj->getData_pagamento().'\' ,';
		 $sql .= 'valor_parcela = '.($obj->getValor_parcela()?$obj->getValor_parcela():0).',';
		 $sql .= 'nr_parcelas = '.($obj->getNr_parcelas()?$obj->getNr_parcelas():0).',';
		 $sql .= 'data_final = '.'\''.$obj->getData_final().'\' ,';
		 $sql .= 'valor_pago = '.($obj->getValor_pago()?$obj->getValor_pago():0).',';
		 $sql .= 'situacao = '.($obj->getSituacao()?$obj->getSituacao():0).',';
		 $sql .= 'obsFatura = '.'\''.$obj->getObsFatura().'\' ';
		 $sql .= ' WHERE codemp = '.$obj->getCodemp();
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM arqfat WHERE codemp = '.$obj->getCodemp();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM arqfat WHERE 1=1 '; 
		if ($obj->getCodemp()) { 
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		} 
		if ($obj->getId_venda()) { 
			$sql .= " AND id_venda = '".$obj->getId_venda()."'";
		} 
		if ($obj->getData_venda()) { 
			$sql .= " AND data_venda = '".$obj->getData_venda()."'";
		} 
		if ($obj->getId_cpf()) { 
			$sql .= " AND id_cpf = '".$obj->getId_cpf()."'";
		} 
		if ($obj->getId_cliente()) { 
			$sql .= " AND id_cliente = '".$obj->getId_cliente()."'";
		} 
		if ($obj->getId_controle()) { 
			$sql .= " AND id_controle = '".$obj->getId_controle()."'";
		} 
		if ($obj->getValor_fatura()) { 
			$sql .= " AND valor_fatura = '".$obj->getValor_fatura()."'";
		} 
		if ($obj->getData_pagamento()) { 
			$sql .= " AND data_pagamento = '".$obj->getData_pagamento()."'";
		} 
		if ($obj->getValor_parcela()) { 
			$sql .= " AND valor_parcela = '".$obj->getValor_parcela()."'";
		} 
		if ($obj->getNr_parcelas()) { 
			$sql .= " AND nr_parcelas = '".$obj->getNr_parcelas()."'";
		} 
		if ($obj->getData_final()) { 
			$sql .= " AND data_final = '".$obj->getData_final()."'";
		} 
		if ($obj->getValor_pago()) { 
			$sql .= " AND valor_pago = '".$obj->getValor_pago()."'";
		} 
		if ($obj->getSituacao()) { 
			$sql .= " AND situacao = '".$obj->getSituacao()."'";
		} 
		if ($obj->getObsFatura()) { 
			$sql .= " AND upper(obsFatura)  like ('%".strtoupper($obj->getObsFatura())."%')";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setCodemp(mysql_result($rs, 0, 'codemp')); 
			 $obj->setId_venda(mysql_result($rs, 0, 'id_venda')); 
			 $obj->setData_venda(mysql_result($rs, 0, 'data_venda')); 
			 $obj->setId_cpf(mysql_result($rs, 0, 'id_cpf')); 
			 $obj->setId_cliente(mysql_result($rs, 0, 'id_cliente')); 
			 $obj->setId_controle(mysql_result($rs, 0, 'id_controle')); 
			 $obj->setValor_fatura(mysql_result($rs, 0, 'valor_fatura')); 
			 $obj->setData_pagamento(mysql_result($rs, 0, 'data_pagamento')); 
			 $obj->setValor_parcela(mysql_result($rs, 0, 'valor_parcela')); 
			 $obj->setNr_parcelas(mysql_result($rs, 0, 'nr_parcelas')); 
			 $obj->setData_final(mysql_result($rs, 0, 'data_final')); 
			 $obj->setValor_pago(mysql_result($rs, 0, 'valor_pago')); 
			 $obj->setSituacao(mysql_result($rs, 0, 'situacao')); 
			 $obj->setObsFatura(mysql_result($rs, 0, 'obsFatura')); 
		} 
		 return $obj; 
	} 

	  function countAll($obj){
		 $sql = 'SELECT count(*) as existe FROM arqfat WHERE 1=1 ';  


		if ($obj->getCodemp()) { 
			$sql .= " AND codemp = '".$obj->getCodemp()."'";
		} 
		if ($obj->getId_venda()) { 
			$sql .= " AND id_venda = '".$obj->getId_venda()."'";
		} 
		if ($obj->getData_venda()) { 
			$sql .= " AND data_venda = '".$obj->getData_venda()."'";
		} 
		if ($obj->getId_cpf()) { 
			$sql .= " AND id_cpf = '".$obj->getId_cpf()."'";
		} 
		if ($obj->getId_cliente()) { 
			$sql .= " AND id_cliente = '".$obj->getId_cliente()."'";
		} 
		if ($obj->getId_controle()) { 
			$sql .= " AND id_controle = '".$obj->getId_controle()."'";
		} 
		if ($obj->getValor_fatura()) { 
			$sql .= " AND valor_fatura = '".$obj->getValor_fatura()."'";
		} 
		if ($obj->getData_pagamento()) { 
			$sql .= " AND data_pagamento = '".$obj->getData_pagamento()."'";
		} 
		if ($obj->getValor_parcela()) { 
			$sql .= " AND valor_parcela = '".$obj->getValor_parcela()."'";
		} 
		if ($obj->getNr_parcelas()) { 
			$sql .= " AND nr_parcelas = '".$obj->getNr_parcelas()."'";
		} 
		if ($obj->getData_final()) { 
			$sql .= " AND data_final = '".$obj->getData_final()."'";
		} 
		if ($obj->getValor_pago()) { 
			$sql .= " AND valor_pago = '".$obj->getValor_pago()."'";
		} 
		if ($obj->getSituacao()) { 
			$sql .= " AND situacao = '".$obj->getSituacao()."'";
		} 
		if ($obj->getObsFatura()) { 
			$sql .= " AND upper(obsFatura)  like ('%".strtoupper($obj->getObsFatura())."%')";
		} 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function verifica_existe($obj){
		 $sql = 'SELECT count(*) as existe FROM arqfat WHERE 1=1 ';  


		 if ($obj->getId_venda()) { 
			 $sql .= 	 "AND id_venda = '".$obj->getId_venda()."'";
 		 } 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function selectAll($obj){
		 $sql = 'SELECT * FROM arqfat WHERE 1=1 '; 


		if ($obj->getCodemp()) { 
			 $sql .= " AND codemp = '".$obj->getCodemp()."'";
 				} 
		if ($obj->getId_venda()) { 
			 $sql .= " AND id_venda = '".$obj->getId_venda()."'";
 				} 
		if ($obj->getData_venda()) { 
			 $sql .= " AND data_venda = '".$obj->getData_venda()."'";
 				} 
		if ($obj->getId_cpf()) { 
			 $sql .= " AND id_cpf = '".$obj->getId_cpf()."'";
 				} 
		if ($obj->getId_cliente()) { 
			 $sql .= " AND id_cliente = '".$obj->getId_cliente()."'";
 				} 
		if ($obj->getId_controle()) { 
			 $sql .= " AND id_controle = '".$obj->getId_controle()."'";
 				} 
		if ($obj->getValor_fatura()) { 
			 $sql .= " AND valor_fatura = '".$obj->getValor_fatura()."'";
 				} 
		if ($obj->getData_pagamento()) { 
			 $sql .= " AND data_pagamento = '".$obj->getData_pagamento()."'";
 				} 
		if ($obj->getValor_parcela()) { 
			 $sql .= " AND valor_parcela = '".$obj->getValor_parcela()."'";
 				} 
		if ($obj->getNr_parcelas()) { 
			 $sql .= " AND nr_parcelas = '".$obj->getNr_parcelas()."'";
 				} 
		if ($obj->getData_final()) { 
			 $sql .= " AND data_final = '".$obj->getData_final()."'";
 				} 
		if ($obj->getValor_pago()) { 
			 $sql .= " AND valor_pago = '".$obj->getValor_pago()."'";
 				} 
		if ($obj->getSituacao()) { 
			 $sql .= " AND situacao = '".$obj->getSituacao()."'";
 				} 
		if ($obj->getObsFatura()) { 
			 $sql .= " AND upper(obsFatura)  like ('%".strtoupper($obj->getObsFatura())."%')";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Arqfat(); 
			 $obj->setCodemp(mysql_result($rs, $i, 'codemp')); 
			 $obj->setId_venda(mysql_result($rs, $i, 'id_venda')); 
			 $obj->setData_venda(mysql_result($rs, $i, 'data_venda')); 
			 $obj->setId_cpf(mysql_result($rs, $i, 'id_cpf')); 
			 $obj->setId_cliente(mysql_result($rs, $i, 'id_cliente')); 
			 $obj->setId_controle(mysql_result($rs, $i, 'id_controle')); 
			 $obj->setValor_fatura(mysql_result($rs, $i, 'valor_fatura')); 
			 $obj->setData_pagamento(mysql_result($rs, $i, 'data_pagamento')); 
			 $obj->setValor_parcela(mysql_result($rs, $i, 'valor_parcela')); 
			 $obj->setNr_parcelas(mysql_result($rs, $i, 'nr_parcelas')); 
			 $obj->setData_final(mysql_result($rs, $i, 'data_final')); 
			 $obj->setValor_pago(mysql_result($rs, $i, 'valor_pago')); 
			 $obj->setSituacao(mysql_result($rs, $i, 'situacao')); 
			 $obj->setObsFatura(mysql_result($rs, $i, 'obsFatura')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
} 
