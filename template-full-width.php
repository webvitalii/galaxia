<?php
/*
Template Name: Full width (without sidebar)
*/

get_header(); ?>

<?php get_template_part( 'template-parts/wrap-content-sidebar', 'before' ); ?>
<?php get_template_part( 'template-parts/wrap-content', 'before' ); ?>

			<?php
			while ( have_posts() ) : the_post(); // the loop

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile;
			?>

<?php get_template_part( 'template-parts/wrap-content', 'after' ); ?>
<?php get_template_part( 'template-parts/wrap-content-sidebar', 'after' ); ?>
<?php get_footer();