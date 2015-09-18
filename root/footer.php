<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package {%= prefix %}
 */
?>

	</div><!-- #content -->

	<div class="footer-area">
		<?php wds_page_builder_area( 'after_content' ); ?>
	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrap">

			<div class="site-info">
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', '{%= prefix %}' ) ); ?>"><?php printf( __( 'Proudly powered by %s', '{%= prefix %}' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', '{%= prefix %}' ), '{%= prefix %}', '<a href="http://automattic.com/" rel="designer">Automattic</a>' ); ?>
			</div><!-- .site-info -->

			<?php _s_do_social_icons(); ?>

		</div><!-- .wrap -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
