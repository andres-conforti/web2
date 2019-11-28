{include file="header.tpl"}
{include file="navAdmin.tpl"}

<div class="container">

    <hr class="style14">
    <br>
    {foreach from=$marcas item=marca}
    <div class="row">

        <div class="col-md-offset-2 col-md-3"><img src="{$marca['imagen']}" alt="{$marca['nombre']}"></div>

        <div class="col-md-5">
            <h3>{$marca['nombre']}</h3>
            <p>{$marca['descripcion']}</p>
        <a href="{BASE_URL}filtradoAdmin/{$marca['id_marca']}"><span aria-hidden="true"><button type="submit" class="btn btn-primary btn-block">VER PRODUCTOS</button></span></a>
       <br>
       <div class="offset-3 col justify-content-md-center">
       <a href="{BASE_URL}editarMarca/{$marca['id_marca']}"><span aria-hidden="true"><button type="submit" class="btn btn-warning">EDITAR</button></span></a>
        <a href="{BASE_URL}borrarMarca/{$marca['id_marca']}"><span aria-hidden="true"><button type="submit" class="btn btn-danger">ELIMINAR</button></span></a>
        </div>
        
        </div>
    </div>
    <br>
    <hr class="style14">
    <br>
    {/foreach}
</div>

{include file="footer.tpl"}
