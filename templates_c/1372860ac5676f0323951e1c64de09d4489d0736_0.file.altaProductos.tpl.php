<?php
/* Smarty version 3.1.33, created on 2019-10-29 23:16:52
  from 'C:\TUDAI\xampp\htdocs\web2\templates\Admin\altaProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db8ba548c3f87_88582553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1372860ac5676f0323951e1c64de09d4489d0736' => 
    array (
      0 => 'C:\\TUDAI\\xampp\\htdocs\\web2\\templates\\Admin\\altaProductos.tpl',
      1 => 1572387409,
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
function content_5db8ba548c3f87_88582553 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./navAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="formAltaProducto">
        <div class="form-group">
          <label for="nombreProducto">Nombre</label>
          <input type="text" class="form-control" id="nombreProducto" name="nombreProducto">
        </div>
        <div class="form-group">
          <label for="descripcionProducto">Descripcion</label>
          <input type="text" class="form-control" id="descripcionProducto" name="descripcionProducto">
        </div>
        <div class="form-group">
          <label for="precio">Precio</label>
          <input type="text" class="form-control" id="precio" name="precio">
        </div>
        <div class="form-group">
          <label for="marca">Marca</label>
          <select name="marca" class="form-control filter">
            <option value="marca" selected disabled hidden>Filtrar por marca</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
" name="marca" id= "marca" for="marca"><?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </select>
        </div>
        <div class="form-group">
          <label for="imagen">Imagen</label>
          <input value="img/" type="text" class="form-control" id="imagen" name="imagen">
        </div>
        <button type="submit" class="btn btn-primary">Crear Producto</button>
      </form>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
