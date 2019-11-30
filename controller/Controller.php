<?php

 define("BASE_URL", "http://".$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"]. dirname($_SERVER["PHP_SELF"])."/");
 define("LOGIN" , BASE_URL . "login");
 define("MARCAS" , BASE_URL . "marcas");


 define("HOMEUSER", BASE_URL . "indexLogueado");
 define("PRODUCTOUSER" , BASE_URL . "detalleLogueado");
 define("MARCASUSER" , BASE_URL . "marcasLogueado");
 

 define("HOMEADMIN" , BASE_URL . "indexAdmin");
 define("MARCASADMIN" , BASE_URL . "marcasAdmin");
 define("PRODUCTOADMIN" , BASE_URL . "productoAdmin");
 define("ADMINISTRAR" , BASE_URL . "editarUsuario");

 define("PRODUCTO" , BASE_URL . "producto");
 define("IMAGEN" , BASE_URL . "img");
 define("TEMPLATES" , BASE_URL . "templates");


class Controller
{
  protected $view;
  protected $productoModel;
  protected $productoView;
  protected $marcaModel;
  protected $titulo;
  protected $usuarioModel;
  protected $model;  
}

 ?>
