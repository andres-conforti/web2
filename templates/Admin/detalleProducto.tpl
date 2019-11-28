{include file="header.tpl"}
{include file="navAdmin.tpl"}
{foreach from=$productos item=producto}
<br>
<div class="container-fluid producto">
  <div class="row justify-content-md-center">
    <div class="col-md-5 col-lg-5">


      <ul class="producto">

        <li class="list-group-item">
          <h3>{$producto['nombre']} - ${$producto['precio']}<h3>
        </li>
        <li class="list-group-item">{$producto['descripcion']}</li>
      </ul>
      <div class="offset-1 col justify-content-md-center">

        <a href="{BASE_URL}editarProducto/{$producto['id_producto']}"><button type="button"
            class="btn btn-warning btn-sm">EDITAR</button></a>
        <a href="{BASE_URL}borrarProducto/{$producto['id_producto']}"><button type="button"
            class="btn btn-danger btn-sm">ELIMINAR</button></a>
      </div>
    </div>

    <form method="post" action="cambiarImagen" enctype="multipart/form-data">



      <img src="{BASE_URL}{$producto['imagen']}" alt="{$producto['nombre']}">
      <a href="{BASE_URL}borrarImagen/{$producto['id_producto']}"><button type="button"
          class="btn btn-danger btn-sm">ELIMINAR IMAGEN</button></a>
      <br>
      <a href="{BASE_URL}cambiarImagen/{$producto['id_producto']}"><button type="button"
          class="btn btn-success btn-sm">CAMBIAR IMAGEN</button></a>
      <input type="file" name="input_name" id="imageToUpload">



    </form>
  </div>

  <br>
  <br>
</div>
{/foreach}

{include file="footer.tpl"}