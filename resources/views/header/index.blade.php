<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Multiservicios CRA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{asset('inicio')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('solicitarTicket')}}">Solicitar servicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>

          <li class="admin">
            <a class="nav-link" href=""> Mostrar </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=""> Crear </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=""> Editar </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=""> Borrar </a>
          </li>

          
        </ul>
        <form class="d-flex">
          <button class=" btnsesion"><a class="abtn" href="{{asset('sesion')}}">Search</a></button>
        </form>
      </div>
    </div>
  </nav>
</header>