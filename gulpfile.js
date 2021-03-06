var elixir = require('laravel-elixir');

elixir.config.production = true;
elixir.config.sourcemaps = false;

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {
    mix
        .styles([
            '../../../vendor/bower_components/bootstrap/dist/css/bootstrap.min.css',
            'style.css',
            'pill.css'
        ], 'public/dist/css/style.css')
        .styles([
            '../../../vendor/bower_components/bootstrap/dist/css/bootstrap.min.css',
            'cover.css'
        ], 'public/dist/css/cover.css')
        .scripts([
            'vendor/bower_components/jquery/dist/jquery.js',
            'vendor/bower_components/bootstrap-sass/assets/javascripts/bootstrap.js',
            'vendor/bower_components/scrollup/dist/jquery.scrollUp.js'
        ], 'public/dist/js/all.js', './')
        .styles([
            '../../../vendor/bower_components/bootstrap/dist/css/bootstrap.min.css',
            '../../../vendor/bower_components/startbootstrap-sb-admin-2/dist/css/sb-admin-2.css',
            '../../../vendor/bower_components/startbootstrap-sb-admin-2/dist/css/timeline.css',
            '../../../vendor/bower_components/font-awesome/css/font-awesome.css',
            '../../../vendor/bower_components/metisMenu/dist/metisMenu.css'
        ],'public/admin/dist/css/all.css')
        .scripts([
            'vendor/bower_components/jquery/dist/jquery.js',
            'vendor/bower_components/bootstrap-sass/assets/javascripts/bootstrap.js',
            'vendor/bower_components/autosize/jquery.autosize.min.js',
            'vendor/bower_components/startbootstrap-sb-admin-2/dist/js/sb-admin-2.js',
            'vendor/bower_components/metisMenu/dist/metisMenu.js',
            'vendor/bower_components/raphael/raphael.min.js'
        ],'public/admin/dist/js/all.js','./')
        .version([
            'public/dist/css/style.css',
            'public/dist/css/cover.css',
            'public/dist/js/all.js'
        ])
        .copy('vendor/bower_components/bootstrap/fonts/', 'public/build/dist/fonts/')
        .copy('vendor/bower_components/font-awesome/fonts/','public/admin/dist/fonts/');
});
