<!DOCTYPE html>
<html lang="fr">
<meta charset="UTF-8">
<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<?php

ob_start();

foreach ($listeEtudiant as $donnees) {
    echo "<div class='cadre col-md-4'>";
    // echo '<div class="photos" style="background:url('.BASE_URL.'/photos/'.str_replace(" ", "",$donnees['NomEpoque']).'.jpg);"> </div>';
    echo "<div class='encart-description'>";
    echo "<p class='title'>".$donnees['NOM_ETUDIANT']."</p>";
    echo "<p class='description'>".$donnees['PRENOM_ETUDIANT']."</p>";
    echo "<p class='description'>".$donnees['MAIL']."</p>";
    echo "<a class='button'  href='".BASE_URL."/etudiant/".$donnees['NOM_ETUDIANT']."/update'>Modifier</a> &nbsp";
    echo "<a class='button' href='".BASE_URL."/etudiant/".$donnees['NOM_ETUDIANT']."/delete'>Supprimer</a>";
    echo "</div>";
    echo "</div>";

}
    echo "<button value='ajouter'><a class='button' href='".BASE_URL."/etudiant/add'>Ajouter</a></button>";