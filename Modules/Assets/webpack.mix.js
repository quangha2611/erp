const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({
    path: '../../.env' /*, debug: true*/
}));

const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath('../../public').mergeManifest();

mix.js(__dirname + '/Resources/assets/js/category/app.js', '/js/asset/category/app.js')
    .sass(__dirname + '/Resources/assets/sass/category/style.scss', 'css/asset/category/style.css');

mix.js(__dirname + '/Resources/assets/js/manage/app.js', '/js/asset/manage/app.js')
    .sass(__dirname + '/Resources/assets/sass/manage/style.scss', '/css/asset/manage/style.css');

if (mix.inProduction()) {
    mix.version();
}
