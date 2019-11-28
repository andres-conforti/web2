<?php

 define("BASE_URL", "http://".$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"]. dirname($_SERVER["PHP_SELF"])."/");
 define("LOGIN" , BASE_URL . "login");
 define("HOMEADMIN" , BASE_URL . "indexAdmin");
 define("HOMELOGUEADO", BASE_URL . "indexLogueado");
 define("MARCASADMIN" , BASE_URL . "marcasAdmin");
 define("MARCAS" , BASE_URL . "marcas");
 define("PRODUCTOADMIN" , BASE_URL . "productoAdmin");
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
