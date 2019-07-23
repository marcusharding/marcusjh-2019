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
        base: {
            src: "./site/web/app/themes/marcusjh/assets/src/templates/**/**.php",
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
var build = gulp.parallel(style, watch);
 
/*
 * You can still use `gulp.task` to expose tasks
 */
gulp.task('build', build);

gulp.task('default', build);
