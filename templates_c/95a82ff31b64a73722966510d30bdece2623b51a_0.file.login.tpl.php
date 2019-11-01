<?php
/* Smarty version 3.1.33, created on 2019-11-01 19:24:35
  from 'C:\xampp\htdocs\web2\templates\Login\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbc786360ad77_16090886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95a82ff31b64a73722966510d30bdece2623b51a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\Login\\login.tpl',
      1 => 1572547394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:./loginNav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dbc786360ad77_16090886 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./loginNav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   
<div class="login-form">

    <form method="post" action="verificarLogin">
              
        <div class="form-group">
            <label for="exampleInputPassword1">Usuario</label> 
            <input type="input" class="form-control" name="usuario" id="usuario" aria-describedby="usuario" placeholder="Usuario">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="********">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </div>      
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
