<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/Accueil_banner.css">
    <link rel="stylesheet" href="../css/Accueil_header.css">
    <link rel="stylesheet" href="../css/Accueil_main.css"> 
    <title>Jumia Anniversaire 2023 | Meilleures offres de Téléphones, TVs, Mode, Maison, Beauté et plus</title>
<link rel="icon" type="image/ico" sizes="any" href="https://www.jumia.ma/assets_he/favicon.87f00114.ico">

    <?php session_start();
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
 <main style="border-top: 2px solid #e4e4e4; box-shadow: 0 -4px 4px rgba(0, 0, 0, 0.5);background-color: #f1f1f2;display: flex; flex-direction: column; padding-top: 8px; padding-bottom: 56px; position: relative; font-size: .875rem; font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif; color: #313133;">
       <div style="margin:0 auto;width: 1184px; display: flex; flex-direction: column;">
              <div style="padding: 8px; width: 100%; font-size: .75rem; overflow: hidden;"></div>
       </div>
       <div style="padding-bottom: 16px; margin-left: auto; margin-right: auto; width: 1184px; position: relative;  display: flex; flex-direction: row; flex-wrap: wrap;">
             <div action="recherch.php" method="get" style="padding-bottom: 8px; padding-top: 8px; align-self: flex-start; width: 25%; padding-left: 0px; padding-right: 15px; display: flex; flex-direction: column;">
             <div style="height: 100%; box-shadow: 0 2px 5px 0 rgba(0,0,0,.05); background-color: #fff; border-radius: 4px; display: flex; flex-direction: column;">
                          <article class="les_categ" style=" font-size: .875rem;display: flex; flex-direction: column;">
                                 <h2 style="font-size: .875rem; font-weight: 500; padding-left: 16px; padding-bottom: 8px; padding-right: 16px; padding-top: 8px; margin: 0; color: #313133;">CATÉGORIE</h2>
                                 <?php 
                                           
                                            $valeur=$_GET['Recherch'];
                                            $requet= $bd->prepare('SELECT * FROM produit,imag,type,liste,catégorie where (imag.id_produit=produit.id_produit and produit.id_type=type.id_type and type.id_liste=liste.id_liste and liste.id_catégorie=catégorie.id_catégorie) and (nom_produit LIKE :valeur or nom_catégorie like :valeur or mark like :valeur or nom_type like :valeur or nom_liste like :valeur) '); 
                                            $valeur='%'.$_GET['Recherch'].'%';
                                            $requet->bindParam(':valeur', $valeur);
                                            $requet->execute();
                                            $cat=$requet->fetchALL(PDO::FETCH_ASSOC);
                                            $categoriesAffichees = array();
                                            foreach ($cat as $lgn) {
                                             $nomCategorie = $lgn['nom_catégorie'];
                                             if (!in_array($nomCategorie, $categoriesAffichees)) {
                                             echo "<a href=\"\" style=\" padding-left: 32px; padding-bottom: 8px; padding-right: 32px; padding-top: 8px; font-size: .875rem;\">".$nomCategorie."</a>";
                                              $categoriesAffichees[] = $nomCategorie;
                                                   }
                                               }
                                  
                                  
                                  ?>
                           </article>
                           <article  style="padding-left: 8px; padding-right: 8px; border-top: 1px solid #f1f1f2; display: flex;flex-direction: column;">
                                 <header style="padding-left: 8px; padding-right: 8px; padding-top: 4px;">
                                          <h2 style="font-size: .875rem; font-weight: 500; padding-bottom: 4px; padding-top: 4px; margin:0;">LIVRAISON RAPIDE</h2>
                                 </header>
                                 <div style="padding-left: 8px; padding-bottom: 4px; padding-right: 8px; padding-top: 4px; display: flex;flex-direction: row; justify-content: space-between;">
                                          <span><input type="checkbox" style=""><img src="../images/expr.png" width="112" height="13"></span>
                                          <div style="display:flex; align-items: center;"> <img src="../images/infl.png" width="16" height="15"></div>
                                 </div>
                           </article>
                           <article style="padding-left: 8px; padding-right: 8px; border-top: 1px solid #f1f1f2; display: flex;flex-direction: column; padding-bottom:5px;">
                                  <header style="padding-left: 8px; padding-right: 8px; padding-top: 4px;">
                                     <h2 style="font-size: .875rem; font-weight: 500; padding-bottom: 4px; padding-top: 4px; margin:0;">EXPÉDIÉ DEPUIS</h2>
                                  </header>
                                  <div style="padding-left: 8px; padding-bottom: 4px; padding-right: 8px; padding-top: 4px; display: flex;flex-direction: row; justify-content: space-between;">
                                          <span style="font-size: .875rem;"><input type="checkbox" style=" margin-right:15px;">Expédié depuis Maroc</span>
                                  </div>
                           </article>
                           <form action="recherch.php" method="get" style="padding-left: 8px; padding-bottom: 8px; border-top: 1px solid #f1f1f2; display: flex;flex-direction: column;">
                                    <header  style="padding-left: 8px; padding-right: 8px; padding-top: 4px; display: flex;flex-direction: row; justify-content: space-between;">
                                           <h2 style="font-size: .875rem; font-weight: 500; padding-bottom: 4px; padding-top: 4px; margin:0;">PRIX (DHS)</h2>
                                           <button style="padding: 0; position: relative; border-radius: 0; cursor: pointer; font-size: 1.1rem; text-align: center; font-weight: 500; color: #f68b1e; background-color: transparent; border: 0; margin-right:5px;">ok</button>
                                    </header>
                                    <div style="margin-left:8px; margin-right:14px;">
                                         <div style="margin-bottom: 16px; width: 100%; height: 5px; position: relative; top: 11px; left: 0; background-color: #d4d4d6; ">
                                         </div>
                                    </div>
                                    <div style="width: 100%; align-items: center; display: flex; flex-direction: row; margin-left:8px; margin-top:20px;">
                                           <input type="hidden" name="Recherch" value="<?php echo $_GET['Recherch']?>">
                 
                                           <div style="border: 1px solid #a3a3a6; border-radius: 4px; display:flex; align-items: center; margin-right:8px;">
                                                 <input name="min_prix" type="text" placeholder="Min" style="font-size: .875rem; height: 32px; border: 0; margin: 0; padding: 1px 2px; border-radius: 4px; padding:0px 8px; width:112px;">
                                           </div>
                                           <span>-</span>
                                           <div style="border: 1px solid #a3a3a6; border-radius: 4px; display:flex; align-items: center; margin-left:8px;">
                                                 <input name="max_prix" type="number" placeholder="Max" style="font-size: .875rem; height: 32px; border: 0; margin: 0; padding: 1px 2px; border-radius: 4px; padding:0px 8px; width:112px;">
                                           </div>
                                              </div>
                                        </form>
                           <article style="padding-left: 8px; padding-right: 8px; border-top: 1px solid #f1f1f2; display: flex;flex-direction: column; padding-bottom:5px;">
                                    <header style="align-items: center; ">
                                            <h2 style="font-size: .875rem; font-weight: 500; padding-bottom: 8px; padding-top: 8px; margin: 0; padding-left:8px;">REMISE (%)</h>
                                    </header>
                                    <form action="recherch.php" method="get" style="padding-bottom: 4px;display:flex; flex-direction: column;padding-left: 8px;">
                                    <!--les lien $_SERVER['REQUEST_URI']-->
                                    
                                            
                                            <input type="hidden" name="Recherch" value="<?php echo $_GET['Recherch']?>">
                 
                                                <div style="margin-bottom: 15px; display:flex; align-items: center;"> <input type="radio" name="r" value="50" onchange="submitForm()"><label style="margin-left:5px;">50% et plus</label></div>
                                                <div style="margin-bottom: 15px; display:flex; align-items: center;"> <input type="radio" name="r" value="40" onchange="submitForm()"><label style="margin-left:5px;">40% et plus</label></div>
                                                <div style="margin-bottom: 15px; display:flex; align-items: center;"> <input type="radio" name="r" value="30" onchange="submitForm()"><label style="margin-left:5px;">30% et plus</label></div>
                                                <div style="margin-bottom: 15px; display:flex; align-items: center;"> <input type="radio" name="r" value="20" onchange="submitForm()"><label style="margin-left:5px;">20% et plus</label></div>
                                                <div style="margin-bottom: 15px; display:flex; align-items: center;"> <input type="radio" name="r" value="10" onchange="submitForm()"><label style="margin-left:5px;">10% et plus</label></div>
                                                <div style="margin-bottom: 15px; display:flex; align-items: center;"> <input type="radio" name="r" value=""  onchange="submitForm()"><label style="margin-left:5px;">Toutes</label></div>
                                            
                                      </form>
                           </article>
                           <article style="padding-left: 8px; padding-right: 8px; border-top: 1px solid #f1f1f2; display: flex;flex-direction: column; padding-bottom:5px;">
                                    <header style="align-items: center; ">
                                            <h2 style="font-size: .875rem; font-weight: 500; padding-bottom: 8px; padding-top: 8px; margin: 0; padding-left:8px;">MARQUE</h>
                                            <div style="margin-bottom: 4px; margin-top: 4px; padding-left: 8px; padding-right: 8px; height: 32px;border: 1px solid #a3a3a6; border-radius: 99px; display:flex; align-items: center;">
                                                     <img src="../images/chrch.png" width="18px" height="18px">
                                                     <input type="search" placeholder="Chercher" name="cherch-mark" style="font-size: .875rem; height: 100%; width: 100%; verflow: hidden; border: 0; margin: 0; border-radius: 99px; outline: 0; margin-left:11px;">
                                            </div>
                                    </header>
                                    <div style="padding-left: 8px; padding-bottom: 4px; padding-right: 8px; padding-top: 4px; height: 168px; display:flex; flex-direction: column; overflow-y: auto; border-radius: 3px;">
                                           <?php
                                            $requete5 = $bd->prepare('SELECT * FROM produit');
                                            $requete5->execute();
                                            $lignes = $requete5->fetchAll(PDO::FETCH_ASSOC);
                                            $marquesAffichees = array();
                                            
                                            foreach ($lignes as $ligne) {
                                                $mark = $ligne['mark'];
                                                
                                                if (!in_array($mark, $marquesAffichees)) {
                                                    echo "<a href=\"recherch.php?Recherch=".$_GET['Recherch']."&mark=".$mark."\" style=\"margin-left: 8px; margin-bottom: 13px; margin-right: 4px; margin-top: 6px; position: relative; align-items: center; font-size: .875rem;\">".$mark."</a>";
                                                    
                                                    $marquesAffichees[] = $mark; // Ajouter la marque au tableau des marques affichées
                                                }
                                            }
                                           
                                           ?>
                                          
                                    </div>
                           </article>

                           <article style="padding-left: 8px; padding-right: 8px; border-top: 1px solid #f1f1f2; display: flex;flex-direction: column; padding-bottom:5px;">
                                    <header style="align-items: center; ">
                                            <h2 style="font-size: .875rem; font-weight: 500; padding-bottom: 8px; padding-top: 8px; margin: 0; padding-left:8px;">TAILLE</h>
                                            <div style="margin-bottom: 4px; margin-top: 4px; padding-left: 8px; padding-right: 8px; height: 32px;border: 1px solid #a3a3a6; border-radius: 99px; display:flex; align-items: center;">
                                                     <img src="../images/chrch.png" width="18px" height="18px">
                                                     <input type="search" placeholder="Chercher" name="cherch-mark" style="font-size: .875rem; height: 100%; width: 100%; verflow: hidden; border: 0; margin: 0; border-radius: 99px; outline: 0; margin-left:11px;">
                                            </div>
                                    </header>
                                    <div style="padding-left: 8px; padding-bottom: 4px; padding-right: 8px; padding-top: 4px; height: 168px; display:flex; flex-direction: column; overflow-y: auto; border-radius: 3px;">
                                    <?php
                                    $requete6 = $bd->prepare('SELECT * FROM produit');
                                            $requete6->execute();
                                            $lignes = $requete6->fetchAll(PDO::FETCH_ASSOC);
                                            $taillAffichees = array();
                                            
                                            foreach ($lignes as $ligne) {
                                                $taill = $ligne['taill'];
                                                
                                                if (!in_array($taill, $taillAffichees)) {
                                                    echo "<a href=\"recherch.php?Recherch=".$_GET['Recherch']."&taill=".$taill."\" style=\"margin-left: 8px; margin-bottom: 13px; margin-right: 4px; margin-top: 6px; position: relative; align-items: center; font-size: .875rem;\">".$taill."</a>";
                                           
                                                    $marquesAffichees[] = $taill; // Ajouter la marque au tableau des marques affichées
                                                }
                                            }?>
                                           
                                    </div>
                           </article>
                           <article style="padding-left: 8px; padding-right: 8px; border-top: 1px solid #f1f1f2; display: flex;flex-direction: column; padding-bottom:5px;">
                                    <header style="align-items: center; ">
                                            <h2 style="font-size: .875rem; font-weight: 500; padding-bottom: 8px; padding-top: 8px; margin: 0; padding-left:8px;">ÉVALUATION CLIENTS</h>
                                    </header>
                                    <div style="padding-left: 8px; padding-bottom: 4px; padding-right: 8px; padding-top: 4px; height: auto; display:flex; flex-direction: column; overflow-y: auto; border-radius: 3px;">
                                    <a href="" style="margin-left: 8px; margin-bottom: 13px; margin-right: 4px; margin-top: 4px; position: relative; align-items: center; font-size: .875rem;"><img src="../images/4+.png" width="80" height="13">Aichun Beauty</a>
                                    <a href="" style="margin-left: 8px; margin-bottom: 13px; margin-right: 4px; margin-top: 4px; position: relative; align-items: center; font-size: .875rem;"><img src="../images/3+.png" width="80" height="13">Aichun Beauty</a>
                                    <a href="" style="margin-left: 8px; margin-bottom: 13px; margin-right: 4px; margin-top: 4px; position: relative; align-items: center; font-size: .875rem;"><img src="../images/2+.png" width="80" height="13">Aichun Beauty</a>
                                    <a href="" style="margin-left: 8px; margin-bottom: 13px; margin-right: 4px; margin-top: 4px; position: relative; align-items: center; font-size: .875rem;"><img src="../images/1+.png" width="80" height="13">Aichun Beauty</a>
                                           
                                    </div>
                           </article>
                  </div>
                </div>
             <div style=" padding-bottom: 8px; padding-top: 8px; width: 75%; padding-left: 8px; padding-right: 8px;">
                   <section style=" height: 100%; box-shadow: 0 2px 5px 0 rgba(0,0,0,.05) ;background-color: #fff; border-radius: 4px; display: flex;flex-direction: column;">
                            <header style="display: flex;flex-direction: column;">
                                       <div style="padding-left: 8px; padding-right: 8px; border-bottom: 1px solid #f1f1f2; min-height: 48px; align-items: center; display: flex;">
                                               <div style="margin-left: auto;">
                                                           <div style="display: block;"><label style="font-size: 1rem; align-items: center; display: flex; padding: 8px;"><span style="font-weight: 500; padding-right: 4px;">Trier par:</span> Les plus demandés</label></div>
                                               </div> 
                                       </div>
                                       <div style=" display: flex;flex-direction: row;padding-left: 8px; padding-right: 8px; min-height: 48px; align-items: center; justify-content: space-between; border-bottom: 1px solid #f1f1f2;">
                                       
                                       <?php
                                   
 
                                 
                                   $valeur=$_GET['Recherch'];
                                   $requet= $bd->prepare('SELECT * FROM produit,imag,type,liste,catégorie where (imag.id_produit=produit.id_produit and produit.id_type=type.id_type and type.id_liste=liste.id_liste and liste.id_catégorie=catégorie.id_catégorie) and (nom_produit LIKE :valeur or nom_catégorie like :valeur or mark like :valeur or nom_type like :valeur) '); 
                                   
                                   if(isset($_GET['max_prix'])||isset($_GET['min_prix'] )){
                                    
                                            if(!isset($_GET['max_prix']) && !empty($_GET['min_prix'])){
                                              $requet= $bd->prepare('SELECT * FROM produit,imag,type,liste,catégorie where (imag.id_produit=produit.id_produit and produit.id_type=type.id_type and type.id_liste=liste.id_liste and liste.id_catégorie=catégorie.id_catégorie) and (nom_produit LIKE :valeur or nom_catégorie like :valeur or mark like :valeur or nom_type like :valeur) and prix_produit>=:valeur2'); 
                                              $requet->bindParam(':valeur2', $_GET['min_prix']);
                                            }elseif(!isset($_GET['min_prix']) && !empty($_GET['max_prix'])){
                                              $requet= $bd->prepare('SELECT * FROM produit,imag,type,liste,catégorie where (imag.id_produit=produit.id_produit and produit.id_type=type.id_type and type.id_liste=liste.id_liste and liste.id_catégorie=catégorie.id_catégorie) and (nom_produit LIKE :valeur or nom_catégorie like :valeur or mark like :valeur or nom_type like :valeur) and prix_produit<=:valeur3 '); 
                                              $requet->bindParam(':valeur3', $_GET['max_prix']);
                                            }
                                            if(isset($_GET['max_prix']) && isset($_GET['min_prix']) && !empty($_GET['max_prix']) && !empty($_GET['min_prix'])){
                                              $requet= $bd->prepare('SELECT * FROM produit,imag,type,liste,catégorie where (imag.id_produit=produit.id_produit and produit.id_type=type.id_type and type.id_liste=liste.id_liste and liste.id_catégorie=catégorie.id_catégorie) and (nom_produit LIKE :valeur or nom_catégorie like :valeur or mark like :valeur or nom_type like :valeur) and prix_produit<=:valeur3 and prix_produit>=:valeur2 '); 
                                              $requet->bindParam(':valeur3', $_GET['max_prix']);
                                              $requet->bindParam(':valeur2', $_GET['min_prix']);
                                            }
                                            

                                   }
                                   if(isset($_GET['r'])){
                                       if(!empty($_GET['r'])){
                                        $requet= $bd->prepare('SELECT * FROM produit,imag,type,liste,catégorie where (imag.id_produit=produit.id_produit and produit.id_type=type.id_type and type.id_liste=liste.id_liste and liste.id_catégorie=catégorie.id_catégorie) and (nom_produit LIKE :valeur or nom_catégorie like :valeur or mark like :valeur or nom_type like :valeur) and disc>= :valeur2 '); 
                                        $requet->bindParam(':valeur2', $_GET['r']);
                                       }
                                       
                                   }
                                   if(isset($_GET['mark'])){
                                    if(!empty($_GET['mark'])){
                                     $requet= $bd->prepare('SELECT * FROM produit,imag,type,liste,catégorie where (imag.id_produit=produit.id_produit and produit.id_type=type.id_type and type.id_liste=liste.id_liste and liste.id_catégorie=catégorie.id_catégorie) and (nom_produit LIKE :valeur or nom_catégorie like :valeur or mark like :valeur or nom_type like :valeur) and mark= :valeur2 '); 
                                     $requet->bindParam(':valeur2', $_GET['mark']);
                                    }
                                    
                                }

                                   $valeur='%'.$_GET['Recherch'].'%';
                                   $requet->bindParam(':valeur', $valeur);
                                   
                                   $requet->execute();
                                   $prod=$requet->fetchALL(PDO::FETCH_ASSOC);
                                   $compteur=0;
                                    foreach($prod as $ligne){
                                      $compteur++;
                                    }

                             

                                  
                                   ?>

                                              <p style=" padding-left: 8px; padding-right: 8px; color: #75757a; margin: 0; font-size: .875rem;"><?php echo $compteur;?> résultats</p>
                                              <div>
                                                     <a href="" style="padding: 8px;"><img src="../images/aaaa.png" width="18" height="18"></a>
                                                     <a href="" style="padding: 8px;"><img src="../images/bbbb.png" width="18" height="18"></a>
                                              </div>
                                       </div> 
                            </header>

                            <div style=" padding: 4px; margin-left: auto; margin-right: auto; max-width: 1184px; width: 100%; flex-wrap: wrap; display: flex; flex-direction: row;">
                                   <?php
                                   
 
                                      
                                       $valeur=$_GET['Recherch'];
                                       $requet= $bd->prepare('SELECT * FROM produit,imag,type,liste,catégorie where (imag.id_produit=produit.id_produit and produit.id_type=type.id_type and type.id_liste=liste.id_liste and liste.id_catégorie=catégorie.id_catégorie) and (nom_produit LIKE :valeur or nom_catégorie like :valeur or mark like :valeur or nom_type like :valeur) '); 
                                       
                                       if(isset($_GET['max_prix'])||isset($_GET['min_prix'] )){
                                        
                                                if(!isset($_GET['max_prix']) && !empty($_GET['min_prix'])){
                                                  $requet= $bd->prepare('SELECT * FROM produit,imag,type,liste,catégorie where (imag.id_produit=produit.id_produit and produit.id_type=type.id_type and type.id_liste=liste.id_liste and liste.id_catégorie=catégorie.id_catégorie) and (nom_produit LIKE :valeur or nom_catégorie like :valeur or mark like :valeur or nom_type like :valeur) and prix_produit>=:valeur2'); 
                                                  $requet->bindParam(':valeur2', $_GET['min_prix']);
                                                }elseif(!isset($_GET['min_prix']) && !empty($_GET['max_prix'])){
                                                  $requet= $bd->prepare('SELECT * FROM produit,imag,type,liste,catégorie where (imag.id_produit=produit.id_produit and produit.id_type=type.id_type and type.id_liste=liste.id_liste and liste.id_catégorie=catégorie.id_catégorie) and (nom_produit LIKE :valeur or nom_catégorie like :valeur or mark like :valeur or nom_type like :valeur) and prix_produit<=:valeur3 '); 
                                                  $requet->bindParam(':valeur3', $_GET['max_prix']);
                                                }
                                                if(isset($_GET['max_prix']) && isset($_GET['min_prix']) && !empty($_GET['max_prix']) && !empty($_GET['min_prix'])){
                                                  $requet= $bd->prepare('SELECT * FROM produit,imag,type,liste,catégorie where (imag.id_produit=produit.id_produit and produit.id_type=type.id_type and type.id_liste=liste.id_liste and liste.id_catégorie=catégorie.id_catégorie) and (nom_produit LIKE :valeur or nom_catégorie like :valeur or mark like :valeur or nom_type like :valeur) and prix_produit<=:valeur3 and prix_produit>=:valeur2 '); 
                                                  $requet->bindParam(':valeur3', $_GET['max_prix']);
                                                  $requet->bindParam(':valeur2', $_GET['min_prix']);
                                                }
                                                

                                       }
                                       if(isset($_GET['r'])){
                                           if(!empty($_GET['r'])){
                                            $requet= $bd->prepare('SELECT * FROM produit,imag,type,liste,catégorie where (imag.id_produit=produit.id_produit and produit.id_type=type.id_type and type.id_liste=liste.id_liste and liste.id_catégorie=catégorie.id_catégorie) and (nom_produit LIKE :valeur or nom_catégorie like :valeur or mark like :valeur or nom_type like :valeur) and disc>= :valeur2 '); 
                                            $requet->bindParam(':valeur2', $_GET['r']);
                                           }
                                           
                                       }
                                       if(isset($_GET['mark'])){
                                        if(!empty($_GET['mark'])){
                                         $requet= $bd->prepare('SELECT * FROM produit,imag,type,liste,catégorie where (imag.id_produit=produit.id_produit and produit.id_type=type.id_type and type.id_liste=liste.id_liste and liste.id_catégorie=catégorie.id_catégorie) and (nom_produit LIKE :valeur or nom_catégorie like :valeur or mark like :valeur or nom_type like :valeur) and mark= :valeur2 '); 
                                         $requet->bindParam(':valeur2', $_GET['mark']);
                                        }
                                        
                                    }

                                       $valeur='%'.$_GET['Recherch'].'%';
                                       $requet->bindParam(':valeur', $valeur);
                                       
                                       $requet->execute();
                                       $prod=$requet->fetchALL(PDO::FETCH_ASSOC);
                                       $compteur=0;
                                        foreach($prod as $ligne){
                                          $compteur++;
                                          $image=$ligne['source'];
                                          $nom=$ligne['nom_produit'];
                                          $prix=$ligne['prix_produit'];
                                          $disc=$ligne['disc'];
                                          $new_prix=$prix-($prix*$disc/100);
                                          if($disc==0){
                                          $new_prix=$prix;
                                          }
                                          

                                          echo"
                                          <article class=\"but1\" style=\"width: calc(25% - 8px);  margin: 4px;  padding-left: 0; padding-bottom: 8px; padding-right: 0; display:flex; flex-direction: column; overflow: hidden; border-radius: 4px; background-color: #fff;\">
                                             <a href=\"produit.php?id_produit=".$ligne['id_produit']."\" style=\"text-decoration: none; color:inherit;  font-size: .75rem; height:360px;\">
                                                    <div style=\"margin-bottom: 4px; position: relative; display: block;\">
                                                            <img style=\" width: 100%; height:230px;\" src=\" ".$image."\">
                                                            <span style=\" color: #FFFFFF; background: #6AACD5; top: 8px; left: 8px; position: absolute; font-size: .625rem; min-height: 18px; font-weight: 500; padding-left: 4px;  padding-right: 4px; align-items: center; justify-content: center; display: inline-flex; border-radius: 2px; \">Offre Anniversaire</span>
                                                    </div>
                                                    <div style=\" padding-left: 8px; padding-bottom: 8px; padding-right: 8px; display: block;\">
                                                              <div></div>
                                                              <h3 style=\" font-size: .75rem;-webkit-line-clamp: 2;display: -webkit-box;-webkit-box-orient: vertical;white-space: normal; overflow: hidden; font-weight: 400; margin: 0; padding: 0; line-height: 1.4;text-overflow: ellipsis;\" >".$nom."</h3>
                                                              <div style=\"font-size: .875rem; font-weight: 500; padding-top: 8px;\">".$new_prix." Dhs</div>
                                                              <div style=\"display: flex;align-items: center; flex-direction: row; padding-top: 2px;\">
                                                                       <div style=\"text-decoration: line-through; color: #75757a; font-size: .75rem;\">".$prix." Dhs</div>
                                                                       <div style=\"margin-left: 8px; min-width: 32px; font-size: .75rem; min-height: 20px; color: #f68b1e; background-color: #fef3e9; font-family: Roboto,Arial,Helvetica,sans-serif; font-weight: 500; padding-left: 4px; padding-right: 4px; align-items: center; display:flex; border-radius: 2px;\">-".$disc."%</div>
                                                              </div>
                                                    </div>
                                             </a>
                                                <footer style=\"padding-left: 8px; padding-right: 8px; padding-top: 8px; display: flex;flex-direction: column;\">
                                                     <div style=\"position: relative;display: flex; align-items: center; justify-content: center;\">";
                                                     $existsInCart = false;
                                                 
                                                     $idclt = isset($_SESSION['client']['id_client']) ? $_SESSION['client']['id_client'] : null;
    
                                                     if(!isset($_SESSION['panier'] [$idclt] )){
            
                                                       $_SESSION['panier'] [$idclt]= [];
                                                  }  

                                                 
                                                        foreach ($_SESSION['panier'][$idclt] as $idProduit => $quantite) {
                                                          $idProduit = trim($idProduit); 
                                                          if ($idProduit == $ligne['id_produit']) {
                                                              // Le produit est présent dans le panier
                                                              $existsInCart = true;
                                                              break;
                                                          }}
                                                    
                                                          $formId = "acheterForm_" . $ligne['id_produit'];
                                                              if ($existsInCart){
                               
                                                               echo"<form id=\"$formId\" action=\"panier.php\" method=\"post\" style=\"  margin-left:0;  box-shadow: 0 1px 0px 0 rgba(0,0,0,.05); padding-bottom:29px;\">
                                                               <input type=\"text\" value=\"".$_SESSION['panier'][$idclt][$ligne['id_produit']]."\" placeholder=\"Entrez la quantité\" name=\"quantitt\" style=\"padding:10px 0px; border-radius: 4px;  font-size: 14px; width:120px;  border:1px solid grey; padding-left:4px;box-shadow: 0 2px 8px 0 rgba(0,0,0,.05);\">
                                                               <input type=\"hidden\" name=\"achéte\" value=\" ".$ligne['id_produit']." \">
                                                               <button type=\"submit\"  style=\"padding-top:11px;padding-bottom:11px; background-color: #f68b1e; box-shadow: 0 2px 8px 0 rgba(0,0,0,.05); font-size: 13px; color: white; border: 0px ; cursor: pointer; border-radius: 4px; font-weight: 500;\">VALIDE</button>
                                                              </form>";
                                                              
                                                              
                                                              }else{  
                                                 
                                                               
                                                                
                                                         echo"<form id=\"$formId\" action=\"panier.php\" method=\"post\" style=\" width:100%;\">
                                                           <input type=\"hidden\" name=\"achéte\" value=\"".$ligne['id_produit']."\">
                                                           <button type=\"submit\"  class=\"but2\" style=\"color: #fff; width: 100%;  padding-bottom: 12px; padding-top: 12px;padding-left: 16px; padding-right: 16px; box-shadow: 0 4px 8px 0 rgba(0,0,0,.2); position: relative; background-color: #f68b1e; cursor: pointer; font-size: .875rem; line-height: 1rem; text-align: center; font-weight: 500; border: 0; border-radius: 4px; margin: 0;\">AJOUTER AU PANIER</button>
                                                           <input type=\"hidden\" name=\"quantitt\" value=\"1\">
                                                         </form>";
                                                        }
                                                  
                                                 echo"</div>
                                                       </footer>
                                                         </article>";
                                          }

                                 

                                      
                                       ?>
                                       
                                       
                                       
                            </div>
                   </section>
             </div>
             <div></div>
             <div></div>
       </div>
    
 </main>
</div>
<script>
  function submitForm() {
    document.getElementById("myForm").submit();
  }
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    <?php foreach ($prod as $ligne) { ?>
      $('#acheterForm_<?php echo $ligne['id_produit']; ?>').submit(function(event) {
        event.preventDefault();
        var formData = $(this).serialize();
        var button = $(this).find('button[type="submit"]');
        
        $.ajax({
          url: 'panier.php',
          type: 'POST',
          data: formData,
          beforeSend: function() {
            button.prop('disabled', true).text('En cours...');
          },
          success: function(response) {
            location.reload();
          },
          error: function(xhr, status, error) {
            // Gérer les erreurs de la requête AJAX ici
          },
          complete: function() {
            button.prop('disabled', false).text('VALIDE');
          }
        });
      });
    <?php } ?>
  });
</script>

<script>
    function submitForm() {
      event.preventDefault(); // Prevent the default form submission behavior

      var selectedValue = document.querySelector('input[name="r"]:checked').value;

      var updatedUrl = window.location.href.replace(/(\?|&)r=[^&]+/, ""); // Remove old "r" parameter
      updatedUrl += (updatedUrl.includes("?") ? "&" : "?") + "r=" + selectedValue; // Add new "r" parameter

      window.location.href = updatedUrl; // Redirect to the updated URL without reloading the page
    }
  </script>
  <form id="myForm" class="hid" action="recherch.php" method="get">
  <input type="hidden" name="Recherch" value="<?php echo $_GET['Recherch']?>">
</form>


</body>

<!---webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    display: -webkit-box;
    white-space: normal;
line-height: 1.4;-->

</html>
