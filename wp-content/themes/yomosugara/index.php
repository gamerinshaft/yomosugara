<!DOCTYPE html>
<html lang="ja">
	<head>
		<?php get_header() ?>
	</head>
	<body>
		<div main="home">
			<div table>
				<div table-cell>
					<div categories>
						<div line="title" class="row">
							<div class="col-xs-12">
								<div logo="blogrammer"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png"></div>
							</div>
						</div>
						<div line="share" class="row">
							<div class="col-xs-6"><a share-Wrap href="http://www.facebook.com/share.php?u=https://blogrammer.com" onclick="window.open(this.href, 'FBwindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;">
									<div share="facebook">Facebook</div></a></div>
							<div class="col-xs-6"><a share-Wrap href="http://twitter.com/share?count=horizontal&amp;original_referer=http://blogrammer.com/&amp;text=闘うブログラマーのチラシ裏 &amp;url=http://blogrammer.com" onclick="window.open(this.href, 'tweetwindow', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;">
									<div share="twitter">Twitter</div></a></div>
						</div>
						<div line="category" class="row">
							<div class="col-xs-4">
								<a href="<?php bloginfo('url'); ?>/music">
									<div category="music"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/music.png">
										<div category-Name>Music</div>
									</div>
								</a>
							</div>
							<div class="col-xs-4">
								<a href="<?php bloginfo('url'); ?>/programming">
									<div category="programming"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/programming.png">
										<div category-Name>Programming</div>
									</div>
								</a>
							</div>
							<div class="col-xs-4">
								<a href="<?php bloginfo('url'); ?>/profile">
									<div category="profile"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/profile.png">
										<div category-Name>Profile</div>
									</div>
								</a>
							</div>
						</div>
						<div line="category" class="row">
							<div class="col-xs-4">
								<a href="<?php bloginfo('url'); ?>/arduino">
									<div category="arduino"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/arduino.png">
										<div category-Name>Arudino</div>
									</div>
								</a>
							</div>
							<div class="col-xs-4">
								<a href="<?php bloginfo('url'); ?>/blog">
									<div category="blog"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/blog.png">
										<div category-Name>Blog</div>
									</div>
								</a>
							</div>
							<div class="col-xs-4">
								<a href="<?php bloginfo('url'); ?>/illust">
									<div category="illust"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/illust.png">
										<div category-Name>Illust</div>
									</div>
								</a>
							</div>
						</div>
						<div line="category" class="row">
							<div class="col-xs-4">
								<a href="<?php bloginfo('url'); ?>/photo">
									<div category="photo"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/photo.png">
										<div category-Name>Photo</div>
									</div>
								</a>
							</div>
							<div class="col-xs-4">
								<a href="<?php bloginfo('url'); ?>/novel">
									<div category="novel"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/novel.png">
										<div category-Name>Novel</div>
									</div>
								</a>
							</div>
							<div class="col-xs-4">
								<a href="<?php bloginfo('url'); ?>/challenge">
									<div category="challenge"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/challenge.png">
										<div category-Name>Challenge</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>