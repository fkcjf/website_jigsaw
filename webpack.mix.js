const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw()
    .copyDirectory([
      'node_modules/@fontsource-variable/open-sans/files',
      'node_modules/@fontsource-variable/montserrat/files'
    ], 'source/assets/build/css/files')
    .js('source/_assets/js/main.js', 'js').vue()
    .css('source/_assets/css/main.css', 'css/main.css', [
        require('postcss-import'),
        require('tailwindcss/nesting'),
        require('tailwindcss'),
    ])
    .options({ processCssUrls: false })
    .browserSync({
        server: 'build_local',
        files: ['build_local/**'],
    })
    .sourceMaps()
    .version();
