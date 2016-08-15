<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Localizaciones</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
    <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  </style>
  <body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">Administración de Localizaciones BLOX6 MOvIES</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
      <ul class="nav navbar-nav navbar-right">
          
                  <li role="presentation"><a href="Localizaciones.php">Localizaciones</a></li>          
          <li role="presentation"><a href="Cines.php">Cines</a></li>
         <li role="presentation"><a href="Salas.php">Salas</a></li>
          <li role="presentation"><a href="Peliculas.php">Películas</a></li>
          <li role="presentation"><a href="Cartelera.php">Cartelera</a></li>
          <li role="presentation"><a href="Ventas.php">Ventas</a></li>
                 <li role="presentation"><a href="Reportes.php">Reportes de Ocupacion</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container-container-fluid">
  <h3>Lista de Localizaciones</h3>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nombre Pais</th>
        <th>Nombre Ciudad</th>
        <th>Zona Horaria</th>
      </tr>
    </thead>
    <tbody>
      <?php include_once 'dbLocalizaciones.php' ?>
        </form>
    </tbody>
  </table>
  <div class="table table-hover">
    <thead>
      <tr>
        <th>
        <a href="Crear_Pais.php" type="button" class="btn btn-info">Crear Pais</a>
        </th>
           <th>
        <a href="Borrar_Pais.php" type="button" class="btn btn-info">Borrar Pais</a>
        </th>
           <th>
        <a href="Modificar_Pais.php" type="button" class="btn btn-info">Modificar Pais</a>
        </th>
          <a href="Crear_Ciudad.php" type="button" class="btn btn-info">Crear Ciudad</a>
        <th>
              </th>
          <a href="Borrar_Ciudad.php" type="button" class="btn btn-info">Borrar Ciudad</a>
        <th>
              </th>
          <a href="Modificar_Ciudad.php" type="button" class="btn btn-info">Modificar Ciudad</a>
        <th>
          
        </th>
      </tr>
    </thead>
  </div>
</div>
<footer class="navbar navbar-default">
     <p class="text-center"><strong>UH @2016 Diseño de Aplicaciones 2do Cuatrimestre 2016 L N</strong></p>
</footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>  