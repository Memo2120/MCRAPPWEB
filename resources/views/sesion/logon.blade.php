
<main style="background-image: {{asset('img/gallery2.jpg')}}">
    <div class="contenedor__todo">
        <div class="caja__trasera">
            <div class="caja__trasera-login">
                <h3>¿Ya tienes una cuenta?</h3>
                <p>Inicia sesión para entrar en la página</p>
                <button id="btn__iniciar-sesion">Iniciar Sesión</button>
            </div>
            <div class="caja__trasera-register">
                <h3>¿Aún no tienes una cuenta?</h3>
                <p>Regístrate para que puedas iniciar sesión</p>    
                <button id="btn__registrarse">Regístrarse</button>
            </div>
        </div>

        <!--Formulario de Login y registro-->
        <div class="contenedor__login-register">
            <!--Login-->
            <form action="{{asset('/sesion')}}" class="formulario__login">
                
                <h2>Iniciar Sesión</h2>
                <input type="text" id="name" name="name" placeholder="Correo Electronico">
                <input type="password" id="password" name="password" placeholder="Contraseña">
                <button>Entrar</button>
            </form>

            <!--Register-->
            <form action="{{asset('sesion2')}}" class="formulario__register" method="POST">
                @csrf
                <h2>Regístrarse</h2>
                <input type="text" id="name" name="name" placeholder="Usuario">
                <input type="password" id="password" name="password" placeholder="Contraseña">
                <button>Regístrarse</button>
            </form>
        </div>
    </div>

</main>