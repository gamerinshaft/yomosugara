$.fn.extend({
  scroll: function() {
    var duration, options, params, position;
    position = $(this).offset().top;
    duration = Math.sqrt(Math.abs(position - $(window).scrollTop())) * 10;
    params = {
      scrollTop: position
    };
    options = {
      duration: duration,
      easing: 'swing'
    };
    return $('body, html').animate(params, options);
  }
});

$(function() {
  var wall;
  $('[data-js=scroll]').on('click', function() {
    return $($(this).attr('data-scroll')).scroll();
  });
  wall = new freewall('[data-js=tile]');
  wall.reset({
    selector: '.cell',
    cellW: 200,
    cellH: 'auto'
  });
  return _.defer(function() {
    return wall.fitWidth();
  });
});
