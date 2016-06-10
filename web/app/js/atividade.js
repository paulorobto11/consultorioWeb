$(function(){
});

function mostrar_filtro(tela) {
	if (document.getElementById('dv_filtro').style.display == 'none') {
	    $.ajax({type: 'post',url: BASE_PATH + "remessa/lg_filtro",data: {tela:tela,filtro : 2,},success:function(result){$("#lg_filtro" ).html( result );},});
		bb = '#dv_filtro';
		$(bb).show();
	} else {
	    $.ajax({type: 'post',url: BASE_PATH + "remessa/lg_filtro",data: {tela:tela,filtro : 1,},success:function(result){$("#lg_filtro" ).html( result );},});
		bb = '#dv_filtro';
		$(bb).hide();
	}
}


function mostrar_descricao(valor) {
	$.post(BASE_PATH + "atividade-empresa/lists/"+valor, function( data ){
		$("#atividadeempresa-descricao" ).html( data );
	});
}

function entra_atividades(valor) {
	return  $.ajax({
	    	type: 'post',
	    	url: BASE_PATH + "atividade-empresa/entra_atividade",
	    	data: {valor : valor,},
	    	success:function(result){
	            var result = $.parseJSON(result);
	    		  $.each(result, function(index, value){
			  			  if (index == 'servico') servico = value;
			  			  if (index == 'aliquota') aliquota = value;
	  		  });
	    		aliquota = accounting.formatMoney(aliquota, "", 2, ".", ",");
	    		$('#atividadeempresa-servico').val(servico);
	    		$('#atividadeempresa-aliquota-disp').val(aliquota);
	    	},
	    });
}

function encerrar() {
	var url = BASE_PATH + "atividade-empresa/index";
	location.href = url;
	
}
