<?php
/* Smarty version 3.1.33, created on 2019-11-23 18:53:03
  from 'C:\TUDAI\xampp\htdocs\web2\templates\Store\detalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd971ffa5eba3_64208575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5e3024579b06fe5e5e3737eab14a8d29acb9eb2' => 
    array (
      0 => 'C:\\TUDAI\\xampp\\htdocs\\web2\\templates\\Store\\detalle.tpl',
      1 => 1574388460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:./navbarDetail.tpl' => 1,
    'file:fix.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dd971ffa5eba3_64208575 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./navbarDetail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:fix.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<br>
<div class="container-fluid producto">
  <div class="row justify-content-md-center">
    <div class="col-md-5 col-lg-5">


      <ul class="producto">

        <li class="list-group-item">
          <h3><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
 - $<?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
 - <?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
<h3>
        </li>
        <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['producto']->value['descripcion'];?>
</li>
      </ul>
    </div>
    <img src="../<?php echo $_smarty_tpl->tpl_vars['producto']->value['imagen'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
">
  </div>
  <br>
  <br>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
