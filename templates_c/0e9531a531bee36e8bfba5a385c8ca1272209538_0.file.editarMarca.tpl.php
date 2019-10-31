<?php
/* Smarty version 3.1.33, created on 2018-10-19 03:17:07
  from 'C:\xampp\htdocs\web2\templates\Admin\editarMarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc930936d8c67_22030888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e9531a531bee36e8bfba5a385c8ca1272209538' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\Admin\\editarMarca.tpl',
      1 => 1539911637,
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
function content_5bc930936d8c67_22030888 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./navAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="editarMarca">
        <select name="id_marca" class="form-control filter">
          <option value="id_marca" selected disabled hidden>Filtrar por Marca</option>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
" name="marca" id= "id_marca" for="id_marca"><?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
</option>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <div class="form-group">
          <label for="nombreMarca">Nuevo Nombre Marca </label>
          <input type="text" class="form-control" id="nombreMarca" name="nombreMarca">
        </div>
        <div class="form-group">
          <label for="descripcionMarca">Descripcion</label>
          <input type="text" class="form-control" id="descripcionMarca" name="descripcionMarca">
        </div>
        <button type="submit" class="btn btn-primary">Editar Marca</button>
      </form>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
