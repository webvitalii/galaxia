
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php the_custom_logo();  ?>
            <h3 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h3>
			<?php
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
                <h4 class="site-description"><?php echo $description; ?></h4>
			<?php endif; ?>
		</div><!-- .site-branding -->

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
	</header><!-- #masthead .site-header -->
