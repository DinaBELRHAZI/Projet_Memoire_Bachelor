   <html>  
      
        <!-- formulaire d'inscription -->

        <fieldset>
    <form action="" method="post">

        <?php
        echo "Formulaire d'inscription<br><br><br>";
        echo "nom : " . $form->input('');
        echo "prenom : " . $form->input('');
        echo "email : " . $form->input('');
        echo "mot de passe : " . $form->input('');
        echo $form->submit();

        ?>
    </form>
</fieldset>
</html>   