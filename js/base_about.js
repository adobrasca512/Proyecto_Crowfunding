class About{
   constructor(){
  
   }
   getTop1(){
     let top=document.getElementById(this.id_top);
   top.innerHTML="  <a href='index.php' class='brand'>PARKTY</a><div class='menu-btn'></div><div class='navigation'><div class='navigation-items'><a href='about.html'>About</a><a href='contact.php'>Contact</a><a href='clubes.php'>Clubes</a><a href='php_inicio_sesion.php'>Inicia Sesion</a></div></div>"    
   }
   getSubtop(){
let subtop=document.getElementById(this.id_subtop);
subtop.innerHTML=  "<nav class='submenu'><a href='about.html'>Fundadores</a><a href='about_history.html'>Historia</a><a href='about_users_references.html'>Las Historias</a></nav>" }
   getLetters(){
       var fontSize=72;
const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
      const myNode = document.getElementById("container");
 
    if (entry.isIntersecting) {
      console.log('visto')
      var vara= new Vara("#container",
    "https://raw.githubusercontent.com/akzhy/Vara/master/fonts/Satisfy/SatisfySL.json",
    [

      {
        text:"Hi its me Adilem",
        id:"comida",
        y:150,
        fromCurrentPosition:{y:false},
        duration:3000
      }
    ],
    {

      strokeWidth:2,
      color:"#fff",
      fontSize:fontSize,
      textAlign:"center"
    });








    if(window.screen.width>700)
    fontSize=32;
  else if(window.screen.width<1200)
    fontSize=57;

  vara.ready(function(){
    var erase=true;
    vara.animationEnd(

    function(i,o){
      if(i=="no_erase") erase=false;
      if(erase){
        o.container.style.transition="opacity 1s 1s",
        o.container.style.opacity=0;
   o.container.style.opacity=1;

   
  
      
      }

    });
   
   
  });

      return;
    }
    else{
       myNode.removeChild(myNode.lastChild);
    }
 // document.getElementById('container').remove();
    
  });

});
observer.observe(document.querySelector('.sticky'));
 


   }
   getImageAnimation(className){
      var image = document.getElementsByClassName(className);
new simpleParallax(image, {
  maxTransition: 60
});
   }
   displayIcons(){
       $(document).ready(function() {
  $('.logo-carousel').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    arrows: true,
    dots: false,
    pauseOnHover: false,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 4
      }
    }, {
      breakpoint: 520,
      settings: {
        slidesToShow: 2
      }
    }]
  });
});
   }
   displayImages(){

window.addEventListener('scroll', function()  {
  let elements = document.getElementsByClassName('content');
  let screenSize = window.innerHeight;
  
        for(var i = 0; i < elements.length; i++) {
        var element = elements[i];

        if(element.getBoundingClientRect().top < screenSize) {
          element.classList.add('visible');
        } else {
          element.classList.remove('visible');
        }

      }
});

   }
   displayUsersReviews(){
      var timer = 10000;

var i = 0;
var max = $('.list > li').length;
 
  $(".list > li").eq(i).addClass('activeul').css('left','0');
  $(".list > li").eq(i + 1).addClass('activeul').css('left','25%');
  $(".list > li").eq(i + 2).addClass('activeul').css('left','50%');
  $(".list > li").eq(i + 3).addClass('activeul').css('left','75%');
 

  setInterval(function(){ 

    $(".list > li").removeClass('activeul');

    $(".list > li").eq(i).css('transition-delay','0.25s');
    $(".list > li").eq(i + 1).css('transition-delay','0.5s');
    $(".list > li").eq(i + 2).css('transition-delay','0.75s');
    $(".list > li").eq(i + 3).css('transition-delay','1s');

    if (i < max-4) {
      i = i+4; 
    }

    else { 
      i = 0; 
    }  

    $(".list > li").eq(i).css('left','0').addClass('activeul').css('transition-delay','1.25s');
    $(".list > li").eq(i + 1).css('left','25%').addClass('activeul').css('transition-delay','1.5s');
    $(".list > li").eq(i + 2).css('left','50%').addClass('activeul').css('transition-delay','1.75s');
    $(".list > li").eq(i + 3).css('left','75%').addClass('activeul').css('transition-delay','2s');
  
  }, timer);
   }
}
let about= new About();

