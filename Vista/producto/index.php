<h1  class="text-center">Listado De Productos</h1> <br>
<?php
      echo "<table class='table'>";
      echo "<tr>";
      echo "<th>NOMBRE</th>";
      echo "<th>DESCRIPCION</th>";
      echo "<th>PRECIO</th>";
      echo "<th>EDITAR</th>";
      echo "<th>ELIMINAR</th>";
      echo "</tr>";
      foreach ($r as $key => $value) {
        echo "<tr>";
        echo "<td><a href='?controlador=producto&accion=show&id=".$value['PRO_ID']."'>".$value['PRO_NOMBRE']."</a></td>";
        echo "<td><a href='?controlador=producto&accion=show&id=".$value['PRO_ID']."'>".$value['PRO_DESCRIPCION']."</a></td>";
        echo "<td><a href='?controlador=producto&accion=show&id=".$value['PRO_ID']."'>".$value['PRO_PRECIO']."</a></td>";
        echo "<td> <a href='?controlador=producto&accion=frmEditar&id=".$value['PRO_ID']."'>EDITAR</a></td>";
        echo "<td> <a href='?controlador=producto&accion=eliminar&id=".$value['PRO_ID']."'>ELIMINAR</a></td>";
        echo "</tr>";
      }
      echo "</table>";
 ?>
 <button class="btn btn-outline-success">  <a class="nav-link" href="?controlador=producto&accion=fromRProducto">Registrar Productos</a> </button>
