let mix = require('laravel-mix');
mix
  .setPublicPath('dist')
  .js('resources/js/app.js', 'dist/js')
  .js('acf-blocks/hero-block/hero-block.js', 'dist/js/blocks')
  .js('acf-blocks/facts-block/facts-block.js', 'dist/js/blocks')
  .sass('resources/scss/style.scss', 'dist/css')
  .sass('acf-blocks/hero-block/hero-block.scss', 'dist/css/blocks')
  .sass('acf-blocks/facts-block/facts-block.scss', 'dist/css/blocks')
  .sass('acf-blocks/iac-block/iac-block.scss', 'dist/css/blocks')
  
  .autoload({
    jquery: ['$', 'window.jQuery', 'jQuery'],
  })
  .version()
  .sourceMaps();