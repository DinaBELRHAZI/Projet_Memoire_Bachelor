<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>ajout d'un qcm</title>

	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
	<header>
		<div class="container">
			<h1>CAEMS</h1>
		</div>
	</header>
	<main>
		<?php

		try {
			$bdd = mysqli_connect("localhost", "root", "", "qcm");
		} catch (Exception $e) {
			echo "string";
			exit();
		}
		?>
		<div class="container"><br>
			<h2>Ajouter une question</h1><br>
		
				<form method="post" action="insertion.php">
				<label>Nombre de point: </label><input type="number" name="NB_POINT_QUESTION" />
					<div class="questions"><label>La Question </label>
						<input type="text" name="TEXTE_QUESTION" required />
					</div>

					<p><label>Reponse 1 </label><input type="text" name="reponse1" required /></p>
					<p><label>Réponse 2 </label><input type="text" name="reponse2" required /></p>
				    <p><label>Réponse 3 </label><input type="text" name="reponse3" /></p>
					<p><label>Réponse 4 </label><input type="text" name="reponse4" /></p>

					<p><label>Réponse correcte: </label><input type="number" name="bonne_reponse" /></p>
					<p><button type="submit" class="btn btn-success">Envoyez</button></p>
				</form>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; CAEMS - 2020
		</div>
	</footer>
</body>

</html>

<?php


mysqli_close($bdd);
?>