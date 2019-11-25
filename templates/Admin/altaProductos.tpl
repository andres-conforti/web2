{include file="header.tpl"}
{include file="./navAdmin.tpl"}

<div class="container">
  <h1>CREAR PRODUCTO:</h1>

  <form method="post" action="formAltaProducto" enctype="multipart/form-data">
    <div class="form-group">
      <label for="nombreProducto">Nombre</label>
      <input type="text" class="form-control" id="nombreProducto" name="nombreProducto">
    </div>
    <div class="form-group">
      <label for="descripcionProducto">Descripcion</label>
      <input type="text" class="form-control" id="descripcionProducto" name="descripcionProducto">
    </div>
    <div class="form-group">
      <label for="precio">Precio</label>
      <input type="text" class="form-control" id="precio" name="precio">
    </div>
    <div class="form-group">
      <label for="marca">Marca</label>
      <select name="marca" class="form-control filter">
        <option value="marca" selected disabled hidden>Filtrar por marca</option>
        {foreach from=$marcas item=marca}
        <option value="{$marca['id_marca']}" name="marca" id="marca" for="marca">{$marca['nombre']}</option>
        {/foreach}
      </select>
    </div>
    <div class="form-group">
      <label for="descripcionProducto">Imagen </label>
      <br>
      <input type="file" name="input_name" id="imageToUpload">

    </div>
    <button type="submit" class="btn btn-primary">Crear Producto</button>
  </form>
</div>
{include file="footer.tpl"}