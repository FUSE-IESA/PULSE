<?php
include "inc/init.inc.php";
$merci = "<p  class='verif'>Votre adresse mail a été enregistré !";
$erreur = ""; 
if(isset($_POST['envoyer']) AND $_POST['envoyer'] == "Envoyer")
{
	extract($_POST);
	
	if(!filter_var($mail,FILTER_VALIDATE_EMAIL))
	{
		$erreur .= "<script>alert('Adresse incorrecte');</script>"; 		
	}	
    if(empty($erreur))
	{
         echo $erreur;
	
		$requeteInsertion = $pdo->prepare('INSERT INTO mail (mail) VALUES (:mail)'); 

		
		$requeteInsertion->bindValue('mail',$mail,PDO::PARAM_STR);
		
		$requeteInsertion->execute(); 
           
	} else{
        echo $erreur; 
    }
 //$content .= $erreur; 
}

 
$mail 			= (isset($_POST['mail'])) ? $_POST['mail'] : null; 
 



    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pulse-Energie</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/logo-small.png">
    <meta property="og:url" content="http://www.pulse-energie.fr" />
    <meta property="og:description" content="Pulse Energie est une jeune start-up dont l’activité se positionne autour du développement de capteurs de pression piézoélectriques dans le secteur de la garde d’enfants." />
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="description" content="Pulse Energie est une jeune start-up dont l’activité se positionne autour du développement de capteurs de pression piézoélectriques dans le secteur de la garde d’enfants.">
    <meta name="author" content="FUSE">
    <meta name="copyright" content="A REMPLIR">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700" rel="stylesheet">
    
    

</head>

<body id="fullpage">
    <section class="container" id="container-1">
        <div class="reveal">
        <img id="logo-blanc" src="img/logo-blanc.svg" alt="logo pulse energie blanc">
        <img id="logo-noir" src="img/logo.svg" alt="logo pulse energie">
        <p>Avec Pulse Energie, <br>Des milliers de jeunes enfants construisent déjà l'énergie de demain.</p>
        <a class="scroll"  href="#container-2" id="first-button">En savoir plus</a>
        </div>


    </section>
    <section class="container" id="container-2">
        <div class="case-container-2 reveal">
            <div class="picto">
            <img src="img/runner.svg" alt=""></div>
            <div class="text-container-2">
        <h3>Accomplir plus, chaque jour.</h3>
        <p><b>Pulse Energie</b> est une jeune start-up fondée en 2017, dont l’activité se positionne autour du développement de capteurs de pression piézoélectriques dans le secteur de la garde d’enfants.</p>
        <a id="second-button" href="#container-3" class="scroll">Je suis intéressé</a>
                </div>
        </div>
    </section>
    <section class="container" id="container-3">
        <div class="low-container">
        <h4 class="reveal">Intéressé par le projet ?<br> Laissez-nous vous contacter :</h4>
            <form method="post" action="">
        <input type="text" class="form-control" id="mailInput" placeholder="votrenom@exemple.com" name="mail">
        <input id="envoyer" type="submit" name="envoyer" value="Envoyer">
            
            </form>

    <div class="contain-circle">
        <a href=""  target="_blank"><img src="img/RS__Facebook.png" class="circle"></a>
        <a href="https://www.linkedin.com/company/18358369/" target="_blank"><img src="img/RS__Linkedin.png" class="circle"></a>
        <a href="https://twitter.com/pulse_energie" target="_blank"><img src="img/RS__Twitter.png" class="circle"></a>
        <a href="https://medium.com/@pulseenergie" target="_blank"><img src="img/RS__Medium.png" class="circle"></a>
    </div>
        </div>
    </section>
    <footer><p>© Copyright 2017 - <a href="img/mentions-l%C3%A9gales.pdf">Mentions Légales</a></p></footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/scrollreveal.js"></script>
    <script>
    window.sr = ScrollReveal();
sr.reveal('.reveal', {duration : 900});
        
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110168202-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110168202-1');
</script>
    <script type="text/javascript" src="js/script.js"></script>
    

</body>
</html>