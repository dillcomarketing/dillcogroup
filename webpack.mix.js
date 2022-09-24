const mix = require('laravel-mix');

require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw()
    .js('source/_assets/js/app.js', 'js')
    .postCss('source/_assets/css/app.css', 'css', [
        require('tailwindcss'),
        require('autoprefixer')
    ])
    .options({
        processCssUrls: false,
    })
    .version();
