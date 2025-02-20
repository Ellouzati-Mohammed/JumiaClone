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
      // Connexion à la base de données
      require_once '../db/db.php';

      if(!isset($_POST['num_email']) || empty($_POST['num_email']))
         header('Location: login.php');

         $mot_de_pass_incorrect = false;
         // Traitement du formulaire de connexion
         if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['num_email'], $_POST['password'])) {
            $num_email = trim($_POST['num_email']);
            $password = $_POST['password'];
            if (filter_var($num_email, FILTER_VALIDATE_EMAIL)) { 
               $requet = $bd->prepare('SELECT * FROM user WHERE Email = :email');
               $requet->execute(['email' => $num_email]);
            } else {
               $requet = $bd->prepare('SELECT * FROM user WHERE phone = :telephone');
               $requet->execute(['telephone' => $num_email]);
            }
            if ($requet->rowCount() === 1) {
               $client = $requet->fetch(PDO::FETCH_ASSOC);
               if (password_verify($password, $client['password'])) {
                  session_start();
                  $_SESSION['user'] = $client;
                  header('Location: ../Accueil.php');
                  exit();
               } else {
                  $mot_de_pass_incorrect = true; 
               }
            }
        }
        ?>

        <div class="full_contain">
            <div class="spqcin_j"></div>
            <div class="header">
                <img class="logo" src="../../images/logojum" width="69" height="67" alt="Logo Jumia">
            </div>
            <div class="card">
                <form method="post" action="login_password.php">
                    <div class="form_mot_pass">
                        <div class="bienv">
                            <h2>Bienvenue!!</h2>
                            <p>
                                Reconnectez-vous à votre compte Jumia.
                            </p>
                        </div>
                        <div class="email_tel_aff">
                            <div class="aff_em_tl"><?php echo htmlspecialchars($_POST['num_email'] ?? ''); ?></div>
                            <div class="modif">
                                <a href="login.php">Modifier</a>
                            </div>
                        </div>
                        <div class="ps">
                            <input class="pasw" type="password" name="password" placeholder="Mot de passe">
                            <?php 
                            if ($mot_de_pass_incorrect) {
                                echo "<p>Mot de passe incorrect</p>";
                            }
                            ?>
                        </div>
                        <div class="subm_ps">
                            <input type="hidden" name="num_email" value="<?php echo htmlspecialchars($_POST['num_email'] ?? ''); ?>">
                            <input type="submit" value="Se connecter">
                            <a href="">Mot de passe oublié?</a>
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
</html>


