const mix = require('laravel-mix');

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

mix.styles(['resources/css/main.css'], 'public/css/all.css').version();

mix.js('resources/js/all.js', 'public/js/all.js').version();
mix.js([
    'resources/js/lotto-api.js',
    'resources/js/components/luck-number.js'
    ],
    'public/js/script.js').version();
