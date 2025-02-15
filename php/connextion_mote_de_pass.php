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
        // Connexion à la base de données
        require_once 'db/db.php';

        if(!isset($_POST['num_email']) || empty($_POST['num_email']))
        header('Location: connexion.php');


        $mot_de_pass_incorrect = false; //true si le mot de passe est incorrect 

        // Traitement du formulaire de connexion
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['num_email'], $_POST['password'])) {
            $num_email = trim($_POST['num_email']);
            $password = $_POST['password'];
            
            // Préparation de la requête selon le type d'email ou de téléphone
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
                    header('Location: Accueil.php');
                    exit();
                }  else {
                $mot_de_pass_incorrect = true; 
                }
            }
        }
        ?>





        <div style="display: flex; flex-direction: column; height: 100%; width: 480px; margin: 0 auto; min-height: 500px; max-width: 100%; font-family: Roboto, sans-serif;">
            <div style="margin-bottom: 50px;"></div>
            <div class="header" style="display: flex; align-items: center; height: 64px; justify-content: center; margin: 0 0 8px;">
                <img class="logo" src="../images/logojum" width="69" height="67" alt="Logo Jumia">
            </div>
            <div class="card" style="background-color: #fff; border-radius: 4px; padding: 8px 24px;">
                <form method="post" action="connextion_mote_de_pass.php">
                    <div style="display: block; margin-top: 12px;">
                        <div style="text-align: center; display: block;">
                            <h2 style="font-size: 20px; font-weight: bold; margin: 0;">Bienvenue!!</h2>
                            <p style="font-size: 16px; font-weight: 400; line-height: 1.5em; margin: 8px 0 16px; color: #4a4a4a; text-align: center;">
                                Reconnectez-vous à votre compte Jumia.
                            </p>
                        </div>
                        <div style="margin: 32px 0 16px; display: flex; padding: 16px; background-color: #eee;">
                            <div style="flex: 1; display: block;"><?php echo htmlspecialchars($_POST['num_email'] ?? ''); ?></div>
                            <div style="color: #f69f4e;">
                                <a href="connexion.php" style="text-decoration: none; color: #f69f4e;">Modifier</a>
                            </div>
                        </div>
                        <div class="ps" style="padding-top: 16px; display: flex; flex-wrap: wrap;">
                            <input class="pasw" type="password" name="password" placeholder="Mot de passe" style="border: 1px solid rgb(150, 149, 149); border-radius: 4px; outline: 0; flex: 1; height: 51px; padding-left: 15px; font-size: 16px;">
                            <?php 
                            if ($mot_de_pass_incorrect) {
                                echo "<p style=\"margin: 0; flex: 100%; font-size: 15px; color: red; padding-left: 10px; padding-top: 5px;\">Mot de passe incorrect</p>";
                            }
                            ?>
                        </div>
                        <div style="margin-top: 40px;">
                            <input type="hidden" name="num_email" value="<?php echo htmlspecialchars($_POST['num_email'] ?? ''); ?>">
                            <input type="submit" value="Se connecter" style="width: 100%; font-size: 16px; font-weight: bold; color: white; background-color: #f8982d; border: 0; padding: 16px 0; border-radius: 4px; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5); cursor: pointer;">
                            <a href="" style="display: block; text-align: center; text-decoration: none; height: 32px; color: #f8982d; margin-top: 22px; font-weight: bold; font-size: 17px; padding-bottom: 55px;">Mot de passe oublié?</a>
                        </div>
                    </div>
                </form>
            </div>

            <div style="padding: 8px 0; text-align: center; display: flex;">
                <div class="text" style="font-size: 14px; line-height: 24px; padding: 0 24px; position: relative; text-align: center; width: 100%; flex: 1;">
                    Si besoin d'aide, merci de vous référer au Centre d'Assistance ou de <br>contacter notre service client.
                </div>
            </div>
            <div class="logo444" style="display: flex; justify-content: center; margin-top: 25px;">
                <img src="../images/jumi" width="90" height="17" alt="Jumia Logo">
            </div>
        </div>
</body>
</html>


