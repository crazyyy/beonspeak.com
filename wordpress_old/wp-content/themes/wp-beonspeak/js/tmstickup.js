!function(e){e.fn.tmStickUp=function(o){function t(){l.on("scroll",function(){i=e(this).scrollTop(),S=i>d?"down":"up",d=i,0!=s.correctionSelector.length?correctionValue=s.correctionSelector.outerHeight(!0):correctionValue=0,u=parseInt(n.scrollTop()),p-correctionValue<u?(r.addClass("isStuck"),s.listenSelector.addClass("isStuck"),s.pseudo?(r.css({position:"fixed",top:correctionValue}),c.css({height:a})):r.css({position:"fixed",top:correctionValue})):(r.removeClass("isStuck"),s.listenSelector.removeClass("isStuck"),s.pseudo?(r.css({position:"relative",top:0}),c.css({height:0})):r.css({position:"absolute",top:0}))}).trigger("scroll")}var s={correctionSelector:e(".correctionSelector"),listenSelector:e(".listenSelector"),active:!1,pseudo:!0};e.extend(s,o);var c,i,r=e(this),n=e(window),l=e(document),p=0,a=0,u=0,d=0,S="";p=parseInt(r.offset().top),parseInt(r.css("margin-top")),a=parseInt(r.outerHeight(!0)),s.pseudo&&(e('<div class="pseudoStickyBlock"></div>').insertAfter(r),(c=e(".pseudoStickyBlock")).css({position:"relative",display:"block"})),s.active&&t()}}(jQuery);
//# sourceMappingURL=maps/tmstickup.js.map
