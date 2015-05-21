<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage braces
 * @author Oomph, Inc.
 * @link http://www.oomphinc.com
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php if ( defined( 'WPCOM_IS_VIP_ENV' ) && true === WPCOM_IS_VIP_ENV ) {
				echo vip_powered_wpcom( 4 );
			} else { ?>
				<p class="attribution">&copy; <?php echo date( 'Y' ); ?> <a href="<?php esc_url( __( 'http://www.oomphinc.com', 'braces' ) ); ?>"><?php esc_html__( 'Oomph, Inc.', 'braces' ); ?></a></p>
			<?php } ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>