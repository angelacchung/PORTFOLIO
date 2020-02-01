console.log("connected")


// MENU
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50%";
  }
  prevScrollpos = currentScrollPos;
}
// SCROLL
ScrollReveal().reveal('.headline', { delay: 600 });
ScrollReveal().reveal('.tagline', { delay: 800 });
ScrollReveal().reveal('.punchline', { delay: 1100 });
//PROTOTYPE BUTTONS
//BEEPBEEP
$( "#viewBeep" ).click(function() {
  $( "#bpbpPrototype" ).toggle( flip++ % 2 === 0 );
});
