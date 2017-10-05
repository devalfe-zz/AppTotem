/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import router from './routes.js';

//require('./bootstrap');


window.Vue = require('vue');
Vue.use(require('vue-resource'));
Vue.http.headers.common['X-CSRF-TOKEN'] = document.getElementById('csrf_token').value;
import VueRouter from 'vue-router'

Vue.use(VueRouter)

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

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app',
    router
});
/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

function displaySection(nav) {
    var sections = new Array(5);
    sections[0] = "menu-1";
    sections[1] = "menu-2";
    sections[2] = "menu-3";
    sections[3] = "menu-4";
    sections[4] = "menu-5";
    var search;
    var show;
    var nav;
    for (var i = 0; i < 5; i++) {
        search = document.getElementById(sections[i]);
        show = search.style.display;
        if (show == "block") {
            search.style.display = "none";
            if (nav == "next") {
                i++;
                if (i > 4) i = 0;
            }
            if (nav == "prev") {
                i--;
                if (i < 0) i = 4;
            }
            search = document.getElementById(sections[i]);
            search.style.display = "block";
            break;
        }
    }
    if (sections[i] == "menu-1") {
        bkgr_body = "#233d58";
        bkgr_menu = "#233d58";
    } else {
        bkgr_body = "#f1f1f1";
        bkgr_menu = "#29abe2";
    }
    search.style.background = bkgr_body;
    nav = document.getElementById("navbar");
    nav.style.background = bkgr_menu;
}
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