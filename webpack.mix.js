const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .copyDirectory('resources/js/vendor', 'public/js/vendor')
    .copyDirectory('resources/images', 'public/images')
    .copyDirectory('node_modules/cryptocurrency-icons/svg', 'public/images/crypto/icons')
    .copy('resources/sass/primer/primer.css', 'public/css')
    .copy('node_modules/flag-icon-css/css/flag-icon.min.css', 'public/css/vendor/flag-icon')
    .copy('node_modules/flag-icon-css/flags', 'public/css/vendor/flags')
    .version();
