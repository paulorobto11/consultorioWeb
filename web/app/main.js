var BASE_PATH = '/consultorioWeb/web/';
var USER_IMG = BASE_PATH + 'img/user2.jpg';
var URL_USER_IMG = '/img/user.jpg';

$(function () {
	jconfirm.defaults = {
        title: 'Olá',
        content: 'Deseja confirmar a operação?',
        contentLoaded: function(){},
        icon: '',
        confirmButton: 'Ok',
        cancelButton: 'Cancelar',
        confirmButtonClass: 'btn-primary',
        cancelButtonClass: 'btn-default',
        theme: 'white',
        animation: 'scale',
        animationSpeed: 400,
        animationBounce: 1.5,
        keyboardEnabled: false,
        container: 'body',
        confirm: function () {},
        cancel: function () {},
        backgroundDismiss: true,
        autoClose: false,
        closeIcon: null,
        columnClass: 'col-md-6 col-md-offset-3',
        onOpen: function(){},
        onClose: function(){},
        onAction: function(){}
    };
	
	//maskmoney
	$(".mask-decimal-2").maskMoney({prefix:'', allowNegative: true, thousands:'', decimal:',',  precision: 2});
	$(".mask-decimal-3").maskMoney({prefix:'', allowNegative: true, thousands:'', decimal:',',  precision: 3});
	
	//Deixa a tela em full screen
	$(".btnTelaMax").on("click", function(){
		//Esconde o btn maximar e mostra o restaurar
		$(this).hide();
		$('.btnTelaNormal').show();
		
        //Miniza a barra lateral
		if (!$('body').hasClass('sidebar-collapse')){
            $('body').addClass('sidebar-collapse');
        }
        
        //Chama a função para maximizar a tela
        toggleScreen();
	});
	//Deixa a tela em tamanho normal
	$(".btnTelaNormal").on("click", function(){
		//Esconde o btn restaurar e mostra o maximar 
		$(this).hide();
		$('.btnTelaMax').show();
        
        //Chama a função para minizar a tela
        toggleScreen();
	});	
});

function toggleScreen(){
	if (!document.fullscreenElement &&    // alternative standard method
        !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement ) {  // current working methods
	      if (document.documentElement.requestFullscreen) {
	        document.documentElement.requestFullscreen();
	      } else if (document.documentElement.msRequestFullscreen) {
	        document.documentElement.msRequestFullscreen();
	      } else if (document.documentElement.mozRequestFullScreen) {
	        document.documentElement.mozRequestFullScreen();
	      } else if (document.documentElement.webkitRequestFullscreen) {
	        document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
	      }
	} else {
	      if (document.exitFullscreen) {
	        document.exitFullscreen();
	      } else if (document.msExitFullscreen) {
	        document.msExitFullscreen();
	      } else if (document.mozCancelFullScreen) {
	        document.mozCancelFullScreen();
	      } else if (document.webkitExitFullscreen) {
	        document.webkitExitFullscreen();
	      }
	}
}

function getHtmlSenhaMaster(idBotao){
	if (idBotao == undefined || idBotao == '')
		idBotao = 'senha-master-btnValida';
		
	var HTML_SENHA_MASTER = ''
		+ '<div class="box box-default top30">\n'
		+ '	<div class="box-body">\n'
		+ '		<span class="help-block">Essa ação pode ser liberada através da <strong>Senha Master</strong></span>\n'
		+ '		<div class="input-group">\n'
		+ '			<input type="password" placeholder="Senha para liberação" class="form-control" id="senha-master_senha">\n'
		+ '			<span class="input-group-btn">\n'
		+ '				<button class="btn btn-warning" id="#btnSenhaMaster#"><i class="fa fa-key"></i> Validar Senha</button>\n'
		+ '			</span>\n'
		+ '		</div>\n'
		+ '	</div>\n'
		+ '</div>';
	
	return HTML_SENHA_MASTER.replace('#btnSenhaMaster#', idBotao);
}

