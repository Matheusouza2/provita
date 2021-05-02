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
mix.styles([
    'resources/site/css/login.css',
    'resources/site/css/normalize.css',
    'resources/site/css/reset.css',
    'resources/site/css/style.css',
], 'public/site/css/style.css')

.scripts([
    'resources/js/app.js',
], 'public/site/js/script.js')
.sass('resources/sass/app.scss', 'public/css')
.sourceMaps()
.version();