<?php
/* Smarty version 3.1.33, created on 2019-12-01 03:05:58
  from 'C:\TUDAI\xampp\htdocs\web2019\templates\login\recuperar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de32006b1d809_49772819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0ac501b6d441f0b051f666e77c156a60e075339' => 
    array (
      0 => 'C:\\TUDAI\\xampp\\htdocs\\web2019\\templates\\login\\recuperar.tpl',
      1 => 1575163312,
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
function content_5de32006b1d809_49772819 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:loginNav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <br>
    <div class="row">

        <div class="offset-md-1 col-md-4 login-form loguearse">
            <h1>INGRESE SU EMAIL</h2>
                <form method="post" action="recuperarPass">

                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="input" class="form-control" name="email" id="email" aria-describedby="email" placeholder="email">
                    </div>

                    <div class="form-group">

                        <button type="submit" class="btn btn-primary btn-block">INGRESAR</button>
                        <br>
                    </div>
                </form>


        </div>

    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
