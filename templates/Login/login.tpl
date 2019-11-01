{include file="header.tpl"}
{include file="./loginNav.tpl"}
   
<div class="login-form">

    <form method="post" action="verificarLogin">
              
        <div class="form-group">
            <label for="exampleInputPassword1">Usuario</label> 
            <input type="input" class="form-control" name="usuario" id="usuario" aria-describedby="usuario" placeholder="Usuario">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="********">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </div>      
    </form>
</div>

{include file="footer.tpl"}
