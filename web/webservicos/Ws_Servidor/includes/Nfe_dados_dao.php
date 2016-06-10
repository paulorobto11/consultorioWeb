<?php 
 /** Classe responsavel pelas transacoes da Tabela: Nfe_dados. */ 
class Nfe_dados_dao { 
 
	  function insert($obj){ 
	 	 $sql = 'INSERT INTO nfe_dados ('; 
		 $sql .= 'seq_nfe,';
		 $sql .= 'data_envio,';
		 $sql .= 'mes_ano,';
		 $sql .= 'ident_chave,';
		 $sql .= 'ident_versao,';
		 $sql .= 'Nfref_CNPJ,';
		 $sql .= 'Nfref_aNoMes,';
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
		 $sql .= 'refNfe_refNFeCh,';
		 $sql .= 'refNfe_cUF,';
		 $sql .= 'refNfe_AAMM,';
		 $sql .= 'refNfe_CNPJ,';
		 $sql .= 'refNfe_mod,';
		 $sql .= 'refNfe_serie,';
		 $sql .= 'refNfe_nNF,';
		 $sql .= 'Rural_cUF,';
		 $sql .= 'Rural_AAMM,';
		 $sql .= 'Rural_CNPJ,';
		 $sql .= 'Rural_CPF,';
		 $sql .= 'Rural_IE,';
		 $sql .= 'Rural_mod,';
		 $sql .= 'Rural_serie,';
		 $sql .= 'Rural_nNF,';
		 $sql .= 'Creref_refCTe,';
		 $sql .= 'Creref_nECF,';
		 $sql .= 'Creref_nCOO,';
		 $sql .= 'Ecferef_mod,';
		 $sql .= 'emit_CNPJ,';
		 $sql .= 'emit_xNome,';
		 $sql .= 'emit_xFant,';
		 $sql .= 'emit_IE,';
		 $sql .= 'emit_IEST,';
		 $sql .= 'emit_IM,';
		 $sql .= 'emit_CNAE,';
		 $sql .= 'emit_CRT,';
		 $sql .= 'enderEmit_xLgr,';
		 $sql .= 'enderEmit_nro,';
		 $sql .= 'enderEmit_xCpl,';
		 $sql .= 'enderEmit_xBairro,';
		 $sql .= 'enderEmit_cMun,';
		 $sql .= 'enderEmit_xMun,';
		 $sql .= 'enderEmit_UF,';
		 $sql .= 'enderEmit_CEP,';
		 $sql .= 'enderEmit_cPais,';
		 $sql .= 'enderEmit_xPais,';
		 $sql .= 'enderEmit_fone,';
		 $sql .= 'dest_CNPJ,';
		 $sql .= 'dest_CPF,';
		 $sql .= 'dest_idEstrangeiro,';
		 $sql .= 'dest_xNome,';
		 $sql .= 'dest_indIEDest,';
		 $sql .= 'dest_IE,';
		 $sql .= 'dest_ISUF,';
		 $sql .= 'dest_IM,';
		 $sql .= 'dest_email,';
		 $sql .= 'enderDest_xLgr,';
		 $sql .= 'enderDest_nro,';
		 $sql .= 'enderDest_xCpl,';
		 $sql .= 'enderDest_xBairro,';
		 $sql .= 'enderDest_cMun,';
		 $sql .= 'enderDest_xMun,';
		 $sql .= 'enderDest_UF,';
		 $sql .= 'enderDest_CEP,';
		 $sql .= 'enderDest_cPais,';
		 $sql .= 'enderDest_xPais,';
		 $sql .= 'enderDest_fone,';
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
		 $sql .= 'pagT_pagT,';
		 $sql .= 'cobr_nFat,';
		 $sql .= 'cobr_vOrig,';
		 $sql .= 'cobr_vDesc,';
		 $sql .= 'cobr_vLiq,';
		 $sql .= 'dup_nDup,';
		 $sql .= 'dup_dVenc,';
		 $sql .= 'dup_vDup,';
		 $sql .= 'modfrete_modFrete,';
		 $sql .= 'transp_CNPJ,';
		 $sql .= 'transp_CPF,';
		 $sql .= 'transp_xNome,';
		 $sql .= 'transp_IE,';
		 $sql .= 'transp_xEnder,';
		 $sql .= 'transp_xMun,';
		 $sql .= 'transp_UF,';
		 $sql .= 'retTransp_vServ,';
		 $sql .= 'retTransp_vBCRet,';
		 $sql .= 'retTransp_pICMSRet,';
		 $sql .= 'retTransp_vICMSRet,';
		 $sql .= 'retTransp_CFOP,';
		 $sql .= 'retTransp_cMunFG,';
		 $sql .= 'veicTransp_placa,';
		 $sql .= 'veicTransp_UF,';
		 $sql .= 'veicTransp_RNTC,';
		 $sql .= 'reboque_placa,';
		 $sql .= 'reboque_siglaUF,';
		 $sql .= 'reboque_rntc,';
		 $sql .= 'reboque_vagao,';
		 $sql .= 'reboque_balsa,';
		 $sql .= 'Vol_qVol,';
		 $sql .= 'Vol_esp,';
		 $sql .= 'Vol_marca,';
		 $sql .= 'Vol_nVol,';
		 $sql .= 'Vol_pesoL,';
		 $sql .= 'Vol_pesoB,';
		 $sql .= 'Vol_aLacres,';
		 $sql .= 'exporta_UFSaidaPais,';
		 $sql .= 'exporta_xLocExporta,';
		 $sql .= 'exporta_xLocDespacho,';
		 $sql .= 'compra_xNEmp,';
		 $sql .= 'compra_xPed,';
		 $sql .= 'compra_xCont,';
		 $sql .= 'DetExport_nItem,';
		 $sql .= 'DetExport_nDraw,';
		 $sql .= 'DetExport_exportInd,';
		 $sql .= 'DetExport_nRE,';
		 $sql .= 'DetExport_chNFe,';
		 $sql .= 'DetExport_qExport,';
		 $sql .= 'ObsFisco_xCampo,';
		 $sql .= 'ObsFisco_xTexto,';
		 $sql .= 'AuxXML_AutXML,';
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
		 $sql .= 'total_vFrete,';
		 $sql .= 'total_vSeg,';
		 $sql .= 'total_vII,';
		 $sql .= 'total_vOutro,';
		 $sql .= 'total_vtotal,';
		 $sql .= 'reltrib_vRetPIS,';
		 $sql .= 'reltrib_vRetCOFINS,';
		 $sql .= 'reltrib_vRetCSLL,';
		 $sql .= 'reltrib_vBCIRRF,';
		 $sql .= 'reltrib_vIRRF,';
		 $sql .= 'reltrib_vBCRetPrev,';
		 $sql .= 'reltrib_vRetPrev,';
		 $sql .= 'cana_safra,';
		 $sql .= 'cana_ref,';
		 $sql .= 'fordia_dia,';
		 $sql .= 'fordia_qtde,';
		 $sql .= 'fordia_qTotMes,';
		 $sql .= 'fordia_qTotAnt,';
		 $sql .= 'fordia_qTotGer,';
		 $sql .= 'deduc_xDed,';
		 $sql .= 'deduc_vDed,';
		 $sql .= 'deduc_vFor,';
		 $sql .= 'deduc_vTotDed,';
		 $sql .= 'deduc_vLiqFor,';
		 $sql .= 'infAdFisco_infAdFisco,';
		 $sql .= 'infAdFisco_infCpl,';
		 $sql .= 'ObsCont_xCampo,';
		 $sql .= 'ObsCont_xTexto,';
		 $sql .= 'procRef_nProc,';
		 $sql .= 'procRef_indProc,';
		 $sql .= 'status_nfe';
		 $sql .= ') VALUES ('; 
		 $sql .= ($obj->getSeq_nfe()?$obj->getSeq_nfe():0).',';
		 $sql .= '\''.$obj->getData_envio().'\',';
		 $sql .= ($obj->getMes_ano()?$obj->getMes_ano():0).',';
		 $sql .= '\''.$obj->getIdent_chave().'\',';
		 $sql .= '\''.$obj->getIdent_versao().'\',';
		 $sql .= '\''.$obj->getNfref_CNPJ().'\',';
		 $sql .= ($obj->getNfref_aNoMes()?$obj->getNfref_aNoMes():0).',';
		 $sql .= '\''.$obj->getNfref_cUF().'\',';
		 $sql .= '\''.$obj->getNfref_cNF().'\',';
		 $sql .= '\''.$obj->getNfref_natOp().'\',';
		 $sql .= ($obj->getNfref_indPag()?$obj->getNfref_indPag():0).',';
		 $sql .= ($obj->getNfref_mod()?$obj->getNfref_mod():0).',';
		 $sql .= ($obj->getNfref_serie()?$obj->getNfref_serie():0).',';
		 $sql .= ($obj->getNfref_nNF()?$obj->getNfref_nNF():0).',';
		 $sql .= '\''.$obj->getNfref_dhEmi().'\',';
		 $sql .= '\''.$obj->getNfref_dhSaiEnt().'\',';
		 $sql .= ($obj->getNfref_tpNF()?$obj->getNfref_tpNF():0).',';
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
		 $sql .= '\''.$obj->getRefNfe_refNFeCh().'\',';
		 $sql .= ($obj->getRefNfe_cUF()?$obj->getRefNfe_cUF():0).',';
		 $sql .= ($obj->getRefNfe_AAMM()?$obj->getRefNfe_AAMM():0).',';
		 $sql .= ($obj->getRefNfe_CNPJ()?$obj->getRefNfe_CNPJ():0).',';
		 $sql .= ($obj->getRefNfe_mod()?$obj->getRefNfe_mod():0).',';
		 $sql .= ($obj->getRefNfe_serie()?$obj->getRefNfe_serie():0).',';
		 $sql .= '\''.$obj->getRefNfe_nNF().'\',';
		 $sql .= ($obj->getRural_cUF()?$obj->getRural_cUF():0).',';
		 $sql .= ($obj->getRural_AAMM()?$obj->getRural_AAMM():0).',';
		 $sql .= '\''.$obj->getRural_CNPJ().'\',';
		 $sql .= '\''.$obj->getRural_CPF().'\',';
		 $sql .= '\''.$obj->getRural_IE().'\',';
		 $sql .= ($obj->getRural_mod()?$obj->getRural_mod():0).',';
		 $sql .= ($obj->getRural_serie()?$obj->getRural_serie():0).',';
		 $sql .= ($obj->getRural_nNF()?$obj->getRural_nNF():0).',';
		 $sql .= ($obj->getCreref_refCTe()?$obj->getCreref_refCTe():0).',';
		 $sql .= ($obj->getCreref_nECF()?$obj->getCreref_nECF():0).',';
		 $sql .= ($obj->getCreref_nCOO()?$obj->getCreref_nCOO():0).',';
		 $sql .= ($obj->getEcferef_mod()?$obj->getEcferef_mod():0).',';
		 $sql .= '\''.$obj->getEmit_CNPJ().'\',';
		 $sql .= '\''.$obj->getEmit_xNome().'\',';
		 $sql .= '\''.$obj->getEmit_xFant().'\',';
		 $sql .= '\''.$obj->getEmit_IE().'\',';
		 $sql .= '\''.$obj->getEmit_IEST().'\',';
		 $sql .= '\''.$obj->getEmit_IM().'\',';
		 $sql .= ($obj->getEmit_CNAE()?$obj->getEmit_CNAE():0).',';
		 $sql .= ($obj->getEmit_CRT()?$obj->getEmit_CRT():0).',';
		 $sql .= '\''.$obj->getEnderEmit_xLgr().'\',';
		 $sql .= '\''.$obj->getEnderEmit_nro().'\',';
		 $sql .= '\''.$obj->getEnderEmit_xCpl().'\',';
		 $sql .= '\''.$obj->getEnderEmit_xBairro().'\',';
		 $sql .= ($obj->getEnderEmit_cMun()?$obj->getEnderEmit_cMun():0).',';
		 $sql .= '\''.$obj->getEnderEmit_xMun().'\',';
		 $sql .= '\''.$obj->getEnderEmit_UF().'\',';
		 $sql .= ($obj->getEnderEmit_CEP()?$obj->getEnderEmit_CEP():0).',';
		 $sql .= ($obj->getEnderEmit_cPais()?$obj->getEnderEmit_cPais():0).',';
		 $sql .= '\''.$obj->getEnderEmit_xPais().'\',';
		 $sql .= '\''.$obj->getEnderEmit_fone().'\',';
		 $sql .= '\''.$obj->getDest_CNPJ().'\',';
		 $sql .= '\''.$obj->getDest_CPF().'\',';
		 $sql .= '\''.$obj->getDest_idEstrangeiro().'\',';
		 $sql .= '\''.$obj->getDest_xNome().'\',';
		 $sql .= '\''.$obj->getDest_indIEDest().'\',';
		 $sql .= '\''.$obj->getDest_IE().'\',';
		 $sql .= ($obj->getDest_ISUF()?$obj->getDest_ISUF():0).',';
		 $sql .= '\''.$obj->getDest_IM().'\',';
		 $sql .= '\''.$obj->getDest_email().'\',';
		 $sql .= '\''.$obj->getEnderDest_xLgr().'\',';
		 $sql .= '\''.$obj->getEnderDest_nro().'\',';
		 $sql .= '\''.$obj->getEnderDest_xCpl().'\',';
		 $sql .= '\''.$obj->getEnderDest_xBairro().'\',';
		 $sql .= ($obj->getEnderDest_cMun()?$obj->getEnderDest_cMun():0).',';
		 $sql .= '\''.$obj->getEnderDest_xMun().'\',';
		 $sql .= '\''.$obj->getEnderDest_UF().'\',';
		 $sql .= ($obj->getEnderDest_CEP()?$obj->getEnderDest_CEP():0).',';
		 $sql .= ($obj->getEnderDest_cPais()?$obj->getEnderDest_cPais():0).',';
		 $sql .= '\''.$obj->getEnderDest_xPais().'\',';
		 $sql .= '\''.$obj->getEnderDest_fone().'\',';
		 $sql .= '\''.$obj->getRetirada_CNPJ().'\',';
		 $sql .= '\''.$obj->getRetirada_CPF().'\',';
		 $sql .= '\''.$obj->getRetirada_xLgr().'\',';
		 $sql .= '\''.$obj->getRetirada_nro().'\',';
		 $sql .= '\''.$obj->getRetirada_xCpl().'\',';
		 $sql .= '\''.$obj->getRetirada_xBairro().'\',';
		 $sql .= ($obj->getRetirada_cMun()?$obj->getRetirada_cMun():0).',';
		 $sql .= '\''.$obj->getRetirada_xMun().'\',';
		 $sql .= '\''.$obj->getRetirada_UF().'\',';
		 $sql .= '\''.$obj->getEntrega_CNPJ().'\',';
		 $sql .= '\''.$obj->getEntrega_CPF().'\',';
		 $sql .= '\''.$obj->getEntrega_xLgr().'\',';
		 $sql .= '\''.$obj->getEntrega_nro().'\',';
		 $sql .= '\''.$obj->getEntrega_xCpl().'\',';
		 $sql .= '\''.$obj->getEntrega_xBairro().'\',';
		 $sql .= ($obj->getEntrega_cMun()?$obj->getEntrega_cMun():0).',';
		 $sql .= '\''.$obj->getEntrega_xMun().'\',';
		 $sql .= '\''.$obj->getEntrega_UF().'\',';
		 $sql .= '\''.$obj->getPag_CNPJ().'\',';
		 $sql .= '\''.$obj->getPag_tBand().'\',';
		 $sql .= '\''.$obj->getPag_cAut().'\',';
		 $sql .= '\''.$obj->getPagT_pagT().'\',';
		 $sql .= '\''.$obj->getCobr_nFat().'\',';
		 $sql .= ($obj->getCobr_vOrig()?$obj->getCobr_vOrig():0).',';
		 $sql .= ($obj->getCobr_vDesc()?$obj->getCobr_vDesc():0).',';
		 $sql .= ($obj->getCobr_vLiq()?$obj->getCobr_vLiq():0).',';
		 $sql .= '\''.$obj->getDup_nDup().'\',';
		 $sql .= '\''.$obj->getDup_dVenc().'\',';
		 $sql .= ($obj->getDup_vDup()?$obj->getDup_vDup():0).',';
		 $sql .= ($obj->getModfrete_modFrete()?$obj->getModfrete_modFrete():0).',';
		 $sql .= '\''.$obj->getTransp_CNPJ().'\',';
		 $sql .= '\''.$obj->getTransp_CPF().'\',';
		 $sql .= '\''.$obj->getTransp_xNome().'\',';
		 $sql .= '\''.$obj->getTransp_IE().'\',';
		 $sql .= '\''.$obj->getTransp_xEnder().'\',';
		 $sql .= '\''.$obj->getTransp_xMun().'\',';
		 $sql .= '\''.$obj->getTransp_UF().'\',';
		 $sql .= ($obj->getRetTransp_vServ()?$obj->getRetTransp_vServ():0).',';
		 $sql .= ($obj->getRetTransp_vBCRet()?$obj->getRetTransp_vBCRet():0).',';
		 $sql .= ($obj->getRetTransp_pICMSRet()?$obj->getRetTransp_pICMSRet():0).',';
		 $sql .= ($obj->getRetTransp_vICMSRet()?$obj->getRetTransp_vICMSRet():0).',';
		 $sql .= ($obj->getRetTransp_CFOP()?$obj->getRetTransp_CFOP():0).',';
		 $sql .= ($obj->getRetTransp_cMunFG()?$obj->getRetTransp_cMunFG():0).',';
		 $sql .= '\''.$obj->getVeicTransp_placa().'\',';
		 $sql .= '\''.$obj->getVeicTransp_UF().'\',';
		 $sql .= '\''.$obj->getVeicTransp_RNTC().'\',';
		 $sql .= '\''.$obj->getReboque_placa().'\',';
		 $sql .= '\''.$obj->getReboque_siglaUF().'\',';
		 $sql .= '\''.$obj->getReboque_rntc().'\',';
		 $sql .= '\''.$obj->getReboque_vagao().'\',';
		 $sql .= '\''.$obj->getReboque_balsa().'\',';
		 $sql .= '\''.$obj->getVol_qVol().'\',';
		 $sql .= '\''.$obj->getVol_esp().'\',';
		 $sql .= '\''.$obj->getVol_marca().'\',';
		 $sql .= '\''.$obj->getVol_nVol().'\',';
		 $sql .= ($obj->getVol_pesoL()?$obj->getVol_pesoL():0).',';
		 $sql .= ($obj->getVol_pesoB()?$obj->getVol_pesoB():0).',';
		 $sql .= '\''.$obj->getVol_aLacres().'\',';
		 $sql .= ($obj->getExporta_UFSaidaPais()?$obj->getExporta_UFSaidaPais():0).',';
		 $sql .= '\''.$obj->getExporta_xLocExporta().'\',';
		 $sql .= '\''.$obj->getExporta_xLocDespacho().'\',';
		 $sql .= '\''.$obj->getCompra_xNEmp().'\',';
		 $sql .= '\''.$obj->getCompra_xPed().'\',';
		 $sql .= '\''.$obj->getCompra_xCont().'\',';
		 $sql .= ($obj->getDetExport_nItem()?$obj->getDetExport_nItem():0).',';
		 $sql .= '\''.$obj->getDetExport_nDraw().'\',';
		 $sql .= '\''.$obj->getDetExport_exportInd().'\',';
		 $sql .= '\''.$obj->getDetExport_nRE().'\',';
		 $sql .= '\''.$obj->getDetExport_chNFe().'\',';
		 $sql .= ($obj->getDetExport_qExport()?$obj->getDetExport_qExport():0).',';
		 $sql .= '\''.$obj->getObsFisco_xCampo().'\',';
		 $sql .= '\''.$obj->getObsFisco_xTexto().'\',';
		 $sql .= '\''.$obj->getAuxXML_AutXML().'\',';
		 $sql .= ($obj->getTotal_vBC()?$obj->getTotal_vBC():0).',';
		 $sql .= ($obj->getTotal_vICMS()?$obj->getTotal_vICMS():0).',';
		 $sql .= ($obj->getTotal_vICMSDeson()?$obj->getTotal_vICMSDeson():0).',';
		 $sql .= ($obj->getTotal_vBCST()?$obj->getTotal_vBCST():0).',';
		 $sql .= ($obj->getTotal_vST()?$obj->getTotal_vST():0).',';
		 $sql .= ($obj->getTotal_vProd()?$obj->getTotal_vProd():0).',';
		 $sql .= ($obj->getTotal_vDesc()?$obj->getTotal_vDesc():0).',';
		 $sql .= ($obj->getTotal_vIPI()?$obj->getTotal_vIPI():0).',';
		 $sql .= ($obj->getTotal_vPIS()?$obj->getTotal_vPIS():0).',';
		 $sql .= ($obj->getTotal_vCOFINS()?$obj->getTotal_vCOFINS():0).',';
		 $sql .= ($obj->getTotal_vFrete()?$obj->getTotal_vFrete():0).',';
		 $sql .= ($obj->getTotal_vSeg()?$obj->getTotal_vSeg():0).',';
		 $sql .= ($obj->getTotal_vII()?$obj->getTotal_vII():0).',';
		 $sql .= ($obj->getTotal_vOutro()?$obj->getTotal_vOutro():0).',';
		 $sql .= ($obj->getTotal_vtotal()?$obj->getTotal_vtotal():0).',';
		 $sql .= ($obj->getReltrib_vRetPIS()?$obj->getReltrib_vRetPIS():0).',';
		 $sql .= ($obj->getReltrib_vRetCOFINS()?$obj->getReltrib_vRetCOFINS():0).',';
		 $sql .= ($obj->getReltrib_vRetCSLL()?$obj->getReltrib_vRetCSLL():0).',';
		 $sql .= ($obj->getReltrib_vBCIRRF()?$obj->getReltrib_vBCIRRF():0).',';
		 $sql .= ($obj->getReltrib_vIRRF()?$obj->getReltrib_vIRRF():0).',';
		 $sql .= ($obj->getReltrib_vBCRetPrev()?$obj->getReltrib_vBCRetPrev():0).',';
		 $sql .= ($obj->getReltrib_vRetPrev()?$obj->getReltrib_vRetPrev():0).',';
		 $sql .= '\''.$obj->getCana_safra().'\',';
		 $sql .= '\''.$obj->getCana_ref().'\',';
		 $sql .= ($obj->getFordia_dia()?$obj->getFordia_dia():0).',';
		 $sql .= ($obj->getFordia_qtde()?$obj->getFordia_qtde():0).',';
		 $sql .= ($obj->getFordia_qTotMes()?$obj->getFordia_qTotMes():0).',';
		 $sql .= ($obj->getFordia_qTotAnt()?$obj->getFordia_qTotAnt():0).',';
		 $sql .= ($obj->getFordia_qTotGer()?$obj->getFordia_qTotGer():0).',';
		 $sql .= '\''.$obj->getDeduc_xDed().'\',';
		 $sql .= ($obj->getDeduc_vDed()?$obj->getDeduc_vDed():0).',';
		 $sql .= ($obj->getDeduc_vFor()?$obj->getDeduc_vFor():0).',';
		 $sql .= ($obj->getDeduc_vTotDed()?$obj->getDeduc_vTotDed():0).',';
		 $sql .= ($obj->getDeduc_vLiqFor()?$obj->getDeduc_vLiqFor():0).',';
		 $sql .= '\''.$obj->getInfAdFisco_infAdFisco().'\',';
		 $sql .= '\''.$obj->getInfAdFisco_infCpl().'\',';
		 $sql .= '\''.$obj->getObsCont_xCampo().'\',';
		 $sql .= '\''.$obj->getObsCont_xTexto().'\',';
		 $sql .= '\''.$obj->getProcRef_nProc().'\',';
		 $sql .= ($obj->getProcRef_indProc()?$obj->getProcRef_indProc():0).',';
		 $sql .= ($obj->getStatus_nfe()?$obj->getStatus_nfe():0);
		 $sql .= ')'; 
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 
	
	  function update_status($obj){
		 $sql = 'UPDATE nfe_dados SET '; 
		 $sql .= 'status_nfe = '.($obj->getStatus_nfe()?$obj->getStatus_nfe():0);
		 $sql .= ' WHERE seq_nfe = '.$obj->getSeq_nfe();
 		 $results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 
	

	  function update($obj){
		 $sql = 'UPDATE nfe_dados SET '; 
		 $sql .= 'seq_nfe = '.($obj->getSeq_nfe()?$obj->getSeq_nfe():0).',';
		 $sql .= 'data_envio = '.'\''.$obj->getData_envio().'\' ,';
		 $sql .= 'mes_ano = '.($obj->getMes_ano()?$obj->getMes_ano():0).',';
		 $sql .= 'ident_chave = '.'\''.$obj->getIdent_chave().'\' ,';
		 $sql .= 'ident_versao = '.'\''.$obj->getIdent_versao().'\' ,';
		 $sql .= 'Nfref_CNPJ = '.'\''.$obj->getNfref_CNPJ().'\' ,';
		 $sql .= 'Nfref_aNoMes = '.($obj->getNfref_aNoMes()?$obj->getNfref_aNoMes():0).',';
		 $sql .= 'Nfref_cUF = '.'\''.$obj->getNfref_cUF().'\' ,';
		 $sql .= 'Nfref_cNF = '.'\''.$obj->getNfref_cNF().'\' ,';
		 $sql .= 'Nfref_natOp = '.'\''.$obj->getNfref_natOp().'\' ,';
		 $sql .= 'Nfref_indPag = '.($obj->getNfref_indPag()?$obj->getNfref_indPag():0).',';
		 $sql .= 'Nfref_mod = '.($obj->getNfref_mod()?$obj->getNfref_mod():0).',';
		 $sql .= 'Nfref_serie = '.($obj->getNfref_serie()?$obj->getNfref_serie():0).',';
		 $sql .= 'Nfref_nNF = '.($obj->getNfref_nNF()?$obj->getNfref_nNF():0).',';
		 $sql .= 'Nfref_dhEmi = '.'\''.$obj->getNfref_dhEmi().'\' ,';
		 $sql .= 'Nfref_dhSaiEnt = '.'\''.$obj->getNfref_dhSaiEnt().'\' ,';
		 $sql .= 'Nfref_tpNF = '.($obj->getNfref_tpNF()?$obj->getNfref_tpNF():0).',';
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
		 $sql .= 'refNfe_refNFeCh = '.'\''.$obj->getRefNfe_refNFeCh().'\' ,';
		 $sql .= 'refNfe_cUF = '.($obj->getRefNfe_cUF()?$obj->getRefNfe_cUF():0).',';
		 $sql .= 'refNfe_AAMM = '.($obj->getRefNfe_AAMM()?$obj->getRefNfe_AAMM():0).',';
		 $sql .= 'refNfe_CNPJ = '.($obj->getRefNfe_CNPJ()?$obj->getRefNfe_CNPJ():0).',';
		 $sql .= 'refNfe_mod = '.($obj->getRefNfe_mod()?$obj->getRefNfe_mod():0).',';
		 $sql .= 'refNfe_serie = '.($obj->getRefNfe_serie()?$obj->getRefNfe_serie():0).',';
		 $sql .= 'refNfe_nNF = '.'\''.$obj->getRefNfe_nNF().'\' ,';
		 $sql .= 'Rural_cUF = '.($obj->getRural_cUF()?$obj->getRural_cUF():0).',';
		 $sql .= 'Rural_AAMM = '.($obj->getRural_AAMM()?$obj->getRural_AAMM():0).',';
		 $sql .= 'Rural_CNPJ = '.'\''.$obj->getRural_CNPJ().'\' ,';
		 $sql .= 'Rural_CPF = '.'\''.$obj->getRural_CPF().'\' ,';
		 $sql .= 'Rural_IE = '.'\''.$obj->getRural_IE().'\' ,';
		 $sql .= 'Rural_mod = '.($obj->getRural_mod()?$obj->getRural_mod():0).',';
		 $sql .= 'Rural_serie = '.($obj->getRural_serie()?$obj->getRural_serie():0).',';
		 $sql .= 'Rural_nNF = '.($obj->getRural_nNF()?$obj->getRural_nNF():0).',';
		 $sql .= 'Creref_refCTe = '.($obj->getCreref_refCTe()?$obj->getCreref_refCTe():0).',';
		 $sql .= 'Creref_nECF = '.($obj->getCreref_nECF()?$obj->getCreref_nECF():0).',';
		 $sql .= 'Creref_nCOO = '.($obj->getCreref_nCOO()?$obj->getCreref_nCOO():0).',';
		 $sql .= 'Ecferef_mod = '.($obj->getEcferef_mod()?$obj->getEcferef_mod():0).',';
		 $sql .= 'emit_CNPJ = '.'\''.$obj->getEmit_CNPJ().'\' ,';
		 $sql .= 'emit_xNome = '.'\''.$obj->getEmit_xNome().'\' ,';
		 $sql .= 'emit_xFant = '.'\''.$obj->getEmit_xFant().'\' ,';
		 $sql .= 'emit_IE = '.'\''.$obj->getEmit_IE().'\' ,';
		 $sql .= 'emit_IEST = '.'\''.$obj->getEmit_IEST().'\' ,';
		 $sql .= 'emit_IM = '.'\''.$obj->getEmit_IM().'\' ,';
		 $sql .= 'emit_CNAE = '.($obj->getEmit_CNAE()?$obj->getEmit_CNAE():0).',';
		 $sql .= 'emit_CRT = '.($obj->getEmit_CRT()?$obj->getEmit_CRT():0).',';
		 $sql .= 'enderEmit_xLgr = '.'\''.$obj->getEnderEmit_xLgr().'\' ,';
		 $sql .= 'enderEmit_nro = '.'\''.$obj->getEnderEmit_nro().'\' ,';
		 $sql .= 'enderEmit_xCpl = '.'\''.$obj->getEnderEmit_xCpl().'\' ,';
		 $sql .= 'enderEmit_xBairro = '.'\''.$obj->getEnderEmit_xBairro().'\' ,';
		 $sql .= 'enderEmit_cMun = '.($obj->getEnderEmit_cMun()?$obj->getEnderEmit_cMun():0).',';
		 $sql .= 'enderEmit_xMun = '.'\''.$obj->getEnderEmit_xMun().'\' ,';
		 $sql .= 'enderEmit_UF = '.'\''.$obj->getEnderEmit_UF().'\' ,';
		 $sql .= 'enderEmit_CEP = '.($obj->getEnderEmit_CEP()?$obj->getEnderEmit_CEP():0).',';
		 $sql .= 'enderEmit_cPais = '.($obj->getEnderEmit_cPais()?$obj->getEnderEmit_cPais():0).',';
		 $sql .= 'enderEmit_xPais = '.'\''.$obj->getEnderEmit_xPais().'\' ,';
		 $sql .= 'enderEmit_fone = '.'\''.$obj->getEnderEmit_fone().'\' ,';
		 $sql .= 'dest_CNPJ = '.'\''.$obj->getDest_CNPJ().'\' ,';
		 $sql .= 'dest_CPF = '.'\''.$obj->getDest_CPF().'\' ,';
		 $sql .= 'dest_idEstrangeiro = '.'\''.$obj->getDest_idEstrangeiro().'\' ,';
		 $sql .= 'dest_xNome = '.'\''.$obj->getDest_xNome().'\' ,';
		 $sql .= 'dest_indIEDest = '.'\''.$obj->getDest_indIEDest().'\' ,';
		 $sql .= 'dest_IE = '.'\''.$obj->getDest_IE().'\' ,';
		 $sql .= 'dest_ISUF = '.($obj->getDest_ISUF()?$obj->getDest_ISUF():0).',';
		 $sql .= 'dest_IM = '.'\''.$obj->getDest_IM().'\' ,';
		 $sql .= 'dest_email = '.'\''.$obj->getDest_email().'\' ,';
		 $sql .= 'enderDest_xLgr = '.'\''.$obj->getEnderDest_xLgr().'\' ,';
		 $sql .= 'enderDest_nro = '.'\''.$obj->getEnderDest_nro().'\' ,';
		 $sql .= 'enderDest_xCpl = '.'\''.$obj->getEnderDest_xCpl().'\' ,';
		 $sql .= 'enderDest_xBairro = '.'\''.$obj->getEnderDest_xBairro().'\' ,';
		 $sql .= 'enderDest_cMun = '.($obj->getEnderDest_cMun()?$obj->getEnderDest_cMun():0).',';
		 $sql .= 'enderDest_xMun = '.'\''.$obj->getEnderDest_xMun().'\' ,';
		 $sql .= 'enderDest_UF = '.'\''.$obj->getEnderDest_UF().'\' ,';
		 $sql .= 'enderDest_CEP = '.($obj->getEnderDest_CEP()?$obj->getEnderDest_CEP():0).',';
		 $sql .= 'enderDest_cPais = '.($obj->getEnderDest_cPais()?$obj->getEnderDest_cPais():0).',';
		 $sql .= 'enderDest_xPais = '.'\''.$obj->getEnderDest_xPais().'\' ,';
		 $sql .= 'enderDest_fone = '.'\''.$obj->getEnderDest_fone().'\' ,';
		 $sql .= 'retirada_CNPJ = '.'\''.$obj->getRetirada_CNPJ().'\' ,';
		 $sql .= 'retirada_CPF = '.'\''.$obj->getRetirada_CPF().'\' ,';
		 $sql .= 'retirada_xLgr = '.'\''.$obj->getRetirada_xLgr().'\' ,';
		 $sql .= 'retirada_nro = '.'\''.$obj->getRetirada_nro().'\' ,';
		 $sql .= 'retirada_xCpl = '.'\''.$obj->getRetirada_xCpl().'\' ,';
		 $sql .= 'retirada_xBairro = '.'\''.$obj->getRetirada_xBairro().'\' ,';
		 $sql .= 'retirada_cMun = '.($obj->getRetirada_cMun()?$obj->getRetirada_cMun():0).',';
		 $sql .= 'retirada_xMun = '.'\''.$obj->getRetirada_xMun().'\' ,';
		 $sql .= 'retirada_UF = '.'\''.$obj->getRetirada_UF().'\' ,';
		 $sql .= 'entrega_CNPJ = '.'\''.$obj->getEntrega_CNPJ().'\' ,';
		 $sql .= 'entrega_CPF = '.'\''.$obj->getEntrega_CPF().'\' ,';
		 $sql .= 'entrega_xLgr = '.'\''.$obj->getEntrega_xLgr().'\' ,';
		 $sql .= 'entrega_nro = '.'\''.$obj->getEntrega_nro().'\' ,';
		 $sql .= 'entrega_xCpl = '.'\''.$obj->getEntrega_xCpl().'\' ,';
		 $sql .= 'entrega_xBairro = '.'\''.$obj->getEntrega_xBairro().'\' ,';
		 $sql .= 'entrega_cMun = '.($obj->getEntrega_cMun()?$obj->getEntrega_cMun():0).',';
		 $sql .= 'entrega_xMun = '.'\''.$obj->getEntrega_xMun().'\' ,';
		 $sql .= 'entrega_UF = '.'\''.$obj->getEntrega_UF().'\' ,';
		 $sql .= 'pag_CNPJ = '.'\''.$obj->getPag_CNPJ().'\' ,';
		 $sql .= 'pag_tBand = '.'\''.$obj->getPag_tBand().'\' ,';
		 $sql .= 'pag_cAut = '.'\''.$obj->getPag_cAut().'\' ,';
		 $sql .= 'pagT_pagT = '.'\''.$obj->getPagT_pagT().'\' ,';
		 $sql .= 'cobr_nFat = '.'\''.$obj->getCobr_nFat().'\' ,';
		 $sql .= 'cobr_vOrig = '.($obj->getCobr_vOrig()?$obj->getCobr_vOrig():0).',';
		 $sql .= 'cobr_vDesc = '.($obj->getCobr_vDesc()?$obj->getCobr_vDesc():0).',';
		 $sql .= 'cobr_vLiq = '.($obj->getCobr_vLiq()?$obj->getCobr_vLiq():0).',';
		 $sql .= 'dup_nDup = '.'\''.$obj->getDup_nDup().'\' ,';
		 $sql .= 'dup_dVenc = '.'\''.$obj->getDup_dVenc().'\' ,';
		 $sql .= 'dup_vDup = '.($obj->getDup_vDup()?$obj->getDup_vDup():0).',';
		 $sql .= 'modfrete_modFrete = '.($obj->getModfrete_modFrete()?$obj->getModfrete_modFrete():0).',';
		 $sql .= 'transp_CNPJ = '.'\''.$obj->getTransp_CNPJ().'\' ,';
		 $sql .= 'transp_CPF = '.'\''.$obj->getTransp_CPF().'\' ,';
		 $sql .= 'transp_xNome = '.'\''.$obj->getTransp_xNome().'\' ,';
		 $sql .= 'transp_IE = '.'\''.$obj->getTransp_IE().'\' ,';
		 $sql .= 'transp_xEnder = '.'\''.$obj->getTransp_xEnder().'\' ,';
		 $sql .= 'transp_xMun = '.'\''.$obj->getTransp_xMun().'\' ,';
		 $sql .= 'transp_UF = '.'\''.$obj->getTransp_UF().'\' ,';
		 $sql .= 'retTransp_vServ = '.($obj->getRetTransp_vServ()?$obj->getRetTransp_vServ():0).',';
		 $sql .= 'retTransp_vBCRet = '.($obj->getRetTransp_vBCRet()?$obj->getRetTransp_vBCRet():0).',';
		 $sql .= 'retTransp_pICMSRet = '.($obj->getRetTransp_pICMSRet()?$obj->getRetTransp_pICMSRet():0).',';
		 $sql .= 'retTransp_vICMSRet = '.($obj->getRetTransp_vICMSRet()?$obj->getRetTransp_vICMSRet():0).',';
		 $sql .= 'retTransp_CFOP = '.($obj->getRetTransp_CFOP()?$obj->getRetTransp_CFOP():0).',';
		 $sql .= 'retTransp_cMunFG = '.($obj->getRetTransp_cMunFG()?$obj->getRetTransp_cMunFG():0).',';
		 $sql .= 'veicTransp_placa = '.'\''.$obj->getVeicTransp_placa().'\' ,';
		 $sql .= 'veicTransp_UF = '.'\''.$obj->getVeicTransp_UF().'\' ,';
		 $sql .= 'veicTransp_RNTC = '.'\''.$obj->getVeicTransp_RNTC().'\' ,';
		 $sql .= 'reboque_placa = '.'\''.$obj->getReboque_placa().'\' ,';
		 $sql .= 'reboque_siglaUF = '.'\''.$obj->getReboque_siglaUF().'\' ,';
		 $sql .= 'reboque_rntc = '.'\''.$obj->getReboque_rntc().'\' ,';
		 $sql .= 'reboque_vagao = '.'\''.$obj->getReboque_vagao().'\' ,';
		 $sql .= 'reboque_balsa = '.'\''.$obj->getReboque_balsa().'\' ,';
		 $sql .= 'Vol_qVol = '.'\''.$obj->getVol_qVol().'\' ,';
		 $sql .= 'Vol_esp = '.'\''.$obj->getVol_esp().'\' ,';
		 $sql .= 'Vol_marca = '.'\''.$obj->getVol_marca().'\' ,';
		 $sql .= 'Vol_nVol = '.'\''.$obj->getVol_nVol().'\' ,';
		 $sql .= 'Vol_pesoL = '.($obj->getVol_pesoL()?$obj->getVol_pesoL():0).',';
		 $sql .= 'Vol_pesoB = '.($obj->getVol_pesoB()?$obj->getVol_pesoB():0).',';
		 $sql .= 'Vol_aLacres = '.'\''.$obj->getVol_aLacres().'\' ,';
		 $sql .= 'exporta_UFSaidaPais = '.($obj->getExporta_UFSaidaPais()?$obj->getExporta_UFSaidaPais():0).',';
		 $sql .= 'exporta_xLocExporta = '.'\''.$obj->getExporta_xLocExporta().'\' ,';
		 $sql .= 'exporta_xLocDespacho = '.'\''.$obj->getExporta_xLocDespacho().'\' ,';
		 $sql .= 'compra_xNEmp = '.'\''.$obj->getCompra_xNEmp().'\' ,';
		 $sql .= 'compra_xPed = '.'\''.$obj->getCompra_xPed().'\' ,';
		 $sql .= 'compra_xCont = '.'\''.$obj->getCompra_xCont().'\' ,';
		 $sql .= 'DetExport_nItem = '.($obj->getDetExport_nItem()?$obj->getDetExport_nItem():0).',';
		 $sql .= 'DetExport_nDraw = '.'\''.$obj->getDetExport_nDraw().'\' ,';
		 $sql .= 'DetExport_exportInd = '.'\''.$obj->getDetExport_exportInd().'\' ,';
		 $sql .= 'DetExport_nRE = '.'\''.$obj->getDetExport_nRE().'\' ,';
		 $sql .= 'DetExport_chNFe = '.'\''.$obj->getDetExport_chNFe().'\' ,';
		 $sql .= 'DetExport_qExport = '.($obj->getDetExport_qExport()?$obj->getDetExport_qExport():0).',';
		 $sql .= 'ObsFisco_xCampo = '.'\''.$obj->getObsFisco_xCampo().'\' ,';
		 $sql .= 'ObsFisco_xTexto = '.'\''.$obj->getObsFisco_xTexto().'\' ,';
		 $sql .= 'AuxXML_AutXML = '.'\''.$obj->getAuxXML_AutXML().'\' ,';
		 $sql .= 'total_vBC = '.($obj->getTotal_vBC()?$obj->getTotal_vBC():0).',';
		 $sql .= 'total_vICMS = '.($obj->getTotal_vICMS()?$obj->getTotal_vICMS():0).',';
		 $sql .= 'total_vICMSDeson = '.($obj->getTotal_vICMSDeson()?$obj->getTotal_vICMSDeson():0).',';
		 $sql .= 'total_vBCST = '.($obj->getTotal_vBCST()?$obj->getTotal_vBCST():0).',';
		 $sql .= 'total_vST = '.($obj->getTotal_vST()?$obj->getTotal_vST():0).',';
		 $sql .= 'total_vProd = '.($obj->getTotal_vProd()?$obj->getTotal_vProd():0).',';
		 $sql .= 'total_vDesc = '.($obj->getTotal_vDesc()?$obj->getTotal_vDesc():0).',';
		 $sql .= 'total_vIPI = '.($obj->getTotal_vIPI()?$obj->getTotal_vIPI():0).',';
		 $sql .= 'total_vPIS = '.($obj->getTotal_vPIS()?$obj->getTotal_vPIS():0).',';
		 $sql .= 'total_vCOFINS = '.($obj->getTotal_vCOFINS()?$obj->getTotal_vCOFINS():0).',';
		 $sql .= 'total_vFrete = '.($obj->getTotal_vFrete()?$obj->getTotal_vFrete():0).',';
		 $sql .= 'total_vSeg = '.($obj->getTotal_vSeg()?$obj->getTotal_vSeg():0).',';
		 $sql .= 'total_vII = '.($obj->getTotal_vII()?$obj->getTotal_vII():0).',';
		 $sql .= 'total_vOutro = '.($obj->getTotal_vOutro()?$obj->getTotal_vOutro():0).',';
		 $sql .= 'total_vtotal = '.($obj->getTotal_vtotal()?$obj->getTotal_vtotal():0).',';
		 $sql .= 'reltrib_vRetPIS = '.($obj->getReltrib_vRetPIS()?$obj->getReltrib_vRetPIS():0).',';
		 $sql .= 'reltrib_vRetCOFINS = '.($obj->getReltrib_vRetCOFINS()?$obj->getReltrib_vRetCOFINS():0).',';
		 $sql .= 'reltrib_vRetCSLL = '.($obj->getReltrib_vRetCSLL()?$obj->getReltrib_vRetCSLL():0).',';
		 $sql .= 'reltrib_vBCIRRF = '.($obj->getReltrib_vBCIRRF()?$obj->getReltrib_vBCIRRF():0).',';
		 $sql .= 'reltrib_vIRRF = '.($obj->getReltrib_vIRRF()?$obj->getReltrib_vIRRF():0).',';
		 $sql .= 'reltrib_vBCRetPrev = '.($obj->getReltrib_vBCRetPrev()?$obj->getReltrib_vBCRetPrev():0).',';
		 $sql .= 'reltrib_vRetPrev = '.($obj->getReltrib_vRetPrev()?$obj->getReltrib_vRetPrev():0).',';
		 $sql .= 'cana_safra = '.'\''.$obj->getCana_safra().'\' ,';
		 $sql .= 'cana_ref = '.'\''.$obj->getCana_ref().'\' ,';
		 $sql .= 'fordia_dia = '.($obj->getFordia_dia()?$obj->getFordia_dia():0).',';
		 $sql .= 'fordia_qtde = '.($obj->getFordia_qtde()?$obj->getFordia_qtde():0).',';
		 $sql .= 'fordia_qTotMes = '.($obj->getFordia_qTotMes()?$obj->getFordia_qTotMes():0).',';
		 $sql .= 'fordia_qTotAnt = '.($obj->getFordia_qTotAnt()?$obj->getFordia_qTotAnt():0).',';
		 $sql .= 'fordia_qTotGer = '.($obj->getFordia_qTotGer()?$obj->getFordia_qTotGer():0).',';
		 $sql .= 'deduc_xDed = '.'\''.$obj->getDeduc_xDed().'\' ,';
		 $sql .= 'deduc_vDed = '.($obj->getDeduc_vDed()?$obj->getDeduc_vDed():0).',';
		 $sql .= 'deduc_vFor = '.($obj->getDeduc_vFor()?$obj->getDeduc_vFor():0).',';
		 $sql .= 'deduc_vTotDed = '.($obj->getDeduc_vTotDed()?$obj->getDeduc_vTotDed():0).',';
		 $sql .= 'deduc_vLiqFor = '.($obj->getDeduc_vLiqFor()?$obj->getDeduc_vLiqFor():0).',';
		 $sql .= 'infAdFisco_infAdFisco = '.'\''.$obj->getInfAdFisco_infAdFisco().'\' ,';
		 $sql .= 'infAdFisco_infCpl = '.'\''.$obj->getInfAdFisco_infCpl().'\' ,';
		 $sql .= 'ObsCont_xCampo = '.'\''.$obj->getObsCont_xCampo().'\' ,';
		 $sql .= 'ObsCont_xTexto = '.'\''.$obj->getObsCont_xTexto().'\' ,';
		 $sql .= 'procRef_nProc = '.'\''.$obj->getProcRef_nProc().'\' ,';
		 $sql .= 'procRef_indProc = '.($obj->getProcRef_indProc()?$obj->getProcRef_indProc():0).',';
		 $sql .= 'status_nfe = '.($obj->getStatus_nfe()?$obj->getStatus_nfe():0);
		 $sql .= ' WHERE seq_nfe = '.$obj->getSeq_nfe();
		$results = mysql_query($sql);
		 if (!$results) {
			 return false;
		 } else {
			 return true;
		 }
	} 

	  function delete($obj){ 
		 $sql = 'DELETE FROM nfe_dados WHERE seq_nfe = '.$obj->getSeq_nfe();
		$results = mysql_query($sql);
		if (!$results) {
			return false;
		} else {
			return true;
		}
	} 

	  function select($obj){ 
		 $sql = 'SELECT * FROM nfe_dados WHERE 1=1 '; 
		if ($obj->getSeq_nfe()) { 
			$sql .= " AND seq_nfe = '".$obj->getSeq_nfe()."'";
		} 
		if ($obj->getData_envio()) { 
			$sql .= " AND data_envio = '".$obj->getData_envio()."'";
		} 
		if ($obj->getMes_ano()) { 
			$sql .= " AND mes_ano = '".$obj->getMes_ano()."'";
		} 
		if ($obj->getIdent_chave()) { 
			$sql .= " AND ident_chave = '".$obj->getIdent_chave()."'";
		} 
		if ($obj->getIdent_versao()) { 
			$sql .= " AND upper(ident_versao)  like ('%".strtoupper($obj->getIdent_versao())."%')";
		} 
		if ($obj->getNfref_CNPJ()) { 
			$sql .= " AND Nfref_CNPJ = '".$obj->getNfref_CNPJ()."'";
		} 
		if ($obj->getNfref_aNoMes()) { 
			$sql .= " AND Nfref_aNoMes = '".$obj->getNfref_aNoMes()."'";
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
			$sql .= " AND Nfref_serie = '".$obj->getNfref_serie()."'";
		} 
		if ($obj->getNfref_nNF()) { 
			$sql .= " AND Nfref_nNF = '".$obj->getNfref_nNF()."'";
		} 
		if ($obj->getNfref_dhEmi()) { 
			$sql .= " AND upper(Nfref_dhEmi)  like ('%".strtoupper($obj->getNfref_dhEmi())."%')";
		} 
		if ($obj->getNfref_dhSaiEnt()) { 
			$sql .= " AND upper(Nfref_dhSaiEnt)  like ('%".strtoupper($obj->getNfref_dhSaiEnt())."%')";
		} 
		if ($obj->getNfref_tpNF()) { 
			$sql .= " AND Nfref_tpNF = '".$obj->getNfref_tpNF()."'";
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
		if ($obj->getRefNfe_refNFeCh()) { 
			$sql .= " AND refNfe_refNFeCh = '".$obj->getRefNfe_refNFeCh()."'";
		} 
		if ($obj->getRefNfe_cUF()) { 
			$sql .= " AND refNfe_cUF = '".$obj->getRefNfe_cUF()."'";
		} 
		if ($obj->getRefNfe_AAMM()) { 
			$sql .= " AND refNfe_AAMM = '".$obj->getRefNfe_AAMM()."'";
		} 
		if ($obj->getRefNfe_CNPJ()) { 
			$sql .= " AND refNfe_CNPJ = '".$obj->getRefNfe_CNPJ()."'";
		} 
		if ($obj->getRefNfe_mod()) { 
			$sql .= " AND refNfe_mod = '".$obj->getRefNfe_mod()."'";
		} 
		if ($obj->getRefNfe_serie()) { 
			$sql .= " AND refNfe_serie = '".$obj->getRefNfe_serie()."'";
		} 
		if ($obj->getRefNfe_nNF()) { 
			$sql .= " AND refNfe_nNF = '".$obj->getRefNfe_nNF()."'";
		} 
		if ($obj->getRural_cUF()) { 
			$sql .= " AND Rural_cUF = '".$obj->getRural_cUF()."'";
		} 
		if ($obj->getRural_AAMM()) { 
			$sql .= " AND Rural_AAMM = '".$obj->getRural_AAMM()."'";
		} 
		if ($obj->getRural_CNPJ()) { 
			$sql .= " AND Rural_CNPJ = '".$obj->getRural_CNPJ()."'";
		} 
		if ($obj->getRural_CPF()) { 
			$sql .= " AND Rural_CPF = '".$obj->getRural_CPF()."'";
		} 
		if ($obj->getRural_IE()) { 
			$sql .= " AND upper(Rural_IE)  like ('%".strtoupper($obj->getRural_IE())."%')";
		} 
		if ($obj->getRural_mod()) { 
			$sql .= " AND Rural_mod = '".$obj->getRural_mod()."'";
		} 
		if ($obj->getRural_serie()) { 
			$sql .= " AND Rural_serie = '".$obj->getRural_serie()."'";
		} 
		if ($obj->getRural_nNF()) { 
			$sql .= " AND Rural_nNF = '".$obj->getRural_nNF()."'";
		} 
		if ($obj->getCreref_refCTe()) { 
			$sql .= " AND Creref_refCTe = '".$obj->getCreref_refCTe()."'";
		} 
		if ($obj->getCreref_nECF()) { 
			$sql .= " AND Creref_nECF = '".$obj->getCreref_nECF()."'";
		} 
		if ($obj->getCreref_nCOO()) { 
			$sql .= " AND Creref_nCOO = '".$obj->getCreref_nCOO()."'";
		} 
		if ($obj->getEcferef_mod()) { 
			$sql .= " AND Ecferef_mod = '".$obj->getEcferef_mod()."'";
		} 
		if ($obj->getEmit_CNPJ()) { 
			$sql .= " AND emit_CNPJ = '".$obj->getEmit_CNPJ()."'";
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
			$sql .= " AND emit_CNAE = '".$obj->getEmit_CNAE()."'";
		} 
		if ($obj->getEmit_CRT()) { 
			$sql .= " AND emit_CRT = '".$obj->getEmit_CRT()."'";
		} 
		if ($obj->getEnderEmit_xLgr()) { 
			$sql .= " AND upper(enderEmit_xLgr)  like ('%".strtoupper($obj->getEnderEmit_xLgr())."%')";
		} 
		if ($obj->getEnderEmit_nro()) { 
			$sql .= " AND upper(enderEmit_nro)  like ('%".strtoupper($obj->getEnderEmit_nro())."%')";
		} 
		if ($obj->getEnderEmit_xCpl()) { 
			$sql .= " AND upper(enderEmit_xCpl)  like ('%".strtoupper($obj->getEnderEmit_xCpl())."%')";
		} 
		if ($obj->getEnderEmit_xBairro()) { 
			$sql .= " AND upper(enderEmit_xBairro)  like ('%".strtoupper($obj->getEnderEmit_xBairro())."%')";
		} 
		if ($obj->getEnderEmit_cMun()) { 
			$sql .= " AND enderEmit_cMun = '".$obj->getEnderEmit_cMun()."'";
		} 
		if ($obj->getEnderEmit_xMun()) { 
			$sql .= " AND upper(enderEmit_xMun)  like ('%".strtoupper($obj->getEnderEmit_xMun())."%')";
		} 
		if ($obj->getEnderEmit_UF()) { 
			$sql .= " AND upper(enderEmit_UF)  like ('%".strtoupper($obj->getEnderEmit_UF())."%')";
		} 
		if ($obj->getEnderEmit_CEP()) { 
			$sql .= " AND enderEmit_CEP = '".$obj->getEnderEmit_CEP()."'";
		} 
		if ($obj->getEnderEmit_cPais()) { 
			$sql .= " AND enderEmit_cPais = '".$obj->getEnderEmit_cPais()."'";
		} 
		if ($obj->getEnderEmit_xPais()) { 
			$sql .= " AND upper(enderEmit_xPais)  like ('%".strtoupper($obj->getEnderEmit_xPais())."%')";
		} 
		if ($obj->getEnderEmit_fone()) { 
			$sql .= " AND upper(enderEmit_fone)  like ('%".strtoupper($obj->getEnderEmit_fone())."%')";
		} 
		if ($obj->getDest_CNPJ()) { 
			$sql .= " AND dest_CNPJ = '".$obj->getDest_CNPJ()."'";
		} 
		if ($obj->getDest_CPF()) { 
			$sql .= " AND dest_CPF = '".$obj->getDest_CPF()."'";
		} 
		if ($obj->getDest_idEstrangeiro()) { 
			$sql .= " AND upper(dest_idEstrangeiro)  like ('%".strtoupper($obj->getDest_idEstrangeiro())."%')";
		} 
		if ($obj->getDest_xNome()) { 
			$sql .= " AND upper(dest_xNome)  like ('%".strtoupper($obj->getDest_xNome())."%')";
		} 
		if ($obj->getDest_indIEDest()) { 
			$sql .= " AND upper(dest_indIEDest)  like ('%".strtoupper($obj->getDest_indIEDest())."%')";
		} 
		if ($obj->getDest_IE()) { 
			$sql .= " AND upper(dest_IE)  like ('%".strtoupper($obj->getDest_IE())."%')";
		} 
		if ($obj->getDest_ISUF()) { 
			$sql .= " AND dest_ISUF = '".$obj->getDest_ISUF()."'";
		} 
		if ($obj->getDest_IM()) { 
			$sql .= " AND upper(dest_IM)  like ('%".strtoupper($obj->getDest_IM())."%')";
		} 
		if ($obj->getDest_email()) { 
			$sql .= " AND upper(dest_email)  like ('%".strtoupper($obj->getDest_email())."%')";
		} 
		if ($obj->getEnderDest_xLgr()) { 
			$sql .= " AND upper(enderDest_xLgr)  like ('%".strtoupper($obj->getEnderDest_xLgr())."%')";
		} 
		if ($obj->getEnderDest_nro()) { 
			$sql .= " AND upper(enderDest_nro)  like ('%".strtoupper($obj->getEnderDest_nro())."%')";
		} 
		if ($obj->getEnderDest_xCpl()) { 
			$sql .= " AND upper(enderDest_xCpl)  like ('%".strtoupper($obj->getEnderDest_xCpl())."%')";
		} 
		if ($obj->getEnderDest_xBairro()) { 
			$sql .= " AND upper(enderDest_xBairro)  like ('%".strtoupper($obj->getEnderDest_xBairro())."%')";
		} 
		if ($obj->getEnderDest_cMun()) { 
			$sql .= " AND enderDest_cMun = '".$obj->getEnderDest_cMun()."'";
		} 
		if ($obj->getEnderDest_xMun()) { 
			$sql .= " AND upper(enderDest_xMun)  like ('%".strtoupper($obj->getEnderDest_xMun())."%')";
		} 
		if ($obj->getEnderDest_UF()) { 
			$sql .= " AND upper(enderDest_UF)  like ('%".strtoupper($obj->getEnderDest_UF())."%')";
		} 
		if ($obj->getEnderDest_CEP()) { 
			$sql .= " AND enderDest_CEP = '".$obj->getEnderDest_CEP()."'";
		} 
		if ($obj->getEnderDest_cPais()) { 
			$sql .= " AND enderDest_cPais = '".$obj->getEnderDest_cPais()."'";
		} 
		if ($obj->getEnderDest_xPais()) { 
			$sql .= " AND upper(enderDest_xPais)  like ('%".strtoupper($obj->getEnderDest_xPais())."%')";
		} 
		if ($obj->getEnderDest_fone()) { 
			$sql .= " AND upper(enderDest_fone)  like ('%".strtoupper($obj->getEnderDest_fone())."%')";
		} 
		if ($obj->getRetirada_CNPJ()) { 
			$sql .= " AND retirada_CNPJ = '".$obj->getRetirada_CNPJ()."'";
		} 
		if ($obj->getRetirada_CPF()) { 
			$sql .= " AND retirada_CPF = '".$obj->getRetirada_CPF()."'";
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
			$sql .= " AND retirada_cMun = '".$obj->getRetirada_cMun()."'";
		} 
		if ($obj->getRetirada_xMun()) { 
			$sql .= " AND upper(retirada_xMun)  like ('%".strtoupper($obj->getRetirada_xMun())."%')";
		} 
		if ($obj->getRetirada_UF()) { 
			$sql .= " AND upper(retirada_UF)  like ('%".strtoupper($obj->getRetirada_UF())."%')";
		} 
		if ($obj->getEntrega_CNPJ()) { 
			$sql .= " AND entrega_CNPJ = '".$obj->getEntrega_CNPJ()."'";
		} 
		if ($obj->getEntrega_CPF()) { 
			$sql .= " AND entrega_CPF = '".$obj->getEntrega_CPF()."'";
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
			$sql .= " AND entrega_cMun = '".$obj->getEntrega_cMun()."'";
		} 
		if ($obj->getEntrega_xMun()) { 
			$sql .= " AND upper(entrega_xMun)  like ('%".strtoupper($obj->getEntrega_xMun())."%')";
		} 
		if ($obj->getEntrega_UF()) { 
			$sql .= " AND upper(entrega_UF)  like ('%".strtoupper($obj->getEntrega_UF())."%')";
		} 
		if ($obj->getPag_CNPJ()) { 
			$sql .= " AND pag_CNPJ = '".$obj->getPag_CNPJ()."'";
		} 
		if ($obj->getPag_tBand()) { 
			$sql .= " AND pag_tBand = '".$obj->getPag_tBand()."'";
		} 
		if ($obj->getPag_cAut()) { 
			$sql .= " AND upper(pag_cAut)  like ('%".strtoupper($obj->getPag_cAut())."%')";
		} 
		if ($obj->getPagT_pagT()) { 
			$sql .= " AND upper(pagT_pagT)  like ('%".strtoupper($obj->getPagT_pagT())."%')";
		} 
		if ($obj->getCobr_nFat()) { 
			$sql .= " AND upper(cobr_nFat)  like ('%".strtoupper($obj->getCobr_nFat())."%')";
		} 
		if ($obj->getCobr_vOrig()) { 
			$sql .= " AND cobr_vOrig = '".$obj->getCobr_vOrig()."'";
		} 
		if ($obj->getCobr_vDesc()) { 
			$sql .= " AND cobr_vDesc = '".$obj->getCobr_vDesc()."'";
		} 
		if ($obj->getCobr_vLiq()) { 
			$sql .= " AND cobr_vLiq = '".$obj->getCobr_vLiq()."'";
		} 
		if ($obj->getDup_nDup()) { 
			$sql .= " AND upper(dup_nDup)  like ('%".strtoupper($obj->getDup_nDup())."%')";
		} 
		if ($obj->getDup_dVenc()) { 
			$sql .= " AND dup_dVenc = '".$obj->getDup_dVenc()."'";
		} 
		if ($obj->getDup_vDup()) { 
			$sql .= " AND dup_vDup = '".$obj->getDup_vDup()."'";
		} 
		if ($obj->getModfrete_modFrete()) { 
			$sql .= " AND modfrete_modFrete = '".$obj->getModfrete_modFrete()."'";
		} 
		if ($obj->getTransp_CNPJ()) { 
			$sql .= " AND transp_CNPJ = '".$obj->getTransp_CNPJ()."'";
		} 
		if ($obj->getTransp_CPF()) { 
			$sql .= " AND transp_CPF = '".$obj->getTransp_CPF()."'";
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
		if ($obj->getRetTransp_vServ()) { 
			$sql .= " AND retTransp_vServ = '".$obj->getRetTransp_vServ()."'";
		} 
		if ($obj->getRetTransp_vBCRet()) { 
			$sql .= " AND retTransp_vBCRet = '".$obj->getRetTransp_vBCRet()."'";
		} 
		if ($obj->getRetTransp_pICMSRet()) { 
			$sql .= " AND retTransp_pICMSRet = '".$obj->getRetTransp_pICMSRet()."'";
		} 
		if ($obj->getRetTransp_vICMSRet()) { 
			$sql .= " AND retTransp_vICMSRet = '".$obj->getRetTransp_vICMSRet()."'";
		} 
		if ($obj->getRetTransp_CFOP()) { 
			$sql .= " AND retTransp_CFOP = '".$obj->getRetTransp_CFOP()."'";
		} 
		if ($obj->getRetTransp_cMunFG()) { 
			$sql .= " AND retTransp_cMunFG = '".$obj->getRetTransp_cMunFG()."'";
		} 
		if ($obj->getVeicTransp_placa()) { 
			$sql .= " AND upper(veicTransp_placa)  like ('%".strtoupper($obj->getVeicTransp_placa())."%')";
		} 
		if ($obj->getVeicTransp_UF()) { 
			$sql .= " AND upper(veicTransp_UF)  like ('%".strtoupper($obj->getVeicTransp_UF())."%')";
		} 
		if ($obj->getVeicTransp_RNTC()) { 
			$sql .= " AND upper(veicTransp_RNTC)  like ('%".strtoupper($obj->getVeicTransp_RNTC())."%')";
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
		if ($obj->getVol_qVol()) { 
			$sql .= " AND Vol_qVol = '".$obj->getVol_qVol()."'";
		} 
		if ($obj->getVol_esp()) { 
			$sql .= " AND upper(Vol_esp)  like ('%".strtoupper($obj->getVol_esp())."%')";
		} 
		if ($obj->getVol_marca()) { 
			$sql .= " AND upper(Vol_marca)  like ('%".strtoupper($obj->getVol_marca())."%')";
		} 
		if ($obj->getVol_nVol()) { 
			$sql .= " AND upper(Vol_nVol)  like ('%".strtoupper($obj->getVol_nVol())."%')";
		} 
		if ($obj->getVol_pesoL()) { 
			$sql .= " AND Vol_pesoL = '".$obj->getVol_pesoL()."'";
		} 
		if ($obj->getVol_pesoB()) { 
			$sql .= " AND Vol_pesoB = '".$obj->getVol_pesoB()."'";
		} 
		if ($obj->getVol_aLacres()) { 
			$sql .= " AND upper(Vol_aLacres)  like ('%".strtoupper($obj->getVol_aLacres())."%')";
		} 
		if ($obj->getExporta_UFSaidaPais()) { 
			$sql .= " AND exporta_UFSaidaPais = '".$obj->getExporta_UFSaidaPais()."'";
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
		if ($obj->getDetExport_nItem()) { 
			$sql .= " AND DetExport_nItem = '".$obj->getDetExport_nItem()."'";
		} 
		if ($obj->getDetExport_nDraw()) { 
			$sql .= " AND DetExport_nDraw = '".$obj->getDetExport_nDraw()."'";
		} 
		if ($obj->getDetExport_exportInd()) { 
			$sql .= " AND upper(DetExport_exportInd)  like ('%".strtoupper($obj->getDetExport_exportInd())."%')";
		} 
		if ($obj->getDetExport_nRE()) { 
			$sql .= " AND DetExport_nRE = '".$obj->getDetExport_nRE()."'";
		} 
		if ($obj->getDetExport_chNFe()) { 
			$sql .= " AND DetExport_chNFe = '".$obj->getDetExport_chNFe()."'";
		} 
		if ($obj->getDetExport_qExport()) { 
			$sql .= " AND DetExport_qExport = '".$obj->getDetExport_qExport()."'";
		} 
		if ($obj->getObsFisco_xCampo()) { 
			$sql .= " AND upper(ObsFisco_xCampo)  like ('%".strtoupper($obj->getObsFisco_xCampo())."%')";
		} 
		if ($obj->getObsFisco_xTexto()) { 
			$sql .= " AND upper(ObsFisco_xTexto)  like ('%".strtoupper($obj->getObsFisco_xTexto())."%')";
		} 
		if ($obj->getAuxXML_AutXML()) { 
			$sql .= " AND upper(AuxXML_AutXML)  like ('%".strtoupper($obj->getAuxXML_AutXML())."%')";
		} 
		if ($obj->getTotal_vBC()) { 
			$sql .= " AND total_vBC = '".$obj->getTotal_vBC()."'";
		} 
		if ($obj->getTotal_vICMS()) { 
			$sql .= " AND total_vICMS = '".$obj->getTotal_vICMS()."'";
		} 
		if ($obj->getTotal_vICMSDeson()) { 
			$sql .= " AND total_vICMSDeson = '".$obj->getTotal_vICMSDeson()."'";
		} 
		if ($obj->getTotal_vBCST()) { 
			$sql .= " AND total_vBCST = '".$obj->getTotal_vBCST()."'";
		} 
		if ($obj->getTotal_vST()) { 
			$sql .= " AND total_vST = '".$obj->getTotal_vST()."'";
		} 
		if ($obj->getTotal_vProd()) { 
			$sql .= " AND total_vProd = '".$obj->getTotal_vProd()."'";
		} 
		if ($obj->getTotal_vDesc()) { 
			$sql .= " AND total_vDesc = '".$obj->getTotal_vDesc()."'";
		} 
		if ($obj->getTotal_vIPI()) { 
			$sql .= " AND total_vIPI = '".$obj->getTotal_vIPI()."'";
		} 
		if ($obj->getTotal_vPIS()) { 
			$sql .= " AND total_vPIS = '".$obj->getTotal_vPIS()."'";
		} 
		if ($obj->getTotal_vCOFINS()) { 
			$sql .= " AND total_vCOFINS = '".$obj->getTotal_vCOFINS()."'";
		} 
		if ($obj->getTotal_vFrete()) { 
			$sql .= " AND total_vFrete = '".$obj->getTotal_vFrete()."'";
		} 
		if ($obj->getTotal_vSeg()) { 
			$sql .= " AND total_vSeg = '".$obj->getTotal_vSeg()."'";
		} 
		if ($obj->getTotal_vII()) { 
			$sql .= " AND total_vII = '".$obj->getTotal_vII()."'";
		} 
		if ($obj->getTotal_vOutro()) { 
			$sql .= " AND total_vOutro = '".$obj->getTotal_vOutro()."'";
		} 
		if ($obj->getTotal_vtotal()) { 
			$sql .= " AND total_vtotal = '".$obj->getTotal_vtotal()."'";
		} 
		if ($obj->getReltrib_vRetPIS()) { 
			$sql .= " AND reltrib_vRetPIS = '".$obj->getReltrib_vRetPIS()."'";
		} 
		if ($obj->getReltrib_vRetCOFINS()) { 
			$sql .= " AND reltrib_vRetCOFINS = '".$obj->getReltrib_vRetCOFINS()."'";
		} 
		if ($obj->getReltrib_vRetCSLL()) { 
			$sql .= " AND reltrib_vRetCSLL = '".$obj->getReltrib_vRetCSLL()."'";
		} 
		if ($obj->getReltrib_vBCIRRF()) { 
			$sql .= " AND reltrib_vBCIRRF = '".$obj->getReltrib_vBCIRRF()."'";
		} 
		if ($obj->getReltrib_vIRRF()) { 
			$sql .= " AND reltrib_vIRRF = '".$obj->getReltrib_vIRRF()."'";
		} 
		if ($obj->getReltrib_vBCRetPrev()) { 
			$sql .= " AND reltrib_vBCRetPrev = '".$obj->getReltrib_vBCRetPrev()."'";
		} 
		if ($obj->getReltrib_vRetPrev()) { 
			$sql .= " AND reltrib_vRetPrev = '".$obj->getReltrib_vRetPrev()."'";
		} 
		if ($obj->getCana_safra()) { 
			$sql .= " AND upper(cana_safra)  like ('%".strtoupper($obj->getCana_safra())."%')";
		} 
		if ($obj->getCana_ref()) { 
			$sql .= " AND upper(cana_ref)  like ('%".strtoupper($obj->getCana_ref())."%')";
		} 
		if ($obj->getFordia_dia()) { 
			$sql .= " AND fordia_dia = '".$obj->getFordia_dia()."'";
		} 
		if ($obj->getFordia_qtde()) { 
			$sql .= " AND fordia_qtde = '".$obj->getFordia_qtde()."'";
		} 
		if ($obj->getFordia_qTotMes()) { 
			$sql .= " AND fordia_qTotMes = '".$obj->getFordia_qTotMes()."'";
		} 
		if ($obj->getFordia_qTotAnt()) { 
			$sql .= " AND fordia_qTotAnt = '".$obj->getFordia_qTotAnt()."'";
		} 
		if ($obj->getFordia_qTotGer()) { 
			$sql .= " AND fordia_qTotGer = '".$obj->getFordia_qTotGer()."'";
		} 
		if ($obj->getDeduc_xDed()) { 
			$sql .= " AND upper(deduc_xDed)  like ('%".strtoupper($obj->getDeduc_xDed())."%')";
		} 
		if ($obj->getDeduc_vDed()) { 
			$sql .= " AND deduc_vDed = '".$obj->getDeduc_vDed()."'";
		} 
		if ($obj->getDeduc_vFor()) { 
			$sql .= " AND deduc_vFor = '".$obj->getDeduc_vFor()."'";
		} 
		if ($obj->getDeduc_vTotDed()) { 
			$sql .= " AND deduc_vTotDed = '".$obj->getDeduc_vTotDed()."'";
		} 
		if ($obj->getDeduc_vLiqFor()) { 
			$sql .= " AND deduc_vLiqFor = '".$obj->getDeduc_vLiqFor()."'";
		} 
		if ($obj->getInfAdFisco_infAdFisco()) { 
			$sql .= " AND upper(infAdFisco_infAdFisco)  like ('%".strtoupper($obj->getInfAdFisco_infAdFisco())."%')";
		} 
		if ($obj->getInfAdFisco_infCpl()) { 
			$sql .= " AND upper(infAdFisco_infCpl)  like ('%".strtoupper($obj->getInfAdFisco_infCpl())."%')";
		} 
		if ($obj->getObsCont_xCampo()) { 
			$sql .= " AND upper(ObsCont_xCampo)  like ('%".strtoupper($obj->getObsCont_xCampo())."%')";
		} 
		if ($obj->getObsCont_xTexto()) { 
			$sql .= " AND upper(ObsCont_xTexto)  like ('%".strtoupper($obj->getObsCont_xTexto())."%')";
		} 
		if ($obj->getProcRef_nProc()) { 
			$sql .= " AND upper(procRef_nProc)  like ('%".strtoupper($obj->getProcRef_nProc())."%')";
		} 
		if ($obj->getProcRef_indProc()) { 
			$sql .= " AND procRef_indProc = '".$obj->getProcRef_indProc()."'";
		} 
		if ($obj->getStatus_nfe()) { 
			$sql .= " AND status_nfe = '".$obj->getStatus_nfe()."'";
		} 
		 $rs = mysql_query($sql); 
		 if(mysql_num_rows($rs) > 0 ){ 
			 $obj->setSeq_nfe(mysql_result($rs, 0, 'seq_nfe')); 
			 $obj->setData_envio(mysql_result($rs, 0, 'data_envio')); 
			 $obj->setMes_ano(mysql_result($rs, 0, 'mes_ano')); 
			 $obj->setIdent_chave(mysql_result($rs, 0, 'ident_chave')); 
			 $obj->setIdent_versao(mysql_result($rs, 0, 'ident_versao')); 
			 $obj->setNfref_CNPJ(mysql_result($rs, 0, 'Nfref_CNPJ')); 
			 $obj->setNfref_aNoMes(mysql_result($rs, 0, 'Nfref_aNoMes')); 
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
			 $obj->setRefNfe_refNFeCh(mysql_result($rs, 0, 'refNfe_refNFeCh')); 
			 $obj->setRefNfe_cUF(mysql_result($rs, 0, 'refNfe_cUF')); 
			 $obj->setRefNfe_AAMM(mysql_result($rs, 0, 'refNfe_AAMM')); 
			 $obj->setRefNfe_CNPJ(mysql_result($rs, 0, 'refNfe_CNPJ')); 
			 $obj->setRefNfe_mod(mysql_result($rs, 0, 'refNfe_mod')); 
			 $obj->setRefNfe_serie(mysql_result($rs, 0, 'refNfe_serie')); 
			 $obj->setRefNfe_nNF(mysql_result($rs, 0, 'refNfe_nNF')); 
			 $obj->setRural_cUF(mysql_result($rs, 0, 'Rural_cUF')); 
			 $obj->setRural_AAMM(mysql_result($rs, 0, 'Rural_AAMM')); 
			 $obj->setRural_CNPJ(mysql_result($rs, 0, 'Rural_CNPJ')); 
			 $obj->setRural_CPF(mysql_result($rs, 0, 'Rural_CPF')); 
			 $obj->setRural_IE(mysql_result($rs, 0, 'Rural_IE')); 
			 $obj->setRural_mod(mysql_result($rs, 0, 'Rural_mod')); 
			 $obj->setRural_serie(mysql_result($rs, 0, 'Rural_serie')); 
			 $obj->setRural_nNF(mysql_result($rs, 0, 'Rural_nNF')); 
			 $obj->setCreref_refCTe(mysql_result($rs, 0, 'Creref_refCTe')); 
			 $obj->setCreref_nECF(mysql_result($rs, 0, 'Creref_nECF')); 
			 $obj->setCreref_nCOO(mysql_result($rs, 0, 'Creref_nCOO')); 
			 $obj->setEcferef_mod(mysql_result($rs, 0, 'Ecferef_mod')); 
			 $obj->setEmit_CNPJ(mysql_result($rs, 0, 'emit_CNPJ')); 
			 $obj->setEmit_xNome(mysql_result($rs, 0, 'emit_xNome')); 
			 $obj->setEmit_xFant(mysql_result($rs, 0, 'emit_xFant')); 
			 $obj->setEmit_IE(mysql_result($rs, 0, 'emit_IE')); 
			 $obj->setEmit_IEST(mysql_result($rs, 0, 'emit_IEST')); 
			 $obj->setEmit_IM(mysql_result($rs, 0, 'emit_IM')); 
			 $obj->setEmit_CNAE(mysql_result($rs, 0, 'emit_CNAE')); 
			 $obj->setEmit_CRT(mysql_result($rs, 0, 'emit_CRT')); 
			 $obj->setEnderEmit_xLgr(mysql_result($rs, 0, 'enderEmit_xLgr')); 
			 $obj->setEnderEmit_nro(mysql_result($rs, 0, 'enderEmit_nro')); 
			 $obj->setEnderEmit_xCpl(mysql_result($rs, 0, 'enderEmit_xCpl')); 
			 $obj->setEnderEmit_xBairro(mysql_result($rs, 0, 'enderEmit_xBairro')); 
			 $obj->setEnderEmit_cMun(mysql_result($rs, 0, 'enderEmit_cMun')); 
			 $obj->setEnderEmit_xMun(mysql_result($rs, 0, 'enderEmit_xMun')); 
			 $obj->setEnderEmit_UF(mysql_result($rs, 0, 'enderEmit_UF')); 
			 $obj->setEnderEmit_CEP(mysql_result($rs, 0, 'enderEmit_CEP')); 
			 $obj->setEnderEmit_cPais(mysql_result($rs, 0, 'enderEmit_cPais')); 
			 $obj->setEnderEmit_xPais(mysql_result($rs, 0, 'enderEmit_xPais')); 
			 $obj->setEnderEmit_fone(mysql_result($rs, 0, 'enderEmit_fone')); 
			 $obj->setDest_CNPJ(mysql_result($rs, 0, 'dest_CNPJ')); 
			 $obj->setDest_CPF(mysql_result($rs, 0, 'dest_CPF')); 
			 $obj->setDest_idEstrangeiro(mysql_result($rs, 0, 'dest_idEstrangeiro')); 
			 $obj->setDest_xNome(mysql_result($rs, 0, 'dest_xNome')); 
			 $obj->setDest_indIEDest(mysql_result($rs, 0, 'dest_indIEDest')); 
			 $obj->setDest_IE(mysql_result($rs, 0, 'dest_IE')); 
			 $obj->setDest_ISUF(mysql_result($rs, 0, 'dest_ISUF')); 
			 $obj->setDest_IM(mysql_result($rs, 0, 'dest_IM')); 
			 $obj->setDest_email(mysql_result($rs, 0, 'dest_email')); 
			 $obj->setEnderDest_xLgr(mysql_result($rs, 0, 'enderDest_xLgr')); 
			 $obj->setEnderDest_nro(mysql_result($rs, 0, 'enderDest_nro')); 
			 $obj->setEnderDest_xCpl(mysql_result($rs, 0, 'enderDest_xCpl')); 
			 $obj->setEnderDest_xBairro(mysql_result($rs, 0, 'enderDest_xBairro')); 
			 $obj->setEnderDest_cMun(mysql_result($rs, 0, 'enderDest_cMun')); 
			 $obj->setEnderDest_xMun(mysql_result($rs, 0, 'enderDest_xMun')); 
			 $obj->setEnderDest_UF(mysql_result($rs, 0, 'enderDest_UF')); 
			 $obj->setEnderDest_CEP(mysql_result($rs, 0, 'enderDest_CEP')); 
			 $obj->setEnderDest_cPais(mysql_result($rs, 0, 'enderDest_cPais')); 
			 $obj->setEnderDest_xPais(mysql_result($rs, 0, 'enderDest_xPais')); 
			 $obj->setEnderDest_fone(mysql_result($rs, 0, 'enderDest_fone')); 
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
			 $obj->setPagT_pagT(mysql_result($rs, 0, 'pagT_pagT')); 
			 $obj->setCobr_nFat(mysql_result($rs, 0, 'cobr_nFat')); 
			 $obj->setCobr_vOrig(mysql_result($rs, 0, 'cobr_vOrig')); 
			 $obj->setCobr_vDesc(mysql_result($rs, 0, 'cobr_vDesc')); 
			 $obj->setCobr_vLiq(mysql_result($rs, 0, 'cobr_vLiq')); 
			 $obj->setDup_nDup(mysql_result($rs, 0, 'dup_nDup')); 
			 $obj->setDup_dVenc(mysql_result($rs, 0, 'dup_dVenc')); 
			 $obj->setDup_vDup(mysql_result($rs, 0, 'dup_vDup')); 
			 $obj->setModfrete_modFrete(mysql_result($rs, 0, 'modfrete_modFrete')); 
			 $obj->setTransp_CNPJ(mysql_result($rs, 0, 'transp_CNPJ')); 
			 $obj->setTransp_CPF(mysql_result($rs, 0, 'transp_CPF')); 
			 $obj->setTransp_xNome(mysql_result($rs, 0, 'transp_xNome')); 
			 $obj->setTransp_IE(mysql_result($rs, 0, 'transp_IE')); 
			 $obj->setTransp_xEnder(mysql_result($rs, 0, 'transp_xEnder')); 
			 $obj->setTransp_xMun(mysql_result($rs, 0, 'transp_xMun')); 
			 $obj->setTransp_UF(mysql_result($rs, 0, 'transp_UF')); 
			 $obj->setRetTransp_vServ(mysql_result($rs, 0, 'retTransp_vServ')); 
			 $obj->setRetTransp_vBCRet(mysql_result($rs, 0, 'retTransp_vBCRet')); 
			 $obj->setRetTransp_pICMSRet(mysql_result($rs, 0, 'retTransp_pICMSRet')); 
			 $obj->setRetTransp_vICMSRet(mysql_result($rs, 0, 'retTransp_vICMSRet')); 
			 $obj->setRetTransp_CFOP(mysql_result($rs, 0, 'retTransp_CFOP')); 
			 $obj->setRetTransp_cMunFG(mysql_result($rs, 0, 'retTransp_cMunFG')); 
			 $obj->setVeicTransp_placa(mysql_result($rs, 0, 'veicTransp_placa')); 
			 $obj->setVeicTransp_UF(mysql_result($rs, 0, 'veicTransp_UF')); 
			 $obj->setVeicTransp_RNTC(mysql_result($rs, 0, 'veicTransp_RNTC')); 
			 $obj->setReboque_placa(mysql_result($rs, 0, 'reboque_placa')); 
			 $obj->setReboque_siglaUF(mysql_result($rs, 0, 'reboque_siglaUF')); 
			 $obj->setReboque_rntc(mysql_result($rs, 0, 'reboque_rntc')); 
			 $obj->setReboque_vagao(mysql_result($rs, 0, 'reboque_vagao')); 
			 $obj->setReboque_balsa(mysql_result($rs, 0, 'reboque_balsa')); 
			 $obj->setVol_qVol(mysql_result($rs, 0, 'Vol_qVol')); 
			 $obj->setVol_esp(mysql_result($rs, 0, 'Vol_esp')); 
			 $obj->setVol_marca(mysql_result($rs, 0, 'Vol_marca')); 
			 $obj->setVol_nVol(mysql_result($rs, 0, 'Vol_nVol')); 
			 $obj->setVol_pesoL(mysql_result($rs, 0, 'Vol_pesoL')); 
			 $obj->setVol_pesoB(mysql_result($rs, 0, 'Vol_pesoB')); 
			 $obj->setVol_aLacres(mysql_result($rs, 0, 'Vol_aLacres')); 
			 $obj->setExporta_UFSaidaPais(mysql_result($rs, 0, 'exporta_UFSaidaPais')); 
			 $obj->setExporta_xLocExporta(mysql_result($rs, 0, 'exporta_xLocExporta')); 
			 $obj->setExporta_xLocDespacho(mysql_result($rs, 0, 'exporta_xLocDespacho')); 
			 $obj->setCompra_xNEmp(mysql_result($rs, 0, 'compra_xNEmp')); 
			 $obj->setCompra_xPed(mysql_result($rs, 0, 'compra_xPed')); 
			 $obj->setCompra_xCont(mysql_result($rs, 0, 'compra_xCont')); 
			 $obj->setDetExport_nItem(mysql_result($rs, 0, 'DetExport_nItem')); 
			 $obj->setDetExport_nDraw(mysql_result($rs, 0, 'DetExport_nDraw')); 
			 $obj->setDetExport_exportInd(mysql_result($rs, 0, 'DetExport_exportInd')); 
			 $obj->setDetExport_nRE(mysql_result($rs, 0, 'DetExport_nRE')); 
			 $obj->setDetExport_chNFe(mysql_result($rs, 0, 'DetExport_chNFe')); 
			 $obj->setDetExport_qExport(mysql_result($rs, 0, 'DetExport_qExport')); 
			 $obj->setObsFisco_xCampo(mysql_result($rs, 0, 'ObsFisco_xCampo')); 
			 $obj->setObsFisco_xTexto(mysql_result($rs, 0, 'ObsFisco_xTexto')); 
			 $obj->setAuxXML_AutXML(mysql_result($rs, 0, 'AuxXML_AutXML')); 
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
			 $obj->setTotal_vFrete(mysql_result($rs, 0, 'total_vFrete')); 
			 $obj->setTotal_vSeg(mysql_result($rs, 0, 'total_vSeg')); 
			 $obj->setTotal_vII(mysql_result($rs, 0, 'total_vII')); 
			 $obj->setTotal_vOutro(mysql_result($rs, 0, 'total_vOutro')); 
			 $obj->setTotal_vtotal(mysql_result($rs, 0, 'total_vtotal')); 
			 $obj->setReltrib_vRetPIS(mysql_result($rs, 0, 'reltrib_vRetPIS')); 
			 $obj->setReltrib_vRetCOFINS(mysql_result($rs, 0, 'reltrib_vRetCOFINS')); 
			 $obj->setReltrib_vRetCSLL(mysql_result($rs, 0, 'reltrib_vRetCSLL')); 
			 $obj->setReltrib_vBCIRRF(mysql_result($rs, 0, 'reltrib_vBCIRRF')); 
			 $obj->setReltrib_vIRRF(mysql_result($rs, 0, 'reltrib_vIRRF')); 
			 $obj->setReltrib_vBCRetPrev(mysql_result($rs, 0, 'reltrib_vBCRetPrev')); 
			 $obj->setReltrib_vRetPrev(mysql_result($rs, 0, 'reltrib_vRetPrev')); 
			 $obj->setCana_safra(mysql_result($rs, 0, 'cana_safra')); 
			 $obj->setCana_ref(mysql_result($rs, 0, 'cana_ref')); 
			 $obj->setFordia_dia(mysql_result($rs, 0, 'fordia_dia')); 
			 $obj->setFordia_qtde(mysql_result($rs, 0, 'fordia_qtde')); 
			 $obj->setFordia_qTotMes(mysql_result($rs, 0, 'fordia_qTotMes')); 
			 $obj->setFordia_qTotAnt(mysql_result($rs, 0, 'fordia_qTotAnt')); 
			 $obj->setFordia_qTotGer(mysql_result($rs, 0, 'fordia_qTotGer')); 
			 $obj->setDeduc_xDed(mysql_result($rs, 0, 'deduc_xDed')); 
			 $obj->setDeduc_vDed(mysql_result($rs, 0, 'deduc_vDed')); 
			 $obj->setDeduc_vFor(mysql_result($rs, 0, 'deduc_vFor')); 
			 $obj->setDeduc_vTotDed(mysql_result($rs, 0, 'deduc_vTotDed')); 
			 $obj->setDeduc_vLiqFor(mysql_result($rs, 0, 'deduc_vLiqFor')); 
			 $obj->setInfAdFisco_infAdFisco(mysql_result($rs, 0, 'infAdFisco_infAdFisco')); 
			 $obj->setInfAdFisco_infCpl(mysql_result($rs, 0, 'infAdFisco_infCpl')); 
			 $obj->setObsCont_xCampo(mysql_result($rs, 0, 'ObsCont_xCampo')); 
			 $obj->setObsCont_xTexto(mysql_result($rs, 0, 'ObsCont_xTexto')); 
			 $obj->setProcRef_nProc(mysql_result($rs, 0, 'procRef_nProc')); 
			 $obj->setProcRef_indProc(mysql_result($rs, 0, 'procRef_indProc')); 
			 $obj->setStatus_nfe(mysql_result($rs, 0, 'status_nfe')); 
		} 
		 return $obj; 
	} 

	  function countAll(){
		 $sql = 'SELECT count(*) as total FROM nfe_dados';  
		 $query = mysql_query($sql); 
		 $dados = mysql_fetch_assoc($query);  
		 $total = $dados['total']; 
		 return $total; 
		} 


		function verifica_existe($obj){
			$sql = 'SELECT count(*) as existe FROM nfe_dados WHERE 1=1 ';

			if ($obj->getIdent_chave()) {
				$sql .= " AND ident_chave = '".$obj->getIdent_chave()."'";
			}

			if ($obj->getNfref_serie()) {
				$sql .= " AND Nfref_serie = '".$obj->getNfref_serie()."'";
			}
			if ($obj->getNfref_nNF()) {
				$sql .= " AND Nfref_nNF = '".$obj->getNfref_nNF()."'";
			}
			

			$query = mysql_query($sql);
			$dados = mysql_fetch_assoc($query);
			$existe = $dados['existe'];
			return $existe;
		}



 	  function selectAll($obj){
		 $sql = 'SELECT * FROM nfe_dados WHERE 1=1 '; 


		if ($obj->getSeq_nfe()) { 
			 $sql .= " AND seq_nfe = '".$obj->getSeq_nfe()."'";
 				} 
		if ($obj->getData_envio()) { 
			 $sql .= " AND data_envio = '".$obj->getData_envio()."'";
 				} 
		if ($obj->getMes_ano()) { 
			 $sql .= " AND mes_ano = '".$obj->getMes_ano()."'";
 				} 
		if ($obj->getIdent_chave()) { 
			 $sql .= " AND ident_chave = '".$obj->getIdent_chave()."'";
 				} 
		if ($obj->getIdent_versao()) { 
			 $sql .= " AND upper(ident_versao)  like ('%".strtoupper($obj->getIdent_versao())."%')";
 				} 
		if ($obj->getNfref_CNPJ()) { 
			 $sql .= " AND Nfref_CNPJ = '".$obj->getNfref_CNPJ()."'";
 				} 
		if ($obj->getNfref_aNoMes()) { 
			 $sql .= " AND Nfref_aNoMes = '".$obj->getNfref_aNoMes()."'";
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
			 $sql .= " AND Nfref_serie = '".$obj->getNfref_serie()."'";
 				} 
		if ($obj->getNfref_nNF()) { 
			 $sql .= " AND Nfref_nNF = '".$obj->getNfref_nNF()."'";
 				} 
		if ($obj->getNfref_dhEmi()) { 
			 $sql .= " AND upper(Nfref_dhEmi)  like ('%".strtoupper($obj->getNfref_dhEmi())."%')";
 				} 
		if ($obj->getNfref_dhSaiEnt()) { 
			 $sql .= " AND upper(Nfref_dhSaiEnt)  like ('%".strtoupper($obj->getNfref_dhSaiEnt())."%')";
 				} 
		if ($obj->getNfref_tpNF()) { 
			 $sql .= " AND Nfref_tpNF = '".$obj->getNfref_tpNF()."'";
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
		if ($obj->getRefNfe_refNFeCh()) { 
			 $sql .= " AND refNfe_refNFeCh = '".$obj->getRefNfe_refNFeCh()."'";
 				} 
		if ($obj->getRefNfe_cUF()) { 
			 $sql .= " AND refNfe_cUF = '".$obj->getRefNfe_cUF()."'";
 				} 
		if ($obj->getRefNfe_AAMM()) { 
			 $sql .= " AND refNfe_AAMM = '".$obj->getRefNfe_AAMM()."'";
 				} 
		if ($obj->getRefNfe_CNPJ()) { 
			 $sql .= " AND refNfe_CNPJ = '".$obj->getRefNfe_CNPJ()."'";
 				} 
		if ($obj->getRefNfe_mod()) { 
			 $sql .= " AND refNfe_mod = '".$obj->getRefNfe_mod()."'";
 				} 
		if ($obj->getRefNfe_serie()) { 
			 $sql .= " AND refNfe_serie = '".$obj->getRefNfe_serie()."'";
 				} 
		if ($obj->getRefNfe_nNF()) { 
			 $sql .= " AND refNfe_nNF = '".$obj->getRefNfe_nNF()."'";
 				} 
		if ($obj->getRural_cUF()) { 
			 $sql .= " AND Rural_cUF = '".$obj->getRural_cUF()."'";
 				} 
		if ($obj->getRural_AAMM()) { 
			 $sql .= " AND Rural_AAMM = '".$obj->getRural_AAMM()."'";
 				} 
		if ($obj->getRural_CNPJ()) { 
			 $sql .= " AND Rural_CNPJ = '".$obj->getRural_CNPJ()."'";
 				} 
		if ($obj->getRural_CPF()) { 
			 $sql .= " AND Rural_CPF = '".$obj->getRural_CPF()."'";
 				} 
		if ($obj->getRural_IE()) { 
			 $sql .= " AND upper(Rural_IE)  like ('%".strtoupper($obj->getRural_IE())."%')";
 				} 
		if ($obj->getRural_mod()) { 
			 $sql .= " AND Rural_mod = '".$obj->getRural_mod()."'";
 				} 
		if ($obj->getRural_serie()) { 
			 $sql .= " AND Rural_serie = '".$obj->getRural_serie()."'";
 				} 
		if ($obj->getRural_nNF()) { 
			 $sql .= " AND Rural_nNF = '".$obj->getRural_nNF()."'";
 				} 
		if ($obj->getCreref_refCTe()) { 
			 $sql .= " AND Creref_refCTe = '".$obj->getCreref_refCTe()."'";
 				} 
		if ($obj->getCreref_nECF()) { 
			 $sql .= " AND Creref_nECF = '".$obj->getCreref_nECF()."'";
 				} 
		if ($obj->getCreref_nCOO()) { 
			 $sql .= " AND Creref_nCOO = '".$obj->getCreref_nCOO()."'";
 				} 
		if ($obj->getEcferef_mod()) { 
			 $sql .= " AND Ecferef_mod = '".$obj->getEcferef_mod()."'";
 				} 
		if ($obj->getEmit_CNPJ()) { 
			 $sql .= " AND emit_CNPJ = '".$obj->getEmit_CNPJ()."'";
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
			 $sql .= " AND emit_CNAE = '".$obj->getEmit_CNAE()."'";
 				} 
		if ($obj->getEmit_CRT()) { 
			 $sql .= " AND emit_CRT = '".$obj->getEmit_CRT()."'";
 				} 
		if ($obj->getEnderEmit_xLgr()) { 
			 $sql .= " AND upper(enderEmit_xLgr)  like ('%".strtoupper($obj->getEnderEmit_xLgr())."%')";
 				} 
		if ($obj->getEnderEmit_nro()) { 
			 $sql .= " AND upper(enderEmit_nro)  like ('%".strtoupper($obj->getEnderEmit_nro())."%')";
 				} 
		if ($obj->getEnderEmit_xCpl()) { 
			 $sql .= " AND upper(enderEmit_xCpl)  like ('%".strtoupper($obj->getEnderEmit_xCpl())."%')";
 				} 
		if ($obj->getEnderEmit_xBairro()) { 
			 $sql .= " AND upper(enderEmit_xBairro)  like ('%".strtoupper($obj->getEnderEmit_xBairro())."%')";
 				} 
		if ($obj->getEnderEmit_cMun()) { 
			 $sql .= " AND enderEmit_cMun = '".$obj->getEnderEmit_cMun()."'";
 				} 
		if ($obj->getEnderEmit_xMun()) { 
			 $sql .= " AND upper(enderEmit_xMun)  like ('%".strtoupper($obj->getEnderEmit_xMun())."%')";
 				} 
		if ($obj->getEnderEmit_UF()) { 
			 $sql .= " AND upper(enderEmit_UF)  like ('%".strtoupper($obj->getEnderEmit_UF())."%')";
 				} 
		if ($obj->getEnderEmit_CEP()) { 
			 $sql .= " AND enderEmit_CEP = '".$obj->getEnderEmit_CEP()."'";
 				} 
		if ($obj->getEnderEmit_cPais()) { 
			 $sql .= " AND enderEmit_cPais = '".$obj->getEnderEmit_cPais()."'";
 				} 
		if ($obj->getEnderEmit_xPais()) { 
			 $sql .= " AND upper(enderEmit_xPais)  like ('%".strtoupper($obj->getEnderEmit_xPais())."%')";
 				} 
		if ($obj->getEnderEmit_fone()) { 
			 $sql .= " AND upper(enderEmit_fone)  like ('%".strtoupper($obj->getEnderEmit_fone())."%')";
 				} 
		if ($obj->getDest_CNPJ()) { 
			 $sql .= " AND dest_CNPJ = '".$obj->getDest_CNPJ()."'";
 				} 
		if ($obj->getDest_CPF()) { 
			 $sql .= " AND dest_CPF = '".$obj->getDest_CPF()."'";
 				} 
		if ($obj->getDest_idEstrangeiro()) { 
			 $sql .= " AND upper(dest_idEstrangeiro)  like ('%".strtoupper($obj->getDest_idEstrangeiro())."%')";
 				} 
		if ($obj->getDest_xNome()) { 
			 $sql .= " AND upper(dest_xNome)  like ('%".strtoupper($obj->getDest_xNome())."%')";
 				} 
		if ($obj->getDest_indIEDest()) { 
			 $sql .= " AND upper(dest_indIEDest)  like ('%".strtoupper($obj->getDest_indIEDest())."%')";
 				} 
		if ($obj->getDest_IE()) { 
			 $sql .= " AND upper(dest_IE)  like ('%".strtoupper($obj->getDest_IE())."%')";
 				} 
		if ($obj->getDest_ISUF()) { 
			 $sql .= " AND dest_ISUF = '".$obj->getDest_ISUF()."'";
 				} 
		if ($obj->getDest_IM()) { 
			 $sql .= " AND upper(dest_IM)  like ('%".strtoupper($obj->getDest_IM())."%')";
 				} 
		if ($obj->getDest_email()) { 
			 $sql .= " AND upper(dest_email)  like ('%".strtoupper($obj->getDest_email())."%')";
 				} 
		if ($obj->getEnderDest_xLgr()) { 
			 $sql .= " AND upper(enderDest_xLgr)  like ('%".strtoupper($obj->getEnderDest_xLgr())."%')";
 				} 
		if ($obj->getEnderDest_nro()) { 
			 $sql .= " AND upper(enderDest_nro)  like ('%".strtoupper($obj->getEnderDest_nro())."%')";
 				} 
		if ($obj->getEnderDest_xCpl()) { 
			 $sql .= " AND upper(enderDest_xCpl)  like ('%".strtoupper($obj->getEnderDest_xCpl())."%')";
 				} 
		if ($obj->getEnderDest_xBairro()) { 
			 $sql .= " AND upper(enderDest_xBairro)  like ('%".strtoupper($obj->getEnderDest_xBairro())."%')";
 				} 
		if ($obj->getEnderDest_cMun()) { 
			 $sql .= " AND enderDest_cMun = '".$obj->getEnderDest_cMun()."'";
 				} 
		if ($obj->getEnderDest_xMun()) { 
			 $sql .= " AND upper(enderDest_xMun)  like ('%".strtoupper($obj->getEnderDest_xMun())."%')";
 				} 
		if ($obj->getEnderDest_UF()) { 
			 $sql .= " AND upper(enderDest_UF)  like ('%".strtoupper($obj->getEnderDest_UF())."%')";
 				} 
		if ($obj->getEnderDest_CEP()) { 
			 $sql .= " AND enderDest_CEP = '".$obj->getEnderDest_CEP()."'";
 				} 
		if ($obj->getEnderDest_cPais()) { 
			 $sql .= " AND enderDest_cPais = '".$obj->getEnderDest_cPais()."'";
 				} 
		if ($obj->getEnderDest_xPais()) { 
			 $sql .= " AND upper(enderDest_xPais)  like ('%".strtoupper($obj->getEnderDest_xPais())."%')";
 				} 
		if ($obj->getEnderDest_fone()) { 
			 $sql .= " AND upper(enderDest_fone)  like ('%".strtoupper($obj->getEnderDest_fone())."%')";
 				} 
		if ($obj->getRetirada_CNPJ()) { 
			 $sql .= " AND retirada_CNPJ = '".$obj->getRetirada_CNPJ()."'";
 				} 
		if ($obj->getRetirada_CPF()) { 
			 $sql .= " AND retirada_CPF = '".$obj->getRetirada_CPF()."'";
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
			 $sql .= " AND retirada_cMun = '".$obj->getRetirada_cMun()."'";
 				} 
		if ($obj->getRetirada_xMun()) { 
			 $sql .= " AND upper(retirada_xMun)  like ('%".strtoupper($obj->getRetirada_xMun())."%')";
 				} 
		if ($obj->getRetirada_UF()) { 
			 $sql .= " AND upper(retirada_UF)  like ('%".strtoupper($obj->getRetirada_UF())."%')";
 				} 
		if ($obj->getEntrega_CNPJ()) { 
			 $sql .= " AND entrega_CNPJ = '".$obj->getEntrega_CNPJ()."'";
 				} 
		if ($obj->getEntrega_CPF()) { 
			 $sql .= " AND entrega_CPF = '".$obj->getEntrega_CPF()."'";
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
			 $sql .= " AND entrega_cMun = '".$obj->getEntrega_cMun()."'";
 				} 
		if ($obj->getEntrega_xMun()) { 
			 $sql .= " AND upper(entrega_xMun)  like ('%".strtoupper($obj->getEntrega_xMun())."%')";
 				} 
		if ($obj->getEntrega_UF()) { 
			 $sql .= " AND upper(entrega_UF)  like ('%".strtoupper($obj->getEntrega_UF())."%')";
 				} 
		if ($obj->getPag_CNPJ()) { 
			 $sql .= " AND pag_CNPJ = '".$obj->getPag_CNPJ()."'";
 				} 
		if ($obj->getPag_tBand()) { 
			 $sql .= " AND pag_tBand = '".$obj->getPag_tBand()."'";
 				} 
		if ($obj->getPag_cAut()) { 
			 $sql .= " AND upper(pag_cAut)  like ('%".strtoupper($obj->getPag_cAut())."%')";
 				} 
		if ($obj->getPagT_pagT()) { 
			 $sql .= " AND upper(pagT_pagT)  like ('%".strtoupper($obj->getPagT_pagT())."%')";
 				} 
		if ($obj->getCobr_nFat()) { 
			 $sql .= " AND upper(cobr_nFat)  like ('%".strtoupper($obj->getCobr_nFat())."%')";
 				} 
		if ($obj->getCobr_vOrig()) { 
			 $sql .= " AND cobr_vOrig = '".$obj->getCobr_vOrig()."'";
 				} 
		if ($obj->getCobr_vDesc()) { 
			 $sql .= " AND cobr_vDesc = '".$obj->getCobr_vDesc()."'";
 				} 
		if ($obj->getCobr_vLiq()) { 
			 $sql .= " AND cobr_vLiq = '".$obj->getCobr_vLiq()."'";
 				} 
		if ($obj->getDup_nDup()) { 
			 $sql .= " AND upper(dup_nDup)  like ('%".strtoupper($obj->getDup_nDup())."%')";
 				} 
		if ($obj->getDup_dVenc()) { 
			 $sql .= " AND dup_dVenc = '".$obj->getDup_dVenc()."'";
 				} 
		if ($obj->getDup_vDup()) { 
			 $sql .= " AND dup_vDup = '".$obj->getDup_vDup()."'";
 				} 
		if ($obj->getModfrete_modFrete()) { 
			 $sql .= " AND modfrete_modFrete = '".$obj->getModfrete_modFrete()."'";
 				} 
		if ($obj->getTransp_CNPJ()) { 
			 $sql .= " AND transp_CNPJ = '".$obj->getTransp_CNPJ()."'";
 				} 
		if ($obj->getTransp_CPF()) { 
			 $sql .= " AND transp_CPF = '".$obj->getTransp_CPF()."'";
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
		if ($obj->getRetTransp_vServ()) { 
			 $sql .= " AND retTransp_vServ = '".$obj->getRetTransp_vServ()."'";
 				} 
		if ($obj->getRetTransp_vBCRet()) { 
			 $sql .= " AND retTransp_vBCRet = '".$obj->getRetTransp_vBCRet()."'";
 				} 
		if ($obj->getRetTransp_pICMSRet()) { 
			 $sql .= " AND retTransp_pICMSRet = '".$obj->getRetTransp_pICMSRet()."'";
 				} 
		if ($obj->getRetTransp_vICMSRet()) { 
			 $sql .= " AND retTransp_vICMSRet = '".$obj->getRetTransp_vICMSRet()."'";
 				} 
		if ($obj->getRetTransp_CFOP()) { 
			 $sql .= " AND retTransp_CFOP = '".$obj->getRetTransp_CFOP()."'";
 				} 
		if ($obj->getRetTransp_cMunFG()) { 
			 $sql .= " AND retTransp_cMunFG = '".$obj->getRetTransp_cMunFG()."'";
 				} 
		if ($obj->getVeicTransp_placa()) { 
			 $sql .= " AND upper(veicTransp_placa)  like ('%".strtoupper($obj->getVeicTransp_placa())."%')";
 				} 
		if ($obj->getVeicTransp_UF()) { 
			 $sql .= " AND upper(veicTransp_UF)  like ('%".strtoupper($obj->getVeicTransp_UF())."%')";
 				} 
		if ($obj->getVeicTransp_RNTC()) { 
			 $sql .= " AND upper(veicTransp_RNTC)  like ('%".strtoupper($obj->getVeicTransp_RNTC())."%')";
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
		if ($obj->getVol_qVol()) { 
			 $sql .= " AND Vol_qVol = '".$obj->getVol_qVol()."'";
 				} 
		if ($obj->getVol_esp()) { 
			 $sql .= " AND upper(Vol_esp)  like ('%".strtoupper($obj->getVol_esp())."%')";
 				} 
		if ($obj->getVol_marca()) { 
			 $sql .= " AND upper(Vol_marca)  like ('%".strtoupper($obj->getVol_marca())."%')";
 				} 
		if ($obj->getVol_nVol()) { 
			 $sql .= " AND upper(Vol_nVol)  like ('%".strtoupper($obj->getVol_nVol())."%')";
 				} 
		if ($obj->getVol_pesoL()) { 
			 $sql .= " AND Vol_pesoL = '".$obj->getVol_pesoL()."'";
 				} 
		if ($obj->getVol_pesoB()) { 
			 $sql .= " AND Vol_pesoB = '".$obj->getVol_pesoB()."'";
 				} 
		if ($obj->getVol_aLacres()) { 
			 $sql .= " AND upper(Vol_aLacres)  like ('%".strtoupper($obj->getVol_aLacres())."%')";
 				} 
		if ($obj->getExporta_UFSaidaPais()) { 
			 $sql .= " AND exporta_UFSaidaPais = '".$obj->getExporta_UFSaidaPais()."'";
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
		if ($obj->getDetExport_nItem()) { 
			 $sql .= " AND DetExport_nItem = '".$obj->getDetExport_nItem()."'";
 				} 
		if ($obj->getDetExport_nDraw()) { 
			 $sql .= " AND DetExport_nDraw = '".$obj->getDetExport_nDraw()."'";
 				} 
		if ($obj->getDetExport_exportInd()) { 
			 $sql .= " AND upper(DetExport_exportInd)  like ('%".strtoupper($obj->getDetExport_exportInd())."%')";
 				} 
		if ($obj->getDetExport_nRE()) { 
			 $sql .= " AND DetExport_nRE = '".$obj->getDetExport_nRE()."'";
 				} 
		if ($obj->getDetExport_chNFe()) { 
			 $sql .= " AND DetExport_chNFe = '".$obj->getDetExport_chNFe()."'";
 				} 
		if ($obj->getDetExport_qExport()) { 
			 $sql .= " AND DetExport_qExport = '".$obj->getDetExport_qExport()."'";
 				} 
		if ($obj->getObsFisco_xCampo()) { 
			 $sql .= " AND upper(ObsFisco_xCampo)  like ('%".strtoupper($obj->getObsFisco_xCampo())."%')";
 				} 
		if ($obj->getObsFisco_xTexto()) { 
			 $sql .= " AND upper(ObsFisco_xTexto)  like ('%".strtoupper($obj->getObsFisco_xTexto())."%')";
 				} 
		if ($obj->getAuxXML_AutXML()) { 
			 $sql .= " AND upper(AuxXML_AutXML)  like ('%".strtoupper($obj->getAuxXML_AutXML())."%')";
 				} 
		if ($obj->getTotal_vBC()) { 
			 $sql .= " AND total_vBC = '".$obj->getTotal_vBC()."'";
 				} 
		if ($obj->getTotal_vICMS()) { 
			 $sql .= " AND total_vICMS = '".$obj->getTotal_vICMS()."'";
 				} 
		if ($obj->getTotal_vICMSDeson()) { 
			 $sql .= " AND total_vICMSDeson = '".$obj->getTotal_vICMSDeson()."'";
 				} 
		if ($obj->getTotal_vBCST()) { 
			 $sql .= " AND total_vBCST = '".$obj->getTotal_vBCST()."'";
 				} 
		if ($obj->getTotal_vST()) { 
			 $sql .= " AND total_vST = '".$obj->getTotal_vST()."'";
 				} 
		if ($obj->getTotal_vProd()) { 
			 $sql .= " AND total_vProd = '".$obj->getTotal_vProd()."'";
 				} 
		if ($obj->getTotal_vDesc()) { 
			 $sql .= " AND total_vDesc = '".$obj->getTotal_vDesc()."'";
 				} 
		if ($obj->getTotal_vIPI()) { 
			 $sql .= " AND total_vIPI = '".$obj->getTotal_vIPI()."'";
 				} 
		if ($obj->getTotal_vPIS()) { 
			 $sql .= " AND total_vPIS = '".$obj->getTotal_vPIS()."'";
 				} 
		if ($obj->getTotal_vCOFINS()) { 
			 $sql .= " AND total_vCOFINS = '".$obj->getTotal_vCOFINS()."'";
 				} 
		if ($obj->getTotal_vFrete()) { 
			 $sql .= " AND total_vFrete = '".$obj->getTotal_vFrete()."'";
 				} 
		if ($obj->getTotal_vSeg()) { 
			 $sql .= " AND total_vSeg = '".$obj->getTotal_vSeg()."'";
 				} 
		if ($obj->getTotal_vII()) { 
			 $sql .= " AND total_vII = '".$obj->getTotal_vII()."'";
 				} 
		if ($obj->getTotal_vOutro()) { 
			 $sql .= " AND total_vOutro = '".$obj->getTotal_vOutro()."'";
 				} 
		if ($obj->getTotal_vtotal()) { 
			 $sql .= " AND total_vtotal = '".$obj->getTotal_vtotal()."'";
 				} 
		if ($obj->getReltrib_vRetPIS()) { 
			 $sql .= " AND reltrib_vRetPIS = '".$obj->getReltrib_vRetPIS()."'";
 				} 
		if ($obj->getReltrib_vRetCOFINS()) { 
			 $sql .= " AND reltrib_vRetCOFINS = '".$obj->getReltrib_vRetCOFINS()."'";
 				} 
		if ($obj->getReltrib_vRetCSLL()) { 
			 $sql .= " AND reltrib_vRetCSLL = '".$obj->getReltrib_vRetCSLL()."'";
 				} 
		if ($obj->getReltrib_vBCIRRF()) { 
			 $sql .= " AND reltrib_vBCIRRF = '".$obj->getReltrib_vBCIRRF()."'";
 				} 
		if ($obj->getReltrib_vIRRF()) { 
			 $sql .= " AND reltrib_vIRRF = '".$obj->getReltrib_vIRRF()."'";
 				} 
		if ($obj->getReltrib_vBCRetPrev()) { 
			 $sql .= " AND reltrib_vBCRetPrev = '".$obj->getReltrib_vBCRetPrev()."'";
 				} 
		if ($obj->getReltrib_vRetPrev()) { 
			 $sql .= " AND reltrib_vRetPrev = '".$obj->getReltrib_vRetPrev()."'";
 				} 
		if ($obj->getCana_safra()) { 
			 $sql .= " AND upper(cana_safra)  like ('%".strtoupper($obj->getCana_safra())."%')";
 				} 
		if ($obj->getCana_ref()) { 
			 $sql .= " AND upper(cana_ref)  like ('%".strtoupper($obj->getCana_ref())."%')";
 				} 
		if ($obj->getFordia_dia()) { 
			 $sql .= " AND fordia_dia = '".$obj->getFordia_dia()."'";
 				} 
		if ($obj->getFordia_qtde()) { 
			 $sql .= " AND fordia_qtde = '".$obj->getFordia_qtde()."'";
 				} 
		if ($obj->getFordia_qTotMes()) { 
			 $sql .= " AND fordia_qTotMes = '".$obj->getFordia_qTotMes()."'";
 				} 
		if ($obj->getFordia_qTotAnt()) { 
			 $sql .= " AND fordia_qTotAnt = '".$obj->getFordia_qTotAnt()."'";
 				} 
		if ($obj->getFordia_qTotGer()) { 
			 $sql .= " AND fordia_qTotGer = '".$obj->getFordia_qTotGer()."'";
 				} 
		if ($obj->getDeduc_xDed()) { 
			 $sql .= " AND upper(deduc_xDed)  like ('%".strtoupper($obj->getDeduc_xDed())."%')";
 				} 
		if ($obj->getDeduc_vDed()) { 
			 $sql .= " AND deduc_vDed = '".$obj->getDeduc_vDed()."'";
 				} 
		if ($obj->getDeduc_vFor()) { 
			 $sql .= " AND deduc_vFor = '".$obj->getDeduc_vFor()."'";
 				} 
		if ($obj->getDeduc_vTotDed()) { 
			 $sql .= " AND deduc_vTotDed = '".$obj->getDeduc_vTotDed()."'";
 				} 
		if ($obj->getDeduc_vLiqFor()) { 
			 $sql .= " AND deduc_vLiqFor = '".$obj->getDeduc_vLiqFor()."'";
 				} 
		if ($obj->getInfAdFisco_infAdFisco()) { 
			 $sql .= " AND upper(infAdFisco_infAdFisco)  like ('%".strtoupper($obj->getInfAdFisco_infAdFisco())."%')";
 				} 
		if ($obj->getInfAdFisco_infCpl()) { 
			 $sql .= " AND upper(infAdFisco_infCpl)  like ('%".strtoupper($obj->getInfAdFisco_infCpl())."%')";
 				} 
		if ($obj->getObsCont_xCampo()) { 
			 $sql .= " AND upper(ObsCont_xCampo)  like ('%".strtoupper($obj->getObsCont_xCampo())."%')";
 				} 
		if ($obj->getObsCont_xTexto()) { 
			 $sql .= " AND upper(ObsCont_xTexto)  like ('%".strtoupper($obj->getObsCont_xTexto())."%')";
 				} 
		if ($obj->getProcRef_nProc()) { 
			 $sql .= " AND upper(procRef_nProc)  like ('%".strtoupper($obj->getProcRef_nProc())."%')";
 				} 
		if ($obj->getProcRef_indProc()) { 
			 $sql .= " AND procRef_indProc = '".$obj->getProcRef_indProc()."'";
 				} 
		if ($obj->getStatus_nfe()) { 
			 $sql .= " AND status_nfe = '".$obj->getStatus_nfe()."'";
 				} 

		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Nfe_dados(); 
			 $obj->setSeq_nfe(mysql_result($rs, $i, 'seq_nfe')); 
			 $obj->setData_envio(mysql_result($rs, $i, 'data_envio')); 
			 $obj->setMes_ano(mysql_result($rs, $i, 'mes_ano')); 
			 $obj->setIdent_chave(mysql_result($rs, $i, 'ident_chave')); 
			 $obj->setIdent_versao(mysql_result($rs, $i, 'ident_versao')); 
			 $obj->setNfref_CNPJ(mysql_result($rs, $i, 'Nfref_CNPJ')); 
			 $obj->setNfref_aNoMes(mysql_result($rs, $i, 'Nfref_aNoMes')); 
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
			 $obj->setRefNfe_refNFeCh(mysql_result($rs, $i, 'refNfe_refNFeCh')); 
			 $obj->setRefNfe_cUF(mysql_result($rs, $i, 'refNfe_cUF')); 
			 $obj->setRefNfe_AAMM(mysql_result($rs, $i, 'refNfe_AAMM')); 
			 $obj->setRefNfe_CNPJ(mysql_result($rs, $i, 'refNfe_CNPJ')); 
			 $obj->setRefNfe_mod(mysql_result($rs, $i, 'refNfe_mod')); 
			 $obj->setRefNfe_serie(mysql_result($rs, $i, 'refNfe_serie')); 
			 $obj->setRefNfe_nNF(mysql_result($rs, $i, 'refNfe_nNF')); 
			 $obj->setRural_cUF(mysql_result($rs, $i, 'Rural_cUF')); 
			 $obj->setRural_AAMM(mysql_result($rs, $i, 'Rural_AAMM')); 
			 $obj->setRural_CNPJ(mysql_result($rs, $i, 'Rural_CNPJ')); 
			 $obj->setRural_CPF(mysql_result($rs, $i, 'Rural_CPF')); 
			 $obj->setRural_IE(mysql_result($rs, $i, 'Rural_IE')); 
			 $obj->setRural_mod(mysql_result($rs, $i, 'Rural_mod')); 
			 $obj->setRural_serie(mysql_result($rs, $i, 'Rural_serie')); 
			 $obj->setRural_nNF(mysql_result($rs, $i, 'Rural_nNF')); 
			 $obj->setCreref_refCTe(mysql_result($rs, $i, 'Creref_refCTe')); 
			 $obj->setCreref_nECF(mysql_result($rs, $i, 'Creref_nECF')); 
			 $obj->setCreref_nCOO(mysql_result($rs, $i, 'Creref_nCOO')); 
			 $obj->setEcferef_mod(mysql_result($rs, $i, 'Ecferef_mod')); 
			 $obj->setEmit_CNPJ(mysql_result($rs, $i, 'emit_CNPJ')); 
			 $obj->setEmit_xNome(mysql_result($rs, $i, 'emit_xNome')); 
			 $obj->setEmit_xFant(mysql_result($rs, $i, 'emit_xFant')); 
			 $obj->setEmit_IE(mysql_result($rs, $i, 'emit_IE')); 
			 $obj->setEmit_IEST(mysql_result($rs, $i, 'emit_IEST')); 
			 $obj->setEmit_IM(mysql_result($rs, $i, 'emit_IM')); 
			 $obj->setEmit_CNAE(mysql_result($rs, $i, 'emit_CNAE')); 
			 $obj->setEmit_CRT(mysql_result($rs, $i, 'emit_CRT')); 
			 $obj->setEnderEmit_xLgr(mysql_result($rs, $i, 'enderEmit_xLgr')); 
			 $obj->setEnderEmit_nro(mysql_result($rs, $i, 'enderEmit_nro')); 
			 $obj->setEnderEmit_xCpl(mysql_result($rs, $i, 'enderEmit_xCpl')); 
			 $obj->setEnderEmit_xBairro(mysql_result($rs, $i, 'enderEmit_xBairro')); 
			 $obj->setEnderEmit_cMun(mysql_result($rs, $i, 'enderEmit_cMun')); 
			 $obj->setEnderEmit_xMun(mysql_result($rs, $i, 'enderEmit_xMun')); 
			 $obj->setEnderEmit_UF(mysql_result($rs, $i, 'enderEmit_UF')); 
			 $obj->setEnderEmit_CEP(mysql_result($rs, $i, 'enderEmit_CEP')); 
			 $obj->setEnderEmit_cPais(mysql_result($rs, $i, 'enderEmit_cPais')); 
			 $obj->setEnderEmit_xPais(mysql_result($rs, $i, 'enderEmit_xPais')); 
			 $obj->setEnderEmit_fone(mysql_result($rs, $i, 'enderEmit_fone')); 
			 $obj->setDest_CNPJ(mysql_result($rs, $i, 'dest_CNPJ')); 
			 $obj->setDest_CPF(mysql_result($rs, $i, 'dest_CPF')); 
			 $obj->setDest_idEstrangeiro(mysql_result($rs, $i, 'dest_idEstrangeiro')); 
			 $obj->setDest_xNome(mysql_result($rs, $i, 'dest_xNome')); 
			 $obj->setDest_indIEDest(mysql_result($rs, $i, 'dest_indIEDest')); 
			 $obj->setDest_IE(mysql_result($rs, $i, 'dest_IE')); 
			 $obj->setDest_ISUF(mysql_result($rs, $i, 'dest_ISUF')); 
			 $obj->setDest_IM(mysql_result($rs, $i, 'dest_IM')); 
			 $obj->setDest_email(mysql_result($rs, $i, 'dest_email')); 
			 $obj->setEnderDest_xLgr(mysql_result($rs, $i, 'enderDest_xLgr')); 
			 $obj->setEnderDest_nro(mysql_result($rs, $i, 'enderDest_nro')); 
			 $obj->setEnderDest_xCpl(mysql_result($rs, $i, 'enderDest_xCpl')); 
			 $obj->setEnderDest_xBairro(mysql_result($rs, $i, 'enderDest_xBairro')); 
			 $obj->setEnderDest_cMun(mysql_result($rs, $i, 'enderDest_cMun')); 
			 $obj->setEnderDest_xMun(mysql_result($rs, $i, 'enderDest_xMun')); 
			 $obj->setEnderDest_UF(mysql_result($rs, $i, 'enderDest_UF')); 
			 $obj->setEnderDest_CEP(mysql_result($rs, $i, 'enderDest_CEP')); 
			 $obj->setEnderDest_cPais(mysql_result($rs, $i, 'enderDest_cPais')); 
			 $obj->setEnderDest_xPais(mysql_result($rs, $i, 'enderDest_xPais')); 
			 $obj->setEnderDest_fone(mysql_result($rs, $i, 'enderDest_fone')); 
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
			 $obj->setPagT_pagT(mysql_result($rs, $i, 'pagT_pagT')); 
			 $obj->setCobr_nFat(mysql_result($rs, $i, 'cobr_nFat')); 
			 $obj->setCobr_vOrig(mysql_result($rs, $i, 'cobr_vOrig')); 
			 $obj->setCobr_vDesc(mysql_result($rs, $i, 'cobr_vDesc')); 
			 $obj->setCobr_vLiq(mysql_result($rs, $i, 'cobr_vLiq')); 
			 $obj->setDup_nDup(mysql_result($rs, $i, 'dup_nDup')); 
			 $obj->setDup_dVenc(mysql_result($rs, $i, 'dup_dVenc')); 
			 $obj->setDup_vDup(mysql_result($rs, $i, 'dup_vDup')); 
			 $obj->setModfrete_modFrete(mysql_result($rs, $i, 'modfrete_modFrete')); 
			 $obj->setTransp_CNPJ(mysql_result($rs, $i, 'transp_CNPJ')); 
			 $obj->setTransp_CPF(mysql_result($rs, $i, 'transp_CPF')); 
			 $obj->setTransp_xNome(mysql_result($rs, $i, 'transp_xNome')); 
			 $obj->setTransp_IE(mysql_result($rs, $i, 'transp_IE')); 
			 $obj->setTransp_xEnder(mysql_result($rs, $i, 'transp_xEnder')); 
			 $obj->setTransp_xMun(mysql_result($rs, $i, 'transp_xMun')); 
			 $obj->setTransp_UF(mysql_result($rs, $i, 'transp_UF')); 
			 $obj->setRetTransp_vServ(mysql_result($rs, $i, 'retTransp_vServ')); 
			 $obj->setRetTransp_vBCRet(mysql_result($rs, $i, 'retTransp_vBCRet')); 
			 $obj->setRetTransp_pICMSRet(mysql_result($rs, $i, 'retTransp_pICMSRet')); 
			 $obj->setRetTransp_vICMSRet(mysql_result($rs, $i, 'retTransp_vICMSRet')); 
			 $obj->setRetTransp_CFOP(mysql_result($rs, $i, 'retTransp_CFOP')); 
			 $obj->setRetTransp_cMunFG(mysql_result($rs, $i, 'retTransp_cMunFG')); 
			 $obj->setVeicTransp_placa(mysql_result($rs, $i, 'veicTransp_placa')); 
			 $obj->setVeicTransp_UF(mysql_result($rs, $i, 'veicTransp_UF')); 
			 $obj->setVeicTransp_RNTC(mysql_result($rs, $i, 'veicTransp_RNTC')); 
			 $obj->setReboque_placa(mysql_result($rs, $i, 'reboque_placa')); 
			 $obj->setReboque_siglaUF(mysql_result($rs, $i, 'reboque_siglaUF')); 
			 $obj->setReboque_rntc(mysql_result($rs, $i, 'reboque_rntc')); 
			 $obj->setReboque_vagao(mysql_result($rs, $i, 'reboque_vagao')); 
			 $obj->setReboque_balsa(mysql_result($rs, $i, 'reboque_balsa')); 
			 $obj->setVol_qVol(mysql_result($rs, $i, 'Vol_qVol')); 
			 $obj->setVol_esp(mysql_result($rs, $i, 'Vol_esp')); 
			 $obj->setVol_marca(mysql_result($rs, $i, 'Vol_marca')); 
			 $obj->setVol_nVol(mysql_result($rs, $i, 'Vol_nVol')); 
			 $obj->setVol_pesoL(mysql_result($rs, $i, 'Vol_pesoL')); 
			 $obj->setVol_pesoB(mysql_result($rs, $i, 'Vol_pesoB')); 
			 $obj->setVol_aLacres(mysql_result($rs, $i, 'Vol_aLacres')); 
			 $obj->setExporta_UFSaidaPais(mysql_result($rs, $i, 'exporta_UFSaidaPais')); 
			 $obj->setExporta_xLocExporta(mysql_result($rs, $i, 'exporta_xLocExporta')); 
			 $obj->setExporta_xLocDespacho(mysql_result($rs, $i, 'exporta_xLocDespacho')); 
			 $obj->setCompra_xNEmp(mysql_result($rs, $i, 'compra_xNEmp')); 
			 $obj->setCompra_xPed(mysql_result($rs, $i, 'compra_xPed')); 
			 $obj->setCompra_xCont(mysql_result($rs, $i, 'compra_xCont')); 
			 $obj->setDetExport_nItem(mysql_result($rs, $i, 'DetExport_nItem')); 
			 $obj->setDetExport_nDraw(mysql_result($rs, $i, 'DetExport_nDraw')); 
			 $obj->setDetExport_exportInd(mysql_result($rs, $i, 'DetExport_exportInd')); 
			 $obj->setDetExport_nRE(mysql_result($rs, $i, 'DetExport_nRE')); 
			 $obj->setDetExport_chNFe(mysql_result($rs, $i, 'DetExport_chNFe')); 
			 $obj->setDetExport_qExport(mysql_result($rs, $i, 'DetExport_qExport')); 
			 $obj->setObsFisco_xCampo(mysql_result($rs, $i, 'ObsFisco_xCampo')); 
			 $obj->setObsFisco_xTexto(mysql_result($rs, $i, 'ObsFisco_xTexto')); 
			 $obj->setAuxXML_AutXML(mysql_result($rs, $i, 'AuxXML_AutXML')); 
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
			 $obj->setTotal_vFrete(mysql_result($rs, $i, 'total_vFrete')); 
			 $obj->setTotal_vSeg(mysql_result($rs, $i, 'total_vSeg')); 
			 $obj->setTotal_vII(mysql_result($rs, $i, 'total_vII')); 
			 $obj->setTotal_vOutro(mysql_result($rs, $i, 'total_vOutro')); 
			 $obj->setTotal_vtotal(mysql_result($rs, $i, 'total_vtotal')); 
			 $obj->setReltrib_vRetPIS(mysql_result($rs, $i, 'reltrib_vRetPIS')); 
			 $obj->setReltrib_vRetCOFINS(mysql_result($rs, $i, 'reltrib_vRetCOFINS')); 
			 $obj->setReltrib_vRetCSLL(mysql_result($rs, $i, 'reltrib_vRetCSLL')); 
			 $obj->setReltrib_vBCIRRF(mysql_result($rs, $i, 'reltrib_vBCIRRF')); 
			 $obj->setReltrib_vIRRF(mysql_result($rs, $i, 'reltrib_vIRRF')); 
			 $obj->setReltrib_vBCRetPrev(mysql_result($rs, $i, 'reltrib_vBCRetPrev')); 
			 $obj->setReltrib_vRetPrev(mysql_result($rs, $i, 'reltrib_vRetPrev')); 
			 $obj->setCana_safra(mysql_result($rs, $i, 'cana_safra')); 
			 $obj->setCana_ref(mysql_result($rs, $i, 'cana_ref')); 
			 $obj->setFordia_dia(mysql_result($rs, $i, 'fordia_dia')); 
			 $obj->setFordia_qtde(mysql_result($rs, $i, 'fordia_qtde')); 
			 $obj->setFordia_qTotMes(mysql_result($rs, $i, 'fordia_qTotMes')); 
			 $obj->setFordia_qTotAnt(mysql_result($rs, $i, 'fordia_qTotAnt')); 
			 $obj->setFordia_qTotGer(mysql_result($rs, $i, 'fordia_qTotGer')); 
			 $obj->setDeduc_xDed(mysql_result($rs, $i, 'deduc_xDed')); 
			 $obj->setDeduc_vDed(mysql_result($rs, $i, 'deduc_vDed')); 
			 $obj->setDeduc_vFor(mysql_result($rs, $i, 'deduc_vFor')); 
			 $obj->setDeduc_vTotDed(mysql_result($rs, $i, 'deduc_vTotDed')); 
			 $obj->setDeduc_vLiqFor(mysql_result($rs, $i, 'deduc_vLiqFor')); 
			 $obj->setInfAdFisco_infAdFisco(mysql_result($rs, $i, 'infAdFisco_infAdFisco')); 
			 $obj->setInfAdFisco_infCpl(mysql_result($rs, $i, 'infAdFisco_infCpl')); 
			 $obj->setObsCont_xCampo(mysql_result($rs, $i, 'ObsCont_xCampo')); 
			 $obj->setObsCont_xTexto(mysql_result($rs, $i, 'ObsCont_xTexto')); 
			 $obj->setProcRef_nProc(mysql_result($rs, $i, 'procRef_nProc')); 
			 $obj->setProcRef_indProc(mysql_result($rs, $i, 'procRef_indProc')); 
			 $obj->setStatus_nfe(mysql_result($rs, $i, 'status_nfe')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 
	 } 
	 
	 function verificar_periodo($cnpj,$dtini, $dtfim) {
		 $sql = "select count(*) as existe from nfe_dados where nfref_cnpj = '".$cnpj."' 
		 			and data_envio between '".$dtini."' and '".$dtfim."' order by data_envio";  
		$query = mysql_query($sql);
		$dados = mysql_fetch_assoc($query);
		$existe = $dados['existe'];
		return $existe;
	 }

	 
	 
	 function consultar_periodo($cnpj,$dtini, $dtfim,$mod) {
		 $sql = "select * from nfe_dados where Nfref_mod='$mod' and  nfref_cnpj = '".$cnpj."' 
		 			and data_envio between '".$dtini."' and '".$dtfim."' order by data_envio";  

		 $rs = mysql_query($sql); 
		 for($i = 0; $i < mysql_num_rows($rs); $i++){ 
			 $obj = new Nfe_dados(); 
			 $obj->setSeq_nfe(mysql_result($rs, $i, 'seq_nfe')); 
			 $obj->setData_envio(mysql_result($rs, $i, 'data_envio')); 
			 $obj->setMes_ano(mysql_result($rs, $i, 'mes_ano')); 
			 $obj->setIdent_chave(mysql_result($rs, $i, 'ident_chave')); 
			 $obj->setIdent_versao(mysql_result($rs, $i, 'ident_versao')); 
			 $obj->setNfref_CNPJ(mysql_result($rs, $i, 'Nfref_CNPJ')); 
			 $obj->setNfref_aNoMes(mysql_result($rs, $i, 'Nfref_aNoMes')); 
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
			 $obj->setRefNfe_refNFeCh(mysql_result($rs, $i, 'refNfe_refNFeCh')); 
			 $obj->setRefNfe_cUF(mysql_result($rs, $i, 'refNfe_cUF')); 
			 $obj->setRefNfe_AAMM(mysql_result($rs, $i, 'refNfe_AAMM')); 
			 $obj->setRefNfe_CNPJ(mysql_result($rs, $i, 'refNfe_CNPJ')); 
			 $obj->setRefNfe_mod(mysql_result($rs, $i, 'refNfe_mod')); 
			 $obj->setRefNfe_serie(mysql_result($rs, $i, 'refNfe_serie')); 
			 $obj->setRefNfe_nNF(mysql_result($rs, $i, 'refNfe_nNF')); 
			 $obj->setRural_cUF(mysql_result($rs, $i, 'Rural_cUF')); 
			 $obj->setRural_AAMM(mysql_result($rs, $i, 'Rural_AAMM')); 
			 $obj->setRural_CNPJ(mysql_result($rs, $i, 'Rural_CNPJ')); 
			 $obj->setRural_CPF(mysql_result($rs, $i, 'Rural_CPF')); 
			 $obj->setRural_IE(mysql_result($rs, $i, 'Rural_IE')); 
			 $obj->setRural_mod(mysql_result($rs, $i, 'Rural_mod')); 
			 $obj->setRural_serie(mysql_result($rs, $i, 'Rural_serie')); 
			 $obj->setRural_nNF(mysql_result($rs, $i, 'Rural_nNF')); 
			 $obj->setCreref_refCTe(mysql_result($rs, $i, 'Creref_refCTe')); 
			 $obj->setCreref_nECF(mysql_result($rs, $i, 'Creref_nECF')); 
			 $obj->setCreref_nCOO(mysql_result($rs, $i, 'Creref_nCOO')); 
			 $obj->setEcferef_mod(mysql_result($rs, $i, 'Ecferef_mod')); 
			 $obj->setEmit_CNPJ(mysql_result($rs, $i, 'emit_CNPJ')); 
			 $obj->setEmit_xNome(mysql_result($rs, $i, 'emit_xNome')); 
			 $obj->setEmit_xFant(mysql_result($rs, $i, 'emit_xFant')); 
			 $obj->setEmit_IE(mysql_result($rs, $i, 'emit_IE')); 
			 $obj->setEmit_IEST(mysql_result($rs, $i, 'emit_IEST')); 
			 $obj->setEmit_IM(mysql_result($rs, $i, 'emit_IM')); 
			 $obj->setEmit_CNAE(mysql_result($rs, $i, 'emit_CNAE')); 
			 $obj->setEmit_CRT(mysql_result($rs, $i, 'emit_CRT')); 
			 $obj->setEnderEmit_xLgr(mysql_result($rs, $i, 'enderEmit_xLgr')); 
			 $obj->setEnderEmit_nro(mysql_result($rs, $i, 'enderEmit_nro')); 
			 $obj->setEnderEmit_xCpl(mysql_result($rs, $i, 'enderEmit_xCpl')); 
			 $obj->setEnderEmit_xBairro(mysql_result($rs, $i, 'enderEmit_xBairro')); 
			 $obj->setEnderEmit_cMun(mysql_result($rs, $i, 'enderEmit_cMun')); 
			 $obj->setEnderEmit_xMun(mysql_result($rs, $i, 'enderEmit_xMun')); 
			 $obj->setEnderEmit_UF(mysql_result($rs, $i, 'enderEmit_UF')); 
			 $obj->setEnderEmit_CEP(mysql_result($rs, $i, 'enderEmit_CEP')); 
			 $obj->setEnderEmit_cPais(mysql_result($rs, $i, 'enderEmit_cPais')); 
			 $obj->setEnderEmit_xPais(mysql_result($rs, $i, 'enderEmit_xPais')); 
			 $obj->setEnderEmit_fone(mysql_result($rs, $i, 'enderEmit_fone')); 
			 $obj->setDest_CNPJ(mysql_result($rs, $i, 'dest_CNPJ')); 
			 $obj->setDest_CPF(mysql_result($rs, $i, 'dest_CPF')); 
			 $obj->setDest_idEstrangeiro(mysql_result($rs, $i, 'dest_idEstrangeiro')); 
			 $obj->setDest_xNome(mysql_result($rs, $i, 'dest_xNome')); 
			 $obj->setDest_indIEDest(mysql_result($rs, $i, 'dest_indIEDest')); 
			 $obj->setDest_IE(mysql_result($rs, $i, 'dest_IE')); 
			 $obj->setDest_ISUF(mysql_result($rs, $i, 'dest_ISUF')); 
			 $obj->setDest_IM(mysql_result($rs, $i, 'dest_IM')); 
			 $obj->setDest_email(mysql_result($rs, $i, 'dest_email')); 
			 $obj->setEnderDest_xLgr(mysql_result($rs, $i, 'enderDest_xLgr')); 
			 $obj->setEnderDest_nro(mysql_result($rs, $i, 'enderDest_nro')); 
			 $obj->setEnderDest_xCpl(mysql_result($rs, $i, 'enderDest_xCpl')); 
			 $obj->setEnderDest_xBairro(mysql_result($rs, $i, 'enderDest_xBairro')); 
			 $obj->setEnderDest_cMun(mysql_result($rs, $i, 'enderDest_cMun')); 
			 $obj->setEnderDest_xMun(mysql_result($rs, $i, 'enderDest_xMun')); 
			 $obj->setEnderDest_UF(mysql_result($rs, $i, 'enderDest_UF')); 
			 $obj->setEnderDest_CEP(mysql_result($rs, $i, 'enderDest_CEP')); 
			 $obj->setEnderDest_cPais(mysql_result($rs, $i, 'enderDest_cPais')); 
			 $obj->setEnderDest_xPais(mysql_result($rs, $i, 'enderDest_xPais')); 
			 $obj->setEnderDest_fone(mysql_result($rs, $i, 'enderDest_fone')); 
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
			 $obj->setPagT_pagT(mysql_result($rs, $i, 'pagT_pagT')); 
			 $obj->setCobr_nFat(mysql_result($rs, $i, 'cobr_nFat')); 
			 $obj->setCobr_vOrig(mysql_result($rs, $i, 'cobr_vOrig')); 
			 $obj->setCobr_vDesc(mysql_result($rs, $i, 'cobr_vDesc')); 
			 $obj->setCobr_vLiq(mysql_result($rs, $i, 'cobr_vLiq')); 
			 $obj->setDup_nDup(mysql_result($rs, $i, 'dup_nDup')); 
			 $obj->setDup_dVenc(mysql_result($rs, $i, 'dup_dVenc')); 
			 $obj->setDup_vDup(mysql_result($rs, $i, 'dup_vDup')); 
			 $obj->setModfrete_modFrete(mysql_result($rs, $i, 'modfrete_modFrete')); 
			 $obj->setTransp_CNPJ(mysql_result($rs, $i, 'transp_CNPJ')); 
			 $obj->setTransp_CPF(mysql_result($rs, $i, 'transp_CPF')); 
			 $obj->setTransp_xNome(mysql_result($rs, $i, 'transp_xNome')); 
			 $obj->setTransp_IE(mysql_result($rs, $i, 'transp_IE')); 
			 $obj->setTransp_xEnder(mysql_result($rs, $i, 'transp_xEnder')); 
			 $obj->setTransp_xMun(mysql_result($rs, $i, 'transp_xMun')); 
			 $obj->setTransp_UF(mysql_result($rs, $i, 'transp_UF')); 
			 $obj->setRetTransp_vServ(mysql_result($rs, $i, 'retTransp_vServ')); 
			 $obj->setRetTransp_vBCRet(mysql_result($rs, $i, 'retTransp_vBCRet')); 
			 $obj->setRetTransp_pICMSRet(mysql_result($rs, $i, 'retTransp_pICMSRet')); 
			 $obj->setRetTransp_vICMSRet(mysql_result($rs, $i, 'retTransp_vICMSRet')); 
			 $obj->setRetTransp_CFOP(mysql_result($rs, $i, 'retTransp_CFOP')); 
			 $obj->setRetTransp_cMunFG(mysql_result($rs, $i, 'retTransp_cMunFG')); 
			 $obj->setVeicTransp_placa(mysql_result($rs, $i, 'veicTransp_placa')); 
			 $obj->setVeicTransp_UF(mysql_result($rs, $i, 'veicTransp_UF')); 
			 $obj->setVeicTransp_RNTC(mysql_result($rs, $i, 'veicTransp_RNTC')); 
			 $obj->setReboque_placa(mysql_result($rs, $i, 'reboque_placa')); 
			 $obj->setReboque_siglaUF(mysql_result($rs, $i, 'reboque_siglaUF')); 
			 $obj->setReboque_rntc(mysql_result($rs, $i, 'reboque_rntc')); 
			 $obj->setReboque_vagao(mysql_result($rs, $i, 'reboque_vagao')); 
			 $obj->setReboque_balsa(mysql_result($rs, $i, 'reboque_balsa')); 
			 $obj->setVol_qVol(mysql_result($rs, $i, 'Vol_qVol')); 
			 $obj->setVol_esp(mysql_result($rs, $i, 'Vol_esp')); 
			 $obj->setVol_marca(mysql_result($rs, $i, 'Vol_marca')); 
			 $obj->setVol_nVol(mysql_result($rs, $i, 'Vol_nVol')); 
			 $obj->setVol_pesoL(mysql_result($rs, $i, 'Vol_pesoL')); 
			 $obj->setVol_pesoB(mysql_result($rs, $i, 'Vol_pesoB')); 
			 $obj->setVol_aLacres(mysql_result($rs, $i, 'Vol_aLacres')); 
			 $obj->setExporta_UFSaidaPais(mysql_result($rs, $i, 'exporta_UFSaidaPais')); 
			 $obj->setExporta_xLocExporta(mysql_result($rs, $i, 'exporta_xLocExporta')); 
			 $obj->setExporta_xLocDespacho(mysql_result($rs, $i, 'exporta_xLocDespacho')); 
			 $obj->setCompra_xNEmp(mysql_result($rs, $i, 'compra_xNEmp')); 
			 $obj->setCompra_xPed(mysql_result($rs, $i, 'compra_xPed')); 
			 $obj->setCompra_xCont(mysql_result($rs, $i, 'compra_xCont')); 
			 $obj->setDetExport_nItem(mysql_result($rs, $i, 'DetExport_nItem')); 
			 $obj->setDetExport_nDraw(mysql_result($rs, $i, 'DetExport_nDraw')); 
			 $obj->setDetExport_exportInd(mysql_result($rs, $i, 'DetExport_exportInd')); 
			 $obj->setDetExport_nRE(mysql_result($rs, $i, 'DetExport_nRE')); 
			 $obj->setDetExport_chNFe(mysql_result($rs, $i, 'DetExport_chNFe')); 
			 $obj->setDetExport_qExport(mysql_result($rs, $i, 'DetExport_qExport')); 
			 $obj->setObsFisco_xCampo(mysql_result($rs, $i, 'ObsFisco_xCampo')); 
			 $obj->setObsFisco_xTexto(mysql_result($rs, $i, 'ObsFisco_xTexto')); 
			 $obj->setAuxXML_AutXML(mysql_result($rs, $i, 'AuxXML_AutXML')); 
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
			 $obj->setTotal_vFrete(mysql_result($rs, $i, 'total_vFrete')); 
			 $obj->setTotal_vSeg(mysql_result($rs, $i, 'total_vSeg')); 
			 $obj->setTotal_vII(mysql_result($rs, $i, 'total_vII')); 
			 $obj->setTotal_vOutro(mysql_result($rs, $i, 'total_vOutro')); 
			 $obj->setTotal_vtotal(mysql_result($rs, $i, 'total_vtotal')); 
			 $obj->setReltrib_vRetPIS(mysql_result($rs, $i, 'reltrib_vRetPIS')); 
			 $obj->setReltrib_vRetCOFINS(mysql_result($rs, $i, 'reltrib_vRetCOFINS')); 
			 $obj->setReltrib_vRetCSLL(mysql_result($rs, $i, 'reltrib_vRetCSLL')); 
			 $obj->setReltrib_vBCIRRF(mysql_result($rs, $i, 'reltrib_vBCIRRF')); 
			 $obj->setReltrib_vIRRF(mysql_result($rs, $i, 'reltrib_vIRRF')); 
			 $obj->setReltrib_vBCRetPrev(mysql_result($rs, $i, 'reltrib_vBCRetPrev')); 
			 $obj->setReltrib_vRetPrev(mysql_result($rs, $i, 'reltrib_vRetPrev')); 
			 $obj->setCana_safra(mysql_result($rs, $i, 'cana_safra')); 
			 $obj->setCana_ref(mysql_result($rs, $i, 'cana_ref')); 
			 $obj->setFordia_dia(mysql_result($rs, $i, 'fordia_dia')); 
			 $obj->setFordia_qtde(mysql_result($rs, $i, 'fordia_qtde')); 
			 $obj->setFordia_qTotMes(mysql_result($rs, $i, 'fordia_qTotMes')); 
			 $obj->setFordia_qTotAnt(mysql_result($rs, $i, 'fordia_qTotAnt')); 
			 $obj->setFordia_qTotGer(mysql_result($rs, $i, 'fordia_qTotGer')); 
			 $obj->setDeduc_xDed(mysql_result($rs, $i, 'deduc_xDed')); 
			 $obj->setDeduc_vDed(mysql_result($rs, $i, 'deduc_vDed')); 
			 $obj->setDeduc_vFor(mysql_result($rs, $i, 'deduc_vFor')); 
			 $obj->setDeduc_vTotDed(mysql_result($rs, $i, 'deduc_vTotDed')); 
			 $obj->setDeduc_vLiqFor(mysql_result($rs, $i, 'deduc_vLiqFor')); 
			 $obj->setInfAdFisco_infAdFisco(mysql_result($rs, $i, 'infAdFisco_infAdFisco')); 
			 $obj->setInfAdFisco_infCpl(mysql_result($rs, $i, 'infAdFisco_infCpl')); 
			 $obj->setObsCont_xCampo(mysql_result($rs, $i, 'ObsCont_xCampo')); 
			 $obj->setObsCont_xTexto(mysql_result($rs, $i, 'ObsCont_xTexto')); 
			 $obj->setProcRef_nProc(mysql_result($rs, $i, 'procRef_nProc')); 
			 $obj->setProcRef_indProc(mysql_result($rs, $i, 'procRef_indProc')); 
			 $obj->setStatus_nfe(mysql_result($rs, $i, 'status_nfe')); 
			 $objs[$i] = $obj; 
		 } 
		 if(!is_array($objs)){ throw new Exception("");} 
		 return $objs; 	 }
} 
?>