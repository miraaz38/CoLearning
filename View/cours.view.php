<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1> Cours </h1>

    <?php

      for ($i=0; $i<$fin; $i++){
        $d=$data[$i];
        echo "<div class='cours'>";
        echo '<a href="../Controler/descCours.ctrl.php?idCours=',$d['idCours'],'">Cours ',$d['idCours'],' : ',$d['nomCour'],'</a>';
        echo "</div>";
      }
     ?>
  </body>
</html>
