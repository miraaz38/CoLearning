<?php

//récuperer l'adresse de l'élève courant

$mail = $_SESSION['mail']; // Déclaration de l'adresse de destination.

if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.

{

    $passage_ligne = "\r\n";

}

else

{

    $passage_ligne = "\n";

}

//=====Déclaration des messages au format texte et au format HTML.

$message_txt = $_POST['contenu'];

$message_html = "<html><head></head><body><b>Salut à tous</b>, voici un e-mail envoyé par un <i>script PHP</i>.</body></html>";

//==========



//=====Création de la boundary

$boundary = "-----=".md5(rand());

//==========



//=====Définition du sujet.

$sujet =$_POST['sujet'];

//=========

$expe=$_SESSION['login'];

//=====Création du header de l'e-mail.

$header = "From: \"".$expe."\"<delphine.clarouvan@gmail.com>".$passage_ligne;

$header.= "Reply-to: \"".$expe."\" <delphine.clarouvan@gmail.com>".$passage_ligne;

$header.= "MIME-Version: 1.0".$passage_ligne;

$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;

//==========



//=====Création du message.

$message = $passage_ligne."--".$boundary.$passage_ligne;

//=====Ajout du message au format texte.

$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;

$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;

$message.= $passage_ligne.$message_txt.$passage_ligne;

//==========

$message.= $passage_ligne."--".$boundary.$passage_ligne;

//=====Ajout du message au format HTML

$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;

$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;

$message.= $passage_ligne.$message_html.$passage_ligne;

//==========

$message.= $passage_ligne."--".$boundary."--".$passage_ligne;

$message.= $passage_ligne."--".$boundary."--".$passage_ligne;

//==========



//=====Envoi de l'e-mail.

mail($mail,$sujet,$message,$header);
echo"<p>Votre mail a bien été envoyé à ".$mail.". Pensez à consulter votre boîte mail afin de vous tenir informé de la réponse de votre professeur</p>";

//==========

?>
