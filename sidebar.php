<?php
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area fx-col-sm-3">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary .widget-area -->
