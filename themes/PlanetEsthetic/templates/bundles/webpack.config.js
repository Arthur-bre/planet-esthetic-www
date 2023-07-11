const Encore = require('@symfony/webpack-encore');

Encore
  .setOutputPath('public/planet-esthetic-theme')
  .setPublicPath('/planet-esthetic-theme')
  .addEntry('app', './themes/PlanetEsthetic/templates/bundles/assets/app.js')
  .disableSingleRuntimeChunk()
  .cleanupOutputBeforeBuild()
  .enableSassLoader()
  .enableSourceMaps(!Encore.isProduction())
  .enableVersioning(Encore.isProduction());

const config = Encore.getWebpackConfig();
config.name = 'PlanetEsthetic';

module.exports = config;
