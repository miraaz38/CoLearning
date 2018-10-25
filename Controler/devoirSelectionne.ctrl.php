<?php
require_once("../Model/colearningDAO_class.php");
$db = new DAO();

if (isset($_GET['idDev']) || isset($_POST['idDev'])){
  $data['dev']=$db->getDevoirsById($_GET['idDev']);
  $idDev=$_GET['idDev'];
  $auteur=$db->getUsersById($data['dev']->auteurDev);
  $quizz=$db->getQuizzDevoir($idDev);
  $questions = $db->getQuestionQuizzDevoir($idDev);
  $finq = $db->getNbQuizzDevoir($idDev);

  if(isset($_POST['creerQuizz'])){
    if (isset($_POST['libelle']) && isset($_POST['nbQuestion'])){
      $db->nouveauQuizz($_POST['libelle'],$data['dev']->idDev, $_POST['nbQuestion']);
    }
  }

 foreach ($quizz as $q) {
   $data['quizz'][]=array('idQuizz'=>$q->idQuizz,
                 'libelle'=>$q->libelle,
                 'numDevoir'=>$q->numDevoir);
 }

 foreach ($questions as $question) {
   $data['question'][]=array('idQuestion'=>$question->idQuestion,
                 'numDevoir'=>$question->numDevoir,
                 'libelle'=>$question->libelle
                  );
 }
 $finquestion = $db->nbQuestionQuizz($idDev);
 include("../View/devoirSelectionne.view.php");
}


 ?>
