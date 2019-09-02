<h1  class="text-center">Listado De Usuarios</h1> <br> <br>
<?php
if (isset($_SESSION['nombre'])) {
    if ($_SESSION['rol'] ==1) {
      echo "<table class='table'>";
      echo "<tr>";
      echo "<th>NOMBRE</th>";
      echo "<th>APELLIDO</th>";
      echo "<th>CORREO</th>";
      echo "<th>EDITAR</th>";
      echo "<th>ELIMINAR</th>";
      echo "</tr>";
      foreach ($r as $key => $value) {
        echo "<tr>";
        echo "<td> <a href='?controlador=usuario&accion=show&id=".$value['USU_ID']."'>".$value['USU_NOMBRE']."</a></td>";
        echo "<td> <a href='?controlador=usuario&accion=show&id=".$value['USU_ID']."'>".$value['USU_APELLIDO']."</a></td>";
        echo "<td> <a href='?controlador=usuario&accion=show&id=".$value['USU_ID']."'>".$value['USU_CORREO']."</a> </td>";
        echo "<td> <a href='?controlador=usuario&accion=frmEditar&id=".$value['USU_ID']."'>EDITAR</a></td>";
        echo "<td> <a href='?controlador=usuario&accion=eliminar&id=".$value['USU_ID']."'>ELIMINAR</a></td>";
        echo "</tr>";
        }
        echo "</table>";
  }
}
 ?>
<button class="btn btn-outline-success"> <a class="nav-link" href="?controlador=usuario&accion=fromRUsuario">Registrar Usuarios</a></button>
