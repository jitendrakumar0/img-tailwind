// vite.config.js

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'public/tailwind/css/app.css', 
                'public/tailwind/js/app.js',
                // 'public/tailwind/js/festival-decor/newYear/newYear.js',
                // 'public/tailwind/js/festival-decor/snowfall-xmas/snowfall-xmas.js',
                'public/tailwind/js/lazy-content.js',
            ],
            refresh: true,
            base: './public',
        }),
    ],
    build: {
        outDir: 'public/tailwind/css/build',
    },
});
