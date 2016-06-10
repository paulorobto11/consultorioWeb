$(function(){
});

function salvar_solicitacao() {
	
	solic_protocolo = $('#nfseautorizacao-solic_protocolo').val();
	solic_data = $('#nfseautorizacao-solic_data').val();
	solic_responsavel = $('#nfseautorizacao-solic_responsavel').val();
	solic_tipo = $('#nfseautorizacao-solic_tipo').val();
	solic_email = $('#nfseautorizacao-solic_email').val();
	solic_telefone = $('#nfseautorizacao-solic_telefone').val();
	
	
	 $.ajax({
		   type: 'post',
		    url: BASE_PATH + "mobiliario/solicitacao",
		    data: {
		    	solic_protocolo:solic_protocolo,
		    	solic_data:solic_data,
		    	solic_responsavel:solic_responsavel,
		    	solic_tipo:solic_tipo,
		    	solic_email:solic_email,
		    	solic_telefone:solic_telefone,
		    	},
	        success:function(result){
	        	var url = BASE_PATH + "mobiliario";
	        	location.href = url;
			},
	 });
	
	return true;
}

function salvar_parametros() {
	
	seq_nfse = $('#mobiliarioparametros-seq_nfse').val();
	nfse_regime = $('#mobiliarioparametros-nfse_regime').val();
	nfse_incentivo = $('#mobiliarioparametros-nfse_incentivo').val();
	
	 $.ajax({
		   type: 'post',
		    url: BASE_PATH + "mobiliario/parametros",
		    data: {
		    	seq_nfse:seq_nfse,
		    	nfse_regime:nfse_regime,
		    	nfse_incentivo:nfse_incentivo,
		    	},
	        success:function(result){
	        	var url = BASE_PATH + "mobiliario";
	        	location.href = url;
			},
	 });
	
	return true;
}
