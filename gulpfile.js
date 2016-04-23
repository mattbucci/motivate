var elixir = require('laravel-elixir');
require('laravel-elixir-livereload');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss');
    mix.sass('vendor.scss');
});

elixir(function(mix) {
    mix.copy('node_modules/font-awesome/fonts', 'public/css/fonts');
    mix.copy('node_modules/elegant-icons/fonts', 'public/css/fonts');
    mix.copy('resources/assets/img', 'public/img');
});

elixir(function(mix) {
    mix.browserify('app.jsx', 'public/js/bundle.js');
});

elixir(function(mix) {
    mix.livereload(['app/**/*', 'public/**/*', 'resources/views/**/*', 'resources/assets/**/*']);
});