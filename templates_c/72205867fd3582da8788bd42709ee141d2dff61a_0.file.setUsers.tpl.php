<?php
/* Smarty version 3.1.33, created on 2019-11-30 01:16:45
  from 'C:\TUDAI\xampp\htdocs\web2019\templates\Admin\setUsers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de1b4ed81e578_57870950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72205867fd3582da8788bd42709ee141d2dff61a' => 
    array (
      0 => 'C:\\TUDAI\\xampp\\htdocs\\web2019\\templates\\Admin\\setUsers.tpl',
      1 => 1575072892,
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
function content_5de1b4ed81e578_57870950 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid producto">
  <br>
  <h1 class="text-center">ADMINISTRAR USUARIOS:</h1>
  <br>
  <div class="row justify-content-lg-center">



            <div class="col-lg-3">

      <form method="post" action="modificarUser">
      <h4>Lista de usuarios:</h4>
        <select name="user" class="form-control filter">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
?>
          <?php if ($_smarty_tpl->tpl_vars['usuario']->value['isAdmin'] == "1") {?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
" name="user" for="user"> <?php echo $_smarty_tpl->tpl_vars['usuario']->value['username'];?>
 - ADMINISTRADOR</option>
          <?php } else { ?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
" name="user" for="user"> <?php echo $_smarty_tpl->tpl_vars['usuario']->value['username'];?>
 - USUARIO</option>
          <?php }?>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <br>
        <button type="submit" class="btn btn-success btn-block">DAR/QUITAR ADMIN</button>
      </form>

    </div>


        <div class="offset-lg-1 col-lg-3">
      <form method="post" action="eliminarUser">
      <h4>Lista de usuarios:</h4>
        <select name="user" class="form-control filter">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
?>
          <?php if ($_smarty_tpl->tpl_vars['usuario']->value['isAdmin'] == "1") {?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
" name="user" for="user"> <?php echo $_smarty_tpl->tpl_vars['usuario']->value['username'];?>
 - ADMINISTRADOR</option>
          <?php } else { ?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
" name="user" for="user"> <?php echo $_smarty_tpl->tpl_vars['usuario']->value['username'];?>
 - USUARIO</option>
          <?php }?>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <br>
        <div class="form-group">
          <button type="submit" class="btn btn-danger btn-block">ELIMINAR USUARIO</button>
        </div>
      </form>
    </div>
    
  </div>
</div>






<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
