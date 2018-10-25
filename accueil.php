<<<<<<< HEAD
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

  

  <body id="override-bootstrap" onload="init()">

      

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="accueil.php">KoLearning</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <!-- <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div> -->
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Paramètres</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="Controler/Deconnexion.php?logout='true'" data-toggle="modal" data-target="#logoutModal">Deconnexion</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-users"></i>
            <span>Groupes</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <button id="buttonDevoir" class="btn btn-default btn-block" onclick="showDevoir('listeDevoir')">S4D</button>
            <div class="dropdown-divider"></div>
            <button id="buttonDevoir" class="btn btn-default btn-block" onclick="showDevoir('listeDevoir')">LV3</button>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="creerGroupe.php">
            <i class="fas fa-plus-circle"></i>
            <span>Créer un groupe</span></a>
        </li>
        <li class="nav-item dropdown">
           <a class="nav-link" href="chercherGroupe.php">            
             <i class="fas fa-search"></i>
            <span>Chercher un groupe</span></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link">            
              <i class="fas fa-envelope"></i>
             <span id="envoiMail">Envoyer un mail</span></a>
        </li>

        


        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-fw fa-folder"></i>
              <span>Pages</span> 
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
              <h6 class="dropdown-header">Login Screens:</h6>
              <a class="dropdown-item" href="login.php">Connexion</a>
              <a class="dropdown-item" href="register.php">S'inscrire</a>
              <a class="dropdown-item" href="forgot-password.php">Mot de passe oublié</a>
              <div class="dropdown-divider"></div>
              <h6 class="dropdown-header">Other Pages:</h6>
              <a class="dropdown-item" href="404.php">404 Page</a>
              <a class="dropdown-item" href="blank.php">Blank Page</a>
            </div>
          </li>
      </ul>

      <div id="test" class="d-flex justify-content-between">
            <div id="listeDevoir" class="invisible">
              <div class="container">
                <h2>Nom du groupe</h2>

                <div class="column">
                  <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-primary o-hidden h-100">
                      <div class="card-body">
                        <div class="card-body-icon">
                          <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="mr-5">DS d'IHM</div>
                        <div class="mr-5">15/11/2018</div>
                      </div>
                      <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">Voir plus</span>
                        <span class="float-right">
                          <i class="fas fa-angle-right"></i>
                        </span>
                      </a>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-primary o-hidden h-100">
                      <div class="card-body">
                        <div class="card-body-icon">
                          <i class="fas fa-calculator"></i>
                        </div>
                        <div class="mr-5">DS de math</div>
                        <div class="mr-5">19/11/2018</div>
                      </div>
                      <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">Voir plus</span>
                        <span class="float-right">
                          <i class="fas fa-angle-right"></i>
                        </span>
                      </a>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-primary o-hidden h-100">
                      <div class="card-body">
                        <div class="card-body-icon">
                          <i class="fab fa-java"></i>
                        </div>
                        <div class="mr-5">Examen JavaScript</div>
                        <div class="mr-5">21/11/2018</div>
                      </div>
                      <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">Voir plus</span>
                        <span class="float-right">
                          <i class="fas fa-angle-right"></i>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div id="listeDevoir" class="visible">
              <div class="container">
                <h2>Cours associés</h2>
                <div class="column">
                  
                </div>
              </div>
            </div>

          

      </div>
      <!-- /.content-wrapper -->


      


    </div>
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
            <a class="btn btn-primary" href="index.php">Se déconnecter</a>
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
    <script src="js/monJs.js"></script>

  </body>

</html>
=======
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



  <body id="override-bootstrap" onload="init()">



    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="accueil.php">KoLearning</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <!-- <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div> -->
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Paramètres</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="Controler/Deconnexion.php?logout='true'" data-toggle="modal" data-target="#logoutModal">Deconnexion</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-users"></i>
            <span>Groupes</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <button id="buttonDevoir" class="btn btn-default btn-block" onclick="showDevoir('listeDevoir')">S4D</button>
            <div class="dropdown-divider"></div>
            <button id="buttonDevoir" class="btn btn-default btn-block" onclick="showDevoir('listeDevoir')">LV3</button>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="creerGroupe.php">
            <i class="fas fa-plus-circle"></i>
            <span>Créer un groupe</span></a>
        </li>
        <li class="nav-item dropdown">
           <a class="nav-link" href="chercherGroupe.php">
             <i class="fas fa-search"></i>
            <span>Chercher un groupe</span></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link">
              <i class="fas fa-envelope"></i>
             <span id="envoiMail">Envoyer un mail</span></a>
        </li>




        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-fw fa-folder"></i>
              <span>Pages</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
              <h6 class="dropdown-header">Login Screens:</h6>
              <a class="dropdown-item" href="login.php">Connexion</a>
              <a class="dropdown-item" href="register.php">S'inscrire</a>
              <a class="dropdown-item" href="forgot-password.php">Mot de passe oublié</a>
              <div class="dropdown-divider"></div>
              <h6 class="dropdown-header">Other Pages:</h6>
              <a class="dropdown-item" href="404.php">404 Page</a>
              <a class="dropdown-item" href="blank.php">Blank Page</a>
            </div>
          </li>
      </ul>

      <div id="test" class="d-flex justify-content-between">
        <div id="listeDevoir" class="invisible">
            <div class="container">
              <h2>Nom du groupe</h2>
              <div class="column">
                <div class="col-xl-3 col-sm-6 mb-3">
                  <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                      <div class="card-body-icon">
                        <i class="fas fa-mobile-alt"></i>
                      </div>
                      <div class="mr-5">DS d'IHM</div>
                      <div class="mr-5">15/11/2018</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                      <span class="float-left">Voir plus</span>
                      <span class="float-right">
                        <i class="fas fa-angle-right"></i>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                  <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                      <div class="card-body-icon">
                        <i class="fas fa-calculator"></i>
                      </div>
                      <div class="mr-5">DS de math</div>
                      <div class="mr-5">19/11/2018</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                      <span class="float-left">Voir plus</span>
                      <span class="float-right">
                        <i class="fas fa-angle-right"></i>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                  <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                      <div class="card-body-icon">
                        <i class="fab fa-java"></i>
                      </div>
                      <div class="mr-5">Examen JavaScript</div>
                      <div class="mr-5">21/11/2018</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                      <span class="float-left">Voir plus</span>
                      <span class="float-right">
                        <i class="fas fa-angle-right"></i>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="listeCours" class="visible">
            <div class="container">
              <h2>Cours associés</h2>
              <div class="column">
                <div class="col-xl-3 col-sm-6 mb-3">
                  <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                      <div class="card-body-icon">
                        <i class="fas fa-mobile-alt"></i>
                      </div>
                      <div class="mr-5">Cours d'IHM</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                      <span class="float-left">Voir plus</span>
                      <span class="float-right">
                        <i class="fas fa-angle-right"></i>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="column">
                <div class="col-xl-3 col-sm-6 mb-3">
                  <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                      <div class="card-body-icon">
                        <i class="fas fa-mobile-alt"></i>
                      </div>
                      <div class="mr-5">Cours de Math</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                      <span class="float-left">Voir plus</span>
                      <span class="float-right">
                        <i class="fas fa-angle-right"></i>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <!-- /.content-wrapper -->
    </div>
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
    <script src="js/monJs.js"></script>

  </body>

</html>
>>>>>>> 724f1f4515848006065e418957c7b5b90795229a
