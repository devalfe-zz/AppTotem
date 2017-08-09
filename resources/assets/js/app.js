/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./bootstrap');

//window.Vue = require('vue');
window.$ = window.jQuery = require('jquery');

function include(scriptUrl) {
    document.write('<script src="' + scriptUrl + '"></script>');
}

function isIE() {
    var myNav = navigator.userAgent.toLowerCase();
    return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
};

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));

// const app = new Vue({
//     el: '#app'
// });
/* Superfish menus
 ========================================================*/

(function($) {
    include('js/superfish.js');

    var o = $('.sf-menu-toggle');
    if (o.length > 0) {
        $(document).ready(function() {
            var n = $('.nav');
            o.click(function() {
                n.toggleClass('active');
                return false;
            });

            $(document).click(function(e) {
                if (n.hasClass('active')) {
                    var target = e.clientX;
                    if (target > (n.width())) {
                        n.removeClass('active');
                    }
                }
            });
        });
    } else {
        include('js/jquery.mobilemenu.js');

    }
})(jQuery);