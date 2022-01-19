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
<html >
<head>
  <meta charset="UTF-8">
  <title>Historias</title>

    <link rel="icon" href="_images/Logos/logo.ico">
    <meta http-equiv=”Expires” content=”0″>
<meta http-equiv=”Last-Modified” content=”0″>
<meta http-equiv=”Cache-Control” content=”no-cache, mustrevalidate”>
<meta http-equiv=”Pragma” content=”no-cache”>

  <script src="https://use.typekit.net/vms5sey.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   <script src="https://kit.fontawesome.com/77d3e24710.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="css/styles_about_users_references.css">
<link rel="stylesheet" href="css/styles_base_about.css">
<link rel="stylesheet" type="text/css" href="css/styles_footer.css">
  
</head>

<body>
   <!--Menu Seccion Superior-->
      <header class="menu">
         
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
     <li><a href='about.php'>About</a></li>
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
 
<main class="main-container">
  <div class="contenido">
  <h1 class="title">Experiencias de nuestros usuarios</h1>
 <ul class='list'id="c"> 
    
    <li class="usuario1 user"><p><strong>Laura Perez</strong></p><p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><br>"Pienso que es un buen servicio digno de disfrutar y mejora todo."</p></li>
    <li  class="usuario2 user"><p><strong>José Ramón</strong></p><p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><br>"Creo que esta aplicacion la necesitaba para cuando estaba aburrido."</p></li>
    <li  class="usuario3 user"><p><strong>Carla Gonzales</strong></p><p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><br>"Muy bien presentada esta pagina."</p></li>
    <li  class="usuario4 user"><p><strong>Octavio Tuñon</strong></p><p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><br>"Todo perfecto pero hay veces que se cae la pagina."</p></li>

    <li  class="usuario5 user"><p><strong>Sandro Vela</strong></p><p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><br>"Una pagina muy util para mis hijos que estan en casa."</p></li>
    <li  class="usuario6 user"><p><strong>Jaime Pinilla</strong></p><p><i class="fas fa-star"></i><i class="fas fa-star"></i><br>"Ideal para cuando no sabes que hacer"</p></li>
    <li  class="usuario7 user"><p><strong>Javiera Ramos</strong></p><p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><br>"Muy buena aplicacion pero algunas actividades son muy tarde"</p></li>
    <li class="usuario8 user"><p><strong>Mia Hernandez</strong></p><p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><br>"Actividades cerca de donde vivo, genial."</p></li> 

    <li class="usuario9 user"><p><strong>Jasmin Torres</strong></p><p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><br>"Buena idea de proyecto."</p></li>
    <li class="usuario10 user"><p><strong>Enrique Santiago</strong></p><p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><br>"Espectacular, especialmente en dias festivos."</p></li>
    <li class="usuario11 user"><p><strong>Georgia Zurita</strong></p><p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><br>"Ayudaron a mi negocio a emprender"</p></li>
    <li class="usuario12 user"><p><strong>Andrea Mock</strong></p><p><i class="fas fa-star"></i><i class="fas fa-star"></i><br>"Gracias a esto mi actividad fue todo un exito."</p></li> 


  </ul>
  </div>
</main>
 <!--------------------------------------------------->
      <!---------------------FOOTER------------------->
      <footer class ="footer-container">
         <div class="footer-contenedor">
            <div class="fotter-division" id="brand">
               <img class="logo-footer" src="_images/Logos/Logo_negro.png">
            </div>
            <div id='division1'class="fotter-division">
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
            <div id='division2'class="fotter-division">
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
            <div id='division3'  class="fotter-division">
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
            <div id='item4'class="terms">
               <p>  &#169; Copyright Parkting, Inc 2021. All right reserved.</p>
            </div>
            <div id='item5'class="terms" id='protection'><a href=""><i class="fab fa-linkedin-in"></i></a><a href=""><i class="fab fa-instagram"></i></a>
               <a href=""><i class="fab fa-twitter"></i></a>
            </div>
         </div>
      </footer>

<script type="text/javascript" src="js/base_about.js"></script>
    <script src="js/myScript.js"></script>

 <script >
      about.displayUsersReviews();
 </script>
</body>
</html>
