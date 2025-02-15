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
       <?php include 'componnent/banner.html'; ?> <!--le baner-->
       <?php include 'componnent/header.php'; ?> <!--le header-->

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
                                    <header style="display:flex; flex-direction: row; background-color: #c7c7cd ; justify-content: space-between;  border-radius: 4px; padding-left: 16px; padding-right: 17px;padding-top: 10px; padding-bottom: 10px;">
                                           <div>
                                                 <span style="font-size: 1.25rem; font-weight: 500; align-items: center;">Top deals</span>
                                          </div>
                                           <div>
                                                 <a href="" style="text-decoration: none; color: rgb(46, 46, 46); font-weight: 500; font-size: 15px;">VOIR PLUS ></a>
                                          </div>
                                    </header>
                                    <div >
                                           <div  style="background-color: white; display: flex; flex-direction:row; flex-wrap: nowrap; overflow: scroll; padding:4px;">

                                               <?php
                                                
                                                try {
                                                 $requet= $bd->prepare('SELECT * FROM Product'); 
                                                 $requet->execute();
                                                 $prod=$requet->fetchALL(PDO::FETCH_ASSOC);
                                               } catch (\Throwable $th) {
                                                 die();
                                               }

                                               // Parcourt chaque produit récupéré dans le tableau $prod

                                               foreach($prod as $ligne){
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
                                                    echo"<div class=\"prodruit\" style=\"display: flex; flex-direction: column; width: 16.6666666667%;\"> 
                                                    <article>
                                                      <a href=\"produit.php?id_produit={$id_produit}\">
                                                        <span style=\"display: flex; justify-content: center;\"><img src=\"{$image}\" style=\"  height: 190px; width: auto;\"></span> <div class=\"nom_produit\" style=\"  white-space: nowrap; padding:4px 8px;  text-overflow: ellipsis; overflow: hidden;\">{$nom_produit}</div>
                                                        <div class=\"price\" style=\" font-size: 1rem;   padding:4px 8px; display: block;\"><div style=\"font-size: 1rem; font-weight: 500;\">".$new_prix ." DH</div><div style=\"text-decoration: line-through; color: #75757a; font-size: .75rem; font-weight: 400; margin: 4px auto;\">{$prix} DH</div>
                                                        <div style=\"position:absolute;color: #f68b1e;background-color: #fef3e9;font-size: .875rem;font-weight: 500;padding-right: 4px;min-height: 24px; align-items: center; justify-content: center; display: inline-flex; bottom:250px; left:143px;\">".$disc."%</div>
                                                        <div class=\"quant\" style=\"display: flex; flex-direction: column; \"> 
                                                        <div class=\"quant_nbr\" style=\"margin-bottom: 4px; font-size: .75rem; margin-top: 5px; color: #4a4a4a;\" >{$quantite_restante} article restants</div>
                                                        <div class=\"quant_bar\" style=\"width: 96%; height: 8px; border-radius: 5px; background-color: #808080; \"> 
                                                               <div class=\"bar\" style=\"height: 100%; width: ".$quantite_pourcentage."% ; background-color: #ff9900; border-radius: 5px; \"></div>
                                                         </div>
                                                        </div> 
                                                       </a> 
                                                     </article>
                                                   </div>";}
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