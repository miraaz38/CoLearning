<?php
if(isset($_POST['submitQuizz']) && isset($_POST['numdev'])){
  require_once("../Model/colearningDAO_class.php");

  $db = new DAO();
  $numDev = $_POST['numDev'];
  $nbQuestion = $db->nbQuestionInQuizz($numDev);
  





}

 ?>
