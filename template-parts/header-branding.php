
		<div class="site-branding">
			<?php the_custom_logo();  ?>
            <h3 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h3>
			<?php
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
                <h5 class="site-description"><?php echo $description; ?></h5>
			<?php endif; ?>
		</div><!-- .site-branding -->
