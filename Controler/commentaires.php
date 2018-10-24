<meta charset="utf-8"/>
<?php
session_start();
include_once("../Model/colearningDAO_class.php");

if (isset($_GET['id']) AND !empty($_GET['id'])) {

    $getidQuestionForum = $_GET['id']; // récupère l'id de la question
    $question = $dao->getQuestionForumID($getidQuestionForum);

    if (isset($_POST['submit_commentaire'])) {
        if (isset($_POST["pseudo"], $_POST['commentaire']) AND !empty($_POST["pseudo"]) AND !empty($_POST['commentaire'])) {
            $pseudo = htmlspecialchars($_POST["pseudo"]);
            $commentaire = htmlspecialchars($_POST['commentaire']);
            $datetime = date("m-d H:i:s");
            //$ins = $bdd->prepare('INSERT INTO commentaires (pseudo, commentaire, id_article, date_com) VALUES (?,?,?,?)');
            //$ins->execute(array($pseudo, $commentaire, $getidQuestion, $datetime));
            $c_msg = "<span style='color:green'>Votre commentaire a bien été posté</span>";
        } else {
            $c_msg = "Erreur: Tous les champs doivent être complétés";
        }
    }

    $commentaires = $dao->getCommentairesQuestion($getidQuestionForum);
    
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
        var_dump($_POST["pseudo"]);
        var_dump($_POST['commentaire']);
        echo $c_msg;
    } ?>
    <br/><br/>
    <div id="espace-commentaires">
    <?php while ($c = $commentaires) { ?>
        <div class="div-commentaires"><b><?= $c['pseudo'] ?>:</b> <?= $c['commentaire'] ?><br/> <?= $c['date'] ?><br/></div>
    <?php } ?>
    </div>
    <?php
}
?>