<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/Accueil_banner.css">
    <link rel="stylesheet" href="../css/Accueil_header.css">
    <link rel="stylesheet" href="../css/Accueil_main.css">
    <link rel="stylesheet" href="../css/footer.css">  
    <title>Jumia Anniversaire 2023 | Meilleures offres de Téléphones, TVs, Mode, Maison, Beauté et plus</title>
    <link rel="icon" type="image/ico" sizes="any" href="https://www.jumia.ma/assets_he/favicon.87f00114.ico">

    
    <?php session_start();  
    require_once 'db/db.php';
     ?>
</head>
<body >
   

   <?php 
               
       $idclt = isset($_SESSION['user']['user_id']) ? $_SESSION['user']['user_id'] : null;
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
                             
                             
                             ?>

    <?php include 'componnent/banner.html'; ?> <!--le baner-->
    <?php include 'componnent/header.php'; ?> <!--le header-->


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
                                                   
                                echo "<article id=\"article_pan\" style=\"margin-left: 16px;margin-right: 16px; padding-bottom: 0px; padding-top: 16px;background-color: #fff; \">
                                       <a href=\"produit.php?id_produit={$ligne['Product_id']}\" style=\"padding: 0; text-decoration: none; display: flex; flex-direction: row; \">
                                           <div><img src=\"{$ligne['product_image']}\" width=\"72\" height=\"82\"></div>
                                           <div style=\"padding-left: 16px ; padding-right: 16px; width:100%;\">
                                              <h3 style=\"font-size: 1rem;font-weight: 400;margin: 0;padding: 0; margin-top:3px;margin-bottom:8px;\">{$ligne['Product_name']}</h3>
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
                                       <div style=\"display: flex; font-size: .875rem; margin-top:10px; justify-content: space-between;\">
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
                                       </div>
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
                                                
                                                    $requet= $bd->prepare('SELECT * FROM product '); 
                                                    $requet->execute();
                                                    $prod=$requet->fetchALL(PDO::FETCH_ASSOC);

                                                    foreach($prod as $ligne){
                                                         echo"<div class=\"prodruit\" style=\"display: flex; flex-direction: column; width: 16.6666666667%;\"> 
                                                         <article>
                                                           <a href=\"produit.php?id_produit={$ligne['Product_id']}\">
                                                             <span style=\"display: flex; justify-content: center;\"><img src=\"{$ligne['product_image']}\" style=\"  height: 190px; width: auto;\"></span> <div class=\"nom_produit\" style=\"  white-space: nowrap; padding:4px 8px;  text-overflow: ellipsis; overflow: hidden;\">{$ligne['Product_name']}</div>
                                                             <div class=\"price\" style=\" font-size: 1rem;   padding:4px 8px; display: block;\"><div style=\"font-size: 1rem; font-weight: 500;\">".$ligne['product_price'] ." DH</div><div style=\"text-decoration: line-through; color: #75757a; font-size: .75rem; font-weight: 400; margin: 4px auto;\">{$ligne['product_price']} DH</div>
                                                             <div class=\"quant\" style=\"display: flex; flex-direction: column;\"> 
                                                             <div class=\"quant_nbr\" style=\"margin-bottom: 4px; font-size: .75rem; margin-top: 0px; color: #4a4a4a;\" >{$ligne['remaining_product_quantity']} article restants</div>
                                                             <div class=\"quant_bar\" style=\"width: 96%; height: 8px; border-radius: 5px; background-color: #808080; \"> 
                                                                    <div class=\"bar\" style=\"height: 100%; width: ".($ligne['remaining_product_quantity']/$ligne['total_product_quantity'])*(100)."% ; background-color: #ff9900; border-radius: 5px; \"></div>
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

