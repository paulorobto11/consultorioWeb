$(function(){
	$('#modalButton').click(function (){
		$('#modal').modal('show')
		.find('#modalContent')
		.load($(this).attr('value'),function( response, status, xhr ){
            if(status == 'success')
            {
                loading.turn.off('.loading-fog','.cssload-loader');
            }
            if(status == 'error')
            {
                loading.turn.off('.loading-fog','.cssload-loader');
            }
        });
	});
	
	$('.modalBtn').click(function (){
		$($(this).data('modal')).modal('show')
			.find('.modalContent')
			.load($(this).attr('value',function( response, status, xhr ){
                if(status == 'success')
                {
                    loading.turn.off('.loading-fog','.cssload-loader');
                }
                if(status == 'error')
                {
                    loading.turn.off('.loading-fog','.cssload-loader');
                }
            }));
	});

    $('.modal').on('hidden.bs.modal', function( response, status, xhr ){
        if(status == 'success')
        {
            loading.turn.off('.loading-fog','.cssload-loader');
        }
        if(status == 'error')
        {
            loading.turn.off('.loading-fog','.cssload-loader');
        }
    })



});
