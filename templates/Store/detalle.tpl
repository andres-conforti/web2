{include file="header.tpl"}
{include file="./navbarDetail.tpl"}
{include file="fix.tpl"}
<br>
<div class="container-fluid producto">
  <div class="row justify-content-md-center">
    <div class="col-md-5 col-lg-5">


      <ul class="producto">

        <li class="list-group-item">
          <h3>{$producto['nombre']} - ${$producto['precio']} - {$marca['nombre']}<h3>
        </li>
        <li class="list-group-item">{$producto['descripcion']}</li>
      </ul>
    </div>
    <img src="../{$producto['imagen']}" alt="{$producto['nombre']}">
  </div>
  <br>
  <br>
</div>

{include file="footer.tpl"}