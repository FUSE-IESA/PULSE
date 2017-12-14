<?php 

include"php/session.php";

include "inc/init.inc.php";

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
    <div class="map-full none-desk"></div>
    
    <div class="text-contact reveal">
        <div class="adresse">
            <h3>Ça se passe où ?</h3>
            <div class="direction"><img class="none-mobile" src="img/icon/localisation.png">
                <?php if($i == 1){
                    echo '<img class="none-desk" src="img/icon/localisation-or.png" id="loc">';
                }else{
                    echo '<img class="none-desk" src="img/icon/localisationnb.png" id="loc">';
                 } ?>
                <p>17 boulevard Montmartre<br>
                    75002 PARIS</p></div>
            <div class="direction"><img class="none-mobile" src="img/icon/mail-adresse.png" alt="mail">
                <?php if($i == 1){
                    echo '<img class="none-desk" src="img/icon/mail-or.png" alt="mail" id="mailor">';
                }else{
                    echo '<img class="none-desk" src="img/icon/mailnb.png" alt="mail" id="mailor">';
                 } ?>
                <p>contact@pulse-energie.com</p></div>
            <div class="direction"><img class="none-mobile" src="img/icon/phone-call.png" alt="téléphone">
                <?php if($i == 1){
                    echo '<img class="none-desk" src="img/icon/phone-call-or.png" alt="téléphone" id="phone">';
                }else{
                    echo '<img class="none-desk" src="img/icon/phone-callnb.png" alt="téléphone" id="phone">';
                 } ?>
                <p>(+33)1 84 05 51 59</p></div>

        </div>
    </div>
    <div class="text-contact-2 reveal">
        <form id="form-mail-contact" method="post" action="core/addMessage.php">
            <h2 id="formulaire-contact">Laissez-nous un message</h2>

            <div class="form-group-contact">
                <input type="text" class="form-control-contact verif-1" id="nomInput" placeholder="Nom complet" name="nom">
            </div>



            <div class="form-group-contact">
                <input type="email" class="form-control-contact verif-2" id="emailInput" placeholder="Votre email" name="email">
            </div>



            <div class="form-group-contact-message">
                <textarea id="messageTextarea-contact"  class="verif-3" name="message" placeholder="Ici votre message"></textarea>
            </div>
            <div class="btn-envoyer-contact">
                <input id="envoyer-contact" type="submit"  name="envoyer" value="Envoyer">
            </div>


        </form>

    </div>
</section>


 <section id="map" class="none-mobile"></section>



<?php include 'php/RS-footer.php'; ?>


 <script>

     function initMap() {
         // Create a map object and specify the DOM element for display.
         var map = new google.maps.Map(document.getElementById('map'), {
             center: {lat: 48.8715848, lng: 2.3410596999999598},
             zoom: 16,
             styles: [
                 {elementType: 'geometry', stylers: [{color: '#3F3F3F'}]},
                 {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
                 {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
                 {
                     featureType: 'poi',
                     elementType: 'labels.text.fill',
                     stylers: [{color: '#FFFF'}]
                 },
                 {
                     featureType: 'poi.park',
                     elementType: 'geometry',
                     stylers: [{color: '#263c3f'}]
                 },
                 {
                     featureType: 'poi.park',
                     elementType: 'labels.text.fill',
                     stylers: [{color: '#6b9a76'}]
                 },
                 {
                     featureType: 'road',
                     elementType: 'geometry',
                     stylers: [{color: '#5b5a5a'}]
                 },
                 {
                     featureType: 'road',
                     elementType: 'geometry.stroke',
                     stylers: [{color: '#212a37'}]
                 },
                 {
                     featureType: 'road',
                     elementType: 'labels.text.fill',
                     stylers: [{color: '#9ca5b3'}]
                 },
                 {
                     featureType: 'road.highway',
                     elementType: 'geometry',
                     stylers: [{color: '#746855'}]
                 },
                 {
                     featureType: 'road.highway',
                     elementType: 'geometry.stroke',
                     stylers: [{color: '#1f2835'}]
                 },
                 {
                     featureType: 'road.highway',
                     elementType: 'labels.text.fill',
                     stylers: [{color: '#f3d19c'}]
                 },
                 {
                     featureType: 'transit',
                     elementType: 'geometry',
                     stylers: [{color: '#2f3948'}]
                 },
                 {
                     featureType: 'transit.station',
                     elementType: 'labels.text.fill',
                     stylers: [{color: '#e2d088'}]
                 },
                 {
                     featureType: 'water',
                     elementType: 'geometry',
                     stylers: [{color: '#17263c'}]
                 },
                 {
                     featureType: 'water',
                     elementType: 'labels.text.fill',
                     stylers: [{color: '#515c6d'}]
                 },
                 {
                     featureType: 'water',
                     elementType: 'labels.text.stroke',
                     stylers: [{color: '#17263c'}]
                 }
             ]
         });
         var contentString = '<div id="content">'+
             '<div id="siteNotice">'+
             '</div>'+
             '<h1 id="firstHeading" class="firstHeading">Pulse Energie</h1>'+
             '<div id="bodyContent">'+
             '<p><b>17 boulevard Montmartre</b></p>75002 PARIS<p>'+'</div>';


         var infowindow = new google.maps.InfoWindow({
             content: contentString
         });

         var marker = new google.maps.Marker({
             position: {lat: 48.8715848, lng: 2.3410596999999598},
             map: map,
             title: 'PULSE ENERGIE'
         });
         marker.addListener('click', function() {
             infowindow.open(map, marker);
         });
     }










 </script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiAkVJOR_6e1BSQpfJo_5z57FuhnJjuN0&callback=initMap"
         async defer></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
 <script>
     $(document).ready(function(){

         var $pseudo = $('.form-control-contact');

         function verifier(){
             if($('.verif-1').val() == ""){ // si le champ est vide
                 $('.verif-1').css({
                     color : 'red',
                     'background-color': '#ffe8e8',
                     transition : '0.5s'
                 }); // on affiche le message d'erreur
             }
             if($('.verif-2').val() == ""){ // si le champ est vide
                 $('.verif-2').css({
                     color : 'red',
                     'background-color': '#ffe8e8',
                     transition : '0.5s'
                 }); // on affiche le message d'erreur
             }
             if($('.verif-3').val() == ""){ // si le champ est vide
                 $('.verif-3').css({
                     color : 'red',
                     'background-color': '#ffe8e8',
                     transition : '0.5s'
                 }); // on affiche le message d'erreur
             }
         }

//         $('#envoyer-contact').click(function(e){
//             e.preventDefault(); // on annule la fonction par défaut du bouton d'envoi
//
//             // puis on lance la fonction de vérification sur tous les champs :
//             verifier();
//         });

     });
 </script>

    </body>

