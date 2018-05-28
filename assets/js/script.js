// Avoid `console` errors in browsers that lack a console.
(function() {
  var method
  var noop = function() {}
  var methods = [
    "assert",
    "clear",
    "count",
    "debug",
    "dir",
    "dirxml",
    "error",
    "exception",
    "group",
    "groupCollapsed",
    "groupEnd",
    "info",
    "log",
    "markTimeline",
    "profile",
    "profileEnd",
    "table",
    "time",
    "timeEnd",
    "timeline",
    "timelineEnd",
    "timeStamp",
    "trace",
    "warn"
  ]
  var length = methods.length
  var console = (window.console = window.console || {})

  while (length--) {
    method = methods[length]

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop
    }
  }
})()
if (typeof jQuery === "undefined") {
  console.warn("jQuery hasn't loaded")
} else {
  console.log("jQuery " + jQuery.fn.jquery + " has loaded")
}
// Place any jQuery/helper plugins in here.

var items_custom = [
  [0, 1],
  [480, 2],
  [768, 3],
  [980, 4],
  [1170, 5]
];

jQuery(function() {
  jQuery('.sf-menu').mobileMenu({ defaultText: "Navigate to..." });
});


// Init navigation menu
jQuery(function() {
  // main navigation init
  jQuery('ul.sf-menu').superfish({
    delay: 1000, // the delay in milliseconds that the mouse can remain outside a sub-menu without it closing
    animation: {
      opacity: "show",
      height: "show"
    }, // used to animate the sub-menu open
    speed: "normal", // animation speed
    autoArrows: false, // generation of arrow mark-up (for submenu)
    disableHI: true // to disable hoverIntent detection
  });

  //Zoom fix
  //IPad/IPhone
  var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
    ua = navigator.userAgent,
    gestureStart = function() {
      viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";
    },
    scaleFix = function() {
      if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
        viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
        document.addEventListener("gesturestart", gestureStart, false);
      }
    };
  scaleFix();
})


jQuery(document).ready(function() {
  if (!device.mobile() && !device.tablet()) {
    jQuery('.header .nav__primary').tmStickUp({
      correctionSelector: jQuery('#wpadminbar'),
      listenSelector: jQuery('.listenSelector'),
      active: false,
      pseudo: true
    });
  }
})

jQuery(function() {
  var isparallax = true;
  if (!device.mobile() && !device.tablet()) {
    isparallax = true;
  } else {
    isparallax = false;
  }
  if ($('#parallax-slider-5af3de9172cb7').length > 0) {
    $('#parallax-slider-5af3de9172cb7').parallaxSlider({
      animateLayout: "simple-fade-eff",
      parallaxEffect: isparallax,
      duration: 1500,
      autoSwitcher: true,
      autoSwitcherDelay: 7000,
      slider_navs: false,
      slider_pagination: true
    });
  }
});

$(document).ready(function() {
  if ($('.filterable-portfolio').length > 0) {
    jQuery(document).ready(function($) {
      var $container = $('#portfolio-grid'),
        items_count = $(".portfolio_item").size();

      $(window).load(function() {
        setColumnWidth();
      });

      function getNumColumns() {
        var $folioWrapper = $('#portfolio-grid').data('cols');

        if ($folioWrapper == '2cols') {
          var winWidth = $("#portfolio-grid").width(),
            column = 2;
          if (winWidth < 380) column = 1;
          return column;
        } else if ($folioWrapper == '3cols') {
          var winWidth = $("#portfolio-grid").width(),
            column = 3;
          if (winWidth < 380) column = 1;
          else if (winWidth >= 380 && winWidth < 788) column = 2;
          else if (winWidth >= 788 && winWidth < 1160) column = 3;
          else if (winWidth >= 1160) column = 3;
          return column;
        } else if ($folioWrapper == '4cols') {
          var winWidth = $("#portfolio-grid").width(),
            column = 4;
          if (winWidth < 380) column = 1;
          else if (winWidth >= 380 && winWidth < 788) column = 2;
          else if (winWidth >= 788 && winWidth < 1160) column = 3;
          else if (winWidth >= 1160) column = 4;
          return column;
        }
      }

      function setColumnWidth() {
        var columns = getNumColumns(),
          containerWidth = $("#portfolio-grid").width(),
          postWidth = containerWidth / columns;
        postWidth = Math.floor(postWidth);

        $(".portfolio_item").each(function(index) {
          $(this).css({ "width": postWidth + "px" });
        });
      }
    });
  }
});
