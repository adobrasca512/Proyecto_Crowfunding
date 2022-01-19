<?php
require_once 'bd/php_verify_email.php';
require_once ('bd/recaptchalib.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
class MiBD
{
    // Atributos
    public $nombre;
    public $categoria;
    public $descripcion;
    public $historia;
    public $id;
    public $bd_mysql;
    public $bd;
    public $horario;
    public $location;
    public $suscriptions = array();
    public function __construct()
    {

        // $this->bd_mysql = new PDO('sqlite:bd_mysql/Parkty.db');
        $this->bd_mysql = new PDO('mysql:host=127.0.0.1;port=3312;dbname=parkty;charset=utf8', 'user1', "");

    }
/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*
    //FUNCIONES DE LA BASE DE DATOS
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*/
    function get_connection()
    {
        return $this->bd_mysql;
    }
    //Get one element from db
    function getSelectBD($row, $table, $row_find, $where)
    {
        $resultado = ($this->bd_mysql)
            ->query('SELECT ' . $row . ' FROM ' . $table . ' where ' . $row_find . '=' . "'" . $where . "'");
        $element = $resultado->fetch() [$row];
        return $element;
    }
    function successAlert($message)
    {
        echo '<div class="alert alert-success" style="position:absolute;top:0;z-index:5000">Sucesss:' . $message . '.</div>';
    }
    function dangerAlert($message)
    {
        
        echo '<div class="alert alert-danger alert-dismissible show" role="alert" style="position:absolute;top:0;z-index:5000">
  <strong>Error: </strong> ' . $message . '.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }

/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*
    //Funciones Clubes informacion
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*/
    function getNombre()
    {
        if (isset($_GET["nom"]))
        {
            $nombre = $_GET["nom"];
            return $nombre;
        }
    }
    function getId()
    {

        return $this->getSelectBD('id_club', 'Club', 'nombre', $this->getNombre());

    }
    function getDescripcion()
    {

        return $this->getSelectBD('descripcion', 'Club', 'nombre', $this->getNombre());;
    }
    function getHistoria()
    {

        return $this->getSelectBD('historia', 'Club', 'nombre', $this->getNombre());
    }
    function getCategoria()
    {

        return $this->getSelectBD('categoria', 'Club', 'nombre', $this->getNombre());
    }
    function getHorario()
    {
        $resultado = ($this->bd_mysql)
            ->query('SELECT dia,horaA,horaB FROM Horarios where id_club=' . $this->getId());
        while ($fila = $resultado->fetch())
        {
            echo "<p>";
            echo $fila['dia'] . " de " . $fila['horaA'] . "-" . $fila['horaB'];
            echo "</p>";

        }

    }
    function getUDonadores()
    {
        $suma_donacion = ($this->bd_mysql)
            ->query("SELECT count(DISTINCT  id_usuario) as suma from Donacion where id_club=" . $this->getId());
        $total = $suma_donacion->fetch();

        return $total['suma'];
    }
    function getComments()
    {
        $cuenta = ($this->bd_mysql)
            ->query('SELECT count(*) as cuenta from Comentarios
inner join Usuarios on Comentarios.id_usuario=Usuarios.id_usuario where Comentarios.id_club=
' . $this->getId());
        $tamanio = $cuenta->fetch();
        if ($tamanio['cuenta'] > 0)
        {

            $resultado = ($this->bd_mysql)
                ->query('SELECT Comentarios.comentario,Usuarios.nombre,Usuarios.apellidos from Comentarios
  
inner join Usuarios on Comentarios.id_usuario=Usuarios.id_usuario where Comentarios.id_club=' . $this->getId());
            while ($fila = $resultado->fetch())
            {
                echo '<li class="media my-5"> 
                        <div class="media-body">
                            <div class="row d-flex">
                                <h6 class="user">' . $fila['nombre'] . ' ' . $fila['apellidos'] . '</h6>
                                
                            </div>
                            <p class="text">Comentó:</p>
                            <div class="media mt-3">                      <div class="dialog">
  <span class="top-bot"></span>
  <span class="top-bot top-bot-border"></span>
  <img  src="https://img.icons8.com/bubbles/100/000000/lock-male-user.png" class="align-self-center mr-1 users">
  <p class="dialog-content">"' . $fila['comentario'] . '"</p>
</div>
                            </div>
                        </div>
                    </li>';
            }
        }
        else
        {
            echo '<li class="media my-5"> 
                        <div class="media-body">
                           
                            <p class="text">Esta sección aun no tiene comentarios.</p>
                           
                           
                        </div>
                    </li>';
        }
    }
    function getContacto()
    {
        $resultado = ($this->bd_mysql)
            ->query('SELECT correo,telefono FROM Club where id_club=' . $this->getId());
        $fila = $resultado->fetch();
        echo "<p>";
        echo 'Email: ' . $fila['correo'];
        echo "</p>";

        echo "<p>";
        echo 'Telefono: ' . $fila['telefono'];
        echo "</p>";

    }
    function getDireccion()
    {
        $resultado = ($this->bd_mysql)
            ->query('SELECT pais,direccion,cp FROM Club where id_club=' . $this->getId());
        while ($fila = $resultado->fetch())
        {
            echo "<p>";
            echo $fila['pais'];
            echo "</p>";
            echo "<p>";
            echo $fila['direccion'];
            echo "</p>";
            echo "<p>Codigo Postal: ";
            echo $fila['cp'];
            echo "</p>";

        }

    }
    function getGaleria()
    {
        $resultado = ($this->bd_mysql)
            ->query('SELECT enlace FROM Galeria where id_club=' . $this->getId() . " and tipo='imagen'");
        $enlaces = array();
        while ($fila = $resultado->fetch())
        {
            array_push($enlaces, $fila['enlace']);

        }
        return $enlaces;
    }
    function getBackground()
    {
        $resultado = ($this->bd_mysql)
            ->query('SELECT enlace FROM Galeria where id_club=' . $this->getId() . " and tipo='video'");
        $enlaces = array();
        while ($fila = $resultado->fetch())
        {
            array_push($enlaces, $fila['enlace']);

        }
        return $enlaces;
    }
    function getBanner()
    {
        $resultado = ($this->bd_mysql)
            ->query('SELECT enlace FROM Galeria where id_club=' . $this->getId() . " and tipo='imagen-donacion1'");
        $enlace = '';

        while ($fila = $resultado->fetch())
        {
            $enlace = $fila['enlace'];

        }
        return $enlace;
    }
/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*
    //FUNCIONES Para Rankear los clubes
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*/
    function createClubdivs()
    {

        $i = 1;
        //lo joineo por suscripciones
        $resultado_club = ($this->bd_mysql)
            ->query("SELECT club.nombre,count(DISTINCT Suscripcion.id_usuario) as suscritos,club.id_club from Club 
Left join Suscripcion on Club.id_club=Suscripcion.id_club GROUP by Club.id_club order by suscritos DESC ");
        while ($rows_clubes = $resultado_club->fetch())
        {
            $id_club = $rows_clubes['id_club'];
            //verifico si tiene donaciones
            $verificar_donaciones = ($this->bd_mysql)
                ->query('SELECT count(*) as cuenta from Donacion WHERE id_club=' . $id_club);
            $cuenta = $verificar_donaciones->fetch();
            //intentamos sumar esas donaciones
            $suma_donacion = ($this->bd_mysql)
                ->query("SELECT count(DISTINCT  id_usuario) as suma from Donacion where id_club=" . $rows_clubes['id_club']);
            $total_suma_donacion = $suma_donacion->fetch();
            $imagen_galeria = ($this->bd_mysql)
                ->query('SELECT enlace from Galeria WHERE id_club=' . $id_club . ' and tipo="icono"');
            $icono = $imagen_galeria->fetch();
            if ($cuenta['cuenta'] != 0)
            {
                $resultado2 = ($this->bd_mysql)
                    ->query('SELECT sum(monto) as suma from Donacion WHERE id_club=' . $id_club);
                $monto = $resultado2->fetch();
                $monto_ = $monto['suma'];
                echo "<div class='club-ranking' onclick='changeTxt(";
                echo $i;
                echo ",\"";
                echo $rows_clubes['nombre'];

                echo "\",";
                echo $total_suma_donacion['suma'] . ',';
                echo $rows_clubes['suscritos'];
                echo ",\"_images/Ranking/";
                echo $icono['enlace'];
                echo "\")'><p>";
                echo $i;
                echo "</p><img class='club-img' src='_images/Ranking/";
                echo $icono['enlace'];
                echo "'><h1>";
                echo $rows_clubes['nombre'];
                echo "</h1><h2>";
                echo $rows_clubes['suscritos'];
                echo "<i class='fas fa-users'></i></h2></div> \n";
            }
            else
            {
                echo "<div class='club-ranking' onclick='changeTxt(";
                echo $i;
                echo ",\"";
                echo $rows_clubes['nombre'];

                echo "\",";
                echo '0,';
                echo $rows_clubes['suscritos'];
                echo ",\"_images/Ranking/";
                echo $icono['enlace'];
                echo "\")'><p>";
                echo $i;
                echo "</p><img class='club-img' src='_images/Ranking/";
                echo $icono['enlace'];
                echo "'><h1>";
                echo $rows_clubes['nombre'];
                echo "</h1><h2>";
                echo $rows_clubes['suscritos'];
                echo " <i class='fas fa-users'></i></h2></div> \n";
            }

            $i++;
        }
    }

    function getClubdonations()
    {
        $resultado = ($this->bd_mysql)
            ->query("SELECT club.nombre, club.descripcion,galeria.enlace from Club 
INNER join Galeria on Club.id_club=Galeria.id_club where galeria.tipo='imagen-donacion'");

        while ($rows = $resultado->fetch())
        {

            echo "<div class='content'>
                    <div  class='text-content'> <h4>";
            echo $rows['nombre'];
            echo "</h4>
                        <p class='description'>";
            echo $rows['descripcion'];
            echo "</p>";

            if (isset($_SESSION['username']))
            {

                echo "<form method='POST' action ='javascript:envioDonacion(\"";
                echo $rows['nombre'];
                echo "\")'>";

            }

            if (isset($_SESSION['username']))
            {
echo "<button class='donar-pagina'>Donar</button>";
                echo "</form>";

            }
            else{
                echo "<button onclick='errorMessage()'class='donar-pagina'>Donar</button>"; 
            }

            echo "</div><div class='img-content'><img src='_images/donacion/";

            echo $rows['enlace'];
            echo "'></div></div>";
           
        }
    }
    function saveMessage($usuario, $id_club, $mensaje)
    {
        $resultado = ($this->bd_mysql)
            ->query("INSERT INTO Comentarios (id_usuario,id_club,comentario) values ('$usuario','$id_club','$mensaje')");
    }

    //pago
    function getDonation()
    {
        if (isset($_POST['donate']))
        {
            if ($_POST['cardno'] == '' || $_POST['monto'] == '' || $_POST['exp'] == '' || $_POST['cvcpwd'] == '' || $_POST['holdername'] == '')
            {
                $this->dangerAlert('Todos los campos son requeridos');
            }
            else
            {
                $tarjeta = $_POST['cardno'];
                $tarjeta_ = md5($tarjeta);
                $cvv = $_POST['cvcpwd'];
                $cvv_ = md5($cvv);
                $caducidad = $_POST['exp'];
                $caducidad_ = md5($caducidad);
                $fecha_transaccion = date("Y/m/d");
                $monto = $_POST['monto'];
                $usuario = $this->getUsuarioId();
                $id_club = $this->getId();
                $mensaje = $_POST['comment'];
                if ($mensaje != '')
                {
                    $this->saveMessage($usuario, $id_club, $mensaje);
                }
                $resultado = ($this->bd_mysql)
                    ->query("INSERT INTO Donacion (id_usuario,id_club,monto,fecha_transaccion,tarjeta,cvv,fecha_caducidad) values ('$usuario','$id_club','$monto','$fecha_transaccion','$tarjeta_','$cvv_','$caducidad_')");
                $this->successAlert('Se ha realizado la donacion');
                header('Refresh: 2; URL=donacion.php');
            }
        }
    }
/*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*
    //FUNCIONES DE USUARIO PERFIL
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*/
    function getUsuarioId()
    {
        $resultado = ($this->bd_mysql)
            ->query('SELECT id_usuario from Usuarios where username="' . $_SESSION['username'] . '"');

        $row = $resultado->fetch();

        return $row['id_usuario'];
    }
    function getNewAccount()
    {

        //cuando el btn sea presionado
        if (isset($_POST['reg_user']))
        {
            $username = SQLite3::escapeString($_POST['username']);
            $email = SQLite3::escapeString($_POST['email']);
            $password_1 = SQLite3::escapeString($_POST['password']);
            if (empty($username))
            {
                array_push($errors, "Username is required");
            }
            if (empty($email))
            {
                array_push($errors, "Email is required");
            }
            if (empty($password))
            {
                array_push($errors, "Password is required");
            }
            $resultado = ($this->bd_mysql)
                ->query("SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1");
            if ($user = $resultado->fetch())
            { // if user exists
                if ($user['username'] === $username)
                {
                    array_push($errors, "Username already exists");
                }

                if ($user['email'] === $email)
                {
                    array_push($errors, "email already exists");
                }
            }
            if (count($errors) == 0)
            {
                $password_ = md5($password); //encrypt the password before saving in the database
                $resultado1 = ($this->bd_mysql)
                    ->query("INSERT INTO Usuarios (username, email, password) 
              VALUES('$username', '$email', '$password_')");
                $resultado->fetch();
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location: index.html');
            }

        }
    }
    function logOut()
    {
        session_start();
        unset($_SESSION["username"]); // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**
        header("Location: index.html");
    }
    function verify_propuesta()
    {
        if (isset($_SESSION['username']))
        {
            echo "<button class='description btn btn-primary' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdo'>Crear1</button>";
        }
        else
        {

        }
    }
    function session($color)
    {

        if (isset($_SESSION['username']))
        {
            echo " <a class=\"";
            echo $color;
            echo "\">Usuario</a>";
            echo "<ul>";

            echo "<li ><a class=\"";
            echo $color;
            echo "\"href='Perfil.php'>Perfil</a></li>";
            echo " <li ><a class=\"";
            echo $color;
            echo "\"href=\"index.php?logout='1'\">Cerrar Sesion";

            echo "</a></li>";
            echo "</ul>";

        }
        else
        {

            echo "<a class=\"";
            echo $color;
            echo "\" href='php_inicio_sesion.php'>Sign In</a>";

        }

    }
    function sessionFooter($color)
    {

        if (isset($_SESSION['username']))
        {
            echo '<li class="footer-info">';
            echo '<div class="' . $color . 'footer-division-link"><a class="' . $color . 'footer-info-link" id="info-about" href="Perfil.php">Perfil</a></div>';
            echo '</li>';

        }
        else
        {

            echo '<li class="footer-info">';
            echo '<div class="' . $color . 'footer-division-link"><a class="' . $color . 'footer-info-link" id="info-about" href="php_inicio_sesion.php">Sign In</a></div>';
            echo '</li>';

        }

    }
    function getName()
    {

        $resultado = ($this->bd_mysql)
            ->query('SELECT nombre from Usuarios where username="' . $_SESSION['username'] . '"');

        $row = $resultado->fetch();

        return $row['nombre'];

    }
    function getApellido()
    {

        $resultado = ($this->bd_mysql)
            ->query('SELECT apellidos from Usuarios where username="' . $_SESSION['username'] . '"');

        $row = $resultado->fetch();

        return $row['apellidos'];

    }
    function getFecha()
    {

        $resultado = ($this->bd_mysql)
            ->query('SELECT fecha from Usuarios where username="' . $_SESSION['username'] . '"');

        $row = $resultado->fetch();

        return $row['fecha'];

    }
    function getEmail()
    {

        $resultado = ($this->bd_mysql)
            ->query('SELECT email from Usuarios where username="' . $_SESSION['username'] . '"');

        $row = $resultado->fetch();

        return $row['email'];

    }
    function getUsername()
    {

        $row = $_SESSION['username'];

        return $row;

    }
    function suscribe()
    {
        if (isset($_POST['submit']))
        {

            $resultado1 = ($this->bd_mysql)
                ->query('SELECT id_usuario FROM Usuarios where username="' . $_SESSION['username'] . '"');

            $id = $resultado1->fetch();

            $resultado2 = ($this->bd_mysql)
                ->query('SELECT id_club FROM Club where nombre="' . $this->getNombre() . '"');

            $club = $resultado2->fetch();
            $id_u = $id['id_usuario'];
            $id_c = $club['id_club'];
            $verificar = ($this->bd_mysql)
                ->query("SELECT id_club FROM Suscripcion where id_usuario=" . $id_u);
            $encontrado = False;
            while ($validar = $verificar->fetch())
            {
                if ($validar['id_club'] == $id_c)
                {

                    $encontrado = True;
                }

            }
            if ($encontrado == False)
            {
                $resultado = ($this->bd_mysql)
                    ->query("INSERT INTO Suscripcion (id_usuario,id_club) VALUES ('$id_u','$id_c')");
                $message = "Te has suscrito a este club";
                echo "<span class='popuptext' id='myPopup'>$message</span>";
                return $message;
            }
            else
            {
                $message = "Ya estas suscrito a este club";
                echo "<span class='popuptext' id='myPopup'>$message</span>";

                return $message;
            }

        }
    }
    function setSuscripcion()
    {

        if (isset($_POST['list']))
        {
            $resultado1 = ($this->bd_mysql)
                ->query('SELECT id_usuario FROM Usuarios where username="' . $_SESSION['username'] . '"');

            $id = $resultado1->fetch();
            $id_u = $id['id_usuario'];
            foreach ($_POST['list'] as $check)
            {

                $resultado3 = ($this->bd_mysql)
                    ->query('DELETE FROM Suscripcion WHERE id_club=' . $check . ' and id_usuario=' . $id_u);

            }
            $this->successAlert('Se ha eliminado la suscripcion seleccionada');
            header('Refresh: 3; URL=Perfil.php');

        }
        //header('location:Perfil.php');
        
    }
    function getSuscripciones()
    {
        $resultado1 = ($this->bd_mysql)
            ->query('SELECT id_usuario FROM Usuarios where username="' . $_SESSION['username'] . '"');
        $id = $resultado1->fetch();
        $id_u = $id['id_usuario'];
        $cuenta = ($this->bd_mysql)
            ->query('SELECT count(*) as cuenta FROM Suscripcion where id_usuario=' . $id_u);
        $cuenta_ = $cuenta->fetch();
        if ($cuenta_['cuenta'] == 0)
        {
            echo "<li ";

            echo "class='three yellow'>";
            echo "<span class='task-title'>";
            echo 'Aun no te has suscrito a ningun club.';
            echo "</span>";
            echo "</li>";
        }
        else
        {
            $a = ($this->bd_mysql)
                ->query('SELECT id_club FROM Suscripcion where id_usuario=' . $id_u);
            $i = 0;
            while ($fila = $a->fetch())
            {
                $id_c = $fila['id_club'];
                $resultado3 = ($this->bd_mysql)
                    ->query('SELECT club.nombre FROM Club where id_club=' . $id_c);

                $answer = $resultado3->fetch();
                $nombre = $answer['nombre'];
                // echo "<p>$id_c</p>";
                echo "<li id='";
                echo $id_c;
                echo "'class='three yellow'>";
                echo "<span class='task-title'>";
                echo $nombre;
                echo "</span><span class='task-time'><input type='checkbox'  name='list[]' value='";
                echo $id_c;
                echo "'></span></li>";

            }
        }

    }
    function getMisDonaciones()
    {
        $resultado1 = ($this->bd_mysql)
            ->query('SELECT id_usuario FROM Usuarios where username="' . $_SESSION['username'] . '"');
        $id = $resultado1->fetch();
        $id_u = $id['id_usuario'];

        $a = ($this->bd_mysql)
            ->query('SELECT id_club,fecha_transaccion,monto FROM Donacion where id_usuario=' . $id_u);
        $count = ($this->bd_mysql)
            ->query('SELECT count(*) as total_donacion from donacion where id_usuario=' . $id_u);
        $count_ = $count->fetch();
        if ($count_['total_donacion'] == 0)
        {
            echo "<li id='";
            echo $id_c;
            echo "'class='two green'><span class='task-title'>";
            echo "Aun no has realizado ninguna donacion.";
            echo "</span></li>";
        }
        else
        {

            $i = 0;
            while ($fila = $a->fetch())
            {
                $id_c = $fila['id_club'];
                $resultado3 = ($this->bd_mysql)
                    ->query('SELECT club.nombre FROM Club where id_club=' . $id_c);

                $answer = $resultado3->fetch();
                $nombre = $answer['nombre'];
                $transaccion = $fila['fecha_transaccion'];
                $monto = $fila['monto'];
                // echo "<p>$id_c</p>";
                echo "<li id='";
                echo $id_c;
                echo "'class='two green'><span class='task-title'>";
                echo $nombre;
                echo "</span><span class='task-time'>";
                echo $transaccion;
                echo "</span><span class='task-cat'>Valor: $";
                echo $monto;
                echo "</span></li>";

            }
        }

    }
    function getclubesExistentes($section)
    {
        $resultado = ($this->bd_mysql)
            ->query('SELECT id_club,nombre,descripcion from Club where categoria="' . $section . '"');
        while ($fila = $resultado->fetch())
        {
            $id_club = $fila['id_club'];
            $resultado1 = ($this->bd_mysql)
                ->query('SELECT enlace FROM Galeria where id_club=' . $id_club . " and tipo='imagen-club'");
            $enlace = $resultado1->fetch();
            echo "<div class='club-item'><img src='";
            echo '_images/clubes/' . $enlace['enlace'];
            echo "'><h3>";
            echo $fila['nombre'];
            echo "</h3><p class='description'>";
            echo $fila['descripcion'];
            echo "</p><p class='owner'>Created by Juanda Scott</p>
  <form method='POST' action ='javascript:envioClub(\"";
            echo $fila['nombre'];
            echo "\")'>
    <button>Suscribete</button></form></div>";
        }

    }
    function setNombre()
    {

        if (isset($_POST['editar'])){

            $nombre = $_POST['nombre'];
if ($nombre=='') {
    $this->dangerAlert('Campo vacio');
}
else{ 
    $resultado = ($this->bd_mysql)
                           ->query('UPDATE Usuarios SET nombre = "' . trim($nombre) . '" WHERE id_usuario =' . $this->getUsuarioId());
                       $this->successAlert('Se han actualizado los datos');
                       header('Refresh: 2; URL=Perfil.php');
                   }
        }
    }
    function setApellido()
    {

        if (isset($_POST['editar1']))
        {

            $apellido = $_POST['apellido'];
if ($apellido=='') {
    $this->dangerAlert('Campo vacio');
}
else{ 
    $resultado = ($this->bd_mysql)
                           ->query('UPDATE Usuarios SET apellidos = "' . trim($apellido) . '" WHERE id_usuario =' . $this->getUsuarioId());
                       $this->successAlert('Se han actualizado los datos');
           
                       header('Refresh: 2; URL=Perfil.php');}
        }
    }
    function setFecha()
    {

        if (isset($_POST['editar2']))
        {

            $fecha = $_POST['fecha'];
            if ($fecha=='') {
    $this->dangerAlert('Campo vacio');
}
else{ 
 if ($this->calculaedad($fecha) > 10)
                      {
                          $resultado = ($this->bd_mysql)
                              ->query('UPDATE Usuarios SET fecha = "' . $fecha . '" WHERE id_usuario =' . $this->getUsuarioId());
                          $this->successAlert('Se han actualizado los datos');
                          header('Refresh: 2; URL=Perfil.php');
                      }
                      else
                      {
          
                          $this->dangerAlert('Fecha no valida');
          
                      }
                  }

        }
    }
    function setEmail()
    {

        if (isset($_POST['editar3']))
        {
            $email = $_POST['email'];
            if ($email=='') {
    $this->dangerAlert('Campo vacio');
}
else{
    $validar = True;
            
                        $validar = $this->verificarCorreo($email);
            
                        if ($validar == True){
                            $verificar_correo = ($this->bd_mysql)
                                ->query('SELECT count(*) as suma from Usuarios where email="' . $email . '"');
                            $verificar_correo_ = $verificar_correo->fetch();
                            if ($verificar_correo_['suma'] == 1)
                            {
                                $this->dangerAlert('Email no disponible');
                            }
                            else
                            {
                                $resultado = ($this->bd_mysql)
                                    ->query('UPDATE Usuarios SET email = "' . trim($email) . '" WHERE id_usuario =' . $this->getUsuarioId());
                                $this->successAlert('Se han actualizado los datos');
                                header('Refresh: 2; URL=Perfil.php');
                            }
            
                        }
                        else
                        {
            
                            $this->dangerAlert('Email no valido');
                        }
            }
        }
    }

    function calculaedad($fechanacimiento)
    {
        list($ano, $mes, $dia) = explode("-", $fechanacimiento);
        $ano_diferencia = date("Y") - $ano;
        $mes_diferencia = date("m") - $mes;
        $dia_diferencia = date("d") - $dia;
        if ($dia_diferencia < 0 || $mes_diferencia < 0) $ano_diferencia--;
        return $ano_diferencia;
    }

    function verificarCorreo($correo)
    {
        // Include library file
        // Initialize library class
        $mail = new VerifyEmail();

        // Set the timeout value on stream
        $mail->setStreamTimeoutWait(20);

        // Set debug output mode
        $mail->Debug = true;
        $mail->Debugoutput = 'html';

        // Set email address for SMTP request
        $mail->setEmailFrom('juicedeliciosa@gmail.com');

        // Email to check
        $email = $correo;
        $esreal = True;
        // Verificar si el correo es valido y existe
        if ($mail->check($email))
        {
            $esreal = True;

        }
        elseif (verifyEmail::validate($email))
        {

            $esreal = True;
        }
        else
        {

            $esreal = False;
        }

        return $esreal;

    }

    function getPropuestas()
    {
        $resultado = ($this->bd_mysql)
            ->query('SELECT id_propuesta,titulo,descripcion,likes from Propuestas ORDER BY likes DESC');

        while ($row = $resultado->fetch())
        {
            echo '<div class="propuesta">
      <h3>';
            echo $row['titulo'];
            echo '</h3>
      <p>';
            echo $row['descripcion'];
            echo '</p><form method="POST" action="#' . $row['id_propuesta'] . '">
      <button type="submit" id="' . $row['id_propuesta'] . '" value="' . $row['likes'] . '|' . $row['id_propuesta'] . '"name="likes" ><span >';
            echo $row['likes'];
            echo ' <i class="fas fa-hand-holding-heart"></i></span></button>
</form>
    </div>';
        }
    }
    function addLikes()
    {
        if (isset($_POST['likes']))
        {

            list($like, $id) = explode('|', $_POST['likes']);
            $like = $like + 1;

            $resultado = ($this->bd_mysql)
                ->query('UPDATE Propuestas SET likes = "' . $like . '" WHERE id_propuesta =' . $id . ';');
        }
        //$resultado=($this->bd_mysql)->query('UPDATE Propuestas SET likes = "'. $nombre.'" WHERE id_usuario ='.$this->getUsuarioId());
        
    }
    function addPropuesta()
    {
        if (isset($_POST['enviar']))
        {

            if ($_POST['titulo'] != '' && $_POST['descripcion'] != '')
            {

                $titulo = $_POST['titulo'];
                $descripcion = $_POST['descripcion'];
                $resultado = ($this->bd_mysql)
                    ->query('INSERT INTO Propuestas (titulo,descripcion,likes,id_usuario) values ( "' . $titulo . '","' . $descripcion . '",0,' . $this->getUsuarioId() . ')');
                $this->successAlert('Se han posteado la propuesta');
                header('Refresh: 2; URL=clubes.php');
            }
            else
            {
                $this->dangerAlert('Campos vacios/faltantes');
            }

        }

    }
    //class="g-recaptcha"
    // data-sitekey="6Le1-0AdAAAAACtEs67IHQ_EWZa2wuQPyFp6Xtt8"
    // data-callback='onSubmit'
    // data-action='submit'
    function newsLetter()
    {

        if (isset($_POST['submit']))
        {
            echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  ';
            $email = $_POST['email'];

            if ($email == '')
            {
                $this->dangerAlert('Email es requerido');
            }
            else
            {
                $validar = ($this->bd_mysql)
                    ->query('select count(*) as suma from Noticias where email="' . $email . '"');
                $existe = $validar->fetch();

                if ($existe['suma'] == 1)
                {
                    $this->dangerAlert('Email ya guardado');
                    header('Refresh: 2; URL=contact.php');
                }
                else
                {
                    $suscribir = ($this->bd_mysql)
                        ->query('INSERT INTO Noticias (email) VALUES ("' . $email . '")');

                    $this->successAlert('Ya estas suscrito');
                    header('Refresh: 2; URL=contact.php');
                }

            }

        }

    }
    function newsLetterCP()
    {

        if (isset($_POST['submit']))
        {
            echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  ';
            $email = $_POST['email'];
            $cp = $_POST['cp'];
            if ($email == '' || $cp == '')
            {
                $this->dangerAlert('Email es requerido');
            }
            else
            {
                $validar = ($this->bd_mysql)
                    ->query('select count(*) as suma from Noticias where email="' . $email . '"');
                $existe = $validar->fetch();

                if ($existe['suma'] == 1)
                {
                    $this->dangerAlert('Este email ya ha sido guardado');

                }
                else
                {
                    $suscribir = ($this->bd_mysql)
                        ->query('INSERT INTO Noticias (email,cp) VALUES ("' . $email . '",' . $cp . ')');

                    $this->successAlert('Ya estas suscrito');
                    header('Refresh: 2; URL=index.php');
                }

            }

        }

    }

}

?>
