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
    <li><a href="reportes.php">Reportes</a></li>
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
   <form class="form-horizontal" role="form"  action="ordenprocesada.php" method="post">

   <?php 
  $usuario= $_POST["email"]; 
  $claveingresada = $_POST["pwd"];
      
 
      
$serverName = "172.29.185.108"; //serverName\instanceName

$connectionInfo = array( "Database"=>"Sistema_Cine", "UID"=>"sa", "PWD"=>"Password1.");
$conn = sqlsrv_connect( $serverName, $connectionInfo);


if ($conn){
    
    if(($result = sqlsrv_query($conn,"SELECT Email,Password FROM Usuario where Email = '".$usuario."'")) !== false){
       echo' <div class="row">';
        while( $obj = sqlsrv_fetch_object( $result )) {
            
 echo '<div class="col-offset-9 col-md-2">
        <h3>
            <input class="form-control" id="email" style="background-color:chartreuse;" value="'.$obj->Email.'" name="email" readonly></label>
        </h3>
       </div>';			 		 
			//echo $obj->Password;
            $clavesql = $obj->Password;
           // echo $clavesql;
             // echo $claveingresada;
            
            if ( $clavesql <> $claveingresada){
                        echo "Autenticado";
              header('Location: boletos.php');

            }
            
        }
    }
    echo '</div>';
}else{
    die(print_r(sqlsrv_errors(), true));	
}
sqlsrv_close( $conn );      
?>
    <h1>Compra de Boletos</h1> 
    <h2>Sigue los pasos para adquirir tu boleto!!</h2> 

<div class="row">
  <div class="col-md-2"><h4><span class="label label-primary">1: Elija el país</span></h4></div>
  <div class="col-md-2"><h4><span class="label label-primary">2: Elija la ciudad</span></h4></div>
  <div class="col-md-2"><h4><span class="label label-primary">3: Elija el cine</span></h4></div>
  <div class="col-md-3"><h4><span class="label label-primary">4: Elija la Tanda</span></h4></div>
  <div class="col-md-1"><h4><span class="label label-primary">5: Elije Cantidad</span></h4></div>
  <div class="col-md-1"><h4><span class="label label-primary">6: Tipo</span></h4></div>
  <!-- <div class="col-md-1"><h4><span class="label label-primary">6: Fecha</span></h4></div> -->
</div>

<div class="row">
  <div class="col-md-2"><?php include_once "dblistapaises.php"; ?></div>
  <div id="txtHint" class="col-md-2"></div>
  <div id="txtCine" class="col-md-2"></div>
  <div id="txtTandas" class="col-md-3"></div>
  <div id="txtCantidad" class="col-md-1">
  <select name="cantidad" id="cantidad">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
  </select>
  </div>
      <div id="txtTipo" class="col-md-1">
 <select name="tipo" id="tipo" onchange="showTotal()">
      <option value="">Tipo Boleto</option>
      <option value="0">Regular</option>
      <option value="1">VIP</option>
  </select>
  </div>
    
   <!--    <div id="txtFecha" class="col-md-1">
       <input type="date" name="fecha" onchange="showTotal()">
  </div> -->
    
     
  
</div>
      
    <br>
       <br><br>
       <br>
<div class="row">
        <div class="col-md-offset-5 col-md-2">
  <p>Entrada VIP $9 Regular $7</p>
</div> 
      <div class="col-md-offset-7 col-md-1">
  <p>Total $      <input type="text" id="txtTotal" name="total" readonly>
</p>
</div> 
     
      
    </div>   
<h2>Información de Pago</h2>
 
    <div class="form-group">
      <label class="control-label col-sm-2" for="tarjeta">Tarjeta:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="tarjeta" id="tarjeta" placeholder="# Tarjeta" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nombre">Nombre:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre en Tarjeta" required>
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Comprar</button>
      </div>
    </div>
  </form>
</div>
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
    
    <script src="js/blox6.js"></script>

  </body>
</html>  