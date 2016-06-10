$(function(){
});


function entra_dados(id_cliente) {
	
	id = $('#id').val();
	medico = $('#medico').val();
	
//	alert (id);
//	alert (medico);
//	alert (id_cliente);
	
//	return false
	
	return $.ajax({
	 type: 'post',
	 url: BASE_PATH + "agenda/entra_clientes",
	  data: {id_cliente:id_cliente,id: id,medico:medico}, 
	      success:function(result){
	    	  $("#myModal").modal("hide");
	      	  $("#dv_grid").html(result);
		},
	  error: function(data) { // if error occured
	       alert("Erro na Abertura de Tela - Verifique !!!");
	  },
	});
}