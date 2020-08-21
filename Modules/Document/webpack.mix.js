const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({
    path: '../../.env' /*, debug: true*/
}));

const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath('../../public').mergeManifest();

mix.js(__dirname + '/Resources/assets/js/document/app.js', '/js/document/document/app.js')
    .sass(__dirname + '/Resources/assets/sass/document/style.scss', 'css/document/document/style.css');

if (mix.inProduction()) {
    mix.version();
}
