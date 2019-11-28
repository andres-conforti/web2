{include file="header.tpl"}
{include file="loginNav.tpl"}

<div class="container">
<br>
<div class="row">

    <div class="offset-md-1 col-md-4 login-form loguearse">
    <h1>Loguearse:</h2>
        <form method="post" action="verificarLogin">

            <div class="form-group">
                <label for="exampleInputPassword1">Usuario</label>
                <input type="input" class="form-control" name="usuario" id="usuario" aria-describedby="usuario"
                    placeholder="Usuario">
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

    <div class="offset-md-2 col-md-4 login-form loguearse">
<h1>Registrarse:</h2>
        <form method="post" action="InsertUsuario">

            <div class="form-group">
                <label for="exampleInputPassword1">Usuario</label>
                <input type="input" class="form-control" name="usuario" id="usuario" aria-describedby="usuario"
                    placeholder="Usuario">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="********">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-block">Registrase</button>
            </div>
        </form>
</div>
</div>




{include file="footer.tpl"}