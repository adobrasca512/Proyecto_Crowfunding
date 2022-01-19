<?php 
require_once('bd/index.php');
$bd=new MiBD();
  session_start(); 

  
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
  }
  $bd->newsLetterCP();
?>
<!DOCTYPE html>
<html lang="es-MX">
   <head>
      <!--lenguaje-->
      <meta charset="utf-8">
      <meta http-equiv="content-language"  content="SP">
      <meta name='language' content='sp'>
      <!--logo-->
      <link rel="icon" href="_images/Logos/logo.ico">
      <!--escala-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--informacion pagina-->
      <meta name='copyright' content='© 2021, Parkty Platform S.A' />
      <meta name="author" content="Adilem Dobras">
      <meta name="description" content="El proyecto Parkting es una empresa con fines de lucro que desea insentivar a los estudiantes a realizar tanto como actividades distintas para un mejor desarrollo social y eductativo.">
      <!--Titulo-->
      <title>Parkting</title>
      <!--Hoja de estilos-->
      <link rel="stylesheet" href="css/styles.css">
      <!--librerias-->
      <script src="https://kit.fontawesome.com/77d3e24710.js" crossorigin="anonymous"></script>
   </head>
   <body>
      <!-------------------------------------------->
      <!--Menu Seccion Superior-->
      <!-------------------------------------------->
      <header id='main-menu'class="menu">
         <a href="#" class="brand"><img src="_images/Logos/Logo.png"></a>
         <div class="menu-btn"></div>
         <div class="navigation">
            <div class="navigation-items">
               <nav id="menu">
                  <ul>
                     <li><a href="about.php">About</a></li>
                     <li><a href="contact.php">Contact</a></li>
                     <li>
                        <a >Clubes</a>
                        <ul>
                           <li ><a href="clubes.php">Clubes</a></li>
                           <li ><a href="Ranking.php">Ranking</a></li>
                           <li ><a href="donacion.php">Donaciones</a></li>
                        </ul>
                     </li>
                     <li> <?php $bd->session('x') ?></li>
                  </ul>
               </nav>
            </div>
         </div>
      </header>
      <!-------------------------------------------->
      <!--Novedades-->
      <!-------------------------------------------->
      <main class="main-container">
         <section class="home">
            <video class="video-slide active" src="_images/video-slides/video-slide1.mp4" autoplay muted loop></video>
            <video class="video-slide" src="_images/video-slides/video-slide2.mp4" autoplay muted loop></video>
            <video class="video-slide" src="_images/video-slides/video-slide3.mp4" autoplay muted loop></video>
            <video class="video-slide" src="_images/video-slides/video-slide4.mp4" autoplay muted loop></video>
            <video class="video-slide" src="_images/video-slides/video-slide5.mp4" autoplay muted loop></video>
            <div class="content active">
               <h1>“Llevadera es la labor cuando muchos comparten la fatiga.”</h1>
               <h2>Donemos.<br><span>Crowfunding</span></h2>
               <h3>Abierto a Donaciones a partir de 5 euros.</h3>
               <!--<h4>Club de fotografía paisajistica</h4>-->
               <p>Un granito de arena puede parecer pequeño e insignificante pero muchos granitos reunidos pueden hacer una montaña gigante. Por favor súmate a esta buena causa, tu aporte es importante para los clubes. Nuestro Proyecto Crowfunding apoya a los clubes primerisos que necesitan un apoyo para lograr metas, para poder realizar actividades o necesitan fondos para el uso de sus locales. Estos clubes estan compuestos de personas proactivas, niños, jovenes y personas de todas las edades, incluso puede que alguno te guste! Simplemente atrevete a ser un donador. Despues de donar te volveras un gran aliado del Club y puede que te den bonificaciones!. Recuerda cuando haces el bien la vida te lo retribuye.Por favor ayúdanos, necesitamos donantes. Tu dinero será destinado a un bien muy grande.</p>
               <a href="donacion.php">Dona</a>
            </div>
            <div class="content">
               <h1>Atrevete a Donar</h1>
               <h2>Expresate.<br><span>Disfruta</span></h2>
               <h3>Abierto a Donaciones a partir de 5 euros.</h3>
               <h4>Club de Baile</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
               <a href="donacion.php">Dona</a>
            </div>
            <div class="content">
               <h1>Novedades</h1>
               <h2>Degusta.<br><span>Saborea</span></h2>
               <h3>Abierto a Donaciones a partir de 5 euros.</h3>
               <h4>Club de fotografia</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
               <a href="donacion.php">Dona</a>
            </div>
            <div class="content">
               <h1>Novedades</h1>
               <h2>Coopera.<br><span>Se voluntario</span></h2>
               <h3>Abierto a Donaciones a partir de 5 euros.</h3>
               <h4>Club de redes sociales</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
               <a href="donacion.php">Dona</a>
            </div>
            <div class="content">
               <h1>Atrevete a Donar</h1>
               <h2>Feel Nature.<br><span>Relax</span></h2>
               <h3>Abierto a Donaciones a partir de 5 euros.</h3>
               <h4>Club de </h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
               <a href="donacion.php">Dona</a>
            </div>
            <div class="content">
               <h1>Atrevete a Donar</h1>
               <h2>Train your mind.<br><span>Focus</span></h2>
               <h3>Abierto a Donaciones a partir de 5 euros.</h3>
               <h4>Club de Voluntariado</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
               <a href="donacion.php">Dona</a>
            </div>
            <!--Iconos laterales-->
            <div class="media-icons">
               <a href="#"><i class="fab fa-facebook-f"></i></a>
               <a href="#"><i class="fab fa-instagram"></i></a>
               <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
            <div class="slider-navigation">
               <div class="nav-btn active"></div>
               <div class="nav-btn"></div>
               <div class="nav-btn"></div>
               <div class="nav-btn"></div>
               <div class="nav-btn"></div>
            </div>
            </div>
         </section>
         <!-------------------------------------------->
         <!--Cookies-->
         <!-------------------------------------------->
         <div class="display-cookies">
            <div class="cookies">
               <button id="close">&times;</button>
               <h1>Aviso de cookies</h1>
               <p>Este Sitio utiliza cookies, incluidas cookies de terceros, para funcionar correctamente, realizar análisis estadísticos, ofrecerle una mejor experiencia y enviar nuestros mensajes publicitarios online de acuerdo con sus preferencias. Consulte la Política de cookies para obtener más información y para saber qué cookies se están utilizando y cómo desactivarlas o retirar su consentimiento. Para configurar sus preferencias acerca de las cookies, haga clic aquí.
                  Al cerrar el banner o hacer clic en "Acepto", da su consentimiento al uso de cookies.
               </p>
               <button id="acepto">Acepto</button>
            </div>
         </div>
         <!----------------------------------------->
         <!----------menu fixed-------------->
         <!-------------------------------------------->
         <div class="menu-fixed">
            <div class="menu-sticky" id="display-menu">
               <nav>
                  <ul>
                     <li><a href="#main-menu">Parkty</a></li>
                     <li><a href="About.php">About</a></li>
                     <li><a href="Contact.php">Contact</a></li>
                     <li><a href="Clubes.php">Clubes</a></li>
                     <li><a href="php_inicio_sesion.php">Sign In</a></li>
                    
                  </ul>
               </nav>
            </div>
         </div>
         <!--------------------------------------------->
         <div class="Carrusel-Slides">
            <div class="Carrusel-Slide-Pane">
               <div class="Carrusel-Display-Button" id="prev" >   
                  <input type="button" value="<" onclick="plusSlides(-1)">  
               </div>
               <div class="Carrusel-Display-Pane">
                  <div class="Carrusel-Display-InMove">
                     <!-------------Carrusel--------------->  
                     <div  class="Carrusel-Slide ">
                        <!-------------Slide Texto--------------->    
                        <div class="slide fade">
                           <div class="Title">
                              <span class="block"></span>
                              <h1 class="h1-animation">Sabias que...</h1>
                           </div>
                           <div class="Description description-animation">
                              <h2 class="h2-animation">El club de lectura se han recaudado 80 euros. Es una Liga AIF ganadora de la copa de oro masculina. Abre para jugadores sub-19 y sub-20. </h2>
                           </div>
                           <div class="Descubre">
                              <a href="#" class="link">
                                 <span class="mask">
                                    <div class="link-container">
                                       <span class="link-title1 title">READ MORE</span>
                                       <span class="link-title2 title">READ MORE</span>
                                    </div>
                                 </span>
                                 <div class="link-icon">
                                    <svg class="icon" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                       <path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z" />
                                    </svg>
                                    <svg class="icon" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                       <path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z" />
                                    </svg>
                                 </div>
                              </a>
                           </div>
                        </div>
                        <!-------------Slide Imagen--------------->         
                        <div class="slide fade">
                           <div class=""><img src="_images/Promociones/promocion1.jpg" ></div>
                        </div>
                     </div>
                     <!-------------Carrusel--------------->  
                     <div class="Carrusel-Slide">
                        <!-------------Slide Texto--------------->  
                        <div class="slide">
                           <div class="Title">
                              <span class="block"></span>
                              <h1 class="h1-animation">Sabias que...</h1>
                           </div>
                           <div class="Description description-animation">
                              <h2 class="h2-animation">Ahora por suscribirte con tu carné estudiantil cuentas con el 20% de descuento en viajes maximos de 1hr.</h2>
                           </div>
                           <div class="Descubre">
                              <a href="#" class="link">
                                 <span class="mask">
                                    <div class="link-container">
                                       <span class="link-title1 title">READ MORE</span>
                                       <span class="link-title2 title">READ MORE</span>
                                    </div>
                                 </span>
                                 <div class="link-icon">
                                    <svg class="icon" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                       <path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z" />
                                    </svg>
                                    <svg class="icon" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                       <path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z" />
                                    </svg>
                                 </div>
                              </a>
                           </div>
                        </div>
                        <!-------------Slide Imagen--------------->          
                        <div class="slide fade">
                           <div class=""><img src="_images/Promociones/promocion2.jpg" ></div>
                        </div>
                     </div>
                     <!-------------Carrusel--------------->  
                     <div class="Carrusel-Slide">
                        <!-------------Slide Texto--------------->  
                        <div class="slide">
                           <div class="Title">
                              <span class="block"></span>
                              <h1 class="h1-animation">Sabias que...</h1>
                           </div>
                           <div class="Description description-animation">
                              <h2 class="h2-animation">El club de ping pong recaudo 100 euros en un torneo para novatos vs veteranos en el club.</h2>
                           </div>
                           <div class="Descubre">
                              <a href="#" class="link">
                                 <span class="mask">
                                    <div class="link-container">
                                       <span class="link-title1 title">READ MORE</span>
                                       <span class="link-title2 title">READ MORE</span>
                                    </div>
                                 </span>
                                 <div class="link-icon">
                                    <svg class="icon" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                       <path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z" />
                                    </svg>
                                    <svg class="icon" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                       <path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z" />
                                    </svg>
                                 </div>
                              </a>
                           </div>
                        </div>
                        <!-------------Slide Imagen--------------->          
                        <div class="slide fade">
                           <div class=""><img src="_images/Promociones/promocion3.jpg" ></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="Carrusel-Display-Button" id="next">
                  <input type="button" name="" value=">" onclick="plusSlides(1)">
               </div>
            </div>
         </div>
         <script></script>
         <!-----------------------PUBLICIDAD PAGADA--------------->
         <div class="contenedor">
            <div class="espacio">
               <img class="publicity" src="_images/Publicidad/publicidad1.jpg" alt="Tu dispositivo no tolera este tipo de imagenes">
               <div class="title-h1"><h1  class="titulo-publicidad">Disfruta del arte</h1></div>
               <div class="title-h2">
               <h2 class="subtitulo-publicidad">Apoya al club de arte</h2></div>
               <a href="#" class="link-publicitario">Descubre nuestro club</a>
            </div>
            <div class="espacio">
               <img class="publicity" src="_images/Publicidad/publicidad2.jpg">
               <div class="title-h1"><h1  class="titulo-publicidad">Temporada de historia</h1></div>
               <div class="title-h2"><h2 class="subtitulo-publicidad">Apoya al club de lectura</h2> </div>
               <a href="#" class="link-publicitario">Descubre nuestro club</a>
            </div>
         </div>
         </div>
         </div>
         <!--------------------------------------------------->
         <div class="suscripciones-pane">
            <!---Contendra al sticky--->
            <div class="suscripciones-container">
               <!--Aqui meto el video-->
               <video class="suscription-video" src="_images/suscripcion.mp4" autoplay muted loop> </video>
            </div>
            <div class="suscripcion">
               <div class="suscription-data">
                  <form method="POST">
                  <p>News Letter</p>
                  <h1>Be Active<span>.</span></h1>
                  <input type="text" id="name" name="email" required
                     minlength="5" maxlength="22" placeholder="Email Adress" >
                  <div class="suscription-input">
                     <input type="number" placeholder="Zip Code" id="cp" name="cp" required
                        minlength="5" maxlength="10" size="10">
                     <input class="data-button" href=""type="submit"  value="Sign Up >" name="submit">
                     </form>
                  </div>
                  <p>By submitting, you give Parkting permission to store and process your personal information so we can provide you with the content you’ve requested. For more information, please see our Privacy Policy.</p>
               </div>
            </div>
         </div>
      </main>
      <!--------------------------------------------------->
      <!---------------------FOOTER------------------->
      <footer class ="footer-container">
         <div class="footer-contenedor">
            <div class="fotter-division" id="brand">
               <img class="logo-footer" src="_images/Logos/Logo.png">
            </div>
            <div class="fotter-division">
               <h1>more info</h1>
               <ul>
                  <li class="footer-info">
                     <div class="footer-division-link"><a class="footer-info-link" id="info-about" href="#">Clubes</a></div>
                  </li>
                  <li class="footer-info">
                     <div class="footer-division-link"><a class="footer-info-link" id="info-about" href="#">Ranking</a></div>
                  </li>
                  <li class="footer-info">
                     <div class="footer-division-link"><a class="footer-info-link" id="info-about" href="#">Donaciones</a></div>
                  </li>
               </ul>
            </div>
            <div class="fotter-division">
               <h1>company</h1>
               <ul>
                  <li class="footer-info">
                     <div class="footer-division-link"><a class="footer-info-link" id="info-about" href="#">About</a></div>
                  </li>
                  <li class="footer-info">
                     <div class="footer-division-link"><a class="footer-info-link" id="info-about" href="#">Contact</a></div>
                  </li>
                
               </ul>
            </div>
            <div class="fotter-division">
               <h1>User</h1>
               <ul>
               <?php $bd->sessionFooter('') ?>
                 
               </ul>
            </div>
         </div>
         <div class="separation"></div>
         <div class="terms-use-grid">
            <div class="terms"><a href="privacy_politics.html">privacy policy</a>
            </div>
            <div class="terms"><a href="terms_of_use.html">terms of use</a></div>
            <div class="terms"><a href="cookies_politics.html">cookies policy</a></div>
            <div class="terms">
               <p>  &#169; Copyright Parkting, Inc 2021. All right reserved.</p>
            </div>
            <div class="terms"><a href=""><i class="fab fa-linkedin-in"></i></a><a href=""><i class="fab fa-instagram"></i></a>
               <a href=""><i class="fab fa-twitter"></i></a>
            </div>
         </div>
      </footer>
      <!--------------------------------------------------->
      <!---------------Declaro mi script------------------->
      <script src="js/myScript.js"></script>
   </body>
</html>