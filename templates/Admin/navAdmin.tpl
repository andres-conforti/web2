<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <ul class="nav navbar-nav">
    <li><a href="/web2/indexAdmin">HOME</a></li>
    <li><a href="/web2/marcasAdmin">MARCAS</a></li>
    <li><a href="/web2/crearProducto">Crear Producto</a></li>
    <li><a href="/web2/editarProducto">Editar Producto</a></li>
    <li><a href="/web2/crearMarca">Crear Marca</a></li>
    <li><a href="/web2/editarMarca">Editar Marca</a></li>
    <li><a href="/web2/logout">Cerra Sesion</a></li>
  </ul>
  <form class="col-md-2 col-lg-2 form-inline" action="filtrarAdmin" method="POST">
    <select name="filtrarAdmin" class="form-control filter">
      <option value="" selected disabled hidden>Filtrar por marca</option>
      {foreach from=$marcas item=marca}
      <option value="{$marca['id_marca']}">{$marca['nombre']}</option>
      {/foreach}
    </select>
    <button class="btn btn-primary btn-sm" type="submit">Filtrar</button>
    </form>
</nav>

<nav class="navbar navbar-default navbar-expand-lg navbar-light">
	
		<ul class="nav navbar-nav">
			<li class="nav-item"><a href="/web2/indexAdmin" class="nav-link">HOME</a></li>			
			<li class="nav-item dropdown">
				<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">MARCAS DE GPU<b class="caret"></b></a>
				<ul class="dropdown-menu">					
					<li><a href="/web2/marcasAdmin" class="dropdown-item">VER MARCAS</a></li>
					<li><a href="/web2/crearMarca" class="dropdown-item">CREAR MARCA</a></li>
					<li><a href="/web2/editarMarca" class="dropdown-item">EDITAR MARCA</a></li>
				</ul>
			</li>
            			<li class="nav-item dropdown">
				<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">PRODUCTOS<b class="caret"></b></a>
				<ul class="dropdown-menu">					
					<li><a href="/web2/crearProducto" class="dropdown-item">CREAR GPU</a></li>
					<li><a href="/web2/editarProducto" class="dropdown-item">EDITAR GPU</a></li>
				</ul>
			</li>
			<li class="nav-item"><a href="/web2/logout" class="nav-link">CERRAR SESION</a></li>
		</ul>

</nav>