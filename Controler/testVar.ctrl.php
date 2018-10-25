<?php
require_once("../Model/colearningDAO_class.php");
$db = new DAO();

$id=$db->getQuestionQuizzCours(1);
echo var_dump($id);


 ?>
