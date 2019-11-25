<?php
require_once ('./libs/Smarty.class.php');
/**
 *
 */
class usersView
{
  function Mostrar($Titulo, $Usuarios){
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $smarty->assign('Usuarios',$Usuarios);
    $smarty->assign('BASE_URL',BASE_URL);
    //$smarty->debugging = true;
    $smarty->display('templates/MostrarUsuarios.tpl');
  }

    function Header(){
      $smarty = new Smarty();
      $smarty->assign('BASE_URL',BASE_URL);
      $smarty->display('templates/header.tpl');
  }
}

 ?>
