<div id="overlay2" {{--onclick="off()"--}}>
    <div class="fondo">
        <i style="color:white;" onclick="off(this.id)" id="2">&#10006;</i>
        <div class="card">
            <div class="bar-titulo">
                <p><strong>Solicitud de tickets</strong></p>
            </div>
            <div class="campos">
                <form action="{{asset('crSoliTicket')}}" method="POST" enctype="multipart/form-data" id="formSoliTickets">
                    @csrf
                    <label for="titulo">Titulo</label><br>
                    <input  class="todos" type="text" value="" name="titulo" id="titulo" required>
                    <br><br>
                    <label for="descripcion">Descripcion</label><br>
                    <textarea class="text_area" name="descripcion" cols="30" rows="10" id="descripcion" required></textarea>
                    <br><br>
                    <label for="direccion">Direccion</label><br>
                    <input class="todos" type="text" value="" name="direccion" id="direccion" required>
                    <br><br>
                    <label for="zona">Zona</label><br>
                    <div style="width: 100%; height:100% " class="todos">
                                <select style="width: 75%; height:75%; border-radius: 10px;" name="zona" id="zona" required>
                                    <option value="">Zona de donde se ubica</option>
                                    <option value="Tlaquepaque">Tlaquepaque</option>
                                    <option value="Guadalajara">Guadalajara</option>
                                    <option value="Tonala">Tonalá</option>
                                    <option value="Zapopan">Zapopan</option>
                                </select>
                    </div>
                    <br><br>
                    <label for="correo">Correo</label><br>
                    <input class="todos" type="email" value="" name="correo" id="correo" placeholder="*opcional">
                    <br><br>
                    <label for="telefono">Telefono</label><br>
                    <input class="todos" type="number" value="" name="telefono" maxlength="10" id="telefono" required>
                    <br><br>
                    @if (isset($SolicitudTickets))
                    <label for="estado">Estado</label><br>
                    <div style="width: 100%; height:100% " class="todos">
                        <select style="width: 75%; height:75%" name="estado" id="estado" disabled>
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                    </div>
                    <input type="hidden" value="" name="estado" id="estado">
                    <br><br>
                    @endif
                    <div class="btn-crear">
                        @if(isset($SolicitudTickets))
                            <button type="submit">Modificar</button>
                        @else
                            <button type="submit">Crear</button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>