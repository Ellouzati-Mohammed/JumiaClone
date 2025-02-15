<?php

try {
    $bd = new PDO('mysql:host=localhost;dbname=e_commerce', 'root', '');
    $bd->query('SET NAMES "utf8"');
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

?>