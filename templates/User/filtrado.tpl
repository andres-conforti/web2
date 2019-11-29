{include file="header.tpl"}
{include file="navUser.tpl"}

<br>
<div class="container-fluid producto">
  <hr class="style14">
  <br>
  {foreach item=producto from=$productos}
  <div class="row justify-content-md-center">
    <div class="col-md-5 col-lg-5">


      <ul class="producto">
        <a href="{BASE_URL}detalleLogueado/{$producto['id_producto']}" class="link"></a>
        <li class="list-group-item">
          <h3>{$producto['nombre']} - ${$producto['precio']}<h3>
        </li>
        <li class="list-group-item">{$producto['descripcion']}</li>
      </ul>

    </div>

    <img src="{BASE_URL}/{$producto['imagen']}" alt="{$producto['nombre']}">
  </div>
  <br>
  <hr class="style14">
  <br>
  {/foreach}
</div>
{include file="footer.tpl"}
