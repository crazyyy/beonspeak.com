!function(e){e.fn.parallaxSlider=function(i){function t(i){currIndex=0,P=0,E=[],E=i.urlArray,q=E.length,e(">ul",y).empty();for(var t=0;t<q;t++)e(">ul",y).append("<li></li>");1==q&&(console.log(y),y.remove(),z.remove(),H.remove()),c(0),n()}function a(){p.autoSwitcher&&q>1&&(g=setInterval(function(){l()},p.autoSwitcherDelay))}function n(){e(">ul >li",y).on("click",function(){V||W||e(this).index()===P||c(P=e(this).index())})}function r(){p.prevButton.on("click",function(){clearInterval(g),o()}),p.nextButton.on("click",function(){clearInterval(g),l()}),z.on("click",function(){clearInterval(g),o()}),H.on("click",function(){clearInterval(g),l()}),T.on("keydown",function(e){switch(e.keyCode){case 37:clearInterval(g),o();break;case 39:clearInterval(g),l()}}),e(window).on("scroll",function(){h()}).trigger("scroll"),e(window).on("resize",function(){u()})}function o(){V||W||(P>0?P--:P=q-1,c(P))}function l(){V||W||(P<q-1?P++:P=0,c(P))}function c(i){k.text(i+1+"/"+q),e(">ul >li",y).removeClass("active").eq(i).addClass("active"),e("> img",b).attr("src","").attr("src",E[i][0]),e("> img",b).attr("data-image-width",E[i][1]),e("> img",b).attr("data-image-height",E[i][2]),s(b,0,"ease"),b.addClass("animateState"),S.html(E[i][3]),s(S,0,"ease"),S.addClass("animateState"),V=!0,W=!0,x.css({display:"block"}).stop().fadeTo(300,1),e("> img",b).on("load",function(){V=!1,x.stop().fadeTo(300,0,function(){e(this).css({display:"none"})}),e(this).off("load"),d(e("> img",b),f,"fill"),s(b,p.duration,"outCubic"),b.removeClass("animateState"),s(secondarImageHolder,p.duration,"outCubic"),secondarImageHolder.addClass("animateState"),s(S,p.duration,"outCubic"),S.removeClass("animateState"),s(C,p.duration,"outCubic"),C.addClass("animateState"),I.height(S.height()),setTimeout(function(){s(secondarImageHolder,0,"ease"),secondarImageHolder.removeClass("animateState"),e("> img",secondarImageHolder).attr("src","").attr("src",E[i][0]),e("> img",secondarImageHolder).attr("data-image-width",E[i][1]),e("> img",secondarImageHolder).attr("data-image-height",E[i][2]),C.html(E[i][3]),s(C,0,"ease"),C.removeClass("animateState"),d(e("> img",secondarImageHolder),f,"fill"),W=!1},p.duration)})}function s(e,i,t){var a;switch(a=0!==i?i/1e3:0,t){case"ease":e.css({"-webkit-transition":"all "+a+"s ease","-moz-transition":"all "+a+"s ease","-o-transition":"all "+a+"s ease",transition:"all "+a+"s ease"});break;case"outSine":e.css({"-webkit-transition":"all "+a+"s cubic-bezier(0.470, 0.000, 0.745, 0.715)","-moz-transition":"all "+a+"s cubic-bezier(0.470, 0.000, 0.745, 0.715)","-o-transition":"all "+a+"s cubic-bezier(0.470, 0.000, 0.745, 0.715)",transition:"all "+a+"s cubic-bezier(0.470, 0.000, 0.745, 0.715)"});break;case"outCubic":e.css({"-webkit-transition":"all "+a+"s cubic-bezier(0.215, 0.610, 0.355, 1.000)","-moz-transition":"all "+a+"s cubic-bezier(0.215, 0.610, 0.355, 1.000)","-o-transition":"all "+a+"s cubic-bezier(0.215, 0.610, 0.355, 1.000)",transition:"all "+a+"s cubic-bezier(0.215, 0.610, 0.355, 1.000)"});break;case"outExpo":e.css({"-webkit-transition":"all "+a+"s cubic-bezier(0.190, 1.000, 0.220, 1.000)","-moz-transition":"all "+a+"s cubic-bezier(0.190, 1.000, 0.220, 1.000)","-o-transition":"all "+a+"s cubic-bezier(0.190, 1.000, 0.220, 1.000)",transition:"all "+a+"s cubic-bezier(0.190, 1.000, 0.220, 1.000)"});break;case"outBack":e.css({"-webkit-transition":"all "+a+"s cubic-bezier(0.175, 0.885, 0.320, 1.275)","-moz-transition":"all "+a+"s cubic-bezier(0.175, 0.885, 0.320, 1.275)","-o-transition":"all "+a+"s cubic-bezier(0.175, 0.885, 0.320, 1.275)",transition:"all "+a+"s cubic-bezier(0.175, 0.885, 0.320, 1.275)"})}}function d(e,i,t){var a,n,r,o,l,c=0,s=0;switch(c=parseInt(e.attr("data-image-width")),s=parseInt(e.attr("data-image-height")),a=s/c,containerRatio=i.height()/i.width(),t){case"fill":containerRatio>a?(r=i.height(),n=Math.round(r*c/s)):(n=i.width(),r=Math.round(n*s/c)),e.css({width:n,height:r}),screenWidth=i.width(),screenHeight=i.height(),imgWidth=e.width(),imgHeight=e.height(),l=.5*-(imgWidth-screenWidth),o=0;break;case"fit":containerRatio>a?(n=i.width(),r=s*i.width()/c,o=i.height()/2-r/2,l=0):(n=c*i.height()/s,r=i.height(),o=0,l=i.width()/2-n/2),e.css({width:n,height:r})}e.css({top:o,left:l})}function h(){var e,i,t,a;D=T.width(),L=T.height(),N=_.top,a=(i=(e=M.scrollTop())+L)-(t=e-R),i>N&&t<N&&p.parallaxEffect&&(pixelScrolled=e-(N-L),percentScrolled=pixelScrolled/a,percentSinScrolled=Math.sin(m(180*percentScrolled)),thisHidenScrollVal=N-e,deltaTopScrollVal=A*percentScrolled,f.css({top:-A+deltaTopScrollVal}),w.css({top:-A+1.3*deltaTopScrollVal}),w.fadeTo(0,percentSinScrolled),z.css({top:Math.ceil(100*percentScrolled)+"%"}),H.css({top:Math.ceil(100*percentScrolled)+"%"}),z.fadeTo(0,percentSinScrolled),H.fadeTo(0,percentSinScrolled),y.fadeTo(0,percentSinScrolled))}function u(){D=T.width(),L=T.height(),R=B.height(),A=R*j,d(e("> img",b),f,"fill"),d(e("> img",secondarImageHolder),f,"fill")}function m(e){return e*(Math.PI/180)}var p={prevButton:e(".prevButton"),nextButton:e(".nextButton"),duration:1e3,autoSwitcher:!0,autoSwitcherDelay:7e3,parallaxEffect:!0,slider_navs:!0,slider_pagination:!0,animateLayout:"zoom-fade-eff"};e.extend(p,i);var g,v,f,b,w,S,C,I,x,z,H,k,y,B=e(this),T=e(window),M=e(document),P=0,E=[],V=!1,W=!1,_=B.offset(),N=B.offset().top,R=B.height(),A=0,D=0,L=0,j=.5,q=0;v=[],e("ul li",B).each(function(){v.push([e(this).attr("data-preview"),e(this).attr("data-img-width"),e(this).attr("data-img-height"),e(this).html()])}),B.html(""),B.addClass(p.animateLayout),B.append("<div id='mainImageHolder'><div class='primaryHolder'><img src='' alt=''></div><div class='secondaryHolder'><img src='' alt=''></div></div>"),f=e("#mainImageHolder"),b=e("#mainImageHolder > .primaryHolder"),secondarImageHolder=e("#mainImageHolder > .secondaryHolder"),B.append("<div id='mainCaptionHolder'><div class='container'><div class='primaryCaption'></div><div class='secondaryCaption'></div></div></div>"),w=e("#mainCaptionHolder"),S=e(".primaryCaption",w),C=e(".secondaryCaption",w),I=e(">.container",w),B.append("<div class='controlBtn parallaxPrevBtn'><div class='innerBtn icon-chevron-left'></div><div class='slidesCounter'></div></div><div class='controlBtn parallaxNextBtn'><div class='innerBtn icon-chevron-right'></div><div class='slidesCounter'></div></div>"),z=e(".parallaxPrevBtn",B),H=e(".parallaxNextBtn",B),B.append("<div id='paralaxSliderPagination'><ul></ul></div>"),y=e("#paralaxSliderPagination"),k=e(".slidesCounter",B),B.append("<div id='previewSpinner'><span></span></div>"),x=e("#previewSpinner"),B.on("reBuild",function(e,i){t(i)}),B.on("switchNext",function(e){l()}),B.on("switchPrev",function(e){o()}),t({urlArray:v}),p.parallaxEffect?(R=B.height(),A=R*j):(f.css({height:"100%"}),w.css({height:"100%"})),p.slider_navs||(z.remove(),H.remove()),p.slider_pagination||y.remove(),r(),a()}}(jQuery);
//# sourceMappingURL=maps/parallaxslider.js.map