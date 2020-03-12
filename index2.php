<?php
spl_autoload_register(function ($class_name)
{
    include_once "./class/".$class_name."class.php";
});


//permets de récupérer les infos et de les afficher
$form = new Form(array(
    'nom' => 'belrhazi',
    'prenom' => 'dina',
    'email' => 'dina@gmail.com',
    'mdp' => 'azerty'
));

// $form = new Form($_POST);

?>
<fieldset>
<form action="" method="post">

<?php
echo "Formulaire d'inscription<br><br><br>";
echo "nom : ".$form->input('nom');
echo "prenom : ".$form->input('prenom');
echo "email : ".$form->input('email');
echo "mot de passe : ".$form->input('mdp');
echo $form->submit();

?>
</form>
</fieldset>

<?php

echo "<br>**************************************************************************************<br>";
$dina=new Etudiant("belrhazi","dina","dina@gmail.com", "azerty", "bachelor", 3);
var_dump($dina);
echo $dina->inscription_valid();
// echo $dina->mange();

$alex=new Etudiant("belrhazi","alex","alex@gmail.com", "azerty", "bachelor", 3);
var_dump($alex);
echo $alex->inscription_valid();
// echo $alex->mange();

$rayane=new professeur("grioua","rayane","rayane@gmail.com", "azerty");
var_dump($rayane);
echo $rayane->inscription_valid();
// echo $rayane->mange();

echo "<br><br><br>Nombre d'étudiants instancié : ".$alex->nb();
echo "<br><br><br>Nombre de profs instancié : ".$rayane->nb_prof();


echo "<br><br><br>**************************************************************************************<br>";

echo "<br>comprendre static<br>";

require_once("./class/text.class.php");

//appel de la function/méthode static
var_dump(Text::publicwithZero(2));
?>