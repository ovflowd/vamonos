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

// jQuery and Angular Dependencies
mix.js([
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/angular/angular.min.js',
    'node_modules/@uirouter/core/_bundles/ui-router-core.min.js'
], 'public/js/vendor.js');

// Foundation Scripts
mix.js([
    'node_modules/motion-ui/dist/motion-ui.min.js',
    'node_modules/foundation-sites/dist/js/foundation.min.js'
], 'public/js/foundation.js');

// Foundation Stylesheet
mix.styles([
    'node_modules/motion-ui/dist/css/motion-ui.css',
    'node_modules/foundation-sites/dist/css/foundation.min.css'
], 'public/css/foundation.css');

// Main Stylesheet
mix.sass('resources/assets/css/app.scss', 'public/css/app.css');

// Home Page
mix.js([
    'resources/assets/js/pages/home.js',
    'resources/assets/js/controllers/HomeController.js'
], 'public/js/angular/home.js');