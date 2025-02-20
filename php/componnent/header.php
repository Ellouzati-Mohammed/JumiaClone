
<header class="header">
            <section class="section">
                     <div class="col2">
                        <a href="Accueil.php" class="df logo_jumia">
                           <img src="../images/jum.png" width="135" height="23">
                        </a>
                     </div>
                     <form  class="recherch" method="get" action="recherch.php">
                        <div class="find">
                           <div class="img-rech">
                              <img src="../images/search.png" width="18" height="18" >
                           </div>
                           <?php 
                                 if(isset($_POST['decon'])){
                                       unset($_SESSION['user']['user_id']);
                                       header('Location: Accueil.php'); 
                                       exit;
                                    }
                                    if(isset($_SESSION['user']['user_id'])){
                                       echo"
                                       <input class=\"cnx_ses\" type=\"search\" name=\"Recherch\" placeholder=\"Cherchez un produit, une marque ou une catégorie\">
                                       ";
                                    }else{
                                       echo" <input class=\"no_cnx_ses\" type=\"search\" name=\"Recherch\" placeholder=\"Cherchez un produit, une marque ou une catégorie\"> ";
                                    }
                           ?>
                              
                           <input class="sub_cher" type="submit" value="RECHERCHER">
                        </div>
                     </form> 
                     <div class="col3" >
                           <div id="cnx_br" class="Connecter">
                                 <?php 
                                    if(isset($_SESSION['user']['user_id'])){
                                    echo"<form method=\"post\" action=\"Accueil.php\">
                                    <ul class=\"not_nulm\">
                                       <li ><a href=\"\" class=\"con\" ><img src=\"../images/compt_valid.png\" width=\"27px\" height=\"21.5px\">Bonjour, ".$_SESSION['user']['first_name']."<img src=\"../images/fchdown.png\" width=\"11\" height=\"9\"style=\"margin-left:7px;\"></a>
                                       <ul class=\"drop\">
                                       <form method=\"post\" action=\"Accueil.php\"> 
                                       <li ><a id=\"first_a_i\" href=\"votre_compt.php?r=1\"><img src=\"../images/votre_compt\" width=\"22\" height=\"22\">Votre compte</a></li>
                                       <li ><a id=\"a_i\" href=\"votre_compt.php?r=2\"><img src=\"../images/vos_cmd\" width=\"20\" height=\"20\" style=\"margin-right:15px;\">Vos commandes</a></li>
                                       <li ><a id=\"a_i\" href=\"votre_compt.php?r=3\"><img src=\"../images/boit\" width=\"20\" height=\"16\" style=\"margin-right:15px;\">Boite de réception</a></li>                               
                                       <li ><a id=\"a_i\" href=\"votre_compt.php?r=4\"><img src=\"../images/vos_pref\" width=\"20\" height=\"20\" style=\"margin-right:15px; margin-left:0px;\">Votre liste d'envies</a></li>
                                       <li ><a id=\"a_i\" href=\"votre_compt.php?r=5\"><img src=\"../images/ach\" width=\"20\" height=\"20\" style=\"margin-right:15px; margin-left:0px;\">Bons d'achat</a></li>
                                       <li style=\"display:flex;justify-content: center;\"><div class=\"cona2\" ><input type=\"submit\" name=\"decon\" class=\"gig\" value=\"DECONNEXTION\"></div></li>
                                       </ul>
                                       </li>
         
                                    </ul></form>";
                                       
                                       
                                    

                                    }else{
                                    

                                       echo"<ul class=\"nulm\" >
                                       <li ><a href=\"\" class=\"con\" ><img src=\"../images/cone.png\" width=\"25px\" height=\"21.5px\"> Se connecter<img src=\"../images/fchdown.png\" width=\"11\" height=\"9\" style=\"margin-left:7px;\"></a>
                                       <ul class=\"drop\">
                                       <li style=\"display:flex;justify-content: center;\"><div class=\"cona\"><a class=\"gig\" href=\"auth/login.php\">SE CONNECTER</a></div></li>
                                       <li ><a id=\"a_i\" href=\"../php/auth/login.php\"><img src=\"../images/votre_compt\" width=\"22\" height=\"22\" style=\"margin-right:14px;\">Votre compte</a></li>
                                       <li ><a id=\"a_i\" href=\"../php/auth/login.php\"><img src=\"../images/vos_cmd\" width=\"20\" height=\"20\" style=\"margin-right:15px;\">Vos commandes</a></li>
                                       <li ><a id=\"a_i\" href=\"../php/auth/login.php\"><img src=\"../images/vos_pref\" width=\"20\" height=\"20\" style=\"margin-right:15px; margin-left:0px;\">Votre liste d'envies</a></li>
                                       
                                       </ul>
                                       
                                       </li>
         
                                    </ul>";
                                    
                                    }
                                 ?>
                              
                           </div>
                           <div id="aide" class="Aide">
                              <a href="" ><img class="aide_logo" src="../images/ai.png" width="24" height="21.5">
                                 <span class="aide_txt">Aide</span>
                                 <span class="fch_aid">
                                    <img src="../images/fchdown.png" width="11" height="9">
                                 </span>
                              </a>
                           </div>
                           <!--le panier-->
                           <div class="Panier">
                              <a href="panier.php"><span><img src="../images/pan.png" width="30" height="22.5"></span>
                                       <?php 
                                       
                                       $idclt = isset($_SESSION['user']['user_id']) ? $_SESSION['user']['user_id'] : null; 
                                      
                                       $cmt=0;
                                       $somquat=0;
                                       if(isset($_SESSION['panier'] [$idclt] )){
                                          
                                          foreach ($_SESSION['panier'][$idclt] as $idProduit => $quantite) {
                                          $cmt++;
                                          $somquat=$somquat+$quantite;
                                       }
                                       if($cmt!=0){
                                       echo "<span class=\"skl_i\"><span>".$somquat."</span></span>";
                                       }} 
                                       
                                       ?>
                                       Panier
                              </a>
                           </div>
                     </div>    
            </section>

      </header>