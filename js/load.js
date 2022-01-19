let intro = document.querySelector('.intro');
let letter = document.querySelector('.welcome-header');
let letterSpan = document.querySelectorAll('.letter');
let splashLogo = document.querySelector('.pic');
let main = document.querySelector('.main-container');
let header=document.querySelector('.menu');
let footer=document.querySelector('.footer-container');
window.addEventListener('DOMContentLoaded', ()=>{

    setTimeout(()=>{

        letterSpan.forEach((span, idx)=>{
            setTimeout(()=>{
                span.classList.add('active');
            }, (idx + 1) * 200)
        });

     

        setTimeout(()=>{
            splashLogo.classList.add('active');
        }, 2500)

        setTimeout(()=>{
            intro.style.top = '-100vh';
              
        },3500);
        setTimeout(()=>{
               header.classList.add("active");
    header.style.zIndex="6";
              main.classList.add("active");
    main.style.zIndex="5";
       footer.classList.add("active");
    header.style.zIndex="6";
},4550)
    })

})