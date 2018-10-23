<?php

$dao = new DAO();

/*require_once("../model/user_class.php");
require_once("../model/module_class.php");
require_once("../model/cours_class.php");
require_once("../model/message_class.php");*/

class DAO
{
    // L'objet local PDO de la base de donnée
    private $db;
    // Le type, le chemin et le nom de la base de donnée
    private $database = 'sqlite:../db/colearning.db';

    // Constructeur chargé d'ouvrir la BD
    function __construct(){
        $this->db = new PDO($this->database);
    }

    // ======================================================
    // == Fonctions relatives à la connexion / inscription ==
    // ======================================================

    // On veut créer un nouveau login qui n'existe pas déjà dans la base de donnée.
    // Pour ça, on récupère tout les logins existant et on vérifie si celui qu'on veut créé n'existe pas déjà
    // Tant que ce n'est pas le cas, on modifie le login (selon la création de login de Chamilo)


    // Etant donné un nom, prenom, mdp et login donné on inscrit l'user dans la BD
    function inscrireUser($nom, $prenom, $mdp, $login, $mail){
        $stmt = $this->db->prepare("INSERT INTO ETUDIANTS VALUES ((SELECT max(idEtu)+1 FROM ETUDIANTS)
									, ?
									, ?
									, ?
									, ?
									, 1
									, 0)");

        // Uppercase au premier carac de $nom et $prenom
        $nom = ucfirst($nom);
        $prenom = ucfirst($prenom);
        $mdp = password_hash($mdp, PASSWORD_DEFAULT);
        $stmt->bindParam(1, $nom);
        $stmt->bindParam(2, $prenom);
        $stmt->bindParam(3, $login);
        $stmt->bindParam(4, $mdp);

        $stmt->execute();
    }

    // Etant donné un login et un mdp donné, on vérifie que les deux existent/concordent
    function verifConnexion($login, $mdp){
        $stmt = $this->db->prepare("SELECT mdpEtu FROM ETUDIANTS WHERE loginEtu = ?");
        $stmt->bindParam(1, $login);
        $stmt->execute();
        $res = $stmt->fetchAll();

        if ($stmt && isset($res[0]) && password_verify($mdp, $res[0]["mdp"])) {
            return true;
        } else {
            return false;
        }
    }

    // ======================================================
    // === Fonctions relatives aux infos de l'utilisateur ===
    // ======================================================

    // Etant donné un login, on récupère l'id de l'utilisateur
    function getUserId($login){
        $stmt = $this->db->prepare("SELECT idEtu FROM ETUDIANTS WHERE loginEtu = ?");
        $stmt->bindParam(1, $login);
        $stmt->execute();
        $res = $stmt->fetchAll();
        return $res[0]["id"];
    }

    // Etant donné un id, on récupère un objet User

    function getEleves(){
        $stmt = $this->db->prepare("SELECT * FROM etudiants");
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_CLASS, "etudiant");
        return $users;
    }

}

?>
