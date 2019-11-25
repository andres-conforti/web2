<?php
/* Smarty version 3.1.33, created on 2019-11-25 22:02:13
  from 'C:\TUDAI\xampp\htdocs\web2\templates\Store\marcas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddc41557d25d3_65818813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7aa7c8a0c84b5493f45058540d5df0334b50ae8b' => 
    array (
      0 => 'C:\\TUDAI\\xampp\\htdocs\\web2\\templates\\Store\\marcas.tpl',
      1 => 1574370784,
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
function content_5ddc41557d25d3_65818813 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<div class="container">

    <hr class="style14">
    <br>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
?>
    <div class="row">

        <div class="col-md-offset-2 col-md-3"><img src="<?php echo $_smarty_tpl->tpl_vars['marca']->value['imagen'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
"></div>

        <div class="col-md-5">
            <h3><?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
</h3>
            <p><?php echo $_smarty_tpl->tpl_vars['marca']->value['descripcion'];?>
</p>
        <a href="filtrado/<?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
"><span aria-hidden="true"><button type="submit" class="btn btn-primary btn-block">Ver Productos</button></span></a>
        </div>
    </div>
    <br>
    <hr class="style14">
    <br>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
