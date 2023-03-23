<div id="overlay5" {{--onclick="off()"--}}>
    <div class="fondo">
        <i style="color:white;" onclick="off(this.id)" id="5">&#10006;</i>
        <div class="card">
            <div class="bar-titulo">
                <p>Tickets</p>
            </div>
            <div class="campos">
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="name">Titulo</label><br>
                    <input type="text" value="" name="name">
                    <br><br>
                    <label for="descripcion">Descripcion</label><br>
                    <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
                    <br><br>
                    <label for="direccion">Direccion</label><br>
                    <input type="text" value="" name="Direccion">
                    <br><br>
                    <label for="zona">Zona</label><br>
                    <input type="text" value="" name="zona">
                    <br><br>
                    <label for="correo">Correo</label><br>
                    <input type="email" value="" name="correo">
                    <br><br>
                    <label for="telefono">Telefono</label><br>
                    <input type="number" value="" name="telefono" maxlength="10">
                    <br><br>
                    <label for="tecnico-Asig">Tecnico Asignado</label><br>
                    <input type="number" value="" name="correo">
                    <br><br>
                    <label for="id_soliTicket">ID de solicitud ticket</label><br>
                    <input type="number" value="" name="id_soliTicket">
                    
                    <div class="btn-crear">
                        <button>Crear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>