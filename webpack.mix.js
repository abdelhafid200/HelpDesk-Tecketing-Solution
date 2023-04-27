// webpack.mix.js
const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false,
    })
    .webpackConfig({
        resolve: {
            alias: {
                'bootstrap': path.resolve(__dirname, 'node_modules/bootstrap/dist/js/bootstrap.js'),
            },
        },
    });
