$(function(){
});

function buscar_registros() {
	bsc_data_inicio  = $('#clientes-bsc_data_inicio').val(); 
	bsc_data_final   = $('#clientes-bsc_data_final').val();  
	bsc_cliente      = $('#clientes-bsc_cliente').val();        
	bsc_tipo 	     = $('#clientes-bsc_tipo').val();   
	bsc_forma        = $('#clientes-bsc_forma').val();         
	
    $.ajax({
		   type: 'post',
			url: BASE_PATH + "clientes/index",
		    data: {
		    		filtros       : 1,
		    		bsc_data_inicio  : bsc_data_inicio ,
		    		bsc_data_final   : bsc_data_final  ,
		    		bsc_cliente      : bsc_cliente     ,
		    		bsc_tipo         : bsc_tipo        ,
		    		bsc_forma        : bsc_forma       ,		    		
		    }, 
		    success:function(result){
				$("#dv_grid" ).html( result );
			},
		    error: function(data) { // if error occured
		         alert("Erro no Procedimento !!!");
		    },
	  });
	
}

function validar_cpf(valor) {
	   cpf = $('#clientes-cpf').val();
	   if (!cpf) return false;
	   if (validarCPF(cpf)) {
		   return true;
	   } else {
		   alert ('Numero do CPF: '+cpf+' esta invalido - Verifique!!!');
		   $('#clientes-cpf').val('');
		   document.getElementById('clientes-cpf').focus;
		   return false;
	   }
}

function alterar_data(valor) {

	$.ajax({
		 type: 'post',
		  url: BASE_PATH + "clientes/idade",
		  data: {
			  valor         : valor         ,
		  },
		  success:function(result){
		    	$('#clientes-idade').removeAttr('disabled');
		    	$('#clientes-idade').val(result);
//		    	$('#clientes-idade').attr("disabled", "disabled");
		  },
	});
	
}
function tirar_foto() {
	Webcam.attach( '#my_camera' );
	$("#myModal").modal("show");
}

function take_snapshot() {
	// take snapshot and get image data
	Webcam.snap( function(data_uri) {
		alert (data_uri);
		// display results in page
		document.getElementById('results').innerHTML = 
			'<h2>Foto do Cliente:</h2>' + 
			'<img src="'+data_uri+'"/>';
	} );
}

function preview_snapshot() {
	
	// freeze camera so user can preview pic
	Webcam.freeze();
	
	// swap button sets
	document.getElementById('pre_take_buttons').style.display = 'none';
	document.getElementById('post_take_buttons').style.display = '';
}

function cancel_preview() {
	// cancel preview freeze and return to live camera feed
	Webcam.unfreeze();
	
	// swap buttons back
	document.getElementById('pre_take_buttons').style.display = '';
	document.getElementById('post_take_buttons').style.display = 'none';
}

function save_photo() {
	codigo = $('#codigo_cliente').val();
	
	// actually snap photo (from preview freeze) and display it
	Webcam.snap( function(data_uri) {
		// display results in page
		document.getElementById('results').innerHTML = 
			'<img src="'+data_uri+'"/>';
		
		// swap buttons back
		document.getElementById('pre_take_buttons').style.display = '';
		document.getElementById('post_take_buttons').style.display = 'none';
		$.ajax({
			 type: 'post',
			 url: BASE_PATH + "clientes/salvar_imagem",
			 data     : {codigo:codigo,imagem:data_uri},
			 success:function(result){
				 Webcam.reset( '#my_camera' );
				 $('#dv_foto1').show();
				 $('#dv_foto2').hide();
				 $("#myModal").modal("hide");
				 $('#foto_cliente').val(result);
			 },
		});		
		
		
	} );
}

function excluir_foto() {
	codigo = $('#codigo_cliente').val();
	
	if (confirm('Confirma a Exclusão desta foto do Cliente ?')) {
		document.getElementById('results').innerHTML = '&lt;&lt; Inserir a Foto do Cliente &gt;&gt;'; 
		$.ajax({
				 type: 'post',
				 url: BASE_PATH + "clientes/excluir_imagem",
				 data     : {codigo:codigo},
				 success:function(result){
					 $('#dv_foto1').hide();
					 $('#dv_foto2').show();
					 $('#foto_cliente').val('');
				 },
			});		
	}
}




function entra_dados(id_cliente) {
	
	id = $('#id').val();
	medico = $('#medico').val();
	
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


function validarCPF(cpf) {  
	    cpf = cpf.replace(/[^\d]+/g,'');    
	    if(cpf == '') return false; 
	    // Elimina CPFs invalidos conhecidos    
	    if (cpf.length != 11 || 
	        cpf == "00000000000" || 
	        cpf == "11111111111" || 
	        cpf == "22222222222" || 
	        cpf == "33333333333" || 
	        cpf == "44444444444" || 
	        cpf == "55555555555" || 
	        cpf == "66666666666" || 
	        cpf == "77777777777" || 
	        cpf == "88888888888" || 
	        cpf == "99999999999")
	            return false;       
	    // Valida 1o digito 
	    add = 0;    
	    for (i=0; i < 9; i ++)       
	        add += parseInt(cpf.charAt(i)) * (10 - i);  
	        rev = 11 - (add % 11);  
	        if (rev == 10 || rev == 11)     
	            rev = 0;    
	        if (rev != parseInt(cpf.charAt(9)))     
	            return false;       
	    // Valida 2o digito 
	    add = 0;    
	    for (i = 0; i < 10; i ++)        
	        add += parseInt(cpf.charAt(i)) * (11 - i);  
	    rev = 11 - (add % 11);  
	    if (rev == 10 || rev == 11) 
	        rev = 0;    
	    if (rev != parseInt(cpf.charAt(10)))
	        return false;       
	    return true;   
	}
