 <nav class="navbar navbar-expand-md navbar-dark bg-dark">
   <ul class="navbar-nav mr-auto">
     <li><a class="navbar-brand" href="./index">HOME</a></li>
     <li><a class="navbar-brand" href="./marcas">MARCAS</a></li>
     <li><a class="navbar-brand" href="./login">ADMINISTRACION</a></li>
   </ul>

   <form class="form-inline" action="filtrar" method="POST">


     <select name="filtrar" class="form-control filter">
       <option value="" selected disabled hidden>ELEGI LA MARCA</option>
       {foreach from=$marcas item=marca}
       <option value="{$marca['id_marca']}">{$marca['nombre']}</option>
       {/foreach}
     </select>
          <button class="btn btn-primary btn-sm" type="submit">FILTRAR<span class="glyphicon glyphicon-arrow-right"
         aria-hidden="true"></span></button>
   </form>

 </nav>