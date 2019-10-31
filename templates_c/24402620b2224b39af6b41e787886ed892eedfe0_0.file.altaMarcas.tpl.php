<?php
/* Smarty version 3.1.33, created on 2018-10-19 03:17:03
  from 'C:\xampp\htdocs\web2\templates\Admin\altaMarcas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc9308fb7d295_86963594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24402620b2224b39af6b41e787886ed892eedfe0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\Admin\\altaMarcas.tpl',
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
function content_5bc9308fb7d295_86963594 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./navAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="crearMarca">
        <div class="form-group">
          <label for="nombreMarca">Nombre</label>
          <input type="text" class="form-control" id="nombreMarca" name="nombreMarca">
        </div>
        <div class="form-group">
          <label for="descripcionMarca">Descripcion</label>
          <input type="text" class="form-control" id="descripcionMarca" name="descripcionMarca">
        </div>
        <button type="submit" class="btn btn-primary">Crear Marca</button>
      </form>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
