<div id="overlay1" {{--onclick="off()"--}}>
    <div class="fondo">
        <i style="color:white;" onclick="off(this.id)" id="1">&#10006;</i>
        <div class="card">
            <div class="bar-titulo">
                <p><strong>Refacciones</strong></p>
            </div>
            <div class="campos">
                <form action="{{asset('/crSparePart')}}" method="POST" enctype="multipart/form-data" id="formRefacciones">
                    @csrf
                    <label for="imagen">Imagen(es) de la pieza</label><br>
                    <input class="img-file" type="file" value="" name="imagen" id="imagen">
                    <br><br>
                    <label for="name">Nombre</label><br>
                    <input class="nombrein" type="text" value="" name="name" id="name">
                    <br><br>
                    <label for="descripcion">Descripcion</label><br>
                    <textarea class="text_area" name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
                    <br><br>
                    <label for="cantidad">Cantidad</label><br>
                    <input class="cantidadin" type="number" value="" name="cantidad" id="cantidad">
                    <br><br>
                    <label for="codigo">Codigo</label><br>
                    <input class="codigoin" type="text" value="" name="codigo" id="codigo">
                    <br>
                    <br>
                    @if (isset($refacciones))
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
                        @if (isset($refacciones))
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