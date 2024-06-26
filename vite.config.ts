import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { VitePWA } from 'vite-plugin-pwa';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/ts/docs.ts',
                'resources/ts/app.ts',


                'resources/css/docs.css',
                'resources/css/landing.css',
                'resources/css/app.css',
            ],
            refresh: true,
        }),
        VitePWA({
            strategies: 'injectManifest',
            injectManifest: {
                swSrc: 'public/sw.js',
                swDest: 'dist/sw.js',
                globDirectory: 'dist',
                globPatterns: ['**/*.{html,js,css,json, png}'],
            },
            devOptions: {
                enabled: true,
            },
        }),
    ],
    resolve: {
        alias: {
            "@": "/resources/ts",
            "@css": "/resources/css",
            "@media": "/resources/media",
            "@img": "/resources/media/img",
            "@icons": "/resources/media/icons",
            "@fonts": "/resources/media/fonts",
            "@components": "/resources/ts/components",
            "@pages": "/resources/ts/pages",
            "@types": "/resources/ts/types",
        },
    },
});
