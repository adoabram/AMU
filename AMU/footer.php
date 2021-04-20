<div class="main_map">
				<div class="main_map_map"><img src="<?php bloginfo('template_directory') ?>/assets/images/map_bg.png"></div>
				<h4>Карта членів асоціації області</h4>
				<div class="map-price">
					<div class="map-price_wrap">
						<div class="map-price_sq"></div>
						<div class="map-price_price"><p>В асоціації</p></div>
					</div>
					<div class="map-price_wrap">
						<div class="map-price_sq2"></div>
						<div class="map-price_price"><p>Не в асоціації</p></div>
					</div>
				</div>
			</div>
			
			<div class="main_links">
				<?php 
				    wp_nav_menu(array(
						'theme_location' => 'bottom',
								'container' => null,
								'items_wrap' => '<ul>%3$s</ul>'
						));
				?>
			</div>
		
										
											
		<footer>
			<section class="canvas-wrap">
				<div class="canvas-content">
					<div class="footer_copi">
						<p>2018 &copy; Асоціація міст України. Дніпропетровська область.</p>
					</div>
					<div class="footer_img">
						<p><img src="<?php bloginfo('template_directory') ?>/assets/images/Kompany.jpg"></p>
					</div>
					<div class="footer_social">
						<div class="header-sidebar_social_facebook"><a href="#"><span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </span></a></div>
						<div class="header-sidebar_social_instagram"><a href="#"><span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </span></a></div>
						<div class="header-sidebar_social_youtube"><a href="#"><span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </span></a></div>
					</div>
					</div>
					<div id="canvas" ></div>
				</section>
		</footer>
		
		 <script src='https://rawgit.com/JulianLaval/canvas-particle-network/master/particle-network.min.js'></script>

		<script  src="<?php bloginfo('template_directory') ?>/assets/js/index.js"></script>
			
		 <!-- Main library -->
        <script src="<?php bloginfo('template_directory') ?>/assets/js/three.min.js"></script>
	      
        <!-- Helpers -->
        <script src="<?php bloginfo('template_directory') ?>/assets/js/projector.js"></script>
        <script src="<?php bloginfo('template_directory') ?>/assets/js/canvas-renderer.js"></script>

        <!-- Visualitzation adjustments -->
        <script src="<?php bloginfo('template_directory') ?>/assets/js/3d-lines-animation.js"></script>

    </body>
</html>