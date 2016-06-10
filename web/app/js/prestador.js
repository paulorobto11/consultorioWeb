$(function(){
});

function alterar_mesano() {
	var url = BASE_PATH + "prestador/index";
	location.href = url;
	
}

function alterar_competencia() {
	mes_comp = $('#notafiscal-bsc_mes_comp').val();
	ano_comp = $('#notafiscal-bsc_ano_comp').val();
    $.ajax({
		   type: 'post',
			url: BASE_PATH + "prestador/index",
		    data: {
		    		filtros       : 2,
		    		bsc_mes_comp   : mes_comp   ,
		    		bsc_ano_comp   : ano_comp   ,
		    }, 
		    success:function(result){
				$("#dv_grid" ).html( result );
			},
		    error: function(data) { // if error occured
		         alert("Erro no Procedimento !!!");
		    },
	  });
	
	
}

function encerrar_competencia() {
	mes_comp = $('#prestador-mes_comp').val();
	ano_comp = $('#prestador-ano_comp').val();
	
    $.ajax({
		   type: 'post',
			url: BASE_PATH + "prestador/encerramento",
		    data: {
		    		filtros       : 2,
		    		bsc_mes_comp   : mes_comp   ,
		    		bsc_ano_comp   : ano_comp   ,
		    }, 
	  });
}