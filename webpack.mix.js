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

mix.js('resources/assets/js/main.js', 'public/js')
   .styles([
       'resources/assets/css/style.css'
    ], 'public/css/style.css')
   .less('resources/assets/admin/less/colors/blue-dark.less', 'public/css/admin/color.css')
   .styles([
        'resources/assets/admin/css/sidebar-nav.min.css',    
        'resources/assets/admin/css/animate.css',
        'resources/assets/admin/css/spinners.css'
    ], 'public/css/admin/combined.css')
   .js('resources/assets/admin/js/custom.js', 'public/js/admin/custom.js');
