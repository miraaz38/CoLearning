<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo '<h1>',$data['quizz']->libelle,'</h1>';
    ?>
    <form class="quizz" action="../Controler/resultatQuizz.ctrl.php" method="post">
      <?php
      for($i=0; $i<$fin; $i++){
        $d= $data['questionsQuizz'][$i];
        $reponses[0]=$d['reponseJuste'];
        $reponses[1]=$d['reponseFausse1'];
        $reponses[2]=$d['reponseFausse2'];
        shuffle($reponses);
        echo "Question ",$i," : ",$d['libelle'],"<br>";
        echo '<span style:"width:500px">',$reponses[0],'</span> <input type="radio" name="',$i,'" value="',$reponses[0],'"checked="checked"><br>';
        echo '<span style:"width:500">',$reponses[1],'</span> <input type="radio" name="',$i,'" value="',$reponses[1],'"><br>';
        echo '<span style:"width:500">',$reponses[2],'</span> <input type="radio" name="',$i,'" value="',$reponses[2],'"><br>';
        echo "<br>";
      }
     ?>
     <input type="hidden" name="quizz" value=<?php echo $data['quizz']->idQuizz ?>>
    <input type="submit" name="submitQuizz" value="Valider">
    </form>
  </body>
</html>
