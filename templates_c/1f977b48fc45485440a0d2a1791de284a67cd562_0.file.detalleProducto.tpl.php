<?php
/* Smarty version 3.1.33, created on 2019-12-02 21:12:21
  from 'C:\TUDAI\xampp\htdocs\web2019\templates\Admin\detalleProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de57025862d16_80016360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f977b48fc45485440a0d2a1791de284a67cd562' => 
    array (
      0 => 'C:\\TUDAI\\xampp\\htdocs\\web2019\\templates\\Admin\\detalleProducto.tpl',
      1 => 1575073139,
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
function content_5de57025862d16_80016360 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
<br>
<div class="container-fluid producto">
  <div class="row justify-content-md-center">
    <div class="col-md-5 col-lg-5">


      <ul class="producto">

        <li class="list-group-item">
          <h3><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
 - $<?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
<h3>
        </li>
        <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['producto']->value['descripcion'];?>
</li>
      </ul>
      <div class="offset-1 col justify-content-md-center">

        <a href="<?php echo BASE_URL;?>
editarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
"><button type="button"
            class="btn btn-warning btn-sm">EDITAR</button></a>
        <a href="<?php echo BASE_URL;?>
borrarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
"><button type="button"
            class="btn btn-danger btn-sm">ELIMINAR</button></a>
      </div>
    </div>

    <form method="post" action="cambiarImagen" enctype="multipart/form-data">



      <img src="<?php echo BASE_URL;
echo $_smarty_tpl->tpl_vars['producto']->value['imagen'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
">
      <a href="<?php echo BASE_URL;?>
borrarImagen/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
"><button type="button"
          class="btn btn-danger btn-sm">ELIMINAR IMAGEN</button></a>
      <br>
      <a href="<?php echo BASE_URL;?>
cambiarImagen/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
"><button type="button"
          class="btn btn-success btn-sm">CAMBIAR IMAGEN</button></a>
      <input type="file" name="input_name" id="imageToUpload">



    </form>
  </div>

  <br>
  <hr class="style14">
  <br>
  
</div>

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
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
