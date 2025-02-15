<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jumia Anniversaire 2023 | Meilleures offres de Téléphones, TVs, Mode, Maison, Beauté et plus</title>
    <link rel="icon" type="image/ico" sizes="any" href="https://www.jumia.ma/assets_he/favicon.87f00114.ico">
    <link rel="stylesheet" href="styles.css"> <!-- Fichier CSS externe -->
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
    margin-bottom: 40px;
}

.header {
    display: flex;
    align-items: center;
    height: 64px;
    justify-content: center;
    margin: 0 0 8px;
    position: relative;
}

.logo {
    width: 69px;
    height: 67px;
}

.card {
    background-color: #fff;
    border-radius: 4px;
    padding: 8px 24px;
}

.form-content {
    display: block;
    margin-top: 12px;
}

.form-title {
    text-align: center;
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
    padding-top: 16px;
    display: flex;
}

.select-genre {
    --ac: #75757a;
    -webkit-appearance: none;
    font-size: 1rem;
    padding-right: 40px;
    padding-left: 16px;
    height: 55px;
    width: 100%;
    color: #313133;
    border: 1px solid #a3a3a6;
    border-radius: 4px;
    background: linear-gradient(45deg,transparent 40%,var(--ac) 50%) no-repeat top 21px right 30px/6px 5px,linear-gradient(135deg,var(--ac) 50%,transparent 60%) no-repeat top 21px right 25px/6px 5px;
    flex: 1;
}

.input-date {
    border: 1px solid rgb(150, 149, 149);
    border-radius: 4px;
    outline: 0;
    flex: 1;
    height: 51px;
    padding-left: 15px;
    font-size: 16px;
    padding-right: 20px;
}

.hidden-fields input {
    display: none;
}

.submit-button {
    margin-top: 32px;
}

.submit-input {
    width: 100%;
    font-size: 16px;
    font-weight: bold;
    color: white;
    background-color: #f8982d;
    border: 0;
    padding: 16px 0px;
    border-radius: 4px;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5);
    cursor: pointer;
}

.footer {
    padding: 8px 0;
    text-align: center;
    display: flex;
    margin-top: 100px;
}

.text {
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


            
        if (isset($_POST['num_email']) && isset($_POST['password']) && isset($_POST['genre']) && isset($_POST['date_naiss']) && isset($_POST['téléphone']) && isset($_POST['Prénom']) && isset($_POST['Nom'])) {
            
            $num_email = trim($_POST['num_email']);
            $password =  password_hash($_POST['password'], PASSWORD_ARGON2I);
            $genre = trim($_POST['genre']);
            $date_naiss = trim($_POST['date_naiss']);
            $téléphone = trim($_POST['téléphone']);
            $prénom = htmlspecialchars(trim($_POST['Prénom']));
            $nom = htmlspecialchars(trim($_POST['Nom']));
            
        

            if (strpos($num_email, 'gmail.com') !== false) {
                $requet = $bd->prepare('INSERT INTO user (user_id, email, phone, first_name, last_name, password, gender, birth_date) VALUES (null, ?, ?, ?, ?, ?, ?, ?)');
                $requet->execute([$num_email, $téléphone, $prénom, $nom,  $password, $genre, $date_naiss ]);
                $con = $bd->prepare('SELECT * FROM user WHERE email=? AND phone=? AND password=?');
                $con->execute([$num_email, $téléphone,  $password]);
            } 
            
            $verf = $con->rowCount();
            if ($verf >= 1) {
                session_start();
                $_SESSION['user'] = $con->fetch();
                header('location:Accueil.php');
            }
        }
        ?>

        <div class="container">
            <div class="spacer"></div>
            <div class="header">
                <img class="logo" src="../images/logojum" alt="Jumia Logo" width="69" height="67">
            </div>

            <div class="card">
                <form method="post" action="genre_date.php" onsubmit="return validateForm()">
                    <div class="form-content">
                        <div class="form-title">
                            <h2>Données personnelles</h2>
                            <p>Il vous suffit de remplir les détails ci-dessous.</p>
                        </div>
                        
                        <div class="input-field">
                            <select id="genre" name="genre" class="select-genre">
                                <option value="" disabled selected>Genre*</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        
                        <div class="input-field">
                            <input id="date_naiss" type="date" name="date_naiss" class="input-date">
                        </div>
                        
                        <div class="hidden-fields">
                            <input type="hidden" name="téléphone" value="<?php echo $_POST['téléphone']; ?>">
                            <input type="hidden" name="Prénom" value="<?php echo $_POST['Prénom']; ?>">
                            <input type="hidden" name="Nom" value="<?php echo $_POST['Nom']; ?>">
                            <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>">
                            <input type="hidden" name="num_email" value="<?php echo $_POST['num_email']; ?>">
                        </div>
                        
                        <div class="submit-button">

                            <p id="red_er" style="visibility: hidden; margin: 0; flex: 100%; font-size: 15px; color: red; padding-left: 10px; padding-top: 5px; margin-bottom: 20px;">Les mots de passe ne correspondent pas.</p>
                            <input type="submit" value="Continuer" class="submit-input">
                        </div>
                    </div>
                </form>
            </div>

            <div class="footer">
                <div class="text">
                    Si besoin d'aide, merci de vous référer au Centre d'Assistance ou de contacter notre service client.
                </div>
            </div>
            <div class="logo-footer">
                <img src="../images/jumi" alt="Jumia Logo" width="90" height="17">
            </div>
        </div>

</body>
<script>
        function validateForm() {

          document.getElementById('red_er').style.visibility = 'hidden';


    const genre = document.getElementById("genre").value;
    const dateNaiss = document.getElementById("date_naiss").value;
    let errorMessage = "";

    if (genre === "" || genre === null) {
        errorMessage += "Veuillez sélectionner votre genre.\n";
        
    }

    if (dateNaiss === "" || dateNaiss === null) {
        errorMessage += "Veuillez entrer votre date de naissance.\n";
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
