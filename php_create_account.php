<?php
include('bd/index.php');
include('bd/create_account_bd.php');
$bd=new MiBD();
   if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Crear cuenta</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     
    <link rel="stylesheet" type="text/css" href="css/styles_footer.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/styles_create_account.css">
      <link rel="stylesheet" type="text/css" href="css/styles_menu.css">
      <link rel="icon" href="_images/Logos/logo.ico">
   
</head>
<body>
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
                    
                     <li><?php $bd->session('black') ?></li>
                  </ul>
               </nav>
            </div>
         </div>
      </header>
      <main>
<div class='normal-access'>
	<div class="box">
		<h1>Create account</h1>
    <h2>Porfavor, introduce tu informacion de contacto</h2>
    	<h1>Personal Info</h1>
      <form action="php_create_account.php" method="post">
            
            <input placeholder="Nombre" maxlength="8" type="text" name="nombre" value="<?php echo $nombre;  ?>">
            <input placeholder="Apellido"maxlength="8" type="text" name="apellido" value="<?php echo $apellido;  ?>">
            <input placeholder="Fecha Nacimiento" type="date" name="fecha" value="<?php echo $fecha;  ?>">
    	<input placeholder="Username" maxlength="10" type="text" name="username" value="<?php echo $username;  ?>">

    	<input type='email'placeholder="Email Address" maxlength="255"type="text" name="email" value="<?php echo $email;  ?>">
    	<input placeholder="Password" type="password" name="password">
       <div class="btn-capsule"><button type="submit" class="btn" name="reg_user">Register</button></div></form>
    
	</div>
</div>
</main>
<!--------------------------------------------------->
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
