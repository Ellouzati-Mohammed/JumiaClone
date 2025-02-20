<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jumia Anniversaire 2023 | Meilleures offres de Téléphones, TVs, Mode, Maison, Beauté et plus</title>
    <link rel="icon" type="image/ico" sizes="any" href="https://www.jumia.ma/assets_he/favicon.87f00114.ico">
    <link rel="stylesheet" href="../../css/conn.css">
    
</head>
<body>
   <?php
   require_once '../db/db.php';
   if( 
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
   if (isset($_POST['num_email']) &&
      isset($_POST['password']) &&
      isset($_POST['genre']) &&
      isset($_POST['date_naiss']) && 
      isset($_POST['téléphone']) && 
      isset($_POST['Prénom']) && 
      isset($_POST['Nom']))
   {
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
         header('location:../Accueil.php');
      }
   }
   ?>
        <div class="full_contain">
            <div class="spqcin_j"></div>
            <div class="header">
                <img class="logo" src="../../images/logojum" alt="Jumia Logo" width="69" height="67">
            </div>
            <div class="card">
                <form method="post" action="sign_up_2.php" onsubmit="return validateForm()">
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
                        
                        <div id="submit-button">
                            <p id="red_er"></p>
                            <input type="submit" value="Continuer">
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
                <img src="../../images/jumi" width="90" height="17" alt="Jumia Logo">
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
