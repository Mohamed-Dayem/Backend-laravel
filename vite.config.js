import { defineConfig } from 'vite';
import laravelPlugin from 'laravel-vite-plugin';

const inputFiles = ['resources/css/app.css', 'resources/js/app.js'];

export default defineConfig({
  plugins: [
    laravelPlugin({
      input: inputFiles,
      refresh: true,
    }),
  ],
});
