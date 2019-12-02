<?php
/* Smarty version 3.1.33, created on 2019-12-02 01:51:56
  from 'C:\TUDAI\xampp\htdocs\web2019\templates\Admin\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de4602cc53610_75321955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ae3359b867d0a642e0bed34a55953e4847bca44' => 
    array (
      0 => 'C:\\TUDAI\\xampp\\htdocs\\web2019\\templates\\Admin\\index.tpl',
      1 => 1575166609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navAdmin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5de4602cc53610_75321955 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid producto">
  <hr class="style14">
  <br>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
  <div class="row justify-content-lg-center">
    <div class="col-md-5 col-lg-5">
      <ul class="producto">
        <a href="<?php echo BASE_URL;?>
productoAdmin/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
" class="link"></a>
        <li class="list-group-item">
          <h3><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
 - $<?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
<h3>

        </li>

        <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['producto']->value['descripcion'];?>
</li>

      </ul>
      <div class="offset-1 col justify-content-lg-center">

        <a href="<?php echo BASE_URL;?>
editarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
"><button type="button"
            class="btn btn-warning btn-sm">EDITAR</button></a>
        <a href="<?php echo BASE_URL;?>
borrarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
"><button type="button"
            class="btn btn-danger btn-sm">ELIMINAR</button></a>


      </div>
    </div>

    <img src="<?php echo $_smarty_tpl->tpl_vars['producto']->value['imagen'];?>
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
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
