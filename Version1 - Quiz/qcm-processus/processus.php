<?php session_start(); 


     // connexion à la base
 
     $serveur='localhost';
     $login ='root';
     $password='';
     $bdd = 'qcm';
        $conn = mysqli_connect($serveur,$login,$password,$bdd);

	//if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
   // }
    
   // if($_POST){
		$ID_QUESTION = $_POST['ID_QUESTION'];
		$reponse_selectionner = $_POST['choix'];
        $suivant = $ID_QUESTION +1;

// a avoir num_row 
        // $query = "SELECT * FROM question";
        // $reponse_sql = mysqli_query($conn,$query);
        // $result = $reponse_sql->fetch_assoc();
        // $total = mysqli_num_rows($result);

        $query = "SELECT COUNT(*) FROM question";
$rep2 = mysqli_query($conn,$query);
$tab = mysqli_fetch_array($rep2);
$total = $tab[0];


        //verif des choix

        $query = "SELECT * FROM reponse
        WHERE ID_QUESTION = $ID_QUESTION AND CORRECT = 1";
        $repons_sql = mysqli_query($conn,$query);
        $row = $repons_sql->fetch_assoc();
        
        $bonne_reponse = $row['ID_REPONSE'];

        if($bonne_reponse == $reponse_selectionner){
			//Answer is correct
			$_SESSION['score']++;
		}
        if($ID_QUESTION == $total){
			header("Location: fin.php");
			exit();
		} else {
			header("Location: selection.php?ID_QUESTION=".$suivant);
		}
 //   }