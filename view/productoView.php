<?php

class productoView

{
  function Index($titulo,$productos,$marcas){
    $smarty = new Smarty();
    $smarty->assign('titulo',$titulo);
    $smarty->assign('productos',$productos);
    $smarty->assign('marcas',$marcas);
    $smarty->assign('BASE_URL',BASE_URL);
    $smarty->display('templates/Store/index.tpl');
  }
  function filtrado($productos){
    $smarty = new Smarty();
    $smarty->assign('BASE_URL',BASE_URL);
    $smarty->assign('productos',$productos);
    $smarty->display('templates/Store/filtrado.tpl');
  }

  function filtradoLogueado($productos){
    $smarty = new Smarty();
    $smarty->assign('BASE_URL',BASE_URL);
    $smarty->assign('productos',$productos);
    $smarty->display('templates/User/filtrado.tpl');
  }

  function mostrarMarcas($titulo,$marcas){
    $smarty = new Smarty();
    $smarty->assign('BASE_URL',BASE_URL);
    $smarty->assign('titulo',$titulo);
    $smarty->assign('marcas',$marcas);
    $smarty->display('templates/Store/marcas.tpl');
  }

  function mostrarMarcasLogueado($titulo,$marcas){
    $smarty = new Smarty();
    $smarty->assign('BASE_URL',BASE_URL);
    $smarty->assign('titulo',$titulo);
    $smarty->assign('marcas',$marcas);
    $smarty->display('templates/User/marcas.tpl');
  }

  function detalleProducto($producto,$marca) {
    $smarty = new Smarty();
    $smarty->assign('BASE_URL',BASE_URL);
    $smarty->assign('producto',$producto);
    $smarty->assign('marca',$marca);
    $smarty->display('templates/Store/detalle.tpl');
  }
  function detalleProductoLogueado($producto,$marca) {
    $smarty = new Smarty();
    $smarty->assign('BASE_URL',BASE_URL);
    $smarty->assign('producto',$producto);
    $smarty->assign('marca',$marca);
    $smarty->display('templates/User/detalle.tpl');
    //$smarty->assign('comentario',$comentario);
    //$smarty->assign('isAdmin',$isAdmin);
  }
}
 ?>
