<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BLOX6 ADMIN MOVIE THEATER</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/proyecto.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>

    <script src="js/bootstrap.min.js"></script>
  </head>
    <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  </style>
  <script>

</script>
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
      <a class="navbar-brand" href="../index.php">BLOX6 Cinema </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
      <ul class="nav navbar-nav navbar-right">
    <li role="presentation"><a href="cartelera.php">Cartelera</a></li>
    <li role="presentation"><a href="boletos.php">Boletos</a></li>
  <li role="presentation"><a href="contactenos.php">Contáctenos</a></li>
<li role="presentation"><a href="contactenos.php">

</a>
    <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  <span style="color: red" class="glyphicon glyphicon-user"></button></a>
  <ul class="dropdown-menu">
    <li><a href="#">Informacion</a></li>
    <li><a href="#">Reportes</a></li>
    <li><a href="#">Salir</a></li>
  </ul>
</div> 
     </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container-fluid">
  <div class="jumbotron" style="background-color: ;">
    <h1>Orden Procesada</h1> 
    <h2>Tiquete de Compra</h2> 
    <?php 
     $pais = $_POST["pais"];
     $ciudad = $_POST["ciudad"];
     $cine = $_POST["cine"];
     $tanda = $_POST["tanda"];
     $tipo = $_POST["tipo"];
     $nombre = $_POST["nombre"];
     $tarjeta = $_POST["tarjeta"];
    // $fecha = $_POST["fecha"];
     $cantidad = $_POST["cantidad"];
    $total = $_POST["total"];  
      $email = $_POST["email"]; 
     /* echo $pais;
      echo $ciudad;
      echo $cine;
      echo $tanda;
      echo $tipo;
      echo $nombre;
      echo $tarjeta;
      echo $fecha;
      echo $cantidad;
      echo $total;
      echo $email; */
      $IdPais;
      $IdCiudad;
      $IdUbicacionNombre;
      $IdUbicacionTelefono;
      $IdSala;
      $IdPelicula;
      $IdUsuario;
      $IdPrecio;
      $IdTarjeta;
      $IdFecha;
      $IdCantidad;
      $IdVendidoNormal;
      $IdVendidoVIP;
      $IdNuevoValorVendido;
      $IdTanda;
      $IdHora;
      $IdNombrePelicula;
      
      if ($tipo == 0) {
       $tipoEntrada = "Regular";   
      };
      if ($tipo == 1) {
       $tipoEntrada = "VIP";   
      };
      
      
$serverName = "172.29.185.108"; //serverName\instanceName

$connectionInfo = array( "Database"=>"Sistema_Cine", "UID"=>"sa", "PWD"=>"Password1.");
$conn = sqlsrv_connect( $serverName, $connectionInfo);


if ($conn){
    
    if(($result = sqlsrv_query($conn,"SELECT Nombre_Pais FROM Pais where Id_Pais = '".$pais."'")) !== false){
        
     
        while( $obj = sqlsrv_fetch_object( $result )) {
            echo '<div class="form-group"> 
            <label for="ciudad">País:</label>
            <input id="ciudad" type="text" class="form-control" value="'.$obj->Nombre_Pais.'" readonly></div>';	
			$IdPais=$obj->Nombre_Pais; 
        }
    }
   
}else{
    die(print_r(sqlsrv_errors(), true));
	
}
sqlsrv_close( $conn );
      
      
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if ($conn){    
    if(($result = sqlsrv_query($conn,"SELECT Nombre_Ciudad FROM Ciudad where Id_Ciudad = '".$ciudad."'")) !== false){
        while( $obj = sqlsrv_fetch_object( $result )) {
            
        echo '<div class="form-group"> 
            <label for="ciudad">Ciudad:</label>
            <input id="ciudad" type="text" class="form-control" value="'.$obj->Nombre_Ciudad.'" readonly></div>';	
            $IdCiudad=$obj->Nombre_Ciudad; 
        }
    }
}else{
    die(print_r(sqlsrv_errors(), true));
}
sqlsrv_close( $conn );

           
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if ($conn){    
    if(($result = sqlsrv_query($conn,"SELECT Ubicacion_Nombre,Ubicacion_Telefono FROM Ubicacion_Cine where Id_UbiCine = '".$cine."'")) !== false){
        while( $obj = sqlsrv_fetch_object( $result )) {
            echo '<div class="form-group"> 
            <label for="ciudad">Ubicación:</label>
            <input id="ciudad" type="text" class="form-control" value="'.$obj->Ubicacion_Nombre.'" readonly></div>';
            echo '<div class="form-group"> 
            <label for="ciudad">Teléfono:</label>
            <input id="ciudad" type="text" class="form-control" value="'.$obj->Ubicacion_Telefono.'" readonly></div>';	
            $IdUbicacionNombre = $obj->Ubicacion_Nombre;
            $IdUbicacionTelefono = $obj->Ubicacion_Telefono;
            		 
        }
    }
}else{
    die(print_r(sqlsrv_errors(), true));
}
sqlsrv_close( $conn );
      

           
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if ($conn){    
    if(($result = sqlsrv_query($conn,"SELECT CAST (t.horario as varchar(8)) AS horario,t.Fecha, p.Nombre_Pelicula, t.Id_Sala,t.Id_pelicula, t.Vendido_VIP,t.Vendido_Normal FROM Tandas t INNER JOIN Pelicula p ON t.Id_pelicula=p.Id_pelicula where Id_Tandas = '".$tanda."'")) !== false){
        while( $obj = sqlsrv_fetch_object( $result )) {
            echo '<div class="form-group"> 
            <label for="fecha">Fecha:</label>
            <input id="fecha" type="text" class="form-control" value="'.$obj->Fecha.'" readonly></div>';	
            echo '<div class="form-group"> 
            <label for="horario">Hora:</label>
            <input id="horario" type="text" class="form-control" value="'.$obj->horario.'" readonly></div>';	
              echo '<div class="form-group"> 
            <label for="sala">Sala:</label>
            <input id="sala" type="text" class="form-control" value="'.$obj->Id_Sala.'" readonly></div>';	
            
            echo '<div class="form-group"> 
            <label for="ciudad">Película:</label>
            <input id="ciudad" type="text" class="form-control" value="'.$obj->Nombre_Pelicula.'" readonly></div>';	
            $IdNombrePelicula = $obj->Nombre_Pelicula;
            $IdHora = $obj->horario;
            $IdSala = $obj->Id_Sala;
            $IdPelicula = $obj->Id_pelicula;
            $IdVendidoVIP =$obj->Vendido_VIP;
            $IdVendidoNormal = $obj->Vendido_Normal;
            $IdFecha = $obj->Fecha;
        }
    }
}else{
    die(print_r(sqlsrv_errors(), true));
}
sqlsrv_close( $conn );
      
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if ($conn){    
    if(($result = sqlsrv_query($conn,"SELECT Id_Usuario FROM Usuario where Email = '".$email."'")) !== false){
        while( $obj = sqlsrv_fetch_object( $result )) {
           $IdUsuario = $obj->Id_Usuario;
          //  echo '<h1>'.$idusuario.'</h1>';
        }
    }
}else{
    die(print_r(sqlsrv_errors(), true));
}
sqlsrv_close( $conn );
      
            $IdCantidad = $cantidad;
            $IdTarjeta = $tarjeta;
           // $IdFecha = $fecha;
            $IdPrecio = $total / $cantidad;
      echo '<div class="form-group"> 
            <label for="cantidad">Cantidad:</label>
            <input id="cantidad" type="text" class="form-control" value="'.$cantidad.'" readonly></div>';	
      echo '<div class="form-group"> 
            <label for="tipoEntrada">Tipo Entrada:</label>
            <input id="tipoEntrada" type="text" class="form-control" value="'.$tipoEntrada.'" readonly></div>';		
      echo '<div class="form-group"> 
            <label for="nombretarjeta">Nombre en Tarjeta:</label>
            <input id="nombretarjeta" type="text" class="form-control" value="'.$nombre.'" readonly></div>';	
      echo '<div class="form-group"> 
            <label for="tarjeta">Tarjeta:</label>
            <input id="tarjeta" type="text" class="form-control" value="'.$tarjeta.'" readonly></div>';	
      echo '<div class="form-group"> 
            <label for="totalcompra">Total en Dólares:</label>
            <input id="totalcompra" type="text" class="form-control" value="'.$total.'" readonly></div>';	

$conn = sqlsrv_connect( $serverName, $connectionInfo);

      
if ($conn){    
    if(($result = sqlsrv_query($conn,"SELECT Id_Usuario FROM Usuario where Email = '".$email."'")) !== false){
        while( $obj = sqlsrv_fetch_object( $result )) {
           $IdUsuario = $obj->Id_Usuario;
          //  echo '<h1>'.$idusuario.'</h1>';
        }
    }
}else{
    die(print_r(sqlsrv_errors(), true));
}
sqlsrv_close( $conn );
      
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if ($conn){    
    
   for ($x = 1; $x <= $cantidad; $x++) { 
    if(($result = sqlsrv_query($conn,"INSERT into Ticket (Id_Sala,Id_Pelicula,Id_Usuario,Precio,Numero_Tarjeta,Fecha) Values ('$IdSala','$IdPelicula','$IdUsuario','$IdPrecio','$IdTarjeta','$IdFecha')")) !== false){
        while( $obj = sqlsrv_fetch_object( $result )) {
        
        }
    }
   }
    
    
}else{
    die(print_r(sqlsrv_errors(), true));
}
sqlsrv_close( $conn );      
         //if(($result = sqlsrv_query($conn,"INSERT into Usuario (Nombre_Usuario,Apellido_Usuario,Email,Telefono,Password) Values //('$phpNombre','$phpApellido','$phpEmail','$phpTelefono','$phpClave')")) !== false){

$conn = sqlsrv_connect( $serverName, $connectionInfo);
    //  echo $IdSala,$IdPelicula,$IdUsuario,$IdPrecio,$IdTarjeta,$IdFecha,$IdVendidoNormal,$IdVendidoVIP;
      

      $IdTanda = (int)$tanda;
if($tipo == 0){
          $IdNuevoValorVendido = $IdVendidoNormal + $cantidad;
    echo $cantidad,$IdVendidoNormal,$IdVendidoVIP,$IdNuevoValorVendido;
    if(($result = sqlsrv_query($conn,"UPDATE Tandas SET Vendido_Normal ='$IdNuevoValorVendido' where Id_tandas ='$tanda' ")) !== false){
        while( $obj = sqlsrv_fetch_object( $result )) {
        
        }
    }
          else{
    die(print_r(sqlsrv_errors(), true));
          
      }
}
    
if($tipo == 1){
          $IdNuevoValorVendido = $IdVendidoVIP + $cantidad;
    if(($result = sqlsrv_query($conn,"UPDATE Tandas SET Vendido_VIP ='$IdNuevoValorVendido' where Id_tandas ='$tanda' ")) !== false){
        while( $obj = sqlsrv_fetch_object( $result )) {
        
        }
    }
          else{
    die(print_r(sqlsrv_errors(), true));
          
      }
}
      
  sqlsrv_close( $conn ); 
      
      
$correo = $email;
    
$to  = $correo . ', '; // note the comma
$to .= 'registro@blox6.com';

// subject
$subject = 'Confirmacion de Compra a Blox6.com';

// message
$message = '
<html>
<head>
  <title>Confirmacion de Compra a Blox6.com</title>
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
  <p> Confirmacion de Compra</p>
  <p> Tu compra ha sido procesada satisfactoriamente</p>
  <p> Pais: '.$IdPais.'</p>
  <p> Ciudad: '.$IdCiudad.'</p>
   <p> Ubicación: '.$IdUbicacionNombre.'</p>
  <p> Teléfono: '.$IdUbicacionTelefono.'</p>
   <p> Fecha: '.$IdFecha.'</p>
  <p> Hora: '.$IdHora.'</p>
   <p> Sala: '.$IdSala.'</p>
  <p> Película: '.$IdNombrePelicula.'</p>
   <p> Cantidad: '.$IdCantidad.'</p>
  <p> Tipo: '.$tipoEntrada.'</p>
   <p> Nombre en Tarjeta: '.$nombre.'</p>
  <p> Tarjeta: '.$tarjeta.'</p>
  <p> Total en Dólares: '.$total.'</p>
  <p> Gracias por elegir Blox6.com</p>
</div>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To:'.$correo . "\r\n";
$headers .= 'From: Registro Blox6 Cinemas <registro@blox6.com>' . "\r\n";
$headers .= 'Cc: notificacionesregistro@blox6.com' . "\r\n";


// Mail it
mail($to, $subject, $message, $headers);      
      
?>
            
    </div>
<footer class="navbar navbar-default">
     <p class="text-center"><strong>UH @2016 Diseño de Aplicaciones 2do Cuatrimestre 2016 L N</strong></p>
</footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <script src="js/blox6.js"></script>

    </body>
</html>  