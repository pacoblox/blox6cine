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
    <li role="presentation"><a href="cartelera.php">Cartelera</a></li>
    <li role="presentation"><a href="boletos.php">Boletos</a></li>
  <li role="presentation"><a href="contactenos.php">Contáctenos</a></li>


          
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
     <h3>Informacion de Tickets comprados</h3>
    <table class="table table-hover">
    <thead>
      <tr>
     <th> Numero de Ticket</th>
        <th>Sala</th>
          <th>Pelicula</th>
           <th>Precio</th>
           <th>Numero de tarjeta</th>
           <th>Fecha</th>

        
      </tr>
    </thead>
    <tbody>
      <?php include_once 'dbticket_usuario.php' ?>
       
    </tbody>
  </table>
       <div class="container">
			<div class="jumbotron">
				<p>Cancelar Reserva</p>
			</div>
		</div>
		<div class="container">
		 <form action="Borroreserva.php" method="POST">
	
		<div class="form-group">
			<label for="Name">Id_Ticket:</label>
			<input type="text" class="form-control" id="Id_Ticket" name="Id_Ticket"required>
			</div>	
			
		
		<button type="submit" class="btn btn-default">cancelar</button>
		<br>
			<br>
			<br>
	