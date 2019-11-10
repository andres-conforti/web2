<?php
/* Smarty version 3.1.33, created on 2019-11-10 21:20:10
  from 'C:\TUDAI\xampp\htdocs\web2\templates\Admin\editarProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc870fa3f7e15_67870414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a8dd39c4e931ba80905e2cecf9f6410780ea558' => 
    array (
      0 => 'C:\\TUDAI\\xampp\\htdocs\\web2\\templates\\Admin\\editarProducto.tpl',
      1 => 1572644259,
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
function content_5dc870fa3f7e15_67870414 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./navAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<div class="container">
  <h2>Formulario</h2>
  <form method="post" action="formEditarProducto">
    <select name="id_producto" class="form-control filter">
      <option value="id_producto" selected disabled hidden>Filtrar por Producto</option>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
" name="marca" id= "id_producto" for="id_producto"><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
</option>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
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
    <button type="submit" class="btn btn-primary">Editar Producto</button>
  </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
