<?php
  class usuario_modelo
  {
    public function listadoUsuario(){
      $i = new conexion();
      $c = $i->getConexion();
      $sql = "SELECT * FROM t_usuarios";
      $s = $c->prepare($sql);
      $s->execute();
      $datos = $s->fetchall();
      return $datos;
    }
    public function validar_usuario($usuario , $password)
    {
      $i = new conexion();
      $c = $i->getConexion();
      $sql = "SELECT * FROM t_usuarios WHERE USU_CORREO = :usuario AND USU_PASSWORD = :password";
      $s = $c->prepare($sql);
      $r = $s->execute( array( "usuario" => $usuario, "password" => sha1($password)) );
      $r = $s->rowCount();
      if ($r > 0) {
        $datos = $s->fetch();
      }else {
        $datos = 0;
      }
      var_dump($datos);
        return $datos;
    }
      public function registroUsuario($nombre,$apellido,$correo,$password){
        $i = new conexion();
        $c = $i->getConexion();
        $sql = "INSERT INTO t_usuarios (USU_NOMBRE,USU_APELLIDO,USU_CORREO,USU_PASSWORD,USU_ROL) VALUES (:nombre , :apellido , :correo , :password , :rol)";
        $s = $c->prepare($sql);
        $r = $s->execute( array("nombre"=> $nombre, "apellido"=> $apellido, "correo"=>$correo, "password"=>sha1($password),"rol"=>2 ));//md5 , sha1 ,password_hash
        return $r;
      }

      

      public function eliminarUsuario($id){
        $i = new conexion();
        $c = $i->getConexion();
        $sql = "DELETE FROM t_usuarios WHERE USU_ID=".$id;
        $s = $c->prepare($sql);
        $respuesta = $s->execute();
        return $respuesta;
      }

      public function buscarPorID($id){
        $i = new conexion();
        $c = $i->getConexion();
        $sql = "SELECT * FROM t_usuarios WHERE USU_ID =".$id;
        $s = $c->prepare($sql);
        $s->execute();
        $datos = $s->fetch();
        return $datos;
      }

      public function editarUsuario($nombre,$apellido,$correo,$id){
        $i = new conexion();
        $c = $i->getConexion();
        $sql = "UPDATE t_usuarios SET USU_NOMBRE =:n, USU_APELLIDO =:a , USU_CORREO =:c WHERE USU_ID=".$id ;
        $s = $c->prepare($sql);
        $r = $s->execute(array("n"=>$nombre,"a"=>$apellido,"c"=>$correo));
        return $r;
      }
 }// fin de la clase
