<?php
/*
Template Name: Redirect to first subpage
*/

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		$subpages_args = array(
			'sort_column'  => 'menu_order, post_title',
			'child_of' => $post->ID
		);
		$subpages = get_pages( $subpages_args );
		if ( $subpages ) {
			$first_subpage = $subpages[0];
			wp_redirect( get_permalink( $first_subpage->ID ) );
		}
	}
}

// there is no subpages, so lets show the content of the current page
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
<?php get_sidebar(); ?>
<?php get_template_part( 'template-parts/wrap-content-sidebar', 'after' ); ?>
<?php get_footer();