<?php
/* Smarty version 3.1.33, created on 2019-10-29 22:34:47
  from 'C:\TUDAI\xampp\htdocs\web2\templates\Store\productosFiltrados.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db8b07745b474_00144971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8e387e563bba77e19e6ce256dc31b0797086cfb' => 
    array (
      0 => 'C:\\TUDAI\\xampp\\htdocs\\web2\\templates\\Store\\productosFiltrados.tpl',
      1 => 1572380382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:./navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5db8b07745b474_00144971 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2>Productos Filtrados: </h2>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
if ($_smarty_tpl->tpl_vars['producto']->value['id_marca'] == $_smarty_tpl->tpl_vars['categoriaFiltrada']->value) {?>
<div class="row producto">
      <ul>
        <img src="<?php echo $_smarty_tpl->tpl_vars['producto']->value['imagen'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
">
      <nav class="col-md-6 col-lg-6">
        <a href="producto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
" class="link"></a>
        <li class="list-group-item"><h3><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
 - $<?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
</h3></li>
        <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['producto']->value['descripcion'];?>
</li>
          </nav>
        </ul>
  </div>
  <?php }?>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
