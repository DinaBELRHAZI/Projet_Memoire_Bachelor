<?php
ob_get_clean();
ob_start();
$NOM_ETUDIANT = $_GET['id'];
$NomEtudiantFinal = afficherEtudiant($NOM_ETUDIANT);
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire de modification d'un étudiant</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <style>
        body{
            margin-left: 2em;
            margin-right: 2em;
        }
        .title{
            font-size: 2em;
            text-align: center;
            margin-bottom: 2em;
            margin-top: 5%;
        }
        b{
            color: #AF0000;
        }
        .form-aspect{
            background-color: grey;
            border-radius: 16px;
            min-height: 10rem;
            margin: auto;
            max-width: 50%;
            padding: .5rem;
            border: 1px solid black;
            background: transparent;
            font-size: 1.3em;
        }

        button{
            float: right;
            margin-top: 1.5em;
        }
    </style>
</head>
<body >


<?php foreach ($NomEtudiantFinal as $donnees) ?>
<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
    
<p class="title" >
    Modification des informations de l'étudiant <b><?=$donnees['NOM_ETUDIANT'] ?></b>
</p>
<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
<div class="form-aspect">  
    <div class="form-group">
        <div class="col-sm-10">
            <input type="hidden" class="form-control" value="<?=$donnees['ID_ETUDIANT'] ?>" readonly name="ID_ETUDIANT" id="ID_ETUDIANT" >
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="text">NOM_ETUDIANT:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value="<?=$donnees['NOM_ETUDIANT'] ?>" name="NOM_ETUDIANT" id="email">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="text">PRENOM_ETUDIANT:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value="<?=$donnees['PRENOM_ETUDIANT'] ?>" name="PRENOM_ETUDIANT" id="pwd">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="text">mail:</label>
        <div class="col-sm-10">
            <input type="mail" class="form-control" value="<?=$donnees['MAIL'] ?>" name="MAIL" id="MAIL">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="text">mot de passe:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value="<?=$donnees['MDP_E'] ?>" name="MDP_E" id="MDP_E">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
</form>
</form>