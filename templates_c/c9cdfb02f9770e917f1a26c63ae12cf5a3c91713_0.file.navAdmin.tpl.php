<?php
/* Smarty version 3.1.33, created on 2019-11-10 20:58:46
  from 'C:\TUDAI\xampp\htdocs\web2\templates\Admin\navAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc86bf6f237e7_19433935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9cdfb02f9770e917f1a26c63ae12cf5a3c91713' => 
    array (
      0 => 'C:\\TUDAI\\xampp\\htdocs\\web2\\templates\\Admin\\navAdmin.tpl',
      1 => 1573327905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc86bf6f237e7_19433935 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-md navbar-dark bg-dark">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./indexAdmin">HOME</a>
      </li>
    


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MARCAS DE GPU</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="./marcasAdmin">VER MARCAS</a>
          <a class="dropdown-item" href="./crearMarca">CREAR MARCA</a>
        </div>
      </li>

	    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PRODUCTOS</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="./indexAdmin">VER PRODUCTOS</a>
          <a class="dropdown-item" href="./crearProducto">CREAR PRODUCTO</a>
        </div>
      </li>

</li>
		<li class="nav-item"><a href="./logout" class="nav-link">CERRAR SESION</a></li>

    </ul>

  </div>
</nav><?php }
}
