<div class="sidebar">
  <div class="logo-details">
    {{-- <i class='mdi mdi-alpha-m-circle'></i> --}}
    <iconify-icon icon="emojione-monotone:circled-m"></iconify-icon>
      <div class="logo_name" style="font-size: 15px;">Multiservicios CRA</div>
      <i class='bx bx-menu' id="btn" ></i>
  </div>
  <ul class="nav-list">
  
    <li>
      <a href="{{asset('ticketsNoAsignados')}}">
        <i class='bx bx-grid-alt'></i>
        <span class="links_name">Tickets y solicitudes</span>
      </a>
      <span class="tooltip">Tickets y solicitudes</span>
    </li>

    <li>
      <a href="{{asset('btoones')}}">
        <i class='bx bx-food-menu' ></i>
        <span class="links_name">Menu Principal</span>
      </a>
      <span class="tooltip">Menu Principal</span>
    </li>

    {{-- SECCION DE LOS CRUD'S--}}
    {{-- <li>
      <a href="{{asset('/showTickets')}}">
        <i class='bx bx-align-justify' ></i>
        <span class="links_name">Tickets</span>
      </a>
      <span class="tooltip">Tickets</span>
    </li> --}}

    <li>
      <a href="{{asset('/showUsuarios')}}">
        <i class='bx bx-user' ></i>
        <span class="links_name">Usuarios</span>
      </a>
      <span class="tooltip">Usuarios</span>
    </li>

    <li>
      <a href="{{asset('/showTecnicos')}}">
        <i class='bx bx-wrench' ></i>
        <span class="links_name">Tecnicos</span>
      </a>
      <span class="tooltip">Tecnicos</span>
    </li>

    <li>
      <a href="{{asset('/showSpareParts')}}">
        <i class='bx bx-cog' ></i>
        <span class="links_name">Refacciones</span>
      </a>
      <span class="tooltip">Refacciones</span>
    </li>

    {{-- <li>
      <a href="{{asset('/asigTechSoli/{ticket}')}}">
        <i class='bx bx-bookmark-alt-plus' ></i>
        <span class="links_name">Solicitudes</span>
      </a>
      <span class="tooltip">Solicitudes</span>
    </li> --}}


    {{--TERMINO DE SECCION DE LOS CRUD'S--}}
    
    <li class="profile">
      <div class="profile-details">
        <img src="{{asset('img/yo.jpg')}}" alt="profileImg">
        <div class="name_job">
          <div class="name">Usuario</div>
          <div class="job">Cerrar Sesión</div>
        </div>
      </div>
      <i class='bx bx-log-out' id="log_out" ><a href=""></a></i>
    </li>
  </ul>
</div>



 

