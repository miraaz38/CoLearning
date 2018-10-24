<?php
require_once("../Model/colearningDAO_class.php");

$db = new DAO();
// $data['cours']=$db->getCours();
$cours = $db->getCours();
foreach ($cours as $c) {
  $data[]=array('idCours'=>$c->idCours,
                'nomCour'=>$c->nomCour,
                'descCours'=>$c->descCours,
                'mailProf'=>$c->mailProf);
}
$fin = $db->nbCours();
echo '<p>',var_dump($data[0]),'</p>';
include("../View/cours.view.php");

 ?>
