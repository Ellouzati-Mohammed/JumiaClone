<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <title>Jumia Anniversaire 2023 | Meilleures offres de Téléphones, TVs, Mode, Maison, Beauté et plus</title>
<link rel="icon" type="image/ico" sizes="any" href="https://www.jumia.ma/assets_he/favicon.87f00114.ico">

<link rel="icon" type="image/ico" sizes="any" href="https://www.jumia.ma/assets_he/favicon.87f00114.ico">
<link rel="stylesheet" href="../css/Accueil_banner.css">
<link rel="stylesheet" href="../css/Accueil_header.css">
<link rel="stylesheet" href="../css/footer.css">  
<link rel="stylesheet" href="../css/produit.css">
<link rel="stylesheet" href="../css/header.css">  
   
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
                          try{
                                $valeur=$_GET['id_produit'];
                                $requet= $bd->prepare('SELECT * FROM product,category,sub_category,sub_category_title where category.category_id=sub_category.category_id and sub_category.sub_category_id=sub_category_title.sub_category_id and sub_category_title.sub_category_title_id=product.sub_category_title_id and product.product_id = :valeur'); 
                                $requet->bindParam(':valeur', $valeur);
                                $requet->execute();
                                
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
                          } catch (\Throwable $th) {
                              die();
                          }
      ?>
    <main class="main_">
        <div class="row_row">
             <div class="plg">
               <?php echo"Accueil > $categ > $liste > $type > $nom"; ?></div>
            <section class="sec14">
                            <div class="dvk">
                                    <div class="image_prd_info">
                                          <div class="dvim" >
                                            <img style="" src="<?php echo $image; ?>"> </div>
                                          <section class="partag" >
                                            <h2>PARTAGEZ CE PRODUIT</h2>
                                            <div><img src="../images/facebook.png" width="30px" height="28px"><img src="../images/twitr.png" width="28px" height="28px" style="margin-left: 5px;"></div>
                                          </section>
                                    </div>
                                    <div class="info_prod_achat" style="width: 62.5%; ">
                                          <div class="nom_prefer">
                                            <div class="un_nm_pr">
                                                <a href="" >Boutique Officielle</a>
                                                <h1><?php echo $nom;?></h1>
                                            </div>
                                            <a href=""><img src="../images/prefer.png" width="23.5px" height="21px"></a>
                                          </div>
                                          <div class="mark_rate_prix">
                                              <div class="mark" >Marque: <a href=""><?php echo $mark; ?></a> </div>
                                              <div class="rate"><div><img src="../images/rating.png" width="77px" height="14px"></div><a href="">(5 avis vérifies)</a></div>
                                              <div class="livraison"><img src="../images/livre.png" width="100px" height="15px"></div>
                                              <div class="prix_dismount_info">
                                                     <div class="prix_dismount">
                                                           <div class="prx_t"><?php echo $new_prix;?> Dhs</div>
                                                           <?php
                                                           if($ligne['discount']!=0){
                                                            echo"<div class=\"prxf\" >
                                                            <div class=\"prxf_fist_dv\">".$prix." Dhs</div>
                                                            <div class=\"prxf_sec_dv\"><span>-".$disc."%</span></div>
                                                           </div>";
                                                           }
                                                           
                                                           ?>
                                                     </div>
                                                     <p>Disponible</p>
                                                     <div class="lv_prt">+ livraison à partir de<span> 12.00 Dhs </span>(livraison gratuite si supérieur à 150.00 Dhs) vers CASABLANCA - Anfa</div>
                                              </div>
                                          </div>
                                          <div class="j'achéte achet_op">
                                              <div class="disp_opt"><span>OPTIONS DISPONIBLES</span></div>
                                              <div class="j'achéte_boutton achet_op_btn">
                                             
                                             <?php
                                              try{
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
                                                    $valeur=$_GET['id_produit'];
                                                    $requet= $bd->prepare('SELECT * FROM product where  product.Product_id = :valeur'); 
                                                    $requet->bindParam(':valeur', $valeur);
                                                    $requet->execute();
                                                    $prod=$requet->fetchALL(PDO::FETCH_ASSOC);
                                                  if ($existsInCart) {
                                                   
                                                    foreach($prod as $ligne){
                                                     
                                                      
                                                      if($idProduit==$ligne['Product_id']){
                                                        if($_SESSION['panier'][$idclt][$_GET['id_produit']]>$ligne['remaining_product_quantity']){
                                                         $_SESSION['panier'][$idclt][$_GET['id_produit']]=$ligne['remaining_product_quantity'];
                                                         
                                                       }
                                                      }
                                                    }
                                                    

                                                    echo"<form class=\"acheterFormif\" id=\"acheterForm\" action=\"panier.php\" method=\"post\">
                                                    <input type=\"text\" value=\"".$_SESSION['panier'][$idclt][$_GET['id_produit']]."\" placeholder=\"Entrez la quantité\" name=\"quantitt\">
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
                                                    <button type=\"submit\"  style=\"\">VALIDE</button>
                                                   </form>";
                                                   
                                                  } else {
                                                    echo"<form class=\"acheterFormelse\" id=\"acheterForm\" action=\"panier.php\" method=\"post\">
                                                    <input type=\"hidden\" name=\"achéte\" value=\" ".$_GET['id_produit']." \">";
                                                    if(isset($_GET['ville']) && isset($_GET['lieu'])){
                                                      $_SESSION['cmd'][$idclt][$_GET['id_produit']]['ville']=$_GET['ville'];
                                                      $_SESSION['cmd'][$idclt][$_GET['id_produit']]['lieu']=$_GET['lieu'];
                                                      echo"
                                                      <input type=\"hidden\" name=\"ville\" value=\" ".$_GET['ville']." \">
                                                      <input type=\"hidden\" name=\"lieu\" value=\" ".$_GET['lieu']." \">";
                                                      }
                                                      echo"
                                                    <button type=\"submit\"  ><img src=\"../images/acht.png\" width=\"30px\" height=\"30px\"><span>J'ACHETE</span><div></div></button>
                                                    <input type=\"hidden\" name=\"quantitt\" value=\"1\">
                                                   </form>";
                                                  }
                                              } catch (\Throwable $th) {
                                                  die();
                                              }
                                                ?> 
                                              </div>
                                              <div class="allert_de_lieu" id="alert_lieu">
                                              Choisissez un lieu !!!
                                              </div>
                                          </div>
                                          <section class="omo_sec" >
                                                  <h1>PROMOTIONS</h1>
                                                  <div class="som_bla">
                                                     <a class="cd1" href=""><img src="../images/avv.png" width="20px" height="20px"><span>Les commandes Jumia Express sont éligibles à la livraison gratuite. Offre </br>soumise à conditions</span></a>
                                                     <a class="cd2" href=""><img src="../images/prooo.png" width="20px" height="20px"><span>Adieu au temps perdu aux péages. Rechargez votre Pass Jawaz maintenant et gagnez votre temps !</span></a>
                                                  </div>
                                          </section>

                                    </div>

                                    <div class="signal_rep"><a href=""><span>Signaler des informations incorrectes liées au produit</span></a></div>
                            </div>
             </section>
              
             
            </section>

             <div class="livr_sec">
                      <section>
                              <h1>LIVRAISON & RETOURS</h1>
                              <div class="header_liv_det">
                                   <article>
                                      <img src="../images/expr.png" width="115px" height="13.5px">
                                      <p>Livraison rapide dans les grandes villes.<a href="">Detail</a></p>
                                   </article>
                              </div>
                              <div class="main_liv_det">
                                   <article>
                                          <h3>Choisissez le lieu</h3>
                                          <div class="lieu_lv_form">
                                                 <form class="vl1" id="vl" method="get" action="produit.php">
                                                 
                                                 <input type="hidden" name="id_produit" value="<?php echo $_GET['id_produit']; ?>">
                                                    <select onchange="submitForm()" name="ville">
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
                                                  
                                                  <form class="vl2" id="vl" method="get" action="produit.php">
                                                   <input type="hidden" name="id_produit" value="<?php echo $_GET['id_produit']; ?>">
                                                         <input type="hidden" name="ville" value="<?php if(isset($_GET['ville'])) { echo $_GET['ville']; } ?>">
 
                                                       <select onchange="this.form.submit()" name="lieu">
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
                                             
                                          <section class="vender_lv_info">
                                                <div>
                                                      <article class="art1_lv">
                                                           <img src="../images/truck1.png" width="40px" height="40px"> 
                                                           <div>
                                                                 <div class="lv_info_dm">
                                                                    <div class="lv_domc"> 
                                                                      <h4>Livraison à domicile</h4>
                                                                      <button>Détails</button>
                                                                    </div> 
                                                                    <div class="lv_pr">
                                                                           <div>Livraison <em>27.00 Dhs</em> (livraison gratuite si supérieur à 150.00 Dhs)</div>
                                                                           <div>Livré au plus tard le <em>15 juin</em> si vous commandez d'ici <em>19hrs 45mins</em></div>
                                                                    </div>
                                                                 </div>
                                                                 
                                                           </div>
                                                      </article>
                                                      <article class="art2_lv">
                                                           <img src="../images/truck2.png" width="41px" height="41px"> 
                                                           <div>
                                                                 <div class="lv_info_dm">
                                                                    <div class="lv_domc"> 
                                                                      <h4>Point relais</h4>
                                                                      <button >Détails</button>
                                                                    </div> 
                                                                    <div class="lv_pr">
                                                                           <div>Livraison <em>12.00 Dhs</em> (livraison gratuite si supérieur à 150.00 Dhs)</div>
                                                                           <div>Disponible pour le retrait à partir du <em >14 juin</em> si vous commandez d'ici <em>4hrs 33mins</em></div>
                                                                    </div>
                                                                 </div>
                                                                 
                                                           </div>
                                                      </article>
                                                      <article class="art3_lv">
                                                           <img src="../images/truck3.png" width="41px" height="41px"> 
                                                           <div>
                                                                 <div class="lv_info_dm">
                                                                    <div  class="lv_domc"> 
                                                                      <h4 >Politique de retour</h4>
                                                                      <button>Détails</button>
                                                                    </div> 
                                                                    <div class="lv_pr">
                                                                           <div>Retour gratuit dans les 7 jours suivant la date de livraison.<a href="">En savoir plus</a></div>
                                                                    </div>
                                                                 </div>
                                                                 
                                                           </div>
                                                      </article>

                                                </div>
                                          </section>
                                   </article>
                                   
                              </div>
                      </section>
                      <div class="vender_inf">
                            <section>
                             <a href="" ><h2>INFORMATIONS SUR LE VENDEUR</h2></a>
                             <div>
                                     <p>Jumia</p>
                                     <div><em>100%</em> Évaluation du vendeur</div>
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
 

 