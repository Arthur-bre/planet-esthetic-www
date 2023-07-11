const Encore = require('@symfony/webpack-encore');

Encore.reset();
Encore
  .setOutputPath('public/bootstrap-theme')
  .setPublicPath('/bootstrap-theme')
  .addEntry('app', './themes/BootstrapChildTheme/templates/bundles/assets/app.js')
  .disableSingleRuntimeChunk()
  .cleanupOutputBeforeBuild()
  .enableSassLoader()
  .enableSourceMaps(!Encore.isProduction())
  .enableVersioning(Encore.isProduction());

const bootstrapThemeConfig = Encore.getWebpackConfig();
bootstrapThemeConfig.name = 'bootstrapTheme';

module.exports = bootstrapThemeConfig;
