<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">Multiservicios CRA</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
    
      <li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Tickets Sin asignar</span>
        </a>
         <span class="tooltip">Tickets Sin asignar</span>
      </li>
      <li>


       <a href="#">
         <i class='bx bx-user' ></i>
         <span class="links_name">Tecnicos</span>
       </a>
       <span class="tooltip">Tecnico</span>
     </li>
     
       <span class="tooltip">Setting</span>
     </li>
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



 

