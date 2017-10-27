


	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'galaxia' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'galaxia' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'galaxia' ), 'galaxia', '<a href="http://codecraft.universio.net/">webvitaly</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- .container-fluid .site-container -->
</div><!-- #page .site -->

<?php wp_footer(); ?>

</body>
</html>