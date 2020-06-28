<?php session_start();

           $ID_QUESTION = $_GET['ID_QUESTION'];

           // connexion à la base
 
        $serveur='localhost';
        $login ='root';
        $password='';
        $bdd = 'qcm';
   
         $conn = mysqli_connect($serveur,$login,$password,$bdd);
		
        //insertion question 

        $query = "SELECT * FROM question WHERE ID_QUESTION = '$ID_QUESTION'";
        //Get result
        $reponse_sql = mysqli_query($conn,$query);
        $result = $reponse_sql->fetch_assoc();


         echo($query); 
         echo("<br>");
       /*
	*	Get Choices
	*/
	$query = "SELECT * FROM `reponse`
    WHERE ID_QUESTION = '$ID_QUESTION'";
    $choix = mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" />
	<title>PHP Quizzer</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
	<header>
		<div class="container">
			<h1>Quizzer</h1>
		</div>
	</header>
	<main>
		<div class="container">
			<p class="question">
				<?php echo $result['TEXTE_QUESTION']; ?>
            </p>
            <form method="post" action="processus.php">

				<ul class="choices">
					<?php while($row = $choix->fetch_assoc()): ?>
						<li><input name="choix" type="radio" value="<?php echo $row['ID_REPONSE']; ?>" /><?php echo $row['TEXTE_REPONSE']; ?></li>
					<?php endwhile; ?>
                </ul>
                
				<input type="submit" value="Submit" />
				<input type="hidden" name="ID_QUESTION" value="<?php echo $ID_QUESTION; ?>" />
			</form>
</div>
</main>
</html>

<?php 
 mysqli_close($conn);
 ?>