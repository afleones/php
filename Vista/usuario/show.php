<div class="row">
  <div class="col-md-4"><br>
    <h1>Usuario <?php echo $datos['USU_NOMBRE']; ?> </h1>
    <div class="">
    __________________________________________________________________________________________________________________________________________________________________________________________________________________________________
    </div><br>
    <label for="">NOMBRE:</label> <?php echo $datos['USU_NOMBRE']; ?><br>
    <label for="">APELLIDO:</label> <?php echo $datos['USU_APELLIDO']; ?><br>
    <label for="">CORREO:</label> <?php echo $datos['USU_CORREO']; ?><br>
    <button class="btn-outline-success btn">  <a class="nav-link" href="?controlador=usuario&accion=index">Ir Usuarios</a></button>
  </div>
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
    </div>
</div>
