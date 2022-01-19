<?php
require_once 'bd/php_verify_email.php'; 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
 $username = "";
$email    = "";
 $nombre = "";
$apellido    = "";
$fecha    = "";
$errors = array(); 
$bd = new PDO('mysql:host=127.0.0.1;port=3312;dbname=parkty;charset=utf8','user1',"");

    //cuando el btn sea presionado
    if (isset($_POST['reg_user'])) {
    	$p1=$_POST['username'];
     
         $username = SQLite3::escapeString($p1);
    
  $email = SQLite3::escapeString($_POST['email']);
  $nombre = SQLite3::escapeString($_POST['nombre']);
  $apellido = SQLite3::escapeString($_POST['apellido']);
  $fecha = SQLite3::escapeString($_POST['fecha']);
  $password= SQLite3::escapeString( $_POST['password']);
  $vacio=False;
  if (empty($username) || empty($nombre)|| empty($apellido)|| empty($fecha)) { array_push($errors, "Username is required");
 $vacio=True;}
  if (empty($email)) { $vacio=True; array_push($errors, "Email is required");}
  if (empty($password)) {$vacio=True;  array_push($errors, "Password is required");}
if ($vacio=True) {
echo '<div class="alert alert-warning alert-dismissible show" role="alert">
  <strong>Error: </strong>Todos los campos son requerido.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    header('Refresh: 1; URL=php_create_account.php');
}
$resultado = $bd->query("SELECT * FROM Usuarios WHERE username='$username' OR email='$email'");





 if ($user=$resultado->fetch()) { // if user exists
    if ($user['username'] === $username) {
    	
      array_push($errors, "Username already exists");
            echo '<div class="alert alert-warning alert-dismissible show" role="alert">
  <strong>Error: </strong>Username already exists.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }
$validar=verificarCorreo($user['email']);
if ($validar==True) {
  if ($user['email'] === $email) {
          echo '<div class="alert alert-warning alert-dismissible show" role="alert">
  <strong>Error: </strong>Email already exists.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
      array_push($errors, "email already exists");
    }
}
else{
       echo '<div class="alert alert-warning alert-dismissible show" role="alert">
  <strong>Error: </strong> Invalid Email.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
    

  }
  if (count($errors) == 0) {
    $password_ = md5($password);//encrypt the password before saving in the database

    $resultado1 = ($bd)->query("INSERT INTO Usuarios (username, email, password,nombre,apellidos,fecha) 
              VALUES('$username', '$email', '$password_','$nombre','$apellido','$fecha')");
    $resultado->fetch();
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');
  }

         }

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = SQLite3::escapeString( $_POST['username']);
  $password = SQLite3::escapeString( $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  	     echo '<div class="alert alert-warning alert-dismissible show" role="alert">
  <strong>Error: </strong> Username is required.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  	  	    echo '<div class="alert alert-warning alert-dismissible show" role="alert">
  <strong>Error: </strong> Password is required.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  }

  if (count($errors) == 0) {
  	  	
  	$password_ = md5($password);
  	$resultado2 = ($bd)->query("SELECT count(*) as cuenta FROM Usuarios WHERE username='$username' AND password='$password_'");
    echo "SELECT count(*) as cuenta FROM Usuarios WHERE username='$username' AND password='$password_'";
  	$row=$resultado2 ->fetch();
  	if ($row['cuenta'] == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
      
  		array_push($errors, "Wrong username/password combination");
       echo '<div class="alert alert-warning alert-dismissible show" role="alert">
  <strong>Error: </strong> Wrong username/password combination.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

   
  	}
  }
}

function verificarCorreo($correo){
  

// Include library file


// Initialize library class
$mail = new VerifyEmail();

// Set the timeout value on stream
$mail->setStreamTimeoutWait(20);

// Set debug output mode
$mail->Debug= TRUE; 
$mail->Debugoutput= 'html'; 

// Set email address for SMTP request
$mail->setEmailFrom('juicedeliciosa@gmail.com');

// Email to check
$email = $correo; 
$esreal=True;
// Verificar si el correo es valido y existe
if($mail->check($email)){ 
    
}elseif(verifyEmail::validate($email)){ 
   
    $esreal=False; 
}else{ 
   
     $esreal=False; 
} 
return $esreal;

}

?>