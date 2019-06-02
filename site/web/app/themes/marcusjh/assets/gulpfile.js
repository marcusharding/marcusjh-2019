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

// ==========================================================================
// # PATHS
// ==========================================================================

    var paths = {
        styles: {
            // By using styles/**/*.sass we're telling gulp to check all folders for any sass file
            src: "./src/scss/*.scss",
            // Compiled files will end up in whichever folder it's found in (partials are not compiled)
            dest: "./dist/css"
        },
        js: {
            src: "./src/js/*.js",
            dest: "./dist/js"
        }
    };

    
// ==========================================================================
// # STYLE
// ==========================================================================

    function style() {
        return gulp
            .src(paths.styles.src)
            // Initialize sourcemaps before compilation starts
            .pipe(sourcemaps.init())
            .pipe(sass())
            .on("error", sass.logError)
            // Use postcss with autoprefixer and compress the compiled file using cssnano
            .pipe(postcss([autoprefixer(), cssnano()]))
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

// Add browsersync initialization at the start of the watch task
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
 
/*
 * Define default task that can be called by just running `gulp` from cli
 */
gulp.task('default', build);


console.log( 'hello' )