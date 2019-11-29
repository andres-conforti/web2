<?php
/* Smarty version 3.1.33, created on 2019-11-29 02:21:16
  from 'C:\TUDAI\xampp\htdocs\web2019\templates\navAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de0728cab40a4_36893877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ee1fc9255edcafa0a9e5de4e484f3d8d9a728a9' => 
    array (
      0 => 'C:\\TUDAI\\xampp\\htdocs\\web2019\\templates\\navAdmin.tpl',
      1 => 1574990473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de0728cab40a4_36893877 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-md navbar-dark bg-dark">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./indexAdmin">HOME</a>
      </li>
    


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MARCAS DE GPU</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo BASE_URL;?>
marcasAdmin">VER MARCAS</a>
          <a class="dropdown-item" href="<?php echo BASE_URL;?>
crearMarca">CREAR MARCA</a>
        </div>
      </li>

	    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PRODUCTOS</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo BASE_URL;?>
indexAdmin">VER PRODUCTOS</a>
          <a class="dropdown-item" href="<?php echo BASE_URL;?>
crearProducto">CREAR PRODUCTO</a>
        </div>
      </li>

</li>
    <li class="nav-item"><a href="<?php echo BASE_URL;?>
editarUsuario" class="nav-link">ADMINISTRAR</a></li>
		<li class="nav-item"><a href="<?php echo BASE_URL;?>
logout" class="nav-link">CERRAR SESION</a></li>

    </ul>

  </div>
</nav><?php }
}
