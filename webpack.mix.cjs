const mix = require('laravel-mix');
require('laravel-mix-compress');


mix.sass('resources/sass/app.scss', 'public/css/app.css')
   .js('resources/js/app.js', 'public/js/app.js')
   .copyDirectory('resources/publicFiles', 'public')
   .options({
      processCssUrls: false,
      postCss: [require('tailwindcss')],
   })
   .version();

mix.compress();


