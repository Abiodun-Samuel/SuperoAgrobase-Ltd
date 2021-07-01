const mix = require('laravel-mix');
require('laravel-mix-purgecss');

mix.js('resources/js/app.js', 'public/js');
mix.js('public/script.js', 'public/js');
mix.sass('resources/sass/app.scss', 'public/css').purgeCss();
mix.postCss('public/style.css', 'public/css').options({
    processCssUrls: false,
}).purgeCss();
