<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/Accueil_banner.css">
    <link rel="stylesheet" href="../css/Accueil_header.css">
    <link rel="stylesheet" href="../css/acc_main.css">
    <link rel="stylesheet" href="../css/footer.css">  
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/panier.css">
    <title>Jumia Anniversaire 2023 | Meilleures offres de Téléphones, TVs, Mode, Maison, Beauté et plus</title>
    <link rel="icon" type="image/ico" sizes="any" href="https://www.jumia.ma/assets_he/favicon.87f00114.ico">

    
    <?php session_start();  
    require_once 'db/db.php';
     ?>
</head>
<body>
   <?php 
   try{        
       $idclt = isset($_SESSION['user']['user_id']) ? $_SESSION['user']['user_id'] : null;
      if(!isset($_SESSION['panier'] [$idclt] )){
        $_SESSION['panier'] [$idclt]= [];
      }  
      if(isset($_POST['quantitt'])){
        $_POST['quantitt']=trim($_POST['quantitt']);
        $qty=(int)$_POST['quantitt'];
         if(isset($_POST['achéte'])){
           $_POST['achéte'] = trim($_POST['achéte']);
           $requeteStock = $bd->prepare("SELECT remaining_product_quantity FROM product WHERE Product_id = ?");
           $requeteStock->execute([$_POST['achéte']]);
           $stock = $requeteStock->fetchColumn();
           if($qty>$stock)
            $qty=$stock;
            //ajouter a produit.php
            $_SESSION['panier'] [$idclt] [$_POST['achéte']]=$qty;
         }
         if($qty==0){
          unset($_SESSION['panier'] [$idclt] [$_POST['achéte']]);
         }
      }
   } catch (\Throwable $th) {
      die();
   }
   try{
      if(isset($_POST['command'])){
         if(isset($_SESSION['user']['user_id'])){
            $qt= $bd->prepare('SELECT * FROM Product'); 
            $qt->execute();
            $produit=$qt->fetchALL(PDO::FETCH_ASSOC);
            foreach($_SESSION['panier'] [$idclt] as $idproduit=>$quantite){
               foreach($produit as $ligne ){
                  if($ligne['Product_id']==$idproduit){
                     $new_quantite=$ligne['remaining_product_quantity']-$quantite;
                     $ins=$bd->prepare('UPDATE Product SET remaining_product_quantity=? where Product_id=?');
                     $ins->bindValue(1,$new_quantite);
                     $ins->bindValue(2,$idproduit);
                     $ins->execute();
                     /*insere dans les commond*/
                     $cmd1=$bd->prepare('INSERT INTO order_ (order_id,user_id,location_id) VALUES (null,?,?)');
                     $cmd1->bindValue(1,$_SESSION['user']['user_id']);
                     $cmd1->bindValue(2,$_SESSION['cmd'][$idclt][$idproduit]['lieu']);
                     $cmd1->execute();
                     $id_command = $bd->lastInsertId();
                     $cmd2=$bd->prepare('INSERT INTO order_product (order_id,product_id,quantity,date) VALUES (?,?,?,CURRENT_TIMESTAMP())');
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
   } catch (\Throwable $th) {
      die();
   }
   ?>
    <?php include 'componnent/banner.html'; ?> <!--le baner-->
    <?php include 'componnent/header.php'; ?> <!--le header-->

   <main>
      <div class="main_div">
      <?php  if($cmt==0){ ?>
         <div class="panier_vide">
            <div>
               <img src="../images/panvid.png" alt="" width="104" height="104">
               <h2>Votre panier est vide!</h2>
               <p>Parcourez nos catégories et découvrez nos meilleures offres!</p>
               <div>
                  <a href="Accueil.php">COMMENCEZ VOS ACHATS</a>
               </div>
            </div>
         </div>
      <?php }else{ ?>
         <div class="panier_load_part1">
            <article>
               <header class="nbr_prd">
                  <h2>Panier (<?php echo $cmt; ?>)</h2>
               </header>
                  <?php
                  try{
                     $requet= $bd->prepare('SELECT * FROM Product'); 
                     $requet->execute();
                     $prod=$requet->fetchALL(PDO::FETCH_ASSOC);
                     $prix_totale=0;
                     $quantittotale=0;
                     foreach($prod as $ligne){
                     foreach($_SESSION['panier'] [$idclt] as $idproduit=>$quantite)
                     if($ligne['Product_id']==$idproduit){
                     $prix=$ligne['product_price'];
                     $disc=$ligne['discount'];
                     $new_prix=$prix-($prix*$disc/100);
                     $prix_totale=$prix_totale+($new_prix*$quantite);
                     if($disc==0){
                        $new_prix=$prix;
                     }
                     $valeur=$idproduit;
                     $requet= $bd->prepare('SELECT * FROM Product where Product.Product_id = :valeur'); 
                     $requet->bindParam(':valeur', $valeur);
                     $requet->execute();
                     $prod=$requet->fetchALL(PDO::FETCH_ASSOC);
                     foreach($prod as $ligne){
                        if($idProduit==$ligne['Product_id']){
                           if($quantite>$ligne['remaining_product_quantity']){
                              $quantite=$ligne['remaining_product_quantity'];
                           }
                        }
                     }                  
                     echo "
                     <article id=\"article_pan\">
                        <a href=\"produit.php?id_produit={$ligne['Product_id']}\">
                           <div class=\"img_pd_pn\">
                              <img src=\"{$ligne['product_image']}\" width=\"72\" height=\"82\">
                           </div>
                           <div class=\"prd_text_pn\">
                              <h3>{$ligne['Product_name']}</h3>
                              <p class=\"vrtion\"><span>Variation:</span>19g</p>
                              <p class=\"dsp\">Disponible</p>
                              <div class=\"jm_exp_lgo\">
                                 <img src=\"../images/expr.png\" width=\"112\" height=\"13\">
                              </div>
                           </div>
                           <div class=\"prx_pn_prd\">
                              <div class=\"nw_prx\">$new_prix Dhs</div>
                              <div class=\"old_prx\">
                                 <div class=\"prx\">$prix Dhs</div>
                                 <div class=\"dsc\">-$disc%</div>
                              </div>
                           </div>
                        </a>
                        <div class=\"form_op\">
                           <form id=\"acheterForm\" class=\"dlt_prd_pn\" action=\"panier.php\" method=\"post\">
                              <button>
                                 <div>
                                    <img src=\"../images/supp\" width=\"15\" height=\"18\">
                                    <span >SUPPRIMER</span>
                                 </div>
                              </button>
                              <input type=\"hidden\" name=\"achéte\" value=\"".$idproduit."\">
                              <input type=\"hidden\" name=\"quantitt\" value=\"0\">
                           </form>
                           <form class=\"nm_prd_pn\" id=\"acheterForm\" action=\"panier.php\" method=\"post\">
                              <input type=\"text\" value=\"".$quantite."\" placeholder=\"Entrez la quantité\" name=\"quantitt\">
                              <input type=\"hidden\" name=\"achéte\" value=\"".$idproduit."\">
                              <button type=\"submit\">VALIDE</button>                    
                           </form>
                        </div>
                     </article>";
                  } }
               } catch (\Throwable $th) {
                  die();
               }
                             ?>
               </article>
         </div>
         <div class="panier_load_part2">
            <div>
               <article class="cmd_tot_pn">
                  <h1>RÉSUMÉ DU PANIER</h1>
                  <div class="prix_tot">
                     <p>Sous-total</p>
                     <p><?php echo $prix_totale; ?> Dhs</p>
                  </div>
                  <div class="info_lv_val">
                     <img src="../images/valid.png" width="17" height="17">
                     <div>
                        <p>Les articles Jumia Express sont éligibles à la livraison gratuite </p>
                        <img src="../images/expr.png" width="112" height="13">
                     </div>
                  </div>
                  <!--form de commande-->
                  <form class="cmd_form" method="post" action="panier.php">
                     <div>
                        <input type="submit" value="COMMANDER (<?php echo $prix_totale; ?> DHS)">
                        <input type="hidden" name="command" value="valider">
                     </div>
                  </form>
               </article>
            </div>
         </div>
              <?php } ?>
         <div style="padding-top: 16px; width:100%; flex:100%;  padding-right: 16px;">
            <div class="prd_pl_dmd" style="background-color: white;  border-radius: 4px; display: flex; flex-direction:column;  padding:4px;">
               <header style="display: flex; flex-direction:row;   justify-content: space-between; padding:0px 15px; margin:7px 0px; margin-bottom:10px;">
                  <h2 style="margin:0; font-size: 1.25rem; font-weight: 500;">Les plus demandés</h2>
                  <a style="font-weight: 500; color: #f68b1e; font-size: .875rem; padding-right:7px; padding-top:4px;">VOIR PLUS</a>
               </header>
               <div style="display: flex; flex-direction:row; flex-wrap: nowrap; overflow: scroll; padding:0px 10px;">
                  <?php  
               try {
                     $requet= $bd->prepare('SELECT * FROM Product'); 
                     $requet->execute();
                     $prod=$requet->fetchALL(PDO::FETCH_ASSOC);
                  // Parcourt chaque produit récupéré dans le tableau $prod
                  $count = 0;
                  foreach($prod as $ligne){
                    if ($count % 6 == 0 && $count != 0) {
                        echo '
                        </div></div>
                        <div id="sec">
                        <div style="background-color: white; display: flex; flex-direction:row; flex-wrap: nowrap; padding:4px;padding-top:15px;">';
                     }
                     $id_produit=$ligne['Product_id'];
                     $prix=$ligne['product_price'];
                     $disc=$ligne['discount'];
                     $new_prix=$prix-($prix*$disc/100);
                     $image=$ligne['product_image'];
                     $nom_produit=$ligne['Product_name'];
                     $quantite_restante = $ligne['remaining_product_quantity'];
                     $quantite_totale = $ligne['total_product_quantity'];
                     $quantite_pourcentage = ($quantite_totale > 0) ? ($quantite_restante / $quantite_totale) * 100 : 0;
                     if($ligne['remaining_product_quantity']>0){
                        echo"
                        <div class=\"prodruit\" style=\"display: flex; flex-direction: column; width: 16.6666666667%;max-width:16.6666666667%;\"> 
                           <article>
                              <a href=\"produit.php?id_produit={$id_produit}\">
                                 <span style=\"display: flex; justify-content: center; height: 190px\">
                                    <img src=\"{$image}\" style=\"  max-height: 190px; width: auto;max-width:145px ;object-fit: contain;\">
                                 </span> 
                                 <div class=\"nom_produit\" style=\"  white-space: nowrap; padding:4px 8px;  text-overflow: ellipsis; overflow: hidden;\">{$nom_produit}</div>
                                 <div class=\"price\" style=\" font-size: 1rem; padding:4px 8px; display: block;\">
                                    <div style=\"font-size: 1rem; font-weight: 500;\">".$new_prix ." DH</div>
                                    <div style=\"text-decoration: line-through; color: #75757a; font-size: .75rem; font-weight: 400; margin: 4px auto;\">{$prix} DH</div>
                                    <div style=\"position:absolute;color: #f68b1e;background-color: #fef3e9;font-size: .875rem;font-weight: 500;padding:5px;min-height: 24px; align-items: center; justify-content: center; display: inline-flex; bottom:250px; left:143px;\">-".$disc."%</div>
                                    <div class=\"quant\" style=\"display: flex; flex-direction: column; \"> 
                                       <div class=\"quant_nbr\" style=\"margin-bottom: 4px; font-size: .75rem; margin-top: 5px; color: #4a4a4a;\" >{$quantite_restante} article restants</div>
                                       <div class=\"quant_bar\" style=\"width: 96%; height: 8px; border-radius: 5px; background-color: #808080; \"> 
                                          <div class=\"bar\" style=\"height: 100%; width: ".$quantite_pourcentage."% ; background-color: #ff9900; border-radius: 5px; \"></div>
                                       </div>
                                    </div>
                                 </div> 
                              </a> 
                           </article>
                        </div>";
                        $count++;
                     }
                  } 
               } catch (\Throwable $th) {
                  die();
               }
                  ?>
               </div>
            </div>
         </div>
      </div>
   </main> 
   <?php include 'componnent/footer.html'; ?>
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

