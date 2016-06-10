<?php 
 /** Classe responsavel pelas transacoes da Tabela: Arqped. */ 
class ArqpedDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO arqped ('; 
		 $sql .= 'codemp,';
		 $sql .= 'id_venda,';
		 $sql .= 'data_venda,';
		 $sql .= 'id_cpf,';
		 $sql .= 'id_cliente,';
		 $sql .= 'id_controle,';
		 $sql .= 'id_caixa,';
		 $sql .= 'hora_venda,';
		 $sql .= 'qtde_produtos,';
		 $sql .= 'forma_pagto,';
		 $sql .= 'vlr_venda_bruta,';
		 $sql .= 'desc_venda,';
		 $sql .= 'vlr_venda_lqda,';
		 $sql .= 'data_entrega,';
		 $sql .= 'hora_entrega,';
		 $sql .= 'tipo_entrega,';
		 $sql .= 'situacao';
		 $sql .= ') VALUES ('; 
		 $sql .= ($obj->getCodemp()?$obj->getCodemp():0).',';
		 $sql .= ($obj->getId_venda()?$obj->getId_venda():0).',';
		 $sql .= '\''.$obj->getData_venda().'\',';
		 $sql .= '\''.$obj->getId_cpf().'\',';
		 $sql .= ($obj->getId_cliente()?$obj->getId_cliente():0).',';
		 $sql .= ($obj->getId_controle()?$obj->getId_controle():0).',';
		 $sql .= ($obj->getId_caixa()?$obj->getId_caixa():0).',';
		 $sql .= '\''.$obj->getHora_venda().'\',';
		 $sql .= ($obj->getQtde_produtos()?$obj->getQtde_produtos():0).',';
		 $sql .= ($obj->getForma_pagto()?$obj->getForma_pagto():0).',';
		 $sql .= ($obj->getVlr_venda_bruta()?$obj->getVlr_venda_bruta():0).',';
		 $sql .= ($obj->getDesc_venda()?$obj->getDesc_venda():0).',';
		 $sql .= ($obj->getVlr_venda_lqda()?$obj->getVlr_venda_lqda():0).',';
		 $sql .= '\''.$obj->getData_entrega().'\',';
		 $sql .= ($obj->getHora_entrega()?$obj->getHora_entrega():0).',';
		 $sql .= ($obj->getTipo_entrega()?$obj->getTipo_entrega():0).',';
		 $sql .= ($obj->getSituacao()?$obj->getSituacao():0);
		 $sql .= ')'; 
		 
		 echo "<hr>".$sql;
		 
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function update($obj){
		 $sql = 'UPDATE arqped SET '; 
		 $sql .= 'codemp = '.($obj->getCodemp()?$obj->getCodemp():0).',';
		 $sql .= 'id_venda = '.($obj->getId_venda()?$obj->getId_venda():0).',';
		 $sql .= 'data_venda = '.'\''.$obj->getData_venda().'\' ,';
		 $sql .= 'id_cpf = '.'\''.$obj->getId_cpf().'\' ,';
		 $sql .= 'id_cliente = '.($obj->getId_cliente()?$obj->getId_cliente():0).',';
		 $sql .= 'id_controle = '.($obj->getId_controle()?$obj->getId_controle():0).',';
		 $sql .= 'id_caixa = '.($obj->getId_caixa()?$obj->getId_caixa():0).',';
		 $sql .= 'hora_venda = '.'\''.$obj->getHora_venda().'\' ,';
		 $sql .= 'qtde_produtos = '.($obj->getQtde_produtos()?$obj->getQtde_produtos():0).',';
		 $sql .= 'forma_pagto = '.($obj->getForma_pagto()?$obj->getForma_pagto():0).',';
		 $sql .= 'vlr_venda_bruta = '.($obj->getVlr_venda_bruta()?$obj->getVlr_venda_bruta():0).',';
		 $sql .= 'desc_venda = '.($obj->getDesc_venda()?$obj->getDesc_venda():0).',';
		 $sql .= 'vlr_venda_lqda = '.($obj->getVlr_venda_lqda()?$obj->getVlr_venda_lqda():0).',';
		 $sql .= 'data_entrega = '.'\''.$obj->getData_entrega().'\' ,';
		 $sql .= 'hora_entrega = '.($obj->getHora_entrega()?$obj->getHora_entrega():0).',';
		 $sql .= 'tipo_entrega = '.($obj->getTipo_entrega()?$obj->getTipo_entrega():0).',';
		 $sql .= 'situacao = '.($obj->getSituacao()?$obj->getSituacao():0);
		 $sql .= ' WHERE codemp = '.$obj->getCodemp();
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM arqped WHERE codemp = '.$obj->getCodemp();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM arqped WHERE 1=1 '; 
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
		if ($obj->getId_caixa()) { 
			$sql .= " AND id_caixa = '".$obj->getId_caixa()."'";
		} 
		if ($obj->getHora_venda()) { 
			$sql .= " AND hora_venda = '".$obj->getHora_venda()."'";
		} 
		if ($obj->getQtde_produtos()) { 
			$sql .= " AND qtde_produtos = '".$obj->getQtde_produtos()."'";
		} 
		if ($obj->getForma_pagto()) { 
			$sql .= " AND forma_pagto = '".$obj->getForma_pagto()."'";
		} 
		if ($obj->getVlr_venda_bruta()) { 
			$sql .= " AND vlr_venda_bruta = '".$obj->getVlr_venda_bruta()."'";
		} 
		if ($obj->getDesc_venda()) { 
			$sql .= " AND desc_venda = '".$obj->getDesc_venda()."'";
		} 
		if ($obj->getVlr_venda_lqda()) { 
			$sql .= " AND vlr_venda_lqda = '".$obj->getVlr_venda_lqda()."'";
		} 
		if ($obj->getData_entrega()) { 
			$sql .= " AND data_entrega = '".$obj->getData_entrega()."'";
		} 
		if ($obj->getHora_entrega()) { 
			$sql .= " AND hora_entrega = '".$obj->getHora_entrega()."'";
		} 
		if ($obj->getTipo_entrega()) { 
			$sql .= " AND tipo_entrega = '".$obj->getTipo_entrega()."'";
		} 
		if ($obj->getSituacao()) { 
			$sql .= " AND situacao = '".$obj->getSituacao()."'";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setCodemp(mysql_result($rs, 0, 'codemp')); 
			 $obj->setId_venda(mysql_result($rs, 0, 'id_venda')); 
			 $obj->setData_venda(mysql_result($rs, 0, 'data_venda')); 
			 $obj->setId_cpf(mysql_result($rs, 0, 'id_cpf')); 
			 $obj->setId_cliente(mysql_result($rs, 0, 'id_cliente')); 
			 $obj->setId_controle(mysql_result($rs, 0, 'id_controle')); 
			 $obj->setId_caixa(mysql_result($rs, 0, 'id_caixa')); 
			 $obj->setHora_venda(mysql_result($rs, 0, 'hora_venda')); 
			 $obj->setQtde_produtos(mysql_result($rs, 0, 'qtde_produtos')); 
			 $obj->setForma_pagto(mysql_result($rs, 0, 'forma_pagto')); 
			 $obj->setVlr_venda_bruta(mysql_result($rs, 0, 'vlr_venda_bruta')); 
			 $obj->setDesc_venda(mysql_result($rs, 0, 'desc_venda')); 
			 $obj->setVlr_venda_lqda(mysql_result($rs, 0, 'vlr_venda_lqda')); 
			 $obj->setData_entrega(mysql_result($rs, 0, 'data_entrega')); 
			 $obj->setHora_entrega(mysql_result($rs, 0, 'hora_entrega')); 
			 $obj->setTipo_entrega(mysql_result($rs, 0, 'tipo_entrega')); 
			 $obj->setSituacao(mysql_result($rs, 0, 'situacao')); 
		} 
		 return $obj; 
	} 

	  function countAll($obj){
		 $sql = 'SELECT count(*) as existe FROM arqped WHERE 1=1 ';  


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
		if ($obj->getId_caixa()) { 
			$sql .= " AND id_caixa = '".$obj->getId_caixa()."'";
		} 
		if ($obj->getHora_venda()) { 
			$sql .= " AND hora_venda = '".$obj->getHora_venda()."'";
		} 
		if ($obj->getQtde_produtos()) { 
			$sql .= " AND qtde_produtos = '".$obj->getQtde_produtos()."'";
		} 
		if ($obj->getForma_pagto()) { 
			$sql .= " AND forma_pagto = '".$obj->getForma_pagto()."'";
		} 
		if ($obj->getVlr_venda_bruta()) { 
			$sql .= " AND vlr_venda_bruta = '".$obj->getVlr_venda_bruta()."'";
		} 
		if ($obj->getDesc_venda()) { 
			$sql .= " AND desc_venda = '".$obj->getDesc_venda()."'";
		} 
		if ($obj->getVlr_venda_lqda()) { 
			$sql .= " AND vlr_venda_lqda = '".$obj->getVlr_venda_lqda()."'";
		} 
		if ($obj->getData_entrega()) { 
			$sql .= " AND data_entrega = '".$obj->getData_entrega()."'";
		} 
		if ($obj->getHora_entrega()) { 
			$sql .= " AND hora_entrega = '".$obj->getHora_entrega()."'";
		} 
		if ($obj->getTipo_entrega()) { 
			$sql .= " AND tipo_entrega = '".$obj->getTipo_entrega()."'";
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
		 $sql = 'SELECT count(*) as existe FROM arqped WHERE 1=1 ';  


		 if ($obj->getId_venda()) { 
			 $sql .= 	 "AND id_venda = '".$obj->getId_venda()."'";
 		 } 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function selectAll($obj){
		 $sql = 'SELECT * FROM arqped WHERE 1=1 '; 


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
		if ($obj->getId_caixa()) { 
			 $sql .= " AND id_caixa = '".$obj->getId_caixa()."'";
 				} 
		if ($obj->getHora_venda()) { 
			 $sql .= " AND hora_venda = '".$obj->getHora_venda()."'";
 				} 
		if ($obj->getQtde_produtos()) { 
			 $sql .= " AND qtde_produtos = '".$obj->getQtde_produtos()."'";
 				} 
		if ($obj->getForma_pagto()) { 
			 $sql .= " AND forma_pagto = '".$obj->getForma_pagto()."'";
 				} 
		if ($obj->getVlr_venda_bruta()) { 
			 $sql .= " AND vlr_venda_bruta = '".$obj->getVlr_venda_bruta()."'";
 				} 
		if ($obj->getDesc_venda()) { 
			 $sql .= " AND desc_venda = '".$obj->getDesc_venda()."'";
 				} 
		if ($obj->getVlr_venda_lqda()) { 
			 $sql .= " AND vlr_venda_lqda = '".$obj->getVlr_venda_lqda()."'";
 				} 
		if ($obj->getData_entrega()) { 
			 $sql .= " AND data_entrega = '".$obj->getData_entrega()."'";
 				} 
		if ($obj->getHora_entrega()) { 
			 $sql .= " AND hora_entrega = '".$obj->getHora_entrega()."'";
 				} 
		if ($obj->getTipo_entrega()) { 
			 $sql .= " AND tipo_entrega = '".$obj->getTipo_entrega()."'";
 				} 
		if ($obj->getSituacao()) { 
			 $sql .= " AND situacao = '".$obj->getSituacao()."'";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Arqped(); 
			 $obj->setCodemp(mysql_result($rs, $i, 'codemp')); 
			 $obj->setId_venda(mysql_result($rs, $i, 'id_venda')); 
			 $obj->setData_venda(mysql_result($rs, $i, 'data_venda')); 
			 $obj->setId_cpf(mysql_result($rs, $i, 'id_cpf')); 
			 $obj->setId_cliente(mysql_result($rs, $i, 'id_cliente')); 
			 $obj->setId_controle(mysql_result($rs, $i, 'id_controle')); 
			 $obj->setId_caixa(mysql_result($rs, $i, 'id_caixa')); 
			 $obj->setHora_venda(mysql_result($rs, $i, 'hora_venda')); 
			 $obj->setQtde_produtos(mysql_result($rs, $i, 'qtde_produtos')); 
			 $obj->setForma_pagto(mysql_result($rs, $i, 'forma_pagto')); 
			 $obj->setVlr_venda_bruta(mysql_result($rs, $i, 'vlr_venda_bruta')); 
			 $obj->setDesc_venda(mysql_result($rs, $i, 'desc_venda')); 
			 $obj->setVlr_venda_lqda(mysql_result($rs, $i, 'vlr_venda_lqda')); 
			 $obj->setData_entrega(mysql_result($rs, $i, 'data_entrega')); 
			 $obj->setHora_entrega(mysql_result($rs, $i, 'hora_entrega')); 
			 $obj->setTipo_entrega(mysql_result($rs, $i, 'tipo_entrega')); 
			 $obj->setSituacao(mysql_result($rs, $i, 'situacao')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
} 
