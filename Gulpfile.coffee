gulp = require 'gulp'
browserify = require 'browserify'
coffee = require 'gulp-coffee'
concat = require 'gulp-concat'
uglify = require 'gulp-uglify'
stylus = require 'gulp-stylus'
csso = require 'gulp-csso'
nib = require 'nib'

paths =
  coffee: 'src/**/*.coffee'
  stylus: 'static/**/*.styl'

gulp.task 'coffee', ->
  gulp.src paths.coffee
    .pipe coffee()
    .pipe gulp.dest 'build/js'

gulp.task 'stylus', ->
  gulp.src paths.stylus
    .pipe stylus
      use: [nib()]
    .pipe gulp.dest 'build/css'

gulp.task 'dist', ['coffee', 'stylus'], ->
  gulp.src 'build/js/**/*.js'
    .pipe uglify()
    .pipe concat 'scripts.js'
    .pipe gulp.dest './'

  gulp.src 'build/css/**/*.css'
    .pipe csso()
    .pipe concat 'template_styles.css'
    .pipe gulp.dest './'

gulp.task 'default', ['coffee', 'stylus', 'dist']