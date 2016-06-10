<?php 
 /** Classe responsavel pelas transacoes da Tabela: Tabnfe. */ 
class TabnfeDAO { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO tabnfe ('; 
		 $sql .= 'ident_chave,';
		 $sql .= 'ident_versao,';
		 $sql .= 'Nfref_cUF,';
		 $sql .= 'Nfref_cNF,';
		 $sql .= 'Nfref_natOp,';
		 $sql .= 'Nfref_indPag,';
		 $sql .= 'Nfref_mod,';
		 $sql .= 'Nfref_serie,';
		 $sql .= 'Nfref_nNF,';
		 $sql .= 'Nfref_dhEmi,';
		 $sql .= 'Nfref_dhSaiEnt,';
		 $sql .= 'Nfref_tpNF,';
		 $sql .= 'Nfref_idDest,';
		 $sql .= 'Nfref_cMunFG,';
		 $sql .= 'Nfref_tpImp,';
		 $sql .= 'Nfref_tpEmis,';
		 $sql .= 'Nfref_cDV,';
		 $sql .= 'Nfref_tpAmb,';
		 $sql .= 'Nfref_finNFe,';
		 $sql .= 'Nfref_indFinal,';
		 $sql .= 'Nfref_indPres,';
		 $sql .= 'Nfref_procEmi,';
		 $sql .= 'Nfref_verProc,';
		 $sql .= 'Nfref_dhCont,';
		 $sql .= 'Nfref_xJust,';
		 $sql .= 'refnfe_refNFeCh,';
		 $sql .= 'refnfe_cUF,';
		 $sql .= 'refnfe_AAMM,';
		 $sql .= 'refnfe_CNPJ,';
		 $sql .= 'refnfe_mod,';
		 $sql .= 'refnfe_serie,';
		 $sql .= 'refnfe_nNF,';
		 $sql .= 'rural_cUF,';
		 $sql .= 'rural_AAMM,';
		 $sql .= 'rural_CNPJ,';
		 $sql .= 'rural_CPF,';
		 $sql .= 'rural_IE,';
		 $sql .= 'rural_mod,';
		 $sql .= 'rural_serie,';
		 $sql .= 'rural_nNF,';
		 $sql .= 'cteref_refCTe,';
		 $sql .= 'cteref_nECF,';
		 $sql .= 'cteref_nCOO,';
		 $sql .= 'ecferef_mod,';
		 $sql .= 'emit_CNPJ,';
		 $sql .= 'emit_xNome,';
		 $sql .= 'emit_xFant,';
		 $sql .= 'emit_IE,';
		 $sql .= 'emit_IEST,';
		 $sql .= 'emit_IM,';
		 $sql .= 'emit_CNAE,';
		 $sql .= 'emit_CRT,';
		 $sql .= 'ender_emit_xLgr,';
		 $sql .= 'ender_emit_nro,';
		 $sql .= 'ender_emit_xCpl,';
		 $sql .= 'ender_emit_xBairro,';
		 $sql .= 'ender_emit_cMun,';
		 $sql .= 'ender_emit_xMun,';
		 $sql .= 'ender_emit_UF,';
		 $sql .= 'ender_emit_CEP,';
		 $sql .= 'ender_emit_cPais,';
		 $sql .= 'ender_emit_xPais,';
		 $sql .= 'ender_emit_fone,';
		 $sql .= 'det_CNPJ,';
		 $sql .= 'det_CPF,';
		 $sql .= 'det_idEstrangeiro,';
		 $sql .= 'det_xNome,';
		 $sql .= 'det_indIEDest,';
		 $sql .= 'det_IE,';
		 $sql .= 'det_ISUF,';
		 $sql .= 'det_IM,';
		 $sql .= 'det_email,';
		 $sql .= 'ender_dest_xLgr,';
		 $sql .= 'ender_dest_nro,';
		 $sql .= 'ender_dest_xCpl,';
		 $sql .= 'ender_dest_xBairro,';
		 $sql .= 'ender_dest_cMun,';
		 $sql .= 'ender_dest_xMun,';
		 $sql .= 'ender_dest_UF,';
		 $sql .= 'ender_dest_CEP,';
		 $sql .= 'ender_dest_cPais,';
		 $sql .= 'ender_dest_xPais,';
		 $sql .= 'ender_dest_fone,';
		 $sql .= 'retirada_CNPJ,';
		 $sql .= 'retirada_CPF,';
		 $sql .= 'retirada_xLgr,';
		 $sql .= 'retirada_nro,';
		 $sql .= 'retirada_xCpl,';
		 $sql .= 'retirada_xBairro,';
		 $sql .= 'retirada_cMun,';
		 $sql .= 'retirada_xMun,';
		 $sql .= 'retirada_UF,';
		 $sql .= 'entrega_CNPJ,';
		 $sql .= 'entrega_CPF,';
		 $sql .= 'entrega_xLgr,';
		 $sql .= 'entrega_nro,';
		 $sql .= 'entrega_xCpl,';
		 $sql .= 'entrega_xBairro,';
		 $sql .= 'entrega_cMun,';
		 $sql .= 'entrega_xMun,';
		 $sql .= 'entrega_UF,';
		 $sql .= 'pag_CNPJ,';
		 $sql .= 'pag_tBand,';
		 $sql .= 'pag_cAut,';
		 $sql .= 'cobr_nFat,';
		 $sql .= 'cobr_vOrig,';
		 $sql .= 'cobr_vDesc,';
		 $sql .= 'cobr_vLiq,';
		 $sql .= 'pagt_pagT,';
		 $sql .= 'dup_aDup,';
		 $sql .= 'modfrete_modFrete,';
		 $sql .= 'transp_CNPJ,';
		 $sql .= 'transp_CPF,';
		 $sql .= 'transp_xNome,';
		 $sql .= 'transp_IE,';
		 $sql .= 'transp_xEnder,';
		 $sql .= 'transp_xMun,';
		 $sql .= 'transp_UF,';
		 $sql .= 'ret_transp_vServ,';
		 $sql .= 'ret_transp_vBCRet,';
		 $sql .= 'ret_transp_pICMSRet,';
		 $sql .= 'ret_transp_vICMSRet,';
		 $sql .= 'ret_transp_CFOP,';
		 $sql .= 'ret_transp_cMunFG,';
		 $sql .= 'reboque_placa,';
		 $sql .= 'reboque_siglaUF,';
		 $sql .= 'reboque_rntc,';
		 $sql .= 'reboque_vagao,';
		 $sql .= 'reboque_balsa,';
		 $sql .= 'vol_Qvol,';
		 $sql .= 'vol_Esp,';
		 $sql .= 'vol_Marca,';
		 $sql .= 'vol_nVol,';
		 $sql .= 'vol_pesoL,';
		 $sql .= 'vol_pesoB,';
		 $sql .= 'vol_aLacres,';
		 $sql .= 'exporta_UFSaidaPais,';
		 $sql .= 'exporta_xLocExporta,';
		 $sql .= 'exporta_xLocDespacho,';
		 $sql .= 'compra_xNEmp,';
		 $sql .= 'compra_xPed,';
		 $sql .= 'compra_xCont,';
		 $sql .= 'reboque_aReboque,';
		 $sql .= 'det_export_nItem,';
		 $sql .= 'det_export_nDraw,';
		 $sql .= 'det_export_exportInd,';
		 $sql .= 'det_export_nRE,';
		 $sql .= 'det_export_chNFe,';
		 $sql .= 'det_export_qExport,';
		 $sql .= 'veic_transp_placa,';
		 $sql .= 'veic_transp_UF,';
		 $sql .= 'veic_transp_RNTC,';
		 $sql .= 'obs_fisco_aObsFisco,';
		 $sql .= 'autxml_aAutXML,';
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
		 $sql .= 'infadic_inform,';
		 $sql .= 'total_vBC,';
		 $sql .= 'total_vICMS,';
		 $sql .= 'total_vICMSDeson,';
		 $sql .= 'total_vBCST,';
		 $sql .= 'total_vST,';
		 $sql .= 'total_vProd,';
		 $sql .= 'total_vDesc,';
		 $sql .= 'total_vIPI,';
		 $sql .= 'total_vPIS,';
		 $sql .= 'total_vCOFINS,';
		 $sql .= 'total_vNF,';
		 $sql .= 'total_vFrete,';
		 $sql .= 'total_vSeg,';
		 $sql .= 'total_vII,';
		 $sql .= 'total_vOutro,';
		 $sql .= 'total_vtotal';
		 $sql .= ') VALUES ('; 
		 $sql .= '\''.$obj->getIdent_chave().'\',';
		 $sql .= '\''.$obj->getIdent_versao().'\',';
		 $sql .= '\''.$obj->getNfref_cUF().'\',';
		 $sql .= '\''.$obj->getNfref_cNF().'\',';
		 $sql .= '\''.$obj->getNfref_natOp().'\',';
		 $sql .= ($obj->getNfref_indPag()?$obj->getNfref_indPag():0).',';
		 $sql .= ($obj->getNfref_mod()?$obj->getNfref_mod():0).',';
		 $sql .= '\''.$obj->getNfref_serie().'\',';
		 $sql .= '\''.$obj->getNfref_nNF().'\',';
		 $sql .= '\''.$obj->getNfref_dhEmi().'\',';
		 $sql .= '\''.$obj->getNfref_dhSaiEnt().'\',';
		 $sql .= '\''.$obj->getNfref_tpNF().'\',';
		 $sql .= ($obj->getNfref_idDest()?$obj->getNfref_idDest():0).',';
		 $sql .= ($obj->getNfref_cMunFG()?$obj->getNfref_cMunFG():0).',';
		 $sql .= ($obj->getNfref_tpImp()?$obj->getNfref_tpImp():0).',';
		 $sql .= ($obj->getNfref_tpEmis()?$obj->getNfref_tpEmis():0).',';
		 $sql .= ($obj->getNfref_cDV()?$obj->getNfref_cDV():0).',';
		 $sql .= ($obj->getNfref_tpAmb()?$obj->getNfref_tpAmb():0).',';
		 $sql .= ($obj->getNfref_finNFe()?$obj->getNfref_finNFe():0).',';
		 $sql .= ($obj->getNfref_indFinal()?$obj->getNfref_indFinal():0).',';
		 $sql .= ($obj->getNfref_indPres()?$obj->getNfref_indPres():0).',';
		 $sql .= ($obj->getNfref_procEmi()?$obj->getNfref_procEmi():0).',';
		 $sql .= '\''.$obj->getNfref_verProc().'\',';
		 $sql .= '\''.$obj->getNfref_dhCont().'\',';
		 $sql .= '\''.$obj->getNfref_xJust().'\',';
		 $sql .= '\''.$obj->getRefnfe_refNFeCh().'\',';
		 $sql .= '\''.$obj->getRefnfe_cUF().'\',';
		 $sql .= '\''.$obj->getRefnfe_AAMM().'\',';
		 $sql .= '\''.$obj->getRefnfe_CNPJ().'\',';
		 $sql .= '\''.$obj->getRefnfe_mod().'\',';
		 $sql .= '\''.$obj->getRefnfe_serie().'\',';
		 $sql .= '\''.$obj->getRefnfe_nNF().'\',';
		 $sql .= '\''.$obj->getRural_cUF().'\',';
		 $sql .= '\''.$obj->getRural_AAMM().'\',';
		 $sql .= '\''.$obj->getRural_CNPJ().'\',';
		 $sql .= '\''.$obj->getRural_CPF().'\',';
		 $sql .= '\''.$obj->getRural_IE().'\',';
		 $sql .= '\''.$obj->getRural_mod().'\',';
		 $sql .= '\''.$obj->getRural_serie().'\',';
		 $sql .= '\''.$obj->getRural_nNF().'\',';
		 $sql .= '\''.$obj->getCteref_refCTe().'\',';
		 $sql .= '\''.$obj->getCteref_nECF().'\',';
		 $sql .= '\''.$obj->getCteref_nCOO().'\',';
		 $sql .= '\''.$obj->getEcferef_mod().'\',';
		 $sql .= '\''.$obj->getEmit_CNPJ().'\',';
		 $sql .= '\''.$obj->getEmit_xNome().'\',';
		 $sql .= '\''.$obj->getEmit_xFant().'\',';
		 $sql .= '\''.$obj->getEmit_IE().'\',';
		 $sql .= '\''.$obj->getEmit_IEST().'\',';
		 $sql .= '\''.$obj->getEmit_IM().'\',';
		 $sql .= '\''.$obj->getEmit_CNAE().'\',';
		 $sql .= '\''.$obj->getEmit_CRT().'\',';
		 $sql .= '\''.$obj->getEnder_emit_xLgr().'\',';
		 $sql .= '\''.$obj->getEnder_emit_nro().'\',';
		 $sql .= '\''.$obj->getEnder_emit_xCpl().'\',';
		 $sql .= '\''.$obj->getEnder_emit_xBairro().'\',';
		 $sql .= '\''.$obj->getEnder_emit_cMun().'\',';
		 $sql .= '\''.$obj->getEnder_emit_xMun().'\',';
		 $sql .= '\''.$obj->getEnder_emit_UF().'\',';
		 $sql .= '\''.$obj->getEnder_emit_CEP().'\',';
		 $sql .= '\''.$obj->getEnder_emit_cPais().'\',';
		 $sql .= '\''.$obj->getEnder_emit_xPais().'\',';
		 $sql .= '\''.$obj->getEnder_emit_fone().'\',';
		 $sql .= '\''.$obj->getDet_CNPJ().'\',';
		 $sql .= '\''.$obj->getDet_CPF().'\',';
		 $sql .= '\''.$obj->getDet_idEstrangeiro().'\',';
		 $sql .= '\''.$obj->getDet_xNome().'\',';
		 $sql .= '\''.$obj->getDet_indIEDest().'\',';
		 $sql .= '\''.$obj->getDet_IE().'\',';
		 $sql .= '\''.$obj->getDet_ISUF().'\',';
		 $sql .= '\''.$obj->getDet_IM().'\',';
		 $sql .= '\''.$obj->getDet_email().'\',';
		 $sql .= '\''.$obj->getEnder_dest_xLgr().'\',';
		 $sql .= '\''.$obj->getEnder_dest_nro().'\',';
		 $sql .= '\''.$obj->getEnder_dest_xCpl().'\',';
		 $sql .= '\''.$obj->getEnder_dest_xBairro().'\',';
		 $sql .= '\''.$obj->getEnder_dest_cMun().'\',';
		 $sql .= '\''.$obj->getEnder_dest_xMun().'\',';
		 $sql .= '\''.$obj->getEnder_dest_UF().'\',';
		 $sql .= '\''.$obj->getEnder_dest_CEP().'\',';
		 $sql .= '\''.$obj->getEnder_dest_cPais().'\',';
		 $sql .= '\''.$obj->getEnder_dest_xPais().'\',';
		 $sql .= '\''.$obj->getEnder_dest_fone().'\',';
		 $sql .= '\''.$obj->getRetirada_CNPJ().'\',';
		 $sql .= '\''.$obj->getRetirada_CPF().'\',';
		 $sql .= '\''.$obj->getRetirada_xLgr().'\',';
		 $sql .= '\''.$obj->getRetirada_nro().'\',';
		 $sql .= '\''.$obj->getRetirada_xCpl().'\',';
		 $sql .= '\''.$obj->getRetirada_xBairro().'\',';
		 $sql .= '\''.$obj->getRetirada_cMun().'\',';
		 $sql .= '\''.$obj->getRetirada_xMun().'\',';
		 $sql .= '\''.$obj->getRetirada_UF().'\',';
		 $sql .= '\''.$obj->getEntrega_CNPJ().'\',';
		 $sql .= '\''.$obj->getEntrega_CPF().'\',';
		 $sql .= '\''.$obj->getEntrega_xLgr().'\',';
		 $sql .= '\''.$obj->getEntrega_nro().'\',';
		 $sql .= '\''.$obj->getEntrega_xCpl().'\',';
		 $sql .= '\''.$obj->getEntrega_xBairro().'\',';
		 $sql .= '\''.$obj->getEntrega_cMun().'\',';
		 $sql .= '\''.$obj->getEntrega_xMun().'\',';
		 $sql .= '\''.$obj->getEntrega_UF().'\',';
		 $sql .= '\''.$obj->getPag_CNPJ().'\',';
		 $sql .= '\''.$obj->getPag_tBand().'\',';
		 $sql .= '\''.$obj->getPag_cAut().'\',';
		 $sql .= '\''.$obj->getCobr_nFat().'\',';
		 $sql .= '\''.$obj->getCobr_vOrig().'\',';
		 $sql .= '\''.$obj->getCobr_vDesc().'\',';
		 $sql .= '\''.$obj->getCobr_vLiq().'\',';
		 $sql .= '\''.$obj->getPagt_pagT().'\',';
		 $sql .= '\''.$obj->getDup_aDup().'\',';
		 $sql .= '\''.$obj->getModfrete_modFrete().'\',';
		 $sql .= '\''.$obj->getTransp_CNPJ().'\',';
		 $sql .= '\''.$obj->getTransp_CPF().'\',';
		 $sql .= '\''.$obj->getTransp_xNome().'\',';
		 $sql .= '\''.$obj->getTransp_IE().'\',';
		 $sql .= '\''.$obj->getTransp_xEnder().'\',';
		 $sql .= '\''.$obj->getTransp_xMun().'\',';
		 $sql .= '\''.$obj->getTransp_UF().'\',';
		 $sql .= '\''.$obj->getRet_transp_vServ().'\',';
		 $sql .= '\''.$obj->getRet_transp_vBCRet().'\',';
		 $sql .= '\''.$obj->getRet_transp_pICMSRet().'\',';
		 $sql .= '\''.$obj->getRet_transp_vICMSRet().'\',';
		 $sql .= '\''.$obj->getRet_transp_CFOP().'\',';
		 $sql .= '\''.$obj->getRet_transp_cMunFG().'\',';
		 $sql .= '\''.$obj->getReboque_placa().'\',';
		 $sql .= '\''.$obj->getReboque_siglaUF().'\',';
		 $sql .= '\''.$obj->getReboque_rntc().'\',';
		 $sql .= '\''.$obj->getReboque_vagao().'\',';
		 $sql .= '\''.$obj->getReboque_balsa().'\',';
		 $sql .= '\''.$obj->getVol_Qvol().'\',';
		 $sql .= '\''.$obj->getVol_Esp().'\',';
		 $sql .= '\''.$obj->getVol_Marca().'\',';
		 $sql .= '\''.$obj->getVol_nVol().'\',';
		 $sql .= '\''.$obj->getVol_pesoL().'\',';
		 $sql .= '\''.$obj->getVol_pesoB().'\',';
		 $sql .= '\''.$obj->getVol_aLacres().'\',';
		 $sql .= '\''.$obj->getExporta_UFSaidaPais().'\',';
		 $sql .= '\''.$obj->getExporta_xLocExporta().'\',';
		 $sql .= '\''.$obj->getExporta_xLocDespacho().'\',';
		 $sql .= '\''.$obj->getCompra_xNEmp().'\',';
		 $sql .= '\''.$obj->getCompra_xPed().'\',';
		 $sql .= '\''.$obj->getCompra_xCont().'\',';
		 $sql .= '\''.$obj->getReboque_aReboque().'\',';
		 $sql .= '\''.$obj->getDet_export_nItem().'\',';
		 $sql .= '\''.$obj->getDet_export_nDraw().'\',';
		 $sql .= '\''.$obj->getDet_export_exportInd().'\',';
		 $sql .= '\''.$obj->getDet_export_nRE().'\',';
		 $sql .= '\''.$obj->getDet_export_chNFe().'\',';
		 $sql .= '\''.$obj->getDet_export_qExport().'\',';
		 $sql .= '\''.$obj->getVeic_transp_placa().'\',';
		 $sql .= '\''.$obj->getVeic_transp_UF().'\',';
		 $sql .= '\''.$obj->getVeic_transp_RNTC().'\',';
		 $sql .= '\''.$obj->getObs_fisco_aObsFisco().'\',';
		 $sql .= '\''.$obj->getAutxml_aAutXML().'\',';
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
		 $sql .= '\''.$obj->getInfadic_inform().'\',';
		 $sql .= '\''.$obj->getTotal_vBC().'\',';
		 $sql .= '\''.$obj->getTotal_vICMS().'\',';
		 $sql .= '\''.$obj->getTotal_vICMSDeson().'\',';
		 $sql .= '\''.$obj->getTotal_vBCST().'\',';
		 $sql .= '\''.$obj->getTotal_vST().'\',';
		 $sql .= '\''.$obj->getTotal_vProd().'\',';
		 $sql .= '\''.$obj->getTotal_vDesc().'\',';
		 $sql .= '\''.$obj->getTotal_vIPI().'\',';
		 $sql .= '\''.$obj->getTotal_vPIS().'\',';
		 $sql .= '\''.$obj->getTotal_vCOFINS().'\',';
		 $sql .= '\''.$obj->getTotal_vNF().'\',';
		 $sql .= '\''.$obj->getTotal_vFrete().'\',';
		 $sql .= '\''.$obj->getTotal_vSeg().'\',';
		 $sql .= '\''.$obj->getTotal_vII().'\',';
		 $sql .= '\''.$obj->getTotal_vOutro().'\',';
		 $sql .= ($obj->getTotal_vtotal()?$obj->getTotal_vtotal():0);
		 $sql .= ')'; 
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function update($obj){
		 $sql = 'UPDATE tabnfe SET '; 
		 $sql .= 'ident_chave = '.'\''.$obj->getIdent_chave().'\' ,';
		 $sql .= 'ident_versao = '.'\''.$obj->getIdent_versao().'\' ,';
		 $sql .= 'Nfref_cUF = '.'\''.$obj->getNfref_cUF().'\' ,';
		 $sql .= 'Nfref_cNF = '.'\''.$obj->getNfref_cNF().'\' ,';
		 $sql .= 'Nfref_natOp = '.'\''.$obj->getNfref_natOp().'\' ,';
		 $sql .= 'Nfref_indPag = '.($obj->getNfref_indPag()?$obj->getNfref_indPag():0).',';
		 $sql .= 'Nfref_mod = '.($obj->getNfref_mod()?$obj->getNfref_mod():0).',';
		 $sql .= 'Nfref_serie = '.'\''.$obj->getNfref_serie().'\' ,';
		 $sql .= 'Nfref_nNF = '.'\''.$obj->getNfref_nNF().'\' ,';
		 $sql .= 'Nfref_dhEmi = '.'\''.$obj->getNfref_dhEmi().'\' ,';
		 $sql .= 'Nfref_dhSaiEnt = '.'\''.$obj->getNfref_dhSaiEnt().'\' ,';
		 $sql .= 'Nfref_tpNF = '.'\''.$obj->getNfref_tpNF().'\' ,';
		 $sql .= 'Nfref_idDest = '.($obj->getNfref_idDest()?$obj->getNfref_idDest():0).',';
		 $sql .= 'Nfref_cMunFG = '.($obj->getNfref_cMunFG()?$obj->getNfref_cMunFG():0).',';
		 $sql .= 'Nfref_tpImp = '.($obj->getNfref_tpImp()?$obj->getNfref_tpImp():0).',';
		 $sql .= 'Nfref_tpEmis = '.($obj->getNfref_tpEmis()?$obj->getNfref_tpEmis():0).',';
		 $sql .= 'Nfref_cDV = '.($obj->getNfref_cDV()?$obj->getNfref_cDV():0).',';
		 $sql .= 'Nfref_tpAmb = '.($obj->getNfref_tpAmb()?$obj->getNfref_tpAmb():0).',';
		 $sql .= 'Nfref_finNFe = '.($obj->getNfref_finNFe()?$obj->getNfref_finNFe():0).',';
		 $sql .= 'Nfref_indFinal = '.($obj->getNfref_indFinal()?$obj->getNfref_indFinal():0).',';
		 $sql .= 'Nfref_indPres = '.($obj->getNfref_indPres()?$obj->getNfref_indPres():0).',';
		 $sql .= 'Nfref_procEmi = '.($obj->getNfref_procEmi()?$obj->getNfref_procEmi():0).',';
		 $sql .= 'Nfref_verProc = '.'\''.$obj->getNfref_verProc().'\' ,';
		 $sql .= 'Nfref_dhCont = '.'\''.$obj->getNfref_dhCont().'\' ,';
		 $sql .= 'Nfref_xJust = '.'\''.$obj->getNfref_xJust().'\' ,';
		 $sql .= 'refnfe_refNFeCh = '.'\''.$obj->getRefnfe_refNFeCh().'\' ,';
		 $sql .= 'refnfe_cUF = '.'\''.$obj->getRefnfe_cUF().'\' ,';
		 $sql .= 'refnfe_AAMM = '.'\''.$obj->getRefnfe_AAMM().'\' ,';
		 $sql .= 'refnfe_CNPJ = '.'\''.$obj->getRefnfe_CNPJ().'\' ,';
		 $sql .= 'refnfe_mod = '.'\''.$obj->getRefnfe_mod().'\' ,';
		 $sql .= 'refnfe_serie = '.'\''.$obj->getRefnfe_serie().'\' ,';
		 $sql .= 'refnfe_nNF = '.'\''.$obj->getRefnfe_nNF().'\' ,';
		 $sql .= 'rural_cUF = '.'\''.$obj->getRural_cUF().'\' ,';
		 $sql .= 'rural_AAMM = '.'\''.$obj->getRural_AAMM().'\' ,';
		 $sql .= 'rural_CNPJ = '.'\''.$obj->getRural_CNPJ().'\' ,';
		 $sql .= 'rural_CPF = '.'\''.$obj->getRural_CPF().'\' ,';
		 $sql .= 'rural_IE = '.'\''.$obj->getRural_IE().'\' ,';
		 $sql .= 'rural_mod = '.'\''.$obj->getRural_mod().'\' ,';
		 $sql .= 'rural_serie = '.'\''.$obj->getRural_serie().'\' ,';
		 $sql .= 'rural_nNF = '.'\''.$obj->getRural_nNF().'\' ,';
		 $sql .= 'cteref_refCTe = '.'\''.$obj->getCteref_refCTe().'\' ,';
		 $sql .= 'cteref_nECF = '.'\''.$obj->getCteref_nECF().'\' ,';
		 $sql .= 'cteref_nCOO = '.'\''.$obj->getCteref_nCOO().'\' ,';
		 $sql .= 'ecferef_mod = '.'\''.$obj->getEcferef_mod().'\' ,';
		 $sql .= 'emit_CNPJ = '.'\''.$obj->getEmit_CNPJ().'\' ,';
		 $sql .= 'emit_xNome = '.'\''.$obj->getEmit_xNome().'\' ,';
		 $sql .= 'emit_xFant = '.'\''.$obj->getEmit_xFant().'\' ,';
		 $sql .= 'emit_IE = '.'\''.$obj->getEmit_IE().'\' ,';
		 $sql .= 'emit_IEST = '.'\''.$obj->getEmit_IEST().'\' ,';
		 $sql .= 'emit_IM = '.'\''.$obj->getEmit_IM().'\' ,';
		 $sql .= 'emit_CNAE = '.'\''.$obj->getEmit_CNAE().'\' ,';
		 $sql .= 'emit_CRT = '.'\''.$obj->getEmit_CRT().'\' ,';
		 $sql .= 'ender_emit_xLgr = '.'\''.$obj->getEnder_emit_xLgr().'\' ,';
		 $sql .= 'ender_emit_nro = '.'\''.$obj->getEnder_emit_nro().'\' ,';
		 $sql .= 'ender_emit_xCpl = '.'\''.$obj->getEnder_emit_xCpl().'\' ,';
		 $sql .= 'ender_emit_xBairro = '.'\''.$obj->getEnder_emit_xBairro().'\' ,';
		 $sql .= 'ender_emit_cMun = '.'\''.$obj->getEnder_emit_cMun().'\' ,';
		 $sql .= 'ender_emit_xMun = '.'\''.$obj->getEnder_emit_xMun().'\' ,';
		 $sql .= 'ender_emit_UF = '.'\''.$obj->getEnder_emit_UF().'\' ,';
		 $sql .= 'ender_emit_CEP = '.'\''.$obj->getEnder_emit_CEP().'\' ,';
		 $sql .= 'ender_emit_cPais = '.'\''.$obj->getEnder_emit_cPais().'\' ,';
		 $sql .= 'ender_emit_xPais = '.'\''.$obj->getEnder_emit_xPais().'\' ,';
		 $sql .= 'ender_emit_fone = '.'\''.$obj->getEnder_emit_fone().'\' ,';
		 $sql .= 'det_CNPJ = '.'\''.$obj->getDet_CNPJ().'\' ,';
		 $sql .= 'det_CPF = '.'\''.$obj->getDet_CPF().'\' ,';
		 $sql .= 'det_idEstrangeiro = '.'\''.$obj->getDet_idEstrangeiro().'\' ,';
		 $sql .= 'det_xNome = '.'\''.$obj->getDet_xNome().'\' ,';
		 $sql .= 'det_indIEDest = '.'\''.$obj->getDet_indIEDest().'\' ,';
		 $sql .= 'det_IE = '.'\''.$obj->getDet_IE().'\' ,';
		 $sql .= 'det_ISUF = '.'\''.$obj->getDet_ISUF().'\' ,';
		 $sql .= 'det_IM = '.'\''.$obj->getDet_IM().'\' ,';
		 $sql .= 'det_email = '.'\''.$obj->getDet_email().'\' ,';
		 $sql .= 'ender_dest_xLgr = '.'\''.$obj->getEnder_dest_xLgr().'\' ,';
		 $sql .= 'ender_dest_nro = '.'\''.$obj->getEnder_dest_nro().'\' ,';
		 $sql .= 'ender_dest_xCpl = '.'\''.$obj->getEnder_dest_xCpl().'\' ,';
		 $sql .= 'ender_dest_xBairro = '.'\''.$obj->getEnder_dest_xBairro().'\' ,';
		 $sql .= 'ender_dest_cMun = '.'\''.$obj->getEnder_dest_cMun().'\' ,';
		 $sql .= 'ender_dest_xMun = '.'\''.$obj->getEnder_dest_xMun().'\' ,';
		 $sql .= 'ender_dest_UF = '.'\''.$obj->getEnder_dest_UF().'\' ,';
		 $sql .= 'ender_dest_CEP = '.'\''.$obj->getEnder_dest_CEP().'\' ,';
		 $sql .= 'ender_dest_cPais = '.'\''.$obj->getEnder_dest_cPais().'\' ,';
		 $sql .= 'ender_dest_xPais = '.'\''.$obj->getEnder_dest_xPais().'\' ,';
		 $sql .= 'ender_dest_fone = '.'\''.$obj->getEnder_dest_fone().'\' ,';
		 $sql .= 'retirada_CNPJ = '.'\''.$obj->getRetirada_CNPJ().'\' ,';
		 $sql .= 'retirada_CPF = '.'\''.$obj->getRetirada_CPF().'\' ,';
		 $sql .= 'retirada_xLgr = '.'\''.$obj->getRetirada_xLgr().'\' ,';
		 $sql .= 'retirada_nro = '.'\''.$obj->getRetirada_nro().'\' ,';
		 $sql .= 'retirada_xCpl = '.'\''.$obj->getRetirada_xCpl().'\' ,';
		 $sql .= 'retirada_xBairro = '.'\''.$obj->getRetirada_xBairro().'\' ,';
		 $sql .= 'retirada_cMun = '.'\''.$obj->getRetirada_cMun().'\' ,';
		 $sql .= 'retirada_xMun = '.'\''.$obj->getRetirada_xMun().'\' ,';
		 $sql .= 'retirada_UF = '.'\''.$obj->getRetirada_UF().'\' ,';
		 $sql .= 'entrega_CNPJ = '.'\''.$obj->getEntrega_CNPJ().'\' ,';
		 $sql .= 'entrega_CPF = '.'\''.$obj->getEntrega_CPF().'\' ,';
		 $sql .= 'entrega_xLgr = '.'\''.$obj->getEntrega_xLgr().'\' ,';
		 $sql .= 'entrega_nro = '.'\''.$obj->getEntrega_nro().'\' ,';
		 $sql .= 'entrega_xCpl = '.'\''.$obj->getEntrega_xCpl().'\' ,';
		 $sql .= 'entrega_xBairro = '.'\''.$obj->getEntrega_xBairro().'\' ,';
		 $sql .= 'entrega_cMun = '.'\''.$obj->getEntrega_cMun().'\' ,';
		 $sql .= 'entrega_xMun = '.'\''.$obj->getEntrega_xMun().'\' ,';
		 $sql .= 'entrega_UF = '.'\''.$obj->getEntrega_UF().'\' ,';
		 $sql .= 'pag_CNPJ = '.'\''.$obj->getPag_CNPJ().'\' ,';
		 $sql .= 'pag_tBand = '.'\''.$obj->getPag_tBand().'\' ,';
		 $sql .= 'pag_cAut = '.'\''.$obj->getPag_cAut().'\' ,';
		 $sql .= 'cobr_nFat = '.'\''.$obj->getCobr_nFat().'\' ,';
		 $sql .= 'cobr_vOrig = '.'\''.$obj->getCobr_vOrig().'\' ,';
		 $sql .= 'cobr_vDesc = '.'\''.$obj->getCobr_vDesc().'\' ,';
		 $sql .= 'cobr_vLiq = '.'\''.$obj->getCobr_vLiq().'\' ,';
		 $sql .= 'pagt_pagT = '.'\''.$obj->getPagt_pagT().'\' ,';
		 $sql .= 'dup_aDup = '.'\''.$obj->getDup_aDup().'\' ,';
		 $sql .= 'modfrete_modFrete = '.'\''.$obj->getModfrete_modFrete().'\' ,';
		 $sql .= 'transp_CNPJ = '.'\''.$obj->getTransp_CNPJ().'\' ,';
		 $sql .= 'transp_CPF = '.'\''.$obj->getTransp_CPF().'\' ,';
		 $sql .= 'transp_xNome = '.'\''.$obj->getTransp_xNome().'\' ,';
		 $sql .= 'transp_IE = '.'\''.$obj->getTransp_IE().'\' ,';
		 $sql .= 'transp_xEnder = '.'\''.$obj->getTransp_xEnder().'\' ,';
		 $sql .= 'transp_xMun = '.'\''.$obj->getTransp_xMun().'\' ,';
		 $sql .= 'transp_UF = '.'\''.$obj->getTransp_UF().'\' ,';
		 $sql .= 'ret_transp_vServ = '.'\''.$obj->getRet_transp_vServ().'\' ,';
		 $sql .= 'ret_transp_vBCRet = '.'\''.$obj->getRet_transp_vBCRet().'\' ,';
		 $sql .= 'ret_transp_pICMSRet = '.'\''.$obj->getRet_transp_pICMSRet().'\' ,';
		 $sql .= 'ret_transp_vICMSRet = '.'\''.$obj->getRet_transp_vICMSRet().'\' ,';
		 $sql .= 'ret_transp_CFOP = '.'\''.$obj->getRet_transp_CFOP().'\' ,';
		 $sql .= 'ret_transp_cMunFG = '.'\''.$obj->getRet_transp_cMunFG().'\' ,';
		 $sql .= 'reboque_placa = '.'\''.$obj->getReboque_placa().'\' ,';
		 $sql .= 'reboque_siglaUF = '.'\''.$obj->getReboque_siglaUF().'\' ,';
		 $sql .= 'reboque_rntc = '.'\''.$obj->getReboque_rntc().'\' ,';
		 $sql .= 'reboque_vagao = '.'\''.$obj->getReboque_vagao().'\' ,';
		 $sql .= 'reboque_balsa = '.'\''.$obj->getReboque_balsa().'\' ,';
		 $sql .= 'vol_Qvol = '.'\''.$obj->getVol_Qvol().'\' ,';
		 $sql .= 'vol_Esp = '.'\''.$obj->getVol_Esp().'\' ,';
		 $sql .= 'vol_Marca = '.'\''.$obj->getVol_Marca().'\' ,';
		 $sql .= 'vol_nVol = '.'\''.$obj->getVol_nVol().'\' ,';
		 $sql .= 'vol_pesoL = '.'\''.$obj->getVol_pesoL().'\' ,';
		 $sql .= 'vol_pesoB = '.'\''.$obj->getVol_pesoB().'\' ,';
		 $sql .= 'vol_aLacres = '.'\''.$obj->getVol_aLacres().'\' ,';
		 $sql .= 'exporta_UFSaidaPais = '.'\''.$obj->getExporta_UFSaidaPais().'\' ,';
		 $sql .= 'exporta_xLocExporta = '.'\''.$obj->getExporta_xLocExporta().'\' ,';
		 $sql .= 'exporta_xLocDespacho = '.'\''.$obj->getExporta_xLocDespacho().'\' ,';
		 $sql .= 'compra_xNEmp = '.'\''.$obj->getCompra_xNEmp().'\' ,';
		 $sql .= 'compra_xPed = '.'\''.$obj->getCompra_xPed().'\' ,';
		 $sql .= 'compra_xCont = '.'\''.$obj->getCompra_xCont().'\' ,';
		 $sql .= 'reboque_aReboque = '.'\''.$obj->getReboque_aReboque().'\' ,';
		 $sql .= 'det_export_nItem = '.'\''.$obj->getDet_export_nItem().'\' ,';
		 $sql .= 'det_export_nDraw = '.'\''.$obj->getDet_export_nDraw().'\' ,';
		 $sql .= 'det_export_exportInd = '.'\''.$obj->getDet_export_exportInd().'\' ,';
		 $sql .= 'det_export_nRE = '.'\''.$obj->getDet_export_nRE().'\' ,';
		 $sql .= 'det_export_chNFe = '.'\''.$obj->getDet_export_chNFe().'\' ,';
		 $sql .= 'det_export_qExport = '.'\''.$obj->getDet_export_qExport().'\' ,';
		 $sql .= 'veic_transp_placa = '.'\''.$obj->getVeic_transp_placa().'\' ,';
		 $sql .= 'veic_transp_UF = '.'\''.$obj->getVeic_transp_UF().'\' ,';
		 $sql .= 'veic_transp_RNTC = '.'\''.$obj->getVeic_transp_RNTC().'\' ,';
		 $sql .= 'obs_fisco_aObsFisco = '.'\''.$obj->getObs_fisco_aObsFisco().'\' ,';
		 $sql .= 'autxml_aAutXML = '.'\''.$obj->getAutxml_aAutXML().'\' ,';
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
		 $sql .= 'infadic_inform = '.'\''.$obj->getInfadic_inform().'\' ,';
		 $sql .= 'total_vBC = '.'\''.$obj->getTotal_vBC().'\' ,';
		 $sql .= 'total_vICMS = '.'\''.$obj->getTotal_vICMS().'\' ,';
		 $sql .= 'total_vICMSDeson = '.'\''.$obj->getTotal_vICMSDeson().'\' ,';
		 $sql .= 'total_vBCST = '.'\''.$obj->getTotal_vBCST().'\' ,';
		 $sql .= 'total_vST = '.'\''.$obj->getTotal_vST().'\' ,';
		 $sql .= 'total_vProd = '.'\''.$obj->getTotal_vProd().'\' ,';
		 $sql .= 'total_vDesc = '.'\''.$obj->getTotal_vDesc().'\' ,';
		 $sql .= 'total_vIPI = '.'\''.$obj->getTotal_vIPI().'\' ,';
		 $sql .= 'total_vPIS = '.'\''.$obj->getTotal_vPIS().'\' ,';
		 $sql .= 'total_vCOFINS = '.'\''.$obj->getTotal_vCOFINS().'\' ,';
		 $sql .= 'total_vNF = '.'\''.$obj->getTotal_vNF().'\' ,';
		 $sql .= 'total_vFrete = '.'\''.$obj->getTotal_vFrete().'\' ,';
		 $sql .= 'total_vSeg = '.'\''.$obj->getTotal_vSeg().'\' ,';
		 $sql .= 'total_vII = '.'\''.$obj->getTotal_vII().'\' ,';
		 $sql .= 'total_vOutro = '.'\''.$obj->getTotal_vOutro().'\' ,';
		 $sql .= 'total_vtotal = '.($obj->getTotal_vtotal()?$obj->getTotal_vtotal():0);
		 $sql .= ' WHERE ident_chave = '.$obj->getIdent_chave();
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM tabnfe WHERE ident_chave = '.$obj->getIdent_chave();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM tabnfe WHERE 1=1 '; 
		if ($obj->getIdent_chave()) { 
			$sql .= " AND ident_chave = '".$obj->getIdent_chave()."'";
		} 
		if ($obj->getIdent_versao()) { 
			$sql .= " AND upper(ident_versao)  like ('%".strtoupper($obj->getIdent_versao())."%')";
		} 
		if ($obj->getNfref_cUF()) { 
			$sql .= " AND upper(Nfref_cUF)  like ('%".strtoupper($obj->getNfref_cUF())."%')";
		} 
		if ($obj->getNfref_cNF()) { 
			$sql .= " AND upper(Nfref_cNF)  like ('%".strtoupper($obj->getNfref_cNF())."%')";
		} 
		if ($obj->getNfref_natOp()) { 
			$sql .= " AND upper(Nfref_natOp)  like ('%".strtoupper($obj->getNfref_natOp())."%')";
		} 
		if ($obj->getNfref_indPag()) { 
			$sql .= " AND Nfref_indPag = '".$obj->getNfref_indPag()."'";
		} 
		if ($obj->getNfref_mod()) { 
			$sql .= " AND Nfref_mod = '".$obj->getNfref_mod()."'";
		} 
		if ($obj->getNfref_serie()) { 
			$sql .= " AND upper(Nfref_serie)  like ('%".strtoupper($obj->getNfref_serie())."%')";
		} 
		if ($obj->getNfref_nNF()) { 
			$sql .= " AND upper(Nfref_nNF)  like ('%".strtoupper($obj->getNfref_nNF())."%')";
		} 
		if ($obj->getNfref_dhEmi()) { 
			$sql .= " AND upper(Nfref_dhEmi)  like ('%".strtoupper($obj->getNfref_dhEmi())."%')";
		} 
		if ($obj->getNfref_dhSaiEnt()) { 
			$sql .= " AND upper(Nfref_dhSaiEnt)  like ('%".strtoupper($obj->getNfref_dhSaiEnt())."%')";
		} 
		if ($obj->getNfref_tpNF()) { 
			$sql .= " AND upper(Nfref_tpNF)  like ('%".strtoupper($obj->getNfref_tpNF())."%')";
		} 
		if ($obj->getNfref_idDest()) { 
			$sql .= " AND Nfref_idDest = '".$obj->getNfref_idDest()."'";
		} 
		if ($obj->getNfref_cMunFG()) { 
			$sql .= " AND Nfref_cMunFG = '".$obj->getNfref_cMunFG()."'";
		} 
		if ($obj->getNfref_tpImp()) { 
			$sql .= " AND Nfref_tpImp = '".$obj->getNfref_tpImp()."'";
		} 
		if ($obj->getNfref_tpEmis()) { 
			$sql .= " AND Nfref_tpEmis = '".$obj->getNfref_tpEmis()."'";
		} 
		if ($obj->getNfref_cDV()) { 
			$sql .= " AND Nfref_cDV = '".$obj->getNfref_cDV()."'";
		} 
		if ($obj->getNfref_tpAmb()) { 
			$sql .= " AND Nfref_tpAmb = '".$obj->getNfref_tpAmb()."'";
		} 
		if ($obj->getNfref_finNFe()) { 
			$sql .= " AND Nfref_finNFe = '".$obj->getNfref_finNFe()."'";
		} 
		if ($obj->getNfref_indFinal()) { 
			$sql .= " AND Nfref_indFinal = '".$obj->getNfref_indFinal()."'";
		} 
		if ($obj->getNfref_indPres()) { 
			$sql .= " AND Nfref_indPres = '".$obj->getNfref_indPres()."'";
		} 
		if ($obj->getNfref_procEmi()) { 
			$sql .= " AND Nfref_procEmi = '".$obj->getNfref_procEmi()."'";
		} 
		if ($obj->getNfref_verProc()) { 
			$sql .= " AND upper(Nfref_verProc)  like ('%".strtoupper($obj->getNfref_verProc())."%')";
		} 
		if ($obj->getNfref_dhCont()) { 
			$sql .= " AND upper(Nfref_dhCont)  like ('%".strtoupper($obj->getNfref_dhCont())."%')";
		} 
		if ($obj->getNfref_xJust()) { 
			$sql .= " AND upper(Nfref_xJust)  like ('%".strtoupper($obj->getNfref_xJust())."%')";
		} 
		if ($obj->getRefnfe_refNFeCh()) { 
			$sql .= " AND upper(refnfe_refNFeCh)  like ('%".strtoupper($obj->getRefnfe_refNFeCh())."%')";
		} 
		if ($obj->getRefnfe_cUF()) { 
			$sql .= " AND upper(refnfe_cUF)  like ('%".strtoupper($obj->getRefnfe_cUF())."%')";
		} 
		if ($obj->getRefnfe_AAMM()) { 
			$sql .= " AND upper(refnfe_AAMM)  like ('%".strtoupper($obj->getRefnfe_AAMM())."%')";
		} 
		if ($obj->getRefnfe_CNPJ()) { 
			$sql .= " AND upper(refnfe_CNPJ)  like ('%".strtoupper($obj->getRefnfe_CNPJ())."%')";
		} 
		if ($obj->getRefnfe_mod()) { 
			$sql .= " AND upper(refnfe_mod)  like ('%".strtoupper($obj->getRefnfe_mod())."%')";
		} 
		if ($obj->getRefnfe_serie()) { 
			$sql .= " AND upper(refnfe_serie)  like ('%".strtoupper($obj->getRefnfe_serie())."%')";
		} 
		if ($obj->getRefnfe_nNF()) { 
			$sql .= " AND upper(refnfe_nNF)  like ('%".strtoupper($obj->getRefnfe_nNF())."%')";
		} 
		if ($obj->getRural_cUF()) { 
			$sql .= " AND upper(rural_cUF)  like ('%".strtoupper($obj->getRural_cUF())."%')";
		} 
		if ($obj->getRural_AAMM()) { 
			$sql .= " AND upper(rural_AAMM)  like ('%".strtoupper($obj->getRural_AAMM())."%')";
		} 
		if ($obj->getRural_CNPJ()) { 
			$sql .= " AND upper(rural_CNPJ)  like ('%".strtoupper($obj->getRural_CNPJ())."%')";
		} 
		if ($obj->getRural_CPF()) { 
			$sql .= " AND upper(rural_CPF)  like ('%".strtoupper($obj->getRural_CPF())."%')";
		} 
		if ($obj->getRural_IE()) { 
			$sql .= " AND upper(rural_IE)  like ('%".strtoupper($obj->getRural_IE())."%')";
		} 
		if ($obj->getRural_mod()) { 
			$sql .= " AND upper(rural_mod)  like ('%".strtoupper($obj->getRural_mod())."%')";
		} 
		if ($obj->getRural_serie()) { 
			$sql .= " AND upper(rural_serie)  like ('%".strtoupper($obj->getRural_serie())."%')";
		} 
		if ($obj->getRural_nNF()) { 
			$sql .= " AND upper(rural_nNF)  like ('%".strtoupper($obj->getRural_nNF())."%')";
		} 
		if ($obj->getCteref_refCTe()) { 
			$sql .= " AND upper(cteref_refCTe)  like ('%".strtoupper($obj->getCteref_refCTe())."%')";
		} 
		if ($obj->getCteref_nECF()) { 
			$sql .= " AND upper(cteref_nECF)  like ('%".strtoupper($obj->getCteref_nECF())."%')";
		} 
		if ($obj->getCteref_nCOO()) { 
			$sql .= " AND upper(cteref_nCOO)  like ('%".strtoupper($obj->getCteref_nCOO())."%')";
		} 
		if ($obj->getEcferef_mod()) { 
			$sql .= " AND upper(ecferef_mod)  like ('%".strtoupper($obj->getEcferef_mod())."%')";
		} 
		if ($obj->getEmit_CNPJ()) { 
			$sql .= " AND upper(emit_CNPJ)  like ('%".strtoupper($obj->getEmit_CNPJ())."%')";
		} 
		if ($obj->getEmit_xNome()) { 
			$sql .= " AND upper(emit_xNome)  like ('%".strtoupper($obj->getEmit_xNome())."%')";
		} 
		if ($obj->getEmit_xFant()) { 
			$sql .= " AND upper(emit_xFant)  like ('%".strtoupper($obj->getEmit_xFant())."%')";
		} 
		if ($obj->getEmit_IE()) { 
			$sql .= " AND upper(emit_IE)  like ('%".strtoupper($obj->getEmit_IE())."%')";
		} 
		if ($obj->getEmit_IEST()) { 
			$sql .= " AND upper(emit_IEST)  like ('%".strtoupper($obj->getEmit_IEST())."%')";
		} 
		if ($obj->getEmit_IM()) { 
			$sql .= " AND upper(emit_IM)  like ('%".strtoupper($obj->getEmit_IM())."%')";
		} 
		if ($obj->getEmit_CNAE()) { 
			$sql .= " AND upper(emit_CNAE)  like ('%".strtoupper($obj->getEmit_CNAE())."%')";
		} 
		if ($obj->getEmit_CRT()) { 
			$sql .= " AND upper(emit_CRT)  like ('%".strtoupper($obj->getEmit_CRT())."%')";
		} 
		if ($obj->getEnder_emit_xLgr()) { 
			$sql .= " AND upper(ender_emit_xLgr)  like ('%".strtoupper($obj->getEnder_emit_xLgr())."%')";
		} 
		if ($obj->getEnder_emit_nro()) { 
			$sql .= " AND upper(ender_emit_nro)  like ('%".strtoupper($obj->getEnder_emit_nro())."%')";
		} 
		if ($obj->getEnder_emit_xCpl()) { 
			$sql .= " AND upper(ender_emit_xCpl)  like ('%".strtoupper($obj->getEnder_emit_xCpl())."%')";
		} 
		if ($obj->getEnder_emit_xBairro()) { 
			$sql .= " AND upper(ender_emit_xBairro)  like ('%".strtoupper($obj->getEnder_emit_xBairro())."%')";
		} 
		if ($obj->getEnder_emit_cMun()) { 
			$sql .= " AND upper(ender_emit_cMun)  like ('%".strtoupper($obj->getEnder_emit_cMun())."%')";
		} 
		if ($obj->getEnder_emit_xMun()) { 
			$sql .= " AND upper(ender_emit_xMun)  like ('%".strtoupper($obj->getEnder_emit_xMun())."%')";
		} 
		if ($obj->getEnder_emit_UF()) { 
			$sql .= " AND upper(ender_emit_UF)  like ('%".strtoupper($obj->getEnder_emit_UF())."%')";
		} 
		if ($obj->getEnder_emit_CEP()) { 
			$sql .= " AND upper(ender_emit_CEP)  like ('%".strtoupper($obj->getEnder_emit_CEP())."%')";
		} 
		if ($obj->getEnder_emit_cPais()) { 
			$sql .= " AND upper(ender_emit_cPais)  like ('%".strtoupper($obj->getEnder_emit_cPais())."%')";
		} 
		if ($obj->getEnder_emit_xPais()) { 
			$sql .= " AND upper(ender_emit_xPais)  like ('%".strtoupper($obj->getEnder_emit_xPais())."%')";
		} 
		if ($obj->getEnder_emit_fone()) { 
			$sql .= " AND upper(ender_emit_fone)  like ('%".strtoupper($obj->getEnder_emit_fone())."%')";
		} 
		if ($obj->getDet_CNPJ()) { 
			$sql .= " AND upper(det_CNPJ)  like ('%".strtoupper($obj->getDet_CNPJ())."%')";
		} 
		if ($obj->getDet_CPF()) { 
			$sql .= " AND upper(det_CPF)  like ('%".strtoupper($obj->getDet_CPF())."%')";
		} 
		if ($obj->getDet_idEstrangeiro()) { 
			$sql .= " AND upper(det_idEstrangeiro)  like ('%".strtoupper($obj->getDet_idEstrangeiro())."%')";
		} 
		if ($obj->getDet_xNome()) { 
			$sql .= " AND upper(det_xNome)  like ('%".strtoupper($obj->getDet_xNome())."%')";
		} 
		if ($obj->getDet_indIEDest()) { 
			$sql .= " AND upper(det_indIEDest)  like ('%".strtoupper($obj->getDet_indIEDest())."%')";
		} 
		if ($obj->getDet_IE()) { 
			$sql .= " AND upper(det_IE)  like ('%".strtoupper($obj->getDet_IE())."%')";
		} 
		if ($obj->getDet_ISUF()) { 
			$sql .= " AND upper(det_ISUF)  like ('%".strtoupper($obj->getDet_ISUF())."%')";
		} 
		if ($obj->getDet_IM()) { 
			$sql .= " AND upper(det_IM)  like ('%".strtoupper($obj->getDet_IM())."%')";
		} 
		if ($obj->getDet_email()) { 
			$sql .= " AND upper(det_email)  like ('%".strtoupper($obj->getDet_email())."%')";
		} 
		if ($obj->getEnder_dest_xLgr()) { 
			$sql .= " AND upper(ender_dest_xLgr)  like ('%".strtoupper($obj->getEnder_dest_xLgr())."%')";
		} 
		if ($obj->getEnder_dest_nro()) { 
			$sql .= " AND upper(ender_dest_nro)  like ('%".strtoupper($obj->getEnder_dest_nro())."%')";
		} 
		if ($obj->getEnder_dest_xCpl()) { 
			$sql .= " AND upper(ender_dest_xCpl)  like ('%".strtoupper($obj->getEnder_dest_xCpl())."%')";
		} 
		if ($obj->getEnder_dest_xBairro()) { 
			$sql .= " AND upper(ender_dest_xBairro)  like ('%".strtoupper($obj->getEnder_dest_xBairro())."%')";
		} 
		if ($obj->getEnder_dest_cMun()) { 
			$sql .= " AND upper(ender_dest_cMun)  like ('%".strtoupper($obj->getEnder_dest_cMun())."%')";
		} 
		if ($obj->getEnder_dest_xMun()) { 
			$sql .= " AND upper(ender_dest_xMun)  like ('%".strtoupper($obj->getEnder_dest_xMun())."%')";
		} 
		if ($obj->getEnder_dest_UF()) { 
			$sql .= " AND upper(ender_dest_UF)  like ('%".strtoupper($obj->getEnder_dest_UF())."%')";
		} 
		if ($obj->getEnder_dest_CEP()) { 
			$sql .= " AND upper(ender_dest_CEP)  like ('%".strtoupper($obj->getEnder_dest_CEP())."%')";
		} 
		if ($obj->getEnder_dest_cPais()) { 
			$sql .= " AND upper(ender_dest_cPais)  like ('%".strtoupper($obj->getEnder_dest_cPais())."%')";
		} 
		if ($obj->getEnder_dest_xPais()) { 
			$sql .= " AND upper(ender_dest_xPais)  like ('%".strtoupper($obj->getEnder_dest_xPais())."%')";
		} 
		if ($obj->getEnder_dest_fone()) { 
			$sql .= " AND upper(ender_dest_fone)  like ('%".strtoupper($obj->getEnder_dest_fone())."%')";
		} 
		if ($obj->getRetirada_CNPJ()) { 
			$sql .= " AND upper(retirada_CNPJ)  like ('%".strtoupper($obj->getRetirada_CNPJ())."%')";
		} 
		if ($obj->getRetirada_CPF()) { 
			$sql .= " AND upper(retirada_CPF)  like ('%".strtoupper($obj->getRetirada_CPF())."%')";
		} 
		if ($obj->getRetirada_xLgr()) { 
			$sql .= " AND upper(retirada_xLgr)  like ('%".strtoupper($obj->getRetirada_xLgr())."%')";
		} 
		if ($obj->getRetirada_nro()) { 
			$sql .= " AND upper(retirada_nro)  like ('%".strtoupper($obj->getRetirada_nro())."%')";
		} 
		if ($obj->getRetirada_xCpl()) { 
			$sql .= " AND upper(retirada_xCpl)  like ('%".strtoupper($obj->getRetirada_xCpl())."%')";
		} 
		if ($obj->getRetirada_xBairro()) { 
			$sql .= " AND upper(retirada_xBairro)  like ('%".strtoupper($obj->getRetirada_xBairro())."%')";
		} 
		if ($obj->getRetirada_cMun()) { 
			$sql .= " AND upper(retirada_cMun)  like ('%".strtoupper($obj->getRetirada_cMun())."%')";
		} 
		if ($obj->getRetirada_xMun()) { 
			$sql .= " AND upper(retirada_xMun)  like ('%".strtoupper($obj->getRetirada_xMun())."%')";
		} 
		if ($obj->getRetirada_UF()) { 
			$sql .= " AND upper(retirada_UF)  like ('%".strtoupper($obj->getRetirada_UF())."%')";
		} 
		if ($obj->getEntrega_CNPJ()) { 
			$sql .= " AND upper(entrega_CNPJ)  like ('%".strtoupper($obj->getEntrega_CNPJ())."%')";
		} 
		if ($obj->getEntrega_CPF()) { 
			$sql .= " AND upper(entrega_CPF)  like ('%".strtoupper($obj->getEntrega_CPF())."%')";
		} 
		if ($obj->getEntrega_xLgr()) { 
			$sql .= " AND upper(entrega_xLgr)  like ('%".strtoupper($obj->getEntrega_xLgr())."%')";
		} 
		if ($obj->getEntrega_nro()) { 
			$sql .= " AND upper(entrega_nro)  like ('%".strtoupper($obj->getEntrega_nro())."%')";
		} 
		if ($obj->getEntrega_xCpl()) { 
			$sql .= " AND upper(entrega_xCpl)  like ('%".strtoupper($obj->getEntrega_xCpl())."%')";
		} 
		if ($obj->getEntrega_xBairro()) { 
			$sql .= " AND upper(entrega_xBairro)  like ('%".strtoupper($obj->getEntrega_xBairro())."%')";
		} 
		if ($obj->getEntrega_cMun()) { 
			$sql .= " AND upper(entrega_cMun)  like ('%".strtoupper($obj->getEntrega_cMun())."%')";
		} 
		if ($obj->getEntrega_xMun()) { 
			$sql .= " AND upper(entrega_xMun)  like ('%".strtoupper($obj->getEntrega_xMun())."%')";
		} 
		if ($obj->getEntrega_UF()) { 
			$sql .= " AND upper(entrega_UF)  like ('%".strtoupper($obj->getEntrega_UF())."%')";
		} 
		if ($obj->getPag_CNPJ()) { 
			$sql .= " AND upper(pag_CNPJ)  like ('%".strtoupper($obj->getPag_CNPJ())."%')";
		} 
		if ($obj->getPag_tBand()) { 
			$sql .= " AND upper(pag_tBand)  like ('%".strtoupper($obj->getPag_tBand())."%')";
		} 
		if ($obj->getPag_cAut()) { 
			$sql .= " AND upper(pag_cAut)  like ('%".strtoupper($obj->getPag_cAut())."%')";
		} 
		if ($obj->getCobr_nFat()) { 
			$sql .= " AND upper(cobr_nFat)  like ('%".strtoupper($obj->getCobr_nFat())."%')";
		} 
		if ($obj->getCobr_vOrig()) { 
			$sql .= " AND upper(cobr_vOrig)  like ('%".strtoupper($obj->getCobr_vOrig())."%')";
		} 
		if ($obj->getCobr_vDesc()) { 
			$sql .= " AND upper(cobr_vDesc)  like ('%".strtoupper($obj->getCobr_vDesc())."%')";
		} 
		if ($obj->getCobr_vLiq()) { 
			$sql .= " AND upper(cobr_vLiq)  like ('%".strtoupper($obj->getCobr_vLiq())."%')";
		} 
		if ($obj->getPagt_pagT()) { 
			$sql .= " AND upper(pagt_pagT)  like ('%".strtoupper($obj->getPagt_pagT())."%')";
		} 
		if ($obj->getDup_aDup()) { 
			$sql .= " AND upper(dup_aDup)  like ('%".strtoupper($obj->getDup_aDup())."%')";
		} 
		if ($obj->getModfrete_modFrete()) { 
			$sql .= " AND upper(modfrete_modFrete)  like ('%".strtoupper($obj->getModfrete_modFrete())."%')";
		} 
		if ($obj->getTransp_CNPJ()) { 
			$sql .= " AND upper(transp_CNPJ)  like ('%".strtoupper($obj->getTransp_CNPJ())."%')";
		} 
		if ($obj->getTransp_CPF()) { 
			$sql .= " AND upper(transp_CPF)  like ('%".strtoupper($obj->getTransp_CPF())."%')";
		} 
		if ($obj->getTransp_xNome()) { 
			$sql .= " AND upper(transp_xNome)  like ('%".strtoupper($obj->getTransp_xNome())."%')";
		} 
		if ($obj->getTransp_IE()) { 
			$sql .= " AND upper(transp_IE)  like ('%".strtoupper($obj->getTransp_IE())."%')";
		} 
		if ($obj->getTransp_xEnder()) { 
			$sql .= " AND upper(transp_xEnder)  like ('%".strtoupper($obj->getTransp_xEnder())."%')";
		} 
		if ($obj->getTransp_xMun()) { 
			$sql .= " AND upper(transp_xMun)  like ('%".strtoupper($obj->getTransp_xMun())."%')";
		} 
		if ($obj->getTransp_UF()) { 
			$sql .= " AND upper(transp_UF)  like ('%".strtoupper($obj->getTransp_UF())."%')";
		} 
		if ($obj->getRet_transp_vServ()) { 
			$sql .= " AND upper(ret_transp_vServ)  like ('%".strtoupper($obj->getRet_transp_vServ())."%')";
		} 
		if ($obj->getRet_transp_vBCRet()) { 
			$sql .= " AND upper(ret_transp_vBCRet)  like ('%".strtoupper($obj->getRet_transp_vBCRet())."%')";
		} 
		if ($obj->getRet_transp_pICMSRet()) { 
			$sql .= " AND upper(ret_transp_pICMSRet)  like ('%".strtoupper($obj->getRet_transp_pICMSRet())."%')";
		} 
		if ($obj->getRet_transp_vICMSRet()) { 
			$sql .= " AND upper(ret_transp_vICMSRet)  like ('%".strtoupper($obj->getRet_transp_vICMSRet())."%')";
		} 
		if ($obj->getRet_transp_CFOP()) { 
			$sql .= " AND upper(ret_transp_CFOP)  like ('%".strtoupper($obj->getRet_transp_CFOP())."%')";
		} 
		if ($obj->getRet_transp_cMunFG()) { 
			$sql .= " AND upper(ret_transp_cMunFG)  like ('%".strtoupper($obj->getRet_transp_cMunFG())."%')";
		} 
		if ($obj->getReboque_placa()) { 
			$sql .= " AND upper(reboque_placa)  like ('%".strtoupper($obj->getReboque_placa())."%')";
		} 
		if ($obj->getReboque_siglaUF()) { 
			$sql .= " AND upper(reboque_siglaUF)  like ('%".strtoupper($obj->getReboque_siglaUF())."%')";
		} 
		if ($obj->getReboque_rntc()) { 
			$sql .= " AND upper(reboque_rntc)  like ('%".strtoupper($obj->getReboque_rntc())."%')";
		} 
		if ($obj->getReboque_vagao()) { 
			$sql .= " AND upper(reboque_vagao)  like ('%".strtoupper($obj->getReboque_vagao())."%')";
		} 
		if ($obj->getReboque_balsa()) { 
			$sql .= " AND upper(reboque_balsa)  like ('%".strtoupper($obj->getReboque_balsa())."%')";
		} 
		if ($obj->getVol_Qvol()) { 
			$sql .= " AND upper(vol_Qvol)  like ('%".strtoupper($obj->getVol_Qvol())."%')";
		} 
		if ($obj->getVol_Esp()) { 
			$sql .= " AND upper(vol_Esp)  like ('%".strtoupper($obj->getVol_Esp())."%')";
		} 
		if ($obj->getVol_Marca()) { 
			$sql .= " AND upper(vol_Marca)  like ('%".strtoupper($obj->getVol_Marca())."%')";
		} 
		if ($obj->getVol_nVol()) { 
			$sql .= " AND upper(vol_nVol)  like ('%".strtoupper($obj->getVol_nVol())."%')";
		} 
		if ($obj->getVol_pesoL()) { 
			$sql .= " AND upper(vol_pesoL)  like ('%".strtoupper($obj->getVol_pesoL())."%')";
		} 
		if ($obj->getVol_pesoB()) { 
			$sql .= " AND upper(vol_pesoB)  like ('%".strtoupper($obj->getVol_pesoB())."%')";
		} 
		if ($obj->getVol_aLacres()) { 
			$sql .= " AND upper(vol_aLacres)  like ('%".strtoupper($obj->getVol_aLacres())."%')";
		} 
		if ($obj->getExporta_UFSaidaPais()) { 
			$sql .= " AND upper(exporta_UFSaidaPais)  like ('%".strtoupper($obj->getExporta_UFSaidaPais())."%')";
		} 
		if ($obj->getExporta_xLocExporta()) { 
			$sql .= " AND upper(exporta_xLocExporta)  like ('%".strtoupper($obj->getExporta_xLocExporta())."%')";
		} 
		if ($obj->getExporta_xLocDespacho()) { 
			$sql .= " AND upper(exporta_xLocDespacho)  like ('%".strtoupper($obj->getExporta_xLocDespacho())."%')";
		} 
		if ($obj->getCompra_xNEmp()) { 
			$sql .= " AND upper(compra_xNEmp)  like ('%".strtoupper($obj->getCompra_xNEmp())."%')";
		} 
		if ($obj->getCompra_xPed()) { 
			$sql .= " AND upper(compra_xPed)  like ('%".strtoupper($obj->getCompra_xPed())."%')";
		} 
		if ($obj->getCompra_xCont()) { 
			$sql .= " AND upper(compra_xCont)  like ('%".strtoupper($obj->getCompra_xCont())."%')";
		} 
		if ($obj->getReboque_aReboque()) { 
			$sql .= " AND upper(reboque_aReboque)  like ('%".strtoupper($obj->getReboque_aReboque())."%')";
		} 
		if ($obj->getDet_export_nItem()) { 
			$sql .= " AND upper(det_export_nItem)  like ('%".strtoupper($obj->getDet_export_nItem())."%')";
		} 
		if ($obj->getDet_export_nDraw()) { 
			$sql .= " AND upper(det_export_nDraw)  like ('%".strtoupper($obj->getDet_export_nDraw())."%')";
		} 
		if ($obj->getDet_export_exportInd()) { 
			$sql .= " AND upper(det_export_exportInd)  like ('%".strtoupper($obj->getDet_export_exportInd())."%')";
		} 
		if ($obj->getDet_export_nRE()) { 
			$sql .= " AND upper(det_export_nRE)  like ('%".strtoupper($obj->getDet_export_nRE())."%')";
		} 
		if ($obj->getDet_export_chNFe()) { 
			$sql .= " AND upper(det_export_chNFe)  like ('%".strtoupper($obj->getDet_export_chNFe())."%')";
		} 
		if ($obj->getDet_export_qExport()) { 
			$sql .= " AND upper(det_export_qExport)  like ('%".strtoupper($obj->getDet_export_qExport())."%')";
		} 
		if ($obj->getVeic_transp_placa()) { 
			$sql .= " AND upper(veic_transp_placa)  like ('%".strtoupper($obj->getVeic_transp_placa())."%')";
		} 
		if ($obj->getVeic_transp_UF()) { 
			$sql .= " AND upper(veic_transp_UF)  like ('%".strtoupper($obj->getVeic_transp_UF())."%')";
		} 
		if ($obj->getVeic_transp_RNTC()) { 
			$sql .= " AND upper(veic_transp_RNTC)  like ('%".strtoupper($obj->getVeic_transp_RNTC())."%')";
		} 
		if ($obj->getObs_fisco_aObsFisco()) { 
			$sql .= " AND upper(obs_fisco_aObsFisco)  like ('%".strtoupper($obj->getObs_fisco_aObsFisco())."%')";
		} 
		if ($obj->getAutxml_aAutXML()) { 
			$sql .= " AND upper(autxml_aAutXML)  like ('%".strtoupper($obj->getAutxml_aAutXML())."%')";
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
		if ($obj->getTotal_vBC()) { 
			$sql .= " AND upper(total_vBC)  like ('%".strtoupper($obj->getTotal_vBC())."%')";
		} 
		if ($obj->getTotal_vICMS()) { 
			$sql .= " AND upper(total_vICMS)  like ('%".strtoupper($obj->getTotal_vICMS())."%')";
		} 
		if ($obj->getTotal_vICMSDeson()) { 
			$sql .= " AND upper(total_vICMSDeson)  like ('%".strtoupper($obj->getTotal_vICMSDeson())."%')";
		} 
		if ($obj->getTotal_vBCST()) { 
			$sql .= " AND upper(total_vBCST)  like ('%".strtoupper($obj->getTotal_vBCST())."%')";
		} 
		if ($obj->getTotal_vST()) { 
			$sql .= " AND upper(total_vST)  like ('%".strtoupper($obj->getTotal_vST())."%')";
		} 
		if ($obj->getTotal_vProd()) { 
			$sql .= " AND upper(total_vProd)  like ('%".strtoupper($obj->getTotal_vProd())."%')";
		} 
		if ($obj->getTotal_vDesc()) { 
			$sql .= " AND upper(total_vDesc)  like ('%".strtoupper($obj->getTotal_vDesc())."%')";
		} 
		if ($obj->getTotal_vIPI()) { 
			$sql .= " AND upper(total_vIPI)  like ('%".strtoupper($obj->getTotal_vIPI())."%')";
		} 
		if ($obj->getTotal_vPIS()) { 
			$sql .= " AND upper(total_vPIS)  like ('%".strtoupper($obj->getTotal_vPIS())."%')";
		} 
		if ($obj->getTotal_vCOFINS()) { 
			$sql .= " AND upper(total_vCOFINS)  like ('%".strtoupper($obj->getTotal_vCOFINS())."%')";
		} 
		if ($obj->getTotal_vNF()) { 
			$sql .= " AND upper(total_vNF)  like ('%".strtoupper($obj->getTotal_vNF())."%')";
		} 
		if ($obj->getTotal_vFrete()) { 
			$sql .= " AND upper(total_vFrete)  like ('%".strtoupper($obj->getTotal_vFrete())."%')";
		} 
		if ($obj->getTotal_vSeg()) { 
			$sql .= " AND upper(total_vSeg)  like ('%".strtoupper($obj->getTotal_vSeg())."%')";
		} 
		if ($obj->getTotal_vII()) { 
			$sql .= " AND upper(total_vII)  like ('%".strtoupper($obj->getTotal_vII())."%')";
		} 
		if ($obj->getTotal_vOutro()) { 
			$sql .= " AND upper(total_vOutro)  like ('%".strtoupper($obj->getTotal_vOutro())."%')";
		} 
		if ($obj->getTotal_vtotal()) { 
			$sql .= " AND total_vtotal = '".$obj->getTotal_vtotal()."'";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setIdent_chave(mysql_result($rs, 0, 'ident_chave')); 
			 $obj->setIdent_versao(mysql_result($rs, 0, 'ident_versao')); 
			 $obj->setNfref_cUF(mysql_result($rs, 0, 'Nfref_cUF')); 
			 $obj->setNfref_cNF(mysql_result($rs, 0, 'Nfref_cNF')); 
			 $obj->setNfref_natOp(mysql_result($rs, 0, 'Nfref_natOp')); 
			 $obj->setNfref_indPag(mysql_result($rs, 0, 'Nfref_indPag')); 
			 $obj->setNfref_mod(mysql_result($rs, 0, 'Nfref_mod')); 
			 $obj->setNfref_serie(mysql_result($rs, 0, 'Nfref_serie')); 
			 $obj->setNfref_nNF(mysql_result($rs, 0, 'Nfref_nNF')); 
			 $obj->setNfref_dhEmi(mysql_result($rs, 0, 'Nfref_dhEmi')); 
			 $obj->setNfref_dhSaiEnt(mysql_result($rs, 0, 'Nfref_dhSaiEnt')); 
			 $obj->setNfref_tpNF(mysql_result($rs, 0, 'Nfref_tpNF')); 
			 $obj->setNfref_idDest(mysql_result($rs, 0, 'Nfref_idDest')); 
			 $obj->setNfref_cMunFG(mysql_result($rs, 0, 'Nfref_cMunFG')); 
			 $obj->setNfref_tpImp(mysql_result($rs, 0, 'Nfref_tpImp')); 
			 $obj->setNfref_tpEmis(mysql_result($rs, 0, 'Nfref_tpEmis')); 
			 $obj->setNfref_cDV(mysql_result($rs, 0, 'Nfref_cDV')); 
			 $obj->setNfref_tpAmb(mysql_result($rs, 0, 'Nfref_tpAmb')); 
			 $obj->setNfref_finNFe(mysql_result($rs, 0, 'Nfref_finNFe')); 
			 $obj->setNfref_indFinal(mysql_result($rs, 0, 'Nfref_indFinal')); 
			 $obj->setNfref_indPres(mysql_result($rs, 0, 'Nfref_indPres')); 
			 $obj->setNfref_procEmi(mysql_result($rs, 0, 'Nfref_procEmi')); 
			 $obj->setNfref_verProc(mysql_result($rs, 0, 'Nfref_verProc')); 
			 $obj->setNfref_dhCont(mysql_result($rs, 0, 'Nfref_dhCont')); 
			 $obj->setNfref_xJust(mysql_result($rs, 0, 'Nfref_xJust')); 
			 $obj->setRefnfe_refNFeCh(mysql_result($rs, 0, 'refnfe_refNFeCh')); 
			 $obj->setRefnfe_cUF(mysql_result($rs, 0, 'refnfe_cUF')); 
			 $obj->setRefnfe_AAMM(mysql_result($rs, 0, 'refnfe_AAMM')); 
			 $obj->setRefnfe_CNPJ(mysql_result($rs, 0, 'refnfe_CNPJ')); 
			 $obj->setRefnfe_mod(mysql_result($rs, 0, 'refnfe_mod')); 
			 $obj->setRefnfe_serie(mysql_result($rs, 0, 'refnfe_serie')); 
			 $obj->setRefnfe_nNF(mysql_result($rs, 0, 'refnfe_nNF')); 
			 $obj->setRural_cUF(mysql_result($rs, 0, 'rural_cUF')); 
			 $obj->setRural_AAMM(mysql_result($rs, 0, 'rural_AAMM')); 
			 $obj->setRural_CNPJ(mysql_result($rs, 0, 'rural_CNPJ')); 
			 $obj->setRural_CPF(mysql_result($rs, 0, 'rural_CPF')); 
			 $obj->setRural_IE(mysql_result($rs, 0, 'rural_IE')); 
			 $obj->setRural_mod(mysql_result($rs, 0, 'rural_mod')); 
			 $obj->setRural_serie(mysql_result($rs, 0, 'rural_serie')); 
			 $obj->setRural_nNF(mysql_result($rs, 0, 'rural_nNF')); 
			 $obj->setCteref_refCTe(mysql_result($rs, 0, 'cteref_refCTe')); 
			 $obj->setCteref_nECF(mysql_result($rs, 0, 'cteref_nECF')); 
			 $obj->setCteref_nCOO(mysql_result($rs, 0, 'cteref_nCOO')); 
			 $obj->setEcferef_mod(mysql_result($rs, 0, 'ecferef_mod')); 
			 $obj->setEmit_CNPJ(mysql_result($rs, 0, 'emit_CNPJ')); 
			 $obj->setEmit_xNome(mysql_result($rs, 0, 'emit_xNome')); 
			 $obj->setEmit_xFant(mysql_result($rs, 0, 'emit_xFant')); 
			 $obj->setEmit_IE(mysql_result($rs, 0, 'emit_IE')); 
			 $obj->setEmit_IEST(mysql_result($rs, 0, 'emit_IEST')); 
			 $obj->setEmit_IM(mysql_result($rs, 0, 'emit_IM')); 
			 $obj->setEmit_CNAE(mysql_result($rs, 0, 'emit_CNAE')); 
			 $obj->setEmit_CRT(mysql_result($rs, 0, 'emit_CRT')); 
			 $obj->setEnder_emit_xLgr(mysql_result($rs, 0, 'ender_emit_xLgr')); 
			 $obj->setEnder_emit_nro(mysql_result($rs, 0, 'ender_emit_nro')); 
			 $obj->setEnder_emit_xCpl(mysql_result($rs, 0, 'ender_emit_xCpl')); 
			 $obj->setEnder_emit_xBairro(mysql_result($rs, 0, 'ender_emit_xBairro')); 
			 $obj->setEnder_emit_cMun(mysql_result($rs, 0, 'ender_emit_cMun')); 
			 $obj->setEnder_emit_xMun(mysql_result($rs, 0, 'ender_emit_xMun')); 
			 $obj->setEnder_emit_UF(mysql_result($rs, 0, 'ender_emit_UF')); 
			 $obj->setEnder_emit_CEP(mysql_result($rs, 0, 'ender_emit_CEP')); 
			 $obj->setEnder_emit_cPais(mysql_result($rs, 0, 'ender_emit_cPais')); 
			 $obj->setEnder_emit_xPais(mysql_result($rs, 0, 'ender_emit_xPais')); 
			 $obj->setEnder_emit_fone(mysql_result($rs, 0, 'ender_emit_fone')); 
			 $obj->setDet_CNPJ(mysql_result($rs, 0, 'det_CNPJ')); 
			 $obj->setDet_CPF(mysql_result($rs, 0, 'det_CPF')); 
			 $obj->setDet_idEstrangeiro(mysql_result($rs, 0, 'det_idEstrangeiro')); 
			 $obj->setDet_xNome(mysql_result($rs, 0, 'det_xNome')); 
			 $obj->setDet_indIEDest(mysql_result($rs, 0, 'det_indIEDest')); 
			 $obj->setDet_IE(mysql_result($rs, 0, 'det_IE')); 
			 $obj->setDet_ISUF(mysql_result($rs, 0, 'det_ISUF')); 
			 $obj->setDet_IM(mysql_result($rs, 0, 'det_IM')); 
			 $obj->setDet_email(mysql_result($rs, 0, 'det_email')); 
			 $obj->setEnder_dest_xLgr(mysql_result($rs, 0, 'ender_dest_xLgr')); 
			 $obj->setEnder_dest_nro(mysql_result($rs, 0, 'ender_dest_nro')); 
			 $obj->setEnder_dest_xCpl(mysql_result($rs, 0, 'ender_dest_xCpl')); 
			 $obj->setEnder_dest_xBairro(mysql_result($rs, 0, 'ender_dest_xBairro')); 
			 $obj->setEnder_dest_cMun(mysql_result($rs, 0, 'ender_dest_cMun')); 
			 $obj->setEnder_dest_xMun(mysql_result($rs, 0, 'ender_dest_xMun')); 
			 $obj->setEnder_dest_UF(mysql_result($rs, 0, 'ender_dest_UF')); 
			 $obj->setEnder_dest_CEP(mysql_result($rs, 0, 'ender_dest_CEP')); 
			 $obj->setEnder_dest_cPais(mysql_result($rs, 0, 'ender_dest_cPais')); 
			 $obj->setEnder_dest_xPais(mysql_result($rs, 0, 'ender_dest_xPais')); 
			 $obj->setEnder_dest_fone(mysql_result($rs, 0, 'ender_dest_fone')); 
			 $obj->setRetirada_CNPJ(mysql_result($rs, 0, 'retirada_CNPJ')); 
			 $obj->setRetirada_CPF(mysql_result($rs, 0, 'retirada_CPF')); 
			 $obj->setRetirada_xLgr(mysql_result($rs, 0, 'retirada_xLgr')); 
			 $obj->setRetirada_nro(mysql_result($rs, 0, 'retirada_nro')); 
			 $obj->setRetirada_xCpl(mysql_result($rs, 0, 'retirada_xCpl')); 
			 $obj->setRetirada_xBairro(mysql_result($rs, 0, 'retirada_xBairro')); 
			 $obj->setRetirada_cMun(mysql_result($rs, 0, 'retirada_cMun')); 
			 $obj->setRetirada_xMun(mysql_result($rs, 0, 'retirada_xMun')); 
			 $obj->setRetirada_UF(mysql_result($rs, 0, 'retirada_UF')); 
			 $obj->setEntrega_CNPJ(mysql_result($rs, 0, 'entrega_CNPJ')); 
			 $obj->setEntrega_CPF(mysql_result($rs, 0, 'entrega_CPF')); 
			 $obj->setEntrega_xLgr(mysql_result($rs, 0, 'entrega_xLgr')); 
			 $obj->setEntrega_nro(mysql_result($rs, 0, 'entrega_nro')); 
			 $obj->setEntrega_xCpl(mysql_result($rs, 0, 'entrega_xCpl')); 
			 $obj->setEntrega_xBairro(mysql_result($rs, 0, 'entrega_xBairro')); 
			 $obj->setEntrega_cMun(mysql_result($rs, 0, 'entrega_cMun')); 
			 $obj->setEntrega_xMun(mysql_result($rs, 0, 'entrega_xMun')); 
			 $obj->setEntrega_UF(mysql_result($rs, 0, 'entrega_UF')); 
			 $obj->setPag_CNPJ(mysql_result($rs, 0, 'pag_CNPJ')); 
			 $obj->setPag_tBand(mysql_result($rs, 0, 'pag_tBand')); 
			 $obj->setPag_cAut(mysql_result($rs, 0, 'pag_cAut')); 
			 $obj->setCobr_nFat(mysql_result($rs, 0, 'cobr_nFat')); 
			 $obj->setCobr_vOrig(mysql_result($rs, 0, 'cobr_vOrig')); 
			 $obj->setCobr_vDesc(mysql_result($rs, 0, 'cobr_vDesc')); 
			 $obj->setCobr_vLiq(mysql_result($rs, 0, 'cobr_vLiq')); 
			 $obj->setPagt_pagT(mysql_result($rs, 0, 'pagt_pagT')); 
			 $obj->setDup_aDup(mysql_result($rs, 0, 'dup_aDup')); 
			 $obj->setModfrete_modFrete(mysql_result($rs, 0, 'modfrete_modFrete')); 
			 $obj->setTransp_CNPJ(mysql_result($rs, 0, 'transp_CNPJ')); 
			 $obj->setTransp_CPF(mysql_result($rs, 0, 'transp_CPF')); 
			 $obj->setTransp_xNome(mysql_result($rs, 0, 'transp_xNome')); 
			 $obj->setTransp_IE(mysql_result($rs, 0, 'transp_IE')); 
			 $obj->setTransp_xEnder(mysql_result($rs, 0, 'transp_xEnder')); 
			 $obj->setTransp_xMun(mysql_result($rs, 0, 'transp_xMun')); 
			 $obj->setTransp_UF(mysql_result($rs, 0, 'transp_UF')); 
			 $obj->setRet_transp_vServ(mysql_result($rs, 0, 'ret_transp_vServ')); 
			 $obj->setRet_transp_vBCRet(mysql_result($rs, 0, 'ret_transp_vBCRet')); 
			 $obj->setRet_transp_pICMSRet(mysql_result($rs, 0, 'ret_transp_pICMSRet')); 
			 $obj->setRet_transp_vICMSRet(mysql_result($rs, 0, 'ret_transp_vICMSRet')); 
			 $obj->setRet_transp_CFOP(mysql_result($rs, 0, 'ret_transp_CFOP')); 
			 $obj->setRet_transp_cMunFG(mysql_result($rs, 0, 'ret_transp_cMunFG')); 
			 $obj->setReboque_placa(mysql_result($rs, 0, 'reboque_placa')); 
			 $obj->setReboque_siglaUF(mysql_result($rs, 0, 'reboque_siglaUF')); 
			 $obj->setReboque_rntc(mysql_result($rs, 0, 'reboque_rntc')); 
			 $obj->setReboque_vagao(mysql_result($rs, 0, 'reboque_vagao')); 
			 $obj->setReboque_balsa(mysql_result($rs, 0, 'reboque_balsa')); 
			 $obj->setVol_Qvol(mysql_result($rs, 0, 'vol_Qvol')); 
			 $obj->setVol_Esp(mysql_result($rs, 0, 'vol_Esp')); 
			 $obj->setVol_Marca(mysql_result($rs, 0, 'vol_Marca')); 
			 $obj->setVol_nVol(mysql_result($rs, 0, 'vol_nVol')); 
			 $obj->setVol_pesoL(mysql_result($rs, 0, 'vol_pesoL')); 
			 $obj->setVol_pesoB(mysql_result($rs, 0, 'vol_pesoB')); 
			 $obj->setVol_aLacres(mysql_result($rs, 0, 'vol_aLacres')); 
			 $obj->setExporta_UFSaidaPais(mysql_result($rs, 0, 'exporta_UFSaidaPais')); 
			 $obj->setExporta_xLocExporta(mysql_result($rs, 0, 'exporta_xLocExporta')); 
			 $obj->setExporta_xLocDespacho(mysql_result($rs, 0, 'exporta_xLocDespacho')); 
			 $obj->setCompra_xNEmp(mysql_result($rs, 0, 'compra_xNEmp')); 
			 $obj->setCompra_xPed(mysql_result($rs, 0, 'compra_xPed')); 
			 $obj->setCompra_xCont(mysql_result($rs, 0, 'compra_xCont')); 
			 $obj->setReboque_aReboque(mysql_result($rs, 0, 'reboque_aReboque')); 
			 $obj->setDet_export_nItem(mysql_result($rs, 0, 'det_export_nItem')); 
			 $obj->setDet_export_nDraw(mysql_result($rs, 0, 'det_export_nDraw')); 
			 $obj->setDet_export_exportInd(mysql_result($rs, 0, 'det_export_exportInd')); 
			 $obj->setDet_export_nRE(mysql_result($rs, 0, 'det_export_nRE')); 
			 $obj->setDet_export_chNFe(mysql_result($rs, 0, 'det_export_chNFe')); 
			 $obj->setDet_export_qExport(mysql_result($rs, 0, 'det_export_qExport')); 
			 $obj->setVeic_transp_placa(mysql_result($rs, 0, 'veic_transp_placa')); 
			 $obj->setVeic_transp_UF(mysql_result($rs, 0, 'veic_transp_UF')); 
			 $obj->setVeic_transp_RNTC(mysql_result($rs, 0, 'veic_transp_RNTC')); 
			 $obj->setObs_fisco_aObsFisco(mysql_result($rs, 0, 'obs_fisco_aObsFisco')); 
			 $obj->setAutxml_aAutXML(mysql_result($rs, 0, 'autxml_aAutXML')); 
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
			 $obj->setTotal_vBC(mysql_result($rs, 0, 'total_vBC')); 
			 $obj->setTotal_vICMS(mysql_result($rs, 0, 'total_vICMS')); 
			 $obj->setTotal_vICMSDeson(mysql_result($rs, 0, 'total_vICMSDeson')); 
			 $obj->setTotal_vBCST(mysql_result($rs, 0, 'total_vBCST')); 
			 $obj->setTotal_vST(mysql_result($rs, 0, 'total_vST')); 
			 $obj->setTotal_vProd(mysql_result($rs, 0, 'total_vProd')); 
			 $obj->setTotal_vDesc(mysql_result($rs, 0, 'total_vDesc')); 
			 $obj->setTotal_vIPI(mysql_result($rs, 0, 'total_vIPI')); 
			 $obj->setTotal_vPIS(mysql_result($rs, 0, 'total_vPIS')); 
			 $obj->setTotal_vCOFINS(mysql_result($rs, 0, 'total_vCOFINS')); 
			 $obj->setTotal_vNF(mysql_result($rs, 0, 'total_vNF')); 
			 $obj->setTotal_vFrete(mysql_result($rs, 0, 'total_vFrete')); 
			 $obj->setTotal_vSeg(mysql_result($rs, 0, 'total_vSeg')); 
			 $obj->setTotal_vII(mysql_result($rs, 0, 'total_vII')); 
			 $obj->setTotal_vOutro(mysql_result($rs, 0, 'total_vOutro')); 
			 $obj->setTotal_vtotal(mysql_result($rs, 0, 'total_vtotal')); 
		} 
		 return $obj; 
	} 

	  function countAll($obj){
		 $sql = 'SELECT count(*) as existe FROM tabnfe WHERE 1=1 ';  


		if ($obj->getIdent_chave()) { 
			$sql .= " AND ident_chave = '".$obj->getIdent_chave()."'";
		} 
		if ($obj->getIdent_versao()) { 
			$sql .= " AND upper(ident_versao)  like ('%".strtoupper($obj->getIdent_versao())."%')";
		} 
		if ($obj->getNfref_cUF()) { 
			$sql .= " AND upper(Nfref_cUF)  like ('%".strtoupper($obj->getNfref_cUF())."%')";
		} 
		if ($obj->getNfref_cNF()) { 
			$sql .= " AND upper(Nfref_cNF)  like ('%".strtoupper($obj->getNfref_cNF())."%')";
		} 
		if ($obj->getNfref_natOp()) { 
			$sql .= " AND upper(Nfref_natOp)  like ('%".strtoupper($obj->getNfref_natOp())."%')";
		} 
		if ($obj->getNfref_indPag()) { 
			$sql .= " AND Nfref_indPag = '".$obj->getNfref_indPag()."'";
		} 
		if ($obj->getNfref_mod()) { 
			$sql .= " AND Nfref_mod = '".$obj->getNfref_mod()."'";
		} 
		if ($obj->getNfref_serie()) { 
			$sql .= " AND upper(Nfref_serie)  like ('%".strtoupper($obj->getNfref_serie())."%')";
		} 
		if ($obj->getNfref_nNF()) { 
			$sql .= " AND upper(Nfref_nNF)  like ('%".strtoupper($obj->getNfref_nNF())."%')";
		} 
		if ($obj->getNfref_dhEmi()) { 
			$sql .= " AND upper(Nfref_dhEmi)  like ('%".strtoupper($obj->getNfref_dhEmi())."%')";
		} 
		if ($obj->getNfref_dhSaiEnt()) { 
			$sql .= " AND upper(Nfref_dhSaiEnt)  like ('%".strtoupper($obj->getNfref_dhSaiEnt())."%')";
		} 
		if ($obj->getNfref_tpNF()) { 
			$sql .= " AND upper(Nfref_tpNF)  like ('%".strtoupper($obj->getNfref_tpNF())."%')";
		} 
		if ($obj->getNfref_idDest()) { 
			$sql .= " AND Nfref_idDest = '".$obj->getNfref_idDest()."'";
		} 
		if ($obj->getNfref_cMunFG()) { 
			$sql .= " AND Nfref_cMunFG = '".$obj->getNfref_cMunFG()."'";
		} 
		if ($obj->getNfref_tpImp()) { 
			$sql .= " AND Nfref_tpImp = '".$obj->getNfref_tpImp()."'";
		} 
		if ($obj->getNfref_tpEmis()) { 
			$sql .= " AND Nfref_tpEmis = '".$obj->getNfref_tpEmis()."'";
		} 
		if ($obj->getNfref_cDV()) { 
			$sql .= " AND Nfref_cDV = '".$obj->getNfref_cDV()."'";
		} 
		if ($obj->getNfref_tpAmb()) { 
			$sql .= " AND Nfref_tpAmb = '".$obj->getNfref_tpAmb()."'";
		} 
		if ($obj->getNfref_finNFe()) { 
			$sql .= " AND Nfref_finNFe = '".$obj->getNfref_finNFe()."'";
		} 
		if ($obj->getNfref_indFinal()) { 
			$sql .= " AND Nfref_indFinal = '".$obj->getNfref_indFinal()."'";
		} 
		if ($obj->getNfref_indPres()) { 
			$sql .= " AND Nfref_indPres = '".$obj->getNfref_indPres()."'";
		} 
		if ($obj->getNfref_procEmi()) { 
			$sql .= " AND Nfref_procEmi = '".$obj->getNfref_procEmi()."'";
		} 
		if ($obj->getNfref_verProc()) { 
			$sql .= " AND upper(Nfref_verProc)  like ('%".strtoupper($obj->getNfref_verProc())."%')";
		} 
		if ($obj->getNfref_dhCont()) { 
			$sql .= " AND upper(Nfref_dhCont)  like ('%".strtoupper($obj->getNfref_dhCont())."%')";
		} 
		if ($obj->getNfref_xJust()) { 
			$sql .= " AND upper(Nfref_xJust)  like ('%".strtoupper($obj->getNfref_xJust())."%')";
		} 
		if ($obj->getRefnfe_refNFeCh()) { 
			$sql .= " AND upper(refnfe_refNFeCh)  like ('%".strtoupper($obj->getRefnfe_refNFeCh())."%')";
		} 
		if ($obj->getRefnfe_cUF()) { 
			$sql .= " AND upper(refnfe_cUF)  like ('%".strtoupper($obj->getRefnfe_cUF())."%')";
		} 
		if ($obj->getRefnfe_AAMM()) { 
			$sql .= " AND upper(refnfe_AAMM)  like ('%".strtoupper($obj->getRefnfe_AAMM())."%')";
		} 
		if ($obj->getRefnfe_CNPJ()) { 
			$sql .= " AND upper(refnfe_CNPJ)  like ('%".strtoupper($obj->getRefnfe_CNPJ())."%')";
		} 
		if ($obj->getRefnfe_mod()) { 
			$sql .= " AND upper(refnfe_mod)  like ('%".strtoupper($obj->getRefnfe_mod())."%')";
		} 
		if ($obj->getRefnfe_serie()) { 
			$sql .= " AND upper(refnfe_serie)  like ('%".strtoupper($obj->getRefnfe_serie())."%')";
		} 
		if ($obj->getRefnfe_nNF()) { 
			$sql .= " AND upper(refnfe_nNF)  like ('%".strtoupper($obj->getRefnfe_nNF())."%')";
		} 
		if ($obj->getRural_cUF()) { 
			$sql .= " AND upper(rural_cUF)  like ('%".strtoupper($obj->getRural_cUF())."%')";
		} 
		if ($obj->getRural_AAMM()) { 
			$sql .= " AND upper(rural_AAMM)  like ('%".strtoupper($obj->getRural_AAMM())."%')";
		} 
		if ($obj->getRural_CNPJ()) { 
			$sql .= " AND upper(rural_CNPJ)  like ('%".strtoupper($obj->getRural_CNPJ())."%')";
		} 
		if ($obj->getRural_CPF()) { 
			$sql .= " AND upper(rural_CPF)  like ('%".strtoupper($obj->getRural_CPF())."%')";
		} 
		if ($obj->getRural_IE()) { 
			$sql .= " AND upper(rural_IE)  like ('%".strtoupper($obj->getRural_IE())."%')";
		} 
		if ($obj->getRural_mod()) { 
			$sql .= " AND upper(rural_mod)  like ('%".strtoupper($obj->getRural_mod())."%')";
		} 
		if ($obj->getRural_serie()) { 
			$sql .= " AND upper(rural_serie)  like ('%".strtoupper($obj->getRural_serie())."%')";
		} 
		if ($obj->getRural_nNF()) { 
			$sql .= " AND upper(rural_nNF)  like ('%".strtoupper($obj->getRural_nNF())."%')";
		} 
		if ($obj->getCteref_refCTe()) { 
			$sql .= " AND upper(cteref_refCTe)  like ('%".strtoupper($obj->getCteref_refCTe())."%')";
		} 
		if ($obj->getCteref_nECF()) { 
			$sql .= " AND upper(cteref_nECF)  like ('%".strtoupper($obj->getCteref_nECF())."%')";
		} 
		if ($obj->getCteref_nCOO()) { 
			$sql .= " AND upper(cteref_nCOO)  like ('%".strtoupper($obj->getCteref_nCOO())."%')";
		} 
		if ($obj->getEcferef_mod()) { 
			$sql .= " AND upper(ecferef_mod)  like ('%".strtoupper($obj->getEcferef_mod())."%')";
		} 
		if ($obj->getEmit_CNPJ()) { 
			$sql .= " AND upper(emit_CNPJ)  like ('%".strtoupper($obj->getEmit_CNPJ())."%')";
		} 
		if ($obj->getEmit_xNome()) { 
			$sql .= " AND upper(emit_xNome)  like ('%".strtoupper($obj->getEmit_xNome())."%')";
		} 
		if ($obj->getEmit_xFant()) { 
			$sql .= " AND upper(emit_xFant)  like ('%".strtoupper($obj->getEmit_xFant())."%')";
		} 
		if ($obj->getEmit_IE()) { 
			$sql .= " AND upper(emit_IE)  like ('%".strtoupper($obj->getEmit_IE())."%')";
		} 
		if ($obj->getEmit_IEST()) { 
			$sql .= " AND upper(emit_IEST)  like ('%".strtoupper($obj->getEmit_IEST())."%')";
		} 
		if ($obj->getEmit_IM()) { 
			$sql .= " AND upper(emit_IM)  like ('%".strtoupper($obj->getEmit_IM())."%')";
		} 
		if ($obj->getEmit_CNAE()) { 
			$sql .= " AND upper(emit_CNAE)  like ('%".strtoupper($obj->getEmit_CNAE())."%')";
		} 
		if ($obj->getEmit_CRT()) { 
			$sql .= " AND upper(emit_CRT)  like ('%".strtoupper($obj->getEmit_CRT())."%')";
		} 
		if ($obj->getEnder_emit_xLgr()) { 
			$sql .= " AND upper(ender_emit_xLgr)  like ('%".strtoupper($obj->getEnder_emit_xLgr())."%')";
		} 
		if ($obj->getEnder_emit_nro()) { 
			$sql .= " AND upper(ender_emit_nro)  like ('%".strtoupper($obj->getEnder_emit_nro())."%')";
		} 
		if ($obj->getEnder_emit_xCpl()) { 
			$sql .= " AND upper(ender_emit_xCpl)  like ('%".strtoupper($obj->getEnder_emit_xCpl())."%')";
		} 
		if ($obj->getEnder_emit_xBairro()) { 
			$sql .= " AND upper(ender_emit_xBairro)  like ('%".strtoupper($obj->getEnder_emit_xBairro())."%')";
		} 
		if ($obj->getEnder_emit_cMun()) { 
			$sql .= " AND upper(ender_emit_cMun)  like ('%".strtoupper($obj->getEnder_emit_cMun())."%')";
		} 
		if ($obj->getEnder_emit_xMun()) { 
			$sql .= " AND upper(ender_emit_xMun)  like ('%".strtoupper($obj->getEnder_emit_xMun())."%')";
		} 
		if ($obj->getEnder_emit_UF()) { 
			$sql .= " AND upper(ender_emit_UF)  like ('%".strtoupper($obj->getEnder_emit_UF())."%')";
		} 
		if ($obj->getEnder_emit_CEP()) { 
			$sql .= " AND upper(ender_emit_CEP)  like ('%".strtoupper($obj->getEnder_emit_CEP())."%')";
		} 
		if ($obj->getEnder_emit_cPais()) { 
			$sql .= " AND upper(ender_emit_cPais)  like ('%".strtoupper($obj->getEnder_emit_cPais())."%')";
		} 
		if ($obj->getEnder_emit_xPais()) { 
			$sql .= " AND upper(ender_emit_xPais)  like ('%".strtoupper($obj->getEnder_emit_xPais())."%')";
		} 
		if ($obj->getEnder_emit_fone()) { 
			$sql .= " AND upper(ender_emit_fone)  like ('%".strtoupper($obj->getEnder_emit_fone())."%')";
		} 
		if ($obj->getDet_CNPJ()) { 
			$sql .= " AND upper(det_CNPJ)  like ('%".strtoupper($obj->getDet_CNPJ())."%')";
		} 
		if ($obj->getDet_CPF()) { 
			$sql .= " AND upper(det_CPF)  like ('%".strtoupper($obj->getDet_CPF())."%')";
		} 
		if ($obj->getDet_idEstrangeiro()) { 
			$sql .= " AND upper(det_idEstrangeiro)  like ('%".strtoupper($obj->getDet_idEstrangeiro())."%')";
		} 
		if ($obj->getDet_xNome()) { 
			$sql .= " AND upper(det_xNome)  like ('%".strtoupper($obj->getDet_xNome())."%')";
		} 
		if ($obj->getDet_indIEDest()) { 
			$sql .= " AND upper(det_indIEDest)  like ('%".strtoupper($obj->getDet_indIEDest())."%')";
		} 
		if ($obj->getDet_IE()) { 
			$sql .= " AND upper(det_IE)  like ('%".strtoupper($obj->getDet_IE())."%')";
		} 
		if ($obj->getDet_ISUF()) { 
			$sql .= " AND upper(det_ISUF)  like ('%".strtoupper($obj->getDet_ISUF())."%')";
		} 
		if ($obj->getDet_IM()) { 
			$sql .= " AND upper(det_IM)  like ('%".strtoupper($obj->getDet_IM())."%')";
		} 
		if ($obj->getDet_email()) { 
			$sql .= " AND upper(det_email)  like ('%".strtoupper($obj->getDet_email())."%')";
		} 
		if ($obj->getEnder_dest_xLgr()) { 
			$sql .= " AND upper(ender_dest_xLgr)  like ('%".strtoupper($obj->getEnder_dest_xLgr())."%')";
		} 
		if ($obj->getEnder_dest_nro()) { 
			$sql .= " AND upper(ender_dest_nro)  like ('%".strtoupper($obj->getEnder_dest_nro())."%')";
		} 
		if ($obj->getEnder_dest_xCpl()) { 
			$sql .= " AND upper(ender_dest_xCpl)  like ('%".strtoupper($obj->getEnder_dest_xCpl())."%')";
		} 
		if ($obj->getEnder_dest_xBairro()) { 
			$sql .= " AND upper(ender_dest_xBairro)  like ('%".strtoupper($obj->getEnder_dest_xBairro())."%')";
		} 
		if ($obj->getEnder_dest_cMun()) { 
			$sql .= " AND upper(ender_dest_cMun)  like ('%".strtoupper($obj->getEnder_dest_cMun())."%')";
		} 
		if ($obj->getEnder_dest_xMun()) { 
			$sql .= " AND upper(ender_dest_xMun)  like ('%".strtoupper($obj->getEnder_dest_xMun())."%')";
		} 
		if ($obj->getEnder_dest_UF()) { 
			$sql .= " AND upper(ender_dest_UF)  like ('%".strtoupper($obj->getEnder_dest_UF())."%')";
		} 
		if ($obj->getEnder_dest_CEP()) { 
			$sql .= " AND upper(ender_dest_CEP)  like ('%".strtoupper($obj->getEnder_dest_CEP())."%')";
		} 
		if ($obj->getEnder_dest_cPais()) { 
			$sql .= " AND upper(ender_dest_cPais)  like ('%".strtoupper($obj->getEnder_dest_cPais())."%')";
		} 
		if ($obj->getEnder_dest_xPais()) { 
			$sql .= " AND upper(ender_dest_xPais)  like ('%".strtoupper($obj->getEnder_dest_xPais())."%')";
		} 
		if ($obj->getEnder_dest_fone()) { 
			$sql .= " AND upper(ender_dest_fone)  like ('%".strtoupper($obj->getEnder_dest_fone())."%')";
		} 
		if ($obj->getRetirada_CNPJ()) { 
			$sql .= " AND upper(retirada_CNPJ)  like ('%".strtoupper($obj->getRetirada_CNPJ())."%')";
		} 
		if ($obj->getRetirada_CPF()) { 
			$sql .= " AND upper(retirada_CPF)  like ('%".strtoupper($obj->getRetirada_CPF())."%')";
		} 
		if ($obj->getRetirada_xLgr()) { 
			$sql .= " AND upper(retirada_xLgr)  like ('%".strtoupper($obj->getRetirada_xLgr())."%')";
		} 
		if ($obj->getRetirada_nro()) { 
			$sql .= " AND upper(retirada_nro)  like ('%".strtoupper($obj->getRetirada_nro())."%')";
		} 
		if ($obj->getRetirada_xCpl()) { 
			$sql .= " AND upper(retirada_xCpl)  like ('%".strtoupper($obj->getRetirada_xCpl())."%')";
		} 
		if ($obj->getRetirada_xBairro()) { 
			$sql .= " AND upper(retirada_xBairro)  like ('%".strtoupper($obj->getRetirada_xBairro())."%')";
		} 
		if ($obj->getRetirada_cMun()) { 
			$sql .= " AND upper(retirada_cMun)  like ('%".strtoupper($obj->getRetirada_cMun())."%')";
		} 
		if ($obj->getRetirada_xMun()) { 
			$sql .= " AND upper(retirada_xMun)  like ('%".strtoupper($obj->getRetirada_xMun())."%')";
		} 
		if ($obj->getRetirada_UF()) { 
			$sql .= " AND upper(retirada_UF)  like ('%".strtoupper($obj->getRetirada_UF())."%')";
		} 
		if ($obj->getEntrega_CNPJ()) { 
			$sql .= " AND upper(entrega_CNPJ)  like ('%".strtoupper($obj->getEntrega_CNPJ())."%')";
		} 
		if ($obj->getEntrega_CPF()) { 
			$sql .= " AND upper(entrega_CPF)  like ('%".strtoupper($obj->getEntrega_CPF())."%')";
		} 
		if ($obj->getEntrega_xLgr()) { 
			$sql .= " AND upper(entrega_xLgr)  like ('%".strtoupper($obj->getEntrega_xLgr())."%')";
		} 
		if ($obj->getEntrega_nro()) { 
			$sql .= " AND upper(entrega_nro)  like ('%".strtoupper($obj->getEntrega_nro())."%')";
		} 
		if ($obj->getEntrega_xCpl()) { 
			$sql .= " AND upper(entrega_xCpl)  like ('%".strtoupper($obj->getEntrega_xCpl())."%')";
		} 
		if ($obj->getEntrega_xBairro()) { 
			$sql .= " AND upper(entrega_xBairro)  like ('%".strtoupper($obj->getEntrega_xBairro())."%')";
		} 
		if ($obj->getEntrega_cMun()) { 
			$sql .= " AND upper(entrega_cMun)  like ('%".strtoupper($obj->getEntrega_cMun())."%')";
		} 
		if ($obj->getEntrega_xMun()) { 
			$sql .= " AND upper(entrega_xMun)  like ('%".strtoupper($obj->getEntrega_xMun())."%')";
		} 
		if ($obj->getEntrega_UF()) { 
			$sql .= " AND upper(entrega_UF)  like ('%".strtoupper($obj->getEntrega_UF())."%')";
		} 
		if ($obj->getPag_CNPJ()) { 
			$sql .= " AND upper(pag_CNPJ)  like ('%".strtoupper($obj->getPag_CNPJ())."%')";
		} 
		if ($obj->getPag_tBand()) { 
			$sql .= " AND upper(pag_tBand)  like ('%".strtoupper($obj->getPag_tBand())."%')";
		} 
		if ($obj->getPag_cAut()) { 
			$sql .= " AND upper(pag_cAut)  like ('%".strtoupper($obj->getPag_cAut())."%')";
		} 
		if ($obj->getCobr_nFat()) { 
			$sql .= " AND upper(cobr_nFat)  like ('%".strtoupper($obj->getCobr_nFat())."%')";
		} 
		if ($obj->getCobr_vOrig()) { 
			$sql .= " AND upper(cobr_vOrig)  like ('%".strtoupper($obj->getCobr_vOrig())."%')";
		} 
		if ($obj->getCobr_vDesc()) { 
			$sql .= " AND upper(cobr_vDesc)  like ('%".strtoupper($obj->getCobr_vDesc())."%')";
		} 
		if ($obj->getCobr_vLiq()) { 
			$sql .= " AND upper(cobr_vLiq)  like ('%".strtoupper($obj->getCobr_vLiq())."%')";
		} 
		if ($obj->getPagt_pagT()) { 
			$sql .= " AND upper(pagt_pagT)  like ('%".strtoupper($obj->getPagt_pagT())."%')";
		} 
		if ($obj->getDup_aDup()) { 
			$sql .= " AND upper(dup_aDup)  like ('%".strtoupper($obj->getDup_aDup())."%')";
		} 
		if ($obj->getModfrete_modFrete()) { 
			$sql .= " AND upper(modfrete_modFrete)  like ('%".strtoupper($obj->getModfrete_modFrete())."%')";
		} 
		if ($obj->getTransp_CNPJ()) { 
			$sql .= " AND upper(transp_CNPJ)  like ('%".strtoupper($obj->getTransp_CNPJ())."%')";
		} 
		if ($obj->getTransp_CPF()) { 
			$sql .= " AND upper(transp_CPF)  like ('%".strtoupper($obj->getTransp_CPF())."%')";
		} 
		if ($obj->getTransp_xNome()) { 
			$sql .= " AND upper(transp_xNome)  like ('%".strtoupper($obj->getTransp_xNome())."%')";
		} 
		if ($obj->getTransp_IE()) { 
			$sql .= " AND upper(transp_IE)  like ('%".strtoupper($obj->getTransp_IE())."%')";
		} 
		if ($obj->getTransp_xEnder()) { 
			$sql .= " AND upper(transp_xEnder)  like ('%".strtoupper($obj->getTransp_xEnder())."%')";
		} 
		if ($obj->getTransp_xMun()) { 
			$sql .= " AND upper(transp_xMun)  like ('%".strtoupper($obj->getTransp_xMun())."%')";
		} 
		if ($obj->getTransp_UF()) { 
			$sql .= " AND upper(transp_UF)  like ('%".strtoupper($obj->getTransp_UF())."%')";
		} 
		if ($obj->getRet_transp_vServ()) { 
			$sql .= " AND upper(ret_transp_vServ)  like ('%".strtoupper($obj->getRet_transp_vServ())."%')";
		} 
		if ($obj->getRet_transp_vBCRet()) { 
			$sql .= " AND upper(ret_transp_vBCRet)  like ('%".strtoupper($obj->getRet_transp_vBCRet())."%')";
		} 
		if ($obj->getRet_transp_pICMSRet()) { 
			$sql .= " AND upper(ret_transp_pICMSRet)  like ('%".strtoupper($obj->getRet_transp_pICMSRet())."%')";
		} 
		if ($obj->getRet_transp_vICMSRet()) { 
			$sql .= " AND upper(ret_transp_vICMSRet)  like ('%".strtoupper($obj->getRet_transp_vICMSRet())."%')";
		} 
		if ($obj->getRet_transp_CFOP()) { 
			$sql .= " AND upper(ret_transp_CFOP)  like ('%".strtoupper($obj->getRet_transp_CFOP())."%')";
		} 
		if ($obj->getRet_transp_cMunFG()) { 
			$sql .= " AND upper(ret_transp_cMunFG)  like ('%".strtoupper($obj->getRet_transp_cMunFG())."%')";
		} 
		if ($obj->getReboque_placa()) { 
			$sql .= " AND upper(reboque_placa)  like ('%".strtoupper($obj->getReboque_placa())."%')";
		} 
		if ($obj->getReboque_siglaUF()) { 
			$sql .= " AND upper(reboque_siglaUF)  like ('%".strtoupper($obj->getReboque_siglaUF())."%')";
		} 
		if ($obj->getReboque_rntc()) { 
			$sql .= " AND upper(reboque_rntc)  like ('%".strtoupper($obj->getReboque_rntc())."%')";
		} 
		if ($obj->getReboque_vagao()) { 
			$sql .= " AND upper(reboque_vagao)  like ('%".strtoupper($obj->getReboque_vagao())."%')";
		} 
		if ($obj->getReboque_balsa()) { 
			$sql .= " AND upper(reboque_balsa)  like ('%".strtoupper($obj->getReboque_balsa())."%')";
		} 
		if ($obj->getVol_Qvol()) { 
			$sql .= " AND upper(vol_Qvol)  like ('%".strtoupper($obj->getVol_Qvol())."%')";
		} 
		if ($obj->getVol_Esp()) { 
			$sql .= " AND upper(vol_Esp)  like ('%".strtoupper($obj->getVol_Esp())."%')";
		} 
		if ($obj->getVol_Marca()) { 
			$sql .= " AND upper(vol_Marca)  like ('%".strtoupper($obj->getVol_Marca())."%')";
		} 
		if ($obj->getVol_nVol()) { 
			$sql .= " AND upper(vol_nVol)  like ('%".strtoupper($obj->getVol_nVol())."%')";
		} 
		if ($obj->getVol_pesoL()) { 
			$sql .= " AND upper(vol_pesoL)  like ('%".strtoupper($obj->getVol_pesoL())."%')";
		} 
		if ($obj->getVol_pesoB()) { 
			$sql .= " AND upper(vol_pesoB)  like ('%".strtoupper($obj->getVol_pesoB())."%')";
		} 
		if ($obj->getVol_aLacres()) { 
			$sql .= " AND upper(vol_aLacres)  like ('%".strtoupper($obj->getVol_aLacres())."%')";
		} 
		if ($obj->getExporta_UFSaidaPais()) { 
			$sql .= " AND upper(exporta_UFSaidaPais)  like ('%".strtoupper($obj->getExporta_UFSaidaPais())."%')";
		} 
		if ($obj->getExporta_xLocExporta()) { 
			$sql .= " AND upper(exporta_xLocExporta)  like ('%".strtoupper($obj->getExporta_xLocExporta())."%')";
		} 
		if ($obj->getExporta_xLocDespacho()) { 
			$sql .= " AND upper(exporta_xLocDespacho)  like ('%".strtoupper($obj->getExporta_xLocDespacho())."%')";
		} 
		if ($obj->getCompra_xNEmp()) { 
			$sql .= " AND upper(compra_xNEmp)  like ('%".strtoupper($obj->getCompra_xNEmp())."%')";
		} 
		if ($obj->getCompra_xPed()) { 
			$sql .= " AND upper(compra_xPed)  like ('%".strtoupper($obj->getCompra_xPed())."%')";
		} 
		if ($obj->getCompra_xCont()) { 
			$sql .= " AND upper(compra_xCont)  like ('%".strtoupper($obj->getCompra_xCont())."%')";
		} 
		if ($obj->getReboque_aReboque()) { 
			$sql .= " AND upper(reboque_aReboque)  like ('%".strtoupper($obj->getReboque_aReboque())."%')";
		} 
		if ($obj->getDet_export_nItem()) { 
			$sql .= " AND upper(det_export_nItem)  like ('%".strtoupper($obj->getDet_export_nItem())."%')";
		} 
		if ($obj->getDet_export_nDraw()) { 
			$sql .= " AND upper(det_export_nDraw)  like ('%".strtoupper($obj->getDet_export_nDraw())."%')";
		} 
		if ($obj->getDet_export_exportInd()) { 
			$sql .= " AND upper(det_export_exportInd)  like ('%".strtoupper($obj->getDet_export_exportInd())."%')";
		} 
		if ($obj->getDet_export_nRE()) { 
			$sql .= " AND upper(det_export_nRE)  like ('%".strtoupper($obj->getDet_export_nRE())."%')";
		} 
		if ($obj->getDet_export_chNFe()) { 
			$sql .= " AND upper(det_export_chNFe)  like ('%".strtoupper($obj->getDet_export_chNFe())."%')";
		} 
		if ($obj->getDet_export_qExport()) { 
			$sql .= " AND upper(det_export_qExport)  like ('%".strtoupper($obj->getDet_export_qExport())."%')";
		} 
		if ($obj->getVeic_transp_placa()) { 
			$sql .= " AND upper(veic_transp_placa)  like ('%".strtoupper($obj->getVeic_transp_placa())."%')";
		} 
		if ($obj->getVeic_transp_UF()) { 
			$sql .= " AND upper(veic_transp_UF)  like ('%".strtoupper($obj->getVeic_transp_UF())."%')";
		} 
		if ($obj->getVeic_transp_RNTC()) { 
			$sql .= " AND upper(veic_transp_RNTC)  like ('%".strtoupper($obj->getVeic_transp_RNTC())."%')";
		} 
		if ($obj->getObs_fisco_aObsFisco()) { 
			$sql .= " AND upper(obs_fisco_aObsFisco)  like ('%".strtoupper($obj->getObs_fisco_aObsFisco())."%')";
		} 
		if ($obj->getAutxml_aAutXML()) { 
			$sql .= " AND upper(autxml_aAutXML)  like ('%".strtoupper($obj->getAutxml_aAutXML())."%')";
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
		if ($obj->getTotal_vBC()) { 
			$sql .= " AND upper(total_vBC)  like ('%".strtoupper($obj->getTotal_vBC())."%')";
		} 
		if ($obj->getTotal_vICMS()) { 
			$sql .= " AND upper(total_vICMS)  like ('%".strtoupper($obj->getTotal_vICMS())."%')";
		} 
		if ($obj->getTotal_vICMSDeson()) { 
			$sql .= " AND upper(total_vICMSDeson)  like ('%".strtoupper($obj->getTotal_vICMSDeson())."%')";
		} 
		if ($obj->getTotal_vBCST()) { 
			$sql .= " AND upper(total_vBCST)  like ('%".strtoupper($obj->getTotal_vBCST())."%')";
		} 
		if ($obj->getTotal_vST()) { 
			$sql .= " AND upper(total_vST)  like ('%".strtoupper($obj->getTotal_vST())."%')";
		} 
		if ($obj->getTotal_vProd()) { 
			$sql .= " AND upper(total_vProd)  like ('%".strtoupper($obj->getTotal_vProd())."%')";
		} 
		if ($obj->getTotal_vDesc()) { 
			$sql .= " AND upper(total_vDesc)  like ('%".strtoupper($obj->getTotal_vDesc())."%')";
		} 
		if ($obj->getTotal_vIPI()) { 
			$sql .= " AND upper(total_vIPI)  like ('%".strtoupper($obj->getTotal_vIPI())."%')";
		} 
		if ($obj->getTotal_vPIS()) { 
			$sql .= " AND upper(total_vPIS)  like ('%".strtoupper($obj->getTotal_vPIS())."%')";
		} 
		if ($obj->getTotal_vCOFINS()) { 
			$sql .= " AND upper(total_vCOFINS)  like ('%".strtoupper($obj->getTotal_vCOFINS())."%')";
		} 
		if ($obj->getTotal_vNF()) { 
			$sql .= " AND upper(total_vNF)  like ('%".strtoupper($obj->getTotal_vNF())."%')";
		} 
		if ($obj->getTotal_vFrete()) { 
			$sql .= " AND upper(total_vFrete)  like ('%".strtoupper($obj->getTotal_vFrete())."%')";
		} 
		if ($obj->getTotal_vSeg()) { 
			$sql .= " AND upper(total_vSeg)  like ('%".strtoupper($obj->getTotal_vSeg())."%')";
		} 
		if ($obj->getTotal_vII()) { 
			$sql .= " AND upper(total_vII)  like ('%".strtoupper($obj->getTotal_vII())."%')";
		} 
		if ($obj->getTotal_vOutro()) { 
			$sql .= " AND upper(total_vOutro)  like ('%".strtoupper($obj->getTotal_vOutro())."%')";
		} 
		if ($obj->getTotal_vtotal()) { 
			$sql .= " AND total_vtotal = '".$obj->getTotal_vtotal()."'";
		} 


		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function verifica_existe($obj){
		 $sql = 'SELECT count(*) as existe FROM tabnfe WHERE 1=1 ';  




		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $existe = $dados['existe']; 
		 return $existe; 
		} 


 	  function selectAll($obj){
		 $sql = 'SELECT * FROM tabnfe WHERE 1=1 '; 


		if ($obj->getIdent_chave()) { 
			 $sql .= " AND ident_chave = '".$obj->getIdent_chave()."'";
 				} 
		if ($obj->getIdent_versao()) { 
			 $sql .= " AND upper(ident_versao)  like ('%".strtoupper($obj->getIdent_versao())."%')";
 				} 
		if ($obj->getNfref_cUF()) { 
			 $sql .= " AND upper(Nfref_cUF)  like ('%".strtoupper($obj->getNfref_cUF())."%')";
 				} 
		if ($obj->getNfref_cNF()) { 
			 $sql .= " AND upper(Nfref_cNF)  like ('%".strtoupper($obj->getNfref_cNF())."%')";
 				} 
		if ($obj->getNfref_natOp()) { 
			 $sql .= " AND upper(Nfref_natOp)  like ('%".strtoupper($obj->getNfref_natOp())."%')";
 				} 
		if ($obj->getNfref_indPag()) { 
			 $sql .= " AND Nfref_indPag = '".$obj->getNfref_indPag()."'";
 				} 
		if ($obj->getNfref_mod()) { 
			 $sql .= " AND Nfref_mod = '".$obj->getNfref_mod()."'";
 				} 
		if ($obj->getNfref_serie()) { 
			 $sql .= " AND upper(Nfref_serie)  like ('%".strtoupper($obj->getNfref_serie())."%')";
 				} 
		if ($obj->getNfref_nNF()) { 
			 $sql .= " AND upper(Nfref_nNF)  like ('%".strtoupper($obj->getNfref_nNF())."%')";
 				} 
		if ($obj->getNfref_dhEmi()) { 
			 $sql .= " AND upper(Nfref_dhEmi)  like ('%".strtoupper($obj->getNfref_dhEmi())."%')";
 				} 
		if ($obj->getNfref_dhSaiEnt()) { 
			 $sql .= " AND upper(Nfref_dhSaiEnt)  like ('%".strtoupper($obj->getNfref_dhSaiEnt())."%')";
 				} 
		if ($obj->getNfref_tpNF()) { 
			 $sql .= " AND upper(Nfref_tpNF)  like ('%".strtoupper($obj->getNfref_tpNF())."%')";
 				} 
		if ($obj->getNfref_idDest()) { 
			 $sql .= " AND Nfref_idDest = '".$obj->getNfref_idDest()."'";
 				} 
		if ($obj->getNfref_cMunFG()) { 
			 $sql .= " AND Nfref_cMunFG = '".$obj->getNfref_cMunFG()."'";
 				} 
		if ($obj->getNfref_tpImp()) { 
			 $sql .= " AND Nfref_tpImp = '".$obj->getNfref_tpImp()."'";
 				} 
		if ($obj->getNfref_tpEmis()) { 
			 $sql .= " AND Nfref_tpEmis = '".$obj->getNfref_tpEmis()."'";
 				} 
		if ($obj->getNfref_cDV()) { 
			 $sql .= " AND Nfref_cDV = '".$obj->getNfref_cDV()."'";
 				} 
		if ($obj->getNfref_tpAmb()) { 
			 $sql .= " AND Nfref_tpAmb = '".$obj->getNfref_tpAmb()."'";
 				} 
		if ($obj->getNfref_finNFe()) { 
			 $sql .= " AND Nfref_finNFe = '".$obj->getNfref_finNFe()."'";
 				} 
		if ($obj->getNfref_indFinal()) { 
			 $sql .= " AND Nfref_indFinal = '".$obj->getNfref_indFinal()."'";
 				} 
		if ($obj->getNfref_indPres()) { 
			 $sql .= " AND Nfref_indPres = '".$obj->getNfref_indPres()."'";
 				} 
		if ($obj->getNfref_procEmi()) { 
			 $sql .= " AND Nfref_procEmi = '".$obj->getNfref_procEmi()."'";
 				} 
		if ($obj->getNfref_verProc()) { 
			 $sql .= " AND upper(Nfref_verProc)  like ('%".strtoupper($obj->getNfref_verProc())."%')";
 				} 
		if ($obj->getNfref_dhCont()) { 
			 $sql .= " AND upper(Nfref_dhCont)  like ('%".strtoupper($obj->getNfref_dhCont())."%')";
 				} 
		if ($obj->getNfref_xJust()) { 
			 $sql .= " AND upper(Nfref_xJust)  like ('%".strtoupper($obj->getNfref_xJust())."%')";
 				} 
		if ($obj->getRefnfe_refNFeCh()) { 
			 $sql .= " AND upper(refnfe_refNFeCh)  like ('%".strtoupper($obj->getRefnfe_refNFeCh())."%')";
 				} 
		if ($obj->getRefnfe_cUF()) { 
			 $sql .= " AND upper(refnfe_cUF)  like ('%".strtoupper($obj->getRefnfe_cUF())."%')";
 				} 
		if ($obj->getRefnfe_AAMM()) { 
			 $sql .= " AND upper(refnfe_AAMM)  like ('%".strtoupper($obj->getRefnfe_AAMM())."%')";
 				} 
		if ($obj->getRefnfe_CNPJ()) { 
			 $sql .= " AND upper(refnfe_CNPJ)  like ('%".strtoupper($obj->getRefnfe_CNPJ())."%')";
 				} 
		if ($obj->getRefnfe_mod()) { 
			 $sql .= " AND upper(refnfe_mod)  like ('%".strtoupper($obj->getRefnfe_mod())."%')";
 				} 
		if ($obj->getRefnfe_serie()) { 
			 $sql .= " AND upper(refnfe_serie)  like ('%".strtoupper($obj->getRefnfe_serie())."%')";
 				} 
		if ($obj->getRefnfe_nNF()) { 
			 $sql .= " AND upper(refnfe_nNF)  like ('%".strtoupper($obj->getRefnfe_nNF())."%')";
 				} 
		if ($obj->getRural_cUF()) { 
			 $sql .= " AND upper(rural_cUF)  like ('%".strtoupper($obj->getRural_cUF())."%')";
 				} 
		if ($obj->getRural_AAMM()) { 
			 $sql .= " AND upper(rural_AAMM)  like ('%".strtoupper($obj->getRural_AAMM())."%')";
 				} 
		if ($obj->getRural_CNPJ()) { 
			 $sql .= " AND upper(rural_CNPJ)  like ('%".strtoupper($obj->getRural_CNPJ())."%')";
 				} 
		if ($obj->getRural_CPF()) { 
			 $sql .= " AND upper(rural_CPF)  like ('%".strtoupper($obj->getRural_CPF())."%')";
 				} 
		if ($obj->getRural_IE()) { 
			 $sql .= " AND upper(rural_IE)  like ('%".strtoupper($obj->getRural_IE())."%')";
 				} 
		if ($obj->getRural_mod()) { 
			 $sql .= " AND upper(rural_mod)  like ('%".strtoupper($obj->getRural_mod())."%')";
 				} 
		if ($obj->getRural_serie()) { 
			 $sql .= " AND upper(rural_serie)  like ('%".strtoupper($obj->getRural_serie())."%')";
 				} 
		if ($obj->getRural_nNF()) { 
			 $sql .= " AND upper(rural_nNF)  like ('%".strtoupper($obj->getRural_nNF())."%')";
 				} 
		if ($obj->getCteref_refCTe()) { 
			 $sql .= " AND upper(cteref_refCTe)  like ('%".strtoupper($obj->getCteref_refCTe())."%')";
 				} 
		if ($obj->getCteref_nECF()) { 
			 $sql .= " AND upper(cteref_nECF)  like ('%".strtoupper($obj->getCteref_nECF())."%')";
 				} 
		if ($obj->getCteref_nCOO()) { 
			 $sql .= " AND upper(cteref_nCOO)  like ('%".strtoupper($obj->getCteref_nCOO())."%')";
 				} 
		if ($obj->getEcferef_mod()) { 
			 $sql .= " AND upper(ecferef_mod)  like ('%".strtoupper($obj->getEcferef_mod())."%')";
 				} 
		if ($obj->getEmit_CNPJ()) { 
			 $sql .= " AND upper(emit_CNPJ)  like ('%".strtoupper($obj->getEmit_CNPJ())."%')";
 				} 
		if ($obj->getEmit_xNome()) { 
			 $sql .= " AND upper(emit_xNome)  like ('%".strtoupper($obj->getEmit_xNome())."%')";
 				} 
		if ($obj->getEmit_xFant()) { 
			 $sql .= " AND upper(emit_xFant)  like ('%".strtoupper($obj->getEmit_xFant())."%')";
 				} 
		if ($obj->getEmit_IE()) { 
			 $sql .= " AND upper(emit_IE)  like ('%".strtoupper($obj->getEmit_IE())."%')";
 				} 
		if ($obj->getEmit_IEST()) { 
			 $sql .= " AND upper(emit_IEST)  like ('%".strtoupper($obj->getEmit_IEST())."%')";
 				} 
		if ($obj->getEmit_IM()) { 
			 $sql .= " AND upper(emit_IM)  like ('%".strtoupper($obj->getEmit_IM())."%')";
 				} 
		if ($obj->getEmit_CNAE()) { 
			 $sql .= " AND upper(emit_CNAE)  like ('%".strtoupper($obj->getEmit_CNAE())."%')";
 				} 
		if ($obj->getEmit_CRT()) { 
			 $sql .= " AND upper(emit_CRT)  like ('%".strtoupper($obj->getEmit_CRT())."%')";
 				} 
		if ($obj->getEnder_emit_xLgr()) { 
			 $sql .= " AND upper(ender_emit_xLgr)  like ('%".strtoupper($obj->getEnder_emit_xLgr())."%')";
 				} 
		if ($obj->getEnder_emit_nro()) { 
			 $sql .= " AND upper(ender_emit_nro)  like ('%".strtoupper($obj->getEnder_emit_nro())."%')";
 				} 
		if ($obj->getEnder_emit_xCpl()) { 
			 $sql .= " AND upper(ender_emit_xCpl)  like ('%".strtoupper($obj->getEnder_emit_xCpl())."%')";
 				} 
		if ($obj->getEnder_emit_xBairro()) { 
			 $sql .= " AND upper(ender_emit_xBairro)  like ('%".strtoupper($obj->getEnder_emit_xBairro())."%')";
 				} 
		if ($obj->getEnder_emit_cMun()) { 
			 $sql .= " AND upper(ender_emit_cMun)  like ('%".strtoupper($obj->getEnder_emit_cMun())."%')";
 				} 
		if ($obj->getEnder_emit_xMun()) { 
			 $sql .= " AND upper(ender_emit_xMun)  like ('%".strtoupper($obj->getEnder_emit_xMun())."%')";
 				} 
		if ($obj->getEnder_emit_UF()) { 
			 $sql .= " AND upper(ender_emit_UF)  like ('%".strtoupper($obj->getEnder_emit_UF())."%')";
 				} 
		if ($obj->getEnder_emit_CEP()) { 
			 $sql .= " AND upper(ender_emit_CEP)  like ('%".strtoupper($obj->getEnder_emit_CEP())."%')";
 				} 
		if ($obj->getEnder_emit_cPais()) { 
			 $sql .= " AND upper(ender_emit_cPais)  like ('%".strtoupper($obj->getEnder_emit_cPais())."%')";
 				} 
		if ($obj->getEnder_emit_xPais()) { 
			 $sql .= " AND upper(ender_emit_xPais)  like ('%".strtoupper($obj->getEnder_emit_xPais())."%')";
 				} 
		if ($obj->getEnder_emit_fone()) { 
			 $sql .= " AND upper(ender_emit_fone)  like ('%".strtoupper($obj->getEnder_emit_fone())."%')";
 				} 
		if ($obj->getDet_CNPJ()) { 
			 $sql .= " AND upper(det_CNPJ)  like ('%".strtoupper($obj->getDet_CNPJ())."%')";
 				} 
		if ($obj->getDet_CPF()) { 
			 $sql .= " AND upper(det_CPF)  like ('%".strtoupper($obj->getDet_CPF())."%')";
 				} 
		if ($obj->getDet_idEstrangeiro()) { 
			 $sql .= " AND upper(det_idEstrangeiro)  like ('%".strtoupper($obj->getDet_idEstrangeiro())."%')";
 				} 
		if ($obj->getDet_xNome()) { 
			 $sql .= " AND upper(det_xNome)  like ('%".strtoupper($obj->getDet_xNome())."%')";
 				} 
		if ($obj->getDet_indIEDest()) { 
			 $sql .= " AND upper(det_indIEDest)  like ('%".strtoupper($obj->getDet_indIEDest())."%')";
 				} 
		if ($obj->getDet_IE()) { 
			 $sql .= " AND upper(det_IE)  like ('%".strtoupper($obj->getDet_IE())."%')";
 				} 
		if ($obj->getDet_ISUF()) { 
			 $sql .= " AND upper(det_ISUF)  like ('%".strtoupper($obj->getDet_ISUF())."%')";
 				} 
		if ($obj->getDet_IM()) { 
			 $sql .= " AND upper(det_IM)  like ('%".strtoupper($obj->getDet_IM())."%')";
 				} 
		if ($obj->getDet_email()) { 
			 $sql .= " AND upper(det_email)  like ('%".strtoupper($obj->getDet_email())."%')";
 				} 
		if ($obj->getEnder_dest_xLgr()) { 
			 $sql .= " AND upper(ender_dest_xLgr)  like ('%".strtoupper($obj->getEnder_dest_xLgr())."%')";
 				} 
		if ($obj->getEnder_dest_nro()) { 
			 $sql .= " AND upper(ender_dest_nro)  like ('%".strtoupper($obj->getEnder_dest_nro())."%')";
 				} 
		if ($obj->getEnder_dest_xCpl()) { 
			 $sql .= " AND upper(ender_dest_xCpl)  like ('%".strtoupper($obj->getEnder_dest_xCpl())."%')";
 				} 
		if ($obj->getEnder_dest_xBairro()) { 
			 $sql .= " AND upper(ender_dest_xBairro)  like ('%".strtoupper($obj->getEnder_dest_xBairro())."%')";
 				} 
		if ($obj->getEnder_dest_cMun()) { 
			 $sql .= " AND upper(ender_dest_cMun)  like ('%".strtoupper($obj->getEnder_dest_cMun())."%')";
 				} 
		if ($obj->getEnder_dest_xMun()) { 
			 $sql .= " AND upper(ender_dest_xMun)  like ('%".strtoupper($obj->getEnder_dest_xMun())."%')";
 				} 
		if ($obj->getEnder_dest_UF()) { 
			 $sql .= " AND upper(ender_dest_UF)  like ('%".strtoupper($obj->getEnder_dest_UF())."%')";
 				} 
		if ($obj->getEnder_dest_CEP()) { 
			 $sql .= " AND upper(ender_dest_CEP)  like ('%".strtoupper($obj->getEnder_dest_CEP())."%')";
 				} 
		if ($obj->getEnder_dest_cPais()) { 
			 $sql .= " AND upper(ender_dest_cPais)  like ('%".strtoupper($obj->getEnder_dest_cPais())."%')";
 				} 
		if ($obj->getEnder_dest_xPais()) { 
			 $sql .= " AND upper(ender_dest_xPais)  like ('%".strtoupper($obj->getEnder_dest_xPais())."%')";
 				} 
		if ($obj->getEnder_dest_fone()) { 
			 $sql .= " AND upper(ender_dest_fone)  like ('%".strtoupper($obj->getEnder_dest_fone())."%')";
 				} 
		if ($obj->getRetirada_CNPJ()) { 
			 $sql .= " AND upper(retirada_CNPJ)  like ('%".strtoupper($obj->getRetirada_CNPJ())."%')";
 				} 
		if ($obj->getRetirada_CPF()) { 
			 $sql .= " AND upper(retirada_CPF)  like ('%".strtoupper($obj->getRetirada_CPF())."%')";
 				} 
		if ($obj->getRetirada_xLgr()) { 
			 $sql .= " AND upper(retirada_xLgr)  like ('%".strtoupper($obj->getRetirada_xLgr())."%')";
 				} 
		if ($obj->getRetirada_nro()) { 
			 $sql .= " AND upper(retirada_nro)  like ('%".strtoupper($obj->getRetirada_nro())."%')";
 				} 
		if ($obj->getRetirada_xCpl()) { 
			 $sql .= " AND upper(retirada_xCpl)  like ('%".strtoupper($obj->getRetirada_xCpl())."%')";
 				} 
		if ($obj->getRetirada_xBairro()) { 
			 $sql .= " AND upper(retirada_xBairro)  like ('%".strtoupper($obj->getRetirada_xBairro())."%')";
 				} 
		if ($obj->getRetirada_cMun()) { 
			 $sql .= " AND upper(retirada_cMun)  like ('%".strtoupper($obj->getRetirada_cMun())."%')";
 				} 
		if ($obj->getRetirada_xMun()) { 
			 $sql .= " AND upper(retirada_xMun)  like ('%".strtoupper($obj->getRetirada_xMun())."%')";
 				} 
		if ($obj->getRetirada_UF()) { 
			 $sql .= " AND upper(retirada_UF)  like ('%".strtoupper($obj->getRetirada_UF())."%')";
 				} 
		if ($obj->getEntrega_CNPJ()) { 
			 $sql .= " AND upper(entrega_CNPJ)  like ('%".strtoupper($obj->getEntrega_CNPJ())."%')";
 				} 
		if ($obj->getEntrega_CPF()) { 
			 $sql .= " AND upper(entrega_CPF)  like ('%".strtoupper($obj->getEntrega_CPF())."%')";
 				} 
		if ($obj->getEntrega_xLgr()) { 
			 $sql .= " AND upper(entrega_xLgr)  like ('%".strtoupper($obj->getEntrega_xLgr())."%')";
 				} 
		if ($obj->getEntrega_nro()) { 
			 $sql .= " AND upper(entrega_nro)  like ('%".strtoupper($obj->getEntrega_nro())."%')";
 				} 
		if ($obj->getEntrega_xCpl()) { 
			 $sql .= " AND upper(entrega_xCpl)  like ('%".strtoupper($obj->getEntrega_xCpl())."%')";
 				} 
		if ($obj->getEntrega_xBairro()) { 
			 $sql .= " AND upper(entrega_xBairro)  like ('%".strtoupper($obj->getEntrega_xBairro())."%')";
 				} 
		if ($obj->getEntrega_cMun()) { 
			 $sql .= " AND upper(entrega_cMun)  like ('%".strtoupper($obj->getEntrega_cMun())."%')";
 				} 
		if ($obj->getEntrega_xMun()) { 
			 $sql .= " AND upper(entrega_xMun)  like ('%".strtoupper($obj->getEntrega_xMun())."%')";
 				} 
		if ($obj->getEntrega_UF()) { 
			 $sql .= " AND upper(entrega_UF)  like ('%".strtoupper($obj->getEntrega_UF())."%')";
 				} 
		if ($obj->getPag_CNPJ()) { 
			 $sql .= " AND upper(pag_CNPJ)  like ('%".strtoupper($obj->getPag_CNPJ())."%')";
 				} 
		if ($obj->getPag_tBand()) { 
			 $sql .= " AND upper(pag_tBand)  like ('%".strtoupper($obj->getPag_tBand())."%')";
 				} 
		if ($obj->getPag_cAut()) { 
			 $sql .= " AND upper(pag_cAut)  like ('%".strtoupper($obj->getPag_cAut())."%')";
 				} 
		if ($obj->getCobr_nFat()) { 
			 $sql .= " AND upper(cobr_nFat)  like ('%".strtoupper($obj->getCobr_nFat())."%')";
 				} 
		if ($obj->getCobr_vOrig()) { 
			 $sql .= " AND upper(cobr_vOrig)  like ('%".strtoupper($obj->getCobr_vOrig())."%')";
 				} 
		if ($obj->getCobr_vDesc()) { 
			 $sql .= " AND upper(cobr_vDesc)  like ('%".strtoupper($obj->getCobr_vDesc())."%')";
 				} 
		if ($obj->getCobr_vLiq()) { 
			 $sql .= " AND upper(cobr_vLiq)  like ('%".strtoupper($obj->getCobr_vLiq())."%')";
 				} 
		if ($obj->getPagt_pagT()) { 
			 $sql .= " AND upper(pagt_pagT)  like ('%".strtoupper($obj->getPagt_pagT())."%')";
 				} 
		if ($obj->getDup_aDup()) { 
			 $sql .= " AND upper(dup_aDup)  like ('%".strtoupper($obj->getDup_aDup())."%')";
 				} 
		if ($obj->getModfrete_modFrete()) { 
			 $sql .= " AND upper(modfrete_modFrete)  like ('%".strtoupper($obj->getModfrete_modFrete())."%')";
 				} 
		if ($obj->getTransp_CNPJ()) { 
			 $sql .= " AND upper(transp_CNPJ)  like ('%".strtoupper($obj->getTransp_CNPJ())."%')";
 				} 
		if ($obj->getTransp_CPF()) { 
			 $sql .= " AND upper(transp_CPF)  like ('%".strtoupper($obj->getTransp_CPF())."%')";
 				} 
		if ($obj->getTransp_xNome()) { 
			 $sql .= " AND upper(transp_xNome)  like ('%".strtoupper($obj->getTransp_xNome())."%')";
 				} 
		if ($obj->getTransp_IE()) { 
			 $sql .= " AND upper(transp_IE)  like ('%".strtoupper($obj->getTransp_IE())."%')";
 				} 
		if ($obj->getTransp_xEnder()) { 
			 $sql .= " AND upper(transp_xEnder)  like ('%".strtoupper($obj->getTransp_xEnder())."%')";
 				} 
		if ($obj->getTransp_xMun()) { 
			 $sql .= " AND upper(transp_xMun)  like ('%".strtoupper($obj->getTransp_xMun())."%')";
 				} 
		if ($obj->getTransp_UF()) { 
			 $sql .= " AND upper(transp_UF)  like ('%".strtoupper($obj->getTransp_UF())."%')";
 				} 
		if ($obj->getRet_transp_vServ()) { 
			 $sql .= " AND upper(ret_transp_vServ)  like ('%".strtoupper($obj->getRet_transp_vServ())."%')";
 				} 
		if ($obj->getRet_transp_vBCRet()) { 
			 $sql .= " AND upper(ret_transp_vBCRet)  like ('%".strtoupper($obj->getRet_transp_vBCRet())."%')";
 				} 
		if ($obj->getRet_transp_pICMSRet()) { 
			 $sql .= " AND upper(ret_transp_pICMSRet)  like ('%".strtoupper($obj->getRet_transp_pICMSRet())."%')";
 				} 
		if ($obj->getRet_transp_vICMSRet()) { 
			 $sql .= " AND upper(ret_transp_vICMSRet)  like ('%".strtoupper($obj->getRet_transp_vICMSRet())."%')";
 				} 
		if ($obj->getRet_transp_CFOP()) { 
			 $sql .= " AND upper(ret_transp_CFOP)  like ('%".strtoupper($obj->getRet_transp_CFOP())."%')";
 				} 
		if ($obj->getRet_transp_cMunFG()) { 
			 $sql .= " AND upper(ret_transp_cMunFG)  like ('%".strtoupper($obj->getRet_transp_cMunFG())."%')";
 				} 
		if ($obj->getReboque_placa()) { 
			 $sql .= " AND upper(reboque_placa)  like ('%".strtoupper($obj->getReboque_placa())."%')";
 				} 
		if ($obj->getReboque_siglaUF()) { 
			 $sql .= " AND upper(reboque_siglaUF)  like ('%".strtoupper($obj->getReboque_siglaUF())."%')";
 				} 
		if ($obj->getReboque_rntc()) { 
			 $sql .= " AND upper(reboque_rntc)  like ('%".strtoupper($obj->getReboque_rntc())."%')";
 				} 
		if ($obj->getReboque_vagao()) { 
			 $sql .= " AND upper(reboque_vagao)  like ('%".strtoupper($obj->getReboque_vagao())."%')";
 				} 
		if ($obj->getReboque_balsa()) { 
			 $sql .= " AND upper(reboque_balsa)  like ('%".strtoupper($obj->getReboque_balsa())."%')";
 				} 
		if ($obj->getVol_Qvol()) { 
			 $sql .= " AND upper(vol_Qvol)  like ('%".strtoupper($obj->getVol_Qvol())."%')";
 				} 
		if ($obj->getVol_Esp()) { 
			 $sql .= " AND upper(vol_Esp)  like ('%".strtoupper($obj->getVol_Esp())."%')";
 				} 
		if ($obj->getVol_Marca()) { 
			 $sql .= " AND upper(vol_Marca)  like ('%".strtoupper($obj->getVol_Marca())."%')";
 				} 
		if ($obj->getVol_nVol()) { 
			 $sql .= " AND upper(vol_nVol)  like ('%".strtoupper($obj->getVol_nVol())."%')";
 				} 
		if ($obj->getVol_pesoL()) { 
			 $sql .= " AND upper(vol_pesoL)  like ('%".strtoupper($obj->getVol_pesoL())."%')";
 				} 
		if ($obj->getVol_pesoB()) { 
			 $sql .= " AND upper(vol_pesoB)  like ('%".strtoupper($obj->getVol_pesoB())."%')";
 				} 
		if ($obj->getVol_aLacres()) { 
			 $sql .= " AND upper(vol_aLacres)  like ('%".strtoupper($obj->getVol_aLacres())."%')";
 				} 
		if ($obj->getExporta_UFSaidaPais()) { 
			 $sql .= " AND upper(exporta_UFSaidaPais)  like ('%".strtoupper($obj->getExporta_UFSaidaPais())."%')";
 				} 
		if ($obj->getExporta_xLocExporta()) { 
			 $sql .= " AND upper(exporta_xLocExporta)  like ('%".strtoupper($obj->getExporta_xLocExporta())."%')";
 				} 
		if ($obj->getExporta_xLocDespacho()) { 
			 $sql .= " AND upper(exporta_xLocDespacho)  like ('%".strtoupper($obj->getExporta_xLocDespacho())."%')";
 				} 
		if ($obj->getCompra_xNEmp()) { 
			 $sql .= " AND upper(compra_xNEmp)  like ('%".strtoupper($obj->getCompra_xNEmp())."%')";
 				} 
		if ($obj->getCompra_xPed()) { 
			 $sql .= " AND upper(compra_xPed)  like ('%".strtoupper($obj->getCompra_xPed())."%')";
 				} 
		if ($obj->getCompra_xCont()) { 
			 $sql .= " AND upper(compra_xCont)  like ('%".strtoupper($obj->getCompra_xCont())."%')";
 				} 
		if ($obj->getReboque_aReboque()) { 
			 $sql .= " AND upper(reboque_aReboque)  like ('%".strtoupper($obj->getReboque_aReboque())."%')";
 				} 
		if ($obj->getDet_export_nItem()) { 
			 $sql .= " AND upper(det_export_nItem)  like ('%".strtoupper($obj->getDet_export_nItem())."%')";
 				} 
		if ($obj->getDet_export_nDraw()) { 
			 $sql .= " AND upper(det_export_nDraw)  like ('%".strtoupper($obj->getDet_export_nDraw())."%')";
 				} 
		if ($obj->getDet_export_exportInd()) { 
			 $sql .= " AND upper(det_export_exportInd)  like ('%".strtoupper($obj->getDet_export_exportInd())."%')";
 				} 
		if ($obj->getDet_export_nRE()) { 
			 $sql .= " AND upper(det_export_nRE)  like ('%".strtoupper($obj->getDet_export_nRE())."%')";
 				} 
		if ($obj->getDet_export_chNFe()) { 
			 $sql .= " AND upper(det_export_chNFe)  like ('%".strtoupper($obj->getDet_export_chNFe())."%')";
 				} 
		if ($obj->getDet_export_qExport()) { 
			 $sql .= " AND upper(det_export_qExport)  like ('%".strtoupper($obj->getDet_export_qExport())."%')";
 				} 
		if ($obj->getVeic_transp_placa()) { 
			 $sql .= " AND upper(veic_transp_placa)  like ('%".strtoupper($obj->getVeic_transp_placa())."%')";
 				} 
		if ($obj->getVeic_transp_UF()) { 
			 $sql .= " AND upper(veic_transp_UF)  like ('%".strtoupper($obj->getVeic_transp_UF())."%')";
 				} 
		if ($obj->getVeic_transp_RNTC()) { 
			 $sql .= " AND upper(veic_transp_RNTC)  like ('%".strtoupper($obj->getVeic_transp_RNTC())."%')";
 				} 
		if ($obj->getObs_fisco_aObsFisco()) { 
			 $sql .= " AND upper(obs_fisco_aObsFisco)  like ('%".strtoupper($obj->getObs_fisco_aObsFisco())."%')";
 				} 
		if ($obj->getAutxml_aAutXML()) { 
			 $sql .= " AND upper(autxml_aAutXML)  like ('%".strtoupper($obj->getAutxml_aAutXML())."%')";
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
		if ($obj->getTotal_vBC()) { 
			 $sql .= " AND upper(total_vBC)  like ('%".strtoupper($obj->getTotal_vBC())."%')";
 				} 
		if ($obj->getTotal_vICMS()) { 
			 $sql .= " AND upper(total_vICMS)  like ('%".strtoupper($obj->getTotal_vICMS())."%')";
 				} 
		if ($obj->getTotal_vICMSDeson()) { 
			 $sql .= " AND upper(total_vICMSDeson)  like ('%".strtoupper($obj->getTotal_vICMSDeson())."%')";
 				} 
		if ($obj->getTotal_vBCST()) { 
			 $sql .= " AND upper(total_vBCST)  like ('%".strtoupper($obj->getTotal_vBCST())."%')";
 				} 
		if ($obj->getTotal_vST()) { 
			 $sql .= " AND upper(total_vST)  like ('%".strtoupper($obj->getTotal_vST())."%')";
 				} 
		if ($obj->getTotal_vProd()) { 
			 $sql .= " AND upper(total_vProd)  like ('%".strtoupper($obj->getTotal_vProd())."%')";
 				} 
		if ($obj->getTotal_vDesc()) { 
			 $sql .= " AND upper(total_vDesc)  like ('%".strtoupper($obj->getTotal_vDesc())."%')";
 				} 
		if ($obj->getTotal_vIPI()) { 
			 $sql .= " AND upper(total_vIPI)  like ('%".strtoupper($obj->getTotal_vIPI())."%')";
 				} 
		if ($obj->getTotal_vPIS()) { 
			 $sql .= " AND upper(total_vPIS)  like ('%".strtoupper($obj->getTotal_vPIS())."%')";
 				} 
		if ($obj->getTotal_vCOFINS()) { 
			 $sql .= " AND upper(total_vCOFINS)  like ('%".strtoupper($obj->getTotal_vCOFINS())."%')";
 				} 
		if ($obj->getTotal_vNF()) { 
			 $sql .= " AND upper(total_vNF)  like ('%".strtoupper($obj->getTotal_vNF())."%')";
 				} 
		if ($obj->getTotal_vFrete()) { 
			 $sql .= " AND upper(total_vFrete)  like ('%".strtoupper($obj->getTotal_vFrete())."%')";
 				} 
		if ($obj->getTotal_vSeg()) { 
			 $sql .= " AND upper(total_vSeg)  like ('%".strtoupper($obj->getTotal_vSeg())."%')";
 				} 
		if ($obj->getTotal_vII()) { 
			 $sql .= " AND upper(total_vII)  like ('%".strtoupper($obj->getTotal_vII())."%')";
 				} 
		if ($obj->getTotal_vOutro()) { 
			 $sql .= " AND upper(total_vOutro)  like ('%".strtoupper($obj->getTotal_vOutro())."%')";
 				} 
		if ($obj->getTotal_vtotal()) { 
			 $sql .= " AND total_vtotal = '".$obj->getTotal_vtotal()."'";
 				} 


		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Tabnfe(); 
			 $obj->setIdent_chave(mysql_result($rs, $i, 'ident_chave')); 
			 $obj->setIdent_versao(mysql_result($rs, $i, 'ident_versao')); 
			 $obj->setNfref_cUF(mysql_result($rs, $i, 'Nfref_cUF')); 
			 $obj->setNfref_cNF(mysql_result($rs, $i, 'Nfref_cNF')); 
			 $obj->setNfref_natOp(mysql_result($rs, $i, 'Nfref_natOp')); 
			 $obj->setNfref_indPag(mysql_result($rs, $i, 'Nfref_indPag')); 
			 $obj->setNfref_mod(mysql_result($rs, $i, 'Nfref_mod')); 
			 $obj->setNfref_serie(mysql_result($rs, $i, 'Nfref_serie')); 
			 $obj->setNfref_nNF(mysql_result($rs, $i, 'Nfref_nNF')); 
			 $obj->setNfref_dhEmi(mysql_result($rs, $i, 'Nfref_dhEmi')); 
			 $obj->setNfref_dhSaiEnt(mysql_result($rs, $i, 'Nfref_dhSaiEnt')); 
			 $obj->setNfref_tpNF(mysql_result($rs, $i, 'Nfref_tpNF')); 
			 $obj->setNfref_idDest(mysql_result($rs, $i, 'Nfref_idDest')); 
			 $obj->setNfref_cMunFG(mysql_result($rs, $i, 'Nfref_cMunFG')); 
			 $obj->setNfref_tpImp(mysql_result($rs, $i, 'Nfref_tpImp')); 
			 $obj->setNfref_tpEmis(mysql_result($rs, $i, 'Nfref_tpEmis')); 
			 $obj->setNfref_cDV(mysql_result($rs, $i, 'Nfref_cDV')); 
			 $obj->setNfref_tpAmb(mysql_result($rs, $i, 'Nfref_tpAmb')); 
			 $obj->setNfref_finNFe(mysql_result($rs, $i, 'Nfref_finNFe')); 
			 $obj->setNfref_indFinal(mysql_result($rs, $i, 'Nfref_indFinal')); 
			 $obj->setNfref_indPres(mysql_result($rs, $i, 'Nfref_indPres')); 
			 $obj->setNfref_procEmi(mysql_result($rs, $i, 'Nfref_procEmi')); 
			 $obj->setNfref_verProc(mysql_result($rs, $i, 'Nfref_verProc')); 
			 $obj->setNfref_dhCont(mysql_result($rs, $i, 'Nfref_dhCont')); 
			 $obj->setNfref_xJust(mysql_result($rs, $i, 'Nfref_xJust')); 
			 $obj->setRefnfe_refNFeCh(mysql_result($rs, $i, 'refnfe_refNFeCh')); 
			 $obj->setRefnfe_cUF(mysql_result($rs, $i, 'refnfe_cUF')); 
			 $obj->setRefnfe_AAMM(mysql_result($rs, $i, 'refnfe_AAMM')); 
			 $obj->setRefnfe_CNPJ(mysql_result($rs, $i, 'refnfe_CNPJ')); 
			 $obj->setRefnfe_mod(mysql_result($rs, $i, 'refnfe_mod')); 
			 $obj->setRefnfe_serie(mysql_result($rs, $i, 'refnfe_serie')); 
			 $obj->setRefnfe_nNF(mysql_result($rs, $i, 'refnfe_nNF')); 
			 $obj->setRural_cUF(mysql_result($rs, $i, 'rural_cUF')); 
			 $obj->setRural_AAMM(mysql_result($rs, $i, 'rural_AAMM')); 
			 $obj->setRural_CNPJ(mysql_result($rs, $i, 'rural_CNPJ')); 
			 $obj->setRural_CPF(mysql_result($rs, $i, 'rural_CPF')); 
			 $obj->setRural_IE(mysql_result($rs, $i, 'rural_IE')); 
			 $obj->setRural_mod(mysql_result($rs, $i, 'rural_mod')); 
			 $obj->setRural_serie(mysql_result($rs, $i, 'rural_serie')); 
			 $obj->setRural_nNF(mysql_result($rs, $i, 'rural_nNF')); 
			 $obj->setCteref_refCTe(mysql_result($rs, $i, 'cteref_refCTe')); 
			 $obj->setCteref_nECF(mysql_result($rs, $i, 'cteref_nECF')); 
			 $obj->setCteref_nCOO(mysql_result($rs, $i, 'cteref_nCOO')); 
			 $obj->setEcferef_mod(mysql_result($rs, $i, 'ecferef_mod')); 
			 $obj->setEmit_CNPJ(mysql_result($rs, $i, 'emit_CNPJ')); 
			 $obj->setEmit_xNome(mysql_result($rs, $i, 'emit_xNome')); 
			 $obj->setEmit_xFant(mysql_result($rs, $i, 'emit_xFant')); 
			 $obj->setEmit_IE(mysql_result($rs, $i, 'emit_IE')); 
			 $obj->setEmit_IEST(mysql_result($rs, $i, 'emit_IEST')); 
			 $obj->setEmit_IM(mysql_result($rs, $i, 'emit_IM')); 
			 $obj->setEmit_CNAE(mysql_result($rs, $i, 'emit_CNAE')); 
			 $obj->setEmit_CRT(mysql_result($rs, $i, 'emit_CRT')); 
			 $obj->setEnder_emit_xLgr(mysql_result($rs, $i, 'ender_emit_xLgr')); 
			 $obj->setEnder_emit_nro(mysql_result($rs, $i, 'ender_emit_nro')); 
			 $obj->setEnder_emit_xCpl(mysql_result($rs, $i, 'ender_emit_xCpl')); 
			 $obj->setEnder_emit_xBairro(mysql_result($rs, $i, 'ender_emit_xBairro')); 
			 $obj->setEnder_emit_cMun(mysql_result($rs, $i, 'ender_emit_cMun')); 
			 $obj->setEnder_emit_xMun(mysql_result($rs, $i, 'ender_emit_xMun')); 
			 $obj->setEnder_emit_UF(mysql_result($rs, $i, 'ender_emit_UF')); 
			 $obj->setEnder_emit_CEP(mysql_result($rs, $i, 'ender_emit_CEP')); 
			 $obj->setEnder_emit_cPais(mysql_result($rs, $i, 'ender_emit_cPais')); 
			 $obj->setEnder_emit_xPais(mysql_result($rs, $i, 'ender_emit_xPais')); 
			 $obj->setEnder_emit_fone(mysql_result($rs, $i, 'ender_emit_fone')); 
			 $obj->setDet_CNPJ(mysql_result($rs, $i, 'det_CNPJ')); 
			 $obj->setDet_CPF(mysql_result($rs, $i, 'det_CPF')); 
			 $obj->setDet_idEstrangeiro(mysql_result($rs, $i, 'det_idEstrangeiro')); 
			 $obj->setDet_xNome(mysql_result($rs, $i, 'det_xNome')); 
			 $obj->setDet_indIEDest(mysql_result($rs, $i, 'det_indIEDest')); 
			 $obj->setDet_IE(mysql_result($rs, $i, 'det_IE')); 
			 $obj->setDet_ISUF(mysql_result($rs, $i, 'det_ISUF')); 
			 $obj->setDet_IM(mysql_result($rs, $i, 'det_IM')); 
			 $obj->setDet_email(mysql_result($rs, $i, 'det_email')); 
			 $obj->setEnder_dest_xLgr(mysql_result($rs, $i, 'ender_dest_xLgr')); 
			 $obj->setEnder_dest_nro(mysql_result($rs, $i, 'ender_dest_nro')); 
			 $obj->setEnder_dest_xCpl(mysql_result($rs, $i, 'ender_dest_xCpl')); 
			 $obj->setEnder_dest_xBairro(mysql_result($rs, $i, 'ender_dest_xBairro')); 
			 $obj->setEnder_dest_cMun(mysql_result($rs, $i, 'ender_dest_cMun')); 
			 $obj->setEnder_dest_xMun(mysql_result($rs, $i, 'ender_dest_xMun')); 
			 $obj->setEnder_dest_UF(mysql_result($rs, $i, 'ender_dest_UF')); 
			 $obj->setEnder_dest_CEP(mysql_result($rs, $i, 'ender_dest_CEP')); 
			 $obj->setEnder_dest_cPais(mysql_result($rs, $i, 'ender_dest_cPais')); 
			 $obj->setEnder_dest_xPais(mysql_result($rs, $i, 'ender_dest_xPais')); 
			 $obj->setEnder_dest_fone(mysql_result($rs, $i, 'ender_dest_fone')); 
			 $obj->setRetirada_CNPJ(mysql_result($rs, $i, 'retirada_CNPJ')); 
			 $obj->setRetirada_CPF(mysql_result($rs, $i, 'retirada_CPF')); 
			 $obj->setRetirada_xLgr(mysql_result($rs, $i, 'retirada_xLgr')); 
			 $obj->setRetirada_nro(mysql_result($rs, $i, 'retirada_nro')); 
			 $obj->setRetirada_xCpl(mysql_result($rs, $i, 'retirada_xCpl')); 
			 $obj->setRetirada_xBairro(mysql_result($rs, $i, 'retirada_xBairro')); 
			 $obj->setRetirada_cMun(mysql_result($rs, $i, 'retirada_cMun')); 
			 $obj->setRetirada_xMun(mysql_result($rs, $i, 'retirada_xMun')); 
			 $obj->setRetirada_UF(mysql_result($rs, $i, 'retirada_UF')); 
			 $obj->setEntrega_CNPJ(mysql_result($rs, $i, 'entrega_CNPJ')); 
			 $obj->setEntrega_CPF(mysql_result($rs, $i, 'entrega_CPF')); 
			 $obj->setEntrega_xLgr(mysql_result($rs, $i, 'entrega_xLgr')); 
			 $obj->setEntrega_nro(mysql_result($rs, $i, 'entrega_nro')); 
			 $obj->setEntrega_xCpl(mysql_result($rs, $i, 'entrega_xCpl')); 
			 $obj->setEntrega_xBairro(mysql_result($rs, $i, 'entrega_xBairro')); 
			 $obj->setEntrega_cMun(mysql_result($rs, $i, 'entrega_cMun')); 
			 $obj->setEntrega_xMun(mysql_result($rs, $i, 'entrega_xMun')); 
			 $obj->setEntrega_UF(mysql_result($rs, $i, 'entrega_UF')); 
			 $obj->setPag_CNPJ(mysql_result($rs, $i, 'pag_CNPJ')); 
			 $obj->setPag_tBand(mysql_result($rs, $i, 'pag_tBand')); 
			 $obj->setPag_cAut(mysql_result($rs, $i, 'pag_cAut')); 
			 $obj->setCobr_nFat(mysql_result($rs, $i, 'cobr_nFat')); 
			 $obj->setCobr_vOrig(mysql_result($rs, $i, 'cobr_vOrig')); 
			 $obj->setCobr_vDesc(mysql_result($rs, $i, 'cobr_vDesc')); 
			 $obj->setCobr_vLiq(mysql_result($rs, $i, 'cobr_vLiq')); 
			 $obj->setPagt_pagT(mysql_result($rs, $i, 'pagt_pagT')); 
			 $obj->setDup_aDup(mysql_result($rs, $i, 'dup_aDup')); 
			 $obj->setModfrete_modFrete(mysql_result($rs, $i, 'modfrete_modFrete')); 
			 $obj->setTransp_CNPJ(mysql_result($rs, $i, 'transp_CNPJ')); 
			 $obj->setTransp_CPF(mysql_result($rs, $i, 'transp_CPF')); 
			 $obj->setTransp_xNome(mysql_result($rs, $i, 'transp_xNome')); 
			 $obj->setTransp_IE(mysql_result($rs, $i, 'transp_IE')); 
			 $obj->setTransp_xEnder(mysql_result($rs, $i, 'transp_xEnder')); 
			 $obj->setTransp_xMun(mysql_result($rs, $i, 'transp_xMun')); 
			 $obj->setTransp_UF(mysql_result($rs, $i, 'transp_UF')); 
			 $obj->setRet_transp_vServ(mysql_result($rs, $i, 'ret_transp_vServ')); 
			 $obj->setRet_transp_vBCRet(mysql_result($rs, $i, 'ret_transp_vBCRet')); 
			 $obj->setRet_transp_pICMSRet(mysql_result($rs, $i, 'ret_transp_pICMSRet')); 
			 $obj->setRet_transp_vICMSRet(mysql_result($rs, $i, 'ret_transp_vICMSRet')); 
			 $obj->setRet_transp_CFOP(mysql_result($rs, $i, 'ret_transp_CFOP')); 
			 $obj->setRet_transp_cMunFG(mysql_result($rs, $i, 'ret_transp_cMunFG')); 
			 $obj->setReboque_placa(mysql_result($rs, $i, 'reboque_placa')); 
			 $obj->setReboque_siglaUF(mysql_result($rs, $i, 'reboque_siglaUF')); 
			 $obj->setReboque_rntc(mysql_result($rs, $i, 'reboque_rntc')); 
			 $obj->setReboque_vagao(mysql_result($rs, $i, 'reboque_vagao')); 
			 $obj->setReboque_balsa(mysql_result($rs, $i, 'reboque_balsa')); 
			 $obj->setVol_Qvol(mysql_result($rs, $i, 'vol_Qvol')); 
			 $obj->setVol_Esp(mysql_result($rs, $i, 'vol_Esp')); 
			 $obj->setVol_Marca(mysql_result($rs, $i, 'vol_Marca')); 
			 $obj->setVol_nVol(mysql_result($rs, $i, 'vol_nVol')); 
			 $obj->setVol_pesoL(mysql_result($rs, $i, 'vol_pesoL')); 
			 $obj->setVol_pesoB(mysql_result($rs, $i, 'vol_pesoB')); 
			 $obj->setVol_aLacres(mysql_result($rs, $i, 'vol_aLacres')); 
			 $obj->setExporta_UFSaidaPais(mysql_result($rs, $i, 'exporta_UFSaidaPais')); 
			 $obj->setExporta_xLocExporta(mysql_result($rs, $i, 'exporta_xLocExporta')); 
			 $obj->setExporta_xLocDespacho(mysql_result($rs, $i, 'exporta_xLocDespacho')); 
			 $obj->setCompra_xNEmp(mysql_result($rs, $i, 'compra_xNEmp')); 
			 $obj->setCompra_xPed(mysql_result($rs, $i, 'compra_xPed')); 
			 $obj->setCompra_xCont(mysql_result($rs, $i, 'compra_xCont')); 
			 $obj->setReboque_aReboque(mysql_result($rs, $i, 'reboque_aReboque')); 
			 $obj->setDet_export_nItem(mysql_result($rs, $i, 'det_export_nItem')); 
			 $obj->setDet_export_nDraw(mysql_result($rs, $i, 'det_export_nDraw')); 
			 $obj->setDet_export_exportInd(mysql_result($rs, $i, 'det_export_exportInd')); 
			 $obj->setDet_export_nRE(mysql_result($rs, $i, 'det_export_nRE')); 
			 $obj->setDet_export_chNFe(mysql_result($rs, $i, 'det_export_chNFe')); 
			 $obj->setDet_export_qExport(mysql_result($rs, $i, 'det_export_qExport')); 
			 $obj->setVeic_transp_placa(mysql_result($rs, $i, 'veic_transp_placa')); 
			 $obj->setVeic_transp_UF(mysql_result($rs, $i, 'veic_transp_UF')); 
			 $obj->setVeic_transp_RNTC(mysql_result($rs, $i, 'veic_transp_RNTC')); 
			 $obj->setObs_fisco_aObsFisco(mysql_result($rs, $i, 'obs_fisco_aObsFisco')); 
			 $obj->setAutxml_aAutXML(mysql_result($rs, $i, 'autxml_aAutXML')); 
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
			 $obj->setTotal_vBC(mysql_result($rs, $i, 'total_vBC')); 
			 $obj->setTotal_vICMS(mysql_result($rs, $i, 'total_vICMS')); 
			 $obj->setTotal_vICMSDeson(mysql_result($rs, $i, 'total_vICMSDeson')); 
			 $obj->setTotal_vBCST(mysql_result($rs, $i, 'total_vBCST')); 
			 $obj->setTotal_vST(mysql_result($rs, $i, 'total_vST')); 
			 $obj->setTotal_vProd(mysql_result($rs, $i, 'total_vProd')); 
			 $obj->setTotal_vDesc(mysql_result($rs, $i, 'total_vDesc')); 
			 $obj->setTotal_vIPI(mysql_result($rs, $i, 'total_vIPI')); 
			 $obj->setTotal_vPIS(mysql_result($rs, $i, 'total_vPIS')); 
			 $obj->setTotal_vCOFINS(mysql_result($rs, $i, 'total_vCOFINS')); 
			 $obj->setTotal_vNF(mysql_result($rs, $i, 'total_vNF')); 
			 $obj->setTotal_vFrete(mysql_result($rs, $i, 'total_vFrete')); 
			 $obj->setTotal_vSeg(mysql_result($rs, $i, 'total_vSeg')); 
			 $obj->setTotal_vII(mysql_result($rs, $i, 'total_vII')); 
			 $obj->setTotal_vOutro(mysql_result($rs, $i, 'total_vOutro')); 
			 $obj->setTotal_vtotal(mysql_result($rs, $i, 'total_vtotal')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
} 
