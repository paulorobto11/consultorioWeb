<div class="box box-warning">
	<div class="box-body">
        <div class="row">
        	<div class="col-md-12">
        		<div class="form-group">
            		<label class="control-label" for="verifica-senha-p">Senha Master</label>
            		<input id="verifica-senha-p" class="form-control" type="password" name="VerificaSenha[p]">
        		</div>
        	</div>
        </div>
	</div>
	<div class="box-footer">
		<button type="button" class="btn btn-warning" id="verifica-senha-btnConfirmar">Confirmar</button>
	</div>
</div>


<?php $script = <<< JS

$('#verifica-senha-btnConfirmar').on('click', function(e){
    var dadosPost = {
        p: $('#verifica-senha-p').val()
    };
        
    $.ajax({
		method: 'post',
		url: BASE_PATH + 'empresa/verifica-senha-master',
		data: dadosPost,
		beforeSend: function(){
			toastr.warning('<i class="fa fa-spinner fa-pulse"></i> Verificando a senha...');
		}		
	})
    .done(function(e){
        try {
			var retorno = JSON.parse(e);
			if (retorno.success == 1){
                //Fecha a modal
                $('#mbVerificaSenhaMaster').modal('hide');
        
                toastr.remove();
                toastr.success('Senha válida');
                $('#btnFecharVenda').trigger('click');
			}
			else {
				throw (retorno.message != '' ? retorno.message : 'Erro interno do servidor');
			}
		} catch (error) {			
			$.confirm({
				title: error,
				content: ' ',
				confirmButton: 'Ok',
				cancelButton: false,
				backgroundDismiss: false,
			});
		}
    })
    .fail(function(e){
        $.confirm({
			title: 'Não foi possível verificar a senha informada',
			content: 'Erro interno do servidor',
			confirmButton: 'Ok',
			cancelButton: false,
			backgroundDismiss: false,
		});
    });        
});

JS;
$this->registerJS($script);
?>