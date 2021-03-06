<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package {%= prefix %}
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 */

get_header(); ?>

	<div class="primary content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
<<<<<<< HEAD:root/404.php
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', '{%= prefix %}' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', '{%= prefix %}' ); ?></p>
					<?php get{%= prefix %}earch_form(); ?>

					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<?php if ( {%= prefix %}_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', '{%= prefix %}' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif; ?>

					<?php
						/* translators: %1$s: smiley */
						$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', '{%= prefix %}' ), convert{%= prefix %}milies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					?>

					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
=======
					<h1 class="page-title"><?php esc_html_e( 'Sorry, this page doesn\'t exist.', '_s' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">

					<p><?php esc_html_e( 'It seems we can’t find what you’re looking for. Perhaps searching can help.', '_s' ); ?></p>

					<?php get_search_form(); ?>
>>>>>>> WebDevStudios/master:404.php

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- .primary -->

<?php get_footer(); ?>
