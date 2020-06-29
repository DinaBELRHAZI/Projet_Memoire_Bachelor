<?php
//y a un point avt

require_once('../Model/etudiantModel.php'); 

// ACTION DELETE
if (isset($_GET['id']) && ($_GET['action'] == 'delete')) {
    die();
    $id_etudiant = ($_GET['id']);
    var_dump($_GET['id']);
    supprimerEtudiant($id_etudiant);
    header("location:" . BASE_URL . "/etudiant");
}
//ACTION UPDATE
if (isset($_GET['id']) && ($_GET['action'] == "update")) {
    die();
    require_once "View/modifierEtudiantView.php";
    $NOM_ETUDIANT = $_GET['id'];
    $NOM_ETUDIANT = afficherEtudiant($NOM_ETUDIANT);
    if (isset($_POST['submit'])) {

        $ID_ETUDIANT = htmlentities(trim($_POST['ID_ETUDIANT']));
        $PRENOM_ETUDIANT = htmlentities(trim($_POST['PRENOM_ETUDIANT']));
        $NOM_ETUDIANT = htmlentities(trim($_POST['NOM_ETUDIANT']));
        $MAIL = htmlentities(trim($_POST['MAIL']));
        $MDP_E = htmlentities(trim($_POST['MDP_E']));

        modifierEtudiant($ID_ETUDIANT, $NOM_ETUDIANT, $PRENOM_ETUDIANT, $MAIL, $MDP_E);
        header("location:" . BASE_URL . "/etudiant");
    }
}
                   
//  ACTION CREATE
if (isset($_GET['action']) && ($_GET['action'] == "add")) {
     
       if (isset($_POST['submit'])) {

        $PRENOM_ETUDIANT = htmlentities(trim($_POST['PRENOM_ETUDIANT']));
        $NOM_ETUDIANT = htmlentities(trim($_POST['NOM_ETUDIANT']));
        $MAIL = htmlentities(trim($_POST['MAIL']));
        $MDP_E = htmlentities(trim($_POST['MDP_E']));

        // appelle de la function de etudiantModel 
        ajouterEtudiant( $NOM_ETUDIANT, $PRENOM_ETUDIANT, $MAIL, $MDP_E);

        //message d'ajout
        echo('vous êtes ajouter');

    }else{

        require_once "View/ajouterEtudiantView.php";
    }

}
