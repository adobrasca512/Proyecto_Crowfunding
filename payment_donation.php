<?php
include('bd/index.php');

$bd=new MiBD();
session_start(); 

  
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
  }
    $bd-> getDonation();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Donacion</title>

	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="css/styles_payment_donation.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/77d3e24710.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="icon" href="_images/Logos/logo.ico">
     <link rel="stylesheet" type="text/css" href="css/styles_menu.css">
     
</head>
<body>
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
                
                     <li><?php $bd->session('white') ?></li>
                  </ul>
               </nav>
            </div>
         </div>
      </header>
      <main>

<div id='banner' class="banner-container">
	<h1><?php echo $bd->getNombre();?></h1>
	<div class="overlay"></div>
</div>
<div class="decoration"></div>
 <div id="messages" class="hide" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <div id="messages_content"></div>
            </div>
 <form method="POST">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-11">
            <div class="card card0 rounded-0">
                <div class="row">
                    <div class="col-md-5 d-md-block d-none p-0 box ">
                        <div class="card rounded-0 border-0 card1" id="bill">
                            <h3 id="heading1">Entidad Seleccionada</h3>
                            <div class="row row-selected">
                                <div class="col-lg-7 col-8 mt-4 line pl-4">
                                    <h2 class="bill-head"><?php echo $bd->getNombre(); ?></h2> <small class="bill-date">2017 Feb 10 at 10:30 PM</small>
                                </div>
                                <div class="col-lg-5 col-4 mt-4">
                                    <h2 class="bill-head2 px-xl-5 px-lg-4"><?php echo $bd->getCategoria() ?></h2>
                                </div>
                            </div>
                            
                        
                         
                            <div class="row">
                                <div class="col-md-12 total">
                                    <p class="bill-date" id="total-label">Monto minimo para donacion</p>
                                    <span class="bill-head">$</span>
                                      <input type='number'class="bill-head text-info" placeholder='0.00'id='attribute' min="1" step="0.01" name='monto'><div class="controls"><button class="bill-date" id="edit">Editar Donacion</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 p-0 box">
                        <div class="card rounded-0 border-0 card2" id="paypage">
                            <div class="form-card">
                              
                                <h2 id="heading2" class="text-danger">Metodo de Pago</h2>
                                <div class="radio_group">
                                    <div class='radio' data-value="visa"><i class="fab fa-cc-visa"></i></div>
                                     <div class='radio' id="mastercard"data-value="mastercard"><i class="fab fa-cc-mastercard"></i></div>
                                    <div class='radio' id="paypal"data-value="paypal"><i class="fab fa-cc-paypal"></i></div> <br>
                                </div> <label class="pay">Nombre de Propietario</label> <input type="text" name="holdername" placeholder="Nombre Apellidos">
                                <div class="row">
                                    <div class="col-8 col-md-6"> <label class="pay">Numero de Tarjeta</label> <input type="text" name="cardno" id="cr_no" placeholder="0000-0000-0000-0000" minlength="19" maxlength="19"> </div>
                                    <div class="col-4 col-md-6"> <label class="pay">CVV/CVV</label> <input type="password" name="cvcpwd" placeholder="&#9679;&#9679;&#9679;" class="placeicon" minlength="3" maxlength="3"> </div>
                                </div>
                                 
                                <div class="row">
                                    <div class="col-md-12"> <label class="pay">Fecha de caducidad</label> </div>
                                    <div class="col-md-12"> <input type="text" name="exp" id="exp" placeholder="MM/YY" minlength="5" maxlength="5"> </div>
                                </div>
                                 <div class="row">
                                    <div class="col-8 col-md-6"> <label class="pay">Comentarios</label> <textarea type="text" name="comment" id="cr_no1" placeholder="your comment" minlength="30" maxlength="100"></textarea>  </div>
                                  
                                </div>
                                <div class="row">
                                    <div class="col-md-6"> <button id="send" href="#myModal" name='donate'type="submit" class="trigger-btn btn-info" data-toggle="modal">Check out now</button> </div>
                                </div>
                                  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
 

</main>


<script type="text/javascript">
  let banner=document.getElementById('banner');
  banner.style.backgroundImage = "url('_images/donacion/"+'<?php echo $bd->getBanner()   ?>'+"')";

</script>
<script type="text/javascript">
  $('#edit').click(function() {
 var text = $('.text-info').text();
 
 var input = $('<input id="attribute" type="number"  step="0.01" min="0" max="10" value="' + text + '" />')
 $('.text-info').text('').append(input);

 input.select();

 input.blur(function() {
   var text = $('#attribute').val();
   $('#attribute').parent().text(text);
   $('#attribute').remove();
 });
});</script>
      
<script type="text/javascript" src="js/payment.js"></script>
</body>
</html>