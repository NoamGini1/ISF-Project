let mix = require('laravel-mix');
mix
  .setPublicPath('dist')
  .js('resources/js/app.js', 'dist/js')
  .sass('resources/scss/style.scss', 'dist/css')
  .autoload({
    jquery: ['$', 'window.jQuery', 'jQuery'], // <- important
  })
  .version()
  .sourceMaps();