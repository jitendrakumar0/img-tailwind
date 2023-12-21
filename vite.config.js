import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['public/tailwind/css/app.css', 'public/tailwind/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'public/tailwind/build',
    },
});
