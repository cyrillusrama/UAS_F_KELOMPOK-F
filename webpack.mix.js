const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js("resources/js/app.js", "public/js")
    .js("resources/js/components/home.js", "public/js/components")
    .js("resources/js/components/login.js", "public/js/components")
    .js("resources/js/components/account.js", "public/js/components")
    .js("resources/js/components/register.js", "public/js/components")
    .js("resources/js/components/destination.js", "public/js/components")
    .js("resources/js/components/order.js", "public/js/components")
    .js("resources/js/components/order-history.js", "public/js/components")
    .js("resources/js/components/edit-user.js", "public/js/components")
    .postCss("resources/css/app.css", "public/css", [
        //
    ]);
