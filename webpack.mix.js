let mix = require('laravel-mix');

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

 if (mix.inProduction()) {

    mix.js('resources/js/app.js', 'public/js')
        .sass('resources/assets/sass/my-styles.scss', 'public/css')
        .version();
 
    mix.combine(['node_modules/jquery/dist/jquery.min.js', 
              'node_modules/magnific-popup/dist/jquery.magnific-popup.min.js',
              'node_modules/slick-carousel/slick/slick.min.js'], 'public/js/vendor.js')
              .version();
 
}else {
 
    mix.js('resources/js/app.js', 'public/js')
       .sass('resources/assets/sass/my-styles.scss', 'public/css');

    mix.combine(['node_modules/jquery/dist/jquery.min.js', 
              'node_modules/magnific-popup/dist/jquery.magnific-popup.min.js',
              'node_modules/slick-carousel/slick/slick.min.js'], 'public/js/vendor.js');
 
}
