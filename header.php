<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ahj-engineering
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="menu" class="menu slideout-menu slideout-menu-right">

		<nav id="site-navigation" class="nav" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</div>
<div id="page" class="site">
<<<<<<< HEAD
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ahj-engineering' ); ?></a>
=======
	<div id="panel">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'paper-anchor' ); ?></a>
>>>>>>> origin/dev-drew

	<header id="header" class="header" role="banner">
		<div class="masthead">
		<div class="brand">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title">
					<?php
						$logo = get_option('logo');
					?>
					<?php if ( !empty($logo) )  : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" rel="home">
							<img src="<?php echo esc_attr( $logo ); ?>" alt="<?php bloginfo( 'name' ); ?>">
						</a>
					<?php else : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="no-logo" rel="home">
							<?php bloginfo( 'name' ); ?>
						</a>
					<?php endif; ?>
				</h1>
			<?php else : ?>
				<h1 class="site-title">
					<?php
						$logo = get_option('logo');
					?>
					<?php if ( !empty($logo) )  : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" rel="home">
							<img src="<?php echo esc_attr( $logo ); ?>" alt="<?php bloginfo( 'name' ); ?>">
						</a>
					<?php else : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="no-logo" rel="home">
							<?php bloginfo( 'name' ); ?>
						</a>
					<?php endif; ?>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div>
	<!-- .brand -->
<<<<<<< HEAD
	<div class="nav-container">
		<nav id="site-navigation" class="nav" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'ahj-engineering' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</div>
=======
	<button class="slideout-toggle">Menu</button>
>>>>>>> origin/dev-drew
	</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
