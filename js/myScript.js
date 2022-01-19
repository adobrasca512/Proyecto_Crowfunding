  
     //Seccion responsive del menu----------------------------------------
      //Javacript for responsive navigation menu
      const menuBtn = document.querySelector(".menu-btn");
      const navigation = document.querySelector(".navigation");
   
      menuBtn.addEventListener("click", () => {
        menuBtn.classList.toggle("active");
        navigation.classList.toggle("active");
      });

      //Javacript for video slider navigation
      const btns = document.querySelectorAll(".nav-btn");
      const slides = document.querySelectorAll(".video-slide");
      const contents = document.querySelectorAll(".content");

      var sliderNav = function(manual){
        btns.forEach((btn) => {
          btn.classList.remove("active");
        });

        slides.forEach((slide) => {
          slide.classList.remove("active");
        });

        contents.forEach((content) => {
          content.classList.remove("active");
        });

        btns[manual].classList.add("active");
        slides[manual].classList.add("active");
        contents[manual].classList.add("active");
      }

      btns.forEach((btn, i) => {
        btn.addEventListener("click", () => {
          sliderNav(i);
        });
      });
     //-------------------------------------------------------------
     //-------------------POPUP COOKIES-----------------------------
     window.addEventListener("load", function(){
      setTimeout( 
        function open(event){
        document.querySelector(".display-cookies").style.display="block";
         
      },1000
      )

    });
    
    document.querySelector("#close").addEventListener
    ("click",function(){
      document.querySelector(".display-cookies").style.display="none";
    
    });
    document.querySelector("#acepto").addEventListener
    ("click",function(){
      document.querySelector(".display-cookies").style.display="none";
    
    });
       //-------------------------------------------------------------
     //-------------------MENU FIXED-----------------------------
     myID = document.getElementById("display-menu");

  var myScrollFunc = function() {
    var y = window.scrollY;
    if (y >= 700) {
      myID.style.visibility="visible";
    } else {
       myID.style.visibility="hidden";
    }
  };

  window.addEventListener("scroll", myScrollFunc);
   //-------------------------------------------------------------
   //-----------------------CARRUSEL PROMOCIONES------------------
   
  var slideIndex = 1;
  showSlides(slideIndex);
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("Carrusel-Slide");

    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
   
    slides[slideIndex-1].style.display = "flex";
   
  }