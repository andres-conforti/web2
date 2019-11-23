<?php
require_once ('./libs/Smarty.class.php');

/**
*
*/
class admView
{
  function Index($titulo,$productos,$marcas,$usuarios){
    $smarty = new Smarty();
    $smarty->assign('titulo',$titulo);
    $smarty->assign('usuarios',$usuarios);
    $smarty->assign('productos',$productos);
    $smarty->assign('marcas',$marcas);
    $smarty->display('templates/Admin/index.tpl');
  }
  function productosFiltrados($titulo,$marcas,$productos,$categoriaFiltrada){
    $smarty = new Smarty();
    $smarty->assign('titulo',$titulo);
    $smarty->assign('productos',$productos);
    $smarty->assign('marcas',$marcas);
    $smarty->assign('categoriaFiltrada', $categoriaFiltrada);
    $smarty->display('templates/Admin/productosFiltrados.tpl');
  }
  function crearProducto($titulo, $marcas){
    $smarty = new Smarty();
    $smarty->assign('titulo',$titulo);
    $smarty->assign('marcas',$marcas);
    $smarty->display('templates/Admin/altaProductos.tpl');
  }
  function crearMarca($titulo, $marcas){
    $smarty = new Smarty();
    $smarty->assign('titulo',$titulo);
    $smarty->assign('marcas',$marcas);
    $smarty->display('templates/Admin/altaMarcas.tpl');
  }
  function marcas($titulo, $marcas){
    $smarty = new Smarty();
    $smarty->assign('titulo',$titulo);
    $smarty->assign('marcas',$marcas);
    $smarty->display('templates/Admin/marcas.tpl');
  }
  function editarProducto($titulo, $marcas, $productos){
    $smarty = new Smarty();
    $smarty->assign('titulo',$titulo);
    $smarty->assign('marcas',$marcas);
    $smarty->assign('productos',$productos);
    $smarty->display('templates/Admin/editarProducto.tpl');
  }
  function editarMarca($titulo, $marcas){
    $smarty = new Smarty();
    $smarty->assign('titulo',$titulo);
    $smarty->assign('marcas',$marcas);
    $smarty->display('templates/Admin/editarMarca.tpl');
  }
  function detalleProducto($titulo, $marcas,$producto){
    $smarty = new Smarty();
    $smarty->assign('titulo',$titulo);
    $smarty->assign('marcas',$marcas);
    $smarty->assign('productos',$producto);
    $smarty->display('templates/Admin/detalleProducto.tpl');
  }
  function filtrado($productos){
    $smarty = new Smarty();
    $smarty->assign('productos',$productos);
    $smarty->display('templates/Admin/filtradoAdmin.tpl');
  }
}

?>
