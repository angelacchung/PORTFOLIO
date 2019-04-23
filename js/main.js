console.log("connected")
$("#contactForm").hide();

$("#mailMe").click(function(){
    $("#contactForm").show();
    $("#mailMe").hide();
})

// MENU
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos < currentScrollPos) {
    // $("#navbar").slideUp();
    document.getElementById("navbar").style.top = "-50%";

  } else {
    // $("#navbar").slideDown();

    document.getElementById("navbar").style.top = "0";

  }
  prevScrollpos = currentScrollPos;
}


ScrollReveal().reveal('.headline', { delay: 400 });
