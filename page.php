<?php get_header(); ?>

	<div id="primary" class="content-area fx-col-sm-9">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post(); // the loop

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
