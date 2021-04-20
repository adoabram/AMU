<?php get_header(); ?> 

								 <!--MAIN-->
		<main>
			<div class="main-wrap">
				<div class="sidebar-left">
					<nav class="nav_left">
					<?php 
				    wp_nav_menu(array(
						'theme_location' => 'left',
								'container' => null,
								'items_wrap' => '<ul>%3$s</ul>'
						));
				?>
				    </nav>
					<div class="hr"><hr></div>
					<div class="mail">
						<?php dynamic_sidebar('sidebar-left') ?>
					</div>
					
				</div>
				<div class="news-center">
					<div class="news-center_news">
						<?php the_post(); ?>
						
			<?php the_post_thumbnail('large') ?>
			<div class="news-content">
			<h2><?php the_title() ?></h2>
			<div><?php the_content() ?></div>
			</div>
						
					</div>
				
					<div class="news-center_more">
						<?php the_posts_pagination() ?>
					</div>
				</div>
				
			</div>
			<div class="article-wrap">
				<div class="arh-head"><h3>Архів успіхів</h3></div>
				<div class="article-arh_wrap">
					<div class="article-arh_news">
						<div class="arh_img"><a href="#"><img src="images/imgarh1.png"></a></div>
						<div class="arh_content"><p><a href="#">Черкащина здатна вийти на лідируючі позиції у реалізації завдань</a></p></div>
						<p class="time">26.07.2018</p>
					</div>
					<div class="article-arh_news">
						<div class="arh_img"><a href="#"><img src="images/imgarh2.png"></a></div>
						<div class="arh_content"><p><a href="#">Черкащина здатна вийти на лідируючі позиції у реалізації завдань</a></p></div>
						<p class="time">26.07.2018</p>
					</div>
					<div class="article-arh_news">
						<div class="arh_img"><a href="#"><img src="images/imgarh3.png"></a></div>
						<div class="arh_content"><p><a href="#">Черкащина здатна вийти на лідируючі позиції у реалізації завдань</a></p></div>
						<p class="time">26.07.2018</p>
					</div>
				</div>
				<div class="article-icon">
					<div class="article-icon_icon"><a href="#">&nbsp</a></div>
					<div class="article-icon_icon"><a href="#">&nbsp</a></div>
					<div class="article-icon_icon"><a href="#">&nbsp</a></div>
					<div class="article-icon_icon"><a href="#">&nbsp</a></div>
					<div class="article-icon_icon"><a href="#">&nbsp</a></div>
				</div>
				
				<div class="presstour"><h3>Прес-тури</h3></div>
				<div class="article-arh_wrap">
					<div class="article-arh_news">
						<div class="arh_img"><a href="#"><img src="images/press1.png"></a></div>
						<div class="arh_content"><p><a href="#">Черкащина здатна вийти на лідируючі позиції у реалізації завдань</a></p></div>
						<p class="time">26.07.2018</p>
					</div>
					<div class="article-arh_news">
						<div class="arh_img"><a href="#"><img src="images/press2.png"></a></div>
						<div class="arh_content"><p><a href="#">Черкащина здатна вийти на лідируючі позиції у реалізації завдань</a></p></div>
						<p class="time">26.07.2018</p>
					</div>
					<div class="article-arh_news">
						<div class="arh_img"><a href="#"><img src="images/press3.png"></a></div>
						<div class="arh_content"><p><a href="#">Черкащина здатна вийти на лідируючі позиції у реалізації завдань</a></p></div>
						
						<div class="time"><p>26.07.2018</p></div>
					</div>
				</div>
				<div class="article-icon">
					<div class="article-icon_icon"><a href="#">&nbsp</a></div>
					<div class="article-icon_icon"><a href="#">&nbsp</a></div>
					<div class="article-icon_icon"><a href="#">&nbsp</a></div>
					<div class="article-icon_icon"><a href="#">&nbsp</a></div>
					<div class="article-icon_icon"><a href="#">&nbsp</a></div>
				</div>
			</div>




<?php get_footer(); ?>