numDevoir$numDevoir$numDevoir<?php



$dao = new DAO();

require_once("etudiant.class.php");
require_once("cours.class.php");
require_once("groupe.class.php");
require_once("questionsQuizz.class.php");
require_once("quizz.class.php");

// require_once("admins.class.php");
require_once("appartientA.class.php");
// require_once("commentaires.class.php");
require_once("devoirs.class.php");
// require_once("forums.class.php");
// require_once("participeA.class.php");
// require_once("questionsForum.class.php");
// require_once("resCommentaires.class.php");
// require_once("resDevoir.class.php");
// require_once("resQuestion.class.php");
// require_once("ressources.class.php");

class DAO
{
    // L'objet local PDO de la base de donnée
    private $db;
    // Le type, le chemin et le nom de la base de donnée
    private $database = 'sqlite:../Model/db/colearning.db';

    // Constructeur chargé d'ouvrir la BD
    function __construct(){
        $this->db = new PDO($this->database);
    }

    function maxIdUser():int{
      $req = 'SELECT max(idEtu) from etudiant';
      $sth = $this->db->query($req);
      $result = $sth->fetch();
      return $result[0];
    }

    function maxIdGroupe():int{
      $req = 'SELECT max(idGroupe) from groupe';
      $sth = $this->db->query($req);
      $result = $sth->fetch();
      return $result[0];
    }

    function creerGroupe($idGroupe, $nomGroupe,$admin){
      $req = $this->db->prepare('INSERT INTO etudiant(idGroupe,nomGroupe,admin)VALUES(:idGroupe, :nomGroupe, :admin)');
      $idGroupe = $this->maxIdGroupe() + 1;
      $req->execute(array(
        'idGroupe' => $idGroupe,
        'nomGroupe' => $nomGroupe,
        'admin' => $admin
      ));
      echo'<p> Le groupe' + $nomGroupe + 'a bien été créé</p>';
    }

    function inscrireUser($nomEtu, $prenomEtu, $mdpEtu,$loginEtu,$mailEtu,$numGroupe,$avatar){
      $req = $this->db->prepare('INSERT INTO etudiant(idEtu,nomEtu, prenomEtu, mdpEtu,loginEtu, mailEtu, numGroupe, avatarEtu)VALUES(:idEtu, :nomEtu, :prenomEtu, :mdpEtu, :loginEtu, :mailEtu, :numGroupe, :avatar)');
      $idEtu = $this->maxIdUser() + 1;
      $mdp = password_hash($mdp, PASSWORD_DEFAULT);
      $req->execute(array(
        'idEtu' => $idEtu,
        'nomEtu' => $nomEtu,
        'prenomEtu' => $prenomEtu,
        'mdpEtu' => $mdpEtu,
        'loginEtu' => $loginEtu,
        'mailEtu' => $mailEtu,
        'numGroupe' => $numGroupe,
        'avatar' => $avatar
      ));
      echo'<p> Bienvenue sur kolabagenda' + $prenom + '</p>';
    }

    // Etant donné un login et un mdp donné, on vérifie que les deux existent/concordent
  function verifConnexion($loginEtu, $mdp){
    $stmt = $this->db->prepare("SELECT mdpEtu FROM etudiant WHERE loginEtu = ?");
    $stmt->bindParam(1, $loginEtu);
    $stmt->execute();
    $res = $stmt->fetchAll();

    if($stmt && isset($res[0]) && ($mdp == $res[0]['mdpEtu'])){
      return true;
    } else {
      return false;
    }
  }


  // Etant donné un id, on récupère un objet User

  function getUsers(){
      $stmt = $this->db->prepare("SELECT * FROM etudiant");
      $stmt->execute();
      $users = $stmt->fetchAll(PDO::FETCH_CLASS, "etudiant");
      return $users;
  }

  function getUsersById($idEtu){
    $req = $this->db->prepare('SELECT * from etudiant WHERE idEtu=:idEtu');
    $req->execute(array(
      'idEtu' => $idEtu
    ));
    $etu = $req->fetchAll(PDO::FETCH_CLASS, "etudiant");
    return $etu[0];
  }

  // Etant donné un login, on récupère l'id de l'utilisateur
  function getUserId($login){
      $stmt = $this->db->prepare("SELECT idEtu FROM etudiant WHERE loginEtu = ?");
      $stmt->bindParam(1, $login);
      $stmt->execute();
      $res = $stmt->fetchAll();
      return $res[0];
  }

  function getMailEtu($idEtu){
    $stmt = $this->db->prepare('SELECT mailEtu FROM etudiant WHERE idEtu = ?');
    $stmt->bindParam(1, $idEtu);
    $stmt->execute();
    $mail = $stmt->fetchAll();
    return $mail[0];
  }

  //------------------------ Fonctions en rapport avec les cours ---------

  function getCours(){// récupère tous les cours sous la forme d'objet
    $req='SELECT * from cours';
    $sth=$this->db->query($req);
    $result = $sth->fetchall(PDO::FETCH_CLASS,'Cours');
    return $result;

  }

  function getCoursById($idCours){// récupère tous les cours sous la forme d'objet
    $req = $this->db->prepare('SELECT * from cours WHERE idCours=:idCours');
    $req->execute(array(
      'idCours' => $idCours
    ));
    $result = $req->fetchall(PDO::FETCH_CLASS,'Cours');
    return $result[0];


  }

  function nbCours():int{
    $req ='SELECT count(idCours) from cours';
    $sth=$this->db->query($req);
    $result = $sth->fetch();
    return $result[0];
  }

  function getCoursDevoir($numDevoir){
    $req = $this->db->prepare('SELECT numCours from devoirs WHERE idDev=:numDevoir');
    $req->execute(array(
      'numDevoir' => $numDevoir
    ));
    $result = $req->fetch();

    $cours= $this->getCoursById($result[0]);

    return $cours;
  }

  //--------------------------- Fonctions en rapport avec les Quizz ------
  function maxIdQuizz():int{
    $req = 'SELECT max(idQuizz) from quizz';
    $sth = $this->db->query($req);
    $result = $sth->fetch();
    if ($result[0] == null){
      $result[0]=0;
    }
    return $result[0];
  }

  function maxIdQuestionQuizz():int{
    $req = 'SELECT max(idQuestion) from questionsQuizz';
    $sth = $this->db->query($req);
    $result = $sth->fetch();
    return $result[0];
  }

    function maxIdQuizzDevoir($numDevoir):int{
      $req =$this->db->prepare('SELECT max(idQuizz) from quizz where numDevoir=:numDev');
      $req->execute(array(
        'numDev' => $numDevoir
      ));
      $result = $req->fetch();
      return $result[0];
  }


  function nbQuestionQuizz($numDevoir):int{
    $req =$this->db->prepare('SELECT count(*) from questionsQuizz where numDevoir=:numDevoir');
    $req->execute(array(
      'numDevoir' => $numDevoir
    ));
    $result = $req->fetch();
    return $result[0];
  }

  function nbQuestionInQuizz($numQuizz):int{
    $req =$this->db->prepare('SELECT count(*) from questionsQuizz where numQuizz=:numQuizz');
    $req->execute(array(
      'numQuizz' => $numQuizz
    ));
    $result = $req->fetch();
    return $result[0];
  }


  function creerQuizz($libelle, $numDevoir){
    $req = $this->db->prepare('INSERT INTO quizz(idQuizz,libelle,numDevoir)VALUES(:idQuizz, :libelle, :numDev)');
    $idQuizz = $this->maxIdQuizz() + 1;
    $req->execute(array(
      'idQuizz' => $idQuizz,
      'libelle' => $libelle,
      'numDev' => $numDevoir
    ));
  }


function getQuestionQuizzDevoir($numDevoir){
  $req = $this->db->prepare('SELECT * from questionsQuizz WHERE numDevoir=:numDevoir');
  $req->execute(array(
    'numDevoir' => $numDevoir
  ));
  $result = $req->fetchAll(PDO::FETCH_CLASS, "QuestionQuizz");
  return $result;

}

  function creerQuestionQuizz($numDevoir,$image,$reponseJuste, $reponseFausse1, $reponseFausse2){
    $req = $this->db->prepare('INSERT INTO questionsQuizz(idQuizz,libelle,numCours,image, reponseJuste, reponseFausse1,reponseFausse2)VALUES(:idQuizz, :libelle, :numDevoir,:image, :reponseJuste, :reponseFausse1,:reponseFausse2)');
    $idQuestionQuizz = $this->maxIdQuestionQuizz() + 1;
    $req->execute(array(
      'idQuestionQuizz' => $idQuestionQuizz,
      'numDevoir' => $numDevoir,
      'image' => $image,
      'reponseJuste' => $reponseJuste,
      'reponseFausse1' => $reponseFausse1,
      'reponseFausse2' => $reponseFausse2
    ));
  }

  function insererAppartientA($numQuizz, $numQuestion){ // insere dans la table AppartientA le numquizz et le numQuestion
    $req = $this->db->prepare('INSERT INTO appartientA(numQuizz,numQuestion)VALUES(:numQuizz, :numQuestion)');
    $req->execute(array(
      'numQuizz' => $numQuizz,
      'numQuestion' => $numQuestion
    ));

  }

  function getQuestionQuizz($numQuizz){
    $req = $this->db->prepare('SELECT numQuestion from appartientA WHERE numQuizz=:numQuizz');
    $req->execute(array(
      'numQuizz' => $numQuizz
    ));
    $result = $req->fetchAll(PDO::FETCH_CLASS, "QuestionQuizz");
    return $result;
  }

  function getQuestionQuizzById($idQuestionQuizz){
    $req = $this->db->prepare('SELECT * from questionsQuizz WHERE idQuestion=:$idQuestionQuizz');
    $req->execute(array(
      'idQuestion' => $idQuestionQuizz
    ));
    $result = $req->fetchAll(PDO::FETCH_CLASS, "QuestionQuizz");
    return $result[0];
  }

//Fonction remplissant la table AppartientA qui contient le num d'une question et le quizz a laquelle elle appartient
  function associerQuestionQuizz($numDevoir, $nbQuestion){
    $numQuizz = $this->maxIdQuizzDevoir($numDevoir); //recupère le numero du dernierQuizz
    $result=$this->getQuestionQuizzDevoir($numDevoir);
    $questions=shuffle($result); // récupère toutes les questions qui a comme sujet le cours et mélange
    if ($nbQuestion> $this->nbQuestionQuizz($numDevoir)){ // l'élève a pu choisir le nombre de question du quizz mais on b=vérifie qu'il y ait suffisemment de question pour créer autant de questions qu'il le veut
      $nbQuestion = $this->nbQuestionQuizz($numDevoir);
    }
    for($i=0; $i<$nbQuestion; $i++){// on associe les questions au quizz
      $this->insererAppartientA($numQuizz, $result[$i]->idQuestion);
    }

  }

  function nouveauQuizz($libelle, $numDevoir, $nbQuestion){
    $this->creerQuizz($libelle, $numDevoir); // On crée un quizz
    $this->associerQuestionQuizz($numDevoir, $nbQuestion);//et ensuite on lui associe des questions

  }

  function getQuizzDevoir($numDevoir){
    $req = $this->db->prepare('SELECT * from quizz WHERE numDevoir=:numDevoir');
    $req->execute(array(
      'numDevoir' => $numDevoir
    ));
    $result = $req->fetchAll(PDO::FETCH_CLASS, "Quizz");
    return $result;
  }

  function getNbQuizzDevoir($numDevoir):int{
    $req = $this->db->prepare('SELECT count(idQuizz) from quizz WHERE numDevoir=:numDevoir');
    $req->execute(array(
      'numDevoir' => $numDevoir
    ));
    $result = $req->fetch();
    return $result[0];
  }

  function getQuizzById($numQuizz){
    $req = $this->db->prepare('SELECT * from quizz WHERE numQuizz=:numQuizz');
    $req->execute(array(
      'numQuizz' => $numQuizz
    ));
    $result = $req->fetchAll(PDO::FETCH_CLASS, "Quizz");
    return $result[0];

  }

//----------------------- Devoirs ---------------------------
function maxIdDev(){
  $req = 'SELECT max(idDev) from devoirs';
  $sth = $this->db->query($req);
  $result = $sth->fetch();
  return $result[0];
}

function nbDevoirs():int{
  $req ='SELECT count(idDev) from devoirs';
  $sth=$this->db->query($req);
  $result = $sth->fetch();
  return $result[0];
}

function creerDevoir($numGroupe,$numCours,$dateDev,$auteurDev,$descDev){
  $req = $this->db->prepare('INSERT INTO devoirs(idDev,numGroupe,numCours,dateDev,auteurDev,descDev)VALUES(:idDev,:numGroupe,:numCours,:dateDev,:auteurDev,:descDev)');
  $idDev = $this->maxIdDev() + 1;
  $req->execute(array(
    'idDev' => $idDev,
    'numGroupe'=>$numGroupe,
    'numCours' => $numCours,
    'dateDev' => $dateDev,
    'auteurDev' => $auteurDev,
    'descDev' => $descDev
  ));

}

function getDevoirs(){
  $req='SELECT * from devoirs';
  $sth=$this->db->query($req);
  $result = $sth->fetchall(PDO::FETCH_CLASS,'Devoirs');
  return $result;
}

function getDevoirsCours($numCours){
  $req = $this->db->prepare('SELECT * FROM devoirs WHERE numCours=:numcours');
  $req->execute(array(
    'numCours' => $numCours
  ));
  $result = $req->fetchall(PDO::FETCH_CLASS,'Devoirs');
  return $result;
}

function getDevoirsById($idDev){
  $req = $this->db->prepare('SELECT * from devoirs WHERE idDev=:idDev');
  $req->execute(array(
    'idDev' => $idDev
  ));
  $result = $req->fetchAll(PDO::FETCH_CLASS, "Devoirs");
  return $result[0];
}


}

  ?>
