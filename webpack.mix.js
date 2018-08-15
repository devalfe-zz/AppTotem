let mix = require('laravel-mix');
const path = require('path')
const webpack = require('webpack')
    //! const { BundleAnalyzerPlugin } = require('webpack-bundle-analyzer')

//? Configs
let config = {
    host: '192.168.10.10',
    port: 3000,
    base_url: 'apptotem.test',
    watchFiles: [
        'app/**/*.php',
        './resources/views/**/*.php',
        //'AppTotem/resources/views/**/*.php',
        'public/js/**/*.js',
        //'**/*.php',
        'public/css/**/*.css'
    ]
};

//? Browserfy
mix.browserSync({
    files: config.watchFiles,
    host: config.host,
    proxy: config.base_url,
    port: config.port,
    online: true,
    logConnections: false,
    reloadOnRestart: true,
    notify: true,
    open: false, //false, local, external, ui, tunnel
    injectChanges: true,
    logSnippet: true,
    browser: ["google chrome", "firefox"]
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
mix.autoload({
    jquery: ['$', 'window.jQuery', "jQuery", "window.$", "jquery", "window.jquery"],
    'node_modules/popper.js/dist/popper.js': ['Popper']
})

mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/main.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/main.scss', 'public/css')

.sourceMaps()
    .disableNotifications()

mix.copy([

    'node_modules/owl.carousel/dist/assets/owl.carousel.css',
    'node_modules/fullpage.js/dist/jquery.fullpage.css',
    'node_modules/superfish/src/css/superfish.css',
    'node_modules/bootstrap/dist/css/bootstrap.css',
    'node_modules/@fancyapps/fancybox/dist/jquery.fancybox.css'
], 'public/css')

mix.copy([
    'node_modules/jquery/dist/jquery.js',
    'node_modules/owl.carousel/dist/owl.carousel.js',
    'node_modules/fullpage.js/dist/jquery.fullpage.extensions.min.js',
    'node_modules/fullpage.js/dist/jquery.fullpage.js',
    'node_modules/wowjs/dist/wow.js',
    'node_modules/superfish/src/js/superfish.js',
    'node_modules/smooth-scroll/dist/js/smooth-scroll.js',
    'node_modules/bootstrap/dist/js/bootstrap.js',
    'node_modules/popper.js/dist/popper.js',
    'node_modules/@fancyapps/fancybox/dist/jquery.fancybox.js'

], 'public/js')
mix.copy(['resources/assets/img/*.*'], 'public/images')

if (mix.inProduction()) {
    mix.version()

    mix.extract([
        'vue',
        'vform',
        'axios',
        'vuex',
        'jquery',
        'popper.js',
        'vue-i18n',
        'vue-meta',
        'js-cookie',
        'bootstrap',
        'vue-router',
        'sweetalert2',
        'vuex-router-sync',
        '@fortawesome/fontawesome',
        '@fortawesome/vue-fontawesome'
    ])
}
mix.webpackConfig({
    plugins: [
        //! new BundleAnalyzerPlugin(),
        new webpack.ProvidePlugin({
            $: 'jquery',
            jQuery: 'jquery',
            'window.jQuery': 'jquery',
            Popper: ['popper.js', 'default']
        })
    ],
    resolve: {
        extensions: ['.js', '.json', '.vue'],
        alias: {
            '~': path.join(__dirname, './resources/assets/js')
        }
    },

})