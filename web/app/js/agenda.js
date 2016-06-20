$(function(){
});

function buscar_registros() {
	bsc_data_inicio  = $('#agenda-bsc_data_inicio').val(); 
	bsc_data_final   = $('#agenda-bsc_data_final').val();  
	bsc_cliente      = $('#agenda-bsc_cliente').val();        
	bsc_tipo 	     = $('#agenda-bsc_tipo').val();   
	bsc_forma        = $('#agenda-bsc_forma').val();         
	bsc_confirmada   = $('#agenda-bsc_confirmada').val();  
	
    $.ajax({
		   type: 'post',
			url: BASE_PATH + "agenda/index",
		    data: {
		    		filtros       : 1,
		    		bsc_data_inicio  : bsc_data_inicio ,
		    		bsc_data_final   : bsc_data_final  ,
		    		bsc_cliente      : bsc_cliente     ,
		    		bsc_tipo         : bsc_tipo        ,
		    		bsc_forma        : bsc_forma       ,		    		
		    		bsc_confirmada   : bsc_confirmada       ,
		    }, 
		    success:function(result){
				$("#dv_grid" ).html( result );
			},
		    error: function(data) { // if error occured
		         alert("Erro no Procedimento !!!");
		    },
	  });
	
}

function alterar_data(data) {
	medico = $('#agenda-bsc_medico').val();
	
	return $.ajax({
		 type: 'post',
		 url: BASE_PATH + "agenda/create",
		  data: {
			  alterar_data:1,
			  data: data,
			  medico:medico,
		  }, 
	      success:function(result){
	    	  $("#dv_grid").html(result);
  		  },
		  error: function(data) { // if error occured
		       alert("Erro na Abertura de Tela - Verifique !!!");
		  },
		});
	
}

function alterar_medico(medico) {
	bsc_data     = $('#agenda-bsc_data_agenda').val();

	return $.ajax({
		 type: 'post',
		 url: BASE_PATH + "agenda/create",
		  data: {
			  alterar_medico:2,
			  data:bsc_data,
			  medico:medico,
		  }, 
	      success:function(result){
	    	  $("#dv_grid").html(result);
  		  },
		  error: function(data) { // if error occured
		       alert("Erro na Abertura de Tela - Verifique !!!");
		  },
	});
}


function entra_cadastro(id,medico) {
	$("#myModal").modal("show");
	
	$.ajax({
	 type: 'post',
	  url: BASE_PATH + "agenda/entra_cadastro",
	  data: {id: id,medico:medico}, 
	      success:function(result){
	      	$("#div_mod").html(result);
		},
	  error: function(data) { // if error occured
	       alert("Erro na Abertura de Tela - Verifique !!!");
	  },
	});
}

function buscar_cadastro(id,medico) {
	$("#myModal").modal("show");
	
	bsc_data     = $('#agenda-bsc_data').val();
	bsc_cliente  = $('#agenda-nome_cliente').val();
	
	$.ajax({
	 type: 'post',
	  url: BASE_PATH + "agenda/buscar_cadastro",
	  data: {id: id,medico:medico,bsc_data:bsc_data,bsc_cliente:bsc_cliente}, 
	      success:function(result){
	      	$("#grid_cadastro").html(result);
		},
	  error: function(data) { // if error occured
	       alert("Erro na Abertura de Tela - Verifique !!!");
	  },
	});
}


function entra_dados(id_cliente,tipo) {
	id = $('#id').val();
	medico = $('#medico').val();
	return $.ajax({
	 type: 'post',
	 url: BASE_PATH + "agenda/create",
	  data: {salvar:1,tipo:tipo,id_cliente:id_cliente,id: id,medico:medico}, 
	      success:function(result){
	    	  $("#myModal").modal("hide");
	    	  if (result == 1) {
	    		  alert ('Atenção! O paciente ja está Agendado para esta data !');
	    		  return false;
	    	  }

	      	  $("#dv_grid").html(result);
		},
	  error: function(data) { // if error occured
	       alert("Erro na Abertura de Tela - Verifique !!!");
	  },
	});
}

function novo_cadastro(id,medico) {
	$("#myModal").modal("show");
	
	bsc_data     = $('#agenda-bsc_data').val();
	bsc_cliente  = $('#agenda-bsc_cliente').val();
	
	$.ajax({
	 type: 'post',
	  url: BASE_PATH + "agenda/cadastro",
	  data: {id: id,medico:medico}, 
	  
      success:function(result){
	    	  $("#div_mod").html(result);
    	},
	  error: function(data) { // if error occured
	       alert("Erro na Abertura de Tela - Verifique !!!");
	  },
	});
	
}

function salvar_cliente() {
	id 	   = $('#id').val();
	medico = $('#medico').val();

	clientes_nome     = $('#clientes-nome').val();
	clientes_fone  = $('#clientes-fone').val();
	clientes_celular  = $('#clientes-celular').val();
	clientes_formapgto  = $('#clientes-formapgto').val();
	clientes_convenio   = $('#clientes-convenio').val();
	clientes_matricula   = $('#clientes-matricula').val();
	clientes_dtavalid   = $('#clientes-dtavalid').val();
	clientes_vlrcons   = $('#clientes-vlrcons').val();
	
	return $.ajax({
		 type: 'post',
		 url: BASE_PATH + "agenda/create",
		  data: {salvar:2,
			  id: id,
			  medico:medico,
			  nome        :  clientes_nome ,      
			  fone        :  clientes_fone ,     
			  celular     :  clientes_celular,   
			  formapgto  :  clientes_formapgto,  
			  convenio   :  clientes_convenio  , 
			  matricula  :  clientes_matricula  ,
			  dtavalid   :  clientes_dtavalid   ,
			  vlrcons     :  clientes_vlrcons   ,			  
		  }, 
	      success:function(result){
	    	  if (result == 1) {
	    		  alert ('erro');
	    		  return false;
	    	  }
	    	  $("#div_mod").html(result);
   		  },
		  error: function(data) { // if error occured
		       alert("Erro na Abertura de Tela - Verifique !!!");
		  },
		});
}

function enviar_consulta(id,situacao) {
	bsc_medico     = $('#agenda-bsc_medico').val();
	bsc_data       = $('#agenda-bsc_data_agenda').val();
	
	
	if (situacao == 1) {
		return $.ajax({
			 type: 'post',
			 url: BASE_PATH + "agenda/provisorio",
			 data: {
				  id: id,
				  bsc_medico:bsc_medico,
				  bsc_data  :  bsc_data ,      
			 },
		     success:function(result){
			   		  $("#dv_grid").html(result);
		     },
			 error: function(data) { // if error occured
			       alert("Erro na Abertura de Tela - Verifique !!!");
			 },
		});
		
		return false;
	}

	
	return $.ajax({
		 type: 'post',
		 url: BASE_PATH + "agenda/create",
		  data: {enviar_consulta:1,
			  id: id,
			  bsc_medico:bsc_medico,
			  bsc_data  :  bsc_data ,      
		  }, 
	      success:function(result){
		   	  if (result == 1) {
		   		  if (confirm('Atenção - Existe Consulta em Andamento para Atendimento - Enviar este Paciente ? ')) {
			   			return $.ajax({
				   			 type: 'post',
				   			 url: BASE_PATH + "agenda/create",
				   			  data: {excluir_consulta:1,
				   				  bsc_medico:bsc_medico,
				   				  bsc_data  :  bsc_data ,      
				   			  }, 
				   		      success:function(result){
				   		    	  enviar_consulta(id);
				   		      },
				   		});
		   		  } else {
		   			  return false;
		   		  }		   			  
		   	  } if (result == 2) {
		   		  alert ('Atenção - Não Localizado os Dados deste Agendamento - Verifique ! ');
  		   		  return false;
		   	  } else {
		   		  $("#dv_grid").html(result);
		   	  }
	      },
		  error: function(data) { // if error occured
		       alert("Erro na Abertura de Tela - Verifique !!!");
		  },
	});
	
}


function salvar_cadastro(id) {
	
	bsc_medico     = $('#agenda-bsc_medico').val();
	bsc_data       = $('#agenda-bsc_data_agenda').val();
	
	$.ajax({
		 type: 'post',
		 url: BASE_PATH + "agenda/salvar_provisorio",
		  data: $("#Provisorio").serialize(),
	      success:function(result){
		   	   if (result == 1) {
		   		  alert ('Atenção - Ocorreu erro no cadastro de Paciente Provisório ! ');
		   		  return false;
		   	   }
	      }
	});
	
	return $.ajax({
		 type: 'post',
		 url: BASE_PATH + "agenda/create",
		  data: {enviar_consulta:1,
			  id: id,
			  bsc_medico:bsc_medico,
			  bsc_data  :  bsc_data ,      
		  }, 
	      success:function(result){
		   	  if (result == 1) {
		   		  if (confirm('Atenção - Existe Consulta em Andamento para Atendimento - Enviar este Paciente ? ')) {
			   			return $.ajax({
				   			 type: 'post',
				   			 url: BASE_PATH + "agenda/create",
				   			  data: {excluir_consulta:1,
				   				  bsc_medico:bsc_medico,
				   				  bsc_data  :  bsc_data ,      
				   			  }, 
				   		      success:function(result){
				   		    	  enviar_consulta(id);
				   		      },
				   		});
		   		  } else {
		   			return $.ajax({
			   			 type: 'post',
			   			 url: BASE_PATH + "agenda/create",
			   			  data: {
			   				  alterar_medico:2,
			   				  data:bsc_data,
			   				  medico:bsc_medico,
			   			  }, 
			   		      success:function(result){
			   		    	  $("#dv_grid").html(result);
			   	  		  },
			   			  error: function(data) { // if error occured
			   			       alert("Erro na Abertura de Tela - Verifique !!!");
			   			  },
		   			});
		   		  }		   			  
		   	  } if (result == 2) {
		   		  alert ('Atenção - Não Localizado os Dados deste Agendamento - Verifique ! ');
		   		  return false;
		   	  } else {
		   		  $("#dv_grid").html(result);
		   	  }
	      },
		  error: function(data) { // if error occured
		       alert("Erro na Abertura de Tela - Verifique !!!");
		  },
	});
}


function encerrar_provisorio() {
	
	bsc_medico     = $('#agenda-bsc_medico').val();
	bsc_data       = $('#agenda-bsc_data_agenda').val();
	
	
    return $.ajax({
   	 type: 'post',
   	 url: BASE_PATH + "agenda/create",
   	  data: {
   		  alterar_medico:2,
   		  data:bsc_data,
   		  medico:bsc_medico,
   	  }, 
         success:function(result){
       	  $("#dv_grid").html(result);
   	  },
   });
	
}


function excluir_consulta() {
	bsc_medico     = $('#agenda-bsc_medico').val();
	bsc_data       = $('#agenda-bsc_data_agenda').val();
	
	return $.ajax({
		 type: 'post',
		 url: BASE_PATH + "agenda/create",
		  data: {excluir_consulta:1,
			  bsc_medico:bsc_medico,
			  bsc_data  :  bsc_data ,      
		  }, 
	      success:function(result){
	   		  $("#dv_grid").html(result);
	      },
		  error: function(data) { // if error occured
		       alert("Erro na Abertura de Tela - Verifique !!!");
		  },
	});
}

function consultar_cliente(id) {
	$("#myModalCliente").modal("show");

	bsc_medico     = $('#agenda-bsc_medico').val();
	bsc_data       = $('#agenda-bsc_data_agenda').val();

	return $.ajax({
		 type: 'post',
		 url: BASE_PATH + "agenda/consultar_cliente",
		  data: {consultar_cliente:1,
			  id: id,
			  bsc_medico:bsc_medico,
			  bsc_data  :  bsc_data ,      
		  }, 
	      success:function(result){
		   		  $("#div_mod_cliente").html(result);
	      },
		  error: function(data) { // if error occured
		       alert("Erro na Abertura de Tela - Verifique !!!");
		  },
	});
	
}

function excluir_agendamento(id) {
	bsc_medico     = $('#agenda-bsc_medico').val();
	bsc_data       = $('#agenda-bsc_data_agenda').val();

	if (confirm('Confirma a Exclusão do Agendamento deste Paciente ?')) {
		return $.ajax({
			 type: 'post',
			 url: BASE_PATH + "agenda/excluir_consulta",
			  data: {id: id,
				  bsc_medico:bsc_medico,
				  bsc_data  :  bsc_data ,      
			  }, 
		      success:function(result){
			   		  $("#div_grid").html(result);
		      },
			  error: function(data) { // if error occured
			       alert("Erro na Abertura de Tela - Verifique !!!");
			  },
		});
	}
	
}