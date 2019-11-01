<?php
/* Smarty version 3.1.33, created on 2019-11-01 19:24:32
  from 'C:\xampp\htdocs\web2\templates\Store\marcas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbc78605df339_96553629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '600c544fb31c35a8f1421126b0188541f5450794' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\Store\\marcas.tpl',
      1 => 1572547394,
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
function content_5dbc78605df339_96553629 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<div class="container">
<h2>MARCAS DE GPU: </h2>
    <br>
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
        <a href="#" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
" role="button" >VER PRODUCTOS</a>
        
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
?>

<?php }
}
