<div id="overlay5" {{--onclick="off()"--}}>
    <div class="fondo">
        <i style="color:white;" onclick="off(this.id)" id="5">&#10006;</i>
        <div class="card">
            <div class="bar-titulo">
                <p><strong>Tickets</strong></p>
            </div>
            <div class="campos">
                <form action="{{asset('crTicket')}}" method="POST" enctype="multipart/form-data" id="formTickets">
                    @csrf
                    <label for="titulo">Titulo</label><br>
                    <input class="todos" type="text" value="" name="titulo" id="titulo" required>
                    <br><br>
                    <label for="descripcion">Descripcion</label><br>
                    <textarea class="text_area" name="descripcion" id="descripcion" cols="30" rows="10" required></textarea>
                    <br><br>
                    <label for="direccion">Direccion</label><br>
                    <input class="todos" type="text" value="" name="direccion" id="direccion" required>
                    <br><br>
                    <label for="zona">Zona</label><br>
                    <div style="width: 100%; height:100% " class="todos">
                                <select style="width: 75%; height:75%" name="zona" id="zona" required>
                                    <option value="">Zona de donde se ubica</option>
                                    <option value="Tlaquepaque">Tlaquepaque</option>
                                    <option value="Guadalajara">Guadalajara</option>
                                    <option value="Tonala">Tonalá</option>
                                    <option value="Zapopan">Zapopan</option>
                                </select>
                    </div>
                    <br><br>
                    <label for="correo">Correo</label><br>
                    <input class="todos" type="email" value="" name="correo" placeholder="*opcional" id="correo">
                    <br><br>
                    <label for="telefono">Telefono</label><br>
                    <input class="todos" type="number" value="" name="telefono" maxlength="10" placeholder="*opcional" id="telefono">
                    <br><br>
                    <label for="tecnico-Asig">Tecnico Asignado</label><br>
                    <input class="todos" type="number" value="" name="tecnico-Asig" placeholder="*opcional" id="tecnico-Asig" readonly>
                    <br><br>
                    <label for="id_soliTicket">ID de solicitud ticket</label><br>
                    <input class="todos" type="number" value="" name="id_soliTicket" placeholder="*opcional" id="id_soliTicket" readonly>
                    <br><br>
                    @if (isset($NoSoliTickets))
                    <label for="estado">Estado</label><br>
                    <div style="width: 100%; height:100% " class="todos">
                        <select style="width: 75%; height:75%" name="estado" id="estado" disabled>
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                            <option value="Sin Asignar">Sin Asignar</option>
                            <option value="Pendiente">Pendiente</option>
                        </select>
                    </div>
                    <input type="hidden" value="" name="estado" id="estado">
                    <br><br>
                    @endif
                    <div class="btn-crear">
                        @if(isset($NoSoliTickets))
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