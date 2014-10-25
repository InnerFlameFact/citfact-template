var gulp = require('gulp');
var concat = require('gulp-concat');
var config = require('../config');

gulp.task('javascript', function() {
  gulp.src(config.javascript.vendor)
    .pipe(concat('vendor.js'))
    .pipe(gulp.dest('build/js'));

  gulp.src(config.javascript.app)
    .pipe(concat('app.js'))
    .pipe(gulp.dest('build/js'));
});
