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
     
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>


      <link rel="stylesheet" href="css/styles_clubes.css">

      <link rel="icon" href="_images/Logos/logo.ico">
      <meta http-equiv=”Expires” content=”0″>
<meta http-equiv=”Last-Modified” content=”0″>
<meta http-equiv=”Cache-Control” content=”no-cache, mustrevalidate”>
<meta http-equiv=”Pragma” content=”no-cache”>
<link rel="stylesheet" type="text/css" href="css/styles_footer.css">
 
      <script src="https://kit.fontawesome.com/77d3e24710.js" crossorigin="anonymous"></script>
    
      <script type="text/javascript" src="js/base_clubes.js"></script>
      <link rel="stylesheet" type="text/css" href="css/styles_menu.css">
       <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
       <meta charset="utf-8">
  </head>
  <body>
  
  <div class="container1" style="display:none;" id="myAlert">
          <div class="excess alert alert-danger alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Warning!</strong> This alert box could indicate a warning that might need attention.
  </div>
      
      </div>
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
  <div class="inside-banner"><h1>Clubes for everyone</h1>
    <p>
        Los miembros de un club se asocian libremente con la intención de enriquecer su vida social. En un club pueden desarrollarse actividades muy diversas. </p>
         <input type="search" placeholder="Search our Clubs" id="mySearch" name="q">
    <button onClick='findString()'>Search</button></div>
   <div class="inside-banner"><img src="_images/clubes/clubes.png"></div>
    
    
</div>
<div class="elements"><!--Va a ser un flex de contenidos-->

  <div class="content"><!--Va a ser un grid de items-->
    <h2>Naturaleza & Animales</h2>
    <hr><div class="paragraph">
<p>From all creatures great and small to wildlife and our natural surroundings – these illustrations bring a characterful view to some well known natural wonders.</p></div>
<div class="container-grid-items">
 <?php $bd->getclubesExistentes('Naturaleza & Animales'); ?>
     <div class="club-item"><img src="_images/clubes/club-crear.png"><h3>Crea tu propio club</h3><div class="popup" onclick="myFunction('myPopup4')"><i class="icono far fa-question-circle"></i>
  <span class="popuptext" id="myPopup4">Podras hacer una propuesta de club.</span>
</div><p class="description">Tienes una idea de algun club, aqui puedes crearlo</p><p class="owner">Created by You</p>

<?php if (isset($_SESSION['username'])){
 ?>

<button class="description btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Crear</button>
<?php  } else{ ?>
<button onclick="errorMessage()" value="showAlert" class="description">Crear</button>

<?php  } ?>
</div>
</div>
  </div>
<div class="content">
  <h2>Actividades & Hobbys</h2>
<hr><div class="paragraph2">
<p>From free-time activities to lifelong hobbies – these illustrations depict the things we enjoy doing in life.</p></div>
<div class="container-grid-items">  
<?php $bd->getclubesExistentes('Actividades & Hobbys'); ?>
<div class="club-item"><img src="_images/clubes/club-crear.png"><h3>Crea tu propio club</h3><div class="popup" onclick="myFunction('myPopup1')"><i class="icono far fa-question-circle"></i>
  <span class="popuptext" id="myPopup1">Podras hacer una propuesta de club.</span>
</div><p class="description">Tienes una idea de algun club, aqui puedes crearlo</p><p class="owner">Created by You</p>


<?php if (isset($_SESSION['username'])){
 ?>

<button class="description btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Crear</button>
<?php  } else{ ?>
<button onclick="errorMessage()" value="showAlert" class="description">Crear</button>

<?php  } ?>


</div>
</div>
</div>
<div class="content"><h2>Negocios & Trends</h2>
<hr><div class="paragraph">
<p>From business themes to popular trends – these illustrations provide a unique take on current affairs affecting us all.</p></div>
<div class="container-grid-items">  
 <?php $bd->getclubesExistentes('Negocios & Trends'); ?>
<div class="club-item"><img src="_images/clubes/club-crear.png"><h3>Crea tu propio club</h3><div class="popup" onclick="myFunction('myPopup2')"><i class="icono far fa-question-circle"></i>
  <span class="popuptext" id="myPopup2">Podras hacer una propuesta de club.</span>
</div><p class="description">Tienes una idea de algun club, aqui puedes crearlo</p><p class="owner">Created by You</p>

<?php if (isset($_SESSION['username'])){
 ?>

<button class="description btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Crear</button>
<?php  } else{ ?>
<button onclick="errorMessage()" value="showAlert" class="description">Crear</button>

<?php  } ?>



</div>
</div>
</div>

<div class="content"> <h2>Autoayuda & Salud</h2><hr><div class="paragraph">
<p>From mental health to keeping fit – these illustrations focus on daily issues and personal feelings in a lighthearted, friendly manner.</p></div>
<div class="container-grid-items"> 
 <?php $bd->getclubesExistentes('Autoayuda & Salud'); ?>
 <div class="club-item"><img src="_images/clubes/club-crear.png"><h3>Crea tu propio club</h3><div class="popup" onclick="myFunction('myPopup3')"><i class="icono far fa-question-circle"></i>
  <span class="popuptext" id="myPopup3">Podras hacer una propuesta de club.</span>
</div><p class="description " >Tienes una idea de algun club, aqui puedes crearlo</p><p class="owner">Created by You</p>


<?php if (isset($_SESSION['username'])){
 ?>

<button class="description btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Crear</button>
<?php  } else{ ?>
<button onclick="errorMessage()" value="showAlert" class="description">Crear</button>

<?php  } ?>



</div>
 </div>

</div>
</div>
<section class="propuestas">
  <h2>Propuestas de clubes</h2>
  <hr>
  <div class="paragraph"><p>Estos son clubes que aun no tienen las personas suficientes, pero si las apoyas se podra crear un nuevo club y te podras unir a el.</p></div>
  <div class="container">
  <?php $bd->getPropuestas();  ?>
  </div>
  
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Propuesta:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST">
      <div class="modal-body">
        
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Titulo del Club:</label>
            <input type="text" name='titulo'class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text"  class="col-form-label">Descripcion:</label>
            <textarea class="form-control" name='descripcion' id="message-text"></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class=" btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" name='enviar'class=" btn btn-primary">Enviar</button>
      </div>
      </form>
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
function findString() {
      input = document.getElementById("mySearch").value;
   window.find(input);
}
      function Busqueda() {
    var input, filter, ul, li, a, i, txtValue;

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
     var clicks = 0;

function onClick(id,likes) {
  //console.log(likes);
  //suma=likes+1;
  //console.log(suma);
  //clicks += 1;
  //document.getElementById(id).innerHTML = suma;
};

// When the user clicks on div, open the popup
function myFunction(id) {
  var popup = document.getElementById(id);
  popup.classList.toggle("show");
}
function errorMessage(){
  if($("#myAlert").find("div#myAlert2").length==0){
    $("#myAlert").append('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Error:</strong> No puedes realizar esta accion porque requiere de inicio de sesion.</div>');
  }
  $('.excess').css("display", "none")
  $("#myAlert").css("display", "");
  $('html,body').scrollTop(0);

}


</script>

     <script src="js/myScript.js"></script>
  </body>
  </html>
