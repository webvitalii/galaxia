
	<footer id="colophon" class="site-footer">
		<div class="row">
            <div class="site-footer-widgets col-sm-9">
	            <?php //dynamic_sidebar( 'footer-1' ); ?>
	            <?php if ( ! dynamic_sidebar( 'footer-1' ) ) : // footer widgetized area ?>
                    <p>Copyright
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		                <?php echo date('Y'); ?></p>
                <?php endif; // end of the widgetized area ?>
            </div>
            <div class="site-footer-info col-sm-3">
	            <?php _e( 'Powered by', 'galaxia' ); ?>
                <a href="http://wordpress.org/" title="<?php _e( 'WordPress CMS', 'galaxia' ); ?>" target="_blank"><?php _e( 'WordPress', 'galaxia' ); ?></a>
	            <?php _e( '&', 'galaxia' ); ?>
                <a href="http://codecraft.universio.net/" title="<?php _e( 'Galaxia WordPress theme', 'galaxia' ); ?>" target="_blank"><?php _e( 'Galaxia', 'galaxia' ); ?></a>
            </div>
        </div>
	</footer><!-- #colophon .site-footer -->

</div><!-- .container-fluid .site-container -->
</div><!-- #page .site -->

<?php wp_footer(); ?>

</body>
</html>