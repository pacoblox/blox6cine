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
<div class="container-container-fluid">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
          
<iframe width="800" height="600" src="https://www.youtube.com/embed/CmRih_VtVAs?autoplay=1">
</iframe>

        
        <div class="carousel-caption">
          <h3>Jason Bourne</h3>
          <p>Bourne is back and you know his name!!</p>
        </div>
      </div>

      <div class="item">
        <img src="movies/nowyouseeme.jpg" alt="NowYouseeMe" width="800" height="600">
        <div class="carousel-caption">
          <h3>Now You See Me 2 </h3>
          <p>Charismatic magician Atlas (Jesse Eisenberg) leads a team of talented illusionists called the Four Horsemen.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="movies/suicidesquad.jpg" alt="Suicide Squad" width="800" height="600">
        <div class="carousel-caption">
          <h3>Suicide Squad</h3>
          <p>The Bad Guys are back!</p>
        </div>
      </div>

      <div class="item">
        <img src="movies/tarzan.jpg" alt="Tarzan" width="800" height="600">
        <div class="carousel-caption">
          <h3>Tarzan</h3>
          <p></p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
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