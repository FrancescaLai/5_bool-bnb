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
 * @description Hide/Show Navbar on page scroll 
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

/**
 * @description sizing based on viewport height
 */
 window.addEventListener('resize', () => {
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
});

// Cursor settings
const cursor = document.querySelector('.cursor');

document.addEventListener('mousemove', e => {
    cursor.setAttribute("style", "top: " + (e.pageY - 10) + "px; left: " + (e.pageX - 10) + "px;")
});

/**
 * @description Cursor click event
 */
document.addEventListener('click', e => {
    cursor.classList.add("expand");
    setTimeout(() => {
        cursor.classList.remove("expand");
    }, 500);
});