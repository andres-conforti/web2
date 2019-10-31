<?php
/* Smarty version 3.1.33, created on 2018-10-19 03:15:13
  from 'C:\xampp\htdocs\web2\templates\Store\detalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc930212feb51_65670927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3938cc521076925dc2430541c96934110f504d27' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\Store\\detalle.tpl',
      1 => 1539911637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:fix.tpl' => 1,
    'file:./navbarDetail.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc930212feb51_65670927 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:fix.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./navbarDetail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<ul class="producto">

  <img src="../<?php echo $_smarty_tpl->tpl_vars['producto']->value['imagen'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
">
  <!-- <?php echo print_r($_smarty_tpl->tpl_vars['producto']->value);?>
 -->
  <nav class="col-md-6 col-lg-6">
    <a href="#" class="link"></a>
    <li class="list-group-item"><h3><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
 - $<?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
 - <?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
<h3></li>
    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['producto']->value['descripcion'];?>
</li>
  </nav>
</ul>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
