{include file="header.tpl"}
{include file="loginNav.tpl"}

<div class="container">
    <br>
  <div class="row justify-content-lg-center">

        <div class="col-lg-4 login-form loguearse">
            <h1>INGRESE SU EMAIL</h2>
                <form method="post" action="sendPass">

                    <div class="form-group">
                        <input type="input" class="form-control" name="email" id="email" aria-describedby="email" placeholder="email">
                    </div>

                    <div class="form-group">

                        

                        <button type="submit" class="btn btn-primary btn-block">RECUPERAR CUENTA</button>
                        <small>Si existe en la base de datos, se le enviaran sus datos.</small>
                        <br>
                    </div>
                </form>


        </div>

    </div>
</div>

{include file="footer.tpl"}