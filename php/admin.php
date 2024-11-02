<!DOCTYPE html>
<head>
    <title>admin</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../css/adm.css">
    <title>Jumia Anniversaire 2023 | Meilleures offres de Téléphones, TVs, Mode, Maison, Beauté et plus</title>
<link rel="icon" type="image/ico" sizes="any" href="https://www.jumia.ma/assets_he/favicon.87f00114.ico">

</head>
<body>
    <section style="width:1184px; margin:0 auto;">
        <style>
            tr,th,td{
                border: 1px solid black;
            }
        </style>
    <?php
  require_once 'db/db.php';
  $requet=$bd->prepare('SELECT * FROM command,contenir,lieu,ville,client,produit WHERE contenir.id_produit=produit.id_produit and command.id_client=client.id_client and command.id_command=contenir.id_command and command.id_lieu=lieu.id_lieu and ville.id_ville=lieu.id_ville ');
  $requet->execute();
  $info=$requet->fetchALL(PDO::FETCH_ASSOC);
  echo"<table style=\"width: 100%; border-collapse: collapse;\">";
  echo"<tr><th>Id_command</th><th>Prenom</th><th>nom</th><th>Nom_produit</th><th>Quantité</th><th>date_command</th><th>ville</th><th>lieu</th></tr>";
  foreach($info as $ligne){
    echo"<tr><td>".$ligne['id_command']."</td><td>".$ligne['prenom_client']."</td><td>".$ligne['nom_client']."</td><td>".$ligne['nom_produit']."</td><td>".$ligne['quantité']."</td><td>".$ligne['date']."</td><td>".$ligne['nom_ville']."</td><td>".$ligne['nom_lieu']."</td></tr>";
  }
  echo"</table>";
?>
</section>
</body>
</html>