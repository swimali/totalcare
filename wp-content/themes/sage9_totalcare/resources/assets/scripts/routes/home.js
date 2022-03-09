export default {
  init() {
    // JavaScript to be fired on the home page
    $('.autoplay').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
