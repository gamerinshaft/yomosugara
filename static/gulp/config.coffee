path    = require 'path'
current = process.cwd()
source  = current + '/src'

module.exports =
  # 入力元の設定
  styl: source + '/styl/**/*.styl'
  coffee: source + '/coffee/**/*.coffee'
  jade : source + '/**/*.jade'
  lib: ['node_modules/underscore/underscore-min.js',
        'node_modules/underscore/underscore-min.map',
        'node_modules/jquery/dist/jquery.min.js',
        'node_modules/jquery/dist/jquery.min.map']

  # 出力先の設定
  js: current + '/js'
  css: current + '/css'
  html: current
