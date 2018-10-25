<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1> A venir </h1>

    <?php

      for ($i=0; $i<$fin; $i++){
        $d=$data[$i];
        echo "<div class='devoirs'>";
        $matiere = $db->getCoursDevoir($d['idDev']);
        echo var_dump($matiere);
        $auteur = $db->getUsersById($d['auteurDev']);
        echo '<a href="../Controler/devoirSelectionne.ctrl.php?idDev=',$d['idDev'],'">',$d['dateDev'],'  ',$matiere->nomCour,' : ',$d['descDev'],'</a>';
        echo'<p> ',$auteur->loginEtu,'</p>';
        echo "</div>";
      }
     ?>
  </body>
</html>
