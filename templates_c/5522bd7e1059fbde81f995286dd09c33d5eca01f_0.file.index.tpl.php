<?php
/* Smarty version 3.1.33, created on 2019-11-30 01:10:11
  from 'C:\TUDAI\xampp\htdocs\web2019\templates\User\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de1b363f3b512_27403486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5522bd7e1059fbde81f995286dd09c33d5eca01f' => 
    array (
      0 => 'C:\\TUDAI\\xampp\\htdocs\\web2019\\templates\\User\\index.tpl',
      1 => 1574987838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navUser.tpl' => 1,
  ),
),false)) {
function content_5de1b363f3b512_27403486 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navUser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
        <a href="<?php echo PRODUCTOUSER;?>
/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
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
