$(document).ready(function () {
    $('.gallery-slider').owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        nav: true,
        dots: true,
        stagePadding: 0,
        autoplay: false,
        responsiveClass: true,
        responsiveRefreshRate: true,
        navText: [
          "<img src='./images/icon-next-lg.svg' alt='Next'>",
          "<img src='./images/icon-prev-lg.svg' alt='Prev'>",
        ],
      });
});