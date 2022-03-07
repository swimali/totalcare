export default {
  init() {
    // JavaScript to be fired on all pages
    window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById('header').style.fontSize = '30px';
  } else {
    document.getElementById('header').style.fontSize = '50px';
  }
}
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
