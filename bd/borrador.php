<?php 
  $bd = new PDO('sqlite:Parkty.db');
  define('CLAVE', '6Le1-0AdAAAAAPasS2iXrja5JRrT9sAb-1SPTJJ9');
  $token = $_POST['token'];
  $action = $_POST['action'];
  $cu = curl_init();
  curl_setopt($cu, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
  curl_setopt($cu, CURLOPT_POST, 1);
  curl_setopt($cu, CURLOPT_POSTFIELDS, http_build_query(array('secret' => CLAVE, 'response' => $token)));
  curl_setopt($cu, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($cu);
  curl_close($cu);
  
  $datos = json_decode($response, true);
  
  //print_r($datos);
  
  if($datos['success'] == 1 && $datos['score'] >= 0.5){
    if($datos['action'] == 'validarUsuario'){
 
    if ($_POST['nom']=='' || $_POST['ap']=='' || $_POST['dir']=='' || $_POST['tel']=='' || $_POST['titulo']=='' || $_POST['topic']=='' || $_POST['mensaje']=='' ) {
      header('Refresh: 2; URL=../contact.php');
       echo ' <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>';
      echo '<div class="alert alert-warning alert-dismissible show" role="alert">
  <strong>Error: </strong>Campos vacios o faltantes.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }
    else{
       $insertar_Cliente=($bd)->query('INSERT INTO Atencion_Contacto (nombre,apellidos,email,telefono,prefijo) values ( "'.$_POST['nom'].'","'.$_POST['ap'].'","'.$_POST['dir'].'",'.$_POST['tel'].',"'.$_POST['titulo'].'")');
      $insertar_Mensaje=($bd)->query('INSERT INTO Atencion_Mensaje (id_contacto, mensaje, tema) 
  VALUES(last_insert_rowid(),"'.$_POST['mensaje'].'", "'.$_POST['topic'].'")
');
header('Refresh: 1; URL=../contact.php');
      echo ' <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>';
        echo '<div class="alert alert-success">Sucesss: Se ha enviado tu mensaje.</div>';
    
 
    }
    
 
    }
      
    } else {
      header('Refresh: 2; URL=../contact.php');
       echo ' <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>';
      echo '<div class="alert alert-warning alert-dismissible show" role="alert">
  <strong>Error: </strong>Tu formulario parece estar teniendo problemas.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  }
 ?>