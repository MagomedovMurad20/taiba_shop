window.onscroll = function () { myFunction() };

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

// $("message").blur(function () {
//   $("#feedback message").each(function () {
//     $this = $(this);
//     if (this.value != "") {
//       $this.addClass("focused");
//       $("message + label + span").css({ opacity: 1 });
//     } else {
//       $this.removeClass("focused");
//       $("message + label + span").css({ opacity: 0 });
//     }
//   });
// });

// $("#feedback .field:first-child input").blur(function () {
//   $("#feedback .field:first-child input").each(function () {
//     $this = $(this);
//     if (this.value != "") {
//       $this.addClass("focused");
//       $(".field:first-child input + label + span").css({ opacity: 1 });
//     } else {
//       $this.removeClass("focused");
//       $(".field:first-child input + label + span").css({ opacity: 0 });
//     }
//   });
// });

// $("#feedback .field:nth-child(2) input").blur(function () {
//   $("#feedback .field:nth-child(2) input").each(function () {
//     $this = $(this);
//     if (this.value != "") {
//       $this.addClass("focused");
//       $(".field:nth-child(2) input + label + span").css({ opacity: 1 });
//     } else {
//       $this.removeClass("focused");
//       $(".field:nth-child(2) input + label + span").css({ opacity: 0 });
//     }
//   });
// });
