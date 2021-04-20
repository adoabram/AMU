<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset')?>" />
		<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
	</head>
	<body>
											<!--HEADER-->
		<header>
			<div class="header-wrap">
				<div class="header-content">
				<div class="logo"><a href="<?php echo home_url() ?>"><img src="<?php bloginfo('template_directory') ?>/assets/images/logo.png"></a></div>
					<div class="slogan">
						<h1>Асоціація міст України</h1>
						<h2>Дніпропетровська область</h2>
					</div>
					<div class="header-sidebar">
						<div class="header-sidebar_social ">
							<div class="header-sidebar_social_facebook"><a href="#"><span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </span></a></div>
							<div class="header-sidebar_social_instagram"><a href="#"><span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </span></a></div>
							<div class="header-sidebar_social_youtube"><a href="#"><span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </span></a></div>
						</div>
						<div class="clr"></div>
						<div class="header-sidebar_search">
							<input type="search" id="search">
							<div class="header-sidebar_search_icon"><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/sear.png" alt="" /></a></div>
						</div>
						<div class="header-sidebar_contact">
							<a href="#"><p>Контакти</p></a>
						</div>
					</div>
						<div id="particle-canvas"></div>
				</div>
			</div>
		</header>
		