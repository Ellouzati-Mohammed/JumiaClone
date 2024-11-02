<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <title>Jumia Anniversaire 2023 | Meilleures offres de Téléphones, TVs, Mode, Maison, Beauté et plus</title>
<link rel="icon" type="image/ico" sizes="any" href="https://www.jumia.ma/assets_he/favicon.87f00114.ico">

<link rel="icon" type="image/ico" sizes="any" href="https://www.jumia.ma/assets_he/favicon.87f00114.ico">
<link rel="stylesheet" href="../css/Accueil_banner.css">
<link rel="stylesheet" href="../css/Accueil_header.css">
   
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
     <?php
                            
                            
                            
                            $valeur=$_GET['id_produit'];
                                $requet= $bd->prepare('SELECT * FROM produit,imag,type,liste,catégorie where liste.id_catégorie=catégorie.id_catégorie and type.id_liste=liste.id_liste and type.id_type=produit.id_type and imag.id_produit=produit.id_produit and produit.id_produit = :valeur'); 
                                $requet->bindParam(':valeur', $valeur);
                                $requet->execute();
                                $prod=$requet->fetchALL(PDO::FETCH_ASSOC);
                                foreach($prod as $ligne){
                                  $categ=$ligne['nom_catégorie'];
                                  $liste=$ligne['nom_liste'];
                                  $type=$ligne['nom_type'];
                                  $image=$ligne['source'];
                                  $nom=$ligne['nom_produit'];
                                  $prix=$ligne['prix_produit'];
                                  $disc=$ligne['disc'];
                                  $mark=$ligne['mark'];
                                  $new_prix=$prix-($prix*$disc/100);
                                  if($disc==0){
                                  $new_prix=$prix;
                                  }
                                }
                    ?>
    <main style=" background-color: #f1f1f2; padding-bottom: 8px; padding-top: 8px">
      <div class="row_row" style="width: 1184px; margin: 0 auto; display: flex; flex-direction: row; flex-wrap: wrap;  font-size: .875rem; font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;">
             <div style="flex: 100%;  padding-bottom: 16px; padding-top: 8px; width: 100%; font-size: .75rem; padding-left: 8px;  padding-right: 8px;  font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;"><?php echo"Accueil > $categ > $liste > $type > $nom"; ?></div>
            <section style=" width: 75%;   padding-right: 8px; padding-left: 8px; border-radius: 5px;height: 100%;">
                            <div style="height: 655px;border-radius: 4px; background-color: white; display: flex; flex-direction: row; flex-wrap: wrap; padding: 8px; padding-right: 0; ">
                            
                            <?php
                            
                            
                                   
                                    $valeur=$_GET['id_produit'];
                                        $requet= $bd->prepare('SELECT * FROM produit,imag where imag.id_produit=produit.id_produit and produit.id_produit = :valeur'); 
                                        $requet->bindParam(':valeur', $valeur);
                                        $requet->execute();
                                        $prod=$requet->fetchALL(PDO::FETCH_ASSOC);
                                        foreach($prod as $ligne){
                                          $image=$ligne['source'];
                                          $nom=$ligne['nom_produit'];
                                          $prix=$ligne['prix_produit'];
                                          $disc=$ligne['disc'];
                                          $mark=$ligne['mark'];
                                          $new_prix=$prix-($prix*$disc/100);
                                          if($disc==0){
                                          $new_prix=$prix;
                                          }
                                        }
                            ?>

                                    <div class="image_prd_info" style="padding-left: 8px; display: flex; flex-direction: column;  width: 37.5%; padding-top: 8px;">
                                          <div style=" width: 94%; height: 315px; display: flex; justify-content: center;  box-shadow: 0 1.5px 1px 0 rgba(0, 0, 0, .04);"><img width="97%" src="<?php echo $image; ?>"> </div>
                                          <section class="partag" style="padding-bottom: 8px; display: block;">
                                            <h2 style="font-weight: 500; padding-bottom: 2px; font-size: .875rem;">PARTAGEZ CE PRODUIT</h2>
                                            <div><img src="../images/facebook.png" width="30px" height="28px"><img src="../images/twitr.png" width="28px" height="28px" style="margin-left: 5px;"></div>
                                          </section>
                                    </div>

                                    <div class="info_prod_achat" style="width: 62.5%; ">
                                          <div class="nom_prefer" style="margin-left: 2px; padding-left: 3px; padding-top: 6px; display: flex; flex-direction: row; justify-content: space-between;">
                                            <div>
                                                <a href="" style="background-color: #276076; color: white; text-decoration: none; font-size: .75rem; padding-left: 4px; padding-right: 4px; align-items: center; border-radius: 2px; padding-top: 3px; padding-bottom: 3px; font-family: Roboto,Arial,Helvetica,sans-serif;">Boutique Officielle</a>
                                                <h1 style="margin: 0; font-size: 1.25rem; padding-bottom: 4px;padding-top: 10px; font-weight: 400;"><?php echo $nom;?></h1>
                                            </div>
                                            <a href=" " style=" margin-right:16.5px; margin-top:2px;"><img src="../images/prefer.png" width="23.5px" height="21px"></a>
                                          </div>

                                          <div class="mark_rate_prix" style=" margin-left: 5px;">
                                              <div class="mark" style="color: #313133;; margin-top: 4.5px;">Marque: <a href="" style="text-decoration: none; color: #264996;"><?php echo $mark; ?></a> </div>
                                              <div class="rate" style="margin-top: 8px; display: flex; flex-direction: row;"><div style="display: flex; align-items: center;"><img src="../images/rating.png" width="77px" height="14px"></div><a href="" style="text-decoration: none; color: #264996; margin-left: 7px;">(5 avis vérifies)</a></div>
                                              <div class="livraison" style="margin-top: 8px; margin-left: 0.5px;"><img src="../images/livre.png" width="100px" height="15px"></div>
                                              <div class="prix_dismount_info" style="box-shadow: 0 1.5px 5px 0 rgba(0, 0, 0, .04); padding-bottom: 16px;">
                                                     <div class="prix_dismount" style="margin-top: 14px;">
                                                           <div style="font-size: 1.5rem; font-weight: 700;"><?php echo $new_prix;?> Dhs</div>
                                                           <?php
                                                           if($ligne['disc']!=0){
                                                            echo"<div style=\"display: flex; flex-direction: row;\">
                                                            <div style=\"text-decoration: line-through; color: #75757a; font-size: 1rem;\">".$prix." Dhs</div>
                                                            <div style=\"margin-left: 7px; color: #f68b1e; background-color: #fef3e9; font-size: .875rem;font-weight: 500; padding-left: 4px; padding-right: 4px; border-radius: 2px; font-family: Roboto,Arial,Helvetica,sans-serif;display: flex; align-items: center; padding-top: 4px; padding-bottom: 4px;\"><span>-".$disc."%</span></div>
                                                           </div>";
                                                           }
                                                           
                                                           ?>
                                                     </div>
                                                     <p style="margin: 0; font-size: .75rem; color: #75757a; margin-top: 7px;">Disponible</p>
                                                     <div style="font-size: .75rem; color: #313133; margin-top: 8px;">+ livraison à partir de<span style="font-weight: 500;"> 12.00 Dhs </span>(livraison gratuite si supérieur à 150.00 Dhs) vers CASABLANCA - Anfa</div>
                                              </div>
                                              
                                          </div>
                                          <div class="j'achéte" style="margin-left: 4px; margin-top: 8px; font-size: .875rem; font-weight: 500; ">
                                              <div style="padding-bottom: 8px; margin-left: 1px;"><span>OPTIONS DISPONIBLES</span></div>
                                              <div class="j'achéte_boutton">
                                             
                                             <?php
                                                  
                                                 $existsInCart = false;
                                                  
                                                  $idclt = isset($_SESSION['client']['id_client']) ? $_SESSION['client']['id_client'] : null;

                                                  if(!isset($_SESSION['panier'] [$idclt] )){
         
                                                    $_SESSION['panier'] [$idclt]= [];
                                               }  

                                                
                                                  foreach ($_SESSION['panier'][$idclt] as $idProduit => $quantite){
                                                    $idProduit = trim($idProduit); 
                                                    if ($idProduit == $_GET['id_produit']) {
                                                        // Le produit est présent dans le panier
                                                        $existsInCart = true;
                                                        break;}}
                                                        
                                                        
                                                  
                                                  if ($existsInCart) {
                                                    $valeur=$_GET['id_produit'];
                                                    $requet= $bd->prepare('SELECT * FROM produit,imag where imag.id_produit=produit.id_produit and produit.id_produit = :valeur'); 
                                                    $requet->bindParam(':valeur', $valeur);
                                                    $requet->execute();
                                                    $prod=$requet->fetchALL(PDO::FETCH_ASSOC);
                                                    foreach($prod as $ligne){
                                                      
                                                     if($idProduit==$ligne['id_produit']){
                                                       if($_SESSION['panier'][$idclt][$_GET['id_produit']]>$ligne['quantité_produit_restant']){
                                                        $_SESSION['panier'][$idclt][$_GET['id_produit']]=$ligne['quantité_produit_restant'];
                                                      }
                                                     }
                                                    }

                                                    echo"<form id=\"acheterForm\" action=\"panier.php\" method=\"post\" style=\" margin-top:35px; margin-left:0;  box-shadow: 0 1px 0px 0 rgba(0,0,0,.05); padding-bottom:29px;\">
                                                    <input type=\"text\" value=\"".$_SESSION['panier'][$idclt][$_GET['id_produit']]."\" placeholder=\"Entrez la quantité\" name=\"quantitt\" style=\"padding:5px 0px; border-radius: 4px;  font-size: 14px; width:120px;  border:1px solid grey; padding-left:4px;box-shadow: 0 2px 8px 0 rgba(0,0,0,.05);\">
                                                    <input type=\"hidden\" name=\"achéte\" value=\" ".$_GET['id_produit']." \">
                                                    ";
                                                    if(isset($_GET['ville']) && isset($_GET['lieu'])){
                                                      $_SESSION['cmd'][$idclt][$_GET['id_produit']]['ville']=$_GET['ville'];
                                                      $_SESSION['cmd'][$idclt][$_GET['id_produit']]['lieu']=$_GET['lieu'];
                                                    echo"
                                                    <input type=\"hidden\" name=\"ville\" value=\" ".$_GET['ville']." \">
                                                    <input type=\"hidden\" name=\"lieu\" value=\" ".$_GET['lieu']." \">";
                                                    }
                                                    echo"
                                                    <button type=\"submit\"  style=\"height:30px; background-color: #f68b1e; box-shadow: 0 2px 8px 0 rgba(0,0,0,.05); font-size: 13px; color: white; border: 0px ; cursor: pointer; border-radius: 4px; font-weight: 500;\">VALIDE</button>
                                                   </form>";
                                                   
                                                  } else {
                                                    echo"<form id=\"acheterForm\" action=\"panier.php\" method=\"post\" style=\"margin-top: 25px; margin-left: 0px; margin-right: 10px; box-shadow: 0 1px 0px 0 rgba(0,0,0,.03);  padding-bottom: 17px;\">
                                                    <input type=\"hidden\" name=\"achéte\" value=\" ".$_GET['id_produit']." \">";
                                                    if(isset($_GET['ville']) && isset($_GET['lieu'])){
                                                      $_SESSION['cmd'][$idclt][$_GET['id_produit']]['ville']=$_GET['ville'];
                                                      $_SESSION['cmd'][$idclt][$_GET['id_produit']]['lieu']=$_GET['lieu'];
                                                      echo"
                                                      <input type=\"hidden\" name=\"ville\" value=\" ".$_GET['ville']." \">
                                                      <input type=\"hidden\" name=\"lieu\" value=\" ".$_GET['lieu']." \">";
                                                      }
                                                      echo"
                                                    <button type=\"submit\"  style=\"width: 100%; height: 48px; background-color: #f68b1e; display: flex; justify-content: space-between; align-items: center; font-size: 15px; color: white; border: 0px ; cursor: pointer; border-radius: 4px; font-weight: 500;  font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;  box-shadow: 0 4px 8px 0 rgba(0,0,0,.2);\"><img src=\"../images/acht.png\" width=\"30px\" height=\"30px\"><span style=\"position: relative; right: 8px;\">J'ACHETE</span><div></div></button>
                                                    <input type=\"hidden\" name=\"quantitt\" value=\"1\">
                                                   </form>";
                                                  }
                                                

                                                 
                                                  
                                                ?> 
                                                
                                                   
                                                     
                                                
                                                   
                                                     

                                              </div>
                                          </div>
                                          <section style="margin-left:4px;">
                                                  <h1 style="font-size: .875rem; margin: 0; padding-top: 5px; padding-left: 2px; font-weight: 500;">PROMOTIONS</h1>
                                                  <div style="margin-top: 19px; display: flex; flex-direction: column;">
                                                     <a href="" style="text-decoration: none; display:flex; flex-direction: row;"><img src="../images/avv.png" width="20px" height="20px"><span style="margin-left:11px; color: #264996;">Les commandes Jumia Express sont éligibles à la livraison gratuite. Offre </br>soumise à conditions</span></a>
                                                     <a href="" style="text-decoration: none;  margin-top: 9px; display:flex; flex-direction: row;"><img src="../images/prooo.png" width="20px" height="20px"><span style="margin-left:11px; color: #264996;">Adieu au temps perdu aux péages. Rechargez votre Pass Jawaz maintenant et gagnez votre temps !</span></a>
                                                  </div>
                                          </section>

                                    </div>

                                    <div style=" flex: 100%; margin-top: 30.5px;   padding: 8px;"><a href="" style="text-decoration: none; "><span style="">Signaler des informations incorrectes liées au produit</span></a></div>
                            </div>
             </section>
              
             
            </section>

             <div style=" margin-left: 8px; width: 23.65%; padding-left: 0px; display: flex; flex-direction: column; font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;">
                      <section style="border-radius: 4px; background-color: white; padding-left: 8px;  padding-right: 8px; padding-bottom: 8px;">
                              <h1 style=" margin:0px; padding: 8px; padding-left:0px; font-size: .875rem; font-weight: 500; box-shadow: 0 1px 0px 0 rgba(0,0,0,.05);">LIVRAISON & RETOURS</h1>
                              <div style="padding: 8px; padding-left:0px;">
                                   <article style="display:flex; flex-direction:column; box-shadow: 0 1px 0px 0 rgba(0,0,0,.05); padding-bottom:7px;">
                                      <img src="../images/expr.png" width="115px" height="13.5px">
                                      <p style="font-size: .75rem; color: #313133; margin:0; margin-top:5px;">Livraison rapide dans les grandes villes.<a href="" style="font-size: .875rem; color: #264996; overflow: visible;">Detail</a></p>
                                   </article>
                              </div>
                              <div>
                                   <article>
                                          <h3 style="margin:0; font-size: 1rem; font-weight: 500;">Choisissez le lieu</h3>
                                          <div style="margin-top:16px;">
                                                 <form id="vl" method="get" action="produit.php"  style="padding-bottom: 8px;">
                                                 
                                                 <input type="hidden" name="id_produit" value="<?php echo $_GET['id_produit']; ?>">
                                                    <select onchange="submitForm()" name="ville" style="--ac: #75757a;-webkit-appearance: none;font-size: 1rem; padding-right: 40px; padding-left: 16px; height: 48px; width: 100%; color: #313133; border: 1px solid #a3a3a6;border-radius: 4px; margin: 0; background: linear-gradient(45deg,transparent 40%,var(--ac) 50%) no-repeat top 21px right 30px/6px 5px,linear-gradient(135deg,var(--ac) 50%,transparent 60%) no-repeat top 21px right 25px/6px 5px;">
                                                        <!-- inserer le table de livrai-->
                                                        <option value="" disabled selected >Choisire*</option>
                                                        <?php 
                                                    $requet= $bd->prepare('SELECT * FROM ville'); 
                                                    $requet->execute();
                                                    $prod=$requet->fetchALL(PDO::FETCH_ASSOC);
                                                    foreach($prod as $ligne){
                                                        if(isset($_GET['ville']) && $_GET['ville']==$ligne['id_ville']){
                                                           echo"<option value=\"".$ligne['id_ville']."\" selected>".$ligne['nom_ville']."</option>";
                                                        }else{
                                                            echo"<option value=\"".$ligne['id_ville']."\">".$ligne['nom_ville']."</option>";
                                                        }
                                                        
                                                    }
                                                      ?>
                                                        
                                                    </select>
                                                  </form>
                                                  
                                                  <form id="vl" method="get" action="produit.php" style="padding-top: 8px;">
                                                   <input type="hidden" name="id_produit" value="<?php echo $_GET['id_produit']; ?>">
                                                         <input type="hidden" name="ville" value="<?php if(isset($_GET['ville'])) { echo $_GET['ville']; } ?>">
 
                                                       <select onchange="this.form.submit()" name="lieu" style="--ac: #75757a;-webkit-appearance: none;font-size: 1rem; padding-right: 40px; padding-left: 16px; height: 48px; width: 100%; color: #313133; border: 1px solid #a3a3a6;border-radius: 4px; margin: 0; background: linear-gradient(45deg,transparent 40%,var(--ac) 50%) no-repeat top 21px right 30px/6px 5px,linear-gradient(135deg,var(--ac) 50%,transparent 60%) no-repeat top 21px right 25px/6px 5px;">
                                                       <option value="" disabled selected >Choisire*</option>
                                                       <?php 
                                                         if(isset($_GET['ville'])) {
                                                         $valeur = trim($_GET['ville']);
                                                        $requet = $bd->prepare('SELECT * FROM lieu, ville WHERE lieu.id_ville = ville.id_ville AND ville.id_ville = :valeur'); 
                                                         $requet->bindParam(':valeur', $valeur);
                                                          $requet->execute();
                                                          $dd = $requet->fetchAll(PDO::FETCH_ASSOC);
            
                                                            foreach($dd as $ligne) {
                                                                 if(isset($_GET['lieu']) && $_GET['lieu'] == $ligne['id_lieu']) {
                                                                   
                                                                      echo "<option value=\"" . $ligne['id_lieu'] . "\" selected>" . $ligne['nom_lieu'] . "</option>";
                                                                  } else {
                                                                      echo "<option value=\"" . $ligne['id_lieu'] . "\">" . $ligne['nom_lieu'] . "</option>";
                                                                      }
                                                                    }
                                                                  }
                                                                     ?>
                                                                     </select>
                                                                  </form>
                                                
                                              </div>
                                             
                                          <section style="margin-top:16px;">
                                                <div>
                                                      <article style="display:flex; flex-direction:row">
                                                           <img src="../images/truck1.png" width="40px" height="40px"> 
                                                           <div>
                                                                 <div style="padding-left:8px;">
                                                                    <div style="display:flex; flex-direction:row; justify-content: space-between;"> 
                                                                      <h4 style="margin:0; font-size: .875rem; font-weight: 500;">Livraison à domicile</h4>
                                                                      <button style="font-size: .75rem; cursor: pointer; color: #264996; background-color: transparent; border: 0; margin-left:5px; padding:0;">Détails</button>
                                                                    </div> 
                                                                    <div style="display:flex; flex-direction:row; flex-direction: column;">
                                                                           <div style="font-size: .75rem; padding-top:3.5px;">Livraison <em style="font-style: normal; font-weight: 500;">27.00 Dhs</em> (livraison gratuite si supérieur à 150.00 Dhs)</div>
                                                                           <div style="font-size: .75rem; padding-top:4px;">Livré au plus tard le <em style="font-style: normal; font-weight: 500;">15 juin</em> si vous commandez d'ici <em style="font-style: normal; font-weight: 500;">19hrs 45mins</em></div>
                                                                    </div>
                                                                 </div>
                                                                 
                                                           </div>
                                                      </article>
                                                      <article style="display:flex; flex-direction:row; padding-top: 9px; box-shadow: 0 1px 0px 0 rgba(0,0,0,.06); padding-bottom:10px;">
                                                           <img src="../images/truck2.png" width="41px" height="41px"> 
                                                           <div>
                                                                 <div style="padding-left:8.5px;">
                                                                    <div style="display:flex; flex-direction:row; justify-content: space-between;"> 
                                                                      <h4 style="margin:0; font-size: .875rem; font-weight: 500;">Point relais</h4>
                                                                      <button style="font-size: .75rem; cursor: pointer; color: #264996; background-color: transparent; border: 0; margin-left:5px; padding:0;">Détails</button>
                                                                    </div> 
                                                                    <div style="display:flex; flex-direction:row; flex-direction: column;">
                                                                           <div style="font-size: .75rem; padding-top:3.5px;">Livraison <em style="font-style: normal; font-weight: 500;">12.00 Dhs</em> (livraison gratuite si supérieur à 150.00 Dhs)</div>
                                                                           <div style="font-size: .75rem; padding-top:4px;">Disponible pour le retrait à partir du <em style="font-style: normal; font-weight: 500;">14 juin</em> si vous commandez d'ici <em style="font-style: normal; font-weight: 500;">4hrs 33mins</em></div>
                                                                    </div>
                                                                 </div>
                                                                 
                                                           </div>
                                                      </article>
                                                      <article style="display:flex; flex-direction:row; padding-top: 7px; ">
                                                           <img src="../images/truck3.png" width="41px" height="41px"> 
                                                           <div>
                                                                 <div style="padding-left:8.5px;">
                                                                    <div style="display:flex; flex-direction:row; justify-content: space-between;"> 
                                                                      <h4 style="margin:0; font-size: .875rem; font-weight: 500;">Politique de retour</h4>
                                                                      <button style="font-size: .75rem; cursor: pointer; color: #264996; background-color: transparent; border: 0; margin-left:5px; padding:0;">Détails</button>
                                                                    </div> 
                                                                    <div style="display:flex; flex-direction:row; flex-direction: column;">
                                                                           <div style="font-size: .75rem; padding-top:3.5px;">Retour gratuit dans les 7 jours suivant la date de livraison.<a href="" style="color: #264996;margin-left: 4px; text-decoration: none;">En savoir plus</a></div>
                                                                           
                                                                    </div>
                                                                 </div>
                                                                 
                                                           </div>
                                                      </article>

                                                </div>
                                          </section>
                                   </article>
                                   
                              </div>
                      </section>
                      <div class=" height:100%; padding-top:16px;">
                            <section style="box-shadow: 0 2px 5px 0 rgba(0,0,0,.05); background-color: #fff; border-radius: 4px; display: block; padding: 8px; padding-bottom:0;">
                             <a href="" style="text-decoration: none; color: #313133; "><h2 style="margin:0; font-size: .875rem; font-weight: 500; box-shadow: 0 1px 0px 0 rgba(0,0,0,.06); padding-bottom:8px;">INFORMATIONS SUR LE VENDEUR</h2></a>
                             <div style="padding:8px 0;">
                                     <p style=" margin:0; font-weight: 500; font-size: .875rem; color: #313133; padding-bottom: 5px;">Jumia</p>
                                     <div style="font-size: .75rem; padding-top:3.5px;"><em style="font-style: normal; font-weight: 500;">100%</em> Évaluation du vendeur</div>
                             </div>
                            </section>
                    
                      </div>
             </div>
      </div>

    </main>
<!-- envoiyer la form+actualiser la page+ reste dans le meme page-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('#acheterForm').submit(function(event) {
      event.preventDefault(); 
      var formData = $(this).serialize();
      $.ajax({
        url: 'panier.php',
        type: 'POST',
        data: formData,
        success: function(response) {
          location.reload();
        },
        error: function(xhr, status, error) {
          // Gérer les erreurs de la requête AJAX ici
        }
      });
    });
  });
</script>
    

<script>
  function submitForm() {
    document.getElementById("vl").submit();
  }
</script>




</body>
</html>
 

 