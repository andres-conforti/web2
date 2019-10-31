<?php
/* Smarty version 3.1.33, created on 2018-10-19 03:15:20
  from 'C:\xampp\htdocs\web2\templates\Store\marcas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc9302846ccf1_10981254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '600c544fb31c35a8f1421126b0188541f5450794' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\Store\\marcas.tpl',
      1 => 1539911637,
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
function content_5bc9302846ccf1_10981254 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2>Marcas : </h2>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
?>
<ul class="producto">
  <img src="<?php echo $_smarty_tpl->tpl_vars['marca']->value['imagen'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
">
<nav class="col-md-6 col-lg-6 inline">
  <a href="#" class="link"></a>
  <li class="list-group-item"><h3><?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
<h3></li>
  <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['marca']->value['descripcion'];?>
</li>
  </nav>
  </ul>


<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
