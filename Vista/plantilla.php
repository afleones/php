<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>APPREGISTRO</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->
  </head>
  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="/APPREGISTRO">APP REGISTRO</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarCollapse">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item">
             <?php
             if (!isset($_SESSION['nombre'])){
             echo '<a class="nav-link" href="?controlador=usuario&accion=fromLogin">Iniciar Sesion</a>';
             }
              ?>
           </li>
           <li class="nav-item">
             <a class="nav-link disabled" href="?controlador=usuario&accion=index">Usuarios</a>
           </li>
           <li class="nav-item">
             <a class="nav-link disabled" href="?controlador=producto&accion=index">Productos</a>
           </li>
         </ul>
       </div>
       <?php if (isset($_SESSION['nombre'])){
           echo "".$_SESSION['nombre']." ".$_SESSION['apellido'];
           echo " . <a href='?controlador=usuario&accion=cerrarSession'>Cerrar Session</a>";
       }
       ?>
    </nav>
    <!-- El archivo rutas.php Gestionara  -->
    <?php  require_once "rutas.php"; ?>
  </body>
</html>
