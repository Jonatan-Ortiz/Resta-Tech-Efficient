<?php
session_start();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php?controlador=paginas&accion=inicio"><img src="vistas/recursos/images/logo1.png" alt="Logo" width="250" height="50" class="d-inline-block align-text-top"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?controlador=paginas&accion=inicio"><span class="bi bi-house-fill"> Inicio</span></a>
        </li>
      <ul class="nav navbar-nav navbar-right">
        <li class="d-flex my-auto">
          <?php
            if(isset($_SESSION["usuario"]) and $_SESSION['usuario']['perfil']=='usuario'){
              echo '<strong>';
              echo 'Hola Bienvenido <span class="bi bi-emoji-laughing"></span>&nbsp'.$_SESSION["usuario"]['nombre']."&nbsp&nbsp";
              echo '</strong>';
              echo '<li>';
              echo  '<a class="nav-link" href="index.php?controlador=programasUser&accion=listarProgramasUser"><span class="bi bi-card-checklist"> Programas</span></a>';
              echo '</li>'; 
              echo '<div  class="dropdown">'; 
              echo  '<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><span class="bi bi-collection"> Inscritos</span></a></button>';
              echo '<ul class="dropdown-menu bg-warning" aria-labelledby="dropdownMenuButton1">';
              echo '<li><a class="dropdown-item" href="index.php?controlador=gradosUser&accion=grados"><span class="bi bi-file-earmark-check-fill"></span> Grados</a></li>'; 
              echo '</div>';
              echo '<li>';
              echo  '<a class="nav-link" href="index.php?controlador=encargadosUser&accion=listarEncargadosUser"><span class="bi bi-file-earmark-person"></span> Encargados</a>';
              echo '</li>'; 
              echo '<li style="display:none">';
              echo  '<a class="nav-link" href="index.php?controlador=paginas&accion=login">Iniciar Sesión</a>';
              echo '</li>'; 
              echo '<li style="display:none">';
              echo '<a class="nav-link" href="index.php?controlador=paginas&accion=registro">Registrarse</a>';
              echo '</li>';
              echo '<div class="dropdown">';
              echo '<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><span class="bi bi-person-bounding-box"> Usuario|Perfil</span></button>';
              echo '<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">';
              echo  '<li><a class="dropdown-item" href="index.php?controlador=paginas&accion=cerrarsesion"><span class="bi bi-x-circle"> Cerrar Sesión</span></a></li>';
              echo '</ul>';
              echo '</ul>';
              echo '</div>';            
            }elseif(isset($_SESSION['usuario']) and $_SESSION['usuario']['perfil']=='admin'){
              echo '<strong>';
              echo 'Hola Bienvenido <span class="bi bi-emoji-laughing"></span>&nbsp'.$_SESSION["usuario"]['nombre']."&nbsp&nbsp";
              echo '</strong>';
          /* ahora se crea la opcion editar usuario y cerrar sesion */              
              echo '<li>';
              echo  '<a class="nav-link" href="index.php?controlador=programasAdmin&accion=listarProgramasAdmin"><span class="bi bi-card-checklist"> Programas</span></a>';
              echo '</li>'; 
              echo '<div  class="dropdown">'; 
              echo  '<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><span class="bi bi-collection"> Inscritos</span></a></button>';
              echo '<ul class="dropdown-menu bg-warning" aria-labelledby="dropdownMenuButton1">';
              echo '<li><a class="dropdown-item" href="index.php?controlador=gradosAdmin&accion=grados"><span class="bi bi-file-earmark-check-fill"></span> Grados</a></li>'; 
              echo '</div>';
              echo '<li>';
              echo  '<a class="nav-link" href="index.php?controlador=encargadosAdmin&accion=listarEncargadosAdmin"><span class="bi bi-file-earmark-person"></span> Encargados</a>';
              echo '</li>';               
              echo '<li style="display:none">';
              echo  '<a class="nav-link" href="index.php?controlador=paginas&accion=login">Iniciar Sesión</a>';
              echo '</li>'; 
              echo '<li style="display:none">';
              echo '<a class="nav-link" href="index.php?controlador=paginas&accion=registro">Registrarse</a>';
              echo '</li>';              
              echo '<div class="dropdown">';
              echo '<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><span class="bi bi-award"> Admi|Perfil</span></button>';
              echo '<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">';
              echo  '<li><a class="dropdown-item" href="index.php?controlador=paginas&accion=cerrarsesion"><span class="bi bi-x-circle"> Cerrar Sesión</span></a></li>';
              echo '</ul>';
              echo '</ul>';
              echo '</div>';             
            }else{
              echo '<li class="nav-item dropdown ">';
              echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span class="bi bi-card-checklist"> Contenido</span></a>';
              echo '<ul class="dropdown-menu bg-warning" aria-labelledby="navbarDropdown">';
              echo '<li><a class="dropdown-item" href="index.php?controlador=paginas&accion=encargados"><span class="bi bi-briefcase"> Encargados</span></a></li>';
              echo '<li><a class="dropdown-item" href="index.php?controlador=paginas&accion=login"><span class="bi bi-book"> Programas</a></li>';
              echo '<li><a class="dropdown-item" href="index.php?controlador=paginas&accion=login"><span class="bi bi-clipboard"> Inscritos</span></a></li>';                
              echo '</ul>';
              echo '</li>';
              echo '<li class="nav-item">';
              echo '<a class="nav-link" href="index.php?controlador=paginas&accion=nosotros"><span class="bi bi-people-fill"> Nosotros</span></a>';
              echo '</li>';
              echo '<li class="nav-item">';
              echo '<a class="nav-link" href="index.php?controlador=paginas&accion=contacto"><span class="bi bi-person-lines-fill"> Contacto</span></a>';
              echo '</li>';
              echo '</ul>';
              echo '<li>';
              echo '<a class="nav-link" href="index.php?controlador=paginas&accion=login"><span class="bi bi-file-person"> Iniciar Sesión</span></a>';
              echo '</li>';
              echo '<li>';
              echo '<a class="nav-link" href="index.php?controlador=paginas&accion=registro"><span class="bi bi-pencil-square"> Registrarse</span></a>';
              echo '</li>';
              echo '</nav>';
            }
          ?>
        </li>
      </ul>
    </div>
  </div>
</nav>