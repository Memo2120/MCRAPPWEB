
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5" id="home">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="{{asset('img/fondo.webp')}}" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Multiservicios CRA</h4>
                            <h3 class="display-2 font-secondary text-white mb-4">Los mejores en reparación</h3>
                            <a class="btn btn-light font-weight-bold py-3 px-5 mt-2 btn-scroll" href="#contact">Iniciar</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="{{asset('img/nose.jpg')}}" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Multiservicios CRA</h4>
                            <h3 class="display-2 font-secondary text-white mb-4">Reparación de linea blanca</h3>
                            <a class="btn btn-light font-weight-bold py-3 px-5 mt-2 btn-scroll" href="#contact">Iniciar</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev justify-content-start" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary px-0" style="width: 68px; height: 68px;">
                    <span class="carousel-control-prev-icon mt-3"></span>
                </div>
            </a>
            <a class="carousel-control-next justify-content-end" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary px-0" style="width: 68px; height: 68px;">
                    <span class="carousel-control-next-icon mt-3"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid mb-4 mb-lg-0" src="{{asset('img/blan.jpg')}}" alt="">
                </div>
                <div class="col-lg-7">
                    <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Nosotros</h6>
                    <h1 class="display-4 mb-3"><span class="text-primary">6+ Años de experencia </span> Reparando tus productos</h1>
                    <p>INFORMACION</p>
                    <a class="btn btn-primary font-weight-bold py-3 px-5 mt-2" type="button" data-toggle="modal" data-target="#exampleModalLong">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Servicios -->
    <div class="container-fluid py-5" id="service">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Servicios</h6>
                <h1 class="font-secondary display-4">Algunos de nuestros servicios</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <div class="product-item mb-2">
                        <div class="product-img">
                            <img class="img-fluid" src="{{asset('img/lav.png')}}" alt="">
                            <a href="{{route('solicitudes')}}" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                <i class="fa fa-2x fa-plus text-white"></i>
                            </a>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <a href="{{route('solicitudes')}}"><h3 class="m-0">Lavadoras</h3></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="product-item mb-2">
                        <div class="product-img">
                            <img class="img-fluid" src="{{asset('img/est.png')}}" alt="">
                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                <i class="fa fa-2x fa-plus text-white"></i>
                            </a>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <a href="{{route('solicitudes')}}"><h3 class="m-0">Estufas</h3></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="product-item mb-2">
                        <div class="product-img">
                            <img class="img-fluid" src="{{asset('img/ref.png')}}" alt="">
                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                <i class="fa fa-2x fa-plus text-white"></i>
                            </a>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <a href="{{route('solicitudes')}}"><h3 class="m-0">Refrigeradores</h3></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->





    <!-- FAQs Start -->
    <div class="container-fluid py-5" id="faqs">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h1 class="display-4">¿Por qué elegirnos?</h1>
            </div>
            <div class="row">
                <div class="col-md-6 border-right border-primary">
                    <div class="text-center text-md-right mr-md-3 mb-4 mb-md-0">
                        <h3 class="mb-4">Multiservicios CRA</h3>
                        <h5 class="mb-3"><i class="fa fa-check text-success float-md-right mr-2 mr-md-0 ml-md-2"></i>Mas de 6 años de experiencia</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-success float-md-right mr-2 mr-md-0 ml-md-2"></i>Expertos en linea blanca</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-success float-md-right mr-2 mr-md-0 ml-md-2"></i>Contacto en menos de 24hrs</h5>
                        <h5 class="mb-0"><i class="fa fa-check text-success float-md-right mr-2 mr-md-0 ml-md-2"></i>Garantia de 30 dias</h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center text-md-left ml-md-3">
                        <h3 class="mb-4">¿Por qué elegirnos?</h3>
                        <h5 class="mb-3"><i class="fa fa-check text-success mr-2"></i>La cotizacion es gratuita</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-success mr-2"></i>Usted puede hacer una solicitud de servicio</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-success mr-2"></i>Contacto directo con el tecnico</h5>
                        <h5 class="mb-0"><i class="fa fa-check text-success mr-2"></i>Refacciones de fuentes confiables</h5>
                    </div>
                </div>
                <div class="col-md-12 text-center pt-3">
                    <a class="btn btn-primary font-weight-bold py-3 px-5 mt-4 btn-scroll" href="#contact">Get A Quote</a>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5" id="testimonial">
        <div class="container py-5">
            <div class="section-title position-relative text-center" style="margin-bottom: 120px;">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Testimonios</h6>
                <h1 class="display-4">Comentarios de clientes</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-center">
                            <img class="img-fluid mx-auto mb-3" src="{{asset('img/testimonial-1.jpg')}}" style="width: 100px;">
                            <p style="font-size: 22px;">¡WOW! Nunca habia visto que un tecnico hiciera un diagnostico tan rapido, y que puedira arreglar mi probelma de una manera tan sencilla. 10/10</p>
                            <h4>Josh Peck</h4>
                            <span>Critico de restaurantes</span>
                        </div>
                        <div class="text-center">
                            <img class="img-fluid mx-auto mb-3" src="{{asset('img/testimonial-2.jpg')}}" style="width: 100px;">
                            <p style="font-size: 22px;">Sin duda uno de los mejores servicios de reparacion a linea blanca, un conocido me recomendo a esta empresa pero yo estaba esceptico. Sin embargo mis expectativas fueron superadas en cuanto el tecnico volvio con la pieza indicada y a tiempo.</p>
                            <h4>Juan Aguita</h4>
                            <span>E-sports manager</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

