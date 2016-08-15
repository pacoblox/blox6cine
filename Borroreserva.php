
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
<li role="presentation"><a href="contactenos.php">

          
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="container">
	
	<div class="jumbotron">
	<h2 class="brandMessage">Ticket cancelado</h2>
	<h6 class="brandMessage">Identificacion del Ticket: </h6><?php echo $_POST["Id_Ticket"]; ?> <br>



	<?php
	

	
$serverName = "172.29.185.108"; 
$connectionInfo = array( "Database"=>"Sistema_Cine", "UID"=>"sa", "PWD"=>"Password1.");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
	
   	$phpId_Ticket= $_POST["Id_Ticket"];     


	
    echo $phpId_Ticket;
	
	
if ($conn){
    echo "connected";
    if(($result = sqlsrv_query($conn,"DELETE FROM Ticket where (Id_Ticket) =('$phpId_Ticket')")) !== false){  
		 while( $obj = sqlsrv_fetch_object( $result )) {
			       echo"borrada correctamente";
             
         
             
             
	//$recurso=sqlsrv_prepare($result);
	//$recurso=sqlsrv_prepare($result);
	}
		//elseif (sqlsrv_execute($result)){
      //echo"Agregado correctamente";
		//}
		
		//else{
      //echo"No Agregado";
//}
        // while( $obj = sqlsrv_fetch_object( $result )) {
			// echo '<tr>';
			// echo '<td>'.$obj->Id_topic.'</td>';
			// echo '<td>'.$obj->Name.'</td>';
		
        }
    
else{
    die(print_r(sqlsrv_errors(), true));
	
}
sqlsrv_close( $conn );

	
	}


	
	?>

	
	
	
	
    
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