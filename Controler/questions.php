<meta charset="utf-8"/>
<?php
session_start();
include_once("../Model/colearningDAO_class.php");

if (isset($_GET['id']) AND !empty($_GET['id'])) {
    $getIdForum = $_GET['id']; // récupère l'id du forum
}

?>