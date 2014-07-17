gulp = require 'gulp'
nib = require 'nib'
browserify = require 'gulp-browserify'
coffee = require 'gulp-coffee'
concat = require 'gulp-concat'
uglify = require 'gulp-uglify'
stylus = require 'gulp-stylus'
csso = require 'gulp-csso'
rename = require 'gulp-rename'

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
  gulp.src 'build/js/application.js'
    .pipe browserify
      insertGlobals : true
    .pipe uglify()
    .pipe rename 'scripts.js'
    .pipe gulp.dest './'

  gulp.src 'build/css/**/*.css'
    .pipe csso()
    .pipe concat 'template_styles.css'
    .pipe gulp.dest './'

gulp.task 'watch', ->
  gulp.watch paths.coffee, ['dist']
  gulp.watch paths.stylus, ['dist']

gulp.task 'default', ['coffee', 'stylus', 'dist']