<?php
require_once("../Model/colearningDAO_class.php");
$db = new DAO();

if (isset($_GET['idQuizz'])){
  $idQuizz =$_GET['idQuizz'];
  $data['quizz']=$db->getQuizzById($idQuizz);
  $questions = $db->getQuestionQuizz($idQuizz);


}


 ?>
