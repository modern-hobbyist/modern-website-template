const mix = require('laravel-mix');

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

mix.setPublicPath('public')
    .setResourceRoot('../') // Turns assets paths in css relative to css file
    .vue()
    .sass('resources/sass/frontend/app.scss', 'css/frontend.css')
    .sass('resources/sass/backend/app.scss', 'css/backend.css')
    .js('resources/js/backend/projects/projects.js', 'js/backend/projects/projects.js')
    .js('resources/js/backend/blogs/blogs.js', 'js/backend/blogs/blogs.js')
    .js('resources/js/backend/positions/positions.js', 'js/backend/positions/positions.js')
    .js('resources/js/backend/themes/themes.js', 'js/backend/themes/themes.js')
    .js('resources/js/backend/includes/media.js', 'js/backend/includes/media.js')
    .js('resources/js/backend/includes/forms.js', 'js/backend/includes/forms.js')
    .js('resources/js/backend/includes/reorder.js', 'js/backend/includes/reorder.js')
    .js('resources/js/backend/includes/switch.js', 'js/backend/includes/switch.js')
    .js('resources/js/backend/dashboard.js', 'js/backend/dashboard.js')
    .js('resources/js/backend/links/links.js', 'js/backend/links/links.js')
    .js('resources/js/backend/links/link.js', 'js/backend/links/link.js')
    .js('resources/js/backend/links/show.js', 'js/backend/links/show.js')
    .js('resources/js/frontend/blogs/blogs.js', 'js/frontend/blogs/blogs.js')
    .js('resources/js/frontend/app.js', 'js/frontend.js')
    .js('resources/js/backend/app.js', 'js/backend.js')
    .extract([
        'alpinejs',
        'jquery',
        'chart.js',
        'bootstrap',
        'popper.js',
        'axios',
        'sweetalert2',
        'codemirror',
        'bs4-summernote',
        'datatables.net-bs4',
        'datatables.net-rowreorder-bs4',
        'datatables.net-responsive-bs4',
        'lodash',
        'clipboard',
    ])
    .sourceMaps();

if (mix.inProduction()) {
    mix.version();
} else {
    // Uses inline source-maps on development
    mix.webpackConfig({
        devtool: 'inline-source-map'
    });
}
