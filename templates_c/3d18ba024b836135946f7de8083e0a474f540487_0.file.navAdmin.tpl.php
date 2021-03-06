<?php
/* Smarty version 3.1.33, created on 2019-11-01 19:24:47
  from 'C:\xampp\htdocs\web2\templates\Admin\navAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbc786f152846_35777417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d18ba024b836135946f7de8083e0a474f540487' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\Admin\\navAdmin.tpl',
      1 => 1572547394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbc786f152846_35777417 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-light bg-light">
  <ul class="nav navbar-nav">
    <li><a href="/web2/indexAdmin">HOME</a></li>
    <li><a href="/web2/marcasAdmin">MARCAS</a></li>
    <li><a href="/web2/crearProducto">Crear Producto</a></li>
    <li><a href="/web2/editarProducto">Editar Producto</a></li>
    <li><a href="/web2/crearMarca">Crear Marca</a></li>
    <li><a href="/web2/editarMarca">Editar Marca</a></li>
    <li><a href="/web2/logout">Cerra Sesion</a></li>
  </ul>
  <form class="col-md-2 col-lg-2 form-inline" action="filtrarAdmin" method="POST">
    <select name="filtrarAdmin" class="form-control filter">
      <option value="" selected disabled hidden>Filtrar por marca</option>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
"><?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
</option>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <button class="btn btn-primary btn-sm" type="submit">Filtrar</button>
    </form>
</nav>

<nav class="navbar navbar-default navbar-expand-lg navbar-light">
	
		<ul class="nav navbar-nav">
			<li class="nav-item"><a href="/web2/indexAdmin" class="nav-link">HOME</a></li>			
			<li class="nav-item dropdown">
				<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">MARCAS DE GPU<b class="caret"></b></a>
				<ul class="dropdown-menu">					
					<li><a href="/web2/marcasAdmin" class="dropdown-item">VER MARCAS</a></li>
					<li><a href="/web2/crearMarca" class="dropdown-item">CREAR MARCA</a></li>
					<li><a href="/web2/editarMarca" class="dropdown-item">EDITAR MARCA</a></li>
				</ul>
			</li>
            			<li class="nav-item dropdown">
				<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">PRODUCTOS<b class="caret"></b></a>
				<ul class="dropdown-menu">					
					<li><a href="/web2/crearProducto" class="dropdown-item">CREAR GPU</a></li>
					<li><a href="/web2/editarProducto" class="dropdown-item">EDITAR GPU</a></li>
				</ul>
			</li>
			<li class="nav-item"><a href="/web2/logout" class="nav-link">CERRAR SESION</a></li>
		</ul>

</nav><?php }
}
