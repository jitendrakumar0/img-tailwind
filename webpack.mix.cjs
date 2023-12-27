const mix = require('laravel-mix');
require('laravel-mix-compress');


mix.sass('resources/sass/app.scss', 'public/tailwind/css/app.css')
    .js('resources/js/app.js', 'public/tailwind/js/app.js')
    .js('resources/js/lazy-content.js', 'public/tailwind/js/lazy-content.js')
    // .js('resources/js/festival-decor/snowfall-xmas/snowfall-xmas.js', 'public/tailwind/js/festival-decor/snowfall-xmas/snowfall-xmas.js')
    // .js('resources/js/festival-decor/newYear/newYear.js', 'public/tailwind/js/festival-decor/newYear/newYear.js')
    .copyDirectory('resources/tailwindPublicFiles', 'public/tailwind')
    .options({
        processCssUrls: false,
        postCss: [require('tailwindcss')],
    })
    .version();

mix.compress();


