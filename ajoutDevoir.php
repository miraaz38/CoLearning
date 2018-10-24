<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ajouter un devoir</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

    <link href="style/style.css" rel="stylesheet">

  </head>

  <body class="bg-dark" id="bootstrap_surcharge">

        <div class="container">
          <div class="card card-login mx-auto mt-5">
            <div class="card-header">Ajouter un devoir</div>
            <div class="card-body">
              <form class="connexion" action="Controler/ajoutDevoir.php" method="post">
                <div class="form-group">
                  <div class="form-label-group">
                    <input type="text" id="nom" class="form-control" placeholder="Nom" required="required" autofocus="autofocus">
                    <label for="nom">Nom</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-label-group">
                    <input type="text" id="mdp" class="form-control" placeholder="Matière" required="required">
                    <label for="mdp">Matière</label>
                  </div>
                </div>
                <div class="form-group row">
                    <label for="example-date-input" class="col-2 col-form-label">Date</label>
                    <div class="col-10">
                        <input class="form-control" type="date" value="2018-10-23" id="example-date-input" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="comment">Commentaire :</label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>
                <div class="container">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Joindre : <input type="file" id="imgInp">
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <img id='img-upload'/>
                        </div>
                </div>
                
                <button class="btn btn-primary btn-block" type="submit">Ajouter devoir</button>
              </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="accueil.php">Annuler</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="js/monJs.js"></script>

  </body>

</html>
