
            <nav id="menu-mobile">
                <a class="nav-icon" href="startup.php">
                    <div>
                        <?php if($i == 1){
                            echo '<img src="img/icon/pulse-logo.png" alt="pulse" id="logopulse">';
                        }else{
                            echo '<img src="img/icon/pulse-logonb.png" alt="pulse" id="logopulse">';
                         } ?>
                        
                        <h5>Notre vision</h5>
                    </div>
                </a>
                <a class="nav-icon" href="techno.php">
                    <div>
                        <?php if($i == 1){
                            echo '<img src="img/icon/idea.png" alt="produit" id="produit">';
                        }else{
                            echo '<img src="img/icon/ideanb.png" alt="produit" id="produit">';
                         } ?>
                        
                        <h5>Produits</h5>
                    </div>
                </a>
                <a class="nav-icon" href="stats.php">
                    <div>
                        <?php if($i == 1){
                            echo '<img src="img/icon/bar-chart.png" alt="Statistiques" id="statnb">';
                        }else{
                            echo '<img src="img/icon/bar-chartnb.png" alt="Statistiques" id="statnb">';
                         } ?>
                        
                        <h5>Statistiques</h5>
                    </div>
                </a>
                <a class="nav-icon" href="contact.php">
                    <div>
                        <?php if($i == 1){
                            echo '<img src="img/icon/email.png" alt="email" id="emailnb">';
                        }else{
                            echo '<img src="img/icon/emailnb.png" alt="email" id="emailnb">';
                         } ?>
                        
                        <h5>Contact</h5>
                    </div>
                </a>
                <a class="nav-icon" id="mode_eco">
                    <div>
                        <?php if($i == 1){
                            echo '<img src="img/icon/sleep-mode.png" alt="eco" id="eco">';
                        }else{
                            echo '<img src="img/icon/sleep-modenb.png" alt="eco" id="eco">';
                         } ?>
                        
                        <h5>Eco</h5>
                    </div>
                </a>
            </nav>

            <nav id="menu-desk">
                
                <div id="logo-desk">
                    <a href="index.php">
                    <?php if($i == 1){
                        echo '<img id="logo-static" src="img/logo-blanc.svg" alt="logo pulse">';
                    }else{
                        echo '<img id="logo-static" src="img/pulsenb.png" alt="logo pulse">';
                     } ?>
                    
                    <img src="img/anim-logo.gif" class="none-hover none-nuit" alt="logo pulse" >  </a>
                </div>
                <div id="menu-desk-titre">
                <a class="nav-icon" href="startup.php">
                    
                        <h5>Notre Vision</h5>
                    
                </a>
                <a class="nav-icon" href="techno.php">
                
                        <h5>Produits</h5>
                   
                </a>
                <a class="nav-icon" href="stats.php">
                    
                        <h5>Statistiques</h5>
                   
                </a>
                <a class="nav-icon" href="contact.php">
                    
                        <h5>Contact</h5>
                   
                </a>
                <label class="switch">
                      <input id="check_eco" type="checkbox" <?php if($i == 1){ echo 'checked'; } ?> onclick="javascript:maj();">
                      <span class="slider round"></span>
                </label> 
                </div>
            </nav>
