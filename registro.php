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
      <a class="navbar-brand" href="index.php">BLOX6 MOvIES</a>
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

<div class="container" style="background-color: #07C5FC;">
    <div class="row">
        <div class="col-lg-offset-4 col-md-offset-4  col-md-4 col-lg-4"> 

    <br>
     <h3> Formulario de Registro</h3>
     <br>
  <form role="form" method="POST" action="registroadded.php" >
      <div class="form-group">
        <label for="nombre">Nombre:</label>

        <input type="text" class="form-control" text="Nombre" id="nombre" name="nombre" required>          
        <label for="apellido">Apellido:</label>
        <input type="text" class="form-control" text="Apellido" id="apellido" name="apellido" required>          
        <label for="email">Correo Electrónico:</label>
        <input type="email" class="form-control" text="Email" id="email" name="email" required >
        <label for="telefono">Teléfono:</label>
        <input type="phone" class="form-control" text="Teléfono" id="telefono" name="telefono" required>
        <label for="clave">Clave:</label>
        <input type="password" class="form-control" text="Clave" id="clave" name="clave" required>
        <label for="clave2">Confirme la Clave:</label>
        <input type="password" class="form-control" text="Confirme Clave" id="clave2" name="clave2" required>
      </div>
  

      <button type="submit" class="btn btn-success">Enviar</button>
  
    </form>
</div>

</div>
</div>
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