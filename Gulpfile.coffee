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
  script: [
    'vendor/bootstrap-stylus/js/transition.js'
    'vendor/bootstrap-stylus/js/alert.js'
    'vendor/bootstrap-stylus/js/button.js'
    'vendor/bootstrap-stylus/js/carousel.js'
    'vendor/bootstrap-stylus/js/collapse.js'
    'vendor/bootstrap-stylus/js/dropdown.js'
    'vendor/bootstrap-stylus/js/modal.js'
    'vendor/bootstrap-stylus/js/tooltip.js'
    'vendor/bootstrap-stylus/js/popover.js'
    'vendor/bootstrap-stylus/js/scrollspy.js'
    'vendor/bootstrap-stylus/js/tab.js'
    'vendor/bootstrap-stylus/js/affix.js'
  ]
  stylus: [
    'static/bootstrap.styl'
    'static/theme.styl'
    'static/**/*.styl'
  ]

gulp.task 'coffee', ['script'], ->
  gulp.src paths.coffee
    .pipe coffee()
    .pipe gulp.dest 'build/js'

gulp.task 'script', ->
  gulp.src paths.script
    .pipe gulp.dest 'build/js'

gulp.task 'stylus', ->
  gulp.src paths.stylus
    .pipe stylus
      use: [nib()]
    .pipe gulp.dest 'build/css'

gulp.task 'dist', ['coffee', 'stylus'], ->
  gulp.src './build/js/application.js'
    .pipe browserify
      debug : true
      insertGlobals: true
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

gulp.task 'default', ['coffee', 'script', 'stylus', 'dist']