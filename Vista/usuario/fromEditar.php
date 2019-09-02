<div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
    <form class="form-group" action="?controlador=usuario&accion=editarUsuario" method="post">
    <h1 class="text-center" >Usuario <?php echo $datos['USU_NOMBRE']; ?> </h1>
    Nombre <input type="text" name="nombre" value="<?php echo $datos['USU_NOMBRE']; ?>" class="form-control"> <br />
    Apellido <input type="text" name="apellido" value="<?php echo $datos['USU_APELLIDO']; ?>" class="form-control"> <br />
    Correo <input type="text" name="correo" value="<?php echo $datos['USU_CORREO']; ?>" class="form-control"> <br />
    <input type="hidden" name="id" value="<?php echo $datos['USU_ID']; ?>">
    <button class="btn btn-outline-success center">ACTUALIZAR USUARIO</button>
    </form>
  </div>
  <div class="col-md-4">
  </div>
</div>
