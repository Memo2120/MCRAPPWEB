<div id="overlay1" {{--onclick="off()"--}}>
    <div class="fondo">
        <i style="color:white;" onclick="off(this.id)" id="1">&#10006;</i>
        <div class="card">
            <div class="bar-titulo">
                <p><strong>Refacciones</strong></p>
            </div>
            <div class="campos">
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="imagenes">Imagen(es) de la pieza</label><br>
                    <input class="img-file" type="file" value="" name="imagenes" >
                    <br><br>
                    <label for="name">Nombre</label><br>
                    <input class="nombrein" type="text" value="" name="name">
                    <br><br>
                    <label for="descripcion">Descripcion</label><br>
                    <textarea class="text_area" name="descripcion" id="" cols="30" rows="10"></textarea>
                    <br><br>
                    <label for="cantidad">Cantidad</label><br>
                    <input class="cantidadin" type="number" value="" name="cantidad">
                    <br><br>
                    <label for="codigo">Codigo</label><br>
                    <input class="codigoin" type="text" value="" name="codigo">
                    <br>
                    <br>
                    <div class="btn-crear">
                        <button>Crear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>