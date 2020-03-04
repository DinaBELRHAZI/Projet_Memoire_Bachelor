<?php
require "Model/lieuModel.php";

$listeLieu = afficherLieux();

require "View/lieuView.php";

if(isset($_GET['id'])&&($_GET['action'] == 'delete'))
{

    $id_lieu = ($_GET['id']);
    var_dump($_GET['id']);
    supprimerLieu($id_lieu);
    header("location:".BASE_URL."/lieu");

}

if(isset($_GET['id']) && ($_GET['action'] == "update"))
{

    require_once "View/modifierLieuView.php";
    $NomLieu = $_GET['id'];
    $NomLieuFinal = afficherLieu($NomLieu);
    if (isset($_POST['submit']))
    {
        $NomLieu = htmlentities(trim($_POST['NomLieu']));
        $description = htmlentities(trim($_POST['description']));
        $situation = htmlentities(trim($_POST[ 'situation']));
        $img_lieu = htmlentities(trim($_POST['img_lieu']));
        $target_dir = "photos/";
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$NomLieu.".jpg");
        modifierLieu($NomLieu, $description, $situation, $img_lieu);
        header("location:" . BASE_URL . "/lieu");
    }

}

if(isset($_GET['action']) && ($_GET['action'] == "add"))
{

    require_once "View/ajouterLieuView.php";
    if(isset($_POST['submit']))
    {
        $NomLieu = htmlentities(trim($_POST['NomLieu']));
        $description = htmlentities(trim($_POST['description']));
        $situation = htmlentities(trim($_POST['situation']));
        $img_lieu = htmlentities(trim($_POST['img_lieu']));
        $target_dir = "photos/";
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$NomLieu.".jpg");
        ajouterLieu($NomLieu,$description,$situation,$img_lieu);
        header("location:".BASE_URL."/lieu");
    }


}

