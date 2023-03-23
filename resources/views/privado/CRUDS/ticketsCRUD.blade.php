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
                    <input class="todos" type="text" value="" name="name">
                    <br><br>
                    <label for="descripcion">Descripcion</label><br>
                    <textarea class="text_area" name="descripcion" id="" cols="30" rows="10"></textarea>
                    <br><br>
                    <label for="direccion">Direccion</label><br>
                    <input class="todos" type="text" value="" name="Direccion">
                    <br><br>
                    <label for="zona">Zona</label><br>
                    <div style="width: 100%; height:100% " class="todos">
                                <select style="width: 75%; height:75%" name="zona" id="zona" >
                                    <option value="">Zona de donde se ubica</option>
                                    <option value="Tlaquepaque">Tlaquepaque</option>
                                    <option value="Guadalajara">Guadalajara</option>
                                    <option value="Tonala">Tonalá</option>
                                    <option value="Tlajomulco">Zapopan</option>
                                </select>
                    </div>
                    <br><br>
                    <label for="correo">Correo</label><br>
                    <input class="todos" type="email" value="" name="correo">
                    <br><br>
                    <label for="telefono">Telefono</label><br>
                    <input class="todos" type="number" value="" name="telefono" maxlength="10">
                    <br><br>
                    <label for="tecnico-Asig">Tecnico Asignado</label><br>
                    <input class="todos" type="number" value="" name="correo">
                    <br><br>
                    <label for="id_soliTicket">ID de solicitud ticket</label><br>
                    <input class="todos" type="number" value="" name="id_soliTicket">
                    <br><br>
                    <div class="btn-crear">
                        <button>Crear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>