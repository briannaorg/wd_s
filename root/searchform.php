<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Search for:', '{%= prefix %}' ) ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', '{%= prefix %}' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search...', '{%= prefix %}' ) ?>" />
	</label>
	<button aria-label="search">
		<?php {%= prefix %}_do_svg( 'search' ); ?>
	</button>
</form>
