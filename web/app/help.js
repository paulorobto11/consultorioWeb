$('element').on('change', function(){
    var dialog = $.dialog({        	
    	backgroundDismiss: false,
        title: 'De que forma gostaria de gerar as parcelas?',
        content:  '<div class="box-body">'
		         +' <div class="col-md-8 col-md-offset-2">'
		         +'   <button class="btn btn-primary pull-left" id="btnParcelasAutomatica">Automática</button>'
		         +'   <button class="btn btn-success pull-right">Manual</button>'
		         +' </div>'
		         +'</div>',
        onOpen: function(){
        	this.$content.find('button#btnParcelasAutomatica').click(function(){
        		dialog.close();
            	$('#linkParcelas').trigger('click');
            });
        }, 
    });
});