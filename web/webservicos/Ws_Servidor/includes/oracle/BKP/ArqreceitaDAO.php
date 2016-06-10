<?php 
 /** Classe responsavel pelas transacoes da Tabela: Arqreceita. */ 
class ArqreceitaDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO arqreceita ('; 
		 $sql .= 'id_venda,';
		 $sql .= 'data_venda,';
		 $sql .= 'id_cliente,';
		 $sql .= 'id_controle,';
		 $sql .= 'Od_lgEsferico,';
		 $sql .= 'Od_lgCilindrico,';
		 $sql .= 'Od_lgEixo,';
		 $sql .= 'Od_lgDnp,';
		 $sql .= 'Od_lgAlt,';
		 $sql .= 'Oe_lgEsferico,';
		 $sql .= 'Oe_lgCilindrico,';
		 $sql .= 'Oe_lgEixo,';
		 $sql .= 'Oe_lgDnp,';
		 $sql .= 'Oe_lgAlt,';
		 $sql .= 'Od_ptEsferico,';
		 $sql .= 'Od_ptCilindrico,';
		 $sql .= 'Od_ptEixo,';
		 $sql .= 'Od_ptDnp,';
		 $sql .= 'Od_ptAlt,';
		 $sql .= 'Oe_ptEsferico,';
		 $sql .= 'Oe_ptCilindrico,';
		 $sql .= 'Oe_ptEixo,';
		 $sql .= 'Oe_ptDnp,';
		 $sql .= 'Oe_ptAlt,';
		 $sql .= 'dtaReceita,';
		 $sql .= 'medico,';
		 $sql .= 'obsReceita';
		 $sql .= ') VALUES ('; 
		 $sql .= ($obj->getId_venda()?$obj->getId_venda():0).',';
		 $sql .= '\''.$obj->getData_venda().'\',';
		 $sql .= ($obj->getId_cliente()?$obj->getId_cliente():0).',';
		 $sql .= ($obj->getId_controle()?$obj->getId_controle():0).',';
		 $sql .= ($obj->getOd_lgEsferico()?$obj->getOd_lgEsferico():0).',';
		 $sql .= ($obj->getOd_lgCilindrico()?$obj->getOd_lgCilindrico():0).',';
		 $sql .= ($obj->getOd_lgEixo()?$obj->getOd_lgEixo():0).',';
		 $sql .= ($obj->getOd_lgDnp()?$obj->getOd_lgDnp():0).',';
		 $sql .= ($obj->getOd_lgAlt()?$obj->getOd_lgAlt():0).',';
		 $sql .= ($obj->getOe_lgEsferico()?$obj->getOe_lgEsferico():0).',';
		 $sql .= ($obj->getOe_lgCilindrico()?$obj->getOe_lgCilindrico():0).',';
		 $sql .= ($obj->getOe_lgEixo()?$obj->getOe_lgEixo():0).',';
		 $sql .= ($obj->getOe_lgDnp()?$obj->getOe_lgDnp():0).',';
		 $sql .= ($obj->getOe_lgAlt()?$obj->getOe_lgAlt():0).',';
		 $sql .= ($obj->getOd_ptEsferico()?$obj->getOd_ptEsferico():0).',';
		 $sql .= ($obj->getOd_ptCilindrico()?$obj->getOd_ptCilindrico():0).',';
		 $sql .= ($obj->getOd_ptEixo()?$obj->getOd_ptEixo():0).',';
		 $sql .= ($obj->getOd_ptDnp()?$obj->getOd_ptDnp():0).',';
		 $sql .= ($obj->getOd_ptAlt()?$obj->getOd_ptAlt():0).',';
		 $sql .= ($obj->getOe_ptEsferico()?$obj->getOe_ptEsferico():0).',';
		 $sql .= ($obj->getOe_ptCilindrico()?$obj->getOe_ptCilindrico():0).',';
		 $sql .= ($obj->getOe_ptEixo()?$obj->getOe_ptEixo():0).',';
		 $sql .= ($obj->getOe_ptDnp()?$obj->getOe_ptDnp():0).',';
		 $sql .= ($obj->getOe_ptAlt()?$obj->getOe_ptAlt():0).',';
		 $sql .= '\''.$obj->getDtaReceita().'\',';
		 $sql .= '\''.$obj->getMedico().'\',';
		 $sql .= '\''.$obj->getObsReceita().'\'';
		 $sql .= ')'; 
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function update($obj){
		 $sql = 'UPDATE arqreceita SET '; 
		 $sql .= 'id_venda = '.($obj->getId_venda()?$obj->getId_venda():0).',';
		 $sql .= 'data_venda = '.'\''.$obj->getData_venda().'\' ,';
		 $sql .= 'id_cliente = '.($obj->getId_cliente()?$obj->getId_cliente():0).',';
		 $sql .= 'id_controle = '.($obj->getId_controle()?$obj->getId_controle():0).',';
		 $sql .= 'Od_lgEsferico = '.($obj->getOd_lgEsferico()?$obj->getOd_lgEsferico():0).',';
		 $sql .= 'Od_lgCilindrico = '.($obj->getOd_lgCilindrico()?$obj->getOd_lgCilindrico():0).',';
		 $sql .= 'Od_lgEixo = '.($obj->getOd_lgEixo()?$obj->getOd_lgEixo():0).',';
		 $sql .= 'Od_lgDnp = '.($obj->getOd_lgDnp()?$obj->getOd_lgDnp():0).',';
		 $sql .= 'Od_lgAlt = '.($obj->getOd_lgAlt()?$obj->getOd_lgAlt():0).',';
		 $sql .= 'Oe_lgEsferico = '.($obj->getOe_lgEsferico()?$obj->getOe_lgEsferico():0).',';
		 $sql .= 'Oe_lgCilindrico = '.($obj->getOe_lgCilindrico()?$obj->getOe_lgCilindrico():0).',';
		 $sql .= 'Oe_lgEixo = '.($obj->getOe_lgEixo()?$obj->getOe_lgEixo():0).',';
		 $sql .= 'Oe_lgDnp = '.($obj->getOe_lgDnp()?$obj->getOe_lgDnp():0).',';
		 $sql .= 'Oe_lgAlt = '.($obj->getOe_lgAlt()?$obj->getOe_lgAlt():0).',';
		 $sql .= 'Od_ptEsferico = '.($obj->getOd_ptEsferico()?$obj->getOd_ptEsferico():0).',';
		 $sql .= 'Od_ptCilindrico = '.($obj->getOd_ptCilindrico()?$obj->getOd_ptCilindrico():0).',';
		 $sql .= 'Od_ptEixo = '.($obj->getOd_ptEixo()?$obj->getOd_ptEixo():0).',';
		 $sql .= 'Od_ptDnp = '.($obj->getOd_ptDnp()?$obj->getOd_ptDnp():0).',';
		 $sql .= 'Od_ptAlt = '.($obj->getOd_ptAlt()?$obj->getOd_ptAlt():0).',';
		 $sql .= 'Oe_ptEsferico = '.($obj->getOe_ptEsferico()?$obj->getOe_ptEsferico():0).',';
		 $sql .= 'Oe_ptCilindrico = '.($obj->getOe_ptCilindrico()?$obj->getOe_ptCilindrico():0).',';
		 $sql .= 'Oe_ptEixo = '.($obj->getOe_ptEixo()?$obj->getOe_ptEixo():0).',';
		 $sql .= 'Oe_ptDnp = '.($obj->getOe_ptDnp()?$obj->getOe_ptDnp():0).',';
		 $sql .= 'Oe_ptAlt = '.($obj->getOe_ptAlt()?$obj->getOe_ptAlt():0).',';
		 $sql .= 'dtaReceita = '.'\''.$obj->getDtaReceita().'\' ,';
		 $sql .= 'medico = '.'\''.$obj->getMedico().'\' ,';
		 $sql .= 'obsReceita = '.'\''.$obj->getObsReceita().'\' ';
		 $sql .= ' WHERE id_venda = '.$obj->getId_venda();
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM arqreceita WHERE id_venda = '.$obj->getId_venda();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM arqreceita WHERE 1=1 '; 
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
		if ($obj->getOd_lgEsferico()) { 
			$sql .= " AND Od_lgEsferico = '".$obj->getOd_lgEsferico()."'";
		} 
		if ($obj->getOd_lgCilindrico()) { 
			$sql .= " AND Od_lgCilindrico = '".$obj->getOd_lgCilindrico()."'";
		} 
		if ($obj->getOd_lgEixo()) { 
			$sql .= " AND Od_lgEixo = '".$obj->getOd_lgEixo()."'";
		} 
		if ($obj->getOd_lgDnp()) { 
			$sql .= " AND Od_lgDnp = '".$obj->getOd_lgDnp()."'";
		} 
		if ($obj->getOd_lgAlt()) { 
			$sql .= " AND Od_lgAlt = '".$obj->getOd_lgAlt()."'";
		} 
		if ($obj->getOe_lgEsferico()) { 
			$sql .= " AND Oe_lgEsferico = '".$obj->getOe_lgEsferico()."'";
		} 
		if ($obj->getOe_lgCilindrico()) { 
			$sql .= " AND Oe_lgCilindrico = '".$obj->getOe_lgCilindrico()."'";
		} 
		if ($obj->getOe_lgEixo()) { 
			$sql .= " AND Oe_lgEixo = '".$obj->getOe_lgEixo()."'";
		} 
		if ($obj->getOe_lgDnp()) { 
			$sql .= " AND Oe_lgDnp = '".$obj->getOe_lgDnp()."'";
		} 
		if ($obj->getOe_lgAlt()) { 
			$sql .= " AND Oe_lgAlt = '".$obj->getOe_lgAlt()."'";
		} 
		if ($obj->getOd_ptEsferico()) { 
			$sql .= " AND Od_ptEsferico = '".$obj->getOd_ptEsferico()."'";
		} 
		if ($obj->getOd_ptCilindrico()) { 
			$sql .= " AND Od_ptCilindrico = '".$obj->getOd_ptCilindrico()."'";
		} 
		if ($obj->getOd_ptEixo()) { 
			$sql .= " AND Od_ptEixo = '".$obj->getOd_ptEixo()."'";
		} 
		if ($obj->getOd_ptDnp()) { 
			$sql .= " AND Od_ptDnp = '".$obj->getOd_ptDnp()."'";
		} 
		if ($obj->getOd_ptAlt()) { 
			$sql .= " AND Od_ptAlt = '".$obj->getOd_ptAlt()."'";
		} 
		if ($obj->getOe_ptEsferico()) { 
			$sql .= " AND Oe_ptEsferico = '".$obj->getOe_ptEsferico()."'";
		} 
		if ($obj->getOe_ptCilindrico()) { 
			$sql .= " AND Oe_ptCilindrico = '".$obj->getOe_ptCilindrico()."'";
		} 
		if ($obj->getOe_ptEixo()) { 
			$sql .= " AND Oe_ptEixo = '".$obj->getOe_ptEixo()."'";
		} 
		if ($obj->getOe_ptDnp()) { 
			$sql .= " AND Oe_ptDnp = '".$obj->getOe_ptDnp()."'";
		} 
		if ($obj->getOe_ptAlt()) { 
			$sql .= " AND Oe_ptAlt = '".$obj->getOe_ptAlt()."'";
		} 
		if ($obj->getDtaReceita()) { 
			$sql .= " AND dtaReceita = '".$obj->getDtaReceita()."'";
		} 
		if ($obj->getMedico()) { 
			$sql .= " AND upper(medico)  like ('%".strtoupper($obj->getMedico())."%')";
		} 
		if ($obj->getObsReceita()) { 
			$sql .= " AND upper(obsReceita)  like ('%".strtoupper($obj->getObsReceita())."%')";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setId_venda(mysql_result($rs, 0, 'id_venda')); 
			 $obj->setData_venda(mysql_result($rs, 0, 'data_venda')); 
			 $obj->setId_cliente(mysql_result($rs, 0, 'id_cliente')); 
			 $obj->setId_controle(mysql_result($rs, 0, 'id_controle')); 
			 $obj->setOd_lgEsferico(mysql_result($rs, 0, 'Od_lgEsferico')); 
			 $obj->setOd_lgCilindrico(mysql_result($rs, 0, 'Od_lgCilindrico')); 
			 $obj->setOd_lgEixo(mysql_result($rs, 0, 'Od_lgEixo')); 
			 $obj->setOd_lgDnp(mysql_result($rs, 0, 'Od_lgDnp')); 
			 $obj->setOd_lgAlt(mysql_result($rs, 0, 'Od_lgAlt')); 
			 $obj->setOe_lgEsferico(mysql_result($rs, 0, 'Oe_lgEsferico')); 
			 $obj->setOe_lgCilindrico(mysql_result($rs, 0, 'Oe_lgCilindrico')); 
			 $obj->setOe_lgEixo(mysql_result($rs, 0, 'Oe_lgEixo')); 
			 $obj->setOe_lgDnp(mysql_result($rs, 0, 'Oe_lgDnp')); 
			 $obj->setOe_lgAlt(mysql_result($rs, 0, 'Oe_lgAlt')); 
			 $obj->setOd_ptEsferico(mysql_result($rs, 0, 'Od_ptEsferico')); 
			 $obj->setOd_ptCilindrico(mysql_result($rs, 0, 'Od_ptCilindrico')); 
			 $obj->setOd_ptEixo(mysql_result($rs, 0, 'Od_ptEixo')); 
			 $obj->setOd_ptDnp(mysql_result($rs, 0, 'Od_ptDnp')); 
			 $obj->setOd_ptAlt(mysql_result($rs, 0, 'Od_ptAlt')); 
			 $obj->setOe_ptEsferico(mysql_result($rs, 0, 'Oe_ptEsferico')); 
			 $obj->setOe_ptCilindrico(mysql_result($rs, 0, 'Oe_ptCilindrico')); 
			 $obj->setOe_ptEixo(mysql_result($rs, 0, 'Oe_ptEixo')); 
			 $obj->setOe_ptDnp(mysql_result($rs, 0, 'Oe_ptDnp')); 
			 $obj->setOe_ptAlt(mysql_result($rs, 0, 'Oe_ptAlt')); 
			 $obj->setDtaReceita(mysql_result($rs, 0, 'dtaReceita')); 
			 $obj->setMedico(mysql_result($rs, 0, 'medico')); 
			 $obj->setObsReceita(mysql_result($rs, 0, 'obsReceita')); 
		} 
		 return $obj; 
	} 

	  function countAll($obj){
		 $sql = 'SELECT count(*) as existe FROM arqreceita WHERE 1=1 ';  


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
		if ($obj->getOd_lgEsferico()) { 
			$sql .= " AND Od_lgEsferico = '".$obj->getOd_lgEsferico()."'";
		} 
		if ($obj->getOd_lgCilindrico()) { 
			$sql .= " AND Od_lgCilindrico = '".$obj->getOd_lgCilindrico()."'";
		} 
		if ($obj->getOd_lgEixo()) { 
			$sql .= " AND Od_lgEixo = '".$obj->getOd_lgEixo()."'";
		} 
		if ($obj->getOd_lgDnp()) { 
			$sql .= " AND Od_lgDnp = '".$obj->getOd_lgDnp()."'";
		} 
		if ($obj->getOd_lgAlt()) { 
			$sql .= " AND Od_lgAlt = '".$obj->getOd_lgAlt()."'";
		} 
		if ($obj->getOe_lgEsferico()) { 
			$sql .= " AND Oe_lgEsferico = '".$obj->getOe_lgEsferico()."'";
		} 
		if ($obj->getOe_lgCilindrico()) { 
			$sql .= " AND Oe_lgCilindrico = '".$obj->getOe_lgCilindrico()."'";
		} 
		if ($obj->getOe_lgEixo()) { 
			$sql .= " AND Oe_lgEixo = '".$obj->getOe_lgEixo()."'";
		} 
		if ($obj->getOe_lgDnp()) { 
			$sql .= " AND Oe_lgDnp = '".$obj->getOe_lgDnp()."'";
		} 
		if ($obj->getOe_lgAlt()) { 
			$sql .= " AND Oe_lgAlt = '".$obj->getOe_lgAlt()."'";
		} 
		if ($obj->getOd_ptEsferico()) { 
			$sql .= " AND Od_ptEsferico = '".$obj->getOd_ptEsferico()."'";
		} 
		if ($obj->getOd_ptCilindrico()) { 
			$sql .= " AND Od_ptCilindrico = '".$obj->getOd_ptCilindrico()."'";
		} 
		if ($obj->getOd_ptEixo()) { 
			$sql .= " AND Od_ptEixo = '".$obj->getOd_ptEixo()."'";
		} 
		if ($obj->getOd_ptDnp()) { 
			$sql .= " AND Od_ptDnp = '".$obj->getOd_ptDnp()."'";
		} 
		if ($obj->getOd_ptAlt()) { 
			$sql .= " AND Od_ptAlt = '".$obj->getOd_ptAlt()."'";
		} 
		if ($obj->getOe_ptEsferico()) { 
			$sql .= " AND Oe_ptEsferico = '".$obj->getOe_ptEsferico()."'";
		} 
		if ($obj->getOe_ptCilindrico()) { 
			$sql .= " AND Oe_ptCilindrico = '".$obj->getOe_ptCilindrico()."'";
		} 
		if ($obj->getOe_ptEixo()) { 
			$sql .= " AND Oe_ptEixo = '".$obj->getOe_ptEixo()."'";
		} 
		if ($obj->getOe_ptDnp()) { 
			$sql .= " AND Oe_ptDnp = '".$obj->getOe_ptDnp()."'";
		} 
		if ($obj->getOe_ptAlt()) { 
			$sql .= " AND Oe_ptAlt = '".$obj->getOe_ptAlt()."'";
		} 
		if ($obj->getDtaReceita()) { 
			$sql .= " AND dtaReceita = '".$obj->getDtaReceita()."'";
		} 
		if ($obj->getMedico()) { 
			$sql .= " AND upper(medico)  like ('%".strtoupper($obj->getMedico())."%')";
		} 
		if ($obj->getObsReceita()) { 
			$sql .= " AND upper(obsReceita)  like ('%".strtoupper($obj->getObsReceita())."%')";
		} 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function verifica_existe($obj){
		 $sql = 'SELECT count(*) as existe FROM arqreceita WHERE 1=1 ';  


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
		 $sql = 'SELECT * FROM arqreceita WHERE 1=1 '; 


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
		if ($obj->getOd_lgEsferico()) { 
			 $sql .= " AND Od_lgEsferico = '".$obj->getOd_lgEsferico()."'";
 				} 
		if ($obj->getOd_lgCilindrico()) { 
			 $sql .= " AND Od_lgCilindrico = '".$obj->getOd_lgCilindrico()."'";
 				} 
		if ($obj->getOd_lgEixo()) { 
			 $sql .= " AND Od_lgEixo = '".$obj->getOd_lgEixo()."'";
 				} 
		if ($obj->getOd_lgDnp()) { 
			 $sql .= " AND Od_lgDnp = '".$obj->getOd_lgDnp()."'";
 				} 
		if ($obj->getOd_lgAlt()) { 
			 $sql .= " AND Od_lgAlt = '".$obj->getOd_lgAlt()."'";
 				} 
		if ($obj->getOe_lgEsferico()) { 
			 $sql .= " AND Oe_lgEsferico = '".$obj->getOe_lgEsferico()."'";
 				} 
		if ($obj->getOe_lgCilindrico()) { 
			 $sql .= " AND Oe_lgCilindrico = '".$obj->getOe_lgCilindrico()."'";
 				} 
		if ($obj->getOe_lgEixo()) { 
			 $sql .= " AND Oe_lgEixo = '".$obj->getOe_lgEixo()."'";
 				} 
		if ($obj->getOe_lgDnp()) { 
			 $sql .= " AND Oe_lgDnp = '".$obj->getOe_lgDnp()."'";
 				} 
		if ($obj->getOe_lgAlt()) { 
			 $sql .= " AND Oe_lgAlt = '".$obj->getOe_lgAlt()."'";
 				} 
		if ($obj->getOd_ptEsferico()) { 
			 $sql .= " AND Od_ptEsferico = '".$obj->getOd_ptEsferico()."'";
 				} 
		if ($obj->getOd_ptCilindrico()) { 
			 $sql .= " AND Od_ptCilindrico = '".$obj->getOd_ptCilindrico()."'";
 				} 
		if ($obj->getOd_ptEixo()) { 
			 $sql .= " AND Od_ptEixo = '".$obj->getOd_ptEixo()."'";
 				} 
		if ($obj->getOd_ptDnp()) { 
			 $sql .= " AND Od_ptDnp = '".$obj->getOd_ptDnp()."'";
 				} 
		if ($obj->getOd_ptAlt()) { 
			 $sql .= " AND Od_ptAlt = '".$obj->getOd_ptAlt()."'";
 				} 
		if ($obj->getOe_ptEsferico()) { 
			 $sql .= " AND Oe_ptEsferico = '".$obj->getOe_ptEsferico()."'";
 				} 
		if ($obj->getOe_ptCilindrico()) { 
			 $sql .= " AND Oe_ptCilindrico = '".$obj->getOe_ptCilindrico()."'";
 				} 
		if ($obj->getOe_ptEixo()) { 
			 $sql .= " AND Oe_ptEixo = '".$obj->getOe_ptEixo()."'";
 				} 
		if ($obj->getOe_ptDnp()) { 
			 $sql .= " AND Oe_ptDnp = '".$obj->getOe_ptDnp()."'";
 				} 
		if ($obj->getOe_ptAlt()) { 
			 $sql .= " AND Oe_ptAlt = '".$obj->getOe_ptAlt()."'";
 				} 
		if ($obj->getDtaReceita()) { 
			 $sql .= " AND dtaReceita = '".$obj->getDtaReceita()."'";
 				} 
		if ($obj->getMedico()) { 
			 $sql .= " AND upper(medico)  like ('%".strtoupper($obj->getMedico())."%')";
 				} 
		if ($obj->getObsReceita()) { 
			 $sql .= " AND upper(obsReceita)  like ('%".strtoupper($obj->getObsReceita())."%')";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Arqreceita(); 
			 $obj->setId_venda(mysql_result($rs, $i, 'id_venda')); 
			 $obj->setData_venda(mysql_result($rs, $i, 'data_venda')); 
			 $obj->setId_cliente(mysql_result($rs, $i, 'id_cliente')); 
			 $obj->setId_controle(mysql_result($rs, $i, 'id_controle')); 
			 $obj->setOd_lgEsferico(mysql_result($rs, $i, 'Od_lgEsferico')); 
			 $obj->setOd_lgCilindrico(mysql_result($rs, $i, 'Od_lgCilindrico')); 
			 $obj->setOd_lgEixo(mysql_result($rs, $i, 'Od_lgEixo')); 
			 $obj->setOd_lgDnp(mysql_result($rs, $i, 'Od_lgDnp')); 
			 $obj->setOd_lgAlt(mysql_result($rs, $i, 'Od_lgAlt')); 
			 $obj->setOe_lgEsferico(mysql_result($rs, $i, 'Oe_lgEsferico')); 
			 $obj->setOe_lgCilindrico(mysql_result($rs, $i, 'Oe_lgCilindrico')); 
			 $obj->setOe_lgEixo(mysql_result($rs, $i, 'Oe_lgEixo')); 
			 $obj->setOe_lgDnp(mysql_result($rs, $i, 'Oe_lgDnp')); 
			 $obj->setOe_lgAlt(mysql_result($rs, $i, 'Oe_lgAlt')); 
			 $obj->setOd_ptEsferico(mysql_result($rs, $i, 'Od_ptEsferico')); 
			 $obj->setOd_ptCilindrico(mysql_result($rs, $i, 'Od_ptCilindrico')); 
			 $obj->setOd_ptEixo(mysql_result($rs, $i, 'Od_ptEixo')); 
			 $obj->setOd_ptDnp(mysql_result($rs, $i, 'Od_ptDnp')); 
			 $obj->setOd_ptAlt(mysql_result($rs, $i, 'Od_ptAlt')); 
			 $obj->setOe_ptEsferico(mysql_result($rs, $i, 'Oe_ptEsferico')); 
			 $obj->setOe_ptCilindrico(mysql_result($rs, $i, 'Oe_ptCilindrico')); 
			 $obj->setOe_ptEixo(mysql_result($rs, $i, 'Oe_ptEixo')); 
			 $obj->setOe_ptDnp(mysql_result($rs, $i, 'Oe_ptDnp')); 
			 $obj->setOe_ptAlt(mysql_result($rs, $i, 'Oe_ptAlt')); 
			 $obj->setDtaReceita(mysql_result($rs, $i, 'dtaReceita')); 
			 $obj->setMedico(mysql_result($rs, $i, 'medico')); 
			 $obj->setObsReceita(mysql_result($rs, $i, 'obsReceita')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
} 
