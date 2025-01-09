import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/style.scss', // Add your SASS file here
                'resources/js/app.js'       // Keep your JS file
            ],
            refresh: true, // Enables hot reload during development
        }),
    ],
});
