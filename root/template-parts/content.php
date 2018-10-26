<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<article <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		if ( 'post' === get_post_type() ) :
		?>
		<div class="entry-meta">
			<?php {%= prefix %}_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
<<<<<<< HEAD:root/template-parts/content.php
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', '{%= prefix %}' ),
=======
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', '_s' ), array(
					'span' => array(
						'class' => array(),
					),
				) ),
>>>>>>> WebDevStudios/master:template-parts/content.php
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
<<<<<<< HEAD:root/template-parts/content.php
				'before' => '<div class="page-links">' . __( 'Pages:', '{%= prefix %}' ),
=======
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
>>>>>>> WebDevStudios/master:template-parts/content.php
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php {%= prefix %}_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
