<?php
/* Smarty version 3.1.33, created on 2019-12-01 01:26:59
  from 'C:\TUDAI\xampp\htdocs\web2019\templates\Store\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de308d3a04385_17964135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a048ae8de0b4351f667e561a306ec1c79529079' => 
    array (
      0 => 'C:\\TUDAI\\xampp\\htdocs\\web2019\\templates\\Store\\index.tpl',
      1 => 1574985221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5de308d3a04385_17964135 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<br>
<div class="container-fluid producto">
  <hr class="style14">
  <br>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
  <div class="row justify-content-md-center">
    <div class="col-md-5 col-lg-5">


      <ul class="producto">
        <a href="producto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
" class="link"></a>
        <li class="list-group-item">
          <h3><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
 - $<?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
<h3>
        </li>
        <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['producto']->value['descripcion'];?>
</li>
      </ul>

    </div>

    <img src="<?php echo BASE_URL;
echo $_smarty_tpl->tpl_vars['producto']->value['imagen'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
">
  </div>
    <br>
  <hr class="style14">
  <br>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
