{include file="../header.tpl"}
{include file="./navAdminDetail.tpl"}
{include file="fix.tpl"}

<div class="container">
  <h2>Formulario</h2>
  {foreach from=$producto item=item}
  <form method="post" action="formEditarProducto" enctype="multipart/form-data">

    
  
    <div class="form-group">
      <label for="nombreProducto">Nombre</label>
      <input type="text" class="form-control" id="nombreProducto" name="nombreProducto" value="{$item['nombre']}">
    </div>
    <div class="form-group">
      <label for="descripcionProducto">Descripcion</label>
      <textarea rows="6" cols="50" type="text" class="form-control" id="descripcionProducto" name="descripcionProducto">{$item['descripcion']}</textarea>
    </div>
    <div class="form-group">
      <label for="precio">Precio</label>
      <input type="text" class="form-control" id="precio" name="precio" value="{$item['precio']}">
    </div>
    

    
    <div class="form-group">
      <label for="marca">Marca</label>
      <select name="marca" class="form-control filter">
        <option value="marca" selected disabled hidden>Filtrar por marca</option>
        {foreach from=$marcas item=marca}
        <option value="{$marca['id_marca']}" name="marca" id= "marca" for="marca">{$marca['nombre']}</option>
        {/foreach}
      </select>
    </div>
    <div class="form-group">
      <label for="imagen">Imagen</label>
      <br>
      <input type="file" name="input_name" id="imageToUpload">
      
    </div>
    <button type="submit" class="btn btn-primary">Editar Producto</button>
  </form>
  {/foreach}
</div>
{include file="footer.tpl"}
