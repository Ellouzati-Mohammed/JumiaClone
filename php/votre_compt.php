<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="../css/Accueil_banner.css">
    <link rel="stylesheet" href="../css/Accueil_header.css">
    <link rel="stylesheet" href="../css/Accueil_main.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/header.css">  

    <title>Jumia Anniversaire 2023 | Meilleures offres de Téléphones, TVs, Mode, Maison, Beauté et plus</title>
<link rel="icon" type="image/ico" sizes="any" href="https://www.jumia.ma/assets_he/favicon.87f00114.ico">

    <link rel="stylesheet" href="../css/gt.css"> 
    <?php session_start();
    require_once 'db/db.php';
     ?>
</head>
<body>

<div class="jm">
    
    <?php include 'componnent/banner.html'; ?> <!--le baner-->
    <?php include 'componnent/header.php'; ?> <!--le header-->


     
 <main style="border-top: 2px solid #e4e4e4; box-shadow: 0 -4px 4px rgba(0, 0, 0, 0.5);background-color: #f1f1f2;display: flex; flex-direction: column; padding-top: 8px; padding-bottom: 56px; position: relative; font-size: .875rem; font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif; color: #313133;">
       <div style="padding-bottom: 16px;padding-top:16px; max-width: 1184px; width: 100%; flex-wrap: wrap;display: flex;width: 1184px;
    margin: 0 auto;">
              <div style="max-width: 25%; min-width: 25%; width: 25%;  padding-left: 8px;padding-right: 8px;">
                    <nav style="box-shadow: 0 2px 5px 0 rgba(0,0,0,.05);display: flex;flex-direction: column; overflow: hidden; background-color: #fff; border-radius: 4px;">

                              <a href="votre_compt.php?r=1" id="gt" class="gt1" style=" padding-bottom: 14.5px; padding-top: 14.5px; padding-left: 14.5px;  display: flex; align-items: center;color: inherit; text-decoration:none;"><img src="../images/votre_compt" width="22" height="22" style="margin-right:14px;">Votre compte Jumia</a>
                              <a href="votre_compt.php?r=2" id="gt" class="gt2" style=" padding-bottom: 14.5px; padding-top: 14.5px; padding-left: 14.5px;  display: flex; align-items: center;color: inherit; text-decoration:none;"><img src="../images/vos_cmd" width="20" height="20" style="margin-right:15px;">Votre commandes</a>
                              <a href="votre_compt.php?r=3" id="gt" class="gt3" style=" padding-bottom: 14.5px; padding-top: 14.5px; padding-left: 14.5px;  display: flex; align-items: center;color: inherit; text-decoration:none;"><img src="../images/boit" width="20" height="16" style="margin-right:15px;">Boite de réception</a>
                              <a href="votre_compt.php?r=4" id="gt" class="gt4" style=" padding-bottom: 14.5px; padding-top: 14.5px; padding-left: 14.5px;  display: flex; align-items: center;color: inherit; text-decoration:none;"><img src="../images/av" width="20" height="20" style="margin-right:15px;">Vos avis en attente</a>
                              <a href="votre_compt.php?r=5" id="gt" class="gt5" style=" padding-bottom: 14.5px; padding-top: 14.5px; padding-left: 14.5px;  display: flex; align-items: center;color: inherit; text-decoration:none;"><img src="../images/ach" width="20" height="20" style="margin-right:15px;">Bons d'achat</a>
                              <a href="votre_compt.php?r=6" id="gt" class="gt6" style=" padding-bottom: 14.5px; padding-top: 14.5px; padding-left: 14.5px;  display: flex; align-items: center;color: inherit; text-decoration:none;"><img src="../images/vos_pref" width="20" height="20" style="margin-right:15px; margin-left:0px;">Votre liste d' envies</a>
                              <a href="votre_compt.php?r=7" id="gt" class="gt7" style=" padding-bottom: 14.5px; padding-top: 14.5px; padding-left: 14.5px;  display: flex; align-items: center;color: inherit; text-decoration:none;  border-bottom: 1px solid #f1f1f2;"><img src="../images/vus" width="20" height="20" style="margin-right:15px;">Vus récemment</a>
                              <a href="" style=" padding-bottom: 14.5px; padding-top: 14.5px; padding-left: 14.5px;  display: flex; align-items: center;color: inherit; text-decoration:none;">Gérez votre Compte</a>
                              <a href="" style=" padding-bottom: 14.5px; padding-top: 14.5px; padding-left: 14.5px;  display: flex; align-items: center;color: inherit; text-decoration:none;">Adresses</a>
                              <a href="" style=" padding-bottom: 14.5px; padding-top: 14.5px; padding-left: 14.5px;  display: flex; align-items: center;color: inherit; text-decoration:none;">Préférences de communication</a>
                              <a href="" style=" padding-bottom: 14.5px; padding-top: 14.5px; padding-left: 14.5px;  display: flex; align-items: center;color: inherit; text-decoration:none;  border-bottom: 1px solid #f1f1f2;">Fermer le compte</a>
                      </nav>  
                      <form method="post" action="Accueil.php" class="cona2" style=" width:100%; display:flex;justify-content: center;background-color: #fff;"><input type="submit" name="decon" class="gig" style=" color: white;border: 0;border-radius: 4px;font-weight: 500;font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;font-size: 14px;cursor: pointer; padding:5px 0px;width:50%;margin-left:12px;margin-top:12px; margin-bottom:8px; color:#f68b1e;" value="DECONNEXTION"></form>
                    
              </div>
              <?php 
              
              
              $requet = $bd->prepare('SELECT * FROM order_, user, order_product, product
                        WHERE user.user_id = order_.user_id
                        AND order_.order_id = order_product.order_id
                        AND order_product.Product_id = product.Product_id
                        AND user.user_id = :val1');
              $requet->bindParam(':val1', $_SESSION['user']['user_id']);
              $requet->execute();
              $aff=$requet->fetchAll(PDO::FETCH_ASSOC);
              $prix_totale=0;
              $quantittotale=0;
              
          /*votre commandes*/
          if($_GET['r']==2){ 
                    echo"
                    <style>
               .gt2{
                font-weight: 500;
                background-color: #d4d4d6;
               }
               </style>
                    <section style=\"max-width: 75%; min-width: 75%;width: 75%;  padding-left: 8px; padding-right: 8px; display: block;\">
                   <div style=\"height: 100%; box-shadow: 0 2px 5px 0 rgba(0,0,0,.05); background-color: #fff; border-radius: 4px;\">
                   <header style=\"padding-left: 16px; padding-bottom: 8px; padding-right: 16px; padding-top: 8px; height: 0; min-height: 48px; align-items: center; display: flex; border-bottom: 1px solid #f1f1f2;  margin: 0; padding: 0;\">
                                     <h1 style=\"font-weight: 500;font-size: 1.25rem; padding-left: 16px;\">Votre commandes</h1>
                           </header>";
              
                           if(!empty(count($aff))){
                
                           
              foreach($aff as $ligne){
                $prix=$ligne['product_price'];
                                  $disc=$ligne['product_price'];
                                  $new_prix=$prix-($prix*$disc/100);
                                  $prix_totale=$prix_totale+($new_prix*$ligne['quantity']);
                                  if($disc==0){
                                  $new_prix=$prix;
                                  }
                                echo "<article id=\"article_pan\" style=\"border-bottom: 1px solid #f1f1f2;margin-left: 16px;margin-right: 16px; padding-bottom: 0px; padding-top: 16px;background-color: #fff; \">
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
                                       <div style=\"display: flex; font-size: .875rem; margin-top:10px; justify-content: space-between;margin-bottom:10px;\">
                                              <div id=\"acheterForm\">
                                                 <div style=\"align-items: center; border-radius: 0; cursor: pointer; font-size: .875rem; text-align: center; font-weight: 500; color: black; background-color: transparent; border: 0; margin: 0; font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif;\"><div style=\"display:flex; \"><span style=\"padding-left:10px; font-weight: 500;\">Quantité: ".$ligne['quantity']."</span></div></div>
                                               
                                              </div>
                                              
                                       </div>
                                </article>";} 
                              }else{
                         echo"
                                  <div style=\"padding: 8px; width: 100%; display: flex; flex-wrap: wrap;\">
                                             <div style=\"width: 100%; padding:8px;\">
                                                           <div style=\"font-weight: 500; color: #75757a; display: flex; align-items: center;\"></div> 
                                                           <a href=\"\" style=\"font-weight: 500; height: 48px; padding:0px 16px; text-decoration:none; color: #75757a;\">COMMANDES OUVERTES (0)</a>
                                             </div>
      
                                             <div style=\"font-size: .875rem;padding-top: 16px; width:100%; flex:100%;  padding-right: 16px;\">
                         <div style=\"background-color: white; text-align: center;padding-top: 32px;padding-bottom: 32px;box-shadow: 0 2px 5px 0 rgba(0,0,0,.05);border-radius: 4px;\">
                                   <img src=\"../images/coem.png\" width=\"104\" height=\"104\" style=\"margin-bottom: 8px; margin-top: 6px;\">
                                   <h2 style=\"font-size: 1rem;font-weight: 500;padding-bottom: 8px;padding-top: 6px; margin:0;\">Vous n'avez placé aucune commande !</h2>
                                   <p style=\"padding-bottom: 8px; padding-top: 8.5px; margin:0; font-size: .875rem; margin-bottom: 40px;\">Toutes vos commandes seront sauvegardées ici pour que vous<br> puissiez consulter leur statut à tout moment.</p>
                                  <div style=\" margin-bottom:18.5px;\"><a href=\"Accueil.php\" style=\" box-shadow: 0 4px 8px 0 rgba(0,0,0,.2);color: #fff;background-color: #f68b1e; text-decoration: none; font-size: .875rem; text-align: center; font-weight: 500; padding: 16px; border: 0; border-radius: 4px; padding-top:14px; \">POURSUIVEZ VOS ACHATS</a></div>
                         </div>
                    </div>
                                             
                                  </div>
                         </div>
                    </section>";

                              }
                                echo"</div></section>";
                              
              }elseif($_GET['r']==1){
                  
               echo"
               <style>
               .gt1{
                font-weight: 500;
                background-color: #d4d4d6;
               }
               </style>
                <section style=\"max-width: 75%; min-width: 75%;width: 75%;  padding-left: 8px; padding-right: 8px; display: block;\">
                   <div style=\"height: 100%; box-shadow: 0 2px 5px 0 rgba(0,0,0,.05); background-color: #fff; border-radius: 4px; \">
                            <header style=\"padding-left: 16px; padding-bottom: 8px; padding-right: 16px; padding-top: 8px; height: 0; min-height: 48px; align-items: center; display: flex; border-bottom: 1px solid #f1f1f2;  margin: 0; padding: 0;\">
                                     <h1 style=\"font-weight: 500;font-weight: 500;font-size: 1.25rem; padding-left: 16px;\">Votre compte</h1>
                           </header>
                            <div style=\"padding: 8px; width: 100%; display: flex; flex-wrap: wrap;\">
                                       <div style=\"padding-bottom: 8px; padding-top: 8px; max-width: 50%; min-width: 50%;width: 50%; padding-left: 8px; padding-right: 8px;\">
                                           <article style=\"display: flex;height: 100%; flex-direction: column;border: 1px solid #d4d4d6; border-radius: 4px;\">
                                                        <header style=\"border-bottom: 1px solid #d4d4d6;\"><h2 style=\"margin:0;font-size: .875rem;font-weight: 500;padding:16px;\">INFORMATIONS PERSONNELLES</h2></header>
                                                        <div style=\"padding: 8px;\">
                                                             <p style=\"font-size: 1rem;padding-left: 8px; padding-right: 8px; padding-top: 8px; margin: 0;\">".$_SESSION['user']['first_name']." ".$_SESSION['user']['last_name']."</p>
                                                             <p style=\"font-size: .875rem;color: #75757a;padding-left: 8px; padding-right: 8px; padding-top: 8px; margin: 0;\">".$_SESSION['user']['Email']."</p>
                                                        </div>
                                          </article>
                                       </div>
                                       <div style=\"padding-bottom: 8px; padding-top: 8px; max-width: 50%; min-width: 50%;width: 50%; padding-left: 8px; padding-right: 8px;\">
                                           <article style=\"display: flex;height: 100%; flex-direction: column;border: 1px solid #d4d4d6; border-radius: 4px;\">
                                                        <header style=\"border-bottom: 1px solid #d4d4d6;\"><h2 style=\"margin:0;font-size: .875rem;font-weight: 500;padding:16px;\">ADRESSES</h2></header>
                                                        <div style=\"padding: 8px;\">
                                                             <p style=\"font-size: 1rem;padding-left: 8px; padding-right: 8px; padding-top: 8px; margin: 0;\">Adresse par défaut :</p>
                                                             <p style=\"padding-left: 8px; padding-right: 8px; padding-top: 8px; margin: 0;color: #75757a;\">Vous n'avez pas encore ajouté une adresse de livraison par défaut.</p>
                                                             <a href=\"\" style=\"text-decoration:none;padding-left: 8px; padding-right: 8px;display: inline-block; margin-top: 30px;margin-bottom: 7px;line-height: 1rem; font-weight: 500;color: #f68b1e;\">AJOUTER UNE ADRESSE</a>
                                                        </div>
                                          </article>
                                       </div>
                                       <div style=\"padding-bottom: 8px; padding-top: 8px; max-width: 50%; min-width: 50%;width: 50%; padding-left: 8px; padding-right: 8px;\">
                                           <article style=\"display: flex;height: 100%; flex-direction: column;border: 1px solid #d4d4d6; border-radius: 4px;\">
                                                        <header style=\"border-bottom: 1px solid #d4d4d6;\"><h2 style=\"margin:0;font-size: .875rem;font-weight: 500;padding:16px;\">CRÉDIT JUMIA</h2></header>
                                                        <div style=\"padding: 8px;\">
                                                             <p style=\"font-size: 1rem;padding-left: 8px; padding-right: 8px; padding-top: 8px; margin: 0;\">crédit</p>
                                                             
                                                        </div>
                                          </article>
                                       </div>
                                       <div style=\"padding-bottom: 8px; padding-top: 8px; max-width: 50%; min-width: 50%;width: 50%; padding-left: 8px; padding-right: 8px;\">
                                           <article style=\"display: flex;height: 100%; flex-direction: column;border: 1px solid #d4d4d6; border-radius: 4px;\">
                                                        <header style=\"border-bottom: 1px solid #d4d4d6;\"><h2 style=\"margin:0;font-size: .875rem;font-weight: 500;padding:16px;\">PRÉFÉRENCES DE COMMUNICATION</h2></header>
                                                        <div style=\"padding: 8px;\">
                                                            <p style=\"padding-left: 8px; padding-right: 8px; padding-top: 8px; margin: 0;font-size: 1rem;\">Vous n'êtes actuellement abonné à aucune de nos newsletters.</p>
                                                             <a href=\"\" style=\"text-decoration:none;padding-left: 8px; padding-right: 8px;display: inline-block; margin-top: 30px;margin-bottom: 7px;line-height: 1rem; font-weight: 500;color: #f68b1e;\">MODIFIER LES PRÉFÉRENCES DE COMMUNICATION</a>
                                                        </div>
                                          </article>
                                       </div>
                            </div>
                   </div>
              </section>";


            }elseif($_GET['r']==3){
             echo"<style>
             .gt3{
              background-color: #d4d4d6;
              font-weight: 500;
             }
             </style>
              <section style=\"max-width: 75%; min-width: 75%;width: 75%;  padding-left: 8px; padding-right: 8px; display: block;\">
                   <div style=\"height: 100%; box-shadow: 0 2px 5px 0 rgba(0,0,0,.05); background-color: #fff; border-radius: 4px;\">
                   <header style=\"padding-left: 16px; padding-bottom: 8px; padding-right: 16px; padding-top: 8px; height: 0; min-height: 48px; align-items: center; display: flex; border-bottom: 1px solid #f1f1f2; font-weight: 500; margin: 0; padding: 0;\">
                                     <h1 style=\"font-weight: 500;font-size: 1.25rem; padding-left: 16px;\">Messages</h1>
                           </header>";
              echo"
              <div style=\"padding: 8px; width: 100%; display: flex; flex-wrap: wrap;\">
                        

    <div style=\"font-size: .875rem;padding-top: 16px; width:100%; flex:100%;  padding-right: 16px;\">
     <div style=\"background-color: white; text-align: center;padding-top: 32px;padding-bottom: 32px;border-radius: 4px;\">
               <img src=\"../images/msg.png\" width=\"104\" height=\"104\" style=\"margin-bottom: 8px; margin-top: 6px;\">
               <h2 style=\"font-size: 1rem;font-weight: 500;padding-bottom: 8px;padding-top: 6px; margin:0;\">Vous n'avez aucun message</h2>
               <p style=\"padding-bottom: 8px; padding-top: 8.5px; margin:0; font-size: .875rem; margin-bottom: 40px;\">Tous les messages que nous vous enverrons seront affichés ici.<br> Restez connecté</p>
       </div>
</div>
                         
              </div>
     </div>
</section>";

echo"</div></section>";

            }
            elseif($_GET['r']==4){
              echo"<style>
              .gt4{
                font-weight: 500;
               background-color: #d4d4d6;
              }
              </style>
               <section style=\"max-width: 75%; min-width: 75%;width: 75%;  padding-left: 8px; padding-right: 8px; display: block;\">
                    <div style=\"height: 100%; box-shadow: 0 2px 5px 0 rgba(0,0,0,.05); background-color: #fff; border-radius: 4px;\">
                    <header style=\"padding-left: 16px; padding-bottom: 8px; padding-right: 16px; padding-top: 8px; height: 0; min-height: 48px; align-items: center; display: flex; border-bottom: 1px solid #f1f1f2; font-weight: 500; margin: 0; padding: 0;\">
                                      <h1 style=\"font-weight: 500;font-size: 1.25rem; padding-left: 16px;\">Vos avis en attente</h1>
                            </header>";
               echo"
               <div style=\"padding: 8px; width: 100%; display: flex; flex-wrap: wrap;\">
                         
 
     <div style=\"font-size: .875rem;padding-top: 16px; width:100%; flex:100%;  padding-right: 16px;\">
      <div style=\"background-color: white; text-align: center;padding-top: 32px;padding-bottom: 32px;border-radius: 4px;\">
                <img src=\"../images/jm.png\" width=\"104\" height=\"104\" style=\"margin-bottom: 8px; margin-top: 6px;\">
                <h2 style=\"font-size: 1rem;font-weight: 500;padding-bottom: 8px;padding-top: 6px; margin:0;\">Vous n'avez aucune commande en attente d'évaluation</h2>
                <p style=\"padding-bottom: 8px; padding-top: 8.5px; margin:0; font-size: .875rem; margin-bottom: 30px; line-height: 25px;\">Après la livraison de vos produits, vous pourrez les évaluer. Vos<br> commentaires seront publiés sur la page produit pour aider tous les<br> utilisateurs de Jumia à bénéficier de la meilleure expérience d'achat.</p>
                <div style=\" margin-bottom:18.5px;\"><a href=\"Accueil.php\" style=\" box-shadow: 0 4px 8px 0 rgba(0,0,0,.2);color: #fff;background-color: #f68b1e; text-decoration: none; font-size: .875rem; text-align: center; font-weight: 500; padding: 16px; border: 0; border-radius: 4px; padding-top:14px; \">POURSUIVEZ VOS ACHATS</a></div>
                        
         </div>
 </div>
                          
               </div>
      </div>
 </section>";
 
 echo"</div></section>";
 
             }elseif($_GET['r']==5){
              echo"<style>
              .gt5{
                font-weight: 500;
               background-color: #d4d4d6;
              }
              </style>
               <section style=\"max-width: 75%; min-width: 75%;width: 75%;  padding-left: 8px; padding-right: 8px; display: block;\">
                    <div style=\"height: 100%; box-shadow: 0 2px 5px 0 rgba(0,0,0,.05); background-color: #fff; border-radius: 4px;\">
                    <header style=\"padding-left: 16px; padding-bottom: 8px; padding-right: 16px; padding-top: 8px; height: 0; min-height: 48px; align-items: center; display: flex; border-bottom: 1px solid #f1f1f2; font-weight: 500; margin: 0; padding: 0;\">
                                      <h1 style=\"font-weight: 500;font-size: 1.25rem; padding-left: 16px;\">Bons d'achat</h1>
                            </header>";
               echo"
               <div style=\"padding: 8px; width: 100%; display: flex; flex-wrap: wrap;\">

     <div style=\"font-size: .875rem;padding-top: 16px; width:100%; flex:100%;  padding-right: 16px;\">
      <div style=\"background-color: white; text-align: center;padding-top: 32px;padding-bottom: 32px;border-radius: 4px;\">
                <img src=\"../images/bng.png\" width=\"104\" height=\"104\" style=\"margin-bottom: 8px; margin-top: 6px;\">
                <h2 style=\"font-size: 1rem;font-weight: 500;padding-bottom: 8px;padding-top: 6px; margin:0;\">Actuellement, vous n'avez pas de bons d'achat<br> disponibles.</h2>
                <p style=\"padding-bottom: 8px; padding-top: 8.5px; margin:0; font-size: .875rem; margin-bottom: 30px; line-height: 25px;\">Tous les bons d'achat Jumia disponibles seront affichés ici.</p>
                <div style=\" margin-bottom:18.5px;\"><a href=\"Accueil.php\" style=\" box-shadow: 0 4px 8px 0 rgba(0,0,0,.2);color: #fff;background-color: #f68b1e; text-decoration: none; font-size: .875rem; text-align: center; font-weight: 500; padding: 16px; border: 0; border-radius: 4px; padding-top:14px; \">POURSUIVEZ VOS ACHATS</a></div>
                        
         </div>
 </div>
                          
               </div>
      </div>
 </section>";
 
 echo"</div></section>";
 
             }elseif($_GET['r']==6){
              echo"<style>
              .gt6{
                font-weight: 500;
               background-color: #d4d4d6;
              }
              </style>
               <section style=\"max-width: 75%; min-width: 75%;width: 75%;  padding-left: 8px; padding-right: 8px; display: block;\">
                    <div style=\"height: 100%; box-shadow: 0 2px 5px 0 rgba(0,0,0,.05); background-color: #fff; border-radius: 4px;\">
                    <header style=\"padding-left: 16px; padding-bottom: 8px; padding-right: 16px; padding-top: 8px; height: 0; min-height: 48px; align-items: center; display: flex; border-bottom: 1px solid #f1f1f2; font-weight: 500; margin: 0; padding: 0;\">
                                      <h1 style=\"font-weight: 500;font-size: 1.25rem; padding-left: 16px;\">Votre liste d'envies</h1>
                            </header>";
               echo"
               <div style=\"padding: 8px; width: 100%; display: flex; flex-wrap: wrap;\">

     <div style=\"font-size: .875rem;padding-top: 16px; width:100%; flex:100%;  padding-right: 16px;\">
      <div style=\"background-color: white; text-align: center;padding-top: 32px;padding-bottom: 32px;border-radius: 4px;\">
                <img src=\"../images/cor.png\" width=\"104\" height=\"104\" style=\"margin-bottom: 8px; margin-top: 6px;\">
                <h2 style=\"font-size: 1rem;font-weight: 500;padding-bottom: 8px;padding-top: 6px; margin:0;\">Votre liste d'envies est vide !</h2>
                <p style=\"padding-bottom: 8px; padding-top: 8.5px; margin:0; font-size: .875rem; margin-bottom: 30px; line-height: 25px;\">Vous avez trouvé quelque chose que vous aimez ? Tapez sur l'icône<br> en forme de cœur à côté de l'article pour l'ajouter à votre liste<br> d'envies! Tous vos articles sauvegardés apparaîtront ici.</p>
                <div style=\" margin-bottom:18.5px;\"><a href=\"Accueil.php\" style=\" box-shadow: 0 4px 8px 0 rgba(0,0,0,.2);color: #fff;background-color: #f68b1e; text-decoration: none; font-size: .875rem; text-align: center; font-weight: 500; padding: 16px; border: 0; border-radius: 4px; padding-top:14px; \">POURSUIVEZ VOS ACHATS</a></div>
                        
         </div>
 </div>
                          
               </div>
      </div>
 </section>";
 
 echo"</div></section>";
 
             }
              
              
              ?>
             
              

              
               

       </div>
       
 </main>
<?php include 'componnent/footer.html'; ?>
</div>




</body>


</html>