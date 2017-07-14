let mix = require('laravel-mix');
mix.browserSync('Apptotem.dev');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');

mix.copy('resources/assets/scr/css/animate.min.css', 'public/css/');
mix.copy('resources/assets/scr/css/bootstrap-material-design.min.css', 'public/css/');
mix.copy('resources/assets/scr/css/dataTables.bootstrap.min.css', 'public/css/');
mix.copy('resources/assets/scr/css/jquery.dataTables.min.css', 'public/css/');
mix.copy('resources/assets/scr/css/jquery-ui.min.css', 'public/css/');
mix.copy('resources/assets/scr/css/owl.carousel.min.css', 'public/css/');
mix.copy('resources/assets/scr/css/responsive.bootstrap.min.css', 'public/css/');
mix.copy('resources/assets/scr/css/ripples.min.css', 'public/css/');
mix.copy('resources/assets/scr/css/sweetalert.css', 'public/css/');

mix.copy('resources/assets/scr/js/dataTables.bootstrap.min.js', 'public/js/');
mix.copy('resources/assets/scr/js/dataTables.responsive.min.js', 'public/js/');
mix.copy('resources/assets/scr/js/jquery.dataTables.min.js', 'public/js/');
mix.copy('resources/assets/scr/js/jquery.min.js', 'public/js/');
mix.copy('resources/assets/scr/js/jquery-ui.min.js', 'public/js/');
mix.copy('resources/assets/scr/js/owl.carousel.min.js', 'public/js/');
mix.copy('resources/assets/scr/js/responsive.bootstrap.min.js', 'public/js/');
mix.copy('resources/assets/scr/js/ripples.min.js', 'public/js/');
mix.copy('resources/assets/scr/js/smooth-scroll.min.js', 'public/js/');
mix.copy('resources/assets/scr/js/sweetalert.min.js', 'public/js/');
mix.copy('resources/assets/scr/js/wow.min.js', 'public/js/');

mix.copyDirectory('assets/img', 'public/images');