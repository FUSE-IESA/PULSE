function change(){
    if($('option[name=jour]').is(':selected') ){
    	$('#link-mobile').attr('href','css/style.css');
    	$('#link-desktop').attr('href','css/media-desktop.css');
    }

    if($('option[name=nuit]').is(':selected') ){
    	$('#link-mobile').attr('href','css/style-nuit.css');
    	$('#link-desktop').attr('href','css/media-desktop-nuit.css');
    }
};

change();