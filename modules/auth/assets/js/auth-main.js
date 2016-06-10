$(function()
{


     $('#button_abrir_permissao').click(function ()
                {
					
					$('#modal_auth_permissao').modal('show');
					$('.auth-loading').show();
	$('#modal_auth_permissao').find('#modalContent_auth_permissao').load($(this).attr('value'),function( response, status, xhr ){
						if(status == 'success')
						{
							$('.auth-loading').hide();
						}
					});
					
                }

);

     $('#button_abrir_list').click(function ()
                {
					
					$('#modal_auth_list').modal('show');
					$('.auth-loading').show();
	$('#modal_auth_list').find('#modalContent_auth_list').load($(this).attr('value'),function( response, status, xhr ){
						if(status == 'success')
						{
							$('.auth-loading').hide();
						}
					});
					
                }

);

$('#busca-rbac-button').keypress(function (e) {
  if (e.which == 13) {
    e.preventDefault();
    $('form#busca-rbac').submit();
    return false; 
  }
  
});

$('#button-busca-rbac').click(function(e)
 {
	 $('form#busca-rbac').submit();
    
	return false;
});

});