<?php
class ConfigApp{
  public static $ACTION = "action";
  public static $PARAMS = "params";
  public static $ACTIONS = [

    //guest//
        '' => 'productoController#index',
        'index' => 'productoController#index',
        'marcas' => 'productoController#mostrarMarcas',
        'login'=> 'signinController#login',
        'verificarLogin' => 'signinController#verificarLogin',
        'logout' => 'signinController#logout',
        'producto' => 'productoController#detalleProducto',
        'filtrado' => 'productoController#detalleMarca',
    
    //user//
        'indexLogueado' => 'admController#indexLogueado',
        'marcasLogueado' => 'productoController#mostrarMarcasLogueado',
        // usar el de abajo y crearlo 'filtrarLogueado' => 'productoController#filtrarProductosLogueado',
        'filtradoLogueado' => 'productoController#detalleMarcaLogueado',
        'detalleLogueado' => 'productoController#detalleProductoLogueado',

    //admin//
        'editarUsuario' => 'admController#setUsers',
        'modificarUser' => 'admController#modificarUser',
        'eliminarUser' => 'admController#eliminarUser',
        'InsertUsuario' => 'usersController#InsertUsuario',
        

        //Crear//
        'crearProducto' => 'admController#crearProducto',
        'formAltaProducto' => 'admController#formAltaProducto',
        
        'crearMarca' => 'admController#crearMarca',
        'formAltaMarca' => 'admController#formAltaMarca',

        //Borrar//
        'borrarProducto' => 'admController#borrarProducto',
        'borrarMarca' => 'admController#borrarMarca',
        'borrarImagen' => 'admController#borrarImagen',
        'getImage' => 'admController#getImage',
        

        //Editar//
        'editarProducto'=> 'admController#editarProducto',
        'formEditarProducto' => 'admController#formEditarProducto',
        'cambiarImagen' => 'admController#cambiarImagen',
        
        'editarMarca' => 'admController#editarMarca',
        'formEditarMarca' => 'admController#formEditarMarca',
        
        //Revisar//

        'indexAdmin' => 'admController#index',
        'marcasAdmin' => 'admController#marcas',
        'productoAdmin'=>'admController#detalleProducto',
        'filtradoAdmin' => 'admController#detalleMarca',
        


        //--------------//

  ];

}
?>
