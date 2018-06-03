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

mix.options({
    processCssUrls: false
});

// Foundation Stylesheet
mix.styles([
    'node_modules/motion-ui/dist/css/motion-ui.css',
    'node_modules/foundation-sites/dist/css/foundation.min.css'
], 'public/css/foundation.css');

// Main Stylesheet
mix.sass('resources/assets/css/app.scss', 'public/css/app.css');

// jQuery and Angular Dependencies
mix.scripts([
    'node_modules/angular/angular.min.js',
    'node_modules/@uirouter/angularjs/release/angular-ui-router.min.js',
    'node_modules/ngstorage/ngStorage.min.js'
], 'public/js/vendor.js');

// Foundation Scripts
mix.scripts([
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/typed.js/lib/typed.min.js',
    'node_modules/motion-ui/dist/motion-ui.min.js',
    'node_modules/foundation-sites/dist/js/foundation.min.js'
], 'public/js/foundation.js');

// Application
mix.js([
    'resources/assets/js/controllers/AppController.js'
], 'public/js/angular/app.js');

// Home Page
mix.js([
    'resources/assets/js/pages/event.js',
    'resources/assets/js/controllers/EventController.js'
], 'public/js/angular/event.js');

// Results Page
mix.js([
    'resources/assets/js/pages/results.js',
    'resources/assets/js/controllers/ResultsController.js'
], 'public/js/angular/results.js');