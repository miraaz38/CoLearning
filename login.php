<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Se Connecter</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Connexion</div>
        <div class="card-body">
          <form class="connexion" action="Controler/Connexion.php" method="post">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="login" name="login" class="form-control" placeholder="Login" required="required" autofocus="autofocus">
                <label for="login">Login</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="mdp" name="mdp" class="form-control" placeholder="Mot de passe" required="required">
                <label for="mdp">Mot de passe</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Se souvenir de moi
                </label>
              </div>
            </div>
            <button class="btn btn-primary btn-block" type="submit" name="valider">Se Connecter</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="register.php">Créer un compte</a>
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
