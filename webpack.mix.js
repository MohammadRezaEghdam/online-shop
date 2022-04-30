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
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

mix.styles([
    'resources/Styles/css/bootstrap.css',
    'resources/Styles/css/custom.css'
], 'public/css/main.css');

mix.js([
    'resources/js/Jquery.js'
], 'public/js/main.js')

mix.copyDirectory([
    'resources/Styles/images',
], 'public/images')

mix.copyDirectory([
    'resources/Styles/icon',
], 'public/icon')

mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
])