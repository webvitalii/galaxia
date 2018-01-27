<?php
$galaxia_theme = wp_get_theme();
?>
	<footer id="colophon" class="galaxia-footer">
		<div class="row">
            <div class="galaxia-footer__widgets col-sm-9">
	            <?php //dynamic_sidebar( 'footer-1' ); ?>
	            <?php if ( ! dynamic_sidebar( 'footer-1' ) ) : // footer widgetized area ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		            <?php echo date_i18n( __( 'Y', 'galaxia' ) ); ?>
                <?php endif; // end of the widgetized area ?>
            </div>
            <div class="galaxia-footer__info col-sm-3">
	            <?php _e( 'Powered by', 'galaxia' ); ?>
                <a href="http://wordpress.org/" title="<?php echo esc_attr( __( 'WordPress CMS', 'galaxia' ) ); ?>" target="_blank"><?php _e( 'WordPress', 'galaxia' ); ?></a>
	            <?php _e( '&', 'galaxia' ); ?>
                <a href="<?php echo $galaxia_theme->get( 'ThemeURI' ); ?>" title="<?php echo esc_attr( __( 'Galaxia WordPress theme', 'galaxia' ) ); ?>" target="_blank"><?php _e( 'Galaxia', 'galaxia' ); ?></a>
            </div>
        </div>
	</footer><!-- #colophon .galaxia-footer -->

</div><!-- .container-fluid .galaxia-container -->
</div><!-- #page .galaxia-wrap -->

<?php wp_footer(); ?>

</body>
</html>