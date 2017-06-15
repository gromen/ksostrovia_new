/**
* Configuration.
*
* Project Configuration for gulp tasks.
*
* Edit the variables as per your project requirements.
*/

/**
 * Load Plugins.
 *
 * Load gulp plugins and assing them semantic names.
 */
var gulp         = require('gulp'), // Gulp of-course
// Format CSS coding style
    csscomb = require('gulp-csscomb'),

    browserSync  = require('browser-sync'),
    reload       = browserSync.reload,
// CSS related plugins.
    sass         = require('gulp-sass'), // Gulp pluign for Sass compilation
    autoprefixer = require('gulp-autoprefixer'), // Autoprefixing magic
    minifycss    = require('gulp-uglifycss'), // Minifies CSS files

// JS related plugins.
    concat       = require('gulp-concat'), // Concatenates JS files
    uglify       = require('gulp-uglify'), // Minifies JS files

// Utility related plugins.
    rename       = require('gulp-rename'), // Renames files E.g. style.css -> style.min.css
    sourcemaps   = require('gulp-sourcemaps'), // Maps code in a compressed file (E.g. style.css) back to it’s original position in a source file (E.g. structure.scss, which was later combined with other css files to generate style.css)
    notify       = require('gulp-notify'), // Sends message notification to you
    plumber      = require('gulp-plumber'),
    clean        = require('gulp-clean')
// Prevent pipe breaking caused by errors from gulp plugins
/**
 * Task: styles
 *
 * Compiles Sass, Autoprefixes it and Minifies CSS.
 *
 * This task does the following:
 *      1. Gets the source scss file
 *      2. Compiles Sass to CSS
 *      3. Writes Sourcemaps for it
 *      4. Autoprefixes it and generates style.css
 *      5. Renames the CSS file with suffix .min.css
 *      6. Minifies the CSS file and generates style.min.css
 */

gulp.task('styles', function () {
  gulp.src('./src/css/style.scss')
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sass({
      errLogToConsole: true,
      outputStyle: 'compact',
      // outputStyle: 'compressed',
      // outputStyle: 'nested',
      // outputStyle: 'expanded',
      precision: 10
    }))
    .pipe(sourcemaps.write({ includeContent: false }))
    .pipe(sourcemaps.init({ loadMaps: true }))
    .pipe(autoprefixer(
      'last 2 version',
      '> 1%',
      'safari 5',
      'ie 11',
      'opera 12.1',
      'ios 6',
      'android 4'))

    .pipe(sourcemaps.write('./'))
    .pipe(csscomb())
    .pipe(gulp.dest('./'))
    .pipe(reload({stream: true}))
    .pipe(gulp.dest('./'))
})
/**
 * Task: vendorJS
 *
 * Concatenate and uglify vendor JS scripts.
 *
 * This task does the following:
 *      1. Gets the source folder for JS vendor files
 *      2. Concatenates all the files and generates vendors.js
 *      3. Renames the JS file with suffix .min.js
 *      4. Uglifes/Minifies the JS file and generates vendors.min.js
 */
gulp.task('vendorsJs', function () {
  gulp.src('./src/js/vendors/*.js')
    .pipe(concat('vendors.js'))
    .pipe(rename({
      basename: 'vendors',
      suffix: '.min'
    }))
    .pipe(uglify())

    .pipe(gulp.dest('./src/js/vendors/'))
})
/**
 * Task: customJS
 *
 * Concatenate and uglify custom JS scripts.
 *
 * This task does the following:
 *      1. Gets the source folder for JS custom files
 *      2. Concatenates all the files and generates custom.js
 *      3. Renames the JS file with suffix .min.js
 *      4. Uglifes/Minifies the JS file and generates custom.min.js
 */
gulp.task('js', function () {
  gulp.src([
    'src/js/*.js'
  ])
    .pipe(concat('custom.js'))
    .pipe(rename({
      basename: 'custom',
      suffix: '.min'
    }))
    .pipe(uglify())
    .pipe(gulp.dest('./src/js/custom/'))
})
/**
 *
 * Task: cleanJs
 *
 */
gulp.task('cleanJs', function () {
  return gulp.src('src/js/custom/custom.js', {
    force: true
  })
    .pipe(clean())
})

// Static Server + watching scss/html files
gulp.task('serve', ['styles'], function () {
  // initialize browsersync
  browserSync.init({
  // browsersync with a php server
    proxy: 'localhost/ksostrovia',
    notify: false
  })
})
/**
  * Watch Tasks.
  *
  * Watches for file changes and runs specific tasks.
  */

gulp.task('default', [
  'cleanJs',
  // 'vendorsJs',
  'js',
  'serve'
], function () {
  gulp.watch([
    './src/css/**/*.scss',
    './*.php',
    './**/*.php'
  ], ['styles'])
  gulp.watch().on('change', reload)
  gulp.watch('./src/js/vendors/*.js', ['vendorsJs'])
  gulp.watch('./src/js/*.js', ['js'])
})
