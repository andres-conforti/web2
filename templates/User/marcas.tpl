{include file="header.tpl"}
{include file="navUser.tpl"}




<div class="container">

    <hr class="style14">
    <br>
    {foreach from=$marcas item=marca}
    <div class="row">

        <div class="col-md-offset-2 col-md-3"><img src="{$marca['imagen']}" alt="{$marca['nombre']}"></div>

        <div class="col-md-5">
            <h3>{$marca['nombre']}</h3>
            <p>{$marca['descripcion']}</p>
        <a href="filtradoLogueado/{$marca['id_marca']}"><span aria-hidden="true"><button type="submit" class="btn btn-primary btn-block">Ver Productos</button></span></a>
        </div>
    </div>
    <br>
    <hr class="style14">
    <br>
    {/foreach}
</div>

{include file="footer.tpl"}