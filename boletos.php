<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BLOX6 MOVIE THEATER</title>
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
      <a class="navbar-brand" href="index.html">BLOX6 MOvIES</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
      <ul class="nav navbar-nav navbar-right">
    <li role="presentation"><a href="cartelera.php">Cartelera</a></li>
    <li role="presentation"><a href="boletos.php">Boletos</a></li>
  <li role="presentation"><a href="contactenos.php">Contáctenos</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="jumbotron">
  <div class="container">

    <form role="form" method="GET" action="portalusuario.html" >
      <div class="form-group form-group-lg">
        <label for="email">Usuario:</label>
        <input type="email" class="form-control" text="Email" id="email">
      </div>
      <div class="form-group form-group-lg">
        <label for="pwd">Clave:</label>
        <input type="password" class="form-control" id="pwd">
      </div>

      <button type="submit" class="btn btn-success">Ingresar</button>
      <h3> No estás inscrito ?</h3>
      <button type="submit" class="btn btn-lg btn-danger" formaction="registro.html">Regístrate!!!</button>

    </form>



  </div>
</div>

<div>


</div>
<br>
<br>
<br>


<footer class="navbar navbar-default">
    <p class="text-center"><strong>UH @2016 Diseño de Aplicaciones 2do Cuatrimestre 2016 L N</strong></p>
</footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>  