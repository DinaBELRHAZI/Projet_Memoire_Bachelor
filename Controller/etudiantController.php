<?php
require "Model/etudiantModel.php";

$listeEtudiant = afficherEtudiants();

require "View/etudiantView.php";

if(isset($_GET['id'])&&($_GET['action'] == 'delete'))
{

    $id_etudiant = ($_GET['id']);
    var_dump($_GET['id']);
    supprimerEtudiant($id_etudiant);
    header("location:".BASE_URL."/etudiant");

}

if(isset($_GET['id']) && ($_GET['action'] == "update"))
{

    require_once "View/modifierEtudiantView.php";
    $NOM_ETUDIANT = $_GET['id'];
    $NOM_ETUDIANT = afficherEtudiant($NOM_ETUDIANT);
    if (isset($_POST['submit']))
    {
        
        $ID_ETUDIANT = htmlentities(trim($_POST['ID_ETUDIANT']));
        $PRENOM_ETUDIANT = htmlentities(trim($_POST['PRENOM_ETUDIANT']));
        $NOM_ETUDIANT = htmlentities(trim($_POST[ 'NOM_ETUDIANT']));
        $MAIL = htmlentities(trim($_POST[ 'MAIL']));
        $MDP_E = htmlentities(trim($_POST[ 'MDP_E']));
        // $target_dir = "photos/";
        // move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$NomLieu.".jpg");
        modifierEtudiant($ID_ETUDIANT, $NOM_ETUDIANT, $PRENOM_ETUDIANT, $MAIL, $MDP_E);
        header("location:" . BASE_URL . "/etudiant");
    }

}

if(isset($_GET['action']) && ($_GET['action'] == "add"))
{

    require_once "View/ajouterEtudiantView.php";
    if(isset($_POST['submit']))
    {
        $ID_ETUDIANT = htmlentities(trim($_POST['ID_ETUDIANT']));
        $PRENOM_ETUDIANT = htmlentities(trim($_POST['PRENOM_ETUDIANT']));
        $NOM_ETUDIANT = htmlentities(trim($_POST[ 'NOM_ETUDIANT']));
        $MAIL = htmlentities(trim($_POST[ 'MAIL']));
        $MDP_E = htmlentities(trim($_POST[ 'MDP_E']));
        // $target_dir = "photos/";
        // move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$NomLieu.".jpg");
        ajouterEtudiant($ID_ETUDIANT, $NOM_ETUDIANT, $PRENOM_ETUDIANT, $MAIL, $MDP_E);
        header("location:".BASE_URL."/etudiant");
    }


}

