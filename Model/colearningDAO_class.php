<?php

$dao = new DAO();

require_once("etudiant.class.php");
require_once("groupe.class.php");



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
      $req = 'SELECT max(idUser) from user';
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
      $req = $this->db->prepare('INSERT INTO user(idGroupe,nomGroupe,admin)VALUES(:idGroupe, :nomGroupe, :admin)');
      $idGroupe = $this->maxIdGroupe() + 1;
      $req->execute(array(
        'idGroupe' => $idGroupe,
        'nomGroupe' => $nomGroupe,
        'admin' => $admin
      ));
      echo'<p> Le groupe' + $nomGroupe + 'a bien été créé</p>';
    }

    function inscrireUser($nomEtu, $prenomEtu, $mdpEtu,$loginEtu,$mailEtu,$numGroupe,$avatar){
      $req = $this->db->prepare('INSERT INTO user(idEtu,nomEtu, prenomEtu, mdpEtu,loginEtu, mailEtu, numGroupe, avatarEtu)VALUES(:idEtu, :nomEtu, :prenomEtu, :mdpEtu, :loginEtu, :mailEtu, :numGroupe, :avatar)');
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
      $stmt = $this->db->prepare("SELECT * FROM etudiants");
      $stmt->execute();
      $users = $stmt->fetchAll(PDO::FETCH_CLASS, "etudiant");
      return $users;
  }

  // Etant donné un login, on récupère l'id de l'utilisateur
  function getUserId($login){
      $stmt = $this->db->prepare("SELECT idEtu FROM etudiant WHERE loginEtu = ?");
      $stmt->bindParam(1, $login);
      $stmt->execute();
      $res = $stmt->fetchAll();
      return $res[0]["idEtu"];
  }

  function getMailEtu($idEtu){
    $stmt = $this->db->prepare('SELECT mailEtu FROM etudiant WHERE idEtu = ?');
    $stmt->bindParam(1, $idEtu);
    $stmt->execute();
    $mail = $stmt->fetchAll();
    return $mail[0];
  }

}

  ?>
