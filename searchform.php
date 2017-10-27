<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" role="search">
	<div class="input-group">
		<input type="search" value="<?php echo esc_attr( get_search_query() ); ?>" class="form-control" name="s" />
		<span class="input-group-btn">
			<button type="submit" class="btn btn-secondary">
				<?php echo esc_attr( __( 'Search', 'galaxia' ) ); ?>
			</button>
		</span>
	</div>
</form>