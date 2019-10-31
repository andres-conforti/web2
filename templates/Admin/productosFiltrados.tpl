{include file="header.tpl"}
{include file="./navAdmin.tpl"}
{foreach from=$productos item=producto}
{if $producto['id_marca'] == $categoriaFiltrada}
<ul>
  <img src="{$producto['imagen']}" alt="{$producto['nombre']}">
  <nav class="col-md-6">
    <a  href="productoAdmin/{$producto['id_producto']}"><li class="list-group-item"><h3>{$producto['nombre']} - ${$producto['precio']}<h3></li></a>
    <li class="list-group-item">{$producto['descripcion']}</li>
    <a href="borrarProducto/{$producto['id_producto']}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Eliminar</a>
  </nav>
</ul>
  {/if}
  {/foreach}
{include file="footer.tpl"}