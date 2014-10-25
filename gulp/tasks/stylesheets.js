var gulp = require('gulp');
var less = require('gulp-less');
var concat = require('gulp-concat');
var config = require('../config');

gulp.task('stylesheets', function() {
  gulp.src(config.stylesheets.vendor)
    .pipe(less())
    .pipe(concat('vendor.css'))
    .pipe(gulp.dest('build/css'));

  gulp.src(config.stylesheets.app)
    .pipe(less())
    .pipe(concat('app.css'))
    .pipe(gulp.dest('build/css'));
});