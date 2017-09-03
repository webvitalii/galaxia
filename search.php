<?php get_header(); ?>

<?php get_template_part( 'template-parts/wrap-content-sidebar', 'before' ); ?>
<?php get_template_part( 'template-parts/wrap-content', 'before' ); ?>

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'galaxia' ), '<span>' . get_search_query() . '</span>' );
				?></h1>
			</header><!-- .page-header -->

			<?php
			while ( have_posts() ) : the_post(); // the loop

				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

<?php get_template_part( 'template-parts/wrap-content', 'after' ); ?>
<?php get_sidebar(); ?>
<?php get_template_part( 'template-parts/wrap-content-sidebar', 'after' ); ?>
<?php get_footer();