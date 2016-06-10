<?php 
 /** Classe responsavel pelas transacoes da Tabela: Tabpro. */ 
class TabproDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO tabpro ('; 
		 $sql .= 'ident_chave,';
		 $sql .= 'Nfref_nNF,';
		 $sql .= 'Nfref_serie,';
		 $sql .= 'Nfref_tpNF,';
		 $sql .= 'produtos_nItem,';
		 $sql .= 'produtos_cProd,';
		 $sql .= 'produtos_cEAN,';
		 $sql .= 'produtos_xProd,';
		 $sql .= 'produtos_NCM,';
		 $sql .= 'produtos_NVE,';
		 $sql .= 'produtos_EXTIPI,';
		 $sql .= 'produtos_CFOP,';
		 $sql .= 'produtos_uCom,';
		 $sql .= 'produtos_qCom,';
		 $sql .= 'produtos_vUnCom,';
		 $sql .= 'produtos_vProd,';
		 $sql .= 'produtos_cEANTrib,';
		 $sql .= 'produtos_uTrib,';
		 $sql .= 'produtos_qTrib,';
		 $sql .= 'produtos_vUnTrib,';
		 $sql .= 'produtos_vFrete,';
		 $sql .= 'produtos_vSeg,';
		 $sql .= 'produtos_vDesc,';
		 $sql .= 'produtos_vOutro,';
		 $sql .= 'produtos_indTot,';
		 $sql .= 'produtos_xPed,';
		 $sql .= 'produtos_nItemPed,';
		 $sql .= 'produtos_nFCI,';
		 $sql .= 'icms_nItem,';
		 $sql .= 'icms_orig,';
		 $sql .= 'icms_cst,';
		 $sql .= 'icms_modBC,';
		 $sql .= 'icms_pRedBC,';
		 $sql .= 'icms_vBC,';
		 $sql .= 'icms_pICMS,';
		 $sql .= 'icms_vICMS,';
		 $sql .= 'icms_vICMSDeson,';
		 $sql .= 'icms_motDesICMS,';
		 $sql .= 'icms_modBCST,';
		 $sql .= 'icms_pMVAST,';
		 $sql .= 'icms_pRedBCST,';
		 $sql .= 'icms_vBCST,';
		 $sql .= 'icms_pICMSST,';
		 $sql .= 'icms_vICMSST,';
		 $sql .= 'icms_pDif,';
		 $sql .= 'icms_vICMSDif,';
		 $sql .= 'icms_vICMSOp,';
		 $sql .= 'icms_vBCSTRet,';
		 $sql .= 'icms_vICMSSTRet,';
		 $sql .= 'ipi_nItem,';
		 $sql .= 'ipi_cst,';
		 $sql .= 'ipi_clEnq,';
		 $sql .= 'ipi_cnpjProd,';
		 $sql .= 'ipi_cSelo,';
		 $sql .= 'ipi_qSelo,';
		 $sql .= 'ipi_cEnq,';
		 $sql .= 'ipi_vBC,';
		 $sql .= 'ipi_pIPI,';
		 $sql .= 'ipi_qUnid,';
		 $sql .= 'ipi_vUnid,';
		 $sql .= 'ipi_hvIPI,';
		 $sql .= 'pis_nItem,';
		 $sql .= 'pis_cst,';
		 $sql .= 'pis_vBC,';
		 $sql .= 'pis_pPIS,';
		 $sql .= 'pis_vPIS,';
		 $sql .= 'pis_qBCProd,';
		 $sql .= 'pis_vAliqProd,';
		 $sql .= 'cofins_nItem,';
		 $sql .= 'cofins_cst,';
		 $sql .= 'cofins_vBC,';
		 $sql .= 'cofins_pCOFINS,';
		 $sql .= 'cofins_vCOFINS,';
		 $sql .= 'cofins_qBCProd,';
		 $sql .= 'cofins_vAliqProd,';
		 $sql .= 'di_nItem,';
		 $sql .= 'di_nDI,';
		 $sql .= 'di_dDI,';
		 $sql .= 'di_xLocDesemb,';
		 $sql .= 'di_UFDesemb,';
		 $sql .= 'di_dDesemb,';
		 $sql .= 'di_tpViaTransp,';
		 $sql .= 'di_vAFRMM,';
		 $sql .= 'di_tpIntermedio,';
		 $sql .= 'di_CNPJ,';
		 $sql .= 'di_UFTerceiro,';
		 $sql .= 'di_cExportador,';
		 $sql .= 'adi_nItem,';
		 $sql .= 'adi_nDI,';
		 $sql .= 'adi_nAdicao,';
		 $sql .= 'adi_nSeqAdicC,';
		 $sql .= 'adi_cFabricante,';
		 $sql .= 'adi_vDescDI,';
		 $sql .= 'adi_nDraw,';
		 $sql .= 'imposto_nItem,';
		 $sql .= 'imposto_vlrtrib,';
		 $sql .= 'infadic_nItem,';
		 $sql .= 'infadic_inform';
		 $sql .= ') VALUES ('; 
		 $sql .= '\''.$obj->getIdent_chave().'\',';
		 $sql .= '\''.$obj->getNfref_nNF().'\',';
		 $sql .= '\''.$obj->getNfref_serie().'\',';
		 $sql .= '\''.$obj->getNfref_tpNF().'\',';
		 $sql .= '\''.$obj->getProdutos_nItem().'\',';
		 $sql .= '\''.$obj->getProdutos_cProd().'\',';
		 $sql .= '\''.$obj->getProdutos_cEAN().'\',';
		 $sql .= '\''.$obj->getProdutos_xProd().'\',';
		 $sql .= '\''.$obj->getProdutos_NCM().'\',';
		 $sql .= '\''.$obj->getProdutos_NVE().'\',';
		 $sql .= '\''.$obj->getProdutos_EXTIPI().'\',';
		 $sql .= '\''.$obj->getProdutos_CFOP().'\',';
		 $sql .= '\''.$obj->getProdutos_uCom().'\',';
		 $sql .= '\''.$obj->getProdutos_qCom().'\',';
		 $sql .= '\''.$obj->getProdutos_vUnCom().'\',';
		 $sql .= '\''.$obj->getProdutos_vProd().'\',';
		 $sql .= '\''.$obj->getProdutos_cEANTrib().'\',';
		 $sql .= '\''.$obj->getProdutos_uTrib().'\',';
		 $sql .= '\''.$obj->getProdutos_qTrib().'\',';
		 $sql .= '\''.$obj->getProdutos_vUnTrib().'\',';
		 $sql .= '\''.$obj->getProdutos_vFrete().'\',';
		 $sql .= '\''.$obj->getProdutos_vSeg().'\',';
		 $sql .= '\''.$obj->getProdutos_vDesc().'\',';
		 $sql .= '\''.$obj->getProdutos_vOutro().'\',';
		 $sql .= '\''.$obj->getProdutos_indTot().'\',';
		 $sql .= '\''.$obj->getProdutos_xPed().'\',';
		 $sql .= '\''.$obj->getProdutos_nItemPed().'\',';
		 $sql .= '\''.$obj->getProdutos_nFCI().'\',';
		 $sql .= '\''.$obj->getIcms_nItem().'\',';
		 $sql .= '\''.$obj->getIcms_orig().'\',';
		 $sql .= '\''.$obj->getIcms_cst().'\',';
		 $sql .= '\''.$obj->getIcms_modBC().'\',';
		 $sql .= '\''.$obj->getIcms_pRedBC().'\',';
		 $sql .= '\''.$obj->getIcms_vBC().'\',';
		 $sql .= '\''.$obj->getIcms_pICMS().'\',';
		 $sql .= '\''.$obj->getIcms_vICMS().'\',';
		 $sql .= '\''.$obj->getIcms_vICMSDeson().'\',';
		 $sql .= '\''.$obj->getIcms_motDesICMS().'\',';
		 $sql .= '\''.$obj->getIcms_modBCST().'\',';
		 $sql .= '\''.$obj->getIcms_pMVAST().'\',';
		 $sql .= '\''.$obj->getIcms_pRedBCST().'\',';
		 $sql .= '\''.$obj->getIcms_vBCST().'\',';
		 $sql .= '\''.$obj->getIcms_pICMSST().'\',';
		 $sql .= '\''.$obj->getIcms_vICMSST().'\',';
		 $sql .= '\''.$obj->getIcms_pDif().'\',';
		 $sql .= '\''.$obj->getIcms_vICMSDif().'\',';
		 $sql .= '\''.$obj->getIcms_vICMSOp().'\',';
		 $sql .= '\''.$obj->getIcms_vBCSTRet().'\',';
		 $sql .= '\''.$obj->getIcms_vICMSSTRet().'\',';
		 $sql .= '\''.$obj->getIpi_nItem().'\',';
		 $sql .= '\''.$obj->getIpi_cst().'\',';
		 $sql .= '\''.$obj->getIpi_clEnq().'\',';
		 $sql .= '\''.$obj->getIpi_cnpjProd().'\',';
		 $sql .= '\''.$obj->getIpi_cSelo().'\',';
		 $sql .= '\''.$obj->getIpi_qSelo().'\',';
		 $sql .= '\''.$obj->getIpi_cEnq().'\',';
		 $sql .= '\''.$obj->getIpi_vBC().'\',';
		 $sql .= '\''.$obj->getIpi_pIPI().'\',';
		 $sql .= '\''.$obj->getIpi_qUnid().'\',';
		 $sql .= '\''.$obj->getIpi_vUnid().'\',';
		 $sql .= '\''.$obj->getIpi_hvIPI().'\',';
		 $sql .= '\''.$obj->getPis_nItem().'\',';
		 $sql .= '\''.$obj->getPis_cst().'\',';
		 $sql .= '\''.$obj->getPis_vBC().'\',';
		 $sql .= '\''.$obj->getPis_pPIS().'\',';
		 $sql .= '\''.$obj->getPis_vPIS().'\',';
		 $sql .= '\''.$obj->getPis_qBCProd().'\',';
		 $sql .= '\''.$obj->getPis_vAliqProd().'\',';
		 $sql .= '\''.$obj->getCofins_nItem().'\',';
		 $sql .= '\''.$obj->getCofins_cst().'\',';
		 $sql .= '\''.$obj->getCofins_vBC().'\',';
		 $sql .= '\''.$obj->getCofins_pCOFINS().'\',';
		 $sql .= '\''.$obj->getCofins_vCOFINS().'\',';
		 $sql .= '\''.$obj->getCofins_qBCProd().'\',';
		 $sql .= '\''.$obj->getCofins_vAliqProd().'\',';
		 $sql .= '\''.$obj->getDi_nItem().'\',';
		 $sql .= '\''.$obj->getDi_nDI().'\',';
		 $sql .= '\''.$obj->getDi_dDI().'\',';
		 $sql .= '\''.$obj->getDi_xLocDesemb().'\',';
		 $sql .= '\''.$obj->getDi_UFDesemb().'\',';
		 $sql .= '\''.$obj->getDi_dDesemb().'\',';
		 $sql .= '\''.$obj->getDi_tpViaTransp().'\',';
		 $sql .= '\''.$obj->getDi_vAFRMM().'\',';
		 $sql .= '\''.$obj->getDi_tpIntermedio().'\',';
		 $sql .= '\''.$obj->getDi_CNPJ().'\',';
		 $sql .= '\''.$obj->getDi_UFTerceiro().'\',';
		 $sql .= '\''.$obj->getDi_cExportador().'\',';
		 $sql .= '\''.$obj->getAdi_nItem().'\',';
		 $sql .= '\''.$obj->getAdi_nDI().'\',';
		 $sql .= '\''.$obj->getAdi_nAdicao().'\',';
		 $sql .= '\''.$obj->getAdi_nSeqAdicC().'\',';
		 $sql .= '\''.$obj->getAdi_cFabricante().'\',';
		 $sql .= '\''.$obj->getAdi_vDescDI().'\',';
		 $sql .= '\''.$obj->getAdi_nDraw().'\',';
		 $sql .= '\''.$obj->getImposto_nItem().'\',';
		 $sql .= '\''.$obj->getImposto_vlrtrib().'\',';
		 $sql .= '\''.$obj->getInfadic_nItem().'\',';
		 $sql .= '\''.$obj->getInfadic_inform().'\'';
		 $sql .= ')'; 
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function update($obj){
		 $sql = 'UPDATE tabpro SET '; 
		 $sql .= 'ident_chave = '.'\''.$obj->getIdent_chave().'\' ,';
		 $sql .= 'Nfref_nNF = '.'\''.$obj->getNfref_nNF().'\' ,';
		 $sql .= 'Nfref_serie = '.'\''.$obj->getNfref_serie().'\' ,';
		 $sql .= 'Nfref_tpNF = '.'\''.$obj->getNfref_tpNF().'\' ,';
		 $sql .= 'produtos_nItem = '.'\''.$obj->getProdutos_nItem().'\' ,';
		 $sql .= 'produtos_cProd = '.'\''.$obj->getProdutos_cProd().'\' ,';
		 $sql .= 'produtos_cEAN = '.'\''.$obj->getProdutos_cEAN().'\' ,';
		 $sql .= 'produtos_xProd = '.'\''.$obj->getProdutos_xProd().'\' ,';
		 $sql .= 'produtos_NCM = '.'\''.$obj->getProdutos_NCM().'\' ,';
		 $sql .= 'produtos_NVE = '.'\''.$obj->getProdutos_NVE().'\' ,';
		 $sql .= 'produtos_EXTIPI = '.'\''.$obj->getProdutos_EXTIPI().'\' ,';
		 $sql .= 'produtos_CFOP = '.'\''.$obj->getProdutos_CFOP().'\' ,';
		 $sql .= 'produtos_uCom = '.'\''.$obj->getProdutos_uCom().'\' ,';
		 $sql .= 'produtos_qCom = '.'\''.$obj->getProdutos_qCom().'\' ,';
		 $sql .= 'produtos_vUnCom = '.'\''.$obj->getProdutos_vUnCom().'\' ,';
		 $sql .= 'produtos_vProd = '.'\''.$obj->getProdutos_vProd().'\' ,';
		 $sql .= 'produtos_cEANTrib = '.'\''.$obj->getProdutos_cEANTrib().'\' ,';
		 $sql .= 'produtos_uTrib = '.'\''.$obj->getProdutos_uTrib().'\' ,';
		 $sql .= 'produtos_qTrib = '.'\''.$obj->getProdutos_qTrib().'\' ,';
		 $sql .= 'produtos_vUnTrib = '.'\''.$obj->getProdutos_vUnTrib().'\' ,';
		 $sql .= 'produtos_vFrete = '.'\''.$obj->getProdutos_vFrete().'\' ,';
		 $sql .= 'produtos_vSeg = '.'\''.$obj->getProdutos_vSeg().'\' ,';
		 $sql .= 'produtos_vDesc = '.'\''.$obj->getProdutos_vDesc().'\' ,';
		 $sql .= 'produtos_vOutro = '.'\''.$obj->getProdutos_vOutro().'\' ,';
		 $sql .= 'produtos_indTot = '.'\''.$obj->getProdutos_indTot().'\' ,';
		 $sql .= 'produtos_xPed = '.'\''.$obj->getProdutos_xPed().'\' ,';
		 $sql .= 'produtos_nItemPed = '.'\''.$obj->getProdutos_nItemPed().'\' ,';
		 $sql .= 'produtos_nFCI = '.'\''.$obj->getProdutos_nFCI().'\' ,';
		 $sql .= 'icms_nItem = '.'\''.$obj->getIcms_nItem().'\' ,';
		 $sql .= 'icms_orig = '.'\''.$obj->getIcms_orig().'\' ,';
		 $sql .= 'icms_cst = '.'\''.$obj->getIcms_cst().'\' ,';
		 $sql .= 'icms_modBC = '.'\''.$obj->getIcms_modBC().'\' ,';
		 $sql .= 'icms_pRedBC = '.'\''.$obj->getIcms_pRedBC().'\' ,';
		 $sql .= 'icms_vBC = '.'\''.$obj->getIcms_vBC().'\' ,';
		 $sql .= 'icms_pICMS = '.'\''.$obj->getIcms_pICMS().'\' ,';
		 $sql .= 'icms_vICMS = '.'\''.$obj->getIcms_vICMS().'\' ,';
		 $sql .= 'icms_vICMSDeson = '.'\''.$obj->getIcms_vICMSDeson().'\' ,';
		 $sql .= 'icms_motDesICMS = '.'\''.$obj->getIcms_motDesICMS().'\' ,';
		 $sql .= 'icms_modBCST = '.'\''.$obj->getIcms_modBCST().'\' ,';
		 $sql .= 'icms_pMVAST = '.'\''.$obj->getIcms_pMVAST().'\' ,';
		 $sql .= 'icms_pRedBCST = '.'\''.$obj->getIcms_pRedBCST().'\' ,';
		 $sql .= 'icms_vBCST = '.'\''.$obj->getIcms_vBCST().'\' ,';
		 $sql .= 'icms_pICMSST = '.'\''.$obj->getIcms_pICMSST().'\' ,';
		 $sql .= 'icms_vICMSST = '.'\''.$obj->getIcms_vICMSST().'\' ,';
		 $sql .= 'icms_pDif = '.'\''.$obj->getIcms_pDif().'\' ,';
		 $sql .= 'icms_vICMSDif = '.'\''.$obj->getIcms_vICMSDif().'\' ,';
		 $sql .= 'icms_vICMSOp = '.'\''.$obj->getIcms_vICMSOp().'\' ,';
		 $sql .= 'icms_vBCSTRet = '.'\''.$obj->getIcms_vBCSTRet().'\' ,';
		 $sql .= 'icms_vICMSSTRet = '.'\''.$obj->getIcms_vICMSSTRet().'\' ,';
		 $sql .= 'ipi_nItem = '.'\''.$obj->getIpi_nItem().'\' ,';
		 $sql .= 'ipi_cst = '.'\''.$obj->getIpi_cst().'\' ,';
		 $sql .= 'ipi_clEnq = '.'\''.$obj->getIpi_clEnq().'\' ,';
		 $sql .= 'ipi_cnpjProd = '.'\''.$obj->getIpi_cnpjProd().'\' ,';
		 $sql .= 'ipi_cSelo = '.'\''.$obj->getIpi_cSelo().'\' ,';
		 $sql .= 'ipi_qSelo = '.'\''.$obj->getIpi_qSelo().'\' ,';
		 $sql .= 'ipi_cEnq = '.'\''.$obj->getIpi_cEnq().'\' ,';
		 $sql .= 'ipi_vBC = '.'\''.$obj->getIpi_vBC().'\' ,';
		 $sql .= 'ipi_pIPI = '.'\''.$obj->getIpi_pIPI().'\' ,';
		 $sql .= 'ipi_qUnid = '.'\''.$obj->getIpi_qUnid().'\' ,';
		 $sql .= 'ipi_vUnid = '.'\''.$obj->getIpi_vUnid().'\' ,';
		 $sql .= 'ipi_hvIPI = '.'\''.$obj->getIpi_hvIPI().'\' ,';
		 $sql .= 'pis_nItem = '.'\''.$obj->getPis_nItem().'\' ,';
		 $sql .= 'pis_cst = '.'\''.$obj->getPis_cst().'\' ,';
		 $sql .= 'pis_vBC = '.'\''.$obj->getPis_vBC().'\' ,';
		 $sql .= 'pis_pPIS = '.'\''.$obj->getPis_pPIS().'\' ,';
		 $sql .= 'pis_vPIS = '.'\''.$obj->getPis_vPIS().'\' ,';
		 $sql .= 'pis_qBCProd = '.'\''.$obj->getPis_qBCProd().'\' ,';
		 $sql .= 'pis_vAliqProd = '.'\''.$obj->getPis_vAliqProd().'\' ,';
		 $sql .= 'cofins_nItem = '.'\''.$obj->getCofins_nItem().'\' ,';
		 $sql .= 'cofins_cst = '.'\''.$obj->getCofins_cst().'\' ,';
		 $sql .= 'cofins_vBC = '.'\''.$obj->getCofins_vBC().'\' ,';
		 $sql .= 'cofins_pCOFINS = '.'\''.$obj->getCofins_pCOFINS().'\' ,';
		 $sql .= 'cofins_vCOFINS = '.'\''.$obj->getCofins_vCOFINS().'\' ,';
		 $sql .= 'cofins_qBCProd = '.'\''.$obj->getCofins_qBCProd().'\' ,';
		 $sql .= 'cofins_vAliqProd = '.'\''.$obj->getCofins_vAliqProd().'\' ,';
		 $sql .= 'di_nItem = '.'\''.$obj->getDi_nItem().'\' ,';
		 $sql .= 'di_nDI = '.'\''.$obj->getDi_nDI().'\' ,';
		 $sql .= 'di_dDI = '.'\''.$obj->getDi_dDI().'\' ,';
		 $sql .= 'di_xLocDesemb = '.'\''.$obj->getDi_xLocDesemb().'\' ,';
		 $sql .= 'di_UFDesemb = '.'\''.$obj->getDi_UFDesemb().'\' ,';
		 $sql .= 'di_dDesemb = '.'\''.$obj->getDi_dDesemb().'\' ,';
		 $sql .= 'di_tpViaTransp = '.'\''.$obj->getDi_tpViaTransp().'\' ,';
		 $sql .= 'di_vAFRMM = '.'\''.$obj->getDi_vAFRMM().'\' ,';
		 $sql .= 'di_tpIntermedio = '.'\''.$obj->getDi_tpIntermedio().'\' ,';
		 $sql .= 'di_CNPJ = '.'\''.$obj->getDi_CNPJ().'\' ,';
		 $sql .= 'di_UFTerceiro = '.'\''.$obj->getDi_UFTerceiro().'\' ,';
		 $sql .= 'di_cExportador = '.'\''.$obj->getDi_cExportador().'\' ,';
		 $sql .= 'adi_nItem = '.'\''.$obj->getAdi_nItem().'\' ,';
		 $sql .= 'adi_nDI = '.'\''.$obj->getAdi_nDI().'\' ,';
		 $sql .= 'adi_nAdicao = '.'\''.$obj->getAdi_nAdicao().'\' ,';
		 $sql .= 'adi_nSeqAdicC = '.'\''.$obj->getAdi_nSeqAdicC().'\' ,';
		 $sql .= 'adi_cFabricante = '.'\''.$obj->getAdi_cFabricante().'\' ,';
		 $sql .= 'adi_vDescDI = '.'\''.$obj->getAdi_vDescDI().'\' ,';
		 $sql .= 'adi_nDraw = '.'\''.$obj->getAdi_nDraw().'\' ,';
		 $sql .= 'imposto_nItem = '.'\''.$obj->getImposto_nItem().'\' ,';
		 $sql .= 'imposto_vlrtrib = '.'\''.$obj->getImposto_vlrtrib().'\' ,';
		 $sql .= 'infadic_nItem = '.'\''.$obj->getInfadic_nItem().'\' ,';
		 $sql .= 'infadic_inform = '.'\''.$obj->getInfadic_inform().'\' ';
		 $sql .= ' WHERE ident_chave = '.$obj->getIdent_chave();
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM tabpro WHERE ident_chave = '.$obj->getIdent_chave();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM tabpro WHERE 1=1 '; 
		if ($obj->getIdent_chave()) { 
			$sql .= " AND ident_chave = '".$obj->getIdent_chave()."'";
		} 
		if ($obj->getNfref_nNF()) { 
			$sql .= " AND upper(Nfref_nNF)  like ('%".strtoupper($obj->getNfref_nNF())."%')";
		} 
		if ($obj->getNfref_serie()) { 
			$sql .= " AND upper(Nfref_serie)  like ('%".strtoupper($obj->getNfref_serie())."%')";
		} 
		if ($obj->getNfref_tpNF()) { 
			$sql .= " AND upper(Nfref_tpNF)  like ('%".strtoupper($obj->getNfref_tpNF())."%')";
		} 
		if ($obj->getProdutos_nItem()) { 
			$sql .= " AND upper(produtos_nItem)  like ('%".strtoupper($obj->getProdutos_nItem())."%')";
		} 
		if ($obj->getProdutos_cProd()) { 
			$sql .= " AND upper(produtos_cProd)  like ('%".strtoupper($obj->getProdutos_cProd())."%')";
		} 
		if ($obj->getProdutos_cEAN()) { 
			$sql .= " AND upper(produtos_cEAN)  like ('%".strtoupper($obj->getProdutos_cEAN())."%')";
		} 
		if ($obj->getProdutos_xProd()) { 
			$sql .= " AND upper(produtos_xProd)  like ('%".strtoupper($obj->getProdutos_xProd())."%')";
		} 
		if ($obj->getProdutos_NCM()) { 
			$sql .= " AND upper(produtos_NCM)  like ('%".strtoupper($obj->getProdutos_NCM())."%')";
		} 
		if ($obj->getProdutos_NVE()) { 
			$sql .= " AND upper(produtos_NVE)  like ('%".strtoupper($obj->getProdutos_NVE())."%')";
		} 
		if ($obj->getProdutos_EXTIPI()) { 
			$sql .= " AND upper(produtos_EXTIPI)  like ('%".strtoupper($obj->getProdutos_EXTIPI())."%')";
		} 
		if ($obj->getProdutos_CFOP()) { 
			$sql .= " AND upper(produtos_CFOP)  like ('%".strtoupper($obj->getProdutos_CFOP())."%')";
		} 
		if ($obj->getProdutos_uCom()) { 
			$sql .= " AND upper(produtos_uCom)  like ('%".strtoupper($obj->getProdutos_uCom())."%')";
		} 
		if ($obj->getProdutos_qCom()) { 
			$sql .= " AND upper(produtos_qCom)  like ('%".strtoupper($obj->getProdutos_qCom())."%')";
		} 
		if ($obj->getProdutos_vUnCom()) { 
			$sql .= " AND upper(produtos_vUnCom)  like ('%".strtoupper($obj->getProdutos_vUnCom())."%')";
		} 
		if ($obj->getProdutos_vProd()) { 
			$sql .= " AND upper(produtos_vProd)  like ('%".strtoupper($obj->getProdutos_vProd())."%')";
		} 
		if ($obj->getProdutos_cEANTrib()) { 
			$sql .= " AND upper(produtos_cEANTrib)  like ('%".strtoupper($obj->getProdutos_cEANTrib())."%')";
		} 
		if ($obj->getProdutos_uTrib()) { 
			$sql .= " AND upper(produtos_uTrib)  like ('%".strtoupper($obj->getProdutos_uTrib())."%')";
		} 
		if ($obj->getProdutos_qTrib()) { 
			$sql .= " AND upper(produtos_qTrib)  like ('%".strtoupper($obj->getProdutos_qTrib())."%')";
		} 
		if ($obj->getProdutos_vUnTrib()) { 
			$sql .= " AND upper(produtos_vUnTrib)  like ('%".strtoupper($obj->getProdutos_vUnTrib())."%')";
		} 
		if ($obj->getProdutos_vFrete()) { 
			$sql .= " AND upper(produtos_vFrete)  like ('%".strtoupper($obj->getProdutos_vFrete())."%')";
		} 
		if ($obj->getProdutos_vSeg()) { 
			$sql .= " AND upper(produtos_vSeg)  like ('%".strtoupper($obj->getProdutos_vSeg())."%')";
		} 
		if ($obj->getProdutos_vDesc()) { 
			$sql .= " AND upper(produtos_vDesc)  like ('%".strtoupper($obj->getProdutos_vDesc())."%')";
		} 
		if ($obj->getProdutos_vOutro()) { 
			$sql .= " AND upper(produtos_vOutro)  like ('%".strtoupper($obj->getProdutos_vOutro())."%')";
		} 
		if ($obj->getProdutos_indTot()) { 
			$sql .= " AND upper(produtos_indTot)  like ('%".strtoupper($obj->getProdutos_indTot())."%')";
		} 
		if ($obj->getProdutos_xPed()) { 
			$sql .= " AND upper(produtos_xPed)  like ('%".strtoupper($obj->getProdutos_xPed())."%')";
		} 
		if ($obj->getProdutos_nItemPed()) { 
			$sql .= " AND upper(produtos_nItemPed)  like ('%".strtoupper($obj->getProdutos_nItemPed())."%')";
		} 
		if ($obj->getProdutos_nFCI()) { 
			$sql .= " AND upper(produtos_nFCI)  like ('%".strtoupper($obj->getProdutos_nFCI())."%')";
		} 
		if ($obj->getIcms_nItem()) { 
			$sql .= " AND upper(icms_nItem)  like ('%".strtoupper($obj->getIcms_nItem())."%')";
		} 
		if ($obj->getIcms_orig()) { 
			$sql .= " AND upper(icms_orig)  like ('%".strtoupper($obj->getIcms_orig())."%')";
		} 
		if ($obj->getIcms_cst()) { 
			$sql .= " AND upper(icms_cst)  like ('%".strtoupper($obj->getIcms_cst())."%')";
		} 
		if ($obj->getIcms_modBC()) { 
			$sql .= " AND upper(icms_modBC)  like ('%".strtoupper($obj->getIcms_modBC())."%')";
		} 
		if ($obj->getIcms_pRedBC()) { 
			$sql .= " AND upper(icms_pRedBC)  like ('%".strtoupper($obj->getIcms_pRedBC())."%')";
		} 
		if ($obj->getIcms_vBC()) { 
			$sql .= " AND upper(icms_vBC)  like ('%".strtoupper($obj->getIcms_vBC())."%')";
		} 
		if ($obj->getIcms_pICMS()) { 
			$sql .= " AND upper(icms_pICMS)  like ('%".strtoupper($obj->getIcms_pICMS())."%')";
		} 
		if ($obj->getIcms_vICMS()) { 
			$sql .= " AND upper(icms_vICMS)  like ('%".strtoupper($obj->getIcms_vICMS())."%')";
		} 
		if ($obj->getIcms_vICMSDeson()) { 
			$sql .= " AND upper(icms_vICMSDeson)  like ('%".strtoupper($obj->getIcms_vICMSDeson())."%')";
		} 
		if ($obj->getIcms_motDesICMS()) { 
			$sql .= " AND upper(icms_motDesICMS)  like ('%".strtoupper($obj->getIcms_motDesICMS())."%')";
		} 
		if ($obj->getIcms_modBCST()) { 
			$sql .= " AND upper(icms_modBCST)  like ('%".strtoupper($obj->getIcms_modBCST())."%')";
		} 
		if ($obj->getIcms_pMVAST()) { 
			$sql .= " AND upper(icms_pMVAST)  like ('%".strtoupper($obj->getIcms_pMVAST())."%')";
		} 
		if ($obj->getIcms_pRedBCST()) { 
			$sql .= " AND upper(icms_pRedBCST)  like ('%".strtoupper($obj->getIcms_pRedBCST())."%')";
		} 
		if ($obj->getIcms_vBCST()) { 
			$sql .= " AND upper(icms_vBCST)  like ('%".strtoupper($obj->getIcms_vBCST())."%')";
		} 
		if ($obj->getIcms_pICMSST()) { 
			$sql .= " AND upper(icms_pICMSST)  like ('%".strtoupper($obj->getIcms_pICMSST())."%')";
		} 
		if ($obj->getIcms_vICMSST()) { 
			$sql .= " AND upper(icms_vICMSST)  like ('%".strtoupper($obj->getIcms_vICMSST())."%')";
		} 
		if ($obj->getIcms_pDif()) { 
			$sql .= " AND upper(icms_pDif)  like ('%".strtoupper($obj->getIcms_pDif())."%')";
		} 
		if ($obj->getIcms_vICMSDif()) { 
			$sql .= " AND upper(icms_vICMSDif)  like ('%".strtoupper($obj->getIcms_vICMSDif())."%')";
		} 
		if ($obj->getIcms_vICMSOp()) { 
			$sql .= " AND upper(icms_vICMSOp)  like ('%".strtoupper($obj->getIcms_vICMSOp())."%')";
		} 
		if ($obj->getIcms_vBCSTRet()) { 
			$sql .= " AND upper(icms_vBCSTRet)  like ('%".strtoupper($obj->getIcms_vBCSTRet())."%')";
		} 
		if ($obj->getIcms_vICMSSTRet()) { 
			$sql .= " AND upper(icms_vICMSSTRet)  like ('%".strtoupper($obj->getIcms_vICMSSTRet())."%')";
		} 
		if ($obj->getIpi_nItem()) { 
			$sql .= " AND upper(ipi_nItem)  like ('%".strtoupper($obj->getIpi_nItem())."%')";
		} 
		if ($obj->getIpi_cst()) { 
			$sql .= " AND upper(ipi_cst)  like ('%".strtoupper($obj->getIpi_cst())."%')";
		} 
		if ($obj->getIpi_clEnq()) { 
			$sql .= " AND upper(ipi_clEnq)  like ('%".strtoupper($obj->getIpi_clEnq())."%')";
		} 
		if ($obj->getIpi_cnpjProd()) { 
			$sql .= " AND upper(ipi_cnpjProd)  like ('%".strtoupper($obj->getIpi_cnpjProd())."%')";
		} 
		if ($obj->getIpi_cSelo()) { 
			$sql .= " AND upper(ipi_cSelo)  like ('%".strtoupper($obj->getIpi_cSelo())."%')";
		} 
		if ($obj->getIpi_qSelo()) { 
			$sql .= " AND upper(ipi_qSelo)  like ('%".strtoupper($obj->getIpi_qSelo())."%')";
		} 
		if ($obj->getIpi_cEnq()) { 
			$sql .= " AND upper(ipi_cEnq)  like ('%".strtoupper($obj->getIpi_cEnq())."%')";
		} 
		if ($obj->getIpi_vBC()) { 
			$sql .= " AND upper(ipi_vBC)  like ('%".strtoupper($obj->getIpi_vBC())."%')";
		} 
		if ($obj->getIpi_pIPI()) { 
			$sql .= " AND upper(ipi_pIPI)  like ('%".strtoupper($obj->getIpi_pIPI())."%')";
		} 
		if ($obj->getIpi_qUnid()) { 
			$sql .= " AND upper(ipi_qUnid)  like ('%".strtoupper($obj->getIpi_qUnid())."%')";
		} 
		if ($obj->getIpi_vUnid()) { 
			$sql .= " AND upper(ipi_vUnid)  like ('%".strtoupper($obj->getIpi_vUnid())."%')";
		} 
		if ($obj->getIpi_hvIPI()) { 
			$sql .= " AND upper(ipi_hvIPI)  like ('%".strtoupper($obj->getIpi_hvIPI())."%')";
		} 
		if ($obj->getPis_nItem()) { 
			$sql .= " AND upper(pis_nItem)  like ('%".strtoupper($obj->getPis_nItem())."%')";
		} 
		if ($obj->getPis_cst()) { 
			$sql .= " AND upper(pis_cst)  like ('%".strtoupper($obj->getPis_cst())."%')";
		} 
		if ($obj->getPis_vBC()) { 
			$sql .= " AND upper(pis_vBC)  like ('%".strtoupper($obj->getPis_vBC())."%')";
		} 
		if ($obj->getPis_pPIS()) { 
			$sql .= " AND upper(pis_pPIS)  like ('%".strtoupper($obj->getPis_pPIS())."%')";
		} 
		if ($obj->getPis_vPIS()) { 
			$sql .= " AND upper(pis_vPIS)  like ('%".strtoupper($obj->getPis_vPIS())."%')";
		} 
		if ($obj->getPis_qBCProd()) { 
			$sql .= " AND upper(pis_qBCProd)  like ('%".strtoupper($obj->getPis_qBCProd())."%')";
		} 
		if ($obj->getPis_vAliqProd()) { 
			$sql .= " AND upper(pis_vAliqProd)  like ('%".strtoupper($obj->getPis_vAliqProd())."%')";
		} 
		if ($obj->getCofins_nItem()) { 
			$sql .= " AND upper(cofins_nItem)  like ('%".strtoupper($obj->getCofins_nItem())."%')";
		} 
		if ($obj->getCofins_cst()) { 
			$sql .= " AND upper(cofins_cst)  like ('%".strtoupper($obj->getCofins_cst())."%')";
		} 
		if ($obj->getCofins_vBC()) { 
			$sql .= " AND upper(cofins_vBC)  like ('%".strtoupper($obj->getCofins_vBC())."%')";
		} 
		if ($obj->getCofins_pCOFINS()) { 
			$sql .= " AND upper(cofins_pCOFINS)  like ('%".strtoupper($obj->getCofins_pCOFINS())."%')";
		} 
		if ($obj->getCofins_vCOFINS()) { 
			$sql .= " AND upper(cofins_vCOFINS)  like ('%".strtoupper($obj->getCofins_vCOFINS())."%')";
		} 
		if ($obj->getCofins_qBCProd()) { 
			$sql .= " AND upper(cofins_qBCProd)  like ('%".strtoupper($obj->getCofins_qBCProd())."%')";
		} 
		if ($obj->getCofins_vAliqProd()) { 
			$sql .= " AND upper(cofins_vAliqProd)  like ('%".strtoupper($obj->getCofins_vAliqProd())."%')";
		} 
		if ($obj->getDi_nItem()) { 
			$sql .= " AND upper(di_nItem)  like ('%".strtoupper($obj->getDi_nItem())."%')";
		} 
		if ($obj->getDi_nDI()) { 
			$sql .= " AND upper(di_nDI)  like ('%".strtoupper($obj->getDi_nDI())."%')";
		} 
		if ($obj->getDi_dDI()) { 
			$sql .= " AND upper(di_dDI)  like ('%".strtoupper($obj->getDi_dDI())."%')";
		} 
		if ($obj->getDi_xLocDesemb()) { 
			$sql .= " AND upper(di_xLocDesemb)  like ('%".strtoupper($obj->getDi_xLocDesemb())."%')";
		} 
		if ($obj->getDi_UFDesemb()) { 
			$sql .= " AND upper(di_UFDesemb)  like ('%".strtoupper($obj->getDi_UFDesemb())."%')";
		} 
		if ($obj->getDi_dDesemb()) { 
			$sql .= " AND upper(di_dDesemb)  like ('%".strtoupper($obj->getDi_dDesemb())."%')";
		} 
		if ($obj->getDi_tpViaTransp()) { 
			$sql .= " AND upper(di_tpViaTransp)  like ('%".strtoupper($obj->getDi_tpViaTransp())."%')";
		} 
		if ($obj->getDi_vAFRMM()) { 
			$sql .= " AND upper(di_vAFRMM)  like ('%".strtoupper($obj->getDi_vAFRMM())."%')";
		} 
		if ($obj->getDi_tpIntermedio()) { 
			$sql .= " AND upper(di_tpIntermedio)  like ('%".strtoupper($obj->getDi_tpIntermedio())."%')";
		} 
		if ($obj->getDi_CNPJ()) { 
			$sql .= " AND upper(di_CNPJ)  like ('%".strtoupper($obj->getDi_CNPJ())."%')";
		} 
		if ($obj->getDi_UFTerceiro()) { 
			$sql .= " AND upper(di_UFTerceiro)  like ('%".strtoupper($obj->getDi_UFTerceiro())."%')";
		} 
		if ($obj->getDi_cExportador()) { 
			$sql .= " AND upper(di_cExportador)  like ('%".strtoupper($obj->getDi_cExportador())."%')";
		} 
		if ($obj->getAdi_nItem()) { 
			$sql .= " AND upper(adi_nItem)  like ('%".strtoupper($obj->getAdi_nItem())."%')";
		} 
		if ($obj->getAdi_nDI()) { 
			$sql .= " AND upper(adi_nDI)  like ('%".strtoupper($obj->getAdi_nDI())."%')";
		} 
		if ($obj->getAdi_nAdicao()) { 
			$sql .= " AND upper(adi_nAdicao)  like ('%".strtoupper($obj->getAdi_nAdicao())."%')";
		} 
		if ($obj->getAdi_nSeqAdicC()) { 
			$sql .= " AND upper(adi_nSeqAdicC)  like ('%".strtoupper($obj->getAdi_nSeqAdicC())."%')";
		} 
		if ($obj->getAdi_cFabricante()) { 
			$sql .= " AND upper(adi_cFabricante)  like ('%".strtoupper($obj->getAdi_cFabricante())."%')";
		} 
		if ($obj->getAdi_vDescDI()) { 
			$sql .= " AND upper(adi_vDescDI)  like ('%".strtoupper($obj->getAdi_vDescDI())."%')";
		} 
		if ($obj->getAdi_nDraw()) { 
			$sql .= " AND upper(adi_nDraw)  like ('%".strtoupper($obj->getAdi_nDraw())."%')";
		} 
		if ($obj->getImposto_nItem()) { 
			$sql .= " AND upper(imposto_nItem)  like ('%".strtoupper($obj->getImposto_nItem())."%')";
		} 
		if ($obj->getImposto_vlrtrib()) { 
			$sql .= " AND upper(imposto_vlrtrib)  like ('%".strtoupper($obj->getImposto_vlrtrib())."%')";
		} 
		if ($obj->getInfadic_nItem()) { 
			$sql .= " AND upper(infadic_nItem)  like ('%".strtoupper($obj->getInfadic_nItem())."%')";
		} 
		if ($obj->getInfadic_inform()) { 
			$sql .= " AND upper(infadic_inform)  like ('%".strtoupper($obj->getInfadic_inform())."%')";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setIdent_chave(mysql_result($rs, 0, 'ident_chave')); 
			 $obj->setNfref_nNF(mysql_result($rs, 0, 'Nfref_nNF')); 
			 $obj->setNfref_serie(mysql_result($rs, 0, 'Nfref_serie')); 
			 $obj->setNfref_tpNF(mysql_result($rs, 0, 'Nfref_tpNF')); 
			 $obj->setProdutos_nItem(mysql_result($rs, 0, 'produtos_nItem')); 
			 $obj->setProdutos_cProd(mysql_result($rs, 0, 'produtos_cProd')); 
			 $obj->setProdutos_cEAN(mysql_result($rs, 0, 'produtos_cEAN')); 
			 $obj->setProdutos_xProd(mysql_result($rs, 0, 'produtos_xProd')); 
			 $obj->setProdutos_NCM(mysql_result($rs, 0, 'produtos_NCM')); 
			 $obj->setProdutos_NVE(mysql_result($rs, 0, 'produtos_NVE')); 
			 $obj->setProdutos_EXTIPI(mysql_result($rs, 0, 'produtos_EXTIPI')); 
			 $obj->setProdutos_CFOP(mysql_result($rs, 0, 'produtos_CFOP')); 
			 $obj->setProdutos_uCom(mysql_result($rs, 0, 'produtos_uCom')); 
			 $obj->setProdutos_qCom(mysql_result($rs, 0, 'produtos_qCom')); 
			 $obj->setProdutos_vUnCom(mysql_result($rs, 0, 'produtos_vUnCom')); 
			 $obj->setProdutos_vProd(mysql_result($rs, 0, 'produtos_vProd')); 
			 $obj->setProdutos_cEANTrib(mysql_result($rs, 0, 'produtos_cEANTrib')); 
			 $obj->setProdutos_uTrib(mysql_result($rs, 0, 'produtos_uTrib')); 
			 $obj->setProdutos_qTrib(mysql_result($rs, 0, 'produtos_qTrib')); 
			 $obj->setProdutos_vUnTrib(mysql_result($rs, 0, 'produtos_vUnTrib')); 
			 $obj->setProdutos_vFrete(mysql_result($rs, 0, 'produtos_vFrete')); 
			 $obj->setProdutos_vSeg(mysql_result($rs, 0, 'produtos_vSeg')); 
			 $obj->setProdutos_vDesc(mysql_result($rs, 0, 'produtos_vDesc')); 
			 $obj->setProdutos_vOutro(mysql_result($rs, 0, 'produtos_vOutro')); 
			 $obj->setProdutos_indTot(mysql_result($rs, 0, 'produtos_indTot')); 
			 $obj->setProdutos_xPed(mysql_result($rs, 0, 'produtos_xPed')); 
			 $obj->setProdutos_nItemPed(mysql_result($rs, 0, 'produtos_nItemPed')); 
			 $obj->setProdutos_nFCI(mysql_result($rs, 0, 'produtos_nFCI')); 
			 $obj->setIcms_nItem(mysql_result($rs, 0, 'icms_nItem')); 
			 $obj->setIcms_orig(mysql_result($rs, 0, 'icms_orig')); 
			 $obj->setIcms_cst(mysql_result($rs, 0, 'icms_cst')); 
			 $obj->setIcms_modBC(mysql_result($rs, 0, 'icms_modBC')); 
			 $obj->setIcms_pRedBC(mysql_result($rs, 0, 'icms_pRedBC')); 
			 $obj->setIcms_vBC(mysql_result($rs, 0, 'icms_vBC')); 
			 $obj->setIcms_pICMS(mysql_result($rs, 0, 'icms_pICMS')); 
			 $obj->setIcms_vICMS(mysql_result($rs, 0, 'icms_vICMS')); 
			 $obj->setIcms_vICMSDeson(mysql_result($rs, 0, 'icms_vICMSDeson')); 
			 $obj->setIcms_motDesICMS(mysql_result($rs, 0, 'icms_motDesICMS')); 
			 $obj->setIcms_modBCST(mysql_result($rs, 0, 'icms_modBCST')); 
			 $obj->setIcms_pMVAST(mysql_result($rs, 0, 'icms_pMVAST')); 
			 $obj->setIcms_pRedBCST(mysql_result($rs, 0, 'icms_pRedBCST')); 
			 $obj->setIcms_vBCST(mysql_result($rs, 0, 'icms_vBCST')); 
			 $obj->setIcms_pICMSST(mysql_result($rs, 0, 'icms_pICMSST')); 
			 $obj->setIcms_vICMSST(mysql_result($rs, 0, 'icms_vICMSST')); 
			 $obj->setIcms_pDif(mysql_result($rs, 0, 'icms_pDif')); 
			 $obj->setIcms_vICMSDif(mysql_result($rs, 0, 'icms_vICMSDif')); 
			 $obj->setIcms_vICMSOp(mysql_result($rs, 0, 'icms_vICMSOp')); 
			 $obj->setIcms_vBCSTRet(mysql_result($rs, 0, 'icms_vBCSTRet')); 
			 $obj->setIcms_vICMSSTRet(mysql_result($rs, 0, 'icms_vICMSSTRet')); 
			 $obj->setIpi_nItem(mysql_result($rs, 0, 'ipi_nItem')); 
			 $obj->setIpi_cst(mysql_result($rs, 0, 'ipi_cst')); 
			 $obj->setIpi_clEnq(mysql_result($rs, 0, 'ipi_clEnq')); 
			 $obj->setIpi_cnpjProd(mysql_result($rs, 0, 'ipi_cnpjProd')); 
			 $obj->setIpi_cSelo(mysql_result($rs, 0, 'ipi_cSelo')); 
			 $obj->setIpi_qSelo(mysql_result($rs, 0, 'ipi_qSelo')); 
			 $obj->setIpi_cEnq(mysql_result($rs, 0, 'ipi_cEnq')); 
			 $obj->setIpi_vBC(mysql_result($rs, 0, 'ipi_vBC')); 
			 $obj->setIpi_pIPI(mysql_result($rs, 0, 'ipi_pIPI')); 
			 $obj->setIpi_qUnid(mysql_result($rs, 0, 'ipi_qUnid')); 
			 $obj->setIpi_vUnid(mysql_result($rs, 0, 'ipi_vUnid')); 
			 $obj->setIpi_hvIPI(mysql_result($rs, 0, 'ipi_hvIPI')); 
			 $obj->setPis_nItem(mysql_result($rs, 0, 'pis_nItem')); 
			 $obj->setPis_cst(mysql_result($rs, 0, 'pis_cst')); 
			 $obj->setPis_vBC(mysql_result($rs, 0, 'pis_vBC')); 
			 $obj->setPis_pPIS(mysql_result($rs, 0, 'pis_pPIS')); 
			 $obj->setPis_vPIS(mysql_result($rs, 0, 'pis_vPIS')); 
			 $obj->setPis_qBCProd(mysql_result($rs, 0, 'pis_qBCProd')); 
			 $obj->setPis_vAliqProd(mysql_result($rs, 0, 'pis_vAliqProd')); 
			 $obj->setCofins_nItem(mysql_result($rs, 0, 'cofins_nItem')); 
			 $obj->setCofins_cst(mysql_result($rs, 0, 'cofins_cst')); 
			 $obj->setCofins_vBC(mysql_result($rs, 0, 'cofins_vBC')); 
			 $obj->setCofins_pCOFINS(mysql_result($rs, 0, 'cofins_pCOFINS')); 
			 $obj->setCofins_vCOFINS(mysql_result($rs, 0, 'cofins_vCOFINS')); 
			 $obj->setCofins_qBCProd(mysql_result($rs, 0, 'cofins_qBCProd')); 
			 $obj->setCofins_vAliqProd(mysql_result($rs, 0, 'cofins_vAliqProd')); 
			 $obj->setDi_nItem(mysql_result($rs, 0, 'di_nItem')); 
			 $obj->setDi_nDI(mysql_result($rs, 0, 'di_nDI')); 
			 $obj->setDi_dDI(mysql_result($rs, 0, 'di_dDI')); 
			 $obj->setDi_xLocDesemb(mysql_result($rs, 0, 'di_xLocDesemb')); 
			 $obj->setDi_UFDesemb(mysql_result($rs, 0, 'di_UFDesemb')); 
			 $obj->setDi_dDesemb(mysql_result($rs, 0, 'di_dDesemb')); 
			 $obj->setDi_tpViaTransp(mysql_result($rs, 0, 'di_tpViaTransp')); 
			 $obj->setDi_vAFRMM(mysql_result($rs, 0, 'di_vAFRMM')); 
			 $obj->setDi_tpIntermedio(mysql_result($rs, 0, 'di_tpIntermedio')); 
			 $obj->setDi_CNPJ(mysql_result($rs, 0, 'di_CNPJ')); 
			 $obj->setDi_UFTerceiro(mysql_result($rs, 0, 'di_UFTerceiro')); 
			 $obj->setDi_cExportador(mysql_result($rs, 0, 'di_cExportador')); 
			 $obj->setAdi_nItem(mysql_result($rs, 0, 'adi_nItem')); 
			 $obj->setAdi_nDI(mysql_result($rs, 0, 'adi_nDI')); 
			 $obj->setAdi_nAdicao(mysql_result($rs, 0, 'adi_nAdicao')); 
			 $obj->setAdi_nSeqAdicC(mysql_result($rs, 0, 'adi_nSeqAdicC')); 
			 $obj->setAdi_cFabricante(mysql_result($rs, 0, 'adi_cFabricante')); 
			 $obj->setAdi_vDescDI(mysql_result($rs, 0, 'adi_vDescDI')); 
			 $obj->setAdi_nDraw(mysql_result($rs, 0, 'adi_nDraw')); 
			 $obj->setImposto_nItem(mysql_result($rs, 0, 'imposto_nItem')); 
			 $obj->setImposto_vlrtrib(mysql_result($rs, 0, 'imposto_vlrtrib')); 
			 $obj->setInfadic_nItem(mysql_result($rs, 0, 'infadic_nItem')); 
			 $obj->setInfadic_inform(mysql_result($rs, 0, 'infadic_inform')); 
		} 
		 return $obj; 
	} 

	  function countAll($obj){
		 $sql = 'SELECT count(*) as existe FROM tabpro WHERE 1=1 ';  


		if ($obj->getIdent_chave()) { 
			$sql .= " AND ident_chave = '".$obj->getIdent_chave()."'";
		} 
		if ($obj->getNfref_nNF()) { 
			$sql .= " AND upper(Nfref_nNF)  like ('%".strtoupper($obj->getNfref_nNF())."%')";
		} 
		if ($obj->getNfref_serie()) { 
			$sql .= " AND upper(Nfref_serie)  like ('%".strtoupper($obj->getNfref_serie())."%')";
		} 
		if ($obj->getNfref_tpNF()) { 
			$sql .= " AND upper(Nfref_tpNF)  like ('%".strtoupper($obj->getNfref_tpNF())."%')";
		} 
		if ($obj->getProdutos_nItem()) { 
			$sql .= " AND upper(produtos_nItem)  like ('%".strtoupper($obj->getProdutos_nItem())."%')";
		} 
		if ($obj->getProdutos_cProd()) { 
			$sql .= " AND upper(produtos_cProd)  like ('%".strtoupper($obj->getProdutos_cProd())."%')";
		} 
		if ($obj->getProdutos_cEAN()) { 
			$sql .= " AND upper(produtos_cEAN)  like ('%".strtoupper($obj->getProdutos_cEAN())."%')";
		} 
		if ($obj->getProdutos_xProd()) { 
			$sql .= " AND upper(produtos_xProd)  like ('%".strtoupper($obj->getProdutos_xProd())."%')";
		} 
		if ($obj->getProdutos_NCM()) { 
			$sql .= " AND upper(produtos_NCM)  like ('%".strtoupper($obj->getProdutos_NCM())."%')";
		} 
		if ($obj->getProdutos_NVE()) { 
			$sql .= " AND upper(produtos_NVE)  like ('%".strtoupper($obj->getProdutos_NVE())."%')";
		} 
		if ($obj->getProdutos_EXTIPI()) { 
			$sql .= " AND upper(produtos_EXTIPI)  like ('%".strtoupper($obj->getProdutos_EXTIPI())."%')";
		} 
		if ($obj->getProdutos_CFOP()) { 
			$sql .= " AND upper(produtos_CFOP)  like ('%".strtoupper($obj->getProdutos_CFOP())."%')";
		} 
		if ($obj->getProdutos_uCom()) { 
			$sql .= " AND upper(produtos_uCom)  like ('%".strtoupper($obj->getProdutos_uCom())."%')";
		} 
		if ($obj->getProdutos_qCom()) { 
			$sql .= " AND upper(produtos_qCom)  like ('%".strtoupper($obj->getProdutos_qCom())."%')";
		} 
		if ($obj->getProdutos_vUnCom()) { 
			$sql .= " AND upper(produtos_vUnCom)  like ('%".strtoupper($obj->getProdutos_vUnCom())."%')";
		} 
		if ($obj->getProdutos_vProd()) { 
			$sql .= " AND upper(produtos_vProd)  like ('%".strtoupper($obj->getProdutos_vProd())."%')";
		} 
		if ($obj->getProdutos_cEANTrib()) { 
			$sql .= " AND upper(produtos_cEANTrib)  like ('%".strtoupper($obj->getProdutos_cEANTrib())."%')";
		} 
		if ($obj->getProdutos_uTrib()) { 
			$sql .= " AND upper(produtos_uTrib)  like ('%".strtoupper($obj->getProdutos_uTrib())."%')";
		} 
		if ($obj->getProdutos_qTrib()) { 
			$sql .= " AND upper(produtos_qTrib)  like ('%".strtoupper($obj->getProdutos_qTrib())."%')";
		} 
		if ($obj->getProdutos_vUnTrib()) { 
			$sql .= " AND upper(produtos_vUnTrib)  like ('%".strtoupper($obj->getProdutos_vUnTrib())."%')";
		} 
		if ($obj->getProdutos_vFrete()) { 
			$sql .= " AND upper(produtos_vFrete)  like ('%".strtoupper($obj->getProdutos_vFrete())."%')";
		} 
		if ($obj->getProdutos_vSeg()) { 
			$sql .= " AND upper(produtos_vSeg)  like ('%".strtoupper($obj->getProdutos_vSeg())."%')";
		} 
		if ($obj->getProdutos_vDesc()) { 
			$sql .= " AND upper(produtos_vDesc)  like ('%".strtoupper($obj->getProdutos_vDesc())."%')";
		} 
		if ($obj->getProdutos_vOutro()) { 
			$sql .= " AND upper(produtos_vOutro)  like ('%".strtoupper($obj->getProdutos_vOutro())."%')";
		} 
		if ($obj->getProdutos_indTot()) { 
			$sql .= " AND upper(produtos_indTot)  like ('%".strtoupper($obj->getProdutos_indTot())."%')";
		} 
		if ($obj->getProdutos_xPed()) { 
			$sql .= " AND upper(produtos_xPed)  like ('%".strtoupper($obj->getProdutos_xPed())."%')";
		} 
		if ($obj->getProdutos_nItemPed()) { 
			$sql .= " AND upper(produtos_nItemPed)  like ('%".strtoupper($obj->getProdutos_nItemPed())."%')";
		} 
		if ($obj->getProdutos_nFCI()) { 
			$sql .= " AND upper(produtos_nFCI)  like ('%".strtoupper($obj->getProdutos_nFCI())."%')";
		} 
		if ($obj->getIcms_nItem()) { 
			$sql .= " AND upper(icms_nItem)  like ('%".strtoupper($obj->getIcms_nItem())."%')";
		} 
		if ($obj->getIcms_orig()) { 
			$sql .= " AND upper(icms_orig)  like ('%".strtoupper($obj->getIcms_orig())."%')";
		} 
		if ($obj->getIcms_cst()) { 
			$sql .= " AND upper(icms_cst)  like ('%".strtoupper($obj->getIcms_cst())."%')";
		} 
		if ($obj->getIcms_modBC()) { 
			$sql .= " AND upper(icms_modBC)  like ('%".strtoupper($obj->getIcms_modBC())."%')";
		} 
		if ($obj->getIcms_pRedBC()) { 
			$sql .= " AND upper(icms_pRedBC)  like ('%".strtoupper($obj->getIcms_pRedBC())."%')";
		} 
		if ($obj->getIcms_vBC()) { 
			$sql .= " AND upper(icms_vBC)  like ('%".strtoupper($obj->getIcms_vBC())."%')";
		} 
		if ($obj->getIcms_pICMS()) { 
			$sql .= " AND upper(icms_pICMS)  like ('%".strtoupper($obj->getIcms_pICMS())."%')";
		} 
		if ($obj->getIcms_vICMS()) { 
			$sql .= " AND upper(icms_vICMS)  like ('%".strtoupper($obj->getIcms_vICMS())."%')";
		} 
		if ($obj->getIcms_vICMSDeson()) { 
			$sql .= " AND upper(icms_vICMSDeson)  like ('%".strtoupper($obj->getIcms_vICMSDeson())."%')";
		} 
		if ($obj->getIcms_motDesICMS()) { 
			$sql .= " AND upper(icms_motDesICMS)  like ('%".strtoupper($obj->getIcms_motDesICMS())."%')";
		} 
		if ($obj->getIcms_modBCST()) { 
			$sql .= " AND upper(icms_modBCST)  like ('%".strtoupper($obj->getIcms_modBCST())."%')";
		} 
		if ($obj->getIcms_pMVAST()) { 
			$sql .= " AND upper(icms_pMVAST)  like ('%".strtoupper($obj->getIcms_pMVAST())."%')";
		} 
		if ($obj->getIcms_pRedBCST()) { 
			$sql .= " AND upper(icms_pRedBCST)  like ('%".strtoupper($obj->getIcms_pRedBCST())."%')";
		} 
		if ($obj->getIcms_vBCST()) { 
			$sql .= " AND upper(icms_vBCST)  like ('%".strtoupper($obj->getIcms_vBCST())."%')";
		} 
		if ($obj->getIcms_pICMSST()) { 
			$sql .= " AND upper(icms_pICMSST)  like ('%".strtoupper($obj->getIcms_pICMSST())."%')";
		} 
		if ($obj->getIcms_vICMSST()) { 
			$sql .= " AND upper(icms_vICMSST)  like ('%".strtoupper($obj->getIcms_vICMSST())."%')";
		} 
		if ($obj->getIcms_pDif()) { 
			$sql .= " AND upper(icms_pDif)  like ('%".strtoupper($obj->getIcms_pDif())."%')";
		} 
		if ($obj->getIcms_vICMSDif()) { 
			$sql .= " AND upper(icms_vICMSDif)  like ('%".strtoupper($obj->getIcms_vICMSDif())."%')";
		} 
		if ($obj->getIcms_vICMSOp()) { 
			$sql .= " AND upper(icms_vICMSOp)  like ('%".strtoupper($obj->getIcms_vICMSOp())."%')";
		} 
		if ($obj->getIcms_vBCSTRet()) { 
			$sql .= " AND upper(icms_vBCSTRet)  like ('%".strtoupper($obj->getIcms_vBCSTRet())."%')";
		} 
		if ($obj->getIcms_vICMSSTRet()) { 
			$sql .= " AND upper(icms_vICMSSTRet)  like ('%".strtoupper($obj->getIcms_vICMSSTRet())."%')";
		} 
		if ($obj->getIpi_nItem()) { 
			$sql .= " AND upper(ipi_nItem)  like ('%".strtoupper($obj->getIpi_nItem())."%')";
		} 
		if ($obj->getIpi_cst()) { 
			$sql .= " AND upper(ipi_cst)  like ('%".strtoupper($obj->getIpi_cst())."%')";
		} 
		if ($obj->getIpi_clEnq()) { 
			$sql .= " AND upper(ipi_clEnq)  like ('%".strtoupper($obj->getIpi_clEnq())."%')";
		} 
		if ($obj->getIpi_cnpjProd()) { 
			$sql .= " AND upper(ipi_cnpjProd)  like ('%".strtoupper($obj->getIpi_cnpjProd())."%')";
		} 
		if ($obj->getIpi_cSelo()) { 
			$sql .= " AND upper(ipi_cSelo)  like ('%".strtoupper($obj->getIpi_cSelo())."%')";
		} 
		if ($obj->getIpi_qSelo()) { 
			$sql .= " AND upper(ipi_qSelo)  like ('%".strtoupper($obj->getIpi_qSelo())."%')";
		} 
		if ($obj->getIpi_cEnq()) { 
			$sql .= " AND upper(ipi_cEnq)  like ('%".strtoupper($obj->getIpi_cEnq())."%')";
		} 
		if ($obj->getIpi_vBC()) { 
			$sql .= " AND upper(ipi_vBC)  like ('%".strtoupper($obj->getIpi_vBC())."%')";
		} 
		if ($obj->getIpi_pIPI()) { 
			$sql .= " AND upper(ipi_pIPI)  like ('%".strtoupper($obj->getIpi_pIPI())."%')";
		} 
		if ($obj->getIpi_qUnid()) { 
			$sql .= " AND upper(ipi_qUnid)  like ('%".strtoupper($obj->getIpi_qUnid())."%')";
		} 
		if ($obj->getIpi_vUnid()) { 
			$sql .= " AND upper(ipi_vUnid)  like ('%".strtoupper($obj->getIpi_vUnid())."%')";
		} 
		if ($obj->getIpi_hvIPI()) { 
			$sql .= " AND upper(ipi_hvIPI)  like ('%".strtoupper($obj->getIpi_hvIPI())."%')";
		} 
		if ($obj->getPis_nItem()) { 
			$sql .= " AND upper(pis_nItem)  like ('%".strtoupper($obj->getPis_nItem())."%')";
		} 
		if ($obj->getPis_cst()) { 
			$sql .= " AND upper(pis_cst)  like ('%".strtoupper($obj->getPis_cst())."%')";
		} 
		if ($obj->getPis_vBC()) { 
			$sql .= " AND upper(pis_vBC)  like ('%".strtoupper($obj->getPis_vBC())."%')";
		} 
		if ($obj->getPis_pPIS()) { 
			$sql .= " AND upper(pis_pPIS)  like ('%".strtoupper($obj->getPis_pPIS())."%')";
		} 
		if ($obj->getPis_vPIS()) { 
			$sql .= " AND upper(pis_vPIS)  like ('%".strtoupper($obj->getPis_vPIS())."%')";
		} 
		if ($obj->getPis_qBCProd()) { 
			$sql .= " AND upper(pis_qBCProd)  like ('%".strtoupper($obj->getPis_qBCProd())."%')";
		} 
		if ($obj->getPis_vAliqProd()) { 
			$sql .= " AND upper(pis_vAliqProd)  like ('%".strtoupper($obj->getPis_vAliqProd())."%')";
		} 
		if ($obj->getCofins_nItem()) { 
			$sql .= " AND upper(cofins_nItem)  like ('%".strtoupper($obj->getCofins_nItem())."%')";
		} 
		if ($obj->getCofins_cst()) { 
			$sql .= " AND upper(cofins_cst)  like ('%".strtoupper($obj->getCofins_cst())."%')";
		} 
		if ($obj->getCofins_vBC()) { 
			$sql .= " AND upper(cofins_vBC)  like ('%".strtoupper($obj->getCofins_vBC())."%')";
		} 
		if ($obj->getCofins_pCOFINS()) { 
			$sql .= " AND upper(cofins_pCOFINS)  like ('%".strtoupper($obj->getCofins_pCOFINS())."%')";
		} 
		if ($obj->getCofins_vCOFINS()) { 
			$sql .= " AND upper(cofins_vCOFINS)  like ('%".strtoupper($obj->getCofins_vCOFINS())."%')";
		} 
		if ($obj->getCofins_qBCProd()) { 
			$sql .= " AND upper(cofins_qBCProd)  like ('%".strtoupper($obj->getCofins_qBCProd())."%')";
		} 
		if ($obj->getCofins_vAliqProd()) { 
			$sql .= " AND upper(cofins_vAliqProd)  like ('%".strtoupper($obj->getCofins_vAliqProd())."%')";
		} 
		if ($obj->getDi_nItem()) { 
			$sql .= " AND upper(di_nItem)  like ('%".strtoupper($obj->getDi_nItem())."%')";
		} 
		if ($obj->getDi_nDI()) { 
			$sql .= " AND upper(di_nDI)  like ('%".strtoupper($obj->getDi_nDI())."%')";
		} 
		if ($obj->getDi_dDI()) { 
			$sql .= " AND upper(di_dDI)  like ('%".strtoupper($obj->getDi_dDI())."%')";
		} 
		if ($obj->getDi_xLocDesemb()) { 
			$sql .= " AND upper(di_xLocDesemb)  like ('%".strtoupper($obj->getDi_xLocDesemb())."%')";
		} 
		if ($obj->getDi_UFDesemb()) { 
			$sql .= " AND upper(di_UFDesemb)  like ('%".strtoupper($obj->getDi_UFDesemb())."%')";
		} 
		if ($obj->getDi_dDesemb()) { 
			$sql .= " AND upper(di_dDesemb)  like ('%".strtoupper($obj->getDi_dDesemb())."%')";
		} 
		if ($obj->getDi_tpViaTransp()) { 
			$sql .= " AND upper(di_tpViaTransp)  like ('%".strtoupper($obj->getDi_tpViaTransp())."%')";
		} 
		if ($obj->getDi_vAFRMM()) { 
			$sql .= " AND upper(di_vAFRMM)  like ('%".strtoupper($obj->getDi_vAFRMM())."%')";
		} 
		if ($obj->getDi_tpIntermedio()) { 
			$sql .= " AND upper(di_tpIntermedio)  like ('%".strtoupper($obj->getDi_tpIntermedio())."%')";
		} 
		if ($obj->getDi_CNPJ()) { 
			$sql .= " AND upper(di_CNPJ)  like ('%".strtoupper($obj->getDi_CNPJ())."%')";
		} 
		if ($obj->getDi_UFTerceiro()) { 
			$sql .= " AND upper(di_UFTerceiro)  like ('%".strtoupper($obj->getDi_UFTerceiro())."%')";
		} 
		if ($obj->getDi_cExportador()) { 
			$sql .= " AND upper(di_cExportador)  like ('%".strtoupper($obj->getDi_cExportador())."%')";
		} 
		if ($obj->getAdi_nItem()) { 
			$sql .= " AND upper(adi_nItem)  like ('%".strtoupper($obj->getAdi_nItem())."%')";
		} 
		if ($obj->getAdi_nDI()) { 
			$sql .= " AND upper(adi_nDI)  like ('%".strtoupper($obj->getAdi_nDI())."%')";
		} 
		if ($obj->getAdi_nAdicao()) { 
			$sql .= " AND upper(adi_nAdicao)  like ('%".strtoupper($obj->getAdi_nAdicao())."%')";
		} 
		if ($obj->getAdi_nSeqAdicC()) { 
			$sql .= " AND upper(adi_nSeqAdicC)  like ('%".strtoupper($obj->getAdi_nSeqAdicC())."%')";
		} 
		if ($obj->getAdi_cFabricante()) { 
			$sql .= " AND upper(adi_cFabricante)  like ('%".strtoupper($obj->getAdi_cFabricante())."%')";
		} 
		if ($obj->getAdi_vDescDI()) { 
			$sql .= " AND upper(adi_vDescDI)  like ('%".strtoupper($obj->getAdi_vDescDI())."%')";
		} 
		if ($obj->getAdi_nDraw()) { 
			$sql .= " AND upper(adi_nDraw)  like ('%".strtoupper($obj->getAdi_nDraw())."%')";
		} 
		if ($obj->getImposto_nItem()) { 
			$sql .= " AND upper(imposto_nItem)  like ('%".strtoupper($obj->getImposto_nItem())."%')";
		} 
		if ($obj->getImposto_vlrtrib()) { 
			$sql .= " AND upper(imposto_vlrtrib)  like ('%".strtoupper($obj->getImposto_vlrtrib())."%')";
		} 
		if ($obj->getInfadic_nItem()) { 
			$sql .= " AND upper(infadic_nItem)  like ('%".strtoupper($obj->getInfadic_nItem())."%')";
		} 
		if ($obj->getInfadic_inform()) { 
			$sql .= " AND upper(infadic_inform)  like ('%".strtoupper($obj->getInfadic_inform())."%')";
		} 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function verifica_existe($obj){
		 $sql = 'SELECT count(*) as existe FROM tabpro WHERE 1=1 ';  




		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function selectAll($obj){
		 $sql = 'SELECT * FROM tabpro WHERE 1=1 '; 


		if ($obj->getIdent_chave()) { 
			 $sql .= " AND ident_chave = '".$obj->getIdent_chave()."'";
 				} 
		if ($obj->getNfref_nNF()) { 
			 $sql .= " AND upper(Nfref_nNF)  like ('%".strtoupper($obj->getNfref_nNF())."%')";
 				} 
		if ($obj->getNfref_serie()) { 
			 $sql .= " AND upper(Nfref_serie)  like ('%".strtoupper($obj->getNfref_serie())."%')";
 				} 
		if ($obj->getNfref_tpNF()) { 
			 $sql .= " AND upper(Nfref_tpNF)  like ('%".strtoupper($obj->getNfref_tpNF())."%')";
 				} 
		if ($obj->getProdutos_nItem()) { 
			 $sql .= " AND upper(produtos_nItem)  like ('%".strtoupper($obj->getProdutos_nItem())."%')";
 				} 
		if ($obj->getProdutos_cProd()) { 
			 $sql .= " AND upper(produtos_cProd)  like ('%".strtoupper($obj->getProdutos_cProd())."%')";
 				} 
		if ($obj->getProdutos_cEAN()) { 
			 $sql .= " AND upper(produtos_cEAN)  like ('%".strtoupper($obj->getProdutos_cEAN())."%')";
 				} 
		if ($obj->getProdutos_xProd()) { 
			 $sql .= " AND upper(produtos_xProd)  like ('%".strtoupper($obj->getProdutos_xProd())."%')";
 				} 
		if ($obj->getProdutos_NCM()) { 
			 $sql .= " AND upper(produtos_NCM)  like ('%".strtoupper($obj->getProdutos_NCM())."%')";
 				} 
		if ($obj->getProdutos_NVE()) { 
			 $sql .= " AND upper(produtos_NVE)  like ('%".strtoupper($obj->getProdutos_NVE())."%')";
 				} 
		if ($obj->getProdutos_EXTIPI()) { 
			 $sql .= " AND upper(produtos_EXTIPI)  like ('%".strtoupper($obj->getProdutos_EXTIPI())."%')";
 				} 
		if ($obj->getProdutos_CFOP()) { 
			 $sql .= " AND upper(produtos_CFOP)  like ('%".strtoupper($obj->getProdutos_CFOP())."%')";
 				} 
		if ($obj->getProdutos_uCom()) { 
			 $sql .= " AND upper(produtos_uCom)  like ('%".strtoupper($obj->getProdutos_uCom())."%')";
 				} 
		if ($obj->getProdutos_qCom()) { 
			 $sql .= " AND upper(produtos_qCom)  like ('%".strtoupper($obj->getProdutos_qCom())."%')";
 				} 
		if ($obj->getProdutos_vUnCom()) { 
			 $sql .= " AND upper(produtos_vUnCom)  like ('%".strtoupper($obj->getProdutos_vUnCom())."%')";
 				} 
		if ($obj->getProdutos_vProd()) { 
			 $sql .= " AND upper(produtos_vProd)  like ('%".strtoupper($obj->getProdutos_vProd())."%')";
 				} 
		if ($obj->getProdutos_cEANTrib()) { 
			 $sql .= " AND upper(produtos_cEANTrib)  like ('%".strtoupper($obj->getProdutos_cEANTrib())."%')";
 				} 
		if ($obj->getProdutos_uTrib()) { 
			 $sql .= " AND upper(produtos_uTrib)  like ('%".strtoupper($obj->getProdutos_uTrib())."%')";
 				} 
		if ($obj->getProdutos_qTrib()) { 
			 $sql .= " AND upper(produtos_qTrib)  like ('%".strtoupper($obj->getProdutos_qTrib())."%')";
 				} 
		if ($obj->getProdutos_vUnTrib()) { 
			 $sql .= " AND upper(produtos_vUnTrib)  like ('%".strtoupper($obj->getProdutos_vUnTrib())."%')";
 				} 
		if ($obj->getProdutos_vFrete()) { 
			 $sql .= " AND upper(produtos_vFrete)  like ('%".strtoupper($obj->getProdutos_vFrete())."%')";
 				} 
		if ($obj->getProdutos_vSeg()) { 
			 $sql .= " AND upper(produtos_vSeg)  like ('%".strtoupper($obj->getProdutos_vSeg())."%')";
 				} 
		if ($obj->getProdutos_vDesc()) { 
			 $sql .= " AND upper(produtos_vDesc)  like ('%".strtoupper($obj->getProdutos_vDesc())."%')";
 				} 
		if ($obj->getProdutos_vOutro()) { 
			 $sql .= " AND upper(produtos_vOutro)  like ('%".strtoupper($obj->getProdutos_vOutro())."%')";
 				} 
		if ($obj->getProdutos_indTot()) { 
			 $sql .= " AND upper(produtos_indTot)  like ('%".strtoupper($obj->getProdutos_indTot())."%')";
 				} 
		if ($obj->getProdutos_xPed()) { 
			 $sql .= " AND upper(produtos_xPed)  like ('%".strtoupper($obj->getProdutos_xPed())."%')";
 				} 
		if ($obj->getProdutos_nItemPed()) { 
			 $sql .= " AND upper(produtos_nItemPed)  like ('%".strtoupper($obj->getProdutos_nItemPed())."%')";
 				} 
		if ($obj->getProdutos_nFCI()) { 
			 $sql .= " AND upper(produtos_nFCI)  like ('%".strtoupper($obj->getProdutos_nFCI())."%')";
 				} 
		if ($obj->getIcms_nItem()) { 
			 $sql .= " AND upper(icms_nItem)  like ('%".strtoupper($obj->getIcms_nItem())."%')";
 				} 
		if ($obj->getIcms_orig()) { 
			 $sql .= " AND upper(icms_orig)  like ('%".strtoupper($obj->getIcms_orig())."%')";
 				} 
		if ($obj->getIcms_cst()) { 
			 $sql .= " AND upper(icms_cst)  like ('%".strtoupper($obj->getIcms_cst())."%')";
 				} 
		if ($obj->getIcms_modBC()) { 
			 $sql .= " AND upper(icms_modBC)  like ('%".strtoupper($obj->getIcms_modBC())."%')";
 				} 
		if ($obj->getIcms_pRedBC()) { 
			 $sql .= " AND upper(icms_pRedBC)  like ('%".strtoupper($obj->getIcms_pRedBC())."%')";
 				} 
		if ($obj->getIcms_vBC()) { 
			 $sql .= " AND upper(icms_vBC)  like ('%".strtoupper($obj->getIcms_vBC())."%')";
 				} 
		if ($obj->getIcms_pICMS()) { 
			 $sql .= " AND upper(icms_pICMS)  like ('%".strtoupper($obj->getIcms_pICMS())."%')";
 				} 
		if ($obj->getIcms_vICMS()) { 
			 $sql .= " AND upper(icms_vICMS)  like ('%".strtoupper($obj->getIcms_vICMS())."%')";
 				} 
		if ($obj->getIcms_vICMSDeson()) { 
			 $sql .= " AND upper(icms_vICMSDeson)  like ('%".strtoupper($obj->getIcms_vICMSDeson())."%')";
 				} 
		if ($obj->getIcms_motDesICMS()) { 
			 $sql .= " AND upper(icms_motDesICMS)  like ('%".strtoupper($obj->getIcms_motDesICMS())."%')";
 				} 
		if ($obj->getIcms_modBCST()) { 
			 $sql .= " AND upper(icms_modBCST)  like ('%".strtoupper($obj->getIcms_modBCST())."%')";
 				} 
		if ($obj->getIcms_pMVAST()) { 
			 $sql .= " AND upper(icms_pMVAST)  like ('%".strtoupper($obj->getIcms_pMVAST())."%')";
 				} 
		if ($obj->getIcms_pRedBCST()) { 
			 $sql .= " AND upper(icms_pRedBCST)  like ('%".strtoupper($obj->getIcms_pRedBCST())."%')";
 				} 
		if ($obj->getIcms_vBCST()) { 
			 $sql .= " AND upper(icms_vBCST)  like ('%".strtoupper($obj->getIcms_vBCST())."%')";
 				} 
		if ($obj->getIcms_pICMSST()) { 
			 $sql .= " AND upper(icms_pICMSST)  like ('%".strtoupper($obj->getIcms_pICMSST())."%')";
 				} 
		if ($obj->getIcms_vICMSST()) { 
			 $sql .= " AND upper(icms_vICMSST)  like ('%".strtoupper($obj->getIcms_vICMSST())."%')";
 				} 
		if ($obj->getIcms_pDif()) { 
			 $sql .= " AND upper(icms_pDif)  like ('%".strtoupper($obj->getIcms_pDif())."%')";
 				} 
		if ($obj->getIcms_vICMSDif()) { 
			 $sql .= " AND upper(icms_vICMSDif)  like ('%".strtoupper($obj->getIcms_vICMSDif())."%')";
 				} 
		if ($obj->getIcms_vICMSOp()) { 
			 $sql .= " AND upper(icms_vICMSOp)  like ('%".strtoupper($obj->getIcms_vICMSOp())."%')";
 				} 
		if ($obj->getIcms_vBCSTRet()) { 
			 $sql .= " AND upper(icms_vBCSTRet)  like ('%".strtoupper($obj->getIcms_vBCSTRet())."%')";
 				} 
		if ($obj->getIcms_vICMSSTRet()) { 
			 $sql .= " AND upper(icms_vICMSSTRet)  like ('%".strtoupper($obj->getIcms_vICMSSTRet())."%')";
 				} 
		if ($obj->getIpi_nItem()) { 
			 $sql .= " AND upper(ipi_nItem)  like ('%".strtoupper($obj->getIpi_nItem())."%')";
 				} 
		if ($obj->getIpi_cst()) { 
			 $sql .= " AND upper(ipi_cst)  like ('%".strtoupper($obj->getIpi_cst())."%')";
 				} 
		if ($obj->getIpi_clEnq()) { 
			 $sql .= " AND upper(ipi_clEnq)  like ('%".strtoupper($obj->getIpi_clEnq())."%')";
 				} 
		if ($obj->getIpi_cnpjProd()) { 
			 $sql .= " AND upper(ipi_cnpjProd)  like ('%".strtoupper($obj->getIpi_cnpjProd())."%')";
 				} 
		if ($obj->getIpi_cSelo()) { 
			 $sql .= " AND upper(ipi_cSelo)  like ('%".strtoupper($obj->getIpi_cSelo())."%')";
 				} 
		if ($obj->getIpi_qSelo()) { 
			 $sql .= " AND upper(ipi_qSelo)  like ('%".strtoupper($obj->getIpi_qSelo())."%')";
 				} 
		if ($obj->getIpi_cEnq()) { 
			 $sql .= " AND upper(ipi_cEnq)  like ('%".strtoupper($obj->getIpi_cEnq())."%')";
 				} 
		if ($obj->getIpi_vBC()) { 
			 $sql .= " AND upper(ipi_vBC)  like ('%".strtoupper($obj->getIpi_vBC())."%')";
 				} 
		if ($obj->getIpi_pIPI()) { 
			 $sql .= " AND upper(ipi_pIPI)  like ('%".strtoupper($obj->getIpi_pIPI())."%')";
 				} 
		if ($obj->getIpi_qUnid()) { 
			 $sql .= " AND upper(ipi_qUnid)  like ('%".strtoupper($obj->getIpi_qUnid())."%')";
 				} 
		if ($obj->getIpi_vUnid()) { 
			 $sql .= " AND upper(ipi_vUnid)  like ('%".strtoupper($obj->getIpi_vUnid())."%')";
 				} 
		if ($obj->getIpi_hvIPI()) { 
			 $sql .= " AND upper(ipi_hvIPI)  like ('%".strtoupper($obj->getIpi_hvIPI())."%')";
 				} 
		if ($obj->getPis_nItem()) { 
			 $sql .= " AND upper(pis_nItem)  like ('%".strtoupper($obj->getPis_nItem())."%')";
 				} 
		if ($obj->getPis_cst()) { 
			 $sql .= " AND upper(pis_cst)  like ('%".strtoupper($obj->getPis_cst())."%')";
 				} 
		if ($obj->getPis_vBC()) { 
			 $sql .= " AND upper(pis_vBC)  like ('%".strtoupper($obj->getPis_vBC())."%')";
 				} 
		if ($obj->getPis_pPIS()) { 
			 $sql .= " AND upper(pis_pPIS)  like ('%".strtoupper($obj->getPis_pPIS())."%')";
 				} 
		if ($obj->getPis_vPIS()) { 
			 $sql .= " AND upper(pis_vPIS)  like ('%".strtoupper($obj->getPis_vPIS())."%')";
 				} 
		if ($obj->getPis_qBCProd()) { 
			 $sql .= " AND upper(pis_qBCProd)  like ('%".strtoupper($obj->getPis_qBCProd())."%')";
 				} 
		if ($obj->getPis_vAliqProd()) { 
			 $sql .= " AND upper(pis_vAliqProd)  like ('%".strtoupper($obj->getPis_vAliqProd())."%')";
 				} 
		if ($obj->getCofins_nItem()) { 
			 $sql .= " AND upper(cofins_nItem)  like ('%".strtoupper($obj->getCofins_nItem())."%')";
 				} 
		if ($obj->getCofins_cst()) { 
			 $sql .= " AND upper(cofins_cst)  like ('%".strtoupper($obj->getCofins_cst())."%')";
 				} 
		if ($obj->getCofins_vBC()) { 
			 $sql .= " AND upper(cofins_vBC)  like ('%".strtoupper($obj->getCofins_vBC())."%')";
 				} 
		if ($obj->getCofins_pCOFINS()) { 
			 $sql .= " AND upper(cofins_pCOFINS)  like ('%".strtoupper($obj->getCofins_pCOFINS())."%')";
 				} 
		if ($obj->getCofins_vCOFINS()) { 
			 $sql .= " AND upper(cofins_vCOFINS)  like ('%".strtoupper($obj->getCofins_vCOFINS())."%')";
 				} 
		if ($obj->getCofins_qBCProd()) { 
			 $sql .= " AND upper(cofins_qBCProd)  like ('%".strtoupper($obj->getCofins_qBCProd())."%')";
 				} 
		if ($obj->getCofins_vAliqProd()) { 
			 $sql .= " AND upper(cofins_vAliqProd)  like ('%".strtoupper($obj->getCofins_vAliqProd())."%')";
 				} 
		if ($obj->getDi_nItem()) { 
			 $sql .= " AND upper(di_nItem)  like ('%".strtoupper($obj->getDi_nItem())."%')";
 				} 
		if ($obj->getDi_nDI()) { 
			 $sql .= " AND upper(di_nDI)  like ('%".strtoupper($obj->getDi_nDI())."%')";
 				} 
		if ($obj->getDi_dDI()) { 
			 $sql .= " AND upper(di_dDI)  like ('%".strtoupper($obj->getDi_dDI())."%')";
 				} 
		if ($obj->getDi_xLocDesemb()) { 
			 $sql .= " AND upper(di_xLocDesemb)  like ('%".strtoupper($obj->getDi_xLocDesemb())."%')";
 				} 
		if ($obj->getDi_UFDesemb()) { 
			 $sql .= " AND upper(di_UFDesemb)  like ('%".strtoupper($obj->getDi_UFDesemb())."%')";
 				} 
		if ($obj->getDi_dDesemb()) { 
			 $sql .= " AND upper(di_dDesemb)  like ('%".strtoupper($obj->getDi_dDesemb())."%')";
 				} 
		if ($obj->getDi_tpViaTransp()) { 
			 $sql .= " AND upper(di_tpViaTransp)  like ('%".strtoupper($obj->getDi_tpViaTransp())."%')";
 				} 
		if ($obj->getDi_vAFRMM()) { 
			 $sql .= " AND upper(di_vAFRMM)  like ('%".strtoupper($obj->getDi_vAFRMM())."%')";
 				} 
		if ($obj->getDi_tpIntermedio()) { 
			 $sql .= " AND upper(di_tpIntermedio)  like ('%".strtoupper($obj->getDi_tpIntermedio())."%')";
 				} 
		if ($obj->getDi_CNPJ()) { 
			 $sql .= " AND upper(di_CNPJ)  like ('%".strtoupper($obj->getDi_CNPJ())."%')";
 				} 
		if ($obj->getDi_UFTerceiro()) { 
			 $sql .= " AND upper(di_UFTerceiro)  like ('%".strtoupper($obj->getDi_UFTerceiro())."%')";
 				} 
		if ($obj->getDi_cExportador()) { 
			 $sql .= " AND upper(di_cExportador)  like ('%".strtoupper($obj->getDi_cExportador())."%')";
 				} 
		if ($obj->getAdi_nItem()) { 
			 $sql .= " AND upper(adi_nItem)  like ('%".strtoupper($obj->getAdi_nItem())."%')";
 				} 
		if ($obj->getAdi_nDI()) { 
			 $sql .= " AND upper(adi_nDI)  like ('%".strtoupper($obj->getAdi_nDI())."%')";
 				} 
		if ($obj->getAdi_nAdicao()) { 
			 $sql .= " AND upper(adi_nAdicao)  like ('%".strtoupper($obj->getAdi_nAdicao())."%')";
 				} 
		if ($obj->getAdi_nSeqAdicC()) { 
			 $sql .= " AND upper(adi_nSeqAdicC)  like ('%".strtoupper($obj->getAdi_nSeqAdicC())."%')";
 				} 
		if ($obj->getAdi_cFabricante()) { 
			 $sql .= " AND upper(adi_cFabricante)  like ('%".strtoupper($obj->getAdi_cFabricante())."%')";
 				} 
		if ($obj->getAdi_vDescDI()) { 
			 $sql .= " AND upper(adi_vDescDI)  like ('%".strtoupper($obj->getAdi_vDescDI())."%')";
 				} 
		if ($obj->getAdi_nDraw()) { 
			 $sql .= " AND upper(adi_nDraw)  like ('%".strtoupper($obj->getAdi_nDraw())."%')";
 				} 
		if ($obj->getImposto_nItem()) { 
			 $sql .= " AND upper(imposto_nItem)  like ('%".strtoupper($obj->getImposto_nItem())."%')";
 				} 
		if ($obj->getImposto_vlrtrib()) { 
			 $sql .= " AND upper(imposto_vlrtrib)  like ('%".strtoupper($obj->getImposto_vlrtrib())."%')";
 				} 
		if ($obj->getInfadic_nItem()) { 
			 $sql .= " AND upper(infadic_nItem)  like ('%".strtoupper($obj->getInfadic_nItem())."%')";
 				} 
		if ($obj->getInfadic_inform()) { 
			 $sql .= " AND upper(infadic_inform)  like ('%".strtoupper($obj->getInfadic_inform())."%')";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Tabpro(); 
			 $obj->setIdent_chave(mysql_result($rs, $i, 'ident_chave')); 
			 $obj->setNfref_nNF(mysql_result($rs, $i, 'Nfref_nNF')); 
			 $obj->setNfref_serie(mysql_result($rs, $i, 'Nfref_serie')); 
			 $obj->setNfref_tpNF(mysql_result($rs, $i, 'Nfref_tpNF')); 
			 $obj->setProdutos_nItem(mysql_result($rs, $i, 'produtos_nItem')); 
			 $obj->setProdutos_cProd(mysql_result($rs, $i, 'produtos_cProd')); 
			 $obj->setProdutos_cEAN(mysql_result($rs, $i, 'produtos_cEAN')); 
			 $obj->setProdutos_xProd(mysql_result($rs, $i, 'produtos_xProd')); 
			 $obj->setProdutos_NCM(mysql_result($rs, $i, 'produtos_NCM')); 
			 $obj->setProdutos_NVE(mysql_result($rs, $i, 'produtos_NVE')); 
			 $obj->setProdutos_EXTIPI(mysql_result($rs, $i, 'produtos_EXTIPI')); 
			 $obj->setProdutos_CFOP(mysql_result($rs, $i, 'produtos_CFOP')); 
			 $obj->setProdutos_uCom(mysql_result($rs, $i, 'produtos_uCom')); 
			 $obj->setProdutos_qCom(mysql_result($rs, $i, 'produtos_qCom')); 
			 $obj->setProdutos_vUnCom(mysql_result($rs, $i, 'produtos_vUnCom')); 
			 $obj->setProdutos_vProd(mysql_result($rs, $i, 'produtos_vProd')); 
			 $obj->setProdutos_cEANTrib(mysql_result($rs, $i, 'produtos_cEANTrib')); 
			 $obj->setProdutos_uTrib(mysql_result($rs, $i, 'produtos_uTrib')); 
			 $obj->setProdutos_qTrib(mysql_result($rs, $i, 'produtos_qTrib')); 
			 $obj->setProdutos_vUnTrib(mysql_result($rs, $i, 'produtos_vUnTrib')); 
			 $obj->setProdutos_vFrete(mysql_result($rs, $i, 'produtos_vFrete')); 
			 $obj->setProdutos_vSeg(mysql_result($rs, $i, 'produtos_vSeg')); 
			 $obj->setProdutos_vDesc(mysql_result($rs, $i, 'produtos_vDesc')); 
			 $obj->setProdutos_vOutro(mysql_result($rs, $i, 'produtos_vOutro')); 
			 $obj->setProdutos_indTot(mysql_result($rs, $i, 'produtos_indTot')); 
			 $obj->setProdutos_xPed(mysql_result($rs, $i, 'produtos_xPed')); 
			 $obj->setProdutos_nItemPed(mysql_result($rs, $i, 'produtos_nItemPed')); 
			 $obj->setProdutos_nFCI(mysql_result($rs, $i, 'produtos_nFCI')); 
			 $obj->setIcms_nItem(mysql_result($rs, $i, 'icms_nItem')); 
			 $obj->setIcms_orig(mysql_result($rs, $i, 'icms_orig')); 
			 $obj->setIcms_cst(mysql_result($rs, $i, 'icms_cst')); 
			 $obj->setIcms_modBC(mysql_result($rs, $i, 'icms_modBC')); 
			 $obj->setIcms_pRedBC(mysql_result($rs, $i, 'icms_pRedBC')); 
			 $obj->setIcms_vBC(mysql_result($rs, $i, 'icms_vBC')); 
			 $obj->setIcms_pICMS(mysql_result($rs, $i, 'icms_pICMS')); 
			 $obj->setIcms_vICMS(mysql_result($rs, $i, 'icms_vICMS')); 
			 $obj->setIcms_vICMSDeson(mysql_result($rs, $i, 'icms_vICMSDeson')); 
			 $obj->setIcms_motDesICMS(mysql_result($rs, $i, 'icms_motDesICMS')); 
			 $obj->setIcms_modBCST(mysql_result($rs, $i, 'icms_modBCST')); 
			 $obj->setIcms_pMVAST(mysql_result($rs, $i, 'icms_pMVAST')); 
			 $obj->setIcms_pRedBCST(mysql_result($rs, $i, 'icms_pRedBCST')); 
			 $obj->setIcms_vBCST(mysql_result($rs, $i, 'icms_vBCST')); 
			 $obj->setIcms_pICMSST(mysql_result($rs, $i, 'icms_pICMSST')); 
			 $obj->setIcms_vICMSST(mysql_result($rs, $i, 'icms_vICMSST')); 
			 $obj->setIcms_pDif(mysql_result($rs, $i, 'icms_pDif')); 
			 $obj->setIcms_vICMSDif(mysql_result($rs, $i, 'icms_vICMSDif')); 
			 $obj->setIcms_vICMSOp(mysql_result($rs, $i, 'icms_vICMSOp')); 
			 $obj->setIcms_vBCSTRet(mysql_result($rs, $i, 'icms_vBCSTRet')); 
			 $obj->setIcms_vICMSSTRet(mysql_result($rs, $i, 'icms_vICMSSTRet')); 
			 $obj->setIpi_nItem(mysql_result($rs, $i, 'ipi_nItem')); 
			 $obj->setIpi_cst(mysql_result($rs, $i, 'ipi_cst')); 
			 $obj->setIpi_clEnq(mysql_result($rs, $i, 'ipi_clEnq')); 
			 $obj->setIpi_cnpjProd(mysql_result($rs, $i, 'ipi_cnpjProd')); 
			 $obj->setIpi_cSelo(mysql_result($rs, $i, 'ipi_cSelo')); 
			 $obj->setIpi_qSelo(mysql_result($rs, $i, 'ipi_qSelo')); 
			 $obj->setIpi_cEnq(mysql_result($rs, $i, 'ipi_cEnq')); 
			 $obj->setIpi_vBC(mysql_result($rs, $i, 'ipi_vBC')); 
			 $obj->setIpi_pIPI(mysql_result($rs, $i, 'ipi_pIPI')); 
			 $obj->setIpi_qUnid(mysql_result($rs, $i, 'ipi_qUnid')); 
			 $obj->setIpi_vUnid(mysql_result($rs, $i, 'ipi_vUnid')); 
			 $obj->setIpi_hvIPI(mysql_result($rs, $i, 'ipi_hvIPI')); 
			 $obj->setPis_nItem(mysql_result($rs, $i, 'pis_nItem')); 
			 $obj->setPis_cst(mysql_result($rs, $i, 'pis_cst')); 
			 $obj->setPis_vBC(mysql_result($rs, $i, 'pis_vBC')); 
			 $obj->setPis_pPIS(mysql_result($rs, $i, 'pis_pPIS')); 
			 $obj->setPis_vPIS(mysql_result($rs, $i, 'pis_vPIS')); 
			 $obj->setPis_qBCProd(mysql_result($rs, $i, 'pis_qBCProd')); 
			 $obj->setPis_vAliqProd(mysql_result($rs, $i, 'pis_vAliqProd')); 
			 $obj->setCofins_nItem(mysql_result($rs, $i, 'cofins_nItem')); 
			 $obj->setCofins_cst(mysql_result($rs, $i, 'cofins_cst')); 
			 $obj->setCofins_vBC(mysql_result($rs, $i, 'cofins_vBC')); 
			 $obj->setCofins_pCOFINS(mysql_result($rs, $i, 'cofins_pCOFINS')); 
			 $obj->setCofins_vCOFINS(mysql_result($rs, $i, 'cofins_vCOFINS')); 
			 $obj->setCofins_qBCProd(mysql_result($rs, $i, 'cofins_qBCProd')); 
			 $obj->setCofins_vAliqProd(mysql_result($rs, $i, 'cofins_vAliqProd')); 
			 $obj->setDi_nItem(mysql_result($rs, $i, 'di_nItem')); 
			 $obj->setDi_nDI(mysql_result($rs, $i, 'di_nDI')); 
			 $obj->setDi_dDI(mysql_result($rs, $i, 'di_dDI')); 
			 $obj->setDi_xLocDesemb(mysql_result($rs, $i, 'di_xLocDesemb')); 
			 $obj->setDi_UFDesemb(mysql_result($rs, $i, 'di_UFDesemb')); 
			 $obj->setDi_dDesemb(mysql_result($rs, $i, 'di_dDesemb')); 
			 $obj->setDi_tpViaTransp(mysql_result($rs, $i, 'di_tpViaTransp')); 
			 $obj->setDi_vAFRMM(mysql_result($rs, $i, 'di_vAFRMM')); 
			 $obj->setDi_tpIntermedio(mysql_result($rs, $i, 'di_tpIntermedio')); 
			 $obj->setDi_CNPJ(mysql_result($rs, $i, 'di_CNPJ')); 
			 $obj->setDi_UFTerceiro(mysql_result($rs, $i, 'di_UFTerceiro')); 
			 $obj->setDi_cExportador(mysql_result($rs, $i, 'di_cExportador')); 
			 $obj->setAdi_nItem(mysql_result($rs, $i, 'adi_nItem')); 
			 $obj->setAdi_nDI(mysql_result($rs, $i, 'adi_nDI')); 
			 $obj->setAdi_nAdicao(mysql_result($rs, $i, 'adi_nAdicao')); 
			 $obj->setAdi_nSeqAdicC(mysql_result($rs, $i, 'adi_nSeqAdicC')); 
			 $obj->setAdi_cFabricante(mysql_result($rs, $i, 'adi_cFabricante')); 
			 $obj->setAdi_vDescDI(mysql_result($rs, $i, 'adi_vDescDI')); 
			 $obj->setAdi_nDraw(mysql_result($rs, $i, 'adi_nDraw')); 
			 $obj->setImposto_nItem(mysql_result($rs, $i, 'imposto_nItem')); 
			 $obj->setImposto_vlrtrib(mysql_result($rs, $i, 'imposto_vlrtrib')); 
			 $obj->setInfadic_nItem(mysql_result($rs, $i, 'infadic_nItem')); 
			 $obj->setInfadic_inform(mysql_result($rs, $i, 'infadic_inform')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
} 
