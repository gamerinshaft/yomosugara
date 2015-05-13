<?php
/*
Template Name: home
*/
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <?php get_header() ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/home.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/animation.css">

    <meta charset="UTF-8">

    <title>よもすがら</title>

    <meta name="description" content="">
    <meta name="author" content="Hakim El Hattab">

     <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/lib/jquery.horizonScroll.js"></script>
     <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/lib/touchSwipe.js"></script>

  </head>

  <body>
    <div class="smog smog1"></div>
    <div class="smog smog2"></div>
    <ul class="site__menu">
      <li class="menu__list">
        Works
      </li>
      <li class="menu__list">
        History
      </li>
      <li class="menu__list">
        Gallery
      </li>
    </ul>
    <section data-role="section" class="section">
      <div class="table">
        <div class="table-cell">
          <h1 class="site__title">夜もすがら</h1>
          <h2 class="site__sub-title">Continue making it all night.</h2>
        </div>
      </div>
    </section>
    <section data-role="section" class="section">
      <div class="table">
        <div class="table-cell">
          <h1 class="site__title">春はあけぼの</h1>
          <h2 class="site__sub-title">Continue making it all night.</h2>
        </div>
      </div>
    </section>
    <section data-role="section" class="section">
      <div class="table">
        <div class="table-cell">
          <h1 class="site__title">ほげ</h1>
          <h2 class="site__sub-title">Continue making it all night.</h2>
        </div>
      </div>
    </section>
    <script type="text/javascript">
      $(function() {
        $.fn.horizon.defaults = {
                    scrollTimeout: null,
                    scrollEndDelay: 50,
                    scrollDuration: 500,
                    i: 0,
                    limit: 0,
                    docWidth: 0,
                    sections: null,
                    swipe: true,
                    fnCallback: function (i) {
                    }
                  };
        $('section').horizon();
        $('a[href^=#]').click(function() {
        var speed = 400;// ミリ秒
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().left; //targetの位置を取得
        $('html, body').animate({scrollLeft:position}, speed, 'swing');
        return false;
         });
      });
    </script>

  </body>

</html>