<?php
require_once  "./view/productoView.php";
require_once  "./model/productoModel.php";
require_once  "./model/marcaModel.php";

class productoController extends Controller
{

  function __construct()
  {
    $this->view = new productoView();
    $this->model = new productoModel();
    $this->marcaModel = new marcaModel();
    $this->titulo = "HARDWARE DE PC";
  }

  function Index(){
    $productos = $this->model->GetProductos();
    $marcas = $this->marcaModel->GetMarcas();
    $this->view->Index($this->titulo,$productos,$marcas);
  }

  function mostrarMarcas(){
    $marcas = $this->marcaModel->GetMarcas();
    $this->view->mostrarMarcas($this->titulo,$marcas);
  }

  public function detalleProducto($params){
    $id_producto = $params[0];
    $producto =$this->model->GetProducto($id_producto);
    $marca=$this->marcaModel->GetMarca($producto);
    //echo "<pre>".print_r($producto,TRUE)."</pre>";
    $this->view->detalleProducto($producto[0],$marca[0]);
  }

  public function detalleMarca($params){
    $id_marca = $params[0];
    $producto = $this->model->GetProductoFiltrado($id_marca);
    //echo "<pre>".print_r($producto,TRUE)."</pre>";
    $this->view->filtrado($producto);
  }
  public function detalleProductoLogueado($params){
    $id_producto = $params[0];
    $producto =$this->model->GetProducto($id_producto);
    $marca=$this->marcaModel->GetMarca($producto);
    $this->view->detalleProductoLogueado($producto[0],$marca[0]);
  }

  public function detalleMarcaLogueado($params){
    $id_marca = $params[0];
    $producto = $this->model->GetProductoFiltrado($id_marca);
    $this->view->filtradoLogueado($producto);
  }
  
  function mostrarMarcasLogueado(){
    $marcas = $this->marcaModel->GetMarcas();
    $this->view->mostrarMarcasLogueado($this->titulo,$marcas);
  }
}
?>
