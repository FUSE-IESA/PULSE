<?php 

include"php/session.php";

include "inc/init.inc.php";

$merci = "<p class='verif'>Votre adresse mail a été enregistré !";
$erreur = "<script>alert('Adresse incorrecte');</script>";
if(isset($_POST['mail'])){

    if(!filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL))
    {
        echo $erreur;
    }else{
        $requeteInsertion = $pdo->prepare('INSERT INTO mail (mail) VALUES (:mail)');
        $requeteInsertion->bindValue('mail',$_POST['mail'],PDO::PARAM_STR);
        $requeteInsertion->execute();
        function redirect($page){
            //redirection
            header('Location: '.$page);
            //on bloque le reste des executions
            exit();
        }
        redirect('../merci.php');
    }
}

?><!DOCTYPE html>
    <html>

    <head>
        <?php include"php/head.php" ?>
    </head>

<body onload="init();">
    <header id="menu">
        <?php include"php/menu_mobile.php" ?>
    </header>
    <div class="loader">
    </div>

    <section class="container" id="container-1">
        <div id="cover-logo">
            <a href="index.php">
                <?php if($i == 1){
                    echo '<img  id="logo-techno" src="img/logomob.png" alt="logo pulse">';
                }else{
                    echo '<img  id="logo-techno" src="img/logomobnb.png" alt="logo pulse">';
                 } ?>
            </a>
        </div>
        <div id="text-cont-1" class="reveal">
            <div class="trait"></div>
            <div class="trait-h">
                <h2 class="h2-cont-2">Et si votre <span class="couleur">enfant</span> pouvait </h2>
                <h2 class="h2-cont-2">enfin être <span class="couleur">utile</span> ?</h2>
            </div>
        </div>
        <div class="box-btn reveal">
            <a href="stats.php" class="animated-button victoria-one scroll" id="btn_home">Rentabilisez-le</a>
        </div>
    </section>
        <section class="container" id="container-2">

            <div id="box-home-left">
                <div class="text-home-1">
                    <div class="h-text-home">
                    <h2>Produisons de l’énergie verte</h2>
                    <h3>
                        <b>Nous sommes une jeune start-up spécialisée dans le développement d’innovations technologiques dans le domaine de l’énergie propre.</b><br><br>Notre activité se positionne autour de la conception et la commercialisation de capteurs de pression piézoélectriques appliquée au secteur de la garde d’enfants.

                    </h3>
                    </div>
                </div>

            </div>
            <div id="box-home-left-1"></div>
            <div id="box-home-right">
            <div class="text-home-2">
                <?php if($i == 1){
                    echo "<img src='img/icon/picto1.gif' alt='accumulateur d'énergie' id='batterie'>";
                }else{
                    echo "<img src='img/batterienb.gif' alt='accumulateur d'énergie' id='batterie'>";
                 } ?>
                    
                <div class="anim-pile">
                    <span class="prod-energie" id="monNombre"></span><p class="prod-energie"> &nbspWatts</p>
                </div>
                <p>Produit par les crèches depuis notre création</p>
            </div>
            </div>






        </section>
        <section class="container" id="container-3">
            <div class="div-picto-home">
                <?php if($i == 1){
                    echo '<img class="img-picto-home desktop_none" src="img/icon/pas.png" alt="pas" id="pasnb">';
                }else{
                    echo '<img class="img-picto-home desktop_none" src="img/footnb.png" alt="pas" id="pasnb">';
                 } ?>
                 <?php if($i == 1){
                    echo '<img class="img-picto-home mobile_none" src="img/icon/pas.png" alt="pas" id="pasnb">';
                }else{
                    echo '<img class="img-picto-home mobile_none" src="img/pasnb.png" alt="pas" id="pasnb">';
                 } ?>
                    
                <p><b>Un pas d'enfant</b><br>
                    produit entre 4 et 7 watts</p>
            </div>
            <div class="div-picto-home">
                <?php if($i == 1){
                    echo '<img class="img-picto-home desktop_none" src="img/icon/picto3.png" alt="cri" id="cri">';
                }else{
                    echo '<img class="img-picto-home desktop_none" src="img/wavenb.png" alt="cri" id="cri">';
                 } ?>
                <?php if($i == 1){
                    echo '<img class="img-picto-home mobile_none" src="img/icon/picto3.png" alt="cri" id="cri">';
                }else{
                    echo '<img class="img-picto-home mobile_none" src="img/crinb.png" alt="cri" id="cri">';
                 } ?>                
                <p><b>Un cri d'enfant</b><br>
                    produit 2h d’électricité</p></div>
                        

        </section>
        <section class="container" id="container-4">
            <div id="cover-logo-2">
                <p>Un enfant produit<br class="none-desk"> 10 000 pas par jour, <br>soit &nbsp40 000 watts
                    <br><b>Il produit, vous consommez ! </b>
                </p>
            </div>
        </section>
        <section class="container" id="container-5">
            <div id="div-form">
                <div class="img-form none-mobile">
                <?php if($i == 1){
                    echo '<img src="img/icon/mail.png" alt="mail" id="mailnb">';
                }else{
                    echo '<img src="img/mailnb.png" alt="mail" id="mailnb">';
                 } ?>
                
                
                </div>
                <div class="text-input">
                <div><p class="text-input-1">Inscrivez-vous à notre <b>newsletter</b>

                </p>
                    <p class="text-input-2">et soyez à jour sur les dernières nouvelles !</p>
                </div>
                <form method="post" action="" id="form-news">
                    <input type="text" class="form-control" id="mailInput" placeholder="Adresse email" name="mail">
                    <input id="envoyer-news" type="submit" name="envoyer" value="OK">

                </form>
                </div>
            </div>
        </section>

        <?php include 'php/RS-footer.php'; ?>
<script type="text/javascript">
                                    
// la date de début du compteur (avec mois-1)
                                    
var date = new Date(2017,12,10);
                                    
// la date de maintenant
                                    
var now = new Date();
                                    
// le nombre de départ
                                    
var number = 100003029;
                                    
// l'incrément
                                    
var increment = 2;
                                    
// le nombre de seconde
                                    
var second = 3;
                                    
// nombre total de seconde depuis la date de départ
                                    
var secondTotal = (now.getTime()-date.getTime())/1000;
                                    
// incrément total

var incrementTotal = (secondTotal/3)*2;
                                    
// nombre total arrondie
number = Math.round(number+incrementTotal);
function init(){
                                        
document.getElementById("monNombre").innerHTML = number;
                                        
// appel de la fonction d'incrémentation toutes les x secondes
                                        
setInterval('incrementation()',second*1500);
                                    
}
                                    
function incrementation(){
                                        
number = number+increment;
                                        
document.getElementById("monNombre").innerHTML = number;
}
                                
</script>

      

    </body>

    </html>
