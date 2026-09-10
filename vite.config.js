<<<<<<< HEAD
import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import { bunny } from 'laravel-vite-plugin/fonts';
import tailwindcss from "@tailwindcss/vite";
=======
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { bunny } from 'laravel-vite-plugin/fonts';
import tailwindcss from '@tailwindcss/vite';
>>>>>>> 27c9e432bcd1ad8b785d83f20af17c5912347666

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/passkeys.js',
            ],
=======
            input: ['resources/css/app.css', 'resources/js/app.js'],
>>>>>>> 27c9e432bcd1ad8b785d83f20af17c5912347666
            refresh: true,
            fonts: [
                bunny('Instrument Sans', {
                    weights: [400, 500, 600],
                }),
            ],
        }),
        tailwindcss(),
    ],
    server: {
<<<<<<< HEAD
        cors: true,
=======
>>>>>>> 27c9e432bcd1ad8b785d83f20af17c5912347666
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
