
var tabCycle;
function tabChange() {
  var tabs = $('.nav-tabs > li');
  var active = $('.nav-tabs > li').find('a.active');
  var next = active.parent('li').next('li').find('a');
  if (next.length === 0) {
    next = $('.nav-tabs > li').first().find('a').click();
  }
  next.tab('show');
}

$('.nav-tabs').hover(
  function () {
    clearInterval(tabCycle); // Stop cycling on hover
  },
  function () {
    tabCycle = setInterval(tabChange, 2000); // Resume cycling when mouse leaves
  }
);

tabCycle = setInterval(tabChange, 2000); // Start the initial cycling



jQuery(document).ready(function($) {

    $('.fantasy-cricket-sldier').owlCarousel({
        loop: true,
        items: 1,
        autoHeight:true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        margin: 0,
        padding: 0,
        nav: true,
        dots: false,
        autoplay: true,
        center: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                nav: false,
                dots: true,
            },
            500: {
                nav: false,
                dots: true,
            },
            600: {
                nav: false,
                dots: true,
            },
            992: {
                nav: true,
                dots: false,
            },
            1299: {
                nav: true,
                dots: false,
            },
            1499: {
                nav: true,
                dots: false,
            }
        },
        navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
    });
});
    


