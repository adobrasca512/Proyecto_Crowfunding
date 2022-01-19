class Terminos{
	 getTop() {
		let secction=document.getElementById("topper");
		secction.innerHTML="<div class='menu-btn'>"+
     "<i class='fas fa-bars' id='menu-bar'></i>"+
   "</div>"+
    "<div class='brand'>"+
     "<img src='_images/Logos/Logo_blanco.png'>"+
   "</div>"+
   "<div class='side-bar'>"+
     "<div class='close-btn'>"+
       "<i class='fas fa-times'></i>"+
    " </div>"+
    " <div class='menu'>"+
      " <div class='item'><a href='about.php'>"+
       "<i class='fas fa-hand-paper'></i>About</a></div>"+
       " <div class='item'><a href='contact.php'>"+
       "<i class='fas fa-address-card'></i>Contacto</a></div>"+
       "<div class='item'>"+
         "<a class='sub-btn'><i class='fas fa-table'>"+
        "</i>Clubes<i class='fas fa-angle-right dropdown'></i></a>"+
        " <div class='sub-menu'>"+
           "<a href='clubes.php' class='sub-item'>Clubes</a>"+
           "<a href='Ranking.php'class='sub-item'>Ranking</a>"+
           "<a href='donacion.php' class='sub-item'>Donaciones</a>"+
         "</div>"+
      " </div>"
       +"<div class='item'>"+
         "<a href='php_inicio_sesion.php'class='sub-btn'><i class='fas fa-calendar-alt'>"+
        " </i>Sign In"+
       " </a></div>"+
   "</div>"
	}
}
let term=new Terminos();
window.onload=term.getTop();
$(document).ready(function(){
     //jquery for toggle sub menus
     $('.sub-btn').click(function(){
       $(this).next('.sub-menu').slideToggle();
       $(this).find('.dropdown').toggleClass('rotate');
     });

     //jquery for expand and collapse the sidebar
     $('.menu-btn').click(function(){
       $('.side-bar').addClass('active');
       $('.menu-btn').css("visibility", "hidden");
     });

     $('.close-btn').click(function(){
       $('.side-bar').removeClass('active');
       $('.menu-btn').css("visibility", "visible");
     });
   });