<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">

  <title>Asienta</title>
  <link rel="icon" 
      type="image/png" 
      href="images/favicon.png">
</head>
<body>
<header>
<script src="https://use.fontawesome.com/c276b8a2b3.js"></script>
<div class="nav-sesion text-right" style="padding-right:   15px;">
</div>
<nav class="navbar navbar-default navbar-static-top" >
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand text-light" href="index.php"><img class="logo-nav" src="images/logo.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-left">
        <li class=""><a href="construccion.php">Productos<span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="construccion.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Nosotros <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="construccion.php">Nuestra Historia</a></li>
            <li><a href="construccion.php">Experiencias</a></li>
            <li><a href="preguntas-frecuentes.php">Preguntas frecuentes</a></li>
            <li><a href="construccion.php">¿Cómo realizar una compra?</a></li>
            <li role="separator" class="divider"></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a href="construccion.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="construccion.php">Exteriores</a></li>
            <li><a href="construccion.php">Living</a></li>
            <li><a href="construccion.php">Comedor</a></li>
             <li><a href="construccion.php">Dormitorio</a></li>
              <li><a href="construccion.php">Accesorio</a></li>
          </ul>
        </li>
        </ul>
          <ul class="nav navbar-nav navbar-left">
            <li><a href="contacto.php">Contacto</a></li>
            
          </ul>
        <ul>
          <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Busqueda">
        </div>
        <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
      </form>
      </ul>
    </div><!-- /.navbar-collapse -->
    
  </div><!-- /.container-fluid -->
</nav>
</header>
@yield("principal")








<footer>
          <div class="container">
            <div class="row">
               <div class="p-4 col-md-3">
                  <h4 class="mb-4 text-white">ASIENTA</h4>
                  <p class="text-white">Siempre estamos para vos</p>
               </div>
               <div class="p-4 col-md-3">
                  <h4 class="mb-4 text-white">Sitio</h4>
                  <ul class="list-unstyled">
                     <a href="index.php" class="text-white"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a>
                     <br>
                     <a href="#" class="text-white">Nosotros</a>
                     <br>
                     <a href="#" class="text-white">Nuestros Servicios</a>
                     <br>
                     <a href="#" class="text-white">Historias</a>
                     <br>
                     <a href="preguntas-frecuentes.php" class="text-white">Preguntas fecuentes</a>
                  </ul>
               </div>
               <div class="p-4 col-md-3">
                  <h4 class="mb-4">Contacto</h4>
                  <p>
                     <a href="tel:+246 - 542 550 5462" class="text-white"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+549xxxxxxxxxx</a>
                  </p>
                  <p>
                     <a href="mailto:info@pingendo.com" class="text-white"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>info@asienta.com</a>
                  </p>
                  <p>
                     <a href="https://goo.gl/maps/AUq7b9W7yYJ2" class="text-white" target="blank"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Alguna direccion</a>
                  </p>
               </div>
               <div class="p-4 col-md-3">
                  <h4 class="mb-4 text-light">Suscribite</h4>
                  <form>
                     <fieldset class="form-group text-white"> <label for="exampleInputEmail1">A nuestro newsletter</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> 
                     </fieldset>
                     <button type="submit" class="btn btn-outline-light">Enviar</button>
                  </form>
               </div>
            </div>
          </div>
          <h6 style="color: grey; margin-top: 30px;">Copyright &copy; 2017 {Asienta}</h6>
      </footer>
      
</body>
</html>