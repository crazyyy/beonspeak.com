!function(e){e.fn.mobileMenu=function(s){var a={defaultText:"Navigate to...",className:"select-menu",subMenuClass:"sub-menu",subMenuDash:"&ndash;"},t=e.extend(a,s),n=e(this);return e("head").append('<style type="text/css">@media(max-width: 767px){.sf-menu{display:none;} .select-menu{display: block;}}</style>'),this.each(function(){n.find("ul").addClass(t.subMenuClass),e("<select />",{class:t.className}).insertAfter(n),e("<option />",{value:"#",text:t.defaultText}).appendTo("."+t.className),n.find("a,.separator").each(function(){var s=e(this),a=s.context.firstChild.textContent,n=s.parents("."+t.subMenuClass).length;s.parents("ul").hasClass(t.subMenuClass)&&(a=Array(n+1).join(t.subMenuDash)+a),s.is("span")?e("<optgroup />",{label:a}).appendTo("."+t.className):e("<option />",{value:this.href,html:a,selected:this.href==window.location.href}).appendTo("."+t.className)}),e("."+t.className).change(function(){"#"!==e(this).val()&&(window.location.href=e(this).val())})}),this}}(jQuery);
//# sourceMappingURL=maps/jquery.mobilemenu.js.map
