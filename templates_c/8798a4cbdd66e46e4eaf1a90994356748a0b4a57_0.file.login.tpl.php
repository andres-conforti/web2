<?php
/* Smarty version 3.1.33, created on 2019-12-01 03:07:23
  from 'C:\TUDAI\xampp\htdocs\web2019\templates\Login\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de3205b4ae864_34013273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8798a4cbdd66e46e4eaf1a90994356748a0b4a57' => 
    array (
      0 => 'C:\\TUDAI\\xampp\\htdocs\\web2019\\templates\\Login\\login.tpl',
      1 => 1575166042,
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
function content_5de3205b4ae864_34013273 (Smarty_Internal_Template $_smarty_tpl) {
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

            <button type="submit" class="btn btn-primary btn-block">INGRESAR</button>
            </div>
        </form>
        <a href="<?php echo BASE_URL;?>
recuperarPass"><p class="offset-lg-2"><strong>...OLVIDE MI CONTRASEÑA</strong></p></a>

        
    </div>

    <div class="offset-md-2 col-md-4 login-form loguearse">
<h1>Registrarse:</h2>
        <form method="post" action="InsertUsuario">

            <div class="form-group">
                <label for="Usuario">Usuario</label>
                <input type="input" class="form-control" name="usuario" id="usuario" aria-describedby="usuario" placeholder="Usuario">
            </div>
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="input" class="form-control" name="email" id="email" aria-describedby="email" placeholder="email">
            </div>
            <div class="form-group">
                <label for="Contraseña">Contraseña</label>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="********">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-block">REGISTRARSE</button>
            </div>
        </form>
</div>
</div>




<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
