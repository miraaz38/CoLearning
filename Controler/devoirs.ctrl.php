<?php
require_once("../Model/colearningDAO_class.php");

$db = new DAO();
$devoirs = $db->getDevoirs();
foreach ($devoirs as $d) {
  $data[]=array('idDev'=>$d->idDev,
                'numGroupe'=>$d->numGroupe,
                'numCours'=>$d->numCours,
                'dateDev'=>$d->dateDev,
                'auteurDev'=>$d->auteurDev,
                'descDev'=>$d->descDev);
}
$fin = $db->nbDevoirs();
echo '<p>',var_dump($data[0]),'</p>';
include("../View/devoirs.view.php");


 ?>
