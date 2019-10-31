<?php
/* Smarty version 3.1.33, created on 2019-10-29 22:34:59
  from 'C:\TUDAI\xampp\htdocs\web2\templates\Admin\navAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db8b083745451_26180535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9cdfb02f9770e917f1a26c63ae12cf5a3c91713' => 
    array (
      0 => 'C:\\TUDAI\\xampp\\htdocs\\web2\\templates\\Admin\\navAdmin.tpl',
      1 => 1572380994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db8b083745451_26180535 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-light bg-light">
  <ul class="nav navbar-nav">
    <li><a href="/web2/indexAdmin">Home</a></li>
    <li><a href="/web2/marcasAdmin">Marcas</a></li>
    <li><a href="/web2/crearProducto">Crear Producto</a></li>
    <li><a href="/web2/editarProducto">Editar Producto</a></li>
    <li><a href="/web2/crearMarca">Crear Marca</a></li>
    <li><a href="/web2/editarMarca">Editar Marca</a></li>
    <li><a href="/web2/logout">Cerra Sesion</a></li>
  </ul>
  <form class="col-md-2 col-lg-2 form-inline"action="filtrarAdmin" method="POST">
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
<?php }
}
