const mix = require('laravel-mix');
require('laravel-mix-compress');


mix.sass('resources/sass/app.scss', 'public/css')
   .js('resources/js/app.js', 'public/js')
   .options({
      processCssUrls: false,
      postCss: [require('tailwindcss')],
   })
   .version();

mix.compress();


