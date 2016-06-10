<?php 
 class Nfse_lanctos_iss{ 

	 private $seq_nfse; 
	 private $codemp; 
	 private $mes_comp; 
	 private $ano_comp; 
	 private $data_emissao; 
	 private $nr_nota; 
	 private $sr_nota; 
	 private $cod_verificacao; 
	 private $atividade; 
	 private $tipo_tributacao; 
	 private $valor_nota; 
	 private $retencao; 
	 private $vlr_retido; 
	 private $valor_liquido; 
	 private $tomador_tipo; 
	 private $tomador_id; 
	 private $tomador_codigo; 
	 private $tomador_codemp; 
	 private $tomador_inscricao; 
	 private $tomador_local; 
	 private $tomador_nome; 
	 private $tomador_logradouro; 
	 private $tomador_numero; 
	 private $tomador_cep; 
	 private $tomador_bairro; 
	 private $tomador_cidade; 
	 private $tomador_estado; 
	 private $tomador_codmunic; 
	 private $tomador_telefone; 
	 private $tomador_email; 
	 private $local_prestacao; 
	 private $nfs_aliquota; 
	 private $codobra; 
	 private $artobra; 
	 private $snacional; 
	 private $regime; 
	 private $natureza; 
	 private $incentivo; 
	 private $data_inclusao; 
	 private $data_modificacao; 
	 private $usuario_id; 
	 private $nro_rps; 
	 private $sr_rps; 
	 private $remote_ip; 
	 private $cod_substituicao; 
	 private $situacao_nfs; 

	 function __construct(){ 
		 $this->seq_nfse =  '' ; 
		 $this->codemp =  '' ; 
		 $this->mes_comp =  '' ; 
		 $this->ano_comp =  '' ; 
		 $this->data_emissao =  '' ; 
		 $this->nr_nota =  '' ; 
		 $this->sr_nota =  '' ; 
		 $this->cod_verificacao =  '' ; 
		 $this->atividade =  '' ; 
		 $this->tipo_tributacao =  '' ; 
		 $this->valor_nota =  '' ; 
		 $this->retencao =  '' ; 
		 $this->vlr_retido =  '' ; 
		 $this->valor_liquido =  '' ; 
		 $this->tomador_tipo =  '' ; 
		 $this->tomador_id =  '' ; 
		 $this->tomador_codigo =  '' ; 
		 $this->tomador_codemp =  '' ; 
		 $this->tomador_inscricao =  '' ; 
		 $this->tomador_local =  '' ; 
		 $this->tomador_nome =  '' ; 
		 $this->tomador_logradouro =  '' ; 
		 $this->tomador_numero =  '' ; 
		 $this->tomador_cep =  '' ; 
		 $this->tomador_bairro =  '' ; 
		 $this->tomador_cidade =  '' ; 
		 $this->tomador_estado =  '' ; 
		 $this->tomador_codmunic =  '' ; 
		 $this->tomador_telefone =  '' ; 
		 $this->tomador_email =  '' ; 
		 $this->local_prestacao =  '' ; 
		 $this->nfs_aliquota =  '' ; 
		 $this->codobra =  '' ; 
		 $this->artobra =  '' ; 
		 $this->snacional =  '' ; 
		 $this->regime =  '' ; 
		 $this->natureza =  '' ; 
		 $this->incentivo =  '' ; 
		 $this->data_inclusao =  '' ; 
		 $this->data_modificacao =  '' ; 
		 $this->usuario_id =  '' ; 
		 $this->nro_rps =  '' ; 
		 $this->sr_rps =  '' ; 
		 $this->remote_ip =  '' ; 
		 $this->cod_substituicao =  '' ; 
		 $this->situacao_nfs =  '' ; 
	} 

	 function setSeq_nfse($value){ 
		 $this->seq_nfse = $value; 
	 } 

	 function getSeq_nfse(){ 
		 return $this->seq_nfse; 
	} 

	 function setCodemp($value){ 
		 $this->codemp = $value; 
	 } 

	 function getCodemp(){ 
		 return $this->codemp; 
	} 

	 function setMes_comp($value){ 
		 $this->mes_comp = $value; 
	 } 

	 function getMes_comp(){ 
		 return $this->mes_comp; 
	} 

	 function setAno_comp($value){ 
		 $this->ano_comp = $value; 
	 } 

	 function getAno_comp(){ 
		 return $this->ano_comp; 
	} 

	 function setData_emissao($value){ 
		 $this->data_emissao = $value; 
	 } 

	 function getData_emissao(){ 
		 return $this->data_emissao; 
	} 

	 function setNr_nota($value){ 
		 $this->nr_nota = $value; 
	 } 

	 function getNr_nota(){ 
		 return $this->nr_nota; 
	} 

	 function setSr_nota($value){ 
		 $this->sr_nota = $value; 
	 } 

	 function getSr_nota(){ 
		 return $this->sr_nota; 
	} 

	 function setCod_verificacao($value){ 
		 $this->cod_verificacao = $value; 
	 } 

	 function getCod_verificacao(){ 
		 return $this->cod_verificacao; 
	} 

	 function setAtividade($value){ 
		 $this->atividade = $value; 
	 } 

	 function getAtividade(){ 
		 return $this->atividade; 
	} 

	 function setTipo_tributacao($value){ 
		 $this->tipo_tributacao = $value; 
	 } 

	 function getTipo_tributacao(){ 
		 return $this->tipo_tributacao; 
	} 

	 function setValor_nota($value){ 
		 $this->valor_nota = $value; 
	 } 

	 function getValor_nota(){ 
		 return $this->valor_nota; 
	} 

	 function setRetencao($value){ 
		 $this->retencao = $value; 
	 } 

	 function getRetencao(){ 
		 return $this->retencao; 
	} 

	 function setVlr_retido($value){ 
		 $this->vlr_retido = $value; 
	 } 

	 function getVlr_retido(){ 
		 return $this->vlr_retido; 
	} 

	 function setValor_liquido($value){ 
		 $this->valor_liquido = $value; 
	 } 

	 function getValor_liquido(){ 
		 return $this->valor_liquido; 
	} 

	 function setTomador_tipo($value){ 
		 $this->tomador_tipo = $value; 
	 } 

	 function getTomador_tipo(){ 
		 return $this->tomador_tipo; 
	} 

	 function setTomador_id($value){ 
		 $this->tomador_id = $value; 
	 } 

	 function getTomador_id(){ 
		 return $this->tomador_id; 
	} 

	 function setTomador_codigo($value){ 
		 $this->tomador_codigo = $value; 
	 } 

	 function getTomador_codigo(){ 
		 return $this->tomador_codigo; 
	} 

	 function setTomador_codemp($value){ 
		 $this->tomador_codemp = $value; 
	 } 

	 function getTomador_codemp(){ 
		 return $this->tomador_codemp; 
	} 

	 function setTomador_inscricao($value){ 
		 $this->tomador_inscricao = $value; 
	 } 

	 function getTomador_inscricao(){ 
		 return $this->tomador_inscricao; 
	} 

	 function setTomador_local($value){ 
		 $this->tomador_local = $value; 
	 } 

	 function getTomador_local(){ 
		 return $this->tomador_local; 
	} 

	 function setTomador_nome($value){ 
		 $this->tomador_nome = $value; 
	 } 

	 function getTomador_nome(){ 
		 return $this->tomador_nome; 
	} 

	 function setTomador_logradouro($value){ 
		 $this->tomador_logradouro = $value; 
	 } 

	 function getTomador_logradouro(){ 
		 return $this->tomador_logradouro; 
	} 

	 function setTomador_numero($value){ 
		 $this->tomador_numero = $value; 
	 } 

	 function getTomador_numero(){ 
		 return $this->tomador_numero; 
	} 

	 function setTomador_cep($value){ 
		 $this->tomador_cep = $value; 
	 } 

	 function getTomador_cep(){ 
		 return $this->tomador_cep; 
	} 

	 function setTomador_bairro($value){ 
		 $this->tomador_bairro = $value; 
	 } 

	 function getTomador_bairro(){ 
		 return $this->tomador_bairro; 
	} 

	 function setTomador_cidade($value){ 
		 $this->tomador_cidade = $value; 
	 } 

	 function getTomador_cidade(){ 
		 return $this->tomador_cidade; 
	} 

	 function setTomador_estado($value){ 
		 $this->tomador_estado = $value; 
	 } 

	 function getTomador_estado(){ 
		 return $this->tomador_estado; 
	} 

	 function setTomador_codmunic($value){ 
		 $this->tomador_codmunic = $value; 
	 } 

	 function getTomador_codmunic(){ 
		 return $this->tomador_codmunic; 
	} 

	 function setTomador_telefone($value){ 
		 $this->tomador_telefone = $value; 
	 } 

	 function getTomador_telefone(){ 
		 return $this->tomador_telefone; 
	} 

	 function setTomador_email($value){ 
		 $this->tomador_email = $value; 
	 } 

	 function getTomador_email(){ 
		 return $this->tomador_email; 
	} 

	 function setLocal_prestacao($value){ 
		 $this->local_prestacao = $value; 
	 } 

	 function getLocal_prestacao(){ 
		 return $this->local_prestacao; 
	} 

	 function setNfs_aliquota($value){ 
		 $this->nfs_aliquota = $value; 
	 } 

	 function getNfs_aliquota(){ 
		 return $this->nfs_aliquota; 
	} 

	 function setCodobra($value){ 
		 $this->codobra = $value; 
	 } 

	 function getCodobra(){ 
		 return $this->codobra; 
	} 

	 function setArtobra($value){ 
		 $this->artobra = $value; 
	 } 

	 function getArtobra(){ 
		 return $this->artobra; 
	} 

	 function setSnacional($value){ 
		 $this->snacional = $value; 
	 } 

	 function getSnacional(){ 
		 return $this->snacional; 
	} 

	 function setRegime($value){ 
		 $this->regime = $value; 
	 } 

	 function getRegime(){ 
		 return $this->regime; 
	} 

	 function setNatureza($value){ 
		 $this->natureza = $value; 
	 } 

	 function getNatureza(){ 
		 return $this->natureza; 
	} 

	 function setIncentivo($value){ 
		 $this->incentivo = $value; 
	 } 

	 function getIncentivo(){ 
		 return $this->incentivo; 
	} 

	 function setData_inclusao($value){ 
		 $this->data_inclusao = $value; 
	 } 

	 function getData_inclusao(){ 
		 return $this->data_inclusao; 
	} 

	 function setData_modificacao($value){ 
		 $this->data_modificacao = $value; 
	 } 

	 function getData_modificacao(){ 
		 return $this->data_modificacao; 
	} 

	 function setUsuario_id($value){ 
		 $this->usuario_id = $value; 
	 } 

	 function getUsuario_id(){ 
		 return $this->usuario_id; 
	} 

	 function setNro_rps($value){ 
		 $this->nro_rps = $value; 
	 } 

	 function getNro_rps(){ 
		 return $this->nro_rps; 
	} 

	 function setSr_rps($value){ 
		 $this->sr_rps = $value; 
	 } 

	 function getSr_rps(){ 
		 return $this->sr_rps; 
	} 

	 function setRemote_ip($value){ 
		 $this->remote_ip = $value; 
	 } 

	 function getRemote_ip(){ 
		 return $this->remote_ip; 
	} 

	 function setCod_substituicao($value){ 
		 $this->cod_substituicao = $value; 
	 } 

	 function getCod_substituicao(){ 
		 return $this->cod_substituicao; 
	} 

	 function setSituacao_nfs($value){ 
		 $this->situacao_nfs = $value; 
	 } 

	 function getSituacao_nfs(){ 
		 return $this->situacao_nfs; 
	} 

} 
 ?>