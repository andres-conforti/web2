{include file="header.tpl"}
{include file="navbar.tpl"}
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
    <img src="{BASE_URL}{$producto['imagen']}" alt="{$producto['nombre']}">
  </div>
  <br>
  <br>
</div>

<div class="row justify-content-lg-center">
<div class="col-lg-6" id="comentarios-container">
  <label><p>Cargando Comentarios.....</p></label>
</div>
</div>

{include file="footer.tpl"}