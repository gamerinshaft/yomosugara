$.fn.extend
  scroll: ->
    position = $(@).offset().top
    duration = Math.sqrt(Math.abs(position - $(window).scrollTop())) * 10
    params =
      scrollTop: position
    options =
      duration: duration
      easing: 'swing'

    $('body, html').animate params, options

$ ->
  $('[data-js=scroll]').on 'click', -> $($(@).attr('data-scroll')).scroll()
  wall = new freewall('[data-js=tile]')
  wall.reset
    selector: '.cell'
    cellW: 200
    cellH: 'auto'
  _.defer -> wall.fitWidth()
