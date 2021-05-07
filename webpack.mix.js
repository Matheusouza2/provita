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
    'resources/css/admin/perfect-scrollbar.css',
    'resources/css/admin/app.css',
], 'public/adm/css/style.css')
.styles([
    'resources/css/site/login.css',
    'resources/css/site/normalize.css',
    'resources/css/site/reset.css',
    'resources/css/site/style.css'
], 'public/site/css/style.css')
.scripts([
    'resources/js/admin/perfect-scrollbar.min.js',
    'resources/js/admin/dashboard.js',
    'resources/js/admin/main.js',
], 'public/adm/js/script.js')
.scripts([
    'resources/js/user/perfect-scrollbar.min.js',
    'resources/js/user/dashboard.js',
    'resources/js/user/main.js',
    'resources/js/user/custom.js',
], 'public/user/js/script.js')
.version();

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();
