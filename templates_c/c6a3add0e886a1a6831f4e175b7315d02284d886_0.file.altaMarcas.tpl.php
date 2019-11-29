<?php
/* Smarty version 3.1.33, created on 2019-11-29 02:47:57
  from 'C:\TUDAI\xampp\htdocs\web2019\templates\Admin\altaMarcas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de078cd245993_56513842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6a3add0e886a1a6831f4e175b7315d02284d886' => 
    array (
      0 => 'C:\\TUDAI\\xampp\\htdocs\\web2019\\templates\\Admin\\altaMarcas.tpl',
      1 => 1574717852,
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
function content_5de078cd245993_56513842 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
  <h1>CREAR MARCA DE GPU:</h1>
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
