<?php
  class producto_controlador
  {
    public function index()
    {
      $um = new producto_modelo();
      $r = $um->listadoProducto();
      require_once "Vista/producto/index.php";
    }
    function __construct()
    {
      require_once "Modelo/producto_modelo.php";
    }
    public function fromRProducto()
    {
      require_once "Vista/producto/fromRProducto.php";
    }

    public function regProducto(){
      extract($_REQUEST);
      $um = new producto_modelo();
      $r = $um-> registroProducto($nombre,$descripcion,$precio);
      if ($r>0) {
        echo "<br /> Producto Registrado";
      }else {
          echo "<br /> Error Al Momento De Registrar El Producto";
        }
      }


      public function eliminar(){
        if (isset($_GET['id']))
         {
          $id = $_GET['id'];
          $um = new producto_modelo();
          $r = $um->eliminarProducto($id);
          if ($r > 0)
           {
            header("Location: ?controlador=producto&accion=index");
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
            $um = new producto_modelo();
            $datos = $um->buscarPorID($id);
            require_once "Vista/producto/fromEProducto.php";
        }else{
            header("Location: /APPREGISTRO");
          }
      }
      public function show(){
        if (isset($_GET['id'])) {
          $id = $_GET['id'];
          $um = new producto_modelo();
          $datos = $um->buscarPorID($id);
          require_once "Vista/producto/show.php";
      }else{
          header("Location: /APPREGISTRO");
        }
      }

      public function editarProducto(){
        if (isset($_POST['id'])) {
            extract($_POST);
            $um = new producto_modelo();
            $r = $um->editarProducto($nombre,$descripcion,$precio,$id);
            if ($r > 0) {
              echo "<br /> Producto Editado";
            }
        }else{
          header("Location: /APPREGISTRO");
        }
      }

  }
?>
