<div id="overlay1" {{--onclick="off()"--}}>
    <div class="fondo">
        <i style="color:white;" onclick="off(this.id)" id="1">&#10006;</i>
        <div class="card">
            <div class="bar-titulo">
                <p><strong>Modificar Ticket</strong></p>
            </div>
            <div class="campos">
                <form action="" method="POST" enctype="multipart/form-data" id="formModificar">
                    @csrf
                    <label for="titulo">Titulo</label><br>
                    <input class="nombrein" type="text" value="" name="titulo" id="titulo">
                    <br><br>
                    <label for="descripcion">Descripcion</label><br>
                    <textarea class="text_area" name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
                    <br><br>
                    <label for="direccion">Direccion</label><br>
                    <input class="cantidadin" type="text" value="" name="direccion" id="direccion">
                    <br><br>
                    <label for="zona">Zona</label><br>
                    <div style="width: 100%; height:100% " class="todos">
                                <select style="width: 75%; height:75%; border-radius: 10px;" name="zona" id="zona">
                                    <option value="Tlaquepaque">Tlaquepaque</option>
                                    <option value="San Juan de Dios">San Juan de Dios</option>
                                    <option value="Guadalajara">Guadalajara</option>
                                    <option value="Tonala">Tonalá</option>
                                    <option value="Zapopan">Zapopan</option>
                                </select>
                    </div>
                    <br><br>
                    <label for="estado">Estado</label><br>
                    <div style="width: 100%; height:100% " class="todos">
                                <select style="width: 75%; height:75%; border-radius: 10px;" name="estado" id="estado" >
                                    <option value="Activo">Activo</option>
                                    <option value="Inactivo">Inactivo</option>
                                    <option value="Pendiente">Pendiente</option>
                                </select>
                    </div>
                    <br>
                    <br>
                    <label for="correo">Correo</label><br>
                    <input class="cantidadin" type="text" value="" name="correo" id="correo">
                    <br>
                    <br>
                    <div class="btn-crear">
                        <button type="submit" >Modificar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>