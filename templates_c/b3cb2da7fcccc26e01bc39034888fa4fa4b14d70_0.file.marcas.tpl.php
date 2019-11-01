<?php
/* Smarty version 3.1.33, created on 2019-11-01 19:24:57
  from 'C:\xampp\htdocs\web2\templates\Admin\marcas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbc7879aea046_60612346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3cb2da7fcccc26e01bc39034888fa4fa4b14d70' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\Admin\\marcas.tpl',
      1 => 1572547394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:./navAdmin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dbc7879aea046_60612346 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./navAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2>Marcas : </h2>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
?>
<ul>
    <img src="<?php echo $_smarty_tpl->tpl_vars['marca']->value['imagen'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
">
<nav class="col-md-6">
  <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
</li>
    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['marca']->value['descripcion'];?>
</li>
    <a href="borrarMarca/<?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Eliminar</a>
  </nav>
  </ul>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
