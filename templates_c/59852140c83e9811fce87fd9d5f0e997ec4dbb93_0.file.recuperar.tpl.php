<?php
/* Smarty version 3.1.33, created on 2019-12-02 02:00:00
  from 'C:\TUDAI\xampp\htdocs\web2019\templates\Login\recuperar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de462107c9915_28856040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59852140c83e9811fce87fd9d5f0e997ec4dbb93' => 
    array (
      0 => 'C:\\TUDAI\\xampp\\htdocs\\web2019\\templates\\Login\\recuperar.tpl',
      1 => 1575248276,
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
function content_5de462107c9915_28856040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:loginNav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <br>
  <div class="row justify-content-lg-center">

        <div class="col-lg-4 login-form loguearse">
            <h1>INGRESE SU EMAIL</h2>
                <form method="post" action="sendPass">

                    <div class="form-group">
                        <input type="input" class="form-control" name="email" id="email" aria-describedby="email" placeholder="email">
                    </div>

                    <div class="form-group">

                        

                        <button type="submit" class="btn btn-primary btn-block">RECUPERAR CUENTA</button>
                        <small>Si existe en la base de datos, se le enviaran sus datos.</small>
                        <br>
                    </div>
                </form>


        </div>

    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
