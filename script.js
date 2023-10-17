gsap.registerPlugin(Flip);

const links = document.querySelectorAll(".nav-item a");
const activeNav = document.querySelector(".active-nav");

links.forEach(link => {
    link.addEventListener("click", () => {
    //nav to blue
    gsap.to(links, {color:"white"});
    
    if (document.activeElement === link){
    gsap.to(link, {color:"#000000"});
    }
    
    //i like to move it move it you liek to MOVE IT
    const state = Flip.getState(activeNav);
    link.appendChild(activeNav);
    Flip.from(state, {
        duration: 0.5,
        absolute: true,
    });
    
});
});












//video after logos
window.addEventListener('load', videoScroll);
window.addEventListener('scroll', videoScroll);

function videoScroll() {

  if ( document.querySelectorAll('video[autoplay]').length > 0) {
    var windowHeight = window.innerHeight,
        videoEl = document.querySelectorAll('video[autoplay]');

    for (var i = 0; i < videoEl.length; i++) {

      var thisVideoEl = videoEl[i],
          videoHeight = thisVideoEl.clientHeight,
          videoClientRect = thisVideoEl.getBoundingClientRect().top;

      if ( videoClientRect <= ( (windowHeight) - (videoHeight*.5) ) && videoClientRect >= ( 0 - ( videoHeight*.5 ) ) ) {
        thisVideoEl.play();
      } else {
        thisVideoEl.pause();
      }

    }
  }

}

function fade(element) {
  var op = 1;  // initial opacity
  var timer = setInterval(function () {
      if (op <= 0.1){
          clearInterval(timer);
          element.style.display = 'none';
      }
      element.style.opacity = op;
      element.style.filter = 'alpha(opacity=' + op * 100 + ")";
      op -= op * 0.1;
  }, 50);
}






var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}








// var scrollTop     = $(window).scrollTop(),
//     elementOffset = $('fade').offset().top,
//     distance      = (elementOffset - scrollTop);


// var text = document.getElementById('fade');
// function fadeOutOnScroll(element) {
//     if (!element) {
//       return;
//     }
    
//     var distanceToTop = window.scrollY + element.getBoundingClientRect().top;
//     var elementHeight = element.offsetHeight;
//     var scrollTop = document.documentElement.scrollTop;
    
//     var opacity = 1;
    
//     if (scrollTop > distanceToTop) {
//       opacity = 1;
//     }
    
//     if (opacity >= 0) {
//       element.style.opacity = opacity;
//     }
//   }
  
//   function scrollHandler() {
//     fadeOutOnScroll(text);
//   }
  
//   window.addEventListener('scroll', scrollHandler);


// function toggleMenu() {
//     const menu = document.querySelector(".menu-links");
//     const icon = document.querySelector(".hamburger-icon");
//     menu.classList.toggle("open");
//     icon.classList.toggle("open");
// };


