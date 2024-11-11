var getHubergerIcon = document.getElementById("hamburger-menu");
    var getHubergerCrossIcon = document.getElementById("hamburger-cross");
    var getMobileMenu = document.getElementById("mobile-menu");

    getHubergerIcon.addEventListener("click", function () {
        console.log("hello");
        getMobileMenu.style.display = "flex";
        setTimeout(function () {
            getMobileMenu.style.transform = "translateX(0%)"; // Slide in the menu
        }, 50); // Add a small delay for better transition effect
    });

    getHubergerCrossIcon.addEventListener("click", function () {
        console.log("hello");
        getMobileMenu.style.transform = "translateX(-100%)"; // Slide out the menu
        setTimeout(function () {
            getMobileMenu.style.display = "none";
        }, 300); // Wait for the transition to end before hiding
    });

    // Check if screen size changes to desktop view and hide mobile menu
    window.addEventListener("resize", function () {
        if (window.innerWidth > 770) {
            getMobileMenu.style.display = "none";
        }
    });

//////////////////////// EFFET NAVBAR ///////////////////////////////
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    const accueilSection = document.getElementById('accueil');
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.nav-items  ul  li  a');

    const accueilBottom = accueilSection.offsetHeight;
    //console.log(accueilBottom);
    if (window.scrollY > 70) {
        navbar.style.background = '#232361';
    } else {
        navbar.style.background = 'transparent';
    }

    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.offsetHeight;

        if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
            navLinks.forEach(link => {
                link.classList.remove('active');
            });
            document.querySelector(`nav a[href="#${section.id}"]`).classList.add('active');
        }
    });
});
//////////////////////// EFFET TEXT INTRO  ///////////////////////////////

var TxtRotate = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
  };
  
  TxtRotate.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];
  
    if (this.isDeleting) {
      this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
      this.txt = fullTxt.substring(0, this.txt.length + 1);
    }
  
    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';
  
    var that = this;
    var delta = 300 - Math.random() * 100;
  
    if (this.isDeleting) { delta /= 2; }
  
    if (!this.isDeleting && this.txt === fullTxt) {
      delta = this.period;
      this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
      this.isDeleting = false;
      this.loopNum++;
      delta = 500;
    }
  
    setTimeout(function() {
      that.tick();
    }, delta);
  };
  
  window.onload = function() {
    var elements = document.getElementsByClassName('txt-rotate');
    for (var i=0; i<elements.length; i++) {
      var toRotate = elements[i].getAttribute('data-rotate');
      var period = elements[i].getAttribute('data-period');
      if (toRotate) {
        new TxtRotate(elements[i], JSON.parse(toRotate), period);
      }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
    document.body.appendChild(css);
  };
