<div id="overlay4" {{--onclick="off()"--}}>
    <div class="fondo">
        <i style="color:white;" onclick="off(this.id)" id="4">&#10006;</i>
        <div class="card">
            <div class="bar-titulo">
                <p>Tecnicos</p>
            </div>
            <div class="campos">
                <form id="formTecnicos" action="{{asset('crTecnico')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="foto">Foto</label><br>
                    <input class="img-file" type="file" value="" name="foto" >
                    <br><br>
                    <label for="name">Nombre</label><br>
                    <input id="name" class="todos" type="text" value="" name="name" id="name" required>
                    <br><br>
                    <label for="apellido">Apellido</label><br>
                    <input id="apellido" class="todos" type="text" value="" name="apellido" id="apellido" required>
                    <br><br>
                    <label for="puesto">Puesto</label><br>
                    <input id="puesto" class="todos" type="text" value="" name="puesto" id="puesto" required>
                    <br><br>
                    <label for="domicilio">Domicilio</label><br>
                    <input id="domicilio" class="todos" type="text" value="" name="domicilio" id="domicilio" required>
                    <br><br>
                    <label for="zona">Zona</label><br>
                    <div style="width: 100%; height:100% " class="todos">
                                <select style="width: 75%; height:75%" name="zona" id="zona" required>
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
                    <input class="todos" type="number" value="" name="user_id" id="user_id" @if(!isset($tecnicos)) required @else readonly @endif >
                    <br><br>
                    @if (isset($tecnicos))
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
                        @if (isset($tecnicos))
                            <button type="submit" >Modificar</button>
                        @else
                            <button type="submit">Crear</button>
                        @endif
                    </div>
                    {{-- <div class="btn-crear">
                        <button>Mostrar</button>
                    </div> --}}
                </form>
            </div>
        </div>
    </div>
</div>