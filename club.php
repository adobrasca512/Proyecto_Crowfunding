  

<?php
include('bd/index.php');

$bd=new MiBD();
  session_start(); 

  
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
  }


?>

  <!DOCTYPE html>
  <html>
  <head>
   
    <title>Clubes</title>
    <meta http-equiv=”Expires” content=”0″>
<meta http-equiv=”Last-Modified” content=”0″>
<meta http-equiv=”Cache-Control” content=”no-cache, mustrevalidate”>
<meta http-equiv=”Pragma” content=”no-cache”>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      
      <link rel="icon" href="_images/Logos/logo.ico">
    
    <!--Hoja de iconos-->
      <script src="https://kit.fontawesome.com/77d3e24710.js" crossorigin="anonymous"></script>
       <link rel="stylesheet" type="text/css" href="css/styles_menu.css">
       <link rel="stylesheet" href="css/styles_clubesvarios.css">
       <meta charset="utf-8">
  </head>
  <body>
<video autoplay muted loop id="myVideo">
  <source src=<?php  echo $bd->getBackground()[0]?>>
  Your browser does not support HTML5 video.
</video>

 <!-------------------------------------------->
      <!--Menu Seccion Superior-->
      <!-------------------------------------------->
      <header class="menu">
         <a href="index.php" class="brand"><img src="_images/Logos/Logo_blanco.png"></a>
         <div class="menu-btn"></div>
         <div class="navigation">
            <div class="navigation-items">
               <nav id="menu">
                  <ul>
                     <li><a class="white" href="about.php">About</a></li>
                     <li><a class="white"href="contact.php">Contact</a></li>
                     <li>
                        <a class="white">Clubes</a>
                        <ul>
                           <li ><a class="white"href="clubes.php">Clubes</a></li>
                           <li ><a class="white"href="Ranking.php">Ranking</a></li>
                           <li ><a class="white"href="donacion.php">Donaciones</a></li>
                        </ul>
                     </li>
                     
                     <li>  <?php $bd->session('white') ?>
   </li>
                  </ul>
               </nav>
            </div>
         </div>
      </header>

<main>


<section class="sesion">
  

</section>
 <div class="buttdon" id="butdton-2">
    <div id="slidde"></div>
    
      <?php 
$bd->suscribe();

      if(isset($_SESSION['username'])): ?>
      <form method="POST" onclick="myFunction()">
<button  class="popup btn1" id="suscribe" type="submit" name="submit">Suscribete <i class="far fa-bell"></i></button>


</form>
        <?php else: ?>
    <a id="suscribe" class='btn1'href="php_inicio_sesion.php">Suscribete <i class="far fa-bell"></i></a>

<?php endif;


 ?>


  </div>


 

  <div class="description1"><h1><?php echo $bd->getNombre();?></h1></div><div class="description2"><p> <?php  echo $bd->getDescripcion(); ?></p></div>

<div class="apoya">
  <h2>Apoya a nuestro club</h2>
  <p>Recuerda, ciertos clubes tienen que pagar ciertos materiales u locales, si formas parte o eres un aliado puedes contribuir a nuestro club</p>
  <form method="POST" action="donacion.php">
  <button>Apoyanos</button>
</form>
</div>
  <div class="horarios-localizacion">
    <div class="item">  <h2>Horarios </h2>
    <?php $bd->getHorario();?>
  </div>
   <div class="item">  <h2>Contacto </h2>
    <?php $bd->getContacto();?>
  </div>
  <div class="item">
<h2>Localizacion </h2>
  <?php $bd->getDireccion();?>
<br></div>
  </div>
  <div class="galeria-container">
    <h2>Galeria</h2>
<div class="galeria">
 <img src=<?php  echo $bd->getGaleria()[0]?>>
   <img src=<?php  echo $bd->getGaleria()[1]?>>
    <img src=<?php  echo $bd->getGaleria()[2]?>>
     <img src=<?php  echo $bd->getGaleria()[3]?>>
     </div>
</div>
<div class="historia">
  <h2>Historia de nuestro club</h2>
  <div class="historia-container"><div>
  <p><?php echo ""?></p>
<?php
 // }
  ?>


</div>
 <div>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
</div>
</div>


<div class="container">
    <div class="row ">
        <h3>Club Notifications</h3>
    </div>
</div>
<div class="container mt-1 d-flex justify-content-center">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <ul class="list-unstyled">
                    <!--FIRST LIST ITEM-->
                    <li class="media">
                        <div class="media-body">
                            <div class="row d-flex">
                                <h6 class="user pt-2">Usuarios que han donado al club <i class="fas fa-hand-holding-usd"></i></h6>
                             
                            </div>
                            <p class="text">Donado por:</p>
                            <div class="images mt-2"> <img class="users" src="https://img.icons8.com/bubbles/100/000000/couple-icloud.png" /> <img class="users"  src="https://img.icons8.com/bubbles/100/000000/check-male.png" /> <img class="users"  src="https://img.icons8.com/bubbles/100/000000/lock-female-user.png" /> <img  class="users"  src="https://img.icons8.com/bubbles/100/000000/lock-male-user.png" /> </div>
                              <p class="text"><?php echo $bd->getUDonadores() ?> usuarios</p>
                        </div>
                    </li>
                    
                 
                    <!--THIRD LIST ITEM-->
              
                    <!--FOURTH LIST ITEM-->
                    <?php $bd->getComments(); ?>
                    <!--FIFTH LIST ITEM-->
               
                </ul>
            </div>
        </div>
    </div>
</div>


<script
  type="module"
  src="https://unpkg.com/@webpunk/circular-text@1.3.0/dist-web/index.bundled.js">
</script>


 
<script type="text/javascript">
function sleep (time) {
  return new Promise((resolve) => setTimeout(resolve, time));
}

// Usage!

  function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
  sleep(1000).then(() => {
    // Do something after the sleep!
  popup.style.vissibility='hidden';
});
}
</script>

  </main>
      <!--------------------------------------------------->
      <!---------------Declaro mi script------------------->
      <script src="js/myScript.js"></script>
 
  </body>
  </html>

  <!--Menu Seccion Superior-->
 


















