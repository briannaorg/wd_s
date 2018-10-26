<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<section class="no-results not-found">
	<header class="page-header">
<<<<<<< HEAD:root/template-parts/content-none.php
		<h1 class="page-title"><?php _e( 'Nothing Found', '{%= prefix %}' ); ?></h1>
=======
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', '_s' ); ?></h1>
>>>>>>> WebDevStudios/master:template-parts/content-none.php
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
<<<<<<< HEAD:root/template-parts/content-none.php

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', '{%= prefix %}' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', '{%= prefix %}' ); ?></p>
=======
			<p>
			<?php
			printf(
				wp_kses(
					/* translators: the edit post url */
					esc_html__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', '_s' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				),
			esc_url( admin_url( 'post-new.php' ) ) );
			?>
			</p>
		<?php elseif ( is_search() ) : ?>
			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', '_s' ); ?></p>
>>>>>>> WebDevStudios/master:template-parts/content-none.php
			<?php get_search_form(); ?>
		<?php else : ?>
<<<<<<< HEAD:root/template-parts/content-none.php

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', '{%= prefix %}' ); ?></p>
=======
			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', '_s' ); ?></p>
>>>>>>> WebDevStudios/master:template-parts/content-none.php
			<?php get_search_form(); ?>
		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
