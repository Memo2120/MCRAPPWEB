<div id="overlay3" {{--onclick="off()"--}}>
    <div class="fondo">
        <i style="color:white;" onclick="off(this.id)" id="3">&#10006;</i>
        <div class="card">
            <div class="bar-titulo">
                <p>Usuarios</p>
            </div>
            <div class="campos">
                <form id="formUsuarios" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="name">Nombre</label><br>
                    <input id="name" type="text" value="" name="name">
                    <br><br>
                    <label for="tipo">Tipo</label><br>
                    <input id="tipo" type="text" value="" name="tipo">
                    <br><br>
                    <label for="password">Contraseña</label><br>
                    <input id="password" type="password" value="" name="password">
                    <br><br>

                    @if (isset($usuarios))
                    <label for="estado">Estado</label><br>
                    <div style="width: 100%; height:100% " class="todos">
                        <select style="width: 75%; height:75%" name="estado" id="estado" >
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                    </div>
                    <br><br>
                    @endif
                    <div class="btn-crear">
                        @if (isset($usuarios))
                            <button type="submit" >Modificar</button>
                        @else
                            <button type="submit">Crear</button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    