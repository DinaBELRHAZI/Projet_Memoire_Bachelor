<?php


try {
    $bdd = new PDO("mysql:host=localhost;dbname=qcm;charset=utf8", "root", "root");
} catch (Exception $e) {
    die("Erreur bdd non trouvée");
}

