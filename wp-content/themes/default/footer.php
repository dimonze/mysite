<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage default
 * @since default 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'default_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'default' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'default' ); ?>"><?php printf( __( 'Proudly powered by %s', 'default' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>