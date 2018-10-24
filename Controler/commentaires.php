<meta charset="utf-8"/>
<?php
session_start();
include_once("../Model/colearningDAO_class.php");

if (isset($_GET['id']) AND !empty($_GET['id'])) {

    $getidQuestion = $_GET['id']; // récupère l'id de la question
    $question = $dao->getQuestionForumID($getidQuestion);

    if (isset($_POST['submit_commentaire'])) {
        if (isset($_POST["pseudo"], $_POST['commentaire']) AND !empty($_POST["pseudo"]) AND !empty($_POST['commentaire'])) {
            $pseudo = htmlspecialchars($_POST["pseudo"]);
            $commentaire = htmlspecialchars($_POST['commentaire']);
            $datetime = date("m-d H:i:s");
            $dao->insertCommentaire($pseudo, $commentaire, $getidQuestion, $datetime);
            $c_msg = "<span style='color:green'>Votre commentaire a bien été posté</span>";
        } else {
            $c_msg = "Erreur: Tous les champs doivent être complétés";
        }
    }

    $commentaires = $dao->getCommentairesQuestion($getidQuestion);
    
    ?>
    <h2>Question:</h2>
    <p><?= $question['contenu'] ?></p>
    <br/>
    <h2>Commentaires:</h2>
    <form method="POST">
        <input type="text" name="pseudo" placeholder="Votre pseudo"/><br/>
        <textarea name="commentaire" placeholder="Votre commentaire..."></textarea><br/>
        <input type="submit" value="Poster mon commentaire" name="submit_commentaire"/>
    </form>
    <?php if (isset($c_msg)) {
        echo $c_msg;
    } ?>
    <br/><br/>
    <div id="espace-commentaires">
    <?php while ($c = $commentaires->fetch()) {
        $pseudo = $dao->getUserById($c['auteurCom']);
        $dateCom = $c['dateCom'];
        $comm = $c['texteCom'];
        ?>
        <div class="div-commentaire"><b><?= $pseudo ?>:</b> <?= $comm ?><br/> <?= $dateCom ?><br/></div>
    <?php } ?>
    </div>
    <?php
}
?>