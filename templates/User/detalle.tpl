{include file="header.tpl"}
{include file="navUser.tpl"}

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

{*comentarios*}

<div class="row justify-content-md-center">
<div class="col-md-5 col-lg-5" id="comentarios-container">
  <label><p>Cargando Comentarios.....</p></label>
</div>


<div class="col-md-3 col-lg-3">
  <form method="post" >
    <div class="form-group">
      <label for="exampleFormControlSelect1">Seleccione Puntaje</label>
      <select class="form-control" id="puntaje">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Comentario</label>
      <textarea class="form-control" id="comentario" rows="3"></textarea>
    </div>
    <button type="button" class="enviar" >Enviar</button>
  </form>
</div>
</div>

{*comentarios*}


</div>


{include file="footer.tpl"}
