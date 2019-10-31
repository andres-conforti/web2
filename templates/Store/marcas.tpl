{include file="header.tpl"}
{include file="./navbar.tpl"}




<div class="container">
<h2>MARCAS DE GPU: </h2>
    <br>
<hr class="style14">
<br>
{foreach from=$marcas item=marca}
    <div class="row">

        <div class="col-md-offset-2 col-md-3"><img src="{$marca['imagen']}" alt="{$marca['nombre']}"></div>

        <div class="col-md-5">
        <h3>{$marca['nombre']}</h3>
        <p>{$marca['descripcion']}</p>
        <a href="#" class="btn btn-primary" value="{$marca['id_marca']}" role="button" >VER PRODUCTOS</a>
        
        </div>
    </div>
    <br>
<hr class="style14">
<br>
{/foreach}
</div>



{include file="footer.tpl"}

{*
    <div class="container">

      <div class="row">
        <div >
          <a href="#">
            <img src="{$marca['imagen']}" alt="{$marca['nombre']}" >
          </a>
        </div>

        <div>
          <h3>{$marca['nombre']}</h3>
          <p>{$marca['descripcion']}</p>
          <a class="btn btn-primary" value="{$marca['id_marca']}">VER PRODUCTOS</a>
        </div>
      </div>


      <hr>
   
    </div>




------original-----------
<ul class="producto">

  <img src="{$marca['imagen']}" alt="{$marca['nombre']}">

  <nav class="col-md-7 col-lg-7inline">
    <a class="link" action="filtrar" method="POST" type="submit"></a>
    <li class="list-group-item">
      <h3>{$marca['nombre']}<h3>
    </li>
    <li class="list-group-item">{$marca['descripcion']}</li>
  </nav>
</ul>
*}