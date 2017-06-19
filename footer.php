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
				<div class="footer-item">&copy; AHJ Engineers, PC</div>
				<div class="footer-item">5418 N. Eagle Road #140 Boise, ID 83713</div>
				<div class="footer-item"><a href="tel:208.323.0199">208.323.0199</a></div>
				<div class="footer-item"><a href="mailto:ahj@ahjengineers.com">ahj@ahjengineers.com</a></div>
		</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
