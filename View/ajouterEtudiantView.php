<?php
ob_get_clean();
ob_start();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Formulaire d'inscription d'un étudiant</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link href="css/formulaire.css" rel="stylesheet">



  <style>
* {
  box-sizing: border-box;
}

body {
  padding-bottom: 20px;
}

.navbar {
  margin-bottom: 20px;
}

.row {
  display: flex;
}

/* Create two equal columns that sits next to each other */
.column {
  flex: 50%;
  padding: 30px;
  height: 200px; 
}
</style>
</head>
<header>
	
<nav class="navbar navbar-expand navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Inscription</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="Search">
        </form>
      </div>
    </nav>
	
</header>

<body>


  <div class="row">


  <!-- inscription etudiant --->
    <div class="column">
      <form class="login-form" method="post" action="#" enctype="multipart/form-data">

        <p class="title"> Inscription étudiant</p>
        <div class="form-aspect">
          <div class="form-group">
            <label class="control-label col-sm-2" for="inputPassword4">Nom étudiant</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword4" name="NOM_ETUDIANT" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="inputPassword4">Prénom étudiant</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword4" name="PRENOM_ETUDIANT" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="inputPassword4">Mail</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword4" name="MAIL" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="inputPassword4">Mot de passe</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword4" name="MDP_E" required>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" name="submit" value="Ajouter" class="btn btn-primary">Ajouter</button>
            </div>
          </div>
        </div>
      </form>

    </div>


<!-- <----inscri prof ----> 

    <div class="column">

      <form class="login-form" method="post" action="/Memoire_Bachelor/Controller/etudiantController/add" enctype="multipart/form-data">

        <p class="title"> Inscription professeur </p>

        <div class="form-aspect">

          <div class="form-group">
            <label class="control-label col-sm-2" for="inputPassword4">Nom professeur</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword4" name="NOM_ETUDIANT" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="inputPassword4">Prénom professeur</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword4" name="PRENOM_ETUDIANT" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="inputPassword4">Mail</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword4" name="MAIL" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="inputPassword4">Mot de passe</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword4" name="MDP_E" required>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" name="submit" value="Ajouter" class="btn btn-primary">Ajouter</button>
            </div>
          </div>
        </div>
      </form>


    </div>
  </div>


<!-- 
  <form class="login-form" method="post" action="/Memoire_Bachelor/Controller/etudiantController/add" enctype="multipart/form-data">

    <p class="title">  Inscription étudiant</p>



    <div class="form-aspect">

      <div class="form-group">
        <label class="control-label col-sm-2" for="inputPassword4">Nom étudiant</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword4" name="NOM_ETUDIANT" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="inputPassword4">prénom étudiant</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword4" name="PRENOM_ETUDIANT" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="inputPassword4">mail</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword4" name="MAIL" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="inputPassword4">mot de passe</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword4" name="MDP_E" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" name="submit" value="Ajouter" class="btn btn-primary">Ajouter</button>
        </div>
      </div>
    </div>
  </form> -->


</body>

</html>