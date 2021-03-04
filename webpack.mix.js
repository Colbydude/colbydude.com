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
   .js('resources/js/code.js', 'public/js').vue()
   .sass('resources/sass/app.scss', 'public/css')
   .copy('node_modules/bootstrap-sass/assets/fonts/bootstrap', 'public/fonts/vendor/bootstrap-sass')
   .copy('node_modules/open-sans-fontface/fonts', 'public/fonts/vendor/open-sans-fontface')
   .version();
