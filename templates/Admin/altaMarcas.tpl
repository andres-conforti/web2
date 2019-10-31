{include file="header.tpl"}
{include file="./navAdmin.tpl"}
    <h1>{$titulo}</h1>
    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="formAltaMarca">
        <div class="form-group">
          <label for="nombreMarca">Nombre</label>
          <input type="text" class="form-control" id="nombreMarca" name="nombreMarca">
        </div>
        <div class="form-group">
          <label for="descripcionMarca">Descripcion</label>
          <input type="text" class="form-control" id="descripcionMarca" name="descripcionMarca">
        </div>
        <div class="form-group">
          <label for="imagenMarca">Imagen</label>
          <input value="img/" type="text" class="form-control" id="imagenMarca" name="imagenMarca">
        </div>
        <button type="submit" class="btn btn-primary">Crear Marca</button>
      </form>
    </div>
{include file="footer.tpl"}
