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
						<p>Правова допомога</p>
						<textarea name="text" id="mail-textarea"> </textarea>
						<p><input type="submit" id="mail-submit" value="ЗАПИТАЙ"></p>
					</div>
					
				</div>
				<div class="news-center">
					<div class="news-center_news">
						<?php if(have_posts()): 
						while(have_posts()): the_post(); ?>
						<div class="news-img">
							<a href="<?php the_permalink() ?>">
								<?php the_post_thumbnail('full') ?>
							</a>
						</div>
						<div class="news-content">
							<p>
								<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
							</p>
							<p class="time"><?php the_time('j m Y'); ?></p>
						</div>
						
					<?php endwhile; ?>
						<?php else: ?>
							Записей нет!
						<?php endif; ?>
					</div>
				
					<div class="news-center_more">
						<?php the_posts_pagination() ?>
					</div>
				</div>
				<div class="sidebar-right">
					<?php dynamic_sidebar('sidebar-right') ?>
				</div>
			</div>
			<div class="article-wrap">
				<div class="arh-head"><h3>Архів успіхів</h3></div>
				<div class="article-arh_wrap">

<?php 
$arg_cat = array(
'orderby'      => 'name',
'order'        => 'ASC',
'hide_empty'   => 1,
'exclude'      => '',
'include'      => '1',
'taxonomy'     => 'category',
);
$categories = get_categories( $arg_cat );
?>
<article class="<?php mts_article_class(); ?>">
<div id="content_box" >
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class('g post'); ?>>
<div class="single_page">
<div class="post-content box mark-links entry-content">
<?php the_content(); ?>
</div><!--.post-content box mark-links-->
</div>
</div>
<?php endwhile; ?>
<?php 
if( $categories ){
foreach( $categories as $cat ){
$arg_posts =  array(
'orderby'      => 'name',
'order'        => 'ASC',
'posts_per_page' => 3,
'post_type' => 'post',
'post_status' => 'publish',
'cat' => $cat->cat_ID,
);
$query = new WP_Query($arg_posts);
?>
<?php if ($query->have_posts() ) ?>
<h2><?php echo $cat->name; ?> </h2>
<?php while ( $query->have_posts() ) : $query->the_post(); ?>
<div class="main-page-post">
<a href="<?php the_permalink(); ?>">
<?php the_post_thumbnail( 'widgetfull' );?>
</a>
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</div>
<?php endwhile; wp_reset_postdata()?>
<?php		
}
}
?>
</div>
</article>

				
				
				</div>
					<div class="news-center_more">
						<?php the_posts_pagination() ?>
					</div>
			</div>




<?php get_footer(); ?>