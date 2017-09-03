
		<nav id="site-navigation" class="main-navigation">
			<!--<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php /*esc_html_e( 'Primary Menu', 'galaxia' ); */?></button>-->
			<div class="fx-menu fx-menu-dark fx-bg-gray-darkest">
            <?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id' => 'primary-menu',
				) );
			?>
            </div><!-- .fx-menu -->
		</nav><!-- #site-navigation .main-navigation -->
