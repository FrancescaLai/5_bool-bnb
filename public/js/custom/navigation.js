/**
 * @description Page progress scroll Indicator
 */
 function pageProgress() {
   const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
   const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
   const scrolled = (winScroll / height) * 100;
   document.querySelector(".progress-bar").style.width = `${scrolled}%`;
 } 
 
 // When the user scrolls the page, execute pageProgress
 window.addEventListener('scroll',() => pageProgress());

/**
 * @description Hide Navbar on Scroll Down
 */
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
   var currentScrollPos = window.pageYOffset;
   if (prevScrollpos > currentScrollPos) {
      document.getElementById("navbar").style.top = "0";
    } else {
      document.getElementById("navbar").style.top = "-100px";
    }
    prevScrollpos = currentScrollPos;
}