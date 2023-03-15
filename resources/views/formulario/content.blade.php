
    <div class="container-fluid py-5" >
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Solicitud</h6>
                <h1 class="font-secondary display-4">Registro</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form">
                        <div id="success"></div>


                        <form action="{{asset('/registrarSolicitud')}}" method="POST">
                            @csrf
                            <div class="form-row">
                                
                                <div class="col-sm-12 control-group">
                                    <input type="email" class="form-control bg-secondary border-0 py-4 px-3" id="email" name="email" placeholder="ingresa tu correo" required="required" data-validation-required-message="Por favor introduce correo" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            
                            <div class="col-sm-13 control-group">
                                <input type="text" class="form-control bg-secondary border-0 py-4 px-3" id="telefono" name="telefono" placeholder="Tu numero de celular"  required="required" data-validation-required-message="Por favor introduce numero Celular" />
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="col-sm-13 control-group">
                                <input type="text" class="form-control bg-secondary border-0 py-4 px-3" id="direccion" name="direccion" placeholder="Dirección particular" required="required" data-validation-required-message="Por favor introduce tu dirección" />
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="control-group">
                                <select name="zona" id="zona" class="form-control bg-secondary border-0 py-2 px-3">
                                    <option value="">Zona de donde se ubica</option>
                                    <option value="Tlaquepaque">Tlaquepaque</option>
                                    <option value="Guadalajara">Guadalajara</option>
                                    <option value="Tonala">Tonalá</option>
                                    <option value="Tlajomulco">Zapopan</option>
                                </select>
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="col-sm-13 control-group">
                                <input type="text" class="form-control bg-secondary border-0 py-4 px-3" id="titulo" name="titulo" placeholder="Titulo del problema" required="required" data-validation-required-message="Por favor introduzca un titulo" />
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="control-group">
                                <textarea class="form-control bg-secondary border-0 py-2 px-3" rows="6" id="descripcion" name="descripcion" placeholder="Descripción del problema" required="required" data-validation-required-message="Por favor introduce una descripción"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>

                         
                            
                            <div class="text-center">
                                <button class="btn btn-primary font-weight-bold py-3 px-5" type="submit" id="enviar">Enviar solicitud</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>