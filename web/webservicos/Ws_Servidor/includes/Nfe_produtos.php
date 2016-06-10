<?php 
 class Nfe_produtos{ 

	 private $seq; 
	 private $data_envio; 
	 private $mes_ano; 
	 private $seq_nfe; 
	 private $ident_chave; 
	 private $prod_tipo; 
	 private $prod_nItem; 
	 private $prod_cProd; 
	 private $prod_cEAN; 
	 private $prod_xProd; 
	 private $prod_NCM; 
	 private $prod_NVE; 
	 private $prod_EXTIPI; 
	 private $prod_CFOP; 
	 private $prod_uCom; 
	 private $prod_qCom; 
	 private $prod_vUnCom; 
	 private $prod_vProd; 
	 private $prod_cEANTrib; 
	 private $prod_uTrib; 
	 private $prod_qTrib; 
	 private $prod_vUnTrib; 
	 private $prod_vFrete; 
	 private $prod_vSeg; 
	 private $prod_vDesc; 
	 private $prod_vOutro; 
	 private $prod_indTot; 
	 private $prod_xPed; 
	 private $prod_nItemPed; 
	 private $prod_nFCI; 
	 private $veic_nItem; 
	 private $veic_tpOp; 
	 private $veic_chassi; 
	 private $veic_cCor; 
	 private $veic_xCor; 
	 private $veic_pot; 
	 private $veic_cilin; 
	 private $veic_pesoL; 
	 private $veic_pesoB; 
	 private $veic_nSerie; 
	 private $veic_tpComb; 
	 private $veic_nMotor; 
	 private $veic_cmt; 
	 private $veic_dist; 
	 private $veic_anoMod; 
	 private $veic_anoFab; 
	 private $veic_tpPint; 
	 private $veic_tpVeic; 
	 private $veic_espVeic; 
	 private $veic_VIN; 
	 private $veic_condVeic; 
	 private $veic_cMod; 
	 private $veic_cCorDENATRAN; 
	 private $veic_lota; 
	 private $veic_tpRest; 
	 private $med_nItem; 
	 private $med_nLote; 
	 private $med_qLote; 
	 private $med_dFab; 
	 private $med_dVal; 
	 private $med_vPMC; 
	 private $arma_nItem; 
	 private $arma_tpArma; 
	 private $arma_nSerie; 
	 private $arma_nCano; 
	 private $arma_descr; 
	 private $comb_nItem; 
	 private $comb_cProdANP; 
	 private $comb_pMixGN; 
	 private $comb_codif; 
	 private $comb_qTemp; 
	 private $comb_ufCons; 
	 private $comb_qBCProd; 
	 private $comb_vAliqProd; 
	 private $comb_vCIDE; 
	 private $icms_tipo; 
	 private $icms_nItem; 
	 private $icms_orig; 
	 private $icms_cst; 
	 private $icms_modBC; 
	 private $icms_pRedBC; 
	 private $icms_vBC; 
	 private $icms_pICMS; 
	 private $icms_vICMS; 
	 private $icms_vICMSDeson; 
	 private $icms_motDesICMS; 
	 private $icms_modBCST; 
	 private $icms_pMVAST; 
	 private $icms_pRedBCST; 
	 private $icms_vBCST; 
	 private $icms_pICMSST; 
	 private $icms_vICMSST; 
	 private $icms_pDif; 
	 private $icms_vICMSDif; 
	 private $icms_vICMSOp; 
	 private $icms_vBCSTRet; 
	 private $icms_vICMSSTRet; 
	 private $icmssn_nItem; 
	 private $icmssn_orig; 
	 private $icmssn_csosn; 
	 private $icmssn_modBC; 
	 private $icmssn_vBC; 
	 private $icmssn_pRedBC; 
	 private $icmssn_pICMS; 
	 private $icmssn_vICMS; 
	 private $icmssn_pCredSN; 
	 private $icmssn_vCredICMSSN; 
	 private $icmssn_modBCST; 
	 private $icmssn_pMVAST; 
	 private $icmssn_pRedBCST; 
	 private $icmssn_vBCST; 
	 private $icmssn_pICMSST; 
	 private $icmssn_vICMSST; 
	 private $icmssn_vBCSTRet; 
	 private $icmssn_vICMSSTRet; 
	 private $icmsst_nItem; 
	 private $icmsst_modBCST; 
	 private $icmsst_pMVAST; 
	 private $icmsst_pRedBCST; 
	 private $icmsst_vBCST; 
	 private $icmsst_pICMSST; 
	 private $icmsst_vICMSST; 
	 private $icmsst_pBOCp; 
	 private $icmsst_UFST; 
	 private $ipi_tipo; 
	 private $ipi_nItem; 
	 private $ipi_cst; 
	 private $ipi_clEnq; 
	 private $ipi_cnpjProd; 
	 private $ipi_cSelo; 
	 private $ipi_qSelo; 
	 private $ipi_cEnq; 
	 private $ipi_vBC; 
	 private $ipi_pIPI; 
	 private $ipi_qUnid; 
	 private $ipi_vUnid; 
	 private $ipi_hvIPI; 
	 private $pis_tipo; 
	 private $pis_nItem; 
	 private $pis_cst; 
	 private $pis_vBC; 
	 private $pis_pPIS; 
	 private $pis_vPIS; 
	 private $pis_qBCProd; 
	 private $pis_vAliqProd; 
	 private $pisst_nItem; 
	 private $pisst_vBC; 
	 private $pisst_pPIS; 
	 private $pisst_qBCProd; 
	 private $pisst_vAliqProd; 
	 private $pisst_vPIS; 
	 private $cofins_tipo; 
	 private $cofins_nItem; 
	 private $cofins_cst; 
	 private $cofins_vBC; 
	 private $cofins_pCOFINS; 
	 private $cofins_vCOFINS; 
	 private $cofins_qBCProd; 
	 private $cofins_vAliqProd; 
	 private $cofinsst_nItem; 
	 private $cofinsst_vBC; 
	 private $cofinsst_pCOFINS; 
	 private $cofinsst_qBCProd; 
	 private $cofinsst_vAliqProd; 
	 private $cofinsst_vCOFINS; 
	 private $di_nItem; 
	 private $di_nDI; 
	 private $di_dDI; 
	 private $di_xLocDesemb; 
	 private $di_UFDesemb; 
	 private $di_dDesemb; 
	 private $di_tpViaTransp; 
	 private $di_vAFRMM; 
	 private $di_tpIntermedio; 
	 private $di_CNPJ; 
	 private $di_UFTerceiro; 
	 private $di_cExportador; 
	 private $adi_nItem; 
	 private $adi_nDI; 
	 private $adi_nAdicao; 
	 private $adi_nSeqAdicC; 
	 private $adi_cFabricante; 
	 private $adi_vDescDI; 
	 private $adi_nDraw; 
	 private $imposto_nItem; 
	 private $imposto_vlrtrib; 
	 private $nve_nItem; 
	 private $nve_texto; 
	 private $aII_nItem; 
	 private $aII_vBC; 
	 private $aII_vDespAdu; 
	 private $aII_vII; 
	 private $aII_vIOF; 
	 private $infad_nItem; 
	 private $infad_inform; 
	 private $infadic_nItem; 
	 private $infadic_pDevol; 
	 private $infadic_vIPIDevol; 

	 function __construct(){ 
		 $this->seq =  '' ; 
		 $this->data_envio =  '' ; 
		 $this->mes_ano =  '' ; 
		 $this->seq_nfe =  '' ; 
		 $this->ident_chave =  '' ; 
		 $this->prod_tipo =  '' ; 
		 $this->prod_nItem =  '' ; 
		 $this->prod_cProd =  '' ; 
		 $this->prod_cEAN =  '' ; 
		 $this->prod_xProd =  '' ; 
		 $this->prod_NCM =  '' ; 
		 $this->prod_NVE =  '' ; 
		 $this->prod_EXTIPI =  '' ; 
		 $this->prod_CFOP =  '' ; 
		 $this->prod_uCom =  '' ; 
		 $this->prod_qCom =  '' ; 
		 $this->prod_vUnCom =  '' ; 
		 $this->prod_vProd =  '' ; 
		 $this->prod_cEANTrib =  '' ; 
		 $this->prod_uTrib =  '' ; 
		 $this->prod_qTrib =  '' ; 
		 $this->prod_vUnTrib =  '' ; 
		 $this->prod_vFrete =  '' ; 
		 $this->prod_vSeg =  '' ; 
		 $this->prod_vDesc =  '' ; 
		 $this->prod_vOutro =  '' ; 
		 $this->prod_indTot =  '' ; 
		 $this->prod_xPed =  '' ; 
		 $this->prod_nItemPed =  '' ; 
		 $this->prod_nFCI =  '' ; 
		 $this->veic_nItem =  '' ; 
		 $this->veic_tpOp =  '' ; 
		 $this->veic_chassi =  '' ; 
		 $this->veic_cCor =  '' ; 
		 $this->veic_xCor =  '' ; 
		 $this->veic_pot =  '' ; 
		 $this->veic_cilin =  '' ; 
		 $this->veic_pesoL =  '' ; 
		 $this->veic_pesoB =  '' ; 
		 $this->veic_nSerie =  '' ; 
		 $this->veic_tpComb =  '' ; 
		 $this->veic_nMotor =  '' ; 
		 $this->veic_cmt =  '' ; 
		 $this->veic_dist =  '' ; 
		 $this->veic_anoMod =  '' ; 
		 $this->veic_anoFab =  '' ; 
		 $this->veic_tpPint =  '' ; 
		 $this->veic_tpVeic =  '' ; 
		 $this->veic_espVeic =  '' ; 
		 $this->veic_VIN =  '' ; 
		 $this->veic_condVeic =  '' ; 
		 $this->veic_cMod =  '' ; 
		 $this->veic_cCorDENATRAN =  '' ; 
		 $this->veic_lota =  '' ; 
		 $this->veic_tpRest =  '' ; 
		 $this->med_nItem =  '' ; 
		 $this->med_nLote =  '' ; 
		 $this->med_qLote =  '' ; 
		 $this->med_dFab =  '' ; 
		 $this->med_dVal =  '' ; 
		 $this->med_vPMC =  '' ; 
		 $this->arma_nItem =  '' ; 
		 $this->arma_tpArma =  '' ; 
		 $this->arma_nSerie =  '' ; 
		 $this->arma_nCano =  '' ; 
		 $this->arma_descr =  '' ; 
		 $this->comb_nItem =  '' ; 
		 $this->comb_cProdANP =  '' ; 
		 $this->comb_pMixGN =  '' ; 
		 $this->comb_codif =  '' ; 
		 $this->comb_qTemp =  '' ; 
		 $this->comb_ufCons =  '' ; 
		 $this->comb_qBCProd =  '' ; 
		 $this->comb_vAliqProd =  '' ; 
		 $this->comb_vCIDE =  '' ; 
		 $this->icms_tipo =  '' ; 
		 $this->icms_nItem =  '' ; 
		 $this->icms_orig =  '' ; 
		 $this->icms_cst =  '' ; 
		 $this->icms_modBC =  '' ; 
		 $this->icms_pRedBC =  '' ; 
		 $this->icms_vBC =  '' ; 
		 $this->icms_pICMS =  '' ; 
		 $this->icms_vICMS =  '' ; 
		 $this->icms_vICMSDeson =  '' ; 
		 $this->icms_motDesICMS =  '' ; 
		 $this->icms_modBCST =  '' ; 
		 $this->icms_pMVAST =  '' ; 
		 $this->icms_pRedBCST =  '' ; 
		 $this->icms_vBCST =  '' ; 
		 $this->icms_pICMSST =  '' ; 
		 $this->icms_vICMSST =  '' ; 
		 $this->icms_pDif =  '' ; 
		 $this->icms_vICMSDif =  '' ; 
		 $this->icms_vICMSOp =  '' ; 
		 $this->icms_vBCSTRet =  '' ; 
		 $this->icms_vICMSSTRet =  '' ; 
		 $this->icmssn_nItem =  '' ; 
		 $this->icmssn_orig =  '' ; 
		 $this->icmssn_csosn =  '' ; 
		 $this->icmssn_modBC =  '' ; 
		 $this->icmssn_vBC =  '' ; 
		 $this->icmssn_pRedBC =  '' ; 
		 $this->icmssn_pICMS =  '' ; 
		 $this->icmssn_vICMS =  '' ; 
		 $this->icmssn_pCredSN =  '' ; 
		 $this->icmssn_vCredICMSSN =  '' ; 
		 $this->icmssn_modBCST =  '' ; 
		 $this->icmssn_pMVAST =  '' ; 
		 $this->icmssn_pRedBCST =  '' ; 
		 $this->icmssn_vBCST =  '' ; 
		 $this->icmssn_pICMSST =  '' ; 
		 $this->icmssn_vICMSST =  '' ; 
		 $this->icmssn_vBCSTRet =  '' ; 
		 $this->icmssn_vICMSSTRet =  '' ; 
		 $this->icmsst_nItem =  '' ; 
		 $this->icmsst_modBCST =  '' ; 
		 $this->icmsst_pMVAST =  '' ; 
		 $this->icmsst_pRedBCST =  '' ; 
		 $this->icmsst_vBCST =  '' ; 
		 $this->icmsst_pICMSST =  '' ; 
		 $this->icmsst_vICMSST =  '' ; 
		 $this->icmsst_pBOCp =  '' ; 
		 $this->icmsst_UFST =  '' ; 
		 $this->ipi_tipo =  '' ; 
		 $this->ipi_nItem =  '' ; 
		 $this->ipi_cst =  '' ; 
		 $this->ipi_clEnq =  '' ; 
		 $this->ipi_cnpjProd =  '' ; 
		 $this->ipi_cSelo =  '' ; 
		 $this->ipi_qSelo =  '' ; 
		 $this->ipi_cEnq =  '' ; 
		 $this->ipi_vBC =  '' ; 
		 $this->ipi_pIPI =  '' ; 
		 $this->ipi_qUnid =  '' ; 
		 $this->ipi_vUnid =  '' ; 
		 $this->ipi_hvIPI =  '' ; 
		 $this->pis_tipo =  '' ; 
		 $this->pis_nItem =  '' ; 
		 $this->pis_cst =  '' ; 
		 $this->pis_vBC =  '' ; 
		 $this->pis_pPIS =  '' ; 
		 $this->pis_vPIS =  '' ; 
		 $this->pis_qBCProd =  '' ; 
		 $this->pis_vAliqProd =  '' ; 
		 $this->pisst_nItem =  '' ; 
		 $this->pisst_vBC =  '' ; 
		 $this->pisst_pPIS =  '' ; 
		 $this->pisst_qBCProd =  '' ; 
		 $this->pisst_vAliqProd =  '' ; 
		 $this->pisst_vPIS =  '' ; 
		 $this->cofins_tipo =  '' ; 
		 $this->cofins_nItem =  '' ; 
		 $this->cofins_cst =  '' ; 
		 $this->cofins_vBC =  '' ; 
		 $this->cofins_pCOFINS =  '' ; 
		 $this->cofins_vCOFINS =  '' ; 
		 $this->cofins_qBCProd =  '' ; 
		 $this->cofins_vAliqProd =  '' ; 
		 $this->cofinsst_nItem =  '' ; 
		 $this->cofinsst_vBC =  '' ; 
		 $this->cofinsst_pCOFINS =  '' ; 
		 $this->cofinsst_qBCProd =  '' ; 
		 $this->cofinsst_vAliqProd =  '' ; 
		 $this->cofinsst_vCOFINS =  '' ; 
		 $this->di_nItem =  '' ; 
		 $this->di_nDI =  '' ; 
		 $this->di_dDI =  '' ; 
		 $this->di_xLocDesemb =  '' ; 
		 $this->di_UFDesemb =  '' ; 
		 $this->di_dDesemb =  '' ; 
		 $this->di_tpViaTransp =  '' ; 
		 $this->di_vAFRMM =  '' ; 
		 $this->di_tpIntermedio =  '' ; 
		 $this->di_CNPJ =  '' ; 
		 $this->di_UFTerceiro =  '' ; 
		 $this->di_cExportador =  '' ; 
		 $this->adi_nItem =  '' ; 
		 $this->adi_nDI =  '' ; 
		 $this->adi_nAdicao =  '' ; 
		 $this->adi_nSeqAdicC =  '' ; 
		 $this->adi_cFabricante =  '' ; 
		 $this->adi_vDescDI =  '' ; 
		 $this->adi_nDraw =  '' ; 
		 $this->imposto_nItem =  '' ; 
		 $this->imposto_vlrtrib =  '' ; 
		 $this->nve_nItem =  '' ; 
		 $this->nve_texto =  '' ; 
		 $this->aII_nItem =  '' ; 
		 $this->aII_vBC =  '' ; 
		 $this->aII_vDespAdu =  '' ; 
		 $this->aII_vII =  '' ; 
		 $this->aII_vIOF =  '' ; 
		 $this->infad_nItem =  '' ; 
		 $this->infad_inform =  '' ; 
		 $this->infadic_nItem =  '' ; 
		 $this->infadic_pDevol =  '' ; 
		 $this->infadic_vIPIDevol =  '' ; 
	} 

	 function setSeq($value){ 
		 $this->seq = $value; 
	 } 

	 function getSeq(){ 
		 return $this->seq; 
	} 

	 function setData_envio($value){ 
		 $this->data_envio = $value; 
	 } 

	 function getData_envio(){ 
		 return $this->data_envio; 
	} 

	 function setMes_ano($value){ 
		 $this->mes_ano = $value; 
	 } 

	 function getMes_ano(){ 
		 return $this->mes_ano; 
	} 

	 function setSeq_nfe($value){ 
		 $this->seq_nfe = $value; 
	 } 

	 function getSeq_nfe(){ 
		 return $this->seq_nfe; 
	} 

	 function setIdent_chave($value){ 
		 $this->ident_chave = $value; 
	 } 

	 function getIdent_chave(){ 
		 return $this->ident_chave; 
	} 

	 function setProd_tipo($value){ 
		 $this->prod_tipo = $value; 
	 } 

	 function getProd_tipo(){ 
		 return $this->prod_tipo; 
	} 

	 function setProd_nItem($value){ 
		 $this->prod_nItem = $value; 
	 } 

	 function getProd_nItem(){ 
		 return $this->prod_nItem; 
	} 

	 function setProd_cProd($value){ 
		 $this->prod_cProd = $value; 
	 } 

	 function getProd_cProd(){ 
		 return $this->prod_cProd; 
	} 

	 function setProd_cEAN($value){ 
		 $this->prod_cEAN = $value; 
	 } 

	 function getProd_cEAN(){ 
		 return $this->prod_cEAN; 
	} 

	 function setProd_xProd($value){ 
		 $this->prod_xProd = $value; 
	 } 

	 function getProd_xProd(){ 
		 return $this->prod_xProd; 
	} 

	 function setProd_NCM($value){ 
		 $this->prod_NCM = $value; 
	 } 

	 function getProd_NCM(){ 
		 return $this->prod_NCM; 
	} 

	 function setProd_NVE($value){ 
		 $this->prod_NVE = $value; 
	 } 

	 function getProd_NVE(){ 
		 return $this->prod_NVE; 
	} 

	 function setProd_EXTIPI($value){ 
		 $this->prod_EXTIPI = $value; 
	 } 

	 function getProd_EXTIPI(){ 
		 return $this->prod_EXTIPI; 
	} 

	 function setProd_CFOP($value){ 
		 $this->prod_CFOP = $value; 
	 } 

	 function getProd_CFOP(){ 
		 return $this->prod_CFOP; 
	} 

	 function setProd_uCom($value){ 
		 $this->prod_uCom = $value; 
	 } 

	 function getProd_uCom(){ 
		 return $this->prod_uCom; 
	} 

	 function setProd_qCom($value){ 
		 $this->prod_qCom = $value; 
	 } 

	 function getProd_qCom(){ 
		 return $this->prod_qCom; 
	} 

	 function setProd_vUnCom($value){ 
		 $this->prod_vUnCom = $value; 
	 } 

	 function getProd_vUnCom(){ 
		 return $this->prod_vUnCom; 
	} 

	 function setProd_vProd($value){ 
		 $this->prod_vProd = $value; 
	 } 

	 function getProd_vProd(){ 
		 return $this->prod_vProd; 
	} 

	 function setProd_cEANTrib($value){ 
		 $this->prod_cEANTrib = $value; 
	 } 

	 function getProd_cEANTrib(){ 
		 return $this->prod_cEANTrib; 
	} 

	 function setProd_uTrib($value){ 
		 $this->prod_uTrib = $value; 
	 } 

	 function getProd_uTrib(){ 
		 return $this->prod_uTrib; 
	} 

	 function setProd_qTrib($value){ 
		 $this->prod_qTrib = $value; 
	 } 

	 function getProd_qTrib(){ 
		 return $this->prod_qTrib; 
	} 

	 function setProd_vUnTrib($value){ 
		 $this->prod_vUnTrib = $value; 
	 } 

	 function getProd_vUnTrib(){ 
		 return $this->prod_vUnTrib; 
	} 

	 function setProd_vFrete($value){ 
		 $this->prod_vFrete = $value; 
	 } 

	 function getProd_vFrete(){ 
		 return $this->prod_vFrete; 
	} 

	 function setProd_vSeg($value){ 
		 $this->prod_vSeg = $value; 
	 } 

	 function getProd_vSeg(){ 
		 return $this->prod_vSeg; 
	} 

	 function setProd_vDesc($value){ 
		 $this->prod_vDesc = $value; 
	 } 

	 function getProd_vDesc(){ 
		 return $this->prod_vDesc; 
	} 

	 function setProd_vOutro($value){ 
		 $this->prod_vOutro = $value; 
	 } 

	 function getProd_vOutro(){ 
		 return $this->prod_vOutro; 
	} 

	 function setProd_indTot($value){ 
		 $this->prod_indTot = $value; 
	 } 

	 function getProd_indTot(){ 
		 return $this->prod_indTot; 
	} 

	 function setProd_xPed($value){ 
		 $this->prod_xPed = $value; 
	 } 

	 function getProd_xPed(){ 
		 return $this->prod_xPed; 
	} 

	 function setProd_nItemPed($value){ 
		 $this->prod_nItemPed = $value; 
	 } 

	 function getProd_nItemPed(){ 
		 return $this->prod_nItemPed; 
	} 

	 function setProd_nFCI($value){ 
		 $this->prod_nFCI = $value; 
	 } 

	 function getProd_nFCI(){ 
		 return $this->prod_nFCI; 
	} 

	 function setVeic_nItem($value){ 
		 $this->veic_nItem = $value; 
	 } 

	 function getVeic_nItem(){ 
		 return $this->veic_nItem; 
	} 

	 function setVeic_tpOp($value){ 
		 $this->veic_tpOp = $value; 
	 } 

	 function getVeic_tpOp(){ 
		 return $this->veic_tpOp; 
	} 

	 function setVeic_chassi($value){ 
		 $this->veic_chassi = $value; 
	 } 

	 function getVeic_chassi(){ 
		 return $this->veic_chassi; 
	} 

	 function setVeic_cCor($value){ 
		 $this->veic_cCor = $value; 
	 } 

	 function getVeic_cCor(){ 
		 return $this->veic_cCor; 
	} 

	 function setVeic_xCor($value){ 
		 $this->veic_xCor = $value; 
	 } 

	 function getVeic_xCor(){ 
		 return $this->veic_xCor; 
	} 

	 function setVeic_pot($value){ 
		 $this->veic_pot = $value; 
	 } 

	 function getVeic_pot(){ 
		 return $this->veic_pot; 
	} 

	 function setVeic_cilin($value){ 
		 $this->veic_cilin = $value; 
	 } 

	 function getVeic_cilin(){ 
		 return $this->veic_cilin; 
	} 

	 function setVeic_pesoL($value){ 
		 $this->veic_pesoL = $value; 
	 } 

	 function getVeic_pesoL(){ 
		 return $this->veic_pesoL; 
	} 

	 function setVeic_pesoB($value){ 
		 $this->veic_pesoB = $value; 
	 } 

	 function getVeic_pesoB(){ 
		 return $this->veic_pesoB; 
	} 

	 function setVeic_nSerie($value){ 
		 $this->veic_nSerie = $value; 
	 } 

	 function getVeic_nSerie(){ 
		 return $this->veic_nSerie; 
	} 

	 function setVeic_tpComb($value){ 
		 $this->veic_tpComb = $value; 
	 } 

	 function getVeic_tpComb(){ 
		 return $this->veic_tpComb; 
	} 

	 function setVeic_nMotor($value){ 
		 $this->veic_nMotor = $value; 
	 } 

	 function getVeic_nMotor(){ 
		 return $this->veic_nMotor; 
	} 

	 function setVeic_cmt($value){ 
		 $this->veic_cmt = $value; 
	 } 

	 function getVeic_cmt(){ 
		 return $this->veic_cmt; 
	} 

	 function setVeic_dist($value){ 
		 $this->veic_dist = $value; 
	 } 

	 function getVeic_dist(){ 
		 return $this->veic_dist; 
	} 

	 function setVeic_anoMod($value){ 
		 $this->veic_anoMod = $value; 
	 } 

	 function getVeic_anoMod(){ 
		 return $this->veic_anoMod; 
	} 

	 function setVeic_anoFab($value){ 
		 $this->veic_anoFab = $value; 
	 } 

	 function getVeic_anoFab(){ 
		 return $this->veic_anoFab; 
	} 

	 function setVeic_tpPint($value){ 
		 $this->veic_tpPint = $value; 
	 } 

	 function getVeic_tpPint(){ 
		 return $this->veic_tpPint; 
	} 

	 function setVeic_tpVeic($value){ 
		 $this->veic_tpVeic = $value; 
	 } 

	 function getVeic_tpVeic(){ 
		 return $this->veic_tpVeic; 
	} 

	 function setVeic_espVeic($value){ 
		 $this->veic_espVeic = $value; 
	 } 

	 function getVeic_espVeic(){ 
		 return $this->veic_espVeic; 
	} 

	 function setVeic_VIN($value){ 
		 $this->veic_VIN = $value; 
	 } 

	 function getVeic_VIN(){ 
		 return $this->veic_VIN; 
	} 

	 function setVeic_condVeic($value){ 
		 $this->veic_condVeic = $value; 
	 } 

	 function getVeic_condVeic(){ 
		 return $this->veic_condVeic; 
	} 

	 function setVeic_cMod($value){ 
		 $this->veic_cMod = $value; 
	 } 

	 function getVeic_cMod(){ 
		 return $this->veic_cMod; 
	} 

	 function setVeic_cCorDENATRAN($value){ 
		 $this->veic_cCorDENATRAN = $value; 
	 } 

	 function getVeic_cCorDENATRAN(){ 
		 return $this->veic_cCorDENATRAN; 
	} 

	 function setVeic_lota($value){ 
		 $this->veic_lota = $value; 
	 } 

	 function getVeic_lota(){ 
		 return $this->veic_lota; 
	} 

	 function setVeic_tpRest($value){ 
		 $this->veic_tpRest = $value; 
	 } 

	 function getVeic_tpRest(){ 
		 return $this->veic_tpRest; 
	} 

	 function setMed_nItem($value){ 
		 $this->med_nItem = $value; 
	 } 

	 function getMed_nItem(){ 
		 return $this->med_nItem; 
	} 

	 function setMed_nLote($value){ 
		 $this->med_nLote = $value; 
	 } 

	 function getMed_nLote(){ 
		 return $this->med_nLote; 
	} 

	 function setMed_qLote($value){ 
		 $this->med_qLote = $value; 
	 } 

	 function getMed_qLote(){ 
		 return $this->med_qLote; 
	} 

	 function setMed_dFab($value){ 
		 $this->med_dFab = $value; 
	 } 

	 function getMed_dFab(){ 
		 return $this->med_dFab; 
	} 

	 function setMed_dVal($value){ 
		 $this->med_dVal = $value; 
	 } 

	 function getMed_dVal(){ 
		 return $this->med_dVal; 
	} 

	 function setMed_vPMC($value){ 
		 $this->med_vPMC = $value; 
	 } 

	 function getMed_vPMC(){ 
		 return $this->med_vPMC; 
	} 

	 function setArma_nItem($value){ 
		 $this->arma_nItem = $value; 
	 } 

	 function getArma_nItem(){ 
		 return $this->arma_nItem; 
	} 

	 function setArma_tpArma($value){ 
		 $this->arma_tpArma = $value; 
	 } 

	 function getArma_tpArma(){ 
		 return $this->arma_tpArma; 
	} 

	 function setArma_nSerie($value){ 
		 $this->arma_nSerie = $value; 
	 } 

	 function getArma_nSerie(){ 
		 return $this->arma_nSerie; 
	} 

	 function setArma_nCano($value){ 
		 $this->arma_nCano = $value; 
	 } 

	 function getArma_nCano(){ 
		 return $this->arma_nCano; 
	} 

	 function setArma_descr($value){ 
		 $this->arma_descr = $value; 
	 } 

	 function getArma_descr(){ 
		 return $this->arma_descr; 
	} 

	 function setComb_nItem($value){ 
		 $this->comb_nItem = $value; 
	 } 

	 function getComb_nItem(){ 
		 return $this->comb_nItem; 
	} 

	 function setComb_cProdANP($value){ 
		 $this->comb_cProdANP = $value; 
	 } 

	 function getComb_cProdANP(){ 
		 return $this->comb_cProdANP; 
	} 

	 function setComb_pMixGN($value){ 
		 $this->comb_pMixGN = $value; 
	 } 

	 function getComb_pMixGN(){ 
		 return $this->comb_pMixGN; 
	} 

	 function setComb_codif($value){ 
		 $this->comb_codif = $value; 
	 } 

	 function getComb_codif(){ 
		 return $this->comb_codif; 
	} 

	 function setComb_qTemp($value){ 
		 $this->comb_qTemp = $value; 
	 } 

	 function getComb_qTemp(){ 
		 return $this->comb_qTemp; 
	} 

	 function setComb_ufCons($value){ 
		 $this->comb_ufCons = $value; 
	 } 

	 function getComb_ufCons(){ 
		 return $this->comb_ufCons; 
	} 

	 function setComb_qBCProd($value){ 
		 $this->comb_qBCProd = $value; 
	 } 

	 function getComb_qBCProd(){ 
		 return $this->comb_qBCProd; 
	} 

	 function setComb_vAliqProd($value){ 
		 $this->comb_vAliqProd = $value; 
	 } 

	 function getComb_vAliqProd(){ 
		 return $this->comb_vAliqProd; 
	} 

	 function setComb_vCIDE($value){ 
		 $this->comb_vCIDE = $value; 
	 } 

	 function getComb_vCIDE(){ 
		 return $this->comb_vCIDE; 
	} 

	 function setIcms_tipo($value){ 
		 $this->icms_tipo = $value; 
	 } 

	 function getIcms_tipo(){ 
		 return $this->icms_tipo; 
	} 

	 function setIcms_nItem($value){ 
		 $this->icms_nItem = $value; 
	 } 

	 function getIcms_nItem(){ 
		 return $this->icms_nItem; 
	} 

	 function setIcms_orig($value){ 
		 $this->icms_orig = $value; 
	 } 

	 function getIcms_orig(){ 
		 return $this->icms_orig; 
	} 

	 function setIcms_cst($value){ 
		 $this->icms_cst = $value; 
	 } 

	 function getIcms_cst(){ 
		 return $this->icms_cst; 
	} 

	 function setIcms_modBC($value){ 
		 $this->icms_modBC = $value; 
	 } 

	 function getIcms_modBC(){ 
		 return $this->icms_modBC; 
	} 

	 function setIcms_pRedBC($value){ 
		 $this->icms_pRedBC = $value; 
	 } 

	 function getIcms_pRedBC(){ 
		 return $this->icms_pRedBC; 
	} 

	 function setIcms_vBC($value){ 
		 $this->icms_vBC = $value; 
	 } 

	 function getIcms_vBC(){ 
		 return $this->icms_vBC; 
	} 

	 function setIcms_pICMS($value){ 
		 $this->icms_pICMS = $value; 
	 } 

	 function getIcms_pICMS(){ 
		 return $this->icms_pICMS; 
	} 

	 function setIcms_vICMS($value){ 
		 $this->icms_vICMS = $value; 
	 } 

	 function getIcms_vICMS(){ 
		 return $this->icms_vICMS; 
	} 

	 function setIcms_vICMSDeson($value){ 
		 $this->icms_vICMSDeson = $value; 
	 } 

	 function getIcms_vICMSDeson(){ 
		 return $this->icms_vICMSDeson; 
	} 

	 function setIcms_motDesICMS($value){ 
		 $this->icms_motDesICMS = $value; 
	 } 

	 function getIcms_motDesICMS(){ 
		 return $this->icms_motDesICMS; 
	} 

	 function setIcms_modBCST($value){ 
		 $this->icms_modBCST = $value; 
	 } 

	 function getIcms_modBCST(){ 
		 return $this->icms_modBCST; 
	} 

	 function setIcms_pMVAST($value){ 
		 $this->icms_pMVAST = $value; 
	 } 

	 function getIcms_pMVAST(){ 
		 return $this->icms_pMVAST; 
	} 

	 function setIcms_pRedBCST($value){ 
		 $this->icms_pRedBCST = $value; 
	 } 

	 function getIcms_pRedBCST(){ 
		 return $this->icms_pRedBCST; 
	} 

	 function setIcms_vBCST($value){ 
		 $this->icms_vBCST = $value; 
	 } 

	 function getIcms_vBCST(){ 
		 return $this->icms_vBCST; 
	} 

	 function setIcms_pICMSST($value){ 
		 $this->icms_pICMSST = $value; 
	 } 

	 function getIcms_pICMSST(){ 
		 return $this->icms_pICMSST; 
	} 

	 function setIcms_vICMSST($value){ 
		 $this->icms_vICMSST = $value; 
	 } 

	 function getIcms_vICMSST(){ 
		 return $this->icms_vICMSST; 
	} 

	 function setIcms_pDif($value){ 
		 $this->icms_pDif = $value; 
	 } 

	 function getIcms_pDif(){ 
		 return $this->icms_pDif; 
	} 

	 function setIcms_vICMSDif($value){ 
		 $this->icms_vICMSDif = $value; 
	 } 

	 function getIcms_vICMSDif(){ 
		 return $this->icms_vICMSDif; 
	} 

	 function setIcms_vICMSOp($value){ 
		 $this->icms_vICMSOp = $value; 
	 } 

	 function getIcms_vICMSOp(){ 
		 return $this->icms_vICMSOp; 
	} 

	 function setIcms_vBCSTRet($value){ 
		 $this->icms_vBCSTRet = $value; 
	 } 

	 function getIcms_vBCSTRet(){ 
		 return $this->icms_vBCSTRet; 
	} 

	 function setIcms_vICMSSTRet($value){ 
		 $this->icms_vICMSSTRet = $value; 
	 } 

	 function getIcms_vICMSSTRet(){ 
		 return $this->icms_vICMSSTRet; 
	} 

	 function setIcmssn_nItem($value){ 
		 $this->icmssn_nItem = $value; 
	 } 

	 function getIcmssn_nItem(){ 
		 return $this->icmssn_nItem; 
	} 

	 function setIcmssn_orig($value){ 
		 $this->icmssn_orig = $value; 
	 } 

	 function getIcmssn_orig(){ 
		 return $this->icmssn_orig; 
	} 

	 function setIcmssn_csosn($value){ 
		 $this->icmssn_csosn = $value; 
	 } 

	 function getIcmssn_csosn(){ 
		 return $this->icmssn_csosn; 
	} 

	 function setIcmssn_modBC($value){ 
		 $this->icmssn_modBC = $value; 
	 } 

	 function getIcmssn_modBC(){ 
		 return $this->icmssn_modBC; 
	} 

	 function setIcmssn_vBC($value){ 
		 $this->icmssn_vBC = $value; 
	 } 

	 function getIcmssn_vBC(){ 
		 return $this->icmssn_vBC; 
	} 

	 function setIcmssn_pRedBC($value){ 
		 $this->icmssn_pRedBC = $value; 
	 } 

	 function getIcmssn_pRedBC(){ 
		 return $this->icmssn_pRedBC; 
	} 

	 function setIcmssn_pICMS($value){ 
		 $this->icmssn_pICMS = $value; 
	 } 

	 function getIcmssn_pICMS(){ 
		 return $this->icmssn_pICMS; 
	} 

	 function setIcmssn_vICMS($value){ 
		 $this->icmssn_vICMS = $value; 
	 } 

	 function getIcmssn_vICMS(){ 
		 return $this->icmssn_vICMS; 
	} 

	 function setIcmssn_pCredSN($value){ 
		 $this->icmssn_pCredSN = $value; 
	 } 

	 function getIcmssn_pCredSN(){ 
		 return $this->icmssn_pCredSN; 
	} 

	 function setIcmssn_vCredICMSSN($value){ 
		 $this->icmssn_vCredICMSSN = $value; 
	 } 

	 function getIcmssn_vCredICMSSN(){ 
		 return $this->icmssn_vCredICMSSN; 
	} 

	 function setIcmssn_modBCST($value){ 
		 $this->icmssn_modBCST = $value; 
	 } 

	 function getIcmssn_modBCST(){ 
		 return $this->icmssn_modBCST; 
	} 

	 function setIcmssn_pMVAST($value){ 
		 $this->icmssn_pMVAST = $value; 
	 } 

	 function getIcmssn_pMVAST(){ 
		 return $this->icmssn_pMVAST; 
	} 

	 function setIcmssn_pRedBCST($value){ 
		 $this->icmssn_pRedBCST = $value; 
	 } 

	 function getIcmssn_pRedBCST(){ 
		 return $this->icmssn_pRedBCST; 
	} 

	 function setIcmssn_vBCST($value){ 
		 $this->icmssn_vBCST = $value; 
	 } 

	 function getIcmssn_vBCST(){ 
		 return $this->icmssn_vBCST; 
	} 

	 function setIcmssn_pICMSST($value){ 
		 $this->icmssn_pICMSST = $value; 
	 } 

	 function getIcmssn_pICMSST(){ 
		 return $this->icmssn_pICMSST; 
	} 

	 function setIcmssn_vICMSST($value){ 
		 $this->icmssn_vICMSST = $value; 
	 } 

	 function getIcmssn_vICMSST(){ 
		 return $this->icmssn_vICMSST; 
	} 

	 function setIcmssn_vBCSTRet($value){ 
		 $this->icmssn_vBCSTRet = $value; 
	 } 

	 function getIcmssn_vBCSTRet(){ 
		 return $this->icmssn_vBCSTRet; 
	} 

	 function setIcmssn_vICMSSTRet($value){ 
		 $this->icmssn_vICMSSTRet = $value; 
	 } 

	 function getIcmssn_vICMSSTRet(){ 
		 return $this->icmssn_vICMSSTRet; 
	} 

	 function setIcmsst_nItem($value){ 
		 $this->icmsst_nItem = $value; 
	 } 

	 function getIcmsst_nItem(){ 
		 return $this->icmsst_nItem; 
	} 

	 function setIcmsst_modBCST($value){ 
		 $this->icmsst_modBCST = $value; 
	 } 

	 function getIcmsst_modBCST(){ 
		 return $this->icmsst_modBCST; 
	} 

	 function setIcmsst_pMVAST($value){ 
		 $this->icmsst_pMVAST = $value; 
	 } 

	 function getIcmsst_pMVAST(){ 
		 return $this->icmsst_pMVAST; 
	} 

	 function setIcmsst_pRedBCST($value){ 
		 $this->icmsst_pRedBCST = $value; 
	 } 

	 function getIcmsst_pRedBCST(){ 
		 return $this->icmsst_pRedBCST; 
	} 

	 function setIcmsst_vBCST($value){ 
		 $this->icmsst_vBCST = $value; 
	 } 

	 function getIcmsst_vBCST(){ 
		 return $this->icmsst_vBCST; 
	} 

	 function setIcmsst_pICMSST($value){ 
		 $this->icmsst_pICMSST = $value; 
	 } 

	 function getIcmsst_pICMSST(){ 
		 return $this->icmsst_pICMSST; 
	} 

	 function setIcmsst_vICMSST($value){ 
		 $this->icmsst_vICMSST = $value; 
	 } 

	 function getIcmsst_vICMSST(){ 
		 return $this->icmsst_vICMSST; 
	} 

	 function setIcmsst_pBOCp($value){ 
		 $this->icmsst_pBOCp = $value; 
	 } 

	 function getIcmsst_pBOCp(){ 
		 return $this->icmsst_pBOCp; 
	} 

	 function setIcmsst_UFST($value){ 
		 $this->icmsst_UFST = $value; 
	 } 

	 function getIcmsst_UFST(){ 
		 return $this->icmsst_UFST; 
	} 

	 function setIpi_tipo($value){ 
		 $this->ipi_tipo = $value; 
	 } 

	 function getIpi_tipo(){ 
		 return $this->ipi_tipo; 
	} 

	 function setIpi_nItem($value){ 
		 $this->ipi_nItem = $value; 
	 } 

	 function getIpi_nItem(){ 
		 return $this->ipi_nItem; 
	} 

	 function setIpi_cst($value){ 
		 $this->ipi_cst = $value; 
	 } 

	 function getIpi_cst(){ 
		 return $this->ipi_cst; 
	} 

	 function setIpi_clEnq($value){ 
		 $this->ipi_clEnq = $value; 
	 } 

	 function getIpi_clEnq(){ 
		 return $this->ipi_clEnq; 
	} 

	 function setIpi_cnpjProd($value){ 
		 $this->ipi_cnpjProd = $value; 
	 } 

	 function getIpi_cnpjProd(){ 
		 return $this->ipi_cnpjProd; 
	} 

	 function setIpi_cSelo($value){ 
		 $this->ipi_cSelo = $value; 
	 } 

	 function getIpi_cSelo(){ 
		 return $this->ipi_cSelo; 
	} 

	 function setIpi_qSelo($value){ 
		 $this->ipi_qSelo = $value; 
	 } 

	 function getIpi_qSelo(){ 
		 return $this->ipi_qSelo; 
	} 

	 function setIpi_cEnq($value){ 
		 $this->ipi_cEnq = $value; 
	 } 

	 function getIpi_cEnq(){ 
		 return $this->ipi_cEnq; 
	} 

	 function setIpi_vBC($value){ 
		 $this->ipi_vBC = $value; 
	 } 

	 function getIpi_vBC(){ 
		 return $this->ipi_vBC; 
	} 

	 function setIpi_pIPI($value){ 
		 $this->ipi_pIPI = $value; 
	 } 

	 function getIpi_pIPI(){ 
		 return $this->ipi_pIPI; 
	} 

	 function setIpi_qUnid($value){ 
		 $this->ipi_qUnid = $value; 
	 } 

	 function getIpi_qUnid(){ 
		 return $this->ipi_qUnid; 
	} 

	 function setIpi_vUnid($value){ 
		 $this->ipi_vUnid = $value; 
	 } 

	 function getIpi_vUnid(){ 
		 return $this->ipi_vUnid; 
	} 

	 function setIpi_hvIPI($value){ 
		 $this->ipi_hvIPI = $value; 
	 } 

	 function getIpi_hvIPI(){ 
		 return $this->ipi_hvIPI; 
	} 

	 function setPis_tipo($value){ 
		 $this->pis_tipo = $value; 
	 } 

	 function getPis_tipo(){ 
		 return $this->pis_tipo; 
	} 

	 function setPis_nItem($value){ 
		 $this->pis_nItem = $value; 
	 } 

	 function getPis_nItem(){ 
		 return $this->pis_nItem; 
	} 

	 function setPis_cst($value){ 
		 $this->pis_cst = $value; 
	 } 

	 function getPis_cst(){ 
		 return $this->pis_cst; 
	} 

	 function setPis_vBC($value){ 
		 $this->pis_vBC = $value; 
	 } 

	 function getPis_vBC(){ 
		 return $this->pis_vBC; 
	} 

	 function setPis_pPIS($value){ 
		 $this->pis_pPIS = $value; 
	 } 

	 function getPis_pPIS(){ 
		 return $this->pis_pPIS; 
	} 

	 function setPis_vPIS($value){ 
		 $this->pis_vPIS = $value; 
	 } 

	 function getPis_vPIS(){ 
		 return $this->pis_vPIS; 
	} 

	 function setPis_qBCProd($value){ 
		 $this->pis_qBCProd = $value; 
	 } 

	 function getPis_qBCProd(){ 
		 return $this->pis_qBCProd; 
	} 

	 function setPis_vAliqProd($value){ 
		 $this->pis_vAliqProd = $value; 
	 } 

	 function getPis_vAliqProd(){ 
		 return $this->pis_vAliqProd; 
	} 

	 function setPisst_nItem($value){ 
		 $this->pisst_nItem = $value; 
	 } 

	 function getPisst_nItem(){ 
		 return $this->pisst_nItem; 
	} 

	 function setPisst_vBC($value){ 
		 $this->pisst_vBC = $value; 
	 } 

	 function getPisst_vBC(){ 
		 return $this->pisst_vBC; 
	} 

	 function setPisst_pPIS($value){ 
		 $this->pisst_pPIS = $value; 
	 } 

	 function getPisst_pPIS(){ 
		 return $this->pisst_pPIS; 
	} 

	 function setPisst_qBCProd($value){ 
		 $this->pisst_qBCProd = $value; 
	 } 

	 function getPisst_qBCProd(){ 
		 return $this->pisst_qBCProd; 
	} 

	 function setPisst_vAliqProd($value){ 
		 $this->pisst_vAliqProd = $value; 
	 } 

	 function getPisst_vAliqProd(){ 
		 return $this->pisst_vAliqProd; 
	} 

	 function setPisst_vPIS($value){ 
		 $this->pisst_vPIS = $value; 
	 } 

	 function getPisst_vPIS(){ 
		 return $this->pisst_vPIS; 
	} 

	 function setCofins_tipo($value){ 
		 $this->cofins_tipo = $value; 
	 } 

	 function getCofins_tipo(){ 
		 return $this->cofins_tipo; 
	} 

	 function setCofins_nItem($value){ 
		 $this->cofins_nItem = $value; 
	 } 

	 function getCofins_nItem(){ 
		 return $this->cofins_nItem; 
	} 

	 function setCofins_cst($value){ 
		 $this->cofins_cst = $value; 
	 } 

	 function getCofins_cst(){ 
		 return $this->cofins_cst; 
	} 

	 function setCofins_vBC($value){ 
		 $this->cofins_vBC = $value; 
	 } 

	 function getCofins_vBC(){ 
		 return $this->cofins_vBC; 
	} 

	 function setCofins_pCOFINS($value){ 
		 $this->cofins_pCOFINS = $value; 
	 } 

	 function getCofins_pCOFINS(){ 
		 return $this->cofins_pCOFINS; 
	} 

	 function setCofins_vCOFINS($value){ 
		 $this->cofins_vCOFINS = $value; 
	 } 

	 function getCofins_vCOFINS(){ 
		 return $this->cofins_vCOFINS; 
	} 

	 function setCofins_qBCProd($value){ 
		 $this->cofins_qBCProd = $value; 
	 } 

	 function getCofins_qBCProd(){ 
		 return $this->cofins_qBCProd; 
	} 

	 function setCofins_vAliqProd($value){ 
		 $this->cofins_vAliqProd = $value; 
	 } 

	 function getCofins_vAliqProd(){ 
		 return $this->cofins_vAliqProd; 
	} 

	 function setCofinsst_nItem($value){ 
		 $this->cofinsst_nItem = $value; 
	 } 

	 function getCofinsst_nItem(){ 
		 return $this->cofinsst_nItem; 
	} 

	 function setCofinsst_vBC($value){ 
		 $this->cofinsst_vBC = $value; 
	 } 

	 function getCofinsst_vBC(){ 
		 return $this->cofinsst_vBC; 
	} 

	 function setCofinsst_pCOFINS($value){ 
		 $this->cofinsst_pCOFINS = $value; 
	 } 

	 function getCofinsst_pCOFINS(){ 
		 return $this->cofinsst_pCOFINS; 
	} 

	 function setCofinsst_qBCProd($value){ 
		 $this->cofinsst_qBCProd = $value; 
	 } 

	 function getCofinsst_qBCProd(){ 
		 return $this->cofinsst_qBCProd; 
	} 

	 function setCofinsst_vAliqProd($value){ 
		 $this->cofinsst_vAliqProd = $value; 
	 } 

	 function getCofinsst_vAliqProd(){ 
		 return $this->cofinsst_vAliqProd; 
	} 

	 function setCofinsst_vCOFINS($value){ 
		 $this->cofinsst_vCOFINS = $value; 
	 } 

	 function getCofinsst_vCOFINS(){ 
		 return $this->cofinsst_vCOFINS; 
	} 

	 function setDi_nItem($value){ 
		 $this->di_nItem = $value; 
	 } 

	 function getDi_nItem(){ 
		 return $this->di_nItem; 
	} 

	 function setDi_nDI($value){ 
		 $this->di_nDI = $value; 
	 } 

	 function getDi_nDI(){ 
		 return $this->di_nDI; 
	} 

	 function setDi_dDI($value){ 
		 $this->di_dDI = $value; 
	 } 

	 function getDi_dDI(){ 
		 return $this->di_dDI; 
	} 

	 function setDi_xLocDesemb($value){ 
		 $this->di_xLocDesemb = $value; 
	 } 

	 function getDi_xLocDesemb(){ 
		 return $this->di_xLocDesemb; 
	} 

	 function setDi_UFDesemb($value){ 
		 $this->di_UFDesemb = $value; 
	 } 

	 function getDi_UFDesemb(){ 
		 return $this->di_UFDesemb; 
	} 

	 function setDi_dDesemb($value){ 
		 $this->di_dDesemb = $value; 
	 } 

	 function getDi_dDesemb(){ 
		 return $this->di_dDesemb; 
	} 

	 function setDi_tpViaTransp($value){ 
		 $this->di_tpViaTransp = $value; 
	 } 

	 function getDi_tpViaTransp(){ 
		 return $this->di_tpViaTransp; 
	} 

	 function setDi_vAFRMM($value){ 
		 $this->di_vAFRMM = $value; 
	 } 

	 function getDi_vAFRMM(){ 
		 return $this->di_vAFRMM; 
	} 

	 function setDi_tpIntermedio($value){ 
		 $this->di_tpIntermedio = $value; 
	 } 

	 function getDi_tpIntermedio(){ 
		 return $this->di_tpIntermedio; 
	} 

	 function setDi_CNPJ($value){ 
		 $this->di_CNPJ = $value; 
	 } 

	 function getDi_CNPJ(){ 
		 return $this->di_CNPJ; 
	} 

	 function setDi_UFTerceiro($value){ 
		 $this->di_UFTerceiro = $value; 
	 } 

	 function getDi_UFTerceiro(){ 
		 return $this->di_UFTerceiro; 
	} 

	 function setDi_cExportador($value){ 
		 $this->di_cExportador = $value; 
	 } 

	 function getDi_cExportador(){ 
		 return $this->di_cExportador; 
	} 

	 function setAdi_nItem($value){ 
		 $this->adi_nItem = $value; 
	 } 

	 function getAdi_nItem(){ 
		 return $this->adi_nItem; 
	} 

	 function setAdi_nDI($value){ 
		 $this->adi_nDI = $value; 
	 } 

	 function getAdi_nDI(){ 
		 return $this->adi_nDI; 
	} 

	 function setAdi_nAdicao($value){ 
		 $this->adi_nAdicao = $value; 
	 } 

	 function getAdi_nAdicao(){ 
		 return $this->adi_nAdicao; 
	} 

	 function setAdi_nSeqAdicC($value){ 
		 $this->adi_nSeqAdicC = $value; 
	 } 

	 function getAdi_nSeqAdicC(){ 
		 return $this->adi_nSeqAdicC; 
	} 

	 function setAdi_cFabricante($value){ 
		 $this->adi_cFabricante = $value; 
	 } 

	 function getAdi_cFabricante(){ 
		 return $this->adi_cFabricante; 
	} 

	 function setAdi_vDescDI($value){ 
		 $this->adi_vDescDI = $value; 
	 } 

	 function getAdi_vDescDI(){ 
		 return $this->adi_vDescDI; 
	} 

	 function setAdi_nDraw($value){ 
		 $this->adi_nDraw = $value; 
	 } 

	 function getAdi_nDraw(){ 
		 return $this->adi_nDraw; 
	} 

	 function setImposto_nItem($value){ 
		 $this->imposto_nItem = $value; 
	 } 

	 function getImposto_nItem(){ 
		 return $this->imposto_nItem; 
	} 

	 function setImposto_vlrtrib($value){ 
		 $this->imposto_vlrtrib = $value; 
	 } 

	 function getImposto_vlrtrib(){ 
		 return $this->imposto_vlrtrib; 
	} 

	 function setNve_nItem($value){ 
		 $this->nve_nItem = $value; 
	 } 

	 function getNve_nItem(){ 
		 return $this->nve_nItem; 
	} 

	 function setNve_texto($value){ 
		 $this->nve_texto = $value; 
	 } 

	 function getNve_texto(){ 
		 return $this->nve_texto; 
	} 

	 function setAII_nItem($value){ 
		 $this->aII_nItem = $value; 
	 } 

	 function getAII_nItem(){ 
		 return $this->aII_nItem; 
	} 

	 function setAII_vBC($value){ 
		 $this->aII_vBC = $value; 
	 } 

	 function getAII_vBC(){ 
		 return $this->aII_vBC; 
	} 

	 function setAII_vDespAdu($value){ 
		 $this->aII_vDespAdu = $value; 
	 } 

	 function getAII_vDespAdu(){ 
		 return $this->aII_vDespAdu; 
	} 

	 function setAII_vII($value){ 
		 $this->aII_vII = $value; 
	 } 

	 function getAII_vII(){ 
		 return $this->aII_vII; 
	} 

	 function setAII_vIOF($value){ 
		 $this->aII_vIOF = $value; 
	 } 

	 function getAII_vIOF(){ 
		 return $this->aII_vIOF; 
	} 

	 function setInfad_nItem($value){ 
		 $this->infad_nItem = $value; 
	 } 

	 function getInfad_nItem(){ 
		 return $this->infad_nItem; 
	} 

	 function setInfad_inform($value){ 
		 $this->infad_inform = $value; 
	 } 

	 function getInfad_inform(){ 
		 return $this->infad_inform; 
	} 

	 function setInfadic_nItem($value){ 
		 $this->infadic_nItem = $value; 
	 } 

	 function getInfadic_nItem(){ 
		 return $this->infadic_nItem; 
	} 

	 function setInfadic_pDevol($value){ 
		 $this->infadic_pDevol = $value; 
	 } 

	 function getInfadic_pDevol(){ 
		 return $this->infadic_pDevol; 
	} 

	 function setInfadic_vIPIDevol($value){ 
		 $this->infadic_vIPIDevol = $value; 
	 } 

	 function getInfadic_vIPIDevol(){ 
		 return $this->infadic_vIPIDevol; 
	} 

} 
 ?>