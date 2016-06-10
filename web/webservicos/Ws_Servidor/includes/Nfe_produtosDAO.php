<?php 
 /** Classe responsavel pelas transacoes da Tabela: Nfe_produtos. */ 
class Nfe_produtosDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO nfe_produtos ('; 
		 $sql .= 'seq,';
		 $sql .= 'data_envio,';
		 $sql .= 'mes_ano,';
		 $sql .= 'seq_nfe,';
		 $sql .= 'ident_chave,';
		 $sql .= 'prod_tipo,';
		 $sql .= 'prod_nItem,';
		 $sql .= 'prod_cProd,';
		 $sql .= 'prod_cEAN,';
		 $sql .= 'prod_xProd,';
		 $sql .= 'prod_NCM,';
		 $sql .= 'prod_NVE,';
		 $sql .= 'prod_EXTIPI,';
		 $sql .= 'prod_CFOP,';
		 $sql .= 'prod_uCom,';
		 $sql .= 'prod_qCom,';
		 $sql .= 'prod_vUnCom,';
		 $sql .= 'prod_vProd,';
		 $sql .= 'prod_cEANTrib,';
		 $sql .= 'prod_uTrib,';
		 $sql .= 'prod_qTrib,';
		 $sql .= 'prod_vUnTrib,';
		 $sql .= 'prod_vFrete,';
		 $sql .= 'prod_vSeg,';
		 $sql .= 'prod_vDesc,';
		 $sql .= 'prod_vOutro,';
		 $sql .= 'prod_indTot,';
		 $sql .= 'prod_xPed,';
		 $sql .= 'prod_nItemPed,';
		 $sql .= 'prod_nFCI,';
		 $sql .= 'veic_nItem,';
		 $sql .= 'veic_tpOp,';
		 $sql .= 'veic_chassi,';
		 $sql .= 'veic_cCor,';
		 $sql .= 'veic_xCor,';
		 $sql .= 'veic_pot,';
		 $sql .= 'veic_cilin,';
		 $sql .= 'veic_pesoL,';
		 $sql .= 'veic_pesoB,';
		 $sql .= 'veic_nSerie,';
		 $sql .= 'veic_tpComb,';
		 $sql .= 'veic_nMotor,';
		 $sql .= 'veic_cmt,';
		 $sql .= 'veic_dist,';
		 $sql .= 'veic_anoMod,';
		 $sql .= 'veic_anoFab,';
		 $sql .= 'veic_tpPint,';
		 $sql .= 'veic_tpVeic,';
		 $sql .= 'veic_espVeic,';
		 $sql .= 'veic_VIN,';
		 $sql .= 'veic_condVeic,';
		 $sql .= 'veic_cMod,';
		 $sql .= 'veic_cCorDENATRAN,';
		 $sql .= 'veic_lota,';
		 $sql .= 'veic_tpRest,';
		 $sql .= 'med_nItem,';
		 $sql .= 'med_nLote,';
		 $sql .= 'med_qLote,';
		 $sql .= 'med_dFab,';
		 $sql .= 'med_dVal,';
		 $sql .= 'med_vPMC,';
		 $sql .= 'arma_nItem,';
		 $sql .= 'arma_tpArma,';
		 $sql .= 'arma_nSerie,';
		 $sql .= 'arma_nCano,';
		 $sql .= 'arma_descr,';
		 $sql .= 'comb_nItem,';
		 $sql .= 'comb_cProdANP,';
		 $sql .= 'comb_pMixGN,';
		 $sql .= 'comb_codif,';
		 $sql .= 'comb_qTemp,';
		 $sql .= 'comb_ufCons,';
		 $sql .= 'comb_qBCProd,';
		 $sql .= 'comb_vAliqProd,';
		 $sql .= 'comb_vCIDE,';
		 $sql .= 'icms_tipo,';
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
		 $sql .= 'icmssn_nItem,';
		 $sql .= 'icmssn_orig,';
		 $sql .= 'icmssn_csosn,';
		 $sql .= 'icmssn_modBC,';
		 $sql .= 'icmssn_vBC,';
		 $sql .= 'icmssn_pRedBC,';
		 $sql .= 'icmssn_pICMS,';
		 $sql .= 'icmssn_vICMS,';
		 $sql .= 'icmssn_pCredSN,';
		 $sql .= 'icmssn_vCredICMSSN,';
		 $sql .= 'icmssn_modBCST,';
		 $sql .= 'icmssn_pMVAST,';
		 $sql .= 'icmssn_pRedBCST,';
		 $sql .= 'icmssn_vBCST,';
		 $sql .= 'icmssn_pICMSST,';
		 $sql .= 'icmssn_vICMSST,';
		 $sql .= 'icmssn_vBCSTRet,';
		 $sql .= 'icmssn_vICMSSTRet,';
		 $sql .= 'icmsst_nItem,';
		 $sql .= 'icmsst_modBCST,';
		 $sql .= 'icmsst_pMVAST,';
		 $sql .= 'icmsst_pRedBCST,';
		 $sql .= 'icmsst_vBCST,';
		 $sql .= 'icmsst_pICMSST,';
		 $sql .= 'icmsst_vICMSST,';
		 $sql .= 'icmsst_pBOCp,';
		 $sql .= 'icmsst_UFST,';
		 $sql .= 'ipi_tipo,';
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
		 $sql .= 'pis_tipo,';
		 $sql .= 'pis_nItem,';
		 $sql .= 'pis_cst,';
		 $sql .= 'pis_vBC,';
		 $sql .= 'pis_pPIS,';
		 $sql .= 'pis_vPIS,';
		 $sql .= 'pis_qBCProd,';
		 $sql .= 'pis_vAliqProd,';
		 $sql .= 'pisst_nItem,';
		 $sql .= 'pisst_vBC,';
		 $sql .= 'pisst_pPIS,';
		 $sql .= 'pisst_qBCProd,';
		 $sql .= 'pisst_vAliqProd,';
		 $sql .= 'pisst_vPIS,';
		 $sql .= 'cofins_tipo,';
		 $sql .= 'cofins_nItem,';
		 $sql .= 'cofins_cst,';
		 $sql .= 'cofins_vBC,';
		 $sql .= 'cofins_pCOFINS,';
		 $sql .= 'cofins_vCOFINS,';
		 $sql .= 'cofins_qBCProd,';
		 $sql .= 'cofins_vAliqProd,';
		 $sql .= 'cofinsst_nItem,';
		 $sql .= 'cofinsst_vBC,';
		 $sql .= 'cofinsst_pCOFINS,';
		 $sql .= 'cofinsst_qBCProd,';
		 $sql .= 'cofinsst_vAliqProd,';
		 $sql .= 'cofinsst_vCOFINS,';
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
		 $sql .= 'nve_nItem,';
		 $sql .= 'nve_texto,';
		 $sql .= 'aII_nItem,';
		 $sql .= 'aII_vBC,';
		 $sql .= 'aII_vDespAdu,';
		 $sql .= 'aII_vII,';
		 $sql .= 'aII_vIOF,';
		 $sql .= 'infad_nItem,';
		 $sql .= 'infad_inform,';
		 $sql .= 'infadic_nItem,';
		 $sql .= 'infadic_pDevol,';
		 $sql .= 'infadic_vIPIDevol';
		 $sql .= ') VALUES ('; 
		 $sql .= ($obj->getSeq()?$obj->getSeq():0).',';
		 $sql .= '\''.$obj->getData_envio().'\',';
		 $sql .= ($obj->getMes_ano()?$obj->getMes_ano():0).',';
		 $sql .= ($obj->getSeq_nfe()?$obj->getSeq_nfe():0).',';
		 $sql .= '\''.$obj->getIdent_chave().'\',';
		 $sql .= ($obj->getProd_tipo()?$obj->getProd_tipo():0).',';
		 $sql .= ($obj->getProd_nItem()?$obj->getProd_nItem():0).',';
		 $sql .= ($obj->getProd_cProd()?$obj->getProd_cProd():0).',';
		 $sql .= '\''.$obj->getProd_cEAN().'\',';
		 $sql .= '\''.$obj->getProd_xProd().'\',';
		 $sql .= ($obj->getProd_NCM()?$obj->getProd_NCM():0).',';
		 $sql .= '\''.$obj->getProd_NVE().'\',';
		 $sql .= '\''.$obj->getProd_EXTIPI().'\',';
		 $sql .= ($obj->getProd_CFOP()?$obj->getProd_CFOP():0).',';
		 $sql .= '\''.$obj->getProd_uCom().'\',';
		 $sql .= '\''.$obj->getProd_qCom().'\',';
		 $sql .= ($obj->getProd_vUnCom()?$obj->getProd_vUnCom():0).',';
		 $sql .= ($obj->getProd_vProd()?$obj->getProd_vProd():0).',';
		 $sql .= '\''.$obj->getProd_cEANTrib().'\',';
		 $sql .= '\''.$obj->getProd_uTrib().'\',';
		 $sql .= ($obj->getProd_qTrib()?$obj->getProd_qTrib():0).',';
		 $sql .= ($obj->getProd_vUnTrib()?$obj->getProd_vUnTrib():0).',';
		 $sql .= ($obj->getProd_vFrete()?$obj->getProd_vFrete():0).',';
		 $sql .= ($obj->getProd_vSeg()?$obj->getProd_vSeg():0).',';
		 $sql .= ($obj->getProd_vDesc()?$obj->getProd_vDesc():0).',';
		 $sql .= ($obj->getProd_vOutro()?$obj->getProd_vOutro():0).',';
		 $sql .= ($obj->getProd_indTot()?$obj->getProd_indTot():0).',';
		 $sql .= ($obj->getProd_xPed()?$obj->getProd_xPed():0).',';
		 $sql .= ($obj->getProd_nItemPed()?$obj->getProd_nItemPed():0).',';
		 $sql .= '\''.$obj->getProd_nFCI().'\',';
		 $sql .= ($obj->getVeic_nItem()?$obj->getVeic_nItem():0).',';
		 $sql .= ($obj->getVeic_tpOp()?$obj->getVeic_tpOp():0).',';
		 $sql .= '\''.$obj->getVeic_chassi().'\',';
		 $sql .= '\''.$obj->getVeic_cCor().'\',';
		 $sql .= '\''.$obj->getVeic_xCor().'\',';
		 $sql .= '\''.$obj->getVeic_pot().'\',';
		 $sql .= '\''.$obj->getVeic_cilin().'\',';
		 $sql .= ($obj->getVeic_pesoL()?$obj->getVeic_pesoL():0).',';
		 $sql .= ($obj->getVeic_pesoB()?$obj->getVeic_pesoB():0).',';
		 $sql .= '\''.$obj->getVeic_nSerie().'\',';
		 $sql .= '\''.$obj->getVeic_tpComb().'\',';
		 $sql .= '\''.$obj->getVeic_nMotor().'\',';
		 $sql .= '\''.$obj->getVeic_cmt().'\',';
		 $sql .= '\''.$obj->getVeic_dist().'\',';
		 $sql .= ($obj->getVeic_anoMod()?$obj->getVeic_anoMod():0).',';
		 $sql .= ($obj->getVeic_anoFab()?$obj->getVeic_anoFab():0).',';
		 $sql .= ($obj->getVeic_tpPint()?$obj->getVeic_tpPint():0).',';
		 $sql .= ($obj->getVeic_tpVeic()?$obj->getVeic_tpVeic():0).',';
		 $sql .= '\''.$obj->getVeic_espVeic().'\',';
		 $sql .= '\''.$obj->getVeic_VIN().'\',';
		 $sql .= '\''.$obj->getVeic_condVeic().'\',';
		 $sql .= '\''.$obj->getVeic_cMod().'\',';
		 $sql .= '\''.$obj->getVeic_cCorDENATRAN().'\',';
		 $sql .= '\''.$obj->getVeic_lota().'\',';
		 $sql .= '\''.$obj->getVeic_tpRest().'\',';
		 $sql .= ($obj->getMed_nItem()?$obj->getMed_nItem():0).',';
		 $sql .= '\''.$obj->getMed_nLote().'\',';
		 $sql .= '\''.$obj->getMed_qLote().'\',';
		 $sql .= '\''.$obj->getMed_dFab().'\',';
		 $sql .= '\''.$obj->getMed_dVal().'\',';
		 $sql .= ($obj->getMed_vPMC()?$obj->getMed_vPMC():0).',';
		 $sql .= ($obj->getArma_nItem()?$obj->getArma_nItem():0).',';
		 $sql .= '\''.$obj->getArma_tpArma().'\',';
		 $sql .= '\''.$obj->getArma_nSerie().'\',';
		 $sql .= '\''.$obj->getArma_nCano().'\',';
		 $sql .= '\''.$obj->getArma_descr().'\',';
		 $sql .= ($obj->getComb_nItem()?$obj->getComb_nItem():0).',';
		 $sql .= '\''.$obj->getComb_cProdANP().'\',';
		 $sql .= '\''.$obj->getComb_pMixGN().'\',';
		 $sql .= '\''.$obj->getComb_codif().'\',';
		 $sql .= '\''.$obj->getComb_qTemp().'\',';
		 $sql .= '\''.$obj->getComb_ufCons().'\',';
		 $sql .= '\''.$obj->getComb_qBCProd().'\',';
		 $sql .= ($obj->getComb_vAliqProd()?$obj->getComb_vAliqProd():0).',';
		 $sql .= '\''.$obj->getComb_vCIDE().'\',';
		 $sql .= ($obj->getIcms_tipo()?$obj->getIcms_tipo():0).',';
		 $sql .= ($obj->getIcms_nItem()?$obj->getIcms_nItem():0).',';
		 $sql .= ($obj->getIcms_orig()?$obj->getIcms_orig():0).',';
		 $sql .= ($obj->getIcms_cst()?$obj->getIcms_cst():0).',';
		 $sql .= ($obj->getIcms_modBC()?$obj->getIcms_modBC():0).',';
		 $sql .= ($obj->getIcms_pRedBC()?$obj->getIcms_pRedBC():0).',';
		 $sql .= ($obj->getIcms_vBC()?$obj->getIcms_vBC():0).',';
		 $sql .= ($obj->getIcms_pICMS()?$obj->getIcms_pICMS():0).',';
		 $sql .= ($obj->getIcms_vICMS()?$obj->getIcms_vICMS():0).',';
		 $sql .= ($obj->getIcms_vICMSDeson()?$obj->getIcms_vICMSDeson():0).',';
		 $sql .= '\''.$obj->getIcms_motDesICMS().'\',';
		 $sql .= ($obj->getIcms_modBCST()?$obj->getIcms_modBCST():0).',';
		 $sql .= ($obj->getIcms_pMVAST()?$obj->getIcms_pMVAST():0).',';
		 $sql .= ($obj->getIcms_pRedBCST()?$obj->getIcms_pRedBCST():0).',';
		 $sql .= ($obj->getIcms_vBCST()?$obj->getIcms_vBCST():0).',';
		 $sql .= ($obj->getIcms_pICMSST()?$obj->getIcms_pICMSST():0).',';
		 $sql .= ($obj->getIcms_vICMSST()?$obj->getIcms_vICMSST():0).',';
		 $sql .= ($obj->getIcms_pDif()?$obj->getIcms_pDif():0).',';
		 $sql .= ($obj->getIcms_vICMSDif()?$obj->getIcms_vICMSDif():0).',';
		 $sql .= ($obj->getIcms_vICMSOp()?$obj->getIcms_vICMSOp():0).',';
		 $sql .= ($obj->getIcms_vBCSTRet()?$obj->getIcms_vBCSTRet():0).',';
		 $sql .= ($obj->getIcms_vICMSSTRet()?$obj->getIcms_vICMSSTRet():0).',';
		 $sql .= ($obj->getIcmssn_nItem()?$obj->getIcmssn_nItem():0).',';
		 $sql .= ($obj->getIcmssn_orig()?$obj->getIcmssn_orig():0).',';
		 $sql .= ($obj->getIcmssn_csosn()?$obj->getIcmssn_csosn():0).',';
		 $sql .= ($obj->getIcmssn_modBC()?$obj->getIcmssn_modBC():0).',';
		 $sql .= ($obj->getIcmssn_vBC()?$obj->getIcmssn_vBC():0).',';
		 $sql .= ($obj->getIcmssn_pRedBC()?$obj->getIcmssn_pRedBC():0).',';
		 $sql .= ($obj->getIcmssn_pICMS()?$obj->getIcmssn_pICMS():0).',';
		 $sql .= ($obj->getIcmssn_vICMS()?$obj->getIcmssn_vICMS():0).',';
		 $sql .= ($obj->getIcmssn_pCredSN()?$obj->getIcmssn_pCredSN():0).',';
		 $sql .= ($obj->getIcmssn_vCredICMSSN()?$obj->getIcmssn_vCredICMSSN():0).',';
		 $sql .= ($obj->getIcmssn_modBCST()?$obj->getIcmssn_modBCST():0).',';
		 $sql .= ($obj->getIcmssn_pMVAST()?$obj->getIcmssn_pMVAST():0).',';
		 $sql .= ($obj->getIcmssn_pRedBCST()?$obj->getIcmssn_pRedBCST():0).',';
		 $sql .= ($obj->getIcmssn_vBCST()?$obj->getIcmssn_vBCST():0).',';
		 $sql .= ($obj->getIcmssn_pICMSST()?$obj->getIcmssn_pICMSST():0).',';
		 $sql .= ($obj->getIcmssn_vICMSST()?$obj->getIcmssn_vICMSST():0).',';
		 $sql .= ($obj->getIcmssn_vBCSTRet()?$obj->getIcmssn_vBCSTRet():0).',';
		 $sql .= ($obj->getIcmssn_vICMSSTRet()?$obj->getIcmssn_vICMSSTRet():0).',';
		 $sql .= ($obj->getIcmsst_nItem()?$obj->getIcmsst_nItem():0).',';
		 $sql .= ($obj->getIcmsst_modBCST()?$obj->getIcmsst_modBCST():0).',';
		 $sql .= ($obj->getIcmsst_pMVAST()?$obj->getIcmsst_pMVAST():0).',';
		 $sql .= ($obj->getIcmsst_pRedBCST()?$obj->getIcmsst_pRedBCST():0).',';
		 $sql .= ($obj->getIcmsst_vBCST()?$obj->getIcmsst_vBCST():0).',';
		 $sql .= ($obj->getIcmsst_pICMSST()?$obj->getIcmsst_pICMSST():0).',';
		 $sql .= ($obj->getIcmsst_vICMSST()?$obj->getIcmsst_vICMSST():0).',';
		 $sql .= ($obj->getIcmsst_pBOCp()?$obj->getIcmsst_pBOCp():0).',';
		 $sql .= '\''.$obj->getIcmsst_UFST().'\',';
		 $sql .= ($obj->getIpi_tipo()?$obj->getIpi_tipo():0).',';
		 $sql .= ($obj->getIpi_nItem()?$obj->getIpi_nItem():0).',';
		 $sql .= ($obj->getIpi_cst()?$obj->getIpi_cst():0).',';
		 $sql .= ($obj->getIpi_clEnq()?$obj->getIpi_clEnq():0).',';
		 $sql .= '\''.$obj->getIpi_cnpjProd().'\',';
		 $sql .= '\''.$obj->getIpi_cSelo().'\',';
		 $sql .= '\''.$obj->getIpi_qSelo().'\',';
		 $sql .= ($obj->getIpi_cEnq()?$obj->getIpi_cEnq():0).',';
		 $sql .= ($obj->getIpi_vBC()?$obj->getIpi_vBC():0).',';
		 $sql .= ($obj->getIpi_pIPI()?$obj->getIpi_pIPI():0).',';
		 $sql .= '\''.$obj->getIpi_qUnid().'\',';
		 $sql .= ($obj->getIpi_vUnid()?$obj->getIpi_vUnid():0).',';
		 $sql .= ($obj->getIpi_hvIPI()?$obj->getIpi_hvIPI():0).',';
		 $sql .= ($obj->getPis_tipo()?$obj->getPis_tipo():0).',';
		 $sql .= ($obj->getPis_nItem()?$obj->getPis_nItem():0).',';
		 $sql .= ($obj->getPis_cst()?$obj->getPis_cst():0).',';
		 $sql .= ($obj->getPis_vBC()?$obj->getPis_vBC():0).',';
		 $sql .= ($obj->getPis_pPIS()?$obj->getPis_pPIS():0).',';
		 $sql .= ($obj->getPis_vPIS()?$obj->getPis_vPIS():0).',';
		 $sql .= ($obj->getPis_qBCProd()?$obj->getPis_qBCProd():0).',';
		 $sql .= ($obj->getPis_vAliqProd()?$obj->getPis_vAliqProd():0).',';
		 $sql .= ($obj->getPisst_nItem()?$obj->getPisst_nItem():0).',';
		 $sql .= ($obj->getPisst_vBC()?$obj->getPisst_vBC():0).',';
		 $sql .= ($obj->getPisst_pPIS()?$obj->getPisst_pPIS():0).',';
		 $sql .= ($obj->getPisst_qBCProd()?$obj->getPisst_qBCProd():0).',';
		 $sql .= ($obj->getPisst_vAliqProd()?$obj->getPisst_vAliqProd():0).',';
		 $sql .= ($obj->getPisst_vPIS()?$obj->getPisst_vPIS():0).',';
		 $sql .= ($obj->getCofins_tipo()?$obj->getCofins_tipo():0).',';
		 $sql .= ($obj->getCofins_nItem()?$obj->getCofins_nItem():0).',';
		 $sql .= ($obj->getCofins_cst()?$obj->getCofins_cst():0).',';
		 $sql .= ($obj->getCofins_vBC()?$obj->getCofins_vBC():0).',';
		 $sql .= ($obj->getCofins_pCOFINS()?$obj->getCofins_pCOFINS():0).',';
		 $sql .= ($obj->getCofins_vCOFINS()?$obj->getCofins_vCOFINS():0).',';
		 $sql .= ($obj->getCofins_qBCProd()?$obj->getCofins_qBCProd():0).',';
		 $sql .= ($obj->getCofins_vAliqProd()?$obj->getCofins_vAliqProd():0).',';
		 $sql .= ($obj->getCofinsst_nItem()?$obj->getCofinsst_nItem():0).',';
		 $sql .= ($obj->getCofinsst_vBC()?$obj->getCofinsst_vBC():0).',';
		 $sql .= ($obj->getCofinsst_pCOFINS()?$obj->getCofinsst_pCOFINS():0).',';
		 $sql .= ($obj->getCofinsst_qBCProd()?$obj->getCofinsst_qBCProd():0).',';
		 $sql .= ($obj->getCofinsst_vAliqProd()?$obj->getCofinsst_vAliqProd():0).',';
		 $sql .= ($obj->getCofinsst_vCOFINS()?$obj->getCofinsst_vCOFINS():0).',';
		 $sql .= ($obj->getDi_nItem()?$obj->getDi_nItem():0).',';
		 $sql .= ($obj->getDi_nDI()?$obj->getDi_nDI():0).',';
		 $sql .= ($obj->getDi_dDI()?$obj->getDi_dDI():0).',';
		 $sql .= '\''.$obj->getDi_xLocDesemb().'\',';
		 $sql .= '\''.$obj->getDi_UFDesemb().'\',';
		 $sql .= '\''.$obj->getDi_dDesemb().'\',';
		 $sql .= '\''.$obj->getDi_tpViaTransp().'\',';
		 $sql .= '\''.$obj->getDi_vAFRMM().'\',';
		 $sql .= '\''.$obj->getDi_tpIntermedio().'\',';
		 $sql .= '\''.$obj->getDi_CNPJ().'\',';
		 $sql .= '\''.$obj->getDi_UFTerceiro().'\',';
		 $sql .= '\''.$obj->getDi_cExportador().'\',';
		 $sql .= ($obj->getAdi_nItem()?$obj->getAdi_nItem():0).',';
		 $sql .= ($obj->getAdi_nDI()?$obj->getAdi_nDI():0).',';
		 $sql .= ($obj->getAdi_nAdicao()?$obj->getAdi_nAdicao():0).',';
		 $sql .= ($obj->getAdi_nSeqAdicC()?$obj->getAdi_nSeqAdicC():0).',';
		 $sql .= '\''.$obj->getAdi_cFabricante().'\',';
		 $sql .= ($obj->getAdi_vDescDI()?$obj->getAdi_vDescDI():0).',';
		 $sql .= '\''.$obj->getAdi_nDraw().'\',';
		 $sql .= ($obj->getImposto_nItem()?$obj->getImposto_nItem():0).',';
		 $sql .= ($obj->getImposto_vlrtrib()?$obj->getImposto_vlrtrib():0).',';
		 $sql .= ($obj->getNve_nItem()?$obj->getNve_nItem():0).',';
		 $sql .= '\''.$obj->getNve_texto().'\',';
		 $sql .= ($obj->getAII_nItem()?$obj->getAII_nItem():0).',';
		 $sql .= ($obj->getAII_vBC()?$obj->getAII_vBC():0).',';
		 $sql .= ($obj->getAII_vDespAdu()?$obj->getAII_vDespAdu():0).',';
		 $sql .= ($obj->getAII_vII()?$obj->getAII_vII():0).',';
		 $sql .= '\''.$obj->getAII_vIOF().'\',';
		 $sql .= ($obj->getInfad_nItem()?$obj->getInfad_nItem():0).',';
		 $sql .= '\''.$obj->getInfad_inform().'\',';
		 $sql .= ($obj->getInfadic_nItem()?$obj->getInfadic_nItem():0).',';
		 $sql .= ($obj->getInfadic_pDevol()?$obj->getInfadic_pDevol():0).',';
		 $sql .= ($obj->getInfadic_vIPIDevol()?$obj->getInfadic_vIPIDevol():0);
		 $sql .= ')'; 
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function update($obj){
		 $sql = 'UPDATE nfe_produtos SET '; 
		 $sql .= 'seq = '.($obj->getSeq()?$obj->getSeq():0).',';
		 $sql .= 'data_envio = '.'\''.$obj->getData_envio().'\' ,';
		 $sql .= 'mes_ano = '.($obj->getMes_ano()?$obj->getMes_ano():0).',';
		 $sql .= 'seq_nfe = '.($obj->getSeq_nfe()?$obj->getSeq_nfe():0).',';
		 $sql .= 'ident_chave = '.'\''.$obj->getIdent_chave().'\' ,';
		 $sql .= 'prod_tipo = '.($obj->getProd_tipo()?$obj->getProd_tipo():0).',';
		 $sql .= 'prod_nItem = '.($obj->getProd_nItem()?$obj->getProd_nItem():0).',';
		 $sql .= 'prod_cProd = '.($obj->getProd_cProd()?$obj->getProd_cProd():0).',';
		 $sql .= 'prod_cEAN = '.'\''.$obj->getProd_cEAN().'\' ,';
		 $sql .= 'prod_xProd = '.'\''.$obj->getProd_xProd().'\' ,';
		 $sql .= 'prod_NCM = '.($obj->getProd_NCM()?$obj->getProd_NCM():0).',';
		 $sql .= 'prod_NVE = '.'\''.$obj->getProd_NVE().'\' ,';
		 $sql .= 'prod_EXTIPI = '.'\''.$obj->getProd_EXTIPI().'\' ,';
		 $sql .= 'prod_CFOP = '.($obj->getProd_CFOP()?$obj->getProd_CFOP():0).',';
		 $sql .= 'prod_uCom = '.'\''.$obj->getProd_uCom().'\' ,';
		 $sql .= 'prod_qCom = '.'\''.$obj->getProd_qCom().'\' ,';
		 $sql .= 'prod_vUnCom = '.($obj->getProd_vUnCom()?$obj->getProd_vUnCom():0).',';
		 $sql .= 'prod_vProd = '.($obj->getProd_vProd()?$obj->getProd_vProd():0).',';
		 $sql .= 'prod_cEANTrib = '.'\''.$obj->getProd_cEANTrib().'\' ,';
		 $sql .= 'prod_uTrib = '.'\''.$obj->getProd_uTrib().'\' ,';
		 $sql .= 'prod_qTrib = '.($obj->getProd_qTrib()?$obj->getProd_qTrib():0).',';
		 $sql .= 'prod_vUnTrib = '.($obj->getProd_vUnTrib()?$obj->getProd_vUnTrib():0).',';
		 $sql .= 'prod_vFrete = '.($obj->getProd_vFrete()?$obj->getProd_vFrete():0).',';
		 $sql .= 'prod_vSeg = '.($obj->getProd_vSeg()?$obj->getProd_vSeg():0).',';
		 $sql .= 'prod_vDesc = '.($obj->getProd_vDesc()?$obj->getProd_vDesc():0).',';
		 $sql .= 'prod_vOutro = '.($obj->getProd_vOutro()?$obj->getProd_vOutro():0).',';
		 $sql .= 'prod_indTot = '.($obj->getProd_indTot()?$obj->getProd_indTot():0).',';
		 $sql .= 'prod_xPed = '.($obj->getProd_xPed()?$obj->getProd_xPed():0).',';
		 $sql .= 'prod_nItemPed = '.($obj->getProd_nItemPed()?$obj->getProd_nItemPed():0).',';
		 $sql .= 'prod_nFCI = '.'\''.$obj->getProd_nFCI().'\' ,';
		 $sql .= 'veic_nItem = '.($obj->getVeic_nItem()?$obj->getVeic_nItem():0).',';
		 $sql .= 'veic_tpOp = '.($obj->getVeic_tpOp()?$obj->getVeic_tpOp():0).',';
		 $sql .= 'veic_chassi = '.'\''.$obj->getVeic_chassi().'\' ,';
		 $sql .= 'veic_cCor = '.'\''.$obj->getVeic_cCor().'\' ,';
		 $sql .= 'veic_xCor = '.'\''.$obj->getVeic_xCor().'\' ,';
		 $sql .= 'veic_pot = '.'\''.$obj->getVeic_pot().'\' ,';
		 $sql .= 'veic_cilin = '.'\''.$obj->getVeic_cilin().'\' ,';
		 $sql .= 'veic_pesoL = '.($obj->getVeic_pesoL()?$obj->getVeic_pesoL():0).',';
		 $sql .= 'veic_pesoB = '.($obj->getVeic_pesoB()?$obj->getVeic_pesoB():0).',';
		 $sql .= 'veic_nSerie = '.'\''.$obj->getVeic_nSerie().'\' ,';
		 $sql .= 'veic_tpComb = '.'\''.$obj->getVeic_tpComb().'\' ,';
		 $sql .= 'veic_nMotor = '.'\''.$obj->getVeic_nMotor().'\' ,';
		 $sql .= 'veic_cmt = '.'\''.$obj->getVeic_cmt().'\' ,';
		 $sql .= 'veic_dist = '.'\''.$obj->getVeic_dist().'\' ,';
		 $sql .= 'veic_anoMod = '.($obj->getVeic_anoMod()?$obj->getVeic_anoMod():0).',';
		 $sql .= 'veic_anoFab = '.($obj->getVeic_anoFab()?$obj->getVeic_anoFab():0).',';
		 $sql .= 'veic_tpPint = '.($obj->getVeic_tpPint()?$obj->getVeic_tpPint():0).',';
		 $sql .= 'veic_tpVeic = '.($obj->getVeic_tpVeic()?$obj->getVeic_tpVeic():0).',';
		 $sql .= 'veic_espVeic = '.'\''.$obj->getVeic_espVeic().'\' ,';
		 $sql .= 'veic_VIN = '.'\''.$obj->getVeic_VIN().'\' ,';
		 $sql .= 'veic_condVeic = '.'\''.$obj->getVeic_condVeic().'\' ,';
		 $sql .= 'veic_cMod = '.'\''.$obj->getVeic_cMod().'\' ,';
		 $sql .= 'veic_cCorDENATRAN = '.'\''.$obj->getVeic_cCorDENATRAN().'\' ,';
		 $sql .= 'veic_lota = '.'\''.$obj->getVeic_lota().'\' ,';
		 $sql .= 'veic_tpRest = '.'\''.$obj->getVeic_tpRest().'\' ,';
		 $sql .= 'med_nItem = '.($obj->getMed_nItem()?$obj->getMed_nItem():0).',';
		 $sql .= 'med_nLote = '.'\''.$obj->getMed_nLote().'\' ,';
		 $sql .= 'med_qLote = '.'\''.$obj->getMed_qLote().'\' ,';
		 $sql .= 'med_dFab = '.'\''.$obj->getMed_dFab().'\' ,';
		 $sql .= 'med_dVal = '.'\''.$obj->getMed_dVal().'\' ,';
		 $sql .= 'med_vPMC = '.($obj->getMed_vPMC()?$obj->getMed_vPMC():0).',';
		 $sql .= 'arma_nItem = '.($obj->getArma_nItem()?$obj->getArma_nItem():0).',';
		 $sql .= 'arma_tpArma = '.'\''.$obj->getArma_tpArma().'\' ,';
		 $sql .= 'arma_nSerie = '.'\''.$obj->getArma_nSerie().'\' ,';
		 $sql .= 'arma_nCano = '.'\''.$obj->getArma_nCano().'\' ,';
		 $sql .= 'arma_descr = '.'\''.$obj->getArma_descr().'\' ,';
		 $sql .= 'comb_nItem = '.($obj->getComb_nItem()?$obj->getComb_nItem():0).',';
		 $sql .= 'comb_cProdANP = '.'\''.$obj->getComb_cProdANP().'\' ,';
		 $sql .= 'comb_pMixGN = '.'\''.$obj->getComb_pMixGN().'\' ,';
		 $sql .= 'comb_codif = '.'\''.$obj->getComb_codif().'\' ,';
		 $sql .= 'comb_qTemp = '.'\''.$obj->getComb_qTemp().'\' ,';
		 $sql .= 'comb_ufCons = '.'\''.$obj->getComb_ufCons().'\' ,';
		 $sql .= 'comb_qBCProd = '.'\''.$obj->getComb_qBCProd().'\' ,';
		 $sql .= 'comb_vAliqProd = '.($obj->getComb_vAliqProd()?$obj->getComb_vAliqProd():0).',';
		 $sql .= 'comb_vCIDE = '.'\''.$obj->getComb_vCIDE().'\' ,';
		 $sql .= 'icms_tipo = '.($obj->getIcms_tipo()?$obj->getIcms_tipo():0).',';
		 $sql .= 'icms_nItem = '.($obj->getIcms_nItem()?$obj->getIcms_nItem():0).',';
		 $sql .= 'icms_orig = '.($obj->getIcms_orig()?$obj->getIcms_orig():0).',';
		 $sql .= 'icms_cst = '.($obj->getIcms_cst()?$obj->getIcms_cst():0).',';
		 $sql .= 'icms_modBC = '.($obj->getIcms_modBC()?$obj->getIcms_modBC():0).',';
		 $sql .= 'icms_pRedBC = '.($obj->getIcms_pRedBC()?$obj->getIcms_pRedBC():0).',';
		 $sql .= 'icms_vBC = '.($obj->getIcms_vBC()?$obj->getIcms_vBC():0).',';
		 $sql .= 'icms_pICMS = '.($obj->getIcms_pICMS()?$obj->getIcms_pICMS():0).',';
		 $sql .= 'icms_vICMS = '.($obj->getIcms_vICMS()?$obj->getIcms_vICMS():0).',';
		 $sql .= 'icms_vICMSDeson = '.($obj->getIcms_vICMSDeson()?$obj->getIcms_vICMSDeson():0).',';
		 $sql .= 'icms_motDesICMS = '.'\''.$obj->getIcms_motDesICMS().'\' ,';
		 $sql .= 'icms_modBCST = '.($obj->getIcms_modBCST()?$obj->getIcms_modBCST():0).',';
		 $sql .= 'icms_pMVAST = '.($obj->getIcms_pMVAST()?$obj->getIcms_pMVAST():0).',';
		 $sql .= 'icms_pRedBCST = '.($obj->getIcms_pRedBCST()?$obj->getIcms_pRedBCST():0).',';
		 $sql .= 'icms_vBCST = '.($obj->getIcms_vBCST()?$obj->getIcms_vBCST():0).',';
		 $sql .= 'icms_pICMSST = '.($obj->getIcms_pICMSST()?$obj->getIcms_pICMSST():0).',';
		 $sql .= 'icms_vICMSST = '.($obj->getIcms_vICMSST()?$obj->getIcms_vICMSST():0).',';
		 $sql .= 'icms_pDif = '.($obj->getIcms_pDif()?$obj->getIcms_pDif():0).',';
		 $sql .= 'icms_vICMSDif = '.($obj->getIcms_vICMSDif()?$obj->getIcms_vICMSDif():0).',';
		 $sql .= 'icms_vICMSOp = '.($obj->getIcms_vICMSOp()?$obj->getIcms_vICMSOp():0).',';
		 $sql .= 'icms_vBCSTRet = '.($obj->getIcms_vBCSTRet()?$obj->getIcms_vBCSTRet():0).',';
		 $sql .= 'icms_vICMSSTRet = '.($obj->getIcms_vICMSSTRet()?$obj->getIcms_vICMSSTRet():0).',';
		 $sql .= 'icmssn_nItem = '.($obj->getIcmssn_nItem()?$obj->getIcmssn_nItem():0).',';
		 $sql .= 'icmssn_orig = '.($obj->getIcmssn_orig()?$obj->getIcmssn_orig():0).',';
		 $sql .= 'icmssn_csosn = '.($obj->getIcmssn_csosn()?$obj->getIcmssn_csosn():0).',';
		 $sql .= 'icmssn_modBC = '.($obj->getIcmssn_modBC()?$obj->getIcmssn_modBC():0).',';
		 $sql .= 'icmssn_vBC = '.($obj->getIcmssn_vBC()?$obj->getIcmssn_vBC():0).',';
		 $sql .= 'icmssn_pRedBC = '.($obj->getIcmssn_pRedBC()?$obj->getIcmssn_pRedBC():0).',';
		 $sql .= 'icmssn_pICMS = '.($obj->getIcmssn_pICMS()?$obj->getIcmssn_pICMS():0).',';
		 $sql .= 'icmssn_vICMS = '.($obj->getIcmssn_vICMS()?$obj->getIcmssn_vICMS():0).',';
		 $sql .= 'icmssn_pCredSN = '.($obj->getIcmssn_pCredSN()?$obj->getIcmssn_pCredSN():0).',';
		 $sql .= 'icmssn_vCredICMSSN = '.($obj->getIcmssn_vCredICMSSN()?$obj->getIcmssn_vCredICMSSN():0).',';
		 $sql .= 'icmssn_modBCST = '.($obj->getIcmssn_modBCST()?$obj->getIcmssn_modBCST():0).',';
		 $sql .= 'icmssn_pMVAST = '.($obj->getIcmssn_pMVAST()?$obj->getIcmssn_pMVAST():0).',';
		 $sql .= 'icmssn_pRedBCST = '.($obj->getIcmssn_pRedBCST()?$obj->getIcmssn_pRedBCST():0).',';
		 $sql .= 'icmssn_vBCST = '.($obj->getIcmssn_vBCST()?$obj->getIcmssn_vBCST():0).',';
		 $sql .= 'icmssn_pICMSST = '.($obj->getIcmssn_pICMSST()?$obj->getIcmssn_pICMSST():0).',';
		 $sql .= 'icmssn_vICMSST = '.($obj->getIcmssn_vICMSST()?$obj->getIcmssn_vICMSST():0).',';
		 $sql .= 'icmssn_vBCSTRet = '.($obj->getIcmssn_vBCSTRet()?$obj->getIcmssn_vBCSTRet():0).',';
		 $sql .= 'icmssn_vICMSSTRet = '.($obj->getIcmssn_vICMSSTRet()?$obj->getIcmssn_vICMSSTRet():0).',';
		 $sql .= 'icmsst_nItem = '.($obj->getIcmsst_nItem()?$obj->getIcmsst_nItem():0).',';
		 $sql .= 'icmsst_modBCST = '.($obj->getIcmsst_modBCST()?$obj->getIcmsst_modBCST():0).',';
		 $sql .= 'icmsst_pMVAST = '.($obj->getIcmsst_pMVAST()?$obj->getIcmsst_pMVAST():0).',';
		 $sql .= 'icmsst_pRedBCST = '.($obj->getIcmsst_pRedBCST()?$obj->getIcmsst_pRedBCST():0).',';
		 $sql .= 'icmsst_vBCST = '.($obj->getIcmsst_vBCST()?$obj->getIcmsst_vBCST():0).',';
		 $sql .= 'icmsst_pICMSST = '.($obj->getIcmsst_pICMSST()?$obj->getIcmsst_pICMSST():0).',';
		 $sql .= 'icmsst_vICMSST = '.($obj->getIcmsst_vICMSST()?$obj->getIcmsst_vICMSST():0).',';
		 $sql .= 'icmsst_pBOCp = '.($obj->getIcmsst_pBOCp()?$obj->getIcmsst_pBOCp():0).',';
		 $sql .= 'icmsst_UFST = '.'\''.$obj->getIcmsst_UFST().'\' ,';
		 $sql .= 'ipi_tipo = '.($obj->getIpi_tipo()?$obj->getIpi_tipo():0).',';
		 $sql .= 'ipi_nItem = '.($obj->getIpi_nItem()?$obj->getIpi_nItem():0).',';
		 $sql .= 'ipi_cst = '.($obj->getIpi_cst()?$obj->getIpi_cst():0).',';
		 $sql .= 'ipi_clEnq = '.($obj->getIpi_clEnq()?$obj->getIpi_clEnq():0).',';
		 $sql .= 'ipi_cnpjProd = '.'\''.$obj->getIpi_cnpjProd().'\' ,';
		 $sql .= 'ipi_cSelo = '.'\''.$obj->getIpi_cSelo().'\' ,';
		 $sql .= 'ipi_qSelo = '.'\''.$obj->getIpi_qSelo().'\' ,';
		 $sql .= 'ipi_cEnq = '.($obj->getIpi_cEnq()?$obj->getIpi_cEnq():0).',';
		 $sql .= 'ipi_vBC = '.($obj->getIpi_vBC()?$obj->getIpi_vBC():0).',';
		 $sql .= 'ipi_pIPI = '.($obj->getIpi_pIPI()?$obj->getIpi_pIPI():0).',';
		 $sql .= 'ipi_qUnid = '.'\''.$obj->getIpi_qUnid().'\' ,';
		 $sql .= 'ipi_vUnid = '.($obj->getIpi_vUnid()?$obj->getIpi_vUnid():0).',';
		 $sql .= 'ipi_hvIPI = '.($obj->getIpi_hvIPI()?$obj->getIpi_hvIPI():0).',';
		 $sql .= 'pis_tipo = '.($obj->getPis_tipo()?$obj->getPis_tipo():0).',';
		 $sql .= 'pis_nItem = '.($obj->getPis_nItem()?$obj->getPis_nItem():0).',';
		 $sql .= 'pis_cst = '.($obj->getPis_cst()?$obj->getPis_cst():0).',';
		 $sql .= 'pis_vBC = '.($obj->getPis_vBC()?$obj->getPis_vBC():0).',';
		 $sql .= 'pis_pPIS = '.($obj->getPis_pPIS()?$obj->getPis_pPIS():0).',';
		 $sql .= 'pis_vPIS = '.($obj->getPis_vPIS()?$obj->getPis_vPIS():0).',';
		 $sql .= 'pis_qBCProd = '.($obj->getPis_qBCProd()?$obj->getPis_qBCProd():0).',';
		 $sql .= 'pis_vAliqProd = '.($obj->getPis_vAliqProd()?$obj->getPis_vAliqProd():0).',';
		 $sql .= 'pisst_nItem = '.($obj->getPisst_nItem()?$obj->getPisst_nItem():0).',';
		 $sql .= 'pisst_vBC = '.($obj->getPisst_vBC()?$obj->getPisst_vBC():0).',';
		 $sql .= 'pisst_pPIS = '.($obj->getPisst_pPIS()?$obj->getPisst_pPIS():0).',';
		 $sql .= 'pisst_qBCProd = '.($obj->getPisst_qBCProd()?$obj->getPisst_qBCProd():0).',';
		 $sql .= 'pisst_vAliqProd = '.($obj->getPisst_vAliqProd()?$obj->getPisst_vAliqProd():0).',';
		 $sql .= 'pisst_vPIS = '.($obj->getPisst_vPIS()?$obj->getPisst_vPIS():0).',';
		 $sql .= 'cofins_tipo = '.($obj->getCofins_tipo()?$obj->getCofins_tipo():0).',';
		 $sql .= 'cofins_nItem = '.($obj->getCofins_nItem()?$obj->getCofins_nItem():0).',';
		 $sql .= 'cofins_cst = '.($obj->getCofins_cst()?$obj->getCofins_cst():0).',';
		 $sql .= 'cofins_vBC = '.($obj->getCofins_vBC()?$obj->getCofins_vBC():0).',';
		 $sql .= 'cofins_pCOFINS = '.($obj->getCofins_pCOFINS()?$obj->getCofins_pCOFINS():0).',';
		 $sql .= 'cofins_vCOFINS = '.($obj->getCofins_vCOFINS()?$obj->getCofins_vCOFINS():0).',';
		 $sql .= 'cofins_qBCProd = '.($obj->getCofins_qBCProd()?$obj->getCofins_qBCProd():0).',';
		 $sql .= 'cofins_vAliqProd = '.($obj->getCofins_vAliqProd()?$obj->getCofins_vAliqProd():0).',';
		 $sql .= 'cofinsst_nItem = '.($obj->getCofinsst_nItem()?$obj->getCofinsst_nItem():0).',';
		 $sql .= 'cofinsst_vBC = '.($obj->getCofinsst_vBC()?$obj->getCofinsst_vBC():0).',';
		 $sql .= 'cofinsst_pCOFINS = '.($obj->getCofinsst_pCOFINS()?$obj->getCofinsst_pCOFINS():0).',';
		 $sql .= 'cofinsst_qBCProd = '.($obj->getCofinsst_qBCProd()?$obj->getCofinsst_qBCProd():0).',';
		 $sql .= 'cofinsst_vAliqProd = '.($obj->getCofinsst_vAliqProd()?$obj->getCofinsst_vAliqProd():0).',';
		 $sql .= 'cofinsst_vCOFINS = '.($obj->getCofinsst_vCOFINS()?$obj->getCofinsst_vCOFINS():0).',';
		 $sql .= 'di_nItem = '.($obj->getDi_nItem()?$obj->getDi_nItem():0).',';
		 $sql .= 'di_nDI = '.($obj->getDi_nDI()?$obj->getDi_nDI():0).',';
		 $sql .= 'di_dDI = '.($obj->getDi_dDI()?$obj->getDi_dDI():0).',';
		 $sql .= 'di_xLocDesemb = '.'\''.$obj->getDi_xLocDesemb().'\' ,';
		 $sql .= 'di_UFDesemb = '.'\''.$obj->getDi_UFDesemb().'\' ,';
		 $sql .= 'di_dDesemb = '.'\''.$obj->getDi_dDesemb().'\' ,';
		 $sql .= 'di_tpViaTransp = '.'\''.$obj->getDi_tpViaTransp().'\' ,';
		 $sql .= 'di_vAFRMM = '.'\''.$obj->getDi_vAFRMM().'\' ,';
		 $sql .= 'di_tpIntermedio = '.'\''.$obj->getDi_tpIntermedio().'\' ,';
		 $sql .= 'di_CNPJ = '.'\''.$obj->getDi_CNPJ().'\' ,';
		 $sql .= 'di_UFTerceiro = '.'\''.$obj->getDi_UFTerceiro().'\' ,';
		 $sql .= 'di_cExportador = '.'\''.$obj->getDi_cExportador().'\' ,';
		 $sql .= 'adi_nItem = '.($obj->getAdi_nItem()?$obj->getAdi_nItem():0).',';
		 $sql .= 'adi_nDI = '.($obj->getAdi_nDI()?$obj->getAdi_nDI():0).',';
		 $sql .= 'adi_nAdicao = '.($obj->getAdi_nAdicao()?$obj->getAdi_nAdicao():0).',';
		 $sql .= 'adi_nSeqAdicC = '.($obj->getAdi_nSeqAdicC()?$obj->getAdi_nSeqAdicC():0).',';
		 $sql .= 'adi_cFabricante = '.'\''.$obj->getAdi_cFabricante().'\' ,';
		 $sql .= 'adi_vDescDI = '.($obj->getAdi_vDescDI()?$obj->getAdi_vDescDI():0).',';
		 $sql .= 'adi_nDraw = '.'\''.$obj->getAdi_nDraw().'\' ,';
		 $sql .= 'imposto_nItem = '.($obj->getImposto_nItem()?$obj->getImposto_nItem():0).',';
		 $sql .= 'imposto_vlrtrib = '.($obj->getImposto_vlrtrib()?$obj->getImposto_vlrtrib():0).',';
		 $sql .= 'nve_nItem = '.($obj->getNve_nItem()?$obj->getNve_nItem():0).',';
		 $sql .= 'nve_texto = '.'\''.$obj->getNve_texto().'\' ,';
		 $sql .= 'aII_nItem = '.($obj->getAII_nItem()?$obj->getAII_nItem():0).',';
		 $sql .= 'aII_vBC = '.($obj->getAII_vBC()?$obj->getAII_vBC():0).',';
		 $sql .= 'aII_vDespAdu = '.($obj->getAII_vDespAdu()?$obj->getAII_vDespAdu():0).',';
		 $sql .= 'aII_vII = '.($obj->getAII_vII()?$obj->getAII_vII():0).',';
		 $sql .= 'aII_vIOF = '.'\''.$obj->getAII_vIOF().'\' ,';
		 $sql .= 'infad_nItem = '.($obj->getInfad_nItem()?$obj->getInfad_nItem():0).',';
		 $sql .= 'infad_inform = '.'\''.$obj->getInfad_inform().'\' ,';
		 $sql .= 'infadic_nItem = '.($obj->getInfadic_nItem()?$obj->getInfadic_nItem():0).',';
		 $sql .= 'infadic_pDevol = '.($obj->getInfadic_pDevol()?$obj->getInfadic_pDevol():0).',';
		 $sql .= 'infadic_vIPIDevol = '.($obj->getInfadic_vIPIDevol()?$obj->getInfadic_vIPIDevol():0);
		 $sql .= ' WHERE seq = '.$obj->getSeq();
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM nfe_produtos WHERE seq = '.$obj->getSeq();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM nfe_produtos WHERE 1=1 '; 
		if ($obj->getSeq()) { 
			$sql .= " AND seq = '".$obj->getSeq()."'";
		} 
		if ($obj->getData_envio()) { 
			$sql .= " AND data_envio = '".$obj->getData_envio()."'";
		} 
		if ($obj->getMes_ano()) { 
			$sql .= " AND mes_ano = '".$obj->getMes_ano()."'";
		} 
		if ($obj->getSeq_nfe()) { 
			$sql .= " AND seq_nfe = '".$obj->getSeq_nfe()."'";
		} 
		if ($obj->getIdent_chave()) { 
			$sql .= " AND ident_chave = '".$obj->getIdent_chave()."'";
		} 
		if ($obj->getProd_tipo()) { 
			$sql .= " AND prod_tipo = '".$obj->getProd_tipo()."'";
		} 
		if ($obj->getProd_nItem()) { 
			$sql .= " AND prod_nItem = '".$obj->getProd_nItem()."'";
		} 
		if ($obj->getProd_cProd()) { 
			$sql .= " AND prod_cProd = '".$obj->getProd_cProd()."'";
		} 
		if ($obj->getProd_cEAN()) { 
			$sql .= " AND upper(prod_cEAN)  like ('%".strtoupper($obj->getProd_cEAN())."%')";
		} 
		if ($obj->getProd_xProd()) { 
			$sql .= " AND upper(prod_xProd)  like ('%".strtoupper($obj->getProd_xProd())."%')";
		} 
		if ($obj->getProd_NCM()) { 
			$sql .= " AND prod_NCM = '".$obj->getProd_NCM()."'";
		} 
		if ($obj->getProd_NVE()) { 
			$sql .= " AND upper(prod_NVE)  like ('%".strtoupper($obj->getProd_NVE())."%')";
		} 
		if ($obj->getProd_EXTIPI()) { 
			$sql .= " AND upper(prod_EXTIPI)  like ('%".strtoupper($obj->getProd_EXTIPI())."%')";
		} 
		if ($obj->getProd_CFOP()) { 
			$sql .= " AND prod_CFOP = '".$obj->getProd_CFOP()."'";
		} 
		if ($obj->getProd_uCom()) { 
			$sql .= " AND upper(prod_uCom)  like ('%".strtoupper($obj->getProd_uCom())."%')";
		} 
		if ($obj->getProd_qCom()) { 
			$sql .= " AND upper(prod_qCom)  like ('%".strtoupper($obj->getProd_qCom())."%')";
		} 
		if ($obj->getProd_vUnCom()) { 
			$sql .= " AND prod_vUnCom = '".$obj->getProd_vUnCom()."'";
		} 
		if ($obj->getProd_vProd()) { 
			$sql .= " AND prod_vProd = '".$obj->getProd_vProd()."'";
		} 
		if ($obj->getProd_cEANTrib()) { 
			$sql .= " AND upper(prod_cEANTrib)  like ('%".strtoupper($obj->getProd_cEANTrib())."%')";
		} 
		if ($obj->getProd_uTrib()) { 
			$sql .= " AND upper(prod_uTrib)  like ('%".strtoupper($obj->getProd_uTrib())."%')";
		} 
		if ($obj->getProd_qTrib()) { 
			$sql .= " AND prod_qTrib = '".$obj->getProd_qTrib()."'";
		} 
		if ($obj->getProd_vUnTrib()) { 
			$sql .= " AND prod_vUnTrib = '".$obj->getProd_vUnTrib()."'";
		} 
		if ($obj->getProd_vFrete()) { 
			$sql .= " AND prod_vFrete = '".$obj->getProd_vFrete()."'";
		} 
		if ($obj->getProd_vSeg()) { 
			$sql .= " AND prod_vSeg = '".$obj->getProd_vSeg()."'";
		} 
		if ($obj->getProd_vDesc()) { 
			$sql .= " AND prod_vDesc = '".$obj->getProd_vDesc()."'";
		} 
		if ($obj->getProd_vOutro()) { 
			$sql .= " AND prod_vOutro = '".$obj->getProd_vOutro()."'";
		} 
		if ($obj->getProd_indTot()) { 
			$sql .= " AND prod_indTot = '".$obj->getProd_indTot()."'";
		} 
		if ($obj->getProd_xPed()) { 
			$sql .= " AND prod_xPed = '".$obj->getProd_xPed()."'";
		} 
		if ($obj->getProd_nItemPed()) { 
			$sql .= " AND prod_nItemPed = '".$obj->getProd_nItemPed()."'";
		} 
		if ($obj->getProd_nFCI()) { 
			$sql .= " AND upper(prod_nFCI)  like ('%".strtoupper($obj->getProd_nFCI())."%')";
		} 
		if ($obj->getVeic_nItem()) { 
			$sql .= " AND veic_nItem = '".$obj->getVeic_nItem()."'";
		} 
		if ($obj->getVeic_tpOp()) { 
			$sql .= " AND veic_tpOp = '".$obj->getVeic_tpOp()."'";
		} 
		if ($obj->getVeic_chassi()) { 
			$sql .= " AND upper(veic_chassi)  like ('%".strtoupper($obj->getVeic_chassi())."%')";
		} 
		if ($obj->getVeic_cCor()) { 
			$sql .= " AND upper(veic_cCor)  like ('%".strtoupper($obj->getVeic_cCor())."%')";
		} 
		if ($obj->getVeic_xCor()) { 
			$sql .= " AND upper(veic_xCor)  like ('%".strtoupper($obj->getVeic_xCor())."%')";
		} 
		if ($obj->getVeic_pot()) { 
			$sql .= " AND upper(veic_pot)  like ('%".strtoupper($obj->getVeic_pot())."%')";
		} 
		if ($obj->getVeic_cilin()) { 
			$sql .= " AND upper(veic_cilin)  like ('%".strtoupper($obj->getVeic_cilin())."%')";
		} 
		if ($obj->getVeic_pesoL()) { 
			$sql .= " AND veic_pesoL = '".$obj->getVeic_pesoL()."'";
		} 
		if ($obj->getVeic_pesoB()) { 
			$sql .= " AND veic_pesoB = '".$obj->getVeic_pesoB()."'";
		} 
		if ($obj->getVeic_nSerie()) { 
			$sql .= " AND upper(veic_nSerie)  like ('%".strtoupper($obj->getVeic_nSerie())."%')";
		} 
		if ($obj->getVeic_tpComb()) { 
			$sql .= " AND upper(veic_tpComb)  like ('%".strtoupper($obj->getVeic_tpComb())."%')";
		} 
		if ($obj->getVeic_nMotor()) { 
			$sql .= " AND upper(veic_nMotor)  like ('%".strtoupper($obj->getVeic_nMotor())."%')";
		} 
		if ($obj->getVeic_cmt()) { 
			$sql .= " AND upper(veic_cmt)  like ('%".strtoupper($obj->getVeic_cmt())."%')";
		} 
		if ($obj->getVeic_dist()) { 
			$sql .= " AND upper(veic_dist)  like ('%".strtoupper($obj->getVeic_dist())."%')";
		} 
		if ($obj->getVeic_anoMod()) { 
			$sql .= " AND veic_anoMod = '".$obj->getVeic_anoMod()."'";
		} 
		if ($obj->getVeic_anoFab()) { 
			$sql .= " AND veic_anoFab = '".$obj->getVeic_anoFab()."'";
		} 
		if ($obj->getVeic_tpPint()) { 
			$sql .= " AND veic_tpPint = '".$obj->getVeic_tpPint()."'";
		} 
		if ($obj->getVeic_tpVeic()) { 
			$sql .= " AND veic_tpVeic = '".$obj->getVeic_tpVeic()."'";
		} 
		if ($obj->getVeic_espVeic()) { 
			$sql .= " AND upper(veic_espVeic)  like ('%".strtoupper($obj->getVeic_espVeic())."%')";
		} 
		if ($obj->getVeic_VIN()) { 
			$sql .= " AND upper(veic_VIN)  like ('%".strtoupper($obj->getVeic_VIN())."%')";
		} 
		if ($obj->getVeic_condVeic()) { 
			$sql .= " AND upper(veic_condVeic)  like ('%".strtoupper($obj->getVeic_condVeic())."%')";
		} 
		if ($obj->getVeic_cMod()) { 
			$sql .= " AND upper(veic_cMod)  like ('%".strtoupper($obj->getVeic_cMod())."%')";
		} 
		if ($obj->getVeic_cCorDENATRAN()) { 
			$sql .= " AND upper(veic_cCorDENATRAN)  like ('%".strtoupper($obj->getVeic_cCorDENATRAN())."%')";
		} 
		if ($obj->getVeic_lota()) { 
			$sql .= " AND upper(veic_lota)  like ('%".strtoupper($obj->getVeic_lota())."%')";
		} 
		if ($obj->getVeic_tpRest()) { 
			$sql .= " AND upper(veic_tpRest)  like ('%".strtoupper($obj->getVeic_tpRest())."%')";
		} 
		if ($obj->getMed_nItem()) { 
			$sql .= " AND med_nItem = '".$obj->getMed_nItem()."'";
		} 
		if ($obj->getMed_nLote()) { 
			$sql .= " AND med_nLote = '".$obj->getMed_nLote()."'";
		} 
		if ($obj->getMed_qLote()) { 
			$sql .= " AND upper(med_qLote)  like ('%".strtoupper($obj->getMed_qLote())."%')";
		} 
		if ($obj->getMed_dFab()) { 
			$sql .= " AND med_dFab = '".$obj->getMed_dFab()."'";
		} 
		if ($obj->getMed_dVal()) { 
			$sql .= " AND med_dVal = '".$obj->getMed_dVal()."'";
		} 
		if ($obj->getMed_vPMC()) { 
			$sql .= " AND med_vPMC = '".$obj->getMed_vPMC()."'";
		} 
		if ($obj->getArma_nItem()) { 
			$sql .= " AND arma_nItem = '".$obj->getArma_nItem()."'";
		} 
		if ($obj->getArma_tpArma()) { 
			$sql .= " AND upper(arma_tpArma)  like ('%".strtoupper($obj->getArma_tpArma())."%')";
		} 
		if ($obj->getArma_nSerie()) { 
			$sql .= " AND upper(arma_nSerie)  like ('%".strtoupper($obj->getArma_nSerie())."%')";
		} 
		if ($obj->getArma_nCano()) { 
			$sql .= " AND upper(arma_nCano)  like ('%".strtoupper($obj->getArma_nCano())."%')";
		} 
		if ($obj->getArma_descr()) { 
			$sql .= " AND upper(arma_descr)  like ('%".strtoupper($obj->getArma_descr())."%')";
		} 
		if ($obj->getComb_nItem()) { 
			$sql .= " AND comb_nItem = '".$obj->getComb_nItem()."'";
		} 
		if ($obj->getComb_cProdANP()) { 
			$sql .= " AND upper(comb_cProdANP)  like ('%".strtoupper($obj->getComb_cProdANP())."%')";
		} 
		if ($obj->getComb_pMixGN()) { 
			$sql .= " AND upper(comb_pMixGN)  like ('%".strtoupper($obj->getComb_pMixGN())."%')";
		} 
		if ($obj->getComb_codif()) { 
			$sql .= " AND upper(comb_codif)  like ('%".strtoupper($obj->getComb_codif())."%')";
		} 
		if ($obj->getComb_qTemp()) { 
			$sql .= " AND upper(comb_qTemp)  like ('%".strtoupper($obj->getComb_qTemp())."%')";
		} 
		if ($obj->getComb_ufCons()) { 
			$sql .= " AND upper(comb_ufCons)  like ('%".strtoupper($obj->getComb_ufCons())."%')";
		} 
		if ($obj->getComb_qBCProd()) { 
			$sql .= " AND upper(comb_qBCProd)  like ('%".strtoupper($obj->getComb_qBCProd())."%')";
		} 
		if ($obj->getComb_vAliqProd()) { 
			$sql .= " AND comb_vAliqProd = '".$obj->getComb_vAliqProd()."'";
		} 
		if ($obj->getComb_vCIDE()) { 
			$sql .= " AND upper(comb_vCIDE)  like ('%".strtoupper($obj->getComb_vCIDE())."%')";
		} 
		if ($obj->getIcms_tipo()) { 
			$sql .= " AND icms_tipo = '".$obj->getIcms_tipo()."'";
		} 
		if ($obj->getIcms_nItem()) { 
			$sql .= " AND icms_nItem = '".$obj->getIcms_nItem()."'";
		} 
		if ($obj->getIcms_orig()) { 
			$sql .= " AND icms_orig = '".$obj->getIcms_orig()."'";
		} 
		if ($obj->getIcms_cst()) { 
			$sql .= " AND icms_cst = '".$obj->getIcms_cst()."'";
		} 
		if ($obj->getIcms_modBC()) { 
			$sql .= " AND icms_modBC = '".$obj->getIcms_modBC()."'";
		} 
		if ($obj->getIcms_pRedBC()) { 
			$sql .= " AND icms_pRedBC = '".$obj->getIcms_pRedBC()."'";
		} 
		if ($obj->getIcms_vBC()) { 
			$sql .= " AND icms_vBC = '".$obj->getIcms_vBC()."'";
		} 
		if ($obj->getIcms_pICMS()) { 
			$sql .= " AND icms_pICMS = '".$obj->getIcms_pICMS()."'";
		} 
		if ($obj->getIcms_vICMS()) { 
			$sql .= " AND icms_vICMS = '".$obj->getIcms_vICMS()."'";
		} 
		if ($obj->getIcms_vICMSDeson()) { 
			$sql .= " AND icms_vICMSDeson = '".$obj->getIcms_vICMSDeson()."'";
		} 
		if ($obj->getIcms_motDesICMS()) { 
			$sql .= " AND upper(icms_motDesICMS)  like ('%".strtoupper($obj->getIcms_motDesICMS())."%')";
		} 
		if ($obj->getIcms_modBCST()) { 
			$sql .= " AND icms_modBCST = '".$obj->getIcms_modBCST()."'";
		} 
		if ($obj->getIcms_pMVAST()) { 
			$sql .= " AND icms_pMVAST = '".$obj->getIcms_pMVAST()."'";
		} 
		if ($obj->getIcms_pRedBCST()) { 
			$sql .= " AND icms_pRedBCST = '".$obj->getIcms_pRedBCST()."'";
		} 
		if ($obj->getIcms_vBCST()) { 
			$sql .= " AND icms_vBCST = '".$obj->getIcms_vBCST()."'";
		} 
		if ($obj->getIcms_pICMSST()) { 
			$sql .= " AND icms_pICMSST = '".$obj->getIcms_pICMSST()."'";
		} 
		if ($obj->getIcms_vICMSST()) { 
			$sql .= " AND icms_vICMSST = '".$obj->getIcms_vICMSST()."'";
		} 
		if ($obj->getIcms_pDif()) { 
			$sql .= " AND icms_pDif = '".$obj->getIcms_pDif()."'";
		} 
		if ($obj->getIcms_vICMSDif()) { 
			$sql .= " AND icms_vICMSDif = '".$obj->getIcms_vICMSDif()."'";
		} 
		if ($obj->getIcms_vICMSOp()) { 
			$sql .= " AND icms_vICMSOp = '".$obj->getIcms_vICMSOp()."'";
		} 
		if ($obj->getIcms_vBCSTRet()) { 
			$sql .= " AND icms_vBCSTRet = '".$obj->getIcms_vBCSTRet()."'";
		} 
		if ($obj->getIcms_vICMSSTRet()) { 
			$sql .= " AND icms_vICMSSTRet = '".$obj->getIcms_vICMSSTRet()."'";
		} 
		if ($obj->getIcmssn_nItem()) { 
			$sql .= " AND icmssn_nItem = '".$obj->getIcmssn_nItem()."'";
		} 
		if ($obj->getIcmssn_orig()) { 
			$sql .= " AND icmssn_orig = '".$obj->getIcmssn_orig()."'";
		} 
		if ($obj->getIcmssn_csosn()) { 
			$sql .= " AND icmssn_csosn = '".$obj->getIcmssn_csosn()."'";
		} 
		if ($obj->getIcmssn_modBC()) { 
			$sql .= " AND icmssn_modBC = '".$obj->getIcmssn_modBC()."'";
		} 
		if ($obj->getIcmssn_vBC()) { 
			$sql .= " AND icmssn_vBC = '".$obj->getIcmssn_vBC()."'";
		} 
		if ($obj->getIcmssn_pRedBC()) { 
			$sql .= " AND icmssn_pRedBC = '".$obj->getIcmssn_pRedBC()."'";
		} 
		if ($obj->getIcmssn_pICMS()) { 
			$sql .= " AND icmssn_pICMS = '".$obj->getIcmssn_pICMS()."'";
		} 
		if ($obj->getIcmssn_vICMS()) { 
			$sql .= " AND icmssn_vICMS = '".$obj->getIcmssn_vICMS()."'";
		} 
		if ($obj->getIcmssn_pCredSN()) { 
			$sql .= " AND icmssn_pCredSN = '".$obj->getIcmssn_pCredSN()."'";
		} 
		if ($obj->getIcmssn_vCredICMSSN()) { 
			$sql .= " AND icmssn_vCredICMSSN = '".$obj->getIcmssn_vCredICMSSN()."'";
		} 
		if ($obj->getIcmssn_modBCST()) { 
			$sql .= " AND icmssn_modBCST = '".$obj->getIcmssn_modBCST()."'";
		} 
		if ($obj->getIcmssn_pMVAST()) { 
			$sql .= " AND icmssn_pMVAST = '".$obj->getIcmssn_pMVAST()."'";
		} 
		if ($obj->getIcmssn_pRedBCST()) { 
			$sql .= " AND icmssn_pRedBCST = '".$obj->getIcmssn_pRedBCST()."'";
		} 
		if ($obj->getIcmssn_vBCST()) { 
			$sql .= " AND icmssn_vBCST = '".$obj->getIcmssn_vBCST()."'";
		} 
		if ($obj->getIcmssn_pICMSST()) { 
			$sql .= " AND icmssn_pICMSST = '".$obj->getIcmssn_pICMSST()."'";
		} 
		if ($obj->getIcmssn_vICMSST()) { 
			$sql .= " AND icmssn_vICMSST = '".$obj->getIcmssn_vICMSST()."'";
		} 
		if ($obj->getIcmssn_vBCSTRet()) { 
			$sql .= " AND icmssn_vBCSTRet = '".$obj->getIcmssn_vBCSTRet()."'";
		} 
		if ($obj->getIcmssn_vICMSSTRet()) { 
			$sql .= " AND icmssn_vICMSSTRet = '".$obj->getIcmssn_vICMSSTRet()."'";
		} 
		if ($obj->getIcmsst_nItem()) { 
			$sql .= " AND icmsst_nItem = '".$obj->getIcmsst_nItem()."'";
		} 
		if ($obj->getIcmsst_modBCST()) { 
			$sql .= " AND icmsst_modBCST = '".$obj->getIcmsst_modBCST()."'";
		} 
		if ($obj->getIcmsst_pMVAST()) { 
			$sql .= " AND icmsst_pMVAST = '".$obj->getIcmsst_pMVAST()."'";
		} 
		if ($obj->getIcmsst_pRedBCST()) { 
			$sql .= " AND icmsst_pRedBCST = '".$obj->getIcmsst_pRedBCST()."'";
		} 
		if ($obj->getIcmsst_vBCST()) { 
			$sql .= " AND icmsst_vBCST = '".$obj->getIcmsst_vBCST()."'";
		} 
		if ($obj->getIcmsst_pICMSST()) { 
			$sql .= " AND icmsst_pICMSST = '".$obj->getIcmsst_pICMSST()."'";
		} 
		if ($obj->getIcmsst_vICMSST()) { 
			$sql .= " AND icmsst_vICMSST = '".$obj->getIcmsst_vICMSST()."'";
		} 
		if ($obj->getIcmsst_pBOCp()) { 
			$sql .= " AND icmsst_pBOCp = '".$obj->getIcmsst_pBOCp()."'";
		} 
		if ($obj->getIcmsst_UFST()) { 
			$sql .= " AND upper(icmsst_UFST)  like ('%".strtoupper($obj->getIcmsst_UFST())."%')";
		} 
		if ($obj->getIpi_tipo()) { 
			$sql .= " AND ipi_tipo = '".$obj->getIpi_tipo()."'";
		} 
		if ($obj->getIpi_nItem()) { 
			$sql .= " AND ipi_nItem = '".$obj->getIpi_nItem()."'";
		} 
		if ($obj->getIpi_cst()) { 
			$sql .= " AND ipi_cst = '".$obj->getIpi_cst()."'";
		} 
		if ($obj->getIpi_clEnq()) { 
			$sql .= " AND ipi_clEnq = '".$obj->getIpi_clEnq()."'";
		} 
		if ($obj->getIpi_cnpjProd()) { 
			$sql .= " AND ipi_cnpjProd = '".$obj->getIpi_cnpjProd()."'";
		} 
		if ($obj->getIpi_cSelo()) { 
			$sql .= " AND upper(ipi_cSelo)  like ('%".strtoupper($obj->getIpi_cSelo())."%')";
		} 
		if ($obj->getIpi_qSelo()) { 
			$sql .= " AND upper(ipi_qSelo)  like ('%".strtoupper($obj->getIpi_qSelo())."%')";
		} 
		if ($obj->getIpi_cEnq()) { 
			$sql .= " AND ipi_cEnq = '".$obj->getIpi_cEnq()."'";
		} 
		if ($obj->getIpi_vBC()) { 
			$sql .= " AND ipi_vBC = '".$obj->getIpi_vBC()."'";
		} 
		if ($obj->getIpi_pIPI()) { 
			$sql .= " AND ipi_pIPI = '".$obj->getIpi_pIPI()."'";
		} 
		if ($obj->getIpi_qUnid()) { 
			$sql .= " AND upper(ipi_qUnid)  like ('%".strtoupper($obj->getIpi_qUnid())."%')";
		} 
		if ($obj->getIpi_vUnid()) { 
			$sql .= " AND ipi_vUnid = '".$obj->getIpi_vUnid()."'";
		} 
		if ($obj->getIpi_hvIPI()) { 
			$sql .= " AND ipi_hvIPI = '".$obj->getIpi_hvIPI()."'";
		} 
		if ($obj->getPis_tipo()) { 
			$sql .= " AND pis_tipo = '".$obj->getPis_tipo()."'";
		} 
		if ($obj->getPis_nItem()) { 
			$sql .= " AND pis_nItem = '".$obj->getPis_nItem()."'";
		} 
		if ($obj->getPis_cst()) { 
			$sql .= " AND pis_cst = '".$obj->getPis_cst()."'";
		} 
		if ($obj->getPis_vBC()) { 
			$sql .= " AND pis_vBC = '".$obj->getPis_vBC()."'";
		} 
		if ($obj->getPis_pPIS()) { 
			$sql .= " AND pis_pPIS = '".$obj->getPis_pPIS()."'";
		} 
		if ($obj->getPis_vPIS()) { 
			$sql .= " AND pis_vPIS = '".$obj->getPis_vPIS()."'";
		} 
		if ($obj->getPis_qBCProd()) { 
			$sql .= " AND pis_qBCProd = '".$obj->getPis_qBCProd()."'";
		} 
		if ($obj->getPis_vAliqProd()) { 
			$sql .= " AND pis_vAliqProd = '".$obj->getPis_vAliqProd()."'";
		} 
		if ($obj->getPisst_nItem()) { 
			$sql .= " AND pisst_nItem = '".$obj->getPisst_nItem()."'";
		} 
		if ($obj->getPisst_vBC()) { 
			$sql .= " AND pisst_vBC = '".$obj->getPisst_vBC()."'";
		} 
		if ($obj->getPisst_pPIS()) { 
			$sql .= " AND pisst_pPIS = '".$obj->getPisst_pPIS()."'";
		} 
		if ($obj->getPisst_qBCProd()) { 
			$sql .= " AND pisst_qBCProd = '".$obj->getPisst_qBCProd()."'";
		} 
		if ($obj->getPisst_vAliqProd()) { 
			$sql .= " AND pisst_vAliqProd = '".$obj->getPisst_vAliqProd()."'";
		} 
		if ($obj->getPisst_vPIS()) { 
			$sql .= " AND pisst_vPIS = '".$obj->getPisst_vPIS()."'";
		} 
		if ($obj->getCofins_tipo()) { 
			$sql .= " AND cofins_tipo = '".$obj->getCofins_tipo()."'";
		} 
		if ($obj->getCofins_nItem()) { 
			$sql .= " AND cofins_nItem = '".$obj->getCofins_nItem()."'";
		} 
		if ($obj->getCofins_cst()) { 
			$sql .= " AND cofins_cst = '".$obj->getCofins_cst()."'";
		} 
		if ($obj->getCofins_vBC()) { 
			$sql .= " AND cofins_vBC = '".$obj->getCofins_vBC()."'";
		} 
		if ($obj->getCofins_pCOFINS()) { 
			$sql .= " AND cofins_pCOFINS = '".$obj->getCofins_pCOFINS()."'";
		} 
		if ($obj->getCofins_vCOFINS()) { 
			$sql .= " AND cofins_vCOFINS = '".$obj->getCofins_vCOFINS()."'";
		} 
		if ($obj->getCofins_qBCProd()) { 
			$sql .= " AND cofins_qBCProd = '".$obj->getCofins_qBCProd()."'";
		} 
		if ($obj->getCofins_vAliqProd()) { 
			$sql .= " AND cofins_vAliqProd = '".$obj->getCofins_vAliqProd()."'";
		} 
		if ($obj->getCofinsst_nItem()) { 
			$sql .= " AND cofinsst_nItem = '".$obj->getCofinsst_nItem()."'";
		} 
		if ($obj->getCofinsst_vBC()) { 
			$sql .= " AND cofinsst_vBC = '".$obj->getCofinsst_vBC()."'";
		} 
		if ($obj->getCofinsst_pCOFINS()) { 
			$sql .= " AND cofinsst_pCOFINS = '".$obj->getCofinsst_pCOFINS()."'";
		} 
		if ($obj->getCofinsst_qBCProd()) { 
			$sql .= " AND cofinsst_qBCProd = '".$obj->getCofinsst_qBCProd()."'";
		} 
		if ($obj->getCofinsst_vAliqProd()) { 
			$sql .= " AND cofinsst_vAliqProd = '".$obj->getCofinsst_vAliqProd()."'";
		} 
		if ($obj->getCofinsst_vCOFINS()) { 
			$sql .= " AND cofinsst_vCOFINS = '".$obj->getCofinsst_vCOFINS()."'";
		} 
		if ($obj->getDi_nItem()) { 
			$sql .= " AND di_nItem = '".$obj->getDi_nItem()."'";
		} 
		if ($obj->getDi_nDI()) { 
			$sql .= " AND di_nDI = '".$obj->getDi_nDI()."'";
		} 
		if ($obj->getDi_dDI()) { 
			$sql .= " AND di_dDI = '".$obj->getDi_dDI()."'";
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
			$sql .= " AND di_CNPJ = '".$obj->getDi_CNPJ()."'";
		} 
		if ($obj->getDi_UFTerceiro()) { 
			$sql .= " AND upper(di_UFTerceiro)  like ('%".strtoupper($obj->getDi_UFTerceiro())."%')";
		} 
		if ($obj->getDi_cExportador()) { 
			$sql .= " AND upper(di_cExportador)  like ('%".strtoupper($obj->getDi_cExportador())."%')";
		} 
		if ($obj->getAdi_nItem()) { 
			$sql .= " AND adi_nItem = '".$obj->getAdi_nItem()."'";
		} 
		if ($obj->getAdi_nDI()) { 
			$sql .= " AND adi_nDI = '".$obj->getAdi_nDI()."'";
		} 
		if ($obj->getAdi_nAdicao()) { 
			$sql .= " AND adi_nAdicao = '".$obj->getAdi_nAdicao()."'";
		} 
		if ($obj->getAdi_nSeqAdicC()) { 
			$sql .= " AND adi_nSeqAdicC = '".$obj->getAdi_nSeqAdicC()."'";
		} 
		if ($obj->getAdi_cFabricante()) { 
			$sql .= " AND upper(adi_cFabricante)  like ('%".strtoupper($obj->getAdi_cFabricante())."%')";
		} 
		if ($obj->getAdi_vDescDI()) { 
			$sql .= " AND adi_vDescDI = '".$obj->getAdi_vDescDI()."'";
		} 
		if ($obj->getAdi_nDraw()) { 
			$sql .= " AND upper(adi_nDraw)  like ('%".strtoupper($obj->getAdi_nDraw())."%')";
		} 
		if ($obj->getImposto_nItem()) { 
			$sql .= " AND imposto_nItem = '".$obj->getImposto_nItem()."'";
		} 
		if ($obj->getImposto_vlrtrib()) { 
			$sql .= " AND imposto_vlrtrib = '".$obj->getImposto_vlrtrib()."'";
		} 
		if ($obj->getNve_nItem()) { 
			$sql .= " AND nve_nItem = '".$obj->getNve_nItem()."'";
		} 
		if ($obj->getNve_texto()) { 
			$sql .= " AND upper(nve_texto)  like ('%".strtoupper($obj->getNve_texto())."%')";
		} 
		if ($obj->getAII_nItem()) { 
			$sql .= " AND aII_nItem = '".$obj->getAII_nItem()."'";
		} 
		if ($obj->getAII_vBC()) { 
			$sql .= " AND aII_vBC = '".$obj->getAII_vBC()."'";
		} 
		if ($obj->getAII_vDespAdu()) { 
			$sql .= " AND aII_vDespAdu = '".$obj->getAII_vDespAdu()."'";
		} 
		if ($obj->getAII_vII()) { 
			$sql .= " AND aII_vII = '".$obj->getAII_vII()."'";
		} 
		if ($obj->getAII_vIOF()) { 
			$sql .= " AND upper(aII_vIOF)  like ('%".strtoupper($obj->getAII_vIOF())."%')";
		} 
		if ($obj->getInfad_nItem()) { 
			$sql .= " AND infad_nItem = '".$obj->getInfad_nItem()."'";
		} 
		if ($obj->getInfad_inform()) { 
			$sql .= " AND upper(infad_inform)  like ('%".strtoupper($obj->getInfad_inform())."%')";
		} 
		if ($obj->getInfadic_nItem()) { 
			$sql .= " AND infadic_nItem = '".$obj->getInfadic_nItem()."'";
		} 
		if ($obj->getInfadic_pDevol()) { 
			$sql .= " AND infadic_pDevol = '".$obj->getInfadic_pDevol()."'";
		} 
		if ($obj->getInfadic_vIPIDevol()) { 
			$sql .= " AND infadic_vIPIDevol = '".$obj->getInfadic_vIPIDevol()."'";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setSeq(mysql_result($rs, 0, 'seq')); 
			 $obj->setData_envio(mysql_result($rs, 0, 'data_envio')); 
			 $obj->setMes_ano(mysql_result($rs, 0, 'mes_ano')); 
			 $obj->setSeq_nfe(mysql_result($rs, 0, 'seq_nfe')); 
			 $obj->setIdent_chave(mysql_result($rs, 0, 'ident_chave')); 
			 $obj->setProd_tipo(mysql_result($rs, 0, 'prod_tipo')); 
			 $obj->setProd_nItem(mysql_result($rs, 0, 'prod_nItem')); 
			 $obj->setProd_cProd(mysql_result($rs, 0, 'prod_cProd')); 
			 $obj->setProd_cEAN(mysql_result($rs, 0, 'prod_cEAN')); 
			 $obj->setProd_xProd(mysql_result($rs, 0, 'prod_xProd')); 
			 $obj->setProd_NCM(mysql_result($rs, 0, 'prod_NCM')); 
			 $obj->setProd_NVE(mysql_result($rs, 0, 'prod_NVE')); 
			 $obj->setProd_EXTIPI(mysql_result($rs, 0, 'prod_EXTIPI')); 
			 $obj->setProd_CFOP(mysql_result($rs, 0, 'prod_CFOP')); 
			 $obj->setProd_uCom(mysql_result($rs, 0, 'prod_uCom')); 
			 $obj->setProd_qCom(mysql_result($rs, 0, 'prod_qCom')); 
			 $obj->setProd_vUnCom(mysql_result($rs, 0, 'prod_vUnCom')); 
			 $obj->setProd_vProd(mysql_result($rs, 0, 'prod_vProd')); 
			 $obj->setProd_cEANTrib(mysql_result($rs, 0, 'prod_cEANTrib')); 
			 $obj->setProd_uTrib(mysql_result($rs, 0, 'prod_uTrib')); 
			 $obj->setProd_qTrib(mysql_result($rs, 0, 'prod_qTrib')); 
			 $obj->setProd_vUnTrib(mysql_result($rs, 0, 'prod_vUnTrib')); 
			 $obj->setProd_vFrete(mysql_result($rs, 0, 'prod_vFrete')); 
			 $obj->setProd_vSeg(mysql_result($rs, 0, 'prod_vSeg')); 
			 $obj->setProd_vDesc(mysql_result($rs, 0, 'prod_vDesc')); 
			 $obj->setProd_vOutro(mysql_result($rs, 0, 'prod_vOutro')); 
			 $obj->setProd_indTot(mysql_result($rs, 0, 'prod_indTot')); 
			 $obj->setProd_xPed(mysql_result($rs, 0, 'prod_xPed')); 
			 $obj->setProd_nItemPed(mysql_result($rs, 0, 'prod_nItemPed')); 
			 $obj->setProd_nFCI(mysql_result($rs, 0, 'prod_nFCI')); 
			 $obj->setVeic_nItem(mysql_result($rs, 0, 'veic_nItem')); 
			 $obj->setVeic_tpOp(mysql_result($rs, 0, 'veic_tpOp')); 
			 $obj->setVeic_chassi(mysql_result($rs, 0, 'veic_chassi')); 
			 $obj->setVeic_cCor(mysql_result($rs, 0, 'veic_cCor')); 
			 $obj->setVeic_xCor(mysql_result($rs, 0, 'veic_xCor')); 
			 $obj->setVeic_pot(mysql_result($rs, 0, 'veic_pot')); 
			 $obj->setVeic_cilin(mysql_result($rs, 0, 'veic_cilin')); 
			 $obj->setVeic_pesoL(mysql_result($rs, 0, 'veic_pesoL')); 
			 $obj->setVeic_pesoB(mysql_result($rs, 0, 'veic_pesoB')); 
			 $obj->setVeic_nSerie(mysql_result($rs, 0, 'veic_nSerie')); 
			 $obj->setVeic_tpComb(mysql_result($rs, 0, 'veic_tpComb')); 
			 $obj->setVeic_nMotor(mysql_result($rs, 0, 'veic_nMotor')); 
			 $obj->setVeic_cmt(mysql_result($rs, 0, 'veic_cmt')); 
			 $obj->setVeic_dist(mysql_result($rs, 0, 'veic_dist')); 
			 $obj->setVeic_anoMod(mysql_result($rs, 0, 'veic_anoMod')); 
			 $obj->setVeic_anoFab(mysql_result($rs, 0, 'veic_anoFab')); 
			 $obj->setVeic_tpPint(mysql_result($rs, 0, 'veic_tpPint')); 
			 $obj->setVeic_tpVeic(mysql_result($rs, 0, 'veic_tpVeic')); 
			 $obj->setVeic_espVeic(mysql_result($rs, 0, 'veic_espVeic')); 
			 $obj->setVeic_VIN(mysql_result($rs, 0, 'veic_VIN')); 
			 $obj->setVeic_condVeic(mysql_result($rs, 0, 'veic_condVeic')); 
			 $obj->setVeic_cMod(mysql_result($rs, 0, 'veic_cMod')); 
			 $obj->setVeic_cCorDENATRAN(mysql_result($rs, 0, 'veic_cCorDENATRAN')); 
			 $obj->setVeic_lota(mysql_result($rs, 0, 'veic_lota')); 
			 $obj->setVeic_tpRest(mysql_result($rs, 0, 'veic_tpRest')); 
			 $obj->setMed_nItem(mysql_result($rs, 0, 'med_nItem')); 
			 $obj->setMed_nLote(mysql_result($rs, 0, 'med_nLote')); 
			 $obj->setMed_qLote(mysql_result($rs, 0, 'med_qLote')); 
			 $obj->setMed_dFab(mysql_result($rs, 0, 'med_dFab')); 
			 $obj->setMed_dVal(mysql_result($rs, 0, 'med_dVal')); 
			 $obj->setMed_vPMC(mysql_result($rs, 0, 'med_vPMC')); 
			 $obj->setArma_nItem(mysql_result($rs, 0, 'arma_nItem')); 
			 $obj->setArma_tpArma(mysql_result($rs, 0, 'arma_tpArma')); 
			 $obj->setArma_nSerie(mysql_result($rs, 0, 'arma_nSerie')); 
			 $obj->setArma_nCano(mysql_result($rs, 0, 'arma_nCano')); 
			 $obj->setArma_descr(mysql_result($rs, 0, 'arma_descr')); 
			 $obj->setComb_nItem(mysql_result($rs, 0, 'comb_nItem')); 
			 $obj->setComb_cProdANP(mysql_result($rs, 0, 'comb_cProdANP')); 
			 $obj->setComb_pMixGN(mysql_result($rs, 0, 'comb_pMixGN')); 
			 $obj->setComb_codif(mysql_result($rs, 0, 'comb_codif')); 
			 $obj->setComb_qTemp(mysql_result($rs, 0, 'comb_qTemp')); 
			 $obj->setComb_ufCons(mysql_result($rs, 0, 'comb_ufCons')); 
			 $obj->setComb_qBCProd(mysql_result($rs, 0, 'comb_qBCProd')); 
			 $obj->setComb_vAliqProd(mysql_result($rs, 0, 'comb_vAliqProd')); 
			 $obj->setComb_vCIDE(mysql_result($rs, 0, 'comb_vCIDE')); 
			 $obj->setIcms_tipo(mysql_result($rs, 0, 'icms_tipo')); 
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
			 $obj->setIcmssn_nItem(mysql_result($rs, 0, 'icmssn_nItem')); 
			 $obj->setIcmssn_orig(mysql_result($rs, 0, 'icmssn_orig')); 
			 $obj->setIcmssn_csosn(mysql_result($rs, 0, 'icmssn_csosn')); 
			 $obj->setIcmssn_modBC(mysql_result($rs, 0, 'icmssn_modBC')); 
			 $obj->setIcmssn_vBC(mysql_result($rs, 0, 'icmssn_vBC')); 
			 $obj->setIcmssn_pRedBC(mysql_result($rs, 0, 'icmssn_pRedBC')); 
			 $obj->setIcmssn_pICMS(mysql_result($rs, 0, 'icmssn_pICMS')); 
			 $obj->setIcmssn_vICMS(mysql_result($rs, 0, 'icmssn_vICMS')); 
			 $obj->setIcmssn_pCredSN(mysql_result($rs, 0, 'icmssn_pCredSN')); 
			 $obj->setIcmssn_vCredICMSSN(mysql_result($rs, 0, 'icmssn_vCredICMSSN')); 
			 $obj->setIcmssn_modBCST(mysql_result($rs, 0, 'icmssn_modBCST')); 
			 $obj->setIcmssn_pMVAST(mysql_result($rs, 0, 'icmssn_pMVAST')); 
			 $obj->setIcmssn_pRedBCST(mysql_result($rs, 0, 'icmssn_pRedBCST')); 
			 $obj->setIcmssn_vBCST(mysql_result($rs, 0, 'icmssn_vBCST')); 
			 $obj->setIcmssn_pICMSST(mysql_result($rs, 0, 'icmssn_pICMSST')); 
			 $obj->setIcmssn_vICMSST(mysql_result($rs, 0, 'icmssn_vICMSST')); 
			 $obj->setIcmssn_vBCSTRet(mysql_result($rs, 0, 'icmssn_vBCSTRet')); 
			 $obj->setIcmssn_vICMSSTRet(mysql_result($rs, 0, 'icmssn_vICMSSTRet')); 
			 $obj->setIcmsst_nItem(mysql_result($rs, 0, 'icmsst_nItem')); 
			 $obj->setIcmsst_modBCST(mysql_result($rs, 0, 'icmsst_modBCST')); 
			 $obj->setIcmsst_pMVAST(mysql_result($rs, 0, 'icmsst_pMVAST')); 
			 $obj->setIcmsst_pRedBCST(mysql_result($rs, 0, 'icmsst_pRedBCST')); 
			 $obj->setIcmsst_vBCST(mysql_result($rs, 0, 'icmsst_vBCST')); 
			 $obj->setIcmsst_pICMSST(mysql_result($rs, 0, 'icmsst_pICMSST')); 
			 $obj->setIcmsst_vICMSST(mysql_result($rs, 0, 'icmsst_vICMSST')); 
			 $obj->setIcmsst_pBOCp(mysql_result($rs, 0, 'icmsst_pBOCp')); 
			 $obj->setIcmsst_UFST(mysql_result($rs, 0, 'icmsst_UFST')); 
			 $obj->setIpi_tipo(mysql_result($rs, 0, 'ipi_tipo')); 
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
			 $obj->setPis_tipo(mysql_result($rs, 0, 'pis_tipo')); 
			 $obj->setPis_nItem(mysql_result($rs, 0, 'pis_nItem')); 
			 $obj->setPis_cst(mysql_result($rs, 0, 'pis_cst')); 
			 $obj->setPis_vBC(mysql_result($rs, 0, 'pis_vBC')); 
			 $obj->setPis_pPIS(mysql_result($rs, 0, 'pis_pPIS')); 
			 $obj->setPis_vPIS(mysql_result($rs, 0, 'pis_vPIS')); 
			 $obj->setPis_qBCProd(mysql_result($rs, 0, 'pis_qBCProd')); 
			 $obj->setPis_vAliqProd(mysql_result($rs, 0, 'pis_vAliqProd')); 
			 $obj->setPisst_nItem(mysql_result($rs, 0, 'pisst_nItem')); 
			 $obj->setPisst_vBC(mysql_result($rs, 0, 'pisst_vBC')); 
			 $obj->setPisst_pPIS(mysql_result($rs, 0, 'pisst_pPIS')); 
			 $obj->setPisst_qBCProd(mysql_result($rs, 0, 'pisst_qBCProd')); 
			 $obj->setPisst_vAliqProd(mysql_result($rs, 0, 'pisst_vAliqProd')); 
			 $obj->setPisst_vPIS(mysql_result($rs, 0, 'pisst_vPIS')); 
			 $obj->setCofins_tipo(mysql_result($rs, 0, 'cofins_tipo')); 
			 $obj->setCofins_nItem(mysql_result($rs, 0, 'cofins_nItem')); 
			 $obj->setCofins_cst(mysql_result($rs, 0, 'cofins_cst')); 
			 $obj->setCofins_vBC(mysql_result($rs, 0, 'cofins_vBC')); 
			 $obj->setCofins_pCOFINS(mysql_result($rs, 0, 'cofins_pCOFINS')); 
			 $obj->setCofins_vCOFINS(mysql_result($rs, 0, 'cofins_vCOFINS')); 
			 $obj->setCofins_qBCProd(mysql_result($rs, 0, 'cofins_qBCProd')); 
			 $obj->setCofins_vAliqProd(mysql_result($rs, 0, 'cofins_vAliqProd')); 
			 $obj->setCofinsst_nItem(mysql_result($rs, 0, 'cofinsst_nItem')); 
			 $obj->setCofinsst_vBC(mysql_result($rs, 0, 'cofinsst_vBC')); 
			 $obj->setCofinsst_pCOFINS(mysql_result($rs, 0, 'cofinsst_pCOFINS')); 
			 $obj->setCofinsst_qBCProd(mysql_result($rs, 0, 'cofinsst_qBCProd')); 
			 $obj->setCofinsst_vAliqProd(mysql_result($rs, 0, 'cofinsst_vAliqProd')); 
			 $obj->setCofinsst_vCOFINS(mysql_result($rs, 0, 'cofinsst_vCOFINS')); 
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
			 $obj->setNve_nItem(mysql_result($rs, 0, 'nve_nItem')); 
			 $obj->setNve_texto(mysql_result($rs, 0, 'nve_texto')); 
			 $obj->setAII_nItem(mysql_result($rs, 0, 'aII_nItem')); 
			 $obj->setAII_vBC(mysql_result($rs, 0, 'aII_vBC')); 
			 $obj->setAII_vDespAdu(mysql_result($rs, 0, 'aII_vDespAdu')); 
			 $obj->setAII_vII(mysql_result($rs, 0, 'aII_vII')); 
			 $obj->setAII_vIOF(mysql_result($rs, 0, 'aII_vIOF')); 
			 $obj->setInfad_nItem(mysql_result($rs, 0, 'infad_nItem')); 
			 $obj->setInfad_inform(mysql_result($rs, 0, 'infad_inform')); 
			 $obj->setInfadic_nItem(mysql_result($rs, 0, 'infadic_nItem')); 
			 $obj->setInfadic_pDevol(mysql_result($rs, 0, 'infadic_pDevol')); 
			 $obj->setInfadic_vIPIDevol(mysql_result($rs, 0, 'infadic_vIPIDevol')); 
		} 
		 return $obj; 
	} 

	  function countAll(){
		 $sql = 'SELECT count(*) as existe FROM nfe_produtos WHERE 1=1 ';  
		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function verifica_existe($obj){
		 $sql = 'SELECT count(*) as existe FROM nfe_produtos WHERE 1=1 ';  




		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function selectAll($obj){
		 $sql = 'SELECT * FROM nfe_produtos WHERE 1=1 '; 


		if ($obj->getSeq()) { 
			 $sql .= " AND seq = '".$obj->getSeq()."'";
 				} 
		if ($obj->getData_envio()) { 
			 $sql .= " AND data_envio = '".$obj->getData_envio()."'";
 				} 
		if ($obj->getMes_ano()) { 
			 $sql .= " AND mes_ano = '".$obj->getMes_ano()."'";
 				} 
		if ($obj->getSeq_nfe()) { 
			 $sql .= " AND seq_nfe = '".$obj->getSeq_nfe()."'";
 				} 
		if ($obj->getIdent_chave()) { 
			 $sql .= " AND ident_chave = '".$obj->getIdent_chave()."'";
 				} 
		if ($obj->getProd_tipo()) { 
			 $sql .= " AND prod_tipo = '".$obj->getProd_tipo()."'";
 				} 
		if ($obj->getProd_nItem()) { 
			 $sql .= " AND prod_nItem = '".$obj->getProd_nItem()."'";
 				} 
		if ($obj->getProd_cProd()) { 
			 $sql .= " AND prod_cProd = '".$obj->getProd_cProd()."'";
 				} 
		if ($obj->getProd_cEAN()) { 
			 $sql .= " AND upper(prod_cEAN)  like ('%".strtoupper($obj->getProd_cEAN())."%')";
 				} 
		if ($obj->getProd_xProd()) { 
			 $sql .= " AND upper(prod_xProd)  like ('%".strtoupper($obj->getProd_xProd())."%')";
 				} 
		if ($obj->getProd_NCM()) { 
			 $sql .= " AND prod_NCM = '".$obj->getProd_NCM()."'";
 				} 
		if ($obj->getProd_NVE()) { 
			 $sql .= " AND upper(prod_NVE)  like ('%".strtoupper($obj->getProd_NVE())."%')";
 				} 
		if ($obj->getProd_EXTIPI()) { 
			 $sql .= " AND upper(prod_EXTIPI)  like ('%".strtoupper($obj->getProd_EXTIPI())."%')";
 				} 
		if ($obj->getProd_CFOP()) { 
			 $sql .= " AND prod_CFOP = '".$obj->getProd_CFOP()."'";
 				} 
		if ($obj->getProd_uCom()) { 
			 $sql .= " AND upper(prod_uCom)  like ('%".strtoupper($obj->getProd_uCom())."%')";
 				} 
		if ($obj->getProd_qCom()) { 
			 $sql .= " AND upper(prod_qCom)  like ('%".strtoupper($obj->getProd_qCom())."%')";
 				} 
		if ($obj->getProd_vUnCom()) { 
			 $sql .= " AND prod_vUnCom = '".$obj->getProd_vUnCom()."'";
 				} 
		if ($obj->getProd_vProd()) { 
			 $sql .= " AND prod_vProd = '".$obj->getProd_vProd()."'";
 				} 
		if ($obj->getProd_cEANTrib()) { 
			 $sql .= " AND upper(prod_cEANTrib)  like ('%".strtoupper($obj->getProd_cEANTrib())."%')";
 				} 
		if ($obj->getProd_uTrib()) { 
			 $sql .= " AND upper(prod_uTrib)  like ('%".strtoupper($obj->getProd_uTrib())."%')";
 				} 
		if ($obj->getProd_qTrib()) { 
			 $sql .= " AND prod_qTrib = '".$obj->getProd_qTrib()."'";
 				} 
		if ($obj->getProd_vUnTrib()) { 
			 $sql .= " AND prod_vUnTrib = '".$obj->getProd_vUnTrib()."'";
 				} 
		if ($obj->getProd_vFrete()) { 
			 $sql .= " AND prod_vFrete = '".$obj->getProd_vFrete()."'";
 				} 
		if ($obj->getProd_vSeg()) { 
			 $sql .= " AND prod_vSeg = '".$obj->getProd_vSeg()."'";
 				} 
		if ($obj->getProd_vDesc()) { 
			 $sql .= " AND prod_vDesc = '".$obj->getProd_vDesc()."'";
 				} 
		if ($obj->getProd_vOutro()) { 
			 $sql .= " AND prod_vOutro = '".$obj->getProd_vOutro()."'";
 				} 
		if ($obj->getProd_indTot()) { 
			 $sql .= " AND prod_indTot = '".$obj->getProd_indTot()."'";
 				} 
		if ($obj->getProd_xPed()) { 
			 $sql .= " AND prod_xPed = '".$obj->getProd_xPed()."'";
 				} 
		if ($obj->getProd_nItemPed()) { 
			 $sql .= " AND prod_nItemPed = '".$obj->getProd_nItemPed()."'";
 				} 
		if ($obj->getProd_nFCI()) { 
			 $sql .= " AND upper(prod_nFCI)  like ('%".strtoupper($obj->getProd_nFCI())."%')";
 				} 
		if ($obj->getVeic_nItem()) { 
			 $sql .= " AND veic_nItem = '".$obj->getVeic_nItem()."'";
 				} 
		if ($obj->getVeic_tpOp()) { 
			 $sql .= " AND veic_tpOp = '".$obj->getVeic_tpOp()."'";
 				} 
		if ($obj->getVeic_chassi()) { 
			 $sql .= " AND upper(veic_chassi)  like ('%".strtoupper($obj->getVeic_chassi())."%')";
 				} 
		if ($obj->getVeic_cCor()) { 
			 $sql .= " AND upper(veic_cCor)  like ('%".strtoupper($obj->getVeic_cCor())."%')";
 				} 
		if ($obj->getVeic_xCor()) { 
			 $sql .= " AND upper(veic_xCor)  like ('%".strtoupper($obj->getVeic_xCor())."%')";
 				} 
		if ($obj->getVeic_pot()) { 
			 $sql .= " AND upper(veic_pot)  like ('%".strtoupper($obj->getVeic_pot())."%')";
 				} 
		if ($obj->getVeic_cilin()) { 
			 $sql .= " AND upper(veic_cilin)  like ('%".strtoupper($obj->getVeic_cilin())."%')";
 				} 
		if ($obj->getVeic_pesoL()) { 
			 $sql .= " AND veic_pesoL = '".$obj->getVeic_pesoL()."'";
 				} 
		if ($obj->getVeic_pesoB()) { 
			 $sql .= " AND veic_pesoB = '".$obj->getVeic_pesoB()."'";
 				} 
		if ($obj->getVeic_nSerie()) { 
			 $sql .= " AND upper(veic_nSerie)  like ('%".strtoupper($obj->getVeic_nSerie())."%')";
 				} 
		if ($obj->getVeic_tpComb()) { 
			 $sql .= " AND upper(veic_tpComb)  like ('%".strtoupper($obj->getVeic_tpComb())."%')";
 				} 
		if ($obj->getVeic_nMotor()) { 
			 $sql .= " AND upper(veic_nMotor)  like ('%".strtoupper($obj->getVeic_nMotor())."%')";
 				} 
		if ($obj->getVeic_cmt()) { 
			 $sql .= " AND upper(veic_cmt)  like ('%".strtoupper($obj->getVeic_cmt())."%')";
 				} 
		if ($obj->getVeic_dist()) { 
			 $sql .= " AND upper(veic_dist)  like ('%".strtoupper($obj->getVeic_dist())."%')";
 				} 
		if ($obj->getVeic_anoMod()) { 
			 $sql .= " AND veic_anoMod = '".$obj->getVeic_anoMod()."'";
 				} 
		if ($obj->getVeic_anoFab()) { 
			 $sql .= " AND veic_anoFab = '".$obj->getVeic_anoFab()."'";
 				} 
		if ($obj->getVeic_tpPint()) { 
			 $sql .= " AND veic_tpPint = '".$obj->getVeic_tpPint()."'";
 				} 
		if ($obj->getVeic_tpVeic()) { 
			 $sql .= " AND veic_tpVeic = '".$obj->getVeic_tpVeic()."'";
 				} 
		if ($obj->getVeic_espVeic()) { 
			 $sql .= " AND upper(veic_espVeic)  like ('%".strtoupper($obj->getVeic_espVeic())."%')";
 				} 
		if ($obj->getVeic_VIN()) { 
			 $sql .= " AND upper(veic_VIN)  like ('%".strtoupper($obj->getVeic_VIN())."%')";
 				} 
		if ($obj->getVeic_condVeic()) { 
			 $sql .= " AND upper(veic_condVeic)  like ('%".strtoupper($obj->getVeic_condVeic())."%')";
 				} 
		if ($obj->getVeic_cMod()) { 
			 $sql .= " AND upper(veic_cMod)  like ('%".strtoupper($obj->getVeic_cMod())."%')";
 				} 
		if ($obj->getVeic_cCorDENATRAN()) { 
			 $sql .= " AND upper(veic_cCorDENATRAN)  like ('%".strtoupper($obj->getVeic_cCorDENATRAN())."%')";
 				} 
		if ($obj->getVeic_lota()) { 
			 $sql .= " AND upper(veic_lota)  like ('%".strtoupper($obj->getVeic_lota())."%')";
 				} 
		if ($obj->getVeic_tpRest()) { 
			 $sql .= " AND upper(veic_tpRest)  like ('%".strtoupper($obj->getVeic_tpRest())."%')";
 				} 
		if ($obj->getMed_nItem()) { 
			 $sql .= " AND med_nItem = '".$obj->getMed_nItem()."'";
 				} 
		if ($obj->getMed_nLote()) { 
			 $sql .= " AND med_nLote = '".$obj->getMed_nLote()."'";
 				} 
		if ($obj->getMed_qLote()) { 
			 $sql .= " AND upper(med_qLote)  like ('%".strtoupper($obj->getMed_qLote())."%')";
 				} 
		if ($obj->getMed_dFab()) { 
			 $sql .= " AND med_dFab = '".$obj->getMed_dFab()."'";
 				} 
		if ($obj->getMed_dVal()) { 
			 $sql .= " AND med_dVal = '".$obj->getMed_dVal()."'";
 				} 
		if ($obj->getMed_vPMC()) { 
			 $sql .= " AND med_vPMC = '".$obj->getMed_vPMC()."'";
 				} 
		if ($obj->getArma_nItem()) { 
			 $sql .= " AND arma_nItem = '".$obj->getArma_nItem()."'";
 				} 
		if ($obj->getArma_tpArma()) { 
			 $sql .= " AND upper(arma_tpArma)  like ('%".strtoupper($obj->getArma_tpArma())."%')";
 				} 
		if ($obj->getArma_nSerie()) { 
			 $sql .= " AND upper(arma_nSerie)  like ('%".strtoupper($obj->getArma_nSerie())."%')";
 				} 
		if ($obj->getArma_nCano()) { 
			 $sql .= " AND upper(arma_nCano)  like ('%".strtoupper($obj->getArma_nCano())."%')";
 				} 
		if ($obj->getArma_descr()) { 
			 $sql .= " AND upper(arma_descr)  like ('%".strtoupper($obj->getArma_descr())."%')";
 				} 
		if ($obj->getComb_nItem()) { 
			 $sql .= " AND comb_nItem = '".$obj->getComb_nItem()."'";
 				} 
		if ($obj->getComb_cProdANP()) { 
			 $sql .= " AND upper(comb_cProdANP)  like ('%".strtoupper($obj->getComb_cProdANP())."%')";
 				} 
		if ($obj->getComb_pMixGN()) { 
			 $sql .= " AND upper(comb_pMixGN)  like ('%".strtoupper($obj->getComb_pMixGN())."%')";
 				} 
		if ($obj->getComb_codif()) { 
			 $sql .= " AND upper(comb_codif)  like ('%".strtoupper($obj->getComb_codif())."%')";
 				} 
		if ($obj->getComb_qTemp()) { 
			 $sql .= " AND upper(comb_qTemp)  like ('%".strtoupper($obj->getComb_qTemp())."%')";
 				} 
		if ($obj->getComb_ufCons()) { 
			 $sql .= " AND upper(comb_ufCons)  like ('%".strtoupper($obj->getComb_ufCons())."%')";
 				} 
		if ($obj->getComb_qBCProd()) { 
			 $sql .= " AND upper(comb_qBCProd)  like ('%".strtoupper($obj->getComb_qBCProd())."%')";
 				} 
		if ($obj->getComb_vAliqProd()) { 
			 $sql .= " AND comb_vAliqProd = '".$obj->getComb_vAliqProd()."'";
 				} 
		if ($obj->getComb_vCIDE()) { 
			 $sql .= " AND upper(comb_vCIDE)  like ('%".strtoupper($obj->getComb_vCIDE())."%')";
 				} 
		if ($obj->getIcms_tipo()) { 
			 $sql .= " AND icms_tipo = '".$obj->getIcms_tipo()."'";
 				} 
		if ($obj->getIcms_nItem()) { 
			 $sql .= " AND icms_nItem = '".$obj->getIcms_nItem()."'";
 				} 
		if ($obj->getIcms_orig()) { 
			 $sql .= " AND icms_orig = '".$obj->getIcms_orig()."'";
 				} 
		if ($obj->getIcms_cst()) { 
			 $sql .= " AND icms_cst = '".$obj->getIcms_cst()."'";
 				} 
		if ($obj->getIcms_modBC()) { 
			 $sql .= " AND icms_modBC = '".$obj->getIcms_modBC()."'";
 				} 
		if ($obj->getIcms_pRedBC()) { 
			 $sql .= " AND icms_pRedBC = '".$obj->getIcms_pRedBC()."'";
 				} 
		if ($obj->getIcms_vBC()) { 
			 $sql .= " AND icms_vBC = '".$obj->getIcms_vBC()."'";
 				} 
		if ($obj->getIcms_pICMS()) { 
			 $sql .= " AND icms_pICMS = '".$obj->getIcms_pICMS()."'";
 				} 
		if ($obj->getIcms_vICMS()) { 
			 $sql .= " AND icms_vICMS = '".$obj->getIcms_vICMS()."'";
 				} 
		if ($obj->getIcms_vICMSDeson()) { 
			 $sql .= " AND icms_vICMSDeson = '".$obj->getIcms_vICMSDeson()."'";
 				} 
		if ($obj->getIcms_motDesICMS()) { 
			 $sql .= " AND upper(icms_motDesICMS)  like ('%".strtoupper($obj->getIcms_motDesICMS())."%')";
 				} 
		if ($obj->getIcms_modBCST()) { 
			 $sql .= " AND icms_modBCST = '".$obj->getIcms_modBCST()."'";
 				} 
		if ($obj->getIcms_pMVAST()) { 
			 $sql .= " AND icms_pMVAST = '".$obj->getIcms_pMVAST()."'";
 				} 
		if ($obj->getIcms_pRedBCST()) { 
			 $sql .= " AND icms_pRedBCST = '".$obj->getIcms_pRedBCST()."'";
 				} 
		if ($obj->getIcms_vBCST()) { 
			 $sql .= " AND icms_vBCST = '".$obj->getIcms_vBCST()."'";
 				} 
		if ($obj->getIcms_pICMSST()) { 
			 $sql .= " AND icms_pICMSST = '".$obj->getIcms_pICMSST()."'";
 				} 
		if ($obj->getIcms_vICMSST()) { 
			 $sql .= " AND icms_vICMSST = '".$obj->getIcms_vICMSST()."'";
 				} 
		if ($obj->getIcms_pDif()) { 
			 $sql .= " AND icms_pDif = '".$obj->getIcms_pDif()."'";
 				} 
		if ($obj->getIcms_vICMSDif()) { 
			 $sql .= " AND icms_vICMSDif = '".$obj->getIcms_vICMSDif()."'";
 				} 
		if ($obj->getIcms_vICMSOp()) { 
			 $sql .= " AND icms_vICMSOp = '".$obj->getIcms_vICMSOp()."'";
 				} 
		if ($obj->getIcms_vBCSTRet()) { 
			 $sql .= " AND icms_vBCSTRet = '".$obj->getIcms_vBCSTRet()."'";
 				} 
		if ($obj->getIcms_vICMSSTRet()) { 
			 $sql .= " AND icms_vICMSSTRet = '".$obj->getIcms_vICMSSTRet()."'";
 				} 
		if ($obj->getIcmssn_nItem()) { 
			 $sql .= " AND icmssn_nItem = '".$obj->getIcmssn_nItem()."'";
 				} 
		if ($obj->getIcmssn_orig()) { 
			 $sql .= " AND icmssn_orig = '".$obj->getIcmssn_orig()."'";
 				} 
		if ($obj->getIcmssn_csosn()) { 
			 $sql .= " AND icmssn_csosn = '".$obj->getIcmssn_csosn()."'";
 				} 
		if ($obj->getIcmssn_modBC()) { 
			 $sql .= " AND icmssn_modBC = '".$obj->getIcmssn_modBC()."'";
 				} 
		if ($obj->getIcmssn_vBC()) { 
			 $sql .= " AND icmssn_vBC = '".$obj->getIcmssn_vBC()."'";
 				} 
		if ($obj->getIcmssn_pRedBC()) { 
			 $sql .= " AND icmssn_pRedBC = '".$obj->getIcmssn_pRedBC()."'";
 				} 
		if ($obj->getIcmssn_pICMS()) { 
			 $sql .= " AND icmssn_pICMS = '".$obj->getIcmssn_pICMS()."'";
 				} 
		if ($obj->getIcmssn_vICMS()) { 
			 $sql .= " AND icmssn_vICMS = '".$obj->getIcmssn_vICMS()."'";
 				} 
		if ($obj->getIcmssn_pCredSN()) { 
			 $sql .= " AND icmssn_pCredSN = '".$obj->getIcmssn_pCredSN()."'";
 				} 
		if ($obj->getIcmssn_vCredICMSSN()) { 
			 $sql .= " AND icmssn_vCredICMSSN = '".$obj->getIcmssn_vCredICMSSN()."'";
 				} 
		if ($obj->getIcmssn_modBCST()) { 
			 $sql .= " AND icmssn_modBCST = '".$obj->getIcmssn_modBCST()."'";
 				} 
		if ($obj->getIcmssn_pMVAST()) { 
			 $sql .= " AND icmssn_pMVAST = '".$obj->getIcmssn_pMVAST()."'";
 				} 
		if ($obj->getIcmssn_pRedBCST()) { 
			 $sql .= " AND icmssn_pRedBCST = '".$obj->getIcmssn_pRedBCST()."'";
 				} 
		if ($obj->getIcmssn_vBCST()) { 
			 $sql .= " AND icmssn_vBCST = '".$obj->getIcmssn_vBCST()."'";
 				} 
		if ($obj->getIcmssn_pICMSST()) { 
			 $sql .= " AND icmssn_pICMSST = '".$obj->getIcmssn_pICMSST()."'";
 				} 
		if ($obj->getIcmssn_vICMSST()) { 
			 $sql .= " AND icmssn_vICMSST = '".$obj->getIcmssn_vICMSST()."'";
 				} 
		if ($obj->getIcmssn_vBCSTRet()) { 
			 $sql .= " AND icmssn_vBCSTRet = '".$obj->getIcmssn_vBCSTRet()."'";
 				} 
		if ($obj->getIcmssn_vICMSSTRet()) { 
			 $sql .= " AND icmssn_vICMSSTRet = '".$obj->getIcmssn_vICMSSTRet()."'";
 				} 
		if ($obj->getIcmsst_nItem()) { 
			 $sql .= " AND icmsst_nItem = '".$obj->getIcmsst_nItem()."'";
 				} 
		if ($obj->getIcmsst_modBCST()) { 
			 $sql .= " AND icmsst_modBCST = '".$obj->getIcmsst_modBCST()."'";
 				} 
		if ($obj->getIcmsst_pMVAST()) { 
			 $sql .= " AND icmsst_pMVAST = '".$obj->getIcmsst_pMVAST()."'";
 				} 
		if ($obj->getIcmsst_pRedBCST()) { 
			 $sql .= " AND icmsst_pRedBCST = '".$obj->getIcmsst_pRedBCST()."'";
 				} 
		if ($obj->getIcmsst_vBCST()) { 
			 $sql .= " AND icmsst_vBCST = '".$obj->getIcmsst_vBCST()."'";
 				} 
		if ($obj->getIcmsst_pICMSST()) { 
			 $sql .= " AND icmsst_pICMSST = '".$obj->getIcmsst_pICMSST()."'";
 				} 
		if ($obj->getIcmsst_vICMSST()) { 
			 $sql .= " AND icmsst_vICMSST = '".$obj->getIcmsst_vICMSST()."'";
 				} 
		if ($obj->getIcmsst_pBOCp()) { 
			 $sql .= " AND icmsst_pBOCp = '".$obj->getIcmsst_pBOCp()."'";
 				} 
		if ($obj->getIcmsst_UFST()) { 
			 $sql .= " AND upper(icmsst_UFST)  like ('%".strtoupper($obj->getIcmsst_UFST())."%')";
 				} 
		if ($obj->getIpi_tipo()) { 
			 $sql .= " AND ipi_tipo = '".$obj->getIpi_tipo()."'";
 				} 
		if ($obj->getIpi_nItem()) { 
			 $sql .= " AND ipi_nItem = '".$obj->getIpi_nItem()."'";
 				} 
		if ($obj->getIpi_cst()) { 
			 $sql .= " AND ipi_cst = '".$obj->getIpi_cst()."'";
 				} 
		if ($obj->getIpi_clEnq()) { 
			 $sql .= " AND ipi_clEnq = '".$obj->getIpi_clEnq()."'";
 				} 
		if ($obj->getIpi_cnpjProd()) { 
			 $sql .= " AND ipi_cnpjProd = '".$obj->getIpi_cnpjProd()."'";
 				} 
		if ($obj->getIpi_cSelo()) { 
			 $sql .= " AND upper(ipi_cSelo)  like ('%".strtoupper($obj->getIpi_cSelo())."%')";
 				} 
		if ($obj->getIpi_qSelo()) { 
			 $sql .= " AND upper(ipi_qSelo)  like ('%".strtoupper($obj->getIpi_qSelo())."%')";
 				} 
		if ($obj->getIpi_cEnq()) { 
			 $sql .= " AND ipi_cEnq = '".$obj->getIpi_cEnq()."'";
 				} 
		if ($obj->getIpi_vBC()) { 
			 $sql .= " AND ipi_vBC = '".$obj->getIpi_vBC()."'";
 				} 
		if ($obj->getIpi_pIPI()) { 
			 $sql .= " AND ipi_pIPI = '".$obj->getIpi_pIPI()."'";
 				} 
		if ($obj->getIpi_qUnid()) { 
			 $sql .= " AND upper(ipi_qUnid)  like ('%".strtoupper($obj->getIpi_qUnid())."%')";
 				} 
		if ($obj->getIpi_vUnid()) { 
			 $sql .= " AND ipi_vUnid = '".$obj->getIpi_vUnid()."'";
 				} 
		if ($obj->getIpi_hvIPI()) { 
			 $sql .= " AND ipi_hvIPI = '".$obj->getIpi_hvIPI()."'";
 				} 
		if ($obj->getPis_tipo()) { 
			 $sql .= " AND pis_tipo = '".$obj->getPis_tipo()."'";
 				} 
		if ($obj->getPis_nItem()) { 
			 $sql .= " AND pis_nItem = '".$obj->getPis_nItem()."'";
 				} 
		if ($obj->getPis_cst()) { 
			 $sql .= " AND pis_cst = '".$obj->getPis_cst()."'";
 				} 
		if ($obj->getPis_vBC()) { 
			 $sql .= " AND pis_vBC = '".$obj->getPis_vBC()."'";
 				} 
		if ($obj->getPis_pPIS()) { 
			 $sql .= " AND pis_pPIS = '".$obj->getPis_pPIS()."'";
 				} 
		if ($obj->getPis_vPIS()) { 
			 $sql .= " AND pis_vPIS = '".$obj->getPis_vPIS()."'";
 				} 
		if ($obj->getPis_qBCProd()) { 
			 $sql .= " AND pis_qBCProd = '".$obj->getPis_qBCProd()."'";
 				} 
		if ($obj->getPis_vAliqProd()) { 
			 $sql .= " AND pis_vAliqProd = '".$obj->getPis_vAliqProd()."'";
 				} 
		if ($obj->getPisst_nItem()) { 
			 $sql .= " AND pisst_nItem = '".$obj->getPisst_nItem()."'";
 				} 
		if ($obj->getPisst_vBC()) { 
			 $sql .= " AND pisst_vBC = '".$obj->getPisst_vBC()."'";
 				} 
		if ($obj->getPisst_pPIS()) { 
			 $sql .= " AND pisst_pPIS = '".$obj->getPisst_pPIS()."'";
 				} 
		if ($obj->getPisst_qBCProd()) { 
			 $sql .= " AND pisst_qBCProd = '".$obj->getPisst_qBCProd()."'";
 				} 
		if ($obj->getPisst_vAliqProd()) { 
			 $sql .= " AND pisst_vAliqProd = '".$obj->getPisst_vAliqProd()."'";
 				} 
		if ($obj->getPisst_vPIS()) { 
			 $sql .= " AND pisst_vPIS = '".$obj->getPisst_vPIS()."'";
 				} 
		if ($obj->getCofins_tipo()) { 
			 $sql .= " AND cofins_tipo = '".$obj->getCofins_tipo()."'";
 				} 
		if ($obj->getCofins_nItem()) { 
			 $sql .= " AND cofins_nItem = '".$obj->getCofins_nItem()."'";
 				} 
		if ($obj->getCofins_cst()) { 
			 $sql .= " AND cofins_cst = '".$obj->getCofins_cst()."'";
 				} 
		if ($obj->getCofins_vBC()) { 
			 $sql .= " AND cofins_vBC = '".$obj->getCofins_vBC()."'";
 				} 
		if ($obj->getCofins_pCOFINS()) { 
			 $sql .= " AND cofins_pCOFINS = '".$obj->getCofins_pCOFINS()."'";
 				} 
		if ($obj->getCofins_vCOFINS()) { 
			 $sql .= " AND cofins_vCOFINS = '".$obj->getCofins_vCOFINS()."'";
 				} 
		if ($obj->getCofins_qBCProd()) { 
			 $sql .= " AND cofins_qBCProd = '".$obj->getCofins_qBCProd()."'";
 				} 
		if ($obj->getCofins_vAliqProd()) { 
			 $sql .= " AND cofins_vAliqProd = '".$obj->getCofins_vAliqProd()."'";
 				} 
		if ($obj->getCofinsst_nItem()) { 
			 $sql .= " AND cofinsst_nItem = '".$obj->getCofinsst_nItem()."'";
 				} 
		if ($obj->getCofinsst_vBC()) { 
			 $sql .= " AND cofinsst_vBC = '".$obj->getCofinsst_vBC()."'";
 				} 
		if ($obj->getCofinsst_pCOFINS()) { 
			 $sql .= " AND cofinsst_pCOFINS = '".$obj->getCofinsst_pCOFINS()."'";
 				} 
		if ($obj->getCofinsst_qBCProd()) { 
			 $sql .= " AND cofinsst_qBCProd = '".$obj->getCofinsst_qBCProd()."'";
 				} 
		if ($obj->getCofinsst_vAliqProd()) { 
			 $sql .= " AND cofinsst_vAliqProd = '".$obj->getCofinsst_vAliqProd()."'";
 				} 
		if ($obj->getCofinsst_vCOFINS()) { 
			 $sql .= " AND cofinsst_vCOFINS = '".$obj->getCofinsst_vCOFINS()."'";
 				} 
		if ($obj->getDi_nItem()) { 
			 $sql .= " AND di_nItem = '".$obj->getDi_nItem()."'";
 				} 
		if ($obj->getDi_nDI()) { 
			 $sql .= " AND di_nDI = '".$obj->getDi_nDI()."'";
 				} 
		if ($obj->getDi_dDI()) { 
			 $sql .= " AND di_dDI = '".$obj->getDi_dDI()."'";
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
			 $sql .= " AND di_CNPJ = '".$obj->getDi_CNPJ()."'";
 				} 
		if ($obj->getDi_UFTerceiro()) { 
			 $sql .= " AND upper(di_UFTerceiro)  like ('%".strtoupper($obj->getDi_UFTerceiro())."%')";
 				} 
		if ($obj->getDi_cExportador()) { 
			 $sql .= " AND upper(di_cExportador)  like ('%".strtoupper($obj->getDi_cExportador())."%')";
 				} 
		if ($obj->getAdi_nItem()) { 
			 $sql .= " AND adi_nItem = '".$obj->getAdi_nItem()."'";
 				} 
		if ($obj->getAdi_nDI()) { 
			 $sql .= " AND adi_nDI = '".$obj->getAdi_nDI()."'";
 				} 
		if ($obj->getAdi_nAdicao()) { 
			 $sql .= " AND adi_nAdicao = '".$obj->getAdi_nAdicao()."'";
 				} 
		if ($obj->getAdi_nSeqAdicC()) { 
			 $sql .= " AND adi_nSeqAdicC = '".$obj->getAdi_nSeqAdicC()."'";
 				} 
		if ($obj->getAdi_cFabricante()) { 
			 $sql .= " AND upper(adi_cFabricante)  like ('%".strtoupper($obj->getAdi_cFabricante())."%')";
 				} 
		if ($obj->getAdi_vDescDI()) { 
			 $sql .= " AND adi_vDescDI = '".$obj->getAdi_vDescDI()."'";
 				} 
		if ($obj->getAdi_nDraw()) { 
			 $sql .= " AND upper(adi_nDraw)  like ('%".strtoupper($obj->getAdi_nDraw())."%')";
 				} 
		if ($obj->getImposto_nItem()) { 
			 $sql .= " AND imposto_nItem = '".$obj->getImposto_nItem()."'";
 				} 
		if ($obj->getImposto_vlrtrib()) { 
			 $sql .= " AND imposto_vlrtrib = '".$obj->getImposto_vlrtrib()."'";
 				} 
		if ($obj->getNve_nItem()) { 
			 $sql .= " AND nve_nItem = '".$obj->getNve_nItem()."'";
 				} 
		if ($obj->getNve_texto()) { 
			 $sql .= " AND upper(nve_texto)  like ('%".strtoupper($obj->getNve_texto())."%')";
 				} 
		if ($obj->getAII_nItem()) { 
			 $sql .= " AND aII_nItem = '".$obj->getAII_nItem()."'";
 				} 
		if ($obj->getAII_vBC()) { 
			 $sql .= " AND aII_vBC = '".$obj->getAII_vBC()."'";
 				} 
		if ($obj->getAII_vDespAdu()) { 
			 $sql .= " AND aII_vDespAdu = '".$obj->getAII_vDespAdu()."'";
 				} 
		if ($obj->getAII_vII()) { 
			 $sql .= " AND aII_vII = '".$obj->getAII_vII()."'";
 				} 
		if ($obj->getAII_vIOF()) { 
			 $sql .= " AND upper(aII_vIOF)  like ('%".strtoupper($obj->getAII_vIOF())."%')";
 				} 
		if ($obj->getInfad_nItem()) { 
			 $sql .= " AND infad_nItem = '".$obj->getInfad_nItem()."'";
 				} 
		if ($obj->getInfad_inform()) { 
			 $sql .= " AND upper(infad_inform)  like ('%".strtoupper($obj->getInfad_inform())."%')";
 				} 
		if ($obj->getInfadic_nItem()) { 
			 $sql .= " AND infadic_nItem = '".$obj->getInfadic_nItem()."'";
 				} 
		if ($obj->getInfadic_pDevol()) { 
			 $sql .= " AND infadic_pDevol = '".$obj->getInfadic_pDevol()."'";
 				} 
		if ($obj->getInfadic_vIPIDevol()) { 
			 $sql .= " AND infadic_vIPIDevol = '".$obj->getInfadic_vIPIDevol()."'";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Nfe_produtos(); 
			 $obj->setSeq(mysql_result($rs, $i, 'seq')); 
			 $obj->setData_envio(mysql_result($rs, $i, 'data_envio')); 
			 $obj->setMes_ano(mysql_result($rs, $i, 'mes_ano')); 
			 $obj->setSeq_nfe(mysql_result($rs, $i, 'seq_nfe')); 
			 $obj->setIdent_chave(mysql_result($rs, $i, 'ident_chave')); 
			 $obj->setProd_tipo(mysql_result($rs, $i, 'prod_tipo')); 
			 $obj->setProd_nItem(mysql_result($rs, $i, 'prod_nItem')); 
			 $obj->setProd_cProd(mysql_result($rs, $i, 'prod_cProd')); 
			 $obj->setProd_cEAN(mysql_result($rs, $i, 'prod_cEAN')); 
			 $obj->setProd_xProd(mysql_result($rs, $i, 'prod_xProd')); 
			 $obj->setProd_NCM(mysql_result($rs, $i, 'prod_NCM')); 
			 $obj->setProd_NVE(mysql_result($rs, $i, 'prod_NVE')); 
			 $obj->setProd_EXTIPI(mysql_result($rs, $i, 'prod_EXTIPI')); 
			 $obj->setProd_CFOP(mysql_result($rs, $i, 'prod_CFOP')); 
			 $obj->setProd_uCom(mysql_result($rs, $i, 'prod_uCom')); 
			 $obj->setProd_qCom(mysql_result($rs, $i, 'prod_qCom')); 
			 $obj->setProd_vUnCom(mysql_result($rs, $i, 'prod_vUnCom')); 
			 $obj->setProd_vProd(mysql_result($rs, $i, 'prod_vProd')); 
			 $obj->setProd_cEANTrib(mysql_result($rs, $i, 'prod_cEANTrib')); 
			 $obj->setProd_uTrib(mysql_result($rs, $i, 'prod_uTrib')); 
			 $obj->setProd_qTrib(mysql_result($rs, $i, 'prod_qTrib')); 
			 $obj->setProd_vUnTrib(mysql_result($rs, $i, 'prod_vUnTrib')); 
			 $obj->setProd_vFrete(mysql_result($rs, $i, 'prod_vFrete')); 
			 $obj->setProd_vSeg(mysql_result($rs, $i, 'prod_vSeg')); 
			 $obj->setProd_vDesc(mysql_result($rs, $i, 'prod_vDesc')); 
			 $obj->setProd_vOutro(mysql_result($rs, $i, 'prod_vOutro')); 
			 $obj->setProd_indTot(mysql_result($rs, $i, 'prod_indTot')); 
			 $obj->setProd_xPed(mysql_result($rs, $i, 'prod_xPed')); 
			 $obj->setProd_nItemPed(mysql_result($rs, $i, 'prod_nItemPed')); 
			 $obj->setProd_nFCI(mysql_result($rs, $i, 'prod_nFCI')); 
			 $obj->setVeic_nItem(mysql_result($rs, $i, 'veic_nItem')); 
			 $obj->setVeic_tpOp(mysql_result($rs, $i, 'veic_tpOp')); 
			 $obj->setVeic_chassi(mysql_result($rs, $i, 'veic_chassi')); 
			 $obj->setVeic_cCor(mysql_result($rs, $i, 'veic_cCor')); 
			 $obj->setVeic_xCor(mysql_result($rs, $i, 'veic_xCor')); 
			 $obj->setVeic_pot(mysql_result($rs, $i, 'veic_pot')); 
			 $obj->setVeic_cilin(mysql_result($rs, $i, 'veic_cilin')); 
			 $obj->setVeic_pesoL(mysql_result($rs, $i, 'veic_pesoL')); 
			 $obj->setVeic_pesoB(mysql_result($rs, $i, 'veic_pesoB')); 
			 $obj->setVeic_nSerie(mysql_result($rs, $i, 'veic_nSerie')); 
			 $obj->setVeic_tpComb(mysql_result($rs, $i, 'veic_tpComb')); 
			 $obj->setVeic_nMotor(mysql_result($rs, $i, 'veic_nMotor')); 
			 $obj->setVeic_cmt(mysql_result($rs, $i, 'veic_cmt')); 
			 $obj->setVeic_dist(mysql_result($rs, $i, 'veic_dist')); 
			 $obj->setVeic_anoMod(mysql_result($rs, $i, 'veic_anoMod')); 
			 $obj->setVeic_anoFab(mysql_result($rs, $i, 'veic_anoFab')); 
			 $obj->setVeic_tpPint(mysql_result($rs, $i, 'veic_tpPint')); 
			 $obj->setVeic_tpVeic(mysql_result($rs, $i, 'veic_tpVeic')); 
			 $obj->setVeic_espVeic(mysql_result($rs, $i, 'veic_espVeic')); 
			 $obj->setVeic_VIN(mysql_result($rs, $i, 'veic_VIN')); 
			 $obj->setVeic_condVeic(mysql_result($rs, $i, 'veic_condVeic')); 
			 $obj->setVeic_cMod(mysql_result($rs, $i, 'veic_cMod')); 
			 $obj->setVeic_cCorDENATRAN(mysql_result($rs, $i, 'veic_cCorDENATRAN')); 
			 $obj->setVeic_lota(mysql_result($rs, $i, 'veic_lota')); 
			 $obj->setVeic_tpRest(mysql_result($rs, $i, 'veic_tpRest')); 
			 $obj->setMed_nItem(mysql_result($rs, $i, 'med_nItem')); 
			 $obj->setMed_nLote(mysql_result($rs, $i, 'med_nLote')); 
			 $obj->setMed_qLote(mysql_result($rs, $i, 'med_qLote')); 
			 $obj->setMed_dFab(mysql_result($rs, $i, 'med_dFab')); 
			 $obj->setMed_dVal(mysql_result($rs, $i, 'med_dVal')); 
			 $obj->setMed_vPMC(mysql_result($rs, $i, 'med_vPMC')); 
			 $obj->setArma_nItem(mysql_result($rs, $i, 'arma_nItem')); 
			 $obj->setArma_tpArma(mysql_result($rs, $i, 'arma_tpArma')); 
			 $obj->setArma_nSerie(mysql_result($rs, $i, 'arma_nSerie')); 
			 $obj->setArma_nCano(mysql_result($rs, $i, 'arma_nCano')); 
			 $obj->setArma_descr(mysql_result($rs, $i, 'arma_descr')); 
			 $obj->setComb_nItem(mysql_result($rs, $i, 'comb_nItem')); 
			 $obj->setComb_cProdANP(mysql_result($rs, $i, 'comb_cProdANP')); 
			 $obj->setComb_pMixGN(mysql_result($rs, $i, 'comb_pMixGN')); 
			 $obj->setComb_codif(mysql_result($rs, $i, 'comb_codif')); 
			 $obj->setComb_qTemp(mysql_result($rs, $i, 'comb_qTemp')); 
			 $obj->setComb_ufCons(mysql_result($rs, $i, 'comb_ufCons')); 
			 $obj->setComb_qBCProd(mysql_result($rs, $i, 'comb_qBCProd')); 
			 $obj->setComb_vAliqProd(mysql_result($rs, $i, 'comb_vAliqProd')); 
			 $obj->setComb_vCIDE(mysql_result($rs, $i, 'comb_vCIDE')); 
			 $obj->setIcms_tipo(mysql_result($rs, $i, 'icms_tipo')); 
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
			 $obj->setIcmssn_nItem(mysql_result($rs, $i, 'icmssn_nItem')); 
			 $obj->setIcmssn_orig(mysql_result($rs, $i, 'icmssn_orig')); 
			 $obj->setIcmssn_csosn(mysql_result($rs, $i, 'icmssn_csosn')); 
			 $obj->setIcmssn_modBC(mysql_result($rs, $i, 'icmssn_modBC')); 
			 $obj->setIcmssn_vBC(mysql_result($rs, $i, 'icmssn_vBC')); 
			 $obj->setIcmssn_pRedBC(mysql_result($rs, $i, 'icmssn_pRedBC')); 
			 $obj->setIcmssn_pICMS(mysql_result($rs, $i, 'icmssn_pICMS')); 
			 $obj->setIcmssn_vICMS(mysql_result($rs, $i, 'icmssn_vICMS')); 
			 $obj->setIcmssn_pCredSN(mysql_result($rs, $i, 'icmssn_pCredSN')); 
			 $obj->setIcmssn_vCredICMSSN(mysql_result($rs, $i, 'icmssn_vCredICMSSN')); 
			 $obj->setIcmssn_modBCST(mysql_result($rs, $i, 'icmssn_modBCST')); 
			 $obj->setIcmssn_pMVAST(mysql_result($rs, $i, 'icmssn_pMVAST')); 
			 $obj->setIcmssn_pRedBCST(mysql_result($rs, $i, 'icmssn_pRedBCST')); 
			 $obj->setIcmssn_vBCST(mysql_result($rs, $i, 'icmssn_vBCST')); 
			 $obj->setIcmssn_pICMSST(mysql_result($rs, $i, 'icmssn_pICMSST')); 
			 $obj->setIcmssn_vICMSST(mysql_result($rs, $i, 'icmssn_vICMSST')); 
			 $obj->setIcmssn_vBCSTRet(mysql_result($rs, $i, 'icmssn_vBCSTRet')); 
			 $obj->setIcmssn_vICMSSTRet(mysql_result($rs, $i, 'icmssn_vICMSSTRet')); 
			 $obj->setIcmsst_nItem(mysql_result($rs, $i, 'icmsst_nItem')); 
			 $obj->setIcmsst_modBCST(mysql_result($rs, $i, 'icmsst_modBCST')); 
			 $obj->setIcmsst_pMVAST(mysql_result($rs, $i, 'icmsst_pMVAST')); 
			 $obj->setIcmsst_pRedBCST(mysql_result($rs, $i, 'icmsst_pRedBCST')); 
			 $obj->setIcmsst_vBCST(mysql_result($rs, $i, 'icmsst_vBCST')); 
			 $obj->setIcmsst_pICMSST(mysql_result($rs, $i, 'icmsst_pICMSST')); 
			 $obj->setIcmsst_vICMSST(mysql_result($rs, $i, 'icmsst_vICMSST')); 
			 $obj->setIcmsst_pBOCp(mysql_result($rs, $i, 'icmsst_pBOCp')); 
			 $obj->setIcmsst_UFST(mysql_result($rs, $i, 'icmsst_UFST')); 
			 $obj->setIpi_tipo(mysql_result($rs, $i, 'ipi_tipo')); 
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
			 $obj->setPis_tipo(mysql_result($rs, $i, 'pis_tipo')); 
			 $obj->setPis_nItem(mysql_result($rs, $i, 'pis_nItem')); 
			 $obj->setPis_cst(mysql_result($rs, $i, 'pis_cst')); 
			 $obj->setPis_vBC(mysql_result($rs, $i, 'pis_vBC')); 
			 $obj->setPis_pPIS(mysql_result($rs, $i, 'pis_pPIS')); 
			 $obj->setPis_vPIS(mysql_result($rs, $i, 'pis_vPIS')); 
			 $obj->setPis_qBCProd(mysql_result($rs, $i, 'pis_qBCProd')); 
			 $obj->setPis_vAliqProd(mysql_result($rs, $i, 'pis_vAliqProd')); 
			 $obj->setPisst_nItem(mysql_result($rs, $i, 'pisst_nItem')); 
			 $obj->setPisst_vBC(mysql_result($rs, $i, 'pisst_vBC')); 
			 $obj->setPisst_pPIS(mysql_result($rs, $i, 'pisst_pPIS')); 
			 $obj->setPisst_qBCProd(mysql_result($rs, $i, 'pisst_qBCProd')); 
			 $obj->setPisst_vAliqProd(mysql_result($rs, $i, 'pisst_vAliqProd')); 
			 $obj->setPisst_vPIS(mysql_result($rs, $i, 'pisst_vPIS')); 
			 $obj->setCofins_tipo(mysql_result($rs, $i, 'cofins_tipo')); 
			 $obj->setCofins_nItem(mysql_result($rs, $i, 'cofins_nItem')); 
			 $obj->setCofins_cst(mysql_result($rs, $i, 'cofins_cst')); 
			 $obj->setCofins_vBC(mysql_result($rs, $i, 'cofins_vBC')); 
			 $obj->setCofins_pCOFINS(mysql_result($rs, $i, 'cofins_pCOFINS')); 
			 $obj->setCofins_vCOFINS(mysql_result($rs, $i, 'cofins_vCOFINS')); 
			 $obj->setCofins_qBCProd(mysql_result($rs, $i, 'cofins_qBCProd')); 
			 $obj->setCofins_vAliqProd(mysql_result($rs, $i, 'cofins_vAliqProd')); 
			 $obj->setCofinsst_nItem(mysql_result($rs, $i, 'cofinsst_nItem')); 
			 $obj->setCofinsst_vBC(mysql_result($rs, $i, 'cofinsst_vBC')); 
			 $obj->setCofinsst_pCOFINS(mysql_result($rs, $i, 'cofinsst_pCOFINS')); 
			 $obj->setCofinsst_qBCProd(mysql_result($rs, $i, 'cofinsst_qBCProd')); 
			 $obj->setCofinsst_vAliqProd(mysql_result($rs, $i, 'cofinsst_vAliqProd')); 
			 $obj->setCofinsst_vCOFINS(mysql_result($rs, $i, 'cofinsst_vCOFINS')); 
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
			 $obj->setNve_nItem(mysql_result($rs, $i, 'nve_nItem')); 
			 $obj->setNve_texto(mysql_result($rs, $i, 'nve_texto')); 
			 $obj->setAII_nItem(mysql_result($rs, $i, 'aII_nItem')); 
			 $obj->setAII_vBC(mysql_result($rs, $i, 'aII_vBC')); 
			 $obj->setAII_vDespAdu(mysql_result($rs, $i, 'aII_vDespAdu')); 
			 $obj->setAII_vII(mysql_result($rs, $i, 'aII_vII')); 
			 $obj->setAII_vIOF(mysql_result($rs, $i, 'aII_vIOF')); 
			 $obj->setInfad_nItem(mysql_result($rs, $i, 'infad_nItem')); 
			 $obj->setInfad_inform(mysql_result($rs, $i, 'infad_inform')); 
			 $obj->setInfadic_nItem(mysql_result($rs, $i, 'infadic_nItem')); 
			 $obj->setInfadic_pDevol(mysql_result($rs, $i, 'infadic_pDevol')); 
			 $obj->setInfadic_vIPIDevol(mysql_result($rs, $i, 'infadic_vIPIDevol')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
} 
