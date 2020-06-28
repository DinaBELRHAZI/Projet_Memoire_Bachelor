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
session_start();
try {
    $bdd = mysqli_connect("localhost","root","","qcm");
    }

    catch (Exception $e){
    echo "string";
    exit();
}
?>		
		<div class="container"><br>
			<h2>Selctionner une question</h1><br>
			
			<form method="get" action="selection.php">

			    <p>
					<label>Numero de question:</label>
					<input type="number"  name="ID_QUESTION" required/>
				</p>
			
				<p>
				<button type="submit" class="btn btn-success">Envoyez</button>
				</p>

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