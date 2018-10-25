<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $dev = $data['dev'];
      echo '<h1>',$dev->descDev,'</h1>';
      echo '<h2> Date : ',$dev->dateDev,'</h2>';
      echo '<h2> Fait par : ', $auteur->loginEtu,'</h2>';
      echo '<h3> Quizz (',$finq,')</h3>';
      for ($i=0; $i<$finq; $i++){
        $d=$data['quizz'][$i];
        echo "<div class='quizz'>";
        echo '<a href="../Controler/quizzSelectionne.ctrl.php?idQuizz=',$d['idQuizz'],'">',$d['libelle'],'</a>';
        echo "</div>";
      }

      ?>
      <form  action="../Controler/creerQuizz.ctrl.php" method="post">
        <input type="hidden" name="numDev" value='<?php echo $data['dev']->idDev; ?>'>
        <input type="submit" name="action" value="Creer un quizz aléatoirement">
      </form>
      <?php

      echo '<h3> Questions sur le cours (',$finquestion,') </h3>';
      for ($i=0; $i<$finquestion; $i++){
        $d=$data['question'][$i];
        echo "<div class='question'>";
        echo '<a href="../Controler/question.ctrl.php?idDev=',$d['idQuestion'],'"> Question numéro : ',$d['idQuestion'],'</a>';
        echo "</div>";
      }

      echo '<h3> Forum </h3>';


     ?>

  </body>
</html>
