<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <title>Jumia Anniversaire 2023 | Meilleures offres de Téléphones, TVs, Mode, Maison, Beauté et plus</title>
<link rel="icon" type="image/ico" sizes="any" href="https://www.jumia.ma/assets_he/favicon.87f00114.ico">

<link rel="icon" type="image/ico" sizes="any" href="https://www.jumia.ma/assets_he/favicon.87f00114.ico">
<link rel="stylesheet" href="../css/Accueil_banner.css">
<link rel="stylesheet" href="../css/Accueil_header.css">
<link rel="stylesheet" href="../css/footer.css">  
   
<meta charset="UTF-8">
<?php 
session_start();
require_once 'db/db.php';
?>
</head>
<body>
  
  <div class="jm">
    
     <?php include 'componnent/banner.html'; ?> <!--le baner-->
     <?php include 'componnent/header.php'; ?> <!--le header-->
     <?php
                                $valeur=$_GET['id_produit'];
                                try {
                                  $requet= $bd->prepare('SELECT * FROM product,category,sub_category,sub_category_title where category.category_id=sub_category.category_id and sub_category.sub_category_id=sub_category_title.sub_category_id and sub_category_title.sub_category_title_id=product.sub_category_title_id and product.product_id = :valeur'); 

                                  $requet->bindParam(':valeur', $valeur);
                                  $requet->execute();
                                } catch (\Throwable $th) {
                                  die();
                                }
                                
                                $prod=$requet->fetchALL(PDO::FETCH_ASSOC);
                                if (empty($prod)) {
                                  echo '<script>window.location.href = "accueil.php";</script>';
                                  exit();
                                }
                                foreach($prod as $ligne){
                                  $quantité_produit_restant=$ligne['remaining_product_quantity'];
                                  if (!isset( $quantité_produit_restant) ||  $quantité_produit_restant <= 0 ||empty($quantité_produit_restant)) {
                                    echo '<script>window.location.href = "accueil.php";</script>';
                                   exit();
                                  }
                                  $categ=$ligne['category_name'];
                                  $liste=$ligne['sub_category_name'];
                                  $type=$ligne['Sub_Category_Title_name'];
                                  $image=$ligne['product_image'];
                                  $nom=$ligne['Product_name'];
                                  $prix=$ligne['product_price'];
                                  $disc=$ligne['discount'];
                                  $mark=$ligne['brand'];
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
                                    <div class="image_prd_info" style="padding-left: 8px; display: flex; flex-direction: column;  width: 37.5%; padding-top: 8px;">
                                          <div style=" width: 94%; height: 315px; display: flex; justify-content: center;  box-shadow: 0 1.5px 1px 0 rgba(0, 0, 0, .04);"><img style="max-width: 97%;object-fit: contain;" src="<?php echo $image; ?>"> </div>
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
                                                           <div style="font-size: 1.5rem; font-weight: 700; padding:7px 0 7px 0;"><?php echo $new_prix;?> Dhs</div>
                                                           <?php
                                                           if($ligne['discount']!=0){
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
                                                 $idclt = isset($_SESSION['user']['user_id']) ? $_SESSION['user']['user_id'] : null;
                                                  if(!isset($_SESSION['panier'] [$idclt] )){
                                                    $_SESSION['panier'] [$idclt]= [];
                                                  }  
                                                  foreach ($_SESSION['panier'][$idclt] as $idProduit => $quantite){
                                                    $idProduit = trim($idProduit); 
                                                    if ($idProduit == $_GET['id_produit']) {
                                                        // Le produit est présent dans le panier
                                                        $existsInCart = true;
                                                        break;
                                                      }
                                                    }

                                                  if ($existsInCart) {
                                                    $valeur=$_GET['id_produit'];
                                                    $requet= $bd->prepare('SELECT * FROM product where  product.Product_id = :valeur'); 
                                                    $requet->bindParam(':valeur', $valeur);
                                                    $requet->execute();
                                                    $prod=$requet->fetchALL(PDO::FETCH_ASSOC);
                                                    foreach($prod as $ligne){
                                                     
                                                      
                                                      if($idProduit==$ligne['Product_id']){
                                                        if($_SESSION['panier'][$idclt][$_GET['id_produit']]>$ligne['remaining_product_quantity']){
                                                         $_SESSION['panier'][$idclt][$_GET['id_produit']]=$ligne['remaining_product_quantity'];
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
                                              <div id="alert_lieu" style="display:none;text-shadow: 0.5px 0.5px 8px rgba(0, 0, 0, 0.36);;font-weight:bold;font-size:15px;color: rgb(255, 255, 255); background-color:rgba(255, 0, 0, 0.66); margin-right:10px;padding:14px;border-radius:5px;">
                                              Choisissez un lieu !!!
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
                                                    $requet= $bd->prepare('SELECT * FROM city'); 
                                                    $requet->execute();
                                                    $prod=$requet->fetchALL(PDO::FETCH_ASSOC);
                                                    foreach($prod as $ligne){
                                                        if(isset($_GET['ville']) && $_GET['ville']==$ligne['city_id']){
                                                           echo"<option value=\"".$ligne['city_id']."\" selected>".$ligne['city_name']."</option>";
                                                        }else{
                                                            echo"<option value=\"".$ligne['city_id']."\">".$ligne['city_name']."</option>";
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
                                                        $requet = $bd->prepare('SELECT * FROM location, city WHERE location.city_id = city.city_id AND city.city_id = :valeur'); 
                                                         $requet->bindParam(':valeur', $valeur);
                                                          $requet->execute();
                                                          $dd = $requet->fetchAll(PDO::FETCH_ASSOC);
            
                                                            foreach($dd as $ligne) {
                                                                 if(isset($_GET['lieu']) && $_GET['lieu'] == $ligne['location_id']) {
                                                                   
                                                                      echo "<option value=\"" . $ligne['location_id'] . "\" selected>" . $ligne['location_name'] . "</option>";
                                                                  } else {
                                                                      echo "<option value=\"" . $ligne['location_id'] . "\">" . $ligne['location_name'] . "</option>";
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
    <?php include 'componnent/footer.html'; ?>
<!-- envoiyer la form+actualiser la page+ reste dans le meme page-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('#acheterForm').submit(function(event) {
      event.preventDefault();
      var selectedLieu = $('select[name="lieu"]').val(); // Récupère la valeur du lieu sélectionné
      var alert= document.getElementById('alert_lieu')
      if (!selectedLieu) { // Vérifie si aucun lieu n'est sélectionné
        alert.style.display="block";
        return; // Stoppe l'exécution de la requête AJAX
      } 
      alert.style.display="none";
      var formData = $(this).serialize();

      $.ajax({
        url: 'panier.php',
        type: 'POST',
        data: formData,
        success: function(response) {
          location.reload();
        },
        error: function(xhr, status, error) {
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
 

 