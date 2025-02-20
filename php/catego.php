<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jumia Anniversaire 2023 | Meilleures offres de Téléphones, TVs, Mode, Maison, Beauté et plus</title>
<link rel="icon" type="image/ico" sizes="any" href="https://www.jumia.ma/assets_he/favicon.87f00114.ico">
<link rel="stylesheet" href="../css/Accueil_banner.css">
<link rel="stylesheet" href="../css/Accueil_header.css">
<link rel="stylesheet" href="../css/Accueil_main.css">   
<link rel="stylesheet" href="../css/acc_main.css">
<link rel="stylesheet" href="../css/categorie.css">
<link rel="stylesheet" href="../css/footer.css">  
<link rel="stylesheet" href="../css/header.css">
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
      <?php include 'componnent/banner.html'; ?> <!--le baner-->
      <?php include 'componnent/header.php'; ?> <!--le header-->

      <main class="mn">
         <div class="main">
            <div class="main_col3">
               <div class="cat_d1">
                  Accueil > <?php echo $_GET['cat']; ?>
               </div>
               <?php if($_GET['cat']=="Téléphone & Tablette") {?>
                  <div class="cat_d2" >
                     <section>
                        <h2 >Nos Catégories - Téléphonie & Tablettes</h2>
                        <div>
                           <a href="" >
                              <div>
                                 <img src="../images/tf.png">
                              </div>
                           </a>
                           <a href="" >
                              <div>
                                 <img src="../images/tt.png">
                              </div>
                           </a>                 
                        </div>        
                     </section>
                  </div>
                  <div class="cat_d2">
                     <section>
                        <div>
                           <a href="">
                              <div>
                                 <img src="../images/at.png">
                              </div>
                           </a>
                           <a href="">
                              <div>
                                 <img src="../images/tf2.png">
                              </div>
                           </a> 
                        </div>
                     </section>
                  </div>
                  <div class="cat_d3">
                     <section>
                        <h2>Vos Marques Préférées</h2>
                           <div  name="mrki">
                              <a href=""><img src="../images/sa.png" width=""height="66"></a>
                              <a href=""><img src="../images/ch.png" width=""height="66"></a>
                              <a href=""><img src="../images/oppo.png" width=""height="66"></a>
                              <a href=""><img src="../images/infi.png" width=""height="66"></a>
                              <a href=""><img src="../images/hw.png" width=""height="66"></a>
                              <a href=""><img src="../images/rea.png" width=""height="66"></a>
                              <a href=""> <img src="../images/vi.png" width=""height="66"></a>
                              <a href=""> <img src="../images/nok.png" width=""height="66"></a>
                              <a href=""> <img src="../images/edi.png" width=""height="66"></a>
                              <a href=""> <img src="../images/or.png" width=""height="66"></a>
                              <a href=""> <img src="../images/7o.png" width=""height="66"></a>
                              <a href=""> <img src="../images/so.png" width=""height="66"></a>
                           </div>
                     </section>
                  </div>
                  <?php } ?>
                  <section class="product_aff_sec">
                     <header>
                        <div class="tit_p1">
                           <span>Top deals</span>
                        </div>
                        <div class="tit_p2">
                           <a href="">VOIR PLUS ></a>
                        </div>
                     </header>
                  <div >
                     <div class="prd_ctn">
                        <?php  
                        try {
                           $requet= $bd->prepare('SELECT * FROM Product'); 
                           $requet->execute();
                           $prod=$requet->fetchALL(PDO::FETCH_ASSOC);
                        } catch (\Throwable $th) {
                           die();
                        }
                        // Parcourt chaque produit récupéré dans le tableau $prod
                        $count = 0;
                        foreach($prod as $ligne){
                        if ($count % 6 == 0 && $count != 0) {
                           echo '</div></div><div id="sec">
                           <div class="pd_ui">';
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
                        ?>
                     </div>
                  </div>
               </section>
            </div>
        </div>
     </main>
     <?php include 'componnent/footer.html'; ?>
   </div>

</body>
</html>