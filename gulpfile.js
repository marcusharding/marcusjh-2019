// ==========================================================================
// # DEPENDENCIES
// ==========================================================================

let gulp = require('gulp')
  sass = require('gulp-sass')
  postcss = require('gulp-postcss')
  autoprefixer = require('autoprefixer')
  cssnano = require('cssnano')
  sourcemaps = require('gulp-sourcemaps')
  browserSync = require('browser-sync').create()
  sassGlob = require('gulp-sass-glob')
  print = require('gulp-print')
  gutil = require('gulp-util')
  del = require('del')
  vinylPaths = require('vinyl-paths')
  webpack_stream = require('webpack-stream')
  webpack_config = require('./webpack.config.js')
  cleanCSS = require('gulp-clean-css')
  purgecss = require('gulp-purgecss')

// ==========================================================================
// # PATHS
// ==========================================================================

let paths = {
  styles: {
    src: [
      './site/web/app/themes/marcusjh/assets/src/scss/**/**.scss',
      './site/web/app/themes/marcusjh/assets/src/templates/**/**.scss'
    ],
    dest: './site/web/app/themes/marcusjh/assets/dist/css/'
  },
  webpack: {
    src: './site/web/app/themes/marcusjh/assets/src/js/**/**.js',
    build: './site/web/app/themes/marcusjh/assets/dist/js/'
  }
}


// ==========================================================================
// # WEBPACK
// ==========================================================================

function clean() {
  return (
    gulp
      .src(paths.webpack.build)
      // .pipe(gprint(paths.webpack.build))
      .pipe(vinylPaths(del))
  )
}

function webpack() {
  return webpack_stream(webpack_config).pipe(gulp.dest(paths.webpack.build))
}

gulp.task('clean', () => {
  return gulp
    .src(`${paths.build}*`)
    .pipe(gprint())
    .pipe(vinylPaths(del))
})

// ==========================================================================
// # STYLE
// ==========================================================================

function style() {
    return (
      gulp
        .src(paths.styles.src)
        // Now init the sourcemaps
        .pipe(sourcemaps.init())
        .pipe(sassGlob())
        .pipe(sass())
        .on('error', sass.logError)
        // Use postcss with autoprefixer and compress the compiled file using cssnano
        .pipe(postcss([cssnano(), require('tailwindcss'), autoprefixer()]))
        // Include cleanCSS 
        .pipe(cleanCSS({compatibility: 'ie8'}))
        // Write the sourcemaps
        .pipe(sourcemaps.write())
        // purge css 
        // .pipe(purgecss({
        //   content: paths.styles.src
        // })
        //   )
        .pipe(gulp.dest(paths.styles.dest))
        // Add browsersync stream pipe after compilation
        .pipe(browserSync.stream())
    )
  }
  
  // A simple task to reload the page
  function reload() {
      browserSync.reload()
      return (
          clean(),
          style(),
          webpack()
      )
  }

  // ==========================================================================
// # WATCH
// ==========================================================================

function watch() {
    browserSync.init({
      proxy: 'marcusjh.test'
    })
    gulp.watch(paths.styles.src, reload)
    gulp.watch(paths.webpack.src, reload)
  }

// ==========================================================================
// # EXPORTS AND TASK RUNNERS
// ==========================================================================

// Don't forget to expose the task!
exports.watch = watch

// Expose the task by exporting it
// This allows you to run it from the commandline using
// $ gulp style
exports.style = style

/*
 * Specify if tasks run in series or parallel using `gulp.series` and `gulp.parallel`
 */
let build = gulp.parallel(style, clean, webpack, watch)

/*
 * You can still use `gulp.task` to expose tasks
 */
gulp.task('build', build)

gulp.task('default', build)
