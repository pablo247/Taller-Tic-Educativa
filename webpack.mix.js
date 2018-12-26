let mix = require('laravel-mix');

let ImageminPlugin = require('imagemin-webpack-plugin').default;
let CopyWebpackPlugin = require('copy-webpack-plugin');
let imageminMozjpeg = require('imagemin-mozjpeg');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.webpackConfig({
   plugins: [
      new CopyWebpackPlugin([{
         from: 'resources/assets/images',
         to: 'images',
      }]),
      new ImageminPlugin({
         test: /\.(jpe?g|png|gif|svg)$/i,
         plugins: [
            imageminMozjpeg({
               quality: 80,
            })
         ]
      })
   ]
});

mix.options({
   clearConsole: true
});

mix.js('resources/assets/js/app.js', 'public/js').sourceMaps()
   .sass('resources/assets/sass/app.scss', 'public/css').sourceMaps();

mix.browserSync({
   proxy: 'local.ticeducativa.com'
});
