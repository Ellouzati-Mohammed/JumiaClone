<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/Accueil_banner.css">
    <link rel="stylesheet" href="../css/Accueil_header.css">
    <link rel="stylesheet" href="../css/Accueil_main.css">
    <title>Jumia Anniversaire 2023 | Meilleures offres de Téléphones, TVs, Mode, Maison, Beauté et plus</title>
<link rel="icon" type="image/ico" sizes="any" href="https://www.jumia.ma/assets_he/favicon.87f00114.ico">

    
    <?php session_start();  
    require_once 'db/db.php';
     ?>
</head>
<body style="">
   

   <?php 
               
       $idclt = isset($_SESSION['client']['id_client']) ? $_SESSION['client']['id_client'] : null;
       if(!isset($_SESSION['panier'] [$idclt] )){
        
        $_SESSION['panier'] [$idclt]= [];
   }  
       if(isset($_POST['quantitt'])){
        $_POST['quantitt']=trim($_POST['quantitt']);
        $qty=$_POST['quantitt'];
        
       
        //ajouter a produit.php
        $_POST['achéte'] = trim($_POST['achéte']);
      if(isset($_POST['achéte'])){
       $_SESSION['panier'] [$idclt] [$_POST['achéte']]=$qty;
      }

      if($qty==0){
        unset($_SESSION['panier'] [$idclt] [$_POST['achéte']]);
      }
       
       }
       
        
       
       
       
    
      
      
   ?>

<?php



                          if(isset($_POST['command'])){
                            if(isset($_SESSION['client']['id_client'])){
                              $qt= $bd->prepare('SELECT * FROM produit'); 
                              $qt->execute();
                              $produit=$qt->fetchALL(PDO::FETCH_ASSOC);
                                 foreach($_SESSION['panier'] [$idclt] as $idproduit=>$quantite){

                                       foreach($produit as $ligne ){
                                              if($ligne['id_produit']==$idproduit){
                                                $new_quantite=$ligne['quantité_produit_restant']-$quantite;
                                                $ins=$bd->prepare('UPDATE produit SET quantité_produit_restant=? where id_produit=?');
                                                $ins->bindValue(1,$new_quantite);
                                                $ins->bindValue(2,$idproduit);
                                                $ins->execute();
                                              
                                              /*insere dans les commond*/
                                            
                                              $cmd1=$bd->prepare('INSERT INTO command (id_command,id_client,id_lieu) VALUES (null,?,?)');
                                              $cmd1->bindValue(1,$_SESSION['client']['id_client']);
                                              $cmd1->bindValue(2,$_SESSION['cmd'][$idclt][$idproduit]['lieu']);
                                              $cmd1->execute();
                                                  $id_command = $bd->lastInsertId();
                                              $cmd2=$bd->prepare('INSERT INTO contenir (id_command,id_produit,quantité,date) VALUES (?,?,?,CURRENT_TIMESTAMP())');
                                              $cmd2->bindValue(1,$id_command );
                                              $cmd2->bindValue(2,$idproduit);
                                              $cmd2->bindValue(3,$quantite);
                                              $cmd2->execute();
                                                
                                              }
                                       }
                                       
                                }
                                unset($_SESSION['panier'] [$idclt]);
                                header('Location: '.$_SERVER['PHP_SELF']);
                                exit;
                              }else{
                                header('Location: '.'connexion.php');
                                exit;
                              }
                          }
                             
                             
                             ?>










<div class="banner"> 
            
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

    <main style="border-top: 0px solid white; background-color:#f1f1f2; font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;">
      <div style="max-width: 1184px; width:100%; margin:0 auto;padding-bottom: 16px; display:flex; flex-direction: row; flex-wrap: wrap;">
      <?php  if($cmt==0){ ?>
             <div style="font-size: .875rem;padding-top: 16px; width:100%; flex:100%;  padding-right: 16px;">
                   <div style="background-color: white; text-align: center;padding-top: 32px;padding-bottom: 32px;box-shadow: 0 2px 5px 0 rgba(0,0,0,.05);border-radius: 4px;">
                             <img src="../images/panvid.png" width="104" height="104" style="margin-bottom: 8px; margin-top: 6px;">
                             <h2 style="font-size: 1rem;font-weight: 500;padding-bottom: 8px;padding-top: 6px; margin:0;">Votre panier est vide!</h2>
                             <p style="padding-bottom: 8px; padding-top: 8.5px; margin:0; font-size: .875rem; margin-bottom: 40px;">Parcourez nos catégories et découvrez nos meilleures offres!</p>
                            <div style=" margin-bottom:18.5px;"><a href="Accueil.php" style=" box-shadow: 0 4px 8px 0 rgba(0,0,0,.2);color: #fff;background-color: #f68b1e; text-decoration: none; font-size: .875rem; text-align: center; font-weight: 500; padding: 16px; border: 0; border-radius: 4px; padding-top:14px; ">COMMENCEZ VOS ACHATS</a></div>
                   </div>
              </div>
              <?php }else{ ?>
              <div style=" width: 73.6%; ">
                     <article style="margin-top: 16px;background-color: #fff;border-radius: 4px; display: flex; flex-direction: column;">
                                <header style="padding-bottom: 8px; padding-top: 8px; border-bottom: 1px solid #f1f1f2; font-size: .875rem;">
                                          <h2 style="font-size: 1.25rem;font-weight: 500;padding-left:16px;padding-bottom: 4px;padding-right: 0px;padding-top: 4px;margin: 0;">Panier (<?php echo $cmt; ?>)</h2>
                                </header>
                                
                                <?php

                            
                               $requet= $bd->prepare('SELECT * FROM produit,imag where imag.id_produit=produit.id_produit'); 
                               $requet->execute();
                               $prod=$requet->fetchALL(PDO::FETCH_ASSOC);
                               $prix_totale=0;
                               $quantittotale=0;
                               foreach($prod as $ligne){
                                foreach($_SESSION['panier'] [$idclt] as $idproduit=>$quantite)
                                if($ligne['id_produit']==$idproduit){
                                  $prix=$ligne['prix_produit'];
                                  $disc=$ligne['disc'];
                                  $new_prix=$prix-($prix*$disc/100);
                                  $prix_totale=$prix_totale+($new_prix*$quantite);
                                  if($disc==0){
                                  $new_prix=$prix;
                                  }

                                  $valeur=$idproduit;
                                                    $requet= $bd->prepare('SELECT * FROM produit,imag where imag.id_produit=produit.id_produit and produit.id_produit = :valeur'); 
                                                    $requet->bindParam(':valeur', $valeur);
                                                    $requet->execute();
                                                    $prod=$requet->fetchALL(PDO::FETCH_ASSOC);
                                                    foreach($prod as $ligne){
                                                      
                                                     if($idProduit==$ligne['id_produit']){
                                                       if($quantite>$ligne['quantité_produit_restant']){
                                                        $quantite=$ligne['quantité_produit_restant'];
                                                      }
                                                     }
                                                    }
                                                   
                                echo "<article id=\"article_pan\" style=\"margin-left: 16px;margin-right: 16px; padding-bottom: 0px; padding-top: 16px;background-color: #fff; \">
                                       <a href=\"produit.php?id_produit={$ligne['id_produit']}\" style=\"padding: 0; text-decoration: none; display: flex; flex-direction: row; \">
                                           <div><img src=\"{$ligne['source']}\" width=\"72\" height=\"82\"></div>
                                           <div style=\"padding-left: 16px ; padding-right: 16px; width:100%;\">
                                              <h3 style=\"font-size: 1rem;font-weight: 400;margin: 0;padding: 0; margin-top:3px;margin-bottom:8px;\">{$ligne['nom_produit']}</h3>
                                              <p style=\"padding-top: 4px;margin: 0;padding: 0;font-size: .875rem;\"><span style=\"margin-right: 4px; color: #75757a; font-size: .875rem;\">Variation:</span>19g</p>
                           <!--la condition--><p style=\"font-size: .75rem;padding-top: 8px;margin: 0; color: #75757a;\">hhhghghgfh</p>
                                              <div style=\"margin-top:10px;\"><img src=\"../images/expr.png\" width=\"112\" height=\"13\" ></div>
                                            </div>
                                           <div style=\"width:30%; margin-top:4px;\">
                                                 <div style=\"font-size: 1.25rem; text-align: right; font-weight: 500;\">$new_prix Dhs</div>
                                                 <div style=\"display:flex; flex-direction:row; padding-top: 8px; align-items: center; justify-content: flex-end; \">
                                                      <div style=\"font-size: 1rem; text-decoration: line-through; color: #75757a;\">$prix Dhs</div>
                                                      <div style=\"margin-left: 8px;min-width: 40px;color: #f68b1e; background-color: #fef3e9; font-size: .875rem; font-weight:500; padding-left: 4px; padding-right: 4px; align-items:center; justify-content: center; border-radius: 2px; font-family: Roboto,Arial,Helvetica,sans-serif; padding-top:5px; padding-bottom:5px;\">-$disc%</div>
                                                 </div>
                                           </div>
                                       </a>
                                       <footer style=\"display: flex; font-size: .875rem; margin-top:10px; justify-content: space-between;\">
                                              <form id=\"acheterForm\" action=\"panier.php\" method=\"post\">
                                                 <button style=\"align-items: center; border-radius: 0; cursor: pointer; font-size: .875rem; text-align: center; font-weight: 500; color: #f68b1e; background-color: transparent; border: 0; margin: 0; font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;\"><div style=\"display:flex; \"><img src=\"../images/supp\" width=\"15\" height=\"18\"><span style=\"padding-left:10px; font-weight: 500;\">SUPPRIMER</span></div></button>
                                                 <input type=\"hidden\" name=\"achéte\" value=\"".$idproduit."\">
                                                 <input type=\"hidden\" name=\"quantitt\" value=\"0\">
                                              </form>
                                              <form  style=\"padding-bottom:10px;\" id=\"acheterForm\" action=\"panier.php\" method=\"post\">
                                                <input type=\"text\" value=\"".$quantite."\" placeholder=\"Entrez la quantité\" name=\"quantitt\" style=\"padding:5px 0px; border-radius: 4px;  font-size: 14px; width:120px;  border:1px solid grey; padding-left:4px;box-shadow: 0 2px 8px 0 rgba(0,0,0,.05);\">
                                                <input type=\"hidden\" name=\"achéte\" value=\"".$idproduit."\">
                                                <button type=\"submit\"  style=\"height:30px; background-color: #f68b1e; box-shadow: 0 2px 8px 0 rgba(0,0,0,.05); font-size: 13px; color: white; border: 0px ; cursor: pointer; border-radius: 4px; font-weight: 500;\">VALIDE</button>
                                                    
                                              </form>
                                       </footer>
                                </article>";} }
                             ?>

                           

                     </article>
                
              </div>
              

              <div style="width: 25%; padding-left: 8px; padding-right: 8px; margin-left:10px;">
                   <div style="padding-top: 16px; ">
                        <article style=" color: #313133; box-shadow: 0 2px 5px 0 rgba(0,0,0,.05); background-color: #fff; border-radius: 4px;">
                          <h1 style="font-size: .875rem; font-weight: 500; padding: 8px; border-bottom: 1px solid #f1f1f2; margin: 0;">RÉSUMÉ DU PANIER</h1>
                          <!--<div style="margin-left: 8px; margin-right: 8px; border-bottom: 1px solid #f1f1f2; font-size:.875rem; display: flex;flex-direction: column;">
                              <p style="padding-bottom: 8px; padding-top: 8px; justify-content: space-between; display: flex;flex-direction: row; margin: 0; font-size: .875rem;">Total articles (2)<span style="text-align: right; font-weight: 500; padding-left: 16px;">214.00 Dhs</span></p>
                              <p style="padding-bottom: 8px; padding-top: 8px;display: flex;flex-direction: row; justify-content: space-between; margin: 0;">Réduction Offerte par Nivea-21.40 Dhs</p>
                          </div>-->
                          <div style="font-size: .875rem; font-weight: 500; padding: 8px; align-items: center; justify-content: space-between;  display: flex;flex-direction: row;">
                            <p style="margin: 0; padding: 0; font-size: .875rem; font-weight: 500;">Sous-total</p>
                            <p style="font-size: 1.25rem; text-align: right; padding-left: 16px; margin: 0; font-weight: 500;"><?php echo $prix_totale; ?> Dhs</p>
                          </div>
                          <div style="padding: 8px; border-top: 1px solid #f1f1f2;  display: flex;flex-direction: row; padding-bottom:14px;">
                             <img src="../images/valid.png" width="17" height="17" style="margin-top:4px; margin-left:2px; margin-right:7px; ">
                             <div style="display: flex;flex-direction: column;">
                                  <p style="font-size: .75rem; margin: 0; padding: 0; margin-bottom:2px;">Les articles Jumia Express sont éligibles à la livraison gratuite </p>
                                  <img src="../images/expr.png" width="112" height="13">
                             </div>
                          </div>
                          <!--form de commande-->
                          <form method="post" action="panier.php">
                            <div style="padding: 8px; border-top: 1px solid #f1f1f2;">
                            <input type="submit"   style="display: inline-block; width: 100%; background-color: #f68b1e; padding-bottom: 12px; padding-top: 12px; padding-left: 16px; padding-right: 16px; box-shadow: 0 4px 8px 0 rgba(0,0,0,.2); color: #fff; background-color: #f68b1e; font-size: .875rem; text-align: center; font-weight:500; border: 0; border-radius: 4px; height: 100%; font-size: .875rem;" value="COMMANDER (<?php echo $prix_totale; ?> DHS)">
                            <input type="hidden" name="command" value="valider">
                            </div>
                         </form>
                        </article>
                   </div>
              </div>
              <?php } ?>
        
              <div style="padding-top: 16px; width:100%; flex:100%;  padding-right: 16px;">
                      
                    <div style="background-color: white;  border-radius: 4px; display: flex; flex-direction:column;  padding:4px;">
                    <header style="display: flex; flex-direction:row;   justify-content: space-between; padding:0px 15px; margin:7px 0px; margin-bottom:10px;">
                      <h2 style="margin:0; font-size: 1.25rem; font-weight: 500;">Les plus demandés</h2>
                      <a style="font-weight: 500; color: #f68b1e; font-size: .875rem; padding-right:7px; padding-top:4px;">VOIR PLUS</a>
                    </header>
                    <div style="display: flex; flex-direction:row; flex-wrap: nowrap; overflow: scroll; padding:0px 10px;">
                    <?php
                                                
                                                    $requet= $bd->prepare('SELECT * FROM produit,imag where imag.id_produit=produit.id_produit '); 
                                                    $requet->execute();
                                                    $prod=$requet->fetchALL(PDO::FETCH_ASSOC);

                                                    foreach($prod as $ligne){
                                                         echo"<div class=\"prodruit\" style=\"display: flex; flex-direction: column; width: 16.6666666667%;\"> 
                                                         <article>
                                                           <a href=\"produit.php?id_produit={$ligne['id_produit']}\">
                                                             <span style=\"display: flex; justify-content: center;\"><img src=\"{$ligne['source']}\" style=\"  height: 190px; width: auto;\"></span> <div class=\"nom_produit\" style=\"  white-space: nowrap; padding:4px 8px;  text-overflow: ellipsis; overflow: hidden;\">{$ligne['nom_produit']}</div>
                                                             <div class=\"price\" style=\" font-size: 1rem;   padding:4px 8px; display: block;\"><div style=\"font-size: 1rem; font-weight: 500;\">".$ligne['prix_produit'] ." DH</div><div style=\"text-decoration: line-through; color: #75757a; font-size: .75rem; font-weight: 400; margin: 4px auto;\">{$ligne['prix_produit']} DH</div>
                                                             <div class=\"quant\" style=\"display: flex; flex-direction: column;\"> 
                                                             <div class=\"quant_nbr\" style=\"margin-bottom: 4px; font-size: .75rem; margin-top: 0px; color: #4a4a4a;\" >{$ligne['quantité_produit_restant']} article restants</div>
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
              </div>
              
       </div>
    </main>
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
</body>
</html>

