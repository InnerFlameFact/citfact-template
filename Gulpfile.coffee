gulp = require 'gulp'
browserify = require 'gulp-browserify'
coffee = require 'gulp-coffee'
concat = require 'gulp-concat'
uglify = require 'gulp-uglify'
less = require 'gulp-less'
csso = require 'gulp-csso'
rename = require 'gulp-rename'

paths =
  coffee: 'lib/**/*.coffee'
  script: [
    'vendor/bootstrap/js/transition.js'
    'vendor/bootstrap/js/alert.js'
    'vendor/bootstrap/js/button.js'
    'vendor/bootstrap/js/carousel.js'
    'vendor/bootstrap/js/collapse.js'
    'vendor/bootstrap/js/dropdown.js'
    'vendor/bootstrap/js/modal.js'
    'vendor/bootstrap/js/tooltip.js'
    'vendor/bootstrap/js/popover.js'
    'vendor/bootstrap/js/scrollspy.js'
    'vendor/bootstrap/js/tab.js'
    'vendor/bootstrap/js/affix.js'
  ]
  less: [
    'stylesheets/application.less'
  ]

gulp.task 'coffee', ['script'], ->
  gulp.src paths.coffee
    .pipe coffee()
    .pipe gulp.dest 'build/js'

gulp.task 'script', ->
  gulp.src paths.script
    .pipe gulp.dest 'build/js'

gulp.task 'less', ->
  gulp.src paths.less
    .pipe less()
    .pipe gulp.dest 'build/css'

gulp.task 'dist', ['coffee', 'less'], ->
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
  gulp.watch [paths.less, 'stylesheets/**/*.less'], ['dist']

gulp.task 'default', ['coffee', 'script', 'less', 'dist']
