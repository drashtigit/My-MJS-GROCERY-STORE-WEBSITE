
let searchForm = document.querySelector('.search-form');
let loginForm = document.querySelector('.login-form');
let navbar = document.querySelector('.navbar');



document.querySelector('#search-btn').addEventListener('click', (event) => {
    event.stopPropagation(); 
    searchForm.classList.toggle('active');
    navbar.classList.remove('active');
    loginForm.classList.remove('active');
   
    
});

document.querySelector('#login-btn').addEventListener('click', (event) => {
    event.stopPropagation(); 
    loginForm.classList.toggle('active');
    searchForm.classList.remove('active');
    navbar.classList.remove('active');
   
   
});

document.querySelector('#menu-btn').addEventListener('click', (event) => {
    event.stopPropagation(); 
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
    
    
});

document.body.addEventListener('click', (event) => {
    if (!event.target.closest('.search-form') && !event.target.closest('.login-form')) {
        
        loginForm.classList.remove('active');
        navbar.classList.remove('active');
        
    }
});

window.addEventListener('scroll', () => {
   
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
    
});





var productSwiper = new Swiper(".product-slider", {
  loop: true,
  spaceBetween: 20,
  autoplay: {
      delay: 2000,
      disableOnInteraction: false,
  },
  speed: 2000, 
  breakpoints: {
      0: {
          slidesPerView: 1,
      },
      768: {
          slidesPerView: 2,
      },
      1020: {
          slidesPerView: 3,
      },
  },
});





const daysEl = document.getElementById("days");
const hoursEl = document.getElementById("hours");
const minsEl = document.getElementById("minutes"); 
const secondsEl = document.getElementById("seconds");

const newYears = "15 august 2024";

function countdown() {
    const newYearsDate = new Date(newYears);
    const currentDate = new Date();

    const totalSeconds = (newYearsDate - currentDate) / 1000;

    const days = Math.floor(totalSeconds / 3600 / 24);
    const hours = Math.floor(totalSeconds / 3600) % 24;
    const mins = Math.floor(totalSeconds / 60) % 60;
    const seconds = Math.floor(totalSeconds) % 60;

    daysEl.innerHTML = days;
    hoursEl.innerHTML = formatTime(hours);
    minsEl.innerHTML = formatTime(mins);
    secondsEl.innerHTML = formatTime(seconds);
}

function formatTime(time) {
    return time < 10 ? `0${time}` : time;
}

countdown();

setInterval(countdown, 1000);



document.addEventListener('DOMContentLoaded', function() {
    var buttons = document.querySelectorAll('.scale-btn');

    buttons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();

            var parentBox = button.closest('.box');
            var hiddenContent = parentBox.querySelector('.hidden-content');

            if (hiddenContent.style.display == 'none') {
                hiddenContent.style.display = 'block';
                button.textContent = 'Read less';
            } else {
                hiddenContent.style.display = 'none';
                button.textContent = 'Read more';
            }
        });
    });
});




const searchBox = document.getElementById('search-box');
    const voiceSearchButton = document.getElementById('voice-search');
    
    // Check if browser supports Web Speech API
    if ('webkitSpeechRecognition' in window) {
        const recognition = new webkitSpeechRecognition();
        
        recognition.lang = navigator.language;
        
        voiceSearchButton.addEventListener('click', () => {
            recognition.start();
        });

        recognition.onresult = (event) => {
            const result = event.results[0][0].transcript;
            searchBox.value = result;
        };
        
        recognition.onerror = (event) => {
            console.error('Voice recognition error:', event.error);
        };
    } else {
        voiceSearchButton.style.display = 'none';
    }





    document.addEventListener('DOMContentLoaded', function() {
        const addToCartButtons = document.querySelectorAll('.addToCartBtn');
        const shoppingCart = document.querySelector('.shopping-cart');
        // const shoppingCartContent = shoppingCart.querySelector('.content');
        const successPopup = document.getElementById('successPopup');

        function closePopup() {
            successPopup.style.display = 'none';
        }
    
        addToCartButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault(); 
    
                successPopup.style.display = 'block';
    
                setTimeout(closePopup, 3000); 
    
            });
        });
    });
    






    


    




    function animateOnScroll() {
        var elements = document.querySelectorAll('.scroll-animation');
    
        elements.forEach(function(element) {
            var distanceFromTop = element.getBoundingClientRect().top;
            var windowHeight = window.innerHeight;
    
            if (distanceFromTop - windowHeight <= 0) {
                element.classList.add('active');
            } else {
                element.classList.remove('active'); 
            }
    
            // Check if the element is in view when scrolling up
            var distanceFromBottom = element.getBoundingClientRect().bottom;
            if (distanceFromBottom >= 0 && distanceFromBottom <= windowHeight) {
                element.classList.add('active');
            } else {
                element.classList.remove('active'); 
            }
        });
    }
    
    window.addEventListener('scroll', animateOnScroll);
    
    animateOnScroll();
    
    
    
   
    


   


    document.addEventListener('DOMContentLoaded', function() {
        const carousel = document.getElementById('carousel');
        const leftButton = document.getElementById('left');
        const rightButton = document.getElementById('right');
      
        leftButton.addEventListener('click', function() {
          carousel.scrollBy({
            left: -300, 
            behavior: 'smooth'
          });
        });
      
        rightButton.addEventListener('click', function() {
          carousel.scrollBy({
            left: 300, 
            behavior: 'smooth'
          });
        });
      });
      











      

      document.addEventListener('DOMContentLoaded', function() {
        
        const navbarLinks = document.querySelectorAll('.navbar a');

        
        function handleLinkClick(event) {
            event.preventDefault(); 

            const targetId = event.currentTarget.getAttribute('href').substring(1);

            const targetSection = document.getElementById(targetId);

            if (targetSection) {
                targetSection.scrollIntoView({
                    behavior: 'smooth' 
                });
            }
        }

        navbarLinks.forEach(link => {
            link.addEventListener('click', handleLinkClick);
        });
    });












  




    var btns = document.querySelectorAll('.btn3');
  
    btns.forEach(function(btn3) {
      btn3.addEventListener('click', function(event) {
        event.preventDefault(); 
  
        var cssFile = document.createElement('link');
        cssFile.rel = 'stylesheet';
        cssFile.type = 'text/css';
        cssFile.href = 'Feedback Form CSS.css';
        document.head.appendChild(cssFile); 
  
        window.location.href = 'Feedback Form HTML.html';
        setTimeout(function() {
          window.location.href = 'Feedback Form Confirm HTML and CSS.html';
        }, 1000); 
      });
    });







    document.querySelectorAll('a.links').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('id');
            const targetSection = document.getElementById(targetId);
            if (targetSection) {
                targetSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });



