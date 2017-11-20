let mix = require('laravel-mix');
// Configs
let config = {
    host: '192.168.10.10',
    port: 3000,
    base_url: 'apptotem.dev',
    watchFiles: [
        // 'app/**/*.php',
        'resources/views/**/*.blade.php',
        'public/js/**/*.js',
        // '**/*.php',
        'public/css/**/*.css'
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
    notify: true,
    open: false //false, local, external, ui, tunnel
});
// BrowserSyncPlugin = require('browser-sync-webpack-plugin')

// mix.webpackConfig({
//     plugins: [
//         new BrowserSyncPlugin({
//             host: '192.168.10.10',
//             port: 3000,
//             proxy: 'apptotem.dev',
//             files: [
//                 '**/*.scss',
//                 '**/*.php'
//             ]
//         }, { reload: true })
//     ]
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
    'node_modules/animate.css/animate.css',
    'node_modules/owl.carousel/dist/assets/owl.carousel.css',
    'node_modules/fullpage.js/dist/jquery.fullpage.css',
    'node_modules/superfish/src/css/superfish.css',
    'node_modules/bootstrap/dist/css/bootstrap.css',
    'node_modules/fancybox/dist/jquery.fancybox.css'
], 'public/css');


mix.copy(['node_modules/bootstrap-material-design/dist/js/bootstrap-material-design.js',
    'node_modules/owl.carousel/dist/owl.carousel.js',
    'node_modules/fullpage.js/dist/jquery.fullpage.extensions.min.js',
    'node_modules/fullpage.js/dist/jquery.fullpage.js',
    'node_modules/wowjs/dist/wow.js',
    'node_modules/superfish/src/js/superfish.js',
    'node_modules/smooth-scroll/dist/js/smooth-scroll.js',
    'node_modules/bootstrap/dist/js/bootstrap.js',
    'node_modules/popper.js/dist/popper.js',
    'node_modules/vue/dist/vue.js',
    'node_modules/vue-resource/dist/vue-resource.js',
    'node_modules/vue-router/dist/vue-router.js',
    'node_modules/fancybox/dist/jquery.fancybox.js'

], 'public/js');
mix.copy(['resources/assets/img/*.*'], 'public/images');