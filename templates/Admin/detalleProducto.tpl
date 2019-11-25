{include file="../header.tpl"}
{include file="./navAdminDetail.tpl"}
{include file="fix.tpl"}
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

        <a href="../editarProducto/{$producto['id_producto']}"><button type="button"
            class="btn btn-warning btn-sm">EDITAR</button></a>
        <a href="../borrarProducto/{$producto['id_producto']}"><button type="button"
            class="btn btn-danger btn-sm">ELIMINAR</button></a>
      </div>
    </div>
    <form>
    <img src="../{$producto['imagen']}" alt="{$producto['nombre']}">
      
<a href="../borrarImagen/{$producto['id_producto']}"><button type="button" class="btn btn-danger btn-sm">ELIMINAR IMAGEN</button></a>
<br>
<a href="../cambiarImagen/{$producto['id_producto']}"><button type="button" class="btn btn-success btn-sm">CAMBIAR IMAGEN</button></a>
            <input type="file" name="input_name" id="imageToUpload">

    </form>
  </div>
  
  <br>
  <br>
</div>
{/foreach}
{include file="footer.tpl"}