<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Créer un compte</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Créer un compte</div>
        <div class="card-body">
          <form>
            <div class="form-group">
                  <div class="form-label-group">
                    <input type="text" id="login" class="form-control" placeholder="login" required="required" autofocus="autofocus">
                    <label for="login">Login</label>
                  </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Adresse email" required="required">
                <label for="inputEmail">Adresse email</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required="required">
                    <label for="inputPassword">Mot de passe</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="confirmPassword" class="form-control" placeholder="Confirmer le mot de passe" required="required">
                    <label for="confirmPassword">Confirmer le mot de passe</label>
                  </div>
                </div>
              </div>
            </div>
            <a class="btn btn-primary btn-block" href="login.php">Créer un compte</a>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="login.php">Se connecter</a>
            <a class="d-block small" href="forgot-password.php">Mot de passe oublié ?</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
