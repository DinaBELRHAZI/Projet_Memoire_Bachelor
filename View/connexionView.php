<html>
  
          <!-- formulaire de connexion -->

          <fieldset>
    <form action="" method="post">

        <?php
        echo "Formulaire de connexion <br><br><br>";
        echo "email : " . $form->input('');
        echo "mot de passe : " . $form->input('');
        echo $form->submit();

        ?>
    </form>
</fieldset>

</html>