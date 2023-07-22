$(document).ready(function () {
  $('.customer-review-list').owlCarousel({
    items: 1,
    loop: true,
    margin: 0,
    nav: true,
    dots: true,
    stagePadding: 0,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsiveClass: true,
    responsiveRefreshRate: true,
    navText: [
      "<img src='./public/front/images/icon-left-sm.svg' alt='Next'>",
      "<img src='./pulic/front/images/icon-right-sm.svg' alt='Prev'>",
    ],
  });
  $('.news-home-list').owlCarousel({
    items: 3,
    loop: true,
    margin: 30,
    nav: true,
    dots: false,
    stagePadding: 15,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    responsiveClass: true,
    responsiveRefreshRate: true,
    navText: [
      "<img src='./images/icon-left.svg' alt='Next'>",
      "<img src='./images/icon-right.svg' alt='Prev'>",
    ],
    responsive: {
      0: {
        items: 1,
        nav: false,
        margin: 15,
      },
      768: {
        items: 2,
        margin: 15,
        nav: false,
      },
      992: {},
    },
  });
  if ($(window).width() < 768) {
    $('.why-choose-cards')
      .addClass('owl-carousel')
      .owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        nav: true,
        dots: false,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        navigation: true,
        responsiveClass: true,
        responsiveRefreshRate: true,
        navText: [
          "<img src='./images/icon-left-sm.svg' alt='Next'>",
          "<img src='./images/icon-right-sm.svg' alt='Prev'>",
        ],
      });
  }
});
