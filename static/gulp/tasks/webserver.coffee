gulp      = require 'gulp'
webserver = require 'gulp-webserver'
current   = process.cwd()

gulp.task 'webserver', ->
  gulp
    .src current
    .pipe webserver
        livereload:
          enable: true
          filter: (fileName) ->
            if fileName.match(/.styl$/) or fileName.match(/.coffee$/) or fileName.match(/.jade$/)
              false
            else
              true
