<?php 
 /** Classe responsavel pelas transacoes da Tabela: Arqencped. */ 
class ArqencpedDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO arqencped ('; 
		 $sql .= 'id_venda,';
		 $sql .= 'data_venda,';
		 $sql .= 'id_cliente,';
		 $sql .= 'id_controle,';
		 $sql .= 'vlr_venda,';
		 $sql .= 'vlr_descto,';
		 $sql .= 'vlr_sinal,';
		 $sql .= 'vlr_dinheiro,';
		 $sql .= 'vlr_cartao,';
		 $sql .= 'vlr_credito,';
		 $sql .= 'qtde_cartao,';
		 $sql .= 'vlr_cheque,';
		 $sql .= 'vlr_chqpre,';
		 $sql .= 'qtde_cheque,';
		 $sql .= 'situacao';
		 $sql .= ') VALUES ('; 
		 $sql .= ($obj->getId_venda()?$obj->getId_venda():0).',';
		 $sql .= '\''.$obj->getData_venda().'\',';
		 $sql .= ($obj->getId_cliente()?$obj->getId_cliente():0).',';
		 $sql .= ($obj->getId_controle()?$obj->getId_controle():0).',';
		 $sql .= ($obj->getVlr_venda()?$obj->getVlr_venda():0).',';
		 $sql .= ($obj->getVlr_descto()?$obj->getVlr_descto():0).',';
		 $sql .= ($obj->getVlr_sinal()?$obj->getVlr_sinal():0).',';
		 $sql .= ($obj->getVlr_dinheiro()?$obj->getVlr_dinheiro():0).',';
		 $sql .= ($obj->getVlr_cartao()?$obj->getVlr_cartao():0).',';
		 $sql .= ($obj->getVlr_credito()?$obj->getVlr_credito():0).',';
		 $sql .= ($obj->getQtde_cartao()?$obj->getQtde_cartao():0).',';
		 $sql .= ($obj->getVlr_cheque()?$obj->getVlr_cheque():0).',';
		 $sql .= ($obj->getVlr_chqpre()?$obj->getVlr_chqpre():0).',';
		 $sql .= ($obj->getQtde_cheque()?$obj->getQtde_cheque():0).',';
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
		 $sql = 'UPDATE arqencped SET '; 
		 $sql .= 'id_venda = '.($obj->getId_venda()?$obj->getId_venda():0).',';
		 $sql .= 'data_venda = '.'\''.$obj->getData_venda().'\' ,';
		 $sql .= 'id_cliente = '.($obj->getId_cliente()?$obj->getId_cliente():0).',';
		 $sql .= 'id_controle = '.($obj->getId_controle()?$obj->getId_controle():0).',';
		 $sql .= 'vlr_venda = '.($obj->getVlr_venda()?$obj->getVlr_venda():0).',';
		 $sql .= 'vlr_descto = '.($obj->getVlr_descto()?$obj->getVlr_descto():0).',';
		 $sql .= 'vlr_sinal = '.($obj->getVlr_sinal()?$obj->getVlr_sinal():0).',';
		 $sql .= 'vlr_dinheiro = '.($obj->getVlr_dinheiro()?$obj->getVlr_dinheiro():0).',';
		 $sql .= 'vlr_cartao = '.($obj->getVlr_cartao()?$obj->getVlr_cartao():0).',';
		 $sql .= 'vlr_credito = '.($obj->getVlr_credito()?$obj->getVlr_credito():0).',';
		 $sql .= 'qtde_cartao = '.($obj->getQtde_cartao()?$obj->getQtde_cartao():0).',';
		 $sql .= 'vlr_cheque = '.($obj->getVlr_cheque()?$obj->getVlr_cheque():0).',';
		 $sql .= 'vlr_chqpre = '.($obj->getVlr_chqpre()?$obj->getVlr_chqpre():0).',';
		 $sql .= 'qtde_cheque = '.($obj->getQtde_cheque()?$obj->getQtde_cheque():0).',';
		 $sql .= 'situacao = '.($obj->getSituacao()?$obj->getSituacao():0);
		 $sql .= ' WHERE id_venda = '.$obj->getId_venda();
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM arqencped WHERE id_venda = '.$obj->getId_venda();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM arqencped WHERE 1=1 '; 
		if ($obj->getId_venda()) { 
			$sql .= " AND id_venda = '".$obj->getId_venda()."'";
		} 
		if ($obj->getData_venda()) { 
			$sql .= " AND data_venda = '".$obj->getData_venda()."'";
		} 
		if ($obj->getId_cliente()) { 
			$sql .= " AND id_cliente = '".$obj->getId_cliente()."'";
		} 
		if ($obj->getId_controle()) { 
			$sql .= " AND id_controle = '".$obj->getId_controle()."'";
		} 
		if ($obj->getVlr_venda()) { 
			$sql .= " AND vlr_venda = '".$obj->getVlr_venda()."'";
		} 
		if ($obj->getVlr_descto()) { 
			$sql .= " AND vlr_descto = '".$obj->getVlr_descto()."'";
		} 
		if ($obj->getVlr_sinal()) { 
			$sql .= " AND vlr_sinal = '".$obj->getVlr_sinal()."'";
		} 
		if ($obj->getVlr_dinheiro()) { 
			$sql .= " AND vlr_dinheiro = '".$obj->getVlr_dinheiro()."'";
		} 
		if ($obj->getVlr_cartao()) { 
			$sql .= " AND vlr_cartao = '".$obj->getVlr_cartao()."'";
		} 
		if ($obj->getVlr_credito()) { 
			$sql .= " AND vlr_credito = '".$obj->getVlr_credito()."'";
		} 
		if ($obj->getQtde_cartao()) { 
			$sql .= " AND qtde_cartao = '".$obj->getQtde_cartao()."'";
		} 
		if ($obj->getVlr_cheque()) { 
			$sql .= " AND vlr_cheque = '".$obj->getVlr_cheque()."'";
		} 
		if ($obj->getVlr_chqpre()) { 
			$sql .= " AND vlr_chqpre = '".$obj->getVlr_chqpre()."'";
		} 
		if ($obj->getQtde_cheque()) { 
			$sql .= " AND qtde_cheque = '".$obj->getQtde_cheque()."'";
		} 
		if ($obj->getSituacao()) { 
			$sql .= " AND situacao = '".$obj->getSituacao()."'";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setId_venda(mysql_result($rs, 0, 'id_venda')); 
			 $obj->setData_venda(mysql_result($rs, 0, 'data_venda')); 
			 $obj->setId_cliente(mysql_result($rs, 0, 'id_cliente')); 
			 $obj->setId_controle(mysql_result($rs, 0, 'id_controle')); 
			 $obj->setVlr_venda(mysql_result($rs, 0, 'vlr_venda')); 
			 $obj->setVlr_descto(mysql_result($rs, 0, 'vlr_descto')); 
			 $obj->setVlr_sinal(mysql_result($rs, 0, 'vlr_sinal')); 
			 $obj->setVlr_dinheiro(mysql_result($rs, 0, 'vlr_dinheiro')); 
			 $obj->setVlr_cartao(mysql_result($rs, 0, 'vlr_cartao')); 
			 $obj->setVlr_credito(mysql_result($rs, 0, 'vlr_credito')); 
			 $obj->setQtde_cartao(mysql_result($rs, 0, 'qtde_cartao')); 
			 $obj->setVlr_cheque(mysql_result($rs, 0, 'vlr_cheque')); 
			 $obj->setVlr_chqpre(mysql_result($rs, 0, 'vlr_chqpre')); 
			 $obj->setQtde_cheque(mysql_result($rs, 0, 'qtde_cheque')); 
			 $obj->setSituacao(mysql_result($rs, 0, 'situacao')); 
		} 
		 return $obj; 
	} 

	  function countAll($obj){
		 $sql = 'SELECT count(*) as existe FROM arqencped WHERE 1=1 ';  


		if ($obj->getId_venda()) { 
			$sql .= " AND id_venda = '".$obj->getId_venda()."'";
		} 
		if ($obj->getData_venda()) { 
			$sql .= " AND data_venda = '".$obj->getData_venda()."'";
		} 
		if ($obj->getId_cliente()) { 
			$sql .= " AND id_cliente = '".$obj->getId_cliente()."'";
		} 
		if ($obj->getId_controle()) { 
			$sql .= " AND id_controle = '".$obj->getId_controle()."'";
		} 
		if ($obj->getVlr_venda()) { 
			$sql .= " AND vlr_venda = '".$obj->getVlr_venda()."'";
		} 
		if ($obj->getVlr_descto()) { 
			$sql .= " AND vlr_descto = '".$obj->getVlr_descto()."'";
		} 
		if ($obj->getVlr_sinal()) { 
			$sql .= " AND vlr_sinal = '".$obj->getVlr_sinal()."'";
		} 
		if ($obj->getVlr_dinheiro()) { 
			$sql .= " AND vlr_dinheiro = '".$obj->getVlr_dinheiro()."'";
		} 
		if ($obj->getVlr_cartao()) { 
			$sql .= " AND vlr_cartao = '".$obj->getVlr_cartao()."'";
		} 
		if ($obj->getVlr_credito()) { 
			$sql .= " AND vlr_credito = '".$obj->getVlr_credito()."'";
		} 
		if ($obj->getQtde_cartao()) { 
			$sql .= " AND qtde_cartao = '".$obj->getQtde_cartao()."'";
		} 
		if ($obj->getVlr_cheque()) { 
			$sql .= " AND vlr_cheque = '".$obj->getVlr_cheque()."'";
		} 
		if ($obj->getVlr_chqpre()) { 
			$sql .= " AND vlr_chqpre = '".$obj->getVlr_chqpre()."'";
		} 
		if ($obj->getQtde_cheque()) { 
			$sql .= " AND qtde_cheque = '".$obj->getQtde_cheque()."'";
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
		 $sql = 'SELECT count(*) as existe FROM arqencped WHERE 1=1 ';  


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


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function selectAll($obj){
		 $sql = 'SELECT * FROM arqencped WHERE 1=1 '; 


		if ($obj->getId_venda()) { 
			 $sql .= " AND id_venda = '".$obj->getId_venda()."'";
 				} 
		if ($obj->getData_venda()) { 
			 $sql .= " AND data_venda = '".$obj->getData_venda()."'";
 				} 
		if ($obj->getId_cliente()) { 
			 $sql .= " AND id_cliente = '".$obj->getId_cliente()."'";
 				} 
		if ($obj->getId_controle()) { 
			 $sql .= " AND id_controle = '".$obj->getId_controle()."'";
 				} 
		if ($obj->getVlr_venda()) { 
			 $sql .= " AND vlr_venda = '".$obj->getVlr_venda()."'";
 				} 
		if ($obj->getVlr_descto()) { 
			 $sql .= " AND vlr_descto = '".$obj->getVlr_descto()."'";
 				} 
		if ($obj->getVlr_sinal()) { 
			 $sql .= " AND vlr_sinal = '".$obj->getVlr_sinal()."'";
 				} 
		if ($obj->getVlr_dinheiro()) { 
			 $sql .= " AND vlr_dinheiro = '".$obj->getVlr_dinheiro()."'";
 				} 
		if ($obj->getVlr_cartao()) { 
			 $sql .= " AND vlr_cartao = '".$obj->getVlr_cartao()."'";
 				} 
		if ($obj->getVlr_credito()) { 
			 $sql .= " AND vlr_credito = '".$obj->getVlr_credito()."'";
 				} 
		if ($obj->getQtde_cartao()) { 
			 $sql .= " AND qtde_cartao = '".$obj->getQtde_cartao()."'";
 				} 
		if ($obj->getVlr_cheque()) { 
			 $sql .= " AND vlr_cheque = '".$obj->getVlr_cheque()."'";
 				} 
		if ($obj->getVlr_chqpre()) { 
			 $sql .= " AND vlr_chqpre = '".$obj->getVlr_chqpre()."'";
 				} 
		if ($obj->getQtde_cheque()) { 
			 $sql .= " AND qtde_cheque = '".$obj->getQtde_cheque()."'";
 				} 
		if ($obj->getSituacao()) { 
			 $sql .= " AND situacao = '".$obj->getSituacao()."'";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Arqencped(); 
			 $obj->setId_venda(mysql_result($rs, $i, 'id_venda')); 
			 $obj->setData_venda(mysql_result($rs, $i, 'data_venda')); 
			 $obj->setId_cliente(mysql_result($rs, $i, 'id_cliente')); 
			 $obj->setId_controle(mysql_result($rs, $i, 'id_controle')); 
			 $obj->setVlr_venda(mysql_result($rs, $i, 'vlr_venda')); 
			 $obj->setVlr_descto(mysql_result($rs, $i, 'vlr_descto')); 
			 $obj->setVlr_sinal(mysql_result($rs, $i, 'vlr_sinal')); 
			 $obj->setVlr_dinheiro(mysql_result($rs, $i, 'vlr_dinheiro')); 
			 $obj->setVlr_cartao(mysql_result($rs, $i, 'vlr_cartao')); 
			 $obj->setVlr_credito(mysql_result($rs, $i, 'vlr_credito')); 
			 $obj->setQtde_cartao(mysql_result($rs, $i, 'qtde_cartao')); 
			 $obj->setVlr_cheque(mysql_result($rs, $i, 'vlr_cheque')); 
			 $obj->setVlr_chqpre(mysql_result($rs, $i, 'vlr_chqpre')); 
			 $obj->setQtde_cheque(mysql_result($rs, $i, 'qtde_cheque')); 
			 $obj->setSituacao(mysql_result($rs, $i, 'situacao')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
} 
