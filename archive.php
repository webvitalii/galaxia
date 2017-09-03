<?php get_header(); ?>

<?php get_template_part( 'template-parts/wrap-content-sidebar', 'before' ); ?>
<?php get_template_part( 'template-parts/wrap-content', 'before' ); ?>

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			while ( have_posts() ) : the_post(); // the loop

				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

<?php get_template_part( 'template-parts/wrap-content', 'after' ); ?>
<?php get_sidebar(); ?>
<?php get_template_part( 'template-parts/wrap-content-sidebar', 'after' ); ?>
<?php get_footer();
