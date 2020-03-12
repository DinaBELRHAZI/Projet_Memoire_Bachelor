<?php
spl_autoload_register(function ($class_name) {
    include_once "class/" . $class_name . "class.php";
});

require_once("./class/etudiant.class.php");
require_once("./class/professeur.class.php");
require_once("./class/form.class.php");
require_once("./Model/etudiantModel.php");



//permets de récupérer les infos et de les afficher
$form = new Form(array(
    'nom' => 'belrhazi',
    'prenom' => 'dina',
    'email' => 'dina@gmail.com',
    'mdp' => 'azerty'
));

// $form = new Form($_POST);


echo "<br>**************************************************************************************<br>";
$dina = new Etudiant("belrhazi", "dina", "dina@gmail.com", "azerty", "bachelor", 3);
var_dump($dina);
echo $dina->inscription_valid();
// echo $dina->mange();

$alex = new Etudiant("belrhazi", "alex", "alex@gmail.com", "azerty", "bachelor", 3);
var_dump($alex);
echo $alex->inscription_valid();
// echo $alex->mange();

$rayane = new professeur("grioua", "rayane", "rayane@gmail.com", "azerty");
var_dump($rayane);
echo $rayane->inscription_valid();
// echo $rayane->mange();

echo "<br><br><br>Nombre d'étudiants instancié : " . $alex->nb();
echo "<br><br><br>Nombre de profs instancié : " . $rayane->nb_prof();
?>