// start slider
$(".owl-carousel").owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 1,
    },
    1000: {
      items: 1,
    },
  },
});
// end slider

// start nav active
$(document).on("click", "ul li", function () {
  $(this).addClass("active").siblings().removeClass("active");
});
// end nav active
