<?php get_header(); ?>

<?php get_template_part( 'template-parts/wrap-content', 'before' ); ?>

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'The page can not be found', 'galaxia' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">

					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe searching can help.', 'galaxia' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

<?php get_template_part( 'template-parts/wrap-content', 'after' ); ?>

<?php get_sidebar(); ?>
<?php get_footer();