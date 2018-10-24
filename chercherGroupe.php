<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chercher Groupe</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="bg-dark">

<div class="container">
  <h2>Recherchez le groupe que vous voulez intégrer</h2>
  <p>Rentrez tout ou un partie du nom du groupe recherché</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Chercher..">
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Nom du groupe</th>
        <th>Demande d'acces</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <tr>
        <td>S4D</td>
        <td><a class="btn btn-primary" href="accueil.php">Demander</a> </td>
      </tr>
      <tr>
        <td>LV3</td>
        <td><a class="btn btn-primary" href="accueil.php">Demander</a> </td>
      </tr>
      <tr>
        <td>Les plus bo</td>
        <td><a class="btn btn-primary" href="accueil.php">Demander</a> </td>
      </tr>
      <tr>
        <td>Mais qu'est ce qui se passe ??</td>
        <td><a class="btn btn-primary" href="accueil.php">Demander</a> </td>
      </tr>
      <tr>
        <td>Pipo et Molo font de l'algo</td>
        <td><a class="btn btn-primary" href="accueil.php">Demander</a> </td>
      </tr>
    </tbody>
  </table>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>
