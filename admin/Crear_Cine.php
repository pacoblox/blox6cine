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
     <h3>Lista de Cines</h3>
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Identificacion Ubicacion Cine</th>
        <th>Identificacion Manager</th>    
          <th>Nombre del cine</th>        
        <th>Telefono</th>
          <th>Identificacion Ciudad</th>
          <th>Direccion</th>
      </tr>
    </thead>
    <tbody>
      <?php include_once 'dbCinesCompleto.php' ?>
        </form>
    </tbody>
  </table>
      
      <div class="container">
			<div class="jumbotron">
				<p>Ingreso de Cines</p>
			</div>
		</div>
		<div class="container">
		 <form action="CreoCine.php" method="POST">
	
		<div class="form-group">
			<label for="Name">Id_Manager:</label>
			<input type="text" class="form-control" id="Id_Manager" name="Id_Manager"required>
			</div>	
			
			<div class="form-group">
			<label for="Name">Ubicacion Nombre:</label>
			<input type="text" class="form-control" id="Ubicacion_Nombre" name="Ubicacion_Nombre"required>
			</div>	
				<div class="form-group">
			<label for="Name"> Telefono:</label>
			<input type="text" class="form-control" id="Ubicacion_Telefono" name="Ubicacion_Telefono"required>
			</div>	
             	<div class="form-group">
			<label for="Name">Identificacion Ciudad:</label>
			<input type="text" class="form-control" id="Id_Ciudad" name="Id_Ciudad"required>
			</div>	
             	<div class="form-group">
			<label for="Name"> Direccion:</label>
			<input type="text" class="form-control" id="Ubicacion_direccion" name="Ubicacion_direccion"required>
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