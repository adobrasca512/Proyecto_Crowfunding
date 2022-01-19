<?php 

 use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';
class Mail
{
	 public function __construct()
    {
       
      // $this->bd_mysql = new PDO('sqlite:bd_mysql/Parkty.db');
        //$this->bd_mysql = new PDO('mysql:host=127.0.0.1;port=3312;dbname=parkty;charset=utf8','user1',"");

    }
//$bd_mysql = new PDO('mysql:host=127.0.0.1;port=3312;dbname=parkty;charset=utf8','user1',"");
function codigo(){
	$valor= rand(1000, 9000);
	return $valor;
}
 function validarEmail(){
  
  if (isset($_GET['email'])) {
    
    if ($_GET['email']!='') {
    	$bd_mysql = new PDO('mysql:host=127.0.0.1;port=3312;dbname=parkty;charset=utf8','user1',"");
      
       $validar=$bd_mysql->query('SELECT count(*) AS suma,nombre from Usuarios WHERE email="'.$_GET['email'].'"');
       $validar_=$validar->fetch();
       if ($validar_['suma']==1) {


try {
	$mail = new PHPMailer(true);
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'adidob307@gmail.com';                     //SMTP username
    $mail->Password   = 'Estrella123';                               //SMTP password
    $mail->SMTPSecure = 'tls';           //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('adidob307@gmail.com', 'adi');
    $mail->addAddress($_GET['email']);     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Forgot Password-Parkty';
    $codigo_=$this->codigo();
       $mail->Body    = '
   <html>
   <body>
<div style="width:100%;height: 100%; background:url(https://images.pexels.com/photos/3651579/pexels-photo-3651579.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);box-sizing: border-box; background-size: cover; background-repeat: no-repeat; padding: 10%;">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Neuton:wght@200;300;400&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
<style>
@import url(\'https://fonts.googleapis.com/css2?family=Sacramento&display=swap\');
</style>
  <div style="width: 100%; height: 70%; background:white;border-radius: 10px;padding: 5%;">

    <h1 style="text-align: center;color: black;font-family: \'Neuton\', serif;letter-spacing: 10px;">Hi <span style="color: #d6050d">'.$validar_['nombre'].'</span>, it\'s <span style="color: #d6050d">
    Parkty</span></h1>
    <div style="width: 100%;color:black; text-align: left;border-bottom: 1px solid black"><h2 style="font-family: \'Neuton\', serif">Forgot Your Password?</h2>
    
    </div>
    <div>
      <p style="text-align: center;font-family: \'Neuton\', serif; font-size: 24px;">Here is your code:</p>
      <p style="text-align: center;font-family: \'Neuton\', serif;font-size: 24px;">Code: <span style="font-weight: bold;">'.$codigo_.'</span></p></div>
    <div style="border-top: 1px solid black;"><h2 style="font-family: \'Neuton\', serif;color:black;font-style:italic;font-size: 14px;text-align: center;font-weight: normal;">If you ignore this message, your password will not be changed. If you didn\'t request a password reset, let us know.</h2>

<h3 style="font-family: \'Raleway\', sans-serif">From: <span style="font-family: \'Neuton\', serif; letter-spacing: 5px;color: #022791;">Parkty</span></h3>
    </div>
  </div>
   <div style="background:black;border-radius: 10px;padding: 5%;height: 10%;width: 100%;">
<p style="text-align: center;font-family: \'Neuton\', serif; font-size: 12px;color:white;">Parkty, España, Madrid. Establecimiento Villaviciosa de odon, 28670.</p></div>
</div>  </body>
    </html>
';
  //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
  
     header('location:validation_code.php?email='.$_GET['email']);
       
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


       }
    }
    else {
    $codigo_=0;
 	# code...
    	echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  ';
 			echo '<div class="alert alert-warning alert-dismissible show" role="alert" style="z-index:5001; position:absolute;top:0;width:100%;">
  <strong>Error: </strong> Todos los campos son requeridos.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
//header('Refresh: 2; URL=forgot_password.php');
    }

    return $codigo_;
  }

 
 }
 function compareCode(){
 	if (isset($_POST['submit'])) {
 	
 		if ($_POST['value1']==''||$_POST['value2']==''||$_POST['value3']==''||$_POST['value4']=='' ) {
 			echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  ';
 				echo '<div class="alert alert-warning alert-dismissible show" role="alert" style="z-index:5001; position:absolute;top:0;width:100%;">
  <strong>Error: </strong> Todos los campos son requeridos.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
 		}
 		else{
 			
 			$codigo=$_POST['value1'].$_POST['value2'].$_POST['value3'].$_POST['value4'];
 			
 			if ($codigo==$_SESSION['variable']) {
 				
 				header('location:change_password.php?email='.$_GET['email']);
 			}
 			else{
 				echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  ';
 				echo '<div class="alert alert-danger alert-dismissible show" role="alert" style="z-index:5001; position:absolute;top:0;width:100%;">
  <strong>Error: </strong> Codigo Erroneo.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
 			}
 		}
 	}
 	 }
 
 function compareEmail(){
 	if (isset($_POST['submit'])) {
 	
 		if ($_POST['pass']==''||$_POST['passconfirm']=='') {
 			echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  ';
 				echo '<div class="alert alert-warning alert-dismissible show" role="alert" style="z-index:5001; position:absolute;top:0;width:100%;">
  <strong>Error: </strong> Todos los campos son requeridos.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
 		}
 		else{
 			$len=strlen($_POST['pass']);
 			if ($len<8) {
 				echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  ';
 				echo '<div class="alert alert-warning alert-dismissible show" role="alert" style="z-index:5001; position:absolute;top:0;width:100%;">
  <strong>Error: </strong>Contraseña demasiado corta.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
 		}
 			
 			else{
 				if ($_POST['pass']==$_POST['passconfirm']) {
 			 			
 			 				$pass_=md5($_POST['pass']);
 			 				$bd_mysql = new PDO('mysql:host=127.0.0.1;port=3312;dbname=parkty;charset=utf8','user1',"");
 			 				$resultado=$bd_mysql->query('UPDATE Usuarios SET password = "'. $pass_.'" WHERE email ="'.$_GET['email'].'"');
 			 								echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  ';
 			 			echo '<div class="alert alert-success">Sucesss: Se han actualizado los datos.</div>';
  
 			 				header('location:php_inicio_sesion.php');
 			 				
 			 			}
 			 		}
 			
 			}
 		}
 	}
 	 }
 
 
 
 

?>