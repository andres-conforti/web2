<?php
/* Smarty version 3.1.33, created on 2019-11-10 21:31:39
  from 'C:\TUDAI\xampp\htdocs\web2\templates\Store\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc873ab955232_62408399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b8840161d6fa8a5a68f1731f5be5e1ac6b733a0' => 
    array (
      0 => 'C:\\TUDAI\\xampp\\htdocs\\web2\\templates\\Store\\navbar.tpl',
      1 => 1573263551,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc873ab955232_62408399 (Smarty_Internal_Template $_smarty_tpl) {
?> <nav class="navbar navbar-expand-md navbar-dark bg-dark">
   <ul class="navbar-nav mr-auto">
     <li><a class="navbar-brand" href="./index">HOME</a></li>
     <li><a class="navbar-brand" href="./marcas">MARCAS</a></li>
     <li><a class="navbar-brand" href="./login">ADMINISTRACION</a></li>
   </ul>

   <form class="form-inline" action="filtrar" method="POST">


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
          <button class="btn btn-primary btn-sm" type="submit">FILTRAR<span class="glyphicon glyphicon-arrow-right"
         aria-hidden="true"></span></button>
   </form>

 </nav><?php }
}
