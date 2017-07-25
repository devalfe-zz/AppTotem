let mix = require('laravel-mix');
mix.browserSync('apptotem.dev');

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

mix.combine(['node_modules/bootstrap-material-design/dist/css/bootstrap-material-design.css',
    'node_modules/bootstrap-material-design/dist/css/ripples.css',
    'node_modules/animate.css/animate.css',
    'node_modules/sweetalert/dist/sweetalert.css',
    'node_modules/owl.carousel/dist/assets/owl.carousel.css',
    'node_modules/fullpage.js/dist/jquery.fullpage.css'

], 'public/css/design.css');


mix.combine(['node_modules/bootstrap-material-design/dist/js/material.js',
    'node_modules/bootstrap-material-design/dist/js/ripples.js',
    'node_modules/sweetalert/dist/sweetalert-dev.js',
    'node_modules/owl.carousel/dist/owl.carousel.js',
    'node_modules/fullpage.js/dist/jquery.fullpage.extensions.min.js',
    'node_modules/fullpage.js/dist/jquery.fullpage.js',
    'node_modules/wowjs/dist/wow.js'

], 'public/js/design.js');


//mix.copy('resources/assets/scr/css/bootstrap-material-design.min.css', 'public/css');
//mix.copy('resources/assets/scr/css/dataTables.bootstrap.min.css', 'public/css');
//mix.copy('resources/assets/scr/css/jquery.dataTables.min.css', 'public/css');
//mix.copy('resources/assets/scr/css/jquery-ui.min.css', 'public/css');
//mix.copy('resources/assets/scr/css/responsive.bootstrap.min.css', 'public/css');
//mix.copy('resources/assets/scr/css/ripples.min.css', 'public/css');


//mix.copy('resources/assets/scr/js/dataTables.bootstrap.min.js', 'public/js');
//mix.copy('resources/assets/scr/js/dataTables.responsive.min.js', 'public/js');
//mix.copy('resources/assets/scr/js/jquery.dataTables.min.js', 'public/js');
//mix.copy('resources/assets/scr/js/jquery.min.js', 'public/js');
//mix.copy('resources/assets/scr/js/jquery-ui.min.js', 'public/js');
//mix.copy('resources/assets/scr/js/owl.carousel.min.js', 'public/js');
//mix.copy('resources/assets/scr/js/responsive.bootstrap.min.js', 'public/js');
//mix.copy('resources/assets/scr/js/ripples.min.js', 'public/js');
//mix.copy('resources/assets/scr/js/smooth-scroll.min.js', 'public/js');
//mix.copy('resources/assets/scr/js/sweetalert.min.js', 'public/js');
//mix.copy('resources/assets/scr/js/wow.min.js', 'public/js');

//mix.copy('node_modules/font-awesome/fonts', 'public/fonts');
//mix.copyDirectory('assets/img', 'public/images');