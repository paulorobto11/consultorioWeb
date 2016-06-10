<?php 
 /** Classe responsavel pelas transacoes da Tabela: Arqdetpd. */ 
class ArqdetpdDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO arqdetpd ('; 
		 $sql .= 'codemp,';
		 $sql .= 'id_venda,';
		 $sql .= 'data_venda,';
		 $sql .= 'id_cpf,';
		 $sql .= 'id_cliente,';
		 $sql .= 'id_controle,';
		 $sql .= 'id_detvenda,';
		 $sql .= 'id_produto,';
		 $sql .= 'id_qtde,';
		 $sql .= 'id_custo,';
		 $sql .= 'valor_custo,';
		 $sql .= 'valor_bruto,';
		 $sql .= 'valor_descto,';
		 $sql .= 'valor_venda,';
		 $sql .= 'vlr_icms,';
		 $sql .= 'vlr_ipi,';
		 $sql .= 'vlr_pis,';
		 $sql .= 'vlr_cofins';
		 $sql .= ') VALUES ('; 
		 $sql .= ($obj->getCodemp()?$obj->getCodemp():0).',';
		 $sql .= ($obj->getId_venda()?$obj->getId_venda():0).',';
		 $sql .= '\''.$obj->getData_venda().'\',';
		 $sql .= '\''.$obj->getId_cpf().'\',';
		 $sql .= ($obj->getId_cliente()?$obj->getId_cliente():0).',';
		 $sql .= ($obj->getId_controle()?$obj->getId_controle():0).',';
		 $sql .= ($obj->getId_detvenda()?$obj->getId_detvenda():0).',';
		 $sql .= ($obj->getId_produto()?$obj->getId_produto():0).',';
		 $sql .= ($obj->getId_qtde()?$obj->getId_qtde():0).',';
		 $sql .= ($obj->getId_custo()?$obj->getId_custo():0).',';
		 $sql .= ($obj->getValor_custo()?$obj->getValor_custo():0).',';
		 $sql .= ($obj->getValor_bruto()?$obj->getValor_bruto():0).',';
		 $sql .= ($obj->getValor_descto()?$obj->getValor_descto():0).',';
		 $sql .= ($obj->getValor_venda()?$obj->getValor_venda():0).',';
		 $sql .= ($obj->getVlr_icms()?$obj->getVlr_icms():0).',';
		 $sql .= ($obj->getVlr_ipi()?$obj->getVlr_ipi():0).',';
		 $sql .= ($obj->getVlr_pis()?$obj->getVlr_pis():0).',';
		 $sql .= ($obj->getVlr_cofins()?$obj->getVlr_cofins():0);
		 $sql .= ')'; 
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function update($obj){
		 $sql = 'UPDATE arqdetpd SET '; 
		 $sql .= 'codemp = '.($obj->getCodemp()?$obj->getCodemp():0).',';
		 $sql .= 'id_venda = '.($obj->getId_venda()?$obj->getId_venda():0).',';
		 $sql .= 'data_venda = '.'\''.$obj->getData_venda().'\' ,';
		 $sql .= 'id_cpf = '.'\''.$obj->getId_cpf().'\' ,';
		 $sql .= 'id_cliente = '.($obj->getId_cliente()?$obj->getId_cliente():0).',';
		 $sql .= 'id_controle = '.($obj->getId_controle()?$obj->getId_controle():0).',';
		 $sql .= 'id_detvenda = '.($obj->getId_detvenda()?$obj->getId_detvenda():0).',';
		 $sql .= 'id_produto = '.($obj->getId_produto()?$obj->getId_produto():0).',';
		 $sql .= 'id_qtde = '.($obj->getId_qtde()?$obj->getId_qtde():0).',';
		 $sql .= 'id_custo = '.($obj->getId_custo()?$obj->getId_custo():0).',';
		 $sql .= 'valor_custo = '.($obj->getValor_custo()?$obj->getValor_custo():0).',';
		 $sql .= 'valor_bruto = '.($obj->getValor_bruto()?$obj->getValor_bruto():0).',';
		 $sql .= 'valor_descto = '.($obj->getValor_descto()?$obj->getValor_descto():0).',';
		 $sql .= 'valor_venda = '.($obj->getValor_venda()?$obj->getValor_venda():0).',';
		 $sql .= 'vlr_icms = '.($obj->getVlr_icms()?$obj->getVlr_icms():0).',';
		 $sql .= 'vlr_ipi = '.($obj->getVlr_ipi()?$obj->getVlr_ipi():0).',';
		 $sql .= 'vlr_pis = '.($obj->getVlr_pis()?$obj->getVlr_pis():0).',';
		 $sql .= 'vlr_cofins = '.($obj->getVlr_cofins()?$obj->getVlr_cofins():0);
		 $sql .= ' WHERE codemp = '.$obj->getCodemp();
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM arqdetpd WHERE codemp = '.$obj->getCodemp();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM arqdetpd WHERE 1=1 '; 
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
		if ($obj->getId_detvenda()) { 
			$sql .= " AND id_detvenda = '".$obj->getId_detvenda()."'";
		} 
		if ($obj->getId_produto()) { 
			$sql .= " AND id_produto = '".$obj->getId_produto()."'";
		} 
		if ($obj->getId_qtde()) { 
			$sql .= " AND id_qtde = '".$obj->getId_qtde()."'";
		} 
		if ($obj->getId_custo()) { 
			$sql .= " AND id_custo = '".$obj->getId_custo()."'";
		} 
		if ($obj->getValor_custo()) { 
			$sql .= " AND valor_custo = '".$obj->getValor_custo()."'";
		} 
		if ($obj->getValor_bruto()) { 
			$sql .= " AND valor_bruto = '".$obj->getValor_bruto()."'";
		} 
		if ($obj->getValor_descto()) { 
			$sql .= " AND valor_descto = '".$obj->getValor_descto()."'";
		} 
		if ($obj->getValor_venda()) { 
			$sql .= " AND valor_venda = '".$obj->getValor_venda()."'";
		} 
		if ($obj->getVlr_icms()) { 
			$sql .= " AND vlr_icms = '".$obj->getVlr_icms()."'";
		} 
		if ($obj->getVlr_ipi()) { 
			$sql .= " AND vlr_ipi = '".$obj->getVlr_ipi()."'";
		} 
		if ($obj->getVlr_pis()) { 
			$sql .= " AND vlr_pis = '".$obj->getVlr_pis()."'";
		} 
		if ($obj->getVlr_cofins()) { 
			$sql .= " AND vlr_cofins = '".$obj->getVlr_cofins()."'";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setCodemp(mysql_result($rs, 0, 'codemp')); 
			 $obj->setId_venda(mysql_result($rs, 0, 'id_venda')); 
			 $obj->setData_venda(mysql_result($rs, 0, 'data_venda')); 
			 $obj->setId_cpf(mysql_result($rs, 0, 'id_cpf')); 
			 $obj->setId_cliente(mysql_result($rs, 0, 'id_cliente')); 
			 $obj->setId_controle(mysql_result($rs, 0, 'id_controle')); 
			 $obj->setId_detvenda(mysql_result($rs, 0, 'id_detvenda')); 
			 $obj->setId_produto(mysql_result($rs, 0, 'id_produto')); 
			 $obj->setId_qtde(mysql_result($rs, 0, 'id_qtde')); 
			 $obj->setId_custo(mysql_result($rs, 0, 'id_custo')); 
			 $obj->setValor_custo(mysql_result($rs, 0, 'valor_custo')); 
			 $obj->setValor_bruto(mysql_result($rs, 0, 'valor_bruto')); 
			 $obj->setValor_descto(mysql_result($rs, 0, 'valor_descto')); 
			 $obj->setValor_venda(mysql_result($rs, 0, 'valor_venda')); 
			 $obj->setVlr_icms(mysql_result($rs, 0, 'vlr_icms')); 
			 $obj->setVlr_ipi(mysql_result($rs, 0, 'vlr_ipi')); 
			 $obj->setVlr_pis(mysql_result($rs, 0, 'vlr_pis')); 
			 $obj->setVlr_cofins(mysql_result($rs, 0, 'vlr_cofins')); 
		} 
		 return $obj; 
	} 

	  function countAll($obj){
		 $sql = 'SELECT count(*) as existe FROM arqdetpd WHERE 1=1 ';  


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
		if ($obj->getId_detvenda()) { 
			$sql .= " AND id_detvenda = '".$obj->getId_detvenda()."'";
		} 
		if ($obj->getId_produto()) { 
			$sql .= " AND id_produto = '".$obj->getId_produto()."'";
		} 
		if ($obj->getId_qtde()) { 
			$sql .= " AND id_qtde = '".$obj->getId_qtde()."'";
		} 
		if ($obj->getId_custo()) { 
			$sql .= " AND id_custo = '".$obj->getId_custo()."'";
		} 
		if ($obj->getValor_custo()) { 
			$sql .= " AND valor_custo = '".$obj->getValor_custo()."'";
		} 
		if ($obj->getValor_bruto()) { 
			$sql .= " AND valor_bruto = '".$obj->getValor_bruto()."'";
		} 
		if ($obj->getValor_descto()) { 
			$sql .= " AND valor_descto = '".$obj->getValor_descto()."'";
		} 
		if ($obj->getValor_venda()) { 
			$sql .= " AND valor_venda = '".$obj->getValor_venda()."'";
		} 
		if ($obj->getVlr_icms()) { 
			$sql .= " AND vlr_icms = '".$obj->getVlr_icms()."'";
		} 
		if ($obj->getVlr_ipi()) { 
			$sql .= " AND vlr_ipi = '".$obj->getVlr_ipi()."'";
		} 
		if ($obj->getVlr_pis()) { 
			$sql .= " AND vlr_pis = '".$obj->getVlr_pis()."'";
		} 
		if ($obj->getVlr_cofins()) { 
			$sql .= " AND vlr_cofins = '".$obj->getVlr_cofins()."'";
		} 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function verifica_existe($obj){
		 $sql = 'SELECT count(*) as existe FROM arqdetpd WHERE 1=1 ';  


		 if ($obj->getCodemp()) { 
			 $sql .= 	 "AND codemp = '".$obj->getCodemp()."'";
 		 } 
		 if ($obj->getId_venda()) { 
			 $sql .= 	 "AND id_venda = '".$obj->getId_venda()."'";
 		 } 
		 if ($obj->getData_venda()) { 
			 $sql .= 	 "AND data_venda = '".$obj->getData_venda()."'";
 		 } 
		 if ($obj->getId_cliente()) { 
			 $sql .= 	 "AND id_cliente = '".$obj->getId_cliente()."'";
 		 } 
		 if ($obj->getId_controle()) { 
			 $sql .= 	 "AND id_controle = '".$obj->getId_controle()."'";
 		 } 
		 if ($obj->getId_detvenda()) { 
			 $sql .= 	 "AND id_detvenda = '".$obj->getId_detvenda()."'";
 		 } 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function selectAll($obj){
		 $sql = 'SELECT * FROM arqdetpd WHERE 1=1 '; 


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
		if ($obj->getId_detvenda()) { 
			 $sql .= " AND id_detvenda = '".$obj->getId_detvenda()."'";
 				} 
		if ($obj->getId_produto()) { 
			 $sql .= " AND id_produto = '".$obj->getId_produto()."'";
 				} 
		if ($obj->getId_qtde()) { 
			 $sql .= " AND id_qtde = '".$obj->getId_qtde()."'";
 				} 
		if ($obj->getId_custo()) { 
			 $sql .= " AND id_custo = '".$obj->getId_custo()."'";
 				} 
		if ($obj->getValor_custo()) { 
			 $sql .= " AND valor_custo = '".$obj->getValor_custo()."'";
 				} 
		if ($obj->getValor_bruto()) { 
			 $sql .= " AND valor_bruto = '".$obj->getValor_bruto()."'";
 				} 
		if ($obj->getValor_descto()) { 
			 $sql .= " AND valor_descto = '".$obj->getValor_descto()."'";
 				} 
		if ($obj->getValor_venda()) { 
			 $sql .= " AND valor_venda = '".$obj->getValor_venda()."'";
 				} 
		if ($obj->getVlr_icms()) { 
			 $sql .= " AND vlr_icms = '".$obj->getVlr_icms()."'";
 				} 
		if ($obj->getVlr_ipi()) { 
			 $sql .= " AND vlr_ipi = '".$obj->getVlr_ipi()."'";
 				} 
		if ($obj->getVlr_pis()) { 
			 $sql .= " AND vlr_pis = '".$obj->getVlr_pis()."'";
 				} 
		if ($obj->getVlr_cofins()) { 
			 $sql .= " AND vlr_cofins = '".$obj->getVlr_cofins()."'";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Arqdetpd(); 
			 $obj->setCodemp(mysql_result($rs, $i, 'codemp')); 
			 $obj->setId_venda(mysql_result($rs, $i, 'id_venda')); 
			 $obj->setData_venda(mysql_result($rs, $i, 'data_venda')); 
			 $obj->setId_cpf(mysql_result($rs, $i, 'id_cpf')); 
			 $obj->setId_cliente(mysql_result($rs, $i, 'id_cliente')); 
			 $obj->setId_controle(mysql_result($rs, $i, 'id_controle')); 
			 $obj->setId_detvenda(mysql_result($rs, $i, 'id_detvenda')); 
			 $obj->setId_produto(mysql_result($rs, $i, 'id_produto')); 
			 $obj->setId_qtde(mysql_result($rs, $i, 'id_qtde')); 
			 $obj->setId_custo(mysql_result($rs, $i, 'id_custo')); 
			 $obj->setValor_custo(mysql_result($rs, $i, 'valor_custo')); 
			 $obj->setValor_bruto(mysql_result($rs, $i, 'valor_bruto')); 
			 $obj->setValor_descto(mysql_result($rs, $i, 'valor_descto')); 
			 $obj->setValor_venda(mysql_result($rs, $i, 'valor_venda')); 
			 $obj->setVlr_icms(mysql_result($rs, $i, 'vlr_icms')); 
			 $obj->setVlr_ipi(mysql_result($rs, $i, 'vlr_ipi')); 
			 $obj->setVlr_pis(mysql_result($rs, $i, 'vlr_pis')); 
			 $obj->setVlr_cofins(mysql_result($rs, $i, 'vlr_cofins')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
	 
	function verifica_detvenda($obj) {
		$sql = "SELECT max(id_detvenda) as nro FROM arqdetpd 
					where codemp = ".$obj->getCodemp()." and  data_venda = '" . $obj -> getData_venda() . "' 
						and id_venda = " . $obj -> getId_venda();
		$query = mysql_query($sql);
		$dados = mysql_fetch_assoc($query);
		$existe = $dados['nro'] + 1;
		return $existe;
	}

	 
} 
