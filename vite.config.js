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
        outDir: 'dist', // match Laravel's public folder
        emptyOutDir: true, // optional, clears folder before build
    },
});
