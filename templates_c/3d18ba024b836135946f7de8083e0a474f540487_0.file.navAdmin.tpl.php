<?php
/* Smarty version 3.1.33, created on 2018-10-19 03:16:58
  from 'C:\xampp\htdocs\web2\templates\Admin\navAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc9308ab5ada6_84201985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d18ba024b836135946f7de8083e0a474f540487' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\Admin\\navAdmin.tpl',
      1 => 1539911637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc9308ab5ada6_84201985 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-light bg-light">
  <ul class="nav navbar-nav">
    <li><a href="/web2/indexAdmin">Home</a></li>
    <li><a href="/web2/marcasAdmin">Marcas</a></li>
    <li><a href="/web2/formAltaProducto">Crear Producto</a></li>
    <li><a href="/web2/formEditarProducto">Editar Producto</a></li>
    <li><a href="/web2/formAltaMarca">Crear Marca</a></li>
    <li><a href="/web2/formEditarMarca">Editar Marca</a></li>
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
