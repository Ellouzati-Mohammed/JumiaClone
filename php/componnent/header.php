<header class="header" style="position: sticky; top: 0; background-color: white; z-index: 9999;">
            <section class="section" style="flex-wrap: nowrap; width:1184px;">
                     <div class="col2">
                        <a href="Accueil.php" class="df"style="padding-left:10px;">
                           <img src="../images/jum.png" width="135" height="23">
                        </a>
                     </div>
                     <form  class="recherch" method="get" action="recherch.php">
                        <div class="find">
                           <div class="img-rech" style="z-index:444;">
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
                                       <input type=\"search\" name=\"Recherch\" placeholder=\"Cherchez un produit, une marque ou une catégorie\" style=\"outline: 0; width: 23.65pc;\">
                                       ";
                                    }else{
                                       echo" <input type=\"search\" name=\"Recherch\" placeholder=\"Cherchez un produit, une marque ou une catégorie\" style=\"outline: 0; width: 27.4pc;\"> ";
                                    }
                           ?>
                              
                           <input class="sub_cher" type="submit" value="RECHERCHER">
                        </div>
                     </form> 
                     <div class="col3" style="width:100%; display: flex; justify-content: center;" >
                           <div class="Connecter" style="padding-left:2px; position:relative;">
                                 <?php 
                                    if(isset($_SESSION['user']['user_id'])){
                                    echo"<form method=\"post\" action=\"Accueil.php\">
                                    <ul class=\"not_nulm\" style=\"\">
                                       <li  style=\"\"><a href=\"\" class=\"con\" style=\"\"><img src=\"../images/compt_valid.png\" width=\"27px\" height=\"21.5px\" style=\"position: relative; top: 3px; padding-right: 5px;\">Bonjour, ".$_SESSION['user']['first_name']."<img src=\"../images/fchdown.png\" width=\"11\" height=\"9\" style=\"margin-left:13px; position: relative; bottom:1.5px;\"></a>
                                       <ul class=\"drop\" style=\"position:absolute; width: 206px; right: 180px; transform: translateX(100%);\">
                                       <form method=\"post\" action=\"Accueil.php\"> 
                                       <li style=\"\"><a href=\"votre_compt.php?r=1\" style=\"padding:8px;padding-bottom: 13px;padding-top: 10px;width:100%;text-align: left;display: flex;  align-items: center; font-size: .875rem;\"><img src=\"../images/votre_compt\" width=\"22\" height=\"22\" style=\"margin-right:14px;\">Votre compte</a></li>
                                       <li style=\"\"><a href=\"votre_compt.php?r=2\" style=\"padding: 10px;padding-bottom: 13px;padding-top: 10px;width:100%;text-align: left;display: flex;  align-items: center; font-size: .875rem;\"><img src=\"../images/vos_cmd\" width=\"20\" height=\"20\" style=\"margin-right:15px;\">Vos commandes</a></li>
                                       <li style=\"\"><a href=\"votre_compt.php?r=3\" style=\"padding: 10px;padding-bottom: 13px;padding-top: 10px;width:100%;text-align: left;display: flex;  align-items: center; font-size: .875rem;\"><img src=\"../images/boit\" width=\"20\" height=\"16\" style=\"margin-right:15px;\">Boite de réception</a></li>                               
                                       <li style=\"\"><a href=\"votre_compt.php?r=4\" style=\"padding: 10px;padding-bottom: 13px;padding-top: 10px;width:100%;text-align: left;display: flex; align-items: center; font-size: .875rem;\"><img src=\"../images/vos_pref\" width=\"20\" height=\"20\" style=\"margin-right:15px; margin-left:0px;\">Votre liste d'envies</a></li>
                                       <li style=\"\"><a href=\"votre_compt.php?r=5\" style=\"padding: 10px;padding-bottom: 13px;padding-top: 10px;width:100%;text-align: left;display: flex; align-items: center; font-size: .875rem;\"><img src=\"../images/ach\" width=\"20\" height=\"20\" style=\"margin-right:15px; margin-left:0px;\">Bons d'achat</a></li>
                                       <li style=\"display:flex;justify-content: center;\"><div class=\"cona2\" style=\" width:70%; display:flex;justify-content: center;\"><input type=\"submit\" name=\"decon\" class=\"gig\" style=\" color: white;border: 0;border-radius: 4px;font-weight: 500;font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;font-size: 14px;cursor: pointer; padding:5px 0px;width:94%;margin-left:9px;margin-top:4px; margin-bottom:4px; color:#f68b1e;\" value=\"DECONNEXTION\"></div></li>
                                       </ul>
                                       </li>
         
                                    </ul></form>";
                                       
                                       

                                    }else{
                                    

                                       echo"<ul class=\"nulm\" style=\"\">
                                       <li style=\"\"><a href=\"\" class=\"con\" style=\"\"><img src=\"../images/cone.png\" width=\"25px\" height=\"21.5px\" style=\"position: relative; top: 3px; padding-right: 5px;\"> Se connecter<img src=\"../images/fchdown.png\" width=\"11\" height=\"9\" style=\"margin-left:13px; position: relative; bottom:1.5px;\"></a>
                                       <ul class=\"drop\" style=\"position:absolute; min-width: 206px; right: 170px; transform: translateX(100%);\">
                                       <li style=\"display:flex;justify-content: center;\"><div class=\"cona\" style=\" width:100%; display:flex;justify-content: center;\"><a class=\"gig\" href=\"connexion.php\" style=\" color: white;box-shadow: 0 4px 8px 0 rgba(0,0,0,.2);border: 0;border-radius: 4px;font-weight: 500;font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;font-size: 14px;cursor: pointer; padding:11px 14px;width:94%;margin-left:9px;margin-top:15px; margin-bottom:15px;\">SE CONNECTER</a></div></li>
                                       <li style=\"\"><a href=\"\" style=\"padding: 8px;padding-bottom: 13px;padding-top: 10px;width:100%;text-align: left;display: flex;  align-items: center; font-size: .875rem;\"><img src=\"../images/votre_compt\" width=\"22\" height=\"22\" style=\"margin-right:14px;\">Votre compte</a></li>
                                       <li style=\"\"><a href=\"\" style=\"padding: 10px;padding-bottom: 13px;padding-top: 10px;width:100%;text-align: left;display: flex; align-items: center; font-size: .875rem;\"><img src=\"../images/vos_cmd\" width=\"20\" height=\"20\" style=\"margin-right:15px;\">Vos commandes</a></li>
                                       <li style=\"\"><a href=\"\" style=\"padding: 10px;padding-bottom: 13px;padding-top: 10px;width:100%;text-align: left;display: flex;  align-items: center; font-size: .875rem;\"><img src=\"../images/vos_pref\" width=\"20\" height=\"20\" style=\"margin-right:15px; margin-left:0px;\">Votre liste d'envies</a></li>
                                       
                                       </ul>
                                       
                                       </li>
         
                                    </ul>";
                                    
                                    }
                                 ?>
                              
                           </div>
                           <div class="Aide" style="padding:0; padding-left:2px; display:flex; align-items: center; ">
                              <a href="" ><img src="../images/ai.png" width="24" height="21.5" style="margin-right:2px; position: relative; top:2.5px;">
                                 <span style="padding-left:6.5px;">Aide</span>
                                 <span style="">
                                    <img src="../images/fchdown.png" width="11" height="9" style=" margin-left: 11px; position: relative; bottom:1.5px;">
                                 </span>
                              </a>
                           </div>
                           <!--le panier-->
                           <div class="Panier" style="padding-right:0; margin-left:13px;">
                              <a href="panier.php" style="position:relative;"><span><img src="../images/pan.png" width="30" height="22.5" style="position: relative; top: 5px; padding-right: 5px;"></span>
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
                                       echo "<span style=\"background-color:white; padding:1.4px; position: absolute; border-radius: 50px; left:9px; bottom:10px;\"><span style=\";color: #fff; font-size: .625rem; font-weight: 700; background-color: #f68b1e;border-radius: 50px; padding-left: 4px; padding-bottom: 1px; padding-right: 4px; padding-top: 0px;min-height: 12px; min-width: 12px; max-height: 18px;\">".$somquat."</span></span>";
                                       }} 
                                       
                                       ?>
                                       Panier
                              </a>
                           </div>
                     </div>    
            </section>

      </header>