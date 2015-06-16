<?php
$post = $wp_query->post;
if ( in_category('arduino') ) {
include(TEMPLATEPATH.'/single/arduino_single.php');
} elseif ( in_category('blog') ) {
include(TEMPLATEPATH.'/single/blog_single.php');
} elseif ( in_category('challenge') ) {
include(TEMPLATEPATH.'/single/challenge_single.php');
} elseif ( in_category('illust') ) {
include(TEMPLATEPATH.'/single/illust_single.php');
} elseif ( in_category('music') ) {
include(TEMPLATEPATH.'/single/music_single.php');
} elseif ( in_category('novel') ) {
include(TEMPLATEPATH.'/single/novel_single.php');
} elseif ( in_category('photo') ) {
include(TEMPLATEPATH.'/single/photo_single.php');
} elseif ( in_category('programming') ) {
include(TEMPLATEPATH.'/single/programming_single.php');
} elseif ( in_category('cooking') ) {
include(TEMPLATEPATH.'/single/cooking_single.php');
} else {
include(TEMPLATEPATH.'/single/uncategorized_single.php');
}
?>