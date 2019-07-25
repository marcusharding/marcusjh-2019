// ==========================================================================
// # DEPENDENCIES
// ==========================================================================

var gulp = require("gulp"),
    sass = require("gulp-sass"),
    postcss = require("gulp-postcss"),
    autoprefixer = require("autoprefixer"),
    cssnano = require("cssnano"),
    sourcemaps = require("gulp-sourcemaps"),
    browserSync = require("browser-sync").create();
    sassGlob = require('gulp-sass-glob');
    print = require('gulp-print');
    gutil = require("gulp-util");
    del = require('del');
    vinylPaths = require('vinyl-paths');
    webpack_stream = require('webpack-stream');
    webpack_config = require('./webpack.config.js');


// ==========================================================================
// # PATHS
// ==========================================================================

    var paths = {
        styles: {
            src: [  './site/web/app/themes/marcusjh/assets/src/scss/**/**.scss', 
                    './site/web/app/themes/marcusjh/assets/src/templates/**/**.scss'
                ],
            dest: "./site/web/app/themes/marcusjh/assets/dist/css"
        },
        webpack: {
            src: "./site/web/app/themes/marcusjh/assets/src/js/",
            build: "./site/web/app/themes/marcusjh/assets/dist/js"
        },
    };

    
// ==========================================================================
// # STYLE
// ==========================================================================

    function style() {
        return gulp
            .src(paths.styles.src)
            .pipe(sourcemaps.init())
            .pipe(sassGlob())
            .pipe(sass())
            .on("error", sass.logError)
            // Use postcss with autoprefixer and compress the compiled file using cssnano
            .pipe(postcss([
                cssnano(),
                require('tailwindcss'),
                autoprefixer(),
            ]))
            // Now add/write the sourcemaps
            .pipe(sourcemaps.write())
            .pipe(gulp.dest(paths.styles.dest))
            // Add browsersync stream pipe after compilation
            .pipe(browserSync.stream());
    }

    // A simple task to reload the page
    function reload() {
        browserSync.reload();
    }


// ==========================================================================
// # WATCH
// ==========================================================================

function watch() {
    browserSync.init({
        proxy: "marcusjh.test"
    });
    gulp.watch(paths.styles.src, style);
    gulp.watch(paths.styles.src, reload);
}

// ==========================================================================
// # WEBPACK 
// ==========================================================================

function clean() {
    return gulp
    .src(paths.webpack.build)
    // .pipe(gprint(paths.webpack.build))
    .pipe(vinylPaths(del));
}


function webpack() {
    return webpack_stream(webpack_config)
    .pipe(gulp.dest(paths.webpack.build))
}

gulp.task('clean', () => {
    return gulp.src(`${paths.build}*`)
        .pipe(gprint())
        .pipe(vinylPaths(del));
});


// ==========================================================================
// # EXPORTS AND TASK RUNNERS
// ==========================================================================

// Don't forget to expose the task!
exports.watch = watch

// Expose the task by exporting it
// This allows you to run it from the commandline using
// $ gulp style
exports.style = style;

/*
 * Specify if tasks run in series or parallel using `gulp.series` and `gulp.parallel`
 */
var build = gulp.parallel(style, watch, webpack, clean);
 
/*
 * You can still use `gulp.task` to expose tasks
 */
gulp.task('build', build);

gulp.task('default', build);
