!function(e,s){"use strict";var n=function(){var n={bcClass:"sf-breadcrumb",menuClass:"sf-js-enabled",anchorClass:"sf-with-ul",menuArrowClass:"sf-arrows"},o=function(){var s=/^(?![\w\W]*Windows Phone)[\w\W]*(iPhone|iPad|iPod)/i.test(navigator.userAgent);return s&&e("html").css("cursor","pointer").on("click",e.noop),s}(),t=function(){var e=document.documentElement.style;return"behavior"in e&&"fill"in e&&/iemobile/i.test(navigator.userAgent)}(),i=function(){return!!s.PointerEvent}(),r=function(e,s,o){var t,i=n.menuClass;s.cssArrows&&(i+=" "+n.menuArrowClass),t=o?"addClass":"removeClass",e[t](i)},a=function(s,o){return s.find("li."+o.pathClass).slice(0,o.pathLevels).addClass(o.hoverClass+" "+n.bcClass).filter(function(){return e(this).children(o.popUpSelector).hide().show().length}).removeClass(o.pathClass)},l=function(e,s){var o=s?"addClass":"removeClass";e.children("a")[o](n.anchorClass)},h=function(e){var s=e.css("ms-touch-action"),n=e.css("touch-action");n=n||s,n="pan-y"===n?"auto":"pan-y",e.css({"ms-touch-action":n,"touch-action":n})},u=function(e){return e.closest("."+n.menuClass)},p=function(e){return u(e).data("sfOptions")},c=function(){var s=e(this),n=p(s);clearTimeout(n.sfTimer),s.siblings().superfish("hide").end().superfish("show")},f=function(s){s.retainPath=e.inArray(this[0],s.$path)>-1,this.superfish("hide"),this.parents("."+s.hoverClass).length||(s.onIdle.call(u(this)),s.$path.length&&e.proxy(c,s.$path)())},d=function(){var s=e(this),n=p(s);o?e.proxy(f,s,n)():(clearTimeout(n.sfTimer),n.sfTimer=setTimeout(e.proxy(f,s,n),n.delay))},v=function(s){var n=e(this),o=p(n),t=n.siblings(s.data.popUpSelector);if(!1===o.onHandleTouch.call(t))return this;t.length>0&&t.is(":hidden")&&(n.one("click.superfish",!1),"MSPointerDown"===s.type||"pointerdown"===s.type?n.trigger("focus"):e.proxy(c,n.parent("li"))())},m=function(s,n){var r="li:has("+n.popUpSelector+")";e.fn.hoverIntent&&!n.disableHI?s.hoverIntent(c,d,r):s.on("mouseenter.superfish",r,c).on("mouseleave.superfish",r,d);var a="MSPointerDown.superfish";i&&(a="pointerdown.superfish"),o||(a+=" touchend.superfish"),t&&(a+=" mousedown.superfish"),s.on("focusin.superfish","li",c).on("focusout.superfish","li",d).on(a,"a",n,v)};return{hide:function(s){if(this.length){var n=this,o=p(n);if(!o)return this;var t=!0===o.retainPath?o.$path:"",i=n.find("li."+o.hoverClass).add(this).not(t).removeClass(o.hoverClass).children(o.popUpSelector),r=o.speedOut;if(s&&(i.show(),r=0),o.retainPath=!1,!1===o.onBeforeHide.call(i))return this;i.stop(!0,!0).animate(o.animationOut,r,function(){var s=e(this);o.onHide.call(s)})}return this},show:function(){var e=p(this);if(!e)return this;var s=this.addClass(e.hoverClass),n=s.children(e.popUpSelector);return!1===e.onBeforeShow.call(n)?this:(n.stop(!0,!0).animate(e.animation,e.speed,function(){e.onShow.call(n)}),this)},destroy:function(){return this.each(function(){var s,o=e(this),t=o.data("sfOptions");if(!t)return!1;s=o.find(t.popUpSelector).parent("li"),clearTimeout(t.sfTimer),r(o,t),l(s),h(o),o.off(".superfish").off(".hoverIntent"),s.children(t.popUpSelector).attr("style",function(e,s){if(void 0!==s)return s.replace(/display[^;]+;?/g,"")}),t.$path.removeClass(t.hoverClass+" "+n.bcClass).addClass(t.pathClass),o.find("."+t.hoverClass).removeClass(t.hoverClass),t.onDestroy.call(o),o.removeData("sfOptions")})},init:function(s){return this.each(function(){var o=e(this);if(o.data("sfOptions"))return!1;var t=e.extend({},e.fn.superfish.defaults,s),i=o.find(t.popUpSelector).parent("li");t.$path=a(o,t),o.data("sfOptions",t),r(o,t,!0),l(i,!0),h(o),m(o,t),i.not("."+n.bcClass).superfish("hide",!0),t.onInit.call(this)})}}}();e.fn.superfish=function(s,o){return n[s]?n[s].apply(this,Array.prototype.slice.call(arguments,1)):"object"!=typeof s&&s?e.error("Method "+s+" does not exist on jQuery.fn.superfish"):n.init.apply(this,arguments)},e.fn.superfish.defaults={popUpSelector:"ul,.sf-mega",hoverClass:"sfHover",pathClass:"overrideThisToUse",pathLevels:1,delay:800,animation:{opacity:"show"},animationOut:{opacity:"hide"},speed:"normal",speedOut:"fast",cssArrows:!0,disableHI:!1,onInit:e.noop,onBeforeShow:e.noop,onShow:e.noop,onBeforeHide:e.noop,onHide:e.noop,onIdle:e.noop,onDestroy:e.noop,onHandleTouch:e.noop}}(jQuery,window);