<?php
class producto_modelo
{
  public function listadoProducto(){
    $i = new conexion();
    $c = $i->getConexion();
    $sql = "SELECT * FROM t_producto";
    $s = $c->prepare($sql);
    $s->execute();
    $datos = $s->fetchall();
    return $datos;
  }

  function validar_producto($nombre)
  {
    $i = new conexion();
    $c = $i->getConexion();
    $sql = "SELECT * FROM t_producto WHERE PRO_NOMBRE = :nombre";
    $s = $c->prepare($sql);
    $r = $s->execute( array( "nombre" => $nombre) );
    $r = $s->rowCount();
    if ($r > 0) {
      $datos = $s->fetch();
    }else {
      $datos = 0;
    }
    var_dump($datos);
      return $datos;
  }
  public function registroProducto($nombre,$descripcion,$precio){
    $i = new conexion();
    $c = $i->getConexion();
    $sql = "INSERT INTO t_producto (PRO_NOMBRE,PRO_DESCRIPCION,PRO_PRECIO) VALUES (:nombre , :descripcion , :precio)";
    $s = $c->prepare($sql);
    $r = $s->execute( array("nombre"=> $nombre,"descripcion"=> $descripcion,"precio"=>$precio));
    return $r;
  }




  
  public function eliminarProducto($id){
    $i = new conexion();
    $c = $i->getConexion();
    $sql = "DELETE FROM t_producto WHERE PRO_ID=".$id;
    $s = $c->prepare($sql);
    $respuesta = $s->execute();
    return $respuesta;
  }

  public function buscarPorID($id){
    $i = new conexion();
    $c = $i->getConexion();
    $sql = "SELECT * FROM t_producto WHERE PRO_ID =".$id;
    $s = $c->prepare($sql);
    $s->execute();
    $datos = $s->fetch();
    return $datos;
  }

  public function editarpRODUCTO($nombre,$descripcion,$precio,$id){
    $i = new conexion();
    $c = $i->getConexion();
    $sql = "UPDATE t_producto SET PRO_NOMBRE =:n, PRO_DESCRIPCION =:d , PRO_PRECIO =:p WHERE PRO_ID=".$id ;
    $s = $c->prepare($sql);
    $r = $s->execute(array("n"=>$nombre,"d"=>$descripcion,"p"=>$precio));
    return $r;
  }
}
