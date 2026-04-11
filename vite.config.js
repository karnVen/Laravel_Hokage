import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            // <--- THIS IS THE TOPIC FEATURE
            // Forces the browser to refresh automatically when you save a .blade.php file
            refresh: true, 
        }),
    ],
});