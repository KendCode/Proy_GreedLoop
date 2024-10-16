   <link rel="stylesheet" href="../css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="../css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="../css/responsive.css">
   <link rel="stylesheet" href="../css/owl.carousel.min.css">
   <!-- fevicon -->
   <link rel="icon" href="../images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<header>
   <div class="header">
      <div class="header_midil text-center">
         <div class="container">
            <div class="row d_flex justify-content-center">
               <div class="col-md-4 col-sm-4 text-center">
                  <p style="font-size: 50px; color: #8FD14F;">Green<span style="color: green;">Loop</span></p>
               </div>
            </div>
         </div>
      </div>
      <!-- header inner -->
      <div class="header_bo">
         <div class="container">
            <div class="row">
               <div class="col-md-9 col-sm-7">
                  <nav class="navigation navbar navbar-expand-md navbar-dark ">
                     <!--Sector perfil-->
                     <ul class="navbar-nav ml-auto">
                        <!-- Perfil -->
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <img src="../images/kender.png" alt="User Image" class="rounded-circle" style="width: 30px; height: 30px; margin-right: 10px;">
                              <span><?php
                                 session_start();
                                 include("../controladores/conexion.php");

                                 if (isset($_SESSION['usuario'])) {
                                    echo (" " . $_SESSION['usuario']);
                                 } elseif (isset($_SESSION['agente'])) {
                                    echo (" " . $_SESSION['agente']);
                                 } else {
                                    echo "Usuario no autenticado";
                                 }
                              ?></span>
                           </a>
                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <!-- Opciones del Dropdown -->
                              <a class="dropdown-item" href="perfil.php">Perfil</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="logout.php">Cerrar sesión</a>
                           </div>
                        </li>
                     </ul>
                     <!--Fin sector perfil-->
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarsExample04">
                        
                        <ul class="navbar-nav mr-auto">
                           <li class="nav-item active">
                              <a class="nav-link" href="index(usu).php"> Principal </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="about.php">acerca de</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="servicios.php">servicios</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="team.php">equipo </a>
                           </li>
                        </ul>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>

   <!-- end header inner -->
   <!-- end header -->
   <script src="../js/jquery.min.js"></script>
   <script src="../js/popper.min.js"></script>
   <script src="../js/bootstrap.bundle.min.js"></script>
   <script src="../js/jquery-3.0.0.min.js"></script>
   <script src="../js/owl.carousel.min.js"></script>
   <!-- sidebar -->
   <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="..js/custom.js"></script>