<?php
class ConfigApp{
  public static $ACTION = "action";
  public static $PARAMS = "params";
  public static $ACTIONS = [

    //user//
        '' => 'productoController#index',
        'index' => 'productoController#index',
        'marcas' => 'productoController#mostrarMarcas',
        'login'=> 'signinController#login',
        'verificarLogin' => 'signinController#verificarLogin',
        'logout' => 'signinController#logout',

        'producto' => 'productoController#detalleProducto',
        //'filtrar' => 'productoController#filtrarProductos',
        'filtrado' => 'productoController#detalleMarca',


    //admin//

        //Crear//
        'crearProducto' => 'admController#crearProducto',
        'formAltaProducto' => 'admController#formAltaProducto',
        
        'crearMarca' => 'admController#crearMarca',
        'formAltaMarca' => 'admController#formAltaMarca',

        //Borrar//
        'borrarProducto' => 'admController#borrarProducto',
        'borrarMarca' => 'admController#borrarMarca',

        //Editar//
        'editarProducto'=> 'admController#editarProducto',
        'formEditarProducto' => 'admController#formEditarProducto',
        
        'editarMarca' => 'admController#editarMarca',
        'formEditarMarca' => 'admController#formEditarMarca',
        
        //Revisar//

        'indexAdmin' => 'admController#index',
        'marcasAdmin' => 'admController#marcas',
        'productoAdmin'=>'admController#detalleProducto',
        //'filtrarAdmin' => 'admController#filtrarAdmin',
        'filtradoAdmin' => 'admController#detalleMarca',
        

  ];

}
?>
