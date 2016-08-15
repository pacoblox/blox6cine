<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BLOX6 MOVIE THEATER</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/proyecto.css" rel="stylesheet">

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
     <h2><strong>Usuario Creado Satisfactoriamente !!</strong> </h2>
     <br>
    <form role="form" method="POST" action="boletos.php" >
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control confirmacioninput" style="background-color: #68FA71; 
" text="Nombre" id="nombre" name="nombre" readonly value="<?php echo $_POST["nombre"]; ?>">          
        <label for="apellido">Apellido:</label>
        <input type="text" class="confirmacioninput form-control" style="background-color: #68FA71" text="Apellido" id="apellido" name="apellido" readonly value="<?php echo $_POST["apellido"]; ?>">          
        <label for="email">Correo Electrónico:</label>
         <input type="text" class="form-control confirmacioninput" style="background-color: #68FA71; 
" text="Email" id="email" name="email" readonly value="<?php echo $_POST["email"]; ?>"> 
        <label for="telefono">Teléfono:</label>
 <input type="text" class="form-control confirmacioninput" style="background-color: #68FA71; 
" text="Telefono" id="telefono" name="telefono" readonly value="<?php echo $_POST["telefono"]; ?>"> 
      </div>
  
    <h6><strong>Un correo notificandote se ha enviado.!!</strong> </h6>
        
<?php
// multiple recipients
        
$correo = $_POST["email"];
        
        
$clave = $_POST["clave"];
$to  = $_POST["email"] . ', '; // note the comma
$to .= 'registro@blox6.com';

// subject
$subject = 'Bienvenido a Blox6 Cinemas';

// message
$message = '
<html>
<head>
  <title>Bienvenid@ a Blox6.com</title>
    <link href="http://www.blox6.com/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://www.blox6.com/css/proyecto.css" rel="stylesheet">
</head>
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
    <li role="presentation"><a href="http://www.blox6.com/cartelera.php">Cartelera</a></li>
    <li role="presentation"><a href="http://www.blox6.com/boletos.php">Boletos</a></li>
  <li role="presentation"><a href="http://www.blox6.com/contactenos.php">Contáctenos</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container" style="background-color: #07C5FC;"> 
  <p> Registro de Cuenta</p>
  <p> Tu cuenta ha sido registrada satisfactoriamente</p>
  <p> Usuario: '.$correo.'</p>
  <p> Clave: '.$clave.'</p>
  <p> Gracias por elegir Blox6.com</p>
</div>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To:'.$_POST["email"] . "\r\n";
$headers .= 'From: Registro Blox6 Cinemas <registro@blox6.com>' . "\r\n";
$headers .= 'Cc: notificacionesregistro@blox6.com' . "\r\n";


// Mail it
mail($to, $subject, $message, $headers);
?>
        

	<?php
	
$servername = "172.29.185.108";
$connectionInfo = array( "Database"=>"Sistema_Cine", "UID"=>"sa", "PWD"=>"Password1.");
$conn = sqlsrv_connect( $servername, $connectionInfo);
	$phpNombre = $_POST["nombre"];
	$phpApellido = $_POST["apellido"];
    $phpEmail = $_POST["email"];
    $phpTelefono = $_POST["telefono"];    
	$phpClave = $_POST["clave"];
	
if ($conn){
    echo "connected";
    if(($result = sqlsrv_query($conn,"INSERT into Usuario (Nombre_Usuario,Apellido_Usuario,Email,Telefono,Password) Values ('$phpNombre','$phpApellido','$phpEmail','$phpTelefono','$phpClave')")) !== false){  
		 while( $obj = sqlsrv_fetch_object( $result )) {
			       echo"Agregado correctamente";
	}

        }
    
else{
    die(print_r(sqlsrv_errors(), true));
	
}
sqlsrv_close( $conn );
	}
	?>        
      <button type="submit" class="btn btn-lg btn-danger">Adquirir boletos</button>
  
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