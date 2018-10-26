<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
<<<<<<< HEAD:root/template-parts/content-page.php
				'before' => '<div class="page-links">' . __( 'Pages:', '{%= prefix %}' ),
=======
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
>>>>>>> WebDevStudios/master:template-parts/content-page.php
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

<<<<<<< HEAD:root/template-parts/content-page.php
	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', '{%= prefix %}' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
=======
	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', '_s' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
>>>>>>> WebDevStudios/master:template-parts/content-page.php
</article><!-- #post-## -->
