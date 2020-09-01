const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({
    path: '../../.env' /*, debug: true*/
}));

const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath('../../public').mergeManifest();

mix.js(__dirname + '/Resources/assets/js/transaction/app.js', '/js/accounting/transaction/app.js')
    .sass(__dirname + '/Resources/assets/sass/transaction/style.scss', 'css/accounting/transaction/style.css');

mix.js(__dirname + '/Resources/assets/js/account/app.js', '/js/accounting/account/app.js')
    .sass(__dirname + '/Resources/assets/sass/account/style.scss', 'css/accounting/account/style.css');

mix.js(__dirname + '/Resources/assets/js/category/app.js', '/js/accounting/category/app.js')
    .sass(__dirname + '/Resources/assets/sass/category/style.scss', 'css/accounting/category/style.css');

mix.js(__dirname + '/Resources/assets/js/report/app.js', '/js/accounting/report/app.js')
    .sass(__dirname + '/Resources/assets/sass/report/style.scss', 'css/accounting/report/style.css');

if (mix.inProduction()) {
    mix.version();
}
