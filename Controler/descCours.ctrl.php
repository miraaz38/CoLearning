<?php
session_start();

require_once("../Model/colearningDAO_class.php");
$db = new DAO();

if(isset($_GET['idCours'])){
  $_SESSION['numCours']=$_GET['idCours'];
}


 ?>
