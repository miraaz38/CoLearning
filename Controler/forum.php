<meta charset="utf-8"/>
<?php
$bdd = 'sqlite:../model/db/kolearning.db'; // accès à la BDD
if (isset($_GET['id']) AND !empty($_GET['id'])) {
    $getidQuestion = $_GET['id'];
    $question = $bdd->prepare('SELECT * FROM questions WHERE id = ?');
    $question->execute(array($getidQuestion));
    $question = $question->fetch();
    if (isset($_POST['submit_commentaire'])) {
        if (isset($_SESSION["pseudo"], $_POST['commentaire']) AND !empty($_SESSION["pseudo"]) AND !empty($_POST['commentaire'])) {
            $pseudo = htmlspecialchars($_SESSION["pseudo"]);
            $commentaire = htmlspecialchars($_POST['commentaire']);
            $datetime = date("m-d H:i:s");
            $ins = $bdd->prepare('INSERT INTO commentaires (pseudo, commentaire, id_article, date_com) VALUES (?,?,?,?)');
            $ins->execute(array($pseudo, $commentaire, $getidQuestion, $datetime));
            $c_msg = "<span style='color:green'>Votre commentaire a bien été posté</span>";
        } else {
            $c_msg = "Erreur: Tous les champs doivent être complétés";
        }
    }
    $commentaires = $bdd->prepare('SELECT * FROM commentaires WHERE id_article = ? ORDER BY id DESC');
    $commentaires->execute(array($getidQuestion));
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
    <?php while ($c = $commentaires->fetch()) { ?>
        <div class="div-commentaires"><b><?= $c['pseudo'] ?>:</b> <?= $c['commentaire'] ?><br/> <?= $c['date'] ?><br/></div>
    <?php } ?>
    <?php
}
?>