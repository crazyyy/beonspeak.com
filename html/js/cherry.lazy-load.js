function getWindowHeight(){var o=0;return"number"==typeof window.innerWidth?o=window.innerHeight:document.documentElement&&(document.documentElement.clientWidth||document.documentElement.clientHeight)?o=document.documentElement.clientHeight:document.body&&(document.body.clientWidth||document.body.clientHeight)&&(o=document.body.clientHeight),o}function appearBox(o,t,e){e>t+o.outerHeight()/2&&setTimeout(function(){o.removeClass("trigger").animate({opacity:"1"},o.data("speed"))},o.data("delay"))}!function(o){o(window).load(function(){device.mobile()||device.tablet()?o(".lazy-load-box").each(function(t){o(this).removeClass("trigger").css("opacity","1")}):(o(".lazy-load-box").each(function(t){var e=o(this).offset().top;bottom_of_window=o(window).scrollTop()+getWindowHeight(),appearBox(o(this),e,bottom_of_window)}),o(window).scroll(function(){o(".lazy-load-box").each(function(t){var e=o(this).offset().top;bottom_of_window=o(window).scrollTop()+getWindowHeight(),appearBox(o(this),e,bottom_of_window)})}))})}(jQuery);
//# sourceMappingURL=maps/cherry.lazy-load.js.map