let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .vue({version: 3})
    .sass('resources/js/assets/scss/app.scss', 'public/css');
