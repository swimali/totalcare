export default {
  init() {
    // JavaScript to be fired on all pages
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      document.getElementById('header-logo').style.width = '300px';
    } else {
      document.getElementById('header-logo').style.width = '450px';
    }
  }

  $(document).ready(function(){
    $('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
      $(this).toggleClass('open');
    });
  });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
