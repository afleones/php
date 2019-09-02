<?php
class usuario_controlador
{
  public function index()
  {
    $um = new usuario_modelo();
    $r = $um->listadoUsuario();
    require_once "Vista/usuario/index.php";
  }
  public function __construct(){
    require_once "Modelo/usuario_modelo.php";
  }
  public function  fromLogin()
  {
      require_once "Vista/usuario/fromLogin.php";
  }
  public function fromRUsuario()
  {
    require_once "Vista/usuario/fromRegistro.php";
  }
  public function validar()
  {
      extract($_POST);
      $um = new usuario_modelo();
      $r = $um->validar_usuario($Usuario, $Contrasena);
      if ( is_array ($r)) {
        $_SESSION["nombre"]  =$r["USU_NOMBRE"];
        $_SESSION["apellido"]  =$r["USU_APELLIDO"];
        $_SESSION["rol"] =$r["USU_ROL"];
        header("Location: /APPREGISTRO");
      }
      else {
        echo "Verifique Su Usuario Y Contraseña";
      }
  }
  public function cerrarSession(){
    session_destroy();
    header("Location: /APPREGISTRO");
  }
  public function regUsuario(){
    extract($_REQUEST);
    $um = new usuario_modelo();
    $r = $um-> registroUsuario($nombre,$apellido,$correo,$password);
    if ($r>0) {
      echo "<br /> Usuario Registrado";

    }else {
        echo "<br /> Error Al Momento De Registrarse";
      }
    }

    public function eliminar(){
      if (isset($_GET['id']))
       {
        $id = $_GET['id'];
        $um = new usuario_modelo();
        $r = $um->eliminarUsuario($id);
        if ($r > 0)
         {
          header("Location: ?controlador=usuario&accion=index");
         }
      }
        else
        {
          header("Location: /APPREGISTRO");
        }
      }

    public function frmEditar(){
        if (isset($_GET['id'])) {
          $id = $_GET['id'];
          $um = new usuario_modelo();
          $datos = $um->buscarPorID($id);
          require_once "Vista/usuario/fromEditar.php";
      }else{
          header("Location: /APPREGISTRO");
        }
    }

    public function show(){
      if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $um = new usuario_modelo();
        $datos = $um->buscarPorID($id);
        require_once "Vista/usuario/show.php";
    }else{
        header("Location: /APPREGISTRO");
      }
    }

    public function editarUsuario(){
      if (isset($_POST['id'])) {
          extract($_POST);
          $um = new usuario_modelo();
          $r = $um->editarUsuario($nombre,$apellido,$correo,$id);
          if ($r > 0) {
            echo "<br /> Usuario Editado";
          }
      }else{
        header("Location: /APPREGISTRO");
      }
    }

}
?>
