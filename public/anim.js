// function to open/close nav
function toggleNav(){
    // if nav is open, close it
    if($("button").hasClass("menu")){
      $("nav").fadeOut();
      $('.headnavbar').fadeIn();
      $("button").removeClass("menu");

      //lock homepage
      //$("body").css("overflow", "visible");
      $("header").css('top', '1em');
      $("header").css('height', '20%');
      $("header").css('width', '20%');  
    }
    // if nav is closed, open it
    else{
      $("button").addClass("menu");
      $("nav").fadeIn().css('display', 'flex');

      //unlock homepage
      //$("body").css("overflow", "hidden");
      $("header").css('height', '100%');
      $("header").css('width', '100%');
    }
  }
  

  // when clicking + or ☰ button
  $("button").click(function(){
    // when clicking ☰ button, open nav
    if($("header").hasClass("open")){
      toggleNav();
    }
    // when clicking + button, open header
    else{
      $("header").addClass("open");
      $("body").css("overflow", "visible");
      $("body").css( "display", "contents");
      $("header").delay(500).fadeOut();
      
      
    }
  });
  
  // close nav
  $("#nav-close").click(function(){
    toggleNav();
  });
  
  // scroll to sections
  $("nav li").click(function(){
    // get index of clicked li and select according section
    var index = $(this).index();
    var target = $("content section").eq(index);
    
    toggleNav();
    
    $('html,body').delay(300).animate({
      scrollTop: target.offset().top
    }, 500);
  });







  document.addEventListener("DOMContentLoaded", function () {
    let jumpElems = document.querySelectorAll(".jump-up");

    function jumpUpOnScroll() {
        jumpElems.forEach(function (elem) {
            let position = elem.getBoundingClientRect();
            let windowHeight = window.innerHeight;

            if (position.top < windowHeight && !elem.classList.contains("visible")) {
                elem.classList.add("visible");
            } else if (position.top >= windowHeight && elem.classList.contains("visible")) {
                elem.classList.remove("visible");
            }
        });
    }

    jumpUpOnScroll();

    // Attach the scroll event listener
    window.addEventListener("scroll", jumpUpOnScroll);
});


//particles


particlesJS('particles-js', 
  {
    "particles": {
      "number": {
        "value": 50,
        "density": {
          "enable": true,
          "value_area": 800
        }
      },
      "color": {
        "value": "#5668e8"
      },
      "shape": {
        "type": "circle",
        "stroke": {
          "width": 0,
          "color": "#000000"
        },
        "polygon": {
          "nb_sides": 5
        },
        "image": {
          "src": "img/github.svg",
          "width": 100,
          "height": 100
        }
      },
      "opacity": {
        "value": 1,
        "random": true,
        "anim": {
          "enable": true,
          "speed": 1,
          "opacity_min": 0,
          "sync": false
        }
      },
      "size": {
        "value": 3,
        "random": true,
        "anim": {
          "enable": false,
          "speed": 4,
          "size_min": 0.3,
          "sync": false
        }
      },
      "line_linked": {
        "enable": false,
        "distance": 150,
        "color": "#ffffff",
        "opacity": 0.4,
        "width": 1
      },
      "move": {
        "enable": true,
        "speed": 1,
        "direction": "none",
        "random": true,
        "straight": false,
        "out_mode": "out",
        "bounce": false,
        "attract": {
          "enable": false,
          "rotateX": 600,
          "rotateY": 600
        }
      }
    },
    "interactivity": {
      "detect_on": "canvas",
      "events": {
        "onhover": {
          "enable": false,
          "mode": "bubble"
        },
        "onclick": {
          "enable": false,
          "mode": "repulse"
        },
        "resize": true
      },
      "modes": {
        "grab": {
          "distance": 400,
          "line_linked": {
            "opacity": 1
          }
        },
        "bubble": {
          "distance": 250,
          "size": 0,
          "duration": 2,
          "opacity": 0,
          "speed": 3
        },
        "repulse": {
          "distance": 400,
          "duration": 0.4
        },
        "push": {
          "particles_nb": 4
        },
        "remove": {
          "particles_nb": 2
        }
      }
    },
    "retina_detect": false
  });


