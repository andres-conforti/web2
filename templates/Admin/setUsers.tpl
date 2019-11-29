{include file="header.tpl"}
{include file="navAdmin.tpl"}

<div class="container-fluid producto">

  <br>
  <h1 class="text-center">ADMINISTRAR USUARIOS:</h1>
  <br>
  <div class="row justify-content-md-center">
    <div class="col-lg-3">


      {*----------editar permisos--------*}
      <form method="post" action="modificarUser">
        <select name="usuario" class="form-control filter">
          <option value="usuario" selected disabled hidden>LISTA DE USUARIOS</option>
          {foreach from=$usuarios item=usuario}
          {if $usuario['isAdmin'] == "1"}
          <option value="{$usuarios['id_usuario']}"> {$usuario['username']} - ADMINISTRADOR</option>
          {else}
          <option value="{$usuarios['id_usuario']}"> {$usuario['username']} - USUARIO</option>
          {/if}
          {/foreach}
        </select>
        <br>
        <div class="form-group">
          <button type="submit" class="btn btn-success btn-block">DAR/QUITAR ADMIN</button>
        </div>
    </div>


    {*----------borrar usuario--------*}
    <div class="offset-lg-1 col-lg-3">
      <form method="post" action="eliminarUser">
        <select name="usuario" class="form-control filter">
          <option value="usuario" selected disabled hidden>LISTA DE USUARIOS</option>
          {foreach from=$usuarios item=usuario}
          {if $usuario['isAdmin'] == "1"}
          <option value="{$usuarios['id_usuario']}"> {$usuario['username']} - ADMINISTRADOR</option>
          {else}
          <option value="{$usuarios['id_usuario']}"> {$usuario['username']} - USUARIO</option>
          {/if}
          {/foreach}
        </select>
        <br>
        <div class="form-group">
          <button type="submit" class="btn btn-danger btn-block">ELIMINAR USUARIO</button>
        </div>

        {*----------borrar usuario--------*}

    </div>
  </div>
</div>






{include file="footer.tpl"}