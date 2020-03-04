<?php
// tout marche
function afficherEtudiants(){
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM etudiant");
    $req->execute();

    return $req->fetchAll();
}

function afficherEtudiant($NOM_ETUDIANT){
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM etudiant WHERE '$NOM_ETUDIANT'=ID_ETUDIANT");
    $req->execute();

    return $req->fetchAll();
}

function supprimerEtudiant($ID_ETUDIANT){
    global $bdd;

    $req = $bdd->prepare("DELETE FROM etudiant WHERE '$ID_ETUDIANT'=NOM_ETUDIANT");
    $req->execute();

    return $req->fetchAll();
}

function ajouterEtudiant($ID_ETUDIANT, $NOM_ETUDIANT, $PRENOM_ETUDIANT, $MAIL, $MDP_E){
    global $bdd;

    $req = $bdd->prepare("INSERT INTO etudiant (ID_ETUDIANT, NOM_ETUDIANT, PRENOM_ETUDIANT, MAIL, MDP_E) VALUES ('".$ID_ETUDIANT."','".$NOM_ETUDIANT."', '".$PRENOM_ETUDIANT."', '".$MAIL."', '".$MDP_E."')");
    $req->execute();

    return $req->fetchAll();
}

function modifierEtudiant($ID_ETUDIANT, $NOM_ETUDIANT, $PRENOM_ETUDIANT, $MAIL, $MDP_E){
    global $bdd;

    $req = $bdd->prepare("UPDATE etudiant SET NOM_ETUDIANT = '".$NOM_ETUDIANT."', PRENOM_ETUDIANT = '".$PRENOM_ETUDIANT."', MAIL = '".$MAIL."' , MDP_E = '".$MDP_E."' WHERE ID_ETUDIANT = '".$ID_ETUDIANT."'");
    $req->execute();

    return $req->fetchAll();

}
