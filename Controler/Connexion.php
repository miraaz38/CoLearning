<?php
session_start();
include_once("../Model/colearningDAO_class.php");

var_dump(isset($_POST['valider']));
var_dump(isset($_POST['login']));
var_dump(isset($_POST['mdp']));

if (isset($_POST['valider']) && isset($_POST['login']) && isset($_POST['mdp'])) {
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];

    var_dump($login);
    var_dump($_SESSION['login']);

    if ($dao->verifConnexion($login, $mdp)) {
        $_SESSION['id'] = $dao->getUserId($login);
        $_SESSION['login'] = $login;
        $_SESSION['mail'] = $dao->getMailEtu($_SESSION['id']);

    }

} else if (isset($_POST['valider'])) {
    $data['error'] = "Un champ est incomplet";
    var_dump($data['error']);
}

if (!isset($_SESSION["id"])) {
    include("../index.html");
} else{
    header('Location: ../accueil.html');
}

?>
