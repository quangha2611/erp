const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({
    path: '../../.env' /*, debug: true*/
}));

const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath('../../public').mergeManifest();

mix.js(__dirname + '/Resources/assets/js/calendar/app.js', '/js/crm/calendar/app.js')
    .sass(__dirname + '/Resources/assets/sass/calendar/style.scss', 'css/crm/calendar/style.css');

mix.js(__dirname + '/Resources/assets/js/activity/app.js', '/js/crm/activity/app.js')
    .sass(__dirname + '/Resources/assets/sass/activity/style.scss', 'css/crm/activity/style.css');

mix.js(__dirname + '/Resources/assets/js/customer/app.js', '/js/crm/customer/app.js')
    .sass(__dirname + '/Resources/assets/sass/customer/style.scss', 'css/crm/customer/style.css');

if (mix.inProduction()) {
    mix.version();
}
