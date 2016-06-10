<?php 
 /** Classe responsavel pelas transacoes da Tabela: Nfse_item_nota. */ 
class Nfse_item_notaDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO nfse_item_nota ('; 
		 $sql .= 'seq_nfse,';
		 $sql .= 'cod_verificacao,';
		 $sql .= 'iss_retido,';
		 $sql .= 'valor_servico,';
		 $sql .= 'vlr_pis,';
		 $sql .= 'vlr_cofins,';
		 $sql .= 'vlr_ir,';
		 $sql .= 'vlr_inss,';
		 $sql .= 'vlr_csll,';
		 $sql .= 'vlr_condicionado,';
		 $sql .= 'vlr_incondicionado,';
		 $sql .= 'vlr_deducoes,';
		 $sql .= 'vlr_retencoes,';
		 $sql .= 'vlr_outras_retencoes,';
		 $sql .= 'vlr_retido,';
		 $sql .= 'vlr_deducoes_permitidas,';
		 $sql .= 'vlr_base_calculo,';
		 $sql .= 'vlr_aliquota,';
		 $sql .= 'vlr_iss,';
		 $sql .= 'vlr_liquido';
		 $sql .= ') VALUES ('; 
		 $sql .= ($obj->getSeq_nfse()?$obj->getSeq_nfse():0).',';
		 $sql .= ($obj->getCod_verificacao()?$obj->getCod_verificacao():0).',';
		 $sql .= ($obj->getIss_retido()?$obj->getIss_retido():0).',';
		 $sql .= ($obj->getValor_servico()?$obj->getValor_servico():0).',';
		 $sql .= ($obj->getVlr_pis()?$obj->getVlr_pis():0).',';
		 $sql .= ($obj->getVlr_cofins()?$obj->getVlr_cofins():0).',';
		 $sql .= ($obj->getVlr_ir()?$obj->getVlr_ir():0).',';
		 $sql .= ($obj->getVlr_inss()?$obj->getVlr_inss():0).',';
		 $sql .= ($obj->getVlr_csll()?$obj->getVlr_csll():0).',';
		 $sql .= ($obj->getVlr_condicionado()?$obj->getVlr_condicionado():0).',';
		 $sql .= ($obj->getVlr_incondicionado()?$obj->getVlr_incondicionado():0).',';
		 $sql .= ($obj->getVlr_deducoes()?$obj->getVlr_deducoes():0).',';
		 $sql .= ($obj->getVlr_retencoes()?$obj->getVlr_retencoes():0).',';
		 $sql .= ($obj->getVlr_outras_retencoes()?$obj->getVlr_outras_retencoes():0).',';
		 $sql .= ($obj->getVlr_retido()?$obj->getVlr_retido():0).',';
		 $sql .= ($obj->getVlr_deducoes_permitidas()?$obj->getVlr_deducoes_permitidas():0).',';
		 $sql .= ($obj->getVlr_base_calculo()?$obj->getVlr_base_calculo():0).',';
		 $sql .= ($obj->getVlr_aliquota()?$obj->getVlr_aliquota():0).',';
		 $sql .= ($obj->getVlr_iss()?$obj->getVlr_iss():0).',';
		 $sql .= ($obj->getVlr_liquido()?$obj->getVlr_liquido():0);
		 $sql .= ')'; 
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function update($obj){
		 $sql = 'UPDATE nfse_item_nota SET '; 
		 $sql .= 'seq_nfse = '.($obj->getSeq_nfse()?$obj->getSeq_nfse():0).',';
		 $sql .= 'cod_verificacao = '.($obj->getCod_verificacao()?$obj->getCod_verificacao():0).',';
		 $sql .= 'iss_retido = '.($obj->getIss_retido()?$obj->getIss_retido():0).',';
		 $sql .= 'valor_servico = '.($obj->getValor_servico()?$obj->getValor_servico():0).',';
		 $sql .= 'vlr_pis = '.($obj->getVlr_pis()?$obj->getVlr_pis():0).',';
		 $sql .= 'vlr_cofins = '.($obj->getVlr_cofins()?$obj->getVlr_cofins():0).',';
		 $sql .= 'vlr_ir = '.($obj->getVlr_ir()?$obj->getVlr_ir():0).',';
		 $sql .= 'vlr_inss = '.($obj->getVlr_inss()?$obj->getVlr_inss():0).',';
		 $sql .= 'vlr_csll = '.($obj->getVlr_csll()?$obj->getVlr_csll():0).',';
		 $sql .= 'vlr_condicionado = '.($obj->getVlr_condicionado()?$obj->getVlr_condicionado():0).',';
		 $sql .= 'vlr_incondicionado = '.($obj->getVlr_incondicionado()?$obj->getVlr_incondicionado():0).',';
		 $sql .= 'vlr_deducoes = '.($obj->getVlr_deducoes()?$obj->getVlr_deducoes():0).',';
		 $sql .= 'vlr_retencoes = '.($obj->getVlr_retencoes()?$obj->getVlr_retencoes():0).',';
		 $sql .= 'vlr_outras_retencoes = '.($obj->getVlr_outras_retencoes()?$obj->getVlr_outras_retencoes():0).',';
		 $sql .= 'vlr_retido = '.($obj->getVlr_retido()?$obj->getVlr_retido():0).',';
		 $sql .= 'vlr_deducoes_permitidas = '.($obj->getVlr_deducoes_permitidas()?$obj->getVlr_deducoes_permitidas():0).',';
		 $sql .= 'vlr_base_calculo = '.($obj->getVlr_base_calculo()?$obj->getVlr_base_calculo():0).',';
		 $sql .= 'vlr_aliquota = '.($obj->getVlr_aliquota()?$obj->getVlr_aliquota():0).',';
		 $sql .= 'vlr_iss = '.($obj->getVlr_iss()?$obj->getVlr_iss():0).',';
		 $sql .= 'vlr_liquido = '.($obj->getVlr_liquido()?$obj->getVlr_liquido():0);
		 $sql .= ' WHERE seq_item = '.$obj->getSeq_item();
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM nfse_item_nota WHERE seq_item = '.$obj->getSeq_item();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM nfse_item_nota WHERE 1=1 '; 
		if ($obj->getSeq_item()) { 
			$sql .= " AND seq_item = '".$obj->getSeq_item()."'";
		} 
		if ($obj->getSeq_nfse()) { 
			$sql .= " AND seq_nfse = '".$obj->getSeq_nfse()."'";
		} 
		if ($obj->getCod_verificacao()) { 
			$sql .= " AND cod_verificacao = '".$obj->getCod_verificacao()."'";
		} 
		if ($obj->getIss_retido()) { 
			$sql .= " AND iss_retido = '".$obj->getIss_retido()."'";
		} 
		if ($obj->getValor_servico()) { 
			$sql .= " AND valor_servico = '".$obj->getValor_servico()."'";
		} 
		if ($obj->getVlr_pis()) { 
			$sql .= " AND vlr_pis = '".$obj->getVlr_pis()."'";
		} 
		if ($obj->getVlr_cofins()) { 
			$sql .= " AND vlr_cofins = '".$obj->getVlr_cofins()."'";
		} 
		if ($obj->getVlr_ir()) { 
			$sql .= " AND vlr_ir = '".$obj->getVlr_ir()."'";
		} 
		if ($obj->getVlr_inss()) { 
			$sql .= " AND vlr_inss = '".$obj->getVlr_inss()."'";
		} 
		if ($obj->getVlr_csll()) { 
			$sql .= " AND vlr_csll = '".$obj->getVlr_csll()."'";
		} 
		if ($obj->getVlr_condicionado()) { 
			$sql .= " AND vlr_condicionado = '".$obj->getVlr_condicionado()."'";
		} 
		if ($obj->getVlr_incondicionado()) { 
			$sql .= " AND vlr_incondicionado = '".$obj->getVlr_incondicionado()."'";
		} 
		if ($obj->getVlr_deducoes()) { 
			$sql .= " AND vlr_deducoes = '".$obj->getVlr_deducoes()."'";
		} 
		if ($obj->getVlr_retencoes()) { 
			$sql .= " AND vlr_retencoes = '".$obj->getVlr_retencoes()."'";
		} 
		if ($obj->getVlr_outras_retencoes()) { 
			$sql .= " AND vlr_outras_retencoes = '".$obj->getVlr_outras_retencoes()."'";
		} 
		if ($obj->getVlr_retido()) { 
			$sql .= " AND vlr_retido = '".$obj->getVlr_retido()."'";
		} 
		if ($obj->getVlr_deducoes_permitidas()) { 
			$sql .= " AND vlr_deducoes_permitidas = '".$obj->getVlr_deducoes_permitidas()."'";
		} 
		if ($obj->getVlr_base_calculo()) { 
			$sql .= " AND vlr_base_calculo = '".$obj->getVlr_base_calculo()."'";
		} 
		if ($obj->getVlr_aliquota()) { 
			$sql .= " AND vlr_aliquota = '".$obj->getVlr_aliquota()."'";
		} 
		if ($obj->getVlr_iss()) { 
			$sql .= " AND vlr_iss = '".$obj->getVlr_iss()."'";
		} 
		if ($obj->getVlr_liquido()) { 
			$sql .= " AND vlr_liquido = '".$obj->getVlr_liquido()."'";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setSeq_item(mysql_result($rs, 0, 'seq_item')); 
			 $obj->setSeq_nfse(mysql_result($rs, 0, 'seq_nfse')); 
			 $obj->setCod_verificacao(mysql_result($rs, 0, 'cod_verificacao')); 
			 $obj->setIss_retido(mysql_result($rs, 0, 'iss_retido')); 
			 $obj->setValor_servico(mysql_result($rs, 0, 'valor_servico')); 
			 $obj->setVlr_pis(mysql_result($rs, 0, 'vlr_pis')); 
			 $obj->setVlr_cofins(mysql_result($rs, 0, 'vlr_cofins')); 
			 $obj->setVlr_ir(mysql_result($rs, 0, 'vlr_ir')); 
			 $obj->setVlr_inss(mysql_result($rs, 0, 'vlr_inss')); 
			 $obj->setVlr_csll(mysql_result($rs, 0, 'vlr_csll')); 
			 $obj->setVlr_condicionado(mysql_result($rs, 0, 'vlr_condicionado')); 
			 $obj->setVlr_incondicionado(mysql_result($rs, 0, 'vlr_incondicionado')); 
			 $obj->setVlr_deducoes(mysql_result($rs, 0, 'vlr_deducoes')); 
			 $obj->setVlr_retencoes(mysql_result($rs, 0, 'vlr_retencoes')); 
			 $obj->setVlr_outras_retencoes(mysql_result($rs, 0, 'vlr_outras_retencoes')); 
			 $obj->setVlr_retido(mysql_result($rs, 0, 'vlr_retido')); 
			 $obj->setVlr_deducoes_permitidas(mysql_result($rs, 0, 'vlr_deducoes_permitidas')); 
			 $obj->setVlr_base_calculo(mysql_result($rs, 0, 'vlr_base_calculo')); 
			 $obj->setVlr_aliquota(mysql_result($rs, 0, 'vlr_aliquota')); 
			 $obj->setVlr_iss(mysql_result($rs, 0, 'vlr_iss')); 
			 $obj->setVlr_liquido(mysql_result($rs, 0, 'vlr_liquido')); 
		} 
		 return $obj; 
	} 

	  function countAll($obj){
		 $sql = 'SELECT count(*) as existe FROM nfse_item_nota WHERE 1=1 ';  


		if ($obj->getSeq_item()) { 
			$sql .= " AND seq_item = '".$obj->getSeq_item()."'";
		} 
		if ($obj->getSeq_nfse()) { 
			$sql .= " AND seq_nfse = '".$obj->getSeq_nfse()."'";
		} 
		if ($obj->getCod_verificacao()) { 
			$sql .= " AND cod_verificacao = '".$obj->getCod_verificacao()."'";
		} 
		if ($obj->getIss_retido()) { 
			$sql .= " AND iss_retido = '".$obj->getIss_retido()."'";
		} 
		if ($obj->getValor_servico()) { 
			$sql .= " AND valor_servico = '".$obj->getValor_servico()."'";
		} 
		if ($obj->getVlr_pis()) { 
			$sql .= " AND vlr_pis = '".$obj->getVlr_pis()."'";
		} 
		if ($obj->getVlr_cofins()) { 
			$sql .= " AND vlr_cofins = '".$obj->getVlr_cofins()."'";
		} 
		if ($obj->getVlr_ir()) { 
			$sql .= " AND vlr_ir = '".$obj->getVlr_ir()."'";
		} 
		if ($obj->getVlr_inss()) { 
			$sql .= " AND vlr_inss = '".$obj->getVlr_inss()."'";
		} 
		if ($obj->getVlr_csll()) { 
			$sql .= " AND vlr_csll = '".$obj->getVlr_csll()."'";
		} 
		if ($obj->getVlr_condicionado()) { 
			$sql .= " AND vlr_condicionado = '".$obj->getVlr_condicionado()."'";
		} 
		if ($obj->getVlr_incondicionado()) { 
			$sql .= " AND vlr_incondicionado = '".$obj->getVlr_incondicionado()."'";
		} 
		if ($obj->getVlr_deducoes()) { 
			$sql .= " AND vlr_deducoes = '".$obj->getVlr_deducoes()."'";
		} 
		if ($obj->getVlr_retencoes()) { 
			$sql .= " AND vlr_retencoes = '".$obj->getVlr_retencoes()."'";
		} 
		if ($obj->getVlr_outras_retencoes()) { 
			$sql .= " AND vlr_outras_retencoes = '".$obj->getVlr_outras_retencoes()."'";
		} 
		if ($obj->getVlr_retido()) { 
			$sql .= " AND vlr_retido = '".$obj->getVlr_retido()."'";
		} 
		if ($obj->getVlr_deducoes_permitidas()) { 
			$sql .= " AND vlr_deducoes_permitidas = '".$obj->getVlr_deducoes_permitidas()."'";
		} 
		if ($obj->getVlr_base_calculo()) { 
			$sql .= " AND vlr_base_calculo = '".$obj->getVlr_base_calculo()."'";
		} 
		if ($obj->getVlr_aliquota()) { 
			$sql .= " AND vlr_aliquota = '".$obj->getVlr_aliquota()."'";
		} 
		if ($obj->getVlr_iss()) { 
			$sql .= " AND vlr_iss = '".$obj->getVlr_iss()."'";
		} 
		if ($obj->getVlr_liquido()) { 
			$sql .= " AND vlr_liquido = '".$obj->getVlr_liquido()."'";
		} 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function verifica_existe($obj){
		 $sql = 'SELECT count(*) as existe FROM nfse_item_nota WHERE 1=1 ';  


		 if ($obj->getSeq_item()) { 
			 $sql .= 	 "AND seq_item = '".$obj->getSeq_item()."'";
 		 } 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function selectAll($obj){
		 $sql = 'SELECT * FROM nfse_item_nota WHERE 1=1 '; 


		if ($obj->getSeq_item()) { 
			 $sql .= " AND seq_item = '".$obj->getSeq_item()."'";
 				} 
		if ($obj->getSeq_nfse()) { 
			 $sql .= " AND seq_nfse = '".$obj->getSeq_nfse()."'";
 				} 
		if ($obj->getCod_verificacao()) { 
			 $sql .= " AND cod_verificacao = '".$obj->getCod_verificacao()."'";
 				} 
		if ($obj->getIss_retido()) { 
			 $sql .= " AND iss_retido = '".$obj->getIss_retido()."'";
 				} 
		if ($obj->getValor_servico()) { 
			 $sql .= " AND valor_servico = '".$obj->getValor_servico()."'";
 				} 
		if ($obj->getVlr_pis()) { 
			 $sql .= " AND vlr_pis = '".$obj->getVlr_pis()."'";
 				} 
		if ($obj->getVlr_cofins()) { 
			 $sql .= " AND vlr_cofins = '".$obj->getVlr_cofins()."'";
 				} 
		if ($obj->getVlr_ir()) { 
			 $sql .= " AND vlr_ir = '".$obj->getVlr_ir()."'";
 				} 
		if ($obj->getVlr_inss()) { 
			 $sql .= " AND vlr_inss = '".$obj->getVlr_inss()."'";
 				} 
		if ($obj->getVlr_csll()) { 
			 $sql .= " AND vlr_csll = '".$obj->getVlr_csll()."'";
 				} 
		if ($obj->getVlr_condicionado()) { 
			 $sql .= " AND vlr_condicionado = '".$obj->getVlr_condicionado()."'";
 				} 
		if ($obj->getVlr_incondicionado()) { 
			 $sql .= " AND vlr_incondicionado = '".$obj->getVlr_incondicionado()."'";
 				} 
		if ($obj->getVlr_deducoes()) { 
			 $sql .= " AND vlr_deducoes = '".$obj->getVlr_deducoes()."'";
 				} 
		if ($obj->getVlr_retencoes()) { 
			 $sql .= " AND vlr_retencoes = '".$obj->getVlr_retencoes()."'";
 				} 
		if ($obj->getVlr_outras_retencoes()) { 
			 $sql .= " AND vlr_outras_retencoes = '".$obj->getVlr_outras_retencoes()."'";
 				} 
		if ($obj->getVlr_retido()) { 
			 $sql .= " AND vlr_retido = '".$obj->getVlr_retido()."'";
 				} 
		if ($obj->getVlr_deducoes_permitidas()) { 
			 $sql .= " AND vlr_deducoes_permitidas = '".$obj->getVlr_deducoes_permitidas()."'";
 				} 
		if ($obj->getVlr_base_calculo()) { 
			 $sql .= " AND vlr_base_calculo = '".$obj->getVlr_base_calculo()."'";
 				} 
		if ($obj->getVlr_aliquota()) { 
			 $sql .= " AND vlr_aliquota = '".$obj->getVlr_aliquota()."'";
 				} 
		if ($obj->getVlr_iss()) { 
			 $sql .= " AND vlr_iss = '".$obj->getVlr_iss()."'";
 				} 
		if ($obj->getVlr_liquido()) { 
			 $sql .= " AND vlr_liquido = '".$obj->getVlr_liquido()."'";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Nfse_item_nota(); 
			 $obj->setSeq_item(mysql_result($rs, $i, 'seq_item')); 
			 $obj->setSeq_nfse(mysql_result($rs, $i, 'seq_nfse')); 
			 $obj->setCod_verificacao(mysql_result($rs, $i, 'cod_verificacao')); 
			 $obj->setIss_retido(mysql_result($rs, $i, 'iss_retido')); 
			 $obj->setValor_servico(mysql_result($rs, $i, 'valor_servico')); 
			 $obj->setVlr_pis(mysql_result($rs, $i, 'vlr_pis')); 
			 $obj->setVlr_cofins(mysql_result($rs, $i, 'vlr_cofins')); 
			 $obj->setVlr_ir(mysql_result($rs, $i, 'vlr_ir')); 
			 $obj->setVlr_inss(mysql_result($rs, $i, 'vlr_inss')); 
			 $obj->setVlr_csll(mysql_result($rs, $i, 'vlr_csll')); 
			 $obj->setVlr_condicionado(mysql_result($rs, $i, 'vlr_condicionado')); 
			 $obj->setVlr_incondicionado(mysql_result($rs, $i, 'vlr_incondicionado')); 
			 $obj->setVlr_deducoes(mysql_result($rs, $i, 'vlr_deducoes')); 
			 $obj->setVlr_retencoes(mysql_result($rs, $i, 'vlr_retencoes')); 
			 $obj->setVlr_outras_retencoes(mysql_result($rs, $i, 'vlr_outras_retencoes')); 
			 $obj->setVlr_retido(mysql_result($rs, $i, 'vlr_retido')); 
			 $obj->setVlr_deducoes_permitidas(mysql_result($rs, $i, 'vlr_deducoes_permitidas')); 
			 $obj->setVlr_base_calculo(mysql_result($rs, $i, 'vlr_base_calculo')); 
			 $obj->setVlr_aliquota(mysql_result($rs, $i, 'vlr_aliquota')); 
			 $obj->setVlr_iss(mysql_result($rs, $i, 'vlr_iss')); 
			 $obj->setVlr_liquido(mysql_result($rs, $i, 'vlr_liquido')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
} 
