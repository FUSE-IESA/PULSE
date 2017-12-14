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
    <script src="js/js1.js"></script>
    <script src="js/js2.js"></script>

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
<section class="container-graph">
    <div id="bloc-text-graph">
        <h2><b>Rentabilisez vos enfants</b><br>
        Ils ont de la valeur, découvrez-la !</h2>
        <div class="cont-div-graph">
            <div class="div-graph">
                <h3>Entrez le nombre de berceaux</h3>
                <input type="text" class="form-simul" id="berceauInput" placeholder="Nombre de Berceaux" name="berceaux">
            </div>
            <div class="div-graph">
                <h3>Surface de l’espace enfant en m2</h3>
                <input type="text" class="form-simul" id="m2Input" placeholder="Surface de l’espace enfant en m2" name="mail">
            </div>
        </div>
        <input id="simul" type="submit" name="lancer-simul" value="Lancer la simulation">
    </div>
</section>
    
<div class="center ben_none" id="ben">
    <p class="benefice">Vous voulez bénéficier de toute l’énergie que pourrait produire votre surface ? </p>
    <p id="cb_enfant"></p>
</div>
    
<section id="container-graph-gauge">
    <div class="gauge-graph">
        <div id="graph">
            <div style="width: 100%">
                <canvas id="canvas"></canvas>
            </div>
        </div>
        <div id="cont-gauge">
           <div id="gauge">
                <canvas id="foo" style="width: 100%;"></canvas>
                <h4 class="nb_graph">Kw</h4>
            </div>
        </div>
    </div>
</section>


<div class="bloc" id="animico">
    <p class="centrer"><b>Grâce à l’énergie produite, vous pourriez allumer : </b></p>
<div class="bloc1">
<svg class="circle-1" id="animated" viewbox="0 0 100 100">
 
  <path id="progress" stroke-linecap="round" stroke-width="5" stroke="<?php if($i == 1){
                    echo '#e2d088';
                }else{
                    echo '#000'; } ?>" fill="none"
        d="M50 10
           a 40 40 0 0 1 0 80
           a 40 40 0 0 1 0 -80">
  </path>
    <image x="0" y="23" xlink:href="img/icon/ampoule.png" alt="ampoule" width="100" height="50" />
    
  <text display="none" id="count" x="50" y="50" text-anchor="middle" dy="7" font-size="20">100%</text>
</svg>
</div>

<div id="parrentprogress">
<div id="progressbar1"><div id="progressb1" ><div id="pbaranim"></div></div></div>
</div>
<div class="bloc2">

<svg class="circle-2" id="animated2" viewbox="0 0 100 100">
 
  <path id="progress2" stroke-linecap="round" stroke-width="5" stroke="
        <?php if($i == 1){
                    echo '#e2d088';
                }else{
                    echo '#000'; } ?>" fill="none"
        d="M50 10
           a 40 40 0 0 1 0 80
           a 40 40 0 0 1 0 -80">
  </path>
  <text display="none" id="count2" x="50" y="50" text-anchor="middle" dy="7" font-size="20">100%</text>
<image x="0" y="23" xlink:href="img/icon/print.png" alt="imprimante" width="100" height="50" />
  </svg>

</div>
<div id="parrentprogress">
<div id="progressbar2"><div id="progressb2" ><div id="pbaranim"></div></div></div>
</div>
<div class="bloc3">
<svg class="circle-3" id="animated3" viewbox="0 0 100 100">
 
  <path id="progress3" stroke-linecap="round" stroke-width="5" stroke="<?php if($i == 1){
                    echo '#e2d088';
                }else{
                    echo '#000'; } ?>" fill="none"
        d="M50 10
           a 40 40 0 0 1 0 80
           a 40 40 0 0 1 0 -80">
  </path>
  <text display="none" id="count3" x="50" y="50" text-anchor="middle" dy="7" font-size="20">100%</text>
<image  x="0" y="23" xlink:href="img/icon/ecran.png" alt="ecran" width="100" height="50" />
  </svg>

</div>
<div id="parrentprogress">
<div id="progressbar3"><div id="progressb3" ><div id="pbaranim"></div></div></div>
</div>
<div class="bloc4">
<svg class="circle-4" id="animated4" viewbox="0 0 100 100">
 
  <path id="progress4" stroke-linecap="round" stroke-width="5" stroke="<?php if($i == 1){
                    echo '#e2d088';
                }else{
                    echo '#000'; } ?>" fill="none"
        d="M50 10
           a 40 40 0 0 1 0 80
           a 40 40 0 0 1 0 -80">
  </path>
  <image  x="0" y="23" xlink:href="img/icon/frigo.png" alt="frigo" width="100" height="50" />
  <text display="none" id="count4" x="50" y="50" text-anchor="middle" dy="7" font-size="20">100%</text>
</svg>

</div>
<div id="parrentprogress">
<div id="progressbar4"><div id="progressb4" ><div id="pbaranim"></div></div></div>
</div>
<div class="bloc5">
<svg class="circle-5" id="animated5" viewbox="0 0 100 100">
 
  <path id="progress5" stroke-linecap="round" stroke-width="5" stroke="<?php if($i == 1){
                    echo '#e2d088';
                }else{
                    echo '#000'; } ?>" fill="none"
        d="M50 10
           a 40 40 0 0 1 0 80
           a 40 40 0 0 1 0 -80">
  </path>
  <image  x="0" y="23" xlink:href="img/icon/ascens.png" alt="ascenseur" width="100" height="50" />
  <text display="none" id="count5" x="50" y="50" text-anchor="middle" dy="7" font-size="20">100%</text>
</svg>

</div>
</br>
<div class="nb5">
<h5 id="nb5" > Lumière à volonté </h5>
</div>
<div class="nb7">
<h5 id="nb7" > Assez d'imprimantes </h5>
</div>
<div class="nb10">
<h5 id="nb10" > Beaucoup d'ordinateurs </h5>
</div>
<div class="nb20">
<h5 id="nb20" > Pas mal de frigo </h5>
</div>
<div class="nb50">
<h5 id="nb50" > Tous les ascenseurs </h5>
</div>
    
    
    
    
    
    
<section class="container-graph-mail">
    <div id="div-form-graph">
        <div class="text-input-graph">
            <div><p class="text-input-graph-1">Notre service vous intéresse ? Restons en contact :</p>
            </div>
            <form method="post" action="" id="form-graph">
                <input type="text" class="form-control-graph" id="mailInput-graph" placeholder="Adresse email" name="mail">
                <input id="envoyer-graph" type="submit" name="envoyer" value="Valider">

            </form>
        </div>
    </div>
</section>
<?php include 'php/RS-footer.php'; ?>


<script src="js/gauge.min.js"></script>
<script src="js/js.js"></script>
<script src="js/snap.svg-min.js"></script>
<script>
    var mob = $("#css_mobile").attr('href');
                    if(mob.indexOf("nuit") == -1){
                        un = '#e2d088';  
                        deux = '#3F3F3F';
                        trois = "#F1F1F1";
                        fonce = "#3F3F3F";
                        clair = "#e2d088";
                        
                        
                    }else{
                        un = '#000';
                        deux = '#BBBBBB';
                        trois = '#FFF';
                        
                        fonce = "#000"
                        clair = "#BBBBBB";
                       }
    
	$('#progress').css('display','none');
	$('#progress2').css('display','none');
	$('#progress3').css('display','none');
	$('#progress4').css('display','none');
	$('#progress5').css('display','none');
	$("#progressbar1").css('display','none');
	$("#progressbar2").css('display','none');
	$("#progressbar3").css('display','none');
	$("#progressbar4").css('display','none');
	$("#nb5").css('display','none');
	$("#nb7").css('display','none');	
	$("#nb10").css('display','none');
	$("#nb20").css('display','none');
	$("#nb50").css('display','none');


        var nbenfant = $("#berceauInput").val();
        var surface = $("#m2Input").val();
        
        var moyEn = 480 * nbenfant;
        
        $('.nb_graph').html(moyEn+'kW');
        
        var janvier = 0.75*moyEn;
        var fevrier = 0.80*moyEn;
        var mars = moyEn;
        var avril = 0.95*moyEn;
        var mai = 0.80*moyEn;
        var juin = moyEn;
        var juillet = 0.25*moyEn;
        var aout = 0.15*moyEn ;
        var septembre = moyEn;
        var octobre = 0.85*moyEn;
        var novembre = moyEn;
        var decembre = 0.50*moyEn;
        
        var bruit;

        var max;
        
        var janvier1 = max - bruit - janvier;
        var fevrier1 = max - bruit - fevrier;
        var mars1 = max - bruit - moyEn;
        var avril1 = max - bruit - avril;
        var mai1 = max - bruit - mai;
        var juin1 = max - bruit - moyEn;
        var juillet1 = max - bruit - juillet;
        var aout1 = max - bruit - aout;
        var septembre1 = max - bruit - moyEn;
        var octobre1 = max - bruit - octobre;
        var novembre1 = max - bruit - moyEn;
        var decembre1 = max - bruit - decembre;
    
    
            
    
        var barChartData = {
            labels: ["Jan", "Fev", "Mars", "Avr", "Mai", "Juin", "Juil", "Aout", "Sep", "Oct", "Nov", "Déc"],
            datasets: [{
                label: "Energie gagnée pas les pas (en kW)",
                backgroundColor:un,
                data: [
                    janvier,
                    fevrier,
                    mars,
                    avril,
                    mai,
                    juin,
                    juillet,
                    aout,
                    septembre,
                    octobre,
                    novembre,
                    decembre
                ]
            }, {
                label: 'Energie gagnée pas le bruit (en kW)',
                backgroundColor:deux,
                data: [
                    bruit,
                    bruit,
                    bruit,
                    bruit,
                    bruit,
                    bruit,
                    bruit,
                    bruit,
                    bruit,
                    bruit,
                    bruit,
                    bruit
                ]
            }, {
                label: "L'énergie que vous pouvez gagner (en kW)",
                backgroundColor:trois,
                borderColor: '#000',
                borderWidth: 1,
                data: [
                    janvier1,
                    fevrier1,
                    mars1,
                    avril1,
                    mai1,
                    juin1,
                    juillet1,
                    aout1,
                    septembre1,
                    octobre1,
                    novembre1,
                    decembre1
                ]
            }]
        };
        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
 
            window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    title:{
                        display:true,
                        text:""
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: false
                    },
                    responsive: true,
                    scales: {
                        xAxes: [{
                            stacked: true
                        }],
                        yAxes: [{
                            stacked: true
                        }]
                    }
                }
            });
        };
    
    
    
    
    
            $('#simul').click(function(e){
                graphs();


         });
    
    var opts = {
        angle: 0,
        lineWidth: 0.44,
        radiusScale: 1,
        pointer: {
            length: 0.6, // // Relative to gauge radius
            strokeWidth: 0, // The thickness
            color: '#000000' // Fill color
        },
        limitMax: false,     // If false, max value increases automatically if value > maxValue
        limitMin: false,     // If true, the min value of the gauge will be fixed
        colorStart: fonce,   // Colors
        colorStop: clair,    // just experiment with them
        strokeColor: fonce,  // to see which ones work best for you
        generateGradient: true,
        highDpiSupport: true,     // High resolution support
        renderTicks: {
            divisions: 1,
            divWidth: 0.1,
            divLength: 1,
            divColor: '#FFFFFF',
            subDivisions: 3,
            subLength: 1,
            subWidth: 4.3,
            subColor: '#FFFFFF'
        }

    };
    var target = document.getElementById('foo'); // your canvas element
    var gauge = new Gauge(target).setOptions(opts); // create sexy gauge!
    gauge.maxValue = 1000; // set max gauge value
    gauge.setMinValue(0);  // Prefer setter over gauge.minValue = 0
    gauge.animationSpeed = 32; // set animation speed (32 is default value)
    gauge.set(0); // set actual value
    
    
    
    function graphs() {
        
        var mob = $("#css_mobile").attr('href');
                    if(mob.indexOf("nuit") == -1){
                        un = '#e2d088';  
                        deux = '#3F3F3F';
                        trois = "#F1F1F1";
                        fonce = "#3F3F3F";
                        clair = "#e2d088";
                        
                        
                    }else{
                        un = '#000';
                        deux = '#BBBBBB';
                        trois = '#FFF';
                        
                        fonce = "#000"
                        clair = "#BBBBBB";
                       }
        
        var opts = {
        angle: 0,
        lineWidth: 0.44,
        radiusScale: 1,
        pointer: {
            length: 0.6, // // Relative to gauge radius
            strokeWidth: 0, // The thickness
            color: '#000000' // Fill color
        },
        limitMax: false,     // If false, max value increases automatically if value > maxValue
        limitMin: false,     // If true, the min value of the gauge will be fixed
        colorStart: fonce,   // Colors
        colorStop: clair,    // just experiment with them
        strokeColor: fonce,  // to see which ones work best for you
        generateGradient: true,
        highDpiSupport: true,     // High resolution support
        renderTicks: {
            divisions: 1,
            divWidth: 0.1,
            divLength: 1,
            divColor: '#FFFFFF',
            subDivisions: 3,
            subLength: 1,
            subWidth: 4.3,
            subColor: '#FFFFFF'
        }

    };
       

        
                nbenfant = $("#berceauInput").val();
                    surface = $("#m2Input").val();
                    
                    moyEn = 480 * nbenfant;
        
        
    if(nbenfant < 11){
        var jauge = 2300;
       }
    if(10 < nbenfant){
        var jauge = 1200;
       }
        
    var target = document.getElementById('foo'); // your canvas element
    var gauge = new Gauge(target).setOptions(opts); // create sexy gauge!
    gauge.maxValue = jauge; // set max gauge value
    gauge.setMinValue(0);  // Prefer setter over gauge.minValue = 0
    gauge.animationSpeed = 32; // set animation speed (32 is default value)
    gauge.set(0); // set actual value

                    $('.nb_graph').html(moyEn+'kW');

                    var janvier = 0.75*moyEn;
                    fevrier = 0.80*moyEn;
                    mars = moyEn;
                    avril = 0.95*moyEn;
                    mai = 0.80*moyEn;
                    juin = moyEn;
                    juillet = 0.25*moyEn;
                    aout = 0.15*moyEn ;
                    septembre = moyEn;
                    octobre = 0.85*moyEn;
                    novembre = moyEn;
                    decembre = 0.50*moyEn;

                    bruit = 500;
            
                    max_enfant  = surface / 4; 
                    max_enfant  = Math.round(max_enfant);
                    nb_plus = max_enfant - nbenfant;

                    if(nb_plus == 1){
                        var s = '';
                    }else{
                        var s = 's';
                    }
                    
                    
                    if(nb_plus > 0){
                    $('#ben').removeClass('ben_none');
                    $('#ben').addClass('ben_block');
                    $('#cb_enfant').html('Ajoutez '+nb_plus+' enfant'+ s +' à votre crèche !');
                    }
                    max = max_enfant * 480;
                    
                    if((janvier + bruit) >= max){
                        janvier1 = 0;
                    }else{
                        janvier1 = max - bruit - janvier;
                    }
                    
                    if((fevrier + bruit) >= max){
                        fevrier1 = 0;
                    }else{
                        fevrier1 = max - bruit - fevrier;
                    }
                    
                    if((mars + bruit) >= max){
                       mars1 = 0;
                    }else{
                       mars1 = max - bruit - moyEn;
                    }
                    
                    if((avril + bruit) >= max){
                       avril1 = 0;
                    }else{
                        avril1 = max - bruit - avril;
                    }
                    
                    if((mai + bruit) >= max){
                       mai1 = 0;
                    }else{
                       mai1 = max - bruit - mai;
                    }
                    
                    if((juin + bruit) >= max){
                       juin1 = 0;
                    }else{
                       juin1 = max - bruit - moyEn;
                    }
                    
                    if((juillet + bruit) >= max){
                       juillet1 = 0;
                    }else{
                       juillet1 = max - bruit - juillet;
                    }
                    
                    if((aout + bruit) >= max){
                       aout1 = 0;
                    }else{
                       aout1 = max - bruit - aout;
                    }
                    
                    if((septembre + bruit) >= max){
                       septembre1 = 0;
                    }else{
                       septembre1 = max - bruit - moyEn;
                    }
                    
                    if((octobre + bruit) >= max){
                       octobre1 = 0;
                    }else{
                       octobre1 = max - bruit - octobre;
                    }
                    
                    if((novembre + bruit) >= max){
                       novembre1 = 0;
                    }else{
                       novembre1 = max - bruit - moyEn;
                    }
                    
                    if((decembre + bruit) >= max){
                       decembre1 = 0;
                    }else{
                       decembre1 = max - bruit - decembre;
                    }
                
                    
            
                    barChartData = {
                    labels: ["Jan", "Fev", "Mars", "Avr", "Mai", "Juin", "Juil", "Aout", "Sep", "Oct", "Nov", "Déc"],
                    datasets: [{
                        label: "Energie gagnée pas les pas (en kW)",
                        backgroundColor:un,
                        data: [
                            janvier,
                            fevrier,
                            mars,
                            avril,
                            mai,
                            juin,
                            juillet,
                            aout,
                            septembre,
                            octobre,
                            novembre,
                            decembre
                        ]
                    }, {
                        label: 'Energie gagnée pas le bruit (en kW)',
                        backgroundColor:deux,
                        data: [
                            bruit,
                            bruit,
                            bruit,
                            bruit,
                            bruit,
                            bruit,
                            bruit,
                            bruit,
                            bruit,
                            bruit,
                            bruit,
                            bruit
                        ]
                    }, {
                        label: "L'énergie que vous pouvez gagner (en kW)",
                        backgroundColor:trois,
                        borderColor:'#000',
                        borderWidth: 1,
                        data: [
                            janvier1,
                            fevrier1,
                            mars1,
                            avril1,
                            mai1,
                            juin1,
                            juillet1,
                            aout1,
                            septembre1,
                            octobre1,
                            novembre1,
                            decembre1
                        ]
                    }]
                };
            if(nbenfant != "") {
var ctx = document.getElementById("canvas").getContext("2d");     
window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    title:{
                        display:true,
                        text:""
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: false
                    },
                    responsive: true,
                    scales: {
                        xAxes: [{
                            stacked: true
                        }],
                        yAxes: [{
                            stacked: true
                        }]
                    }
                }
            });
            
            myBar.update();
            gauge.set(800);  
            $('#berceauInput').css('border-color','#000');
            }else{
                $('#berceauInput').css('border-color','red');
            }
                
            	$('#progress').css('display','none');
                $('#progress2').css('display','none');
                $('#progress3').css('display','none');
                $('#progress4').css('display','none');
                $('#progress5').css('display','none');
                $("#progressbar1").css('display','none');
                $("#progressbar2").css('display','none');
                $("#progressbar3").css('display','none');
                $("#progressbar4").css('display','none');
                    $("#nb5").css('display','none');
                $("#nb7").css('display','none');	
                $("#nb10").css('display','none');
                $("#nb20").css('display','none');
                $("#nb50").css('display','none');


            if(nbenfant != "" && nbenfant != null && nbenfant >= 5) {
                var s = Snap('#animated');
                var progress = s.select('#progress');

                progress.attr({strokeDasharray: '0, 251.2'});
                $('#progress').css('display','block');
                Snap.animate(0,251.2, function( value ) {
                    progress.attr({ 'stroke-dasharray':value+',251.2'});
                }, 500);

                $("#circle-1").css('margin-bottom','0');
                $("#nb5").css('display','inline');

                var count = $(('#count'));
                $({ Counter: 0 }).animate({ Counter: count.text() }, {
                  duration: 500,
                  easing: 'linear',
                  step: function () {
                    // console.log(this.Counter);
                     if(this.Counter > 95) {
                        runBar1()
                     }
                  }
                });
            }
    }
</script>
</body>

</html>