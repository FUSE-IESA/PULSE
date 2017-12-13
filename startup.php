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
    <section class="container none-mobile" id="container-start-1">  
        <div class="display-start-1">
            <div class="container-start-div-1 reveal">
                <h3><b>Pulse</b><br>
                <br>
                En recherche et production depuis 2012, Pulse Energie démarre son activité sur le marché industriel avec le développement de capteurs de pression piézoélectriques appliqué au secteur de la  garde d’enfants.
                </h3>
                <?php if($i == 1){
                                echo '<img class="resize" src="img/icon/green-energy.png" alt="energie" id="eclair">';
                            }else{
                                echo '<img class="resize" src="img/eclairnb.png" alt="energie" id="eclair">';
                             } ?>        
                <h3 id="enfantsb"><b>Les enfants</b><br>
                <br>
                Ils sont une source d’énergie sans fin et les adultes de demain. C’est pourquoi, aujourd’hui, Pulse Energie s’engage à créer avec parents et enfants l’énergie nécessaire pour un monde plus sain.
                </h3>
            </div>
        </div>
        <div class="display-start-2">
            <div class="container-start-div-2 reveal">
                <h3><b>Déjà visionnaires</b><br>
                    <br>
                Les jeunes générations sont l’énergie de demain. Pulse Energie propose aux entreprises de s’auto suffir en électricité, en ouvrant des crèches privées à l’intérieur de leurs locaux d’entreprises intéressées.
                    <br><br>
                Notre mission est d’ouvrir le regard des populations sur les nouveaux moyens de production d’énergie propre qui ne demandent qu'à s’intégrer dans notre quotidien.  
                </h3>
                <?php if($i == 1){
                                echo '<img src="img/runner.png" alt="production d énergie" id="basket">';
                            }else{
                                echo '<img src="img/basketnb.png" alt="production d énergie" id="basket">';
                             } ?>
            </div>
        </div>
    </section>
    <section class="container none-desk" id="container-start-1">
        <div class="display-start-1">
            <div class="container-start-div-1">
                <h3><b>Pulse</b><br>
                 <br>
                 En recherche et production depuis 2012, Pulse Energie démarre son activité sur le marché industriel avec le développement de capteurs de pression piézoélectriques appliqué au secteur de la  garde d’enfants.
                </h3>
                <div class="back-or">
                    <h3  id="enfantsb"><b>Les enfants</b><br>
                    <br>
                        Ils sont une source d’énergie sans fin et les adultes de demain. C’est pourquoi, aujourd’hui, Pulse Energie s’engage à créer avec parents et enfants l’énergie nécessaire pour un monde plus sain.
                    </h3>
                </div>
            </div>
            <div class="display-start-2">
                <div class="container-start-div-2">
                    <h3>
                         <b>Déjà visionnaires</b><br>
                         <br>
                         Les jeunes générations sont l’énergie de demain. Pulse Energie propose aux entreprises de s'auto suffir en électricité, en ouvrant des crèches privées à l’intérieur de leurs locaux
                    </h3>
                    <div class="picto-flex">
                        <div class="picto">
                            <?php if($i == 1){
                                echo '<img src="img/runner.png" alt="production d énergie" id="basket2">';
                            }else{
                                echo '<img src="img/basketnb.png" alt="production d énergie" id="basket2">';
                             } ?>
                            
                        </div>
                        <div class="picto">
                            <?php if($i == 1){
                                echo '<img class="resize" src="img/icon/green-energy.png" alt="energie" id="eclair2">';
                            }else{
                                echo '<img class="resize" src="img/eclairnb.png" alt="energie" id="eclair2">';
                             } ?>
                            
                        </div>
                    </div>
                 </div>
             </div>
        </div>
 </section>
<section class="container" id="container-start-2">

<div class="display-start-3 reveal">
    <h2>Comment fonctionne notre technologie ? </h2>
    <h3>Notre technologie est un système de revêtement de sol personnalisé multifonctionnel. Au fur et à mesure que les gens avancent sur le sol, leur poids amène les générateurs à induction électromagnétique à produire de l'électricité. Le revêtement est équipé d'une API sans fil qui transmet l'analyse des données de mouvement en temps réel.
    </h3>
</div>
</section>
<?php include 'php/RS-footer.php'; ?>
</body>
</html>
