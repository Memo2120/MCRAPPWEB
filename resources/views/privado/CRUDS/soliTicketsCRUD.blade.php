<div id="overlay2" {{--onclick="off()"--}}>
    <div class="fondo">
        <i style="color:white;" onclick="off(this.id)" id="2">&#10006;</i>
        <div class="card">
            <div class="bar-titulo">
                <p>Solicitud de tickets</p>
            </div>
            <div class="campos">
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="name">Titulo</label><br>
                    <input type="text" value="" name="name">
                    <br><br>
                    <label for="descripcion">Descripcion</label><br>
                    <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
                    <br><br>
                    <label for="direccion">Cantidad</label><br>
                    <input type="number" value="" name="direccion">
                    <br><br>
                    <label for="zona">Zona</label><br>
                    <input type="text" value="" name="zona">
                    <br><br>
                    <label for="correo">Correo</label><br>
                    <input type="email" value="" name="correo">
                    <br><br>
                    <label for="telefono">Telefono</label><br>
                    <input type="number" value="" name="telefono" maxlength="10">
                    
                    <div class="btn-crear">
                        <button>Crear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>