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
            echo '<img src="img/404.gif" alt="enfant dors gif energie pulse" id="nb404">';
        }else{
            echo '<img src="img/enfantendort.gif" alt="enfant dors gif energie pulse" id="nb404">';
         } ?>
    <div class="text-404">
        <h3>OUPS.. </h3>
    <p>Cette page n'a plus d'énergie...</p>
    </div>

    </div>
</section>
<div class="back"><a href="index.php">Retourner vers le site</a></div>

<?php include 'php/RS-footer.php'; ?>    
</body>
</html>