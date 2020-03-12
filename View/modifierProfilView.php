<html>
 
            <!-- formulaire de modification -->
            <fieldset>
    <form action="" method="post">

        <?php
        echo "Formulaire de modification<br><br><br>";
        echo "nom : " . $form->input('nom');
        echo "prenom : " . $form->input('prenom');
        echo "email : " . $form->input('email');
        echo "mot de passe : " . $form->input('mdp');
        echo $form->submit();

        ?>
    </form>
</fieldset>
</html>