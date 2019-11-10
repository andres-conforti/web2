{include file="header.tpl"}
{include file="./navbar.tpl"}
<div class="container-fluid producto">
  <hr class="style14">
  <br>
{foreach from=$productos item=producto}
{if $producto['id_marca'] == $categoriaFiltrada}
    <div class="row justify-content-md-center">
    <div class="col-md-5 col-lg-5">


      <ul class="producto">

        <a href="producto/{$producto['id_producto']}" class="link"></a>
        <li class="list-group-item">
          <h3>{$producto['nombre']} - ${$producto['precio']}<h3>
        </li>
        <li class="list-group-item">{$producto['descripcion']}</li>
      </ul>

    </div>

    <img src="{$producto['imagen']}" alt="{$producto['nombre']}">
  </div>

    <br>
  <hr class="style14">
  <br>
  {/if}
  {/foreach}
  </div>
{include file="footer.tpl"}