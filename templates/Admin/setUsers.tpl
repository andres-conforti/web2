{include file="header.tpl"}
{include file="navAdmin.tpl"}

<div class="container-fluid producto">
  <br>
  <h1 class="text-center">ADMINISTRAR USUARIOS:</h1>
  <br>
  <div class="row justify-content-md-center">



      {*----------editar permisos--------*}
      <div class="col-lg-3">
      <form method="post" action="modificarUser">
        <select name="usuario" class="form-control filter">
          <option value="usuario" selected disabled hidden>LISTA DE USUARIOS</option>
          {foreach from=$usuarios item=usuario}
          {if $usuario['isAdmin'] == "1"}
          <option value="{$usuarios['id_usuario']}" id="username" name="username"> {$usuario['username']} -
            ADMINISTRADOR</option>
          {else}
          <option value="{$usuarios['id_usuario']}" id="username" name="username"> {$usuario['username']} - USUARIO
          </option>
          {/if}
          {/foreach}
        </select>
        <br>
        <div class="form-group">
          <button type="submit" class="btn btn-success btn-block">DAR/QUITAR ADMIN</button>
        </div>
      </form>
    </div>


    {*----------borrar usuario--------*}
    <div class="offset-lg-1 col-lg-3">
      <form method="post" action="eliminarUser">
        <select name="usuario" class="form-control filter">
          <option value="usuario" selected disabled hidden>LISTA DE USUARIOS</option>
          {foreach from=$usuarios item=usuario}

          <option value="{$usuarios['id_usuario']}"> {$usuario['username']}</option>

          {/foreach}
        </select>
        <br>
        <div class="form-group">
          <button type="submit" class="btn btn-danger btn-block">ELIMINAR USUARIO</button>
        </div>
      </form>
    </div>
    {*----------borrar usuario--------*}



    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="formEditarMarca">
        <select name="id_marca" class="form-control filter">
          <option value="id_marca" selected disabled hidden>LISTA DE USUARIOS</option>

          {foreach from=$usuarios item=usuario}
          {if $usuario['isAdmin'] == "1"}
          <option value="{$usuarios['id_usuario']}" id="username" name="username" for="username"> {$usuario['username']}
            - ADMINISTRADOR</option>
          {else}
          <option value="{$usuarios['id_usuario']}" id="username" name="username" for="username"> {$usuario['username']}
            - USUARIO</option>
          {/if}
          {/foreach}
        </select>
        <button type="submit" class="btn btn-primary">Editar Marca</button>
      </form>
    </div>
  </div>
</div>






{include file="footer.tpl"}