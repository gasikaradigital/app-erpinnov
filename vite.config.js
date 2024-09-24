import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import autoprefixer from 'autoprefixer';
import path from 'path';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/js/laravel-user-management.js',
        'resources/assets/vendor/scss/**/!(_)*.scss',
        'resources/assets/vendor/js/**/*.js',
        'resources/assets/vendor/libs/**/*.js',
        'resources/assets/vendor/libs/**/!(_)*.scss',
        'resources/assets/vendor/libs/**/*.{png,jpg,jpeg,gif}',
        'resources/assets/vendor/fonts/*/*',
        'resources/assets/vendor/fonts/!(_)*.scss',
        'resources/js/**/*.js',
        'resources/css/**/*.css'
      ],
      refresh: true,
    }),
  ],
  css: {
    postcss: {
      plugins: [
        autoprefixer
      ],
    },
    preprocessorOptions: {
      scss: {
        precision: 5,
      },
    },
  },
  resolve: {
    alias: {
      '@': '/resources/assets',
    },
  },
  build: {
    rollupOptions: {
      output: {
        publicPath: process.env.ASSET_URL || undefined,
        globals: {
          jquery: 'jQuery',
          moment: 'moment',
          jsdom: 'jsdom',
          velocity: 'Velocity',
          hammer: 'Hammer',
          pace: 'pace-progress',
          chartist: 'Chartist',
          'popper.js': 'Popper',
          './blueimp-helper': 'jQuery',
          './blueimp-gallery': 'blueimpGallery',
          './blueimp-gallery-video': 'blueimpGallery',
        },
      },
    },
    commonjsOptions: {
      include: [
        /node_modules\/bootstrap/,
        /node_modules\/popper.js/,
        /node_modules\/shepherd.js/
      ],
      transformMixedEsModules: true,
    },
  },
  server: {
    host: '127.0.0.1',
    port: 8000,
  },
  envPrefix: 'VITE_',
  env: {
    BASE_URL: process.env.ASSET_URL ? `${process.env.ASSET_URL}/` : '/'
  }
});
