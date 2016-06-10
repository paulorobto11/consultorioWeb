<?php 
 class Tabnfe{ 

	 private $ident_chave; 
	 private $ident_versao; 
	 private $CNPJ; 
	 private $aNoMes; 
	 private $Nfref_cUF; 
	 private $Nfref_cNF; 
	 private $Nfref_natOp; 
	 private $Nfref_indPag; 
	 private $Nfref_mod; 
	 private $Nfref_serie; 
	 private $Nfref_nNF; 
	 private $Nfref_dhEmi; 
	 private $Nfref_dhSaiEnt; 
	 private $Nfref_tpNF; 
	 private $Nfref_idDest; 
	 private $Nfref_cMunFG; 
	 private $Nfref_tpImp; 
	 private $Nfref_tpEmis; 
	 private $Nfref_cDV; 
	 private $Nfref_tpAmb; 
	 private $Nfref_finNFe; 
	 private $Nfref_indFinal; 
	 private $Nfref_indPres; 
	 private $Nfref_procEmi; 
	 private $Nfref_verProc; 
	 private $Nfref_dhCont; 
	 private $Nfref_xJust; 
	 private $refnfe_refNFeCh; 
	 private $refnfe_cUF; 
	 private $refnfe_AAMM; 
	 private $refnfe_CNPJ; 
	 private $refnfe_mod; 
	 private $refnfe_serie; 
	 private $refnfe_nNF; 
	 private $rural_cUF; 
	 private $rural_AAMM; 
	 private $rural_CNPJ; 
	 private $rural_CPF; 
	 private $rural_IE; 
	 private $rural_mod; 
	 private $rural_serie; 
	 private $rural_nNF; 
	 private $cteref_refCTe; 
	 private $cteref_nECF; 
	 private $cteref_nCOO; 
	 private $ecferef_mod; 
	 private $emit_CNPJ; 
	 private $emit_xNome; 
	 private $emit_xFant; 
	 private $emit_IE; 
	 private $emit_IEST; 
	 private $emit_IM; 
	 private $emit_CNAE; 
	 private $emit_CRT; 
	 private $ender_emit_xLgr; 
	 private $ender_emit_nro; 
	 private $ender_emit_xCpl; 
	 private $ender_emit_xBairro; 
	 private $ender_emit_cMun; 
	 private $ender_emit_xMun; 
	 private $ender_emit_UF; 
	 private $ender_emit_CEP; 
	 private $ender_emit_cPais; 
	 private $ender_emit_xPais; 
	 private $ender_emit_fone; 
	 private $det_CNPJ; 
	 private $det_CPF; 
	 private $det_idEstrangeiro; 
	 private $det_xNome; 
	 private $det_indIEDest; 
	 private $det_IE; 
	 private $det_ISUF; 
	 private $det_IM; 
	 private $det_email; 
	 private $ender_dest_xLgr; 
	 private $ender_dest_nro; 
	 private $ender_dest_xCpl; 
	 private $ender_dest_xBairro; 
	 private $ender_dest_cMun; 
	 private $ender_dest_xMun; 
	 private $ender_dest_UF; 
	 private $ender_dest_CEP; 
	 private $ender_dest_cPais; 
	 private $ender_dest_xPais; 
	 private $ender_dest_fone; 
	 private $retirada_CNPJ; 
	 private $retirada_CPF; 
	 private $retirada_xLgr; 
	 private $retirada_nro; 
	 private $retirada_xCpl; 
	 private $retirada_xBairro; 
	 private $retirada_cMun; 
	 private $retirada_xMun; 
	 private $retirada_UF; 
	 private $entrega_CNPJ; 
	 private $entrega_CPF; 
	 private $entrega_xLgr; 
	 private $entrega_nro; 
	 private $entrega_xCpl; 
	 private $entrega_xBairro; 
	 private $entrega_cMun; 
	 private $entrega_xMun; 
	 private $entrega_UF; 
	 private $pag_CNPJ; 
	 private $pag_tBand; 
	 private $pag_cAut; 
	 private $cobr_nFat; 
	 private $cobr_vOrig; 
	 private $cobr_vDesc; 
	 private $cobr_vLiq; 
	 private $pagt_pagT; 
	 private $dup_nDup; 
	 private $dup_dVenc; 
	 private $dup_vDup; 
	 private $modfrete_modFrete; 
	 private $transp_CNPJ; 
	 private $transp_CPF; 
	 private $transp_xNome; 
	 private $transp_IE; 
	 private $transp_xEnder; 
	 private $transp_xMun; 
	 private $transp_UF; 
	 private $ret_transp_vServ; 
	 private $ret_transp_vBCRet; 
	 private $ret_transp_pICMSRet; 
	 private $ret_transp_vICMSRet; 
	 private $ret_transp_CFOP; 
	 private $ret_transp_cMunFG; 
	 private $reboque_placa; 
	 private $reboque_siglaUF; 
	 private $reboque_rntc; 
	 private $reboque_vagao; 
	 private $reboque_balsa; 
	 private $vol_Qvol; 
	 private $vol_Esp; 
	 private $vol_Marca; 
	 private $vol_nVol; 
	 private $vol_pesoL; 
	 private $vol_pesoB; 
	 private $vol_aLacres; 
	 private $exporta_UFSaidaPais; 
	 private $exporta_xLocExporta; 
	 private $exporta_xLocDespacho; 
	 private $compra_xNEmp; 
	 private $compra_xPed; 
	 private $compra_xCont; 
	 private $reboque_aReboque; 
	 private $det_export_nItem; 
	 private $det_export_nDraw; 
	 private $det_export_exportInd; 
	 private $det_export_nRE; 
	 private $det_export_chNFe; 
	 private $det_export_qExport; 
	 private $veic_transp_placa; 
	 private $veic_transp_UF; 
	 private $veic_transp_RNTC; 
	 private $obs_fisco_aObsFisco; 
	 private $autxml_aAutXML; 
	 private $produtos_nItem; 
	 private $produtos_cProd; 
	 private $produtos_cEAN; 
	 private $produtos_xProd; 
	 private $produtos_NCM; 
	 private $produtos_NVE; 
	 private $produtos_EXTIPI; 
	 private $produtos_CFOP; 
	 private $produtos_uCom; 
	 private $produtos_qCom; 
	 private $produtos_vUnCom; 
	 private $produtos_vProd; 
	 private $produtos_cEANTrib; 
	 private $produtos_uTrib; 
	 private $produtos_qTrib; 
	 private $produtos_vUnTrib; 
	 private $produtos_vFrete; 
	 private $produtos_vSeg; 
	 private $produtos_vDesc; 
	 private $produtos_vOutro; 
	 private $produtos_indTot; 
	 private $produtos_xPed; 
	 private $produtos_nItemPed; 
	 private $produtos_nFCI; 
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
	 private $pis_nItem; 
	 private $pis_cst; 
	 private $pis_vBC; 
	 private $pis_pPIS; 
	 private $pis_vPIS; 
	 private $pis_qBCProd; 
	 private $pis_vAliqProd; 
	 private $cofins_nItem; 
	 private $cofins_cst; 
	 private $cofins_vBC; 
	 private $cofins_pCOFINS; 
	 private $cofins_vCOFINS; 
	 private $cofins_qBCProd; 
	 private $cofins_vAliqProd; 
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
	 private $infadic_nItem; 
	 private $infadic_inform; 
	 private $total_vBC; 
	 private $total_vICMS; 
	 private $total_vICMSDeson; 
	 private $total_vBCST; 
	 private $total_vST; 
	 private $total_vProd; 
	 private $total_vDesc; 
	 private $total_vIPI; 
	 private $total_vPIS; 
	 private $total_vCOFINS; 
	 private $total_vNF; 
	 private $total_vFrete; 
	 private $total_vSeg; 
	 private $total_vII; 
	 private $total_vOutro; 
	 private $total_vtotal; 

	 function __construct(){ 
		 $this->ident_chave =  '' ; 
		 $this->ident_versao =  '' ; 
		 $this->CNPJ =  '' ; 
		 $this->aNoMes =  '' ; 
		 $this->Nfref_cUF =  '' ; 
		 $this->Nfref_cNF =  '' ; 
		 $this->Nfref_natOp =  '' ; 
		 $this->Nfref_indPag =  '' ; 
		 $this->Nfref_mod =  '' ; 
		 $this->Nfref_serie =  '' ; 
		 $this->Nfref_nNF =  '' ; 
		 $this->Nfref_dhEmi =  '' ; 
		 $this->Nfref_dhSaiEnt =  '' ; 
		 $this->Nfref_tpNF =  '' ; 
		 $this->Nfref_idDest =  '' ; 
		 $this->Nfref_cMunFG =  '' ; 
		 $this->Nfref_tpImp =  '' ; 
		 $this->Nfref_tpEmis =  '' ; 
		 $this->Nfref_cDV =  '' ; 
		 $this->Nfref_tpAmb =  '' ; 
		 $this->Nfref_finNFe =  '' ; 
		 $this->Nfref_indFinal =  '' ; 
		 $this->Nfref_indPres =  '' ; 
		 $this->Nfref_procEmi =  '' ; 
		 $this->Nfref_verProc =  '' ; 
		 $this->Nfref_dhCont =  '' ; 
		 $this->Nfref_xJust =  '' ; 
		 $this->refnfe_refNFeCh =  '' ; 
		 $this->refnfe_cUF =  '' ; 
		 $this->refnfe_AAMM =  '' ; 
		 $this->refnfe_CNPJ =  '' ; 
		 $this->refnfe_mod =  '' ; 
		 $this->refnfe_serie =  '' ; 
		 $this->refnfe_nNF =  '' ; 
		 $this->rural_cUF =  '' ; 
		 $this->rural_AAMM =  '' ; 
		 $this->rural_CNPJ =  '' ; 
		 $this->rural_CPF =  '' ; 
		 $this->rural_IE =  '' ; 
		 $this->rural_mod =  '' ; 
		 $this->rural_serie =  '' ; 
		 $this->rural_nNF =  '' ; 
		 $this->cteref_refCTe =  '' ; 
		 $this->cteref_nECF =  '' ; 
		 $this->cteref_nCOO =  '' ; 
		 $this->ecferef_mod =  '' ; 
		 $this->emit_CNPJ =  '' ; 
		 $this->emit_xNome =  '' ; 
		 $this->emit_xFant =  '' ; 
		 $this->emit_IE =  '' ; 
		 $this->emit_IEST =  '' ; 
		 $this->emit_IM =  '' ; 
		 $this->emit_CNAE =  '' ; 
		 $this->emit_CRT =  '' ; 
		 $this->ender_emit_xLgr =  '' ; 
		 $this->ender_emit_nro =  '' ; 
		 $this->ender_emit_xCpl =  '' ; 
		 $this->ender_emit_xBairro =  '' ; 
		 $this->ender_emit_cMun =  '' ; 
		 $this->ender_emit_xMun =  '' ; 
		 $this->ender_emit_UF =  '' ; 
		 $this->ender_emit_CEP =  '' ; 
		 $this->ender_emit_cPais =  '' ; 
		 $this->ender_emit_xPais =  '' ; 
		 $this->ender_emit_fone =  '' ; 
		 $this->det_CNPJ =  '' ; 
		 $this->det_CPF =  '' ; 
		 $this->det_idEstrangeiro =  '' ; 
		 $this->det_xNome =  '' ; 
		 $this->det_indIEDest =  '' ; 
		 $this->det_IE =  '' ; 
		 $this->det_ISUF =  '' ; 
		 $this->det_IM =  '' ; 
		 $this->det_email =  '' ; 
		 $this->ender_dest_xLgr =  '' ; 
		 $this->ender_dest_nro =  '' ; 
		 $this->ender_dest_xCpl =  '' ; 
		 $this->ender_dest_xBairro =  '' ; 
		 $this->ender_dest_cMun =  '' ; 
		 $this->ender_dest_xMun =  '' ; 
		 $this->ender_dest_UF =  '' ; 
		 $this->ender_dest_CEP =  '' ; 
		 $this->ender_dest_cPais =  '' ; 
		 $this->ender_dest_xPais =  '' ; 
		 $this->ender_dest_fone =  '' ; 
		 $this->retirada_CNPJ =  '' ; 
		 $this->retirada_CPF =  '' ; 
		 $this->retirada_xLgr =  '' ; 
		 $this->retirada_nro =  '' ; 
		 $this->retirada_xCpl =  '' ; 
		 $this->retirada_xBairro =  '' ; 
		 $this->retirada_cMun =  '' ; 
		 $this->retirada_xMun =  '' ; 
		 $this->retirada_UF =  '' ; 
		 $this->entrega_CNPJ =  '' ; 
		 $this->entrega_CPF =  '' ; 
		 $this->entrega_xLgr =  '' ; 
		 $this->entrega_nro =  '' ; 
		 $this->entrega_xCpl =  '' ; 
		 $this->entrega_xBairro =  '' ; 
		 $this->entrega_cMun =  '' ; 
		 $this->entrega_xMun =  '' ; 
		 $this->entrega_UF =  '' ; 
		 $this->pag_CNPJ =  '' ; 
		 $this->pag_tBand =  '' ; 
		 $this->pag_cAut =  '' ; 
		 $this->cobr_nFat =  '' ; 
		 $this->cobr_vOrig =  '' ; 
		 $this->cobr_vDesc =  '' ; 
		 $this->cobr_vLiq =  '' ; 
		 $this->pagt_pagT =  '' ; 
		 $this->dup_nDup =  '' ; 
		 $this->dup_dVenc =  '' ; 
		 $this->dup_vDup =  '' ; 
		 $this->modfrete_modFrete =  '' ; 
		 $this->transp_CNPJ =  '' ; 
		 $this->transp_CPF =  '' ; 
		 $this->transp_xNome =  '' ; 
		 $this->transp_IE =  '' ; 
		 $this->transp_xEnder =  '' ; 
		 $this->transp_xMun =  '' ; 
		 $this->transp_UF =  '' ; 
		 $this->ret_transp_vServ =  '' ; 
		 $this->ret_transp_vBCRet =  '' ; 
		 $this->ret_transp_pICMSRet =  '' ; 
		 $this->ret_transp_vICMSRet =  '' ; 
		 $this->ret_transp_CFOP =  '' ; 
		 $this->ret_transp_cMunFG =  '' ; 
		 $this->reboque_placa =  '' ; 
		 $this->reboque_siglaUF =  '' ; 
		 $this->reboque_rntc =  '' ; 
		 $this->reboque_vagao =  '' ; 
		 $this->reboque_balsa =  '' ; 
		 $this->vol_Qvol =  '' ; 
		 $this->vol_Esp =  '' ; 
		 $this->vol_Marca =  '' ; 
		 $this->vol_nVol =  '' ; 
		 $this->vol_pesoL =  '' ; 
		 $this->vol_pesoB =  '' ; 
		 $this->vol_aLacres =  '' ; 
		 $this->exporta_UFSaidaPais =  '' ; 
		 $this->exporta_xLocExporta =  '' ; 
		 $this->exporta_xLocDespacho =  '' ; 
		 $this->compra_xNEmp =  '' ; 
		 $this->compra_xPed =  '' ; 
		 $this->compra_xCont =  '' ; 
		 $this->reboque_aReboque =  '' ; 
		 $this->det_export_nItem =  '' ; 
		 $this->det_export_nDraw =  '' ; 
		 $this->det_export_exportInd =  '' ; 
		 $this->det_export_nRE =  '' ; 
		 $this->det_export_chNFe =  '' ; 
		 $this->det_export_qExport =  '' ; 
		 $this->veic_transp_placa =  '' ; 
		 $this->veic_transp_UF =  '' ; 
		 $this->veic_transp_RNTC =  '' ; 
		 $this->obs_fisco_aObsFisco =  '' ; 
		 $this->autxml_aAutXML =  '' ; 
		 $this->produtos_nItem =  '' ; 
		 $this->produtos_cProd =  '' ; 
		 $this->produtos_cEAN =  '' ; 
		 $this->produtos_xProd =  '' ; 
		 $this->produtos_NCM =  '' ; 
		 $this->produtos_NVE =  '' ; 
		 $this->produtos_EXTIPI =  '' ; 
		 $this->produtos_CFOP =  '' ; 
		 $this->produtos_uCom =  '' ; 
		 $this->produtos_qCom =  '' ; 
		 $this->produtos_vUnCom =  '' ; 
		 $this->produtos_vProd =  '' ; 
		 $this->produtos_cEANTrib =  '' ; 
		 $this->produtos_uTrib =  '' ; 
		 $this->produtos_qTrib =  '' ; 
		 $this->produtos_vUnTrib =  '' ; 
		 $this->produtos_vFrete =  '' ; 
		 $this->produtos_vSeg =  '' ; 
		 $this->produtos_vDesc =  '' ; 
		 $this->produtos_vOutro =  '' ; 
		 $this->produtos_indTot =  '' ; 
		 $this->produtos_xPed =  '' ; 
		 $this->produtos_nItemPed =  '' ; 
		 $this->produtos_nFCI =  '' ; 
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
		 $this->pis_nItem =  '' ; 
		 $this->pis_cst =  '' ; 
		 $this->pis_vBC =  '' ; 
		 $this->pis_pPIS =  '' ; 
		 $this->pis_vPIS =  '' ; 
		 $this->pis_qBCProd =  '' ; 
		 $this->pis_vAliqProd =  '' ; 
		 $this->cofins_nItem =  '' ; 
		 $this->cofins_cst =  '' ; 
		 $this->cofins_vBC =  '' ; 
		 $this->cofins_pCOFINS =  '' ; 
		 $this->cofins_vCOFINS =  '' ; 
		 $this->cofins_qBCProd =  '' ; 
		 $this->cofins_vAliqProd =  '' ; 
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
		 $this->infadic_nItem =  '' ; 
		 $this->infadic_inform =  '' ; 
		 $this->total_vBC =  '' ; 
		 $this->total_vICMS =  '' ; 
		 $this->total_vICMSDeson =  '' ; 
		 $this->total_vBCST =  '' ; 
		 $this->total_vST =  '' ; 
		 $this->total_vProd =  '' ; 
		 $this->total_vDesc =  '' ; 
		 $this->total_vIPI =  '' ; 
		 $this->total_vPIS =  '' ; 
		 $this->total_vCOFINS =  '' ; 
		 $this->total_vNF =  '' ; 
		 $this->total_vFrete =  '' ; 
		 $this->total_vSeg =  '' ; 
		 $this->total_vII =  '' ; 
		 $this->total_vOutro =  '' ; 
		 $this->total_vtotal =  '' ; 
	} 

	 function setIdent_chave($value){ 
		 $this->ident_chave = $value; 
	 } 

	 function getIdent_chave(){ 
		 return $this->ident_chave; 
	} 

	 function setIdent_versao($value){ 
		 $this->ident_versao = $value; 
	 } 

	 function getIdent_versao(){ 
		 return $this->ident_versao; 
	} 

	 function setCNPJ($value){ 
		 $this->CNPJ = $value; 
	 } 

	 function getCNPJ(){ 
		 return $this->CNPJ; 
	} 

	 function setANoMes($value){ 
		 $this->aNoMes = $value; 
	 } 

	 function getANoMes(){ 
		 return $this->aNoMes; 
	} 

	 function setNfref_cUF($value){ 
		 $this->Nfref_cUF = $value; 
	 } 

	 function getNfref_cUF(){ 
		 return $this->Nfref_cUF; 
	} 

	 function setNfref_cNF($value){ 
		 $this->Nfref_cNF = $value; 
	 } 

	 function getNfref_cNF(){ 
		 return $this->Nfref_cNF; 
	} 

	 function setNfref_natOp($value){ 
		 $this->Nfref_natOp = $value; 
	 } 

	 function getNfref_natOp(){ 
		 return $this->Nfref_natOp; 
	} 

	 function setNfref_indPag($value){ 
		 $this->Nfref_indPag = $value; 
	 } 

	 function getNfref_indPag(){ 
		 return $this->Nfref_indPag; 
	} 

	 function setNfref_mod($value){ 
		 $this->Nfref_mod = $value; 
	 } 

	 function getNfref_mod(){ 
		 return $this->Nfref_mod; 
	} 

	 function setNfref_serie($value){ 
		 $this->Nfref_serie = $value; 
	 } 

	 function getNfref_serie(){ 
		 return $this->Nfref_serie; 
	} 

	 function setNfref_nNF($value){ 
		 $this->Nfref_nNF = $value; 
	 } 

	 function getNfref_nNF(){ 
		 return $this->Nfref_nNF; 
	} 

	 function setNfref_dhEmi($value){ 
		 $this->Nfref_dhEmi = $value; 
	 } 

	 function getNfref_dhEmi(){ 
		 return $this->Nfref_dhEmi; 
	} 

	 function setNfref_dhSaiEnt($value){ 
		 $this->Nfref_dhSaiEnt = $value; 
	 } 

	 function getNfref_dhSaiEnt(){ 
		 return $this->Nfref_dhSaiEnt; 
	} 

	 function setNfref_tpNF($value){ 
		 $this->Nfref_tpNF = $value; 
	 } 

	 function getNfref_tpNF(){ 
		 return $this->Nfref_tpNF; 
	} 

	 function setNfref_idDest($value){ 
		 $this->Nfref_idDest = $value; 
	 } 

	 function getNfref_idDest(){ 
		 return $this->Nfref_idDest; 
	} 

	 function setNfref_cMunFG($value){ 
		 $this->Nfref_cMunFG = $value; 
	 } 

	 function getNfref_cMunFG(){ 
		 return $this->Nfref_cMunFG; 
	} 

	 function setNfref_tpImp($value){ 
		 $this->Nfref_tpImp = $value; 
	 } 

	 function getNfref_tpImp(){ 
		 return $this->Nfref_tpImp; 
	} 

	 function setNfref_tpEmis($value){ 
		 $this->Nfref_tpEmis = $value; 
	 } 

	 function getNfref_tpEmis(){ 
		 return $this->Nfref_tpEmis; 
	} 

	 function setNfref_cDV($value){ 
		 $this->Nfref_cDV = $value; 
	 } 

	 function getNfref_cDV(){ 
		 return $this->Nfref_cDV; 
	} 

	 function setNfref_tpAmb($value){ 
		 $this->Nfref_tpAmb = $value; 
	 } 

	 function getNfref_tpAmb(){ 
		 return $this->Nfref_tpAmb; 
	} 

	 function setNfref_finNFe($value){ 
		 $this->Nfref_finNFe = $value; 
	 } 

	 function getNfref_finNFe(){ 
		 return $this->Nfref_finNFe; 
	} 

	 function setNfref_indFinal($value){ 
		 $this->Nfref_indFinal = $value; 
	 } 

	 function getNfref_indFinal(){ 
		 return $this->Nfref_indFinal; 
	} 

	 function setNfref_indPres($value){ 
		 $this->Nfref_indPres = $value; 
	 } 

	 function getNfref_indPres(){ 
		 return $this->Nfref_indPres; 
	} 

	 function setNfref_procEmi($value){ 
		 $this->Nfref_procEmi = $value; 
	 } 

	 function getNfref_procEmi(){ 
		 return $this->Nfref_procEmi; 
	} 

	 function setNfref_verProc($value){ 
		 $this->Nfref_verProc = $value; 
	 } 

	 function getNfref_verProc(){ 
		 return $this->Nfref_verProc; 
	} 

	 function setNfref_dhCont($value){ 
		 $this->Nfref_dhCont = $value; 
	 } 

	 function getNfref_dhCont(){ 
		 return $this->Nfref_dhCont; 
	} 

	 function setNfref_xJust($value){ 
		 $this->Nfref_xJust = $value; 
	 } 

	 function getNfref_xJust(){ 
		 return $this->Nfref_xJust; 
	} 

	 function setRefnfe_refNFeCh($value){ 
		 $this->refnfe_refNFeCh = $value; 
	 } 

	 function getRefnfe_refNFeCh(){ 
		 return $this->refnfe_refNFeCh; 
	} 

	 function setRefnfe_cUF($value){ 
		 $this->refnfe_cUF = $value; 
	 } 

	 function getRefnfe_cUF(){ 
		 return $this->refnfe_cUF; 
	} 

	 function setRefnfe_AAMM($value){ 
		 $this->refnfe_AAMM = $value; 
	 } 

	 function getRefnfe_AAMM(){ 
		 return $this->refnfe_AAMM; 
	} 

	 function setRefnfe_CNPJ($value){ 
		 $this->refnfe_CNPJ = $value; 
	 } 

	 function getRefnfe_CNPJ(){ 
		 return $this->refnfe_CNPJ; 
	} 

	 function setRefnfe_mod($value){ 
		 $this->refnfe_mod = $value; 
	 } 

	 function getRefnfe_mod(){ 
		 return $this->refnfe_mod; 
	} 

	 function setRefnfe_serie($value){ 
		 $this->refnfe_serie = $value; 
	 } 

	 function getRefnfe_serie(){ 
		 return $this->refnfe_serie; 
	} 

	 function setRefnfe_nNF($value){ 
		 $this->refnfe_nNF = $value; 
	 } 

	 function getRefnfe_nNF(){ 
		 return $this->refnfe_nNF; 
	} 

	 function setRural_cUF($value){ 
		 $this->rural_cUF = $value; 
	 } 

	 function getRural_cUF(){ 
		 return $this->rural_cUF; 
	} 

	 function setRural_AAMM($value){ 
		 $this->rural_AAMM = $value; 
	 } 

	 function getRural_AAMM(){ 
		 return $this->rural_AAMM; 
	} 

	 function setRural_CNPJ($value){ 
		 $this->rural_CNPJ = $value; 
	 } 

	 function getRural_CNPJ(){ 
		 return $this->rural_CNPJ; 
	} 

	 function setRural_CPF($value){ 
		 $this->rural_CPF = $value; 
	 } 

	 function getRural_CPF(){ 
		 return $this->rural_CPF; 
	} 

	 function setRural_IE($value){ 
		 $this->rural_IE = $value; 
	 } 

	 function getRural_IE(){ 
		 return $this->rural_IE; 
	} 

	 function setRural_mod($value){ 
		 $this->rural_mod = $value; 
	 } 

	 function getRural_mod(){ 
		 return $this->rural_mod; 
	} 

	 function setRural_serie($value){ 
		 $this->rural_serie = $value; 
	 } 

	 function getRural_serie(){ 
		 return $this->rural_serie; 
	} 

	 function setRural_nNF($value){ 
		 $this->rural_nNF = $value; 
	 } 

	 function getRural_nNF(){ 
		 return $this->rural_nNF; 
	} 

	 function setCteref_refCTe($value){ 
		 $this->cteref_refCTe = $value; 
	 } 

	 function getCteref_refCTe(){ 
		 return $this->cteref_refCTe; 
	} 

	 function setCteref_nECF($value){ 
		 $this->cteref_nECF = $value; 
	 } 

	 function getCteref_nECF(){ 
		 return $this->cteref_nECF; 
	} 

	 function setCteref_nCOO($value){ 
		 $this->cteref_nCOO = $value; 
	 } 

	 function getCteref_nCOO(){ 
		 return $this->cteref_nCOO; 
	} 

	 function setEcferef_mod($value){ 
		 $this->ecferef_mod = $value; 
	 } 

	 function getEcferef_mod(){ 
		 return $this->ecferef_mod; 
	} 

	 function setEmit_CNPJ($value){ 
		 $this->emit_CNPJ = $value; 
	 } 

	 function getEmit_CNPJ(){ 
		 return $this->emit_CNPJ; 
	} 

	 function setEmit_xNome($value){ 
		 $this->emit_xNome = $value; 
	 } 

	 function getEmit_xNome(){ 
		 return $this->emit_xNome; 
	} 

	 function setEmit_xFant($value){ 
		 $this->emit_xFant = $value; 
	 } 

	 function getEmit_xFant(){ 
		 return $this->emit_xFant; 
	} 

	 function setEmit_IE($value){ 
		 $this->emit_IE = $value; 
	 } 

	 function getEmit_IE(){ 
		 return $this->emit_IE; 
	} 

	 function setEmit_IEST($value){ 
		 $this->emit_IEST = $value; 
	 } 

	 function getEmit_IEST(){ 
		 return $this->emit_IEST; 
	} 

	 function setEmit_IM($value){ 
		 $this->emit_IM = $value; 
	 } 

	 function getEmit_IM(){ 
		 return $this->emit_IM; 
	} 

	 function setEmit_CNAE($value){ 
		 $this->emit_CNAE = $value; 
	 } 

	 function getEmit_CNAE(){ 
		 return $this->emit_CNAE; 
	} 

	 function setEmit_CRT($value){ 
		 $this->emit_CRT = $value; 
	 } 

	 function getEmit_CRT(){ 
		 return $this->emit_CRT; 
	} 

	 function setEnder_emit_xLgr($value){ 
		 $this->ender_emit_xLgr = $value; 
	 } 

	 function getEnder_emit_xLgr(){ 
		 return $this->ender_emit_xLgr; 
	} 

	 function setEnder_emit_nro($value){ 
		 $this->ender_emit_nro = $value; 
	 } 

	 function getEnder_emit_nro(){ 
		 return $this->ender_emit_nro; 
	} 

	 function setEnder_emit_xCpl($value){ 
		 $this->ender_emit_xCpl = $value; 
	 } 

	 function getEnder_emit_xCpl(){ 
		 return $this->ender_emit_xCpl; 
	} 

	 function setEnder_emit_xBairro($value){ 
		 $this->ender_emit_xBairro = $value; 
	 } 

	 function getEnder_emit_xBairro(){ 
		 return $this->ender_emit_xBairro; 
	} 

	 function setEnder_emit_cMun($value){ 
		 $this->ender_emit_cMun = $value; 
	 } 

	 function getEnder_emit_cMun(){ 
		 return $this->ender_emit_cMun; 
	} 

	 function setEnder_emit_xMun($value){ 
		 $this->ender_emit_xMun = $value; 
	 } 

	 function getEnder_emit_xMun(){ 
		 return $this->ender_emit_xMun; 
	} 

	 function setEnder_emit_UF($value){ 
		 $this->ender_emit_UF = $value; 
	 } 

	 function getEnder_emit_UF(){ 
		 return $this->ender_emit_UF; 
	} 

	 function setEnder_emit_CEP($value){ 
		 $this->ender_emit_CEP = $value; 
	 } 

	 function getEnder_emit_CEP(){ 
		 return $this->ender_emit_CEP; 
	} 

	 function setEnder_emit_cPais($value){ 
		 $this->ender_emit_cPais = $value; 
	 } 

	 function getEnder_emit_cPais(){ 
		 return $this->ender_emit_cPais; 
	} 

	 function setEnder_emit_xPais($value){ 
		 $this->ender_emit_xPais = $value; 
	 } 

	 function getEnder_emit_xPais(){ 
		 return $this->ender_emit_xPais; 
	} 

	 function setEnder_emit_fone($value){ 
		 $this->ender_emit_fone = $value; 
	 } 

	 function getEnder_emit_fone(){ 
		 return $this->ender_emit_fone; 
	} 

	 function setDet_CNPJ($value){ 
		 $this->det_CNPJ = $value; 
	 } 

	 function getDet_CNPJ(){ 
		 return $this->det_CNPJ; 
	} 

	 function setDet_CPF($value){ 
		 $this->det_CPF = $value; 
	 } 

	 function getDet_CPF(){ 
		 return $this->det_CPF; 
	} 

	 function setDet_idEstrangeiro($value){ 
		 $this->det_idEstrangeiro = $value; 
	 } 

	 function getDet_idEstrangeiro(){ 
		 return $this->det_idEstrangeiro; 
	} 

	 function setDet_xNome($value){ 
		 $this->det_xNome = $value; 
	 } 

	 function getDet_xNome(){ 
		 return $this->det_xNome; 
	} 

	 function setDet_indIEDest($value){ 
		 $this->det_indIEDest = $value; 
	 } 

	 function getDet_indIEDest(){ 
		 return $this->det_indIEDest; 
	} 

	 function setDet_IE($value){ 
		 $this->det_IE = $value; 
	 } 

	 function getDet_IE(){ 
		 return $this->det_IE; 
	} 

	 function setDet_ISUF($value){ 
		 $this->det_ISUF = $value; 
	 } 

	 function getDet_ISUF(){ 
		 return $this->det_ISUF; 
	} 

	 function setDet_IM($value){ 
		 $this->det_IM = $value; 
	 } 

	 function getDet_IM(){ 
		 return $this->det_IM; 
	} 

	 function setDet_email($value){ 
		 $this->det_email = $value; 
	 } 

	 function getDet_email(){ 
		 return $this->det_email; 
	} 

	 function setEnder_dest_xLgr($value){ 
		 $this->ender_dest_xLgr = $value; 
	 } 

	 function getEnder_dest_xLgr(){ 
		 return $this->ender_dest_xLgr; 
	} 

	 function setEnder_dest_nro($value){ 
		 $this->ender_dest_nro = $value; 
	 } 

	 function getEnder_dest_nro(){ 
		 return $this->ender_dest_nro; 
	} 

	 function setEnder_dest_xCpl($value){ 
		 $this->ender_dest_xCpl = $value; 
	 } 

	 function getEnder_dest_xCpl(){ 
		 return $this->ender_dest_xCpl; 
	} 

	 function setEnder_dest_xBairro($value){ 
		 $this->ender_dest_xBairro = $value; 
	 } 

	 function getEnder_dest_xBairro(){ 
		 return $this->ender_dest_xBairro; 
	} 

	 function setEnder_dest_cMun($value){ 
		 $this->ender_dest_cMun = $value; 
	 } 

	 function getEnder_dest_cMun(){ 
		 return $this->ender_dest_cMun; 
	} 

	 function setEnder_dest_xMun($value){ 
		 $this->ender_dest_xMun = $value; 
	 } 

	 function getEnder_dest_xMun(){ 
		 return $this->ender_dest_xMun; 
	} 

	 function setEnder_dest_UF($value){ 
		 $this->ender_dest_UF = $value; 
	 } 

	 function getEnder_dest_UF(){ 
		 return $this->ender_dest_UF; 
	} 

	 function setEnder_dest_CEP($value){ 
		 $this->ender_dest_CEP = $value; 
	 } 

	 function getEnder_dest_CEP(){ 
		 return $this->ender_dest_CEP; 
	} 

	 function setEnder_dest_cPais($value){ 
		 $this->ender_dest_cPais = $value; 
	 } 

	 function getEnder_dest_cPais(){ 
		 return $this->ender_dest_cPais; 
	} 

	 function setEnder_dest_xPais($value){ 
		 $this->ender_dest_xPais = $value; 
	 } 

	 function getEnder_dest_xPais(){ 
		 return $this->ender_dest_xPais; 
	} 

	 function setEnder_dest_fone($value){ 
		 $this->ender_dest_fone = $value; 
	 } 

	 function getEnder_dest_fone(){ 
		 return $this->ender_dest_fone; 
	} 

	 function setRetirada_CNPJ($value){ 
		 $this->retirada_CNPJ = $value; 
	 } 

	 function getRetirada_CNPJ(){ 
		 return $this->retirada_CNPJ; 
	} 

	 function setRetirada_CPF($value){ 
		 $this->retirada_CPF = $value; 
	 } 

	 function getRetirada_CPF(){ 
		 return $this->retirada_CPF; 
	} 

	 function setRetirada_xLgr($value){ 
		 $this->retirada_xLgr = $value; 
	 } 

	 function getRetirada_xLgr(){ 
		 return $this->retirada_xLgr; 
	} 

	 function setRetirada_nro($value){ 
		 $this->retirada_nro = $value; 
	 } 

	 function getRetirada_nro(){ 
		 return $this->retirada_nro; 
	} 

	 function setRetirada_xCpl($value){ 
		 $this->retirada_xCpl = $value; 
	 } 

	 function getRetirada_xCpl(){ 
		 return $this->retirada_xCpl; 
	} 

	 function setRetirada_xBairro($value){ 
		 $this->retirada_xBairro = $value; 
	 } 

	 function getRetirada_xBairro(){ 
		 return $this->retirada_xBairro; 
	} 

	 function setRetirada_cMun($value){ 
		 $this->retirada_cMun = $value; 
	 } 

	 function getRetirada_cMun(){ 
		 return $this->retirada_cMun; 
	} 

	 function setRetirada_xMun($value){ 
		 $this->retirada_xMun = $value; 
	 } 

	 function getRetirada_xMun(){ 
		 return $this->retirada_xMun; 
	} 

	 function setRetirada_UF($value){ 
		 $this->retirada_UF = $value; 
	 } 

	 function getRetirada_UF(){ 
		 return $this->retirada_UF; 
	} 

	 function setEntrega_CNPJ($value){ 
		 $this->entrega_CNPJ = $value; 
	 } 

	 function getEntrega_CNPJ(){ 
		 return $this->entrega_CNPJ; 
	} 

	 function setEntrega_CPF($value){ 
		 $this->entrega_CPF = $value; 
	 } 

	 function getEntrega_CPF(){ 
		 return $this->entrega_CPF; 
	} 

	 function setEntrega_xLgr($value){ 
		 $this->entrega_xLgr = $value; 
	 } 

	 function getEntrega_xLgr(){ 
		 return $this->entrega_xLgr; 
	} 

	 function setEntrega_nro($value){ 
		 $this->entrega_nro = $value; 
	 } 

	 function getEntrega_nro(){ 
		 return $this->entrega_nro; 
	} 

	 function setEntrega_xCpl($value){ 
		 $this->entrega_xCpl = $value; 
	 } 

	 function getEntrega_xCpl(){ 
		 return $this->entrega_xCpl; 
	} 

	 function setEntrega_xBairro($value){ 
		 $this->entrega_xBairro = $value; 
	 } 

	 function getEntrega_xBairro(){ 
		 return $this->entrega_xBairro; 
	} 

	 function setEntrega_cMun($value){ 
		 $this->entrega_cMun = $value; 
	 } 

	 function getEntrega_cMun(){ 
		 return $this->entrega_cMun; 
	} 

	 function setEntrega_xMun($value){ 
		 $this->entrega_xMun = $value; 
	 } 

	 function getEntrega_xMun(){ 
		 return $this->entrega_xMun; 
	} 

	 function setEntrega_UF($value){ 
		 $this->entrega_UF = $value; 
	 } 

	 function getEntrega_UF(){ 
		 return $this->entrega_UF; 
	} 

	 function setPag_CNPJ($value){ 
		 $this->pag_CNPJ = $value; 
	 } 

	 function getPag_CNPJ(){ 
		 return $this->pag_CNPJ; 
	} 

	 function setPag_tBand($value){ 
		 $this->pag_tBand = $value; 
	 } 

	 function getPag_tBand(){ 
		 return $this->pag_tBand; 
	} 

	 function setPag_cAut($value){ 
		 $this->pag_cAut = $value; 
	 } 

	 function getPag_cAut(){ 
		 return $this->pag_cAut; 
	} 

	 function setCobr_nFat($value){ 
		 $this->cobr_nFat = $value; 
	 } 

	 function getCobr_nFat(){ 
		 return $this->cobr_nFat; 
	} 

	 function setCobr_vOrig($value){ 
		 $this->cobr_vOrig = $value; 
	 } 

	 function getCobr_vOrig(){ 
		 return $this->cobr_vOrig; 
	} 

	 function setCobr_vDesc($value){ 
		 $this->cobr_vDesc = $value; 
	 } 

	 function getCobr_vDesc(){ 
		 return $this->cobr_vDesc; 
	} 

	 function setCobr_vLiq($value){ 
		 $this->cobr_vLiq = $value; 
	 } 

	 function getCobr_vLiq(){ 
		 return $this->cobr_vLiq; 
	} 

	 function setPagt_pagT($value){ 
		 $this->pagt_pagT = $value; 
	 } 

	 function getPagt_pagT(){ 
		 return $this->pagt_pagT; 
	} 

	 function setDup_nDup($value){ 
		 $this->dup_nDup = $value; 
	 } 

	 function getDup_nDup(){ 
		 return $this->dup_nDup; 
	} 

	 function setDup_dVenc($value){ 
		 $this->dup_dVenc = $value; 
	 } 

	 function getDup_dVenc(){ 
		 return $this->dup_dVenc; 
	} 

	 function setDup_vDup($value){ 
		 $this->dup_vDup = $value; 
	 } 

	 function getDup_vDup(){ 
		 return $this->dup_vDup; 
	} 

	 function setModfrete_modFrete($value){ 
		 $this->modfrete_modFrete = $value; 
	 } 

	 function getModfrete_modFrete(){ 
		 return $this->modfrete_modFrete; 
	} 

	 function setTransp_CNPJ($value){ 
		 $this->transp_CNPJ = $value; 
	 } 

	 function getTransp_CNPJ(){ 
		 return $this->transp_CNPJ; 
	} 

	 function setTransp_CPF($value){ 
		 $this->transp_CPF = $value; 
	 } 

	 function getTransp_CPF(){ 
		 return $this->transp_CPF; 
	} 

	 function setTransp_xNome($value){ 
		 $this->transp_xNome = $value; 
	 } 

	 function getTransp_xNome(){ 
		 return $this->transp_xNome; 
	} 

	 function setTransp_IE($value){ 
		 $this->transp_IE = $value; 
	 } 

	 function getTransp_IE(){ 
		 return $this->transp_IE; 
	} 

	 function setTransp_xEnder($value){ 
		 $this->transp_xEnder = $value; 
	 } 

	 function getTransp_xEnder(){ 
		 return $this->transp_xEnder; 
	} 

	 function setTransp_xMun($value){ 
		 $this->transp_xMun = $value; 
	 } 

	 function getTransp_xMun(){ 
		 return $this->transp_xMun; 
	} 

	 function setTransp_UF($value){ 
		 $this->transp_UF = $value; 
	 } 

	 function getTransp_UF(){ 
		 return $this->transp_UF; 
	} 

	 function setRet_transp_vServ($value){ 
		 $this->ret_transp_vServ = $value; 
	 } 

	 function getRet_transp_vServ(){ 
		 return $this->ret_transp_vServ; 
	} 

	 function setRet_transp_vBCRet($value){ 
		 $this->ret_transp_vBCRet = $value; 
	 } 

	 function getRet_transp_vBCRet(){ 
		 return $this->ret_transp_vBCRet; 
	} 

	 function setRet_transp_pICMSRet($value){ 
		 $this->ret_transp_pICMSRet = $value; 
	 } 

	 function getRet_transp_pICMSRet(){ 
		 return $this->ret_transp_pICMSRet; 
	} 

	 function setRet_transp_vICMSRet($value){ 
		 $this->ret_transp_vICMSRet = $value; 
	 } 

	 function getRet_transp_vICMSRet(){ 
		 return $this->ret_transp_vICMSRet; 
	} 

	 function setRet_transp_CFOP($value){ 
		 $this->ret_transp_CFOP = $value; 
	 } 

	 function getRet_transp_CFOP(){ 
		 return $this->ret_transp_CFOP; 
	} 

	 function setRet_transp_cMunFG($value){ 
		 $this->ret_transp_cMunFG = $value; 
	 } 

	 function getRet_transp_cMunFG(){ 
		 return $this->ret_transp_cMunFG; 
	} 

	 function setReboque_placa($value){ 
		 $this->reboque_placa = $value; 
	 } 

	 function getReboque_placa(){ 
		 return $this->reboque_placa; 
	} 

	 function setReboque_siglaUF($value){ 
		 $this->reboque_siglaUF = $value; 
	 } 

	 function getReboque_siglaUF(){ 
		 return $this->reboque_siglaUF; 
	} 

	 function setReboque_rntc($value){ 
		 $this->reboque_rntc = $value; 
	 } 

	 function getReboque_rntc(){ 
		 return $this->reboque_rntc; 
	} 

	 function setReboque_vagao($value){ 
		 $this->reboque_vagao = $value; 
	 } 

	 function getReboque_vagao(){ 
		 return $this->reboque_vagao; 
	} 

	 function setReboque_balsa($value){ 
		 $this->reboque_balsa = $value; 
	 } 

	 function getReboque_balsa(){ 
		 return $this->reboque_balsa; 
	} 

	 function setVol_Qvol($value){ 
		 $this->vol_Qvol = $value; 
	 } 

	 function getVol_Qvol(){ 
		 return $this->vol_Qvol; 
	} 

	 function setVol_Esp($value){ 
		 $this->vol_Esp = $value; 
	 } 

	 function getVol_Esp(){ 
		 return $this->vol_Esp; 
	} 

	 function setVol_Marca($value){ 
		 $this->vol_Marca = $value; 
	 } 

	 function getVol_Marca(){ 
		 return $this->vol_Marca; 
	} 

	 function setVol_nVol($value){ 
		 $this->vol_nVol = $value; 
	 } 

	 function getVol_nVol(){ 
		 return $this->vol_nVol; 
	} 

	 function setVol_pesoL($value){ 
		 $this->vol_pesoL = $value; 
	 } 

	 function getVol_pesoL(){ 
		 return $this->vol_pesoL; 
	} 

	 function setVol_pesoB($value){ 
		 $this->vol_pesoB = $value; 
	 } 

	 function getVol_pesoB(){ 
		 return $this->vol_pesoB; 
	} 

	 function setVol_aLacres($value){ 
		 $this->vol_aLacres = $value; 
	 } 

	 function getVol_aLacres(){ 
		 return $this->vol_aLacres; 
	} 

	 function setExporta_UFSaidaPais($value){ 
		 $this->exporta_UFSaidaPais = $value; 
	 } 

	 function getExporta_UFSaidaPais(){ 
		 return $this->exporta_UFSaidaPais; 
	} 

	 function setExporta_xLocExporta($value){ 
		 $this->exporta_xLocExporta = $value; 
	 } 

	 function getExporta_xLocExporta(){ 
		 return $this->exporta_xLocExporta; 
	} 

	 function setExporta_xLocDespacho($value){ 
		 $this->exporta_xLocDespacho = $value; 
	 } 

	 function getExporta_xLocDespacho(){ 
		 return $this->exporta_xLocDespacho; 
	} 

	 function setCompra_xNEmp($value){ 
		 $this->compra_xNEmp = $value; 
	 } 

	 function getCompra_xNEmp(){ 
		 return $this->compra_xNEmp; 
	} 

	 function setCompra_xPed($value){ 
		 $this->compra_xPed = $value; 
	 } 

	 function getCompra_xPed(){ 
		 return $this->compra_xPed; 
	} 

	 function setCompra_xCont($value){ 
		 $this->compra_xCont = $value; 
	 } 

	 function getCompra_xCont(){ 
		 return $this->compra_xCont; 
	} 

	 function setReboque_aReboque($value){ 
		 $this->reboque_aReboque = $value; 
	 } 

	 function getReboque_aReboque(){ 
		 return $this->reboque_aReboque; 
	} 

	 function setDet_export_nItem($value){ 
		 $this->det_export_nItem = $value; 
	 } 

	 function getDet_export_nItem(){ 
		 return $this->det_export_nItem; 
	} 

	 function setDet_export_nDraw($value){ 
		 $this->det_export_nDraw = $value; 
	 } 

	 function getDet_export_nDraw(){ 
		 return $this->det_export_nDraw; 
	} 

	 function setDet_export_exportInd($value){ 
		 $this->det_export_exportInd = $value; 
	 } 

	 function getDet_export_exportInd(){ 
		 return $this->det_export_exportInd; 
	} 

	 function setDet_export_nRE($value){ 
		 $this->det_export_nRE = $value; 
	 } 

	 function getDet_export_nRE(){ 
		 return $this->det_export_nRE; 
	} 

	 function setDet_export_chNFe($value){ 
		 $this->det_export_chNFe = $value; 
	 } 

	 function getDet_export_chNFe(){ 
		 return $this->det_export_chNFe; 
	} 

	 function setDet_export_qExport($value){ 
		 $this->det_export_qExport = $value; 
	 } 

	 function getDet_export_qExport(){ 
		 return $this->det_export_qExport; 
	} 

	 function setVeic_transp_placa($value){ 
		 $this->veic_transp_placa = $value; 
	 } 

	 function getVeic_transp_placa(){ 
		 return $this->veic_transp_placa; 
	} 

	 function setVeic_transp_UF($value){ 
		 $this->veic_transp_UF = $value; 
	 } 

	 function getVeic_transp_UF(){ 
		 return $this->veic_transp_UF; 
	} 

	 function setVeic_transp_RNTC($value){ 
		 $this->veic_transp_RNTC = $value; 
	 } 

	 function getVeic_transp_RNTC(){ 
		 return $this->veic_transp_RNTC; 
	} 

	 function setObs_fisco_aObsFisco($value){ 
		 $this->obs_fisco_aObsFisco = $value; 
	 } 

	 function getObs_fisco_aObsFisco(){ 
		 return $this->obs_fisco_aObsFisco; 
	} 

	 function setAutxml_aAutXML($value){ 
		 $this->autxml_aAutXML = $value; 
	 } 

	 function getAutxml_aAutXML(){ 
		 return $this->autxml_aAutXML; 
	} 

	 function setProdutos_nItem($value){ 
		 $this->produtos_nItem = $value; 
	 } 

	 function getProdutos_nItem(){ 
		 return $this->produtos_nItem; 
	} 

	 function setProdutos_cProd($value){ 
		 $this->produtos_cProd = $value; 
	 } 

	 function getProdutos_cProd(){ 
		 return $this->produtos_cProd; 
	} 

	 function setProdutos_cEAN($value){ 
		 $this->produtos_cEAN = $value; 
	 } 

	 function getProdutos_cEAN(){ 
		 return $this->produtos_cEAN; 
	} 

	 function setProdutos_xProd($value){ 
		 $this->produtos_xProd = $value; 
	 } 

	 function getProdutos_xProd(){ 
		 return $this->produtos_xProd; 
	} 

	 function setProdutos_NCM($value){ 
		 $this->produtos_NCM = $value; 
	 } 

	 function getProdutos_NCM(){ 
		 return $this->produtos_NCM; 
	} 

	 function setProdutos_NVE($value){ 
		 $this->produtos_NVE = $value; 
	 } 

	 function getProdutos_NVE(){ 
		 return $this->produtos_NVE; 
	} 

	 function setProdutos_EXTIPI($value){ 
		 $this->produtos_EXTIPI = $value; 
	 } 

	 function getProdutos_EXTIPI(){ 
		 return $this->produtos_EXTIPI; 
	} 

	 function setProdutos_CFOP($value){ 
		 $this->produtos_CFOP = $value; 
	 } 

	 function getProdutos_CFOP(){ 
		 return $this->produtos_CFOP; 
	} 

	 function setProdutos_uCom($value){ 
		 $this->produtos_uCom = $value; 
	 } 

	 function getProdutos_uCom(){ 
		 return $this->produtos_uCom; 
	} 

	 function setProdutos_qCom($value){ 
		 $this->produtos_qCom = $value; 
	 } 

	 function getProdutos_qCom(){ 
		 return $this->produtos_qCom; 
	} 

	 function setProdutos_vUnCom($value){ 
		 $this->produtos_vUnCom = $value; 
	 } 

	 function getProdutos_vUnCom(){ 
		 return $this->produtos_vUnCom; 
	} 

	 function setProdutos_vProd($value){ 
		 $this->produtos_vProd = $value; 
	 } 

	 function getProdutos_vProd(){ 
		 return $this->produtos_vProd; 
	} 

	 function setProdutos_cEANTrib($value){ 
		 $this->produtos_cEANTrib = $value; 
	 } 

	 function getProdutos_cEANTrib(){ 
		 return $this->produtos_cEANTrib; 
	} 

	 function setProdutos_uTrib($value){ 
		 $this->produtos_uTrib = $value; 
	 } 

	 function getProdutos_uTrib(){ 
		 return $this->produtos_uTrib; 
	} 

	 function setProdutos_qTrib($value){ 
		 $this->produtos_qTrib = $value; 
	 } 

	 function getProdutos_qTrib(){ 
		 return $this->produtos_qTrib; 
	} 

	 function setProdutos_vUnTrib($value){ 
		 $this->produtos_vUnTrib = $value; 
	 } 

	 function getProdutos_vUnTrib(){ 
		 return $this->produtos_vUnTrib; 
	} 

	 function setProdutos_vFrete($value){ 
		 $this->produtos_vFrete = $value; 
	 } 

	 function getProdutos_vFrete(){ 
		 return $this->produtos_vFrete; 
	} 

	 function setProdutos_vSeg($value){ 
		 $this->produtos_vSeg = $value; 
	 } 

	 function getProdutos_vSeg(){ 
		 return $this->produtos_vSeg; 
	} 

	 function setProdutos_vDesc($value){ 
		 $this->produtos_vDesc = $value; 
	 } 

	 function getProdutos_vDesc(){ 
		 return $this->produtos_vDesc; 
	} 

	 function setProdutos_vOutro($value){ 
		 $this->produtos_vOutro = $value; 
	 } 

	 function getProdutos_vOutro(){ 
		 return $this->produtos_vOutro; 
	} 

	 function setProdutos_indTot($value){ 
		 $this->produtos_indTot = $value; 
	 } 

	 function getProdutos_indTot(){ 
		 return $this->produtos_indTot; 
	} 

	 function setProdutos_xPed($value){ 
		 $this->produtos_xPed = $value; 
	 } 

	 function getProdutos_xPed(){ 
		 return $this->produtos_xPed; 
	} 

	 function setProdutos_nItemPed($value){ 
		 $this->produtos_nItemPed = $value; 
	 } 

	 function getProdutos_nItemPed(){ 
		 return $this->produtos_nItemPed; 
	} 

	 function setProdutos_nFCI($value){ 
		 $this->produtos_nFCI = $value; 
	 } 

	 function getProdutos_nFCI(){ 
		 return $this->produtos_nFCI; 
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

	 function setInfadic_nItem($value){ 
		 $this->infadic_nItem = $value; 
	 } 

	 function getInfadic_nItem(){ 
		 return $this->infadic_nItem; 
	} 

	 function setInfadic_inform($value){ 
		 $this->infadic_inform = $value; 
	 } 

	 function getInfadic_inform(){ 
		 return $this->infadic_inform; 
	} 

	 function setTotal_vBC($value){ 
		 $this->total_vBC = $value; 
	 } 

	 function getTotal_vBC(){ 
		 return $this->total_vBC; 
	} 

	 function setTotal_vICMS($value){ 
		 $this->total_vICMS = $value; 
	 } 

	 function getTotal_vICMS(){ 
		 return $this->total_vICMS; 
	} 

	 function setTotal_vICMSDeson($value){ 
		 $this->total_vICMSDeson = $value; 
	 } 

	 function getTotal_vICMSDeson(){ 
		 return $this->total_vICMSDeson; 
	} 

	 function setTotal_vBCST($value){ 
		 $this->total_vBCST = $value; 
	 } 

	 function getTotal_vBCST(){ 
		 return $this->total_vBCST; 
	} 

	 function setTotal_vST($value){ 
		 $this->total_vST = $value; 
	 } 

	 function getTotal_vST(){ 
		 return $this->total_vST; 
	} 

	 function setTotal_vProd($value){ 
		 $this->total_vProd = $value; 
	 } 

	 function getTotal_vProd(){ 
		 return $this->total_vProd; 
	} 

	 function setTotal_vDesc($value){ 
		 $this->total_vDesc = $value; 
	 } 

	 function getTotal_vDesc(){ 
		 return $this->total_vDesc; 
	} 

	 function setTotal_vIPI($value){ 
		 $this->total_vIPI = $value; 
	 } 

	 function getTotal_vIPI(){ 
		 return $this->total_vIPI; 
	} 

	 function setTotal_vPIS($value){ 
		 $this->total_vPIS = $value; 
	 } 

	 function getTotal_vPIS(){ 
		 return $this->total_vPIS; 
	} 

	 function setTotal_vCOFINS($value){ 
		 $this->total_vCOFINS = $value; 
	 } 

	 function getTotal_vCOFINS(){ 
		 return $this->total_vCOFINS; 
	} 

	 function setTotal_vNF($value){ 
		 $this->total_vNF = $value; 
	 } 

	 function getTotal_vNF(){ 
		 return $this->total_vNF; 
	} 

	 function setTotal_vFrete($value){ 
		 $this->total_vFrete = $value; 
	 } 

	 function getTotal_vFrete(){ 
		 return $this->total_vFrete; 
	} 

	 function setTotal_vSeg($value){ 
		 $this->total_vSeg = $value; 
	 } 

	 function getTotal_vSeg(){ 
		 return $this->total_vSeg; 
	} 

	 function setTotal_vII($value){ 
		 $this->total_vII = $value; 
	 } 

	 function getTotal_vII(){ 
		 return $this->total_vII; 
	} 

	 function setTotal_vOutro($value){ 
		 $this->total_vOutro = $value; 
	 } 

	 function getTotal_vOutro(){ 
		 return $this->total_vOutro; 
	} 

	 function setTotal_vtotal($value){ 
		 $this->total_vtotal = $value; 
	 } 

	 function getTotal_vtotal(){ 
		 return $this->total_vtotal; 
	} 

} 
 ?>