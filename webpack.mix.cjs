const mix = require('laravel-mix');
require('laravel-mix-compress');


mix.sass('resources/sass/app.scss', 'public/css/app.css')
   .js('resources/js/app.js', 'public/js/app.js')
   .js('resources/js/lazy-content.js', 'public/js/lazy-content.js')
   .copyDirectory('resources/publicFiles', 'public')
   .options({
      processCssUrls: false,
      postCss: [require('tailwindcss')],
   })
   .version();
   
// Add this for lazy loading
// mix.lazy(['resources/js/lazy-content.js'], 'public/js/lazy-content.js');

mix.compress();


