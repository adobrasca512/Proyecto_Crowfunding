<?php


require_once('bd/create_account_bd.php');
require_once('bd/index.php');
$bd=new MiBD();

?>

<!DOCTYPE html>
<html>
<head>
  <title>Sign In</title>
  <meta charset="utf-8">
  <!--Bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!--Logo-->
  <link rel="icon" href="_images/Logos/logo.ico">
  <!--CSS-->
  <link rel="stylesheet" type="text/css" href="css/styles_footer.css">
  <link rel="stylesheet" href="css/styles_access_account.css">
  <link rel="stylesheet" type="text/css" href="css/styles_menu.css">
</head>
<body>
    <!--Menu-->
        <header class="menu normalitem1 ">
         <a href="index.php" id="brand-img"class="brand"><img src="_images/Logos/Logo_negro.png"></a>
         <div class="menu-btn"></div>
         <div class="navigation normalitem2">
            <div class="navigation-items">
               <nav id="menu">
                  <ul>
                     <li><a class="black"href="about.php">About</a></li>
                     <li><a class="black"href="contact.php">Contact</a></li>
                     <li>
                        <a class="black">Clubes</a>
                        <ul>
                           <li ><a class="black"href="clubes.php">Clubes</a></li>
                           <li ><a class="black"href="Ranking.php">Ranking</a></li>
                           <li ><a class="black"href="donacion.php">Donaciones</a></li>
                        </ul>
                     </li>
                    <li>
                
                 

                     </li>
                  </ul>
               </nav>
            </div>
         </div>
      </header>
      <main>

  <div class="normal-access">
    <!---Caja donde se llenan los datos de sign in--->
    <div class="box">
    <h1>Sign In</h1>
    <form  method="post" action="php_inicio_sesion.php">
    <h2>Porfavor, introduce tu correo electronico</h2>
    <input placeholder="Email Address" id="email"type="text" name="username">
    <h2>Porfavor, introduce tu correo contraseña</h2>
    <input placeholder="Contraseña" id="password"type="password" name="password">
<button type="submit" class="btn" name="login_user">Login</button>

  </form>
  <br>

<br>
<a  class="link"href="forgot_password.php">Forgot your password</a><br>
<a class="link" href="php_create_account.php">Create your account</a>
</div>
  </div>
  </main>
 
      <!---------------------FOOTER------------------->
      <footer id='black'class ="black-footer-container">
         <div class="footer-contenedor">
            <div class="black-fotter-division" id="brand">
               <img class="logo-footer" src="_images/Logos/Logo.png">
            </div>
            <div id='division1'class="black-fotter-division">
               <h1>more info</h1>
               <ul>
                  <li class="footer-info">
                     <div class="black-footer-division-link"><a class="black-footer-info-link" id="info-about" href="clubes.php">Clubes</a></div>
                  </li>
                  <li class="footer-info">
                     <div class="black-footer-division-link"><a class="black-footer-info-link" id="info-about" href="Ranking.php">Ranking</a></div>
                  </li>
                  <li class="footer-info">
                     <div class="black-footer-division-link"><a class="black-footer-info-link" id="info-about" href="donacion.php">Donaciones</a></div>
                  </li>
               </ul>
            </div>
            <div id='division2' class="black-fotter-division">
               <h1>company</h1>
               <ul>
                  <li class="footer-info">
                     <div class="black-footer-division-link"><a class="black-footer-info-link" id="info-about" href="about.php">About</a></div>
                  </li>
                  <li class="footer-info">
                     <div class="black-footer-division-link"><a class="black-footer-info-link" id="info-about" href="contact.php">Contact</a></div>
                  </li>
                
               </ul>
            </div>
            <div id='division3' class="black-fotter-division">
               <h1>User</h1>
               <ul>
                  <?php $bd->sessionFooter('black-') ?>
                 
               </ul>
            </div>
         </div>
         <div class="separation"></div>
         <div class="black-terms-use-grid">
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
        <script src="js/myScript.js"></script>
</body>


</html>