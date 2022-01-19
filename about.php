      <?php 
require_once('bd/index.php');
$bd=new MiBD();
  session_start(); 

  
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
  }
  $bd->addPropuesta();
  $bd->addLikes();
?>
  <!DOCTYPE html>
  <html>
  <head>
    
    <title>About</title>
   
    <link rel="stylesheet" type="text/css" href="css/styles_load.css">
	<meta http-equiv=”Expires” content=”0″>
<meta http-equiv=”Last-Modified” content=”0″>
<meta http-equiv=”Cache-Control” content=”no-cache, mustrevalidate”>
<meta http-equiv=”Pragma” content=”no-cache”>
   <link rel="stylesheet" href="css/styles_base_about.css">
      <link rel="stylesheet" href="css/styles_about.css">  
      
      <link rel="icon" href="_images/Logos/logo.ico">
<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
       <script  src="js/vara.min.js"></script>
       <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- Slick Slider CSS -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- jQuery first, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- Slick Slider JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/styles_footer.css">
       <meta charset="utf-8">

  </head>
  <body>
 
    <header class="menu">
      <div id=top>
        <ul class="menu-brand">
         <li><a href='index.php' class='brand'>PARKTY</a></li>
       </ul>
         <div class='menu-btn'></div><div class='navigation'><div class='navigation-items'>
         <nav id="menu">
<ul>          <li><a href='about.php'>About</a></li><li><a href='contact.php'>Contact</a></li> <li> <a class="black">Clubes</a><ul><li><a href='clubes.php'>Clubes</a></li><li ><a class="black"href="Ranking.php">Ranking</a></li>
                           <li ><a class="black"href="donacion.php">Donaciones</a></li></ul></li> <li><?php $bd->session('black') ?></li>  </ul></nav></div></div>
  
      </div>
      
      <div id="subtop"class="enlaces">
<nav class="submenu"><a href='about.php'>Fundadores</a><a href='about_history.php'>Historia</a><a href='about_users_references.php'>Las Historias</a></nav>
  
      </div>
      
    </header>



    <main class="main-container">
        <div class="container-sticky" >

<h1>La fundadora</h1>
     <div class="sticky" id="container">
       <img src="_images/fundadora.jpg">
     </div>

        </div>
        <div class="memorias">
          <div class="container-memorias">
      <h2 class="quote">"QUE MI LEYENDA SIGA SU CAMINO. LE DESEO UNA BUENA Y LARGA VIDA".*</h2>
      <p>* Adilem Dobras, The Allure of Parkting © 2000, 5 de diciembre, www.Parkting.es</p>
  





    </div>
        </div>
       <div class="info">
          <img class="thumbnail" src="_images/about-fundadora/about1.jpg" alt="image">
         <div class="info-text">
           <h2>¿Que es Parkty?</h2>
           <p>Parkty es una compañia que se encarga en dar a conocer a clubes y sus eventos para brindarles apoyo y dar a conocer al publico las caracteristicas de aquellos clubes, ciertamente motivamos a las personas por medio de nuestra plataforma a crear un proceso social y participativo en donde puedan conocer personas y unirse a un grupo en el que se sientan incluidos y de su agrado. Ademas inspiramos a varias personas a crear un grupo de su gusto y poder ser lideres en ello. </p>
         </div>

       </div>
     <!--  <div class="mision-vision">
         <div class="text">
         <img id="large-img"  src="_images/about-fundadora/about2.jpg" alt="image">
        </div>
        <div class="text">
       <div class="vision">
         <h2>Parkty and <br><span>our vision</span></h2>

         <p>Tendremos una pagina que podra favorecer a toda clase de personas, siendo inclusivos y abiertos segun la modalidad del club, apoyaremos a los clubes que mas necesiten ayuda para ser propuestos e inculcaremos a los mismos a ser una sociedad activa con activa con actividades y medios para darlos a conocer.</p>
       </div>
        <div class="vision">
         <h2>Parkty and <br><span>OUR mision</span></h2>

         <p>Nuestra mision es elevar el animo de las personas a realizar lo que mas les guste hacer y que con ello puedan realizar amistades duraderas que posean el mismo gusto que ellos. Ampliaremos nuestra sociedad y seremos un servicio abierto y gratuito para todos los clubes que necesiten apoyo.</p>
       </div>
       </div>
       </div>-->

      <div class="row">
        <h2>Clubes Patrocinados</h2>
  <div class="container">
    <section class="logo-carousel slider" data-arrows="true">
      <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/image1.png"></div>
      <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/image2.png"></div>
      <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/image3.png"></div>
      <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/image4.png"></div>
      <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/image5.png"></div>
      <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/image6.png"></div>
      <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/image7.png"></div>
      <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/image8.png"></div>
    </section>
  </div>
</div>
<div class="social-media-container">
  <h3>Instagram</h3>
<div class="social-media">
 
   <div class="social"><img src="_images/about-fundadora/about3.jpg"><div class="overlay"><div class="text-overlay"><i class="fab fa-instagram"></i></div></div></div>
   <div class="social"><img src="_images/about-fundadora/about4.jpg"><div class="overlay"><div class="text-overlay"><i class="fab fa-instagram"></i></div></div></div>
   <div class="social"><img src="_images/about-fundadora/about5.jpg"><div class="overlay"><div class="text-overlay"><i class="fab fa-instagram"></i></div></div></div>
   <div class="social"><img src="_images/about-fundadora/about6.jpg"><div class="overlay"><div class="text-overlay"><i class="fab fa-instagram"></i></div></div></div>
  
</div>
</div>
       </main>  
 <!--------------------------------------------------->
      <!---------------------FOOTER------------------->
      <footer class ="footer-container">
         <div class="footer-contenedor">
            <div class="fotter-division" id="brand">
               <img class="logo-footer" src="_images/Logos/Logo_negro.png">
            </div>
            <div class="fotter-division">
               <h1>more info</h1>
               <ul>
                  <li class="footer-info">
                     <div class="footer-division-link"><a class="footer-info-link" id="info-about" href="clubes.php">Clubes</a></div>
                  </li>
                  <li class="footer-info">
                     <div class="footer-division-link"><a class="footer-info-link" id="info-about" href="Ranking.php">Ranking</a></div>
                  </li>
                  <li class="footer-info">
                     <div class="footer-division-link"><a class="footer-info-link" id="info-about" href="donacion.php">Donaciones</a></div>
                  </li>
               </ul>
            </div>
            <div class="fotter-division">
               <h1>company</h1>
               <ul>
                  <li class="footer-info">
                     <div class="footer-division-link"><a class="footer-info-link" id="info-about" href="about.php">About</a></div>
                  </li>
                  <li class="footer-info">
                     <div class="footer-division-link"><a class="footer-info-link" id="info-about" href="contact.php">Contact</a></div>
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
            <div id='item1'class="terms"><a href="privacy_politics.html">privacy policy</a>
            </div>
            <div id='item2'class="terms"><a href="terms_of_use.html">terms of use</a></div>
            <div id='item3'class="terms"><a href="cookies_politics.html">cookies policy</a></div>
            <div id='item4' class="terms">
               <p>  &#169; Copyright Parkting, Inc 2021. All right reserved.</p>
            </div>
            <div id='item5' class="terms"><a href=""><i class="fab fa-linkedin-in"></i></a><a href=""><i class="fab fa-instagram"></i></a>
               <a href=""><i class="fab fa-twitter"></i></a>
            </div>
         </div>
      </footer>
      <!--------------------------------------------------->
      <!---------------Declaro mi script------------------->
        
 
<script type="text/javascript" src="js/base_about.js"></script>
   <script >  
   about.getLetters();
     window.onload=about.getImageAnimation('thumbnail');
     about.displayIcons();
   </script>
 
    <script src="js/myScript.js"></script>
  </body>
  </html>


 