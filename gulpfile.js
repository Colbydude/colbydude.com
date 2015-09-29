var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

var paths =
{
    'bower_components': './bower_components/',
    'resources_vendor': './resources/vendor/'
}

elixir(function(mix)
{
     mix.sass('app.scss')
        .scripts([paths.bower_components + 'jquery/dist/jquery.js', paths.bower_components + 'bootstrap-sass-official/assets/javascripts/bootstrap.js'], 'public/js/vendor.js', './')
        .scripts(['app.js'], 'public/js/app.js')
        .copy(paths.bower_components + 'bootstrap-sass-official/assets/fonts/bootstrap/**', 'public/fonts/bootstrap')
        .copy(paths.bower_components + 'open-sans-fontface/fonts/**', 'public/fonts/open-sans')
        .copy(paths.bower_components + 'font-awesome/fonts/**', 'public/fonts/fontawesome')
        .version(['css/app.css', 'js/vendor.js', 'js/app.js']);
});
