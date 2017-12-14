<?php 

include"php/session.php";

?><!DOCTYPE html>
    <html>

    <head>
        <?php include"php/head.php" ?>

    </head>

    <body>
 <header id="menu">

            <?php include"php/menu_mobile.php" ?>
        </header>
<div class="logo-mobile">
    <a href="index.php">
        <?php if($i == 1){
                    echo '<img  id="logo-techno" src="img/logomob.png" alt="logo pulse">';
                }else{
                    echo '<img  id="logo-techno" src="img/logomobnb.png" alt="logo pulse">';
                 } ?>
    </a>
</div>
<section class="container" id="container-contact-1">
    
    <div class="text-contact text-contact-mobile reveal">
        <div class="connexion">
            <figure class="centrer"><img id="img-stat-creche" src="img/icon/stats-creche.png" alt="statistiques" ></figure>
            <h3 class="titre blanc">Nos crèches produisent de l'électricité grâce à Pulse!</h3>
            <div class="reveal centrer"><a href="graph.php" class="animated-button victoria-one scroll btn-blanc">Découvrez vos statistiques</a></div>
        </div>
    </div>
    <div class="text-contact-2 reveal">
        <div class="connexion">
            <figure class="centrer">
                <?php if($i == 1){
                    echo '<img src="img/icon/bar-chart.png" alt="connexion" id="barnb" >';
                }else{
                    echo '<img src="img/graphnb.png" alt="connexion" id="barnb" >';
                 } ?>
                </figure>
            <h3 class="titre noir">Accédez aux statistiques 
de votre enfant</h3>
            <div class="reveal centrer"><a href="#?w=400" rel="popup_connexion" class="poplight inscrire animated-button victoria-one scroll btn-blanc">Connectez-vous</a></div>
            <p class="inscrire"><a href="#?w=400" rel="popup_inscription" class="poplight inscrire">Vous n’avez pas de compte ? Inscrivez-vous !</a></p>
        </div>
    </div>
</section>


<div id="popup_inscription" class="popup_block">
	
    <form id="inscription" method="post" action="core/addInscription.php">
        <h3 class="titre_inscription">S'inscrire</h3>
        <div class="form-group-contact">
            <p class="label">Nom complet</p>
            <input type="text" class="form-control-contact verif-1"  placeholder="Nom complet" name="nom">
        </div>
        <div class="form-group-contact">
            <p class="label">Adresse mail</p>
            <input type="text" class="form-control-contact verif-1" placeholder="Adresse mail" name="mail">
        </div>
        <div class="form-group-contact">
            <p class="label">Mot de passe</p>
            <input type="text" class="form-control-contact verif-1"  placeholder="Mot de passe" name="mdp">
        </div>
        <div class="form-group-contact">
            <p class="label">Confirmation du mot de passe</p>
            <input type="text" class="form-control-contact verif-1" placeholder="Confirmation du mot de passe" name="conf">
        </div>
        <div class="right">
            <button class="validation">Valider</button>
        </div>
    </form>
</div>
        
<div id="popup_connexion" class="popup_block">
	<h3 class="titre_inscription">Se connecter</h3>
        <div class="form-group-contact">
            <p class="label">Adresse mail</p>
            <input type="text" class="form-control-contact verif-1" id="nomInput" placeholder="Adresse mail" name="nom">
        </div>
        <div class="form-group-contact">
            <p class="label">Mot de passe</p>
            <input type="text" class="form-control-contact verif-1" placeholder="Mot de passe" name="nom">
        </div>
        <div class="right">
            <button class="validation" id="val_co">Valider</button>
        </div>
        <p class="inscrire"><a href="#?w=400" rel="popup_inscription" class="poplight inscrire" id="pascom">Vous n’avez pas de compte ? Inscrivez-vous !</a></p>
</div>
    

<?php include 'php/RS-footer.php'; ?>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<script>
    
    $(document).ready(function() {
        
        
var larg = $(window).width();  

 if(larg < 950){
    
    $("#btn-co").click(function(){
        
    if(larg < 950){
        $("#text-co").slideUp();
        document.getElementById('popup_connexion').style.display="block";
        document.getElementById('popup_connexion').style.transition='0.5s';
    }
        
    
    });
    $(".btn-inscr").click(function(){
    if(larg < 950){
        $("#text-co").slideUp();
        $("#popup_inscription").slideDown();
    }
        
    
    });

    $(".btn-close").click(function(){
        $("#popup_connexion").slideUp();
        $("#popup_inscription").slideDown();
        document.getElementById('popup_connexion').style.transition='0.5s';
    });
    
    $(".btn-close-co").click(function(){
    if(larg < 950){
        $("#popup_inscription").slideUp();
    }
        document.getElementById('popup_connexion').style.display="block";
        document.getElementById('popup_connexion').style.transition='0.5s';
    
    });

    
    
    

        
}else{        
    $('#pascom').click(function(){
        $('#fade , .popup_block').fadeOut(function() {
		$('#fade, a.close').remove();  //...ils disparaissent ensemble
            $('body').append('<div id="fade"></div>'); //Ajout du fond opaque noir
	//Apparition du fond - .css({'filter' : 'alpha(opacity=80)'}) pour corriger les bogues de IE
	$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn();
	});
    });
        
        //Lorsque vous cliquez sur un lien de la classe poplight et que le href commence par #
$('a.poplight[href^=#]').click(function() {
	var popID = $(this).attr('rel'); //Trouver la pop-up correspondante
	var popURL = $(this).attr('href'); //Retrouver la largeur dans le href

	//Récupérer les variables depuis le lien
	var query= popURL.split('?');
	var dim= query[1].split('&amp;');
	var popWidth = dim[0].split('=')[1]; //La première valeur du lien

	//Faire apparaitre la pop-up et ajouter le bouton de fermeture
	$('#' + popID).fadeIn().css({
		'width': Number(popWidth)
	})
	.prepend('<a href="#" class="close"></a>');

	//Récupération du margin, qui permettra de centrer la fenêtre - on ajuste de 80px en conformité avec le CSS
	var popMargTop = ($('#' + popID).height() + 80) / 2;
    
    var largeur_fenetre = $(window).width();
    if(largeur_fenetre >= 950){
	   var popMargLeft = ($('#' + popID).width() + 40) / 2;
    }else{
       var popMargLeft = ($('#' + popID).width() + 80) / 2; 
    }

	//On affecte le margin
	$('#' + popID).css({
		'margin-top' : -popMargTop,
		'margin-left' : -popMargLeft
	});

	//Effet fade-in du fond opaque
	$('body').append('<div id="fade"></div>'); //Ajout du fond opaque noir
	//Apparition du fond - .css({'filter' : 'alpha(opacity=80)'}) pour corriger les bogues de IE
	$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn();

	return false;
});

//Fermeture de la pop-up et du fond
$('a.close, #fade').live('click', function() { //Au clic sur le bouton ou sur le calque...
	$('#fade , .popup_block').fadeOut(function() {
		$('#fade, a.close').remove();  //...ils disparaissent ensemble
	});
	return false;
});
        
    $('#val_co').click(function(){
        $('#nomInput').css('border-bottom', 'solid 1px red');
    });
        
    
}
        
    });
        
</script>

    </body>

