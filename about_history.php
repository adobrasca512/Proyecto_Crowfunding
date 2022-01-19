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
    
    <title>History</title>
   <link rel="stylesheet" type="text/css" href="css/styles_load.css">
      <link rel="stylesheet" href="css/styles_base_about.css">
      <meta http-equiv=”Expires” content=”0″>
<meta http-equiv=”Last-Modified” content=”0″>
<meta http-equiv=”Cache-Control” content=”no-cache, mustrevalidate”>
<meta http-equiv=”Pragma” content=”no-cache”>
         <link rel="stylesheet" href="css/styles_about_history.css">
      <link rel="icon" href="_images/Logos/logo.ico">
      <link rel="stylesheet" type="text/css" href="css/styles_footer.css">
	  
       <meta charset="utf-8">
  </head>
  <body>

<header >
  <div id="top">
        <ul class='menu-brand'>
         <li><a href='index.php' class='brand'>PARKTY</a></li>
       </ul>
         <div class='menu-btn'>
           
         </div>
         <div class='navigation'>
          <div class='navigation-items'>
            <nav id="menu">
<ul>     
     <li><a href='about.html'>About</a></li>
     <li><a href='contact.php'>Contact</a></li>
     <li> <a class="black">Clubes</a>
      <ul><li><a href='clubes.php'>Clubes</a></li>
        <li ><a class="black"href="Ranking.php">Ranking</a></li>
                           <li ><a class="black"href="donacion.php">Donaciones</a></li>
                         </ul></li>
                          <li><?php $bd->session('black') ?></li>
                          </ul></nav>
                           </div></div>
  
      </div>
     <div id="subtop"class="enlaces">
<nav class="submenu"><a href='about.php'>Fundadores</a><a href='about_history.php'>Historia</a><a href='about_users_references.php'>Las Historias</a></nav>
  
      </div>
</header>


<main>

  <!--Encabezado-->
  <div class="banner">
    <div class="overlay">
    <div class="banner-text"> <h1 class="head-title">La historia</h1><h2>Just Parkty</h2></div></div>
  </div>
       
        <div class="container-history" >
         
     
        <p class="introduccion">Parkty, es un proyecto croufunding encargado de apoyar a los clubes a alcanzar sus metas, es decir, cuando un club tenga la necesidad de algun item prioritario para la convivencia o existencia del club nosotros nos encargamos en que ellos puedan lanzar sus necesidades y que cualquier persona que desee les pueda contribuir. Ademas le damos la oportunidad a que se den ha conocer y que a su vez puedan patrocinar sus actividades.</p>
        <div class="content"><img class='content-img'src="_images/about-history/history-apoyo.jpg"><div class="content-text"><p class="cloud-text cloud-title">El Origen</p>
<p>En 2021 se fundó el Proyecto Parkty, que se encarga de darles un futuro a los clubes nuevos o antiguos que han sufrido problemas por causas del covid debido a que no cuentan con una cantidad de integrantes necesarias para poder pagar sus competencias o metas. </p></div></div>
    <div class="content1"><div class="content-text1"><p class="cloud-text cloud-title">Metas Alcanzadas</p>
<p>Parkty ha logrado contribuir a mas de 15 clubes en crisis y con falta de apoyo que lograron salir a flote generando mas de 30% de usuarios nuevos por parte de nuestra  conexion entre nosotros. </p></div><img class='content-img'src="_images/about-history/history-meta.jpg"></div>
<div class="content"></div>
    </div>
        
  </main>
  
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

<script type="text/javascript" src="js/base_about.js"></script>

    <script src="js/myScript.js"></script>
<script type="text/javascript">
about.displayImages();
</script>
  
  </body>
  </html>


 