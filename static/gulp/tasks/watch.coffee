gulp   = require 'gulp'
config = require '../config'
watch  = require 'gulp-watch'

gulp.task 'watch', ->
  watch config.jade, -> gulp.start ['jade']
  watch config.coffee, -> gulp.start ['coffee']
  watch config.styl, -> gulp.start ['stylus']
