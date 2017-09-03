<?php
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area fx-col-sm-3">
	<?php //dynamic_sidebar( 'sidebar-1' ); ?>

	<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : // sidebar right widgetized area ?>
        <section class="widget widget_search">
			<?php get_search_form(); ?>
        </section>

		<?php
		$args = array( // most popular posts ordered by comment count
			'numberposts' => 5,
			'post_status' => 'publish',
			'post_type' => 'post',
			'orderby' => 'comment_count',
			'order' => 'desc'
		);
		$popular_posts = get_posts( $args );
		if( ! empty( $popular_posts ) ) : // show only if we have posts
			?>
            <section class="widget widget_popular_entries">
                <h4 class="widget-title"><?php _e( 'Popular posts', 'galaxia' ); ?></h4>
                <ul>
					<?php
					foreach( $popular_posts as $popular_post ) : setup_postdata( $popular_post );
						echo '<li><a href="' . esc_url( get_page_link( $popular_post->ID ) ) . '">' . $popular_post->post_title . '</a></li>';
					endforeach; ?>
                </ul>
            </section>
		<?php endif; ?>

		<?php
		$args = array( // most recent posts ordered by publish date
			'numberposts' => 5,
			'post_status' => 'publish',
			'post_type' => 'post',
			'orderby' => 'post_date',
			'order' => 'desc'
		);
		$recent_posts = get_posts( $args );
		if( ! empty( $recent_posts ) ) : // show only if we have posts
			?>
            <section class="widget widget_recent_entries">
                <h4 class="widget-title"><?php _e( 'Recent posts', 'galaxia' ); ?></h4>
                <ul>
					<?php
					foreach( $recent_posts as $recent_post ) : setup_postdata( $recent_post );
						echo '<li><a href="' . esc_url( get_page_link( $recent_post->ID ) ) . '">' . $recent_post->post_title . '</a></li>';
					endforeach; ?>
                </ul>
            </section>
		<?php endif; ?>

        <section class="widget widget_categories">
            <h4 class="widget-title"><?php _e( 'Categories', 'galaxia' ); ?></h4>
            <ul>
				<?php
				$cat_args = array(
					'show_option_all' => '',
					'orderby' => 'name',
					'order' => 'ASC',
					'style' => 'list',
					'show_count' => 1,
					'hide_empty' => 1,
					'use_desc_for_title' => 1,
					'child_of' => 0,
					'hierarchical' => 1,
					'title_li' => '',
					'number' => null,
					'depth' => 0,
				);
				wp_list_categories( $cat_args ); // http://codex.wordpress.org/Template_Tags/wp_list_categories
				?>
            </ul>
        </section>

        <section class="widget widget_meta">
            <h4 class="widget-title"><?php _e( 'Meta', 'galaxia' ); ?></h4>
            <ul>
				<?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
            </ul>
        </section>

	<?php endif; // end of the widgetized area ?>
</aside><!-- #secondary .widget-area -->
