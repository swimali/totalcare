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
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
