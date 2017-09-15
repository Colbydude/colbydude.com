let mix = require('laravel-mix');

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
   .sass('resources/assets/sass/app.scss', 'public/css')
   .version(['public/css/app.css', 'public/js/app.js']);
//.copy('node_modules/bootstrap-sass/assets/fonts/bootstrap/**', 'public/fonts/bootstrap')
//.copy('node_modules/font-awesome/fonts/**', 'public/fonts/font-awesome')
//.copy('node_modules/open-sans-fontface/fonts/**', 'public/fonts/open-sans')
