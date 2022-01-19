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
	<title>Ranking</title>

   <link rel="icon" href="_images/Logos/logo.ico">
	<link rel="stylesheet" type="text/css" href="css/styles_menu.css">
	<link rel="stylesheet" type="text/css" href="css/styles_ranking.css">
	<script src="https://kit.fontawesome.com/77d3e24710.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/styles_footer.css">
</head>
<body>

	<div class=""></div>

   <!--Menu Seccion Superior-->
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
		<div class="banner">
			<div class="banner-div" id="banner-text"><h1>Top Clubes</h1><p>Ranking de clubes en villaviciosa de odon. Segun su popularidad entre usuarios.</p></div>
			<div class="banner-div">
				<img src="_images/Ranking/ranking.jpg">
			</div>
		</div>
		<div class="ranking-container border">
			<div class="item-ranking">
				
					<?php  $bd->createClubdivs()?>
				
			</div>
			<div class="description">
				<div class="description-items" id="img-description">
          <div>
					<h1 id="posicion"><span>Top Ranking</span></h1>
					<h2 id="club">Clubes</h2>
					<h3 id='donaciones'>Donaciones por Usuarios.</h3>
          <h4 id='suscripciones'>Usuarios Suscritos.</h4>
          </div>
				</div>
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
	<script type="text/javascript">
		
  function changeTxt(rank,name,donacion,suscrito,imagen){
    var etiqueta1 = document.getElementById('posicion');
    var etiqueta2 = document.getElementById('club');
    var etiqueta3 = document.getElementById('donaciones');
        var etiqueta4 = document.getElementById('suscripciones');
    var img=document.getElementById('img-description')
   etiqueta1.innerHTML = "No."+rank+" en el Top"; //Will change the text within the H1 tag to whatever you supply in the first argument, 't'.
   etiqueta2.innerHTML=name;
   etiqueta3.innerHTML="Han donado: "+donacion+" usuarios";
      etiqueta4.innerHTML="Se han suscrito: "+suscrito+" usuarios";
   img.style.backgroundImage="url("+imagen+")";
  }

	</script>
	 <!---------------Declaro mi script------------------->
      <script src="js/myScript.js"></script>
</body>
</html>