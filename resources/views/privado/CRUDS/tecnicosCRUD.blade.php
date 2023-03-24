<div id="overlay4" {{--onclick="off()"--}}>
    <div class="fondo">
        <i style="color:white;" onclick="off(this.id)" id="4">&#10006;</i>
        <div class="card">
            <div class="bar-titulo">
                <p>Tecnicos</p>
            </div>
            <div class="campos">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="foto">Foto</label><br>
                    <input class="img-file" type="file" value="" name="foto" >
                    <br><br>
                    <label for="name">Nombre</label><br>
                    <input class="todos" type="text" value="" name="name">
                    <br><br>
                    <label for="apellido">Apellido</label><br>
                    <input class="todos" type="text" value="" name="apellido">
                    <br><br>
                    <label for="puesto">Puesto</label><br>
                    <input class="todos" type="text" value="" name="puesto">
                    <br><br>
                    <label for="domicilio">Domicilio</label><br>
                    <input class="todos" type="text" value="" name="domicilio">
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
                            
                    <!-- <input class="todos" type="text" value="" name="zona"> -->
                    <br><br>
                    <label for="user_id">ID de usuario</label><br>
                    <input class="todos" type="number" value="" name="user_id">
                    <br><br>
                    <div class="btn-crear">
                        <button>Crear</button>
                    </div>
                    <div class="btn-crear">
                        <button>Mostrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>