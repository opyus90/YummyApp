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

mix.js('resources/js/main-app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
mix.js('resources/js/main-blog.js', 'public/js')
    .sass('resources/sass/blog.scss', 'public/css');
mix.js('resources/js/main-news.js', 'public/js')
    .sass('resources/sass/news.scss', 'public/css');
mix.js('resources/js/main-contact.js', 'public/js')
    .sass('resources/sass/contact.scss', 'public/css');
mix.js('resources/js/main-recipe.js', 'public/js')
    .sass('resources/sass/recipe.scss', 'public/css');
mix.js('resources/js/main-recipes.js', 'public/js')
    .sass('resources/sass/recipes.scss', 'public/css');
