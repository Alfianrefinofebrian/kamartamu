import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.jsx', 'resources/js/property.jsx'],
            refresh: true,
        }),
        react(),
    ],
    build: {
        manifest: true,
        outDir: 'public/build', // Laravel expects assets in public/build
        emptyOutDir: true,
        rollupOptions: {
            // ensure multiple entry points are preserved
            input: ['resources/js/app.jsx', 'resources/js/property.jsx', 'resources/css/app.css'],
        },
    },
});
