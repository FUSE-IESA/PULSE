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

<section class="page-404">
    <div class="container-404">
    <?php if($i == 1){
            echo '<img src="img/bbmerci.gif" alt="enfant dors gif energie pulse" id="bbmerci">';
        }else{
            echo '<img src="img/bbmercinb.gif" alt="enfant dors gif energie pulse" id="bbmerci">';
         } ?>
    
    <div class="text-404">
        <h3>Merci pour votre inscription !</h3>
    <p>Nous reviendrons vers vous dès que votre compte Parent aura été créé</p>
    </div>

    </div>
</section>
<div class="back"><a href="index.php">Retourner vers le site</a></div>

<?php include 'php/RS-footer.php'; ?>
</body>
</html>