<?php
/* Smarty version 3.1.33, created on 2019-10-29 23:30:37
  from 'C:\TUDAI\xampp\htdocs\web2\templates\Admin\altaMarcas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db8bd8d133705_37019805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3d8ac15aaed9547704a7973b25964a4552325c8' => 
    array (
      0 => 'C:\\TUDAI\\xampp\\htdocs\\web2\\templates\\Admin\\altaMarcas.tpl',
      1 => 1572388231,
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
function content_5db8bd8d133705_37019805 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./navAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="formAltaMarca">
        <div class="form-group">
          <label for="nombreMarca">Nombre</label>
          <input type="text" class="form-control" id="nombreMarca" name="nombreMarca">
        </div>
        <div class="form-group">
          <label for="descripcionMarca">Descripcion</label>
          <input type="text" class="form-control" id="descripcionMarca" name="descripcionMarca">
        </div>
        <div class="form-group">
          <label for="imagenMarca">Imagen</label>
          <input value="img/" type="text" class="form-control" id="imagenMarca" name="imagenMarca">
        </div>
        <button type="submit" class="btn btn-primary">Crear Marca</button>
      </form>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
