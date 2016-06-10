<?php 
 class Nfe_dados{ 

	 private $seq_nfe; 
	 private $data_envio; 
	 private $mes_ano; 
	 private $ident_chave; 
	 private $ident_versao; 
	 private $Nfref_CNPJ; 
	 private $Nfref_aNoMes; 
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
	 private $refNfe_refNFeCh; 
	 private $refNfe_cUF; 
	 private $refNfe_AAMM; 
	 private $refNfe_CNPJ; 
	 private $refNfe_mod; 
	 private $refNfe_serie; 
	 private $refNfe_nNF; 
	 private $Rural_cUF; 
	 private $Rural_AAMM; 
	 private $Rural_CNPJ; 
	 private $Rural_CPF; 
	 private $Rural_IE; 
	 private $Rural_mod; 
	 private $Rural_serie; 
	 private $Rural_nNF; 
	 private $Creref_refCTe; 
	 private $Creref_nECF; 
	 private $Creref_nCOO; 
	 private $Ecferef_mod; 
	 private $emit_CNPJ; 
	 private $emit_xNome; 
	 private $emit_xFant; 
	 private $emit_IE; 
	 private $emit_IEST; 
	 private $emit_IM; 
	 private $emit_CNAE; 
	 private $emit_CRT; 
	 private $enderEmit_xLgr; 
	 private $enderEmit_nro; 
	 private $enderEmit_xCpl; 
	 private $enderEmit_xBairro; 
	 private $enderEmit_cMun; 
	 private $enderEmit_xMun; 
	 private $enderEmit_UF; 
	 private $enderEmit_CEP; 
	 private $enderEmit_cPais; 
	 private $enderEmit_xPais; 
	 private $enderEmit_fone; 
	 private $dest_CNPJ; 
	 private $dest_CPF; 
	 private $dest_idEstrangeiro; 
	 private $dest_xNome; 
	 private $dest_indIEDest; 
	 private $dest_IE; 
	 private $dest_ISUF; 
	 private $dest_IM; 
	 private $dest_email; 
	 private $enderDest_xLgr; 
	 private $enderDest_nro; 
	 private $enderDest_xCpl; 
	 private $enderDest_xBairro; 
	 private $enderDest_cMun; 
	 private $enderDest_xMun; 
	 private $enderDest_UF; 
	 private $enderDest_CEP; 
	 private $enderDest_cPais; 
	 private $enderDest_xPais; 
	 private $enderDest_fone; 
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
	 private $pagT_pagT; 
	 private $cobr_nFat; 
	 private $cobr_vOrig; 
	 private $cobr_vDesc; 
	 private $cobr_vLiq; 
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
	 private $retTransp_vServ; 
	 private $retTransp_vBCRet; 
	 private $retTransp_pICMSRet; 
	 private $retTransp_vICMSRet; 
	 private $retTransp_CFOP; 
	 private $retTransp_cMunFG; 
	 private $veicTransp_placa; 
	 private $veicTransp_UF; 
	 private $veicTransp_RNTC; 
	 private $reboque_placa; 
	 private $reboque_siglaUF; 
	 private $reboque_rntc; 
	 private $reboque_vagao; 
	 private $reboque_balsa; 
	 private $Vol_qVol; 
	 private $Vol_esp; 
	 private $Vol_marca; 
	 private $Vol_nVol; 
	 private $Vol_pesoL; 
	 private $Vol_pesoB; 
	 private $Vol_aLacres; 
	 private $exporta_UFSaidaPais; 
	 private $exporta_xLocExporta; 
	 private $exporta_xLocDespacho; 
	 private $compra_xNEmp; 
	 private $compra_xPed; 
	 private $compra_xCont; 
	 private $DetExport_nItem; 
	 private $DetExport_nDraw; 
	 private $DetExport_exportInd; 
	 private $DetExport_nRE; 
	 private $DetExport_chNFe; 
	 private $DetExport_qExport; 
	 private $ObsFisco_xCampo; 
	 private $ObsFisco_xTexto; 
	 private $AuxXML_AutXML; 
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
	 private $total_vFrete; 
	 private $total_vSeg; 
	 private $total_vII; 
	 private $total_vOutro; 
	 private $total_vtotal; 
	 private $reltrib_vRetPIS; 
	 private $reltrib_vRetCOFINS; 
	 private $reltrib_vRetCSLL; 
	 private $reltrib_vBCIRRF; 
	 private $reltrib_vIRRF; 
	 private $reltrib_vBCRetPrev; 
	 private $reltrib_vRetPrev; 
	 private $cana_safra; 
	 private $cana_ref; 
	 private $fordia_dia; 
	 private $fordia_qtde; 
	 private $fordia_qTotMes; 
	 private $fordia_qTotAnt; 
	 private $fordia_qTotGer; 
	 private $deduc_xDed; 
	 private $deduc_vDed; 
	 private $deduc_vFor; 
	 private $deduc_vTotDed; 
	 private $deduc_vLiqFor; 
	 private $infAdFisco_infAdFisco; 
	 private $infAdFisco_infCpl; 
	 private $ObsCont_xCampo; 
	 private $ObsCont_xTexto; 
	 private $procRef_nProc; 
	 private $procRef_indProc; 
	 private $status_nfe; 

	 function __construct(){ 
		 $this->seq_nfe =  '' ; 
		 $this->data_envio =  '' ; 
		 $this->mes_ano =  '' ; 
		 $this->ident_chave =  '' ; 
		 $this->ident_versao =  '' ; 
		 $this->Nfref_CNPJ =  '' ; 
		 $this->Nfref_aNoMes =  '' ; 
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
		 $this->refNfe_refNFeCh =  '' ; 
		 $this->refNfe_cUF =  '' ; 
		 $this->refNfe_AAMM =  '' ; 
		 $this->refNfe_CNPJ =  '' ; 
		 $this->refNfe_mod =  '' ; 
		 $this->refNfe_serie =  '' ; 
		 $this->refNfe_nNF =  '' ; 
		 $this->Rural_cUF =  '' ; 
		 $this->Rural_AAMM =  '' ; 
		 $this->Rural_CNPJ =  '' ; 
		 $this->Rural_CPF =  '' ; 
		 $this->Rural_IE =  '' ; 
		 $this->Rural_mod =  '' ; 
		 $this->Rural_serie =  '' ; 
		 $this->Rural_nNF =  '' ; 
		 $this->Creref_refCTe =  '' ; 
		 $this->Creref_nECF =  '' ; 
		 $this->Creref_nCOO =  '' ; 
		 $this->Ecferef_mod =  '' ; 
		 $this->emit_CNPJ =  '' ; 
		 $this->emit_xNome =  '' ; 
		 $this->emit_xFant =  '' ; 
		 $this->emit_IE =  '' ; 
		 $this->emit_IEST =  '' ; 
		 $this->emit_IM =  '' ; 
		 $this->emit_CNAE =  '' ; 
		 $this->emit_CRT =  '' ; 
		 $this->enderEmit_xLgr =  '' ; 
		 $this->enderEmit_nro =  '' ; 
		 $this->enderEmit_xCpl =  '' ; 
		 $this->enderEmit_xBairro =  '' ; 
		 $this->enderEmit_cMun =  '' ; 
		 $this->enderEmit_xMun =  '' ; 
		 $this->enderEmit_UF =  '' ; 
		 $this->enderEmit_CEP =  '' ; 
		 $this->enderEmit_cPais =  '' ; 
		 $this->enderEmit_xPais =  '' ; 
		 $this->enderEmit_fone =  '' ; 
		 $this->dest_CNPJ =  '' ; 
		 $this->dest_CPF =  '' ; 
		 $this->dest_idEstrangeiro =  '' ; 
		 $this->dest_xNome =  '' ; 
		 $this->dest_indIEDest =  '' ; 
		 $this->dest_IE =  '' ; 
		 $this->dest_ISUF =  '' ; 
		 $this->dest_IM =  '' ; 
		 $this->dest_email =  '' ; 
		 $this->enderDest_xLgr =  '' ; 
		 $this->enderDest_nro =  '' ; 
		 $this->enderDest_xCpl =  '' ; 
		 $this->enderDest_xBairro =  '' ; 
		 $this->enderDest_cMun =  '' ; 
		 $this->enderDest_xMun =  '' ; 
		 $this->enderDest_UF =  '' ; 
		 $this->enderDest_CEP =  '' ; 
		 $this->enderDest_cPais =  '' ; 
		 $this->enderDest_xPais =  '' ; 
		 $this->enderDest_fone =  '' ; 
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
		 $this->pagT_pagT =  '' ; 
		 $this->cobr_nFat =  '' ; 
		 $this->cobr_vOrig =  '' ; 
		 $this->cobr_vDesc =  '' ; 
		 $this->cobr_vLiq =  '' ; 
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
		 $this->retTransp_vServ =  '' ; 
		 $this->retTransp_vBCRet =  '' ; 
		 $this->retTransp_pICMSRet =  '' ; 
		 $this->retTransp_vICMSRet =  '' ; 
		 $this->retTransp_CFOP =  '' ; 
		 $this->retTransp_cMunFG =  '' ; 
		 $this->veicTransp_placa =  '' ; 
		 $this->veicTransp_UF =  '' ; 
		 $this->veicTransp_RNTC =  '' ; 
		 $this->reboque_placa =  '' ; 
		 $this->reboque_siglaUF =  '' ; 
		 $this->reboque_rntc =  '' ; 
		 $this->reboque_vagao =  '' ; 
		 $this->reboque_balsa =  '' ; 
		 $this->Vol_qVol =  '' ; 
		 $this->Vol_esp =  '' ; 
		 $this->Vol_marca =  '' ; 
		 $this->Vol_nVol =  '' ; 
		 $this->Vol_pesoL =  '' ; 
		 $this->Vol_pesoB =  '' ; 
		 $this->Vol_aLacres =  '' ; 
		 $this->exporta_UFSaidaPais =  '' ; 
		 $this->exporta_xLocExporta =  '' ; 
		 $this->exporta_xLocDespacho =  '' ; 
		 $this->compra_xNEmp =  '' ; 
		 $this->compra_xPed =  '' ; 
		 $this->compra_xCont =  '' ; 
		 $this->DetExport_nItem =  '' ; 
		 $this->DetExport_nDraw =  '' ; 
		 $this->DetExport_exportInd =  '' ; 
		 $this->DetExport_nRE =  '' ; 
		 $this->DetExport_chNFe =  '' ; 
		 $this->DetExport_qExport =  '' ; 
		 $this->ObsFisco_xCampo =  '' ; 
		 $this->ObsFisco_xTexto =  '' ; 
		 $this->AuxXML_AutXML =  '' ; 
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
		 $this->total_vFrete =  '' ; 
		 $this->total_vSeg =  '' ; 
		 $this->total_vII =  '' ; 
		 $this->total_vOutro =  '' ; 
		 $this->total_vtotal =  '' ; 
		 $this->reltrib_vRetPIS =  '' ; 
		 $this->reltrib_vRetCOFINS =  '' ; 
		 $this->reltrib_vRetCSLL =  '' ; 
		 $this->reltrib_vBCIRRF =  '' ; 
		 $this->reltrib_vIRRF =  '' ; 
		 $this->reltrib_vBCRetPrev =  '' ; 
		 $this->reltrib_vRetPrev =  '' ; 
		 $this->cana_safra =  '' ; 
		 $this->cana_ref =  '' ; 
		 $this->fordia_dia =  '' ; 
		 $this->fordia_qtde =  '' ; 
		 $this->fordia_qTotMes =  '' ; 
		 $this->fordia_qTotAnt =  '' ; 
		 $this->fordia_qTotGer =  '' ; 
		 $this->deduc_xDed =  '' ; 
		 $this->deduc_vDed =  '' ; 
		 $this->deduc_vFor =  '' ; 
		 $this->deduc_vTotDed =  '' ; 
		 $this->deduc_vLiqFor =  '' ; 
		 $this->infAdFisco_infAdFisco =  '' ; 
		 $this->infAdFisco_infCpl =  '' ; 
		 $this->ObsCont_xCampo =  '' ; 
		 $this->ObsCont_xTexto =  '' ; 
		 $this->procRef_nProc =  '' ; 
		 $this->procRef_indProc =  '' ; 
		 $this->status_nfe =  '' ; 
	} 

	 function setSeq_nfe($value){ 
		 $this->seq_nfe = $value; 
	 } 

	 function getSeq_nfe(){ 
		 return $this->seq_nfe; 
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

	 function setNfref_CNPJ($value){ 
		 $this->Nfref_CNPJ = $value; 
	 } 

	 function getNfref_CNPJ(){ 
		 return $this->Nfref_CNPJ; 
	} 

	 function setNfref_aNoMes($value){ 
		 $this->Nfref_aNoMes = $value; 
	 } 

	 function getNfref_aNoMes(){ 
		 return $this->Nfref_aNoMes; 
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

	 function setRefNfe_refNFeCh($value){ 
		 $this->refNfe_refNFeCh = $value; 
	 } 

	 function getRefNfe_refNFeCh(){ 
		 return $this->refNfe_refNFeCh; 
	} 

	 function setRefNfe_cUF($value){ 
		 $this->refNfe_cUF = $value; 
	 } 

	 function getRefNfe_cUF(){ 
		 return $this->refNfe_cUF; 
	} 

	 function setRefNfe_AAMM($value){ 
		 $this->refNfe_AAMM = $value; 
	 } 

	 function getRefNfe_AAMM(){ 
		 return $this->refNfe_AAMM; 
	} 

	 function setRefNfe_CNPJ($value){ 
		 $this->refNfe_CNPJ = $value; 
	 } 

	 function getRefNfe_CNPJ(){ 
		 return $this->refNfe_CNPJ; 
	} 

	 function setRefNfe_mod($value){ 
		 $this->refNfe_mod = $value; 
	 } 

	 function getRefNfe_mod(){ 
		 return $this->refNfe_mod; 
	} 

	 function setRefNfe_serie($value){ 
		 $this->refNfe_serie = $value; 
	 } 

	 function getRefNfe_serie(){ 
		 return $this->refNfe_serie; 
	} 

	 function setRefNfe_nNF($value){ 
		 $this->refNfe_nNF = $value; 
	 } 

	 function getRefNfe_nNF(){ 
		 return $this->refNfe_nNF; 
	} 

	 function setRural_cUF($value){ 
		 $this->Rural_cUF = $value; 
	 } 

	 function getRural_cUF(){ 
		 return $this->Rural_cUF; 
	} 

	 function setRural_AAMM($value){ 
		 $this->Rural_AAMM = $value; 
	 } 

	 function getRural_AAMM(){ 
		 return $this->Rural_AAMM; 
	} 

	 function setRural_CNPJ($value){ 
		 $this->Rural_CNPJ = $value; 
	 } 

	 function getRural_CNPJ(){ 
		 return $this->Rural_CNPJ; 
	} 

	 function setRural_CPF($value){ 
		 $this->Rural_CPF = $value; 
	 } 

	 function getRural_CPF(){ 
		 return $this->Rural_CPF; 
	} 

	 function setRural_IE($value){ 
		 $this->Rural_IE = $value; 
	 } 

	 function getRural_IE(){ 
		 return $this->Rural_IE; 
	} 

	 function setRural_mod($value){ 
		 $this->Rural_mod = $value; 
	 } 

	 function getRural_mod(){ 
		 return $this->Rural_mod; 
	} 

	 function setRural_serie($value){ 
		 $this->Rural_serie = $value; 
	 } 

	 function getRural_serie(){ 
		 return $this->Rural_serie; 
	} 

	 function setRural_nNF($value){ 
		 $this->Rural_nNF = $value; 
	 } 

	 function getRural_nNF(){ 
		 return $this->Rural_nNF; 
	} 

	 function setCreref_refCTe($value){ 
		 $this->Creref_refCTe = $value; 
	 } 

	 function getCreref_refCTe(){ 
		 return $this->Creref_refCTe; 
	} 

	 function setCreref_nECF($value){ 
		 $this->Creref_nECF = $value; 
	 } 

	 function getCreref_nECF(){ 
		 return $this->Creref_nECF; 
	} 

	 function setCreref_nCOO($value){ 
		 $this->Creref_nCOO = $value; 
	 } 

	 function getCreref_nCOO(){ 
		 return $this->Creref_nCOO; 
	} 

	 function setEcferef_mod($value){ 
		 $this->Ecferef_mod = $value; 
	 } 

	 function getEcferef_mod(){ 
		 return $this->Ecferef_mod; 
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

	 function setEnderEmit_xLgr($value){ 
		 $this->enderEmit_xLgr = $value; 
	 } 

	 function getEnderEmit_xLgr(){ 
		 return $this->enderEmit_xLgr; 
	} 

	 function setEnderEmit_nro($value){ 
		 $this->enderEmit_nro = $value; 
	 } 

	 function getEnderEmit_nro(){ 
		 return $this->enderEmit_nro; 
	} 

	 function setEnderEmit_xCpl($value){ 
		 $this->enderEmit_xCpl = $value; 
	 } 

	 function getEnderEmit_xCpl(){ 
		 return $this->enderEmit_xCpl; 
	} 

	 function setEnderEmit_xBairro($value){ 
		 $this->enderEmit_xBairro = $value; 
	 } 

	 function getEnderEmit_xBairro(){ 
		 return $this->enderEmit_xBairro; 
	} 

	 function setEnderEmit_cMun($value){ 
		 $this->enderEmit_cMun = $value; 
	 } 

	 function getEnderEmit_cMun(){ 
		 return $this->enderEmit_cMun; 
	} 

	 function setEnderEmit_xMun($value){ 
		 $this->enderEmit_xMun = $value; 
	 } 

	 function getEnderEmit_xMun(){ 
		 return $this->enderEmit_xMun; 
	} 

	 function setEnderEmit_UF($value){ 
		 $this->enderEmit_UF = $value; 
	 } 

	 function getEnderEmit_UF(){ 
		 return $this->enderEmit_UF; 
	} 

	 function setEnderEmit_CEP($value){ 
		 $this->enderEmit_CEP = $value; 
	 } 

	 function getEnderEmit_CEP(){ 
		 return $this->enderEmit_CEP; 
	} 

	 function setEnderEmit_cPais($value){ 
		 $this->enderEmit_cPais = $value; 
	 } 

	 function getEnderEmit_cPais(){ 
		 return $this->enderEmit_cPais; 
	} 

	 function setEnderEmit_xPais($value){ 
		 $this->enderEmit_xPais = $value; 
	 } 

	 function getEnderEmit_xPais(){ 
		 return $this->enderEmit_xPais; 
	} 

	 function setEnderEmit_fone($value){ 
		 $this->enderEmit_fone = $value; 
	 } 

	 function getEnderEmit_fone(){ 
		 return $this->enderEmit_fone; 
	} 

	 function setDest_CNPJ($value){ 
		 $this->dest_CNPJ = $value; 
	 } 

	 function getDest_CNPJ(){ 
		 return $this->dest_CNPJ; 
	} 

	 function setDest_CPF($value){ 
		 $this->dest_CPF = $value; 
	 } 

	 function getDest_CPF(){ 
		 return $this->dest_CPF; 
	} 

	 function setDest_idEstrangeiro($value){ 
		 $this->dest_idEstrangeiro = $value; 
	 } 

	 function getDest_idEstrangeiro(){ 
		 return $this->dest_idEstrangeiro; 
	} 

	 function setDest_xNome($value){ 
		 $this->dest_xNome = $value; 
	 } 

	 function getDest_xNome(){ 
		 return $this->dest_xNome; 
	} 

	 function setDest_indIEDest($value){ 
		 $this->dest_indIEDest = $value; 
	 } 

	 function getDest_indIEDest(){ 
		 return $this->dest_indIEDest; 
	} 

	 function setDest_IE($value){ 
		 $this->dest_IE = $value; 
	 } 

	 function getDest_IE(){ 
		 return $this->dest_IE; 
	} 

	 function setDest_ISUF($value){ 
		 $this->dest_ISUF = $value; 
	 } 

	 function getDest_ISUF(){ 
		 return $this->dest_ISUF; 
	} 

	 function setDest_IM($value){ 
		 $this->dest_IM = $value; 
	 } 

	 function getDest_IM(){ 
		 return $this->dest_IM; 
	} 

	 function setDest_email($value){ 
		 $this->dest_email = $value; 
	 } 

	 function getDest_email(){ 
		 return $this->dest_email; 
	} 

	 function setEnderDest_xLgr($value){ 
		 $this->enderDest_xLgr = $value; 
	 } 

	 function getEnderDest_xLgr(){ 
		 return $this->enderDest_xLgr; 
	} 

	 function setEnderDest_nro($value){ 
		 $this->enderDest_nro = $value; 
	 } 

	 function getEnderDest_nro(){ 
		 return $this->enderDest_nro; 
	} 

	 function setEnderDest_xCpl($value){ 
		 $this->enderDest_xCpl = $value; 
	 } 

	 function getEnderDest_xCpl(){ 
		 return $this->enderDest_xCpl; 
	} 

	 function setEnderDest_xBairro($value){ 
		 $this->enderDest_xBairro = $value; 
	 } 

	 function getEnderDest_xBairro(){ 
		 return $this->enderDest_xBairro; 
	} 

	 function setEnderDest_cMun($value){ 
		 $this->enderDest_cMun = $value; 
	 } 

	 function getEnderDest_cMun(){ 
		 return $this->enderDest_cMun; 
	} 

	 function setEnderDest_xMun($value){ 
		 $this->enderDest_xMun = $value; 
	 } 

	 function getEnderDest_xMun(){ 
		 return $this->enderDest_xMun; 
	} 

	 function setEnderDest_UF($value){ 
		 $this->enderDest_UF = $value; 
	 } 

	 function getEnderDest_UF(){ 
		 return $this->enderDest_UF; 
	} 

	 function setEnderDest_CEP($value){ 
		 $this->enderDest_CEP = $value; 
	 } 

	 function getEnderDest_CEP(){ 
		 return $this->enderDest_CEP; 
	} 

	 function setEnderDest_cPais($value){ 
		 $this->enderDest_cPais = $value; 
	 } 

	 function getEnderDest_cPais(){ 
		 return $this->enderDest_cPais; 
	} 

	 function setEnderDest_xPais($value){ 
		 $this->enderDest_xPais = $value; 
	 } 

	 function getEnderDest_xPais(){ 
		 return $this->enderDest_xPais; 
	} 

	 function setEnderDest_fone($value){ 
		 $this->enderDest_fone = $value; 
	 } 

	 function getEnderDest_fone(){ 
		 return $this->enderDest_fone; 
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

	 function setPagT_pagT($value){ 
		 $this->pagT_pagT = $value; 
	 } 

	 function getPagT_pagT(){ 
		 return $this->pagT_pagT; 
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

	 function setRetTransp_vServ($value){ 
		 $this->retTransp_vServ = $value; 
	 } 

	 function getRetTransp_vServ(){ 
		 return $this->retTransp_vServ; 
	} 

	 function setRetTransp_vBCRet($value){ 
		 $this->retTransp_vBCRet = $value; 
	 } 

	 function getRetTransp_vBCRet(){ 
		 return $this->retTransp_vBCRet; 
	} 

	 function setRetTransp_pICMSRet($value){ 
		 $this->retTransp_pICMSRet = $value; 
	 } 

	 function getRetTransp_pICMSRet(){ 
		 return $this->retTransp_pICMSRet; 
	} 

	 function setRetTransp_vICMSRet($value){ 
		 $this->retTransp_vICMSRet = $value; 
	 } 

	 function getRetTransp_vICMSRet(){ 
		 return $this->retTransp_vICMSRet; 
	} 

	 function setRetTransp_CFOP($value){ 
		 $this->retTransp_CFOP = $value; 
	 } 

	 function getRetTransp_CFOP(){ 
		 return $this->retTransp_CFOP; 
	} 

	 function setRetTransp_cMunFG($value){ 
		 $this->retTransp_cMunFG = $value; 
	 } 

	 function getRetTransp_cMunFG(){ 
		 return $this->retTransp_cMunFG; 
	} 

	 function setVeicTransp_placa($value){ 
		 $this->veicTransp_placa = $value; 
	 } 

	 function getVeicTransp_placa(){ 
		 return $this->veicTransp_placa; 
	} 

	 function setVeicTransp_UF($value){ 
		 $this->veicTransp_UF = $value; 
	 } 

	 function getVeicTransp_UF(){ 
		 return $this->veicTransp_UF; 
	} 

	 function setVeicTransp_RNTC($value){ 
		 $this->veicTransp_RNTC = $value; 
	 } 

	 function getVeicTransp_RNTC(){ 
		 return $this->veicTransp_RNTC; 
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

	 function setVol_qVol($value){ 
		 $this->Vol_qVol = $value; 
	 } 

	 function getVol_qVol(){ 
		 return $this->Vol_qVol; 
	} 

	 function setVol_esp($value){ 
		 $this->Vol_esp = $value; 
	 } 

	 function getVol_esp(){ 
		 return $this->Vol_esp; 
	} 

	 function setVol_marca($value){ 
		 $this->Vol_marca = $value; 
	 } 

	 function getVol_marca(){ 
		 return $this->Vol_marca; 
	} 

	 function setVol_nVol($value){ 
		 $this->Vol_nVol = $value; 
	 } 

	 function getVol_nVol(){ 
		 return $this->Vol_nVol; 
	} 

	 function setVol_pesoL($value){ 
		 $this->Vol_pesoL = $value; 
	 } 

	 function getVol_pesoL(){ 
		 return $this->Vol_pesoL; 
	} 

	 function setVol_pesoB($value){ 
		 $this->Vol_pesoB = $value; 
	 } 

	 function getVol_pesoB(){ 
		 return $this->Vol_pesoB; 
	} 

	 function setVol_aLacres($value){ 
		 $this->Vol_aLacres = $value; 
	 } 

	 function getVol_aLacres(){ 
		 return $this->Vol_aLacres; 
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

	 function setDetExport_nItem($value){ 
		 $this->DetExport_nItem = $value; 
	 } 

	 function getDetExport_nItem(){ 
		 return $this->DetExport_nItem; 
	} 

	 function setDetExport_nDraw($value){ 
		 $this->DetExport_nDraw = $value; 
	 } 

	 function getDetExport_nDraw(){ 
		 return $this->DetExport_nDraw; 
	} 

	 function setDetExport_exportInd($value){ 
		 $this->DetExport_exportInd = $value; 
	 } 

	 function getDetExport_exportInd(){ 
		 return $this->DetExport_exportInd; 
	} 

	 function setDetExport_nRE($value){ 
		 $this->DetExport_nRE = $value; 
	 } 

	 function getDetExport_nRE(){ 
		 return $this->DetExport_nRE; 
	} 

	 function setDetExport_chNFe($value){ 
		 $this->DetExport_chNFe = $value; 
	 } 

	 function getDetExport_chNFe(){ 
		 return $this->DetExport_chNFe; 
	} 

	 function setDetExport_qExport($value){ 
		 $this->DetExport_qExport = $value; 
	 } 

	 function getDetExport_qExport(){ 
		 return $this->DetExport_qExport; 
	} 

	 function setObsFisco_xCampo($value){ 
		 $this->ObsFisco_xCampo = $value; 
	 } 

	 function getObsFisco_xCampo(){ 
		 return $this->ObsFisco_xCampo; 
	} 

	 function setObsFisco_xTexto($value){ 
		 $this->ObsFisco_xTexto = $value; 
	 } 

	 function getObsFisco_xTexto(){ 
		 return $this->ObsFisco_xTexto; 
	} 

	 function setAuxXML_AutXML($value){ 
		 $this->AuxXML_AutXML = $value; 
	 } 

	 function getAuxXML_AutXML(){ 
		 return $this->AuxXML_AutXML; 
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

	 function setReltrib_vRetPIS($value){ 
		 $this->reltrib_vRetPIS = $value; 
	 } 

	 function getReltrib_vRetPIS(){ 
		 return $this->reltrib_vRetPIS; 
	} 

	 function setReltrib_vRetCOFINS($value){ 
		 $this->reltrib_vRetCOFINS = $value; 
	 } 

	 function getReltrib_vRetCOFINS(){ 
		 return $this->reltrib_vRetCOFINS; 
	} 

	 function setReltrib_vRetCSLL($value){ 
		 $this->reltrib_vRetCSLL = $value; 
	 } 

	 function getReltrib_vRetCSLL(){ 
		 return $this->reltrib_vRetCSLL; 
	} 

	 function setReltrib_vBCIRRF($value){ 
		 $this->reltrib_vBCIRRF = $value; 
	 } 

	 function getReltrib_vBCIRRF(){ 
		 return $this->reltrib_vBCIRRF; 
	} 

	 function setReltrib_vIRRF($value){ 
		 $this->reltrib_vIRRF = $value; 
	 } 

	 function getReltrib_vIRRF(){ 
		 return $this->reltrib_vIRRF; 
	} 

	 function setReltrib_vBCRetPrev($value){ 
		 $this->reltrib_vBCRetPrev = $value; 
	 } 

	 function getReltrib_vBCRetPrev(){ 
		 return $this->reltrib_vBCRetPrev; 
	} 

	 function setReltrib_vRetPrev($value){ 
		 $this->reltrib_vRetPrev = $value; 
	 } 

	 function getReltrib_vRetPrev(){ 
		 return $this->reltrib_vRetPrev; 
	} 

	 function setCana_safra($value){ 
		 $this->cana_safra = $value; 
	 } 

	 function getCana_safra(){ 
		 return $this->cana_safra; 
	} 

	 function setCana_ref($value){ 
		 $this->cana_ref = $value; 
	 } 

	 function getCana_ref(){ 
		 return $this->cana_ref; 
	} 

	 function setFordia_dia($value){ 
		 $this->fordia_dia = $value; 
	 } 

	 function getFordia_dia(){ 
		 return $this->fordia_dia; 
	} 

	 function setFordia_qtde($value){ 
		 $this->fordia_qtde = $value; 
	 } 

	 function getFordia_qtde(){ 
		 return $this->fordia_qtde; 
	} 

	 function setFordia_qTotMes($value){ 
		 $this->fordia_qTotMes = $value; 
	 } 

	 function getFordia_qTotMes(){ 
		 return $this->fordia_qTotMes; 
	} 

	 function setFordia_qTotAnt($value){ 
		 $this->fordia_qTotAnt = $value; 
	 } 

	 function getFordia_qTotAnt(){ 
		 return $this->fordia_qTotAnt; 
	} 

	 function setFordia_qTotGer($value){ 
		 $this->fordia_qTotGer = $value; 
	 } 

	 function getFordia_qTotGer(){ 
		 return $this->fordia_qTotGer; 
	} 

	 function setDeduc_xDed($value){ 
		 $this->deduc_xDed = $value; 
	 } 

	 function getDeduc_xDed(){ 
		 return $this->deduc_xDed; 
	} 

	 function setDeduc_vDed($value){ 
		 $this->deduc_vDed = $value; 
	 } 

	 function getDeduc_vDed(){ 
		 return $this->deduc_vDed; 
	} 

	 function setDeduc_vFor($value){ 
		 $this->deduc_vFor = $value; 
	 } 

	 function getDeduc_vFor(){ 
		 return $this->deduc_vFor; 
	} 

	 function setDeduc_vTotDed($value){ 
		 $this->deduc_vTotDed = $value; 
	 } 

	 function getDeduc_vTotDed(){ 
		 return $this->deduc_vTotDed; 
	} 

	 function setDeduc_vLiqFor($value){ 
		 $this->deduc_vLiqFor = $value; 
	 } 

	 function getDeduc_vLiqFor(){ 
		 return $this->deduc_vLiqFor; 
	} 

	 function setInfAdFisco_infAdFisco($value){ 
		 $this->infAdFisco_infAdFisco = $value; 
	 } 

	 function getInfAdFisco_infAdFisco(){ 
		 return $this->infAdFisco_infAdFisco; 
	} 

	 function setInfAdFisco_infCpl($value){ 
		 $this->infAdFisco_infCpl = $value; 
	 } 

	 function getInfAdFisco_infCpl(){ 
		 return $this->infAdFisco_infCpl; 
	} 

	 function setObsCont_xCampo($value){ 
		 $this->ObsCont_xCampo = $value; 
	 } 

	 function getObsCont_xCampo(){ 
		 return $this->ObsCont_xCampo; 
	} 

	 function setObsCont_xTexto($value){ 
		 $this->ObsCont_xTexto = $value; 
	 } 

	 function getObsCont_xTexto(){ 
		 return $this->ObsCont_xTexto; 
	} 

	 function setProcRef_nProc($value){ 
		 $this->procRef_nProc = $value; 
	 } 

	 function getProcRef_nProc(){ 
		 return $this->procRef_nProc; 
	} 

	 function setProcRef_indProc($value){ 
		 $this->procRef_indProc = $value; 
	 } 

	 function getProcRef_indProc(){ 
		 return $this->procRef_indProc; 
	} 

	 function setStatus_nfe($value){ 
		 $this->status_nfe = $value; 
	 } 

	 function getStatus_nfe(){ 
		 return $this->status_nfe; 
	} 

} 
 ?>