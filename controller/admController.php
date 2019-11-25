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

    if (!empty($nombreProducto) && !empty($descripcion) && !empty($precio) && !empty($marca)) {
        if($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" 
            || $_FILES['input_name']['type'] == "image/png" ) {
              $this->productoModel->altaProducto($nombreProducto, $descripcion, $precio, $marca, $_FILES['input_name']['tmp_name']);
              header('Location: '.HOMEADMIN);
        }
        else {
          $this->productoModel->altaProducto($nombreProducto, $descripcion, $precio, $marca);
          header('Location: '.HOMEADMIN);
        }
    }
    else
    echo "error";
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

    if (!empty($nombreProducto) && !empty($descripcion) && !empty($precio) && !empty($marca)) {
      if($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" 
          || $_FILES['input_name']['type'] == "image/png" ) {
            $this->productoModel->formEditarProducto($nombreProducto, $descripcion, $precio, $marca, $_FILES['input_name']['tmp_name']);
            header('Location: '.HOMEADMIN);
      }
      else {
        $this->productoModel->formEditarProducto($nombreProducto, $descripcion, $precio, $marca);
        header('Location: '.HOMEADMIN);
      }
  }
  else
  echo "error";
  }


      //* EDITAR PRODUCTOS *//
      
  public function editarProducto($params){
    $id_producto = $params[0];
    $producto = $this->productoModel->GetProducto($id_producto);
    $marcas = $this->marcaModel->GetMarcas();
    $this->view->editarProducto($producto,$marcas);
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
    $producto = $this->productoModel->GetProductoFiltrado($id_marca);
    //echo "<pre>".print_r($producto,TRUE)."</pre>";
    $this->view->filtrado($producto);
  }

  
  function borrarImagen($params){
    $idProducto = $params[0];
    $imagen = $params[1];
    $this->productoModel->borrarImagen($idProducto);
    header('Location: '.PRODUCTOADMIN.'/'.$idProducto);
  }

  function cambiarImagen($params){
    $idProducto = $params[0];
    $newImg = $_FILES['input_name']['tmp_name'];
    $this->productoModel->cambiarImagen($idProducto,$img,$newImg);
    header('Location: '.DETALLEADMIN.'/'.$idProducto);
  }

}

?>
