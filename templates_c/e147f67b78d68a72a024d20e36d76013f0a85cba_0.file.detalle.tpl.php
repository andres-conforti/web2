<?php
/* Smarty version 3.1.33, created on 2019-12-01 02:05:17
  from 'C:\TUDAI\xampp\htdocs\web2019\templates\User\detalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de311cde25e08_10355501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e147f67b78d68a72a024d20e36d76013f0a85cba' => 
    array (
      0 => 'C:\\TUDAI\\xampp\\htdocs\\web2019\\templates\\User\\detalle.tpl',
      1 => 1575073935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navUser.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5de311cde25e08_10355501 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navUser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<br>
<div class="container-fluid producto">
  <div class="row justify-content-md-center">
    <div class="col-md-5 col-lg-5">


      <ul class="producto">

        <li class="list-group-item">
          <h3><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
 - $<?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
 - <?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
<h3>
        </li>
        <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['producto']->value['descripcion'];?>
</li>
      </ul>
    </div>
    <img src="<?php echo BASE_URL;
echo $_smarty_tpl->tpl_vars['producto']->value['imagen'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
">
  </div>

  <br>
  <hr class="style14">
  <br>


<div class="row justify-content-md-center">
<div class="col-md-5 col-lg-5" id="comentarios-container">
  <label><p>Cargando Comentarios.....</p></label>
</div>


<div class="col-md-3 col-lg-3">
  <form method="post" >
    <div class="form-group">
      <label for="exampleFormControlSelect1">Seleccione Puntaje</label>
      <select class="form-control" id="puntaje">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Comentario</label>
      <textarea class="form-control" id="comentario" rows="3"></textarea>
    </div>
    <button type="button" class="enviar" >Enviar</button>
  </form>
</div>
</div>



</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
