<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>HOME</title>
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   <?php include("encabezado.php")?>
</head>
<!-- body -->

<body class="main-layout">
   <!-- banner -->
   <section class="banner_main">
      <div class="container">
         <div class="row">
            <div class="col-md-7 col-lg-7">
               <div class="text-bg">
                  <h1>Bienvenidos a<br>GreenLoop</h1>
                  <p>Aplicación que te guiará a puntos más cercanos para reciclar</p>
               </div>
            </div>
            <div class="col-md-5 col-lg-5">
               <div class="ban_img">
                  <figure><img src="images/ba_ing.png" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- end banner -->
   <!-- about section -->
   <div id="about" class="about">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12 col-lg-7">
               <div class="about_box">
                  <div class="titlepage">
                     <h2><strong class="yellow">Sobre Nosotros</strong><br> TE PODEMOS AYUDAR A RECICLAR</h2>
                  </div>
                  <h3>TODO LO QUE NECESITAS EN UNA SOLUCIÓN</h3>
                  <span>AYUDA A QUE TU PRÓXIMA CARRERA SEA MÁS FÁCIL Y <br>EFICIENTE</span>
                  <p>En nuestra aplicación de reciclaje, hemos diseñado una experiencia enfocada en la funcionalidad, 
                     asegurando que cada usuario encuentre fácilmente las herramientas necesarias para contribuir al reciclaje</p>
               </div>
            </div>
            <div class="col-md-12 col-lg-5">
               <div class="about_img">
                  <figure><img src="../images/download (5).jpeg" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </div>
   
   </div>
   <!-- service section -->
   <!-- portfolio -->
   <div class="portfolio">
      <div id="myCarousel" class="carousel slide portfolio_Carousel " data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item">
               <div class="container">
                  <div class="carousel-caption">
                     <div class="row">
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf1.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf2.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf3.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf4.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <a class="read_more" href="#">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   
   <!-- end business  section -->
   
   <!-- contact  section -->
   <div id="contact" class="contact ">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2><strong class="yellow">Contactos</strong><br>Require llamar</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-8 offset-md-2">
               <form id="post_form" class="contact_form">
                  <div class="row">
                     <div class="col-md-12 ">
                        <input class="contact_control" placeholder=" Nombre" type="type" name="Name">
                     </div>
                     <div class="col-md-12">
                        <input class="contact_control" placeholder="Correo electronico" type="type" name="Email">
                     </div>
                     <div class="col-md-12">
                        <input class="contact_control" placeholder="Número de celular " type="type" name="Phone Number ">
                     </div>
                     <div class="col-md-12">
                        <textarea class="textarea" placeholder="Mensaje" type="type" Message="Name"></textarea>
                     </div>
                     <div class="col-md-12">
                        <button class="send_btn">Enviar</button>
                     </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   </div>
   <!-- end contact  section -->
   <?php include ("footer.php");?>
   <!-- end footer -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
</body>

</html>