function checkBrowser(){var e=navigator.userAgent;return e.search(/MSIE/)>0?"Internet Explorer":e.search(/Firefox/)>0?"Firefox":e.search(/Opera/)>0?"Opera":e.search(/Chrome/)>0?"Google Chrome":e.search(/Safari/)>0?"Safari":e.search(/Konqueror/)>0?"Konqueror":e.search(/Iceweasel/)>0?"Debian Iceweasel":e.search(/SeaMonkey/)>0?"SeaMonkey":e.search(/Gecko/)>0?"Gecko":"Search Bot"}jQuery(window).load(function(){function e(e){e.wheelDelta?delta=e.wheelDelta/90:e.detail&&(delta=-e.detail/3),r(),e.preventDefault&&e.preventDefault(),e.returnValue=!1}function r(){jQuery("html, body").stop().animate({scrollTop:jQuery(window).scrollTop()-a*delta},o)}if("Google Chrome"==checkBrowser()&&device.windows()){window.addEventListener&&window.addEventListener("DOMMouseScroll",e,!1),window.onmousewheel=document.onmousewheel=e;var o=330,a=100}});
//# sourceMappingURL=maps/smoothing-scroll.js.map