<?php get_header(); ?>

<?php get_template_part( 'template-parts/wrap-content-sidebar', 'before' ); ?>
<?php get_template_part( 'template-parts/wrap-content', 'before' ); ?>

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php
			endif;

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