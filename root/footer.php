<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package {%= prefix %}
 */

?>

	</div><!-- #content -->

	<footer class="site-footer">

<<<<<<< HEAD:root/footer.php
	<footer id="colophon" class="site-footer">
		<div class="wrap">

			<div class="site-info">
				<?php {%= prefix %}_do_copyright_text(); ?>

			</div><!-- .site-info -->

		</div><!-- .wrap -->
	</footer><!-- #colophon -->
=======
		<div class="site-info">
			<?php _s_display_copyright_text(); ?>
			<?php _s_display_social_network_links(); ?>
		</div><!-- .site-info -->
	</footer><!-- .site-footer container-->
>>>>>>> WebDevStudios/master:footer.php
</div><!-- #page -->

<?php wp_footer(); ?>

<?php _s_display_mobile_menu(); ?>

</body>
</html>
