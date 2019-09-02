<div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
    <form class="form-group" action="?controlador=producto&accion=editarProducto" method="post">
    <h1 class="text-center" >Producto <?php echo $datos['PRO_NOMBRE']; ?> </h1>
    Nombre <input type="text" name="nombre" value="<?php echo $datos['PRO_NOMBRE']; ?>" class="form-control"> <br />
    Descripcion <input type="text" name="descripcion" value="<?php echo $datos['PRO_DESCRIPCION']; ?>" class="form-control"> <br />
    Precio <input type="number" name="precio" value="<?php echo $datos['PRO_PRECIO']; ?>" class="form-control"> <br />
    <input type="hidden" name="id" value="<?php echo $datos['PRO_ID']; ?>">
    <button class="btn btn-outline-success">Actualizar Producto</button>
    </form>
  </div>
  <div class="col-md-4">
  </div>
</div>
