<!DOCTYPE html>
<html lang="fr">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Menu - Kolearning</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

    <link href="style/style.css" rel="stylesheet">

  </head>

  <body id="override-bootstrap">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.php">Kolearning</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">

        <li class="nav-item">
          <a class="nav-link" href="login.php">
            <i class="fas fa-sign-in-alt"></i>
            <span>Se connecter</span></a>
        </li>
        <li class="nav-item dropdown">
           <a class="nav-link" href="register.php">            
            <i class="fas fa-user-plus"></i>
            <span>S'inscrire</span></a>
        </li>
      </ul>



      <div id="content-wrapper">

          <div class="row">

              <div id="separeImage">
                  <div class="alert alert-info">
                    <strong>Jamais au courant des examens ?</strong> Kolearning vous envoie des rappels</div>                
                <div class="alert alert-info">
                    <strong>En retard dans vos révisions ?</strong> Kolearning contient des QCM</div>
                <div class="alert alert-info">
                    <strong>Envie d'aider vos camarades ?</strong> Kolearning permet de partager des fichiers</div>
                <div class="alert alert-info">
                    <strong>Toutes ces fonctionnalitées dans un application !</strong> Kolearning !!</div>
                </div>

            <div id="separeImage">
          
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="data/img/notification.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="data/img/rappel.png" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="data/img/icone.png" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
              </div>
          </div>

              <script> $('.carousel').carousel({
                    interval: 200000
                  }) </script>

            
        </div>
        <div class="row">            

          <div id="separeImage">
        
        <div id="myCarousel2" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                  <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel2" data-slide-to="1"></li>
                  <li data-target="#myCarousel2" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="data/img/notification.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="data/img/rappel.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="data/img/icone.png" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#myCarousel2" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#myCarousel2" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
              </a>
            </div>
          </div>

            <script> $('.carousel').carousel({
                  interval: 200000
                }) </script>

            <div id="separeImage" class="alertOrange">
                <div class="alert alert-info">
                  <strong>Jamais au courant des examens ?</strong> Kolearning vous envoie des rappels</div>                
              <div class="alert alert-info">
                  <strong>En retard dans vos révisions ?</strong> Kolearning contient des QCM</div>
              <div class="alert alert-info">
                  <strong>Envie d'aider vos camarades ?</strong> Kolearning permet de partager des fichiers</div>
              <div class="alert alert-info">
                  <strong>Toutes ces fonctionnalitées dans un application !</strong> Kolearning !!</div>
              </div>
      </div>

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Kolearning 2018</span>
            </div>
          </div>
        </footer>
      <!-- /.content-wrapper -->
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Voulez vous vraiment vous déconnecter ?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Selectionnez "Se déconnecter" si vous voulez vraiment vous déconnecter.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
            <a class="btn btn-primary" href="login.php">Se déconnecter</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>
