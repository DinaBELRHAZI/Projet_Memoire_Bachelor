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
    $form = new Form($_POST);
    ?>

    <div class="privew">
        <form action="" method="post">
            <div class="questionsBox">
                <div class="questions"><?php echo $form->inputModif('question'); ?></div>
                <ul class="answerList">
                    <li>
                        <label>
                            <?php echo "reponse 1 : " . $form->inputModif('reponse1'); ?>
                        </label>
                    </li>
                    <li>
                        <label>
                            <?php echo "reponse 2 : " . $form->inputModif('reponse2'); ?>
                        </label>
                    </li>
                    <li>
                        <label>
                            <?php echo "reponse 3 : " . $form->inputModif('reponse3'); ?>
                        </label>
                    </li>
                    <li>
                        <label>
                            <?php echo "reponse 4 : " . $form->inputModif('reponse4');;  ?>
                        </label>
                    </li>
                    <?php echo $form->submit(); ?>
                </ul>

            </div>
        </form>
    </div>

</body>

</html>