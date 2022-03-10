export default {
  init() {
    // JavaScript to be fired on the home page
    $('.autoplay').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,

      prevArrow:'<img class="a-left control-c prev slick-prev" src="../../wp-content/themes/sage9_totalcare/resources/assets/images/carousel-prev-button.svg">',
      nextArrow:'<img class="a-right control-c next slick-next" src="../../wp-content/themes/sage9_totalcare/resources/assets/images/carousel-next-button.svg">',

      responsive: [
        {
          breakpoint: 2000,
          settings:{
            slidesToScroll: 1,
            slidesToShow: 3,
          },
        },
        {
          breakpoint: 1335,
          settings:{
            slidesToScroll: 1,
            slidesToShow: 3,
          },
        },
        {
          breakpoint: 1000,
          settings:{
            slidesToScroll: 1,
            slidesToShow: 3,
          },
        },
        {
          breakpoint: 600,
          settings:{
            slidesToScroll: 1,
            slidesToShow: 2,
          },
        },
        {
          breakpoint: 300,
          settings:{
            slidesToScroll: 1,
            slidesToShow: 1,
          },
        },
      ],
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
