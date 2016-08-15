<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel de Administrador</title>
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
      <a class="navbar-brand" href="index.html">Administrador BLOX6 MOvIES</a>
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
          
          
          
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
       <form>
     <h3>Lista de Peliculas</h3>
    <table class="table table-hover">
    <thead>
      <tr>
     <th>Id Pais</th>
        <th>Nombre pais</th>
        
      </tr>
    </thead>
    <tbody>
      <?php include_once 'dbpais.php' ?>
        </form>
    </tbody>
  </table>
      
      <div class="container">
			<div class="jumbotron">
				<p>Ingreso de Ciudades</p>
			</div>
		</div>
		<div class="container">
		 <form action="Creociudad.php" method="POST">
	
		<div class="form-group">
            	<label for="Name">Identificacion Pais:</label>
			<input type="text" class="form-control" id="Id_Pais" name="Id_Pais"required>
			</div>	
			<div
			<label for="Name">Nombre Ciudad:</label>
			<input type="text" class="form-control" id="Nombre_Ciudad" name="Nombre_Ciudad"required>
			</div>	
			
			<div class="form-group">
			<label for="Name">Zona Horaria:</label>
			<input type="text" class="form-control" id="Zona_horaria" name="Zona_horaria"required>
			</div>	
				
		
		
		<button type="submit" class="btn btn-default">Agregar</button>
		<br>
			<br>
			<br>
	
  
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