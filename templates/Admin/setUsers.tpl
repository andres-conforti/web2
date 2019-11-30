{include file="header.tpl"}
{include file="navAdmin.tpl"}

<div class="container-fluid producto">
  <br>
  <h1 class="text-center">ADMINISTRAR USUARIOS:</h1>
  <br>
  <div class="row justify-content-lg-center">



      {*----------editar permisos--------*}
      <div class="col-lg-3">

      <form method="post" action="modificarUser">
      <h4>Lista de usuarios:</h4>
        <select name="user" class="form-control filter">
          {foreach from=$usuarios item=usuario}
          {if $usuario['isAdmin'] == "1"}
          <option value="{$usuario['id_usuario']}" name="user" for="user"> {$usuario['username']} - ADMINISTRADOR</option>
          {else}
          <option value="{$usuario['id_usuario']}" name="user" for="user"> {$usuario['username']} - USUARIO</option>
          {/if}
          {/foreach}
        </select>
        <br>
        <button type="submit" class="btn btn-success btn-block">DAR/QUITAR ADMIN</button>
      </form>

    </div>


    {*----------borrar usuario--------*}
    <div class="offset-lg-1 col-lg-3">
      <form method="post" action="eliminarUser">
      <h4>Lista de usuarios:</h4>
        <select name="user" class="form-control filter">
          {foreach from=$usuarios item=usuario}
          {if $usuario['isAdmin'] == "1"}
          <option value="{$usuario['id_usuario']}" name="user" for="user"> {$usuario['username']} - ADMINISTRADOR</option>
          {else}
          <option value="{$usuario['id_usuario']}" name="user" for="user"> {$usuario['username']} - USUARIO</option>
          {/if}
          {/foreach}
        </select>
        <br>
        <div class="form-group">
          <button type="submit" class="btn btn-danger btn-block">ELIMINAR USUARIO</button>
        </div>
      </form>
    </div>
    {*----------borrar usuario--------*}

  </div>
</div>






{include file="footer.tpl"}