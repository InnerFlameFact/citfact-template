var gulp  = require('gulp');
var config = require('../config');

gulp.task('watch', [], function() {
  gulp.watch(config.stylesheets, ['dist']);
  gulp.watch(config.javascript, ['dist']);
});