<div id="overlay4" {{--onclick="off()"--}}>
    <div class="fondo">
        <i style="color:white;" onclick="off(this.id)" id="4">&#10006;</i>
        <div class="card">
            <div class="bar-titulo">
                <p>Tecnicos</p>
            </div>
            <div class="campos">
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="foto">Foto</label><br>
                    <input type="file" value="" name="foto" >
                    <br><br>
                    <label for="name">Nombre</label><br>
                    <input type="text" value="" name="name">
                    <br><br>
                    <label for="apellido">Apellido</label><br>
                    <input type="text" value="" name="apellido">
                    <br><br>
                    <label for="puesto">Puesto</label><br>
                    <input type="text" value="" name="puesto">
                    <br><br>
                    <label for="domicilio">Domicilio</label><br>
                    <input type="text" value="" name="domicilio">
                    <br><br>
                    <label for="zona">Zona</label><br>
                    <input type="text" value="" name="zona">
                    <br><br>
                    <label for="user_id">ID de usuario</label><br>
                    <input type="number" value="" name="user_id">
                    
                    <div class="btn-crear">
                        <button>Crear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>