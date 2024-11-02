<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jumia Anniversaire 2023 | Meilleures offres de Téléphones, TVs, Mode, Maison, Beauté et plus</title>
<link rel="icon" type="image/ico" sizes="any" href="https://www.jumia.ma/assets_he/favicon.87f00114.ico">
<link rel="stylesheet" href="../css/Accueil_banner.css">
<link rel="stylesheet" href="../css/Accueil_header.css">
<link rel="stylesheet" href="../css/Accueil_main.css">   
<link rel="stylesheet" href="../css/list.css"> 
<title>Jumia Anniversaire 2023 | Meilleures offres de Téléphones, TVs, Mode, Maison, Beauté et plus</title>
<link rel="icon" type="image/ico" sizes="any" href="https://www.jumia.ma/assets_he/favicon.87f00114.ico">


<meta charset="UTF-8">
  <?php 
  session_start(); 
  require_once 'db/db.php';
  ?>
</head>




<body>
 <div class="jm">
 <div class="banner"> 
            <div class="row1">
                  <img class="img1" src="https://ma.jumia.is/cms/000_2023/000005_Mai/Camps/BeautyWeek/MA_W17_Beauty_TopBanner.png" alt="publicité"  style="box-sizing: border-box;" width="1170px">             
           </div>
            <div class="vb">
               <div id="s2" style=" box-sizing: border-box;max-width:1184px; width:100%;">
                   <div class="col_start" style="padding-left:13.2px;;"><a href=""><img src="https://www.jumia.ma/assets_he/favicon.87f00114.ico" alt="jumia" width="13.5px" height="13px"><span>Vendez sur Jumia</span></a></div>
                   <div class="col_center" style="padding-left:19.5px;"><a href="" class="jum"><img src="../images/jum.png" width="52" height="8.4"></a> <a href="" class="food"><img src="../images/food-logo.png" width="52" height="22"></a></div>
                   <div class="col_end"><a href=""><span><img src="../images/francais.png" width="13" height="13"></span> Francais</span> </a><span> | </span><a href=""><span> <img src="../images/maroc.png" width="13" height="13"> العربية</span> </a></div>
            </div>
            </div>
    </div>

    <header class="header" style="position: sticky; top: 0; background-color: white; z-index: 9999;">
            <section class="section" style="flex-wrap: nowrap; width:1184px;">
                    <div class="col2"><a href="Accueil.php" class="df"style="padding-left:10px;"><img src="../images/jum.png" width="135" height="23"></a></div>
                    <form  class="recherch" method="get" action="recherch.php">
                    <div class="find">

                    <div class="img-rech" style="z-index:444;"><img src="../images/search.png" width="18" height="18" ></div>
                    <?php 
                 if(isset($_POST['decon'])){
                  unset($_SESSION['client']['id_client']);
                  header('Location: Accueil.php'); 
                 exit;
              }
                    if(isset($_SESSION['client']['id_client'])){
                      echo"
                      <input type=\"search\" name=\"Recherch\" placeholder=\"Cherchez un produit, une marque ou une catégorie\" style=\"outline: 0; width: 23.65pc;\">
                     ";
                    }else{
                      echo" <input type=\"search\" name=\"Recherch\" placeholder=\"Cherchez un produit, une marque ou une catégorie\" style=\"outline: 0; width: 28.4pc;\"> ";
                    }
                    ?>
                        
                            <input class="sub_cher" type="submit" value="RECHERCHER">
                        </div>
                   </form> 
                    <div class="col3" style="width:100%; display: flex; justify-content: center;" >
                          <div class="Connecter" style="padding-left:2px; position:relative;">
                          <?php 
                            if(isset($_SESSION['client']['id_client'])){
                              echo"<form method=\"post\" action=\"Accueil.php\">
                              <ul class=\"not_nulm\" style=\"\">
                               <li  style=\"\"><a href=\"\" class=\"con\" style=\"\"><img src=\"../images/compt_valid.png\" width=\"27px\" height=\"21.5px\" style=\"position: relative; top: 3px; padding-right: 5px;\">Bonjour, ".$_SESSION['client']['prenom_client']."<img src=\"../images/fchdown.png\" width=\"11\" height=\"9\" style=\"margin-left:13px; position: relative; bottom:1.5px;\"></a>
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
                            <a href="" ><img src="../images/ai.png" width="24" height="21.5" style="margin-right:2px; position: relative; top:2.5px;"><span style="padding-left:6.5px;">Aide</span><span style=""><img src="../images/fchdown.png" width="11" height="9" style=" margin-left: 11px; position: relative; bottom:1.5px;"></span></a>
                          </div>
                          <!--le panier-->
                          <div class="Panier" style="padding-right:0; margin-left:13px;">
                          <a href="panier.php" style="position:relative;"><span><img src="../images/pan.png" width="30" height="22.5" style="position: relative; top: 5px; padding-right: 5px;"></span>
                                     <?php 
                                     $idclt = isset($_SESSION['client']['id_client']) ? $_SESSION['client']['id_client'] : null; 
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
                                     Panier</a>
                          </div>
                    </div>    
            </section>

     </header>
     <main class="mn" style="background-color:#f1f1f2;">
        <div class="main">
            
            
              <div class="main_col3">
                          <div style="padding-bottom: 15px; padding-top:15px; ">
                                  Accueil > <?php echo $_GET['cat']; ?>
                          </div>
           <?php if($_GET['cat']=="Téléphone & Tablette") {?>
                          <div style="padding-bottom: 8px; padding-top:8px;">
                                  <section style="overflow: hidden; box-shadow: 0 2px 5px 0 rgba(0,0,0,.05); background-color: #fff; border-radius: 4px; display: block;">
                                           <h2 style="background-color: #C7C7CD; font-size: 1.25rem; font-weight: 500; padding-left: 16px; padding-right: 16px; min-height: 48px;display: flex; align-items: center; justify-content: center; margin: 0; padding:0;">Nos Catégories - Téléphonie & Tablettes</h2>
                                           <div style="padding-left: 4px;  padding-right: 4px; display: flex;">
                                                 <a href="" style="padding-top: 8px; padding-bottom: 8px;padding-left: 4px; padding-right: 4px; width: 100%; text-decoration: none; display: inline-block;" >
                                                        <div style=" width: 100%; position: relative;"><img src="../images/tf.png" style="width:100%;"></div>
                                                 </a>
                                                 <a href="" style="padding-top: 8px; padding-bottom: 8px;padding-left: 4px; padding-right: 4px; width: 100%; text-decoration: none; display: inline-block;" >
                                                        <div style=" width: 100%; position: relative;"><img src="../images/tt.png" style="width:100%;"></div>
                                                 </a>
                                                 
                                          </div>
                                          
                                  </section>
                          </div>

                          <div style="padding-bottom: 8px; padding-top:8px; ">
                                  <section style="overflow: hidden; box-shadow: 0 2px 5px 0 rgba(0,0,0,.05); background-color: #fff; border-radius: 4px; display: block;">
                                           <div style="padding-left: 4px; padding-bottom: 8px; padding-right: 4px; padding-top: 8px; display: flex;">
                                                 <a href="" style="margin-left: 4px; margin-right: 4px; width: 100%; text-decoration: none; display: inline-block;" >
                                                        <div style=" width: 100%; position: relative;"><img src="../images/at.png" style="width:100%;"></div>
                                                 </a>
                                                 <a href="" style="margin-left: 4px; margin-right: 4px; width: 100%; text-decoration: none; display: inline-block;" >
                                                        <div style=" width: 100%; position: relative;"><img src="../images/tf2.png" style="width:100%;"></div>
                                                 </a>
                                                 
                                          </div>
                                          
                                  </section>
                          </div>
                        
                          <div style="padding-bottom: 20px; padding-top:8px;">
                        
                                  <section style="overflow: hidden; box-shadow: 0 2px 5px 0 rgba(0,0,0,.05); background-color: #fff; border-radius: 4px; display: block;">
                                           <h2 style="background-color: #C7C7CD; font-size: 1.25rem; font-weight: 500; padding-left: 16px; padding-right: 16px; min-height: 48px;display: flex; align-items: center; justify-content: center; margin: 0; padding:0;">Vos Marques Préférées</h2>
                                           <div  name="mrki" style="width:100%; background-color: white; display: flex; flex-direction:row; flex-wrap: nowrap; overflow: scroll; padding:8px 4px; align-items: center;">
                                                <img src="../images/gh.png" width=""height="75" >
                                                <a href=""><img src="../images/sa.png" width=""height="66" style="margin-right:5px; margin-left:8px;"></a>
                                                <a href=""><img src="../images/ch.png" width=""height="66" style="margin-right:5px;margin-left:8px;"></a>
                                                <a href=""><img src="../images/oppo.png" width=""height="66" style="margin-right:5px;margin-left:8px;"></a>
                                                <a href=""><img src="../images/infi.png" width=""height="66" style="margin-right:5px;margin-left:8px;"></a>
                                                <a href=""><img src="../images/hw.png" width=""height="66" style="margin-right:0px;margin-left:8px;"></a>
                                                <a href=""><img src="../images/rea.png" width=""height="66" style="margin-right:5px;margin-left:12px;"></a>
                                                <a href=""> <img src="../images/vi.png" width=""height="66" style="margin-right:5px;margin-left:8px;"></a>
                                                <a href=""> <img src="../images/nok.png" width=""height="66" style="margin-right:5px;margin-left:8px;"></a>
                                                <a href=""> <img src="../images/edi.png" width=""height="66" style="margin-right:5px;margin-left:8px;"></a>
                                                <a href=""> <img src="../images/or.png" width=""height="66" style="margin-right:5px;margin-left:8px;"></a>
                                                <a href=""> <img src="../images/7o.png" width=""height="66" style="margin-right:5px;margin-left:8px;"></a>
                                                <a href=""> <img src="../images/so.png" width=""height="66" style="margin-right:5px;margin-left:8px;"></a>
                                           </div>
                                          
                                  </section>
                          </div>
                          <?php } ?>
                
                           <section>
                                    <header style="display:flex; flex-direction: row; background-color: #c7c7cd ; justify-content: space-between;  border-radius: 4px; padding-left: 16px; padding-right: 17px;
                                    padding-top: 10px; padding-bottom: 10px;">
                                     
                                           <div><span style="font-size: 1.25rem; font-weight: 500; align-items: center;">Top deals</span></div>
                                           <div><a href="" style="text-decoration: none; color: rgb(46, 46, 46);     font-weight: 500; font-size: 15px;">VOIR PLUS ></a></div>
                                          
                                    </header>

                                    <div >
                                           <div  style="background-color: white; display: flex; flex-direction:row; flex-wrap: nowrap; overflow: scroll; padding:4px;">

                                               <?php
                                                
                                                    $requet= $bd->prepare('SELECT * FROM produit,imag,type,liste,catégorie where (imag.id_produit=produit.id_produit and produit.id_type=type.id_type and type.id_liste=liste.id_liste and liste.id_catégorie=catégorie.id_catégorie) and nom_catégorie= :val '); 
                                                    $requet->bindParam(':val', $_GET['cat']);
                                                    $requet->execute();
                                                    $prod=$requet->fetchALL(PDO::FETCH_ASSOC);

                                                    foreach($prod as $ligne){
                                                         echo"<div class=\"prodruit\" style=\"display: flex; flex-direction: column; width: 16.6666666667%;\"> 
                                                         <article>
                                                           <a href=\"produit.php?id_produit={$ligne['id_produit']}\">
                                                             <span style=\"display: flex; justify-content: center;\"><img src=\"{$ligne['source']}\" style=\"  height: 190px; width: auto;\"></span> <div class=\"nom_produit\" style=\"  white-space: nowrap; padding:4px 8px;  text-overflow: ellipsis; overflow: hidden;\">{$ligne['nom_produit']}</div>
                                                             <div class=\"price\" style=\" font-size: 1rem;   padding:4px 8px; display: block;\"><div style=\"font-size: 1rem; font-weight: 500;\">".$ligne['prix_produit'] ." DH</div><div style=\"text-decoration: line-through; color: #75757a; font-size: .75rem; font-weight: 400; margin: 4px auto;\">{$ligne['prix_produit']} DH</div>
                                                             <div class=\"quant\" style=\"display: flex; flex-direction: column; \"> 
                                                             <div class=\"quant_nbr\" style=\"margin-bottom: 4px; font-size: .75rem; margin-top: 5px; color: #4a4a4a;\" >{$ligne['quantité_produit_restant']} article restants</div>
                                                             <div class=\"quant_bar\" style=\"width: 96%; height: 8px; border-radius: 5px; background-color: #808080; \"> 
                                                                    <div class=\"bar\" style=\"height: 100%; width: ".($ligne['quantité_produit_restant']/$ligne['quantité_produit_totale'])*(100)."% ; background-color: #ff9900; border-radius: 5px; \"></div>
                                                              </div>
                                                             </div> 
                                                            </a> 
                                                          </article>
                                                        </div>";

                                                    }
                                                    
                                               ?>
                                               

                                           </div>
                                    </div>
                           </section>
                      
              </div>
          
        </div>
     </main>
 </div>

</body>
</html>