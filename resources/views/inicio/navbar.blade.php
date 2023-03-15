<nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-dark navbar-dark py-1 py-lg-0 px-lg-5">
    <a href="index.html" class="navbar-brand d-block d-lg-none">
        <h1 class="display-4 text-white text-uppercase m-0">CRA</h1>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav ml-auto py-0">
            <a href="{{route('inicio')}}" class="nav-item nav-link active">Inicio</a>
            <a href="#about" class="nav-item nav-link">Nosotros</a>
            <a href="#service" class="nav-item nav-link">Servicios</a>
        </div>
        <a href="{{route('inicio')}}" class="navbar-brand bg-primary px-4 mx-3 d-none d-lg-block">
            <h1 class="display-4 text-white text-uppercase m-0">CRA</h1>
        </a>
        <div class="navbar-nav mr-auto py-0">
            <a href="#faqs" class="nav-item nav-link">¿Por qué?</a>
            <a href="#testimonial" class="nav-item nav-link">Testimonios</a>
            <a href="{{route('solicitudes')}}" class="nav-item nav-link">Sacar Cita</a>
        </div>
    </div>
</nav>