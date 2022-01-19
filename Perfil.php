<?php 
require_once('bd/index.php');
$bd=new MiBD();
  session_start(); 

  
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
  }
 $bd->setSuscripcion(); 
 $bd->setNombre(); 
  $bd->setApellido(); 
  $bd->setFecha();
$bd->setEmail();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/styles_perfil.css">
	<!-- jQuery first, then Bootstrap JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://kit.fontawesome.com/77d3e24710.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" type="text/css" href="css/styles_menu.css">
      <!--logo-->
      <link rel="icon" href="_images/Logos/logo.ico">
</head>
<body>
	 <!--Menu Seccion Superior-->
	 <?php if (isset($_SESSION['username'])):
     # code...
    ?>
      <header class="menu">
         <a href="index.php" class="brand"><img src="_images/Logos/Logo.png"></a>
         <div class="menu-btn"></div>
         <div class="navigation">
            <div class="navigation-items">
               <nav id="menu">
                  <ul>
                     <li><a href="about.php">About</a></li>
                     <li><a href="contact.php">Contact</a></li>
                     <li>
                        <a >Clubes</a>
                        <ul>
                           <li ><a href="clubes.php">Clubes</a></li>
                           <li ><a href="Ranking.php">Ranking</a></li>
                           <li ><a href="donacion.php">Donaciones</a></li>
                        </ul>
                     </li>
                     <li> <?php $bd->session('x') ?></li>
                  </ul>
               </nav>
            </div>
         </div>
      </header>

<div class="muck-up">

  <div class="overlay"></div>
  <div class="top">
   
    <div class="user-profile">
      <img src="_images/Perfil/perfil.svg">

      <div class="user-details">
        <h4>Welcome <?php echo $bd->getName();  ?></h4>
        
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="filter-btn">
    <a id="one" href="#"><i class="fas fa-user"></i></a>
    <a id="two" href="#"><i class="fas fa-hand-holding-usd"></i></a>
    <a id="three" href="#"><i class="fas fa-bell"></i></a>
   
    <span class="toggle-btn"><i class="fas fa-user-edit"></i></span>
  </div>
  <div class="clearfix"></div>
  <div class="bottom">
    <div class="title">
      <h3 id="data">Mi Perfil</h3>
      <small><?php echo $bd->getUsername(); ?></small>
    </div>
    <ul class="tasks">
      <li class="one red">

        <form id='form1'method="POST">

        <span class="task-title text-info"> <?php echo $bd->getName(); ?></span>
             
        <button onclick='editarDatos(this,"nombre","text-info","text","editar")'type="button" name=''id='nombre'class="task-time edit"><i class="fas fa-edit"></i></button>
     </form>  
        <span class="task-cat">Nombre</span>

      </li>
      <li class="one red">

        <form method="POST">

        <span class="task-title text-info1"> <?php echo $bd->getApellido() ?></span>
             
        <button type="button" onclick='editarDatos(this,"apellido","text-info1","text","editar1")' name=''id='apellido'class="task-time edit"><i class="fas fa-edit"></i></button>
     </form>  
        <span class="task-cat">Apellidos</span>

      </li>
      <li class="one red">
        <form method="POST">
        <span class="task-title text-info2"><?php echo $bd->getFecha(); ?></span>
         <button type="button" onclick='editarDatos(this,"fecha","text-info2","date","editar2")' name=''id='fecha'class="task-time edit"><i class="fas fa-edit"></i></button>
          </form>  
        <span class="task-cat">Fecha de Nacimiento</span>

      </li>
       <li class="one red">
        <form method="POST">
        <span class="task-title text-info3"><?php  echo $bd-> getEmail();?></span>
        <button type="button" onclick='editarDatos(this,"email","text-info3","text","editar3")' name=''id='email'class="task-time edit"><i class="fas fa-edit"></i></button>
          </form> 
        <span class="task-cat">Email</span>

      </li>
    <?php $bd->getMisDonaciones() ?>
      </li>
      <form method="POST">
    <?php $bd->getsuscripciones(); ?>
 
    
     <li id='eliminar-suscripcion'class="three yellow button">
    
        <button type="submit"  value="submit" id='btn-rmv' name="" class="task-cat delete">Eliminar Suscripcion</button>
      
      </li>
       </form>

      

    </ul>
  </div>
</div>
<?php else:
header('location:index.php'); 
endif; ?>
<script type="text/javascript">
  function foo() {
    console.log('element');
   alert("Submit button clicked!");
   return true;
}
  let rmvBtn = document.getElementById('delete-btn');

function click(){
  console.log('el usuario hizo click');
   //var rmvCheckBoxes = document.getElementsByName('list');
/*
  
    for(var i = 0; i < rmvCheckBoxes.length; i++)
    {
      console.log('entro al bucle');
        if(rmvCheckBoxes[i].checked)
        {
          console.log('entro al if');
            removeElm(rmvCheckBoxes[i]);    
        }
    }  
});*/
 }

</script>
<script type="text/javascript">
  
function deleteSuscription(id){
 $('#'+id).remove();

}


</script>
<script type="text/javascript">

  function editarDatos(button,name,textinfo,type,post_name) {
  const icon = button.querySelector('i');

console.log(name);
  if (icon.classList.contains('fa-edit')) {

    icon.classList.remove('fa-edit');
  //this.setAttribute('type', 'submit');
  //this.setAttribute('type', 'button');
   
       button.name='';
    icon.classList.add('fa-save');
       var text = $('.'+textinfo).text();
 var input = $('<input id="attribute" type="'+type+'" name="'+name+'" value="' + text + '" />')
$('.'+textinfo).text('').append(input);
 


  } else {
    icon.classList.remove('fa-save');
    icon.classList.add('fa-edit');
    button.name=post_name;
    button.value='submit';
    button.setAttribute('type', 'submit');
      
   
    
    
    
  }

} 

/*


*/

	  $('.tasks li:not(.one)').slideUp(300, function() {
    $('.one').slideDown(300);

  });
	$(function() {
  $('.toggle-btn').click(function() {
    $('.filter-btn').toggleClass('open');

  });

  $('.filter-btn a').click(function() {
    $('.filter-btn').removeClass('open');

  });

});

$('#all').click(function() {

  $('ul.tasks li').slideDown(300);

});

$('#one').click(function() {
  $('.tasks li:not(.one)').slideUp(300, function() {
    $('.one').slideDown(300);

  });
  $('#data').html('Perfil');
});

$('#two').click(function() {
  $('.tasks li:not(.two)').slideUp(300, function() {
    $('.two').slideDown(300);

  });
  $('#data').html('Mis Donaciones');
});
$('#three').click(function() {
  $('.tasks li:not(.three)').slideUp(300, function() {
    $('.three').slideDown(300);

  });
   $('#data').html('Mis Suscripciones');
});
</script>
</body>
</html>