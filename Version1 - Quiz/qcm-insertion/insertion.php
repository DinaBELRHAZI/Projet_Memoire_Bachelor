<?php


// connexion à la base
$serveur = 'localhost';
$login = 'root';
$password = '';
$bdd = 'qcm';
$conn = mysqli_connect($serveur, $login, $password, $bdd);



$TEXTE_QUESTION = $_POST['TEXTE_QUESTION'];
$NB_POINT_QUESTION = $_POST['NB_POINT_QUESTION'];
$bonne_reponse = $_POST['bonne_reponse'];

//tableau de reponse
$reponses = array();
$reponses[1] = $_POST['reponse1'];
$reponses[2] = $_POST['reponse2'];
$reponses[3] = $_POST['reponse3'];
$reponses[4] = $_POST['reponse4'];

//requete insertion question 
$query = "INSERT INTO `question` (`ID_QUESTION`, `ID_PROF`, `ID_CLASSE`, `ID_COURS`, `ID_CHAP`,
       `TEXTE_QUESTION`, `NB_POINT_QUESTION`, `NB_REPONSES`, `DATE_CREATION`, `TEMPS_QUESTION`) 
        VALUES (NULL, NULL, NULL, NULL, NULL, '$TEXTE_QUESTION', '$NB_POINT_QUESTION', NULL, NULL, NULL)";
$reponse_sql = mysqli_query($conn, $query);
//$dernier_id = mysql_insert_id ($conn);

  $rep = 0;
foreach ($reponses as $reponse => $value) {
  $rep++;
  if ($value != '') {
    //la bonne réponse prend la valeur 1
    if ($bonne_reponse == $reponse) {
      $correct = 1;
    } else {
      $correct = 0;
    }

    //récupére le dernier id de question
$query = "SELECT MAX(ID_QUESTION ) FROM question";
$rep2 = mysqli_query($conn,$query);
$tab = mysqli_fetch_array($rep2);
$max = $tab[0];
echo($max);

    //requête d'insertion réponse 
    $query = "INSERT INTO `reponse` (`ID_QUESTION`, `ID_REPONSE`, `DESCRIPTION_REPONSE`,
             `TEXTE_REPONSE`, `CORRECT`, `NB_POINT_REPONSE`) 
              VALUES ('$max', '$rep', NULL, '$value', '$correct', NULL)"; 
   if ($conn) {
    echo "<br>";
    echo $query;

      $reponse_sql = mysqli_query($conn, $query);
    } else {
      echo ("Bdd non connectee");
    }
  }
}
mysqli_close($conn);


