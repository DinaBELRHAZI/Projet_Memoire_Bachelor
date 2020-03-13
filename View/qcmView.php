<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="form.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>


<body>

    <?php
    spl_autoload_register(function ($class_name) {
        include_once "../class/" . $class_name . "class.php";
    });

    //permets de récupérer les infos et de les afficher
    $form = new Form(array(
        'nom' => 'belrhazi',
        'prenom' => 'dina',
        'email' => 'dina@gmail.com',
        'mdp' => 'azerty',
        'question' => 'quel temps fait-il ?',
        'reponse1' => 'beau',
        'reponse2' => 'blabla',
        'reponse3' => 'bouteille',
        'reponse4' => 'satr'
    ));
    // $qcm = new Form($_POST);

    ?>

    <div class="privew">
        <form action="" method="post">
            <div class="questionsBox">
                <div class="questions"><?php echo $form->titre('question'); ?></div>
                <ul class="answerList">
                    <li>
                        <label>
                            <?php echo "reponse 1 : " . $form->radio('reponse1'); ?>
                        </label>
                    </li>
                    <li>
                        <label>
                            <?php echo "reponse 2 : " . $form->radio('reponse2'); ?>
                        </label>
                    </li>
                    <li>
                        <label>
                            <?php echo "reponse 3 : " . $form->radio('reponse3'); ?>
                        </label>
                    </li>
                    <li>
                        <label>
                            <?php echo "reponse 4 : " . $form->radio('reponse4');;  ?>
                        </label>
                    </li>
                    <?php echo $form->submit(); ?>
                </ul>

            </div>
        </form>
    </div>
    <a href="qcmAjouterView.php">Ajouter</a>
</body>

</html>