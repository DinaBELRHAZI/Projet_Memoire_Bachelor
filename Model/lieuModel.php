<?php

function afficherLieux(){
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM lieu");
    $req->execute();

    return $req->fetchAll();
}

function afficherLieu($NomLieu){
    global $bdd;

    $req = $bdd->prepare("SELECT * FROM lieu WHERE '$NomLieu'=NomLieu");
    $req->execute();

    return $req->fetchAll();
}

function supprimerLieu($id_lieu){
    global $bdd;

    $req = $bdd->prepare("DELETE FROM lieu WHERE '$id_lieu'=NomLieu");
    $req->execute();

    return $req->fetchAll();
}

function ajouterLieu($NomLieu, $description, $situation,$img_lieu){
    global $bdd;

    $req = $bdd->prepare("INSERT INTO lieu (NomLieu, description, situation, img_lieu) VALUES ('".$NomLieu."', '".$description."', '".$situation."', '".$img_lieu."')");
    $req->execute();

    return $req->fetchAll();
}

function modifierLieu($NomLieu, $description, $situation,$img_lieu){
    global $bdd;

    $req = $bdd->prepare("UPDATE lieu SET description = '".$description."', situation = '".$situation."', img_lieu = '".$img_lieu."' WHERE NomLieu = '".$NomLieu."'");
    $req->execute();

    return $req->fetchAll();

}
