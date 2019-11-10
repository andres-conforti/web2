{include file="header.tpl"}
{include file="./navAdmin.tpl"}

<div class="container-fluid producto">
  <hr class="style14">
  <br>
  {foreach from=$productos item=producto}
  <div class="row justify-content-md-center">
    <div class="col-md-5 col-lg-5">
      <ul class="producto">
        <a href="productoAdmin/{$producto['id_producto']}" class="link"></a>
        <li class="list-group-item">
          <h3>{$producto['nombre']} - ${$producto['precio']}<h3>

        </li>

        <li class="list-group-item">{$producto['descripcion']}</li>

      </ul>
      <div class="offset-1 col justify-content-md-center">

        <a href="editarProducto/{$producto['id_producto']}"><button type="button"
            class="btn btn-warning btn-sm">EDITAR</button></a>
        <a href="borrarProducto/{$producto['id_producto']}"><button type="button"
            class="btn btn-danger btn-sm">ELIMINAR</button></a>


      </div>
    </div>

    <img src="{$producto['imagen']}" alt="{$producto['nombre']}">

  </div>
  <br>
  <hr class="style14">
  <br>


  {/foreach}
</div>
{include file="footer.tpl"}