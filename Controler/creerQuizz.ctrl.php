<?php
  if (isset($_POST['action']) && isset($_POST['numDev'])){
     echo(var_dump($_POST['numDev']));
     include("../View/creerQuizz.view.php");
  }
  else {
    echo '<h1> Erreur </h1>';
  }

 ?>
