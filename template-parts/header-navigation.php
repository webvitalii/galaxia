
		<nav id="site-navigation" class="main-navigation">
			<!--<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php /*esc_html_e( 'Primary Menu', 'galaxia' ); */?></button>-->
			<div class="site-menu site-menu-dark bg-dark">
            <?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id' => 'primary-menu',
				) );
			?>
            </div><!-- .site-menu -->
		</nav><!-- #site-navigation .main-navigation -->
