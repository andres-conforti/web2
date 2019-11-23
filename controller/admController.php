<?php
require_once "controller/sessionController.php";
require_once  "./view/admView.php";
require_once  "./model/usersModel.php";
require_once  "./model/productoModel.php";
require_once  "./model/marcaModel.php";
/**
*
*/
class admController extends sessionController
{
  function __construct()
  {
    parent::__construct();
    
    $this->view = new admView();
    $this->productoModel = new productoModel();
    $this->marcaModel = new marcaModel();
    $this->usuarioModel = new usersModel();
    $this->titulo = "HARDWARE DE PC";
  }
  function index(){
    $usuarios = $this->usuarioModel->GetUsuarios();
    $productos = $this->productoModel->GetProductos();
    $marcas = $this->marcaModel->GetMarcas();
    $this->view->Index($this->titulo,$productos,$marcas,$usuarios);
  }
  function borrarProducto($params) {
    $idProducto = $params[0];
    $this->productoModel->borrarProducto($idProducto);
    header('Location: '.HOMEADMIN);
  }
  function borrarMarca($params) {
    $idMarca = $params[0];
    $this->marcaModel->borrarMarca($idMarca);
    header('Location: '.MARCASADMIN);
  }
  function formAltaProducto(){
    $nombreProducto = $_POST["nombreProducto"];
    $descripcion = $_POST["descripcionProducto"];
    $precio = $_POST["precio"];
    $marca = $_POST["marca"];
    $imagen = $_POST["imagen"];
    if ($nombreProducto!="" && $descripcion!="" && $precio!="" && $marca!="" && $imagen!="") {
      $this->productoModel->altaProducto($nombreProducto,$descripcion, $precio, $marca, $imagen);
      header('Location: '.HOMEADMIN);
    }else{
      echo "error";
    }
  }

  function crearProducto(){
    $marcas = $this->marcaModel->GetMarcas();
    $this->view->crearProducto($this->titulo,$marcas);
  }

  function formAltaMarca(){
    $nombreMarca = $_POST["nombreMarca"];
    $descripcion = $_POST["descripcionMarca"];
    $imagen = $_POST["imagenMarca"];
    if ($nombreMarca!="" && $descripcion!="" && $imagen!="") {
      $this->marcaModel->altaMarca($nombreMarca,$descripcion,$imagen);
      header('Location: '.MARCASADMIN);
    }else{
      echo "error";
    }
  }
  function crearMarca(){
    $marcas = $this->marcaModel->GetMarcas();
    $this->view->crearMarca($this->titulo,$marcas);
  }
  function filtrarAdmin(){
    if (isset($_POST['filtrarAdmin'])) {
      $categoriaFiltrada = $_POST['filtrarAdmin'];
      $productos = $this->productoModel->GetProductos();
      $marcas = $this->marcaModel->GetMarcas();
      $this->view->productosFiltrados($this->titulo,$marcas,$productos,$categoriaFiltrada);
    }else {
      header('Location: '.HOME);
    }
  }
  function marcas(){
    $marcas = $this->marcaModel->GetMarcas();
    $this->view-> marcas($this->titulo,$marcas);
  }

  function formEditarProducto(){
    $id_producto = $_POST["id_producto"];
    $nombreProducto = $_POST["nombreProducto"];
    $descripcion = $_POST["descripcionProducto"];
    $precio = $_POST["precio"];
    $marca = $_POST["marca"];
    $imagen = $_POST["imagen"];
    if ($nombreProducto!="" && $descripcion!="" && $precio!="" && $marca!="" && $imagen!="" && $id_producto!="") {
      $this->productoModel->formEditarProducto($nombreProducto,$descripcion, $precio, $marca, $imagen, $id_producto);
      header('Location: '.HOMEADMIN);
    }else{
      echo "error";
    }
  }

  function editarProducto(){
    $marcas = $this->marcaModel->GetMarcas();
    $productos = $this->productoModel->GetProductos();
    $this->view-> editarProducto($this->titulo, $marcas, $productos);
  }


  function formEditarMarca(){
    $nombreMarca = $_POST["nombreMarca"];
    $descripcion = $_POST["descripcionMarca"];
    $imagen = $_POST["imagenMarca"];
    $id_marca = $_POST["id_marca"];
    if ($nombreMarca!="" && $descripcion!="" && $imagen!="" && $id_marca!="") {
      $this->marcaModel->editarMarca($nombreMarca,$descripcion,$imagen,$id_marca);
      header('Location: '.MARCASADMIN);
    }else{
      echo "error";
    }
  }

  function editarMarca(){
    $marcas = $this->marcaModel->GetMarcas();
    $this->view-> editarMarca($this->titulo, $marcas);
  }

  function detalleProducto($params){
    $marcas = $this->marcaModel->GetMarcas();
    $id_producto = $params[0];
    $producto = $this->productoModel->GetProducto($id_producto);
    $this->view->detalleProducto($this->titulo,$marcas,$producto);
  }

  public function detalleMarca($params){
    $id_marca = $params[0];
    $producto = $this->model->GetProductoFiltrado($id_marca);
    //echo "<pre>".print_r($producto,TRUE)."</pre>";
    $this->view->filtrado($producto);
  }
  
}

?>
