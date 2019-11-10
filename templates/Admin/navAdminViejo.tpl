<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <ul class="nav navbar-nav">
    <li><a href="./indexAdmin">HOME</a></li>
    <li><a href="./marcasAdmin">MARCAS</a></li>
    <li><a href="./crearProducto">Crear Producto</a></li>
    <li><a href="./editarProducto">Editar Producto</a></li>
    <li><a href="./crearMarca">Crear Marca</a></li>
    <li><a href="./editarMarca">Editar Marca</a></li>
    <li><a href="./logout">Cerra Sesion</a></li>
  </ul>
  <form class="col-md-2 col-lg-2 form-inline"action="filtrarAdmin" method="POST">
    <select name="filtrarAdmin" class="form-control filter">
      <option value="" selected disabled hidden>Filtrar por marca</option>
      {foreach from=$marcas item=marca}
      <option value="{$marca['id_marca']}">{$marca['nombre']}</option>
      {/foreach}
    </select>
    <button class="btn btn-primary btn-sm" type="submit">Filtrar</button>
    </form>
</nav>
