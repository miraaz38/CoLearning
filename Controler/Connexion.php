<?php
session_start();
include_once("../Model/colearningDAO_class.php");

if(isset($_POST['login'])  && isset($_POST['mdp'] )){
  $login = $_POST['login'];
  $mdp = $_POST['mdp'];

  if($dao->verifConnexion($login,$mdp)){
    $_SESSION['id'] = $dao->getUserId($login);
    $_SESSION['login'] = $login;
    $_SESSION['mail'] = $dao->getMailEtu($_SESSION['id']);

  }

} else if(isset($_POST['valider'])){
    $data['error'] = "Un champ est incomplet";
    var_dump($data['error']);
}

 ?>
