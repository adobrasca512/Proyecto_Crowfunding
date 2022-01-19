  <?php 
require_once('bd/index.php');
$bd=new MiBD();
  session_start(); 

  
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
  }
$bd->newsLetter();
?>
  <!DOCTYPE html>
  <html>
  <head>
    
    <title>About</title>

<!------ Include the above in your HEAD tag ---------->
      <link rel="stylesheet" href="css/styles_contact_.css">
      <meta http-equiv=”Expires” content=”0″>
<meta http-equiv=”Last-Modified” content=”0″>
<meta http-equiv=”Cache-Control” content=”no-cache, mustrevalidate”>
<meta http-equiv=”Pragma” content=”no-cache”>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
	  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
      <link rel="icon" href="_images/Logos/logo.ico">
      <link rel="stylesheet" type="text/css" href="css/styles_footer.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
       <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
       <!--<script src='https://www.google.com/recaptcha/api.js'></script>-->
       <script src="https://www.google.com/recaptcha/api.js?render=6Le1-0AdAAAAACtEs67IHQ_EWZa2wuQPyFp6Xtt8"></script>

       <meta charset="utf-8">
      
       <link rel="stylesheet" type="text/css" href="css/styles_menu.css">
        <script>
      $(document).ready(function() {
        $('#oculto').click(function() {
          grecaptcha.ready(function() {
            grecaptcha.execute('6Le1-0AdAAAAACtEs67IHQ_EWZa2wuQPyFp6Xtt8', {
              action: 'validarUsuario'
              }).then(function(token) {
              $('#form-login').prepend('<input type="hidden" name="token" value="' + token + '" >');
              $('#form-login').prepend('<input type="hidden" name="action" value="validarUsuario" >');
              $('#form-login').submit();
            });
          });
        });
      });
    </script>
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
        
         <section class="title-container">
         
            <div class="title-info">
               <img src="_images/contact.jpg">
            </div>
<div class="title-info" >
   <div class="title-text">
  <h1>Contacto</h1> 
  <p>Si necesitas ayuda, nuestro equipo de expertos estará a tu disposición para responder todas tus preguntas, ayudarte con tus pedidos o facilitarte consejos de estilo e ideas para regalos. No dudes en ponerte en contacto con nosotros, estamos a tu disposición.</p></div>
</div>

         </section>
         <section  id="envio"class="envio-correo">
           
            <div class="datos-personales">
                  <hr>

            <h1 class="envio-title">Ponte en contacto con nosotros</h1><button class="close" onclick="closePane()"><i class="fas fa-times"></i></button>
            <div class="campo-datos">
             <form id='form-login' action='bd/borrador.php'method="POST">
            <div class="btn-selection">
               <p id="pass">Campo Obligatorio*</p>
            <p >Titulo*</p>
            <input class="radio-btn" type="radio" name="titulo" id="srita"value="Srita">
             <label for="srita">Srita</label>
            <input class="radio-btn" type="radio"id="sra" name="titulo" value="Sra">
             <label for="sra">Sra</label>
            <input class="radio-btn" type="radio" id="sr"name="titulo" value="Sr">
             <label for="sr">Sr</label>
             </div>
              <div class="input-data">
              <div class="suscription-pane input-effect">
        

  <input type="text" class="effect-16" id="nombre" name="nom" placeholder="">
   <label class="label-data"for="nombre">Nombre*</label>

   </div>
     <div class="suscription-pane input-effect">
        

  <input type="text" class="effect-16" id="apellidos" name="ap" placeholder="">
   <label  class="label-data" for="apellidos">Apellidos*</label>

   </div>
    <div class="suscription-pane input-effect">
        

  <input type="text" class="effect-16" id="dir" name="dir" placeholder="">
   <label class="label-data" for="dir">Direccion de Email*</label>

   </div>
   <div class="suscription-pane input-effect">
        

  <input type="text" class="effect-16 numeric" id="tel" name="tel" placeholder="">
   <label class="label-data" for="tel">Telefono*</label>
</div>

   <div class="select-pane">
   <p>Tu mensaje esta relacionado con*<br></p>
  
   <select id="topic" name="topic" >
      <option value="sel">Selecciona un tema</option>
  <option value="Error donar">Error al donar</option>
  <option value="Problema inicio sesion">Problemas de inicio de sesion</option>
  <option value="Problema perfil">Problemas con perfil</option>
  <option value="Otros">Otros</option>
</select>
</div>
<div class="msg-pane">
<p>Tu mensaje*</p>
<textarea id="mensaje"name="mensaje"></textarea> 
</div>
<div class="terms-pane">
<label><input type="checkbox" name="terms" id="cbox1" value="first_checkbox">
También me gustaría recibir información de marketing sobre los productos o servicios de la Maison.
Podríamos enviarte esta información por teléfono, correo electrónico, mensajes de texto o correo postal. También podríamos utilizar tu información para enviarte mensajes o publicidad personalizada a través de los medios sociales u otras plataformas digitales. Puedes solicitar que dejemos de enviarte información de marketing en cualquier momento. Para obtener más información acerca del uso de tu información personal, consulta nuestra <a href="privacy_politics.html">Política de Privacidad</a>.
Al hacer clic en enviar, doy mi consentimiento para que mis datos sean compartidos con el distribuidor autorizado de la Maison con el fin de concertar una cita en la joyería.</label><br>
</div>
<button type="submit"  class="g-recaptcha" onclick='console.log("Cliqueado")' id='oculto' data-sitekey="6Le1-0AdAAAAACtEs67IHQ_EWZa2wuQPyFp6Xtt8" data-callback='onSubmit' data-action='submit'name="Submit">Enviars</button>
 <!--<button name="Submit" type="submit" >Enviar</button>-->

            </div>
          </form>
            </div>
   </div>

         </section>
<section class="info-container">
   <div class="items"><h2><i class="fas fa-mobile-alt"></i>
LLÁMANOS</h2> <p>Si deseas formar parte de nuestro grupo Parkting o tienes algun reclamo llamanos por teléfono, solicitar información personalizada sobre clubes de nuestra gama o solicita asesoria con tu busqueda.
</p>
<p>De lunes a sábado: 10 h - 19 h</p><a href="tel:+34663557007">Tel. +34663557007</a></div>
 <div class="items"><h2>
<i class="far fa-envelope"></i>ENVÍANOS UN CORREO ELECTRÓNICO</h2> <p>Un asesor de Parkting te responderá en el plazo de un día laborable.</p><button id="envio-btn" onclick="showPane()"href="">Envíanos un correo electrónico</button></div>

  <div class="items"><h2><i class="far fa-building"></i>VISÍTANOS</h2> <p>Descubre nuestras oficinas más cercanas y disfruta de servicios exclusivos en nuestras oficinas.</p><a href="https://goo.gl/maps/JgtaHygJjCyd1RPx5">ENCUENTRA Nuestras oficinas &#129125;</a></div>
 <div class="items"><h2><i class="far fa-calendar-check"></i>CITAS</h2> <p>Concierta una cita virtual con nuestro personal en jefe.</p><a href="mailto:adobrasca@gmail.com">Solicitar una cita</a></div>

  <div class="items"><h2><i class="far fa-question-circle"></i>Ayuda</h2> <p>¿Tienes alguna pregunta sobre nuestros servicios o nuestra política de contrato? Quizás encuentres la respuesta en esta sección.</p><a href="faq.html">Explorar la sección de ayuda</a></div>

</section>
  <hr>
<section class="suscription">
<form method="POST">
   <div class="suscription-pane input-effect"><h2>Suscribete a nuestra news letter</h2>
        <div class="box">

  <input type="text" class="effect-16" id="email" name="email" placeholder="">
   <label class="email-validation" for="email">Email (Informacion requerida)*</label>
   </div>
  

  <button type="submit" name='submit'class="enviar-email">Enviar</button>

   </div>
</form>
</section>
   <hr>


    <script type="text/javascript" src="js/contact_edits.js">
// JavaScript for label effects only

</script>

<script>
 function sucess(){
<?php   ?>
  }
jQuery('.numeric').keyup(function () {  
    this.value = this.value.replace(/[^0-9\.]/g,''); 
});
   let pane=document.getElementById('envio');
    function showPane(){
  
pane.style.visibility="visible";
 }
function closePane(){
pane.style.visibility="hidden";
 }
  contact.getSuscription();
</script>


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

  <!--Menu Seccion Superior-->
 