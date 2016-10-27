var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

var bowerDir = './resources/assets/vendor/';


elixir(function (mix) {

    /* create css for admin and frontend */
    mix.sass('app.scss', 'public/css');
    mix.sass('admin.scss', 'public/css');

    /* copy js files to public folder */
    mix.copy('resources/assets/vendor/font-awesome/fonts', 'fonts')
        .copy('resources/assets/js/html5.js', 'public/js')
        .copy('resources/assets/js/respond.min.js', 'public/js');

    /* combine all vendor scripts*/
    /* mix.scripts([
     'jquery/dist/jquery.min.js',
     'bootstrap/dist/js/bootstrap.js',
     'metisMenu/dist/metisMenu.min.js',
     'angular/angular.min.js',
     'angular-bootstrap/ui-bootstrap.min.js',
     'angular-bootstrap/ui-bootstrap-tpls.min.js',
     'jquery-colorbox/jquery.colorbox-min.js',
     'jquery-ui/ui/minified/datepicker.min.js',
     'select2/dist/js/select2.min.js',
     'jquery-confirm/jquery.confirm.min.js',
     'blueimp-file-upload/js/vendor/jquery.ui.widget.js',
     'blueimp-file-upload/js/jquery.iframe-transport.js',
     'blueimp-file-upload/js/jquery.fileupload.js',
     ], 'public/js/vendor.js', bowerDir);*/

    /* combine all vendor css*/
    /*mix.styles([
     'bootstrap/dist/css/bootstrap.min.css',
     'normalize.css/normalize.css',
     'font-awesome/css/font-awesome.css',
     'metisMenu/dist/metisMenu.min.css',
     'jquery-ui/themes/smoothness/jquery-ui.min.css',
     'jquery-colorbox/example1/colorbox.css',
     'select2/dist/css/select2.min.css',
     'blueimp-file-upload/css/jquery.fileupload.css',
     ], 'public/css/vendor.css', bowerDir);*/

    mix.copy('resources/assets/js/app.js', 'public/js');
    mix.copy('resources/assets/js/marquee.js', 'public/js');
    mix.copy('resources/assets/js/admin.js', 'public/js');

    mix.styles([
        'vendor.css',
        'app.css',
    ], null, 'public/css');

    mix.styles([
        'vendor.css',
        'admin.css',
    ], 'public/css/admin-all.css', 'public/css');

    mix.scripts([
        'vendor.js',
        'respond.min.js',
        'html5.js',
        'app.js',
        'marquee.js'
    ], null, 'public/js');

    mix.scripts([
        'vendor.js',
        'respond.min.js',
        'html5.js',
        'admin.js',
    ], 'public/js/admin-all.js', 'public/js');
});
