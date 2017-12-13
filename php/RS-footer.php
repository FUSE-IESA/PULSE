<div class="RS">
    <a href="https://www.facebook.com/Pulse-498524280520336/?hc_ref=ARQyihxwZbyR5G3phK3AuOwAE2AgbNtTIyZcHaJ0MQFFC2WUDJOMFGOQxC_vnb1G-3A&fref=nf">
        <?php if($i == 1){
                    echo '<img src="img/icon/facebook.png" alt="facebook" id="facebooknb">';
                }else{
                    echo '<img src="img/facebooknb.png" alt="facebook" id="facebooknb">';
                 } ?>
                 </a>
    <a href="https://twitter.com/pulse_energie">
        <?php if($i == 1){
                    echo '<img src="img/icon/Twitter.png" alt="twitter" id="twitternb">';
                }else{
                    echo '<img src="img/twitternb.png" alt="twitter" id="twitternb">';
                 } ?>
                 </a>
    <a href="https://www.linkedin.com/company/18358369/">
        <?php if($i == 1){
                    echo '<img src="img/icon/linked_in.png" alt="linkedin" id="linkedinnb">';
                }else{
                    echo '<img src="img/linkedinnb.png" alt="linkedin" id="linkedinnb">';
                 } ?>
                 </a>
    <a href="https://medium.com/@pulseenergie">
        <?php if($i == 1){
                    echo '<img src="img/icon/meidum.png" alt="medium" id="mediumnb">';
                }else{
                    echo '<img src="img/mediumnb.png" alt="medium" id="mediumnb">';
                 } ?>
                 </a>

</div>
<footer>
    <div class="RS-desk">
    <a href="https://www.facebook.com/Pulse-498524280520336/?hc_ref=ARQyihxwZbyR5G3phK3AuOwAE2AgbNtTIyZcHaJ0MQFFC2WUDJOMFGOQxC_vnb1G-3A&fref=nf">
        <?php if($i == 1){
                    echo '<img src="img/icon/facebook.png" alt="facebook" id="facebooknb">';
                }else{
                    echo '<img src="img/facebooknb.png" alt="facebook" id="facebooknb">';
                 } ?>
    </a>
    <a href="https://twitter.com/pulse_energie">
        <?php if($i == 1){
                    echo '<img src="img/icon/Twitter.png" alt="twitter" id="twitternb">';
                }else{
                    echo '<img src="img/twitternb.png" alt="twitter" id="twitternb">';
                 } ?>
    </a>
    <a href="https://www.linkedin.com/company/18358369/">
        <?php if($i == 1){
                    echo '<img src="img/icon/linked_in.png" alt="linkedin" id="linkedinnb">';
                }else{
                    echo '<img src="img/linkedinnb.png" alt="linkedin" id="linkedinnb">';
                 } ?>
    </a>
    <a href="https://medium.com/@pulseenergie">
        <?php if($i == 1){
                    echo '<img src="img/icon/meidum.png" alt="medium" id="mediumnb">';
                }else{
                    echo '<img src="img/mediumnb.png" alt="medium" id="mediumnb">';
                 } ?>
    </a>

</div>
    <p>© 2017 Pulse Energie - Tous droits réservés -<a href="img/mentions.pdf" target="_blank"> Mentions Légales</a> - <a href="img/kitpresse.zip">Presse</a> </p>
</footer>


 <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="js/loader.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/scrollreveal.js"></script>
        <script>

        function bot(){
            var h = $('#menu-mobile').height();
                var w = $('#menu-mobile').width();
                w2 = w*4;
                w3 = w2 / 100;
                var nbot = h + w3;
            
            var largeur_fenetre = $(window).width();
            if(largeur_fenetre>950){
                nbot = 0;
            }


            $('footer').css('margin-bottom', nbot);
        };

        bot();

        $(window).resize(function() {
            bot();
        });
            
            $('#mode_eco').click(function(){
                var mob = $("#css_mobile").attr('href');
                if(mob.indexOf("nuit") == -1){
                   $('#check_eco').removeAttr("checked");
                    var test = 2;
                    $("#css_mobile").attr('href', 'css/style-nuit.css');
                    $("#css_desktop").attr('href', 'css/media-desktop-nuit.css');
                    $("#batterie").attr('src', 'img/batterienb.gif');
                    $("#pasnb").attr('src', 'img/pasnb.png');
                    $("#cri").attr('src', 'img/crinb.png');
                    $("#mailnb").attr('src', 'img/mailnb.png');
                    $("#nb404").attr('src', 'img/enfantendort.gif');
                    $("#bbmerci").attr('src', 'img/bbmercinb.gif');
                    $("#eclair").attr('src', 'img/eclairnb.png');
                    $("#basket").attr('src', 'img/basketnb.png');
                    $("#eclair2").attr('src', 'img/eclairnb.png');
                    $("#basket2").attr('src', 'img/basketnb.png');
                    $("#barnb").attr('src', 'img/graphnb.png');
                    $("#onde").attr('src', 'img/sonnb.png');
                    $("#onden").attr('src', 'img/icon/onden.png');
                    $("#logo-static").attr('src', 'img/pulsenb.png');
                    $("#animpas").attr('src', 'img/anim-2nb.gif');
                    $("#logopulse").attr('src', 'img/icon/pulse-logonb.png');
                    $("#produit").attr('src', 'img/icon/ideanb.png');
                    $("#statnb").attr('src', 'img/icon/bar-chartnb.png');
                    $("#emailnb").attr('src', 'img/icon/emailnb.png');
                    $("#eco").attr('src', 'img/icon/sleep-modenb.png');
                    $("#loc").attr('src', 'img/icon/localisationnb.png');
                    $("#mailor").attr('src', 'img/icon/mailnb.png');
                    $("#phone").attr('src', 'img/icon/phone-callnb.png');
                    $("#logo-techno").attr('src', 'img/logomobnb.png');
                    $("#facebooknb").attr('src', 'img/facebooknb.png');
                    $("#twitternb").attr('src', 'img/twitternb.png');
                    $("#mediumnb").attr('src', 'img/meidumnb.png');
                    $("#linkedinnb").attr('src', 'img/linkedinnb.png');
                }else{
                   $('#check_eco').attr("checked", "true")
                    var test = 1;
                    $("#css_mobile").attr('href', 'css/style.css');
                    $("#css_desktop").attr('href', 'css/media-desktop.css');
                    $("#batterie").attr('src', 'img/icon/picto1.gif');
                    $("#pasnb").attr('src', 'img/icon/pas.png');
                    $("#cri").attr('src', 'img/icon/picto3.png');
                    $("#mailnb").attr('src', 'img/icon/mail.png');
                    $("#nb404").attr('src', 'img/404.gif');
                    $("#bbmerci").attr('src', 'img/bbmerci.gif');
                    $("#eclair").attr('src', 'img/icon/green-energy.png');
                    $("#basket").attr('src', 'img/runner.png');
                    $("#eclair2").attr('src', 'img/icon/green-energy.png');
                    $("#basket2").attr('src', 'img/runner.png');
                    $("#barnb").attr('src', 'img/icon/bar-chart.png');
                    $("#onde").attr('src', 'img/icon/onde.png');
                    $("#onden").attr('src', 'img/icon/onde.png');
                    $("#logo-static").attr('src', 'img/logo-blanc.svg');
                    $("#animpas").attr('src', 'img/anim-2.gif');
                    $("#logopulse").attr('src', 'img/icon/pulse-logo.png');
                    $("#produit").attr('src', 'img/icon/idea.png');
                    $("#statnb").attr('src', 'img/icon/bar-chart.png');
                    $("#emailnb").attr('src', 'img/icon/email.png');
                    $("#eco").attr('src', 'img/icon/sleep-mode.png');
                    $("#loc").attr('src', 'img/icon/localisation-or.png');
                    $("#mailor").attr('src', 'img/icon/mail-or.png');
                    $("#phone").attr('src', 'img/icon/phone-call-or.png');
                    $("#logo-techno").attr('src', 'img/logomob.png');
                    $("#facebooknb").attr('src', 'img/icon/facebook.png');
                    $("#twitternb").attr('src', 'img/icon/Twitter.png');
                    $("#mediumnb").attr('src', 'img/icon/meidum.png');
                    $("#linkedinnb").attr('src', 'img/icon/linked_in.png');
                };
                
                $.ajax({
                  type: "POST",
                  url: "core/change.php",
                  data: { ref: test }
                }).done(function( msg )
                        {                       
                        });
            });
            
            function maj(){
                var mob = $("#css_mobile").attr('href');
                if(mob.indexOf("nuit") == -1){
                    var test = 2;
                    $("#css_mobile").attr('href', 'css/style-nuit.css');
                    $("#css_desktop").attr('href', 'css/media-desktop-nuit.css');
                    $("#batterie").attr('src', 'img/batterienb.gif');
                    $("#pasnb").attr('src', 'img/pasnb.png');
                    $("#cri").attr('src', 'img/crinb.png');
                    $("#mailnb").attr('src', 'img/mailnb.png');
                    $("#nb404").attr('src', 'img/enfantendort.gif');
                    $("#bbmerci").attr('src', 'img/bbmercinb.gif');
                    $("#eclair").attr('src', 'img/eclairnb.png');
                    $("#basket").attr('src', 'img/basketnb.png');
                    $("#eclair2").attr('src', 'img/eclairnb.png');
                    $("#basket2").attr('src', 'img/basketnb.png');
                    $("#barnb").attr('src', 'img/graphnb.png');
                    $("#onde").attr('src', 'img/sonnb.png');
                    $("#onden").attr('src', 'img/icon/onden.png');
                    $("#logo-static").attr('src', 'img/pulsenb.png');
                    $("#animpas").attr('src', 'img/anim-2nb.gif');
                    $("#logopulse").attr('src', 'img/icon/pulse-logonb.png');
                    $("#produit").attr('src', 'img/icon/ideanb.png');
                    $("#statnb").attr('src', 'img/icon/bar-chartnb.png');
                    $("#emailnb").attr('src', 'img/icon/emailnb.png');
                    $("#eco").attr('src', 'img/icon/sleep-modenb.png');
                    $("#loc").attr('src', 'img/icon/localisationnb.png');
                    $("#mailor").attr('src', 'img/icon/mailnb.png');
                    $("#phone").attr('src', 'img/icon/phone-callnb.png');
                    $("#logo-techno").attr('src', 'img/logomobnb.png');
                    $("#facebooknb").attr('src', 'img/facebooknb.png');
                    $("#twitternb").attr('src', 'img/twitternb.png');
                    $("#mediumnb").attr('src', 'img/meidumnb.png');
                    $("#linkedinnb").attr('src', 'img/linkedinnb.png');
                }else{
                    var test = 1;
                    $("#css_mobile").attr('href', 'css/style.css');
                    $("#css_desktop").attr('href', 'css/media-desktop.css');
                    $("#batterie").attr('src', 'img/icon/picto1.gif');
                    $("#pasnb").attr('src', 'img/icon/pas.png');
                    $("#cri").attr('src', 'img/icon/picto3.png');
                    $("#mailnb").attr('src', 'img/icon/mail.png');
                    $("#nb404").attr('src', 'img/404.gif');
                    $("#bbmerci").attr('src', 'img/bbmerci.gif');
                    $("#eclair").attr('src', 'img/icon/green-energy.png');
                    $("#basket").attr('src', 'img/runner.png');
                    $("#eclair2").attr('src', 'img/icon/green-energy.png');
                    $("#basket2").attr('src', 'img/runner.png');
                    $("#barnb").attr('src', 'img/icon/bar-chart.png');
                    $("#onde").attr('src', 'img/icon/onde.png');
                    $("#onden").attr('src', 'img/icon/onde.png');
                    $("#logo-static").attr('src', 'img/logo-blanc.svg');
                    $("#animpas").attr('src', 'img/anim-2.gif');
                    $("#logopulse").attr('src', 'img/icon/pulse-logo.png');
                    $("#produit").attr('src', 'img/icon/idea.png');
                    $("#statnb").attr('src', 'img/icon/bar-chart.png');
                    $("#emailnb").attr('src', 'img/icon/email.png');
                    $("#eco").attr('src', 'img/icon/sleep-mode.png');
                    $("#loc").attr('src', 'img/icon/localisation-or.png');
                    $("#mailor").attr('src', 'img/icon/mail-or.png');
                    $("#phone").attr('src', 'img/icon/phone-call-or.png');
                    $("#logo-techno").attr('src', 'img/logomob.png');
                    $("#facebooknb").attr('src', 'img/icon/facebook.png');
                    $("#twitternb").attr('src', 'img/icon/Twitter.png');
                    $("#mediumnb").attr('src', 'img/icon/meidum.png');
                    $("#linkedinnb").attr('src', 'img/icon/linked_in.png');
                }
                
                
                
                $.ajax({
                  type: "POST",
                  url: "core/change.php",
                  data: { ref: test }
                }).done(function( msg )
                        {                       
                        });
            }
            
        </script>  
        <script>
            window.sr = ScrollReveal();
            sr.reveal('.reveal', {
                duration: 900
            });
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110168202-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-110168202-1');
        </script>
        <script type="text/javascript" src="js/script.js"></script>
