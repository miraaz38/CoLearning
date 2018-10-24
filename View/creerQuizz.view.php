<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1> Création d'un quizz Aléatoire </h1>
    <form action="../Controler/devoirSelectionne.ctrl.php?idDev=<?php echo $_POST['numDev']; ?>" method="post">
    Nom du quizz :
    <input type="text" name="libelle" value="Nom"><br>
    Nombre de Question :
    <input type="number"  step="any" name="nbQuestion" value="Nombre de Question"><br>
    <input type="submit" name="creerQuizz" value="Créer Quizz">
    </form>
  </body>
</html>
