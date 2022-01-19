
<?php 
require_once('bd/index.php');
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
	  <!--lenguaje-->
    <meta charset="utf-8">
    <meta http-equiv="content-language"  content="SP"> 
    <meta name='language' content='sp' /> 
    <!--escala-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--informacion pagina-->
    <meta name='copyright' content='© 2021, Parkty Platform S.A' /> 
    <meta name="author" content="Adilem Dobras">
    <meta name="description" content="El proyecto Parkting es una empresa con fines de lucro que desea insentivar a los estudiantes a realizar tanto como actividades distintas para un mejor desarrollo social y eductativo.">
    <!--logo-->
    <link rel="icon" href="_images/Logos/logo.ico">
    <!--titulo-->
    <title>Donaciones</title>
   
    <!--librerias-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/77d3e24710.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/styles_load.css">
     <script type="text/javascript" src="js/base_clubes.js"></script>


     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

 <!--Hojas de estilos-->
    <link rel="stylesheet" href="css/styles_menu.css">
    <link rel="stylesheet" type="text/css" href="css/styles_footer.css">
    <link rel="stylesheet" href="css/styles_donacion.css">
</head>
<body>

          <div class="container1" style="display:none;" id="myAlert">
          <div class="excess alert alert-danger alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Warning!</strong> This alert box could indicate a warning that might need attention.
  </div>
      
      </div>
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
                    
                     <li><?php $bd->session('black') ?></li>
                  </ul>
               </nav>
            </div>
         </div>
      </header>
     
 <main >
 	  <div class="banner-container">
 	  	 <div class="title-banner">
                <h1>Donaciones</h1>
                <hr>
                <p>Six hundred thirty one thousand five hundred forty dollars and seven cents donated</p>
              

            </div>
           
                  <div class="counter">
       
        <div class="grid-container">
            <div id="info"class="grid-content">
              <div><img class='icon'src="_images/iconos/moneda.png"></div>
                <h2 id="num1">30</h2>
              
                <h3>Metas alcanzadas</h3>
                <p>Enviados por 10 mil usuarios</p>
            </div>
            <div class="grid-content"><div> <img class='icon'src="_images/iconos/caja-de-regalo.png"></div><h2 id="num2">50</h2>
             
                <h3>Clubes Contribuidos</h3>
                <p>Enviados por 10 mil usuarios</p>
            </div>
            <div class="grid-content"><div> <img class='icon'src="_images/iconos/equipo.png"></div><h2 id="num3">55</h2>
              
                <h3>Usuarios Suscritos han donado</h3>
                <p>Enviados por 10 mil usuarios</p>
            </div>
            <div class="grid-content">
             <div> <img class='icon'src="_images/iconos/ayuda.png"></div><h2 id="num4">55</h2>

                <h3>Usuarios han dondado en las 24 hrs</h3>
                <p>Enviados por 10 mil usuarios</p>
            </div>
           
        </div>

      </div>
            
 	  </div>
 	
        <div class="search-clubs">
          <h3>Donate Goods</h3>
          <input onkeyup="myFunction()"  id='search'type="text"placeholder="Search for an organisation" name="">
          <button>Search</button>
          </div>


          
          <div class="resultados">
              
              <div class="grid-container2">
                <div class="categorias"><h2>Categorias</h2>
                    <div class="line"></div>
                        <ul>
                            <li><span class="line1"></span>Categoria Naturaleza & Animales</li>
                            <li><span class="line2"></span>Categoria Actividades & Hobbys</li>
                            <li><span class="line3"></span>Categoria Negocios & Trends</li>
                            <li><span class="line4"></span>Categoria Autoayuda & Salud</li>
                        
                        </ul>

                </div>
                  <div class="register"><h2>No sufras problemas!</h2>
                <p>Register your organisation for <span>FREE</span> to receive more help. Together we can to put out this fire.</p>
                    <button>Registra tu club</button>
            </div>
                <div class="tags"><h2>Tags</h2>
                     <div class="line"></div>
                    <ul>
                        <li><a>Naturaleza & Animales</a></li>
                        <li><a>Actividades & Hobbys</a></li>
                        <li><a>Negocions & Trends</a></li>
                        <li><a>Autoayuda & Salud</a></li>

                        
                    </ul>
                </div>
                </div>
              <div class="flex-container">
                    <ul class="breadcrumb">
  <li><a href="index.html">Home</a></li>
  <li>Donar Dinero</li>
</ul>
<div id='clubdivs'>
<?php $bd-> getClubDonations(); ?></div>
           
              </div>

             
                 
                  
              </div>

         
      </section>
 	

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

  <script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("search");
    filter = input.value.toUpperCase();
    ul = document.getElementById("clubdivs");
    li = ul.getElementsByClassName("content");
    for (i = 0; i < li.length; i++) {
  a = li[i].getElementsByTagName("h4")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>
  <script type="text/javascript">
    
    function validar(){
      <?php if (!isset($_SESSION['username'])): ?>
        alert("Necesitas iniciar sesion para poder realizar donaciones.");
      <?php endif; ?>
    }
  </script>
  <script type="text/javascript">
function errorMessage(){
  if($("#myAlert").find("div#myAlert2").length==0){
    $("#myAlert").append('<div class="alert alert-danger alert-dismissible" style="position:absolute;top:0;z-index:5000;width:100%;"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Error:</strong> No puedes realizar esta accion porque requiere de inicio de sesion.</div>');
  }
  $('.excess').css("display", "none")
  $("#myAlert").css("display", "");
  $('html,body').scrollTop(0);

}

    var speed = 10;

/* Call this function with a string containing the ID name to
 * the element containing the number you want to do a count animation on.*/
function incEltNbr(id) {
  elt = document.getElementById(id);
  endNbr = Number(document.getElementById(id).innerHTML);
  incNbrRec(0, endNbr, elt);
}

/*A recursive function to increase the number.*/
function incNbrRec(i, endNbr, elt) {
  if (i <= endNbr) {
    elt.innerHTML = i;
    setTimeout(function() {//Delay a bit before calling the function again.
      incNbrRec(i + 1, endNbr, elt);
    }, speed);
  }
}

/*Function called on button click*/

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    const square = entry.target.querySelector('.counter');

    if (entry.isIntersecting) {
      incEltNbr("num1");
       incEltNbr("num2");
        incEltNbr("num3");
         incEltNbr("num4");
         
      return; // if we added the class, exit the function
    }

    // We're not intersecting, so remove the class!
    
  });
});

observer.observe(document.querySelector('.counter'));
 /*Call this funtion with the ID-name for that element to increase the number within*/</script>
  <script type="text/javascript">
     var image = document.getElementsByClassName('thumbnail');
new simpleParallax(image, {
  maxTransition: 60
});

       </script>
       
          <script src="js/myScript.js"></script>

</body>
</html>