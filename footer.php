<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ahj-engineering
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<nav class="footer-menu">
			<?php wp_nav_menu( array( 'theme_location' => 'menu-2', 'menu_id' => 'footer-menu' ) ); ?>
		</nav>
		<div class="site-info">
			<div class="copyright">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ahj-engineering' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'ahj-engineering' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'ahj-engineering' ), 'ahj-engineering', '<a href="https://automattic.com/" rel="designer">Underscores.me</a>' ); ?>
		</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
