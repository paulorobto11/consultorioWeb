var loading = loading || {};

loading.turn = {
    on: function(div,classe) {
    	$(div).show();
    	$(classe).show();
    },
    off: function(div,classe) {
    	$(div).hide();
    	$(classe).hide();
    }
}

    
$(function(){
	
	$('a').click(function (event)
	{
	    //Valida se é do tipo confirm, ou se está chamando uma modal
		var fog = ($(this).data('toggle') == 'true' ? true : false);
	    var confirm = ($(this).data('confirm') != '' ? true : false);
	    var modal = ($(this).parent().data('modal') != '' ? true : false);
	    var dataFog = ($(this).data('fog') == 'false' ? false : true);
	    
	    var showFog = true;
	    if (!dataFog){
	    	showFog = false;
	    }
	    else if (!fog){
	    	showFog = false;
	    }
	    else if (confirm || modal){
	    	showFog = false;
	    }
	    
	    if (showFog){
	    	var str = $(this).attr('href');
	    	
	    	if (undefined != str)
	    	{
	    		if(str.indexOf('#') == -1)
	    		{
	    			loading.turn.on('.loading-fog','.cssload-loader');
	    		}
	    	} else {
	    		if (!confirm){
	    			loading.turn.on('.loading-fog','.cssload-loader');
	    		}        
	    	}
	    }
	});

	
	$(":button").click(function(event) {
		//Valida se é do tipo dropdown, ou se está chamando uma modal
		var fog = ($(this).data('toggle') == 'true' ? true : false);
	    var dropdown = $(this).hasClass('dropdown-toggle');
	    var modal = ($(this).data('toggle') == 'modal' ? true : false);
	    
	    var showFog = true;
	    if (!fog){
	    	showFog = false;
	    }
	    else if (dropdown || modal){	    	
	    	showFog = false;
	    }
	    
	    if (showFog){
	    	var str = $(this).attr('href');
	    	if (undefined != str)
	    	{
	    		if(str.indexOf('#') ==-1)
	    		{
	    			loading.turn.on('.loading-fog','.cssload-loader');
	    		}
	    	} else {
	    		loading.turn.on('.loading-fog','.cssload-loader');
	    	}
	    }
	});

	$(window).bind('beforeunload',function(){
	    loading.turn.on('.loading-fog','.cssload-loader');
	});

});