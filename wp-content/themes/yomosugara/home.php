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

     <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/lib/mousewheel.js"></script>


  </head>

  <body>
    <div id="contents">
      <div class="smog smog1"></div>
      <div class="smog smog2"></div>
      <div class="section">
        <div class="table">
          <div class="table-cell">
            <h1 class="site__title">夜もすがら</h1>
            <h2 class="site__sub-title">Continue making it all night.</h2>
          </div>
        </div>
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
      </div>
      <div class="section">
        <div class="table">
          <div class="table-cell">
            <h1 class="site__title">夜もすがら</h1>
            <h2 class="site__sub-title">Continue making it all night.</h2>
          </div>
        </div>
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
      </div>
      <div class="section">
        <div class="table">
          <div class="table-cell">
            <h1 class="site__title">夜もすがら</h1>
            <h2 class="site__sub-title">Continue making it all night.</h2>
          </div>
        </div>
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
      </div>
    </div>
    <script type="text/javascript">
      $(function() {
          $(window).on("resize load", function(){
            //コンテンツの横サイズ
            console.log("hoge");
            var cont = $('#contents');
            var child = $('.section')
            var childW = child.outerWidth(true);
            child.width($(window).outerWidth(true));
            var contW = childW * $('.section',cont ).length;
            cont.css('width', contW);
            $(".smog").css('width', contW);
          });
          //スクロールスピード
            var speed = 2;
            //マウスホイールで横移動
            $('html').mousewheel(function(event, mov) {
                //ie firefox
                $(this).scrollLeft($(this).scrollLeft() - mov * speed);
                //webkit
                $('body').scrollLeft($('body').scrollLeft() - mov * speed);
                return false;   //縦スクロール不可
            });
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