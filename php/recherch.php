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
    
    <?php include 'componnent/banner.html'; ?> <!--le baner-->
    <?php include 'componnent/header.php'; ?> <!--le header-->

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
                                            $requet= $bd->prepare('SELECT * FROM product,sub_category_title,sub_category,category where (product.Sub_category_title_id=Sub_category_title.Sub_category_title_id and Sub_category_title.Sub_category_id=Sub_category.Sub_category_id and sub_category.category_id=category.category_id) and (product_name LIKE :valeur or category_name like :valeur or brand like :valeur or sub_category_title_name like :valeur or sub_category_name like :valeur) '); 
                                            $valeur='%'.$_GET['Recherch'].'%';
                                            $requet->bindParam(':valeur', $valeur);
                                            $requet->execute();
                                            $cat=$requet->fetchALL(PDO::FETCH_ASSOC);
                                            $categoriesAffichees = array();
                                            foreach ($cat as $lgn) {
                                             $nomCategorie = $lgn['category_name'];
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
                                            $requete5 = $bd->prepare('SELECT * FROM product');
                                            $requete5->execute();
                                            $lignes = $requete5->fetchAll(PDO::FETCH_ASSOC);
                                            $marquesAffichees = array();
                                            
                                            foreach ($lignes as $ligne) {
                                                $mark = $ligne['brand'];
                                                
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
                                    $requete6 = $bd->prepare('SELECT * FROM product');
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
                                   $requet= $bd->prepare('SELECT * FROM product,sub_category_title,sub_category,category where (product.Sub_category_title_id=Sub_category_title.Sub_category_title_id and Sub_category_title.Sub_category_id=Sub_category.Sub_category_id and sub_category.category_id=category.category_id) and (product_name LIKE :valeur or category_name like :valeur or brand like :valeur or sub_category_title_name like :valeur or sub_category_name like :valeur) '); 
                                   
                                   if(isset($_GET['max_prix'])||isset($_GET['min_prix'] )){
                                    
                                            if(!isset($_GET['max_prix']) && !empty($_GET['min_prix'])){
                                              $requet= $bd->prepare('SELECT * FROM product,sub_category_title,sub_category,category where (product.Sub_category_title_id=Sub_category_title.Sub_category_title_id and Sub_category_title.Sub_category_id=Sub_category.Sub_category_id and sub_category.category_id=category.category_id) and (product_name LIKE :valeur or category_name like :valeur or brand like :valeur or sub_category_title_name like :valeur or sub_category_name like :valeur) and product_price>=:valeur2'); 
                                              $requet->bindParam(':valeur2', $_GET['min_prix']);
                                            }elseif(!isset($_GET['min_prix']) && !empty($_GET['max_prix'])){
                                              $requet= $bd->prepare('SELECT * FROM product,sub_category_title,sub_category,category where (product.Sub_category_title_id=Sub_category_title.Sub_category_title_id and Sub_category_title.Sub_category_id=Sub_category.Sub_category_id and sub_category.category_id=category.category_id) and (product_name LIKE :valeur or category_name like :valeur or brand like :valeur or sub_category_title_name like :valeur or sub_category_name like :valeur) and product_price<=:valeur3 '); 
                                              $requet->bindParam(':valeur3', $_GET['max_prix']);
                                            }
                                            if(isset($_GET['max_prix']) && isset($_GET['min_prix']) && !empty($_GET['max_prix']) && !empty($_GET['min_prix'])){
                                              $requet= $bd->prepare('SELECT * FROM product,sub_category_title,sub_category,category where (product.Sub_category_title_id=Sub_category_title.Sub_category_title_id and Sub_category_title.Sub_category_id=Sub_category.Sub_category_id and sub_category.category_id=category.category_id) and (product_name LIKE :valeur or category_name like :valeur or brand like :valeur or sub_category_title_name like :valeur or sub_category_name like :valeur) and product_price<=:valeur3 and product_price>=:valeur2 '); 
                                              $requet->bindParam(':valeur3', $_GET['max_prix']);
                                              $requet->bindParam(':valeur2', $_GET['min_prix']);
                                            }
                                            

                                   }
                                   if(isset($_GET['r'])){
                                       if(!empty($_GET['r'])){
                                        $requet= $bd->prepare('SELECT * FROM product,sub_category_title,sub_category,category where (product.Sub_category_title_id=Sub_category_title.Sub_category_title_id and Sub_category_title.Sub_category_id=Sub_category.Sub_category_id and sub_category.category_id=category.category_id) and (product_name LIKE :valeur or category_name like :valeur or brand like :valeur or sub_category_title_name like :valeur or sub_category_name like :valeur) and discount>= :valeur2 '); 
                                        $requet->bindParam(':valeur2', $_GET['r']);
                                       }
                                       
                                   }
                                   if(isset($_GET['mark'])){
                                    if(!empty($_GET['mark'])){
                                     $requet= $bd->prepare('SELECT * FROM product,sub_category_title,sub_category,category where (product.Sub_category_title_id=Sub_category_title.Sub_category_title_id and Sub_category_title.Sub_category_id=Sub_category.Sub_category_id and sub_category.category_id=category.category_id) and (product_name LIKE :valeur or category_name like :valeur or brand like :valeur or sub_category_title_name like :valeur or sub_category_name like :valeur) and brand= :valeur2 '); 
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
                                       $requet= $bd->prepare('SELECT * FROM product,sub_category_title,sub_category,category where (product.Sub_category_title_id=Sub_category_title.Sub_category_title_id and Sub_category_title.Sub_category_id=Sub_category.Sub_category_id and sub_category.category_id=category.category_id) and (product_name LIKE :valeur or category_name like :valeur or brand like :valeur or sub_category_title_name like :valeur or sub_category_name like :valeur) '); 
                                       
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
                                          $image=$ligne['product_image'];
                                          $nom=$ligne['Product_name'];
                                          $prix=$ligne['product_price'];
                                          $disc=$ligne['discount'];
                                          $new_prix=$prix-($prix*$disc/100);
                                          if($disc==0){
                                          $new_prix=$prix;
                                          }
                                          

                                          echo"
                                          <article class=\"but1\" style=\"width: calc(25% - 8px);  margin: 4px;  padding-left: 0; padding-bottom: 8px; padding-right: 0; display:flex; flex-direction: column; overflow: hidden; border-radius: 4px; background-color: #fff;\">
                                             <a href=\"produit.php?id_produit=".$ligne['Product_id']."\" style=\"text-decoration: none; color:inherit;  font-size: .75rem; height:360px;\">
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
                                                 
                                                     $idclt = isset($_SESSION['user']['user_id']) ? $_SESSION['user']['user_id'] : null;
    
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
