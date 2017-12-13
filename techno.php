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
<div class="cover-techno"></div>
<section class="container" id="container-techno-1">
    
    <div class="text-techno reveal">
        <div>
        <h2>Transformer l’énergie cinétique en énergie propre
            </h2>
<h3>
    La composition de nos solutions maximise la production d'énergie et la capture de données, en déclenchant plusieurs générateurs par pas ou par vibration sonore.

</h3>
            </div>
    </div>
</section>
<section class="container" id="container-techno-2">
    <div id="GIF-chaussure">
        <?php if($i == 1){
                    echo '<img src="img/anim-2.gif" alt="la production dénergie par pulse" id="animpas">';
                }else{
                    echo '<img src="img/anim-2nb.gif" alt="la production dénergie par pulse" id="animpas">';
                 } ?>
    
        </div>
    <div class="text-GIF reveal">
        <h2>Des sols intelligents</h2>

        <h3>Notre technologie se base sur la piézoélectricité, qui consiste à produire de l'électricité à partir des pas. Les sols absorbent l'impact des pas et transforment ainsi l'énergie cinétique des enfants en électricité.
        </h3>
    </div>
</section>
    <section class="container" id="container-techno-3">
    
    <div class="text-techno-2">
        <div class="div-onde none-desk">
            <?php if($i == 1){
                    echo '<img src="img/icon/onde.png" alt="onde" id="onden">';
                }else{
                    echo '<img src="img/icon/onden.png" alt="onde" id="onden">';
                 } ?>
            
        </div>
        <div class="sous-text-techno-2 reveal">
        <h2>Le son, data energizer</h2>
<h3>
    Notre solution intègre aussi des plaques murales qui absorbent les vibrations sonores et les transforment en énergie propre.</h3>
            </div>
        <div class="div-onde none-mobile">
            <?php if($i == 1){
                    echo '<img src="img/icon/onde.png" alt="onde" id="onde">';
                }else{
                    echo '<img src="img/sonnb.png" alt="onde" id="onde">';
                 } ?>
        </div>
    </div>
</section>
<?php include 'php/RS-footer.php'; ?>
<script src="js/change.js" type="text/javascript"></script>


</body>
</html>