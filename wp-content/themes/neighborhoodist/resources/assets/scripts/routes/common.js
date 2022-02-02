//import "readmore-js";

function stickyHeader() {
  // Hide Header on on scroll down
  var didScroll;
  var lastScrollTop = 0;
  var delta = 5;
  var navbarHeight = $("#site-header").outerHeight();

  $(window).scroll(function () {
    didScroll = true;
  });

  setInterval(function () {
    if (didScroll) {
      hasScrolled();
      didScroll = false;
    }
  }, 250);

  function hasScrolled() {
    var st = $(window).scrollTop();

    // Make sure they scroll more than delta
    if (Math.abs(lastScrollTop - st) <= delta) return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight) {
      // Scroll Down
      $("#site-header").removeClass("nav-down").addClass("nav-up");
    } else {
      // Scroll Up
      if (st + $(window).height() < $(document).height()) {
        $("#site-header").removeClass("nav-up").addClass("nav-down");
      }
    }

    lastScrollTop = st;
  }
}

export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    stickyHeader();
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
