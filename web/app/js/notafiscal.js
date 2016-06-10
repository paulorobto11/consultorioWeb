$(function(){
});

function mostrar_filtro() {
	if (document.getElementById('dv_filtro').style.display == 'none') {
	    $.ajax({type: 'post',url: BASE_PATH + "notafiscal/lg_filtro",data: {filtro : 2,},success:function(result){$("#lg_filtro" ).html( result );},});
		bb = '#dv_filtro';
		$(bb).show();
	} else {
	    $.ajax({type: 'post',url: BASE_PATH + "notafiscal/lg_filtro",data: {filtro : 1,},success:function(result){$("#lg_filtro" ).html( result );},});
		bb = '#dv_filtro';
		$(bb).hide();
	}
}

function buscar_registros() {
	bsc_competencia   = $('#notafiscal-bsc_competencia').val(); 
	bsc_data_inicio   = $('#notafiscal-bsc_data_inicio').val();  
	bsc_data_final    = $('#notafiscal-bsc_data_final').val();        
	bsc_contribuinte  = $('#notafiscal-bsc_contribuinte').val();   
	bsc_nota          = $('#notafiscal-bsc_nota').val();         
	bsc_tributacao    = $('#notafiscal-bsc_tributacao').val(); 
	bsc_situacao      = $('#notafiscal-bsc_situacao').val();  
	
    $.ajax({
		   type: 'post',
			url: BASE_PATH + "notafiscal/index",
		    data: {
		    		filtros       : 1,
		    		bsc_competencia   : bsc_competencia   ,
		    		bsc_data_inicio   : bsc_data_inicio   ,
		    		bsc_data_final    : bsc_data_final    ,
		    		bsc_contribuinte  : bsc_contribuinte  ,
		    		bsc_nota          : bsc_nota          ,
		    		bsc_tributacao    : bsc_tributacao    ,
		    		bsc_situacao      : bsc_situacao      ,		    		
		    }, 
		    success:function(result){
				$("#dv_grid" ).html( result );
			},
		    error: function(data) { // if error occured
		         alert("Erro no Procedimento !!!");
		    },
	  });
	
}

function buscar_cancelamento() {
	bsc_competencia   = $('#notafiscal-bsc_competencia').val(); 
	bsc_data_inicio   = $('#notafiscal-bsc_data_inicio').val();  
	bsc_data_final    = $('#notafiscal-bsc_data_final').val();        
	bsc_contribuinte  = $('#notafiscal-bsc_contribuinte').val();   
	bsc_nota          = $('#notafiscal-bsc_nota').val();         
	bsc_tributacao    = $('#notafiscal-bsc_tributacao').val(); 
	bsc_situacao      = $('#notafiscal-bsc_situacao').val();  
	
    $.ajax({
		   type: 'post',
			url: BASE_PATH + "notafiscal/cancelamento",
		    data: {
		    		filtros       : 1,
		    		bsc_competencia   : bsc_competencia   ,
		    		bsc_data_inicio   : bsc_data_inicio   ,
		    		bsc_data_final    : bsc_data_final    ,
		    		bsc_contribuinte  : bsc_contribuinte  ,
		    		bsc_nota          : bsc_nota          ,
		    		bsc_tributacao    : bsc_tributacao    ,
		    		bsc_situacao      : bsc_situacao      ,		    		
		    }, 
		    success:function(result){
				$("#dv_grid" ).html( result );
			},
		    error: function(data) { // if error occured
		         alert("Erro no Procedimento !!!");
		    },
	  });
	
}

function buscar_substituicao() {
	bsc_competencia   = $('#notafiscal-bsc_competencia').val(); 
	bsc_data_inicio   = $('#notafiscal-bsc_data_inicio').val();  
	bsc_data_final    = $('#notafiscal-bsc_data_final').val();        
	bsc_contribuinte  = $('#notafiscal-bsc_contribuinte').val();   
	bsc_nota          = $('#notafiscal-bsc_nota').val();         
	bsc_tributacao    = $('#notafiscal-bsc_tributacao').val(); 
	bsc_situacao      = $('#notafiscal-bsc_situacao').val();  
	
    $.ajax({
		   type: 'post',
			url: BASE_PATH + "notafiscal/substituicao",
		    data: {
		    		filtros       : 1,
		    		bsc_competencia   : bsc_competencia   ,
		    		bsc_data_inicio   : bsc_data_inicio   ,
		    		bsc_data_final    : bsc_data_final    ,
		    		bsc_contribuinte  : bsc_contribuinte  ,
		    		bsc_nota          : bsc_nota          ,
		    		bsc_tributacao    : bsc_tributacao    ,
		    		bsc_situacao      : bsc_situacao      ,		    		
		    }, 
		    success:function(result){
				$("#dv_grid" ).html( result );
			},
		    error: function(data) { // if error occured
		         alert("Erro no Procedimento !!!");
		    },
	  });
	
}

function buscar_prestador() {
	bsc_competencia   = $('#notafiscal-bsc_competencia').val(); 
	bsc_data_inicio   = $('#notafiscal-bsc_data_inicio').val();  
	bsc_data_final    = $('#notafiscal-bsc_data_final').val();        
	bsc_contribuinte  = $('#notafiscal-bsc_contribuinte').val();   
	bsc_nota          = $('#notafiscal-bsc_nota').val();         
	bsc_tributacao    = $('#notafiscal-bsc_tributacao').val(); 
	bsc_situacao      = $('#notafiscal-bsc_situacao').val();  
	
    $.ajax({
		   type: 'post',
			url: BASE_PATH + "notafiscal/prestador",
		    data: {
		    		filtros       : 1,
		    		bsc_competencia   : bsc_competencia   ,
		    		bsc_data_inicio   : bsc_data_inicio   ,
		    		bsc_data_final    : bsc_data_final    ,
		    		bsc_contribuinte  : bsc_contribuinte  ,
		    		bsc_nota          : bsc_nota          ,
		    		bsc_tributacao    : bsc_tributacao    ,
		    		bsc_situacao      : bsc_situacao      ,		    		
		    }, 
		    success:function(result){
				$("#dv_grid" ).html( result );
			},
		    error: function(data) { // if error occured
		         alert("Erro no Procedimento !!!");
		    },
	  });
	
}



function via_nfse(id,modnfe) {
	window.open(BASE_PATH + "notafiscal/nfseletronica?id="+id,'_blank');
	return true;
}

function salvar_cancelamento(id) {
	txt_motivo = $('#notafiscal-txt_motivo').val();
	 $.ajax({
		   type: 'post',
		    url: BASE_PATH + "notafiscal/cancelando",
		    data: {id:id,txt_motivo:txt_motivo},
	        success:function(result){
	        	  var result = $.parseJSON(result);
		  		  $.each(result, function(index, value){
		  				if (index == 'status') {
		  					status = value;
		  				}
		  				if (index == 'message') {
		  					message = value;
		  				}
		  		  });	
		  		  if (status == 0) {	
			        	window.open(BASE_PATH + "notafiscal/nfseletronica?id="+id,'_blank');
			        	var url = BASE_PATH + "notafiscal/cancelamento";
			        	location.href = url;
		  		  } else {
		  			alert (message);
		  			return false;
		  		  }
			},
	 });
	
	return true;
}

function mostrar_mes() {
	 $("#myModal").modal("show");
	 
	 $.ajax({
	   type: 'post',
	    url: BASE_PATH + "notafiscal/modal_mes",
       success:function(result){
    	   $("#div_mod").html(result);
		},
	 });
}

function limpa_erros() {
	bb = '#dv_erros';
	$(bb).hide();
}

function entra_mes(mes) {
	$("#myModal").modal("hide");
	
	 $.ajax({
		   type: 'post',
		    url: BASE_PATH + "notafiscal/competencia",
		    data: {mes:mes},
	        success:function(result){
	    	   $("#notafiscal-mes_comp").val(result);
			},
	 });
}

function tipo_busca(valor) {
	bb = '#dv_cpf';
	$(bb).hide();
	bb = '#dv_cnpj';
	$(bb).hide();
	bb = '#dv_carteira';
	$(bb).hide();
	bb = '#dv_contribuinte';
	$(bb).hide();
	bb = '#dv_cpf_novo';
	$(bb).hide();
	bb = '#dv_cnpj_novo';
	$(bb).hide();
	
	$('#notafiscal-tomador_cep').val('');
	$('#notafiscal-tomador_rua').val('');
	$('#notafiscal-tomador_numero').val('');
	$('#notafiscal-tomador_bairro').val('');
	$('#notafiscal-tomador_estado').val('');
	$('#notafiscal-tomador_cidade').val('');
	
	
	if (valor == 1) {
		bb = '#dv_cpf';
		$(bb).show();
	}
	if (valor == 2) {
		bb = '#dv_cnpj';
		$(bb).show();
	}
	if (valor == 4) {
		bb = '#dv_carteira';
		$(bb).show();
	}
	if (valor == 3) {
		bb = '#dv_contribuinte';
		$(bb).show();
	}
	if (valor == 5) {
		bb = '#dv_cpf_novo';
		$(bb).show();
		$('#notafiscal-tomador_cep').removeAttr('disabled');
		$('#notafiscal-tomador_rua').removeAttr('disabled');
		$('#notafiscal-tomador_numero').removeAttr('disabled');
		$('#notafiscal-tomador_bairro').removeAttr('disabled');
		$('#notafiscal-tomador_estado').removeAttr('disabled');
		$('#notafiscal-tomador_cidade').removeAttr('disabled');
	}
	if (valor == 6) {
		bb = '#dv_cnpj_novo';
		$(bb).show();
		$('#notafiscal-tomador_cep').removeAttr('disabled');
		$('#notafiscal-tomador_rua').removeAttr('disabled');
		$('#notafiscal-tomador_numero').removeAttr('disabled');
		$('#notafiscal-tomador_bairro').removeAttr('disabled');
		$('#notafiscal-tomador_estado').removeAttr('disabled');
		$('#notafiscal-tomador_cidade').removeAttr('disabled');
	}

}

function tipo_busca_obra(valor) {
	bb = '#dv_cpf_obra';
	$(bb).hide();
	bb = '#dv_cnpj_obra';
	$(bb).hide();
	bb = '#dv_contribuinte_obra';
	$(bb).hide();
	
	if (valor == 1) {
		bb = '#dv_cpf_obra';
		$(bb).show();
	}
	if (valor == 2) {
		bb = '#dv_cnpj_obra';
		$(bb).show();
	}
	if (valor == 3) {
		bb = '#dv_contribuinte_obra';
		$(bb).show();
	}
}


function buscar_tomador(valor) {
	tipo = $('#notafiscal-tipo_busca').val();
	
	if (!valor) return false;
	
	 $.ajax({
		   type: 'post',
		    url: BASE_PATH + "notafiscal/buscar_tomador",
		    data: {tipo:tipo,valor:valor},
	        success:function(result){
	           if (!result) {
	        	   if (confirm('Cadastro do Tomador não Localizado - Deseja efetuar o Cadastro ?')) {
	        		   $('#notafiscal-tomador_nome_fisica').removeAttr('disabled');
	        		   $('#notafiscal-tomador_cep').removeAttr('disabled');
	        		   $('#notafiscal-tomador_rua').removeAttr('disabled');
	        		   $('#notafiscal-tomador_numero').removeAttr('disabled');
	        		   $('#notafiscal-tomador_bairro').removeAttr('disabled');
	        		   $('#notafiscal-tomador_estado').removeAttr('disabled');
	        		   $('#notafiscal-tomador_cidade').removeAttr('disabled');
	        		   if (tipo == 1) {
	        			   $('#notafiscal-nr_cpf_novo').val($('#notafiscal-nr_cpf').val());
	        			   //$('#notafiscal-nr_cpf_novo').attr("disabled", "disabled");
		        		   $( "#select2-notafiscal-tipo_busca-container" ).html('Cadastro Novo PF');
		        		   $('#notafiscal-tipo_busca').val('5');
	        				bb = '#dv_cpf';
	        				$(bb).hide();
		        		   
	        				bb = '#dv_cpf_novo';
	        				$(bb).show();
	        		   } else if (tipo == 2) {
	        			   $('#notafiscal-nr_cnpj_novo').val($('#notafiscal-nr_cnpj').val());
	        			 //  $('#notafiscal-nr_cnpj_novo').attr("disabled", "disabled");
		        		   $( "#select2-notafiscal-tipo_busca-container" ).html('Cadastro Novo PJ');
		        		   $('#notafiscal-tipo_busca').val('6');
	        			   bb = '#dv_cnpj';
	        			   $(bb).hide();
		        		   
	        			   bb = '#dv_cnpj_novo';
	        			   $(bb).show();
	        		   }
	        		   //$('#notafiscal-tipo_busca').attr("disabled", "disabled");
	        	   } else {
	        		   if (tipo == 1) {
		        		   $('#notafiscal-nr_cpf').val('');
	        		   } else if (tipo == 2) {
		        		   $('#notafiscal-nr_cnpj').val('');
	        		   }
	        		   
	        		   return false;
	        	   }
	           }	
	           if (tipo == 1) $("#notafiscal-tomador_nome_fisica").val(result);
	           if (tipo == 2) $("#notafiscal-tomador_nome_juridica").val(result);
			},
	 });
}

function buscar_tomador_obra(valor) {
	tipo = $('#cadobra-tipo').val();
	
	alert (tipo);
	
	if (!valor) return false;
	
	 $.ajax({
		   type: 'post',
		    url: BASE_PATH + "notafiscal/buscar_tomador",
		    data: {tipo:tipo,valor:valor},
	        success:function(result){
	           if (!result) {
	        	   alert ('Cadastro do Tomador não Localizado - Verifique !');
	        	   return false;
	           }	
	           if (tipo == 1) $("#cadobra-obra_nome_fisica").val(result);
	           if (tipo == 2) $("#cadobra-obra-nome_juridica").val(result);
			},
	 });
}


function entrar_tomador() {
	tipo = $('#notafiscal-tipo_busca').val();
	if (tipo == 1) {
		valor = $('#notafiscal-nr_cpf').val();
	}
	if (tipo == 2) {
		valor = $('#notafiscal-nr_cnpj').val();
	}
	if (tipo == 3) {
		valor = $('#notafiscal-id_contribuinte').val();
	}
	if (tipo == 4) {
		valor = $('#notafiscal-id_carteira').val();
	}
	
	if (!valor) return false;
	
	 $.ajax({
		   type: 'post',
		    url: BASE_PATH + "notafiscal/entrar_tomador",
		    data: {tipo:tipo,valor:valor},
	        success:function(result){
	        	$("#dv_endereco" ).html( result );
			},
	 });
	 
	 id_atividade = $('#codigo_atividade').val();
	 if (id_atividade) {
		 this.entra_valores();
	 }		 
	 
}

function entra_local(valor) {
	if (!valor) return false;
	$('#local_prestacao').val(valor);
	
	if (valor == 2) {
		$('#notafiscal-id_estado').removeAttr('disabled');
		$('#notafiscal-id_cidade').removeAttr('disabled');
	} else {
		$('#notafiscal-id_estado').attr("disabled", "disabled");
		$('#notafiscal-id_cidade').attr("disabled", "disabled");
	}
	
	this.entra_valores();
}

function entra_atividade(valor) {
	if (!valor) return false;
	
	$('#codigo_atividade').val(valor);
	
	$.ajax({
		   type: 'post',
		    url: BASE_PATH + "notafiscal/verifica_servicos",
		    data: {
		    	valor:valor,
		    },
	        success:function(result){
	        	if (result == 1) {
	        		bb = '#dv_infobra';
	        		$(bb).show();
	        		bb = '#dv_cadobra';
	        		$(bb).show();
	        	} else {
	        		bb = '#dv_infobra';
	        		$(bb).hide();
	        		bb = '#dv_cadobra';
	        		$(bb).hide();
	        	}
			},
	 });

	this.entra_valores();
}

function entra_valores() {
	$('#notafiscal-iss_reter').val(0);
	$.ajax({
		   type: 'post',
		    url: BASE_PATH + "notafiscal/valores_nota",
		    data     : $('#w0').serialize(),
	        success:function(result){
	        	$("#vlrs_servico" ).html( result );
			},
	 });
}

function entra_retencao() {
	$.ajax({
		   type: 'post',
		    url: BASE_PATH + "notafiscal/valores_nota",
		    data     : $('#w0').serialize(),
	        success:function(result){
	        	$("#vlrs_servico" ).html( result );
			},
	 });
}

function entra_atividade_lctos(valor) {
	if (!valor) return false;
	
	$('#codigo_atividade').val(valor);
	
	$.ajax({
		   type: 'post',
		    url: BASE_PATH + "notafiscal/servicos_lctos",
		    data: {
		    	valor:valor,
		    },
	        success:function(result){
	        	if (result == 1) {
	        		bb = '#dv_infobra';
	        		$(bb).show();
	        		bb = '#dv_cadobra';
	        		$(bb).show();
	        	} else {
	        		bb = '#dv_infobra';
	        		$(bb).hide();
	        		bb = '#dv_cadobra';
	        		$(bb).hide();
	        	}
			},
	 });

	this.valores_lctos();
}


function valores_lctos() {
	$('#notafiscal-iss_reter').val(0);
	$.ajax({
		   type: 'post',
		    url: BASE_PATH + "notafiscal/valores_lancamento",
		    data     : $('#w0').serialize(),
	        success:function(result){
	        	$("#vlrs_servico" ).html( result );
			},
	 });
}


function salvar_nota() {
	tipo    = $('#notafiscal-tipo_busca').val();
	
	$.ajax({
		   type: 'post',
		    url: BASE_PATH + "notafiscal/salvar_nota",
		    data     : $('#w0').serialize(),
	        success:function(result){
	        	  var result = $.parseJSON(result);
		  		  $.each(result, function(index, value){
		  				if (index == 'erros') {
		  					erros = value;
		  				}
		  				if (index == 'id') {
		  					id = value;
		  				}
		  				if (index == 'status') {
		  					status = value;
		  				}
		  				
		  		  });	
		  		  
		  		  if (status == 1) {
		  			  alert (erros);
		  			  return false;
		  		  } else {
		        	window.open(BASE_PATH + "notafiscal/nfseletronica?id="+id,'_blank');
		        	var url = BASE_PATH + "notafiscal/create";
		        	location.href = url;
		  		  }	  
			},
	 });
	
}

function alterar_lancamento(id) {
	$.ajax({
		   type: 'post',
		    url: BASE_PATH + "notafiscal/apagar/"+id,
	        success:function(result){
	        	salvar_alteracao();
			},
	 });
}

function salvar_alteracao() {
	tipo    = $('#notafiscal-tipo_busca').val();
	
	$.ajax({
		   type: 'post',
		    url: BASE_PATH + "notafiscal/salvar_lancamento",
		    data     : $('#w0').serialize(),
	        success:function(result){
	        	  var result = $.parseJSON(result);
		  		  $.each(result, function(index, value){
		  				if (index == 'erros') {
		  					erros = value;
		  				}
		  				if (index == 'id') {
		  					id = value;
		  				}
		  				if (index == 'status') {
		  					status = value;
		  				}
		  				
		  		  });	
		  		  
		  		  if (status == 1) {
		  			  alert (erros);
		  			  return false;
		  		  } else {
		        	var url = BASE_PATH + "notafiscal/prestador";
		        	location.href = url;
		  		  }	  
			},
	 });
	
}


function salvar_lancamento() {
	tipo    = $('#notafiscal-tipo_busca').val();
	
	$.ajax({
		   type: 'post',
		    url: BASE_PATH + "notafiscal/salvar_lancamento",
		    data     : $('#w0').serialize(),
	        success:function(result){
	        	  var result = $.parseJSON(result);
		  		  $.each(result, function(index, value){
		  				if (index == 'erros') {
		  					erros = value;
		  				}
		  				if (index == 'id') {
		  					id = value;
		  				}
		  				if (index == 'status') {
		  					status = value;
		  				}
		  				
		  		  });	
		  		  
		  		  if (status == 1) {
		  			  alert (erros);
		  			  return false;
		  		  } else {
		        	var url = BASE_PATH + "notafiscal/prestador_create";
		        	location.href = url;
		  		  }	  
			},
	 });
	
}


function substituir_nota() {
	tipo    = $('#notafiscal-tipo_busca').val();
	
	$.ajax({
		   type: 'post',
		    url: BASE_PATH + "notafiscal/substituir_nota",
		    data     : $('#w0').serialize(),
	        success:function(result){
	        	  var result = $.parseJSON(result);
		  		  $.each(result, function(index, value){
		  				if (index == 'erros') {
		  					erros = value;
		  				}
		  				if (index == 'id') {
		  					id = value;
		  				}
		  				if (index == 'status') {
		  					status = value;
		  				}
		  				
		  		  });	
		  		  
		  		  if (status == 1) {
		  			  alert (erros);
		  			  return false;
		  		  } else {
		        	window.open(BASE_PATH + "notafiscal/nfseletronica?id="+id,'_blank');
		        	var url = BASE_PATH + "notafiscal/substituicao";
		        	location.href = url;
		  		  }	  
			},
	 });
	
}


function encerrar_emissao() {
	var url = BASE_PATH + "notafiscal/index";
	location.href = url;
}

function encerrar_lancamento() {
	var url = BASE_PATH + "notafiscal/prestador";
	location.href = url;
}


function encerrar_cancelamento() {
	var url = BASE_PATH + "notafiscal/cancelamento";
	location.href = url;
}

function encerrar_substituicao() {
	var url = BASE_PATH + "notafiscal/substituicao";
	location.href = url;
}


function entra_inf_obras(busca) {
	tipo    = $('#notafiscal-tipo_busca').val();
	if (tipo == 1) {
		valor = $('#notafiscal-nr_cpf').val();
	}
	if (tipo == 2) {
		valor = $('#notafiscal-nr_cnpj').val();
	}
	if (tipo == 3) {
		valor = $('#notafiscal-id_contribuinte').val();
	}
	if (tipo == 4) {
		valor = $('#notafiscal-id_carteira').val();
	}
	
	if (!valor) return false;
	
	$.ajax({
		   type: 'post',
		    url: BASE_PATH + "cadobra/lists",
		    data: {
		    	busca:busca,
		    	tipo:tipo,
		    	valor:valor,
		    },
		    success:function(result){
		    	$( "#notafiscal-obra_id" ).html( result );
			},
	 });
	
	
}

function verifica_tomador(tipo_tomador) {
	if (tipo_tomador == 1) {
		$.ajax({
			   type: 'post',
			    url: BASE_PATH + "cadobra/buscar_empresa",
			    success:function(result){
		        	  var result = $.parseJSON(result);
			  		  $.each(result, function(index, value){
			  				if (index == 'tipo') {
			  					tipo_pessoa = value;
			  				}
			  				if (index == 'documento') {
			  					documento = value;
			  				}
			  				if (index == 'nome') {
			  					nome = value;
			  				}
			  		  });
			  		  
			  			bb = '#dv_cpf_obra';
						$(bb).hide();
			  		  
			  			bb = '#dv_cnpj_obra';
						$(bb).hide();
			  		  
			  		  if (tipo_pessoa == 1) {
				  			bb = '#dv_cpf_obra';
							$(bb).show();
				  			$( "#select2-cadobra-tipo-container" ).html('Pessoa Fisica');
				  			$( "#cadobra-tipo" ).val('1');
				  			$( "#cadobra-cpf" ).val(documento);
				  			$( "#cadobra-obra_nome_fisica" ).val(nome);
				  			
				  			$('#cadobra-tipo').attr("disabled", "disabled");
				  			$('#cadobra-cpf').attr("disabled", "disabled");
				  			$('#cadobra-obra_nome_fisica').attr("disabled", "disabled");
				  			
			  		  }
			  		  if (tipo_pessoa == 2) {
				  			bb = '#dv_cnpj_obra';
							$(bb).show();
				  			$( "#select2-cadobra-tipo-container" ).html('Pessoa Juridica');
				  			$( "#cadobra-tipo" ).val('1');
				  			$( "#cadobra-cnpj" ).val(documento);
				  			$( "#cadobra-obra_nome_juridica" ).val(nome);
				  			
				  			$('#cadobra-tipo').attr("disabled", "disabled");
				  			$('#cadobra-cnpj').attr("disabled", "disabled");
				  			$('#cadobra-obra_nome_juridica').attr("disabled", "disabled");
				  			
				  	 }
				},
		 });
	}
	
	if (tipo_tomador == 2) {
		tipo    = $('#notafiscal-tipo_busca').val();
		valor   = '';
		if (tipo == 1) {
			valor = $('#notafiscal-nr_cpf').val();
		}
		if (tipo == 2) {
			valor = $('#notafiscal-nr_cnpj').val();
		}
		if (tipo == 3) {
			valor = $('#notafiscal-id_contribuinte').val();
		}
		if (tipo == 4) {
			valor = $('#notafiscal-id_carteira').val();
		}
		
		
		if (!valor) {
			if (tipo == 5) {
				alert ('Cadastro Provisório não Podera ser Incluido Obras !');
			} else
			if (tipo == 6) {
				alert ('Cadastro Provisório não Podera ser Incluido Obras !');
			} else {
				alert ('Favor informar o Tomador de Servicos !!! '+ tipo);
			}
			
			$( "#select2-cadobra-tipo_inscricao-container" ).html('Selecionar');
			$( "#cadobra-tipo_inscricao" ).val('0');
			
	  		  
			bb = '#dv_cnpj_obra';
			$(bb).hide();
			
			bb = '#dv_cpf_obra';
			$(bb).show();

  			$( "#select2-cadobra-tipo-container" ).html('Pessoa Fisica');
  			$( "#cadobra-tipo" ).val('1');
  			$( "#cadobra-cpf" ).val('');
  			$( "#cadobra-obra_nome_fisica" ).val('');
			
			return false;
		}
		
		bb = '#dv_cpf_obra';
		$(bb).hide();
  		  
		bb = '#dv_cnpj_obra';
		$(bb).hide();
		
		
		$.ajax({
			   type: 'post',
			    url: BASE_PATH + "cadobra/buscar_dados",
			    data: {
			    	tipo                   : tipo                   ,
			    	valor                  : valor                  ,
			    },
			    success:function(result){
		        	  var result = $.parseJSON(result);
			  		  $.each(result, function(index, value){
			  				if (index == 'tipo') {
			  					tipo_pessoa = value;
			  				}
			  				if (index == 'documento') {
			  					documento = value;
			  				}
			  				if (index == 'nome') {
			  					nome = value;
			  				}
			  				
			  		  });
			  		  
			  		  if (tipo_pessoa == 1) {
				  			bb = '#dv_cpf_obra';
							$(bb).show();
				  			$( "#select2-cadobra-tipo-container" ).html('Pessoa Fisica');
				  			$( "#cadobra-tipo" ).val('1');
				  			$( "#cadobra-cpf" ).val(documento);
				  			$( "#cadobra-obra_nome_fisica" ).val(nome);
				  			
				  			$('#cadobra-tipo').attr("disabled", "disabled");
				  			$('#cadobra-cpf').attr("disabled", "disabled");
				  			$('#cadobra-obra_nome_fisica').attr("disabled", "disabled");
				  			
			  		  }
			  		  if (tipo_pessoa == 2) {
				  			bb = '#dv_cnpj_obra';
							$(bb).show();
				  			$( "#select2-cadobra-tipo-container" ).html('Pessoa Juridica');
				  			$( "#cadobra-tipo" ).val('2');
				  			$( "#cadobra-cnpj" ).val(documento);
				  			$( "#cadobra-obra_nome_juridica" ).val(nome);
				  			
				  			$('#cadobra-tipo').attr("disabled", "disabled");
				  			$('#cadobra-cnpj').attr("disabled", "disabled");
				  			$('#cadobra-obra_nome_juridica').attr("disabled", "disabled");
				  			
				  	 }
				},
		 });
	}
	
}

function cadastrar_obra() {
	tipo_inscricao         = $('#cadobra-tipo_inscricao').val();        
	tipo                   = $('#cadobra-tipo').val();                  
	cpf                    = $('#cadobra-cpf').val();                   
	cnpj                   = $('#cadobra-cnpj').val();                  
	id_contribuinte        = $('#cadobra-id_contribuinte').val();       
	nome_obra              = $('#cadobra-nome_obra').val();             
	data_inicio            = $('#cadobra-data_inicio').val();           
	data_final             = $('#cadobra-data_final').val();            
	responsavel            = $('#cadobra-responsavel').val();           
	logradouro             = $('#cadobra-logradouro').val();            
	numero                 = $('#cadobra-numero').val();                
	bairro                 = $('#cadobra-bairro').val();                
	cep                    = $('#cadobra-cep').val();                   
	estado                 = $('#cadobra-estado_federacao_id').val();   
	cidade_id              = $('#cadobra-cidade_id').val();             
	email                  = $('#cadobra-email').val();                 
	telefone1              = $('#cadobra-telefone1').val();
	
	if (!tipo_inscricao) {
		alert ('Favor informar o Tipo de Inscrição da Obra !!!');
		return false;
	}
	
	
    documento = '';
	if (cpf) {
		documento = cpf;
	}
	if (cnpj) {
		documento = cnpj;
	}
		
	if (!documento) {	
		alert ('Favor informar o Documento da Obra !!!');
		return false;
	}
	if (!nome_obra) {
		alert ('Favor informar o Nome da Obra !!!');
		return false;
	}
	if (!data_inicio) {
		alert ('Favor informar a Data de Inicio da Obra !!!');
		return false;
	}
	if (!responsavel) {
		alert ('Favor informar o Responsavel da Obra !!!');
		return false;
	}
	if (!logradouro) {
		alert ('Favor informar o Endereço da Obra !!!');
		return false;
	}
	if (!estado) {
		alert ('Favor informar o Estado da Obra !!!');
		return false;
	}
	if (!cidade_id) {
		alert ('Favor informar a Cidade da Obra !!!');
		return false;
	}
	
	$.ajax({
		   type: 'post',
		    url: BASE_PATH + "cadobra/gravar_obra",
		    data: {
		    	tipo_inscricao         : tipo_inscricao         ,
		    	tipo                   : tipo                   ,
		    	cpf                    : cpf                    ,
		    	cnpj                   : cnpj                   ,
		    	id_contribuinte        : id_contribuinte        ,
		    	nome_obra              : nome_obra              ,
		    	data_inicio            : data_inicio            ,
		    	data_final             : data_final             ,
		    	responsavel            : responsavel            ,
		    	logradouro             : logradouro             ,
		    	numero                 : numero                 ,
		    	bairro                 : bairro                 ,
		    	cep                    : cep                    ,
		    	estado                 : estado                 ,
		    	cidade_id              : cidade_id              ,
		    	email                  : email                  ,
		    	telefone1              : telefone1              ,		    	
		    },
		    success:function(result){
		    	$("#dv_infobra" ).html( result );
		    	alert ('Cadastro de Obras - Obra Cadastrada com sucesso !');
			},
	 });
	
}

function mostrar_dados_obra(valor) {
	$.ajax({
		   type: 'post',
		    url: BASE_PATH + "notafiscal/mostrar_obra",
		    data: {
		    	valor : valor,		    	
		    },
		    success:function(result){
		    	$("#tab_3" ).html( result );
			},
	 });
}

