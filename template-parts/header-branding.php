
		<div class="galaxia-header__branding media">
			<?php 
			if ( has_custom_logo() ) {
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$custom_logo_image = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
					'class' => 'galaxia-header__logo-image',
				) );
				echo '<a class="galaxia-header__logo" href="'.esc_url( home_url( '/' ) ).'">'.$custom_logo_image.'</a>';
			}
			?>
			<div class="media-body">
				<h3 class="galaxia-header__title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h3>
				<?php
				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<h5 class="galaxia-header__description"><?php echo $description; ?></h5>
				<?php endif; ?>
			</div>
		</div><!-- .galaxia-header__branding -->
