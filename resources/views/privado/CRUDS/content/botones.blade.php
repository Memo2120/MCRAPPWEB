
    

<h1 style="font-size: 45px; width:1300px; text-align:center;">Menu Principal</h1>
<br><br>
<div class="div_scroll">

    <div class="dropdown">
            <button class="dropbtn">Refacciones</button>
        <div class="dropdown-content">
            <button style="min-width: 100%" id="1" onclick="on(this.id)">Agregar Refacciones</button>
            <button style="min-width: 100%"><a href="{{asset('showSpareParts')}}">Mostrar refacciones</a></button>
        </div>
    </div>

    <div class="dropdown">
            <button class="dropbtn">Solicitud Tickets</button>
        <div class="dropdown-content">
            <button style="min-width: 100%" id="2" onclick="on(this.id)">Agregar Solicitud de Tickets</button>
            <button style="min-width: 100%"><a href="{{asset('ticketsNoAsignados')}}"> Mostrar Solicitud de Tickets</a></button>
        </div>
    </div>

    <div class="dropdown">
            <button class="dropbtn">Usuarios</button>
        <div class="dropdown-content">
            <button style="min-width: 100%" id="3" onclick="on(this.id)">Agregar Usuarios</button>
            <button style="min-width: 100%"> <a href="{{asset('showUsuarios')}}">Mostrar Usuarios</a> </button>
        </div>
    </div>

    <div class="dropdown">
            <button class="dropbtn">Tecnicos</button>
        <div class="dropdown-content">
            <button style="min-width: 100%" id="4" onclick="on(this.id)">Agregar Tecnicos</button>
            <button style="min-width: 100%"> <a href="{{asset('showTecnicos')}}">Mostrar Tecnicos</a> </button>
        </div>
    </div>

    <div class="dropdown">
            <button class="dropbtn">Tickets</button>
        <div class="dropdown-content">
            <button style="min-width: 100%" id="5" onclick="on(this.id)">Agregar Tickets</button>
            <button style="min-width: 100%"><a href="{{asset('ticketsNoAsignados')}}"> Mostrar Tickets </a></button>
        </div>
    </div>
</div>

<br>
<br>
<br>
<br>
<br>

    
