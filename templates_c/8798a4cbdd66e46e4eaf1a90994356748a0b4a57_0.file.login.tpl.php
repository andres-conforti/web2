<?php
/* Smarty version 3.1.33, created on 2019-11-29 02:36:57
  from 'C:\TUDAI\xampp\htdocs\web2019\templates\Login\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de07639deb404_72151130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8798a4cbdd66e46e4eaf1a90994356748a0b4a57' => 
    array (
      0 => 'C:\\TUDAI\\xampp\\htdocs\\web2019\\templates\\Login\\login.tpl',
      1 => 1574984825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:loginNav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5de07639deb404_72151130 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:loginNav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
<br>
<div class="row">

    <div class="offset-md-1 col-md-4 login-form loguearse">
    <h1>Loguearse:</h2>
        <form method="post" action="verificarLogin">

            <div class="form-group">
                <label for="exampleInputPassword1">Usuario</label>
                <input type="input" class="form-control" name="usuario" id="usuario" aria-describedby="usuario"
                    placeholder="Usuario">
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

    <div class="offset-md-2 col-md-4 login-form loguearse">
<h1>Registrarse:</h2>
        <form method="post" action="InsertUsuario">

            <div class="form-group">
                <label for="exampleInputPassword1">Usuario</label>
                <input type="input" class="form-control" name="usuario" id="usuario" aria-describedby="usuario"
                    placeholder="Usuario">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="********">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-block">Registrase</button>
            </div>
        </form>
</div>
</div>




<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
