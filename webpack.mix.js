let mix = require('laravel-mix');
// Configs
let config = {
    host: '192.168.10.10',
    port: 3000,
    base_url: 'apptotem.dev',
    watchFiles: [
        'app/Modules/**/Resources/views/**/*.{php,html}',
        'app/Modules/**/Resources/views/*.{php,html}',
        //'app/**/*.*',
        //'public/**/*.*'
        //'resources/assets/**/*.*',
        //'resources/views/**/*.*',
        //'app/Modules/**/Resources/views/**/*.*',
        'public/css/**/*.*',
        'public/js/**/*.*',
        'resources/views/**/*.*',
        //'aap/Modules/**/Resources/views/**/*.*',
        //'app/Modules/**/Resources/views/*.*'
    ]
};

//Browserfy
mix.browserSync({
    files: config.watchFiles,
    host: config.host,
    proxy: config.base_url,
    port: config.port,
    online: true,
    logConnections: false,
    reloadOnRestart: true,
    notify: false,
    open: false //false, local, external, ui, tunnel
});
// mix.browserSync({
//     'js': [
//         'public/js/app.js',
//     ],
//     'css': [
//         'public/css/app.css',
//     ],
//     'views': [
//         'resources/views/**/*'
//     ],
//     proxy: 'apptotem.dev',
//     open: false,
//     host: "192.168.10.10"
// });

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

mix.copy(['node_modules/bootstrap-material-design/dist/css/bootstrap-material-design.css',
    'node_modules/bootstrap-material-design/dist/css/ripples.css',
    'node_modules/animate.css/animate.css',
    'node_modules/sweetalert/dist/sweetalert.css',
    'node_modules/owl.carousel/dist/assets/owl.carousel.css',
    'node_modules/fullpage.js/dist/jquery.fullpage.css',
    'node_modules/superfish/src/css/superfish.css'

], 'public/css');


mix.copy(['node_modules/bootstrap-material-design/dist/js/material.js',
    'node_modules/bootstrap-material-design/dist/js/ripples.js',
    'node_modules/sweetalert/dist/sweetalert-dev.js',
    'node_modules/owl.carousel/dist/owl.carousel.js',
    'node_modules/fullpage.js/dist/jquery.fullpage.extensions.min.js',
    'node_modules/fullpage.js/dist/jquery.fullpage.js',
    'node_modules/wowjs/dist/wow.js',
    'node_modules/superfish/src/js/superfish.js',
    'node_modules/smooth-scroll/dist/js/smooth-scroll.js'

], 'public/js');


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