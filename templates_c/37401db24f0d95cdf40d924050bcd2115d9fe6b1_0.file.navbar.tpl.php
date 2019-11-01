<?php
/* Smarty version 3.1.33, created on 2019-11-01 19:24:30
  from 'C:\xampp\htdocs\web2\templates\Store\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbc785e0683c6_17726648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37401db24f0d95cdf40d924050bcd2115d9fe6b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\Store\\navbar.tpl',
      1 => 1572547394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbc785e0683c6_17726648 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-light bg-light">
  <ul class="nav navbar-nav">
    <li><a href="/web2/index">HOME</a></li>
    <li><a href="/web2/marcas">MARCAS</a></li>
    <li><a href="/web2/login">ADMINISTRACION</a></li>
  </ul>
  <form class="col-md-2 col-lg-2 form-inline" action="filtrar" method="POST">
    <select name="filtrar" class="form-control filter">
      <option value="" selected disabled hidden>ELEGI LA MARCA</option>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
"><?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
</option>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <button class="btn btn-primary btn-sm" type="submit">FILTRAR</button>
    </form>
</nav>
<?php }
}
