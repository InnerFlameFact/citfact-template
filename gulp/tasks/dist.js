var gulp = require('gulp');
var argv = require('yargs').argv;
var gulpif = require('gulp-if');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var csso = require('gulp-csso');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('dist', ['javascript', 'stylesheets'], function() {
  gulp.src(['build/css/vendor.css', 'build/css/app.css'])
    .pipe(gulpif(argv.production, sourcemaps.init()))
    .pipe(gulpif(argv.production, csso()))
    .pipe(concat('template_styles.css'))
    .pipe(gulpif(argv.production, sourcemaps.write()))
    .pipe(gulp.dest('./'));

  return gulp.src(['build/js/vendor.js', 'build/js/app.js'])
    .pipe(gulpif(argv.production, sourcemaps.init()))
    .pipe(gulpif(argv.production, uglify()))
    .pipe(concat('scripts.js'))
    .pipe(gulpif(argv.production, sourcemaps.write()))
    .pipe(gulp.dest('./'));
});