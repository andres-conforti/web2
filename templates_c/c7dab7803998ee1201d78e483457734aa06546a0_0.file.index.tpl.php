<?php
/* Smarty version 3.1.33, created on 2019-10-29 22:18:16
  from 'C:\TUDAI\xampp\htdocs\web2\templates\Store\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db8ac9872bd97_11223187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7dab7803998ee1201d78e483457734aa06546a0' => 
    array (
      0 => 'C:\\TUDAI\\xampp\\htdocs\\web2\\templates\\Store\\index.tpl',
      1 => 1572380325,
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
function content_5db8ac9872bd97_11223187 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2>PLACAS DE VIDEO: </h2>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
<ul class="producto">

  <img src="<?php echo $_smarty_tpl->tpl_vars['producto']->value['imagen'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
">
  <!-- <?php echo print_r($_smarty_tpl->tpl_vars['producto']->value);?>
 -->
  <nav class="col-md-6 col-lg-6">
    <a href="producto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
" class="link"></a>
    <li class="list-group-item"><h3><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
 - $<?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
<h3></li>
    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['producto']->value['descripcion'];?>
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
