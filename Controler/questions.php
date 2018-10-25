<meta charset="utf-8"/>
<?php
session_start();
include_once("../Model/colearningDAO_class.php");

$idForum = $_GET['id'];
$questions = $dao-> getQuestionsForum($idForum);
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div>
      <p>FAQ</p>
      <br>
      <?php

      while ($c = $questions->fetch()) {
         $id = $c['idQuestionF'];
          $pseudo = $dao->getUserById($c['auteurQuestionF']);
          $dateCom = $c['dateQuestion'];
          $titre = $c['titreQuestion'];
        ?>
        <div class="Question-forum">
          <a href="http://www-etu-info.iut2.upmf-grenoble.fr/~claryd/Damienv4/Damienv3/Controler/commentaires.php?id=<?php echo urlencode($id);  ?>"><?php echo $titre; echo "    posté par : "; echo $pseudo; echo "      le "; echo $dateCom; ?></a>
        </div>
      <?php  } ?>
    </div>
  </body>
</html>