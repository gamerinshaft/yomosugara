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
      <li data-word="Works" class="menu__list">
        Works
      </li>
      <li data-word="History" class="menu__list">
        History
      </li>
      <li data-word="Gallery" class="menu__list">
        Gallery
      </li>
    </ul>
    <section data-role="section" class="section">
      <div class="table">
        <div class="table-cell">
          <h1 class="site__title">よもすがら</h1>
          <h2 class="site__sub-title">Continue making it all night</h2>
        </div>
      </div>
    </section>
    <section data-role="section" class="section ss-icon" id="sns">
      <div class="table">
        <dov class="table-cell">
          <div class="container">
            <div class="row">
              <div class="col-sm-4">
                <div class="sns__title">
                  <h1>SNS Acounts</h1>
                </div>
              </div>
              <div class="col-sm-8 icons">
                <a href="#" class="icon"><article><span>facebook</span></article></a>
                <a href="#" class="icon"><article><span>twitter</span></article></a>
                <a href="#" class="icon"><article><span>tumblr</span></article></a>
                <a href="#" class="icon"><article><span>pinterest</span></article></a>
                <a href="#" class="icon"><article><span>behance</span></article></a>
                <a href="#" class="icon"><article><span>github</span></article></a>
                <a href="#" class="icon"><article><span>linkedin</span></article></a>
                <a href="#" class="icon"><article><span>dribbble</span></article></a>
                <a href="#" class="icon"><article><span>instagram</span></article></a>
                <a href="#" class="icon"><article><span>flickr</span></article></a>
                <a href="#" class="icon"><article><span>blogger</span></article></a>
                <a href="#" class="icon"><article><span>vimeo</span></article></a>
              </div>
            </div>
          </div>
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
