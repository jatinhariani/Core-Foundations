<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Core Foundations
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer row" role="contentinfo">
		<div class="site-info large-12 text-center">
			<?php do_action( 'core_foundations_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'core_foundations' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'core_foundations' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'core_foundations' ), 'Core Foundations', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>