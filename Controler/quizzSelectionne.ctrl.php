<?php
require_once("../Model/colearningDAO_class.php");
$db = new DAO();

if (isset($_GET['idQuizz'])){
  $idQuizz =$_GET['idQuizz'];
  $data['quizz']=$db->getQuizzById($idQuizz);
  $numQ = $db->getQuestionQuizz($idQuizz);
  foreach ($numQ as $q) {
    $data['questionsQuizz'][]=array('idQuestion'=>$q->idQuestion,
                  'numDev'=>$q->numDevoir,
                  'image'=>$q->image,
                  'libelle'=>$q->libelle,
                  'reponseJuste'=>$q->reponseJuste,
                  'reponseFausse1'=>$q->reponseFausse1,
                  'reponseFausse2'=>$q->reponseFausse2);
  }

   $fin = $db->nbQuestionInQuizz($_GET['idQuizz']);


  include("../View/quizzSelectionne.view.php");


}


 ?>
