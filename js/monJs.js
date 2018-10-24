function init(){
    var p = document.getElementById("envoiMail");
    p.onclick = envoiMail;
}

function envoiMail(){
    var div = document.createElement("div");
    var zone = document.getElementById("zone_affichage");
    div.innerHTML = "<form class=\"question\" action=\"Controler/EnvoiMail.php\" method=\"post\"> <div class=\"form-group\"><label for=\"sujet\">Sujet :</label><input type=\"text\" class=\"form-control\" id=\"sujet\"></div> <div class=\"form-group\"><label for=\"comment\">Commentaire :</label><textarea class=\"form-control\" rows=\"5\" id=\"comment\"></textarea></div> <button class=\"btn btn-primary btn-block\" type=\"submit\">Envoyer</button>";
    zone.appendChild(div);   
}



$(document).ready( function() {
    $(document).on('change', '.btn-file :file', function() {
    var input = $(this),
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
    
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    }); 	
});