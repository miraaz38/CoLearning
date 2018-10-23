function init(){
    var p = document.getElementById("envoiMail");
    p.onclick = envoiMail;
}

function envoiMail(){
    var div = document.createElement("div");
    var zone = document.getElementById("zone_affichage");

    //div.innerHTML = "<form class=\"question\" action=\"Controler/EnvoiMail.php\" method=\"post\"> <label for=\"sujet\">sujet</label> <input type=\"text\" name=\"sujet\" value=\"\"> <textarea name=\"contenu\" rows=\"8\" cols=\"80\">Bonjour, je vous envoie ce mail afin d'avoir votre avis sur une question soumise sur l'application CoLearning dont l'intitulé est le suivant :  </textarea> <button type=\"submit\" name=\"envoiMail\">Envoyer</button> </form>";
    div.innerHTML = "<form class=\"question\" action=\"Controler/EnvoiMail.php\" method=\"post\"> <div class=\"form-group\"><label for=\"sujet\">Sujet :</label><input type=\"text\" class=\"form-control\" id=\"sujet\"></div> <div class=\"form-group\"><label for=\"comment\">Commentaire :</label><textarea class=\"form-control\" rows=\"5\" id=\"comment\"></textarea></div> <button class=\"btn btn-primary btn-block\" type=\"submit\">Envoyer</button>";
    zone.appendChild(div);
}